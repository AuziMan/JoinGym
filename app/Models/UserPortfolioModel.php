<?php
namespace App\Models;

/**
 *
 * @author AustinDriver
 *        
 */
class UserPortfolioModel
{

    public $jobHistory;

    public $jobSkills;

    public $education;

    public function __construct($jobSkills, $jobHistory, $education)
    {
        $this->jobSkills = $jobSkills;
        $this->jobHistory = $jobHistory;
        $this->education = $education;
    }

    /**
     *
     * @return mixed
     */
    public function getJobHistory()
    {
        return $this->jobHistory;
    }

    /**
     *
     * @return mixed
     */
    public function getJobSkills()
    {
        return $this->jobSkills;
    }

    /**
     *
     * @return mixed
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     *
     * @param mixed $jobHistory
     */
    public function setJobHistory($jobHistory)
    {
        $this->jobHistory = $jobHistory;
    }

    /**
     *
     * @param mixed $jobSkills
     */
    public function setJobSkills($jobSkills)
    {
        $this->jobSkills = $jobSkills;
    }

    /**
     *
     * @param mixed $education
     */
    public function setEducation($education)
    {
        $this->education = $education;
    }
}