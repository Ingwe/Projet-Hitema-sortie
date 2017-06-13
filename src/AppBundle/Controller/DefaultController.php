<?php

namespace AppBundle\Controller;

use AppBundle\Form\RechercheActivitesType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="accueil")
     * Template()
     */
    public function accueilAction(Request $request, $page=1)
    {
        $em = $this->getDoctrine()->getManager();
        
        /*$departements = $em
            ->getRepository('AppBundle:Departement')
            ->findAll();
        $typeActivite = $em
            ->getRepository('AppBundle:TypeActivite')
            ->findAll();*/

        $repository = $em->getRepository('AppBundle:Activite');

        $qb = $repository
            ->createQueryBuilder('activite')
            ->addOrderBy('activite.id', 'DESC');
        
        $paginator = $this->get('knp_paginator');
        
        $recherche=array();
        $form= $this->createForm(RechercheActivitesType::class, $recherche);
        if($form->handleRequest($request)->isValid()){
             
            return $this ->redirectToRoute('activite_index', array(
                 'type'=>$recherche->type, 
                 'departement'=>$recherche->departement, 
                 'nom'=>$recherche->nom 
            ));      
        }
        
        $activites = $paginator->paginate(
            $qb,
            $page,
            10
        );
 
        return $this->render('default/accueil.html.twig', array(
            /*'types'=> $typeActivite,
            'departements' => $departements,*/
            'form' => $form->createView(),
            'activites' => $activites
        ));
        
    }

    
}
