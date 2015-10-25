<?php

namespace Application\ServiceConstructorBundle\Entity;

/**
 * Bundle
 */
class Bundle
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
     * @var string
     */
    private $namespace;

    /**
     * @var string
     */
    private $format;


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
     * @return Bundle
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
     * Set namespace
     *
     * @param string $namespace
     *
     * @return Bundle
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * Get namespace
     *
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Set format
     *
     * @param string $format
     *
     * @return Bundle
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $controllers;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $services;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $entities;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->controllers = new \Doctrine\Common\Collections\ArrayCollection();
        $this->services = new \Doctrine\Common\Collections\ArrayCollection();
        $this->entities = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add controller
     *
     * @param \Application\ServiceConstructorBundle\Entity\Controller $controller
     *
     * @return Bundle
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
     * Add service
     *
     * @param \Application\ServiceConstructorBundle\Entity\Service $service
     *
     * @return Bundle
     */
    public function addService(\Application\ServiceConstructorBundle\Entity\Service $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param \Application\ServiceConstructorBundle\Entity\Service $service
     */
    public function removeService(\Application\ServiceConstructorBundle\Entity\Service $service)
    {
        $this->services->removeElement($service);
    }

    /**
     * Get services
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Add entity
     *
     * @param \Application\ServiceConstructorBundle\Entity\Entity $entity
     *
     * @return Bundle
     */
    public function addEntity(\Application\ServiceConstructorBundle\Entity\Entity $entity)
    {
        $this->entities[] = $entity;

        return $this;
    }

    /**
     * Remove entity
     *
     * @param \Application\ServiceConstructorBundle\Entity\Entity $entity
     */
    public function removeEntity(\Application\ServiceConstructorBundle\Entity\Entity $entity)
    {
        $this->entities->removeElement($entity);
    }

    /**
     * Get entities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEntities()
    {
        return $this->entities;
    }
}
