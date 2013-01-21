<?php
namespace emily\BoutikBundle\Controller;

class ContactController extends AbstractController {
    public function showAction() {
        return $this->render("emilyBoutikBundle::contact.html.twig");
    }
}