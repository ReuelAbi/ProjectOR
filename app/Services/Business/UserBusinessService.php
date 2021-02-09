<?php

namespace App\Services\Business;

use App\Models\User;
use App\Services\Data\UserDataService;
use App\Services\Utility\DatabaseConnection;

class UserBusinessService
{
    /**
     * Register the User
     * @param User $user
     * @return boolean
     */
    public function register(User $user)
    {
//         MyLogger2::info("Enter UserBusinessService.register()");
        
        // Call the DAO to create a User in the database
        $userData = new UserDataService();
        $isRegistered = $userData->create($user);
        
        if ($isRegistered)
        {
            // Return the User value
//             MyLogger2::info("Exit UserBusinessService.register() with true.");
            return $isRegistered;
        }
        
        // Return boolean value false if registration fails
//         MyLogger2::info("Exit UserBusinessService.register() with false.");
        return false;
    }
}