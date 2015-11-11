<?php

namespace Application\CMSBundle\Service;

use Symfony\Component\DependencyInjection\Container;
use Application\CMSBundle\Entity\Template;

class PageManager
{
    private $container;
    private $template;
    
    public function __construct(Container $container)
    {
        $this->container = $container;
    }
    
    public function setTemplate(Template $template)
    {
        $this->template = $template;
    }
    
    public function getBlockManager(Template $template) 
    {
        $bm = $this->container->get('application_cms.block_manager');
        $bm->setTemplate($this->template());
        return $bm;
    }
}