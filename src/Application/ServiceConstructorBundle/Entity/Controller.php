<?php

namespace Application\ServiceConstructorBundle\Entity;

/**
 * Controller
 */
class Controller
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Controller
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $controllers;

    /**
     * @var \Application\ServiceConstructorBundle\Entity\Bundle
     */
    private $bundle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->controllers = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add controller
     *
     * @param \Application\ServiceConstructorBundle\Entity\Controller $controller
     *
     * @return Controller
     */
    public function addController(\Application\ServiceConstructorBundle\Entity\Controller $controller)
    {
        $this->controllers[] = $controller;

        return $this;
    }

    /**
     * Remove controller
     *
     * @param \Application\ServiceConstructorBundle\Entity\Controller $controller
     */
    public function removeController(\Application\ServiceConstructorBundle\Entity\Controller $controller)
    {
        $this->controllers->removeElement($controller);
    }

    /**
     * Get controllers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getControllers()
    {
        return $this->controllers;
    }

    /**
     * Set bundle
     *
     * @param \Application\ServiceConstructorBundle\Entity\Bundle $bundle
     *
     * @return Controller
     */
    public function setBundle(\Application\ServiceConstructorBundle\Entity\Bundle $bundle = null)
    {
        $this->bundle = $bundle;

        return $this;
    }

    /**
     * Get bundle
     *
     * @return \Application\ServiceConstructorBundle\Entity\Bundle
     */
    public function getBundle()
    {
        return $this->bundle;
    }
}
