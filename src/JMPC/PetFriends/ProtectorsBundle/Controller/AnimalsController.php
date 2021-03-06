<?php

/**********************************************************************/
/*         Controlador CRUD Entidad Animal                            */
/*         Permite al administador crear, borrar, modificar y listar  */
/*         objetos de la Entidad Animal                               */ 
/*                                                                    */                             
/**********************************************************************/

/**
 * Description of AnimalsController
 *
 * @author checo
 */

namespace JMPC\PetFriends\ProtectorsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use JMPC\PetFriends\ProtectorsBundle\Entity\Animal;
use JMPC\PetFriends\ProtectorsBundle\Form\AnimalType;
use Doctrine\ORM\AbstractQuery;
use SimpleImage; //Script PHP para redimensionar imagenes

class AnimalsController extends Controller 
{
    /** 
    * Listado completo de la Entidad Animal
    * Recibe $tipo para determinar la especie
    **/
    public function listAction($tipo) 
    {
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();
        $animales = $em->getRepository('JMPCPetFriendsProtectorsBundle:Animal');
       
        if ($tipo === 'listado') {
            $consulta = $em->createQuery("SELECT a FROM JMPC\PetFriends\ProtectorsBundle\Entity\Animal a");
        }
        else {
            $tipo = substr($tipo, 0, -1);
            $consulta = $em->createQuery("SELECT a FROM JMPC\PetFriends\ProtectorsBundle\Entity\Animal a WHERE a.tipo='$tipo' ORDER BY a.fechaalta DESC");
        }
        
        $animales = $consulta->getResult();

        //Paginacion con KNP Paginator Bundle
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $animales,
                $this->get('request')->query->get('page',1),1
                );
        
        // Respuesta AJAX para que la paginacion no recargue la pagina
        if ($request->isXmlHttpRequest()) {
            return $this->render('JMPCPetFriendsProtectorsBundle:Animals:indexAjax.html.twig', array(
                'animals'  => $pagination
            ));
        }
        
