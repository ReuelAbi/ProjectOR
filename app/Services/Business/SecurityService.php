<?php
namespace App\Services\Business;

use App\Models\userCredentials;
use App\Services\Data\UserDataService;

class SecurityService
{

    /**
     * Authenticate function
     * @param userCredentials $usrAttmpt
     * @return boolean
     */
    public function authenticate(userCredentials $usrAttmpt)
    {
        // MyLogger2::info("Enter SecurityService.authenticate()");

        // Call the DAO to find by UserCredentials
        $userData = new UserDataService();
        $result = $userData->findbyUserCredentials($usrAttmpt);
        
        return $result;
    }
}