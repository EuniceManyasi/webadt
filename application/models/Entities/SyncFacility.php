<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * SyncFacility
 *
 * @Table(name="sync_facility")
 * @Entity
 */
class SyncFacility
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
     * @Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="code", type="string", length=15, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @Column(name="category", type="string", length=15, nullable=true)
     */
    private $category;

    /**
     * @var string
     *
     * @Column(name="sponsors", type="string", length=255, nullable=true)
     */
    private $sponsors;

    /**
     * @var string
     *
     * @Column(name="services", type="string", length=255, nullable=true)
     */
    private $services;

    /**
     * @var integer
     *
     * @Column(name="manager_id", type="integer", nullable=true)
     */
    private $managerId;

    /**
     * @var integer
     *
     * @Column(name="district_id", type="integer", nullable=false)
     */
    private $districtId;

    /**
     * @var integer
     *
     * @Column(name="address_id", type="integer", nullable=true)
     */
    private $addressId;

    /**
     * @var integer
     *
     * @Column(name="parent_id", type="integer", nullable=true)
     */
    private $parentId;

    /**
     * @var boolean
     *
     * @Column(name="ordering", type="boolean", nullable=false)
     */
    private $ordering;

    /**
     * @var string
     *
     * @Column(name="affiliation", type="string", length=255, nullable=true)
     */
    private $affiliation;

    /**
     * @var boolean
     *
     * @Column(name="service_point", type="boolean", nullable=false)
     */
    private $servicePoint;

    /**
     * @var integer
     *
     * @Column(name="county_id", type="integer", nullable=true)
     */
    private $countyId;

    /**
     * @var integer
     *
     * @Column(name="hcsm_id", type="integer", nullable=true)
     */
    private $hcsmId;

    /**
     * @var string
     *
     * @Column(name="keph_level", type="string", length=25, nullable=true)
     */
    private $kephLevel;

    /**
     * @var string
     *
     * @Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var integer
     *
     * @Column(name="affiliate_organization_id", type="integer", nullable=true)
     */
    private $affiliateOrganizationId;


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
     * @return SyncFacility
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
     * Set code
     *
     * @param string $code
     * @return SyncFacility
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
     * Set category
     *
     * @param string $category
     * @return SyncFacility
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set sponsors
     *
     * @param string $sponsors
     * @return SyncFacility
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
     * Set services
     *
     * @param string $services
     * @return SyncFacility
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
     * Set managerId
     *
     * @param integer $managerId
     * @return SyncFacility
     */
    public function setManagerId($managerId)
    {
        $this->managerId = $managerId;
    
        return $this;
    }

    /**
     * Get managerId
     *
     * @return integer 
     */
    public function getManagerId()
    {
        return $this->managerId;
    }

    /**
     * Set districtId
     *
     * @param integer $districtId
     * @return SyncFacility
     */
    public function setDistrictId($districtId)
    {
        $this->districtId = $districtId;
    
        return $this;
    }

    /**
     * Get districtId
     *
     * @return integer 
     */
    public function getDistrictId()
    {
        return $this->districtId;
    }

    /**
     * Set addressId
     *
     * @param integer $addressId
     * @return SyncFacility
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;
    
        return $this;
    }

    /**
     * Get addressId
     *
     * @return integer 
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return SyncFacility
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
    
        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set ordering
     *
     * @param boolean $ordering
     * @return SyncFacility
     */
    public function setOrdering($ordering)
    {
        $this->ordering = $ordering;
    
        return $this;
    }

    /**
     * Get ordering
     *
     * @return boolean 
     */
    public function getOrdering()
    {
        return $this->ordering;
    }

    /**
     * Set affiliation
     *
     * @param string $affiliation
     * @return SyncFacility
     */
    public function setAffiliation($affiliation)
    {
        $this->affiliation = $affiliation;
    
        return $this;
    }

    /**
     * Get affiliation
     *
     * @return string 
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * Set servicePoint
     *
     * @param boolean $servicePoint
     * @return SyncFacility
     */
    public function setServicePoint($servicePoint)
    {
        $this->servicePoint = $servicePoint;
    
        return $this;
    }

    /**
     * Get servicePoint
     *
     * @return boolean 
     */
    public function getServicePoint()
    {
        return $this->servicePoint;
    }

    /**
     * Set countyId
     *
     * @param integer $countyId
     * @return SyncFacility
     */
    public function setCountyId($countyId)
    {
        $this->countyId = $countyId;
    
        return $this;
    }

    /**
     * Get countyId
     *
     * @return integer 
     */
    public function getCountyId()
    {
        return $this->countyId;
    }

    /**
     * Set hcsmId
     *
     * @param integer $hcsmId
     * @return SyncFacility
     */
    public function setHcsmId($hcsmId)
    {
        $this->hcsmId = $hcsmId;
    
        return $this;
    }

    /**
     * Get hcsmId
     *
     * @return integer 
     */
    public function getHcsmId()
    {
        return $this->hcsmId;
    }

    /**
     * Set kephLevel
     *
     * @param string $kephLevel
     * @return SyncFacility
     */
    public function setKephLevel($kephLevel)
    {
        $this->kephLevel = $kephLevel;
    
        return $this;
    }

    /**
     * Get kephLevel
     *
     * @return string 
     */
    public function getKephLevel()
    {
        return $this->kephLevel;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return SyncFacility
     */
    public function setLocation($location)
    {
        $this->location = $location;
    
        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set affiliateOrganizationId
     *
     * @param integer $affiliateOrganizationId
     * @return SyncFacility
     */
    public function setAffiliateOrganizationId($affiliateOrganizationId)
    {
        $this->affiliateOrganizationId = $affiliateOrganizationId;
    
        return $this;
    }

    /**
     * Get affiliateOrganizationId
     *
     * @return integer 
     */
    public function getAffiliateOrganizationId()
    {
        return $this->affiliateOrganizationId;
    }
}
