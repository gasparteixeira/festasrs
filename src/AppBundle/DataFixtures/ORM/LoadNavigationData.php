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
        $n1 = new Navigation();
        $n1->setName('Home');
        $n1->setUrl('/');
        $n1->setIsPublic(TRUE);
        $n1->setCreatedAt(new \DateTime('NOW'));
        $manager->persist($n1);
        $manager->flush();
        
        $n2 = new Navigation();
        $n2->setName('Serviços');
        $n2->setUrl("#");
        $n2->setIsPublic(TRUE);
        $n2->setCreatedAt(new \DateTime('NOW'));
        $manager->persist($n2);
        $manager->flush();
        
        $n3 = new Navigation();
        $n3->setName('Anúncios');
        $n3->setUrl('/anuncios');
        $n3->setIsPublic(TRUE);
        $n3->setCreatedAt(new \DateTime('NOW'));
        $n3->setParent($n2);
        $manager->persist($n3);
        $manager->flush();
        
        $n4 = new Navigation();
        $n4->setName('Parceiros');
        $n4->setUrl('/parceiros');
        $n4->setIsPublic(TRUE);
        $n4->setCreatedAt(new \DateTime('NOW'));
        $n4->setParent($n2);
        $manager->persist($n4);
        $manager->flush();
    }
}