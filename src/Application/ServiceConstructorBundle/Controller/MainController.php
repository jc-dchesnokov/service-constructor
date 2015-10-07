<?php

namespace Application\ServiceConstructorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApplicationServiceConstructorBundle:Main:index.html.twig', []);
    }
}
