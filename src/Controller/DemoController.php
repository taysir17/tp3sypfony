<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    #[Route('/demo', name: 'app_demo')]
    public function index(): Response
    {
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
        ]);
    }
    #[Route('/test/{age}', name: 'app_test')]
    public function test($age): Response
    {

        return $this-> render('demo/test.html.twig',[
            'title'=> 'les amis',
            'age'=>$age
            
        ]);
    }
    public function index2($username): Response
    {

        return $this-> render('demo/index2.html.twig',[
            'nom'=>$username
        ]);
    }
}
