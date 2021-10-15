<?php
namespace App\Models;

class JobListingModel
{
    private $jobID;
    private $company;
    private $position;
    private $location;
    private $experience;
    private $skills;
    private $description;
    
    public function __construct($jobID, $company, $position, $location, $experience, $skills, $description)
    {
        $this->jobID = $jobID;
        $this->company = $company;
        $this->position = $position;
        $this->location = $location;
        $this->experience = $experience;
        $this->skills = $skills;
        $this->description = $description;
    }
    
    
    /**
	 * @return mixed
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param mixed $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;
	}

	/**
     * @return mixed
     */
    public function getJobID()
    {
        return $this->jobID;
    }

    /**
     * @param mixed $jobID
     */
    public function setJobID($jobID)
    {
        $this->jobID = $jobID;
    }

    
    /** 
     * @return mixed
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @return mixed
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * @return mixed
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->location = $location;
    }

    /**
     * @param mixed $experience
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;
    }

    /**
     * @param mixed $skills
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
    }

    
    
   
}

