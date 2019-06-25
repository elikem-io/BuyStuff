

<?php

//PDO database connection
class Db{
    private $servername;
    private $username;
    private $password;
    private $dbname;

    protected function connect(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "buystuff";

      try {
        driver, host, database name
        $dsn = "mysql:host=.$this->servername.;dbname=.$this->dbname.;
        $pdo = new PDO($dsn, $this->username, $this->password);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
      } catch (PDOException $e) {
          echo "Connection failed".$e->getMessage()";
      }
    }
}
