<?php

namespace Telus\Example\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sf2Pastebin
 */
class Sf2Pastebin
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $sf2PbOwnerId;

    /**
     * @var string
     */
    private $sf2PbHash;

    /**
     * @var boolean
     */
    private $sf2PbEnabled;

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
    private $sf2PbData;

    /**
     * @var \Telus\Example\MyBundle\Entity\Sf2DataFormat
     */
    private $sf2PbFormat;


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
     * Set sf2PbOwnerId
     *
     * @param integer $sf2PbOwnerId
     * @return Sf2Pastebin
     */
    public function setSf2PbOwnerId($sf2PbOwnerId)
    {
        $this->sf2PbOwnerId = $sf2PbOwnerId;

        return $this;
    }

    /**
     * Get sf2PbOwnerId
     *
     * @return integer 
     */
    public function getSf2PbOwnerId()
    {
        return $this->sf2PbOwnerId;
    }

    /**
     * Set sf2PbHash
     *
     * @param string $sf2PbHash
     * @return Sf2Pastebin
     */
    public function setSf2PbHash($sf2PbHash)
    {
        $this->sf2PbHash = $sf2PbHash;

        return $this;
    }

    /**
     * Get sf2PbHash
     *
     * @return string 
     */
    public function getSf2PbHash()
    {
        return $this->sf2PbHash;
    }

    /**
     * Set sf2PbEnabled
     *
     * @param boolean $sf2PbEnabled
     * @return Sf2Pastebin
     */
    public function setSf2PbEnabled($sf2PbEnabled)
    {
        $this->sf2PbEnabled = $sf2PbEnabled;

        return $this;
    }

    /**
     * Get sf2PbEnabled
     *
     * @return boolean 
     */
    public function getSf2PbEnabled()
    {
        return $this->sf2PbEnabled;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Sf2Pastebin
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
     * @return Sf2Pastebin
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
     * Set sf2PbData
     *
     * @param string $sf2PbData
     * @return Sf2Pastebin
     */
    public function setSf2PbData($sf2PbData)
    {
        $this->sf2PbData = $sf2PbData;

        return $this;
    }

    /**
     * Get sf2PbData
     *
     * @return string 
     */
    public function getSf2PbData()
    {
        return $this->sf2PbData;
    }

    /**
     * Set sf2PbFormat
     *
     * @param \Telus\Example\MyBundle\Entity\Sf2DataFormat $sf2PbFormat
     * @return Sf2Pastebin
     */
    public function setSf2PbFormat(\Telus\Example\MyBundle\Entity\Sf2DataFormat $sf2PbFormat = null)
    {
        $this->sf2PbFormat = $sf2PbFormat;

        return $this;
    }

    /**
     * Get sf2PbFormat
     *
     * @return \Telus\Example\MyBundle\Entity\Sf2DataFormat 
     */
    public function getSf2PbFormat()
    {
        return $this->sf2PbFormat;
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
