<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * Brand
 *
 * @Table(name="brand")
 * @Entity
 */
class Brand
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
     * @Column(name="drug_id", type="text", nullable=false)
     */
    private $drugId;

    /**
     * @var string
     *
     * @Column(name="brand", type="text", nullable=false)
     */
    private $brand;

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
     * Set drugId
     *
     * @param string $drugId
     * @return Brand
     */
    public function setDrugId($drugId)
    {
        $this->drugId = $drugId;
    
        return $this;
    }

    /**
     * Get drugId
     *
     * @return string 
     */
    public function getDrugId()
    {
        return $this->drugId;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    
        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Set cccStoreSp
     *
     * @param \models\Entities\CccStoreServicePoint $cccStoreSp
     * @return Brand
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
