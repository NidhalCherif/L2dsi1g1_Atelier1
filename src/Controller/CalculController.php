<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CalculController extends AbstractController
{
    #[Route('/calcul', name: 'app_calcul')]
    public function index(): Response
    {
        return $this->render('calcul/index.html.twig', [
            'controller_name' => 'CalculController',
        ]);
    }
    #[Route('/calcul/somme/{A<\d+>}/{B<\d+>}', name: 'app_somme')]
    public function somme($A,$B): Response
    { $somme=$A+$B;
        return $this->render('calcul/somme.html.twig', [
            's' => $somme,'a'=>$A,'b'=>$B
        ]);
    }

    #[Route('/calcul/soustraction/{A<\d+>}/{B<\d+>}', name: 'app_soustraction')]
    public function soustraction($A,$B): Response
    { $res=$A-$B;
        return $this->render('calcul/soustraction.html.twig', [
            'res' => $res,'a'=>$A,'b'=>$B
        ]);
    }
    #[Route('/calcul/home', name: 'app_home')]
    public function accueil(): Response
    {
        return $this->render('calcul/accueil.html.twig');
    }
}
