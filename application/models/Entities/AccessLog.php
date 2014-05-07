<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * AccessLog
 *
 * @Table(name="access_log")
 * @Entity
 */
class AccessLog
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
     * @Column(name="machine_code", type="string", length=150, nullable=false)
     */
    private $machineCode;

    /**
     * @var string
     *
     * @Column(name="user_id", type="string", length=150, nullable=false)
     */
    private $userId;

    /**
     * @var integer
     *
     * @Column(name="access_level", type="integer", nullable=false)
     */
    private $accessLevel;

    /**
     * @var string
     *
     * @Column(name="start_time", type="string", length=50, nullable=false)
     */
    private $startTime;

    /**
     * @var string
     *
     * @Column(name="end_time", type="string", length=50, nullable=false)
     */
    private $endTime;

    /**
     * @var string
     *
     * @Column(name="facility_code", type="string", length=150, nullable=false)
     */
    private $facilityCode;

    /**
     * @var string
     *
     * @Column(name="access_type", type="string", length=100, nullable=false)
     */
    private $accessType;


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
     * Set machineCode
     *
     * @param string $machineCode
     * @return AccessLog
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
     * Set userId
     *
     * @param string $userId
     * @return AccessLog
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return string 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set accessLevel
     *
     * @param integer $accessLevel
     * @return AccessLog
     */
    public function setAccessLevel($accessLevel)
    {
        $this->accessLevel = $accessLevel;
    
        return $this;
    }

    /**
     * Get accessLevel
     *
     * @return integer 
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Set startTime
     *
     * @param string $startTime
     * @return AccessLog
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    
        return $this;
    }

    /**
     * Get startTime
     *
     * @return string 
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Set endTime
     *
     * @param string $endTime
     * @return AccessLog
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    
        return $this;
    }

    /**
     * Get endTime
     *
     * @return string 
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Set facilityCode
     *
     * @param string $facilityCode
     * @return AccessLog
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
     * Set accessType
     *
     * @param string $accessType
     * @return AccessLog
     */
    public function setAccessType($accessType)
    {
        $this->accessType = $accessType;
    
        return $this;
    }

    /**
     * Get accessType
     *
     * @return string 
     */
    public function getAccessType()
    {
        return $this->accessType;
    }
}
