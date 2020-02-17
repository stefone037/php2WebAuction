<?php


namespace App\Models;

use App\Core\DatabaseConnection;
abstract class Model {
  private $dbConnection;
  public function __construct(DatabaseConnection $dbConnection)
  {
    $this->dbConnection = $dbConnection;
  }


  protected function getFields() {
    return [];
  }

  protected function isFieldNameValid($name, $value) {
    $fields = $this->getFields();
    $supportedFields = array_keys($fields);

    if(!in_array($name, $supportedFields)) {
      return false;
    }
    return boolval($fields[$name]->isValid($value));
  }

  public function getTableName() {
    $fullModelClassName = static::class;
    $explodeFullModelClassName = explode("\\", $fullModelClassName);
    $modelClassName = $explodeFullModelClassName[count($explodeFullModelClassName)-1];
    $classNameWithoutModel = preg_replace("/Model/", '', $modelClassName);
    $classWithUnderscoreAndLowerCase = strtolower(preg_replace("/[A-Z]/", '_$0', $classNameWithoutModel));
    $tableName = substr($classWithUnderscoreAndLowerCase, 1);
    return $tableName;
  }
  public function getAll(): array {
  $query = "SELECT * FROM {$this->getTableName()}";
  $prep = $this->dbConnection->getConnection()->prepare($query);
  $items = [];
  $res = $prep->execute();
  if($res) {
    $items = $prep->fetchAll(\PDO::FETCH_OBJ);
  }
  return $items;
  }
  public function getById($id) {
  $query = "SELECT * FROM {$this->getTableName()} WHERE id = ?";
  $prep = $this->dbConnection->getConnection()->prepare($query);
  $res = $prep->execute([$id]);
    $item = null;
  if($res) {
    $item = $prep->fetch(\PDO::FETCH_OBJ);
  }
  return $item;
  }


  public function getAllByFieldsName($FieldNameValue) {
    
    $keys = array_keys($FieldNameValue);
    $values = array_values($FieldNameValue);
    $condition = '';
    foreach($keys as $key) {
      $condition .= "{$key} = ?" ;

      if(next($keys) === true) {
          $condition .= " AND ";
      }
    }
  $query = "SELECT * FROM {$this->getTableName()} WHERE {$condition}";
  $prep = $this->dbConnection->getConnection()->prepare($query);
  $res = $prep->execute($values);
$items = [];
  if($res) {

$items = $prep->fetchAll(\PDO::FETCH_OBJ);
  }

      return $items;
  }


  public function checkFieldListValid(array $data) {

    $fields = $this->getFields();

    $supportedFields = array_keys($fields);
    $requestedFields = array_keys($data);


    foreach($requestedFields as $requestedField) {
        if(!in_array($requestedField, $supportedFields)) {
          throw new \Exception("The field {$requestedField} is not supported!");
        }
        if(!$fields[$requestedField]->isEditable()) {
          throw new \Exception("The field {$requestedField} is not editable!");
        }
        if(!$fields[$requestedField]->isValid($data[$requestedField])) {
          throw new \Exception("The value {$requestedField} is  not valid!");
        }
    }
  }
  public function add(array $data) {
    $this->checkFieldListValid($data);
    $tableName = $this->getTableName();
    $getFieldsName = array_keys($data);
    $values = array_values($data);
    $numbersOfValue = count($data);
    $questionMarkString = str_repeat("?,", $numbersOfValue);
    $questionMarkString  = substr($questionMarkString, 0, strlen($questionMarkString)-1);
    $fieldsString = implode(', ', $getFieldsName);
    $query = "INSERT INTO {$tableName}({$fieldsString}) VALUES({$questionMarkString})";
    $prep = $this->dbConnection->getConnection()->prepare($query);
    $prep->execute($values);

    $result = $this->dbConnection->getConnection()->lastInsertId();
    
   return $result;
  }



  public function edit($id, array $data) {

      $item = $this->getById($id);
      if(!$item) {
        throw new \Exception('The item with this id doesn\' exist');
      }
    $this->checkFieldListValid($data);
      $queryString = '';
      $values = [];
      foreach($data as $item => $value) {
        $queryString .= "{$item} = ?";      
        if(next($data)) {
          $queryString .= ", ";
        }
        $values[] = $value;
      }
      $values[] = $id;
    $query = "UPDATE {$this->getTableName()}  SET {$queryString} WHERE id = ?";
    $prep = $this->dbConnection->getConnection()->prepare($query);
  
    $res = $prep->execute($values);
  
  }


  public function delete($id) {
    $item = $this->getById($id);
    if(!$item) {
      throw new \Exception('The item with this id doesn\' exist');
    }
  $query = "DELETE FROM {$this->getTableName()} WHERE id = ?";
  $prep = $this->dbConnection->getConnection()->prepare($query);
  
  return $prep->execute([$id]);
  }

  protected function getConnection() {
  return $this->dbConnection;
  }

  protected function getPDO() {

    return $this->dbConnection->getConnection();
  }


}