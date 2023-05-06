<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Class ProgramController extends AbstractController
// {
//     // #[Route('/program/', name: 'program_index')]
//     // public function index(): Response
//     // {
//     //     // return new Response(
//     //     //     '<!doctype html><html lang="en"><title>Wild Series</title><body>Wild Series Index</body></html>'
//     //     // );
//     //     return new Response(
//     //         '<!doctype html><html lang="en"><title>Wild Series</title><body>Wild Series Index</body></html>'
//     //     );
//     // }
    
// }
Class ProgramController extends AbstractController
{
    #[Route('/program/{id<\d+>}/', name: 'program_show', methods: ['GET'])]
    public function show(int $id): Response
    {
        // Récupérer le programme correspondant à l'id et effectuer les traitements nécessaires

        return $this->render('program/show.html.twig', ['id' => $id]);
    }
}