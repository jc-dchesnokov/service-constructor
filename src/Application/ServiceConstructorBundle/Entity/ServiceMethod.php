<?php

namespace Application\ServiceConstructorBundle\Entity;

/**
 * ServiceMethod
 */
class ServiceMethod
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
     * @return ServiceMethod
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
     * @var \Application\ServiceConstructorBundle\Entity\service
     */
    private $service;


    /**
     * Set service
     *
     * @param \Application\ServiceConstructorBundle\Entity\service $service
     *
     * @return ServiceMethod
     */
    public function setService(\Application\ServiceConstructorBundle\Entity\service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \Application\ServiceConstructorBundle\Entity\service
     */
    public function getService()
    {
        return $this->service;
    }
}
