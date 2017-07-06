<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class ProductController extends Controller
{

    public function deleteAction($id, EntityManagerInterface $em)
    {
        $repository = $em->getRepository('AppBundle:Product');
        $product = $repository->find($id);

        $em->remove($product);

        $em->flush();
        return $this->redirectToRoute('product_index');
    }

//    /**
//     * @Route("/product/", name="storeProduct")
//     * @Method("POST")
//     */
    public function storeAction(Request $request, EntityManagerInterface $em)
    {
        $product = new Product();
        $product->setName($request->get('productName'));
        $product->setPrice($request->get('productPrice'));
        $validator = $this->get('validator');
        $errors = $validator->validate($product);
        if (count($errors) > 0) {
            return $this->render('AppBundle:product:create.html.twig', array('errors' => $errors));
        } else {
            $em->persist($product);
            $em->flush();
            return $this->redirectToRoute('product_index');
        }
    }


    public function createAction(EntityManagerInterface $em)
    {
        return $this->render('AppBundle:product:create.html.twig');
    }


    public function indexAction(EntityManagerInterface $em)
    {
        $repository = $em->getRepository('AppBundle:Product');
        $products = $repository->findAll();

        return $this->render('AppBundle:product:index.html.twig', array(
            "products" => $products));
    }
//    /**
//     * @Route("/product/{id}", name="showProduct")
//     * @Method("GET")
//     */
//    public function showAction(EntityManagerInterface $em, $id)
//    {
//        $repository = $em->getRepository('AppBundle:Product');
//        $product = $repository->find($id);
//
//        return $this->render('product/showProduct.html.twig',  array(
//            "product" => $product));
//    }
//    /**
//     * @Route("/product/{id}/edit", name="editProduct")
//     * @Method("GET")
//     */
    public function editAction(EntityManagerInterface $em, $id)
    {
        $repository = $em->getRepository('AppBundle:Product');
        $product = $repository->find($id);

        return $this->render('AppBundle:product:update.html.twig', array(
            "product" => $product));
    }


    public function updateAction(Request $request, EntityManagerInterface $em, $id)
    {
        $product = $em->getRepository('AppBundle:Product')->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id ' . $id
            );
        }

        $product->setName($request->get('productName'));
        $product->setPrice($request->get('productPrice'));

        $em->flush();

        return $this->redirectToRoute('product_index', array(
            "id" => $id));
    }


}
