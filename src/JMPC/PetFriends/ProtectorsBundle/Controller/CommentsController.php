<?php
// src/JMPC/PetFriends/ProtectorsBundle/Controller/CommentsController.php

/************************************************************
 * Controlador para listar los Comentarios cuando clickamos *
 * en continuar leyendo, y para crear nuevos Comentarios    *
 ************************************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JMPC\PetFriends\ProtectorsBundle\Entity\Comments;
use JMPC\PetFriends\ProtectorsBundle\Form\CommentsType;
use Symfony\Component\HttpFoundation\Response;

/**
 * Comentario controller.
 */
class CommentsController extends Controller
{
    /* Crea el formulario para los nuevos comentarios */
    public function newAction($post_id)
    {
        $entrada = $this->getPost($post_id);
        
        $autor = $this->get('security.context')->getToken()->getUser()->getUsername();
       
        
        $comentario = new Comments();
        $comentario->setContenido($entrada);

        //Crea el Formulario Entidad Comments
        $form = $this->createForm(new CommentsType($autor), $comentario);
        return $this->render('JMPCPetFriendsProtectorsBundle:Comments:form.html.twig', array(
            'comment' => $comentario,
            'form'    => $form->createView()
        ));
    }

    /* Persiste el comentario enviado por el formulario en la BBDD */
    public function createAction($post_id)
    {
        $entrada = $this->getPost($post_id);
        
        $autor = $this->get('security.context')->getToken()->getUser()->getUsername();

        $comentario  = new Comments();
        $comentario->setContenido($entrada);
        $request = $this->getRequest();
        $form    = $this->createForm(new CommentsType($autor), $comentario);
        $form->bind($request);

        if ($form->isValid()) {
            //Persiste la entidad comentario
            $em = $this->getDoctrine()->getManager();
            $em->persist($comentario);
            $em->flush();

            //Mensaje flash de confirmacion
            $this->get('session')->getFlashBag()->set(
                'confirmacion',
                'Comentario creado correctamente'
            );
            
            return $this->redirect($this->generateUrl('jmpc_pet_friends_protectors_list', array(
                'id'    => $comentario->getContenido()->getId(),
                'slug'  => $comentario->getContenido()->getSlug())) .
                '#comentario-' . $comentario->getId()
            );
        }
        
        return $this->render('JMPCPetFriendsProtectorsBundle:Comments:create.html.twig', array(
            'comment' => $comentario,
            'form'    => $form->createView()
        ));
    }

    /* Devuelve el articulo que esta asociado al comentario que vamos a crear */
    protected function getPost($post_id)
    {
        $em = $this->getDoctrine()->getManager();

        $entrada = $em->getRepository('JMPCPetFriendsProtectorsBundle:Post')->find($post_id);

        if (!$entrada) {
            throw $this->createNotFoundException('No encuentro entradas.');
        }

        return $entrada;
    }

}
