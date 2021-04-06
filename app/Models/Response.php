<?php

namespace App\Models;

class Response
{
    // Declare variables
    private $firstOpt;
    private $secondOpt;
    private $thirdOpt;
    private $fourthOpt;
    
    public function __construct($firstOpt, $secondOpt, $thirdOpt, $fourthOpt)
    {
        // Assign values
        $this->firstOpt = $firstOpt;
        $this->secondOpt = $secondOpt;
        $this->thirdOpt = $thirdOpt;
        $this->fourthOpt = $fourthOpt;
    }
    
    /**
     * @return mixed
     */
    public function getFirstOpt()
    {
        return $this->firstOpt;
    }

    /**
     * @return mixed
     */
    public function getSecondOpt()
    {
        return $this->secondOpt;
    }

    /**
     * @return mixed
     */
    public function getThirdOpt()
    {
        return $this->thirdOpt;
    }

    /**
     * @return mixed
     */
    public function getFourthOpt()
    {
        return $this->fourthOpt;
    }
    
}