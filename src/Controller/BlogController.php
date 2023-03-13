<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route('/blog', name: 'app_blog')]
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    #[Route('/blog/list', name: 'blog_list')]
    public function list(): Response
    {
        return new Response('<h1> Liste des articles</h1>');
    }

    #[Route('/blog/detail/{id}', name: 'blog_show')]
    public function show($id): Response
    {  $name='Inroduction au symfony';
        return $this->render('Blog/show.html.twig',['a'=>$id,'b'=>$name]);}

    #[Route('/blog/detail/{id}/{name}', name: 'blog_detail',priority:1)]
    public function detail($id,$name): Response
    {
        return $this->render('Blog/detail.html.twig',['a'=>$id,'b'=>$name]);}
    #[Route('/blog/test', name: 'blog_tes')]
    public function someMethod(): Response
    { #$url=$this->generateUrl('blog_detail',['id'=>100,'name'=>'BASE-de-DONNEES']);
        #dd($url);
        #return $this->redirect($url);
        return $this->redirectToRoute('blog_detail',['id'=>100,'name'=>'BASE-de-DONNEES']);

    }
}
