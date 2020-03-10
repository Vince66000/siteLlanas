<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class HomeController extends AbstractController {

    private $twig;

    public function __construct( Environment $twig)
    {
        $this->twig = $twig;
    }

    public function index():Response {
//        return new Response('OK GOGOLE!!!!');
        return new Response($this->twig->render('home.html.twig'));

    }
}
