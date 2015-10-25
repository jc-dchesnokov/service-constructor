<?php

namespace Application\ServiceConstructorBundle\Entity;

/**
 * Service
 */
class Service
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
     * @return Service
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
    private $methods;

    /**
     * @var \Application\ServiceConstructorBundle\Entity\Bundle
     */
    private $bundle;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->methods = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add method
     *
     * @param \Application\ServiceConstructorBundle\Entity\ServiceMethod $method
     *
     * @return Service
     */
    public function addMethod(\Application\ServiceConstructorBundle\Entity\ServiceMethod $method)
    {
        $this->methods[] = $method;

        return $this;
    }

    /**
     * Remove method
     *
     * @param \Application\ServiceConstructorBundle\Entity\ServiceMethod $method
     */
    public function removeMethod(\Application\ServiceConstructorBundle\Entity\ServiceMethod $method)
    {
        $this->methods->removeElement($method);
    }

    /**
     * Get methods
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMethods()
    {
        return $this->methods;
    }

    /**
     * Set bundle
     *
     * @param \Application\ServiceConstructorBundle\Entity\Bundle $bundle
     *
     * @return Service
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
