<?php
namespace emily\BoutikBundle\Controller;

use emily\BoutikBundle\Form\CategoryType;
use emily\BoutikBundle\Entity\Category;

class CategoriesController extends AbstractController {
    public function allAction() {
    }

	public function showAction($id) {
		$category = $this->getEntityRepository("Category")->find($id);
        if(!$category) {
            throw $this->createNotFoundException("Unable to find category [id = " . $id . "].");
        }
		return $this->render("emilyBoutikBundle:categories:show.html.twig", array(
			"category" => $category
		));
    }
	
    public function addAction() {
        $formResponse = new Category();
		$form = $this->createForm(new CategoryType(), $formResponse);
        $request = $this->getRequest();
        if($request->getMethod() == "POST") {
            $form->bindRequest($request);
            if($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($formResponse);
                $em->flush();
                $this->get("session")->setFlash("emily_categories", "Category created");
                return $this->redirect($this->generateUrl("emily_categories_show", array(
					"id" => $formResponse->getId()
				)));
            }
        }
        return $this->render("emilyBoutikBundle:Categories:add.html.twig", array(
            "form" => $form->createView()
        ));
    }
}