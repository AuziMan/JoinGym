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

class gymController extends Controller
{
	// Direct route to admin page
	public function index()
	{
		
	}
	
	
	// User gym view
	public function usergymView()
	{
		$bs = new gymBS();
		$gymArr = $bs->getAll();
		$memberID = Auth::user()->id;
		
		$gyms = Array();
		foreach($gymArr as $gym)
		{
			$gymID = $gym->getgymID();
			$gymName = $gym->getgymName();
			$interest = $gym->getInterest();
			$type = $gym->getType();
			$memberCount = $bs->getMemberCount($gymID);
			$description = $gym->getDescription();
			$exists = $bs->memberExists($gymID, $memberID);
			
			$newgym = new gymModel($gymID, $gymName, $interest, $type, $memberCount, $description, $exists);
			array_push($gyms, $newgym);
		}
		return view('/gymPages/gymUserView')->with('gyms', $gyms);
	}
	
	//User join gym
	public function joingym(Request $request)
	{
		$id = Auth::user()->id;
		$name = Auth::user()->name;
		$gymID = request()->get('gymID');
		
		$bs = new gymBS();
		
		$bs->joingym($id, $name, $gymID);
		
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
			$exists = $bs->memberExists($gymID, $id);
			$newgym = new gymModel($gymID, $gymName, $interest, $type, $memberCount, $description, $exists);
			array_push($gyms, $newgym);
		}
		return view('/gymPages/gymUserView')->with('gyms', $gyms);
	}
	//User leave a gym
	public function leavegym(Request $request)
	{
		$gymID = request()->get('gymID');
		$memberID = Auth::user()->id;
		
		$bs = new gymBS();
		
		$bs->leavegym($gymID, $memberID);
		
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
			$exists = $bs->memberExists($gymID, $memberID);
			
			$newgym = new gymModel($gymID, $gymName, $interest, $type, $memberCount, $description, $exists);
			
			array_push($gyms, $newgym);
		}
		return view('gymPages/gymUserView')->with('gyms', $gyms);
	}
	
	//User view gym members
	public function viewgymMembers(Request $request)
	{
		$gymID = request()->get('gymID');
		
		$bs = new gymBS();
		
		$members = $bs->getMembers($gymID);
		if(is_array($members))
		{
			return view('gymMembersView')->with('members', $members);
		}
		else if(is_array($members) == false)
		{
			return view('gymPages/gymMemberView')->with('members', $members);
		}
	}
	
	
}