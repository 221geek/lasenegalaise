<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CulinController extends AbstractController
{
    /**
     * @Route("/culins", name="culin")
     */
    public function index(Request $request) {

        $currentRoute = $request->get('_route');

        return $this->render('culin/culin.html.twig', [
            'currentRoute' => $currentRoute,
        ]);
    }
}
