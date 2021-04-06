<?php
namespace App\Services\Data;

use App\Services\Utility\DatabaseException;
use App\Models\Organization;

class ResourceDataService
{   
    private $conn;
    
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    
    /**
     * Find all the Resources used
     * @return array|boolean
     */
    public function findAll()
    {        
        try
        {
            // Create the MySQL Statement
            $result = $this->conn->prepare("SELECT * FROM `resource`");
            $result->execute();
            
            // Check if the Result has any rows
            if($result->rowCount() >= 1)
            {
                // Return the result object
                //                 MyLogger2::info("Exit UserDataService.findByUser() with true");
                return $result->fetchAll();
            }
            else
            {
                // Return the boolean value false if there was no verification
                //                 MyLogger2::info("Exit UserDataService.findByUser() with false");
                return false;
            }
        }
        catch(DatabaseException $dbe)
        {
            /* MyLogger2::error("DatabaseException: ", array(
             "message" => $e->getMessage()
             )); */
            throw $dbe->getMessage();
        }
    }
    
    /**
     * 
     * @param Organization $org
     * @return Organization|boolean
     */
    public function findById(Organization $org)
    {
        try
        {
            $id = $org->getId();
            
            // Create the MySQL Statement
            $result = $this->conn->prepare("SELECT * FROM `resource` WHERE RESOURCE_ID = :id");
            $result->bindParam('id', $id);
            $result->execute();
            
            // Check if there was any result
            if($result->rowCount())
                return $result->fetch();
            else
                return false;
        }
        catch(DatabaseException $db)
        {
            // Throw a message
            throw $db->getMessage();
        }
    }
}