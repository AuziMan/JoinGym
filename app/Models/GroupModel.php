<?php
namespace App\Models;

class GroupModel
{
    private $groupID;
    private $groupName;
    private $interest;
    private $type;
    private $memberCount;
    private $description;
    private $exists;
    public function __construct($groupID, $groupName, $interest, $type, $memberCount, $description, $exists)
    {
        $this->groupID = $groupID;
        $this->groupName = $groupName;
        $this->interest = $interest;
        $this->type = $type;
        $this->memberCount = $memberCount;
        $this->description = $description;
        $this->exists = $exists;
    }
    
    
    /**
     * @return mixed
     */
    public function getExists()
    {
        return $this->exists;
    }

    /**
     * @param mixed $exists
     */
    public function setExists($exists)
    {
        $this->exists = $exists;
    }

    /**
     * @return mixed
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * @param mixed $groupID
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;
    }

    /**
     * @return mixed
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * @param mixed $groupName
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;
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

