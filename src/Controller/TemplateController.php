<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Evenement;
use App\Repository\EvenementRepo;


class TemplateController extends AbstractController
{
    /**
     * @Route("/template", name="template")
     */
    public function index(): Response
    {
        return $this->render('template/index.html.twig', [
            'controller_name' => 'TemplateController',
        ]);
    }






    
 /**
     * @Route("/templatefront", name="templatefront")
     */
    public function indexfront(EvenementRepo $htrepo): Response
    {
        return $this->render('base-front.html.twig', [
            'controller_name' => 'TemplateController',
               'Event' => $htrepo->createQueryBuilder('u')->select('u')->getQuery()->getResult()
           
        ]);
    }



    







   
















}
