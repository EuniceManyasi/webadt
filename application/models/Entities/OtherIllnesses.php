<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * OtherIllnesses
 *
 * @Table(name="other_illnesses")
 * @Entity
 */
class OtherIllnesses
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
     * @Column(name="name", type="string", length=150, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="indicator", type="string", length=20, nullable=false)
     */
    private $indicator;

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
     * Set name
     *
     * @param string $name
     * @return OtherIllnesses
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
     * Set indicator
     *
     * @param string $indicator
     * @return OtherIllnesses
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

    /**
     * Set active
     *
     * @param integer $active
     * @return OtherIllnesses
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
