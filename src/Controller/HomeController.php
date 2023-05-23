<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{   
   /**
    * Create a new series
    *
    * @param  Request $request
    * @return Response
    */
   public function index(Request $request): Response
   {
        return $this->render('base.html.twig', []);
   }



}