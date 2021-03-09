<?php
namespace App\Services\Business;

use App\Services\Data\SurveyDataService;

class SurveyBusinessService
{
    public function gather()
    {
        // Call Data Access Object
        $dao = new SurveyDataService();
        $result = $dao->findAll();
        
        // Return the Array to SurveyController
        return $result; 
    }
}