<?php

namespace Application\CMSBundle\Entity;

/**
 * Block
 */
class Block
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
    private $isActive;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $content;


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
     * @return Block
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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return Block
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set locale
     *
     * @param string $locale
     *
     * @return Block
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Block
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $blockToTemplates;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->blockToTemplates = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add blockToTemplate
     *
     * @param \Application\CMSBundle\Entity\BlockToTemplate $blockToTemplate
     *
     * @return Block
     */
    public function addBlockToTemplate(\Application\CMSBundle\Entity\BlockToTemplate $blockToTemplate)
    {
        $this->blockToTemplates[] = $blockToTemplate;

        return $this;
    }

    /**
     * Remove blockToTemplate
     *
     * @param \Application\CMSBundle\Entity\BlockToTemplate $blockToTemplate
     */
    public function removeBlockToTemplate(\Application\CMSBundle\Entity\BlockToTemplate $blockToTemplate)
    {
        $this->blockToTemplates->removeElement($blockToTemplate);
    }

    /**
     * Get blockToTemplates
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBlockToTemplates()
    {
        return $this->blockToTemplates;
    }
    /**
     * @var boolean
     */
    private $isAsync;


    /**
     * Set isAsync
     *
     * @param boolean $isAsync
     *
     * @return Block
     */
    public function setIsAsync($isAsync)
    {
        $this->isAsync = $isAsync;

        return $this;
    }

    /**
     * Get isAsync
     *
     * @return boolean
     */
    public function getIsAsync()
    {
        return $this->isAsync;
    }
}
