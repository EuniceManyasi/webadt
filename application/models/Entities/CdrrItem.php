<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * CdrrItem
 *
 * @Table(name="cdrr_item")
 * @Entity
 */
class CdrrItem
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
     * @Column(name="balance", type="integer", nullable=true)
     */
    private $balance;

    /**
     * @var integer
     *
     * @Column(name="received", type="integer", nullable=true)
     */
    private $received;

    /**
     * @var integer
     *
     * @Column(name="dispensed_units", type="integer", nullable=true)
     */
    private $dispensedUnits;

    /**
     * @var integer
     *
     * @Column(name="dispensed_packs", type="integer", nullable=true)
     */
    private $dispensedPacks;

    /**
     * @var integer
     *
     * @Column(name="losses", type="integer", nullable=true)
     */
    private $losses;

    /**
     * @var integer
     *
     * @Column(name="adjustments", type="integer", nullable=true)
     */
    private $adjustments;

    /**
     * @var integer
     *
     * @Column(name="count", type="integer", nullable=true)
     */
    private $count;

    /**
     * @var integer
     *
     * @Column(name="expiry_quant", type="integer", nullable=true)
     */
    private $expiryQuant;

    /**
     * @var \DateTime
     *
     * @Column(name="expiry_date", type="date", nullable=true)
     */
    private $expiryDate;

    /**
     * @var integer
     *
     * @Column(name="out_of_stock", type="integer", nullable=true)
     */
    private $outOfStock;

    /**
     * @var integer
     *
     * @Column(name="resupply", type="integer", nullable=true)
     */
    private $resupply;

    /**
     * @var integer
     *
     * @Column(name="aggr_consumed", type="integer", nullable=true)
     */
    private $aggrConsumed;

    /**
     * @var integer
     *
     * @Column(name="aggr_on_hand", type="integer", nullable=true)
     */
    private $aggrOnHand;

    /**
     * @var boolean
     *
     * @Column(name="publish", type="boolean", nullable=false)
     */
    private $publish;

    /**
     * @var integer
     *
     * @Column(name="cdrr_id", type="integer", nullable=false)
     */
    private $cdrrId;

    /**
     * @var integer
     *
     * @Column(name="drug_id", type="integer", nullable=false)
     */
    private $drugId;


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
     * Set balance
     *
     * @param integer $balance
     * @return CdrrItem
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
     * Set received
     *
     * @param integer $received
     * @return CdrrItem
     */
    public function setReceived($received)
    {
        $this->received = $received;
    
        return $this;
    }

    /**
     * Get received
     *
     * @return integer 
     */
    public function getReceived()
    {
        return $this->received;
    }

    /**
     * Set dispensedUnits
     *
     * @param integer $dispensedUnits
     * @return CdrrItem
     */
    public function setDispensedUnits($dispensedUnits)
    {
        $this->dispensedUnits = $dispensedUnits;
    
        return $this;
    }

    /**
     * Get dispensedUnits
     *
     * @return integer 
     */
    public function getDispensedUnits()
    {
        return $this->dispensedUnits;
    }

    /**
     * Set dispensedPacks
     *
     * @param integer $dispensedPacks
     * @return CdrrItem
     */
    public function setDispensedPacks($dispensedPacks)
    {
        $this->dispensedPacks = $dispensedPacks;
    
        return $this;
    }

    /**
     * Get dispensedPacks
     *
     * @return integer 
     */
    public function getDispensedPacks()
    {
        return $this->dispensedPacks;
    }

    /**
     * Set losses
     *
     * @param integer $losses
     * @return CdrrItem
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;
    
        return $this;
    }

    /**
     * Get losses
     *
     * @return integer 
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * Set adjustments
     *
     * @param integer $adjustments
     * @return CdrrItem
     */
    public function setAdjustments($adjustments)
    {
        $this->adjustments = $adjustments;
    
        return $this;
    }

    /**
     * Get adjustments
     *
     * @return integer 
     */
    public function getAdjustments()
    {
        return $this->adjustments;
    }

    /**
     * Set count
     *
     * @param integer $count
     * @return CdrrItem
     */
    public function setCount($count)
    {
        $this->count = $count;
    
        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set expiryQuant
     *
     * @param integer $expiryQuant
     * @return CdrrItem
     */
    public function setExpiryQuant($expiryQuant)
    {
        $this->expiryQuant = $expiryQuant;
    
        return $this;
    }

    /**
     * Get expiryQuant
     *
     * @return integer 
     */
    public function getExpiryQuant()
    {
        return $this->expiryQuant;
    }

    /**
     * Set expiryDate
     *
     * @param \DateTime $expiryDate
     * @return CdrrItem
     */
    public function setExpiryDate($expiryDate)
    {
        $this->expiryDate = $expiryDate;
    
        return $this;
    }

    /**
     * Get expiryDate
     *
     * @return \DateTime 
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set outOfStock
     *
     * @param integer $outOfStock
     * @return CdrrItem
     */
    public function setOutOfStock($outOfStock)
    {
        $this->outOfStock = $outOfStock;
    
        return $this;
    }

    /**
     * Get outOfStock
     *
     * @return integer 
     */
    public function getOutOfStock()
    {
        return $this->outOfStock;
    }

    /**
     * Set resupply
     *
     * @param integer $resupply
     * @return CdrrItem
     */
    public function setResupply($resupply)
    {
        $this->resupply = $resupply;
    
        return $this;
    }

    /**
     * Get resupply
     *
     * @return integer 
     */
    public function getResupply()
    {
        return $this->resupply;
    }

    /**
     * Set aggrConsumed
     *
     * @param integer $aggrConsumed
     * @return CdrrItem
     */
    public function setAggrConsumed($aggrConsumed)
    {
        $this->aggrConsumed = $aggrConsumed;
    
        return $this;
    }

    /**
     * Get aggrConsumed
     *
     * @return integer 
     */
    public function getAggrConsumed()
    {
        return $this->aggrConsumed;
    }

    /**
     * Set aggrOnHand
     *
     * @param integer $aggrOnHand
     * @return CdrrItem
     */
    public function setAggrOnHand($aggrOnHand)
    {
        $this->aggrOnHand = $aggrOnHand;
    
        return $this;
    }

    /**
     * Get aggrOnHand
     *
     * @return integer 
     */
    public function getAggrOnHand()
    {
        return $this->aggrOnHand;
    }

    /**
     * Set publish
     *
     * @param boolean $publish
     * @return CdrrItem
     */
    public function setPublish($publish)
    {
        $this->publish = $publish;
    
        return $this;
    }

    /**
     * Get publish
     *
     * @return boolean 
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * Set cdrrId
     *
     * @param integer $cdrrId
     * @return CdrrItem
     */
    public function setCdrrId($cdrrId)
    {
        $this->cdrrId = $cdrrId;
    
        return $this;
    }

    /**
     * Get cdrrId
     *
     * @return integer 
     */
    public function getCdrrId()
    {
        return $this->cdrrId;
    }

    /**
     * Set drugId
     *
     * @param integer $drugId
     * @return CdrrItem
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
}
