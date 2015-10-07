<?php

namespace Application\ServiceConstructorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
    	$em = $this->get('doctrine.orm.entity_manager');
    	$bundles = $em->getRepository('ApplicationServiceConstructorBundle:Bundle')->findAll();
        return $this->render('ApplicationServiceConstructorBundle:Main:index.html.twig', ['bundles' => $bundles]);
    }
}
