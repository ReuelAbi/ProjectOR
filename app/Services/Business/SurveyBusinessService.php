<?php
namespace App\Services\Business;

use App\Services\Data\SurveyDataService;
use App\Services\Data\ResourceDataService;
use App\Services\Utility\DatabaseConnection;

class SurveyBusinessService
{
    // Declare Connection Variable
    private $conn;
    
    public function gather()
    {
        // Create Database Connection
        $this->conn = (new DatabaseConnection())->getConnection();
        
        // Call Data Access Object
        $dao = new SurveyDataService($this->conn);
        $result = $dao->findAll();
        
        // Close the Connection
        $this->conn = null;
        
        // Return the Array to SurveyController
        return $result; 
    }
    
    public function generatePhases($response)
    {
        // Create a Database Connection
//         $conn = (new DatabaseConnection())->getConnection();
        
        // Build the algorithm
        
        // Join the tags with the phases needed.      
        
        // Close the Database Connection
    }
    
    public function gatherResources()
    {
        // Create Database Connection
        $this->conn = (new DatabaseConnection())->getConnection();
        
        // Call the Data Access Layer
        $daoService = new ResourceDataService($this->conn);
        
        // Close the Connection
        $this->conn = null;
        
        // Return all the Reources gathered
        return $daoService->findAll();
    }
}