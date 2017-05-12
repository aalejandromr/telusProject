<?php

namespace Telus\Example\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sf2WsPosition
 */
class Sf2WsPosition
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $swpPovRemoteId;

    /**
     * @var string
     */
    private $swpEngName;

    /**
     * @var string
     */
    private $swpSpnName;

    /**
     * @var integer
     */
    private $swpEmpId;

    /**
     * @var boolean
     */
    private $swpPovActive;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;


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
     * Set swpPovRemoteId
     *
     * @param integer $swpPovRemoteId
     * @return Sf2WsPosition
     */
    public function setSwpPovRemoteId($swpPovRemoteId)
    {
        $this->swpPovRemoteId = $swpPovRemoteId;

        return $this;
    }

    /**
     * Get swpPovRemoteId
     *
     * @return integer 
     */
    public function getSwpPovRemoteId()
    {
        return $this->swpPovRemoteId;
    }

    /**
     * Set swpEngName
     *
     * @param string $swpEngName
     * @return Sf2WsPosition
     */
    public function setSwpEngName($swpEngName)
    {
        $this->swpEngName = $swpEngName;

        return $this;
    }

    /**
     * Get swpEngName
     *
     * @return string 
     */
    public function getSwpEngName()
    {
        return $this->swpEngName;
    }

    /**
     * Set swpSpnName
     *
     * @param string $swpSpnName
     * @return Sf2WsPosition
     */
    public function setSwpSpnName($swpSpnName)
    {
        $this->swpSpnName = $swpSpnName;

        return $this;
    }

    /**
     * Get swpSpnName
     *
     * @return string 
     */
    public function getSwpSpnName()
    {
        return $this->swpSpnName;
    }

    /**
     * Set swpEmpId
     *
     * @param integer $swpEmpId
     * @return Sf2WsPosition
     */
    public function setSwpEmpId($swpEmpId)
    {
        $this->swpEmpId = $swpEmpId;

        return $this;
    }

    /**
     * Get swpEmpId
     *
     * @return integer 
     */
    public function getSwpEmpId()
    {
        return $this->swpEmpId;
    }

    /**
     * Set swpPovActive
     *
     * @param boolean $swpPovActive
     * @return Sf2WsPosition
     */
    public function setSwpPovActive($swpPovActive)
    {
        $this->swpPovActive = $swpPovActive;

        return $this;
    }

    /**
     * Get swpPovActive
     *
     * @return boolean 
     */
    public function getSwpPovActive()
    {
        return $this->swpPovActive;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Sf2WsPosition
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
     * @return Sf2WsPosition
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
