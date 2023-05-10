<?php

//namespace App\DataFixtures;

//use App\Entity\Category;
//use Doctrine\Bundle\FixturesBundle\Fixture;
//use Doctrine\Persistence\ObjectManager;

//class CategoryFixtures extends Fixture
//{
 //   public function load(ObjectManager $manager): void
   // {
     //   $category = new Category();

       // $category->setName('Horreur');

        //$manager->persist($category);
        // $product = new Product();
        // $manager->persist($product);

        //$manager->flush();
    //}
//}




namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const CATEGORIES = [
        'Action',
        'Aventure',
        'Animation',
        'Fantastique',
        'Horreur',

    ];
    public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORIES as $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
            $this->addReference('category_' . $categoryName, $category);
        }
        $manager->flush();
    }
}