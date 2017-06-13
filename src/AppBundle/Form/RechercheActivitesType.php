<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace AppBundle\Form;

use AppBundle\Entity\Departement;
use AppBundle\Entity\TypeActivite;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Description of RechercheActivitesType
 *
 * @author jason
 */
class RechercheActivitesType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options) {
         $builder
                 ->add('type', EntityType::class, ['label' => 'Genre', 'class'=> TypeActivite::class])
                 ->add('departement', EntityType::class, ['label' => 'Où', 'class'=> Departement::class])
                 ->add('nom', TextareaType::class, ['label' => 'Activité recherchée']);
    }

     public function configureOptions(OptionsResolver $resolver) {
         $resolver->setDefaults([
             'data_class'=> null,
         ]);
     }
}
