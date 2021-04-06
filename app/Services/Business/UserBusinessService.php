<?php

namespace App\Services\Business;

use App\Models\User;
use App\Services\Data\UserDataService;
use App\Services\Utility\DatabaseConnection;

class UserBusinessService
{
    private $conn;
    
    /**
     * Register the User
     * @param User $user
     * @return boolean
     */
    public function register(User $user)
    {
//         MyLogger2::info("Enter UserBusinessService.register()");

        // Create a Database Connection
        $this->conn = (new DatabaseConnection())->getConnection();
        
        // Call the DAO to create a User in the database
        $userData = new UserDataService($this->conn);
        $isRegistered = $userData->create($user);
        
        if ($isRegistered)
        {
            // Return the User value
//             MyLogger2::info("Exit UserBusinessService.register() with true.");
            return $isRegistered;
        }
        
        // Close the Connection
        $this->conn = null;
        
        // Return boolean value false if registration fails
//         MyLogger2::info("Exit UserBusinessService.register() with false.");
        return false;
    }
    
    /**
     * 
     * @param Int $userID
     * @return array|boolean
     */
    public function gather($userID)
    {
        // Create a Database Connection
        $this->conn = (new DatabaseConnection())->getConnection();

        // Call the DAO to gather the User's info
        $userInfo = (new UserDataService($this->conn))->findByUserId($userID);
        
        // Close the Database Connection
        $this->conn = null;
        
        // Return the User's Info
        return $userInfo;
    }
}