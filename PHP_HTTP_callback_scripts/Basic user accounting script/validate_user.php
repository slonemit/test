<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $source = isset($_POST['source']) ? $_POST['source'] : '';
  $ip_number = isset($_POST['ip_number']) ? $_POST['ip_number'] : '';
  $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
}
else {
  $source = isset($_GET['source']) ? $_GET['source'] : '';
  $ip_number = isset($_GET['ip_number']) ? $_GET['ip_number'] : '';
  $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
  $password = isset($_GET['password']) ? $_GET['password'] : '';
}

$response = 'result=0&result_error_text='.urlencode('user_id \''.$user_id.'\' not found or invalid password.');
try {
  $sqlConnection = new PDO($dataSourceName, $databaseUser, $databasePassword);
  $sqlConnection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

  // Check if a user with user_id and password exists
  $sqlStatement = $sqlConnection->prepare('SELECT ip_number FROM users WHERE user_id = :user_id AND password = :password');
  $sqlStatement->bindParam(':user_id', $user_id);
  $sqlStatement->bindParam(':password', $password);
  $sqlStatement->execute();
  if ($result = $sqlStatement->fetch(PDO::FETCH_ASSOC)) {
    // We found the user, check if the ip_number is valid
    if (($result['ip_number'] === '') || ($result['ip_number'] === $ip_number)) {
      $response = 'result=1';
    }
    else {
      $response = 'result=0&result_error_text='.urlencode('Invalid ip_number \''.$ip_number.'\'.');
    }
  }
  $sqlConnection = null;
}
catch(PDOException $e) {
  $response = 'result=0&result_error_text='.urlencode('MySQL PDO error: '.$e->getMessage());
}

echo $response;
exit;
?>
