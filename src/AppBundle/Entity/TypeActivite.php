<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of TypeActivite
 *
 * @author jason
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="TypeAct")
 */
class TypeActivite {
    //put your code here
    
    /**
     * @ORM\NumTypAct 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\LibTypAct 
     * @ORM\Column(type="string")
     */
    protected $nom;
    
    function __construct() {
        
    }

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }


}
