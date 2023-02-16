<?php

  require_once 'Database.php';

  class User extends Database
  {
    protected $tableName = 'usertable';

    //* Function to add user
    public function add($data){

      if(!empty($data)){
        $fileds=$placeholder=[];
        foreach($data as $field => $value){
          $fileds[]=$field;
          $placeholder[]="{field}";
        }
      }

      $sql = "INSERT INTO {$this->tableName} (". implode(',', $fileds).") VALUES (". implode(',', $placeholder).")";

      $stmt=$this->conn->prepare($sql);
      try {
        $this->conn->beginTransaction();
        $stmt->execute($data);
        $lastInsertedId=$this->conn->lastInsertId();
        $this->conn->commit();
        return $lastInsertedId;
      } catch (PDOException $e) {
        echo "Error:".$e->getMessage();
        $this->conn->rollBack();
      }
    }

    //* Function to get row
    //* Function to get single row
    //* Function to count number of rows
    //* Function to upload photo
    //* Function to update
    //* Function to delete
    //* Function for search
  }



?>