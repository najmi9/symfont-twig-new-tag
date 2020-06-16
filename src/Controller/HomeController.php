<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PostRepository;

class HomeController extends AbstractController
{
    /**
     * @Route("/{id}", name="home")
     */
    public function index($id, PostRepository $postRepo)
    {
           

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'post'=>$postRepo->findOneById($id)
        ]);
    }
}
