<?php



class DatabaseConnection
{

    private $connection;
    private static $_dbcSingleInstance; //The single instance
    private $isConnected = false; //we dont have to use it
    private $dbServer = "localhost";
    private $dbUser = "root";
    private $dbPassword = "admin";
    private $dbName = "apischema";
    
    //create the server,user,password,and db name as class prop also!
    //the constructor is private cannot instansiate from this class
    private function __construct()
    {
        $this->connection = new mysqli($this->dbServer, $this->dbUser, $this->dbPassword, $this->dbName);

        if ($this->connection->connect_errno) {
            $this->isConnected = false;
           
            exit();
        } else {
            $this->isConnected = true;
        }
    }

    //get database connection singel instance
    public static function getDBCSingleInstance()
    {

        if (!self::$_dbcSingleInstance) { // If no instance then make one
            self::$_dbcSingleInstance = new DatabaseConnection();
        }
        return self::$_dbcSingleInstance;
    }

    public function SelectQuery($q)
    {
        $resObj = $this->connection->query($q);
        while ($row = $resObj->fetch_object()) {
            $arr[]= $row;
        }
        return $arr;
    }

    

    public function InsertQuery($q)
    {
        $resObj = $this->connection->query($q) or die(mysqli_error($this->connection));
        ;
        if ($resObj) {
            return $this->connection->insert_id;
        }
        return false;
    }

    

    public function Disconnect()
    {
        $this->connection->close();
    }
}
