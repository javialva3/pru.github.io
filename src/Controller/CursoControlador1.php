<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController ;    
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;


/**
 * Description of CursoControlador1
 *
 * @author usuario
 */
class CursoControlador1 extends AbstractController
{
    //put your code here
    #[Route('/rutaError')]
    public function homepage(): Response
    {
        //die('Primera página del curso');
        //return new Response('Titulo: Primera página del curso.');
        return $this->render('curso/homepage.html.twig', ['titulo' => 'PB & Jams']);
        //return $this->render('base.html.twig');
    }
    
    #[Route('/comodin/{genero}')]
    public function comodin(string $genero = null): Response 
    {
        if ($genero)
        {
            $titulo = 'Genero: '.str_replace('-', ' ', $genero);
        }
        else
        {
            $titulo = 'Todos los géneros';
        }
        
        
        return new Response($titulo);
    }
}






