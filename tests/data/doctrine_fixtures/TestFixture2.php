<?php

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Persistence\ObjectManager;

class TestFixture2 implements FixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $entity = new PlainEntity();
        $entity->setName('from TestFixture2');

        $manager->persist($entity);
        $manager->flush();
    }
}
