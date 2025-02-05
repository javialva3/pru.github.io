<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CursoControlador1Controller extends AbstractController
{
    #[Route('/curso/controlador1', name: 'app_curso_controlador1')]
    public function index(): Response
    {
        return $this->render('curso_controlador1/index.html.twig', [
            'controller_name' => 'CursoControlador1Controller',
        ]);
    }
    
    #[Route('/')]
    public function homepage(): Response
    {
        //die('Primera página del curso');
        //return new Response('Titulo: Primera página del curso.');
        return $this->render('curso/homepage.html.twig', ['titulo' => 'PB & Jams']);
        //return $this->render('base.html.twig');
    }
}
