<?php
namespace App\Services\Data;

use App\Models\MoreInfoModel;
use App\Models\UserModel;
use App\Models\UserPortfolioModel;
use Carbon\Exceptions\Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
use App\Models\GroupModel;
use App\Models\GroupMemberModel;

class GroupDAO
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
    
    
    public function getAllGroups()
    {
        try
        {
            $groups = DB::table('groups')->get();
            $groupArr = Array();
            foreach ($groups as $group)
            {
                $groupID = $group->groupID;
                $groupName = $group->groupName;
                $interest = $group->interest;
                $type = $group->type;
                $memberCount = $this->getMemberCount($groupID);
                $description = $group->description;
                $exists = true;
                $newGroup = new GroupModel($groupID, $groupName, $interest, $type, $memberCount, $description, $exists);
                array_push($groupArr, $newGroup);
            }
            return $groupArr;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }
    
    public function getGroup($id)
    {
        try
        {
            $group = DB::table('groups')->where('groupID', $id)->first();
            
            $groupID = $group->groupID;
            $groupName = $group->groupName;
            $interest = $group->interest;
            $type = $group->type;
            $memberCount = $this->getMemberCount($groupID);
            $description = $group->description;
            $exists = true;
            $temp = new GroupModel($groupID, $groupName, $interest, $type, $memberCount, $description, $exists);
        
            return $temp;
        }
        catch (Exception $e)
        {
            $e->getMessage();
        }
    }
    
    public function getMemberCount($id)
    {
        try 
        {
            $count = DB::table('groupmembers')->where('groupID',$id)->count();
            return $count;
        } 
        catch (Exception $e) 
        {
            $e->getMessage();
        }
    }
    public function addGroup(GroupModel $group)
    {
        try
        {
            $groupID = $group->getGroupID();
            $groupName = $group->getGroupName();
            $interest = $group->getInterest();
            $type = $group->getType();
            $description = $group->getDescription();
            
            $values = (['groupID'=>$groupID, 'groupName'=>$groupName, 'interest'=>$interest, 
                'type'=>$type, 'description'=>$description]);
            
            $result = DB::table('groups')->insert($values);
            
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
        catch(Exception $e)
        {
            $e->getMessage();
        }
    }
    public function editGroup(GroupModel $group)
    {
        try
        {
            $this->dbquery = "UPDATE groups SET groupName='{$group->getGroupName()}', 
                                interest='{$group->getInterest()}', type='{$group->getType()}',
                                description='{$group->getDescription()}'
                                WHERE groupID='{$group->getGroupID()}'";
                                
            // If the selected query returns a result set
            $result = mysqli_query($this->conn, $this->dbquery);
            
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
            echo $e->getMessage();
        } 
    }
    
    public function deleteGroup($id)
    {
        try 
        {
            $result =  DB::table('groups')->where('groupID',$id)->delete();
           
            if ($result > 0)
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
    
    public function joinGroup($id, $name, $groupID)
    {
        try 
        {
            $values = (['groupID'=>$groupID, 'memberName'=>$name, 'memberID'=>$id]);
            
            $result = DB::table('groupmembers')->insert($values);
            
            if ($result > 0)
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
    
    public function leaveGroup($groupID,$memberID)
    {
        try 
        {
            $result = DB::table('groupmembers')
            ->where([['groupID',$groupID],['memberID',$memberID]])->delete();
            
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
    public function getMembers($groupID)
    {
        try 
        {
            $members = DB::table('groupmembers')->where('groupID', $groupID)->get();
            $count = DB::table('groupmembers')->where('groupID', $groupID)->get()->count();
            if($count > 1)
            {
                $memberArr = Array();
                foreach ($members as $member)
                {
                    $memberName = $member->memberName;
                    $memberID = $member->memberID;
                    
                    $member = new GroupMemberModel($groupID, $memberName, $memberID);
                    
                    array_push($memberArr, $member);
                }
                return $memberArr;
            }
            if($count == 1)
            {
                $member = DB::table('groupmembers')->where('groupID', $groupID)->first();
                
                $memberName = $member->memberName;
                $memberID = $member->memberID;
                
                $memberModel = new GroupMemberModel($groupID, $memberName, $memberID);
                
                return $memberModel;
            }
            else 
            {
                echo "fail";
            }
        }
        catch (Exception $e) 
        {
            $e->getMessage();
        }
    }
    
    public function groupMemberExists($groupID, $memberID)
    {
        try 
        {
            $result = DB::table('groupmembers')->where([['groupID',$groupID],['memberID',$memberID]])
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

