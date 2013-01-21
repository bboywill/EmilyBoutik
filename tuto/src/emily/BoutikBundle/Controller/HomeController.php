<?php
namespace emily\BoutikBundle\Controller;

class HomeController extends AbstractController {
    public function showAction() {
        return $this->render("emilyBoutikBundle::home.html.twig");
    }
}