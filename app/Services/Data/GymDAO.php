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
use App\Models\gymModel;
use App\Models\gymMemberModel;

class gymDAO
{
    // Define conn string
    private $conn;
    private $servername = "localhost";
    private $username = "root";
    private $password = "root";
    private $dbname = "JoinGym";
    private $dbquery;
    private $port = 8889;
    
    public function __construct()
    {
        // Create a connection to db
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname, $this->port);
        // Make sure to test conn for errors
    }
    
    
    public function getAllgyms()
    {
        try
        {
            $gyms = DB::table('gyms')->get();
            $gymArr = Array();
            foreach ($gyms as $gym)
            {
                $gymID = $gym->gymID;
                $gymName = $gym->gymName;
                $interest = $gym->interest;
                $type = $gym->type;
                $memberCount = $this->getMemberCount($gymID);
                $description = $gym->description;
                $exists = true;
                $newgym = new gymModel($gymID, $gymName, $interest, $type, $memberCount, $description, $exists);
                array_push($gymArr, $newgym);
            }
            return $gymArr;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }
    
    public function getgym($id)
    {
        try
        {
            $gym = DB::table('gyms')->where('gymID', $id)->first();
            
            $gymID = $gym->gymID;
            $gymName = $gym->gymName;
            $interest = $gym->interest;
            $type = $gym->type;
            $memberCount = $this->getMemberCount($gymID);
            $description = $gym->description;
            $exists = true;
            $temp = new gymModel($gymID, $gymName, $interest, $type, $memberCount, $description, $exists);
        
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
            $count = DB::table('gymmembers')->where('gymID',$id)->count();
            return $count;
        } 
        catch (Exception $e) 
        {
            $e->getMessage();
        }
    }
    public function addgym(gymModel $gym)
    {
        try
        {
            $gymID = $gym->getgymID();
            $gymName = $gym->getgymName();
            $interest = $gym->getInterest();
            $type = $gym->getType();
            $description = $gym->getDescription();
            
            $values = (['gymID'=>$gymID, 'gymName'=>$gymName, 'interest'=>$interest, 
                'type'=>$type, 'description'=>$description]);
            
            $result = DB::table('gyms')->insert($values);
            
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
    public function editgym(gymModel $gym)
    {
        try
        {
            $this->dbquery = "UPDATE gyms SET gymName='{$gym->getgymName()}', 
                                interest='{$gym->getInterest()}', type='{$gym->getType()}',
                                description='{$gym->getDescription()}'
                                WHERE gymID='{$gym->getgymID()}'";
                                
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
    
    public function deletegym($id)
    {
        try 
        {
            $result =  DB::table('gyms')->where('gymID',$id)->delete();
           
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
    
    public function joingym($id, $name, $gymID)
    {
        try 
        {
            $values = (['gymID'=>$gymID, 'memberName'=>$name, 'memberID'=>$id]);
            
            $result = DB::table('gymmembers')->insert($values);
            
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
    
    public function leavegym($gymID,$memberID)
    {
        try 
        {
            $result = DB::table('gymmembers')
            ->where([['gymID',$gymID],['memberID',$memberID]])->delete();
            
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
    public function getMembers($gymID)
    {
        try 
        {
            $members = DB::table('gymmembers')->where('gymID', $gymID)->get();
            $count = DB::table('gymmembers')->where('gymID', $gymID)->get()->count();
            if($count > 1)
            {
                $memberArr = Array();
                foreach ($members as $member)
                {
                    $memberName = $member->memberName;
                    $memberID = $member->memberID;
                    
                    $member = new gymMemberModel($gymID, $memberName, $memberID);
                    
                    array_push($memberArr, $member);
                }
                return $memberArr;
            }
            if($count == 1)
            {
                $member = DB::table('gymmembers')->where('gymID', $gymID)->first();
                
                $memberName = $member->memberName;
                $memberID = $member->memberID;
                
                $memberModel = new gymMemberModel($gymID, $memberName, $memberID);
                
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
    
    public function gymMemberExists($gymID, $memberID)
    {
        try 
        {
            $result = DB::table('gymmembers')->where([['gymID',$gymID],['memberID',$memberID]])
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

