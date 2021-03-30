<?php
namespace App\Services\Data;

use App\Services\Utility\DatabaseConnection;
use App\Services\Utility\DatabaseException;
use Exception;

class PhaseDataService
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
    
}