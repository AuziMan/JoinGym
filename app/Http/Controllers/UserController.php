<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\Business\UserBS;
use App\Models\UserModel;
use App\Models\MoreinfoModel;
use App\Services\Business\JobListBS;
use App\Models\JobListingModel;
use App\Models\UserGymProfileModel;

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

        $name = Auth::user()->name;
        
        $isValid = $bs->addNewInfo($moreInfoData, $id, $name);
        
        if($isValid)
        {
           
            return view('/userPages/displayUserInfo')->with('moreInfoData',$moreInfoData)->with('name', $name);
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
        return View('/home')->with('gymprofile', $gymprofile);
       
    }

    //Gets the gym profile and passeds it to the edit page
    public function editGymProfile(Request $request)
    {
        $id = Auth::user()->id;
        $bs = new UserBS();

        $gymProfile = $bs->getGymProfile($id);

        return View('/userPages/editGymProfile')->with('gymProfile', $gymProfile);

    }

    //Editng User gym profile
    public function editUserGymProfileData(Request $request)
    {
        $id = Auth::user()->id;
   
        $gymGoals = request()->get('gymGoals');
        $gymExperience = request()->get('gymExperience');
        $workoutPrefrence = request()->get('workoutPrefrence');

        $temp = new UserGymProfileModel($gymGoals, $gymExperience, $workoutPrefrence);

        $bs = new UserBS();
 
        $bs->editUserGymProfile($temp, $id);
  

        $gymProfile = $bs->editUserGymProfile($temp, $id);
        return View('/Home')->with('gymProfile', $gymProfile);

        
    }

    //Gets the Gym Profile and displays it to the displayUserGymProfile page
    public function displayUserGymProfile()
    {
        $id = Auth::user()->id;

        $bs = new UserBS();

        $gymProfile = $bs->getGymProfile($id);

       return View('/userPages/displayUserGymProfile')->with('gymProfile', $gymProfile);

    }

    // This function recives data from the form and passes it to the UserPortfolioModel 
    // and rerouts to the display page
    public function testdisplayUserGymProfile(Request $request)
    {
        $id = Auth::user()->id;

        $gymGoals = request()->get('gymGoals');
        $gymExperience = request()->get('gymExperience');
        $workoutPrefrence = request()->get('workoutPrefrence');
        $temp = new UserPortfolioModel($gymGoals, $gymExperience, $workoutPrefrence);
        
        $bs = new UserBS();
        $profile = $bs->getGymProfile($id);

        return View('/userPages/displayUserProfile')->with('profile', $profile);

        
        $profile = $bs->getUserProfile($id);
    }



    
    
}
