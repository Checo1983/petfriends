<?php

/***********************************************************/
/*         Controlador administracion del sitio web        */
/*         y para CRUD Entidad Post                        */
/*         Permite al administador                         */
/*         crear, borrar, modificar y listar               */
/*         objetos de la Entidad Post                      */
/*                                                         */                                        
/***********************************************************/

/**
 * Description of AdminController
 *
 * @author checo
 */

namespace JMPC\PetFriends\ProtectorsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use JMPC\PetFriends\ProtectorsBundle\Entity\Contact;
use JMPC\PetFriends\ProtectorsBundle\Entity\User;
use JMPC\PetFriends\ProtectorsBundle\Entity\Fotos;
use JMPC\PetFriends\ProtectorsBundle\Form\ContactType;
use SimpleImage; //Script PHP para redimensionar imagenes

class AdminController extends Controller
{
	
	public function adminAction()
	{
		if (!$this->container->get('security.context')->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_homepage'));
        }
        else {
        	$request = $this->getRequest();
        	$limite = 5;

	        $em = $this->getDoctrine()->getManager();

	        $usuarios = $em->getRepository('JMPCPetFriendsProtectorsBundle:User');
	        
	        $consulta = $em->createQuery("SELECT u FROM JMPC\PetFriends\ProtectorsBundle\Entity\User u ORDER BY u.lastLogin DESC")
	        			->setMaxResults($limite);

	        $usuarios = $consulta->getResult();

	        $mensajes = $em->getRepository('JMPCPetFriendsProtectorsBundle:Contact');

	        $consulta = $em->createQuery("SELECT m FROM JMPC\PetFriends\ProtectorsBundle\Entity\Contact m ORDER BY m.id DESC")
	        			->setMaxResults($limite);

	    	$mensajes = $consulta->getResult();

	    	$limite_comentarios   = $this->container->getParameter('petfriends_post.comments.latest_comment_limit');
        	
        	$ultimos_comentarios = $em->getRepository('JMPCPetFriendsProtectorsBundle:Comments')
                              	   ->getLatestComments($ultimos_comentarios);

	    	return $this->render('JMPCPetFriendsProtectorsBundle:Admin:admin.html.twig', array(
            	'users'    => $usuarios,
            	'messages' => $mensajes,
            	'comments' => $ultimos_comentarios
        	));
	    }
	}

	public function usersAction()
	{
		if (!$this->container->get('security.context')->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_homepage'));
        }
        else {
            $request = $this->getRequest();

	        $em = $this->getDoctrine()->getManager();

	        $usuarios = $em->getRepository('JMPCPetFriendsProtectorsBundle:User');
	        
	        $consulta = $em->createQuery("SELECT u FROM JMPC\PetFriends\ProtectorsBundle\Entity\User u ORDER BY u.lastLogin DESC");

	        $usuarios = $consulta->getResult();
	        
	        //Paginacion con KNP Paginator Bundle
	        $paginator = $this->get('knp_paginator');
	        $pagination = $paginator->paginate(
	                $usuarios,
	                $this->get('request')->query->get('page',1),10
	                );
		    
	        // Respuesta AJAX para que la paginacion no recargue la pagina
	        if ($request->isXmlHttpRequest()) {

	            return $this->render('JMPCPetFriendsProtectorsBundle:Admin:users.html.twig', array(
	                'users'    => $pagination,
	            ));
        	}
        }

		return $this->render('JMPCPetFriendsProtectorsBundle:Admin:users.html.twig', array(
            'users'    => $pagination,
        ));
	}

	public function messagesAction()
	{
		if (!$this->container->get('security.context')->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_homepage'));
        }
        else {
        	$request = $this->getRequest();

	        $em = $this->getDoctrine()->getManager();

			$mensajes = $em->getRepository('JMPCPetFriendsProtectorsBundle:Contact');

	    	$consulta = $em->createQuery("SELECT m FROM JMPC\PetFriends\ProtectorsBundle\Entity\Contact m ORDER BY m.id DESC");

	    	$mensajes = $consulta->getResult();

	    	//Paginacion con KNP Paginator Bundle
	        $paginator = $this->get('knp_paginator');
	        $pagination = $paginator->paginate(
	                $mensajes,
	                $this->get('request')->query->get('page',1),5
	                );
		    
	        // Respuesta AJAX para que la paginacion no recargue la pagina
	        if ($request->isXmlHttpRequest()) {

	            return $this->render('JMPCPetFriendsProtectorsBundle:Admin:messages.html.twig', array(
	                'messages'    => $pagination,
	            ));
        	}
        }

		return $this->render('JMPCPetFriendsProtectorsBundle:Admin:messages.html.twig', array(
            'messages'    => $pagination,
        ));
	}
}