<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * PasswordLog
 *
 * @Table(name="password_log")
 * @Entity
 */
class PasswordLog
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
     * @Column(name="user_id", type="string", length=150, nullable=false)
     */
    private $userId;

    /**
     * @var string
     *
     * @Column(name="password", type="string", length=150, nullable=false)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @Column(name="date_changed", type="datetime", nullable=false)
     */
    private $dateChanged;


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
     * Set userId
     *
     * @param string $userId
     * @return PasswordLog
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
     * Set password
     *
     * @param string $password
     * @return PasswordLog
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
     * Set dateChanged
     *
     * @param \DateTime $dateChanged
     * @return PasswordLog
     */
    public function setDateChanged($dateChanged)
    {
        $this->dateChanged = $dateChanged;
    
        return $this;
    }

    /**
     * Get dateChanged
     *
     * @return \DateTime 
     */
    public function getDateChanged()
    {
        return $this->dateChanged;
    }
}
