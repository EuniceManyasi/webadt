<?php

namespace models\Entities;

use Doctrine\Mapping as ORM;

/**
 * PatientAppointment
 *
 * @Table(name="patient_appointment")
 * @Entity
 */
class PatientAppointment
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
     * @Column(name="patient", type="string", length=20, nullable=false)
     */
    private $patient;

    /**
     * @var string
     *
     * @Column(name="appointment", type="string", length=32, nullable=false)
     */
    private $appointment;

    /**
     * @var string
     *
     * @Column(name="facility", type="string", length=10, nullable=false)
     */
    private $facility;

    /**
     * @var string
     *
     * @Column(name="machine_code", type="string", length=10, nullable=false)
     */
    private $machineCode;


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
     * Set patient
     *
     * @param string $patient
     * @return PatientAppointment
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
    
        return $this;
    }

    /**
     * Get patient
     *
     * @return string 
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * Set appointment
     *
     * @param string $appointment
     * @return PatientAppointment
     */
    public function setAppointment($appointment)
    {
        $this->appointment = $appointment;
    
        return $this;
    }

    /**
     * Get appointment
     *
     * @return string 
     */
    public function getAppointment()
    {
        return $this->appointment;
    }

    /**
     * Set facility
     *
     * @param string $facility
     * @return PatientAppointment
     */
    public function setFacility($facility)
    {
        $this->facility = $facility;
    
        return $this;
    }

    /**
     * Get facility
     *
     * @return string 
     */
    public function getFacility()
    {
        return $this->facility;
    }

    /**
     * Set machineCode
     *
     * @param string $machineCode
     * @return PatientAppointment
     */
    public function setMachineCode($machineCode)
    {
        $this->machineCode = $machineCode;
    
        return $this;
    }

    /**
     * Get machineCode
     *
     * @return string 
     */
    public function getMachineCode()
    {
        return $this->machineCode;
    }
}
