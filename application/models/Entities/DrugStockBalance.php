<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * DrugStockBalance
 *
 * @Table(name="drug_stock_balance")
 * @Entity
 */
class DrugStockBalance
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
     * @Column(name="drug_id", type="string", length=255, nullable=false)
     */
    private $drugId;

    /**
     * @var string
     *
     * @Column(name="batch_number", type="string", length=50, nullable=false)
     */
    private $batchNumber;

    /**
     * @var string
     *
     * @Column(name="expiry_date", type="string", length=100, nullable=false)
     */
    private $expiryDate;

    /**
     * @var integer
     *
     * @Column(name="stock_type", type="integer", nullable=false)
     */
    private $stockType;

    /**
     * @var string
     *
     * @Column(name="facility_code", type="string", length=50, nullable=false)
     */
    private $facilityCode;

    /**
     * @var integer
     *
     * @Column(name="balance", type="integer", nullable=false)
     */
    private $balance;

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
     * @param string $drugId
     * @return DrugStockBalance
     */
    public function setDrugId($drugId)
    {
        $this->drugId = $drugId;
    
        return $this;
    }

    /**
     * Get drugId
     *
     * @return string 
     */
    public function getDrugId()
    {
        return $this->drugId;
    }

    /**
     * Set batchNumber
     *
     * @param string $batchNumber
     * @return DrugStockBalance
     */
    public function setBatchNumber($batchNumber)
    {
        $this->batchNumber = $batchNumber;
    
        return $this;
    }

    /**
     * Get batchNumber
     *
     * @return string 
     */
    public function getBatchNumber()
    {
        return $this->batchNumber;
    }

    /**
     * Set expiryDate
     *
     * @param string $expiryDate
     * @return DrugStockBalance
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    
        return $this;
    }

    /**
     * Get expiryDate
     *
     * @return string 
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set stockType
     *
     * @param integer $stockType
     * @return DrugStockBalance
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
     * Set facilityCode
     *
     * @param string $facilityCode
     * @return DrugStockBalance
     */
    public function setFacilityCode($facilityCode)
    {
        $this->facilityCode = $facilityCode;
    
        return $this;
    }

    /**
     * Get facilityCode
     *
     * @return string 
     */
    public function getFacilityCode()
    {
        return $this->facilityCode;
    }

    /**
     * Set balance
     *
     * @param integer $balance
     * @return DrugStockBalance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    
        return $this;
    }

    /**
     * Get balance
     *
     * @return integer 
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return DrugStockBalance
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
     * @return DrugStockBalance
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
