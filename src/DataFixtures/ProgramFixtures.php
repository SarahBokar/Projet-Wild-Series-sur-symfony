<?php

// namespace App\DataFixtures;

// use App\Entity\Program;
// use Doctrine\Bundle\FixturesBundle\Fixture;
// use Doctrine\Common\DataFixtures\DependentFixtureInterface;
// use Doctrine\Persistence\ObjectManager;

// class ProgramFixtures extends Fixture implements DependentFixtureInterface
// {
//     public function load(ObjectManager $manager)
//     {
//         $program = new Program();
//         $program->setTitle('Walking dead');
//         $program->setSynopsis('Des zombies envahissent la terre');
//         $program->setCategory($this->getReference('category_Action'));
//         $manager->persist($program);
//         $manager->flush();
//     }

//     public function getDependencies()
//     {
//         return [
//           CategoryFixtures::class,
//         ];
//     }


// }

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // Créer et persister plusieurs programmes
        for ($i = 1; $i <= 5; $i++) {
            $program = new Program();
            $program->setTitle('Programme ' . $i);
            $program->setSynopsis('Synopsis du programme ' . $i);
            $program->setCategory($this->getReference('category_Action'));
            $manager->persist($program);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            CategoryFixtures::class,
        ];
    }
}