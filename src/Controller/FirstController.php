<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }
    #[Route('/first', name: 'app_first')]

    public function notes():Response{
        $note=[3,7,10,13,5,7,18];
        return $this->render('first/notes.html.twig',[
            'notes'=>$note
        ]);
        
    }
}
