<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;
use App\Models\userCredentials;
use App\Models\User;
use App\Services\Business\SecurityService;
use App\Services\Business\UserBusinessService;
use App\Services\Utility\MyLogger2;

class EntryController extends Controller
{

    public function onLogin(Request $request)
    {
        // MyLogger2::info("Entered UserController's onLogin()");

        // Call the ValidateForm:
        // $this->validateLoginForm($request);
        try
        {
            // Calling Business Services -
            $userAttempt = new userCredentials($request->input('username'), $request->input('password'));

            $service = new SecurityService();
            $userData = $service->authenticate($userAttempt);

            // If no such User was registered
            if (! $userData)
                return view('login.loginStatus')->with('message', "Login Failure");

            // translate query array into object
            $userData = get_object_vars($userData);

            if ($userData['ROLE'] == "suspended")
            {return view('error.suspended');}

            // Creating sessions here to get the user's ID & Role.
            Session::put('userID', $userData['ID']);
            Session::put('role', $userData['ROLE']);
            Session::put('principal', 'true');

            // MyLogger2::info("Exiting UserController's onLogin()", $userData);

            return view('home.home')->with('user', $userData);
        }
        /*
         * catch(ValidationException $el)
         * {
         * // MyLogger2::error("Validation error in UserController's onLogin()", array("message" => $el->getMessage()));
         * throw $el;
         * }
         */
        catch (Exception $e)
        {
            // MyLogger2::error("Error in UserController's onLogin()", array("message" => $e->getMessage()));

            // Return the Error Page:
            return view('error.commonError');
        }
    }

    public function onRegister(Request $request)
    {
        MyLogger2::info("Entered UserController's onRegister()");

        // Call the ValidateForm:
        // $this->validateRegistrationForm($request);

        try
        {
            // Get the request data into variables
            $id = "";
            $firstName = $request->input('firstname');
            $lastName = $request->input('lastname');
            $username = $request->input('username');
            $password = $request->input('password');
            $email = $request->input('email');
            $phone = $request->input('phone');
            $role = $request->input('role');

            // Create a User object and populate it with the requested data.
            $user = new User($id, $firstName, $lastName, $username, $password, $email, $phone, $role);

            // Call the Business Service to register
            $userBusiness = new UserBusinessService();
            $isRegisterAttempt = $userBusiness->register($user);

            // if Registration process is true.
            if ($isRegisterAttempt)
            {
                // MyLogger2::info("Exited UserController's onRegister() successfully");

                Session::put('role', $request->input('role'));
                return view('login&registration.registerstatus')->with('message', $message = "Registered Successfully!");
            }

            // MyLogger2::info("Exited UserController's onRegister() unsuccessfully");

            return view('login&registration.registerstatus')->with('message', $message = "Did not register. Try again.");
        }
        catch (Exception $e)
        {
            // MyLogger2::error("Error UserController's onRegister()", array("message" => $e->getMessage()));

            return view('error.commonError')->with('message', $e->getMessage());
        }
    }
}
