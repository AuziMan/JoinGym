<?php
namespace App\Models;

/**
 *
 * @author AustinDriver
 *        
 */

         //Setting my public variables

/**
 * UserPortfolioModel
 */
class UserPortfolioModel
{

    public $gymGoals;

    public $gymExperience;

    public $workoutPrefrence;


        //Creating my constructor for my variables
    
    /**
     * __construct
     *
     * @param  mixed $gymGoals
     * @param  mixed $gymExperience
     * @param  mixed $workoutPrefrence
     * @return void
     */
    public function __construct($gymGoals, $gymExperience, $workoutPrefrence)
    {
        $this->gymGoals = $gymGoals;
        $this->gymExperience = $gymExperience;
        $this->workoutPrefrence = $workoutPrefrence;
    }

    /**
     *
     * @return mixed
     */
    public function getgymGoals()
    {
        return $this->gymGoals;
    }

    /**
     *
     * @return mixed
     */
    public function getgymExperience()
    {
        return $this->gymExperience;
    }

    /**
     *
     * @return mixed
     */
    public function getworkoutPrefrence()
    {
        return $this->workoutPrefrence;
    }

    /**
     *
     * @param mixed $jobHistory
     */
    public function setgymGoals()
    {
        return $this->gymGoals;
    }

    /**
     *
     * @return mixed
     */
    public function setgymExperience()
    {
        return $this->gymExperience;
    }

    /**
     *
     * @return mixed
     */
    public function setworkoutPrefrence()
    {
        return $this->workoutPrefrence;
    }
}