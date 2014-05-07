<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * PatientVisit
 *
 * @Table(name="patient_visit")
 * @Entity
 */
class PatientVisit
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
     * @Column(name="patient_id", type="string", length=100, nullable=false)
     */
    private $patientId;

    /**
     * @var string
     *
     * @Column(name="visit_purpose", type="string", length=10, nullable=false)
     */
    private $visitPurpose;

    /**
     * @var string
     *
     * @Column(name="current_height", type="string", length=10, nullable=false)
     */
    private $currentHeight;

    /**
     * @var string
     *
     * @Column(name="current_weight", type="string", length=100, nullable=false)
     */
    private $currentWeight;

    /**
     * @var string
     *
     * @Column(name="regimen", type="string", length=100, nullable=false)
     */
    private $regimen;

    /**
     * @var string
     *
     * @Column(name="regimen_change_reason", type="string", length=100, nullable=false)
     */
    private $regimenChangeReason;

    /**
     * @var string
     *
     * @Column(name="drug_id", type="string", length=100, nullable=false)
     */
    private $drugId;

    /**
     * @var string
     *
     * @Column(name="batch_number", type="string", length=20, nullable=false)
     */
    private $batchNumber;

    /**
     * @var string
     *
     * @Column(name="brand", type="string", length=100, nullable=false)
     */
    private $brand;

    /**
     * @var string
     *
     * @Column(name="indication", type="string", length=10, nullable=false)
     */
    private $indication;

    /**
     * @var string
     *
     * @Column(name="pill_count", type="string", length=10, nullable=false)
     */
    private $pillCount;

    /**
     * @var string
     *
     * @Column(name="comment", type="text", nullable=false)
     */
    private $comment;

    /**
     * @var string
     *
     * @Column(name="timestamp", type="string", length=32, nullable=false)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @Column(name="user", type="string", length=10, nullable=false)
     */
    private $user;

    /**
     * @var string
     *
     * @Column(name="facility", type="string", length=10, nullable=false)
     */
    private $facility;

    /**
     * @var string
     *
     * @Column(name="dose", type="string", length=20, nullable=false)
     */
    private $dose;

    /**
     * @var string
     *
     * @Column(name="dispensing_date", type="string", length=20, nullable=false)
     */
    private $dispensingDate;

    /**
     * @var string
     *
     * @Column(name="dispensing_date_timestamp", type="string", length=32, nullable=false)
     */
    private $dispensingDateTimestamp;

    /**
     * @var string
     *
     * @Column(name="migration_id", type="string", length=10, nullable=false)
     */
    private $migrationId;

    /**
     * @var string
     *
     * @Column(name="quantity", type="string", length=100, nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @Column(name="machine_code", type="string", length=10, nullable=false)
     */
    private $machineCode;

    /**
     * @var string
     *
     * @Column(name="last_regimen", type="string", length=100, nullable=false)
     */
    private $lastRegimen;

    /**
     * @var string
     *
     * @Column(name="duration", type="string", length=10, nullable=false)
     */
    private $duration;

    /**
     * @var string
     *
     * @Column(name="months_of_stock", type="string", length=10, nullable=false)
     */
    private $monthsOfStock;

    /**
     * @var string
     *
     * @Column(name="adherence", type="string", length=10, nullable=false)
     */
    private $adherence;

    /**
     * @var string
     *
     * @Column(name="missed_pills", type="string", length=10, nullable=false)
     */
    private $missedPills;

    /**
     * @var string
     *
     * @Column(name="non_adherence_reason", type="string", length=255, nullable=false)
     */
    private $nonAdherenceReason;

    /**
     * @var string
     *
     * @Column(name="merged_from", type="string", length=50, nullable=false)
     */
    private $mergedFrom;

    /**
     * @var string
     *
     * @Column(name="regimen_merged_from", type="string", length=20, nullable=false)
     */
    private $regimenMergedFrom;

    /**
     * @var string
     *
     * @Column(name="last_regimen_merged_from", type="string", length=20, nullable=false)
     */
    private $lastRegimenMergedFrom;

    /**
     * @var integer
     *
     * @Column(name="active", type="integer", nullable=false)
     */
    private $active;


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
     * Set patientId
     *
     * @param string $patientId
     * @return PatientVisit
     */
    public function setPatientId($patientId)
    {
        $this->patientId = $patientId;
    
        return $this;
    }

    /**
     * Get patientId
     *
     * @return string 
     */
    public function getPatientId()
    {
        return $this->patientId;
    }

    /**
     * Set visitPurpose
     *
     * @param string $visitPurpose
     * @return PatientVisit
     */
    public function setVisitPurpose($visitPurpose)
    {
        $this->visitPurpose = $visitPurpose;
    
        return $this;
    }

    /**
     * Get visitPurpose
     *
     * @return string 
     */
    public function getVisitPurpose()
    {
        return $this->visitPurpose;
    }

    /**
     * Set currentHeight
     *
     * @param string $currentHeight
     * @return PatientVisit
     */
    public function setCurrentHeight($currentHeight)
    {
        $this->currentHeight = $currentHeight;
    
        return $this;
    }

    /**
     * Get currentHeight
     *
     * @return string 
     */
    public function getCurrentHeight()
    {
        return $this->currentHeight;
    }

    /**
     * Set currentWeight
     *
     * @param string $currentWeight
     * @return PatientVisit
     */
    public function setCurrentWeight($currentWeight)
    {
        $this->currentWeight = $currentWeight;
    
        return $this;
    }

    /**
     * Get currentWeight
     *
     * @return string 
     */
    public function getCurrentWeight()
    {
        return $this->currentWeight;
    }

    /**
     * Set regimen
     *
     * @param string $regimen
     * @return PatientVisit
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
     * Set regimenChangeReason
     *
     * @param string $regimenChangeReason
     * @return PatientVisit
     */
    public function setRegimenChangeReason($regimenChangeReason)
    {
        $this->regimenChangeReason = $regimenChangeReason;
    
        return $this;
    }

    /**
     * Get regimenChangeReason
     *
     * @return string 
     */
    public function getRegimenChangeReason()
    {
        return $this->regimenChangeReason;
    }

    /**
     * Set drugId
     *
     * @param string $drugId
     * @return PatientVisit
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
     * @return PatientVisit
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
     * Set brand
     *
     * @param string $brand
     * @return PatientVisit
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    
        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set indication
     *
     * @param string $indication
     * @return PatientVisit
     */
    public function setIndication($indication)
    {
        $this->indication = $indication;
    
        return $this;
    }

    /**
     * Get indication
     *
     * @return string 
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Set pillCount
     *
     * @param string $pillCount
     * @return PatientVisit
     */
    public function setPillCount($pillCount)
    {
        $this->pillCount = $pillCount;
    
        return $this;
    }

    /**
     * Get pillCount
     *
     * @return string 
     */
    public function getPillCount()
    {
        return $this->pillCount;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return PatientVisit
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
     * Set timestamp
     *
     * @param string $timestamp
     * @return PatientVisit
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
     * Set user
     *
     * @param string $user
     * @return PatientVisit
     */
    public function setUser($user)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set facility
     *
     * @param string $facility
     * @return PatientVisit
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
     * Set dose
     *
     * @param string $dose
     * @return PatientVisit
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
     * Set dispensingDate
     *
     * @param string $dispensingDate
     * @return PatientVisit
     */
    public function setDispensingDate($dispensingDate)
    {
        $this->dispensingDate = $dispensingDate;
    
        return $this;
    }

    /**
     * Get dispensingDate
     *
     * @return string 
     */
    public function getDispensingDate()
    {
        return $this->dispensingDate;
    }

    /**
     * Set dispensingDateTimestamp
     *
     * @param string $dispensingDateTimestamp
     * @return PatientVisit
     */
    public function setDispensingDateTimestamp($dispensingDateTimestamp)
    {
        $this->dispensingDateTimestamp = $dispensingDateTimestamp;
    
        return $this;
    }

    /**
     * Get dispensingDateTimestamp
     *
     * @return string 
     */
    public function getDispensingDateTimestamp()
    {
        return $this->dispensingDateTimestamp;
    }

    /**
     * Set migrationId
     *
     * @param string $migrationId
     * @return PatientVisit
     */
    public function setMigrationId($migrationId)
    {
        $this->migrationId = $migrationId;
    
        return $this;
    }

    /**
     * Get migrationId
     *
     * @return string 
     */
    public function getMigrationId()
    {
        return $this->migrationId;
    }

    /**
     * Set quantity
     *
     * @param string $quantity
     * @return PatientVisit
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
     * Set machineCode
     *
     * @param string $machineCode
     * @return PatientVisit
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
     * Set lastRegimen
     *
     * @param string $lastRegimen
     * @return PatientVisit
     */
    public function setLastRegimen($lastRegimen)
    {
        $this->lastRegimen = $lastRegimen;
    
        return $this;
    }

    /**
     * Get lastRegimen
     *
     * @return string 
     */
    public function getLastRegimen()
    {
        return $this->lastRegimen;
    }

    /**
     * Set duration
     *
     * @param string $duration
     * @return PatientVisit
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
     * Set monthsOfStock
     *
     * @param string $monthsOfStock
     * @return PatientVisit
     */
    public function setMonthsOfStock($monthsOfStock)
    {
        $this->monthsOfStock = $monthsOfStock;
    
        return $this;
    }

    /**
     * Get monthsOfStock
     *
     * @return string 
     */
    public function getMonthsOfStock()
    {
        return $this->monthsOfStock;
    }

    /**
     * Set adherence
     *
     * @param string $adherence
     * @return PatientVisit
     */
    public function setAdherence($adherence)
    {
        $this->adherence = $adherence;
    
        return $this;
    }

    /**
     * Get adherence
     *
     * @return string 
     */
    public function getAdherence()
    {
        return $this->adherence;
    }

    /**
     * Set missedPills
     *
     * @param string $missedPills
     * @return PatientVisit
     */
    public function setMissedPills($missedPills)
    {
        $this->missedPills = $missedPills;
    
        return $this;
    }

    /**
     * Get missedPills
     *
     * @return string 
     */
    public function getMissedPills()
    {
        return $this->missedPills;
    }

    /**
     * Set nonAdherenceReason
     *
     * @param string $nonAdherenceReason
     * @return PatientVisit
     */
    public function setNonAdherenceReason($nonAdherenceReason)
    {
        $this->nonAdherenceReason = $nonAdherenceReason;
    
        return $this;
    }

    /**
     * Get nonAdherenceReason
     *
     * @return string 
     */
    public function getNonAdherenceReason()
    {
        return $this->nonAdherenceReason;
    }

    /**
     * Set mergedFrom
     *
     * @param string $mergedFrom
     * @return PatientVisit
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
     * @return PatientVisit
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

    /**
     * Set lastRegimenMergedFrom
     *
     * @param string $lastRegimenMergedFrom
     * @return PatientVisit
     */
    public function setLastRegimenMergedFrom($lastRegimenMergedFrom)
    {
        $this->lastRegimenMergedFrom = $lastRegimenMergedFrom;
    
        return $this;
    }

    /**
     * Get lastRegimenMergedFrom
     *
     * @return string 
     */
    public function getLastRegimenMergedFrom()
    {
        return $this->lastRegimenMergedFrom;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return PatientVisit
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
}
