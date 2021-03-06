<?php

/***********************************************************/
/*         Controlador CRUD Entidad AnimalLost             */
/*         Permite al administador / usuario registrado    */
/*         crear, borrar, modificar y listar               */
/*         objetos de la Entidad AnimalLost                */
/*                                                         */                                         
/***********************************************************/

/**
 * Description of LostController
 *
 * @author checo
 */

namespace JMPC\PetFriends\ProtectorsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMPC\PetFriends\ProtectorsBundle\Entity\AnimalLost;
use JMPC\PetFriends\ProtectorsBundle\Form\LostType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use SimpleImage; //Script PHP para redimensionar imagenes


class LostController extends Controller 
{
     /** 
    * Listado completo de la Entidad AnimalLost
    **/
    public function listAction() 
    {
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        $perdidos = $em->getRepository('JMPCPetFriendsProtectorsBundle:AnimalLost');
       
        $consulta = $em->createQuery("SELECT l FROM JMPC\PetFriends\ProtectorsBundle\Entity\AnimalLost l WHERE l.encontrado='false' ORDER BY l.fechaperdida DESC");
        
        $perdidos = $consulta->getResult();

        //Paginacion con KNP Paginator Bundle
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $perdidos,
                $this->get('request')->query->get('page',1),1
                );

        // Respuesta AJAX para que la paginacion no recargue la pagina
        if ($request->isXmlHttpRequest()) {
            return $this->render('JMPCPetFriendsProtectorsBundle:Lost:indexAjax.html.twig', array(
                'losts'  => $pagination
            ));
        }
        
