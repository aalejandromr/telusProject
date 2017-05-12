<?php

namespace Telus\Example\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sf2DataFormat
 */
class Sf2DataFormat
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $sf2FormatName;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @var string
     */
    private $sf2FormatPrettyName;

    /**
     * @var boolean
     */
    private $sf2PbdEnabled;


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
     * Set sf2FormatName
     *
     * @param string $sf2FormatName
     * @return Sf2DataFormat
     */
    public function setSf2FormatName($sf2FormatName)
    {
        $this->sf2FormatName = $sf2FormatName;

        return $this;
    }

    /**
     * Get sf2FormatName
     *
     * @return string 
     */
    public function getSf2FormatName()
    {
        return $this->sf2FormatName;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Sf2DataFormat
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     * @return Sf2DataFormat
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set sf2FormatPrettyName
     *
     * @param string $sf2FormatPrettyName
     * @return Sf2DataFormat
     */
    public function setSf2FormatPrettyName($sf2FormatPrettyName)
    {
        $this->sf2FormatPrettyName = $sf2FormatPrettyName;

        return $this;
    }

    /**
     * Get sf2FormatPrettyName
     *
     * @return string 
     */
    public function getSf2FormatPrettyName()
    {
        return $this->sf2FormatPrettyName;
    }

    /**
     * Set sf2PbdEnabled
     *
     * @param boolean $sf2PbdEnabled
     * @return Sf2DataFormat
     */
    public function setSf2PbdEnabled($sf2PbdEnabled)
    {
        $this->sf2PbdEnabled = $sf2PbdEnabled;

        return $this;
    }

    /**
     * Get sf2PbdEnabled
     *
     * @return boolean 
     */
    public function getSf2PbdEnabled()
    {
        return $this->sf2PbdEnabled;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        // Add your code here
        $this->createdAt = new \DateTime();
    }

    /**
     * @ORM\PrePersist
     */
    public function setUpdatedAtValue()
    {
        // Add your code here
        $this->updatedAt = new \DateTime();
    }
}
