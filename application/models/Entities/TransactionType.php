<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * TransactionType
 *
 * @Table(name="transaction_type")
 * @Entity
 */
class TransactionType
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
     * @Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @Column(name="desc", type="string", length=150, nullable=false)
     */
    private $desc;

    /**
     * @var integer
     *
     * @Column(name="effect", type="integer", nullable=false)
     */
    private $effect;

    /**
     * @var integer
     *
     * @Column(name="active", type="integer", nullable=false)
     */
    private $active;

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
     * Set name
     *
     * @param string $name
     * @return TransactionType
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
     * Set desc
     *
     * @param string $desc
     * @return TransactionType
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    
        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set effect
     *
     * @param integer $effect
     * @return TransactionType
     */
    public function setEffect($effect)
    {
        $this->effect = $effect;
    
        return $this;
    }

    /**
     * Get effect
     *
     * @return integer 
     */
    public function getEffect()
    {
        return $this->effect;
    }

    /**
     * Set active
     *
     * @param integer $active
     * @return TransactionType
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return integer 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set cccStoreSp
     *
     * @param \models\Entities\CccStoreServicePoint $cccStoreSp
     * @return TransactionType
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
