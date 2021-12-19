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
        // Instantiate UserDAO class

        $this->service = new UserDAO();
        
        // Return array
        return $this->service->getUser($id);
    }

    public function editUser(UserModel $user)
    {
        // Instantiate UserDAO class
        $this->service = new UserDAO();

        // Return array
        return $this->service->editUser($user);
    }

    public function suspend($id)
    {
        // Instantiate UserDAO class
        $this->service = new UserDAO();

        // Return array
        return $this->service->suspend($id);
    }

    public function delete($id)
    {
        // Instantiate UserDAO class
        $this->service = new UserDAO();

        // Return array
        return $this->service->delete($id);
    }

    public function addNewInfo($moreInfoData, $id)
    {
        // Instantiate UserDAO class
        $this->service = new UserDAO();

       // Return array
        return $this->service->addNewInfo($moreInfoData, $id);
    }
    public function getUserPortfolio($id)
    {
        // Instantiate UserDAO class
        $this->service = new UserDAO();

        // Return array
        return $this->service->getUserPortfolio($id);
    }

    public function getUserProfile($id)
    {
        // Instantiate UserDAO class
        $this->service = new UserDAO();

        // Return array
        return $this->service->getUserProfile($id);
    }
    
    public function addUserPortfolio($userPortfolioData, $id) 
    {
        // Instantiate UserDAO class

        $this->service = new UserDAO();

        // Return array
        return $this->service->addUserPortfolio($userPortfolioData, $id);
    }
    
    public function getgyms($id)
    {
        // Instantiate UserDAO class
    	$this->service = new UserDAO();

        // Return array
    	return $this->service->getgyms($id);
    }
}

