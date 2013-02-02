<?php
namespace emily\BoutikBundle\Controller;

use emily\BoutikBundle\Form\ProductType;
use emily\BoutikBundle\Entity\Product;

class ProductsController extends AbstractController {
    public function allAction() {
        return $this->render("emilyBoutikBundle:products:all.html.twig");
    }

    public function addAction() {
        $formResponse = new Product();
		$form = $this->createForm(new ProductType(), $formResponse);
        $request = $this->getRequest();
        if($request->getMethod() == "POST") {
            $form->bindRequest($request);
            if($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($formResponse);
                $em->flush();
                $this->get("session")->setFlash("emily_products", "Product created");
                return $this->redirect($this->generateUrl("emily_categories_show", array(
					"id" => $formResponse->getCategory()->getId()
				)));
            }
        }
        return $this->render("emilyBoutikBundle:Products:add.html.twig", array(
            "form" => $form->createView()
        ));
    }
}