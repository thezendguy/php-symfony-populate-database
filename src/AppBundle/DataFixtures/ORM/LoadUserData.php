<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

use AppBundle\Entity\Product;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setName('Samsung Galaxy S6');
        $product->setPrice('600');
        $product->setDescription('The description of the product goes here');

        $manager->persist($product);
        $manager->flush();
    }
}
