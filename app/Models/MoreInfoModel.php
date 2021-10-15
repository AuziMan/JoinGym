<?php
namespace App\Models;

/**
 * @author AustinDriver
 *
 */
class MoreInfoModel
{
    public $age;
    public $gender;
    public $phonenumber;
    public $address;
    
    public function __construct($age, $gender, $phonenumber, $address)
    {
        $this->age = $age;
        $this->gender = $gender;
        $this->phonenumber = $phonenumber;
        $this->address = $address;
    }
    
    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }
    
    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }
    
    /**
     * @return mixed
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }
    
    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }
    
    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
    
    /**
     * @param mixed $gender
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
    }
    
    /**
     * @param mixed $phonenumber
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;
    }
    
    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }
}