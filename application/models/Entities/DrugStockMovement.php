<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * DrugStockMovement
 *
 * @Table(name="drug_stock_movement")
 * @Entity
 */
class DrugStockMovement
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
     * @Column(name="drug", type="string", length=200, nullable=false)
     */
    private $drug;

    /**
     * @var string
     *
     * @Column(name="transaction_date", type="string", length=10, nullable=false)
     */
    private $transactionDate;

    /**
     * @var string
     *
     * @Column(name="batch_number", type="string", length=100, nullable=false)
     */
    private $batchNumber;

    /**
     * @var string
     *
     * @Column(name="transaction_type", type="string", length=200, nullable=false)
     */
    private $transactionType;

    /**
     * @var string
     *
     * @Column(name="source", type="string", length=10, nullable=false)
     */
    private $source;

    /**
     * @var string
     *
     * @Column(name="destination", type="string", length=10, nullable=false)
     */
    private $destination;

    /**
     * @var integer
     *
     * @Column(name="Source_Destination", type="integer", nullable=false)
     */
    private $sourceDestination;

    /**
     * @var string
     *
     * @Column(name="expiry_date", type="string", length=10, nullable=false)
     */
    private $expiryDate;

    /**
     * @var string
     *
     * @Column(name="packs", type="string", length=10, nullable=false)
     */
    private $packs;

    /**
     * @var string
     *
     * @Column(name="quantity", type="string", length=10, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @Column(name="quantity_out", type="string", length=10, nullable=false)
     */
    private $quantityOut;

    /**
     * @var float
     *
     * @Column(name="balance", type="float", nullable=false)
     */
    private $balance;

    /**
     * @var string
     *
     * @Column(name="unit_cost", type="string", length=10, nullable=false)
     */
    private $unitCost;

    /**
     * @var string
     *
     * @Column(name="amount", type="string", length=10, nullable=false)
     */
    private $amount;

    /**
     * @var string
     *
     * @Column(name="remarks", type="text", nullable=false)
     */
    private $remarks;

    /**
     * @var string
     *
     * @Column(name="operator", type="string", length=50, nullable=false)
     */
    private $operator;

    /**
     * @var string
     *
     * @Column(name="order_number", type="string", length=10, nullable=false)
     */
    private $orderNumber;

    /**
     * @var string
     *
     * @Column(name="facility", type="string", length=10, nullable=false)
     */
    private $facility;

    /**
     * @var string
     *
     * @Column(name="machine_code", type="string", length=10, nullable=false)
     */
    private $machineCode;

    /**
     * @var string
     *
     * @Column(name="merged_from", type="string", length=50, nullable=false)
     */
    private $mergedFrom;

    /**
     * @var string
     *
     * @Column(name="timestamp", type="string", length=50, nullable=false)
     */
    private $timestamp;

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
     * @return DrugStockMovement
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
     * Set transactionDate
     *
     * @param string $transactionDate
     * @return DrugStockMovement
     */
    public function setTransactionDate($transactionDate)
    {
        $this->transactionDate = $transactionDate;
    
        return $this;
    }

    /**
     * Get transactionDate
     *
     * @return string 
     */
    public function getTransactionDate()
    {
        return $this->transactionDate;
    }

    /**
     * Set batchNumber
     *
     * @param string $batchNumber
     * @return DrugStockMovement
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
     * Set transactionType
     *
     * @param string $transactionType
     * @return DrugStockMovement
     */
    public function setTransactionType($transactionType)
    {
        $this->transactionType = $transactionType;
    
        return $this;
    }

    /**
     * Get transactionType
     *
     * @return string 
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return DrugStockMovement
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
     * Set destination
     *
     * @param string $destination
     * @return DrugStockMovement
     */
    public function setDestination($destination)
    {
        $this->destination = $destination;
    
        return $this;
    }

    /**
     * Get destination
     *
     * @return string 
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Set sourceDestination
     *
     * @param integer $sourceDestination
     * @return DrugStockMovement
     */
    public function setSourceDestination($sourceDestination)
    {
        $this->sourceDestination = $sourceDestination;
    
        return $this;
    }

    /**
     * Get sourceDestination
     *
     * @return integer 
     */
    public function getSourceDestination()
    {
        return $this->sourceDestination;
    }

    /**
     * Set expiryDate
     *
     * @param string $expiryDate
     * @return DrugStockMovement
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
     * Set packs
     *
     * @param string $packs
     * @return DrugStockMovement
     */
    public function setPacks($packs)
    {
        $this->packs = $packs;
    
        return $this;
    }

    /**
     * Get packs
     *
     * @return string 
     */
    public function getPacks()
    {
        return $this->packs;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     * @return DrugStockMovement
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
     * Set quantityOut
     *
     * @param string $quantityOut
     * @return DrugStockMovement
     */
    public function setQuantityOut($quantityOut)
    {
        $this->quantityOut = $quantityOut;
    
        return $this;
    }

    /**
     * Get quantityOut
     *
     * @return string 
     */
    public function getQuantityOut()
    {
        return $this->quantityOut;
    }

    /**
     * Set balance
     *
     * @param float $balance
     * @return DrugStockMovement
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    
        return $this;
    }

    /**
     * Get balance
     *
     * @return float 
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * Set unitCost
     *
     * @param string $unitCost
     * @return DrugStockMovement
     */
    public function setUnitCost($unitCost)
    {
        $this->unitCost = $unitCost;
    
        return $this;
    }

    /**
     * Get unitCost
     *
     * @return string 
     */
    public function getUnitCost()
    {
        return $this->unitCost;
    }

    /**
     * Set amount
     *
     * @param string $amount
     * @return DrugStockMovement
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    
        return $this;
    }

    /**
     * Get amount
     *
     * @return string 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     * @return DrugStockMovement
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
     * Set operator
     *
     * @param string $operator
     * @return DrugStockMovement
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    
        return $this;
    }

    /**
     * Get operator
     *
     * @return string 
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set orderNumber
     *
     * @param string $orderNumber
     * @return DrugStockMovement
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;
    
        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return string 
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set facility
     *
     * @param string $facility
     * @return DrugStockMovement
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
     * Set machineCode
     *
     * @param string $machineCode
     * @return DrugStockMovement
     */
    public function setMachineCode($machineCode)
    {
        $this->machineCode = $machineCode;
    
        return $this;
    }

    /**
     * Get machineCode
     *
     * @return string 
     */
    public function getMachineCode()
    {
        return $this->machineCode;
    }

    /**
     * Set mergedFrom
     *
     * @param string $mergedFrom
     * @return DrugStockMovement
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
     * Set timestamp
     *
     * @param string $timestamp
     * @return DrugStockMovement
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return string 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set cccStoreSp
     *
     * @param \models\Entities\CccStoreServicePoint $cccStoreSp
     * @return DrugStockMovement
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
