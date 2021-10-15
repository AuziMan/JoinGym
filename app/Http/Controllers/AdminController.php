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
use App\Services\Business\GroupBS;
use App\Models\GroupModel;

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
    	// get portfolio and groups
    	$portfolio = $ubs->getUserPortfolio($id);
    	$groups = $ubs->getGroups($id);
    	return View('/adminPages/viewUser')->with('user', $user)
    	->with('portfolio', $portfolio)
    	->with('groups', $groups);
    	
    }
    
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
    
    //Admin group view
    public function adminGroup()
    {
        $bs = new GroupBS();
        $groupArr = $bs->getAll();
        $groups = Array();
        foreach($groupArr as $group)
        {
            $groupID = $group->getGroupID();
            $groupName = $group->getGroupName();
            $interest = $group->getInterest();
            $type = $group->getType();
            $memberCount = $bs->getMemberCount($groupID);
            $description = $group->getDescription();
            $exists = true;
            $newGroup = new GroupModel($groupID, $groupName, $interest, $type, $memberCount, $description, $exists);
            array_push($groups, $newGroup);
        }
        return view('/adminPages/groupAdmin')->with('groups', $groups);
    }
    
    //Admin edit group view
    public function editGroupView(Request $request)
    {
        $groupID = request()->get('groupID');
        $bs = new GroupBS();
        
        $group = $bs->getGroup($groupID);
        
        return view('adminPages/editGroup')->with('group', $group);
    }
    
    //Admin edit group data post
    public function editGroup (Request $request)
    {
        $groupID = request()->get('groupID');
        $groupName = request()->get('groupName');
        $interest = request()->get('interest');
        $type = request()->get('type');
        $description = request()->get('description');
        
        $bs = new GroupBS();
        $memberCount = $bs->getMemberCount($groupID);
        
        $group = new GroupModel($groupID, $groupName, $interest, $type, $memberCount, $description);
        
        $bs->editGroup($group);
        
        
        $groupArr = $bs->getAll();
        $groups = Array();
        foreach($groupArr as $group)
        {
            $groupID = $group->getGroupID();
            $groupName = $group->getGroupName();
            $interest = $group->getInterest();
            $type = $group->getType();
            $memberCount = $bs->getMemberCount($groupID);
            $description = $group->getDescription();
            $exists = true;
            $newGroup = new GroupModel($groupID, $groupName, $interest, $type, $memberCount, $description, $exists);
            array_push($groups, $newGroup);
        }
        return view('/adminPages/groupAdmin')->with('groups', $groups); 
    }
    
    //Admin add a new group 
    public function addGroup(Request $request)
    {
        $groupName = request()->get('groupName');
        $interest = request()->get('interest');
        $type = request()->get('type');
        $description = request()->get('description');
        
        $temp = new GroupModel(0, $groupName, $interest, $type, 0, $description);
        
        $bs = new GroupBS();
        $bs->addGroup($temp);
        
        $groupArr = $bs->getAll();
        $groups = Array();
        foreach($groupArr as $group)
        {
            $groupID = $group->getGroupID();
            $groupName = $group->getGroupName();
            $interest = $group->getInterest();
            $type = $group->getType();
            $memberCount = $bs->getMemberCount($groupID);
            $description = $group->getDescription();
            $exists = true;
            $newGroup = new GroupModel($groupID, $groupName, $interest, $type, $memberCount, $description, $exists);
            array_push($groups, $newGroup);
        }
        
        return view('/adminPages/groupAdmin')->with('groups', $groups);
    }
    
    //Admin delete a group
    public function deleteGroup(Request $request)
    {
        $groupID = request()->get('groupID');
        
        $bs = new GroupBS();
        
        $bs->deleteGroup($groupID);
        
        $groupArr = $bs->getAll();
        $groups = Array();
        foreach($groupArr as $group)
        {
            $groupID = $group->getGroupID();
            $groupName = $group->getGroupName();
            $interest = $group->getInterest();
            $type = $group->getType();
            $memberCount = $bs->getMemberCount($groupID);
            $description = $group->getDescription();
            $exists = true;
            $newGroup = new GroupModel($groupID, $groupName, $interest, $type, $memberCount, $description, $exists);
            array_push($groups, $newGroup);
        }
        return view('/adminPages/groupAdmin')->with('groups', $groups);
    }

}
