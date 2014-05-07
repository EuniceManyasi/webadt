<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * UserRight
 *
 * @Table(name="user_right")
 * @Entity
 */
class UserRight
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
     * @Column(name="access_level", type="string", length=10, nullable=false)
     */
    private $accessLevel;

    /**
     * @var string
     *
     * @Column(name="menu", type="string", length=10, nullable=false)
     */
    private $menu;

    /**
     * @var string
     *
     * @Column(name="access_type", type="string", length=10, nullable=false)
     */
    private $accessType;

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
     * Set accessLevel
     *
     * @param string $accessLevel
     * @return UserRight
     */
    public function setAccessLevel($accessLevel)
    {
        $this->accessLevel = $accessLevel;
    
        return $this;
    }

    /**
     * Get accessLevel
     *
     * @return string 
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Set menu
     *
     * @param string $menu
     * @return UserRight
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;
    
        return $this;
    }

    /**
     * Get menu
     *
     * @return string 
     */
    public function getMenu()
    {
        return $this->menu;
    }

    /**
     * Set accessType
     *
     * @param string $accessType
     * @return UserRight
     */
    public function setAccessType($accessType)
    {
        $this->accessType = $accessType;
    
        return $this;
    }

    /**
     * Get accessType
     *
     * @return string 
     */
    public function getAccessType()
    {
        return $this->accessType;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return UserRight
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
