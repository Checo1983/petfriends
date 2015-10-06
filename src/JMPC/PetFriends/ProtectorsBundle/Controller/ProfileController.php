<?php

/***********************************************************/
/*         Sobreescritura del ProfileController            */
/*         FOSUserBundle                                   */
/*         Permite visualizar el perfil de cada usuario    */
/*         y editar sus datos personales                   */
/*         Maneja objetos de la entidad User               */
/*                                                         */                                         
/***********************************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Controller;

use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use JMPC\PetFriends\ProtectorsBundle\Entity\Fotos;

/**
 * Controller managing the user profile
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ProfileController extends ContainerAware
{
    /**
     * Show the user
     */
    public function showAction(Request $request)
    {

        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /* Parte de codigo añadida para asociar archivos de imagen a usuarios */
        $userid = $user->getId();
        $em = $this->container->get('doctrine')->getManager();
        
        $consulta = $em->createQuery("SELECT f FROM JMPC\PetFriends\ProtectorsBundle\Entity\Fotos f WHERE f.usuario = '$userid'");
        $archivos = $consulta->getResult();
        /***********************************************************************/

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        return $this->container->get('templating')
            ->renderResponse('FOSUserBundle:Profile:show.html.'.$this->container
            ->getParameter('fos_user.template.engine'), 
              array('user' => $user, 'form' => $form->createView(), 
                    'files' => $archivos));
    }

    /**
     * Edit the user
     */
    public function editAction(Request $request)
    {

        $request = $this->container->get('request');

        /* Codigo añadido para capturar peticion AJAX.    */
        // Respuesta AJAX para filtrar las ciudades de cada pais
        if ($request->isXmlHttpRequest()) {
            $pais = $request->request->get('fos_user_profile_form')['nombre_pais'];
            $em = $this->container->get('doctrine')->getManager();
            $consulta = $em->createQuery("SELECT p FROM JMPC\PetFriends\ProtectorsBundle\Entity\Province p WHERE p.pais_ciudad = '$pais' ORDER BY p.ciudad ASC");
            $provincias = $consulta->getArrayResult();
            
            $response = new Response(json_encode(array('ciudades' => $provincias)));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
        /**************************************************/

        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.profile.form.factory');

        $form = $formFactory->createForm();
        $form->setData($user);

        if ('POST' === $request->getMethod()) {
            $form->bind($request);

            if ($form->isValid()) {
                /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
                $userManager = $this->container->get('fos_user.user_manager');

                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);

                $userManager->updateUser($user);

                if (null === $response = $event->getResponse()) {
                    $url = $this->container->get('router')->generate('fos_user_profile_show');
                    $response = new RedirectResponse($url);
                }

                $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }
        }

        return $this->container->get('templating')->renderResponse(
            'FOSUserBundle:Profile:edit.html.'.$this->container->getParameter('fos_user.template.engine'),
            array('form' => $form->createView(), 'user' => $user)
        );
    }
}
