<?php
// src/Controller/DefaultController.php
namespace App\Controller;

// src/Controller/DefaultController.php

// ...
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
    * @Route("/", name="home")
    */
    public function home(): Response
    {
        return $this->render('pages/home.html.twig', [
        ]);
    }

    /**
    * @Route("/a-propos", name="about")
    */
    public function about(): Response
    {
        return $this->render('pages/about.html.twig', [
        ]);
    }

    /**
    * @Route("/mes-projets", name="projects")
    */
    public function projects(): Response
    {
        return $this->render('pages/projects.html.twig', [
        ]);
    }
}