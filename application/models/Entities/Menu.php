<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * Menu
 *
 * @Table(name="menu")
 * @Entity
 */
class Menu
{
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="menu_text", type="string", length=50, nullable=false)
     */
    private $menuText;

    /**
     * @var string
     *
     * @Column(name="menu_url", type="string", length=100, nullable=false)
     */
    private $menuUrl;

    /**
     * @var string
     *
     * @Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @Column(name="offline", type="string", length=1, nullable=false)
     */
    private $offline;

    /**
     * @var integer
     *
     * @Column(name="active", type="integer", nullable=false)
     */
    private $active;


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
     * Set menuText
     *
     * @param string $menuText
     * @return Menu
     */
    public function setMenuText($menuText)
    {
        $this->menuText = $menuText;
    
        return $this;
    }

    /**
     * Get menuText
     *
     * @return string 
     */
    public function getMenuText()
    {
        return $this->menuText;
    }

    /**
     * Set menuUrl
     *
     * @param string $menuUrl
     * @return Menu
     */
    public function setMenuUrl($menuUrl)
    {
        $this->menuUrl = $menuUrl;
    
        return $this;
    }

    /**
     * Get menuUrl
     *
     * @return string 
     */
    public function getMenuUrl()
    {
        return $this->menuUrl;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Menu
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
     * Set offline
     *
     * @param string $offline
     * @return Menu
     */
    public function setOffline($offline)
    {
        $this->offline = $offline;
    
        return $this;
    }

    /**
     * Get offline
     *
     * @return string 
     */
    public function getOffline()
    {
        return $this->offline;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return Menu
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }
}
