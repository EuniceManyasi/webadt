<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * SyncDrug
 *
 * @Table(name="sync_drug")
 * @Entity
 */
class SyncDrug
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
     * @Column(name="abbreviation", type="string", length=255, nullable=true)
     */
    private $abbreviation;

    /**
     * @var string
     *
     * @Column(name="strength", type="string", length=255, nullable=false)
     */
    private $strength;

    /**
     * @var integer
     *
     * @Column(name="packsize", type="integer", nullable=true)
     */
    private $packsize;

    /**
     * @var string
     *
     * @Column(name="formulation", type="string", length=255, nullable=true)
     */
    private $formulation;

    /**
     * @var string
     *
     * @Column(name="unit", type="string", length=255, nullable=true)
     */
    private $unit;

    /**
     * @var string
     *
     * @Column(name="note", type="string", length=255, nullable=true)
     */
    private $note;

    /**
     * @var integer
     *
     * @Column(name="weight", type="integer", nullable=true)
     */
    private $weight;

    /**
     * @var integer
     *
     * @Column(name="category_id", type="integer", nullable=true)
     */
    private $categoryId;

    /**
     * @var integer
     *
     * @Column(name="regimen_id", type="integer", nullable=false)
     */
    private $regimenId;


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
     * @return SyncDrug
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
     * Set abbreviation
     *
     * @param string $abbreviation
     * @return SyncDrug
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;
    
        return $this;
    }

    /**
     * Get abbreviation
     *
     * @return string 
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }

    /**
     * Set strength
     *
     * @param string $strength
     * @return SyncDrug
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
    
        return $this;
    }

    /**
     * Get strength
     *
     * @return string 
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set packsize
     *
     * @param integer $packsize
     * @return SyncDrug
     */
    public function setPacksize($packsize)
    {
        $this->packsize = $packsize;
    
        return $this;
    }

    /**
     * Get packsize
     *
     * @return integer 
     */
    public function getPacksize()
    {
        return $this->packsize;
    }

    /**
     * Set formulation
     *
     * @param string $formulation
     * @return SyncDrug
     */
    public function setFormulation($formulation)
    {
        $this->formulation = $formulation;
    
        return $this;
    }

    /**
     * Get formulation
     *
     * @return string 
     */
    public function getFormulation()
    {
        return $this->formulation;
    }

    /**
     * Set unit
     *
     * @param string $unit
     * @return SyncDrug
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    
        return $this;
    }

    /**
     * Get unit
     *
     * @return string 
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Set note
     *
     * @param string $note
     * @return SyncDrug
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return string 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return SyncDrug
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    
        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return SyncDrug
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

    /**
     * Set regimenId
     *
     * @param integer $regimenId
     * @return SyncDrug
     */
    public function setRegimenId($regimenId)
    {
        $this->regimenId = $regimenId;
    
        return $this;
    }

    /**
     * Get regimenId
     *
     * @return integer 
     */
    public function getRegimenId()
    {
        return $this->regimenId;
    }
}
