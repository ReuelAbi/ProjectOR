<?php

namespace App\Services\Data;

use App\Models\User;
use App\Models\userCredentials;
use App\Services\Utility\DatabaseConnection;
use App\Services\Utility\DatabaseException;
use PDO;
use PDOException;

class UserDataService
{
    // Declare two variables for connection's sake
    private $db;
    private $conn;
    
    public function __construct()
    {
        // Call the Database Connection and return the Connection
        $this->db = new DatabaseConnection();
        $this->conn = $this->db->getConnection();
    }
    
    /**
     * Read or Verify the User's credentials for verification
     * @param userCredentials $userAttempt
     * @return mixed|boolean
     */
    public function findbyUserCredentials(userCredentials $userAttempt)
    {
//         MyLogger2::info("Enter UserDataService.findbyUser()");
        
        try
        {            
            $username = $userAttempt->getUsername();
            $password = $userAttempt->getPassword();
            
            $result = $this->conn->prepare('SELECT USER_ID, FIRSTNAME, LASTNAME, USERNAME, PASSWORD, EMAIL, PHONE, ROLE FROM `user` WHERE USERNAME = :username AND PASSWORD = :password');
            $result->bindParam(':username', $username);
            $result->bindParam(':password', $password);
            $result->execute();
            
            // Check if the Result has any rows
            if($result->rowCount() == 1)
            {
                // Return the result object
//                 MyLogger2::info("Exit UserDataService.findByUser() with true");
                return $result->fetch(PDO::FETCH_OBJ);
            }
            else
            {
                // Return the boolean value false if there was no verification
//                 MyLogger2::info("Exit UserDataService.findByUser() with false");
                return false;
            }
        }
        catch(DatabaseException $e)
        {
            /* MyLogger2::error("DatabaseException: ", array(
                "message" => $e->getMessage()
            )); */
            return false;
        }
        finally 
        {
            // Close the connection
            $this->conn = null;
        }
    }
    
    public function create(User $usr)
    {
        try
        {
            // Gather data from User object passed
            $id = $usr->getId();
            $firstName = $usr->getFirstName();
            $lastName = $usr->getLastName();
            $username = $usr->getUsername();
            $password = $usr->getPassword();
            $email = $usr->getEmail();
            $phone = $usr->getPhone();
            $role = $usr->getRole();
            
            // Type the MySQL Query here
            $result = $this->conn->prepare("INSERT INTO `user` (`USER_ID`, `FIRSTNAME`, `LASTNAME`, `USERNAME`, `PASSWORD`, `EMAIL`, `PHONE`, `ROLE`) VALUES(:id, :firstname, :lastname, :username, :password, :email, :phone, :role)");
            $result->bindParam(':id', $id);
            $result->bindParam(':firstname', $firstName);
            $result->bindParam(':lastname', $lastName);
            $result->bindParam(':username', $username);
            $result->bindParam(':password', $password);
            $result->bindParam(':email', $email);
            $result->bindParam(':phone', $phone);
            $result->bindParam(':role', $role);
            $result->execute();
            
            // Check if the result has any rows
            if($result->rowCount() == 1)
            {
                // Return the User
//                 MyLogger2::info("Exit UserDataService.create() with true");
                return $usr;
            }
            else
            {
                // Return the boolean value false
//                 MyLogger2::info("Exit UserDataService.create() with false");
                return false;
            }
        }
        catch(PDOException $e)
        {
            /* MyLogger2::error("PDOException: ", array(
                "message" => $e->getMessage()
            )); */
            throw new DatabaseException("Database Exception: " . $e->getMessage(), 0, $e);
        }
        catch(DatabaseException $dbe)
        {
            /* MyLogger2::error("DatabaseException: ", array(
                "message" => $dbe->getMessage()
            )); */
            return false;
        }
        finally
        {
            // Close the PDO Connection
            $this->conn = null;
        }
    }
}