<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * AccessLevel
 *
 * @Table(name="access_level")
 * @Entity
 */
class AccessLevel
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
     * @Column(name="level_name", type="string", length=50, nullable=false)
     */
    private $levelName;

    /**
     * @var string
     *
     * @Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @Column(name="indicator", type="string", length=100, nullable=false)
     */
    private $indicator;


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
     * Set levelName
     *
     * @param string $levelName
     * @return AccessLevel
     */
    public function setLevelName($levelName)
    {
        $this->levelName = $levelName;
    
        return $this;
    }

    /**
     * Get levelName
     *
     * @return string 
     */
    public function getLevelName()
    {
        return $this->levelName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return AccessLevel
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
     * Set indicator
     *
     * @param string $indicator
     * @return AccessLevel
     */
    public function setIndicator($indicator)
    {
        $this->indicator = $indicator;
    
        return $this;
    }

    /**
     * Get indicator
     *
     * @return string 
     */
    public function getIndicator()
    {
        return $this->indicator;
    }
}
