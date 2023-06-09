<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\DataFixtures\SquirrelFixtures;
use App\Repository\SquirrelRepository;
use App\Entity\Squirrel;
use App\Repository\NutRepository;

class HomeController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(SquirrelRepository $SquirrelRepository, NutRepository $nutRepository): Response
    {
        $squirrels = $SquirrelRepository->findAll();
        $nuts = $nutRepository->findAll();
        return $this->render('home/index.html.twig', ['squirrels' => $squirrels, 'nuts' => $nuts]);
    }
}
