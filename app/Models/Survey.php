<?php

namespace App\Models;

class Survey
{
    // Declare Variables
    private $id;
    private $question;
    private $optOne;
    private $optTwo;
    private $optThree;
    private $optFour;
    
    /**
     * 
     * @param integer $id
     * @param String $question
     * @param $optOne
     * @param $optTwo
     * @param $optThree
     * @param $optFour
     */
    public function __construct($id, $question, $optOne, $optTwo, $optThree, $optFour)
    {
        // Assign class member variables the param values
        $this->id = $id;
        $this->question = $question;
        $this->optOne = $optOne;
        $this->optTwo = $optTwo;
        $this->optThree = $optThree;
        $this->optFour = $optFour;
    }
    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return String
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param String $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @return mixed
     */
    public function getOptOne()
    {
        return $this->optOne;
    }

    /**
     * @param mixed $optOne
     */
    public function setOptOne($optOne)
    {
        $this->optOne = $optOne;
    }

    /**
     * @return mixed
     */
    public function getOptTwo()
    {
        return $this->optTwo;
    }

    /**
     * @param mixed $optTwo
     */
    public function setOptTwo($optTwo)
    {
        $this->optTwo = $optTwo;
    }

    /**
     * @return mixed
     */
    public function getOptThree()
    {
        return $this->optThree;
    }

    /**
     * @param mixed $optThree
     */
    public function setOptThree($optThree)
    {
        $this->optThree = $optThree;
    }

    /**
     * @return mixed
     */
    public function getOptFour()
    {
        return $this->optFour;
    }

    /**
     * @param mixed $optFour
     */
    public function setOptFour($optFour)
    {
        $this->optFour = $optFour;
    }
}