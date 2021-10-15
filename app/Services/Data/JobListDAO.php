<?php
namespace App\Services\Data;

use Carbon\Exceptions\Exception;
use Illuminate\Support\Facades\DB;
use App\Models\JobListingModel;

class JobListDAO
{
    // Define conn string
    private $conn;
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "cst-256";
    private $dbquery;
    private $port = 8889;
    
    public function __construct()
    {
        // Create a connection to db
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname, $this->port);
        // Make sure to test conn for errors
    }
    
    public function getAllJobs()
    {
        try 
        {            
            $jobs = DB::table('jobs')->get();
            $jobArr = Array();
            foreach ($jobs as $job)
            {
                $jobID = $job->jobID;
                $company = $job->company;
                $position = $job->position;
                $location = $job->location;
                $experience = $job->experience;
                $skills = $job->skills;
                $description = $job->description;
                
                $newJob = new JobListingModel($jobID, $company, $position, $location, $experience, $skills, $description);
                array_push($jobArr, $newJob);
            }
            return $jobArr;
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        }
    }
    
    public function getJob($id)
    {
        try 
        {
            $job = DB::table('jobs')->where('jobID', $id)->first();
            
            $company = $job->company;
            $position = $job->position;
            $location = $job->location;
            $experience = $job->experience;
            $skills = $job->skills;
      		$description = $job->description;
            
            $temp = new JobListingModel($id, $company, $position, $location, $experience, $skills, $description);
            
            return $temp;
        } 
        catch (Exception $e) 
        {
            $e->getMessage();
        }
    }
    public function addJob(JobListingModel $job)
    {
        try 
        {           
            $id = $job->getJobID();
            $company = $job->getCompany();
            $position = $job->getPosition();
            $location = $job->getLocation();
            $experience = $job->getExperience();
            $skills = $job->getSkills();
            $description = $job->getDescription();
            
            $values = (['jobID'=> $id, 'company'=> $company, 'position' => $position, 'location' => $location,
                        'experience'=> $experience, 'skills'=> $skills, 'description'=> $description]);
            $result = DB::table('jobs')->insert($values);
            
            if($result > 0)
            {
                mysqli_close($this->conn);
                return true;
            }
            else
            {
                mysqli_close($this->conn);
                return false;
            }
        }
        catch (Exception $e)
        {
            $e->getMessage();
        }
    }
    public function editJob(JobListingModel $job)
    {
        try
        {
            $this->dbquery = "UPDATE jobs SET company='{$job->getCompany()}',position='{$job->getPosition()}', 
								location='{$job->getLocation()}', experience='{$job->getExperience()}', 
								skills='{$job->getSkills()}', description='{$job->getDescription()}'
                                WHERE jobID ='{$job->getJobID()}'";
            
            
            // If the selected query returns a result set
            $result = mysqli_query($this->conn, $this->dbquery);
            
            if($result > 0)
            {
                //mysqli_free_result($result);
                mysqli_close($this->conn);
                return true;
            }
            else
            {
                //mysqli_free_result($result);
                mysqli_close($this->conn);
                return false;
            }
            
        }
        catch (Exception $e)
        {
            $e->getMessage();
        }
    }
    
    public function deleteJob($id)
    {
        try
        {
            $result = DB::table('jobs')->where('jobID', $id)->delete();
            
            if($result > 0)
            {
            	mysqli_close($this->conn);
                return true;
            }
            else
            {
            	mysqli_close($this->conn);
            	
               return false; 
            }
        }
        catch (Exception $e)
        {
            $e->getMessage();
        }
    }
    public function searchJobs(string $searchTerm)
    {
    	try 
    	{
	    	$length = strlen($searchTerm);
	    	$sub = $searchTerm;
	    	if($length > 3)
	    	{
		    	if($length % 2 == 0)
		    	{
		    		$sub = substr($searchTerm, 0, $length / 2);
		    	}
		    	else if($length % 2 != 0)
		    	{
		    		$length + 1;
		    		$sub = substr($searchTerm, 0, $length / 2);
		    	}
	    	}
		    		
	    	$jobs = DB::table('jobs')
		    		->where('position', 'LIKE', "%{$searchTerm}%")
		    		->orWhere('description', 'LIKE', "%{$searchTerm}%")
		    		->orWhere('position', 'LIKE', "%{$sub}%")
		    		->orWhere('description', 'LIKE', "%{$sub}%")->get(); 
	    	
    		
		    $jobArr = Array();
    		foreach ($jobs as $job)
    		{
    			$jobID = $job->jobID;
    			$company = $job->company;
    			$position = $job->position;
    			$location = $job->location;
    			$experience = $job->experience;
    			$skills = $job->skills;
    			$description = $job->description;
    			
    			$newJob = new JobListingModel($jobID, $company, $position, $location, $experience, $skills, $description);
    			array_push($jobArr, $newJob);
    		}
    		return $jobArr;
       	} 
    	catch (Exception $e) 
    	{
    		$e->getMessage();
    	}
    }
    public function apply($jobID, $userID)
    {
    	try 
    	{
    		$values = (['jobID'=>$jobID, 'applicantID'=>$userID]);
    		$result = DB::table('jobapps')->insertOrIgnore($values);
    		
    		if($result > 0)
    		{
    			mysqli_close($this->conn);
    			return true;
    		}
    		else
    		{
    			mysqli_close($this->conn);
    			return false;
    		}
    	} 
    	catch (Exception $e) 
    	{
    		$e->getMessage();
    	}
    }
    public function isApplied($jobID, $userID)
    {
    	try
    	{
    		$result = DB::table('jobapps')->where([['jobID',$jobID],['applicantID',$userID]])
    		->get()->count();
    		
    		if($result == 1)
    		{
    			return true;
    		}
    		else
    		{
    			return false;
    		}
    	}
    	catch (Exception $e)
    	{
    		$e->getMessage();
    	}
    }
}

