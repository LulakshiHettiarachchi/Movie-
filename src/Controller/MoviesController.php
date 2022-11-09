<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    #[Route('/movies', name: 'app_movies')]
    public function index(): Response
    {
    $movies=["Avengers:EndGame","Inception","Loki","Black"];
      return $this->render('index.html.twig',array(
      'movies'=> $movies
      ));
    }
}
 