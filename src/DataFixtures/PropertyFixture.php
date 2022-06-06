<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\DBAL\Driver\IBMDB2\Exception\Factory;
use Doctrine\Persistence\ObjectManager;


class PropertyFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
