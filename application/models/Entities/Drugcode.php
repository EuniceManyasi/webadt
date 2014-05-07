<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * Drugcode
 *
 * @Table(name="drugcode")
 * @Entity
 */
class Drugcode
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
     * @Column(name="drug", type="string", length=100, nullable=false)
     */
    private $drug;

    /**
     * @var string
     *
     * @Column(name="unit", type="string", length=30, nullable=false)
     */
    private $unit;

    /**
     * @var string
     *
     * @Column(name="pack_size", type="string", length=10, nullable=false)
     */
    private $packSize;

    /**
     * @var string
     *
     * @Column(name="safety_quantity", type="string", length=4, nullable=false)
     */
    private $safetyQuantity;

    /**
     * @var string
     *
     * @Column(name="generic_name", type="string", length=100, nullable=false)
     */
    private $genericName;

    /**
     * @var string
     *
     * @Column(name="supported_by", type="string", length=30, nullable=false)
     */
    private $supportedBy;

    /**
     * @var string
     *
     * @Column(name="classification", type="string", length=50, nullable=false)
     */
    private $classification;

    /**
     * @var string
     *
     * @Column(name="none_arv", type="string", length=1, nullable=false)
     */
    private $noneArv;

    /**
     * @var string
     *
     * @Column(name="tb_drug", type="string", length=1, nullable=false)
     */
    private $tbDrug;

    /**
     * @var string
     *
     * @Column(name="drug_in_use", type="string", length=1, nullable=false)
     */
    private $drugInUse;

    /**
     * @var string
     *
     * @Column(name="comment", type="string", length=100, nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @Column(name="dose", type="string", length=20, nullable=false)
     */
    private $dose;

    /**
     * @var string
     *
     * @Column(name="duration", type="string", length=4, nullable=false)
     */
    private $duration;

    /**
     * @var string
     *
     * @Column(name="quantity", type="string", length=4, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @Column(name="source", type="string", length=10, nullable=false)
     */
    private $source;

    /**
     * @var string
     *
     * @Column(name="type", type="string", length=1, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @Column(name="supplied", type="string", length=1, nullable=false)
     */
    private $supplied;

    /**
     * @var integer
     *
     * @Column(name="enabled", type="integer", nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @Column(name="strength", type="string", length=20, nullable=false)
     */
    private $strength;

    /**
     * @var string
     *
     * @Column(name="merged_to", type="string", length=50, nullable=false)
     */
    private $mergedTo;

    /**
     * @var integer
     *
     * @Column(name="map", type="integer", nullable=false)
     */
    private $map;

    /**
     * @var \models\Entities\CccStoreServicePoint
     *
     * @ManyToOne(targetEntity="models\Entities\CccStoreServicePoint")
     * @JoinColumns({
     *   @JoinColumn(name="ccc_store_sp", referencedColumnName="id")
     * })
     */
    private $cccStoreSp;


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
     * Set drug
     *
     * @param string $drug
     * @return Drugcode
     */
    public function setDrug($drug)
    {
        $this->drug = $drug;
    
        return $this;
    }

    /**
     * Get drug
     *
     * @return string 
     */
    public function getDrug()
    {
        return $this->drug;
    }

    /**
     * Set unit
     *
     * @param string $unit
     * @return Drugcode
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
     * Set packSize
     *
     * @param string $packSize
     * @return Drugcode
     */
    public function setPackSize($packSize)
    {
        $this->packSize = $packSize;
    
        return $this;
    }

    /**
     * Get packSize
     *
     * @return string 
     */
    public function getPackSize()
    {
        return $this->packSize;
    }

    /**
     * Set safetyQuantity
     *
     * @param string $safetyQuantity
     * @return Drugcode
     */
    public function setSafetyQuantity($safetyQuantity)
    {
        $this->safetyQuantity = $safetyQuantity;
    
        return $this;
    }

    /**
     * Get safetyQuantity
     *
     * @return string 
     */
    public function getSafetyQuantity()
    {
        return $this->safetyQuantity;
    }

    /**
     * Set genericName
     *
     * @param string $genericName
     * @return Drugcode
     */
    public function setGenericName($genericName)
    {
        $this->genericName = $genericName;
    
        return $this;
    }

    /**
     * Get genericName
     *
     * @return string 
     */
    public function getGenericName()
    {
        return $this->genericName;
    }

    /**
     * Set supportedBy
     *
     * @param string $supportedBy
     * @return Drugcode
     */
    public function setSupportedBy($supportedBy)
    {
        $this->supportedBy = $supportedBy;
    
        return $this;
    }

    /**
     * Get supportedBy
     *
     * @return string 
     */
    public function getSupportedBy()
    {
        return $this->supportedBy;
    }

    /**
     * Set classification
     *
     * @param string $classification
     * @return Drugcode
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;
    
        return $this;
    }

    /**
     * Get classification
     *
     * @return string 
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * Set noneArv
     *
     * @param string $noneArv
     * @return Drugcode
     */
    public function setNoneArv($noneArv)
    {
        $this->noneArv = $noneArv;
    
        return $this;
    }

    /**
     * Get noneArv
     *
     * @return string 
     */
    public function getNoneArv()
    {
        return $this->noneArv;
    }

    /**
     * Set tbDrug
     *
     * @param string $tbDrug
     * @return Drugcode
     */
    public function setTbDrug($tbDrug)
    {
        $this->tbDrug = $tbDrug;
    
        return $this;
    }

    /**
     * Get tbDrug
     *
     * @return string 
     */
    public function getTbDrug()
    {
        return $this->tbDrug;
    }

    /**
     * Set drugInUse
     *
     * @param string $drugInUse
     * @return Drugcode
     */
    public function setDrugInUse($drugInUse)
    {
        $this->drugInUse = $drugInUse;
    
        return $this;
    }

    /**
     * Get drugInUse
     *
     * @return string 
     */
    public function getDrugInUse()
    {
        return $this->drugInUse;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Drugcode
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set dose
     *
     * @param string $dose
     * @return Drugcode
     */
    public function setDose($dose)
    {
        $this->dose = $dose;
    
        return $this;
    }

    /**
     * Get dose
     *
     * @return string 
     */
    public function getDose()
    {
        return $this->dose;
    }

    /**
     * Set duration
     *
     * @param string $duration
     * @return Drugcode
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    
        return $this;
    }

    /**
     * Get duration
     *
     * @return string 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     * @return Drugcode
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    
        return $this;
    }

    /**
     * Get quantity
     *
     * @return string 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return Drugcode
     */
    public function setSource($source)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Drugcode
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set supplied
     *
     * @param string $supplied
     * @return Drugcode
     */
    public function setSupplied($supplied)
    {
        $this->supplied = $supplied;
    
        return $this;
    }

    /**
     * Get supplied
     *
     * @return string 
     */
    public function getSupplied()
    {
        return $this->supplied;
    }

    /**
     * Set enabled
     *
     * @param integer $enabled
     * @return Drugcode
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    
        return $this;
    }

    /**
     * Get enabled
     *
     * @return integer 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set strength
     *
     * @param string $strength
     * @return Drugcode
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
     * Set mergedTo
     *
     * @param string $mergedTo
     * @return Drugcode
     */
    public function setMergedTo($mergedTo)
    {
        $this->mergedTo = $mergedTo;
    
        return $this;
    }

    /**
     * Get mergedTo
     *
     * @return string 
     */
    public function getMergedTo()
    {
        return $this->mergedTo;
    }

    /**
     * Set map
     *
     * @param integer $map
     * @return Drugcode
     */
    public function setMap($map)
    {
        $this->map = $map;
    
        return $this;
    }

    /**
     * Get map
     *
     * @return integer 
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set cccStoreSp
     *
     * @param \models\Entities\CccStoreServicePoint $cccStoreSp
     * @return Drugcode
     */
    public function setCccStoreSp(\models\Entities\CccStoreServicePoint $cccStoreSp = null)
    {
        $this->cccStoreSp = $cccStoreSp;
    
        return $this;
    }

    /**
     * Get cccStoreSp
     *
     * @return \models\Entities\CccStoreServicePoint 
     */
    public function getCccStoreSp()
    {
        return $this->cccStoreSp;
    }
}
