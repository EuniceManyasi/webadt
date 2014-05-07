<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * DeniedLog
 *
 * @Table(name="denied_log")
 * @Entity
 */
class DeniedLog
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
     * @Column(name="ip_address", type="text", nullable=false)
     */
    private $ipAddress;

    /**
     * @var string
     *
     * @Column(name="location", type="string", length=150, nullable=false)
     */
    private $location;

    /**
     * @var string
     *
     * @Column(name="user_id", type="string", length=150, nullable=false)
     */
    private $userId;

    /**
     * @var \DateTime
     *
     * @Column(name="timestamp", type="datetime", nullable=false)
     */
    private $timestamp;


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
     * Set ipAddress
     *
     * @param string $ipAddress
     * @return DeniedLog
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    
        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string 
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return DeniedLog
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
     * Set userId
     *
     * @param string $userId
     * @return DeniedLog
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
     * Set timestamp
     *
     * @param \DateTime $timestamp
     * @return DeniedLog
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    
        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime 
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
}
