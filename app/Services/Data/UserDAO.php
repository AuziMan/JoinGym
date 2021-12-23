<?php
namespace App\Services\Data;

use App\Models\MoreInfoModel;
use App\Models\UserModel;
use App\Models\GroupModel;
use App\Models\UserPortfolioModel;
use Carbon\Exceptions\Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

class UserDAO
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
    
    /**
     * Method to verify user credentials
     * @param UserModel $user
     */
    public function findByUser(UserModel $user)
    {
        try 
        {
            $this->dbquery = "SELECT email, password FROM users 
                                WHERE email = '". $user->getEmail(). "' 
                                AND password = '". $user->getPassword()."'"; 
            // If the selected query returns a result set
            $result = mysqli_query($this->conn, $this->dbquery);
            
            if(mysqli_num_rows($result) > 0)
            {
                mysqli_free_result($result);
                mysqli_close($this->conn);
                return true;
            }
            else 
            {
                mysqli_free_result($result);
                mysqli_close($this->conn);
                return false;
            }
        } 
        catch (Exception $e) 
        {
            echo $e->getMessage();
        } 
    }
    

    //Finds all users from the database    
    /**
     * getAllUsers
     *
     * @return void
     */
    public function getAllUsers()
    {
        try
        {
            $users = DB::table('users')->get();
            $userArr = Array();
            foreach ($users as $user)
            {
                $id = $user->id;
                $name = $user->name;
                $email = $user->email;
                $password = $user->password;
                $role = $user->role;
                $newUser = new UserModel($id, $name, $email, $password, $role);
                array_push($userArr, $newUser);
            }
            return $userArr;
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }

    //Gets a spacific user from the database
        
    /**
     * getUser
     *
     * @param  mixed $id
     * @return void
     */
    public function getUser($id)
    {
        try
        {
            $user= DB::table('users')->find($id);
            
            $name = $user->name;
            $email = $user->email;
            $password = $user->password;
            $role = $user->role;
            $temp = new UserModel($id, $name, $email, $password, $role);
        
            return $temp;
           
        }
        catch (Exception $e)
        {
            $e->getMessage();
        }
    }
    

    //Edits a user from the database    
    /**
     * editUser
     *
     * @param  mixed $user
     * @return void
     */
    public function editUser(UserModel $user)
    {
        try
        {
            $this->dbquery = "UPDATE users SET name='{$user->name}', 
                                email='{$user->email}', role='{$user->role}' 
                                WHERE id='{$user->id}'";
                                
            
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
            echo $e->getMessage();
        } 
    }
    

    //Suspends a user from the database    
    /**
     * suspend
     *
     * @param  mixed $id
     * @return void
     */
    public function suspend($id)
    {
        try 
        {
            $result = DB::table('users')->where('id', $id)->update(['role' => 'suspended']);
            
            echo $result;
            if($result > 0)
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
    

    //Deletes a user from the database    
    /**
     * delete
     *
     * @param  mixed $id
     * @return void
     */
    public function delete($id)
    {
        try 
        {
            $result =  DB::table('users')->where('id',$id)->delete();
           
            if ($result > 0)
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

    //Adds new info to the database    
    /**
     * addNewInfo
     *
     * @param  mixed $info
     * @param  mixed $id
     * @return void
     */
    public function addNewInfo(MoreInfoModel $info, $id)
    {
        try
        {
            $values = (['userID'=> $id, 'age'=> $info->age, 'gender'=> $info->gender, 'phonenumber' => $info->phonenumber, 'address' => $info->address]);
            $result = DB::table('moreinfo')->insert($values);
                       // If the selected query returns a result set

            
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

    //Adds user portfolio to the database    
    /**
     * addGymProfile
     *
     * @param  mixed $port
     * @param  mixed $id
     * @return void
     */
    public function addUserGymProfile(UserGymProfileModel $port, $id)
    {
        try
        {
            $values = (['userID'=> $id, 'gymGoals'=> $port->gymGoals, 'gymExperience'=> $port->gymExperience, 'workoutPrefrence'=> $port->workoutPrefrence]);
            $result = DB::table('gymprofile')->insert($values);
            
            echo $result;
            // If the selected query returns a result set
            
            if($result > 0)
            {
                mysqli_close($this->conn);
                echo "data inserted";
                
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
    

    //Gets user portfolio from the database    
    /**
     * getGymProfile
     *
     * @param  mixed $id
     * @return void
     */
    public function getUserGymProfile($id)
    {
        try
        {
            
            $UserGymProfile = DB::table('gymprofile')->where('userID', $id)->first();
            
            $gymGoals = $UserGymProfile->gymGoals;
            $gymExperience = $UserGymProfile->gymExperience;
            $workoutPrefrence = $UserGymProfile->workoutPrefrence;
            
            $temp = new UserGymProfileModel($gymGoals, $gymExperience, $workoutPrefrence);
            
            return $temp;
        }
        catch (Exception $e)
        {
            $e->getMessage();
        }
    }


    //Gets user profile from the database    
    /**
     * getUserProfile
     *
     * @param  mixed $id
     * @return void
     */
    public function getUserProfile($id)
    {
        try
        {
            $UserProfile = DB::table('userportfolio')->where('userID', $id)->first();

            $gymGoals = $UserPortfolio->gymGoals;
            $gymExperience = $UserPortfolio->gymExperience;
            $workoutPrefrence = $UserPortfolio->workoutPrefrence;

            $temp = new getUserProfile($gymGoals, $gymExperience, $workoutPrefrence);

            return $temp;
        }
        catch (Exception $e)
        {
            $e->getMessage();
        }
    }
    

    //This is an old method that I am working on converting to use in the future    
    /**
     * getGroups
     *
     * @param  mixed $id
     * @return void
     */
    public function getGroups($id){
    	try {
    		
    		$stmt = $this->conn->prepare("SELECT *
                             FROM groups
                             INNER JOIN groupmembers
                             ON groups.groupID=groupmembers.groupID
                             AND groupmembers.memberID = ?
                             ");
    		
    		if (!$stmt){
    			echo "Binding process";
    			exit;
    		}
    		$stmt ->bind_param("s", $id);
    		$stmt->execute();
    		$stmt->store_result();
    		if (!$stmt->bind_result($groupid, $groupname, $interest,  $type, $description, $gid, $gname, $memberid)){
    			echo "Something wrong in the binding process. sql error? ";
    			return null;
    			exit;
    		}
    		if ($stmt->num_rows == 0){
    			return null;
    		}
    		else {
    			$groups_array = array();
    			while ($stmt->fetch()){
    				$g = new GroupModel($groupid, $groupname, $interest,  $type, null, $description, null);
    				array_push($groups_array, $g);
    			}
    			return $groups_array;
    		}
    	}
    	catch (Exception $e)
    	{
    		echo $e->getMessage();
    	}
    }
}