<?php

namespace Application\CMSBundle\Service;

use Symfony\Component\DependencyInjection\Container;
use Application\CMSBundle\Entity\Template;

class BlockManager
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
    
    public function __call($method , array $arguments ) 
    {
        if (0 === strpos($method, 'get')) {
            $area = lcfirst(substr($method, 3));
            if (in_array($area, ['header', 'left', 'top', 'bottom', 'right', 'footer'])) {
                return $this->getBlocks($area);
            }
                   
            throw new \Exception(
                "Undefined area '$area'. Maybe you mean 'header', 'left', 'top', 'bottom', 'right', 'footer'"
            );
        }
        
        throw new \BadMethodCallException(
            "Undefined method '$method'. The method name must start with ".
            "either show!"
        );
    }
    
    private function getBlocks($area, array $arguments = [] ) 
    {
        $em = $this->container->get('doctrine.orm.entity_manager');
        $locale = $this->container->get('request')->getLocale();

        $blocks = $em->getRepository('ApplicationCMSBundle:Block')->getBlocks($area, $this->template, $locale);

        return $blocks;
    }
}