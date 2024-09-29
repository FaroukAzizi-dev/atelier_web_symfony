<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
       /* return $this->render('service/index.html.twig', [
            'controller_name' => 'ServiceController',
        ]);*/

        return new Response("Bonjour les amis");


    }

    #[Route('/service/{name}', name: 'app_service')]
    public function showservice($name): Response
    {
        //return new Response("service".$name);
        return $this->render('service/showService.html.twig',['name'=>$name]);

    }

}
