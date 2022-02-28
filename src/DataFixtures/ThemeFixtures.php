<?php

namespace App\DataFixtures;

use App\Entity\Theme;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ThemeFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        // for ($i=0; $i < 10; $i++) {
        //     $theme = new Theme();
        //     $theme->setTitle('mon titre' . $i);
        // }

        $theme = new Theme();
        $theme->setTitle('mon titre')
            ->setContent('mon content')
            ->setPrice(10.00)
            ->setNbPerson(200)
            ->setMenu('mon menu');


        $manager->persist($theme);
        $manager->flush();
    }
}
