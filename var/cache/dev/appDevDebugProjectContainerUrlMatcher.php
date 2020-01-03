<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

            // gregwar_captcha.generate_captcha
            if (0 === strpos($pathinfo, '/_gcb/generate-captcha') && preg_match('#^/_gcb/generate\\-captcha/(?P<key>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gregwar_captcha.generate_captcha')), array (  '_controller' => 'Gregwar\\CaptchaBundle\\Controller\\CaptchaController::generateCaptchaAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/login')) {
            // fos_user_security_login
            if ('/login' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_security_login;
                }

                return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
            }
            not_fos_user_security_login:

            // fos_user_security_check
            if ('/login_check' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_security_check;
                }

                return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
            }
            not_fos_user_security_check:

        }

        // fos_user_security_logout
        if ('/logout' === $pathinfo) {
            if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                $allow = array_merge($allow, array('GET', 'POST'));
                goto not_fos_user_security_logout;
            }

            return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
        }
        not_fos_user_security_logout:

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

            // fos_user_change_password
            if ('/profile/change-password' === $pathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_change_password;
                }

                return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
            }
            not_fos_user_change_password:

        }

        elseif (0 === strpos($pathinfo, '/register')) {
            // fos_user_registration_register
            if ('/register' === $trimmedPathinfo) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_registration_register;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                }

                return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
            }
            not_fos_user_registration_register:

            // fos_user_registration_check_email
            if ('/register/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_registration_check_email;
                }

                return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
            }
            not_fos_user_registration_check_email:

            if (0 === strpos($pathinfo, '/register/confirm')) {
                // fos_user_registration_confirm
                if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirm;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                }
                not_fos_user_registration_confirm:

                // fos_user_registration_confirmed
                if ('/register/confirmed' === $pathinfo) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_fos_user_registration_confirmed;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                }
                not_fos_user_registration_confirmed:

            }

        }

        elseif (0 === strpos($pathinfo, '/resetting')) {
            // fos_user_resetting_request
            if ('/resetting/request' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_request;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
            }
            not_fos_user_resetting_request:

            // fos_user_resetting_reset
            if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                    $allow = array_merge($allow, array('GET', 'POST'));
                    goto not_fos_user_resetting_reset;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
            }
            not_fos_user_resetting_reset:

            // fos_user_resetting_send_email
            if ('/resetting/send-email' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_fos_user_resetting_send_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
            }
            not_fos_user_resetting_send_email:

            // fos_user_resetting_check_email
            if ('/resetting/check-email' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_fos_user_resetting_check_email;
                }

                return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
            }
            not_fos_user_resetting_check_email:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            if ('GET' !== $canonicalMethod) {
                $allow[] = 'GET';
                goto not_fos_js_routing_js;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }
        not_fos_js_routing_js:

        // _redirect_to_admin
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', '_redirect_to_admin');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => true,  '_route' => '_redirect_to_admin',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // about
            if ('/about' === $pathinfo) {
                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController::templateAction',  'template' => ':home:about.html.twig',  '_route' => 'about',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                // sonata_admin_redirect
                if ('/admin' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', 'sonata_admin_redirect');
                    }

                    return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
                }

                // sonata_admin_dashboard
                if ('/admin/dashboard' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
                }

                if (0 === strpos($pathinfo, '/admin/core')) {
                    if (0 === strpos($pathinfo, '/admin/core/get-')) {
                        // sonata_admin_retrieve_form_element
                        if ('/admin/core/get-form-field-element' === $pathinfo) {
                            return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                        }

                        // sonata_admin_short_object_information
                        if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                        }

                        // sonata_admin_retrieve_autocomplete_items
                        if ('/admin/core/get-autocomplete-items' === $pathinfo) {
                            return array (  '_controller' => 'sonata.admin.controller.admin:retrieveAutocompleteItemsAction',  '_route' => 'sonata_admin_retrieve_autocomplete_items',);
                        }

                    }

                    // sonata_admin_append_form_element
                    if ('/admin/core/append-form-field-element' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                    }

                    // sonata_admin_set_object_field_value
                    if ('/admin/core/set-object-field-value' === $pathinfo) {
                        return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                    }

                }

                // sonata_admin_search
                if ('/admin/search' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
                }

                if (0 === strpos($pathinfo, '/admin/security/groups')) {
                    // admin_app_user_group_list
                    if ('/admin/security/groups/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_app_user_group_list',  '_route' => 'admin_app_user_group_list',);
                    }

                    // admin_app_user_group_create
                    if ('/admin/security/groups/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_app_user_group_create',  '_route' => 'admin_app_user_group_create',);
                    }

                    // admin_app_user_group_edit
                    if (preg_match('#^/admin/security/groups/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_group_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_app_user_group_edit',));
                    }

                    // admin_app_user_group_delete
                    if (preg_match('#^/admin/security/groups/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_group_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.group',  '_sonata_name' => 'admin_app_user_group_delete',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/audit/datadog-audit')) {
                    // admin_datadog_audit_auditlog_list
                    if ('/admin/audit/datadog-audit/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'data_dog_audit.admin.audit_log',  '_sonata_name' => 'admin_datadog_audit_auditlog_list',  '_route' => 'admin_datadog_audit_auditlog_list',);
                    }

                    // admin_datadog_audit_auditlog_show
                    if (preg_match('#^/admin/audit/datadog\\-audit/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_datadog_audit_auditlog_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'data_dog_audit.admin.audit_log',  '_sonata_name' => 'admin_datadog_audit_auditlog_show',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/app')) {
                    if (0 === strpos($pathinfo, '/admin/app/m')) {
                        if (0 === strpos($pathinfo, '/admin/app/media-media')) {
                            // admin_app_media_media_list
                            if ('/admin/app/media-media/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_list',  '_route' => 'admin_app_media_media_list',);
                            }

                            // admin_app_media_media_create
                            if ('/admin/app/media-media/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_create',  '_route' => 'admin_app_media_media_create',);
                            }

                            // admin_app_media_media_batch
                            if ('/admin/app/media-media/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_batch',  '_route' => 'admin_app_media_media_batch',);
                            }

                            // admin_app_media_media_edit
                            if (preg_match('#^/admin/app/media\\-media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_media_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_edit',));
                            }

                            // admin_app_media_media_delete
                            if (preg_match('#^/admin/app/media\\-media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_media_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_delete',));
                            }

                            // admin_app_media_media_show
                            if (preg_match('#^/admin/app/media\\-media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_media_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_show',));
                            }

                            // admin_app_media_media_export
                            if ('/admin/app/media-media/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\MediaAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_export',  '_route' => 'admin_app_media_media_export',);
                            }

                            // admin_app_media_media_ckeditor_browser
                            if ('/admin/app/media-media/ckeditor_browser' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::browserAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_ckeditor_browser',  '_route' => 'admin_app_media_media_ckeditor_browser',);
                            }

                            // admin_app_media_media_ckeditor_upload
                            if ('/admin/app/media-media/ckeditor_upload' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\FormatterBundle\\Controller\\CkeditorAdminController::uploadAction',  '_sonata_admin' => 'sonata.media.admin.media',  '_sonata_name' => 'admin_app_media_media_ckeditor_upload',  '_route' => 'admin_app_media_media_ckeditor_upload',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/media-gallery')) {
                            // admin_app_media_gallery_list
                            if ('/admin/app/media-gallery/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_list',  '_route' => 'admin_app_media_gallery_list',);
                            }

                            // admin_app_media_gallery_create
                            if ('/admin/app/media-gallery/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_create',  '_route' => 'admin_app_media_gallery_create',);
                            }

                            // admin_app_media_gallery_batch
                            if ('/admin/app/media-gallery/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_batch',  '_route' => 'admin_app_media_gallery_batch',);
                            }

                            // admin_app_media_gallery_edit
                            if (preg_match('#^/admin/app/media\\-gallery/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_gallery_edit')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_edit',));
                            }

                            // admin_app_media_gallery_delete
                            if (preg_match('#^/admin/app/media\\-gallery/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_gallery_delete')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_delete',));
                            }

                            // admin_app_media_gallery_show
                            if (preg_match('#^/admin/app/media\\-gallery/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_gallery_show')), array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_show',));
                            }

                            // admin_app_media_gallery_export
                            if ('/admin/app/media-gallery/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\MediaBundle\\Controller\\GalleryAdminController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery',  '_sonata_name' => 'admin_app_media_gallery_export',  '_route' => 'admin_app_media_gallery_export',);
                            }

                            if (0 === strpos($pathinfo, '/admin/app/media-galleryhasmedia')) {
                                // admin_app_media_galleryhasmedia_list
                                if ('/admin/app/media-galleryhasmedia/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_list',  '_route' => 'admin_app_media_galleryhasmedia_list',);
                                }

                                // admin_app_media_galleryhasmedia_create
                                if ('/admin/app/media-galleryhasmedia/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_create',  '_route' => 'admin_app_media_galleryhasmedia_create',);
                                }

                                // admin_app_media_galleryhasmedia_batch
                                if ('/admin/app/media-galleryhasmedia/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_batch',  '_route' => 'admin_app_media_galleryhasmedia_batch',);
                                }

                                // admin_app_media_galleryhasmedia_edit
                                if (preg_match('#^/admin/app/media\\-galleryhasmedia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_galleryhasmedia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_edit',));
                                }

                                // admin_app_media_galleryhasmedia_delete
                                if (preg_match('#^/admin/app/media\\-galleryhasmedia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_galleryhasmedia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_delete',));
                                }

                                // admin_app_media_galleryhasmedia_show
                                if (preg_match('#^/admin/app/media\\-galleryhasmedia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_media_galleryhasmedia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_show',));
                                }

                                // admin_app_media_galleryhasmedia_export
                                if ('/admin/app/media-galleryhasmedia/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.media.admin.gallery_has_media',  '_sonata_name' => 'admin_app_media_galleryhasmedia_export',  '_route' => 'admin_app_media_galleryhasmedia_export',);
                                }

                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/mantenimiento_correctivo')) {
                            // admin_app_mantenimiento_correctivo_list
                            if ('/admin/app/mantenimiento_correctivo/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.mantenimiento.correctivo',  '_sonata_name' => 'admin_app_mantenimiento_correctivo_list',  '_route' => 'admin_app_mantenimiento_correctivo_list',);
                            }

                            // admin_app_mantenimiento_correctivo_create
                            if ('/admin/app/mantenimiento_correctivo/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.mantenimiento.correctivo',  '_sonata_name' => 'admin_app_mantenimiento_correctivo_create',  '_route' => 'admin_app_mantenimiento_correctivo_create',);
                            }

                            // admin_app_mantenimiento_correctivo_batch
                            if ('/admin/app/mantenimiento_correctivo/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.mantenimiento.correctivo',  '_sonata_name' => 'admin_app_mantenimiento_correctivo_batch',  '_route' => 'admin_app_mantenimiento_correctivo_batch',);
                            }

                            // admin_app_mantenimiento_correctivo_edit
                            if (preg_match('#^/admin/app/mantenimiento_correctivo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_mantenimiento_correctivo_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.mantenimiento.correctivo',  '_sonata_name' => 'admin_app_mantenimiento_correctivo_edit',));
                            }

                            // admin_app_mantenimiento_correctivo_delete
                            if (preg_match('#^/admin/app/mantenimiento_correctivo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_mantenimiento_correctivo_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.mantenimiento.correctivo',  '_sonata_name' => 'admin_app_mantenimiento_correctivo_delete',));
                            }

                            // admin_app_mantenimiento_correctivo_show
                            if (preg_match('#^/admin/app/mantenimiento_correctivo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_mantenimiento_correctivo_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.mantenimiento.correctivo',  '_sonata_name' => 'admin_app_mantenimiento_correctivo_show',));
                            }

                            // admin_app_mantenimiento_correctivo_export
                            if ('/admin/app/mantenimiento_correctivo/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.mantenimiento.correctivo',  '_sonata_name' => 'admin_app_mantenimiento_correctivo_export',  '_route' => 'admin_app_mantenimiento_correctivo_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/mantenimiento_preventivo')) {
                            // admin_app_mantenimiento_preventivo_list
                            if ('/admin/app/mantenimiento_preventivo/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.mantenimiento.preventivo',  '_sonata_name' => 'admin_app_mantenimiento_preventivo_list',  '_route' => 'admin_app_mantenimiento_preventivo_list',);
                            }

                            // admin_app_mantenimiento_preventivo_create
                            if ('/admin/app/mantenimiento_preventivo/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.mantenimiento.preventivo',  '_sonata_name' => 'admin_app_mantenimiento_preventivo_create',  '_route' => 'admin_app_mantenimiento_preventivo_create',);
                            }

                            // admin_app_mantenimiento_preventivo_batch
                            if ('/admin/app/mantenimiento_preventivo/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.mantenimiento.preventivo',  '_sonata_name' => 'admin_app_mantenimiento_preventivo_batch',  '_route' => 'admin_app_mantenimiento_preventivo_batch',);
                            }

                            // admin_app_mantenimiento_preventivo_edit
                            if (preg_match('#^/admin/app/mantenimiento_preventivo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_mantenimiento_preventivo_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.mantenimiento.preventivo',  '_sonata_name' => 'admin_app_mantenimiento_preventivo_edit',));
                            }

                            // admin_app_mantenimiento_preventivo_delete
                            if (preg_match('#^/admin/app/mantenimiento_preventivo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_mantenimiento_preventivo_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.mantenimiento.preventivo',  '_sonata_name' => 'admin_app_mantenimiento_preventivo_delete',));
                            }

                            // admin_app_mantenimiento_preventivo_show
                            if (preg_match('#^/admin/app/mantenimiento_preventivo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_mantenimiento_preventivo_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.mantenimiento.preventivo',  '_sonata_name' => 'admin_app_mantenimiento_preventivo_show',));
                            }

                            // admin_app_mantenimiento_preventivo_export
                            if ('/admin/app/mantenimiento_preventivo/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.mantenimiento.preventivo',  '_sonata_name' => 'admin_app_mantenimiento_preventivo_export',  '_route' => 'admin_app_mantenimiento_preventivo_export',);
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/c')) {
                        if (0 === strpos($pathinfo, '/admin/app/classification-c')) {
                            if (0 === strpos($pathinfo, '/admin/app/classification-category')) {
                                // admin_app_classification_category_list
                                if ('/admin/app/classification-category/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::listAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_list',  '_route' => 'admin_app_classification_category_list',);
                                }

                                // admin_app_classification_category_create
                                if ('/admin/app/classification-category/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::createAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_create',  '_route' => 'admin_app_classification_category_create',);
                                }

                                // admin_app_classification_category_batch
                                if ('/admin/app/classification-category/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_batch',  '_route' => 'admin_app_classification_category_batch',);
                                }

                                // admin_app_classification_category_edit
                                if (preg_match('#^/admin/app/classification\\-category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_category_edit')), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::editAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_edit',));
                                }

                                // admin_app_classification_category_delete
                                if (preg_match('#^/admin/app/classification\\-category/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_category_delete')), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_delete',));
                                }

                                // admin_app_classification_category_show
                                if (preg_match('#^/admin/app/classification\\-category/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_category_show')), array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::showAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_show',));
                                }

                                // admin_app_classification_category_export
                                if ('/admin/app/classification-category/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_export',  '_route' => 'admin_app_classification_category_export',);
                                }

                                // admin_app_classification_category_tree
                                if ('/admin/app/classification-category/tree' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\ClassificationBundle\\Controller\\CategoryAdminController::treeAction',  '_sonata_admin' => 'sonata.classification.admin.category',  '_sonata_name' => 'admin_app_classification_category_tree',  '_route' => 'admin_app_classification_category_tree',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/classification-collection')) {
                                // admin_app_classification_collection_list
                                if ('/admin/app/classification-collection/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_list',  '_route' => 'admin_app_classification_collection_list',);
                                }

                                // admin_app_classification_collection_create
                                if ('/admin/app/classification-collection/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_create',  '_route' => 'admin_app_classification_collection_create',);
                                }

                                // admin_app_classification_collection_batch
                                if ('/admin/app/classification-collection/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_batch',  '_route' => 'admin_app_classification_collection_batch',);
                                }

                                // admin_app_classification_collection_edit
                                if (preg_match('#^/admin/app/classification\\-collection/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_collection_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_edit',));
                                }

                                // admin_app_classification_collection_delete
                                if (preg_match('#^/admin/app/classification\\-collection/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_collection_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_delete',));
                                }

                                // admin_app_classification_collection_show
                                if (preg_match('#^/admin/app/classification\\-collection/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_collection_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_show',));
                                }

                                // admin_app_classification_collection_export
                                if ('/admin/app/classification-collection/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.collection',  '_sonata_name' => 'admin_app_classification_collection_export',  '_route' => 'admin_app_classification_collection_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/classification-context')) {
                                // admin_app_classification_context_list
                                if ('/admin/app/classification-context/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_list',  '_route' => 'admin_app_classification_context_list',);
                                }

                                // admin_app_classification_context_create
                                if ('/admin/app/classification-context/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_create',  '_route' => 'admin_app_classification_context_create',);
                                }

                                // admin_app_classification_context_batch
                                if ('/admin/app/classification-context/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_batch',  '_route' => 'admin_app_classification_context_batch',);
                                }

                                // admin_app_classification_context_edit
                                if (preg_match('#^/admin/app/classification\\-context/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_context_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_edit',));
                                }

                                // admin_app_classification_context_delete
                                if (preg_match('#^/admin/app/classification\\-context/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_context_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_delete',));
                                }

                                // admin_app_classification_context_show
                                if (preg_match('#^/admin/app/classification\\-context/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_context_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_show',));
                                }

                                // admin_app_classification_context_export
                                if ('/admin/app/classification-context/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.context',  '_sonata_name' => 'admin_app_classification_context_export',  '_route' => 'admin_app_classification_context_export',);
                                }

                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/classification-tag')) {
                            // admin_app_classification_tag_list
                            if ('/admin/app/classification-tag/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_list',  '_route' => 'admin_app_classification_tag_list',);
                            }

                            // admin_app_classification_tag_create
                            if ('/admin/app/classification-tag/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_create',  '_route' => 'admin_app_classification_tag_create',);
                            }

                            // admin_app_classification_tag_batch
                            if ('/admin/app/classification-tag/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_batch',  '_route' => 'admin_app_classification_tag_batch',);
                            }

                            // admin_app_classification_tag_edit
                            if (preg_match('#^/admin/app/classification\\-tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_tag_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_edit',));
                            }

                            // admin_app_classification_tag_delete
                            if (preg_match('#^/admin/app/classification\\-tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_tag_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_delete',));
                            }

                            // admin_app_classification_tag_show
                            if (preg_match('#^/admin/app/classification\\-tag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_classification_tag_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_show',));
                            }

                            // admin_app_classification_tag_export
                            if ('/admin/app/classification-tag/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.classification.admin.tag',  '_sonata_name' => 'admin_app_classification_tag_export',  '_route' => 'admin_app_classification_tag_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/contrato_')) {
                            if (0 === strpos($pathinfo, '/admin/app/contrato_a')) {
                                if (0 === strpos($pathinfo, '/admin/app/contrato_agencia_persona_juridica')) {
                                    // admin_app_contrato_agencia_persona_juridica_list
                                    if ('/admin/app/contrato_agencia_persona_juridica/list' === $pathinfo) {
                                        return array (  '_controller' => 'AppBundle\\Controller\\ContratoAgenciaController:listAction',  '_sonata_admin' => 'app.admin.contrato.agencia.persona.juridica',  '_sonata_name' => 'admin_app_contrato_agencia_persona_juridica_list',  '_route' => 'admin_app_contrato_agencia_persona_juridica_list',);
                                    }

                                    // admin_app_contrato_agencia_persona_juridica_create
                                    if ('/admin/app/contrato_agencia_persona_juridica/create' === $pathinfo) {
                                        return array (  '_controller' => 'AppBundle\\Controller\\ContratoAgenciaController:createAction',  '_sonata_admin' => 'app.admin.contrato.agencia.persona.juridica',  '_sonata_name' => 'admin_app_contrato_agencia_persona_juridica_create',  '_route' => 'admin_app_contrato_agencia_persona_juridica_create',);
                                    }

                                    // admin_app_contrato_agencia_persona_juridica_batch
                                    if ('/admin/app/contrato_agencia_persona_juridica/batch' === $pathinfo) {
                                        return array (  '_controller' => 'AppBundle\\Controller\\ContratoAgenciaController:batchAction',  '_sonata_admin' => 'app.admin.contrato.agencia.persona.juridica',  '_sonata_name' => 'admin_app_contrato_agencia_persona_juridica_batch',  '_route' => 'admin_app_contrato_agencia_persona_juridica_batch',);
                                    }

                                    // admin_app_contrato_agencia_persona_juridica_edit
                                    if (preg_match('#^/admin/app/contrato_agencia_persona_juridica/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_agencia_persona_juridica_edit')), array (  '_controller' => 'AppBundle\\Controller\\ContratoAgenciaController:editAction',  '_sonata_admin' => 'app.admin.contrato.agencia.persona.juridica',  '_sonata_name' => 'admin_app_contrato_agencia_persona_juridica_edit',));
                                    }

                                    // admin_app_contrato_agencia_persona_juridica_delete
                                    if (preg_match('#^/admin/app/contrato_agencia_persona_juridica/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_agencia_persona_juridica_delete')), array (  '_controller' => 'AppBundle\\Controller\\ContratoAgenciaController:deleteAction',  '_sonata_admin' => 'app.admin.contrato.agencia.persona.juridica',  '_sonata_name' => 'admin_app_contrato_agencia_persona_juridica_delete',));
                                    }

                                    // admin_app_contrato_agencia_persona_juridica_show
                                    if (preg_match('#^/admin/app/contrato_agencia_persona_juridica/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_agencia_persona_juridica_show')), array (  '_controller' => 'AppBundle\\Controller\\ContratoAgenciaController:showAction',  '_sonata_admin' => 'app.admin.contrato.agencia.persona.juridica',  '_sonata_name' => 'admin_app_contrato_agencia_persona_juridica_show',));
                                    }

                                    // admin_app_contrato_agencia_persona_juridica_export
                                    if ('/admin/app/contrato_agencia_persona_juridica/export' === $pathinfo) {
                                        return array (  '_controller' => 'AppBundle\\Controller\\ContratoAgenciaController:exportAction',  '_sonata_admin' => 'app.admin.contrato.agencia.persona.juridica',  '_sonata_name' => 'admin_app_contrato_agencia_persona_juridica_export',  '_route' => 'admin_app_contrato_agencia_persona_juridica_export',);
                                    }

                                    // admin_app_contrato_agencia_persona_juridica_myCustom
                                    if ('/admin/app/contrato_agencia_persona_juridica/myCustom' === $pathinfo) {
                                        return array (  '_controller' => 'AppBundle\\Controller\\ContratoAgenciaController:myCustomAction',  '_sonata_admin' => 'app.admin.contrato.agencia.persona.juridica',  '_sonata_name' => 'admin_app_contrato_agencia_persona_juridica_myCustom',  '_route' => 'admin_app_contrato_agencia_persona_juridica_myCustom',);
                                    }

                                    // admin_app_contrato_agencia_persona_juridica_imprimir
                                    if (preg_match('#^/admin/app/contrato_agencia_persona_juridica/(?P<id>[^/]++)/view$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_agencia_persona_juridica_imprimir')), array (  '_controller' => 'AppBundle\\Controller\\ContratoAgenciaController:imprimirAction',  '_sonata_admin' => 'app.admin.contrato.agencia.persona.juridica',  '_sonata_name' => 'admin_app_contrato_agencia_persona_juridica_imprimir',));
                                    }

                                }

                                elseif (0 === strpos($pathinfo, '/admin/app/contrato_areas_internet')) {
                                    // admin_app_contrato_areas_internet_list
                                    if ('/admin/app/contrato_areas_internet/list' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.contrato.areas.internet',  '_sonata_name' => 'admin_app_contrato_areas_internet_list',  '_route' => 'admin_app_contrato_areas_internet_list',);
                                    }

                                    // admin_app_contrato_areas_internet_create
                                    if ('/admin/app/contrato_areas_internet/create' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.contrato.areas.internet',  '_sonata_name' => 'admin_app_contrato_areas_internet_create',  '_route' => 'admin_app_contrato_areas_internet_create',);
                                    }

                                    // admin_app_contrato_areas_internet_batch
                                    if ('/admin/app/contrato_areas_internet/batch' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.contrato.areas.internet',  '_sonata_name' => 'admin_app_contrato_areas_internet_batch',  '_route' => 'admin_app_contrato_areas_internet_batch',);
                                    }

                                    // admin_app_contrato_areas_internet_edit
                                    if (preg_match('#^/admin/app/contrato_areas_internet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_areas_internet_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.contrato.areas.internet',  '_sonata_name' => 'admin_app_contrato_areas_internet_edit',));
                                    }

                                    // admin_app_contrato_areas_internet_delete
                                    if (preg_match('#^/admin/app/contrato_areas_internet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_areas_internet_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.contrato.areas.internet',  '_sonata_name' => 'admin_app_contrato_areas_internet_delete',));
                                    }

                                    // admin_app_contrato_areas_internet_show
                                    if (preg_match('#^/admin/app/contrato_areas_internet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_areas_internet_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.contrato.areas.internet',  '_sonata_name' => 'admin_app_contrato_areas_internet_show',));
                                    }

                                    // admin_app_contrato_areas_internet_export
                                    if ('/admin/app/contrato_areas_internet/export' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.contrato.areas.internet',  '_sonata_name' => 'admin_app_contrato_areas_internet_export',  '_route' => 'admin_app_contrato_areas_internet_export',);
                                    }

                                }

                                elseif (0 === strpos($pathinfo, '/admin/app/contrato_arrendamiento_')) {
                                    if (0 === strpos($pathinfo, '/admin/app/contrato_arrendamiento_espacios')) {
                                        // admin_app_contrato_arrendamiento_espacios_list
                                        if ('/admin/app/contrato_arrendamiento_espacios/list' === $pathinfo) {
                                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_contrato_arrendamiento_espacios_list',  '_route' => 'admin_app_contrato_arrendamiento_espacios_list',);
                                        }

                                        // admin_app_contrato_arrendamiento_espacios_create
                                        if ('/admin/app/contrato_arrendamiento_espacios/create' === $pathinfo) {
                                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_contrato_arrendamiento_espacios_create',  '_route' => 'admin_app_contrato_arrendamiento_espacios_create',);
                                        }

                                        // admin_app_contrato_arrendamiento_espacios_batch
                                        if ('/admin/app/contrato_arrendamiento_espacios/batch' === $pathinfo) {
                                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_contrato_arrendamiento_espacios_batch',  '_route' => 'admin_app_contrato_arrendamiento_espacios_batch',);
                                        }

                                        // admin_app_contrato_arrendamiento_espacios_edit
                                        if (preg_match('#^/admin/app/contrato_arrendamiento_espacios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_arrendamiento_espacios_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_contrato_arrendamiento_espacios_edit',));
                                        }

                                        // admin_app_contrato_arrendamiento_espacios_delete
                                        if (preg_match('#^/admin/app/contrato_arrendamiento_espacios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_arrendamiento_espacios_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_contrato_arrendamiento_espacios_delete',));
                                        }

                                        // admin_app_contrato_arrendamiento_espacios_show
                                        if (preg_match('#^/admin/app/contrato_arrendamiento_espacios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_arrendamiento_espacios_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_contrato_arrendamiento_espacios_show',));
                                        }

                                        // admin_app_contrato_arrendamiento_espacios_export
                                        if ('/admin/app/contrato_arrendamiento_espacios/export' === $pathinfo) {
                                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_contrato_arrendamiento_espacios_export',  '_route' => 'admin_app_contrato_arrendamiento_espacios_export',);
                                        }

                                    }

                                    elseif (0 === strpos($pathinfo, '/admin/app/contrato_arrendamiento_pizarra_privada_pbx')) {
                                        // admin_app_contrato_arrendamiento_pizarra_privada_pbx_list
                                        if ('/admin/app/contrato_arrendamiento_pizarra_privada_pbx/list' === $pathinfo) {
                                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.pizarra.privada.pbx',  '_sonata_name' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_list',  '_route' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_list',);
                                        }

                                        // admin_app_contrato_arrendamiento_pizarra_privada_pbx_create
                                        if ('/admin/app/contrato_arrendamiento_pizarra_privada_pbx/create' === $pathinfo) {
                                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.pizarra.privada.pbx',  '_sonata_name' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_create',  '_route' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_create',);
                                        }

                                        // admin_app_contrato_arrendamiento_pizarra_privada_pbx_batch
                                        if ('/admin/app/contrato_arrendamiento_pizarra_privada_pbx/batch' === $pathinfo) {
                                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.pizarra.privada.pbx',  '_sonata_name' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_batch',  '_route' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_batch',);
                                        }

                                        // admin_app_contrato_arrendamiento_pizarra_privada_pbx_edit
                                        if (preg_match('#^/admin/app/contrato_arrendamiento_pizarra_privada_pbx/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.pizarra.privada.pbx',  '_sonata_name' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_edit',));
                                        }

                                        // admin_app_contrato_arrendamiento_pizarra_privada_pbx_delete
                                        if (preg_match('#^/admin/app/contrato_arrendamiento_pizarra_privada_pbx/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.pizarra.privada.pbx',  '_sonata_name' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_delete',));
                                        }

                                        // admin_app_contrato_arrendamiento_pizarra_privada_pbx_show
                                        if (preg_match('#^/admin/app/contrato_arrendamiento_pizarra_privada_pbx/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.pizarra.privada.pbx',  '_sonata_name' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_show',));
                                        }

                                        // admin_app_contrato_arrendamiento_pizarra_privada_pbx_export
                                        if ('/admin/app/contrato_arrendamiento_pizarra_privada_pbx/export' === $pathinfo) {
                                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.pizarra.privada.pbx',  '_sonata_name' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_export',  '_route' => 'admin_app_contrato_arrendamiento_pizarra_privada_pbx_export',);
                                        }

                                    }

                                    elseif (0 === strpos($pathinfo, '/admin/app/contrato_arrendamiento_redes')) {
                                        // admin_app_contrato_arrendamiento_redes_list
                                        if ('/admin/app/contrato_arrendamiento_redes/list' === $pathinfo) {
                                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_contrato_arrendamiento_redes_list',  '_route' => 'admin_app_contrato_arrendamiento_redes_list',);
                                        }

                                        // admin_app_contrato_arrendamiento_redes_create
                                        if ('/admin/app/contrato_arrendamiento_redes/create' === $pathinfo) {
                                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_contrato_arrendamiento_redes_create',  '_route' => 'admin_app_contrato_arrendamiento_redes_create',);
                                        }

                                        // admin_app_contrato_arrendamiento_redes_batch
                                        if ('/admin/app/contrato_arrendamiento_redes/batch' === $pathinfo) {
                                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_contrato_arrendamiento_redes_batch',  '_route' => 'admin_app_contrato_arrendamiento_redes_batch',);
                                        }

                                        // admin_app_contrato_arrendamiento_redes_edit
                                        if (preg_match('#^/admin/app/contrato_arrendamiento_redes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_arrendamiento_redes_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_contrato_arrendamiento_redes_edit',));
                                        }

                                        // admin_app_contrato_arrendamiento_redes_delete
                                        if (preg_match('#^/admin/app/contrato_arrendamiento_redes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_arrendamiento_redes_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_contrato_arrendamiento_redes_delete',));
                                        }

                                        // admin_app_contrato_arrendamiento_redes_show
                                        if (preg_match('#^/admin/app/contrato_arrendamiento_redes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_arrendamiento_redes_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_contrato_arrendamiento_redes_show',));
                                        }

                                        // admin_app_contrato_arrendamiento_redes_export
                                        if ('/admin/app/contrato_arrendamiento_redes/export' === $pathinfo) {
                                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_contrato_arrendamiento_redes_export',  '_route' => 'admin_app_contrato_arrendamiento_redes_export',);
                                        }

                                    }

                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/contrato_co')) {
                                if (0 === strpos($pathinfo, '/admin/app/contrato_compra_venta')) {
                                    // admin_app_contrato_compra_venta_list
                                    if ('/admin/app/contrato_compra_venta/list' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.contrato.compra.venta',  '_sonata_name' => 'admin_app_contrato_compra_venta_list',  '_route' => 'admin_app_contrato_compra_venta_list',);
                                    }

                                    // admin_app_contrato_compra_venta_create
                                    if ('/admin/app/contrato_compra_venta/create' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.contrato.compra.venta',  '_sonata_name' => 'admin_app_contrato_compra_venta_create',  '_route' => 'admin_app_contrato_compra_venta_create',);
                                    }

                                    // admin_app_contrato_compra_venta_batch
                                    if ('/admin/app/contrato_compra_venta/batch' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.contrato.compra.venta',  '_sonata_name' => 'admin_app_contrato_compra_venta_batch',  '_route' => 'admin_app_contrato_compra_venta_batch',);
                                    }

                                    // admin_app_contrato_compra_venta_edit
                                    if (preg_match('#^/admin/app/contrato_compra_venta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_compra_venta_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.contrato.compra.venta',  '_sonata_name' => 'admin_app_contrato_compra_venta_edit',));
                                    }

                                    // admin_app_contrato_compra_venta_delete
                                    if (preg_match('#^/admin/app/contrato_compra_venta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_compra_venta_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.contrato.compra.venta',  '_sonata_name' => 'admin_app_contrato_compra_venta_delete',));
                                    }

                                    // admin_app_contrato_compra_venta_show
                                    if (preg_match('#^/admin/app/contrato_compra_venta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_compra_venta_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.contrato.compra.venta',  '_sonata_name' => 'admin_app_contrato_compra_venta_show',));
                                    }

                                    // admin_app_contrato_compra_venta_export
                                    if ('/admin/app/contrato_compra_venta/export' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.contrato.compra.venta',  '_sonata_name' => 'admin_app_contrato_compra_venta_export',  '_route' => 'admin_app_contrato_compra_venta_export',);
                                    }

                                }

                                elseif (0 === strpos($pathinfo, '/admin/app/contrato_comp_vent_pizarra')) {
                                    // admin_app_contrato_comp_vent_pizarra_list
                                    if ('/admin/app/contrato_comp_vent_pizarra/list' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.contrato.comp.vent.pizarra',  '_sonata_name' => 'admin_app_contrato_comp_vent_pizarra_list',  '_route' => 'admin_app_contrato_comp_vent_pizarra_list',);
                                    }

                                    // admin_app_contrato_comp_vent_pizarra_create
                                    if ('/admin/app/contrato_comp_vent_pizarra/create' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.contrato.comp.vent.pizarra',  '_sonata_name' => 'admin_app_contrato_comp_vent_pizarra_create',  '_route' => 'admin_app_contrato_comp_vent_pizarra_create',);
                                    }

                                    // admin_app_contrato_comp_vent_pizarra_batch
                                    if ('/admin/app/contrato_comp_vent_pizarra/batch' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.contrato.comp.vent.pizarra',  '_sonata_name' => 'admin_app_contrato_comp_vent_pizarra_batch',  '_route' => 'admin_app_contrato_comp_vent_pizarra_batch',);
                                    }

                                    // admin_app_contrato_comp_vent_pizarra_edit
                                    if (preg_match('#^/admin/app/contrato_comp_vent_pizarra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_comp_vent_pizarra_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.contrato.comp.vent.pizarra',  '_sonata_name' => 'admin_app_contrato_comp_vent_pizarra_edit',));
                                    }

                                    // admin_app_contrato_comp_vent_pizarra_delete
                                    if (preg_match('#^/admin/app/contrato_comp_vent_pizarra/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_comp_vent_pizarra_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.contrato.comp.vent.pizarra',  '_sonata_name' => 'admin_app_contrato_comp_vent_pizarra_delete',));
                                    }

                                    // admin_app_contrato_comp_vent_pizarra_show
                                    if (preg_match('#^/admin/app/contrato_comp_vent_pizarra/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_comp_vent_pizarra_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.contrato.comp.vent.pizarra',  '_sonata_name' => 'admin_app_contrato_comp_vent_pizarra_show',));
                                    }

                                    // admin_app_contrato_comp_vent_pizarra_export
                                    if ('/admin/app/contrato_comp_vent_pizarra/export' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.contrato.comp.vent.pizarra',  '_sonata_name' => 'admin_app_contrato_comp_vent_pizarra_export',  '_route' => 'admin_app_contrato_comp_vent_pizarra_export',);
                                    }

                                }

                                elseif (0 === strpos($pathinfo, '/admin/app/contrato_contactos_telefonicos')) {
                                    // admin_app_contrato_contactos_telefonicos_list
                                    if ('/admin/app/contrato_contactos_telefonicos/list' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_contrato_contactos_telefonicos_list',  '_route' => 'admin_app_contrato_contactos_telefonicos_list',);
                                    }

                                    // admin_app_contrato_contactos_telefonicos_create
                                    if ('/admin/app/contrato_contactos_telefonicos/create' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_contrato_contactos_telefonicos_create',  '_route' => 'admin_app_contrato_contactos_telefonicos_create',);
                                    }

                                    // admin_app_contrato_contactos_telefonicos_batch
                                    if ('/admin/app/contrato_contactos_telefonicos/batch' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_contrato_contactos_telefonicos_batch',  '_route' => 'admin_app_contrato_contactos_telefonicos_batch',);
                                    }

                                    // admin_app_contrato_contactos_telefonicos_edit
                                    if (preg_match('#^/admin/app/contrato_contactos_telefonicos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_contactos_telefonicos_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_contrato_contactos_telefonicos_edit',));
                                    }

                                    // admin_app_contrato_contactos_telefonicos_delete
                                    if (preg_match('#^/admin/app/contrato_contactos_telefonicos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_contactos_telefonicos_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_contrato_contactos_telefonicos_delete',));
                                    }

                                    // admin_app_contrato_contactos_telefonicos_show
                                    if (preg_match('#^/admin/app/contrato_contactos_telefonicos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_contactos_telefonicos_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_contrato_contactos_telefonicos_show',));
                                    }

                                    // admin_app_contrato_contactos_telefonicos_export
                                    if ('/admin/app/contrato_contactos_telefonicos/export' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_contrato_contactos_telefonicos_export',  '_route' => 'admin_app_contrato_contactos_telefonicos_export',);
                                    }

                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/contrato_instalacion_pizarra_pbx')) {
                                // admin_app_contrato_instalacion_pizarra_pbx_list
                                if ('/admin/app/contrato_instalacion_pizarra_pbx/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_instalacion_pizarra_pbx_list',  '_route' => 'admin_app_contrato_instalacion_pizarra_pbx_list',);
                                }

                                // admin_app_contrato_instalacion_pizarra_pbx_create
                                if ('/admin/app/contrato_instalacion_pizarra_pbx/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_instalacion_pizarra_pbx_create',  '_route' => 'admin_app_contrato_instalacion_pizarra_pbx_create',);
                                }

                                // admin_app_contrato_instalacion_pizarra_pbx_batch
                                if ('/admin/app/contrato_instalacion_pizarra_pbx/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_instalacion_pizarra_pbx_batch',  '_route' => 'admin_app_contrato_instalacion_pizarra_pbx_batch',);
                                }

                                // admin_app_contrato_instalacion_pizarra_pbx_edit
                                if (preg_match('#^/admin/app/contrato_instalacion_pizarra_pbx/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_instalacion_pizarra_pbx_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_instalacion_pizarra_pbx_edit',));
                                }

                                // admin_app_contrato_instalacion_pizarra_pbx_delete
                                if (preg_match('#^/admin/app/contrato_instalacion_pizarra_pbx/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_instalacion_pizarra_pbx_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_instalacion_pizarra_pbx_delete',));
                                }

                                // admin_app_contrato_instalacion_pizarra_pbx_show
                                if (preg_match('#^/admin/app/contrato_instalacion_pizarra_pbx/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_instalacion_pizarra_pbx_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_instalacion_pizarra_pbx_show',));
                                }

                                // admin_app_contrato_instalacion_pizarra_pbx_export
                                if ('/admin/app/contrato_instalacion_pizarra_pbx/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_instalacion_pizarra_pbx_export',  '_route' => 'admin_app_contrato_instalacion_pizarra_pbx_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/contrato_mantenimiento_pizarra_pbx')) {
                                // admin_app_contrato_mantenimiento_pizarra_pbx_list
                                if ('/admin/app/contrato_mantenimiento_pizarra_pbx/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_mantenimiento_pizarra_pbx_list',  '_route' => 'admin_app_contrato_mantenimiento_pizarra_pbx_list',);
                                }

                                // admin_app_contrato_mantenimiento_pizarra_pbx_create
                                if ('/admin/app/contrato_mantenimiento_pizarra_pbx/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_mantenimiento_pizarra_pbx_create',  '_route' => 'admin_app_contrato_mantenimiento_pizarra_pbx_create',);
                                }

                                // admin_app_contrato_mantenimiento_pizarra_pbx_batch
                                if ('/admin/app/contrato_mantenimiento_pizarra_pbx/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_mantenimiento_pizarra_pbx_batch',  '_route' => 'admin_app_contrato_mantenimiento_pizarra_pbx_batch',);
                                }

                                // admin_app_contrato_mantenimiento_pizarra_pbx_edit
                                if (preg_match('#^/admin/app/contrato_mantenimiento_pizarra_pbx/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_mantenimiento_pizarra_pbx_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_mantenimiento_pizarra_pbx_edit',));
                                }

                                // admin_app_contrato_mantenimiento_pizarra_pbx_delete
                                if (preg_match('#^/admin/app/contrato_mantenimiento_pizarra_pbx/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_mantenimiento_pizarra_pbx_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_mantenimiento_pizarra_pbx_delete',));
                                }

                                // admin_app_contrato_mantenimiento_pizarra_pbx_show
                                if (preg_match('#^/admin/app/contrato_mantenimiento_pizarra_pbx/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_mantenimiento_pizarra_pbx_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_mantenimiento_pizarra_pbx_show',));
                                }

                                // admin_app_contrato_mantenimiento_pizarra_pbx_export
                                if ('/admin/app/contrato_mantenimiento_pizarra_pbx/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_contrato_mantenimiento_pizarra_pbx_export',  '_route' => 'admin_app_contrato_mantenimiento_pizarra_pbx_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/contrato_prestacion_servicios')) {
                                // admin_app_contrato_prestacion_servicios_list
                                if ('/admin/app/contrato_prestacion_servicios/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.contrato.prestacion.servicios',  '_sonata_name' => 'admin_app_contrato_prestacion_servicios_list',  '_route' => 'admin_app_contrato_prestacion_servicios_list',);
                                }

                                // admin_app_contrato_prestacion_servicios_create
                                if ('/admin/app/contrato_prestacion_servicios/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.contrato.prestacion.servicios',  '_sonata_name' => 'admin_app_contrato_prestacion_servicios_create',  '_route' => 'admin_app_contrato_prestacion_servicios_create',);
                                }

                                // admin_app_contrato_prestacion_servicios_batch
                                if ('/admin/app/contrato_prestacion_servicios/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.contrato.prestacion.servicios',  '_sonata_name' => 'admin_app_contrato_prestacion_servicios_batch',  '_route' => 'admin_app_contrato_prestacion_servicios_batch',);
                                }

                                // admin_app_contrato_prestacion_servicios_edit
                                if (preg_match('#^/admin/app/contrato_prestacion_servicios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_prestacion_servicios_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.contrato.prestacion.servicios',  '_sonata_name' => 'admin_app_contrato_prestacion_servicios_edit',));
                                }

                                // admin_app_contrato_prestacion_servicios_delete
                                if (preg_match('#^/admin/app/contrato_prestacion_servicios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_prestacion_servicios_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.contrato.prestacion.servicios',  '_sonata_name' => 'admin_app_contrato_prestacion_servicios_delete',));
                                }

                                // admin_app_contrato_prestacion_servicios_show
                                if (preg_match('#^/admin/app/contrato_prestacion_servicios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_prestacion_servicios_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.contrato.prestacion.servicios',  '_sonata_name' => 'admin_app_contrato_prestacion_servicios_show',));
                                }

                                // admin_app_contrato_prestacion_servicios_export
                                if ('/admin/app/contrato_prestacion_servicios/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.contrato.prestacion.servicios',  '_sonata_name' => 'admin_app_contrato_prestacion_servicios_export',  '_route' => 'admin_app_contrato_prestacion_servicios_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/contrato_recarga_por_pos')) {
                                // admin_app_contrato_recarga_por_pos_list
                                if ('/admin/app/contrato_recarga_por_pos/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_contrato_recarga_por_pos_list',  '_route' => 'admin_app_contrato_recarga_por_pos_list',);
                                }

                                // admin_app_contrato_recarga_por_pos_create
                                if ('/admin/app/contrato_recarga_por_pos/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_contrato_recarga_por_pos_create',  '_route' => 'admin_app_contrato_recarga_por_pos_create',);
                                }

                                // admin_app_contrato_recarga_por_pos_batch
                                if ('/admin/app/contrato_recarga_por_pos/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_contrato_recarga_por_pos_batch',  '_route' => 'admin_app_contrato_recarga_por_pos_batch',);
                                }

                                // admin_app_contrato_recarga_por_pos_edit
                                if (preg_match('#^/admin/app/contrato_recarga_por_pos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_recarga_por_pos_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_contrato_recarga_por_pos_edit',));
                                }

                                // admin_app_contrato_recarga_por_pos_delete
                                if (preg_match('#^/admin/app/contrato_recarga_por_pos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_recarga_por_pos_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_contrato_recarga_por_pos_delete',));
                                }

                                // admin_app_contrato_recarga_por_pos_show
                                if (preg_match('#^/admin/app/contrato_recarga_por_pos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_contrato_recarga_por_pos_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_contrato_recarga_por_pos_show',));
                                }

                                // admin_app_contrato_recarga_por_pos_export
                                if ('/admin/app/contrato_recarga_por_pos/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_contrato_recarga_por_pos_export',  '_route' => 'admin_app_contrato_recarga_por_pos_export',);
                                }

                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/empresa')) {
                        // admin_app_empresa_list
                        if ('/admin/app/empresa/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.empresa',  '_sonata_name' => 'admin_app_empresa_list',  '_route' => 'admin_app_empresa_list',);
                        }

                        // admin_app_empresa_create
                        if ('/admin/app/empresa/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.empresa',  '_sonata_name' => 'admin_app_empresa_create',  '_route' => 'admin_app_empresa_create',);
                        }

                        // admin_app_empresa_batch
                        if ('/admin/app/empresa/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.empresa',  '_sonata_name' => 'admin_app_empresa_batch',  '_route' => 'admin_app_empresa_batch',);
                        }

                        // admin_app_empresa_edit
                        if (preg_match('#^/admin/app/empresa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_empresa_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.empresa',  '_sonata_name' => 'admin_app_empresa_edit',));
                        }

                        // admin_app_empresa_delete
                        if (preg_match('#^/admin/app/empresa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_empresa_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.empresa',  '_sonata_name' => 'admin_app_empresa_delete',));
                        }

                        // admin_app_empresa_show
                        if (preg_match('#^/admin/app/empresa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_empresa_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.empresa',  '_sonata_name' => 'admin_app_empresa_show',));
                        }

                        // admin_app_empresa_export
                        if ('/admin/app/empresa/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.empresa',  '_sonata_name' => 'admin_app_empresa_export',  '_route' => 'admin_app_empresa_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/equipamiento_gsm_pos')) {
                        // admin_app_equipamiento_gsm_pos_list
                        if ('/admin/app/equipamiento_gsm_pos/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.equipamiento.gsm.pos',  '_sonata_name' => 'admin_app_equipamiento_gsm_pos_list',  '_route' => 'admin_app_equipamiento_gsm_pos_list',);
                        }

                        // admin_app_equipamiento_gsm_pos_create
                        if ('/admin/app/equipamiento_gsm_pos/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.equipamiento.gsm.pos',  '_sonata_name' => 'admin_app_equipamiento_gsm_pos_create',  '_route' => 'admin_app_equipamiento_gsm_pos_create',);
                        }

                        // admin_app_equipamiento_gsm_pos_batch
                        if ('/admin/app/equipamiento_gsm_pos/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.equipamiento.gsm.pos',  '_sonata_name' => 'admin_app_equipamiento_gsm_pos_batch',  '_route' => 'admin_app_equipamiento_gsm_pos_batch',);
                        }

                        // admin_app_equipamiento_gsm_pos_edit
                        if (preg_match('#^/admin/app/equipamiento_gsm_pos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_equipamiento_gsm_pos_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.equipamiento.gsm.pos',  '_sonata_name' => 'admin_app_equipamiento_gsm_pos_edit',));
                        }

                        // admin_app_equipamiento_gsm_pos_delete
                        if (preg_match('#^/admin/app/equipamiento_gsm_pos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_equipamiento_gsm_pos_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.equipamiento.gsm.pos',  '_sonata_name' => 'admin_app_equipamiento_gsm_pos_delete',));
                        }

                        // admin_app_equipamiento_gsm_pos_show
                        if (preg_match('#^/admin/app/equipamiento_gsm_pos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_equipamiento_gsm_pos_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.equipamiento.gsm.pos',  '_sonata_name' => 'admin_app_equipamiento_gsm_pos_show',));
                        }

                        // admin_app_equipamiento_gsm_pos_export
                        if ('/admin/app/equipamiento_gsm_pos/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.equipamiento.gsm.pos',  '_sonata_name' => 'admin_app_equipamiento_gsm_pos_export',  '_route' => 'admin_app_equipamiento_gsm_pos_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/organismos')) {
                        // admin_app_organismos_list
                        if ('/admin/app/organismos/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.organismos',  '_sonata_name' => 'admin_app_organismos_list',  '_route' => 'admin_app_organismos_list',);
                        }

                        // admin_app_organismos_create
                        if ('/admin/app/organismos/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.organismos',  '_sonata_name' => 'admin_app_organismos_create',  '_route' => 'admin_app_organismos_create',);
                        }

                        // admin_app_organismos_batch
                        if ('/admin/app/organismos/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.organismos',  '_sonata_name' => 'admin_app_organismos_batch',  '_route' => 'admin_app_organismos_batch',);
                        }

                        // admin_app_organismos_edit
                        if (preg_match('#^/admin/app/organismos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_organismos_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.organismos',  '_sonata_name' => 'admin_app_organismos_edit',));
                        }

                        // admin_app_organismos_delete
                        if (preg_match('#^/admin/app/organismos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_organismos_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.organismos',  '_sonata_name' => 'admin_app_organismos_delete',));
                        }

                        // admin_app_organismos_show
                        if (preg_match('#^/admin/app/organismos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_organismos_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.organismos',  '_sonata_name' => 'admin_app_organismos_show',));
                        }

                        // admin_app_organismos_export
                        if ('/admin/app/organismos/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.organismos',  '_sonata_name' => 'admin_app_organismos_export',  '_route' => 'admin_app_organismos_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/p')) {
                        if (0 === strpos($pathinfo, '/admin/app/personas')) {
                            // admin_app_personas_list
                            if ('/admin/app/personas/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.personas',  '_sonata_name' => 'admin_app_personas_list',  '_route' => 'admin_app_personas_list',);
                            }

                            // admin_app_personas_create
                            if ('/admin/app/personas/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.personas',  '_sonata_name' => 'admin_app_personas_create',  '_route' => 'admin_app_personas_create',);
                            }

                            // admin_app_personas_batch
                            if ('/admin/app/personas/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.personas',  '_sonata_name' => 'admin_app_personas_batch',  '_route' => 'admin_app_personas_batch',);
                            }

                            // admin_app_personas_edit
                            if (preg_match('#^/admin/app/personas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_personas_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.personas',  '_sonata_name' => 'admin_app_personas_edit',));
                            }

                            // admin_app_personas_delete
                            if (preg_match('#^/admin/app/personas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_personas_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.personas',  '_sonata_name' => 'admin_app_personas_delete',));
                            }

                            // admin_app_personas_show
                            if (preg_match('#^/admin/app/personas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_personas_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.personas',  '_sonata_name' => 'admin_app_personas_show',));
                            }

                            // admin_app_personas_export
                            if ('/admin/app/personas/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.personas',  '_sonata_name' => 'admin_app_personas_export',  '_route' => 'admin_app_personas_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/pizarra_pbx')) {
                            // admin_app_pizarra_pbx_list
                            if ('/admin/app/pizarra_pbx/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.pizarra.pbx',  '_sonata_name' => 'admin_app_pizarra_pbx_list',  '_route' => 'admin_app_pizarra_pbx_list',);
                            }

                            // admin_app_pizarra_pbx_create
                            if ('/admin/app/pizarra_pbx/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.pizarra.pbx',  '_sonata_name' => 'admin_app_pizarra_pbx_create',  '_route' => 'admin_app_pizarra_pbx_create',);
                            }

                            // admin_app_pizarra_pbx_batch
                            if ('/admin/app/pizarra_pbx/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.pizarra.pbx',  '_sonata_name' => 'admin_app_pizarra_pbx_batch',  '_route' => 'admin_app_pizarra_pbx_batch',);
                            }

                            // admin_app_pizarra_pbx_edit
                            if (preg_match('#^/admin/app/pizarra_pbx/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_pizarra_pbx_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.pizarra.pbx',  '_sonata_name' => 'admin_app_pizarra_pbx_edit',));
                            }

                            // admin_app_pizarra_pbx_delete
                            if (preg_match('#^/admin/app/pizarra_pbx/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_pizarra_pbx_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.pizarra.pbx',  '_sonata_name' => 'admin_app_pizarra_pbx_delete',));
                            }

                            // admin_app_pizarra_pbx_show
                            if (preg_match('#^/admin/app/pizarra_pbx/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_pizarra_pbx_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.pizarra.pbx',  '_sonata_name' => 'admin_app_pizarra_pbx_show',));
                            }

                            // admin_app_pizarra_pbx_export
                            if ('/admin/app/pizarra_pbx/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.pizarra.pbx',  '_sonata_name' => 'admin_app_pizarra_pbx_export',  '_route' => 'admin_app_pizarra_pbx_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/protecciones_tierra')) {
                            // admin_app_protecciones_tierra_list
                            if ('/admin/app/protecciones_tierra/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.protecciones.tierra',  '_sonata_name' => 'admin_app_protecciones_tierra_list',  '_route' => 'admin_app_protecciones_tierra_list',);
                            }

                            // admin_app_protecciones_tierra_create
                            if ('/admin/app/protecciones_tierra/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.protecciones.tierra',  '_sonata_name' => 'admin_app_protecciones_tierra_create',  '_route' => 'admin_app_protecciones_tierra_create',);
                            }

                            // admin_app_protecciones_tierra_batch
                            if ('/admin/app/protecciones_tierra/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.protecciones.tierra',  '_sonata_name' => 'admin_app_protecciones_tierra_batch',  '_route' => 'admin_app_protecciones_tierra_batch',);
                            }

                            // admin_app_protecciones_tierra_edit
                            if (preg_match('#^/admin/app/protecciones_tierra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_protecciones_tierra_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.protecciones.tierra',  '_sonata_name' => 'admin_app_protecciones_tierra_edit',));
                            }

                            // admin_app_protecciones_tierra_delete
                            if (preg_match('#^/admin/app/protecciones_tierra/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_protecciones_tierra_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.protecciones.tierra',  '_sonata_name' => 'admin_app_protecciones_tierra_delete',));
                            }

                            // admin_app_protecciones_tierra_show
                            if (preg_match('#^/admin/app/protecciones_tierra/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_protecciones_tierra_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.protecciones.tierra',  '_sonata_name' => 'admin_app_protecciones_tierra_show',));
                            }

                            // admin_app_protecciones_tierra_export
                            if ('/admin/app/protecciones_tierra/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.protecciones.tierra',  '_sonata_name' => 'admin_app_protecciones_tierra_export',  '_route' => 'admin_app_protecciones_tierra_export',);
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/anexo')) {
                        if (0 === strpos($pathinfo, '/admin/app/anexo1_contrato_')) {
                            if (0 === strpos($pathinfo, '/admin/app/anexo1_contrato_areas_internet')) {
                                // admin_app_anexo1_contrato_areas_internet_list
                                if ('/admin/app/anexo1_contrato_areas_internet/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo1_contrato_areas_internet_list',  '_route' => 'admin_app_anexo1_contrato_areas_internet_list',);
                                }

                                // admin_app_anexo1_contrato_areas_internet_create
                                if ('/admin/app/anexo1_contrato_areas_internet/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo1_contrato_areas_internet_create',  '_route' => 'admin_app_anexo1_contrato_areas_internet_create',);
                                }

                                // admin_app_anexo1_contrato_areas_internet_batch
                                if ('/admin/app/anexo1_contrato_areas_internet/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo1_contrato_areas_internet_batch',  '_route' => 'admin_app_anexo1_contrato_areas_internet_batch',);
                                }

                                // admin_app_anexo1_contrato_areas_internet_edit
                                if (preg_match('#^/admin/app/anexo1_contrato_areas_internet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_areas_internet_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo1_contrato_areas_internet_edit',));
                                }

                                // admin_app_anexo1_contrato_areas_internet_delete
                                if (preg_match('#^/admin/app/anexo1_contrato_areas_internet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_areas_internet_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo1_contrato_areas_internet_delete',));
                                }

                                // admin_app_anexo1_contrato_areas_internet_show
                                if (preg_match('#^/admin/app/anexo1_contrato_areas_internet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_areas_internet_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo1_contrato_areas_internet_show',));
                                }

                                // admin_app_anexo1_contrato_areas_internet_export
                                if ('/admin/app/anexo1_contrato_areas_internet/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo1_contrato_areas_internet_export',  '_route' => 'admin_app_anexo1_contrato_areas_internet_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexo1_contrato_arrendamiento_')) {
                                if (0 === strpos($pathinfo, '/admin/app/anexo1_contrato_arrendamiento_espacios')) {
                                    // admin_app_anexo1_contrato_arrendamiento_espacios_list
                                    if ('/admin/app/anexo1_contrato_arrendamiento_espacios/list' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_espacios_list',  '_route' => 'admin_app_anexo1_contrato_arrendamiento_espacios_list',);
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_espacios_create
                                    if ('/admin/app/anexo1_contrato_arrendamiento_espacios/create' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_espacios_create',  '_route' => 'admin_app_anexo1_contrato_arrendamiento_espacios_create',);
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_espacios_batch
                                    if ('/admin/app/anexo1_contrato_arrendamiento_espacios/batch' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_espacios_batch',  '_route' => 'admin_app_anexo1_contrato_arrendamiento_espacios_batch',);
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_espacios_edit
                                    if (preg_match('#^/admin/app/anexo1_contrato_arrendamiento_espacios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_arrendamiento_espacios_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_espacios_edit',));
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_espacios_delete
                                    if (preg_match('#^/admin/app/anexo1_contrato_arrendamiento_espacios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_arrendamiento_espacios_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_espacios_delete',));
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_espacios_show
                                    if (preg_match('#^/admin/app/anexo1_contrato_arrendamiento_espacios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_arrendamiento_espacios_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_espacios_show',));
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_espacios_export
                                    if ('/admin/app/anexo1_contrato_arrendamiento_espacios/export' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_espacios_export',  '_route' => 'admin_app_anexo1_contrato_arrendamiento_espacios_export',);
                                    }

                                }

                                elseif (0 === strpos($pathinfo, '/admin/app/anexo1_contrato_arrendamiento_pizarras_privadas_pbx')) {
                                    // admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_list
                                    if ('/admin/app/anexo1_contrato_arrendamiento_pizarras_privadas_pbx/list' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.pizarras.privadas.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_list',  '_route' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_list',);
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_create
                                    if ('/admin/app/anexo1_contrato_arrendamiento_pizarras_privadas_pbx/create' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.pizarras.privadas.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_create',  '_route' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_create',);
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_batch
                                    if ('/admin/app/anexo1_contrato_arrendamiento_pizarras_privadas_pbx/batch' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.pizarras.privadas.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_batch',  '_route' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_batch',);
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_edit
                                    if (preg_match('#^/admin/app/anexo1_contrato_arrendamiento_pizarras_privadas_pbx/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.pizarras.privadas.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_edit',));
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_delete
                                    if (preg_match('#^/admin/app/anexo1_contrato_arrendamiento_pizarras_privadas_pbx/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.pizarras.privadas.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_delete',));
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_show
                                    if (preg_match('#^/admin/app/anexo1_contrato_arrendamiento_pizarras_privadas_pbx/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.pizarras.privadas.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_show',));
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_export
                                    if ('/admin/app/anexo1_contrato_arrendamiento_pizarras_privadas_pbx/export' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.pizarras.privadas.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_export',  '_route' => 'admin_app_anexo1_contrato_arrendamiento_pizarras_privadas_pbx_export',);
                                    }

                                }

                                elseif (0 === strpos($pathinfo, '/admin/app/anexo1_contrato_arrendamiento_redes')) {
                                    // admin_app_anexo1_contrato_arrendamiento_redes_list
                                    if ('/admin/app/anexo1_contrato_arrendamiento_redes/list' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_redes_list',  '_route' => 'admin_app_anexo1_contrato_arrendamiento_redes_list',);
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_redes_create
                                    if ('/admin/app/anexo1_contrato_arrendamiento_redes/create' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_redes_create',  '_route' => 'admin_app_anexo1_contrato_arrendamiento_redes_create',);
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_redes_batch
                                    if ('/admin/app/anexo1_contrato_arrendamiento_redes/batch' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_redes_batch',  '_route' => 'admin_app_anexo1_contrato_arrendamiento_redes_batch',);
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_redes_edit
                                    if (preg_match('#^/admin/app/anexo1_contrato_arrendamiento_redes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_arrendamiento_redes_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_redes_edit',));
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_redes_delete
                                    if (preg_match('#^/admin/app/anexo1_contrato_arrendamiento_redes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_arrendamiento_redes_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_redes_delete',));
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_redes_show
                                    if (preg_match('#^/admin/app/anexo1_contrato_arrendamiento_redes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_arrendamiento_redes_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_redes_show',));
                                    }

                                    // admin_app_anexo1_contrato_arrendamiento_redes_export
                                    if ('/admin/app/anexo1_contrato_arrendamiento_redes/export' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo1_contrato_arrendamiento_redes_export',  '_route' => 'admin_app_anexo1_contrato_arrendamiento_redes_export',);
                                    }

                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexo1_contrato_compra_venta')) {
                                // admin_app_anexo1_contrato_compra_venta_list
                                if ('/admin/app/anexo1_contrato_compra_venta/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_list',  '_route' => 'admin_app_anexo1_contrato_compra_venta_list',);
                                }

                                // admin_app_anexo1_contrato_compra_venta_create
                                if ('/admin/app/anexo1_contrato_compra_venta/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_create',  '_route' => 'admin_app_anexo1_contrato_compra_venta_create',);
                                }

                                // admin_app_anexo1_contrato_compra_venta_batch
                                if ('/admin/app/anexo1_contrato_compra_venta/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_batch',  '_route' => 'admin_app_anexo1_contrato_compra_venta_batch',);
                                }

                                // admin_app_anexo1_contrato_compra_venta_edit
                                if (preg_match('#^/admin/app/anexo1_contrato_compra_venta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_compra_venta_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_edit',));
                                }

                                // admin_app_anexo1_contrato_compra_venta_delete
                                if (preg_match('#^/admin/app/anexo1_contrato_compra_venta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_compra_venta_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_delete',));
                                }

                                // admin_app_anexo1_contrato_compra_venta_show
                                if (preg_match('#^/admin/app/anexo1_contrato_compra_venta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_compra_venta_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_show',));
                                }

                                // admin_app_anexo1_contrato_compra_venta_export
                                if ('/admin/app/anexo1_contrato_compra_venta/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_export',  '_route' => 'admin_app_anexo1_contrato_compra_venta_export',);
                                }

                                if (0 === strpos($pathinfo, '/admin/app/anexo1_contrato_compra_venta_pizarra')) {
                                    // admin_app_anexo1_contrato_compra_venta_pizarra_list
                                    if ('/admin/app/anexo1_contrato_compra_venta_pizarra/list' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta.pizarra',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_pizarra_list',  '_route' => 'admin_app_anexo1_contrato_compra_venta_pizarra_list',);
                                    }

                                    // admin_app_anexo1_contrato_compra_venta_pizarra_create
                                    if ('/admin/app/anexo1_contrato_compra_venta_pizarra/create' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta.pizarra',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_pizarra_create',  '_route' => 'admin_app_anexo1_contrato_compra_venta_pizarra_create',);
                                    }

                                    // admin_app_anexo1_contrato_compra_venta_pizarra_batch
                                    if ('/admin/app/anexo1_contrato_compra_venta_pizarra/batch' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta.pizarra',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_pizarra_batch',  '_route' => 'admin_app_anexo1_contrato_compra_venta_pizarra_batch',);
                                    }

                                    // admin_app_anexo1_contrato_compra_venta_pizarra_edit
                                    if (preg_match('#^/admin/app/anexo1_contrato_compra_venta_pizarra/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_compra_venta_pizarra_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta.pizarra',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_pizarra_edit',));
                                    }

                                    // admin_app_anexo1_contrato_compra_venta_pizarra_delete
                                    if (preg_match('#^/admin/app/anexo1_contrato_compra_venta_pizarra/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_compra_venta_pizarra_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta.pizarra',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_pizarra_delete',));
                                    }

                                    // admin_app_anexo1_contrato_compra_venta_pizarra_show
                                    if (preg_match('#^/admin/app/anexo1_contrato_compra_venta_pizarra/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_compra_venta_pizarra_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta.pizarra',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_pizarra_show',));
                                    }

                                    // admin_app_anexo1_contrato_compra_venta_pizarra_export
                                    if ('/admin/app/anexo1_contrato_compra_venta_pizarra/export' === $pathinfo) {
                                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.compra.venta.pizarra',  '_sonata_name' => 'admin_app_anexo1_contrato_compra_venta_pizarra_export',  '_route' => 'admin_app_anexo1_contrato_compra_venta_pizarra_export',);
                                    }

                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexo1_contrato_contactos_telefonicos')) {
                                // admin_app_anexo1_contrato_contactos_telefonicos_list
                                if ('/admin/app/anexo1_contrato_contactos_telefonicos/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_anexo1_contrato_contactos_telefonicos_list',  '_route' => 'admin_app_anexo1_contrato_contactos_telefonicos_list',);
                                }

                                // admin_app_anexo1_contrato_contactos_telefonicos_create
                                if ('/admin/app/anexo1_contrato_contactos_telefonicos/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_anexo1_contrato_contactos_telefonicos_create',  '_route' => 'admin_app_anexo1_contrato_contactos_telefonicos_create',);
                                }

                                // admin_app_anexo1_contrato_contactos_telefonicos_batch
                                if ('/admin/app/anexo1_contrato_contactos_telefonicos/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_anexo1_contrato_contactos_telefonicos_batch',  '_route' => 'admin_app_anexo1_contrato_contactos_telefonicos_batch',);
                                }

                                // admin_app_anexo1_contrato_contactos_telefonicos_edit
                                if (preg_match('#^/admin/app/anexo1_contrato_contactos_telefonicos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_contactos_telefonicos_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_anexo1_contrato_contactos_telefonicos_edit',));
                                }

                                // admin_app_anexo1_contrato_contactos_telefonicos_delete
                                if (preg_match('#^/admin/app/anexo1_contrato_contactos_telefonicos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_contactos_telefonicos_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_anexo1_contrato_contactos_telefonicos_delete',));
                                }

                                // admin_app_anexo1_contrato_contactos_telefonicos_show
                                if (preg_match('#^/admin/app/anexo1_contrato_contactos_telefonicos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_contactos_telefonicos_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_anexo1_contrato_contactos_telefonicos_show',));
                                }

                                // admin_app_anexo1_contrato_contactos_telefonicos_export
                                if ('/admin/app/anexo1_contrato_contactos_telefonicos/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.contactos.telefonicos',  '_sonata_name' => 'admin_app_anexo1_contrato_contactos_telefonicos_export',  '_route' => 'admin_app_anexo1_contrato_contactos_telefonicos_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexo1_contrato_mantenimiento_pizarra_pbx')) {
                                // admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_list
                                if ('/admin/app/anexo1_contrato_mantenimiento_pizarra_pbx/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_list',  '_route' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_list',);
                                }

                                // admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_create
                                if ('/admin/app/anexo1_contrato_mantenimiento_pizarra_pbx/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_create',  '_route' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_create',);
                                }

                                // admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_batch
                                if ('/admin/app/anexo1_contrato_mantenimiento_pizarra_pbx/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_batch',  '_route' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_batch',);
                                }

                                // admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_edit
                                if (preg_match('#^/admin/app/anexo1_contrato_mantenimiento_pizarra_pbx/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_edit',));
                                }

                                // admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_delete
                                if (preg_match('#^/admin/app/anexo1_contrato_mantenimiento_pizarra_pbx/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_delete',));
                                }

                                // admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_show
                                if (preg_match('#^/admin/app/anexo1_contrato_mantenimiento_pizarra_pbx/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_show',));
                                }

                                // admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_export
                                if ('/admin/app/anexo1_contrato_mantenimiento_pizarra_pbx/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo1.contrato.mantenimiento.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_export',  '_route' => 'admin_app_anexo1_contrato_mantenimiento_pizarra_pbx_export',);
                                }

                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/anexo2_contrato_')) {
                            if (0 === strpos($pathinfo, '/admin/app/anexo2_contrato_areas_internet')) {
                                // admin_app_anexo2_contrato_areas_internet_list
                                if ('/admin/app/anexo2_contrato_areas_internet/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo2_contrato_areas_internet_list',  '_route' => 'admin_app_anexo2_contrato_areas_internet_list',);
                                }

                                // admin_app_anexo2_contrato_areas_internet_create
                                if ('/admin/app/anexo2_contrato_areas_internet/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo2_contrato_areas_internet_create',  '_route' => 'admin_app_anexo2_contrato_areas_internet_create',);
                                }

                                // admin_app_anexo2_contrato_areas_internet_batch
                                if ('/admin/app/anexo2_contrato_areas_internet/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo2_contrato_areas_internet_batch',  '_route' => 'admin_app_anexo2_contrato_areas_internet_batch',);
                                }

                                // admin_app_anexo2_contrato_areas_internet_edit
                                if (preg_match('#^/admin/app/anexo2_contrato_areas_internet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo2_contrato_areas_internet_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo2_contrato_areas_internet_edit',));
                                }

                                // admin_app_anexo2_contrato_areas_internet_delete
                                if (preg_match('#^/admin/app/anexo2_contrato_areas_internet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo2_contrato_areas_internet_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo2_contrato_areas_internet_delete',));
                                }

                                // admin_app_anexo2_contrato_areas_internet_show
                                if (preg_match('#^/admin/app/anexo2_contrato_areas_internet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo2_contrato_areas_internet_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo2_contrato_areas_internet_show',));
                                }

                                // admin_app_anexo2_contrato_areas_internet_export
                                if ('/admin/app/anexo2_contrato_areas_internet/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo2_contrato_areas_internet_export',  '_route' => 'admin_app_anexo2_contrato_areas_internet_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexo2_contrato_arrendamiento_redes')) {
                                // admin_app_anexo2_contrato_arrendamiento_redes_list
                                if ('/admin/app/anexo2_contrato_arrendamiento_redes/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo2_contrato_arrendamiento_redes_list',  '_route' => 'admin_app_anexo2_contrato_arrendamiento_redes_list',);
                                }

                                // admin_app_anexo2_contrato_arrendamiento_redes_create
                                if ('/admin/app/anexo2_contrato_arrendamiento_redes/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo2_contrato_arrendamiento_redes_create',  '_route' => 'admin_app_anexo2_contrato_arrendamiento_redes_create',);
                                }

                                // admin_app_anexo2_contrato_arrendamiento_redes_batch
                                if ('/admin/app/anexo2_contrato_arrendamiento_redes/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo2_contrato_arrendamiento_redes_batch',  '_route' => 'admin_app_anexo2_contrato_arrendamiento_redes_batch',);
                                }

                                // admin_app_anexo2_contrato_arrendamiento_redes_edit
                                if (preg_match('#^/admin/app/anexo2_contrato_arrendamiento_redes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo2_contrato_arrendamiento_redes_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo2_contrato_arrendamiento_redes_edit',));
                                }

                                // admin_app_anexo2_contrato_arrendamiento_redes_delete
                                if (preg_match('#^/admin/app/anexo2_contrato_arrendamiento_redes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo2_contrato_arrendamiento_redes_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo2_contrato_arrendamiento_redes_delete',));
                                }

                                // admin_app_anexo2_contrato_arrendamiento_redes_show
                                if (preg_match('#^/admin/app/anexo2_contrato_arrendamiento_redes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo2_contrato_arrendamiento_redes_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo2_contrato_arrendamiento_redes_show',));
                                }

                                // admin_app_anexo2_contrato_arrendamiento_redes_export
                                if ('/admin/app/anexo2_contrato_arrendamiento_redes/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.arrendamiento.redes',  '_sonata_name' => 'admin_app_anexo2_contrato_arrendamiento_redes_export',  '_route' => 'admin_app_anexo2_contrato_arrendamiento_redes_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexo2_contrato_instalacion_pizarra_pbx')) {
                                // admin_app_anexo2_contrato_instalacion_pizarra_pbx_list
                                if ('/admin/app/anexo2_contrato_instalacion_pizarra_pbx/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_list',  '_route' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_list',);
                                }

                                // admin_app_anexo2_contrato_instalacion_pizarra_pbx_create
                                if ('/admin/app/anexo2_contrato_instalacion_pizarra_pbx/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_create',  '_route' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_create',);
                                }

                                // admin_app_anexo2_contrato_instalacion_pizarra_pbx_batch
                                if ('/admin/app/anexo2_contrato_instalacion_pizarra_pbx/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_batch',  '_route' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_batch',);
                                }

                                // admin_app_anexo2_contrato_instalacion_pizarra_pbx_edit
                                if (preg_match('#^/admin/app/anexo2_contrato_instalacion_pizarra_pbx/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_edit',));
                                }

                                // admin_app_anexo2_contrato_instalacion_pizarra_pbx_delete
                                if (preg_match('#^/admin/app/anexo2_contrato_instalacion_pizarra_pbx/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_delete',));
                                }

                                // admin_app_anexo2_contrato_instalacion_pizarra_pbx_show
                                if (preg_match('#^/admin/app/anexo2_contrato_instalacion_pizarra_pbx/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_show',));
                                }

                                // admin_app_anexo2_contrato_instalacion_pizarra_pbx_export
                                if ('/admin/app/anexo2_contrato_instalacion_pizarra_pbx/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.instalacion.pizarra.pbx',  '_sonata_name' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_export',  '_route' => 'admin_app_anexo2_contrato_instalacion_pizarra_pbx_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexo2_contrato_recarga_por_pos')) {
                                // admin_app_anexo2_contrato_recarga_por_pos_list
                                if ('/admin/app/anexo2_contrato_recarga_por_pos/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo2_contrato_recarga_por_pos_list',  '_route' => 'admin_app_anexo2_contrato_recarga_por_pos_list',);
                                }

                                // admin_app_anexo2_contrato_recarga_por_pos_create
                                if ('/admin/app/anexo2_contrato_recarga_por_pos/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo2_contrato_recarga_por_pos_create',  '_route' => 'admin_app_anexo2_contrato_recarga_por_pos_create',);
                                }

                                // admin_app_anexo2_contrato_recarga_por_pos_batch
                                if ('/admin/app/anexo2_contrato_recarga_por_pos/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo2_contrato_recarga_por_pos_batch',  '_route' => 'admin_app_anexo2_contrato_recarga_por_pos_batch',);
                                }

                                // admin_app_anexo2_contrato_recarga_por_pos_edit
                                if (preg_match('#^/admin/app/anexo2_contrato_recarga_por_pos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo2_contrato_recarga_por_pos_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo2_contrato_recarga_por_pos_edit',));
                                }

                                // admin_app_anexo2_contrato_recarga_por_pos_delete
                                if (preg_match('#^/admin/app/anexo2_contrato_recarga_por_pos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo2_contrato_recarga_por_pos_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo2_contrato_recarga_por_pos_delete',));
                                }

                                // admin_app_anexo2_contrato_recarga_por_pos_show
                                if (preg_match('#^/admin/app/anexo2_contrato_recarga_por_pos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo2_contrato_recarga_por_pos_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo2_contrato_recarga_por_pos_show',));
                                }

                                // admin_app_anexo2_contrato_recarga_por_pos_export
                                if ('/admin/app/anexo2_contrato_recarga_por_pos/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo2.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo2_contrato_recarga_por_pos_export',  '_route' => 'admin_app_anexo2_contrato_recarga_por_pos_export',);
                                }

                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/anexo4_contrato_')) {
                            if (0 === strpos($pathinfo, '/admin/app/anexo4_contrato_agencia')) {
                                // admin_app_anexo4_contrato_agencia_list
                                if ('/admin/app/anexo4_contrato_agencia/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.agencia',  '_sonata_name' => 'admin_app_anexo4_contrato_agencia_list',  '_route' => 'admin_app_anexo4_contrato_agencia_list',);
                                }

                                // admin_app_anexo4_contrato_agencia_create
                                if ('/admin/app/anexo4_contrato_agencia/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.agencia',  '_sonata_name' => 'admin_app_anexo4_contrato_agencia_create',  '_route' => 'admin_app_anexo4_contrato_agencia_create',);
                                }

                                // admin_app_anexo4_contrato_agencia_batch
                                if ('/admin/app/anexo4_contrato_agencia/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.agencia',  '_sonata_name' => 'admin_app_anexo4_contrato_agencia_batch',  '_route' => 'admin_app_anexo4_contrato_agencia_batch',);
                                }

                                // admin_app_anexo4_contrato_agencia_edit
                                if (preg_match('#^/admin/app/anexo4_contrato_agencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo4_contrato_agencia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.agencia',  '_sonata_name' => 'admin_app_anexo4_contrato_agencia_edit',));
                                }

                                // admin_app_anexo4_contrato_agencia_delete
                                if (preg_match('#^/admin/app/anexo4_contrato_agencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo4_contrato_agencia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.agencia',  '_sonata_name' => 'admin_app_anexo4_contrato_agencia_delete',));
                                }

                                // admin_app_anexo4_contrato_agencia_show
                                if (preg_match('#^/admin/app/anexo4_contrato_agencia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo4_contrato_agencia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.agencia',  '_sonata_name' => 'admin_app_anexo4_contrato_agencia_show',));
                                }

                                // admin_app_anexo4_contrato_agencia_export
                                if ('/admin/app/anexo4_contrato_agencia/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.agencia',  '_sonata_name' => 'admin_app_anexo4_contrato_agencia_export',  '_route' => 'admin_app_anexo4_contrato_agencia_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexo4_contrato_compra_venta')) {
                                // admin_app_anexo4_contrato_compra_venta_list
                                if ('/admin/app/anexo4_contrato_compra_venta/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo4_contrato_compra_venta_list',  '_route' => 'admin_app_anexo4_contrato_compra_venta_list',);
                                }

                                // admin_app_anexo4_contrato_compra_venta_create
                                if ('/admin/app/anexo4_contrato_compra_venta/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo4_contrato_compra_venta_create',  '_route' => 'admin_app_anexo4_contrato_compra_venta_create',);
                                }

                                // admin_app_anexo4_contrato_compra_venta_batch
                                if ('/admin/app/anexo4_contrato_compra_venta/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo4_contrato_compra_venta_batch',  '_route' => 'admin_app_anexo4_contrato_compra_venta_batch',);
                                }

                                // admin_app_anexo4_contrato_compra_venta_edit
                                if (preg_match('#^/admin/app/anexo4_contrato_compra_venta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo4_contrato_compra_venta_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo4_contrato_compra_venta_edit',));
                                }

                                // admin_app_anexo4_contrato_compra_venta_delete
                                if (preg_match('#^/admin/app/anexo4_contrato_compra_venta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo4_contrato_compra_venta_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo4_contrato_compra_venta_delete',));
                                }

                                // admin_app_anexo4_contrato_compra_venta_show
                                if (preg_match('#^/admin/app/anexo4_contrato_compra_venta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo4_contrato_compra_venta_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo4_contrato_compra_venta_show',));
                                }

                                // admin_app_anexo4_contrato_compra_venta_export
                                if ('/admin/app/anexo4_contrato_compra_venta/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.compra.venta',  '_sonata_name' => 'admin_app_anexo4_contrato_compra_venta_export',  '_route' => 'admin_app_anexo4_contrato_compra_venta_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexo4_contrato_recarga_por_pos')) {
                                // admin_app_anexo4_contrato_recarga_por_pos_list
                                if ('/admin/app/anexo4_contrato_recarga_por_pos/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo4_contrato_recarga_por_pos_list',  '_route' => 'admin_app_anexo4_contrato_recarga_por_pos_list',);
                                }

                                // admin_app_anexo4_contrato_recarga_por_pos_create
                                if ('/admin/app/anexo4_contrato_recarga_por_pos/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo4_contrato_recarga_por_pos_create',  '_route' => 'admin_app_anexo4_contrato_recarga_por_pos_create',);
                                }

                                // admin_app_anexo4_contrato_recarga_por_pos_batch
                                if ('/admin/app/anexo4_contrato_recarga_por_pos/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo4_contrato_recarga_por_pos_batch',  '_route' => 'admin_app_anexo4_contrato_recarga_por_pos_batch',);
                                }

                                // admin_app_anexo4_contrato_recarga_por_pos_edit
                                if (preg_match('#^/admin/app/anexo4_contrato_recarga_por_pos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo4_contrato_recarga_por_pos_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo4_contrato_recarga_por_pos_edit',));
                                }

                                // admin_app_anexo4_contrato_recarga_por_pos_delete
                                if (preg_match('#^/admin/app/anexo4_contrato_recarga_por_pos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo4_contrato_recarga_por_pos_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo4_contrato_recarga_por_pos_delete',));
                                }

                                // admin_app_anexo4_contrato_recarga_por_pos_show
                                if (preg_match('#^/admin/app/anexo4_contrato_recarga_por_pos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo4_contrato_recarga_por_pos_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo4_contrato_recarga_por_pos_show',));
                                }

                                // admin_app_anexo4_contrato_recarga_por_pos_export
                                if ('/admin/app/anexo4_contrato_recarga_por_pos/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo4.contrato.recarga.por.pos',  '_sonata_name' => 'admin_app_anexo4_contrato_recarga_por_pos_export',  '_route' => 'admin_app_anexo4_contrato_recarga_por_pos_export',);
                                }

                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/anexo4_arrendamiento_espacios')) {
                            // admin_app_anexo4_arrendamiento_espacios_list
                            if ('/admin/app/anexo4_arrendamiento_espacios/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo4.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo4_arrendamiento_espacios_list',  '_route' => 'admin_app_anexo4_arrendamiento_espacios_list',);
                            }

                            // admin_app_anexo4_arrendamiento_espacios_create
                            if ('/admin/app/anexo4_arrendamiento_espacios/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo4.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo4_arrendamiento_espacios_create',  '_route' => 'admin_app_anexo4_arrendamiento_espacios_create',);
                            }

                            // admin_app_anexo4_arrendamiento_espacios_batch
                            if ('/admin/app/anexo4_arrendamiento_espacios/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo4.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo4_arrendamiento_espacios_batch',  '_route' => 'admin_app_anexo4_arrendamiento_espacios_batch',);
                            }

                            // admin_app_anexo4_arrendamiento_espacios_edit
                            if (preg_match('#^/admin/app/anexo4_arrendamiento_espacios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo4_arrendamiento_espacios_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo4.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo4_arrendamiento_espacios_edit',));
                            }

                            // admin_app_anexo4_arrendamiento_espacios_delete
                            if (preg_match('#^/admin/app/anexo4_arrendamiento_espacios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo4_arrendamiento_espacios_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo4.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo4_arrendamiento_espacios_delete',));
                            }

                            // admin_app_anexo4_arrendamiento_espacios_show
                            if (preg_match('#^/admin/app/anexo4_arrendamiento_espacios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo4_arrendamiento_espacios_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo4.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo4_arrendamiento_espacios_show',));
                            }

                            // admin_app_anexo4_arrendamiento_espacios_export
                            if ('/admin/app/anexo4_arrendamiento_espacios/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo4.arrendamiento.espacios',  '_sonata_name' => 'admin_app_anexo4_arrendamiento_espacios_export',  '_route' => 'admin_app_anexo4_arrendamiento_espacios_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/anexo5_')) {
                            if (0 === strpos($pathinfo, '/admin/app/anexo5_contrato_agencia')) {
                                // admin_app_anexo5_contrato_agencia_list
                                if ('/admin/app/anexo5_contrato_agencia/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.agencia',  '_sonata_name' => 'admin_app_anexo5_contrato_agencia_list',  '_route' => 'admin_app_anexo5_contrato_agencia_list',);
                                }

                                // admin_app_anexo5_contrato_agencia_create
                                if ('/admin/app/anexo5_contrato_agencia/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.agencia',  '_sonata_name' => 'admin_app_anexo5_contrato_agencia_create',  '_route' => 'admin_app_anexo5_contrato_agencia_create',);
                                }

                                // admin_app_anexo5_contrato_agencia_batch
                                if ('/admin/app/anexo5_contrato_agencia/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.agencia',  '_sonata_name' => 'admin_app_anexo5_contrato_agencia_batch',  '_route' => 'admin_app_anexo5_contrato_agencia_batch',);
                                }

                                // admin_app_anexo5_contrato_agencia_edit
                                if (preg_match('#^/admin/app/anexo5_contrato_agencia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo5_contrato_agencia_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.agencia',  '_sonata_name' => 'admin_app_anexo5_contrato_agencia_edit',));
                                }

                                // admin_app_anexo5_contrato_agencia_delete
                                if (preg_match('#^/admin/app/anexo5_contrato_agencia/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo5_contrato_agencia_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.agencia',  '_sonata_name' => 'admin_app_anexo5_contrato_agencia_delete',));
                                }

                                // admin_app_anexo5_contrato_agencia_show
                                if (preg_match('#^/admin/app/anexo5_contrato_agencia/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo5_contrato_agencia_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.agencia',  '_sonata_name' => 'admin_app_anexo5_contrato_agencia_show',));
                                }

                                // admin_app_anexo5_contrato_agencia_export
                                if ('/admin/app/anexo5_contrato_agencia/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.agencia',  '_sonata_name' => 'admin_app_anexo5_contrato_agencia_export',  '_route' => 'admin_app_anexo5_contrato_agencia_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexo5_contrato_areas_internet')) {
                                // admin_app_anexo5_contrato_areas_internet_list
                                if ('/admin/app/anexo5_contrato_areas_internet/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo5_contrato_areas_internet_list',  '_route' => 'admin_app_anexo5_contrato_areas_internet_list',);
                                }

                                // admin_app_anexo5_contrato_areas_internet_create
                                if ('/admin/app/anexo5_contrato_areas_internet/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo5_contrato_areas_internet_create',  '_route' => 'admin_app_anexo5_contrato_areas_internet_create',);
                                }

                                // admin_app_anexo5_contrato_areas_internet_batch
                                if ('/admin/app/anexo5_contrato_areas_internet/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo5_contrato_areas_internet_batch',  '_route' => 'admin_app_anexo5_contrato_areas_internet_batch',);
                                }

                                // admin_app_anexo5_contrato_areas_internet_edit
                                if (preg_match('#^/admin/app/anexo5_contrato_areas_internet/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo5_contrato_areas_internet_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo5_contrato_areas_internet_edit',));
                                }

                                // admin_app_anexo5_contrato_areas_internet_delete
                                if (preg_match('#^/admin/app/anexo5_contrato_areas_internet/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo5_contrato_areas_internet_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo5_contrato_areas_internet_delete',));
                                }

                                // admin_app_anexo5_contrato_areas_internet_show
                                if (preg_match('#^/admin/app/anexo5_contrato_areas_internet/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo5_contrato_areas_internet_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo5_contrato_areas_internet_show',));
                                }

                                // admin_app_anexo5_contrato_areas_internet_export
                                if ('/admin/app/anexo5_contrato_areas_internet/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo5.contrato.areas.internet',  '_sonata_name' => 'admin_app_anexo5_contrato_areas_internet_export',  '_route' => 'admin_app_anexo5_contrato_areas_internet_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexo5_arrendaminto_espacios')) {
                                // admin_app_anexo5_arrendaminto_espacios_list
                                if ('/admin/app/anexo5_arrendaminto_espacios/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexo5.arrendaminto.espacios',  '_sonata_name' => 'admin_app_anexo5_arrendaminto_espacios_list',  '_route' => 'admin_app_anexo5_arrendaminto_espacios_list',);
                                }

                                // admin_app_anexo5_arrendaminto_espacios_create
                                if ('/admin/app/anexo5_arrendaminto_espacios/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexo5.arrendaminto.espacios',  '_sonata_name' => 'admin_app_anexo5_arrendaminto_espacios_create',  '_route' => 'admin_app_anexo5_arrendaminto_espacios_create',);
                                }

                                // admin_app_anexo5_arrendaminto_espacios_batch
                                if ('/admin/app/anexo5_arrendaminto_espacios/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexo5.arrendaminto.espacios',  '_sonata_name' => 'admin_app_anexo5_arrendaminto_espacios_batch',  '_route' => 'admin_app_anexo5_arrendaminto_espacios_batch',);
                                }

                                // admin_app_anexo5_arrendaminto_espacios_edit
                                if (preg_match('#^/admin/app/anexo5_arrendaminto_espacios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo5_arrendaminto_espacios_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexo5.arrendaminto.espacios',  '_sonata_name' => 'admin_app_anexo5_arrendaminto_espacios_edit',));
                                }

                                // admin_app_anexo5_arrendaminto_espacios_delete
                                if (preg_match('#^/admin/app/anexo5_arrendaminto_espacios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo5_arrendaminto_espacios_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexo5.arrendaminto.espacios',  '_sonata_name' => 'admin_app_anexo5_arrendaminto_espacios_delete',));
                                }

                                // admin_app_anexo5_arrendaminto_espacios_show
                                if (preg_match('#^/admin/app/anexo5_arrendaminto_espacios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexo5_arrendaminto_espacios_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexo5.arrendaminto.espacios',  '_sonata_name' => 'admin_app_anexo5_arrendaminto_espacios_show',));
                                }

                                // admin_app_anexo5_arrendaminto_espacios_export
                                if ('/admin/app/anexo5_arrendaminto_espacios/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexo5.arrendaminto.espacios',  '_sonata_name' => 'admin_app_anexo5_arrendaminto_espacios_export',  '_route' => 'admin_app_anexo5_arrendaminto_espacios_export',);
                                }

                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/anexocps_')) {
                            if (0 === strpos($pathinfo, '/admin/app/anexocps_conexion_centrales_telefonicas')) {
                                // admin_app_anexocps_conexion_centrales_telefonicas_list
                                if ('/admin/app/anexocps_conexion_centrales_telefonicas/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexocps.conexion.centrales.telefonicas',  '_sonata_name' => 'admin_app_anexocps_conexion_centrales_telefonicas_list',  '_route' => 'admin_app_anexocps_conexion_centrales_telefonicas_list',);
                                }

                                // admin_app_anexocps_conexion_centrales_telefonicas_create
                                if ('/admin/app/anexocps_conexion_centrales_telefonicas/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexocps.conexion.centrales.telefonicas',  '_sonata_name' => 'admin_app_anexocps_conexion_centrales_telefonicas_create',  '_route' => 'admin_app_anexocps_conexion_centrales_telefonicas_create',);
                                }

                                // admin_app_anexocps_conexion_centrales_telefonicas_batch
                                if ('/admin/app/anexocps_conexion_centrales_telefonicas/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexocps.conexion.centrales.telefonicas',  '_sonata_name' => 'admin_app_anexocps_conexion_centrales_telefonicas_batch',  '_route' => 'admin_app_anexocps_conexion_centrales_telefonicas_batch',);
                                }

                                // admin_app_anexocps_conexion_centrales_telefonicas_edit
                                if (preg_match('#^/admin/app/anexocps_conexion_centrales_telefonicas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexocps_conexion_centrales_telefonicas_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexocps.conexion.centrales.telefonicas',  '_sonata_name' => 'admin_app_anexocps_conexion_centrales_telefonicas_edit',));
                                }

                                // admin_app_anexocps_conexion_centrales_telefonicas_delete
                                if (preg_match('#^/admin/app/anexocps_conexion_centrales_telefonicas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexocps_conexion_centrales_telefonicas_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexocps.conexion.centrales.telefonicas',  '_sonata_name' => 'admin_app_anexocps_conexion_centrales_telefonicas_delete',));
                                }

                                // admin_app_anexocps_conexion_centrales_telefonicas_show
                                if (preg_match('#^/admin/app/anexocps_conexion_centrales_telefonicas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexocps_conexion_centrales_telefonicas_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexocps.conexion.centrales.telefonicas',  '_sonata_name' => 'admin_app_anexocps_conexion_centrales_telefonicas_show',));
                                }

                                // admin_app_anexocps_conexion_centrales_telefonicas_export
                                if ('/admin/app/anexocps_conexion_centrales_telefonicas/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexocps.conexion.centrales.telefonicas',  '_sonata_name' => 'admin_app_anexocps_conexion_centrales_telefonicas_export',  '_route' => 'admin_app_anexocps_conexion_centrales_telefonicas_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexocps_levantamiento_redes_tecnicas')) {
                                // admin_app_anexocps_levantamiento_redes_tecnicas_list
                                if ('/admin/app/anexocps_levantamiento_redes_tecnicas/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexocps.levantamiento.redes.tecnicas',  '_sonata_name' => 'admin_app_anexocps_levantamiento_redes_tecnicas_list',  '_route' => 'admin_app_anexocps_levantamiento_redes_tecnicas_list',);
                                }

                                // admin_app_anexocps_levantamiento_redes_tecnicas_create
                                if ('/admin/app/anexocps_levantamiento_redes_tecnicas/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexocps.levantamiento.redes.tecnicas',  '_sonata_name' => 'admin_app_anexocps_levantamiento_redes_tecnicas_create',  '_route' => 'admin_app_anexocps_levantamiento_redes_tecnicas_create',);
                                }

                                // admin_app_anexocps_levantamiento_redes_tecnicas_batch
                                if ('/admin/app/anexocps_levantamiento_redes_tecnicas/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexocps.levantamiento.redes.tecnicas',  '_sonata_name' => 'admin_app_anexocps_levantamiento_redes_tecnicas_batch',  '_route' => 'admin_app_anexocps_levantamiento_redes_tecnicas_batch',);
                                }

                                // admin_app_anexocps_levantamiento_redes_tecnicas_edit
                                if (preg_match('#^/admin/app/anexocps_levantamiento_redes_tecnicas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexocps_levantamiento_redes_tecnicas_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexocps.levantamiento.redes.tecnicas',  '_sonata_name' => 'admin_app_anexocps_levantamiento_redes_tecnicas_edit',));
                                }

                                // admin_app_anexocps_levantamiento_redes_tecnicas_delete
                                if (preg_match('#^/admin/app/anexocps_levantamiento_redes_tecnicas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexocps_levantamiento_redes_tecnicas_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexocps.levantamiento.redes.tecnicas',  '_sonata_name' => 'admin_app_anexocps_levantamiento_redes_tecnicas_delete',));
                                }

                                // admin_app_anexocps_levantamiento_redes_tecnicas_show
                                if (preg_match('#^/admin/app/anexocps_levantamiento_redes_tecnicas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexocps_levantamiento_redes_tecnicas_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexocps.levantamiento.redes.tecnicas',  '_sonata_name' => 'admin_app_anexocps_levantamiento_redes_tecnicas_show',));
                                }

                                // admin_app_anexocps_levantamiento_redes_tecnicas_export
                                if ('/admin/app/anexocps_levantamiento_redes_tecnicas/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexocps.levantamiento.redes.tecnicas',  '_sonata_name' => 'admin_app_anexocps_levantamiento_redes_tecnicas_export',  '_route' => 'admin_app_anexocps_levantamiento_redes_tecnicas_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/anexocps_servicios_terceros')) {
                                // admin_app_anexocps_servicios_terceros_list
                                if ('/admin/app/anexocps_servicios_terceros/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.anexocps.servicios.terceros',  '_sonata_name' => 'admin_app_anexocps_servicios_terceros_list',  '_route' => 'admin_app_anexocps_servicios_terceros_list',);
                                }

                                // admin_app_anexocps_servicios_terceros_create
                                if ('/admin/app/anexocps_servicios_terceros/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.anexocps.servicios.terceros',  '_sonata_name' => 'admin_app_anexocps_servicios_terceros_create',  '_route' => 'admin_app_anexocps_servicios_terceros_create',);
                                }

                                // admin_app_anexocps_servicios_terceros_batch
                                if ('/admin/app/anexocps_servicios_terceros/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.anexocps.servicios.terceros',  '_sonata_name' => 'admin_app_anexocps_servicios_terceros_batch',  '_route' => 'admin_app_anexocps_servicios_terceros_batch',);
                                }

                                // admin_app_anexocps_servicios_terceros_edit
                                if (preg_match('#^/admin/app/anexocps_servicios_terceros/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexocps_servicios_terceros_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.anexocps.servicios.terceros',  '_sonata_name' => 'admin_app_anexocps_servicios_terceros_edit',));
                                }

                                // admin_app_anexocps_servicios_terceros_delete
                                if (preg_match('#^/admin/app/anexocps_servicios_terceros/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexocps_servicios_terceros_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.anexocps.servicios.terceros',  '_sonata_name' => 'admin_app_anexocps_servicios_terceros_delete',));
                                }

                                // admin_app_anexocps_servicios_terceros_show
                                if (preg_match('#^/admin/app/anexocps_servicios_terceros/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_anexocps_servicios_terceros_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.anexocps.servicios.terceros',  '_sonata_name' => 'admin_app_anexocps_servicios_terceros_show',));
                                }

                                // admin_app_anexocps_servicios_terceros_export
                                if ('/admin/app/anexocps_servicios_terceros/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.anexocps.servicios.terceros',  '_sonata_name' => 'admin_app_anexocps_servicios_terceros_export',  '_route' => 'admin_app_anexocps_servicios_terceros_export',);
                                }

                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/d')) {
                        if (0 === strpos($pathinfo, '/admin/app/datos_cuentas_bancarias_etecsa')) {
                            // admin_app_datos_cuentas_bancarias_etecsa_list
                            if ('/admin/app/datos_cuentas_bancarias_etecsa/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.datos.cuentas.bancarias.etecsa',  '_sonata_name' => 'admin_app_datos_cuentas_bancarias_etecsa_list',  '_route' => 'admin_app_datos_cuentas_bancarias_etecsa_list',);
                            }

                            // admin_app_datos_cuentas_bancarias_etecsa_create
                            if ('/admin/app/datos_cuentas_bancarias_etecsa/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.datos.cuentas.bancarias.etecsa',  '_sonata_name' => 'admin_app_datos_cuentas_bancarias_etecsa_create',  '_route' => 'admin_app_datos_cuentas_bancarias_etecsa_create',);
                            }

                            // admin_app_datos_cuentas_bancarias_etecsa_batch
                            if ('/admin/app/datos_cuentas_bancarias_etecsa/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.datos.cuentas.bancarias.etecsa',  '_sonata_name' => 'admin_app_datos_cuentas_bancarias_etecsa_batch',  '_route' => 'admin_app_datos_cuentas_bancarias_etecsa_batch',);
                            }

                            // admin_app_datos_cuentas_bancarias_etecsa_edit
                            if (preg_match('#^/admin/app/datos_cuentas_bancarias_etecsa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_datos_cuentas_bancarias_etecsa_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.datos.cuentas.bancarias.etecsa',  '_sonata_name' => 'admin_app_datos_cuentas_bancarias_etecsa_edit',));
                            }

                            // admin_app_datos_cuentas_bancarias_etecsa_delete
                            if (preg_match('#^/admin/app/datos_cuentas_bancarias_etecsa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_datos_cuentas_bancarias_etecsa_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.datos.cuentas.bancarias.etecsa',  '_sonata_name' => 'admin_app_datos_cuentas_bancarias_etecsa_delete',));
                            }

                            // admin_app_datos_cuentas_bancarias_etecsa_show
                            if (preg_match('#^/admin/app/datos_cuentas_bancarias_etecsa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_datos_cuentas_bancarias_etecsa_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.datos.cuentas.bancarias.etecsa',  '_sonata_name' => 'admin_app_datos_cuentas_bancarias_etecsa_show',));
                            }

                            // admin_app_datos_cuentas_bancarias_etecsa_export
                            if ('/admin/app/datos_cuentas_bancarias_etecsa/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.datos.cuentas.bancarias.etecsa',  '_sonata_name' => 'admin_app_datos_cuentas_bancarias_etecsa_export',  '_route' => 'admin_app_datos_cuentas_bancarias_etecsa_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/descripcion_productos_servicios')) {
                            // admin_app_descripcion_productos_servicios_list
                            if ('/admin/app/descripcion_productos_servicios/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.descripcion.productos.servicios',  '_sonata_name' => 'admin_app_descripcion_productos_servicios_list',  '_route' => 'admin_app_descripcion_productos_servicios_list',);
                            }

                            // admin_app_descripcion_productos_servicios_create
                            if ('/admin/app/descripcion_productos_servicios/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.descripcion.productos.servicios',  '_sonata_name' => 'admin_app_descripcion_productos_servicios_create',  '_route' => 'admin_app_descripcion_productos_servicios_create',);
                            }

                            // admin_app_descripcion_productos_servicios_batch
                            if ('/admin/app/descripcion_productos_servicios/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.descripcion.productos.servicios',  '_sonata_name' => 'admin_app_descripcion_productos_servicios_batch',  '_route' => 'admin_app_descripcion_productos_servicios_batch',);
                            }

                            // admin_app_descripcion_productos_servicios_edit
                            if (preg_match('#^/admin/app/descripcion_productos_servicios/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_descripcion_productos_servicios_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.descripcion.productos.servicios',  '_sonata_name' => 'admin_app_descripcion_productos_servicios_edit',));
                            }

                            // admin_app_descripcion_productos_servicios_delete
                            if (preg_match('#^/admin/app/descripcion_productos_servicios/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_descripcion_productos_servicios_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.descripcion.productos.servicios',  '_sonata_name' => 'admin_app_descripcion_productos_servicios_delete',));
                            }

                            // admin_app_descripcion_productos_servicios_show
                            if (preg_match('#^/admin/app/descripcion_productos_servicios/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_descripcion_productos_servicios_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.descripcion.productos.servicios',  '_sonata_name' => 'admin_app_descripcion_productos_servicios_show',));
                            }

                            // admin_app_descripcion_productos_servicios_export
                            if ('/admin/app/descripcion_productos_servicios/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.descripcion.productos.servicios',  '_sonata_name' => 'admin_app_descripcion_productos_servicios_export',  '_route' => 'admin_app_descripcion_productos_servicios_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/descripcion_productos_contratados')) {
                            // admin_app_descripcion_productos_contratados_list
                            if ('/admin/app/descripcion_productos_contratados/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.descripcion.productos.contratados',  '_sonata_name' => 'admin_app_descripcion_productos_contratados_list',  '_route' => 'admin_app_descripcion_productos_contratados_list',);
                            }

                            // admin_app_descripcion_productos_contratados_create
                            if ('/admin/app/descripcion_productos_contratados/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.descripcion.productos.contratados',  '_sonata_name' => 'admin_app_descripcion_productos_contratados_create',  '_route' => 'admin_app_descripcion_productos_contratados_create',);
                            }

                            // admin_app_descripcion_productos_contratados_batch
                            if ('/admin/app/descripcion_productos_contratados/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.descripcion.productos.contratados',  '_sonata_name' => 'admin_app_descripcion_productos_contratados_batch',  '_route' => 'admin_app_descripcion_productos_contratados_batch',);
                            }

                            // admin_app_descripcion_productos_contratados_edit
                            if (preg_match('#^/admin/app/descripcion_productos_contratados/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_descripcion_productos_contratados_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.descripcion.productos.contratados',  '_sonata_name' => 'admin_app_descripcion_productos_contratados_edit',));
                            }

                            // admin_app_descripcion_productos_contratados_delete
                            if (preg_match('#^/admin/app/descripcion_productos_contratados/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_descripcion_productos_contratados_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.descripcion.productos.contratados',  '_sonata_name' => 'admin_app_descripcion_productos_contratados_delete',));
                            }

                            // admin_app_descripcion_productos_contratados_show
                            if (preg_match('#^/admin/app/descripcion_productos_contratados/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_descripcion_productos_contratados_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.descripcion.productos.contratados',  '_sonata_name' => 'admin_app_descripcion_productos_contratados_show',));
                            }

                            // admin_app_descripcion_productos_contratados_export
                            if ('/admin/app/descripcion_productos_contratados/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.descripcion.productos.contratados',  '_sonata_name' => 'admin_app_descripcion_productos_contratados_export',  '_route' => 'admin_app_descripcion_productos_contratados_export',);
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/facilidades_del_equipo')) {
                        // admin_app_facilidades_del_equipo_list
                        if ('/admin/app/facilidades_del_equipo/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.facilidades.del.equipo',  '_sonata_name' => 'admin_app_facilidades_del_equipo_list',  '_route' => 'admin_app_facilidades_del_equipo_list',);
                        }

                        // admin_app_facilidades_del_equipo_create
                        if ('/admin/app/facilidades_del_equipo/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.facilidades.del.equipo',  '_sonata_name' => 'admin_app_facilidades_del_equipo_create',  '_route' => 'admin_app_facilidades_del_equipo_create',);
                        }

                        // admin_app_facilidades_del_equipo_batch
                        if ('/admin/app/facilidades_del_equipo/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.facilidades.del.equipo',  '_sonata_name' => 'admin_app_facilidades_del_equipo_batch',  '_route' => 'admin_app_facilidades_del_equipo_batch',);
                        }

                        // admin_app_facilidades_del_equipo_edit
                        if (preg_match('#^/admin/app/facilidades_del_equipo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_facilidades_del_equipo_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.facilidades.del.equipo',  '_sonata_name' => 'admin_app_facilidades_del_equipo_edit',));
                        }

                        // admin_app_facilidades_del_equipo_delete
                        if (preg_match('#^/admin/app/facilidades_del_equipo/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_facilidades_del_equipo_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.facilidades.del.equipo',  '_sonata_name' => 'admin_app_facilidades_del_equipo_delete',));
                        }

                        // admin_app_facilidades_del_equipo_show
                        if (preg_match('#^/admin/app/facilidades_del_equipo/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_facilidades_del_equipo_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.facilidades.del.equipo',  '_sonata_name' => 'admin_app_facilidades_del_equipo_show',));
                        }

                        // admin_app_facilidades_del_equipo_export
                        if ('/admin/app/facilidades_del_equipo/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.facilidades.del.equipo',  '_sonata_name' => 'admin_app_facilidades_del_equipo_export',  '_route' => 'admin_app_facilidades_del_equipo_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/grupos_electrogenos')) {
                        // admin_app_grupos_electrogenos_list
                        if ('/admin/app/grupos_electrogenos/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.grupos.electrogenos',  '_sonata_name' => 'admin_app_grupos_electrogenos_list',  '_route' => 'admin_app_grupos_electrogenos_list',);
                        }

                        // admin_app_grupos_electrogenos_create
                        if ('/admin/app/grupos_electrogenos/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.grupos.electrogenos',  '_sonata_name' => 'admin_app_grupos_electrogenos_create',  '_route' => 'admin_app_grupos_electrogenos_create',);
                        }

                        // admin_app_grupos_electrogenos_batch
                        if ('/admin/app/grupos_electrogenos/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.grupos.electrogenos',  '_sonata_name' => 'admin_app_grupos_electrogenos_batch',  '_route' => 'admin_app_grupos_electrogenos_batch',);
                        }

                        // admin_app_grupos_electrogenos_edit
                        if (preg_match('#^/admin/app/grupos_electrogenos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grupos_electrogenos_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.grupos.electrogenos',  '_sonata_name' => 'admin_app_grupos_electrogenos_edit',));
                        }

                        // admin_app_grupos_electrogenos_delete
                        if (preg_match('#^/admin/app/grupos_electrogenos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grupos_electrogenos_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.grupos.electrogenos',  '_sonata_name' => 'admin_app_grupos_electrogenos_delete',));
                        }

                        // admin_app_grupos_electrogenos_show
                        if (preg_match('#^/admin/app/grupos_electrogenos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_grupos_electrogenos_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.grupos.electrogenos',  '_sonata_name' => 'admin_app_grupos_electrogenos_show',));
                        }

                        // admin_app_grupos_electrogenos_export
                        if ('/admin/app/grupos_electrogenos/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.grupos.electrogenos',  '_sonata_name' => 'admin_app_grupos_electrogenos_export',  '_route' => 'admin_app_grupos_electrogenos_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/locales')) {
                        // admin_app_locales_list
                        if ('/admin/app/locales/list' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.locales',  '_sonata_name' => 'admin_app_locales_list',  '_route' => 'admin_app_locales_list',);
                        }

                        // admin_app_locales_create
                        if ('/admin/app/locales/create' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.locales',  '_sonata_name' => 'admin_app_locales_create',  '_route' => 'admin_app_locales_create',);
                        }

                        // admin_app_locales_batch
                        if ('/admin/app/locales/batch' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.locales',  '_sonata_name' => 'admin_app_locales_batch',  '_route' => 'admin_app_locales_batch',);
                        }

                        // admin_app_locales_edit
                        if (preg_match('#^/admin/app/locales/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_locales_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.locales',  '_sonata_name' => 'admin_app_locales_edit',));
                        }

                        // admin_app_locales_delete
                        if (preg_match('#^/admin/app/locales/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_locales_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.locales',  '_sonata_name' => 'admin_app_locales_delete',));
                        }

                        // admin_app_locales_show
                        if (preg_match('#^/admin/app/locales/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_locales_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.locales',  '_sonata_name' => 'admin_app_locales_show',));
                        }

                        // admin_app_locales_export
                        if ('/admin/app/locales/export' === $pathinfo) {
                            return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.locales',  '_sonata_name' => 'admin_app_locales_export',  '_route' => 'admin_app_locales_export',);
                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/relacion_')) {
                        if (0 === strpos($pathinfo, '/admin/app/relacion_antenas_a4')) {
                            // admin_app_relacion_antenas_a4_list
                            if ('/admin/app/relacion_antenas_a4/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.relacion.antenas.a4',  '_sonata_name' => 'admin_app_relacion_antenas_a4_list',  '_route' => 'admin_app_relacion_antenas_a4_list',);
                            }

                            // admin_app_relacion_antenas_a4_create
                            if ('/admin/app/relacion_antenas_a4/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.relacion.antenas.a4',  '_sonata_name' => 'admin_app_relacion_antenas_a4_create',  '_route' => 'admin_app_relacion_antenas_a4_create',);
                            }

                            // admin_app_relacion_antenas_a4_batch
                            if ('/admin/app/relacion_antenas_a4/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.relacion.antenas.a4',  '_sonata_name' => 'admin_app_relacion_antenas_a4_batch',  '_route' => 'admin_app_relacion_antenas_a4_batch',);
                            }

                            // admin_app_relacion_antenas_a4_edit
                            if (preg_match('#^/admin/app/relacion_antenas_a4/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_antenas_a4_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.relacion.antenas.a4',  '_sonata_name' => 'admin_app_relacion_antenas_a4_edit',));
                            }

                            // admin_app_relacion_antenas_a4_delete
                            if (preg_match('#^/admin/app/relacion_antenas_a4/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_antenas_a4_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.relacion.antenas.a4',  '_sonata_name' => 'admin_app_relacion_antenas_a4_delete',));
                            }

                            // admin_app_relacion_antenas_a4_show
                            if (preg_match('#^/admin/app/relacion_antenas_a4/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_antenas_a4_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.relacion.antenas.a4',  '_sonata_name' => 'admin_app_relacion_antenas_a4_show',));
                            }

                            // admin_app_relacion_antenas_a4_export
                            if ('/admin/app/relacion_antenas_a4/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.relacion.antenas.a4',  '_sonata_name' => 'admin_app_relacion_antenas_a4_export',  '_route' => 'admin_app_relacion_antenas_a4_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/relacion_bastidores')) {
                            // admin_app_relacion_bastidores_list
                            if ('/admin/app/relacion_bastidores/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.relacion.bastidores',  '_sonata_name' => 'admin_app_relacion_bastidores_list',  '_route' => 'admin_app_relacion_bastidores_list',);
                            }

                            // admin_app_relacion_bastidores_create
                            if ('/admin/app/relacion_bastidores/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.relacion.bastidores',  '_sonata_name' => 'admin_app_relacion_bastidores_create',  '_route' => 'admin_app_relacion_bastidores_create',);
                            }

                            // admin_app_relacion_bastidores_batch
                            if ('/admin/app/relacion_bastidores/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.relacion.bastidores',  '_sonata_name' => 'admin_app_relacion_bastidores_batch',  '_route' => 'admin_app_relacion_bastidores_batch',);
                            }

                            // admin_app_relacion_bastidores_edit
                            if (preg_match('#^/admin/app/relacion_bastidores/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_bastidores_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.relacion.bastidores',  '_sonata_name' => 'admin_app_relacion_bastidores_edit',));
                            }

                            // admin_app_relacion_bastidores_delete
                            if (preg_match('#^/admin/app/relacion_bastidores/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_bastidores_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.relacion.bastidores',  '_sonata_name' => 'admin_app_relacion_bastidores_delete',));
                            }

                            // admin_app_relacion_bastidores_show
                            if (preg_match('#^/admin/app/relacion_bastidores/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_bastidores_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.relacion.bastidores',  '_sonata_name' => 'admin_app_relacion_bastidores_show',));
                            }

                            // admin_app_relacion_bastidores_export
                            if ('/admin/app/relacion_bastidores/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.relacion.bastidores',  '_sonata_name' => 'admin_app_relacion_bastidores_export',  '_route' => 'admin_app_relacion_bastidores_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/relacion_equipos')) {
                            // admin_app_relacion_equipos_list
                            if ('/admin/app/relacion_equipos/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.relacion.equipos',  '_sonata_name' => 'admin_app_relacion_equipos_list',  '_route' => 'admin_app_relacion_equipos_list',);
                            }

                            // admin_app_relacion_equipos_create
                            if ('/admin/app/relacion_equipos/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.relacion.equipos',  '_sonata_name' => 'admin_app_relacion_equipos_create',  '_route' => 'admin_app_relacion_equipos_create',);
                            }

                            // admin_app_relacion_equipos_batch
                            if ('/admin/app/relacion_equipos/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.relacion.equipos',  '_sonata_name' => 'admin_app_relacion_equipos_batch',  '_route' => 'admin_app_relacion_equipos_batch',);
                            }

                            // admin_app_relacion_equipos_edit
                            if (preg_match('#^/admin/app/relacion_equipos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_equipos_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.relacion.equipos',  '_sonata_name' => 'admin_app_relacion_equipos_edit',));
                            }

                            // admin_app_relacion_equipos_delete
                            if (preg_match('#^/admin/app/relacion_equipos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_equipos_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.relacion.equipos',  '_sonata_name' => 'admin_app_relacion_equipos_delete',));
                            }

                            // admin_app_relacion_equipos_show
                            if (preg_match('#^/admin/app/relacion_equipos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_equipos_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.relacion.equipos',  '_sonata_name' => 'admin_app_relacion_equipos_show',));
                            }

                            // admin_app_relacion_equipos_export
                            if ('/admin/app/relacion_equipos/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.relacion.equipos',  '_sonata_name' => 'admin_app_relacion_equipos_export',  '_route' => 'admin_app_relacion_equipos_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/relacion_iluminacion_tomacorriente')) {
                            // admin_app_relacion_iluminacion_tomacorriente_list
                            if ('/admin/app/relacion_iluminacion_tomacorriente/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.relacion.iluminacion.tomacorriente',  '_sonata_name' => 'admin_app_relacion_iluminacion_tomacorriente_list',  '_route' => 'admin_app_relacion_iluminacion_tomacorriente_list',);
                            }

                            // admin_app_relacion_iluminacion_tomacorriente_create
                            if ('/admin/app/relacion_iluminacion_tomacorriente/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.relacion.iluminacion.tomacorriente',  '_sonata_name' => 'admin_app_relacion_iluminacion_tomacorriente_create',  '_route' => 'admin_app_relacion_iluminacion_tomacorriente_create',);
                            }

                            // admin_app_relacion_iluminacion_tomacorriente_batch
                            if ('/admin/app/relacion_iluminacion_tomacorriente/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.relacion.iluminacion.tomacorriente',  '_sonata_name' => 'admin_app_relacion_iluminacion_tomacorriente_batch',  '_route' => 'admin_app_relacion_iluminacion_tomacorriente_batch',);
                            }

                            // admin_app_relacion_iluminacion_tomacorriente_edit
                            if (preg_match('#^/admin/app/relacion_iluminacion_tomacorriente/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_iluminacion_tomacorriente_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.relacion.iluminacion.tomacorriente',  '_sonata_name' => 'admin_app_relacion_iluminacion_tomacorriente_edit',));
                            }

                            // admin_app_relacion_iluminacion_tomacorriente_delete
                            if (preg_match('#^/admin/app/relacion_iluminacion_tomacorriente/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_iluminacion_tomacorriente_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.relacion.iluminacion.tomacorriente',  '_sonata_name' => 'admin_app_relacion_iluminacion_tomacorriente_delete',));
                            }

                            // admin_app_relacion_iluminacion_tomacorriente_show
                            if (preg_match('#^/admin/app/relacion_iluminacion_tomacorriente/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_iluminacion_tomacorriente_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.relacion.iluminacion.tomacorriente',  '_sonata_name' => 'admin_app_relacion_iluminacion_tomacorriente_show',));
                            }

                            // admin_app_relacion_iluminacion_tomacorriente_export
                            if ('/admin/app/relacion_iluminacion_tomacorriente/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.relacion.iluminacion.tomacorriente',  '_sonata_name' => 'admin_app_relacion_iluminacion_tomacorriente_export',  '_route' => 'admin_app_relacion_iluminacion_tomacorriente_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/relacion_mastiles_a4')) {
                            // admin_app_relacion_mastiles_a4_list
                            if ('/admin/app/relacion_mastiles_a4/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.relacion.mastiles.a4',  '_sonata_name' => 'admin_app_relacion_mastiles_a4_list',  '_route' => 'admin_app_relacion_mastiles_a4_list',);
                            }

                            // admin_app_relacion_mastiles_a4_create
                            if ('/admin/app/relacion_mastiles_a4/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.relacion.mastiles.a4',  '_sonata_name' => 'admin_app_relacion_mastiles_a4_create',  '_route' => 'admin_app_relacion_mastiles_a4_create',);
                            }

                            // admin_app_relacion_mastiles_a4_batch
                            if ('/admin/app/relacion_mastiles_a4/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.relacion.mastiles.a4',  '_sonata_name' => 'admin_app_relacion_mastiles_a4_batch',  '_route' => 'admin_app_relacion_mastiles_a4_batch',);
                            }

                            // admin_app_relacion_mastiles_a4_edit
                            if (preg_match('#^/admin/app/relacion_mastiles_a4/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_mastiles_a4_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.relacion.mastiles.a4',  '_sonata_name' => 'admin_app_relacion_mastiles_a4_edit',));
                            }

                            // admin_app_relacion_mastiles_a4_delete
                            if (preg_match('#^/admin/app/relacion_mastiles_a4/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_mastiles_a4_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.relacion.mastiles.a4',  '_sonata_name' => 'admin_app_relacion_mastiles_a4_delete',));
                            }

                            // admin_app_relacion_mastiles_a4_show
                            if (preg_match('#^/admin/app/relacion_mastiles_a4/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_mastiles_a4_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.relacion.mastiles.a4',  '_sonata_name' => 'admin_app_relacion_mastiles_a4_show',));
                            }

                            // admin_app_relacion_mastiles_a4_export
                            if ('/admin/app/relacion_mastiles_a4/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.relacion.mastiles.a4',  '_sonata_name' => 'admin_app_relacion_mastiles_a4_export',  '_route' => 'admin_app_relacion_mastiles_a4_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/relacion_terminaciones_bastidor')) {
                            // admin_app_relacion_terminaciones_bastidor_list
                            if ('/admin/app/relacion_terminaciones_bastidor/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.relacion.terminaciones.bastidor',  '_sonata_name' => 'admin_app_relacion_terminaciones_bastidor_list',  '_route' => 'admin_app_relacion_terminaciones_bastidor_list',);
                            }

                            // admin_app_relacion_terminaciones_bastidor_create
                            if ('/admin/app/relacion_terminaciones_bastidor/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.relacion.terminaciones.bastidor',  '_sonata_name' => 'admin_app_relacion_terminaciones_bastidor_create',  '_route' => 'admin_app_relacion_terminaciones_bastidor_create',);
                            }

                            // admin_app_relacion_terminaciones_bastidor_batch
                            if ('/admin/app/relacion_terminaciones_bastidor/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.relacion.terminaciones.bastidor',  '_sonata_name' => 'admin_app_relacion_terminaciones_bastidor_batch',  '_route' => 'admin_app_relacion_terminaciones_bastidor_batch',);
                            }

                            // admin_app_relacion_terminaciones_bastidor_edit
                            if (preg_match('#^/admin/app/relacion_terminaciones_bastidor/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_terminaciones_bastidor_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.relacion.terminaciones.bastidor',  '_sonata_name' => 'admin_app_relacion_terminaciones_bastidor_edit',));
                            }

                            // admin_app_relacion_terminaciones_bastidor_delete
                            if (preg_match('#^/admin/app/relacion_terminaciones_bastidor/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_terminaciones_bastidor_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.relacion.terminaciones.bastidor',  '_sonata_name' => 'admin_app_relacion_terminaciones_bastidor_delete',));
                            }

                            // admin_app_relacion_terminaciones_bastidor_show
                            if (preg_match('#^/admin/app/relacion_terminaciones_bastidor/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_terminaciones_bastidor_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.relacion.terminaciones.bastidor',  '_sonata_name' => 'admin_app_relacion_terminaciones_bastidor_show',));
                            }

                            // admin_app_relacion_terminaciones_bastidor_export
                            if ('/admin/app/relacion_terminaciones_bastidor/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.relacion.terminaciones.bastidor',  '_sonata_name' => 'admin_app_relacion_terminaciones_bastidor_export',  '_route' => 'admin_app_relacion_terminaciones_bastidor_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/relacion_torres_a4')) {
                            // admin_app_relacion_torres_a4_list
                            if ('/admin/app/relacion_torres_a4/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.relacion.torres.a4',  '_sonata_name' => 'admin_app_relacion_torres_a4_list',  '_route' => 'admin_app_relacion_torres_a4_list',);
                            }

                            // admin_app_relacion_torres_a4_create
                            if ('/admin/app/relacion_torres_a4/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.relacion.torres.a4',  '_sonata_name' => 'admin_app_relacion_torres_a4_create',  '_route' => 'admin_app_relacion_torres_a4_create',);
                            }

                            // admin_app_relacion_torres_a4_batch
                            if ('/admin/app/relacion_torres_a4/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.relacion.torres.a4',  '_sonata_name' => 'admin_app_relacion_torres_a4_batch',  '_route' => 'admin_app_relacion_torres_a4_batch',);
                            }

                            // admin_app_relacion_torres_a4_edit
                            if (preg_match('#^/admin/app/relacion_torres_a4/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_torres_a4_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.relacion.torres.a4',  '_sonata_name' => 'admin_app_relacion_torres_a4_edit',));
                            }

                            // admin_app_relacion_torres_a4_delete
                            if (preg_match('#^/admin/app/relacion_torres_a4/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_torres_a4_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.relacion.torres.a4',  '_sonata_name' => 'admin_app_relacion_torres_a4_delete',));
                            }

                            // admin_app_relacion_torres_a4_show
                            if (preg_match('#^/admin/app/relacion_torres_a4/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_torres_a4_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.relacion.torres.a4',  '_sonata_name' => 'admin_app_relacion_torres_a4_show',));
                            }

                            // admin_app_relacion_torres_a4_export
                            if ('/admin/app/relacion_torres_a4/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.relacion.torres.a4',  '_sonata_name' => 'admin_app_relacion_torres_a4_export',  '_route' => 'admin_app_relacion_torres_a4_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/relacion_vias')) {
                            // admin_app_relacion_vias_list
                            if ('/admin/app/relacion_vias/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.relacion.vias',  '_sonata_name' => 'admin_app_relacion_vias_list',  '_route' => 'admin_app_relacion_vias_list',);
                            }

                            // admin_app_relacion_vias_create
                            if ('/admin/app/relacion_vias/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.relacion.vias',  '_sonata_name' => 'admin_app_relacion_vias_create',  '_route' => 'admin_app_relacion_vias_create',);
                            }

                            // admin_app_relacion_vias_batch
                            if ('/admin/app/relacion_vias/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.relacion.vias',  '_sonata_name' => 'admin_app_relacion_vias_batch',  '_route' => 'admin_app_relacion_vias_batch',);
                            }

                            // admin_app_relacion_vias_edit
                            if (preg_match('#^/admin/app/relacion_vias/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_vias_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.relacion.vias',  '_sonata_name' => 'admin_app_relacion_vias_edit',));
                            }

                            // admin_app_relacion_vias_delete
                            if (preg_match('#^/admin/app/relacion_vias/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_vias_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.relacion.vias',  '_sonata_name' => 'admin_app_relacion_vias_delete',));
                            }

                            // admin_app_relacion_vias_show
                            if (preg_match('#^/admin/app/relacion_vias/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_relacion_vias_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.relacion.vias',  '_sonata_name' => 'admin_app_relacion_vias_show',));
                            }

                            // admin_app_relacion_vias_export
                            if ('/admin/app/relacion_vias/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.relacion.vias',  '_sonata_name' => 'admin_app_relacion_vias_export',  '_route' => 'admin_app_relacion_vias_export',);
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/sistema')) {
                        if (0 === strpos($pathinfo, '/admin/app/sistema_corriente_directa')) {
                            // admin_app_sistema_corriente_directa_list
                            if ('/admin/app/sistema_corriente_directa/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.sistema.corriente.directa',  '_sonata_name' => 'admin_app_sistema_corriente_directa_list',  '_route' => 'admin_app_sistema_corriente_directa_list',);
                            }

                            // admin_app_sistema_corriente_directa_create
                            if ('/admin/app/sistema_corriente_directa/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.sistema.corriente.directa',  '_sonata_name' => 'admin_app_sistema_corriente_directa_create',  '_route' => 'admin_app_sistema_corriente_directa_create',);
                            }

                            // admin_app_sistema_corriente_directa_batch
                            if ('/admin/app/sistema_corriente_directa/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.sistema.corriente.directa',  '_sonata_name' => 'admin_app_sistema_corriente_directa_batch',  '_route' => 'admin_app_sistema_corriente_directa_batch',);
                            }

                            // admin_app_sistema_corriente_directa_edit
                            if (preg_match('#^/admin/app/sistema_corriente_directa/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_sistema_corriente_directa_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.sistema.corriente.directa',  '_sonata_name' => 'admin_app_sistema_corriente_directa_edit',));
                            }

                            // admin_app_sistema_corriente_directa_delete
                            if (preg_match('#^/admin/app/sistema_corriente_directa/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_sistema_corriente_directa_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.sistema.corriente.directa',  '_sonata_name' => 'admin_app_sistema_corriente_directa_delete',));
                            }

                            // admin_app_sistema_corriente_directa_show
                            if (preg_match('#^/admin/app/sistema_corriente_directa/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_sistema_corriente_directa_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.sistema.corriente.directa',  '_sonata_name' => 'admin_app_sistema_corriente_directa_show',));
                            }

                            // admin_app_sistema_corriente_directa_export
                            if ('/admin/app/sistema_corriente_directa/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.sistema.corriente.directa',  '_sonata_name' => 'admin_app_sistema_corriente_directa_export',  '_route' => 'admin_app_sistema_corriente_directa_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/sistema_iluminacion_a5')) {
                            // admin_app_sistema_iluminacion_a5_list
                            if ('/admin/app/sistema_iluminacion_a5/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.sistema.iluminacion.a5',  '_sonata_name' => 'admin_app_sistema_iluminacion_a5_list',  '_route' => 'admin_app_sistema_iluminacion_a5_list',);
                            }

                            // admin_app_sistema_iluminacion_a5_create
                            if ('/admin/app/sistema_iluminacion_a5/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.sistema.iluminacion.a5',  '_sonata_name' => 'admin_app_sistema_iluminacion_a5_create',  '_route' => 'admin_app_sistema_iluminacion_a5_create',);
                            }

                            // admin_app_sistema_iluminacion_a5_batch
                            if ('/admin/app/sistema_iluminacion_a5/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.sistema.iluminacion.a5',  '_sonata_name' => 'admin_app_sistema_iluminacion_a5_batch',  '_route' => 'admin_app_sistema_iluminacion_a5_batch',);
                            }

                            // admin_app_sistema_iluminacion_a5_edit
                            if (preg_match('#^/admin/app/sistema_iluminacion_a5/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_sistema_iluminacion_a5_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.sistema.iluminacion.a5',  '_sonata_name' => 'admin_app_sistema_iluminacion_a5_edit',));
                            }

                            // admin_app_sistema_iluminacion_a5_delete
                            if (preg_match('#^/admin/app/sistema_iluminacion_a5/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_sistema_iluminacion_a5_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.sistema.iluminacion.a5',  '_sonata_name' => 'admin_app_sistema_iluminacion_a5_delete',));
                            }

                            // admin_app_sistema_iluminacion_a5_show
                            if (preg_match('#^/admin/app/sistema_iluminacion_a5/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_sistema_iluminacion_a5_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.sistema.iluminacion.a5',  '_sonata_name' => 'admin_app_sistema_iluminacion_a5_show',));
                            }

                            // admin_app_sistema_iluminacion_a5_export
                            if ('/admin/app/sistema_iluminacion_a5/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.sistema.iluminacion.a5',  '_sonata_name' => 'admin_app_sistema_iluminacion_a5_export',  '_route' => 'admin_app_sistema_iluminacion_a5_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/sistemas_corriente_alterna')) {
                            // admin_app_sistemas_corriente_alterna_list
                            if ('/admin/app/sistemas_corriente_alterna/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.sistemas.corriente.alterna',  '_sonata_name' => 'admin_app_sistemas_corriente_alterna_list',  '_route' => 'admin_app_sistemas_corriente_alterna_list',);
                            }

                            // admin_app_sistemas_corriente_alterna_create
                            if ('/admin/app/sistemas_corriente_alterna/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.sistemas.corriente.alterna',  '_sonata_name' => 'admin_app_sistemas_corriente_alterna_create',  '_route' => 'admin_app_sistemas_corriente_alterna_create',);
                            }

                            // admin_app_sistemas_corriente_alterna_batch
                            if ('/admin/app/sistemas_corriente_alterna/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.sistemas.corriente.alterna',  '_sonata_name' => 'admin_app_sistemas_corriente_alterna_batch',  '_route' => 'admin_app_sistemas_corriente_alterna_batch',);
                            }

                            // admin_app_sistemas_corriente_alterna_edit
                            if (preg_match('#^/admin/app/sistemas_corriente_alterna/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_sistemas_corriente_alterna_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.sistemas.corriente.alterna',  '_sonata_name' => 'admin_app_sistemas_corriente_alterna_edit',));
                            }

                            // admin_app_sistemas_corriente_alterna_delete
                            if (preg_match('#^/admin/app/sistemas_corriente_alterna/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_sistemas_corriente_alterna_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.sistemas.corriente.alterna',  '_sonata_name' => 'admin_app_sistemas_corriente_alterna_delete',));
                            }

                            // admin_app_sistemas_corriente_alterna_show
                            if (preg_match('#^/admin/app/sistemas_corriente_alterna/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_sistemas_corriente_alterna_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.sistemas.corriente.alterna',  '_sonata_name' => 'admin_app_sistemas_corriente_alterna_show',));
                            }

                            // admin_app_sistemas_corriente_alterna_export
                            if ('/admin/app/sistemas_corriente_alterna/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.sistemas.corriente.alterna',  '_sonata_name' => 'admin_app_sistemas_corriente_alterna_export',  '_route' => 'admin_app_sistemas_corriente_alterna_export',);
                            }

                        }

                    }

                    elseif (0 === strpos($pathinfo, '/admin/app/t')) {
                        if (0 === strpos($pathinfo, '/admin/app/tar')) {
                            if (0 === strpos($pathinfo, '/admin/app/tarifas_espacios_arrendados')) {
                                // admin_app_tarifas_espacios_arrendados_list
                                if ('/admin/app/tarifas_espacios_arrendados/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.tarifas.espacios.arrendados',  '_sonata_name' => 'admin_app_tarifas_espacios_arrendados_list',  '_route' => 'admin_app_tarifas_espacios_arrendados_list',);
                                }

                                // admin_app_tarifas_espacios_arrendados_create
                                if ('/admin/app/tarifas_espacios_arrendados/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.tarifas.espacios.arrendados',  '_sonata_name' => 'admin_app_tarifas_espacios_arrendados_create',  '_route' => 'admin_app_tarifas_espacios_arrendados_create',);
                                }

                                // admin_app_tarifas_espacios_arrendados_batch
                                if ('/admin/app/tarifas_espacios_arrendados/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.tarifas.espacios.arrendados',  '_sonata_name' => 'admin_app_tarifas_espacios_arrendados_batch',  '_route' => 'admin_app_tarifas_espacios_arrendados_batch',);
                                }

                                // admin_app_tarifas_espacios_arrendados_edit
                                if (preg_match('#^/admin/app/tarifas_espacios_arrendados/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tarifas_espacios_arrendados_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.tarifas.espacios.arrendados',  '_sonata_name' => 'admin_app_tarifas_espacios_arrendados_edit',));
                                }

                                // admin_app_tarifas_espacios_arrendados_delete
                                if (preg_match('#^/admin/app/tarifas_espacios_arrendados/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tarifas_espacios_arrendados_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.tarifas.espacios.arrendados',  '_sonata_name' => 'admin_app_tarifas_espacios_arrendados_delete',));
                                }

                                // admin_app_tarifas_espacios_arrendados_show
                                if (preg_match('#^/admin/app/tarifas_espacios_arrendados/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tarifas_espacios_arrendados_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.tarifas.espacios.arrendados',  '_sonata_name' => 'admin_app_tarifas_espacios_arrendados_show',));
                                }

                                // admin_app_tarifas_espacios_arrendados_export
                                if ('/admin/app/tarifas_espacios_arrendados/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.tarifas.espacios.arrendados',  '_sonata_name' => 'admin_app_tarifas_espacios_arrendados_export',  '_route' => 'admin_app_tarifas_espacios_arrendados_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/tarifas_conexion_pizarras')) {
                                // admin_app_tarifas_conexion_pizarras_list
                                if ('/admin/app/tarifas_conexion_pizarras/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.tarifas.conexion.pizarras',  '_sonata_name' => 'admin_app_tarifas_conexion_pizarras_list',  '_route' => 'admin_app_tarifas_conexion_pizarras_list',);
                                }

                                // admin_app_tarifas_conexion_pizarras_create
                                if ('/admin/app/tarifas_conexion_pizarras/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.tarifas.conexion.pizarras',  '_sonata_name' => 'admin_app_tarifas_conexion_pizarras_create',  '_route' => 'admin_app_tarifas_conexion_pizarras_create',);
                                }

                                // admin_app_tarifas_conexion_pizarras_batch
                                if ('/admin/app/tarifas_conexion_pizarras/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.tarifas.conexion.pizarras',  '_sonata_name' => 'admin_app_tarifas_conexion_pizarras_batch',  '_route' => 'admin_app_tarifas_conexion_pizarras_batch',);
                                }

                                // admin_app_tarifas_conexion_pizarras_edit
                                if (preg_match('#^/admin/app/tarifas_conexion_pizarras/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tarifas_conexion_pizarras_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.tarifas.conexion.pizarras',  '_sonata_name' => 'admin_app_tarifas_conexion_pizarras_edit',));
                                }

                                // admin_app_tarifas_conexion_pizarras_delete
                                if (preg_match('#^/admin/app/tarifas_conexion_pizarras/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tarifas_conexion_pizarras_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.tarifas.conexion.pizarras',  '_sonata_name' => 'admin_app_tarifas_conexion_pizarras_delete',));
                                }

                                // admin_app_tarifas_conexion_pizarras_show
                                if (preg_match('#^/admin/app/tarifas_conexion_pizarras/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tarifas_conexion_pizarras_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.tarifas.conexion.pizarras',  '_sonata_name' => 'admin_app_tarifas_conexion_pizarras_show',));
                                }

                                // admin_app_tarifas_conexion_pizarras_export
                                if ('/admin/app/tarifas_conexion_pizarras/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.tarifas.conexion.pizarras',  '_sonata_name' => 'admin_app_tarifas_conexion_pizarras_export',  '_route' => 'admin_app_tarifas_conexion_pizarras_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/tarjetas_sim')) {
                                // admin_app_tarjetas_sim_list
                                if ('/admin/app/tarjetas_sim/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.tarjetas.sim',  '_sonata_name' => 'admin_app_tarjetas_sim_list',  '_route' => 'admin_app_tarjetas_sim_list',);
                                }

                                // admin_app_tarjetas_sim_create
                                if ('/admin/app/tarjetas_sim/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.tarjetas.sim',  '_sonata_name' => 'admin_app_tarjetas_sim_create',  '_route' => 'admin_app_tarjetas_sim_create',);
                                }

                                // admin_app_tarjetas_sim_batch
                                if ('/admin/app/tarjetas_sim/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.tarjetas.sim',  '_sonata_name' => 'admin_app_tarjetas_sim_batch',  '_route' => 'admin_app_tarjetas_sim_batch',);
                                }

                                // admin_app_tarjetas_sim_edit
                                if (preg_match('#^/admin/app/tarjetas_sim/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tarjetas_sim_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.tarjetas.sim',  '_sonata_name' => 'admin_app_tarjetas_sim_edit',));
                                }

                                // admin_app_tarjetas_sim_delete
                                if (preg_match('#^/admin/app/tarjetas_sim/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tarjetas_sim_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.tarjetas.sim',  '_sonata_name' => 'admin_app_tarjetas_sim_delete',));
                                }

                                // admin_app_tarjetas_sim_show
                                if (preg_match('#^/admin/app/tarjetas_sim/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tarjetas_sim_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.tarjetas.sim',  '_sonata_name' => 'admin_app_tarjetas_sim_show',));
                                }

                                // admin_app_tarjetas_sim_export
                                if ('/admin/app/tarjetas_sim/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.tarjetas.sim',  '_sonata_name' => 'admin_app_tarjetas_sim_export',  '_route' => 'admin_app_tarjetas_sim_export',);
                                }

                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/terminaciones')) {
                            // admin_app_terminaciones_list
                            if ('/admin/app/terminaciones/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.terminaciones',  '_sonata_name' => 'admin_app_terminaciones_list',  '_route' => 'admin_app_terminaciones_list',);
                            }

                            // admin_app_terminaciones_create
                            if ('/admin/app/terminaciones/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.terminaciones',  '_sonata_name' => 'admin_app_terminaciones_create',  '_route' => 'admin_app_terminaciones_create',);
                            }

                            // admin_app_terminaciones_batch
                            if ('/admin/app/terminaciones/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.terminaciones',  '_sonata_name' => 'admin_app_terminaciones_batch',  '_route' => 'admin_app_terminaciones_batch',);
                            }

                            // admin_app_terminaciones_edit
                            if (preg_match('#^/admin/app/terminaciones/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_terminaciones_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.terminaciones',  '_sonata_name' => 'admin_app_terminaciones_edit',));
                            }

                            // admin_app_terminaciones_delete
                            if (preg_match('#^/admin/app/terminaciones/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_terminaciones_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.terminaciones',  '_sonata_name' => 'admin_app_terminaciones_delete',));
                            }

                            // admin_app_terminaciones_show
                            if (preg_match('#^/admin/app/terminaciones/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_terminaciones_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.terminaciones',  '_sonata_name' => 'admin_app_terminaciones_show',));
                            }

                            // admin_app_terminaciones_export
                            if ('/admin/app/terminaciones/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.terminaciones',  '_sonata_name' => 'admin_app_terminaciones_export',  '_route' => 'admin_app_terminaciones_export',);
                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/tipos_')) {
                            if (0 === strpos($pathinfo, '/admin/app/tipos_de_mantenimientos')) {
                                // admin_app_tipos_de_mantenimientos_list
                                if ('/admin/app/tipos_de_mantenimientos/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.tipos.de.mantenimientos',  '_sonata_name' => 'admin_app_tipos_de_mantenimientos_list',  '_route' => 'admin_app_tipos_de_mantenimientos_list',);
                                }

                                // admin_app_tipos_de_mantenimientos_create
                                if ('/admin/app/tipos_de_mantenimientos/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.tipos.de.mantenimientos',  '_sonata_name' => 'admin_app_tipos_de_mantenimientos_create',  '_route' => 'admin_app_tipos_de_mantenimientos_create',);
                                }

                                // admin_app_tipos_de_mantenimientos_batch
                                if ('/admin/app/tipos_de_mantenimientos/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.tipos.de.mantenimientos',  '_sonata_name' => 'admin_app_tipos_de_mantenimientos_batch',  '_route' => 'admin_app_tipos_de_mantenimientos_batch',);
                                }

                                // admin_app_tipos_de_mantenimientos_edit
                                if (preg_match('#^/admin/app/tipos_de_mantenimientos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tipos_de_mantenimientos_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.tipos.de.mantenimientos',  '_sonata_name' => 'admin_app_tipos_de_mantenimientos_edit',));
                                }

                                // admin_app_tipos_de_mantenimientos_delete
                                if (preg_match('#^/admin/app/tipos_de_mantenimientos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tipos_de_mantenimientos_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.tipos.de.mantenimientos',  '_sonata_name' => 'admin_app_tipos_de_mantenimientos_delete',));
                                }

                                // admin_app_tipos_de_mantenimientos_show
                                if (preg_match('#^/admin/app/tipos_de_mantenimientos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tipos_de_mantenimientos_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.tipos.de.mantenimientos',  '_sonata_name' => 'admin_app_tipos_de_mantenimientos_show',));
                                }

                                // admin_app_tipos_de_mantenimientos_export
                                if ('/admin/app/tipos_de_mantenimientos/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.tipos.de.mantenimientos',  '_sonata_name' => 'admin_app_tipos_de_mantenimientos_export',  '_route' => 'admin_app_tipos_de_mantenimientos_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/tipos_distancias_arrendadas')) {
                                // admin_app_tipos_distancias_arrendadas_list
                                if ('/admin/app/tipos_distancias_arrendadas/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.tipos.distancias.arrendadas',  '_sonata_name' => 'admin_app_tipos_distancias_arrendadas_list',  '_route' => 'admin_app_tipos_distancias_arrendadas_list',);
                                }

                                // admin_app_tipos_distancias_arrendadas_create
                                if ('/admin/app/tipos_distancias_arrendadas/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.tipos.distancias.arrendadas',  '_sonata_name' => 'admin_app_tipos_distancias_arrendadas_create',  '_route' => 'admin_app_tipos_distancias_arrendadas_create',);
                                }

                                // admin_app_tipos_distancias_arrendadas_batch
                                if ('/admin/app/tipos_distancias_arrendadas/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.tipos.distancias.arrendadas',  '_sonata_name' => 'admin_app_tipos_distancias_arrendadas_batch',  '_route' => 'admin_app_tipos_distancias_arrendadas_batch',);
                                }

                                // admin_app_tipos_distancias_arrendadas_edit
                                if (preg_match('#^/admin/app/tipos_distancias_arrendadas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tipos_distancias_arrendadas_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.tipos.distancias.arrendadas',  '_sonata_name' => 'admin_app_tipos_distancias_arrendadas_edit',));
                                }

                                // admin_app_tipos_distancias_arrendadas_delete
                                if (preg_match('#^/admin/app/tipos_distancias_arrendadas/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tipos_distancias_arrendadas_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.tipos.distancias.arrendadas',  '_sonata_name' => 'admin_app_tipos_distancias_arrendadas_delete',));
                                }

                                // admin_app_tipos_distancias_arrendadas_show
                                if (preg_match('#^/admin/app/tipos_distancias_arrendadas/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tipos_distancias_arrendadas_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.tipos.distancias.arrendadas',  '_sonata_name' => 'admin_app_tipos_distancias_arrendadas_show',));
                                }

                                // admin_app_tipos_distancias_arrendadas_export
                                if ('/admin/app/tipos_distancias_arrendadas/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.tipos.distancias.arrendadas',  '_sonata_name' => 'admin_app_tipos_distancias_arrendadas_export',  '_route' => 'admin_app_tipos_distancias_arrendadas_export',);
                                }

                            }

                            elseif (0 === strpos($pathinfo, '/admin/app/tipos_mantenimientos_correctivos')) {
                                // admin_app_tipos_mantenimientos_correctivos_list
                                if ('/admin/app/tipos_mantenimientos_correctivos/list' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.tipos.mantenimientos.correctivos',  '_sonata_name' => 'admin_app_tipos_mantenimientos_correctivos_list',  '_route' => 'admin_app_tipos_mantenimientos_correctivos_list',);
                                }

                                // admin_app_tipos_mantenimientos_correctivos_create
                                if ('/admin/app/tipos_mantenimientos_correctivos/create' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.tipos.mantenimientos.correctivos',  '_sonata_name' => 'admin_app_tipos_mantenimientos_correctivos_create',  '_route' => 'admin_app_tipos_mantenimientos_correctivos_create',);
                                }

                                // admin_app_tipos_mantenimientos_correctivos_batch
                                if ('/admin/app/tipos_mantenimientos_correctivos/batch' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.tipos.mantenimientos.correctivos',  '_sonata_name' => 'admin_app_tipos_mantenimientos_correctivos_batch',  '_route' => 'admin_app_tipos_mantenimientos_correctivos_batch',);
                                }

                                // admin_app_tipos_mantenimientos_correctivos_edit
                                if (preg_match('#^/admin/app/tipos_mantenimientos_correctivos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tipos_mantenimientos_correctivos_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.tipos.mantenimientos.correctivos',  '_sonata_name' => 'admin_app_tipos_mantenimientos_correctivos_edit',));
                                }

                                // admin_app_tipos_mantenimientos_correctivos_delete
                                if (preg_match('#^/admin/app/tipos_mantenimientos_correctivos/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tipos_mantenimientos_correctivos_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.tipos.mantenimientos.correctivos',  '_sonata_name' => 'admin_app_tipos_mantenimientos_correctivos_delete',));
                                }

                                // admin_app_tipos_mantenimientos_correctivos_show
                                if (preg_match('#^/admin/app/tipos_mantenimientos_correctivos/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tipos_mantenimientos_correctivos_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.tipos.mantenimientos.correctivos',  '_sonata_name' => 'admin_app_tipos_mantenimientos_correctivos_show',));
                                }

                                // admin_app_tipos_mantenimientos_correctivos_export
                                if ('/admin/app/tipos_mantenimientos_correctivos/export' === $pathinfo) {
                                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.tipos.mantenimientos.correctivos',  '_sonata_name' => 'admin_app_tipos_mantenimientos_correctivos_export',  '_route' => 'admin_app_tipos_mantenimientos_correctivos_export',);
                                }

                            }

                        }

                        elseif (0 === strpos($pathinfo, '/admin/app/tomacorrientes')) {
                            // admin_app_tomacorrientes_list
                            if ('/admin/app/tomacorrientes/list' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'app.admin.tomacorrientes',  '_sonata_name' => 'admin_app_tomacorrientes_list',  '_route' => 'admin_app_tomacorrientes_list',);
                            }

                            // admin_app_tomacorrientes_create
                            if ('/admin/app/tomacorrientes/create' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'app.admin.tomacorrientes',  '_sonata_name' => 'admin_app_tomacorrientes_create',  '_route' => 'admin_app_tomacorrientes_create',);
                            }

                            // admin_app_tomacorrientes_batch
                            if ('/admin/app/tomacorrientes/batch' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'app.admin.tomacorrientes',  '_sonata_name' => 'admin_app_tomacorrientes_batch',  '_route' => 'admin_app_tomacorrientes_batch',);
                            }

                            // admin_app_tomacorrientes_edit
                            if (preg_match('#^/admin/app/tomacorrientes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tomacorrientes_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'app.admin.tomacorrientes',  '_sonata_name' => 'admin_app_tomacorrientes_edit',));
                            }

                            // admin_app_tomacorrientes_delete
                            if (preg_match('#^/admin/app/tomacorrientes/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tomacorrientes_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'app.admin.tomacorrientes',  '_sonata_name' => 'admin_app_tomacorrientes_delete',));
                            }

                            // admin_app_tomacorrientes_show
                            if (preg_match('#^/admin/app/tomacorrientes/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_tomacorrientes_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'app.admin.tomacorrientes',  '_sonata_name' => 'admin_app_tomacorrientes_show',));
                            }

                            // admin_app_tomacorrientes_export
                            if ('/admin/app/tomacorrientes/export' === $pathinfo) {
                                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'app.admin.tomacorrientes',  '_sonata_name' => 'admin_app_tomacorrientes_export',  '_route' => 'admin_app_tomacorrientes_export',);
                            }

                        }

                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/user-user')) {
                    // admin_app_user_user_list
                    if ('/admin/user-user/list' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_app_user_user_list',  '_route' => 'admin_app_user_user_list',);
                    }

                    // admin_app_user_user_create
                    if ('/admin/user-user/create' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_app_user_user_create',  '_route' => 'admin_app_user_user_create',);
                    }

                    // admin_app_user_user_edit
                    if (preg_match('#^/admin/user\\-user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_user_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_app_user_user_edit',));
                    }

                    // admin_app_user_user_delete
                    if (preg_match('#^/admin/user\\-user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_user_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_app_user_user_delete',));
                    }

                    // admin_app_user_user_show
                    if (preg_match('#^/admin/user\\-user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_app_user_user_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.user.admin.user',  '_sonata_name' => 'admin_app_user_user_show',));
                    }

                }

                elseif (0 === strpos($pathinfo, '/admin/user/resetting')) {
                    // sonata_user_admin_resetting_request
                    if ('/admin/user/resetting/request' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sonata_user_admin_resetting_request;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::requestAction',  '_route' => 'sonata_user_admin_resetting_request',);
                    }
                    not_sonata_user_admin_resetting_request:

                    // sonata_user_admin_resetting_reset
                    if (0 === strpos($pathinfo, '/admin/user/resetting/reset') && preg_match('#^/admin/user/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($canonicalMethod, array('GET', 'POST'))) {
                            $allow = array_merge($allow, array('GET', 'POST'));
                            goto not_sonata_user_admin_resetting_reset;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_user_admin_resetting_reset')), array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::resetAction',));
                    }
                    not_sonata_user_admin_resetting_reset:

                    // sonata_user_admin_resetting_send_email
                    if ('/admin/user/resetting/send-email' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_sonata_user_admin_resetting_send_email;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::sendEmailAction',  '_route' => 'sonata_user_admin_resetting_send_email',);
                    }
                    not_sonata_user_admin_resetting_send_email:

                    // sonata_user_admin_resetting_check_email
                    if ('/admin/user/resetting/check-email' === $pathinfo) {
                        if ('GET' !== $canonicalMethod) {
                            $allow[] = 'GET';
                            goto not_sonata_user_admin_resetting_check_email;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminResettingController::checkEmailAction',  '_route' => 'sonata_user_admin_resetting_check_email',);
                    }
                    not_sonata_user_admin_resetting_check_email:

                }

                elseif (0 === strpos($pathinfo, '/admin/login')) {
                    // sonata_user_admin_security_login
                    if ('/admin/login' === $pathinfo) {
                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::loginAction',  '_route' => 'sonata_user_admin_security_login',);
                    }

                    // sonata_user_admin_security_check
                    if ('/admin/login_check' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_sonata_user_admin_security_check;
                        }

                        return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::checkAction',  '_route' => 'sonata_user_admin_security_check',);
                    }
                    not_sonata_user_admin_security_check:

                }

                // sonata_user_admin_security_logout
                if ('/admin/logout' === $pathinfo) {
                    return array (  '_controller' => 'Sonata\\UserBundle\\Controller\\AdminSecurityController::logoutAction',  '_route' => 'sonata_user_admin_security_logout',);
                }

            }

            elseif (0 === strpos($pathinfo, '/api/_')) {
                // nelmio_api_doc_index
                if (0 === strpos($pathinfo, '/api/_doc') && preg_match('#^/api/_doc(?:/(?P<view>[^/]++))?$#s', $pathinfo, $matches)) {
                    if ('GET' !== $canonicalMethod) {
                        $allow[] = 'GET';
                        goto not_nelmio_api_doc_index;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nelmio_api_doc_index')), array (  '_controller' => 'Nelmio\\ApiDocBundle\\Controller\\ApiDocController::indexAction',  'view' => 'default',));
                }
                not_nelmio_api_doc_index:

                if (0 === strpos($pathinfo, '/api/_login_check')) {
                    // api_login_check
                    if ('/api/_login_check' === $pathinfo) {
                        return array('_route' => 'api_login_check');
                    }

                    // app_api_securityapi_logincheck
                    if ('/api/_login_check' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_app_api_securityapi_logincheck;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Api\\SecurityApiController::loginCheckAction',  '_route' => 'app_api_securityapi_logincheck',);
                    }
                    not_app_api_securityapi_logincheck:

                }

                elseif (0 === strpos($pathinfo, '/api/_token/refresh')) {
                    // api_token_refresh
                    if ('/api/_token/refresh' === $pathinfo) {
                        return array (  '_controller' => 'gesdinet.jwtrefreshtoken:refresh',  '_route' => 'api_token_refresh',);
                    }

                    // app_api_securityapi_tokenrefresh
                    if ('/api/_token/refresh' === $pathinfo) {
                        if ('POST' !== $canonicalMethod) {
                            $allow[] = 'POST';
                            goto not_app_api_securityapi_tokenrefresh;
                        }

                        return array (  '_controller' => 'AppBundle\\Controller\\Api\\SecurityApiController::tokenRefreshAction',  '_route' => 'app_api_securityapi_tokenrefresh',);
                    }
                    not_app_api_securityapi_tokenrefresh:

                }

            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
