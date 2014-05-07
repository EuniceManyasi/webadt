<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * Regimen
 *
 * @Table(name="regimen")
 * @Entity
 */
class Regimen
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
     * @Column(name="regimen_code", type="string", length=20, nullable=false)
     */
    private $regimenCode;

    /**
     * @var string
     *
     * @Column(name="regimen_desc", type="text", nullable=false)
     */
    private $regimenDesc;

    /**
     * @var string
     *
     * @Column(name="category", type="string", length=30, nullable=false)
     */
    private $category;

    /**
     * @var string
     *
     * @Column(name="line", type="string", length=4, nullable=false)
     */
    private $line;

    /**
     * @var string
     *
     * @Column(name="type_of_service", type="string", length=20, nullable=false)
     */
    private $typeOfService;

    /**
     * @var string
     *
     * @Column(name="remarks", type="string", length=30, nullable=false)
     */
    private $remarks;

    /**
     * @var string
     *
     * @Column(name="enabled", type="string", length=4, nullable=false)
     */
    private $enabled;

    /**
     * @var string
     *
     * @Column(name="source", type="string", length=10, nullable=false)
     */
    private $source;

    /**
     * @var string
     *
     * @Column(name="optimality", type="string", length=10, nullable=false)
     */
    private $optimality;

    /**
     * @var string
     *
     * @Column(name="Merged_To", type="string", length=50, nullable=false)
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
     * Set regimenCode
     *
     * @param string $regimenCode
     * @return Regimen
     */
    public function setRegimenCode($regimenCode)
    {
        $this->regimenCode = $regimenCode;
    
        return $this;
    }

    /**
     * Get regimenCode
     *
     * @return string 
     */
    public function getRegimenCode()
    {
        return $this->regimenCode;
    }

    /**
     * Set regimenDesc
     *
     * @param string $regimenDesc
     * @return Regimen
     */
    public function setRegimenDesc($regimenDesc)
    {
        $this->regimenDesc = $regimenDesc;
    
        return $this;
    }

    /**
     * Get regimenDesc
     *
     * @return string 
     */
    public function getRegimenDesc()
    {
        return $this->regimenDesc;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return Regimen
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set line
     *
     * @param string $line
     * @return Regimen
     */
    public function setLine($line)
    {
        $this->line = $line;
    
        return $this;
    }

    /**
     * Get line
     *
     * @return string 
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set typeOfService
     *
     * @param string $typeOfService
     * @return Regimen
     */
    public function setTypeOfService($typeOfService)
    {
        $this->typeOfService = $typeOfService;
    
        return $this;
    }

    /**
     * Get typeOfService
     *
     * @return string 
     */
    public function getTypeOfService()
    {
        return $this->typeOfService;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     * @return Regimen
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
    
        return $this;
    }

    /**
     * Get remarks
     *
     * @return string 
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Set enabled
     *
     * @param string $enabled
     * @return Regimen
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    
        return $this;
    }

    /**
     * Get enabled
     *
     * @return string 
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return Regimen
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
     * Set optimality
     *
     * @param string $optimality
     * @return Regimen
     */
    public function setOptimality($optimality)
    {
        $this->optimality = $optimality;
    
        return $this;
    }

    /**
     * Get optimality
     *
     * @return string 
     */
    public function getOptimality()
    {
        return $this->optimality;
    }

    /**
     * Set mergedTo
     *
     * @param string $mergedTo
     * @return Regimen
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
     * @return Regimen
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
     * @return Regimen
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
