<?php
namespace App\Services\Business;

use App\Services\Data\JobListDAO;
use App\Models\JobListingModel;



////////////////////////////////////////////////////////////////////////////////////
// This is an unused class from an old project that I am converting into a useable class for the project.
////////////////////////////////////////////////////////////////////////////////////


class JobListBS
{
    private $service;
    
    public function getAllJobs()
    {
        // Instantiate DAO
        $this->service = new JobListDAO();
        
        // Return array of jobs
        return $this->service->getAllJobs();
    }
    
    public function getJob($id)
    {
        $this->service = new JobListDAO();
        
        return $this->service->getJob($id);
    }
    public function addJob(JobListingModel $job)
    {
        $this->service = new JobListDAO();
        
        return $this->service->addJob($job);
    }
    
    public function editJob(JobListingModel $job)
    {
        $this->service = new JobListDAO();
        
        return $this->service->editJob($job);
    }
    
    public function deleteJob($id)
    {
        $this->service = new JobListDAO();
        
        return $this->service->deleteJob($id);
    }
    
    public function searchJob($searchTerm)
    {
    	$this->service = new JobListDAO();

    	return $this->service->searchJobs($searchTerm);
    }
    
    public function apply($jobID, $userID)
    {
    	$this->service = new JobListDAO();
    	
    	return $this->service->apply($jobID, $userID);
    }
   
    public function isApplied($jobID, $userID)
    {
    $this->service = new JobListDAO();
    
    return $this->service->isApplied($jobID, $userID);
	}
}

