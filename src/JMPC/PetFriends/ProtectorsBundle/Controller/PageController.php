<?php

/***********************************************************/
/*         Controlador principal del sitio web             */
/*         y para CRUD Entidad Post                        */
/*         Permite al administador                         */
/*         crear, borrar, modificar y listar               */
/*         objetos de la Entidad Post                      */
/*                                                         */                                        
/***********************************************************/

/**
 * Description of PageController
 *
 * @author checo
 */

namespace JMPC\PetFriends\ProtectorsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use JMPC\PetFriends\ProtectorsBundle\Entity\Post;
use JMPC\PetFriends\ProtectorsBundle\Entity\Contact;
use JMPC\PetFriends\ProtectorsBundle\Form\ContactType;
use JMPC\PetFriends\ProtectorsBundle\Form\PostType;
use SimpleImage; //Script PHP para redimensionar imagenes


class PageController extends Controller 
{
    
    /** 
    * Listado completo de la Entidad Post
    **/
    public function indexAction()
    {   
        $request = $this->getRequest();

        $em = $this->getDoctrine()->getManager();
        $entradas = $em->getRepository('JMPCPetFriendsProtectorsBundle:Post');
        
        $consulta = $em->createQuery("SELECT p, COUNT(c.id) as cuenta FROM JMPC\PetFriends\ProtectorsBundle\Entity\Post p LEFT JOIN p.comentarios c
         GROUP BY p.id ORDER BY p.creado DESC");
        $entradas = $consulta->getResult();
        
        //Paginacion con KNP Paginator Bundle
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entradas,
                $this->get('request')->query->get('page',1),1
                );
        
        // Respuesta AJAX para que la paginacion no recargue la pagina
        if ($request->isXmlHttpRequest()) {

            return $this->render('JMPCPetFriendsProtectorsBundle:Page:indexAjax.html.twig', array(
                'posts'  => $pagination
            ));
        }
        
        return $this->render('JMPCPetFriendsProtectorsBundle:Page:index.html.twig', array(
            'posts' => $pagination
        ));
    }
    
    /** 
    * Crea nuevos objetos de la Entidad Post
    * y los persiste en la BBDD
    **/
    public function newAction() 
    {
        
        //Almacena el nombre del administrador para mostrarlo en el campo autor
        if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $autor = "";
        }
        else {
            $autor = $this->get('security.context')->getToken()->getUser()->getUsername();
        }

        $entrada = new Post();
        
