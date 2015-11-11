<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/test", name="test_homepage")
     */
    public function indexAction(Request $request)
    {
        dump($request->get('_route'));
        // replace this example code with whatever you need
        return $this->render('AppBundle:Default:index.html.twig');
    }
}
