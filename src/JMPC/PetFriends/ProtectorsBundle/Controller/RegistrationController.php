<?php


/***********************************************************/
/*         Sobreescritura del RegistrationController       */
/*         FOSUserBundle                                   */
/*         Permite registrar nuevos usuarios               */
/*         Maneja objetos de la entidad User               */
/*                                                         */                                         
/***********************************************************/

namespace JMPC\PetFriends\ProtectorsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use JMPC\PetFriends\ProtectorsBundle\Entity\Province;
use JMPC\PetFriends\ProtectorsBundle\Entity\Fotos;
use FOS\UserBundle\Model\UserManagerInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Event\UserEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;


class RegistrationController extends BaseController
{
    public function registerAction(Request $request)
    {

        /* Codigo añadido para capturar peticion AJAX.    */
        // Respuesta AJAX para filtrar las ciudades de cada pais
        $request = $this->container->get('request');

        if ($request->isXmlHttpRequest()) {
            $pais = $request->request->get('fos_user_registration_form')['nombre_pais'];
            $em = $this->container->get('doctrine')->getManager();
            $consulta = $em->createQuery("SELECT p FROM JMPC\PetFriends\ProtectorsBundle\Entity\Province p WHERE p.pais_ciudad = '$pais' ORDER BY p.ciudad ASC");
            $provincias = $consulta->getArrayResult();
            
            $response = new Response(json_encode(array('ciudades' => $provincias)));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
        /****************************************************/

        /** @var $formFactory \FOS\UserBundle\Form\Factory\FactoryInterface */
        $formFactory = $this->container->get('fos_user.registration.form.factory');
        /** @var $userManager \FOS\UserBundle\Model\UserManagerInterface */
        $userManager = $this->container->get('fos_user.user_manager');
        /** @var $dispatcher \Symfony\Component\EventDispatcher\EventDispatcherInterface */
        $dispatcher = $this->container->get('event_dispatcher');
    
        $user = $userManager->createUser();
        $user->setEnabled(true);
    
        $dispatcher->dispatch(FOSUserEvents::REGISTRATION_INITIALIZE, new UserEvent($user, $request));
    
        $form = $formFactory->createForm();
        $form->setData($user);
    
        if ('POST' === $request->getMethod()) {
            $form->bind($request);
            
            if ($form->isValid()) {
                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_SUCCESS, $event);
    
                $userManager->updateUser($user);

                /*******************************************************/
                /* Crea una nueva entidad Fotos para el nuevo User */
                /* para almacenar las fotos del perfil del usuario     */

                $fotos = new Fotos();
                $em = $this->container->get('doctrine')->getManager();
                $fotos->setFotoUsuario('avatar.png');
                $fotos->setFotoMascota('avatar_mascota.png');
                $fotos->setUsuario($user);

                $em->persist($fotos);
                $em->flush();

                /***********************************************/

                $this->container->get('session')->getFlashBag()->set(
                    'confirmacion',
                    'Bienvenido a PetsFriends. En breve recibiras un email de confirmación para tener acceso completo a nuestra web'
                );
    
                if (null === $response = $event->getResponse()) {
                    $url = $this->container->get('router')->generate('fos_user_registration_confirmed');
                    $response = new RedirectResponse($url);
                }
    
                $dispatcher->dispatch(FOSUserEvents::REGISTRATION_COMPLETED, new FilterUserResponseEvent($user, $request, $response));
    
                return $response;
            }
        }
    
        //return $this->container->get('templating')->renderResponse('FOSUserBundle:Registration:register.html.'.$this->getEngine(), array(
        return $this->render('FOSUserBundle:Registration:register.html.twig', array(
            'form' => $form->createView(),
        )); 
    }
}
