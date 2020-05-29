<?php

/**
 * Generated by phpSPO model generator 2020-05-27T07:36:43+00:00 
 */
namespace Office365\Graph;


use Office365\Runtime\ResourcePath;
/**
 * The **site** resource provides metadata and relationships for a SharePoint site.
 */
class Site extends BaseItem
{
    /**
     * @return string
     */
    public function getDisplayName()
    {
        if (!$this->isPropertyAvailable("DisplayName")) {
            return null;
        }
        return $this->getProperty("DisplayName");
    }
    /**
     * @var string
     */
    public function setDisplayName($value)
    {
        $this->setProperty("DisplayName", $value, true);
    }
    /**
     * @return Drive
     */
    public function getDrive()
    {
        if (!$this->isPropertyAvailable("Drive")) {
            $this->setProperty("Drive", new Drive($this->getContext(), new ResourcePath("Drive", $this->getResourcePath())));
        }
        return $this->getProperty("Drive");
    }
    /**
     * @return Onenote
     */
    public function getOnenote()
    {
        if (!$this->isPropertyAvailable("Onenote")) {
            $this->setProperty("Onenote", new Onenote($this->getContext(), new ResourcePath("Onenote", $this->getResourcePath())));
        }
        return $this->getProperty("Onenote");
    }
    /**
     * @return Root
     */
    public function getRoot()
    {
        if (!$this->isPropertyAvailable("Root")) {
            return null;
        }
        return $this->getProperty("Root");
    }
    /**
     * @var Root
     */
    public function setRoot($value)
    {
        $this->setProperty("Root", $value, true);
    }
    /**
     * @return SharepointIds
     */
    public function getSharepointIds()
    {
        if (!$this->isPropertyAvailable("SharepointIds")) {
            return null;
        }
        return $this->getProperty("SharepointIds");
    }
    /**
     * @var SharepointIds
     */
    public function setSharepointIds($value)
    {
        $this->setProperty("SharepointIds", $value, true);
    }
    /**
     * @return SiteCollection
     */
    public function getSiteCollection()
    {
        if (!$this->isPropertyAvailable("SiteCollection")) {
            return null;
        }
        return $this->getProperty("SiteCollection");
    }
    /**
     * @var SiteCollection
     */
    public function setSiteCollection($value)
    {
        $this->setProperty("SiteCollection", $value, true);
    }
    /**
     * @return ItemAnalytics
     */
    public function getAnalytics()
    {
        if (!$this->isPropertyAvailable("Analytics")) {
            $this->setProperty("Analytics", new ItemAnalytics($this->getContext(), new ResourcePath("Analytics", $this->getResourcePath())));
        }
        return $this->getProperty("Analytics");
    }
    /**
     * @return SiteCollection
     */
    public function getSites()
    {
        if (!$this->isPropertyAvailable("Sites")) {
            $this->setProperty("Sites", new SiteCollection());
        }
        return $this->getProperty("Sites");
    }
    /**
     * @return DriveCollection
     */
    public function getDrives()
    {
        if (!$this->isPropertyAvailable("Drives")) {
            $this->setProperty("Drives", new DriveCollection($this->getContext(), new ResourcePath("Drives", $this->getResourcePath())));
        }
        return $this->getProperty("Drives");
    }
}