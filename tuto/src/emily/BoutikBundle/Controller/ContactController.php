<?php
namespace emily\BoutikBundle\Controller;

use emily\BoutikBundle\Core\Form\ContactForm;
use emily\BoutikBundle\Core\Model\ContactResponse;

class ContactController extends AbstractController {
    public function showAction() {
        $form = $this->createForm(new ContactForm(), new ContactResponse());
        $request = $this->getRequest();
        if($request->getMethod() == "POST") {
            $form->bindRequest($request);
            if($form->isValid()) {
                return $this->redirect($this->generateUrl("emily_contact"));
            }
        }
        return $this->render("emilyBoutikBundle::contact.html.twig", array(
            "form" => $form->createView()
        ));
    }
}