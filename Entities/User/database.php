<?php 

class Database {
    private $servename = "localhost";
    private $user = "root";
    private $password = "kamal12345";
    private $dbname = "connectfy" ;
    function connect(){
      
      $conn = NULL ;
      try {
        $conn = new PDO("mysql:host={$this->servename};dbname={$this->dbname}", $this->user, $this->password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e) {
          echo "Connection failed: " . $e->getMessage();
        }
        return $conn ;
   }
    }

    $obj = new Database();
    $obj->connect();
?>