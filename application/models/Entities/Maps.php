<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * Maps
 *
 * @Table(name="maps")
 * @Entity
 */
class Maps
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
     * @Column(name="status", type="string", length=10, nullable=false)
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
     * @Column(name="code", type="string", length=15, nullable=false)
     */
    private $code;

    /**
     * @var \DateTime
     *
     * @Column(name="period_begin", type="date", nullable=false)
     */
    private $periodBegin;

    /**
     * @var \DateTime
     *
     * @Column(name="period_end", type="date", nullable=false)
     */
    private $periodEnd;

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
     * @Column(name="art_adult", type="integer", nullable=true)
     */
    private $artAdult;

    /**
     * @var integer
     *
     * @Column(name="art_child", type="integer", nullable=true)
     */
    private $artChild;

    /**
     * @var integer
     *
     * @Column(name="new_male", type="integer", nullable=true)
     */
    private $newMale;

    /**
     * @var integer
     *
     * @Column(name="revisit_male", type="integer", nullable=true)
     */
    private $revisitMale;

    /**
     * @var integer
     *
     * @Column(name="new_female", type="integer", nullable=true)
     */
    private $newFemale;

    /**
     * @var integer
     *
     * @Column(name="revisit_female", type="integer", nullable=true)
     */
    private $revisitFemale;

    /**
     * @var integer
     *
     * @Column(name="new_pmtct", type="integer", nullable=true)
     */
    private $newPmtct;

    /**
     * @var integer
     *
     * @Column(name="revisit_pmtct", type="integer", nullable=true)
     */
    private $revisitPmtct;

    /**
     * @var integer
     *
     * @Column(name="total_infant", type="integer", nullable=true)
     */
    private $totalInfant;

    /**
     * @var integer
     *
     * @Column(name="pep_adult", type="integer", nullable=true)
     */
    private $pepAdult;

    /**
     * @var integer
     *
     * @Column(name="pep_child", type="integer", nullable=true)
     */
    private $pepChild;

    /**
     * @var integer
     *
     * @Column(name="total_adult", type="integer", nullable=true)
     */
    private $totalAdult;

    /**
     * @var integer
     *
     * @Column(name="total_child", type="integer", nullable=true)
     */
    private $totalChild;

    /**
     * @var integer
     *
     * @Column(name="diflucan_adult", type="integer", nullable=true)
     */
    private $diflucanAdult;

    /**
     * @var integer
     *
     * @Column(name="diflucan_child", type="integer", nullable=true)
     */
    private $diflucanChild;

    /**
     * @var integer
     *
     * @Column(name="new_cm", type="integer", nullable=true)
     */
    private $newCm;

    /**
     * @var integer
     *
     * @Column(name="revisit_cm", type="integer", nullable=true)
     */
    private $revisitCm;

    /**
     * @var integer
     *
     * @Column(name="new_oc", type="integer", nullable=true)
     */
    private $newOc;

    /**
     * @var integer
     *
     * @Column(name="revisit_oc", type="integer", nullable=true)
     */
    private $revisitOc;

    /**
     * @var string
     *
     * @Column(name="comments", type="text", nullable=true)
     */
    private $comments;

    /**
     * @var integer
     *
     * @Column(name="report_id", type="integer", nullable=true)
     */
    private $reportId;

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
     * @return Maps
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
     * @return Maps
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
     * @return Maps
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
     * @return Maps
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
     * @return Maps
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
     * @return Maps
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
     * Set reportsExpected
     *
     * @param integer $reportsExpected
     * @return Maps
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
     * @return Maps
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
     * @return Maps
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
     * @return Maps
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
     * Set artAdult
     *
     * @param integer $artAdult
     * @return Maps
     */
    public function setArtAdult($artAdult)
    {
        $this->artAdult = $artAdult;
    
        return $this;
    }

    /**
     * Get artAdult
     *
     * @return integer 
     */
    public function getArtAdult()
    {
        return $this->artAdult;
    }

    /**
     * Set artChild
     *
     * @param integer $artChild
     * @return Maps
     */
    public function setArtChild($artChild)
    {
        $this->artChild = $artChild;
    
        return $this;
    }

    /**
     * Get artChild
     *
     * @return integer 
     */
    public function getArtChild()
    {
        return $this->artChild;
    }

    /**
     * Set newMale
     *
     * @param integer $newMale
     * @return Maps
     */
    public function setNewMale($newMale)
    {
        $this->newMale = $newMale;
    
        return $this;
    }

    /**
     * Get newMale
     *
     * @return integer 
     */
    public function getNewMale()
    {
        return $this->newMale;
    }

    /**
     * Set revisitMale
     *
     * @param integer $revisitMale
     * @return Maps
     */
    public function setRevisitMale($revisitMale)
    {
        $this->revisitMale = $revisitMale;
    
        return $this;
    }

    /**
     * Get revisitMale
     *
     * @return integer 
     */
    public function getRevisitMale()
    {
        return $this->revisitMale;
    }

    /**
     * Set newFemale
     *
     * @param integer $newFemale
     * @return Maps
     */
    public function setNewFemale($newFemale)
    {
        $this->newFemale = $newFemale;
    
        return $this;
    }

    /**
     * Get newFemale
     *
     * @return integer 
     */
    public function getNewFemale()
    {
        return $this->newFemale;
    }

    /**
     * Set revisitFemale
     *
     * @param integer $revisitFemale
     * @return Maps
     */
    public function setRevisitFemale($revisitFemale)
    {
        $this->revisitFemale = $revisitFemale;
    
        return $this;
    }

    /**
     * Get revisitFemale
     *
     * @return integer 
     */
    public function getRevisitFemale()
    {
        return $this->revisitFemale;
    }

    /**
     * Set newPmtct
     *
     * @param integer $newPmtct
     * @return Maps
     */
    public function setNewPmtct($newPmtct)
    {
        $this->newPmtct = $newPmtct;
    
        return $this;
    }

    /**
     * Get newPmtct
     *
     * @return integer 
     */
    public function getNewPmtct()
    {
        return $this->newPmtct;
    }

    /**
     * Set revisitPmtct
     *
     * @param integer $revisitPmtct
     * @return Maps
     */
    public function setRevisitPmtct($revisitPmtct)
    {
        $this->revisitPmtct = $revisitPmtct;
    
        return $this;
    }

    /**
     * Get revisitPmtct
     *
     * @return integer 
     */
    public function getRevisitPmtct()
    {
        return $this->revisitPmtct;
    }

    /**
     * Set totalInfant
     *
     * @param integer $totalInfant
     * @return Maps
     */
    public function setTotalInfant($totalInfant)
    {
        $this->totalInfant = $totalInfant;
    
        return $this;
    }

    /**
     * Get totalInfant
     *
     * @return integer 
     */
    public function getTotalInfant()
    {
        return $this->totalInfant;
    }

    /**
     * Set pepAdult
     *
     * @param integer $pepAdult
     * @return Maps
     */
    public function setPepAdult($pepAdult)
    {
        $this->pepAdult = $pepAdult;
    
        return $this;
    }

    /**
     * Get pepAdult
     *
     * @return integer 
     */
    public function getPepAdult()
    {
        return $this->pepAdult;
    }

    /**
     * Set pepChild
     *
     * @param integer $pepChild
     * @return Maps
     */
    public function setPepChild($pepChild)
    {
        $this->pepChild = $pepChild;
    
        return $this;
    }

    /**
     * Get pepChild
     *
     * @return integer 
     */
    public function getPepChild()
    {
        return $this->pepChild;
    }

    /**
     * Set totalAdult
     *
     * @param integer $totalAdult
     * @return Maps
     */
    public function setTotalAdult($totalAdult)
    {
        $this->totalAdult = $totalAdult;
    
        return $this;
    }

    /**
     * Get totalAdult
     *
     * @return integer 
     */
    public function getTotalAdult()
    {
        return $this->totalAdult;
    }

    /**
     * Set totalChild
     *
     * @param integer $totalChild
     * @return Maps
     */
    public function setTotalChild($totalChild)
    {
        $this->totalChild = $totalChild;
    
        return $this;
    }

    /**
     * Get totalChild
     *
     * @return integer 
     */
    public function getTotalChild()
    {
        return $this->totalChild;
    }

    /**
     * Set diflucanAdult
     *
     * @param integer $diflucanAdult
     * @return Maps
     */
    public function setDiflucanAdult($diflucanAdult)
    {
        $this->diflucanAdult = $diflucanAdult;
    
        return $this;
    }

    /**
     * Get diflucanAdult
     *
     * @return integer 
     */
    public function getDiflucanAdult()
    {
        return $this->diflucanAdult;
    }

    /**
     * Set diflucanChild
     *
     * @param integer $diflucanChild
     * @return Maps
     */
    public function setDiflucanChild($diflucanChild)
    {
        $this->diflucanChild = $diflucanChild;
    
        return $this;
    }

    /**
     * Get diflucanChild
     *
     * @return integer 
     */
    public function getDiflucanChild()
    {
        return $this->diflucanChild;
    }

    /**
     * Set newCm
     *
     * @param integer $newCm
     * @return Maps
     */
    public function setNewCm($newCm)
    {
        $this->newCm = $newCm;
    
        return $this;
    }

    /**
     * Get newCm
     *
     * @return integer 
     */
    public function getNewCm()
    {
        return $this->newCm;
    }

    /**
     * Set revisitCm
     *
     * @param integer $revisitCm
     * @return Maps
     */
    public function setRevisitCm($revisitCm)
    {
        $this->revisitCm = $revisitCm;
    
        return $this;
    }

    /**
     * Get revisitCm
     *
     * @return integer 
     */
    public function getRevisitCm()
    {
        return $this->revisitCm;
    }

    /**
     * Set newOc
     *
     * @param integer $newOc
     * @return Maps
     */
    public function setNewOc($newOc)
    {
        $this->newOc = $newOc;
    
        return $this;
    }

    /**
     * Get newOc
     *
     * @return integer 
     */
    public function getNewOc()
    {
        return $this->newOc;
    }

    /**
     * Set revisitOc
     *
     * @param integer $revisitOc
     * @return Maps
     */
    public function setRevisitOc($revisitOc)
    {
        $this->revisitOc = $revisitOc;
    
        return $this;
    }

    /**
     * Get revisitOc
     *
     * @return integer 
     */
    public function getRevisitOc()
    {
        return $this->revisitOc;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return Maps
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
     * Set reportId
     *
     * @param integer $reportId
     * @return Maps
     */
    public function setReportId($reportId)
    {
        $this->reportId = $reportId;
    
        return $this;
    }

    /**
     * Get reportId
     *
     * @return integer 
     */
    public function getReportId()
    {
        return $this->reportId;
    }

    /**
     * Set facilityId
     *
     * @param integer $facilityId
     * @return Maps
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
