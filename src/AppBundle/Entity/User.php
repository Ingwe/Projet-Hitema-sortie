<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Utilisateur")
 */
class User extends BaseUser
{
    /**
     * @ORM\NumUtl 
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\NomUtl 
     * @ORM\Column(type="string")
     */
    protected $nom;
    
    /**
     * @ORM\PrenomUtl 
     * @ORM\Column(type="string")
     */
    protected $prenom;
    
    /**
     * @ORM\Adr1Utl 
     * @ORM\Column(type="string")
     */
    protected $adresse1;
    
    /**
     * @ORM\Adr2Utl 
     * @ORM\Column(type="string")
     */
    protected $adresse2;
    
    /**
     * @ORM\CPUtl
     * @ORM\Column(type="string")
     */
    protected $codePostal;
    
    /**
     * @ORM\VilleUtl 
     * @ORM\Column(type="string")
     */
    protected $ville;
    
    /**
     * @ORM\TelUtl  
     * @ORM\Column(type="string")
     */
    protected $telephone;
    
    /**
     * @ORM\DatNaisUtl 
     * @ORM\Column(type="date")
     */
    protected $dateNaissance;
    
    /**
     * @ORM\NomUtl 
     * @ORM\Column(type="string")
     */
    protected $NomUtl;
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getAdresse1() {
        return $this->adresse1;
    }

    function getAdresse2() {
        return $this->adresse2;
    }

    function getCodePostal() {
        return $this->codePostal;
    }

    function getVille() {
        return $this->ville;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getDateNaissance() {
        return $this->dateNaissance;
    }

    function getNomUtl() {
        return $this->NomUtl;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setAdresse1($adresse1) {
        $this->adresse1 = $adresse1;
    }

    function setAdresse2($adresse2) {
        $this->adresse2 = $adresse2;
    }

    function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
    }

    function setVille($ville) {
        $this->ville = $ville;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;
    }

    function setNomUtl($NomUtl) {
        $this->NomUtl = $NomUtl;
    }


}