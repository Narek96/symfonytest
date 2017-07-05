<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/product')) {
            // deleteProduct
            if (0 === strpos($pathinfo, '/product/delete') && preg_match('#^/product/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($canonicalMethod, array('GET', 'DELETE'))) {
                    $allow = array_merge($allow, array('GET', 'DELETE'));
                    goto not_deleteProduct;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteProduct')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::deleteAction',));
            }
            not_deleteProduct:

            // storeProduct
            if ('/product/' === $pathinfo) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_storeProduct;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProductController::storeAction',  '_route' => 'storeProduct',);
            }
            not_storeProduct:

            // createProduct
            if ('/product/create' === $pathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_createProduct;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProductController::createAction',  '_route' => 'createProduct',);
            }
            not_createProduct:

            // indexProduct
            if ('/product' === $trimmedPathinfo) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_indexProduct;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'indexProduct');
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ProductController::indexAction',  '_route' => 'indexProduct',);
            }
            not_indexProduct:

            // editProduct
            if (preg_match('#^/product/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if ('GET' !== $canonicalMethod) {
                    $allow[] = 'GET';
                    goto not_editProduct;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editProduct')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::editAction',));
            }
            not_editProduct:

            // updateProduct
            if (preg_match('#^/product/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ('POST' !== $canonicalMethod) {
                    $allow[] = 'POST';
                    goto not_updateProduct;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'updateProduct')), array (  '_controller' => 'AppBundle\\Controller\\ProductController::updateAction',));
            }
            not_updateProduct:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
