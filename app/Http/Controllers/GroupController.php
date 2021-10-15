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

class GroupController extends Controller
{
	// Direct route to admin page
	public function index()
	{
		
	}
	
	
	// User group view
	public function userGroupView()
	{
		$bs = new GroupBS();
		$groupArr = $bs->getAll();
		$memberID = Auth::user()->id;
		
		$groups = Array();
		foreach($groupArr as $group)
		{
			$groupID = $group->getGroupID();
			$groupName = $group->getGroupName();
			$interest = $group->getInterest();
			$type = $group->getType();
			$memberCount = $bs->getMemberCount($groupID);
			$description = $group->getDescription();
			$exists = $bs->memberExists($groupID, $memberID);
			
			$newGroup = new GroupModel($groupID, $groupName, $interest, $type, $memberCount, $description, $exists);
			array_push($groups, $newGroup);
		}
		return view('groupPages/groupUserView')->with('groups', $groups);
	}
	
	//User join group
	public function joinGroup(Request $request)
	{
		$id = Auth::user()->id;
		$name = Auth::user()->name;
		$groupID = request()->get('groupID');
		
		$bs = new GroupBS();
		
		$bs->joinGroup($id, $name, $groupID);
		
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
			$exists = $bs->memberExists($groupID, $id);
			$newGroup = new GroupModel($groupID, $groupName, $interest, $type, $memberCount, $description, $exists);
			array_push($groups, $newGroup);
		}
		return view('/groupPages/groupUserView')->with('groups', $groups);
	}
	//User leave a group
	public function leaveGroup(Request $request)
	{
		$groupID = request()->get('groupID');
		$memberID = Auth::user()->id;
		
		$bs = new GroupBS();
		
		$bs->leaveGroup($groupID, $memberID);
		
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
			$exists = $bs->memberExists($groupID, $memberID);
			
			$newGroup = new GroupModel($groupID, $groupName, $interest, $type, $memberCount, $description, $exists);
			
			array_push($groups, $newGroup);
		}
		return view('groupPages/groupUserView')->with('groups', $groups);
	}
	//User view group members
	public function viewGroupMembers(Request $request)
	{
		$groupID = request()->get('groupID');
		
		$bs = new GroupBS();
		
		$members = $bs->getMembers($groupID);
		if(is_array($members))
		{
			return view('groupMembersView')->with('members', $members);
		}
		else if(is_array($members) == false)
		{
			return view('groupPages/groupMemberView')->with('members', $members);
		}
	}
	
	
}