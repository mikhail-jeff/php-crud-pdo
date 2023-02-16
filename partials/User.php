<?php

  require_once 'Database.php';

  class User extends Database
  {
    protected $tableName = 'usertable';

    //* Function to add user
    public function add($data){

      if(!empty($data)){
        $fields=$placeholder=[];
        foreach($data as $field => $value){
          $fields[]=$field;
          $placeholder[]=":{field}";
        }
      }

      $sql = "INSERT INTO {$this->tableName} (". implode(',', $fields).") VALUES (". implode(',', $placeholder).")";

      $stmt=$this->conn->prepare($sql);
      try {
        $this->conn->beginTransaction();
        $stmt->execute($data);
        $lastInsertedId=$this->conn->lastInsertId();
        $this->conn->commit();
        return $lastInsertedId;
      } catch (PDOException $e) {
        echo "Error:".$e->getMessage();
        $this->conn->rollback();
      }
    }

    //* Function to get rows
    public function getRows($start=0, $limit=5){

      $sql="SELECT * FROM  {$this->tableName} ORDER BY DESC LIMIT {$start}, {$limit}";

      $stmt=$this->conn->prepare($sql);
      $stmt->execute();

      if($stmt->rowCount() > 0){
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
      }else{
        $results=[];
      }
      return $results;
    }

    //* Function to get single row
    public function getRow($field, $value){
      $sql= "SELECT * FROM {$this->tableName} WHERE {$field}=:{$field}";

      $stmt=$this->conn->prepare($sql);
      $stmt->execute();

      if($stmt->rowCount() > 0){
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
      }else{
        $result=[];
      }
      return $result;
    }

    //* Function to count number of rows
    public function getCount(){
      $sql= "SELECT count(*) as pcount FROM {$this->tableName}";

      $stmt=$this->conn->prepare($sql);
      $stmt->execute();

      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      return $result['pcount'];
    }

    //* Function to upload photo
    //* Function to update
    //* Function to delete
    //* Function for search
  }



?>