<?php

namespace App\DataFixtures;

use App\Entity\Project;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $project = new Project();
        $project->setName('Projet test');
        $project->setFirstTech('Technologie 1');
        $project->setSecondTech('Technologie 2');
        $project->setDescription('Description du projet test');
        $manager->persist($project);

        $manager->flush();
    }
}
