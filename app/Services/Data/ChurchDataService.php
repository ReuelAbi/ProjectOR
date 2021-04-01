<?php

namespace App\Services\Data;

use App\Services\Utility\DatabaseException;

class ChurchDataService
{
    // Declare Connection variables
    private $conn;
    
    public function __construct($conn)
    {
        $this->conn = $conn;
    }
    
    /**
     * 
     * @throws DatabaseException
     * @return boolean
     */
    public function findAll()
    {
        try
        {
            // Create a MySQL Statement
            $result = $this->conn->prepare("SELECT * FROM church");
            $result->execute();
            
            // Return if there are any Churches in the database. 
            if($result->rowCount() >= 1)
                return $result->fetchAll();
            else
                return false;
        }
        catch(DatabaseException $dbe)
        {
            // Throw the Database Exception
            throw new DatabaseException("Database Exception:" . $dbe->getMessage(), 0, $dbe);
        }
    }
}