        //Crea el Formulario Entidad Post
        $form = $this->createForm(new PostType($autor), $entrada);
        
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            
            if($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $imagen = $form->get("imagenArchivo")->getData();
                $nombreRealImagen = $imagen->getClientOriginalName();

                // Se redimensiona la imagen obtenida para insertarla
                // en el listado y evitar descuadre 
                $imagenLista = new SimpleImage();
                $imagenLista->load($form->get("imagenArchivo")->getData());
                $imagenLista->resize(180,200);
                $imagenLista->save("img/lista_".$nombreRealImagen);

                $entrada->setImagen($nombreRealImagen);
                $em->persist($entrada);
                $em->flush();

                //Mensaje flash de confirmacion
                $this->get('session')->getFlashBag()->set(
                'confirmacion',
                'Entrada creada correctamente'
                );

                //Copia el fichero fisicamente al servidor (web/img)
                $imagen->move('img/', $nombreRealImagen);
                return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_homepage'));
            }
        }
            
        return $this->render('JMPCPetFriendsProtectorsBundle:Page:new.html.twig', array(
            'form'   => $form->createView()));
    }
    
    /** 
    * Elimina objetos de la Entidad Post
    * Recibe $id del objeto que se quiere eliminar
    **/
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entrada = $em->getRepository('JMPCPetFriendsProtectorsBundle:Post');
        $consulta = $em->createQuery("DELETE JMPC\PetFriends\ProtectorsBundle\Entity\Post p "
                . "WHERE p.id = '$id'");
        $entrada = $consulta->getResult();
        $em->flush();

        //Mensaje flash de confirmacion
        $this->get('session')->getFlashBag()->set(
                'confirmacion',
                'Entrada borrada correctamente'
                );

        return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_homepage'));
    }
    
    /** 
    * Edita objetos de la Entidad Post
    * Recibe $id del objeto que se quiere editar
    **/
    public function editAction($id)
    {				
        $em = $this->getDoctrine()->getManager();
        $entrada = $em->getRepository('JMPCPetFriendsProtectorsBundle:Post')->find($id);
        
        //Almacena el nombre del administrador para mostrarlo en el campo autor
        if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $autor = "";
        }
        else {
            $autor = $this->get('security.context')->getToken()->getUser()->getUsername();
        }
        
        //Crea el Formulario Entidad Post
        $form = $this->createForm(new PostType($autor), $entrada);
        $request = $this->getRequest();
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if($form->isValid()) {

                $titulo = $form->get("titulo")->getData();
                $autor = $form->get("autor")->getData();
                $contenido = $form->get("contenido")->getData();
                $tags = $form->get("tags")->getData();
                $imagen = $form->get("imagenArchivo")->getData();
                $nombreRealImagen = $imagen->getClientOriginalName();

                // Se redimensiona la imagen obtenida para insertarla
                // en el listado y evitar descuadre 
                $imagenLista = new SimpleImage();
                $imagenLista->load($form->get("imagenArchivo")->getData());
                $imagenLista->resize(180,200);
                $imagenLista->save("img/lista_".$nombreRealImagen);

                
                $entrada->setImagen($nombreRealImagen);
                $em->persist($entrada);

                $em->flush();

                //Mensaje flash de confirmacion
                $this->get('session')->getFlashBag()->set(
                        'confirmacion',
                        'Entrada editada correctamente'
                        );
            
                //Copia el fichero fisicamente al servidor (web/img)
                $imagen->move('img/', $nombreRealImagen);
                return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_homepage'));
            }
        }

        return $this->render('JMPCPetFriendsProtectorsBundle:Page:edit.html.twig', array(
            'id'     => $id,
            'form'   => $form->createView()));
    }
    
    /** 
    * Muestra cada objeto de la Entidad Post en su pagina individual
    * junto con sus comentarios asociados
    * Recibe $id del objeto que se quiere mostrar, y $slug con la cadena asociada
    * al campo titulo
    **/
    public function listAction($id, $slug)
    {
        $request = $this->getRequest();
        
        $em = $this->getDoctrine()->getManager();

        $entrada = $em->getRepository('JMPCPetFriendsProtectorsBundle:Post')->find($id);

        if (!$entrada) {
            throw $this->createNotFoundException('No encuentro entradas.');
        }

        $comentarios = $em->getRepository('JMPCPetFriendsProtectorsBundle:Comments')
                   ->getCommentsForPost($entrada->getId());
        
        //Paginacion con KNP Paginator Bundle
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $comentarios,
                $this->get('request')->query->get('page',1),2
        );
        
        // Respuesta AJAX para que la paginacion de comentarios no recargue la pagina
        if ($request->isXmlHttpRequest()) {
            return $this->render('JMPCPetFriendsProtectorsBundle:Comments:index.html.twig', array(
                'comments'  => $pagination
            ));
        }
        return $this->render('JMPCPetFriendsProtectorsBundle:Page:list.html.twig', array(
            'post'      => $entrada,
            'comments'  => $pagination
        ));
    }
    
    /** 
    * Renderiza la pagina sobre nosotros del sitio web
    **/
    public function aboutAction()
    {
        return $this->render('JMPCPetFriendsProtectorsBundle:Page:about.html.twig', array());
    }
    
    /** 
    * Renderiza la pagina contacto, y crea el formulario
    **/
    public function contactAction() 
    {
        $contacto = new Contact();

        //Crea el Formulario Entidad Contact
        $form = $this->createForm(new ContactType(), $contacto);
        
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {
             
            $form->bind($request);
            if($form->isValid()){

               //Parametros cargados desde services.yml
               $direccion = $this->container->getParameter('contact.notification_addresses');

               $cadena = $this->container->getParameter('contact.notification_template');
               $cadena2 = $this->container->getParameter('contact.confirmation_template');
               var_dump($cadena, $cadena2);

               $response = $this->render(
                    $this->container->getParameter('contact.notification_template'),
                    array('contact' => $contacto)
                );
                $asunto = "Nueva consulta";
                $notificacion = \Swift_Message::newInstance()
                    ->setSubject($asunto)
                    ->setFrom($contacto->getEmail())
                    ->setTo($direccion)
                    ->setBody($response->getContent(), 'text/html');

                $asunto = "Gracias por contactar con PetFriends";

                $response = $this->render(
                    $this->container->getParameter('contact.confirmation_template'),
                    array('contact' => $contacto)
                );
                $confirmacion = \Swift_Message::newInstance()
                    ->setSubject($asunto)
                    ->setFrom($this->container->getParameter('contact.confirmation_from_address'))
                    ->setTo($contacto->getEmail())
                    ->setBody($response->getContent(), 'text/html');

                $this->get('mailer')->send($notificacion);
                $this->get('mailer')->send($confirmacion);

                $em = $this->getDoctrine()->getManager();
                $em->persist($contacto);
                $em->flush();
               
               //Mensaje flash de confirmacion
                $this->get('session')->getFlashBag()->set(
                    'confirmacion',
                    'Tu mensaje se ha enviado correctamente'
                );

                return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_contact'));
            }
        }
	 
        return $this->render('JMPCPetFriendsProtectorsBundle:Page:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    /** 
    * Devuelve los objetos de la entidad Animal para el carrusel de animales inferior
    **/
    public function carouselAction() 
    {
        
        $em = $this->getDoctrine()
                   ->getManager();
        $animales = $em->getRepository('JMPCPetFriendsProtectorsBundle:Animal');
        
        $consulta = $em->createQuery("SELECT a FROM JMPC\PetFriends\ProtectorsBundle\Entity\Animal a");
        
        $animales = $consulta->getResult();
        
        return $this->render('JMPCPetFriendsProtectorsBundle:Animals:carousel.html.twig', array(
            'animals' => $animales
        ));
    }
    
    /** 
    * Devuelve los ultimos comentarios guardados por los usuarios
    * para mostrarlos en el lateral del sitio web
    **/
    public function lateralAction()
    {
        $em = $this->getDoctrine()
                   ->getManager();

        $tags = $em->getRepository('JMPCPetFriendsProtectorsBundle:Post')
                   ->getTags();

        $tagWeights = $em->getRepository('JMPCPetFriendsProtectorsBundle:Post')
                         ->getTagWeights($tags);

        $commentLimit   = $this->container
                           ->getParameter('petfriends_post.comments.latest_comment_limit');
        $latestComments = $em->getRepository('JMPCPetFriendsProtectorsBundle:Comments')
                         ->getLatestComments($commentLimit);
        
        return $this->render('JMPCPetFriendsProtectorsBundle:Page:lateral.html.twig', array(
            'tags' => $tagWeights,
            'latestComments'    => $latestComments
        ));
    }

    /** 
    * Funcion de respuesta de llamada AJAX para validar el nombre de usuario
    * en el registro de usuarios
    * Devuelve 0 o 1
    **/
    public function validateAction()
    {

        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        if ($request->isXmlHttpRequest()) {
            $username = $request->request->get('fos_user_registration_form')['username'];
            if ($username != null) {
                $consulta = $em->createQuery("SELECT u FROM JMPC\PetFriends\ProtectorsBundle\Entity\User u WHERE u.username = '$username'");
                $resultado = $consulta->getResult();
                $response = new Response();
                
                if ($resultado != null) {
                    $response->setContent(1);
                    $response->headers->set('Content-Type', 'text/plain');
                }
                else {
                    $response->setContent(0);
                    $response->headers->set('Content-Type', 'text/plain');
                }
                return $response; 
            }
        }
    }

    /** 
    * Funcion de respuesta de llamada AJAX para validar el email
    * en el registro de usuarios
    * Devuelve 0 o 1
    **/
    public function validateEmailAction()
    {

        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        if ($request->isXmlHttpRequest()) {
            $email = $request->request->get('fos_user_registration_form')['email'];

            if ($email != null) {
                $consulta = $em->createQuery("SELECT u FROM JMPC\PetFriends\ProtectorsBundle\Entity\User u WHERE u.email = '$email'");
                $resultado = $consulta->getResult();
                $response = new Response();
                
                if ($resultado != null) {
                    $response->setContent(1);
                    $response->headers->set('Content-Type', 'text/plain');
                    
                }
                else {
                    $response->setContent(0);
                    $response->headers->set('Content-Type', 'text/plain');
                }
                return $response; 
            }
        }
    }

    /**
    * Genera una pagina de error 404 alternativa
    **/
    public function errorAction()
    {
        return $this->render('JMPCPetFriendsProtectorsBundle:Page:404.html.twig', array());
    }
}

