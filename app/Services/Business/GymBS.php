<?php
namespace App\Services\Business;

use App\Models\UserModel;
use App\Services\Data\gymDAO;
use App\Models\gymModel;

class gymBS
{

    // Define properties
    private $service;

    public function getAll()
    {
        // Instantiate GymDAO class
        $this->service = new gymDAO();
        // Return array
        return $this->service->getAllgyms();
    }

    public function getgym($id)
    {
        $this->service = new gymDAO();

        return $this->service->getgym($id);
    }

    public function addgym(gymModel $gym)
    {
        $this->service = new gymDAO();
        
        return $this->service->addgym($gym);
    }
    public function editgym(gymModel $gym)
    {
        $this->service = new gymDAO();

        return $this->service->editgym($gym);
    }
    public function deletegym($id)
    {
        $this->service = new gymDAO();

        return $this->service->deletegym($id);
    }
    public function joingym($id, $name, $gymID)
    {
        $this->service = new gymDAO();
        
        return $this->service->joingym($id, $name, $gymID);
    }
    
    public function getMemberCount($id)
    {
        $this->service = new gymDAO();
        return $this->service->getMemberCount($id);
    }
    
    public function getMembers($gymID)
    {
        $this->service = new gymDAO();
        return $this->service->getMembers($gymID);
    }
    
    public function leavegym($gymID, $memberID)
    {
        $this->service = new gymDAO();
        return $this->service->leavegym($gymID, $memberID);
    }
    
    public function memberExists($gymID, $memberID)
    {
        $this->service = new gymDAO();
        return $this->service->gymMemberExists($gymID, $memberID);
    }
}

