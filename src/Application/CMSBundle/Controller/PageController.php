<?php

namespace Application\CMSBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction($slug)
    {
        $bm = $this->get('application_cms.block_manager');
        $page = $this->getDoctrine()->getManager()->getRepository('ApplicationCMSBundle:Page')->findOneBy(array('slug' => $slug));

        if (is_null($page) || empty($page)) {
            throw $this->createNotFoundException('Page not found!');
        } else {
            $bm->setTemplate($page->getTemplate());
            return $this->render('ApplicationCMSBundle:Page:index.html.twig', array('page' => $page, 'bm' => $bm)); 
        }
    }
    
    public function blocksAction($blocks)
    {
        return $this->render('ApplicationCMSBundle:Page:blocks.html.twig', array('blocks' => $blocks)); 
    }
    
    public function blockAction($block)
    {
        return $this->render('ApplicationCMSBundle:Page:block.html.twig', array('block' => $block)); 
    }
}