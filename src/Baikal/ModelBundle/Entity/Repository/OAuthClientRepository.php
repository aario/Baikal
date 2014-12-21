<?php

namespace Baikal\ModelBundle\Entity\Repository;

use Doctrine\ORM\EntityManager;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OAuthClientRepository {
    protected $em;
    
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function findAll() {
        $query = $this->em->createQuery('SELECT o FROM BaikalModelBundle:OAuthClient o');
        return $query->getResult();
    }
}