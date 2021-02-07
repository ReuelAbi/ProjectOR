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
    private $db;
    private $conn;
    
    public function __construct()
    {
        $this->db = new DatabaseConnection();
        $this->conn = $this->db->getConnection();
    }

    /* // Declare Connection Variables
    private $db;
    private $conn;
    
    // Non-default constructor for Connection
    public function __construct()
    {
        $this->db = new DatabaseConnection();
        $this->conn = $this->db->getConnection();
    } */
    
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
            
            if($result->rowCount() == 1)
            {
//                 MyLogger2::info("Exit UserDataService.findByUser() with true");
                return $result->fetch(PDO::FETCH_OBJ);
            }
            else
            {
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
            
            // change this to :variable for bindparam
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
//                 MyLogger2::info("Exit UserDataService.create() with true");
                return $usr;
            }
            else
            {
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