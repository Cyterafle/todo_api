<?php

namespace App\DataFixtures;

use App\Entity\Tache;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TacheFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 30; ++$i){
            $tache = new Tache();
            $tache->setTitle('Tache n°'. $i);
            $tache->setDescription('A propos de la tache n°'. $i);
            switch ($i) {
                case $i%2 == 0:
                    $status = 'done';
                    break;
                case $i%3 == 0;
                    $status = 'in_progress';
                    break;
                default:
                    $status = 'todo';
            }
            $tache->setStatus($status);
            $tache->setCreatedAt(new \DateTimeImmutable('now'));
            $tache->setUpdatedAt(new \DateTimeImmutable('now'));
            $manager->persist($tache);
        }

        $manager->flush();
    }
}
