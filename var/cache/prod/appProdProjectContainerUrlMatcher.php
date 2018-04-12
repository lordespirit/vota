<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($pathinfo.'/', 'homepage'));
            }

            return $ret;
        }

        // destacats
        if ('/destacats' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::destacatsAction',  '_route' => 'destacats',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ('/logout' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
            }

            if (0 === strpos($pathinfo, '/llistat')) {
                // llistatAdministracio
                if ('/llistatAdministracio' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::llistatAdminAction',  '_route' => 'llistatAdministracio',);
                }

                // llistat
                if ('/llistat' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::llistatAction',  '_route' => 'llistat',);
                }

            }

        }

        elseif (0 === strpos($pathinfo, '/administracio')) {
            // administracioCreacio
            if ('/administracioCreacio' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::administracioCreacioAction',  '_route' => 'administracioCreacio',);
            }

            // administracio
            if ('/administracio' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::administracioAction',  '_route' => 'administracio',);
            }

        }

        elseif (0 === strpos($pathinfo, '/e')) {
            // editarEnquesta
            if ('/editarEnquesta' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::editarEnquestaAction',  '_route' => 'editarEnquesta',);
            }

            // enquesta
            if ('/enquesta' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::enquestaAction',  '_route' => 'enquesta',);
            }

            // eliminar
            if ('/eliminar' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::eliminarAction',  '_route' => 'eliminar',);
            }

        }

        // votar
        if ('/votar' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::votarAction',  '_route' => 'votar',);
        }

        // user_registration
        if ('/register' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::registerAction',  '_route' => 'user_registration',);
        }

        // renderEnquesta
        if ('/renderEnquesta' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::renderEnquestaAction',  '_route' => 'renderEnquesta',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
