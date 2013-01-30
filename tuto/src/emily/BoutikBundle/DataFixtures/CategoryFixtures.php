<?php
namespace emily\BoutikBundle\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use emily\BoutikBundle\Entity\Category;

class CategoryFixtures extends AbstractFixture implements OrderedFixtureInterface {
    public function load(ObjectManager $manager) {
        $c1 = new Category();
        $c1->setName("Collier");
        $c1->setImage("1.jpg");
        $manager->persist($c1);
		
		$c2 = new Category();
        $c2->setName("Bracelets");
        $c2->setImage("2.jpg");
        $manager->persist($c2);
		
        $c3 = new Category();
        $c3->setName("Bagues");
        $c3->setImage("3.jpg");
        $manager->persist($c3);
        $manager->flush();
		
        $this->addReference("category_1", $c1);
        $this->addReference("category_2", $c2);
        $this->addReference("category_3", $c3);
    }
	
	public function getOrder() {
        return 1;
    }
}