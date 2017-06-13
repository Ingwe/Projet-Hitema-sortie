<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of UserRepository
 *
 * @author jason
 */
class UserRepository {
    //put your code here
    public function loadUserByUsername($username) {
        return $this->findOneBy(['email' => $email]);
    }

    
    public function findQueryResult($q, $limit){
        $qb=$this->createQueryBuilder('user');

        return $qb
            ->andWhere($qb->expr()->orX(
                $qb->expr()->like('user.nom', ':q'),
                $qb->expr()->like('user.prenom', ':q'),
                $qb->expr()->like('user.email', ':q')
                ))
            ->setParameter('q', '%' . $q . '%')
                ->setFirstResult(0)
                ->setMaxResults($limit)
                ->getQuery()
                ->getResult();
    }
}