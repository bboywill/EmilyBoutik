<?php
namespace emily\BoutikBundle\Core\DataFixtures;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use emily\BoutikBundle\Entity\Category;

class CategoryFixtures implements FixtureInterface {
    public function load(ObjectManager $manager) {
        $c1 = new Category();
        $c1->setTitle("Collier");
        $c1->setImage("1.jpg");
        $manager->persist($c1);
		
		$c2 = new Category();
        $c2->setTitle("Bracelets");
        $c2->setImage("2.jpg");
        $manager->persist($c2);
		
        $c3 = new Category();
        $c3->setTitle("Bagues");
        $c3->setImage("3.jpg");
        $manager->persist($c3);
        $manager->flush();
    }
}

/*
Fatal error: Declaration of emily\BoutikBundle\Core\DataFixtures\CategoryFixtures::load()
must be compatible with Doctrine\Common\DataFixtures\FixtureInterface::load(Doctrine\Common\Persistence\ObjectManager $manager)
in C:\wamp\www\emily\tuto\src\emily\BoutikBundle\Core\DataFixtures\CategoryFixtures.php on line 7
*/