<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/mail')) {
            // pidev_mail_homepage
            if (0 === strpos($pathinfo, '/mail/hello') && preg_match('#^/mail/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_mail_homepage')), array (  '_controller' => 'Pidev\\MailBundle\\Controller\\DefaultController::indexAction',));
            }

            // pidev_mail_redirection
            if ($pathinfo === '/mail/redirection') {
                return array (  '_controller' => 'Pidev\\MailBundle\\Controller\\DefaultController::redirectionAction',  '_route' => 'pidev_mail_redirection',);
            }

            // pidev_mail_sendmail
            if ($pathinfo === '/mail/sendMail') {
                return array (  '_controller' => 'Pidev\\MailBundle\\Controller\\DefaultController::sendMailAction',  '_route' => 'pidev_mail_sendmail',);
            }

        }

        // pidev_crowd_rise_homepage
        if ($pathinfo === '/hello') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\DefaultController::indexAction',  '_route' => 'pidev_crowd_rise_homepage',);
        }

        if (0 === strpos($pathinfo, '/acc')) {
            // pidev_crowd_rise_accueil
            if ($pathinfo === '/accueil') {
                return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'pidev_crowd_rise_accueil',);
            }

            // pidev_crowd_rise_accessdenied
            if ($pathinfo === '/accesdenied') {
                return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\DefaultController::accesdeniedAction',  '_route' => 'pidev_crowd_rise_accessdenied',);
            }

        }

        // pidev_crowd_rise_projet
        if ($pathinfo === '/projet') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\DefaultController::projetAction',  '_route' => 'pidev_crowd_rise_projet',);
        }

        // pidev_crowd_rise_utilisable
        if ($pathinfo === '/utilisable') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\DefaultController::utilisableAction',  '_route' => 'pidev_crowd_rise_utilisable',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // pidev_profil_ajouter
            if ($pathinfo === '/ajoutProfil') {
                return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProfilController::ajoutAction',  '_route' => 'pidev_profil_ajouter',);
            }

            // pidev_profil_afficher
            if (0 === strpos($pathinfo, '/afficheProfil') && preg_match('#^/afficheProfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_profil_afficher')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProfilController::afficheAction',));
            }

        }

        // create_notification
        if ($pathinfo === '/createNotification') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\NotificationController::createNotificationAction',  '_route' => 'create_notification',);
        }

        // list_notification
        if ($pathinfo === '/listNotification') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\NotificationController::listNotificationAction',  '_route' => 'list_notification',);
        }

        // pidev_profil_modifier
        if (0 === strpos($pathinfo, '/modifierProfil') && preg_match('#^/modifierProfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_profil_modifier')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProfilController::modifierProfilAction',));
        }

        // pidev_profil_supprimer
        if (0 === strpos($pathinfo, '/supprimerProfil') && preg_match('#^/supprimerProfil/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_profil_supprimer')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProfilController::supprimerProfilAction',));
        }

        // notification_user
        if (0 === strpos($pathinfo, '/notification') && preg_match('#^/notification/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'notification_user')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\NotificationController::listNotificationByIdAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // pidev_profil_ajouter_competence
            if (0 === strpos($pathinfo, '/ajouterCompetence') && preg_match('#^/ajouterCompetence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_profil_ajouter_competence')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\CompetenceController::ajoutCompetenceAction',));
            }

            // pidev_profil_afficher_competence
            if (0 === strpos($pathinfo, '/afficherCompetence') && preg_match('#^/afficherCompetence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_profil_afficher_competence')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\CompetenceController::afficheAction',));
            }

        }

        // pidev_profil_modifier_competence
        if (0 === strpos($pathinfo, '/modifierCompetence') && preg_match('#^/modifierCompetence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_profil_modifier_competence')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\CompetenceController::modifierAction',));
        }

        // pidev_crowd_rise_ajouterSolution
        if (0 === strpos($pathinfo, '/ajouterSolution') && preg_match('#^/ajouterSolution/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_crowd_rise_ajouterSolution')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\SolutionController::ajouterSolutionAction',));
        }

        // pidev_crowd_rise_consultersolution
        if ($pathinfo === '/consultersolution') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\SolutionController::consulterSolutionAction',  '_route' => 'pidev_crowd_rise_consultersolution',);
        }

        // ajouter_problem
        if ($pathinfo === '/ajouter') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProblemController::ajouterAction',  '_route' => 'ajouter_problem',);
        }

        // consulter
        if (0 === strpos($pathinfo, '/consulter') && preg_match('#^/consulter(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'consulter')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProblemController::ConsulterAction',));
        }

        // modifier
        if (0 === strpos($pathinfo, '/modifier') && preg_match('#^/modifier(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modifier')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProblemController::ModifierAction',));
        }

        // supprimer
        if (0 === strpos($pathinfo, '/supprimer') && preg_match('#^/supprimer(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProblemController::SupprimerAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/afficher')) {
                // afficher
                if ($pathinfo === '/afficher') {
                    return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProblemController::AfficherAction',  '_route' => 'afficher',);
                }

                // affichersolutionPB
                if (0 === strpos($pathinfo, '/affichersolutionPB') && preg_match('#^/affichersolutionPB(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'affichersolutionPB')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\SolutionController::consulterPBAction',));
                }

            }

            // acceptersolution
            if (0 === strpos($pathinfo, '/acceptersolution') && preg_match('#^/acceptersolution(?P<idSolution>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'acceptersolution')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\SolutionController::accepterAction',));
            }

        }

        // refusersolution
        if (0 === strpos($pathinfo, '/refusersolution') && preg_match('#^/refusersolution(?P<idSolution>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'refusersolution')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\SolutionController::refuserAction',));
        }

        if (0 === strpos($pathinfo, '/afficher')) {
            // afficherAccepter
            if ($pathinfo === '/afficherAccepter') {
                return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\SolutionController::afficherAccepterAction',  '_route' => 'afficherAccepter',);
            }

            // afficherRefuser
            if ($pathinfo === '/afficherRefuser') {
                return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\SolutionController::afficherRefuserAction',  '_route' => 'afficherRefuser',);
            }

        }

        // pidev_crowd_rise_AjouterProjet
        if ($pathinfo === '/AjouterProjet') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProjetController::AjouterProjetAction',  '_route' => 'pidev_crowd_rise_AjouterProjet',);
        }

        // pidev_crowd_rise_ListProjet
        if ($pathinfo === '/ListeProjet') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProjetController::ListProjetAction',  '_route' => 'pidev_crowd_rise_ListProjet',);
        }

        // pidev_crowd_rise_AfficherProjet
        if (0 === strpos($pathinfo, '/AfficherProjet') && preg_match('#^/AfficherProjet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_crowd_rise_AfficherProjet')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProjetController::AfficherProjetAction',));
        }

        // my_image_route
        if (0 === strpos($pathinfo, '/aff') && preg_match('#^/aff/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'my_image_route')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProjetController::photoAction',));
        }

        // pidev_crowd_rise_ModifierProjet
        if (0 === strpos($pathinfo, '/ModifierProjet') && preg_match('#^/ModifierProjet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_crowd_rise_ModifierProjet')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProjetController::ModifierProjetAction',));
        }

        // pidev_crowd_rise_RechercherProjet
        if ($pathinfo === '/RechercherProjet') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProjetController::RechercherProjetAction',  '_route' => 'pidev_crowd_rise_RechercherProjet',);
        }

        // pidev_crowd_rise_SupprimerProjet
        if (0 === strpos($pathinfo, '/SupprimerProjet') && preg_match('#^/SupprimerProjet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_crowd_rise_SupprimerProjet')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProjetController::SupprimerProjetAction',));
        }

        // vote
        if ($pathinfo === '/vote') {
            return array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProjetController::voteAction',  '_route' => 'vote',);
        }

        // pidev_crowd_rise_ajoutDemande
        if (0 === strpos($pathinfo, '/ajoutDemande') && preg_match('#^/ajoutDemande/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_crowd_rise_ajoutDemande')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\SolutionController::ajoutDemandeAction',));
        }

        // pidev_crowd_rise_deleteSolution
        if (0 === strpos($pathinfo, '/deleteSolution') && preg_match('#^/deleteSolution/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_crowd_rise_deleteSolution')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\SolutionController::deleteSolutionAction',));
        }

        // pidev_crowd_rise_updateSolution
        if (0 === strpos($pathinfo, '/updateSolution') && preg_match('#^/updateSolution/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_crowd_rise_updateSolution')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\SolutionController::updateSolutionAction',));
        }

        // pidev_crowd_rise_consulterOffreSolution
        if (0 === strpos($pathinfo, '/offreSolution') && preg_match('#^/offreSolution/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_crowd_rise_consulterOffreSolution')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\SolutionController::consulterOffreSubmitterAction',));
        }

        // pidev_crowd_rise_credit
        if (0 === strpos($pathinfo, '/rechargeCredit') && preg_match('#^/rechargeCredit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_crowd_rise_credit')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\FinanceController::ajoutCreditAction',));
        }

        // pidev_crowd_rise_upload
        if (0 === strpos($pathinfo, '/uploadFile') && preg_match('#^/uploadFile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_crowd_rise_upload')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\UploadController::createAction',));
        }

        // pidev_crowd_rise_consulterToutProbleme
        if (0 === strpos($pathinfo, '/consulter') && preg_match('#^/consulter/(?P<categorie>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'pidev_crowd_rise_consulterToutProbleme')), array (  '_controller' => 'PIDEV\\CrowdRiseBundle\\Controller\\ProblemController::ConsulterProbAction',));
        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

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
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

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

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
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

        // dcs_rating_add_vote
        if (0 === strpos($pathinfo, '/Routing/vote/add') && preg_match('#^/Routing/vote/add/(?P<id>[^/]++)/(?P<value>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dcs_rating_add_vote')), array (  '_controller' => 'DCS\\RatingBundle\\Controller\\RatingController::addVoteAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
