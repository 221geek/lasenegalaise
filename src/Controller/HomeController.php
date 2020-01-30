<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request)
    {
        $currentRoute = $request->get('_route');

        return $this->render('home/home.html.twig', [
            'currentRoute' => $currentRoute,
        ]);
    }
}
