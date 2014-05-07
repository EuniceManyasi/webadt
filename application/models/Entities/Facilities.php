<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * Facilities
 *
 * @Table(name="facilities")
 * @Entity
 */
class Facilities
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
     * @Column(name="facilitycode", type="integer", nullable=false)
     */
    private $facilitycode;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @Column(name="facilitytype", type="integer", nullable=false)
     */
    private $facilitytype;

    /**
     * @var integer
     *
     * @Column(name="district", type="integer", nullable=false)
     */
    private $district;

    /**
     * @var integer
     *
     * @Column(name="county", type="integer", nullable=false)
     */
    private $county;

    /**
     * @var integer
     *
     * @Column(name="flag", type="integer", nullable=false)
     */
    private $flag;

    /**
     * @var string
     *
     * @Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @Column(name="phone", type="string", length=50, nullable=false)
     */
    private $phone;

    /**
     * @var integer
     *
     * @Column(name="adult_age", type="integer", nullable=false)
     */
    private $adultAge;

    /**
     * @var string
     *
     * @Column(name="weekday_max", type="string", length=10, nullable=false)
     */
    private $weekdayMax;

    /**
     * @var string
     *
     * @Column(name="weekend_max", type="string", length=10, nullable=false)
     */
    private $weekendMax;

    /**
     * @var integer
     *
     * @Column(name="supported_by", type="integer", nullable=false)
     */
    private $supportedBy;

    /**
     * @var integer
     *
     * @Column(name="service_art", type="integer", nullable=false)
     */
    private $serviceArt;

    /**
     * @var integer
     *
     * @Column(name="service_pmtct", type="integer", nullable=false)
     */
    private $servicePmtct;

    /**
     * @var integer
     *
     * @Column(name="service_pep", type="integer", nullable=false)
     */
    private $servicePep;

    /**
     * @var integer
     *
     * @Column(name="supplied_by", type="integer", nullable=false)
     */
    private $suppliedBy;

    /**
     * @var string
     *
     * @Column(name="parent", type="string", length=10, nullable=false)
     */
    private $parent;

    /**
     * @var integer
     *
     * @Column(name="map", type="integer", nullable=false)
     */
    private $map;


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
     * Set facilitycode
     *
     * @param integer $facilitycode
     * @return Facilities
     */
    public function setFacilitycode($facilitycode)
    {
        $this->facilitycode = $facilitycode;
    
        return $this;
    }

    /**
     * Get facilitycode
     *
     * @return integer 
     */
    public function getFacilitycode()
    {
        return $this->facilitycode;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Facilities
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
     * Set facilitytype
     *
     * @param integer $facilitytype
     * @return Facilities
     */
    public function setFacilitytype($facilitytype)
    {
        $this->facilitytype = $facilitytype;
    
        return $this;
    }

    /**
     * Get facilitytype
     *
     * @return integer 
     */
    public function getFacilitytype()
    {
        return $this->facilitytype;
    }

    /**
     * Set district
     *
     * @param integer $district
     * @return Facilities
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    
        return $this;
    }

    /**
     * Get district
     *
     * @return integer 
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Set county
     *
     * @param integer $county
     * @return Facilities
     */
    public function setCounty($county)
    {
        $this->county = $county;
    
        return $this;
    }

    /**
     * Get county
     *
     * @return integer 
     */
    public function getCounty()
    {
        return $this->county;
    }

    /**
     * Set flag
     *
     * @param integer $flag
     * @return Facilities
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    
        return $this;
    }

    /**
     * Get flag
     *
     * @return integer 
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Facilities
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     * @return Facilities
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
     * Set adultAge
     *
     * @param integer $adultAge
     * @return Facilities
     */
    public function setAdultAge($adultAge)
    {
        $this->adultAge = $adultAge;
    
        return $this;
    }

    /**
     * Get adultAge
     *
     * @return integer 
     */
    public function getAdultAge()
    {
        return $this->adultAge;
    }

    /**
     * Set weekdayMax
     *
     * @param string $weekdayMax
     * @return Facilities
     */
    public function setWeekdayMax($weekdayMax)
    {
        $this->weekdayMax = $weekdayMax;
    
        return $this;
    }

    /**
     * Get weekdayMax
     *
     * @return string 
     */
    public function getWeekdayMax()
    {
        return $this->weekdayMax;
    }

    /**
     * Set weekendMax
     *
     * @param string $weekendMax
     * @return Facilities
     */
    public function setWeekendMax($weekendMax)
    {
        $this->weekendMax = $weekendMax;
    
        return $this;
    }

    /**
     * Get weekendMax
     *
     * @return string 
     */
    public function getWeekendMax()
    {
        return $this->weekendMax;
    }

    /**
     * Set supportedBy
     *
     * @param integer $supportedBy
     * @return Facilities
     */
    public function setSupportedBy($supportedBy)
    {
        $this->supportedBy = $supportedBy;
    
        return $this;
    }

    /**
     * Get supportedBy
     *
     * @return integer 
     */
    public function getSupportedBy()
    {
        return $this->supportedBy;
    }

    /**
     * Set serviceArt
     *
     * @param integer $serviceArt
     * @return Facilities
     */
    public function setServiceArt($serviceArt)
    {
        $this->serviceArt = $serviceArt;
    
        return $this;
    }

    /**
     * Get serviceArt
     *
     * @return integer 
     */
    public function getServiceArt()
    {
        return $this->serviceArt;
    }

    /**
     * Set servicePmtct
     *
     * @param integer $servicePmtct
     * @return Facilities
     */
    public function setServicePmtct($servicePmtct)
    {
        $this->servicePmtct = $servicePmtct;
    
        return $this;
    }

    /**
     * Get servicePmtct
     *
     * @return integer 
     */
    public function getServicePmtct()
    {
        return $this->servicePmtct;
    }

    /**
     * Set servicePep
     *
     * @param integer $servicePep
     * @return Facilities
     */
    public function setServicePep($servicePep)
    {
        $this->servicePep = $servicePep;
    
        return $this;
    }

    /**
     * Get servicePep
     *
     * @return integer 
     */
    public function getServicePep()
    {
        return $this->servicePep;
    }

    /**
     * Set suppliedBy
     *
     * @param integer $suppliedBy
     * @return Facilities
     */
    public function setSuppliedBy($suppliedBy)
    {
        $this->suppliedBy = $suppliedBy;
    
        return $this;
    }

    /**
     * Get suppliedBy
     *
     * @return integer 
     */
    public function getSuppliedBy()
    {
        return $this->suppliedBy;
    }

    /**
     * Set parent
     *
     * @param string $parent
     * @return Facilities
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    
        return $this;
    }

    /**
     * Get parent
     *
     * @return string 
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set map
     *
     * @param integer $map
     * @return Facilities
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
}
