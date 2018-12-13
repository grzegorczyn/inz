<?php

namespace AppBundle\DataFixtures\ORM;


use Doctrine\Bundle\FixturesBundle\ORMFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData implements ORMFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPassword('$2y$12$Fg6L2UqIjaTaX09R5LlS4uhP8MGG.hFPcPL9JQwrpT16mC9BVXJsC');
        $userAdmin->setRoles(['ROLE_USER']);

        $manager->persist($userAdmin);
        $manager->flush();
    }
}