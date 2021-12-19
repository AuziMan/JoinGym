<?php
namespace App\Services\Business;

use App\Services\Data\JobListDAO;
use App\Models\JobListingModel;



////////////////////////////////////////////////////////////////////////////////////
// This is an unused class from an old project that I am converting into a useable class for the project.
////////////////////////////////////////////////////////////////////////////////////


/**
 * JobListBS
 */
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
        
    /**
     * getJob
     *
     * @param  mixed $id
     * @return void
     */
    public function getJob($id)
    {
        $this->service = new JobListDAO();
        
        return $this->service->getJob($id);
    }

        
    /**
     * addJob
     *
     * @param  mixed $job
     * @return void
     */
    public function addJob(JobListingModel $job)
    {
        $this->service = new JobListDAO();
        
        return $this->service->addJob($job);
    }
        
    /**
     * editJob
     *
     * @param  mixed $job
     * @return void
     */
    public function editJob(JobListingModel $job)
    {
        $this->service = new JobListDAO();
        
        return $this->service->editJob($job);
    }
        
    /**
     * deleteJob
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteJob($id)
    {
        $this->service = new JobListDAO();
        
        return $this->service->deleteJob($id);
    }
        
    /**
     * searchJob
     *
     * @param  mixed $searchTerm
     * @return void
     */
    public function searchJob($searchTerm)
    {
    	$this->service = new JobListDAO();

    	return $this->service->searchJobs($searchTerm);
    }
        
    /**
     * apply
     *
     * @param  mixed $jobID
     * @param  mixed $userID
     * @return void
     */
    public function apply($jobID, $userID)
    {
    	$this->service = new JobListDAO();
    	
    	return $this->service->apply($jobID, $userID);
    }
       
    /**
     * isApplied
     *
     * @param  mixed $jobID
     * @param  mixed $userID
     * @return void
     */
    public function isApplied($jobID, $userID)
    {
    $this->service = new JobListDAO();
    
    return $this->service->isApplied($jobID, $userID);
	}
}