        return $this->render('JMPCPetFriendsProtectorsBundle:Lost:index.html.twig', array(
            'losts' => $pagination
        ));
    }
    
     /** 
    * Crea nuevos objetos de la Entidad AnimalLost
    * y los persiste en la BBDD
    **/
    public function newAction() 
    {
        $perdido = new AnimalLost();
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        
        //Crea el Formulario Entidad AnimalLost
        $form = $this->createForm(new LostType($idusuario), $perdido);
        
        $request = $this->getRequest();
        
        // Respuesta AJAX para filtrar las ciudades de cada pais
        if ($request->isXmlHttpRequest()) {
            $pais = $this->getRequest()->request->get('jmpc_petfriends_protectors_lost')['pais'];
            
            $em = $this->getDoctrine()->getManager();
            $consulta = $em->createQuery("SELECT p FROM JMPC\PetFriends\ProtectorsBundle\Entity\Province p WHERE p.pais_ciudad = '$pais' ORDER BY p.ciudad ASC");
            $provincias = $consulta->getArrayResult();
            
            $response = new Response(json_encode(array('ciudades' => $provincias)));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }

        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            
            if($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $fotografia = $form->get("fotografiaArchivo")->getData();
                $nombreRealImagen = $fotografia->getClientOriginalName();
                $perdido->setFotografia($nombreRealImagen);

                // Se redimensiona la imagen obtenida para insertarla
                // en el listado y evitar descuadre 
                $imagenLista = new SimpleImage();
                $imagenLista->load($form->get("fotografiaArchivo")->getData());
                $imagenLista->resize(180,200);
                $imagenLista->save("img/lista_".$nombreRealImagen);

                $em->persist($perdido);
                $em->flush();

                //Mensaje de confirmacion
                $this->get('session')->getFlashBag()->set(
                    'confirmacion',
                    'Entrada creada correctamente'
                );

                //Copia el fichero fisicamente al servidor (web/img)
                $fotografia->move('img/', $nombreRealImagen);
                return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_lost'));
            }
        }
            
        return $this->render('JMPCPetFriendsProtectorsBundle:Lost:new.html.twig', array(
            'form'   => $form->createView()));
    }
    
    /** 
    * Elimina objetos de la Entidad AnimalLost
    * Recibe $id del objeto que se quiere eliminar
    **/
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $perdido = $em->getRepository('JMPCPetFriendsProtectorsBundle:AnimalLost');
        $consulta = $em->createQuery("DELETE JMPC\PetFriends\ProtectorsBundle\Entity\AnimalLost l "
                . "WHERE l.idanimalperdido = '$id'");
        $perdido = $consulta->getResult();
        $em->flush();

        //Mensaje flash de confirmacion
        $this->get('session')->getFlashBag()->set(
            'confirmacion',
            'Entrada borrada correctamente'
        );

        return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_lost'));
    }
    
    /** 
    * Edita objetos de la Entidad AnimalLost
    * Recibe $id del objeto que se quiere editar
    **/
    public function editAction($id)
    {				
        $em = $this->getDoctrine()->getManager();
        $perdido = $em->getRepository('JMPCPetFriendsProtectorsBundle:AnimalLost')->find($id);
        $idusuario = $this->get('security.context')->getToken()->getUser()->getId();
        $consulta = $em->createQuery("SELECT l FROM JMPC\PetFriends\ProtectorsBundle\Entity\AnimalLost l WHERE l.idusuariomascperd = $idusuario");
        $idusuariomascperd = $consulta->getResult();

        $form = $this->createForm(new LostType($idusuario), $perdido);

        //Filtro para determinar que es el usuario propietario de esta entrada
        //O es el administrador
        if (count($idusuariomascperd) == 0) {
            $mensaje = "El nombre de usuario no coincide con el de ésta entrada";
            return $this->render('JMPCPetFriendsProtectorsBundle:Lost:edit.html.twig', array(
            'id'     => $id,
            'message' => $mensaje,
            'form'   => $form->createView()));
        }

        $request = $this->getRequest();

        // Respuesta AJAX para filtrar las ciudades de cada pais
        if ($request->isXmlHttpRequest()) {
            $pais = $this->getRequest()->request->get('jmpc_petfriends_protectors_lost')['pais'];
            
            $em = $this->getDoctrine()->getManager();
            $consulta = $em->createQuery("SELECT p FROM JMPC\PetFriends\ProtectorsBundle\Entity\Province p WHERE p.pais_ciudad = '$pais' ORDER BY p.ciudad ASC");
            $provincias = $consulta->getArrayResult();
            
            $response = new Response(json_encode(array('ciudades' => $provincias)));
            $response->headers->set('Content-Type', 'application/json');
            return $response;
        }

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if($form->isValid()) {
                $nombre = $form->get("nombre")->getData();
                $tipo = $form->get("tipo")->getData();
                $raza = $form->get("raza")->getData();
                $tamano = $form->get("tamano")->getData();
                $sexo = $form->get("sexo")->getData();
                $color = $form->get("color")->getData();
                $comportamiento = $form->get("comportamiento")->getData();
                $mensaje = $form->get("mensaje")->getData();
                $chip = $form->get("chip")->getData();
                $fotografia = $form->get("fotografiaArchivo")->getData();
                $encontrado = 0;
                $nombreRealImagen = $fotografia->getClientOriginalName();

                $perdido->setFotografia($nombreRealImagen);
                $em->persist($perdido);
                $em->flush();

                //Mensaje flash de confirmacion
                $this->get('session')->getFlashBag()->set(
                    'confirmacion',
                    'Entrada editada correctamente'
                );

                //Copia el fichero fisicamente al servidor (web/img)
                $fotografia->move('img/', $nombreRealImagen);
                return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_lost'));
            }
        }

        return $this->render('JMPCPetFriendsProtectorsBundle:Lost:edit.html.twig', array(
            'id'     => $id,
            'message'=> null,
            'form'   => $form->createView()));
    }
    
    /** 
    * Muestra cada objeto de la Entidad AnimalLost en su pagina individual
    * Recibe $id del objeto que se quiere mostrar, y $slug con la cadena asociada
    * al campo nombre.
    * Crea un formulario básico para que el usuario registrado contacte con el
    * administrador si conoce el paradero del animal perdido
    **/
    public function viewAction($id, $slug)
    {
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();

        $perdido = $em->getRepository('JMPCPetFriendsProtectorsBundle:AnimalLost')->find($id);

        if (!$perdido) {
            throw $this->createNotFoundException('No hay mascotas perdidas con ese nombre.');
        }
        
        //Filtro para rellenar los campos del formulario con los datos del usuario logueado
        if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $usuario = "";
            $email = "";
        }
        else {
            $usuario = $this->get('security.context')->getToken()->getUser()->getUsername();
            $email = $this->get('security.context')->getToken()->getUser()->getEmail();
        }

        $formulario = array();
        $form = $this->createFormBuilder($formulario)
            ->add('usuario', 'text', array(
                  'read_only' => true,
                  'attr' => array('value' => $usuario)))
            ->add('email', 'email', array(
                  'read_only' => true,
                  'attr' => array('value' => $email)))
            ->add('mensaje', 'textarea', array(
                  'attr' => array('placeholder' => 'Escribe aqui...')))
            ->add('Enviar', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $mensaje = $form->get('mensaje')->getData();
            $perdido_nombre = $perdido->getNombre();

            //Creacion y envio de email al administrador con los datos del usuario
            $message = \Swift_Message::newInstance()
            ->setSubject('Nuevo mensaje mascota encontrada')
            ->setFrom($email)
            ->setTo('jp.ciphron@gmail.com')
            ->setBody('El usuario '.$usuario.' con email '.$email.' tiene noticias acerca del animal perdido con id = '.$id.' llamado '.$perdido_nombre. '. Mensaje: '.$mensaje);
            $this->get('mailer')->send($message);
            
            //Mensaje flash de confirmacion 
            $this->get('session')->getFlashBag()->set(
                'confirmacion',
                'Mensaje enviado correctamente'
            );

            return $this->render('JMPCPetFriendsProtectorsBundle:Lost:view.html.twig', array(
                'lost'      => $perdido,
                'form'      => $form->createView()));
        }
        

        return $this->render('JMPCPetFriendsProtectorsBundle:Lost:view.html.twig', array(
            'lost'      => $perdido,
            'form'      => $form->createView()));
    }
}
