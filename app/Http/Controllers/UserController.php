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

class UserController extends Controller
{
    // Direct route to admin page
    public function index()
    {

    }
    
    // Method to add additional user info
    public function addNewInfo(Request $request)
    {
        $moreInfoData = new MoreInfoModel(request()->get('age'), request()->get('gender'),request()->get('phonenumber'),request()->get('address'));
        
        $bs = new UserBS();
        
        $id = Auth::user()->id;
        
        $isValid = $bs->addNewInfo($moreInfoData, $id);
        
        if($isValid)
        {
            echo("customer data added!");
            return view('home');
        }
        else
        {
            echo("customer data not added. you got it next time!");
            return view('moreinfo');
        }
        
    }
       
    //Adding user gym profile
    public function addUserGymProfile(Request $request)
    {
        $id = Auth::user()->id;
        
        $gymGoals = request()->get('gymGoals');
        $gymExperience = request()->get('gymExperience');
        $workoutPrefrence = request()->get('workoutPrefrence');
        $temp = new UserGymProfileModel($gymGoals, $gymExperience, $workoutPrefrence);
        
        $bs = new UserBS();
        $bs->addUserGymProfile($temp, $id);
        
        $gymprofile = $bs->getGymProfile($id);
        return View('/userPages/displayUserGymProfile')->with('gymprofile', $gymprofile);
       
    }


    //This function recives data from the form and passes it to the UserPortfolioModel and rerouts to the display page
    public function displayUserProfile(Request $request)
    {
        $id = Auth::user()->id;

        $gymGoals = request()->get('gymGoals');
        $gymExperience = request()->get('gymExperience');
        $workoutPrefrence = request()->get('workoutPrefrence');
        $temp = new UserPortfolioModel($gymGoals, $gymExperience, $workoutPrefrence);
        
        $bs = new UserBS();
        $profile = $bs->getUserPortfolio($id);

        return View('/userPages/displayUserProfile')->with('profile', $profile);

        
        $profile = $bs->getUserProfile($id);
    }
    


    // User search job
    public function searchJob(Request $request)
    {
    	$bs = new JobListBS();
    	
    	$searchTerm = request()->get('searchTerm');
    	
    	$jobs = $bs->searchJob($searchTerm);
    	
    	return View('/userPages/searchJobResults')->with('jobs', $jobs);
    }
    public function viewOneJob(Request $request)
    {
    	$id = request()->get('id');
    	$userID = Auth::user()->id;
    	$bs = new JobListBS();
    	
    	$job = $bs->getJob($id);
    	
    	$exists = $bs->isApplied($id, $userID);
    	
    	return View('/userPages/viewOneJob')->with('job', $job)->with('exists', $exists);
    }


    public function apply(Request $request)
    {
    	$jobID = request()->get('id');
    	
    	$userID = Auth::user()->id;
    	$exists = false;
    	$bs = new JobListBS();
    	
    	$bs->apply($jobID, $userID);
    	$job = $bs->getJob($jobID);
	    $exists = $bs->isApplied($jobID, $userID);
	    	    
	    return View('/userPages/viewOneJob')->with('job', $job)->with('exists', $exists);
    }
    
}
