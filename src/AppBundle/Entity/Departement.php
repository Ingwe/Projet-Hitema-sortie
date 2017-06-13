<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of Departement
 *
 * @author jason
 */
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="DepartementRepository")
 * @ORM\Table(name="Departements")
 */
class Departement {
    
    /**
     * @var type int
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(unique=true)
     * @ORM\Column(type="string")
     * @Assert\NotNull()
     */
    protected $nom;
    
    /**
     * @var Experience[|ArrayCollection]
     * @ORM\OneToMany(targetEntity="Activite", mappedBy="departement")
     * @ORM\JoinColumn(nullable=false)
    */
    protected $activites;
    
    public function __toString() {
        if ($this->id <10){
            return "0".($this->id)." - ". $this->nom;
        }else{
            return ($this->id)." - ". $this->nom;
        }
    }
    
}
