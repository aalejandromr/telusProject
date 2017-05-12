<?php

namespace Telus\Example\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sf2PastebinSecurity
 */
class Sf2PastebinSecurity
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sf2PbsSecurityLevel;

    /**
     * @var string
     */
    private $sf2PbsSecurityValue;


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
     * Set sf2PbsSecurityLevel
     *
     * @param string $sf2PbsSecurityLevel
     * @return Sf2PastebinSecurity
     */
    public function setSf2PbsSecurityLevel($sf2PbsSecurityLevel)
    {
        $this->sf2PbsSecurityLevel = $sf2PbsSecurityLevel;

        return $this;
    }

    /**
     * Get sf2PbsSecurityLevel
     *
     * @return string 
     */
    public function getSf2PbsSecurityLevel()
    {
        return $this->sf2PbsSecurityLevel;
    }

    /**
     * Set sf2PbsSecurityValue
     *
     * @param string $sf2PbsSecurityValue
     * @return Sf2PastebinSecurity
     */
    public function setSf2PbsSecurityValue($sf2PbsSecurityValue)
    {
        $this->sf2PbsSecurityValue = $sf2PbsSecurityValue;

        return $this;
    }

    /**
     * Get sf2PbsSecurityValue
     *
     * @return string 
     */
    public function getSf2PbsSecurityValue()
    {
        return $this->sf2PbsSecurityValue;
    }
}
