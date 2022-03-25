<?php
namespace App\Models;

/**
 * gymModel
 */
class gymModel
{
    private $gymID;
    private $gymName;
    private $description; 
    private $style;   
    /**
     * __construct
     *
     * @param  mixed $gymID
     * @param  mixed $gymName
     * @param  mixed $open
     * @param  mixed $memberCount
     * @param  mixed $description
     * @return void
     */
    public function __construct($gymID, $gymName, $description, $style)
    {
        $this->gymID = $gymID;
        $this->gymName = $gymName;
        $this->description = $description;
        $this->style = $style;
    }
    
 
    public function getStyle()
    {
        return $this->style;
    }

    public function setStyle($style)
    {
        return $this->$style;
    }
 
    /**
     * @return mixed
     */
    public function getgymID()
    {
        return $this->gymID;
    }

    /**
     * @param mixed $gymID
     */
    public function setgymID($gymID)
    {
        $this->gymID = $gymID;
    }

    /**
     * @return mixed
     */
    public function getgymName()
    {
        return $this->gymName;
    }

    /**
     * @param mixed $gymName
     */
    public function setgymName($gymName)
    {
        $this->gymName = $gymName;
    }


    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }



    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    
}

