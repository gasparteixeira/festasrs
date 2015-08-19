<?php
namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Navigation;

class LoadNavigationData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $nav = new Navigation();
        $nav->setName('Home');
        $nav->setUrl('homepage');
        $nav->setDescription("Página Inicial");

        $manager->persist($nav);
        $manager->flush();
    }
}