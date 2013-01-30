<?php
namespace emily\BoutikBundle\Controller;

use emily\BoutikBundle\Form\ContactForm;
use emily\BoutikBundle\Form\ContactResponse;

class ContactController extends AbstractController {
    public function showAction() {
        $formResponse = new ContactResponse();
		$form = $this->createForm(new ContactForm(), $formResponse);
        $request = $this->getRequest();
        if($request->getMethod() == "POST") {
            $form->bindRequest($request);
            if($form->isValid()) {			
                $message = \Swift_Message::newInstance();
                $message->setSubject("Contact");
                $message->setFrom($this->container->getParameter("emily.contact.email_from"));
                $message->setTo($this->container->getParameter("emily.contact.email_to"));
				$message->setBody($this->renderView("emilyBoutikBundle:emails:contact.txt.twig", array("response" => $formResponse)));
                $this->get("mailer")->send($message);
                $this->get("session")->setFlash("emily_contact", "Your contact enquiry was successfully sent. Thank you!");
                return $this->redirect($this->generateUrl("emily_contact"));
            }
        }
        return $this->render("emilyBoutikBundle::contact.html.twig", array(
            "form" => $form->createView()
        ));
    }
}