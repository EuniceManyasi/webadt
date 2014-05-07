<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * SyncRegimen
 *
 * @Table(name="sync_regimen")
 * @Entity
 */
class SyncRegimen
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
     * @Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="code", type="string", length=5, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @Column(name="old_code", type="string", length=45, nullable=true)
     */
    private $oldCode;

    /**
     * @var string
     *
     * @Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var integer
     *
     * @Column(name="category_id", type="integer", nullable=true)
     */
    private $categoryId;


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
     * @return SyncRegimen
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
     * Set code
     *
     * @param string $code
     * @return SyncRegimen
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set oldCode
     *
     * @param string $oldCode
     * @return SyncRegimen
     */
    public function setOldCode($oldCode)
    {
        $this->oldCode = $oldCode;
    
        return $this;
    }

    /**
     * Get oldCode
     *
     * @return string 
     */
    public function getOldCode()
    {
        return $this->oldCode;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SyncRegimen
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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return SyncRegimen
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    
        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }
}
