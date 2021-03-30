<?php
namespace App\Services\Business;

use App\Services\Utility\DatabaseConnection;
use App\Services\Data\ResourceDataService;

class ResourceBusinessService
{
    // Declare a Connection variable
    private $conn;
    
    public function gatherAll()
    {
        // Create Database Connection
        $this->conn = (new DatabaseConnection())->getConnection();
        
        // Call DAO service to fetch all the Resources from the Database
        $dao = new ResourceDataService($this->conn);
        $resourceList = $dao->findAll();
        
        // Close the PDO Connection
        $this->conn = null;
        
        // Return the list of resources
        return $resourceList;
    }
}

