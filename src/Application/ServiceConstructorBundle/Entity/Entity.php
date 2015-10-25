<?php

namespace Application\ServiceConstructorBundle\Entity;

/**
 * Entity
 */
class Entity
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
    private $tableName;

    /**
     * @var string
     */
    private $repository;


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
     * @return Entity
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
     * Set tableName
     *
     * @param string $tableName
     *
     * @return Entity
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * Get tableName
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * Set repository
     *
     * @param string $repository
     *
     * @return Entity
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;

        return $this;
    }

    /**
     * Get repository
     *
     * @return string
     */
    public function getRepository()
    {
        return $this->repository;
    }
    /**
     * @var \Application\ServiceConstructorBundle\Entity\Bundle
     */
    private $bundle;


    /**
     * Set bundle
     *
     * @param \Application\ServiceConstructorBundle\Entity\Bundle $bundle
     *
     * @return Entity
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
