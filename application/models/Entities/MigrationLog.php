<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * MigrationLog
 *
 * @Table(name="migration_log")
 * @Entity
 */
class MigrationLog
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
     * @Column(name="source", type="string", length=150, nullable=false)
     */
    private $source;

    /**
     * @var integer
     *
     * @Column(name="last_index", type="integer", nullable=false)
     */
    private $lastIndex;

    /**
     * @var integer
     *
     * @Column(name="count", type="integer", nullable=false)
     */
    private $count;


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
     * Set source
     *
     * @param string $source
     * @return MigrationLog
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
     * Set lastIndex
     *
     * @param integer $lastIndex
     * @return MigrationLog
     */
    public function setLastIndex($lastIndex)
    {
        $this->lastIndex = $lastIndex;
    
        return $this;
    }

    /**
     * Get lastIndex
     *
     * @return integer 
     */
    public function getLastIndex()
    {
        return $this->lastIndex;
    }

    /**
     * Set count
     *
     * @param integer $count
     * @return MigrationLog
     */
    public function setCount($count)
    {
        $this->count = $count;
    
        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }
}
