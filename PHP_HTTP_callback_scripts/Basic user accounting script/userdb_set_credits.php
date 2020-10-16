<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
  $credits = isset($_POST['credits']) ? $_POST['credits'] : '';
}
else {
  $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
  $credits = isset($_GET['credits']) ? $_GET['credits'] : '';
}

// Set the credits for a user_id or all user_id's when the user_id value is 
// empty. Use a numeric value for an absolute number of credits or prefix 
// the number with a '+' or '-' to add or subtract the credits.

$response = 'result=0';
try {
  $sqlConnection = new PDO($dataSourceName, $databaseUser, $databasePassword);
  $sqlConnection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $sqlConnection->beginTransaction(); 

  $absoluteCredits = null;
  $relativeCredits = null;
  if (strpos($credits, '+') === 0) {
    if (intval(substr($credits, 1))) $relativeCredits = intval(substr($credits, 1));
  }	
  else if (strpos($credits, '-') === 0) {
    if (intval(substr($credits, 1))) $relativeCredits = -intval(substr($credits, 1));
  }	
  else {
    if (intval($credits)) $absoluteCredits = intval($credits);
  }  
  
  if ($absoluteCredits !== null) {
    if ($user_id === '') {
      $sqlStatement = $sqlConnection->prepare('UPDATE users SET credits = :credits');
    }
    else {
      $sqlStatement = $sqlConnection->prepare('UPDATE users SET credits = :credits WHERE user_id = :user_id');
      $sqlStatement->bindParam(':user_id', $user_id);
    }
    $sqlStatement->bindParam(':credits', $absoluteCredits);
    $sqlStatement->execute();
    $response = 'result=1';
  }
  else if ($relativeCredits !== null) {
    if ($user_id === '') {
      $sqlStatement = $sqlConnection->prepare('SELECT user_id,credits FROM users FOR UPDATE');
    }
    else {
      $sqlStatement = $sqlConnection->prepare('SELECT user_id,credits FROM users WHERE user_id = :user_id FOR UPDATE');
      $sqlStatement->bindParam(':user_id', $user_id);
    }
    $sqlStatement->execute();
    $result = $sqlStatement->fetchAll();
    foreach ($result as $row) {
      $sqlStatement = $sqlConnection->prepare('UPDATE users SET credits = :credits WHERE user_id = :user_id');
      echo $row['user_id'];
      $sqlStatement->bindParam(':user_id', $row['user_id']);
      $newcredits = intval($row['credits']) + $relativeCredits;
      if ($newcredits < 0) $newcredits = 0;
      $sqlStatement->bindParam(':credits', $newcredits);
      $sqlStatement->execute();
    }
    $response = 'result=1';
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
