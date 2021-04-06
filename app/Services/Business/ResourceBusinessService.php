<?php
namespace App\Services\Business;

use App\Services\Utility\DatabaseConnection;
use App\Services\Data\ResourceDataService;
use App\Services\Data\ChurchDataService;
use App\Models\Organization;

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
    
    public function gatherAllChurches()
    {
        // Create Database Connection
        $this->conn = (new DatabaseConnection())->getConnection();
        
        // Call DAO service to fetch all the Churches from the Database
        $dao = new ChurchDataService($this->conn);
        $churchList = $dao->findAll();
        
        // Close the PDO Connection
        $this->conn = null;
        
        // Return the list of churches
        return $churchList;
    }
    
    public function gatherSpecific(Organization $org)
    {
        // Create Database Connection
        $this->conn = (new DatabaseConnection())->getConnection();
        
        // Call DAO to fetch the details of an organization by ID
        $orgInfo = (new ResourceDataService($this->conn))->findById($org);
        
        // Close the PDO Connection
        $this->conn = null;
        
        return $orgInfo;
    }
}

