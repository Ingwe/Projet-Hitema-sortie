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

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="ActiviteRepository")
 * @ORM\Table(name="Activite")
 */
class Activite {
    //put your code here
    
    /**
     * @var type int
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string")
     * @ORM\Column(unique=true)
     * @Assert\NotNull()
     */
    protected $nom;
    
    /**
     * @ORM\Column(type="integer")
     */
    protected $prix;
    
    /**
     * @ORM\Column(type="string")
     * @Assert\NotNull()
     */
    protected $commentaire;
    
    /**
     * @var TypeActivite
     * @ORM\ManyToOne(targetEntity="TypeActivite", inversedBy="activites")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     * @Assert\NotNull()
     */
    protected $type;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $adresse;
    
    /**
     * @ORM\Column(type="string")
     */
    protected $codePostal;
    
    /**
     * @var TypeActivite
     * @ORM\ManyToOne(targetEntity="Departement", inversedBy="activites")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     * @Assert\NotNull()
     */
    protected $departement;
    
    /**
     * @ORM\Column(type="string")
    */
    protected $ville;
    
    /**
     * @ORM\Column(type="date")
    */
    protected $debut;
    
        /**
     * @ORM\Column(type="date")
    */
    protected $fin;


    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="User", inversedBy="activitesCrees")
     * @ORM\JoinColumn(nullable=false, onDelete="CASCADE")
     * @Assert\NotNull()
     */
    protected $createur;
    
    /**
     * Many Activites have Many Users.
     * @ORM\ManyToMany(targetEntity="User", inversedBy="activites")
     * @ORM\JoinTable(name="participants_activites")
     */
    protected $participants;
    
    /**
     * @var type int
     * @ORM\Column(type="integer")
     */
    protected $nbParticipantsPossible;
    
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrix() {
        return $this->prix;
    }

    function getCommentaire() {
        return $this->commentaire;
    }

    function getType() {
        return $this->type;
    }

    function getAdress() {
        return $this->adress;
    }

    function getCodePostal() {
        return $this->codePostal;
    }

    function getVille() {
        return $this->ville;
    }

    function getCreateur() {
        return $this->createur;
    }

    function getParticipants() {
        return $this->participants;
    }

    function setId(type $id) {
        $this->id = $id;
        return $this;
    }

    function setNom($nom) {
        $this->nom = $nom;
        return $this;
    }

    function setPrix($prix) {
        $this->prix = $prix;
        return $this;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    function setType(TypeActivite $type) {
        $this->type = $type;
        return $this;
    }

    function setAdress($adress) {
        $this->adress = $adress;
        return $this;
    }

    function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    function setVille($ville) {
        $this->ville = $ville;
        return $this;
    }

    function setCreateur(User $createur) {
        $this->createur = $createur;
        return $this;
    }

    function addParticipants($user) {
        $this->participants[] = $user;
        return $this;
    }
    
    function delParticipant($user){
        unset($this->participants[$user]);
        $this->participants[] = array_values($this->participants[]);
        return $this;
    }

    
    function getFin() {
        return $this->fin;
    }

    function setFin($fin) {
        $this->fin = $fin;
        return $this;
    }
    
    function getAdresse() {
        return $this->adresse;
    }

    function getDepartement() {
        return $this->departement;
    }

    function getDebut() {
        return $this->debut;
    }

    function getNbParticipantsPossible() {
        return $this->nbParticipantsPossible;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
        return $this;
    }

    function setDepartement(TypeActivite $departement) {
        $this->departement = $departement;
        return $this;
    }

    function setDebut($debut) {
        $this->debut = $debut;
        return $this;
    }

    function setNbParticipantsPossible(type $nbParticipantsPossible) {
        $this->nbParticipantsPossible = $nbParticipantsPossible;
        return $this;
    }



}
