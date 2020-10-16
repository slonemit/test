<?php
require(__DIR__.'/sms_functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
  $message = isset($_POST['message']) ? $_POST['message'] : '';
  $message_type = isset($_POST['message_type']) ? $_POST['message_type'] : '';
}
else {
  $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
  $message = isset($_GET['message']) ? $_GET['message'] : '';
  $message_type = isset($_GET['message_type']) ? $_GET['message_type'] : '';
}

$response = 'result=0';

try {
  $sqlConnection = new PDO($dataSourceName, $databaseUser, $databasePassword);
  $sqlConnection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $sqlConnection->beginTransaction(); 

  // Get the number of credits left for the user 
  $sqlStatement = $sqlConnection->prepare('SELECT credits FROM users WHERE user_id = :user_id FOR UPDATE');
  $sqlStatement->setFetchMode(PDO::FETCH_ASSOC);
  $sqlStatement->bindParam(':user_id', $user_id);
  $sqlStatement->execute();
  $credits = 0;
  if ($row = $sqlStatement->fetch()) {
    $credits = $row['credits'];
  }

  // Calculate the number of credits required for this message
  $messageParts = GetMessagePartCount($message, $message_type);
  // If the user has sufficient credits left, accept the message. Otherwise reject it.
  if ($credits >= $messageParts) {
    $credits -= $messageParts;
    $response = 'result=1'; 

    // Update the database with the new credit value
    $sqlStatement = $sqlConnection->prepare('UPDATE users SET credits = :credits WHERE user_id = :user_id');
    $sqlStatement->bindParam(':credits', $credits);
    $sqlStatement->bindParam(':user_id', $user_id);
    $sqlStatement->execute();
  }
  else {
    // Insufficient credits, generate SMPP error 69 (submit_sm failed);
    $response = 'result=0&error_code=69'; 
  }
  
  $sqlConnection->commit();
  $sqlConnection = null;
}
catch(PDOException $e) {
  $response = 'result=0&result_error_text='.urlencode('MySQL PDO error: '.$e->getMessage());
}
echo $response;
exit;

?>
