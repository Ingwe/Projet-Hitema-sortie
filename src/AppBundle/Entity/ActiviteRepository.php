<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of ActiviteRepository
 *
 * @author jason
 */
class ActiviteRepository extends EntityRepository{
    //put your code here
    
    public function loadUserByUsername($nom) {
        return $this->findOneBy(['nom' => $nom]);
    }

    
    public function findQueryResult($q, $limit){
        $qb=$this->createQueryBuilder('activite');

        return $qb
            ->andWhere($qb->expr()->orX(
                $qb->expr()->like('activite.nom', ':q')
                ))
            ->setParameter('q', '%' . $q . '%')
                ->setFirstResult(0)
                ->setMaxResults($limit)
                ->getQuery()
                ->getResult();
    }
    
}
