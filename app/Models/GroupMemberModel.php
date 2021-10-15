<?php
namespace App\Models;

class GroupMemberModel
{
    private $groupID;
    private $memberName;
    private $memberID;
    
    public function __construct($groupID, $memberName, $memberID)
    {
        $this->groupID = $groupID;
        $this->memberName = $memberName;
        $this->memberID = $memberID;
    }
    
    /**
     * @return mixed
     */
    public function getGroupID()
    {
        return $this->groupID;
    }

    /**
     * @return mixed
     */
    public function getMemberName()
    {
        return $this->memberName;
    }

    /**
     * @return mixed
     */
    public function getMemberID()
    {
        return $this->memberID;
    }

    /**
     * @param mixed $groupID
     */
    public function setGroupID($groupID)
    {
        $this->groupID = $groupID;
    }

    /**
     * @param mixed $memberName
     */
    public function setMemberName($memberName)
    {
        $this->memberName = $memberName;
    }

    /**
     * @param mixed $memberID
     */
    public function setMemberID($memberID)
    {
        $this->memberID = $memberID;
    }
}

