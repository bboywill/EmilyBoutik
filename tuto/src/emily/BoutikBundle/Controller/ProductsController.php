<?php
namespace emily\BoutikBundle\Controller;

class ProductsController extends AbstractController {
    public function allAction() {
        return $this->render("emilyBoutikBundle:products:all.html.twig");
    }
}