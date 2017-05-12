<?php

namespace Telus\Example\MyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sf2WsUnit
 */
class Sf2WsUnit
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $swuRemoteId;

    /**
     * @var string
     */
    private $swuName;

    /**
     * @var string
     */
    private $swuUniShortName;

    /**
     * @var boolean
     */
    private $swuActive;

    /**
     * @var boolean
     */
    private $swuStaff;

    /**
     * @var integer
     */
    private $swuParentUniId;

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
     * Set swuRemoteId
     *
     * @param integer $swuRemoteId
     * @return Sf2WsUnit
     */
    public function setSwuRemoteId($swuRemoteId)
    {
        $this->swuRemoteId = $swuRemoteId;

        return $this;
    }

    /**
     * Get swuRemoteId
     *
     * @return integer 
     */
    public function getSwuRemoteId()
    {
        return $this->swuRemoteId;
    }

    /**
     * Set swuName
     *
     * @param string $swuName
     * @return Sf2WsUnit
     */
    public function setSwuName($swuName)
    {
        $this->swuName = $swuName;

        return $this;
    }

    /**
     * Get swuName
     *
     * @return string 
     */
    public function getSwuName()
    {
        return $this->swuName;
    }

    /**
     * Set swuUniShortName
     *
     * @param string $swuUniShortName
     * @return Sf2WsUnit
     */
    public function setSwuUniShortName($swuUniShortName)
    {
        $this->swuUniShortName = $swuUniShortName;

        return $this;
    }

    /**
     * Get swuUniShortName
     *
     * @return string 
     */
    public function getSwuUniShortName()
    {
        return $this->swuUniShortName;
    }

    /**
     * Set swuActive
     *
     * @param boolean $swuActive
     * @return Sf2WsUnit
     */
    public function setSwuActive($swuActive)
    {
        $this->swuActive = $swuActive;

        return $this;
    }

    /**
     * Get swuActive
     *
     * @return boolean 
     */
    public function getSwuActive()
    {
        return $this->swuActive;
    }

    /**
     * Set swuStaff
     *
     * @param boolean $swuStaff
     * @return Sf2WsUnit
     */
    public function setSwuStaff($swuStaff)
    {
        $this->swuStaff = $swuStaff;

        return $this;
    }

    /**
     * Get swuStaff
     *
     * @return boolean 
     */
    public function getSwuStaff()
    {
        return $this->swuStaff;
    }

    /**
     * Set swuParentUniId
     *
     * @param integer $swuParentUniId
     * @return Sf2WsUnit
     */
    public function setSwuParentUniId($swuParentUniId)
    {
        $this->swuParentUniId = $swuParentUniId;

        return $this;
    }

    /**
     * Get swuParentUniId
     *
     * @return integer 
     */
    public function getSwuParentUniId()
    {
        return $this->swuParentUniId;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Sf2WsUnit
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
     * @return Sf2WsUnit
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
