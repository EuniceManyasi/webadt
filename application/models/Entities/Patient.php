<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * Patient
 *
 * @Table(name="patient")
 * @Entity
 */
class Patient
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
     * @Column(name="medical_record_number", type="string", length=100, nullable=false)
     */
    private $medicalRecordNumber;

    /**
     * @var string
     *
     * @Column(name="patient_number_ccc", type="string", length=100, nullable=false)
     */
    private $patientNumberCcc;

    /**
     * @var string
     *
     * @Column(name="first_name", type="string", length=50, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @Column(name="last_name", type="string", length=50, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @Column(name="other_name", type="string", length=50, nullable=false)
     */
    private $otherName;

    /**
     * @var string
     *
     * @Column(name="dob", type="string", length=32, nullable=false)
     */
    private $dob;

    /**
     * @var string
     *
     * @Column(name="pob", type="string", length=100, nullable=false)
     */
    private $pob;

    /**
     * @var string
     *
     * @Column(name="gender", type="string", length=2, nullable=false)
     */
    private $gender;

    /**
     * @var string
     *
     * @Column(name="pregnant", type="string", length=2, nullable=false)
     */
    private $pregnant;

    /**
     * @var string
     *
     * @Column(name="weight", type="string", length=20, nullable=false)
     */
    private $weight;

    /**
     * @var string
     *
     * @Column(name="height", type="string", length=20, nullable=false)
     */
    private $height;

    /**
     * @var string
     *
     * @Column(name="sa", type="string", length=20, nullable=false)
     */
    private $sa;

    /**
     * @var string
     *
     * @Column(name="phone", type="string", length=30, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @Column(name="physical", type="text", nullable=false)
     */
    private $physical;

    /**
     * @var string
     *
     * @Column(name="alternate", type="string", length=50, nullable=false)
     */
    private $alternate;

    /**
     * @var string
     *
     * @Column(name="other_illnesses", type="text", nullable=false)
     */
    private $otherIllnesses;

    /**
     * @var string
     *
     * @Column(name="other_drugs", type="text", nullable=false)
     */
    private $otherDrugs;

    /**
     * @var string
     *
     * @Column(name="adr", type="text", nullable=false)
     */
    private $adr;

    /**
     * @var string
     *
     * @Column(name="tb", type="string", length=10, nullable=false)
     */
    private $tb;

    /**
     * @var string
     *
     * @Column(name="smoke", type="string", length=10, nullable=false)
     */
    private $smoke;

    /**
     * @var string
     *
     * @Column(name="alcohol", type="string", length=10, nullable=false)
     */
    private $alcohol;

    /**
     * @var string
     *
     * @Column(name="date_enrolled", type="string", length=32, nullable=false)
     */
    private $dateEnrolled;

    /**
     * @var string
     *
     * @Column(name="source", type="string", length=10, nullable=false)
     */
    private $source;

    /**
     * @var string
     *
     * @Column(name="supported_by", type="string", length=10, nullable=false)
     */
    private $supportedBy;

    /**
     * @var string
     *
     * @Column(name="timestamp", type="string", length=32, nullable=false)
     */
    private $timestamp;

    /**
     * @var string
     *
     * @Column(name="facility_code", type="string", length=10, nullable=false)
     */
    private $facilityCode;

    /**
     * @var string
     *
     * @Column(name="service", type="string", length=5, nullable=false)
     */
    private $service;

    /**
     * @var string
     *
     * @Column(name="start_regimen", type="string", length=5, nullable=false)
     */
    private $startRegimen;

    /**
     * @var string
     *
     * @Column(name="start_regimen_date", type="string", length=15, nullable=false)
     */
    private $startRegimenDate;

    /**
     * @var string
     *
     * @Column(name="current_status", type="string", length=5, nullable=false)
     */
    private $currentStatus;

    /**
     * @var string
     *
     * @Column(name="migration_id", type="string", length=10, nullable=false)
     */
    private $migrationId;

    /**
     * @var string
     *
     * @Column(name="machine_code", type="string", length=10, nullable=false)
     */
    private $machineCode;

    /**
     * @var string
     *
     * @Column(name="sms_consent", type="string", length=2, nullable=false)
     */
    private $smsConsent;

    /**
     * @var string
     *
     * @Column(name="partner_status", type="string", length=2, nullable=false)
     */
    private $partnerStatus;

    /**
     * @var string
     *
     * @Column(name="fplan", type="text", nullable=false)
     */
    private $fplan;

    /**
     * @var string
     *
     * @Column(name="tbphase", type="string", length=2, nullable=false)
     */
    private $tbphase;

    /**
     * @var string
     *
     * @Column(name="startphase", type="string", length=15, nullable=false)
     */
    private $startphase;

    /**
     * @var string
     *
     * @Column(name="endphase", type="string", length=15, nullable=false)
     */
    private $endphase;

    /**
     * @var string
     *
     * @Column(name="disclosure", type="string", length=2, nullable=false)
     */
    private $disclosure;

    /**
     * @var string
     *
     * @Column(name="non_commun", type="string", length=20, nullable=false)
     */
    private $nonCommun;

    /**
     * @var string
     *
     * @Column(name="status_change_date", type="string", length=20, nullable=false)
     */
    private $statusChangeDate;

    /**
     * @var string
     *
     * @Column(name="partner_type", type="string", length=20, nullable=false)
     */
    private $partnerType;

    /**
     * @var string
     *
     * @Column(name="support_group", type="string", length=255, nullable=false)
     */
    private $supportGroup;

    /**
     * @var string
     *
     * @Column(name="current_regimen", type="string", length=255, nullable=false)
     */
    private $currentRegimen;

    /**
     * @var string
     *
     * @Column(name="Start_Regimen_Merged_From", type="string", length=20, nullable=false)
     */
    private $startRegimenMergedFrom;

    /**
     * @var string
     *
     * @Column(name="Current_Regimen_Merged_From", type="string", length=20, nullable=false)
     */
    private $currentRegimenMergedFrom;

    /**
     * @var string
     *
     * @Column(name="nextappointment", type="string", length=20, nullable=false)
     */
    private $nextappointment;

    /**
     * @var string
     *
     * @Column(name="start_height", type="string", length=20, nullable=false)
     */
    private $startHeight;

    /**
     * @var string
     *
     * @Column(name="start_weight", type="string", length=20, nullable=false)
     */
    private $startWeight;

    /**
     * @var string
     *
     * @Column(name="start_bsa", type="string", length=20, nullable=false)
     */
    private $startBsa;

    /**
     * @var string
     *
     * @Column(name="transfer_from", type="string", length=100, nullable=false)
     */
    private $transferFrom;

    /**
     * @var integer
     *
     * @Column(name="active", type="integer", nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @Column(name="drug_allergies", type="text", nullable=false)
     */
    private $drugAllergies;

    /**
     * @var integer
     *
     * @Column(name="tb_test", type="integer", nullable=false)
     */
    private $tbTest;

    /**
     * @var integer
     *
     * @Column(name="pep_reason", type="integer", nullable=false)
     */
    private $pepReason;

    /**
     * @var integer
     *
     * @Column(name="who_stage", type="integer", nullable=false)
     */
    private $whoStage;

    /**
     * @var string
     *
     * @Column(name="drug_prophylaxis", type="string", length=20, nullable=false)
     */
    private $drugProphylaxis;

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
     * Set medicalRecordNumber
     *
     * @param string $medicalRecordNumber
     * @return Patient
     */
    public function setMedicalRecordNumber($medicalRecordNumber)
    {
        $this->medicalRecordNumber = $medicalRecordNumber;
    
        return $this;
    }

    /**
     * Get medicalRecordNumber
     *
     * @return string 
     */
    public function getMedicalRecordNumber()
    {
        return $this->medicalRecordNumber;
    }

    /**
     * Set patientNumberCcc
     *
     * @param string $patientNumberCcc
     * @return Patient
     */
    public function setPatientNumberCcc($patientNumberCcc)
    {
        $this->patientNumberCcc = $patientNumberCcc;
    
        return $this;
    }

    /**
     * Get patientNumberCcc
     *
     * @return string 
     */
    public function getPatientNumberCcc()
    {
        return $this->patientNumberCcc;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return Patient
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    
        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return Patient
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    
        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set otherName
     *
     * @param string $otherName
     * @return Patient
     */
    public function setOtherName($otherName)
    {
        $this->otherName = $otherName;
    
        return $this;
    }

    /**
     * Get otherName
     *
     * @return string 
     */
    public function getOtherName()
    {
        return $this->otherName;
    }

    /**
     * Set dob
     *
     * @param string $dob
     * @return Patient
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    
        return $this;
    }

    /**
     * Get dob
     *
     * @return string 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set pob
     *
     * @param string $pob
     * @return Patient
     */
    public function setPob($pob)
    {
        $this->pob = $pob;
    
        return $this;
    }

    /**
     * Get pob
     *
     * @return string 
     */
    public function getPob()
    {
        return $this->pob;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Patient
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    
        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set pregnant
     *
     * @param string $pregnant
     * @return Patient
     */
    public function setPregnant($pregnant)
    {
        $this->pregnant = $pregnant;
    
        return $this;
    }

    /**
     * Get pregnant
     *
     * @return string 
     */
    public function getPregnant()
    {
        return $this->pregnant;
    }

    /**
     * Set weight
     *
     * @param string $weight
     * @return Patient
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    
        return $this;
    }

    /**
     * Get weight
     *
     * @return string 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set height
     *
     * @param string $height
     * @return Patient
     */
    public function setHeight($height)
    {
        $this->height = $height;
    
        return $this;
    }

    /**
     * Get height
     *
     * @return string 
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set sa
     *
     * @param string $sa
     * @return Patient
     */
    public function setSa($sa)
    {
        $this->sa = $sa;
    
        return $this;
    }

    /**
     * Get sa
     *
     * @return string 
     */
    public function getSa()
    {
        return $this->sa;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Patient
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    
        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set physical
     *
     * @param string $physical
     * @return Patient
     */
    public function setPhysical($physical)
    {
        $this->physical = $physical;
    
        return $this;
    }

    /**
     * Get physical
     *
     * @return string 
     */
    public function getPhysical()
    {
        return $this->physical;
    }

    /**
     * Set alternate
     *
     * @param string $alternate
     * @return Patient
     */
    public function setAlternate($alternate)
    {
        $this->alternate = $alternate;
    
        return $this;
    }

    /**
     * Get alternate
     *
     * @return string 
     */
    public function getAlternate()
    {
        return $this->alternate;
    }

    /**
     * Set otherIllnesses
     *
     * @param string $otherIllnesses
     * @return Patient
     */
    public function setOtherIllnesses($otherIllnesses)
    {
        $this->otherIllnesses = $otherIllnesses;
    
        return $this;
    }

    /**
     * Get otherIllnesses
     *
     * @return string 
     */
    public function getOtherIllnesses()
    {
        return $this->otherIllnesses;
    }

    /**
     * Set otherDrugs
     *
     * @param string $otherDrugs
     * @return Patient
     */
    public function setOtherDrugs($otherDrugs)
    {
        $this->otherDrugs = $otherDrugs;
    
        return $this;
    }

    /**
     * Get otherDrugs
     *
     * @return string 
     */
    public function getOtherDrugs()
    {
        return $this->otherDrugs;
    }

    /**
     * Set adr
     *
     * @param string $adr
     * @return Patient
     */
    public function setAdr($adr)
    {
        $this->adr = $adr;
    
        return $this;
    }

    /**
     * Get adr
     *
     * @return string 
     */
    public function getAdr()
    {
        return $this->adr;
    }

    /**
     * Set tb
     *
     * @param string $tb
     * @return Patient
     */
    public function setTb($tb)
    {
        $this->tb = $tb;
    
        return $this;
    }

    /**
     * Get tb
     *
     * @return string 
     */
    public function getTb()
    {
        return $this->tb;
    }

    /**
     * Set smoke
     *
     * @param string $smoke
     * @return Patient
     */
    public function setSmoke($smoke)
    {
        $this->smoke = $smoke;
    
        return $this;
    }

    /**
     * Get smoke
     *
     * @return string 
     */
    public function getSmoke()
    {
        return $this->smoke;
    }

    /**
     * Set alcohol
     *
     * @param string $alcohol
     * @return Patient
     */
    public function setAlcohol($alcohol)
    {
        $this->alcohol = $alcohol;
    
        return $this;
    }

    /**
     * Get alcohol
     *
     * @return string 
     */
    public function getAlcohol()
    {
        return $this->alcohol;
    }

    /**
     * Set dateEnrolled
     *
     * @param string $dateEnrolled
     * @return Patient
     */
    public function setDateEnrolled($dateEnrolled)
    {
        $this->dateEnrolled = $dateEnrolled;
    
        return $this;
    }

    /**
     * Get dateEnrolled
     *
     * @return string 
     */
    public function getDateEnrolled()
    {
        return $this->dateEnrolled;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return Patient
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
     * Set supportedBy
     *
     * @param string $supportedBy
     * @return Patient
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
     * Set timestamp
     *
     * @param string $timestamp
     * @return Patient
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
     * Set facilityCode
     *
     * @param string $facilityCode
     * @return Patient
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
     * Set service
     *
     * @param string $service
     * @return Patient
     */
    public function setService($service)
    {
        $this->service = $service;
    
        return $this;
    }

    /**
     * Get service
     *
     * @return string 
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set startRegimen
     *
     * @param string $startRegimen
     * @return Patient
     */
    public function setStartRegimen($startRegimen)
    {
        $this->startRegimen = $startRegimen;
    
        return $this;
    }

    /**
     * Get startRegimen
     *
     * @return string 
     */
    public function getStartRegimen()
    {
        return $this->startRegimen;
    }

    /**
     * Set startRegimenDate
     *
     * @param string $startRegimenDate
     * @return Patient
     */
    public function setStartRegimenDate($startRegimenDate)
    {
        $this->startRegimenDate = $startRegimenDate;
    
        return $this;
    }

    /**
     * Get startRegimenDate
     *
     * @return string 
     */
    public function getStartRegimenDate()
    {
        return $this->startRegimenDate;
    }

    /**
     * Set currentStatus
     *
     * @param string $currentStatus
     * @return Patient
     */
    public function setCurrentStatus($currentStatus)
    {
        $this->currentStatus = $currentStatus;
    
        return $this;
    }

    /**
     * Get currentStatus
     *
     * @return string 
     */
    public function getCurrentStatus()
    {
        return $this->currentStatus;
    }

    /**
     * Set migrationId
     *
     * @param string $migrationId
     * @return Patient
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
     * Set machineCode
     *
     * @param string $machineCode
     * @return Patient
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
     * Set smsConsent
     *
     * @param string $smsConsent
     * @return Patient
     */
    public function setSmsConsent($smsConsent)
    {
        $this->smsConsent = $smsConsent;
    
        return $this;
    }

    /**
     * Get smsConsent
     *
     * @return string 
     */
    public function getSmsConsent()
    {
        return $this->smsConsent;
    }

    /**
     * Set partnerStatus
     *
     * @param string $partnerStatus
     * @return Patient
     */
    public function setPartnerStatus($partnerStatus)
    {
        $this->partnerStatus = $partnerStatus;
    
        return $this;
    }

    /**
     * Get partnerStatus
     *
     * @return string 
     */
    public function getPartnerStatus()
    {
        return $this->partnerStatus;
    }

    /**
     * Set fplan
     *
     * @param string $fplan
     * @return Patient
     */
    public function setFplan($fplan)
    {
        $this->fplan = $fplan;
    
        return $this;
    }

    /**
     * Get fplan
     *
     * @return string 
     */
    public function getFplan()
    {
        return $this->fplan;
    }

    /**
     * Set tbphase
     *
     * @param string $tbphase
     * @return Patient
     */
    public function setTbphase($tbphase)
    {
        $this->tbphase = $tbphase;
    
        return $this;
    }

    /**
     * Get tbphase
     *
     * @return string 
     */
    public function getTbphase()
    {
        return $this->tbphase;
    }

    /**
     * Set startphase
     *
     * @param string $startphase
     * @return Patient
     */
    public function setStartphase($startphase)
    {
        $this->startphase = $startphase;
    
        return $this;
    }

    /**
     * Get startphase
     *
     * @return string 
     */
    public function getStartphase()
    {
        return $this->startphase;
    }

    /**
     * Set endphase
     *
     * @param string $endphase
     * @return Patient
     */
    public function setEndphase($endphase)
    {
        $this->endphase = $endphase;
    
        return $this;
    }

    /**
     * Get endphase
     *
     * @return string 
     */
    public function getEndphase()
    {
        return $this->endphase;
    }

    /**
     * Set disclosure
     *
     * @param string $disclosure
     * @return Patient
     */
    public function setDisclosure($disclosure)
    {
        $this->disclosure = $disclosure;
    
        return $this;
    }

    /**
     * Get disclosure
     *
     * @return string 
     */
    public function getDisclosure()
    {
        return $this->disclosure;
    }

    /**
     * Set nonCommun
     *
     * @param string $nonCommun
     * @return Patient
     */
    public function setNonCommun($nonCommun)
    {
        $this->nonCommun = $nonCommun;
    
        return $this;
    }

    /**
     * Get nonCommun
     *
     * @return string 
     */
    public function getNonCommun()
    {
        return $this->nonCommun;
    }

    /**
     * Set statusChangeDate
     *
     * @param string $statusChangeDate
     * @return Patient
     */
    public function setStatusChangeDate($statusChangeDate)
    {
        $this->statusChangeDate = $statusChangeDate;
    
        return $this;
    }

    /**
     * Get statusChangeDate
     *
     * @return string 
     */
    public function getStatusChangeDate()
    {
        return $this->statusChangeDate;
    }

    /**
     * Set partnerType
     *
     * @param string $partnerType
     * @return Patient
     */
    public function setPartnerType($partnerType)
    {
        $this->partnerType = $partnerType;
    
        return $this;
    }

    /**
     * Get partnerType
     *
     * @return string 
     */
    public function getPartnerType()
    {
        return $this->partnerType;
    }

    /**
     * Set supportGroup
     *
     * @param string $supportGroup
     * @return Patient
     */
    public function setSupportGroup($supportGroup)
    {
        $this->supportGroup = $supportGroup;
    
        return $this;
    }

    /**
     * Get supportGroup
     *
     * @return string 
     */
    public function getSupportGroup()
    {
        return $this->supportGroup;
    }

    /**
     * Set currentRegimen
     *
     * @param string $currentRegimen
     * @return Patient
     */
    public function setCurrentRegimen($currentRegimen)
    {
        $this->currentRegimen = $currentRegimen;
    
        return $this;
    }

    /**
     * Get currentRegimen
     *
     * @return string 
     */
    public function getCurrentRegimen()
    {
        return $this->currentRegimen;
    }

    /**
     * Set startRegimenMergedFrom
     *
     * @param string $startRegimenMergedFrom
     * @return Patient
     */
    public function setStartRegimenMergedFrom($startRegimenMergedFrom)
    {
        $this->startRegimenMergedFrom = $startRegimenMergedFrom;
    
        return $this;
    }

    /**
     * Get startRegimenMergedFrom
     *
     * @return string 
     */
    public function getStartRegimenMergedFrom()
    {
        return $this->startRegimenMergedFrom;
    }

    /**
     * Set currentRegimenMergedFrom
     *
     * @param string $currentRegimenMergedFrom
     * @return Patient
     */
    public function setCurrentRegimenMergedFrom($currentRegimenMergedFrom)
    {
        $this->currentRegimenMergedFrom = $currentRegimenMergedFrom;
    
        return $this;
    }

    /**
     * Get currentRegimenMergedFrom
     *
     * @return string 
     */
    public function getCurrentRegimenMergedFrom()
    {
        return $this->currentRegimenMergedFrom;
    }

    /**
     * Set nextappointment
     *
     * @param string $nextappointment
     * @return Patient
     */
    public function setNextappointment($nextappointment)
    {
        $this->nextappointment = $nextappointment;
    
        return $this;
    }

    /**
     * Get nextappointment
     *
     * @return string 
     */
    public function getNextappointment()
    {
        return $this->nextappointment;
    }

    /**
     * Set startHeight
     *
     * @param string $startHeight
     * @return Patient
     */
    public function setStartHeight($startHeight)
    {
        $this->startHeight = $startHeight;
    
        return $this;
    }

    /**
     * Get startHeight
     *
     * @return string 
     */
    public function getStartHeight()
    {
        return $this->startHeight;
    }

    /**
     * Set startWeight
     *
     * @param string $startWeight
     * @return Patient
     */
    public function setStartWeight($startWeight)
    {
        $this->startWeight = $startWeight;
    
        return $this;
    }

    /**
     * Get startWeight
     *
     * @return string 
     */
    public function getStartWeight()
    {
        return $this->startWeight;
    }

    /**
     * Set startBsa
     *
     * @param string $startBsa
     * @return Patient
     */
    public function setStartBsa($startBsa)
    {
        $this->startBsa = $startBsa;
    
        return $this;
    }

    /**
     * Get startBsa
     *
     * @return string 
     */
    public function getStartBsa()
    {
        return $this->startBsa;
    }

    /**
     * Set transferFrom
     *
     * @param string $transferFrom
     * @return Patient
     */
    public function setTransferFrom($transferFrom)
    {
        $this->transferFrom = $transferFrom;
    
        return $this;
    }

    /**
     * Get transferFrom
     *
     * @return string 
     */
    public function getTransferFrom()
    {
        return $this->transferFrom;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return Patient
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
     * Set drugAllergies
     *
     * @param string $drugAllergies
     * @return Patient
     */
    public function setDrugAllergies($drugAllergies)
    {
        $this->drugAllergies = $drugAllergies;
    
        return $this;
    }

    /**
     * Get drugAllergies
     *
     * @return string 
     */
    public function getDrugAllergies()
    {
        return $this->drugAllergies;
    }

    /**
     * Set tbTest
     *
     * @param integer $tbTest
     * @return Patient
     */
    public function setTbTest($tbTest)
    {
        $this->tbTest = $tbTest;
    
        return $this;
    }

    /**
     * Get tbTest
     *
     * @return integer 
     */
    public function getTbTest()
    {
        return $this->tbTest;
    }

    /**
     * Set pepReason
     *
     * @param integer $pepReason
     * @return Patient
     */
    public function setPepReason($pepReason)
    {
        $this->pepReason = $pepReason;
    
        return $this;
    }

    /**
     * Get pepReason
     *
     * @return integer 
     */
    public function getPepReason()
    {
        return $this->pepReason;
    }

    /**
     * Set whoStage
     *
     * @param integer $whoStage
     * @return Patient
     */
    public function setWhoStage($whoStage)
    {
        $this->whoStage = $whoStage;
    
        return $this;
    }

    /**
     * Get whoStage
     *
     * @return integer 
     */
    public function getWhoStage()
    {
        return $this->whoStage;
    }

    /**
     * Set drugProphylaxis
     *
     * @param string $drugProphylaxis
     * @return Patient
     */
    public function setDrugProphylaxis($drugProphylaxis)
    {
        $this->drugProphylaxis = $drugProphylaxis;
    
        return $this;
    }

    /**
     * Get drugProphylaxis
     *
     * @return string 
     */
    public function getDrugProphylaxis()
    {
        return $this->drugProphylaxis;
    }

    /**
     * Set cccStoreSp
     *
     * @param \models\Entities\CccStoreServicePoint $cccStoreSp
     * @return Patient
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
