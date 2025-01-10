<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'app_homepage')]
    public function home(): Response
    {
        return $this->render('main/home.html.twig', [
            'controller_name' => 'MainController',
            'recos' => [[
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTA3Mdv-oGJgHLnO8LJeiNpGCVQonH8ATOHhLUca1oN7aGn3H3v',
                'imageAlt' => 'Lee',
                'userName'=> 'John Doe',
                'date'=> '2021-09-01',
                'title'=> 'Lee',
                'content'=> 'Un biopic captivant sur Lee Miller, mannequin devenue photographe de guerre. Le film explore son parcours audacieux et ses clichés marquants qui témoignent des horreurs et de la résilience humaine.',
            ],
            [
            'image' => 'https://upload.wikimedia.org/wikipedia/en/2/2e/Inception_%282010%29_theatrical_poster.jpg',
            'imageAlt' => 'Inception',
            'userName' => 'Jane Doe',
            'title' => 'Inception',
            'date'=> '2021-09-01',
            'content' => 'Un thriller sci-fi qui explore les rêves...',
            ]]
        ]);

    }
}
