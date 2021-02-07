<?php
namespace App\Services\Utility;

use Illuminate\Support\Facades\Log;
use PDO;
use PDOException;

class DatabaseConnection
{

    // Declare Variables
    private $conn;

    /**
     * Get Connection and return it to the Data Service
     *
     * @throws DatabaseException
     * @return \PDO
     */
    public function getConnection()
    {
        try
        {
            // Set the values of database to variables
            $servername = config("database.connections.mysql.host");
            $port = config("database.connections.mysql.port");
            $username = config("database.connections.mysql.username");
            $password = config("database.connections.mysql.password");
            $dbname = config("database.connections.mysql.database");

            // Use PDO Connection
            $conn = new PDO("mysql:host=$servername;port=$port;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            /* // Use mysqli connection
            $conn = mysqli_connect($servername, $username, $password, $dbname, $port);
            
            // Check connection
            if (!$conn)
            {
                die ("Connection failed: " . mysqli_connect_error());
            } */
            
            // Return the Connection
            return $conn;
        }
        catch (PDOException $e)
        {
            Log::error("Exception: ", array(
                "message" => $e->getMessage()
            ));
            // throw Database Exception
            throw new DatabaseException("Database Exception:" . $e->getMessage(), 0, $e);
        }
    }
}