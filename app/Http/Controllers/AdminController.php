<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Business\UserBS;
use App\Models\UserModel;
use App\Models\MoreinfoModel;
use App\Services\Business\JobListBS;
use App\Models\JobListingModel;
use App\Models\UserPortfolioModel;
use App\Services\Business\gymBS;
use App\Models\gymModel;

class AdminController extends Controller
{
    // Direct route to admin page
    public function index()
    {
        // Instantiate Business layer to access data
        $bs = new UserBS();
        
        //Obtain data
        $users = $bs->getAll();
        
        //return view('admin')->with('users', $users);
        
        if(Auth::user()->role == 'suspended')
        {
            return View('suspendedUser')->with('users', $users);
        }
        else
        {
            
            if(Auth::user()->role == 'admin')
            {
                return View('/adminPages/admin')->with('users', $users);
            }
            else
            {
                return View('securityReroute');
            }
        }
    }
    
    // Controller that takes id to autofill form
    public function editView(Request $request)
    {
        $id = request()->get('id');
        $bs = new UserBS();
        
        $user = $bs->getUser($id);
        
        return View('/adminPages/editUser')->with('user', $user);
    }
    
    // Admin edit user function
    public function editUser(Request $request)
    {
        $id = request()->get('id');
        $name = request()->get('name');
        $email = request()->get('email');
        $password = request()->get('password');
        $role = request()->get('role');
        $user = new UserModel($id, $name, $email, $password, $role);
        
        $bs = new UserBS();
        
        $bs->editUser($user);
  
        $all = $bs->getAll();
        if(Auth::user()->role == 'admin')
        {
            return View('/adminPages/admin')->with('users', $all);   
        }
        else 
        {
            return View('home');
        }
    }
    
    // Admin suspend user
    public function suspend(Request $request)
    {
        $id = request()->get('id');
        
        $bs = new UserBS();
        
        
        if($bs->suspend($id))
        {
            echo "success";
        }
        else 
        {
            echo "fail";
        }
        $users = $bs->getAll();
        
        return View('/adminPages/admin')->with('users', $users);
        
    }
    
    // Admin user delete function
    public function delete(Request $request)
    {
        $id = request()->get('id');
        
        $bs = new UserBS();
        
        $bs->delete($id);
        
        $users = $bs->getAll();
        
        return View('adminPages/admin')->with('users', $users);
    }
    
    // view details
    public function details(Request $request)
    {
    	$id = request()->get('id');
    	$ubs = new UserBS();
    	$user = $ubs->getUser($id);
    	// get portfolio and gyms
    	$portfolio = $ubs->getUserPortfolio($id);
    	$gyms = $ubs->getgyms($id);
    	return View('/adminPages/viewUser')->with('user', $user)
    	->with('portfolio', $portfolio)
    	->with('gyms', $gyms);
    	
    }
    
    //////////////////////////////////////////////////////////
    //This is from an old project that I am using to refractor
    //////////////////////////////////////////////////////////


    //===================Job Listing functions=================
    // Method to direct to job admin page
    public function jobAdmin()
    {
        $bs = new JobListBS();
        
        $jobs = $bs->getAllJobs();
        
        return view('/adminPages/jobAdmin')->with('jobs', $jobs);
    }
    // Method to add job listing
    public function addJob(Request $request)
    {
        $id = 0;
        $company = request()->get('company');
        $position = request()->get('position');
        $location = request()->get('location');
        $experience = request()->get('experience');
        $skills = request()->get('skills');
        $description = request()->get('description');
        
        $job = new JobListingModel($id, $company, $position, $location, $experience, $skills, $description);
        
        $bs = new JobListBS();
        
        $bs->addJob($job);
        
        $jobs = $bs->getAllJobs();
        
        return view('/adminPages/jobAdmin')->with('jobs', $jobs);
    }
    
    //Admin controller that takes id to autofill form
    public function editJob(Request $request)
    {
        $id = request()->get('id');
        $bs = new JobListBS();
        
        $job = $bs->getJob($id);
        
        return View('/adminPages/editJobListing')->with('job', $job);
    }
    
    //Admin posts edited data
    public function editJobData(Request $request)
    {
        $jobID = request()->get('jobID');
        $company = request()->get('company');
        $position = request()->get('position');
        $location = request()->get('location');
        $experience = request()->get('experience');
        $skills = request()->get('skills');
        $description = request()->get('description');
        
        $temp = new JobListingModel($jobID, $company, $position, $location, $experience, $skills, $description);
        
        $bs = new JobListBS();
        $bs->editJob($temp);
        
        $jobs = $bs->getAllJobs();
        
        return View('/adminPages/jobAdmin')->with('jobs', $jobs);
    }

