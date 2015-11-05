<?php

namespace Application\SeoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SeoController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ApplicationSeoBundle:Default:index.html.twig', array('name' => $name));
    }
}
