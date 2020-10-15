<?php
try {
  $sqlConnection = new PDO($dataSource, $databaseUser, $databasePassword);
  $sqlConnection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

  // Drop the users table
  $sqlStatement = $sqlConnection->prepare('DROP TABLE '.$databaseName.'.users');
  $sqlStatement->execute();

  // Drop the database
  $sqlStatement = $sqlConnection->prepare('DROP DATABASE '.$databaseName);
  $sqlStatement->execute();

  $sqlConnection = null;
  echo 'result=1';
  exit;
}
catch(PDOException $e) {
  echo 'result=0&result_error_text='.urlencode('MySQL PDO error: '.$e->getMessage());
  exit;
}
?>
