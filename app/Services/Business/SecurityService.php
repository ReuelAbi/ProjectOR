<?php
namespace App\Services\Business;

use App\Models\userCredentials;
use App\Services\Data\UserDataService;
use App\Services\Utility\DatabaseConnection;

class SecurityService
{
    // Declare variable for database connection
    private $conn;

    /**
     * Authenticate function
     * @param userCredentials $usrAttmpt
     * @return boolean
     */
    public function authenticate(userCredentials $usrAttmpt)
    {
        // MyLogger2::info("Enter SecurityService.authenticate()");

        // Create Database Connection
        $this->conn = (new DatabaseConnection())->getConnection();
        
        // Call the DAO to find by UserCredentials
        $userData = new UserDataService($this->conn);
        $result = $userData->findbyUserCredentials($usrAttmpt);
        
        // Close the Connection
        $this->conn = null;
        
        // Return the Result with User Data
        return $result;
    }
}