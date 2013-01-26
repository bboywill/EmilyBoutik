<?php
namespace emily\BoutikBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

abstract class AbstractController extends Controller {
	/**
     * Récupère un entity repository directement via le nom de l'entity
     *
     * @param string entityName Le nom de l'entity
     *
     * @return Repository Le repository correspondant a l'entite demandee
     */
	public function getEntityRepository($entityName) {
		return $this->getDoctrine()->getEntityManager()->getRepository("emilyBoutikBundle:" . $entityName);
	}
	
	/**
     * Intercepte tous les appels a une vue afin d'y injecter la liste des catégories.
     */
	public function render($view, array $parameters = array(), Response $response = null) {
		$categories = $this->getEntityRepository("Category")->findAll();
		$parameters["categories"] = $categories;
		return parent::render($view, $parameters, $response);
	}
}