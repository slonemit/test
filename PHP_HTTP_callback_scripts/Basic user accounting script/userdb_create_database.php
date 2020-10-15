<?php
try {
  $sqlConnection = new PDO($dataSource, $databaseUser, $databasePassword);
  $sqlConnection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $sqlConnection->beginTransaction(); 

  // Create the database
  $sqlStatement = $sqlConnection->prepare('CREATE DATABASE IF NOT EXISTS '.$databaseName);
  $sqlStatement->execute();

  // Create the 'users' table
  $sqlStatement = $sqlConnection->prepare('CREATE TABLE IF NOT EXISTS '.$databaseName.'.users (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR(80), password VARCHAR(80), credits INT, ip_number VARCHAR(80), routing_list VARCHAR (255))');
  $sqlStatement->execute();
  
  $sqlConnection->commit();
  $sqlConnection = null;
  echo 'result=1';
  exit;
}
catch(PDOException $e) {
  echo 'result=0&result_error_text='.urlencode('MySQL PDO error: '.$e->getMessage());
  exit;
}
?>
