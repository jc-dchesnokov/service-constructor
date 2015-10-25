<?php

namespace Application\CMSBundle\Entity;

/**
 * BlockToTemplate
 */
class BlockToTemplate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $area;

    /**
     * @var integer
     */
    private $orderNum;


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
     * Set area
     *
     * @param integer $area
     *
     * @return BlockToTemplate
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return integer
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set orderNum
     *
     * @param integer $orderNum
     *
     * @return BlockToTemplate
     */
    public function setOrderNum($orderNum)
    {
        $this->orderNum = $orderNum;

        return $this;
    }

    /**
     * Get orderNum
     *
     * @return integer
     */
    public function getOrderNum()
    {
        return $this->orderNum;
    }
    /**
     * @var \Application\CMSBundle\Entity\Template
     */
    private $template;

    /**
     * @var \Application\CMSBundle\Entity\Block
     */
    private $block;


    /**
     * Set template
     *
     * @param \Application\CMSBundle\Entity\Template $template
     *
     * @return BlockToTemplate
     */
    public function setTemplate(\Application\CMSBundle\Entity\Template $template = null)
    {
        $this->template = $template;

        return $this;
    }

    /**
     * Get template
     *
     * @return \Application\CMSBundle\Entity\Template
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set block
     *
     * @param \Application\CMSBundle\Entity\Block $block
     *
     * @return BlockToTemplate
     */
    public function setBlock(\Application\CMSBundle\Entity\Block $block = null)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return \Application\CMSBundle\Entity\Block
     */
    public function getBlock()
    {
        return $this->block;
    }
}
