<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
  $credits = isset($_POST['credits']) ? $_POST['credits'] : 0;
  $ip_number = isset($_POST['ip_number']) ? $_POST['ip_number'] : '';
  $routing_list = isset($_POST['routing_list']) ? $_POST['routing_list'] : '';
}
else {
  $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
  $password = isset($_GET['password']) ? $_GET['password'] : '';
  $credits = isset($_GET['credits']) ? $_GET['credits'] : 0;
  $ip_number = isset($_GET['ip_number']) ? $_GET['ip_number'] : '';
  $routing_list = isset($_GET['routing_list']) ? $_GET['routing_list'] : '';
}

$response = 'result=0';
try {
  $sqlConnection = new PDO($dataSourceName, $databaseUser, $databasePassword);
  $sqlConnection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $sqlConnection->beginTransaction(); 

  // Check if a user with the same name already exists
  $sqlStatement = $sqlConnection->prepare('SELECT COUNT(id) FROM users WHERE user_id = :user_id');
  $sqlStatement->bindParam(':user_id', $user_id);
  $sqlStatement->execute();
  if ($sqlStatement->fetchColumn() > 0) {
    $response = 'result=0&result_error_text='.urlencode('user \''.$user_id.'\' already exists.');
  }
  else {

    // Add the user 'user_id' to the database table 'users'
    $sqlStatement = $sqlConnection->prepare('INSERT INTO users (user_id,password,credits,ip_number,routing_list) VALUES (:user_id,:password,:credits,:ip_number,:routing_list)');
    $sqlStatement->bindParam(':user_id', $user_id);
    $sqlStatement->bindParam(':password', $password);
    $sqlStatement->bindParam(':credits', $credits, PDO::PARAM_INT);
    $sqlStatement->bindParam(':ip_number', $ip_number);
    $sqlStatement->bindParam(':routing_list', $routing_list);
    $sqlStatement->execute();
  
    $sqlConnection->commit();
    $sqlConnection = null;
    $response = 'result=1';
  }
}
catch(PDOException $e) {
  $response = 'result=0&result_error_text='.urlencode('MySQL PDO error: '.$e->getMessage());
}

echo $response;
exit;
?>
