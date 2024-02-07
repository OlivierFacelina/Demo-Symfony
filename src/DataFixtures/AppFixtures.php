<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = \Faker\Factory::create('fr_FR');

        for ($i=0; $i < 20 ; $i++) { 
            $product = new Product();
            $product->setName($faker->text());
            $product->setPrice($faker->numberBetween(50,999));
            $product->setDescription($faker->paragraph());
            $manager->persist($product);
        }

        $manager->flush();
    }
}
