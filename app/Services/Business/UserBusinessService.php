<?php

namespace App\Services\Business;

use App\Models\User;
use App\Services\Data\UserDataService;
use App\Services\Utility\DatabaseConnection;

class UserBusinessService
{
    
    public function register(User $user)
    {
//         MyLogger2::info("Enter UserBusinessService.register()");
        
        /* $db = new DatabaseConnection();
        $conn = $db->getConnection(); */
        
        // Call the DAO to create a User in the database
        $userData = new UserDataService();
        $isRegistered = $userData->create($user);
        
        if ($isRegistered)
        {
//             MyLogger2::info("Exit UserBusinessService.register() with true.");
            return true;
        }
        
//         MyLogger2::info("Exit UserBusinessService.register() with false.");
        return false;
    }
}