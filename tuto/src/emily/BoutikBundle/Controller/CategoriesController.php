<?php
namespace emily\BoutikBundle\Controller;

class CategoriesController extends AbstractController {
    public function showAction($id) {
		$category = $this->getEntityRepository("Category")->find($id);
        if(!$category) {
            throw $this->createNotFoundException("Unable to find category [id = " . $id . "].");
        }
		return $this->render("emilyBoutikBundle:categories:show.html.twig", array(
			"category" => $category
		));
    }
}