<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * Users
 *
 * @Table(name="users")
 * @Entity
 */
class Users
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
     * @Column(name="Name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="Username", type="string", length=30, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @Column(name="Password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var string
     *
     * @Column(name="Access_Level", type="string", length=1, nullable=false)
     */
    private $accessLevel;

    /**
     * @var string
     *
     * @Column(name="Facility_Code", type="string", length=10, nullable=false)
     */
    private $facilityCode;

    /**
     * @var string
     *
     * @Column(name="Created_By", type="string", length=5, nullable=false)
     */
    private $createdBy;

    /**
     * @var string
     *
     * @Column(name="Time_Created", type="string", length=32, nullable=false)
     */
    private $timeCreated;

    /**
     * @var string
     *
     * @Column(name="Phone_Number", type="string", length=50, nullable=false)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @Column(name="Email_Address", type="string", length=50, nullable=false)
     */
    private $emailAddress;

    /**
     * @var string
     *
     * @Column(name="Active", type="string", length=2, nullable=false)
     */
    private $active;

    /**
     * @var string
     *
     * @Column(name="Signature", type="string", length=100, nullable=false)
     */
    private $signature;

    /**
     * @var integer
     *
     * @Column(name="map", type="integer", nullable=false)
     */
    private $map;

    /**
     * @var integer
     *
     * @Column(name="ccc_store_sp", type="integer", nullable=false)
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
     * Set name
     *
     * @param string $name
     * @return Users
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Users
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Users
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set accessLevel
     *
     * @param string $accessLevel
     * @return Users
     */
    public function setAccessLevel($accessLevel)
    {
        $this->accessLevel = $accessLevel;
    
        return $this;
    }

    /**
     * Get accessLevel
     *
     * @return string 
     */
    public function getAccessLevel()
    {
        return $this->accessLevel;
    }

    /**
     * Set facilityCode
     *
     * @param string $facilityCode
     * @return Users
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
     * Set createdBy
     *
     * @param string $createdBy
     * @return Users
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set timeCreated
     *
     * @param string $timeCreated
     * @return Users
     */
    public function setTimeCreated($timeCreated)
    {
        $this->timeCreated = $timeCreated;
    
        return $this;
    }

    /**
     * Get timeCreated
     *
     * @return string 
     */
    public function getTimeCreated()
    {
        return $this->timeCreated;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     * @return Users
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    
        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string 
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set emailAddress
     *
     * @param string $emailAddress
     * @return Users
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    
        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string 
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set active
     *
     * @param string $active
     * @return Users
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return string 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set signature
     *
     * @param string $signature
     * @return Users
     */
    public function setSignature($signature)
    {
        $this->signature = $signature;
    
        return $this;
    }

    /**
     * Get signature
     *
     * @return string 
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Set map
     *
     * @param integer $map
     * @return Users
     */
    public function setMap($map)
    {
        $this->map = $map;
    
        return $this;
    }

    /**
     * Get map
     *
     * @return integer 
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set cccStoreSp
     *
     * @param integer $cccStoreSp
     * @return Users
     */
    public function setCccStoreSp($cccStoreSp)
    {
        $this->cccStoreSp = $cccStoreSp;
    
        return $this;
    }

    /**
     * Get cccStoreSp
     *
     * @return integer 
     */
    public function getCccStoreSp()
    {
        return $this->cccStoreSp;
    }
}
