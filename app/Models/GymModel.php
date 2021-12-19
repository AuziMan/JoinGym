<?php
namespace App\Models;

/**
 * gymModel
 */
class gymModel
{
    private $gymID;
    private $gymName;
    private $open;
    private $memberCount;
    private $description;    
    /**
     * __construct
     *
     * @param  mixed $gymID
     * @param  mixed $gymName
     * @param  mixed $open
     * @param  mixed $memberCount
     * @param  mixed $description
     * @return void
     */
    public function __construct($gymID, $gymName, $open, $memberCount, $description)
    {
        $this->gymID = $gymID;
        $this->gymName = $gymName;
        $this->open = $open;
        $this->memberCount = $memberCount;
        $this->description = $description;
    }
    
    
 
    /**
     * @return mixed
     */
    public function getgymID()
    {
        return $this->gymID;
    }

    /**
     * @param mixed $gymID
     */
    public function setgymID($gymID)
    {
        $this->gymID = $gymID;
    }

    /**
     * @return mixed
     */
    public function getgymName()
    {
        return $this->gymName;
    }

    /**
     * @param mixed $gymName
     */
    public function setgymName($gymName)
    {
        $this->gymName = $gymName;
    }

    /**
     * @return mixed
     */
    public function getInterest()
    {
        return $this->interest;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getMemberCount()
    {
        return $this->memberCount;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $interest
     */
    public function setInterest($interest)
    {
        $this->interest = $interest;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @param mixed $memberCount
     */
    public function setMemberCount($memberCount)
    {
        $this->memberCount = $memberCount;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    
}

