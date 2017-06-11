<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 * Description of Activite
 *
 * @author jason
 */


/**
 * @ORM\Entity
 * @ORM\Table(name="Activite")
 */
class Activite {
    //put your code here
    
    /**
     * @ORM\NumTypAct 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\RefActiv 
     * @ORM\Column(type="string")
     */
    protected $ref;
    
    /**
     * @ORM\NomActiv 
     * @ORM\Column(type="string")
     */
    protected $nom;
    
    /**
     * @ORM\RefActiv 
     * @ORM\Column(type="string")
     */
    protected $prix;
    
    /**
     * @ORM\ComActiv 
     * @ORM\Column(type="string")
     */
    protected $commentaire;
    
    /**
     * @ORM\NumTypActiv 
     * @ORM\Column(type="string")
     */
    protected $type;
    
    /**
     * @ORM\Lieu 
     * @ORM\Column(type="string")
     */
    protected $Lieu;
    
}
