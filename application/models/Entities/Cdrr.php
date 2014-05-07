<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * Cdrr
 *
 * @Table(name="cdrr")
 * @Entity
 */
class Cdrr
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
     * @Column(name="status", type="string", length=20, nullable=false)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @Column(name="updated", type="datetime", nullable=false)
     */
    private $updated;

    /**
     * @var string
     *
     * @Column(name="code", type="string", length=15, nullable=true)
     */
    private $code;

    /**
     * @var \DateTime
     *
     * @Column(name="period_begin", type="date", nullable=true)
     */
    private $periodBegin;

    /**
     * @var \DateTime
     *
     * @Column(name="period_end", type="date", nullable=true)
     */
    private $periodEnd;

    /**
     * @var string
     *
     * @Column(name="comments", type="text", nullable=true)
     */
    private $comments;

    /**
     * @var integer
     *
     * @Column(name="reports_expected", type="integer", nullable=true)
     */
    private $reportsExpected;

    /**
     * @var integer
     *
     * @Column(name="reports_actual", type="integer", nullable=true)
     */
    private $reportsActual;

    /**
     * @var string
     *
     * @Column(name="services", type="string", length=255, nullable=true)
     */
    private $services;

    /**
     * @var string
     *
     * @Column(name="sponsors", type="string", length=255, nullable=true)
     */
    private $sponsors;

    /**
     * @var integer
     *
     * @Column(name="non_arv", type="integer", nullable=false)
     */
    private $nonArv;

    /**
     * @var string
     *
     * @Column(name="delivery_note", type="string", length=255, nullable=true)
     */
    private $deliveryNote;

    /**
     * @var integer
     *
     * @Column(name="order_id", type="integer", nullable=true)
     */
    private $orderId;

    /**
     * @var integer
     *
     * @Column(name="facility_id", type="integer", nullable=false)
     */
    private $facilityId;


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
     * Set status
     *
     * @param string $status
     * @return Cdrr
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return Cdrr
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return Cdrr
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Cdrr
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
     * Set periodBegin
     *
     * @param \DateTime $periodBegin
     * @return Cdrr
     */
    public function setPeriodBegin($periodBegin)
    {
        $this->periodBegin = $periodBegin;
    
        return $this;
    }

    /**
     * Get periodBegin
     *
     * @return \DateTime 
     */
    public function getPeriodBegin()
    {
        return $this->periodBegin;
    }

    /**
     * Set periodEnd
     *
     * @param \DateTime $periodEnd
     * @return Cdrr
     */
    public function setPeriodEnd($periodEnd)
    {
        $this->periodEnd = $periodEnd;
    
        return $this;
    }

    /**
     * Get periodEnd
     *
     * @return \DateTime 
     */
    public function getPeriodEnd()
    {
        return $this->periodEnd;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Cdrr
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    
        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set reportsExpected
     *
     * @param integer $reportsExpected
     * @return Cdrr
     */
    public function setReportsExpected($reportsExpected)
    {
        $this->reportsExpected = $reportsExpected;
    
        return $this;
    }

    /**
     * Get reportsExpected
     *
     * @return integer 
     */
    public function getReportsExpected()
    {
        return $this->reportsExpected;
    }

    /**
     * Set reportsActual
     *
     * @param integer $reportsActual
     * @return Cdrr
     */
    public function setReportsActual($reportsActual)
    {
        $this->reportsActual = $reportsActual;
    
        return $this;
    }

    /**
     * Get reportsActual
     *
     * @return integer 
     */
    public function getReportsActual()
    {
        return $this->reportsActual;
    }

    /**
     * Set services
     *
     * @param string $services
     * @return Cdrr
     */
    public function setServices($services)
    {
        $this->services = $services;
    
        return $this;
    }

    /**
     * Get services
     *
     * @return string 
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set sponsors
     *
     * @param string $sponsors
     * @return Cdrr
     */
    public function setSponsors($sponsors)
    {
        $this->sponsors = $sponsors;
    
        return $this;
    }

    /**
     * Get sponsors
     *
     * @return string 
     */
    public function getSponsors()
    {
        return $this->sponsors;
    }

    /**
     * Set nonArv
     *
     * @param integer $nonArv
     * @return Cdrr
     */
    public function setNonArv($nonArv)
    {
        $this->nonArv = $nonArv;
    
        return $this;
    }

    /**
     * Get nonArv
     *
     * @return integer 
     */
    public function getNonArv()
    {
        return $this->nonArv;
    }

    /**
     * Set deliveryNote
     *
     * @param string $deliveryNote
     * @return Cdrr
     */
    public function setDeliveryNote($deliveryNote)
    {
        $this->deliveryNote = $deliveryNote;
    
        return $this;
    }

    /**
     * Get deliveryNote
     *
     * @return string 
     */
    public function getDeliveryNote()
    {
        return $this->deliveryNote;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     * @return Cdrr
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
    
        return $this;
    }

    /**
     * Get orderId
     *
     * @return integer 
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set facilityId
     *
     * @param integer $facilityId
     * @return Cdrr
     */
    public function setFacilityId($facilityId)
    {
        $this->facilityId = $facilityId;
    
        return $this;
    }

    /**
     * Get facilityId
     *
     * @return integer 
     */
    public function getFacilityId()
    {
        return $this->facilityId;
    }
}
