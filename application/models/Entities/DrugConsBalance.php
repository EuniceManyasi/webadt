<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * DrugConsBalance
 *
 * @Table(name="drug_cons_balance")
 * @Entity
 */
class DrugConsBalance
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
     * @var integer
     *
     * @Column(name="drug_id", type="integer", nullable=false)
     */
    private $drugId;

    /**
     * @var integer
     *
     * @Column(name="stock_type", type="integer", nullable=false)
     */
    private $stockType;

    /**
     * @var string
     *
     * @Column(name="period", type="string", length=15, nullable=false)
     */
    private $period;

    /**
     * @var integer
     *
     * @Column(name="amount", type="integer", nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @Column(name="facility", type="string", length=30, nullable=false)
     */
    private $facility;

    /**
     * @var \DateTime
     *
     * @Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

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
     * Set drugId
     *
     * @param integer $drugId
     * @return DrugConsBalance
     */
    public function setDrugId($drugId)
    {
        $this->drugId = $drugId;
    
        return $this;
    }

    /**
     * Get drugId
     *
     * @return integer 
     */
    public function getDrugId()
    {
        return $this->drugId;
    }

    /**
     * Set stockType
     *
     * @param integer $stockType
     * @return DrugConsBalance
     */
    public function setStockType($stockType)
    {
        $this->stockType = $stockType;
    
        return $this;
    }

    /**
     * Get stockType
     *
     * @return integer 
     */
    public function getStockType()
    {
        return $this->stockType;
    }

    /**
     * Set period
     *
     * @param string $period
     * @return DrugConsBalance
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    
        return $this;
    }

    /**
     * Get period
     *
     * @return string 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set amount
     *
     * @param integer $amount
     * @return DrugConsBalance
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return integer 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set facility
     *
     * @param string $facility
     * @return DrugConsBalance
     */
    public function setFacility($facility)
    {
        $this->facility = $facility;
    
        return $this;
    }

    /**
     * Get facility
     *
     * @return string 
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return DrugConsBalance
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
    
        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime 
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set cccStoreSp
     *
     * @param \models\Entities\CccStoreServicePoint $cccStoreSp
     * @return DrugConsBalance
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
