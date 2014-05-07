<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * GitLog
 *
 * @Table(name="git_log")
 * @Entity
 */
class GitLog
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
     * @Column(name="hash_value", type="string", length=255, nullable=false)
     */
    private $hashValue;

    /**
     * @var \DateTime
     *
     * @Column(name="update_time", type="datetime", nullable=false)
     */
    private $updateTime;


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
     * Set hashValue
     *
     * @param string $hashValue
     * @return GitLog
     */
    public function setHashValue($hashValue)
    {
        $this->hashValue = $hashValue;
    
        return $this;
    }

    /**
     * Get hashValue
     *
     * @return string 
     */
    public function getHashValue()
    {
        return $this->hashValue;
    }

    /**
     * Set updateTime
     *
     * @param \DateTime $updateTime
     * @return GitLog
     */
    public function setUpdateTime($updateTime)
    {
        $this->updateTime = $updateTime;
    
        return $this;
    }

    /**
     * Get updateTime
     *
     * @return \DateTime 
     */
    public function getUpdateTime()
    {
        return $this->updateTime;
    }
}