        return $this->render('JMPCPetFriendsProtectorsBundle:Animals:index.html.twig', array(
            'animals' => $pagination
        ));
    }
    
    /** 
    * Crea nuevos objetos de la Entidad Animal
    * y los persiste en la BBDD
    **/
    public function newAction() 
    {
        
        $animal = new Animal();
        
        //Crea el Formulario Entidad Animal
        $form = $this->createForm(new AnimalType(), $animal);
        
        $request = $this->getRequest();
        
        // Respuesta AJAX para filtrar las ciudades de cada pais
        if ($request->isXmlHttpRequest()) {
            $pais = $this->getRequest()->request->get('jmpc_petfriends_protectors_animal')['pais'];
            
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

                // Se redimensiona la imagen obtenida para insertarla
                // en el listado y evitar descuadre 
                $imagenLista = new SimpleImage();
                $imagenLista->load($form->get("fotografiaArchivo")->getData());
                $imagenLista->resize(180,200);
                $imagenLista->save("img/lista_".$nombreRealImagen);
                $animal->setFotografia($nombreRealImagen);

                // Se redimensiona la imagen obtenida para insertarla
                // en el carrusel inferior y evitar descuadre 
                $imagenCarrusel = new SimpleImage();
                $imagenCarrusel->load($form->get("fotografiaArchivo")->getData());
                $imagenCarrusel->resize(139,110);
                $imagenCarrusel->save("img/carousel_".$nombreRealImagen);

                $em->persist($animal);
                $em->flush();

                //Mensaje flash de confirmacion
                $this->get('session')->getFlashBag()->set(
                'confirmacion',
                'Entrada creada correctamente'
                );

                //Copia el fichero fisicamente al servidor (web/img)
                $fotografia->move('img/', $nombreRealImagen);
            
                return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_animals_list'));
            }
        }
            
        return $this->render('JMPCPetFriendsProtectorsBundle:Animals:new.html.twig', array(
            'form'   => $form->createView()));
    }
    
    /** 
    * Elimina objetos de la Entidad Animal
    * Recibe $id del objeto que se quiere eliminar
    **/
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $animal = $em->getRepository('JMPCPetFriendsProtectorsBundle:Animal');
        $consulta = $em->createQuery("DELETE JMPC\PetFriends\ProtectorsBundle\Entity\Animal a "
                . "WHERE a.idanimal = '$id'");
        $animal = $consulta->getResult();
        $em->flush();

        //Mensaje flash de confirmacion
        $this->get('session')->getFlashBag()->set(
                'confirmacion',
                'Entrada borrada correctamente'
                );

        return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_animals_list'));
    }
    
    /** 
    * Edita objetos de la Entidad Animal
    * Recibe $id del objeto que se quiere editar
    **/
    public function editAction($id)
    {				
        $em = $this->getDoctrine()->getManager();
        $animal = $em->getRepository('JMPCPetFriendsProtectorsBundle:Animal')->find($id);
        $form = $this->createForm(new AnimalType(), $animal);
        $request = $this->getRequest();
        
        // Respuesta AJAX para filtrar las ciudades de cada pais
        if ($request->isXmlHttpRequest()) {
            $pais = $this->getRequest()->request->get('jmpc_petfriends_protectors_animal')['pais'];
            
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
                    $historia = $form->get("historia")->getData();
                    $chip = $form->get("chip")->getData();
                    $fotografia = $form->get("fotografiaArchivo")->getData();
                    $pais = $form->get("pais")->getData();
                    $ciudad = $form->get("ciudad")->getData();
                    $direccion = $form->get("direccion")->getData();
                    $nombreRealImagen = $fotografia->getClientOriginalName();

                    // Se redimensiona la imagen obtenida para insertarla
                    // en el carrusel inferior y evitar descuadre 
                    $imagenCarrusel = new SimpleImage();
                    $imagenCarrusel->load($form->get("fotografiaArchivo")->getData());
                    $imagenCarrusel->resize(139,110);
                    $imagenCarrusel->save("img/carousel_".$nombreRealImagen);

                    $animal->setFotografia($nombreRealImagen);
                    $em->flush();

                    //Mensaje flash de confirmacion
                    $this->get('session')->getFlashBag()->set(
                    'confirmacion',
                    'Entrada editada correctamente'
                    );

                    //Copia el fichero fisicamente al servidor (web/img)
                    $fotografia->move('img/', $nombreRealImagen);
                    return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_animals_list'));
                }
        }

        return $this->render('JMPCPetFriendsProtectorsBundle:Animals:edit.html.twig', array(
            'id'     => $id,
            'form'   => $form->createView()));
    }

    /** 
    * Muestra cada objeto de la Entidad Animal en su pagina individual
    * Recibe $id del objeto que se quiere mostrar, y $slug con la cadena asociada
    * al campo nombre
    **/
    public function viewAction($id, $slug)
    {
        $em = $this->getDoctrine()->getManager();

        $animal = $em->getRepository('JMPCPetFriendsProtectorsBundle:Animal')->find($id);

        if (!$animal) {
            throw $this->createNotFoundException('No encuentro amigos.');
        }

        return $this->render('JMPCPetFriendsProtectorsBundle:Animals:view.html.twig', array(
            'animal' => $animal
        ));
    }
    
    /** 
    * Listado de la Entidad Adoption
    * Adoption contiene los animales que estan asociados al usuario
    * que lo adopta
    **/
    public function adoptedAction()
    {
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();
        $adoptados = $em->getRepository('JMPCPetFriendsProtectorsBundle:Adoption');
       
        $consulta = $em->createQuery("SELECT a FROM JMPC\PetFriends\ProtectorsBundle\Entity\Adoption a");
        
        $adoptados = $consulta->getResult();

        //Paginacion con KNP Paginator Bundle
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $adoptados,
                $this->get('request')->query->get('page',1),1
                );

        // Respuesta AJAX para que la paginacion no recargue la pagina
        if ($request->isXmlHttpRequest()) {
            return $this->render('JMPCPetFriendsProtectorsBundle:Adopted:indexAjax.html.twig', array(
                'adopteds'  => $pagination
            ));
        }
        
        return $this->render('JMPCPetFriendsProtectorsBundle:Adopted:index.html.twig', array(
            'adopteds' => $pagination
        ));
    }

    /** 
    * Listado lateral de Entidad Post
    * Muestra las ultimas cuatro entradas del blog del sitio web
    * en varias zonas del sitio web
    **/
    public function lateralAction()
    {
        $em = $this->getDoctrine()->getManager();

        $postLimit = 4;
        $consulta = $em->createQuery("SELECT p FROM JMPC\PetFriends\ProtectorsBundle\Entity\Post p ORDER BY p.creado DESC")
                    ->setMaxResults($postLimit);
        
        $latestPosts = $consulta->getResult();

        return $this->render('JMPCPetFriendsProtectorsBundle:Animals:lateral.html.twig', array(
            'latestPosts'    => $latestPosts
        ));
    }
    
}
