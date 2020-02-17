<?php
namespace App\Core;
class DatabaseConnection {


private $dbConfiguration;
private $pdo;

public function __construct(DatabaseConfiguration $dbConfiguration)
{
  $this->dbConfiguration = $dbConfiguration;
}


public function getConnection(): \PDO {

if(!$this->pdo) {
  $this->pdo = new \PDO($this->dbConfiguration->getConnectionString()
  , $this->dbConfiguration->getUsername(),
    $this->dbConfiguration->getPassword()
);
}
return $this->pdo;
}
}