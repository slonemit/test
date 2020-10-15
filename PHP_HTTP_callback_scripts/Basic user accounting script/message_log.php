<?php
require(__DIR__.'/sms_functions.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
  $message = isset($_POST['message']) ? $_POST['message'] : '';
  $message_type = isset($_POST['message_type']) ? $_POST['message_type'] : '';
  $status_code = isset($_POST['status_code']) ? $_POST['status_code'] : '';
}
else {
  $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
  $message = isset($_GET['message']) ? $_GET['message'] : '';
  $message_type = isset($_GET['message_type']) ? $_GET['message_type'] : '';
  $status_code = isset($_GET['status_code']) ? $_GET['status_code'] : '';
}

// If the message could not be sent to the gateway (status code 300)
// the credits that were subtracted with the 'message_out' HTTP callback
// are added back to the user.

$response = 'result=1';

if ($status_code === '300') {
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
    // Add the number of message parts to the available credits.
    $credits += $messageParts;

    // Update the database with the new credit value
    $sqlStatement = $sqlConnection->prepare('UPDATE users SET credits = :credits WHERE user_id = :user_id');
    $sqlStatement->bindParam(':credits', $credits);
    $sqlStatement->bindParam(':user_id', $user_id);
    $sqlStatement->execute();

    $sqlConnection->commit();
    $sqlConnection = null;
  }  
  catch(PDOException $e) {
    $response = 'result=1&result_error_text='.urlencode('MySQL PDO error: '.$e->getMessage());
  }
}

echo $response;
exit;
?>
