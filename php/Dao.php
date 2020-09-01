<?php

class Dao {

  private $host = 'us-cdbr-iron-east-01.cleardb.net';
  private $dbname = 'heroku_b2c5f55c93b1823';
  private $username = 'b2dde2f0af7810';
  private $password = 'aa1e7902';

  public function getConnection() {
    try {
       $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
    } catch (Exception $e) {
      return null;
    }
    return $connection;
  }
  
  public function checkLogin($user, $pass) {
    $conn = $this->getConnection();
    $saveQuery = "select * from user where email = :user and password = :pass";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":user", $user);
    $q->bindParam(":pass", $pass);
    try {
      $q->execute();
	  $count = $q->rowCount();
	  if($count == 1)
	  {
		return 1;
	  }
	  else
	  {
		return 0;
	  }
	} 
	catch(Exception $e) { 
      echo print_r($e,1);
      exit;
    }
  }
  
  public function checkAdmin($user) {
    $conn = $this->getConnection();
    $saveQuery = "select access from user where email = :user and access = 1";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":user", $user);
    try {
      $q->execute();
	  $count = $q->rowCount();
	  if($count == 1)
	  {
		return 1;
	  }
	  else
	  {
		return 0;
	  }
	} 
	catch(Exception $e) { 
      echo print_r($e,1);
      exit;
    }
  }
  
  public function registerUser($user, $pass, $name) {
    $conn = $this->getConnection();
    $saveQuery = "insert into user (email, name, password, access) values (:user, :name, :pass, 0)";
    $q = $conn->prepare($saveQuery);
    $q->bindParam(":user", $user);
	$q->bindParam(":name", $name);
    $q->bindParam(":pass", $pass);
	if($q->execute())
	{
		return 1;
	} 
	else
	{
	  return 0;
    }
  }
  
  public function getTable($table) {
    $conn = $this->getConnection();
    if(is_null($conn)) {
      return;
    }
    try {
      return $conn->query("select ammoName, ammoType, damageVal, penPower, armorDamage, fragmentChance from bullets", PDO::FETCH_ASSOC);
    } catch(Exception $e) {
      echo print_r($e,1);
      exit;
    }
  }
 }