    // Admin deletes job listing
    public function deleteJob(Request $request)
    {
        $id = request()->get('id');
        
        $bs = new JobListBS();
        $bs->deleteJob($id);
        $jobs = $bs->getAllJobs();
        
        return View('/adminPages/jobAdmin')->with('jobs', $jobs);
    }
    
    //Admin gym view
    public function admingym()
    {
        $bs = new gymBS();
        $gymArr = $bs->getAll();
        $gyms = Array();
        foreach($gymArr as $gym)
        {
            $gymID = $gym->getgymID();
            $gymName = $gym->getgymName();
            $interest = $gym->getInterest();
            $type = $gym->getType();
            $memberCount = $bs->getMemberCount($gymID);
            $description = $gym->getDescription();
            $exists = true;
            $newgym = new gymModel($gymID, $gymName, $interest, $type, $memberCount, $description, $exists);
            array_push($gyms, $newgym);
        }
        return view('/adminPages/gymAdmin')->with('gyms', $gyms);
    }
    
    //Admin edit gym view
    public function editgymView(Request $request)
    {
        $gymID = request()->get('gymID');
        $bs = new gymBS();
        
        $gym = $bs->getgym($gymID);
        
        return view('adminPages/editgym')->with('gym', $gym);
    }
    
    //Admin edit gym data post
    public function editgym (Request $request)
    {
        $gymID = request()->get('gymID');
        $gymName = request()->get('gymName');
        $interest = request()->get('interest');
        $type = request()->get('type');
        $description = request()->get('description');
        
        $bs = new gymBS();
        $memberCount = $bs->getMemberCount($gymID);
        
        $gym = new gymModel($gymID, $gymName, $interest, $type, $memberCount, $description);
        
        $bs->editgym($gym);
        
        
        $gymArr = $bs->getAll();
        $gyms = Array();
        foreach($gymArr as $gym)
        {
            $gymID = $gym->getgymID();
            $gymName = $gym->getgymName();
            $interest = $gym->getInterest();
            $type = $gym->getType();
            $memberCount = $bs->getMemberCount($gymID);
            $description = $gym->getDescription();
            $exists = true;
            $newgym = new gymModel($gymID, $gymName, $interest, $type, $memberCount, $description, $exists);
            array_push($gyms, $newgym);
        }
        return view('/adminPages/gymAdmin')->with('gyms', $gyms); 
    }
    
    //Admin add a new gym 
    public function addgym(Request $request)
    {
        $gymName = request()->get('gymName');
        $interest = request()->get('interest');
        $type = request()->get('type');
        $description = request()->get('description');
        
        $temp = new gymModel(0, $gymName, $interest, $type, 0, $description);
        
        $bs = new gymBS();
        $bs->addgym($temp);
        
        $gymArr = $bs->getAll();
        $gyms = Array();
        foreach($gymArr as $gym)
        {
            $gymID = $gym->getgymID();
            $gymName = $gym->getgymName();
            $interest = $gym->getInterest();
            $type = $gym->getType();
            $memberCount = $bs->getMemberCount($gymID);
            $description = $gym->getDescription();
            $exists = true;
            $newgym = new gymModel($gymID, $gymName, $interest, $type, $memberCount, $description, $exists);
            array_push($gyms, $newgym);
        }
        
        return view('/adminPages/gymAdmin')->with('gyms', $gyms);
    }
    
    //Admin delete a gym
    public function deletegym(Request $request)
    {
        $gymID = request()->get('gymID');
        
        $bs = new gymBS();
        
        $bs->deletegym($gymID);
        
        $gymArr = $bs->getAll();
        $gyms = Array();
        foreach($gymArr as $gym)
        {
            $gymID = $gym->getgymID();
            $gymName = $gym->getgymName();
            $interest = $gym->getInterest();
            $type = $gym->getType();
            $memberCount = $bs->getMemberCount($gymID);
            $description = $gym->getDescription();
            $exists = true;
            $newgym = new gymModel($gymID, $gymName, $interest, $type, $memberCount, $description, $exists);
            array_push($gyms, $newgym);
        }
        return view('/adminPages/gymAdmin')->with('gyms', $gyms);
    }

}
