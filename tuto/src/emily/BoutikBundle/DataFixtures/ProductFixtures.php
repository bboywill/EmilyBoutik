<?php
namespace emily\BoutikBundle\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use emily\BoutikBundle\Entity\Product;

class ProductFixtures extends AbstractFixture implements OrderedFixtureInterface {
    public function load(ObjectManager $manager) {
        $p1 = new Product();
		$p1->setName("Produit 1");
        $p1->setCategory($manager->merge($this->getReference("category_1")));
		$manager->persist($p1);
		
        $p2 = new Product();
		$p2->setName("Produit 2");
        $p2->setCategory($manager->merge($this->getReference("category_1")));
		$manager->persist($p2);
		
		$p3 = new Product();
		$p3->setName("Produit 3");
        $p3->setCategory($manager->merge($this->getReference("category_1")));
		$manager->persist($p3);
		
		$p4 = new Product();
		$p4->setName("Produit 4");
        $p4->setCategory($manager->merge($this->getReference("category_2")));
		$manager->persist($p4);
		
        $manager->flush();
    }
	
	public function getOrder() {
        return 2;
    }
}