<?php

namespace Application\CMSBundle\Entity;

/**
 * Template
 */
class Template
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
     * @return Template
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
    private $pages;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $blockToTemplates;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->pages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->blockToTemplates = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add page
     *
     * @param \Application\CMSBundle\Entity\Page $page
     *
     * @return Template
     */
    public function addPage(\Application\CMSBundle\Entity\Page $page)
    {
        $this->pages[] = $page;

        return $this;
    }

    /**
     * Remove page
     *
     * @param \Application\CMSBundle\Entity\Page $page
     */
    public function removePage(\Application\CMSBundle\Entity\Page $page)
    {
        $this->pages->removeElement($page);
    }

    /**
     * Get pages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Add blockToTemplate
     *
     * @param \Application\CMSBundle\Entity\BlockToTemplate $blockToTemplate
     *
     * @return Template
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
}
