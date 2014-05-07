<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * RegimenDrug
 *
 * @Table(name="regimen_drug")
 * @Entity
 */
class RegimenDrug
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
     * @Column(name="regimen", type="text", nullable=false)
     */
    private $regimen;

    /**
     * @var string
     *
     * @Column(name="drugcode", type="text", nullable=false)
     */
    private $drugcode;

    /**
     * @var string
     *
     * @Column(name="source", type="string", length=10, nullable=false)
     */
    private $source;

    /**
     * @var integer
     *
     * @Column(name="active", type="integer", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @Column(name="Merged_From", type="string", length=50, nullable=false)
     */
    private $mergedFrom;

    /**
     * @var string
     *
     * @Column(name="Regimen_Merged_From", type="string", length=20, nullable=false)
     */
    private $regimenMergedFrom;


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
     * Set regimen
     *
     * @param string $regimen
     * @return RegimenDrug
     */
    public function setRegimen($regimen)
    {
        $this->regimen = $regimen;
    
        return $this;
    }

    /**
     * Get regimen
     *
     * @return string 
     */
    public function getRegimen()
    {
        return $this->regimen;
    }

    /**
     * Set drugcode
     *
     * @param string $drugcode
     * @return RegimenDrug
     */
    public function setDrugcode($drugcode)
    {
        $this->drugcode = $drugcode;
    
        return $this;
    }

    /**
     * Get drugcode
     *
     * @return string 
     */
    public function getDrugcode()
    {
        return $this->drugcode;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return RegimenDrug
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
     * Set active
     *
     * @param integer $active
     * @return RegimenDrug
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

    /**
     * Set mergedFrom
     *
     * @param string $mergedFrom
     * @return RegimenDrug
     */
    public function setMergedFrom($mergedFrom)
    {
        $this->mergedFrom = $mergedFrom;
    
        return $this;
    }

    /**
     * Get mergedFrom
     *
     * @return string 
     */
    public function getMergedFrom()
    {
        return $this->mergedFrom;
    }

    /**
     * Set regimenMergedFrom
     *
     * @param string $regimenMergedFrom
     * @return RegimenDrug
     */
    public function setRegimenMergedFrom($regimenMergedFrom)
    {
        $this->regimenMergedFrom = $regimenMergedFrom;
    
        return $this;
    }

    /**
     * Get regimenMergedFrom
     *
     * @return string 
     */
    public function getRegimenMergedFrom()
    {
        return $this->regimenMergedFrom;
    }
}
