<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * MapsItem
 *
 * @Table(name="maps_item")
 * @Entity
 */
class MapsItem
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
     * @Column(name="total", type="integer", nullable=false)
     */
    private $total;

    /**
     * @var integer
     *
     * @Column(name="regimen_id", type="integer", nullable=false)
     */
    private $regimenId;

    /**
     * @var integer
     *
     * @Column(name="maps_id", type="integer", nullable=false)
     */
    private $mapsId;


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
     * Set total
     *
     * @param integer $total
     * @return MapsItem
     */
    public function setTotal($total)
    {
        $this->total = $total;
    
        return $this;
    }

    /**
     * Get total
     *
     * @return integer 
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set regimenId
     *
     * @param integer $regimenId
     * @return MapsItem
     */
    public function setRegimenId($regimenId)
    {
        $this->regimenId = $regimenId;
    
        return $this;
    }

    /**
     * Get regimenId
     *
     * @return integer 
     */
    public function getRegimenId()
    {
        return $this->regimenId;
    }

    /**
     * Set mapsId
     *
     * @param integer $mapsId
     * @return MapsItem
     */
    public function setMapsId($mapsId)
    {
        $this->mapsId = $mapsId;
    
        return $this;
    }

    /**
     * Get mapsId
     *
     * @return integer 
     */
    public function getMapsId()
    {
        return $this->mapsId;
    }
}
