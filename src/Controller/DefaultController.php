<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        // return new Response(
        //     '<!doctype html><html lang="en"><title>Wild Series</title><body>Wild Series Index</body></html>'
        // );
        return $this->render('default/index.html.twig', ['website'=>'welcom']);
    }
}