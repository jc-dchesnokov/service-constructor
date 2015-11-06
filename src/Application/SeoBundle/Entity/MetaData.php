<?php

namespace Application\SeoBundle\Entity;

/**
 * MetaData
 */
class MetaData
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $keywords;

    /**
     * @var array
     */
    private $metaData;

    /**
     * @var string
     */
    private $canonocalLink;

    /**
     * @var array
     */
    private $alternateLinks;


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
     * Set title
     *
     * @param string $title
     *
     * @return MetaData
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return MetaData
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set keywords
     *
     * @param string $keywords
     *
     * @return MetaData
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * Get keywords
     *
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * Set metaData
     *
     * @param array $metaData
     *
     * @return MetaData
     */
    public function setMetaData($metaData)
    {
        $this->metaData = $metaData;

        return $this;
    }

    /**
     * Get metaData
     *
     * @return array
     */
    public function getMetaData()
    {
        return $this->metaData;
    }

    /**
     * Set canonocalLink
     *
     * @param string $canonocalLink
     *
     * @return MetaData
     */
    public function setCanonocalLink($canonocalLink)
    {
        $this->canonocalLink = $canonocalLink;

        return $this;
    }

    /**
     * Get canonocalLink
     *
     * @return string
     */
    public function getCanonocalLink()
    {
        return $this->canonocalLink;
    }

    /**
     * Set alternateLinks
     *
     * @param array $alternateLinks
     *
     * @return MetaData
     */
    public function setAlternateLinks($alternateLinks)
    {
        $this->alternateLinks = $alternateLinks;

        return $this;
    }

    /**
     * Get alternateLinks
     *
     * @return array
     */
    public function getAlternateLinks()
    {
        return $this->alternateLinks;
    }
    /**
     * @var \Application\CMSBundle\Entity\Page
     */
    private $page;


    /**
     * Set page
     *
     * @param \Application\CMSBundle\Entity\Page $page
     *
     * @return MetaData
     */
    public function setPage(\Application\CMSBundle\Entity\Page $page = null)
    {
        $this->page = $page;

        return $this;
    }

    /**
     * Get page
     *
     * @return \Application\CMSBundle\Entity\Page
     */
    public function getPage()
    {
        return $this->page;
    }
}
