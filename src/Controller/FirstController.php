<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
//    /**
//     * @Route("/first", name="first")
//     */
//    public function index()
//    {
//        return $this->render('first/index.html.twig', [
//            'controller_name' => 'FirstController',
//        ]);
//    }

    /**
     * @Route("/admin")
     */
    public function admin()
    {
        return new Response('<html><body>Admin page!</body></html>');
    }

}
