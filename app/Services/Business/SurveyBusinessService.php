<?php
namespace App\Services\Business;

use App\Services\Data\SurveyDataService;
use App\Services\Data\ResourceDataService;

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
    
    public function generatePhases($param)
    {
        // Build the algorithm
        
        // Join the tags with the phases needed.      
        
    }
    
    public function gatherResources()
    {
        // Call the Data Access Layer
        $daoService = new ResourceDataService();
        return $daoService->findAll();
    }
}