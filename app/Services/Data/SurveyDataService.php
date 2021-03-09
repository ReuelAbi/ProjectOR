<?php
namespace App\Services\Data;

use App\Services\Utility\DatabaseConnection;
use App\Services\Utility\DatabaseException;
use Exception;

class SurveyDataService
{
    // Declare Variables    
    private $db;
    private $conn;
    
    /**
     * Default Constructor - Establishing the Database Connection
     */
    public function __construct()
    {
        // Call the Database Connection
        $this->db = new DatabaseConnection();
        $this->conn = $this->db->getConnection();
    }
    
    /**
     * findAll Survey Questions
     * @throws DatabaseException
     * @throws Exception
     * @return array
     */
    public function findAll()
    {
        
        try
        {
            // Find all the Survey Questions
            $result = $this->conn->prepare("SELECT * FROM `survey`");
            $result->execute();
            
            // Return the array to the Business Service
            return $result->fetchAll();
        }
        catch(DatabaseException $e)
        {
            // Throw a Database Exception
            throw new DatabaseException("Database Exception:" . $e->getMessage(), 0, $e);
        }
        catch (Exception $exc)
        {
            // Throw an Exception
            throw new Exception("Exception" . $exc->getMessage(), 0, $exc);
        }
        finally
        {
            // Close the PDO Connection
            $this->conn = null;
        }
    }
}