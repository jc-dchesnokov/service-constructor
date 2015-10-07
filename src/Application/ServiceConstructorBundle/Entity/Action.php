<?php

namespace Application\ServiceConstructorBundle\Entity;

/**
 * Action
 */
class Action
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
     * @var boolean
     */
    private $hasRoute;

    /**
     * @var boolean
     */
    private $hasView;

    /**
     * @var string
     */
    private $responseType;


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
     * @return Action
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
     * Set hasRoute
     *
     * @param boolean $hasRoute
     *
     * @return Action
     */
    public function setHasRoute($hasRoute)
    {
        $this->hasRoute = $hasRoute;

        return $this;
    }

    /**
     * Get hasRoute
     *
     * @return boolean
     */
    public function getHasRoute()
    {
        return $this->hasRoute;
    }

    /**
     * Set hasView
     *
     * @param boolean $hasView
     *
     * @return Action
     */
    public function setHasView($hasView)
    {
        $this->hasView = $hasView;

        return $this;
    }

    /**
     * Get hasView
     *
     * @return boolean
     */
    public function getHasView()
    {
        return $this->hasView;
    }

    /**
     * Set responseType
     *
     * @param string $responseType
     *
     * @return Action
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * Get responseType
     *
     * @return string
     */
    public function getResponseType()
    {
        return $this->responseType;
    }
}
