<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // jmpc_pet_friends_protectors_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'jmpc_pet_friends_protectors_homepage');
            }

            return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\PageController::indexAction',  '_route' => 'jmpc_pet_friends_protectors_homepage',);
        }

        // jmpc_pet_friends_protectors_new
        if ($pathinfo === '/nuevo') {
            return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\PageController::newAction',  '_route' => 'jmpc_pet_friends_protectors_new',);
        }

        // jmpc_pet_friends_protectors_delete
        if (0 === strpos($pathinfo, '/borrar') && preg_match('#^/borrar/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jmpc_pet_friends_protectors_delete')), array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\PageController::deleteAction',));
        }

        // jmpc_pet_friends_protectors_edit
        if (0 === strpos($pathinfo, '/editar') && preg_match('#^/editar/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jmpc_pet_friends_protectors_edit')), array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\PageController::editAction',));
        }

        // jmpc_pet_friends_protectors_about
        if ($pathinfo === '/sobre') {
            return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\PageController::aboutAction',  '_route' => 'jmpc_pet_friends_protectors_about',);
        }

        // jmpc_pet_friends_protectors_contact
        if ($pathinfo === '/contacto') {
            return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\PageController::contactAction',  '_route' => 'jmpc_pet_friends_protectors_contact',);
        }

        // jmpc_pet_friends_protectors_adopteds
        if ($pathinfo === '/adoptados') {
            return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\AnimalsController::adoptedAction',  '_route' => 'jmpc_pet_friends_protectors_adopteds',);
        }

        // jmpc_pet_friends_protectors_list
        if (preg_match('#^/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_jmpc_pet_friends_protectors_list;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jmpc_pet_friends_protectors_list')), array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\PageController::listAction',));
        }
        not_jmpc_pet_friends_protectors_list:

        // jmpc_pet_friends_protectors_comment_create
        if (0 === strpos($pathinfo, '/comentario') && preg_match('#^/comentario/(?P<post_id>\\d+)$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_jmpc_pet_friends_protectors_comment_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'jmpc_pet_friends_protectors_comment_create')), array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\CommentsController::createAction',));
        }
        not_jmpc_pet_friends_protectors_comment_create:

        if (0 === strpos($pathinfo, '/animales')) {
            // jmpc_pet_friends_protectors_animals_new
            if ($pathinfo === '/animales/nuevo') {
                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\AnimalsController::newAction',  '_route' => 'jmpc_pet_friends_protectors_animals_new',);
            }

            // jmpc_pet_friends_protectors_animals_delete
            if (0 === strpos($pathinfo, '/animales/borrar') && preg_match('#^/animales/borrar/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jmpc_pet_friends_protectors_animals_delete')), array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\AnimalsController::deleteAction',));
            }

            // jmpc_pet_friends_protectors_animals_edit
            if (0 === strpos($pathinfo, '/animales/editar') && preg_match('#^/animales/editar/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jmpc_pet_friends_protectors_animals_edit')), array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\AnimalsController::editAction',));
            }

            // jmpc_pet_friends_protectors_animals_list
            if (preg_match('#^/animales(?:/(?P<tipo>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jmpc_pet_friends_protectors_animals_list')), array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\AnimalsController::listAction',  'tipo' => 'listado',));
            }

            // jmpc_pet_friends_protectors_animals_dogs
            if ($pathinfo === '/animales/perros') {
                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\AnimalsController::listAction',  '_route' => 'jmpc_pet_friends_protectors_animals_dogs',);
            }

            // jmpc_pet_friends_protectors_animals_cats
            if ($pathinfo === '/animales/gatos') {
                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\AnimalsController::listAction',  '_route' => 'jmpc_pet_friends_protectors_animals_cats',);
            }

            // jmpc_pet_friends_protectors_animals_birds
            if ($pathinfo === '/animales/aves') {
                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\AnimalsController::listAction',  '_route' => 'jmpc_pet_friends_protectors_animals_birds',);
            }

            // jmpc_pet_friends_protectors_animals_others
            if ($pathinfo === '/animales/otros') {
                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\AnimalsController::listAction',  '_route' => 'jmpc_pet_friends_protectors_animals_others',);
            }

            // jmpc_pet_friends_protectors_animals_view
            if (preg_match('#^/animales/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_jmpc_pet_friends_protectors_animals_view;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jmpc_pet_friends_protectors_animals_view')), array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\AnimalsController::viewAction',));
            }
            not_jmpc_pet_friends_protectors_animals_view:

        }

        if (0 === strpos($pathinfo, '/mascotas_perdidas')) {
            // jmpc_pet_friends_protectors_lost
            if (rtrim($pathinfo, '/') === '/mascotas_perdidas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'jmpc_pet_friends_protectors_lost');
                }

                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\LostController::listAction',  '_route' => 'jmpc_pet_friends_protectors_lost',);
            }

            // jmpc_pet_friends_protectors_lost_new
            if ($pathinfo === '/mascotas_perdidas/nuevo') {
                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\LostController::newAction',  '_route' => 'jmpc_pet_friends_protectors_lost_new',);
            }

            // jmpc_pet_friends_protectors_lost_delete
            if (0 === strpos($pathinfo, '/mascotas_perdidas/borrar') && preg_match('#^/mascotas_perdidas/borrar/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jmpc_pet_friends_protectors_lost_delete')), array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\LostController::deleteAction',));
            }

            // jmpc_pet_friends_protectors_lost_edit
            if (0 === strpos($pathinfo, '/mascotas_perdidas/editar') && preg_match('#^/mascotas_perdidas/editar/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jmpc_pet_friends_protectors_lost_edit')), array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\LostController::editAction',));
            }

            // jmpc_pet_friends_protectors_lost_view
            if (preg_match('#^/mascotas_perdidas/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'jmpc_pet_friends_protectors_lost_view')), array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\LostController::viewAction',));
            }

        }

        // jmpc_pet_friends_user
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\PageController::indexAction',  '_route' => 'jmpc_pet_friends_user',);
        }

        // jmpc_pet_friends_new_user
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\PageController::indexAction',  '_route' => 'jmpc_pet_friends_new_user',);
        }

        if (0 === strpos($pathinfo, '/validate')) {
            // jmpc_pet_friends_validate
            if ($pathinfo === '/validate') {
                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\PageController::validateAction',  '_route' => 'jmpc_pet_friends_validate',);
            }

            // jmpc_pet_friends_validate_email
            if ($pathinfo === '/validate_email') {
                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\PageController::validateEmailAction',  '_route' => 'jmpc_pet_friends_validate_email',);
            }

        }

        if (0 === strpos($pathinfo, '/profile/update')) {
            // jmpc_pet_friends_update_files
            if ($pathinfo === '/profile/update') {
                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\UserController::updateFileAction',  '_route' => 'jmpc_pet_friends_update_files',);
            }

            // jmpc_pet_friends_update_files_pet
            if ($pathinfo === '/profile/update_pet') {
                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\UserController::updateFilePetAction',  '_route' => 'jmpc_pet_friends_update_files_pet',);
            }

        }

        // jmpc_pet_friends_404
        if ($pathinfo === '/error') {
            return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\PageController::errorAction',  '_route' => 'jmpc_pet_friends_404',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'JMPC\\PetFriends\\ProtectorsBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
