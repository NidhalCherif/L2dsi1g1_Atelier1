<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Taxes\calculateur;


class testController extends AbstractController
{

    #[Route('/test',name:'test')]
    function index(calculateur $calcul)
    {
        $mtTVA=$calcul->prixTVA(100);
        $mtTTC=$calcul->prixTTC(100);
        dump("bonjour votre montant Tva est  $mtTVA et le montant à payer est $mtTTC"); die;
    }


    function test2()
    {
      dd("ça fontionne avec le YAMl auusi");
    }
#[Route('/test3',name:'test3')]
    function test3()
    {
        return $this->render("test/test3.html.twig");
    }
}
