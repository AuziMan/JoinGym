<?php
namespace App\Services\Business;

use App\Models\UserModel;
use App\Services\Data\GroupDAO;
use App\Models\GroupModel;

class GroupBS
{

    // Define properties
    private $service;

    public function getAll()
    {
        // Instantiate UserDAO class
        $this->service = new GroupDAO();
        // Return array
        return $this->service->getAllGroups();
    }

    public function getGroup($id)
    {
        $this->service = new GroupDAO();

        return $this->service->getGroup($id);
    }

    public function addGroup(GroupModel $group)
    {
        $this->service = new GroupDAO();
        
        return $this->service->addGroup($group);
    }
    public function editGroup(GroupModel $group)
    {
        $this->service = new GroupDAO();

        return $this->service->editGroup($group);
    }
    public function deleteGroup($id)
    {
        $this->service = new GroupDAO();

        return $this->service->deleteGroup($id);
    }
    public function joinGroup($id, $name, $groupID)
    {
        $this->service = new GroupDAO();
        
        return $this->service->joinGroup($id, $name, $groupID);
    }
    
    public function getMemberCount($id)
    {
        $this->service = new GroupDAO();
        return $this->service->getMemberCount($id);
    }
    
    public function getMembers($groupID)
    {
        $this->service = new GroupDAO();
        return $this->service->getMembers($groupID);
    }
    
    public function leaveGroup($groupID, $memberID)
    {
        $this->service = new GroupDAO();
        return $this->service->leaveGroup($groupID, $memberID);
    }
    
    public function memberExists($groupID, $memberID)
    {
        $this->service = new GroupDAO();
        return $this->service->groupMemberExists($groupID, $memberID);
    }
}

