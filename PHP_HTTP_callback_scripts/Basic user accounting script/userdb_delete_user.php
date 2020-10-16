<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
}
else {
  $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
}

$response = 'result=0';
try {
  $sqlConnection = new PDO($dataSourceName, $databaseUser, $databasePassword);
  $sqlConnection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

  // Check if a user with the same name already exists
  $sqlStatement = $sqlConnection->prepare('DELETE FROM users WHERE user_id = :user_id');
  $sqlStatement->bindParam(':user_id', $user_id);
  $sqlStatement->execute();
  
  $sqlConnection = null;
  $response = 'result=1';
}
catch(PDOException $e) {
  $response = 'result=0&result_error_text='.urlencode('MySQL PDO error: '.$e->getMessage());
}

echo $response;
exit;
?>
