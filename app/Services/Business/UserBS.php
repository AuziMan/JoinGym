<?php
namespace App\Services\Business;

use App\Models\UserModel;
use App\Services\Data\UserDAO;

class UserBS
{

    // Define properties
    private $service;

    public function getAll()
    {
        // Instantiate UserDAO class
        $this->service = new UserDAO();

        // Return array
        return $this->service->getAllUsers();
    }

    public function getUser($id)
    {
        $this->service = new UserDAO();

        return $this->service->getUser($id);
    }

    public function editUser(UserModel $user)
    {
        $this->service = new UserDAO();

        return $this->service->editUser($user);
    }

    public function suspend($id)
    {
        $this->service = new UserDAO();

        return $this->service->suspend($id);
    }

    public function delete($id)
    {
        $this->service = new UserDAO();

        return $this->service->delete($id);
    }

    public function addNewInfo($moreInfoData, $id)
    {
        $this->service = new UserDAO();

        return $this->service->addNewInfo($moreInfoData, $id);
    }
    public function getUserPortfolio($id)
    {
        $this->service = new UserDAO();
        
        return $this->service->getUserPortfolio($id);
    }

    public function getUserProfile($id)
    {
        $this->service = new UserDAO();

        return $this->service->getUserProfile($id);
    }
    
    public function addUserPortfolio($userPortfolioData, $id) 
    {
        $this->service = new UserDAO();
                
        return $this->service->addUserPortfolio($userPortfolioData, $id);
    }
    
    public function getGroups($id){
    	$this->service = new UserDAO();
    	
    	return $this->service->getGroups($id);
    }
}

