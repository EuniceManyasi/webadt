<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * OpportunisticInfection
 *
 * @Table(name="opportunistic_infection")
 * @Entity
 */
class OpportunisticInfection
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
     * @Column(name="indication", type="string", length=50, nullable=false)
     */
    private $indication;

    /**
     * @var string
     *
     * @Column(name="active", type="string", length=2, nullable=false)
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
     * @return OpportunisticInfection
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
     * Set indication
     *
     * @param string $indication
     * @return OpportunisticInfection
     */
    public function setIndication($indication)
    {
        $this->indication = $indication;
    
        return $this;
    }

    /**
     * Get indication
     *
     * @return string 
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * Set active
     *
     * @param string $active
     * @return OpportunisticInfection
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
     * Set cccStoreSp
     *
     * @param \models\Entities\CccStoreServicePoint $cccStoreSp
     * @return OpportunisticInfection
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
