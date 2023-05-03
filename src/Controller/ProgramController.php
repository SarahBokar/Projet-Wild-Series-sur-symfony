<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

Class ProgramController extends AbstractController
{
    #[Route('/program/', name: 'program_index')]
    public function index(): Response
    {
        // return new Response(
        //     '<!doctype html><html lang="en"><title>Wild Series</title><body>Wild Series Index</body></html>'
        // );
        return new Response(
            '<!doctype html><html lang="en"><title>Wild Series</title><body>Wild Series Index</body></html>'
        );
    }
}