<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $source = isset($_POST['source']) ? $_POST['source'] : '';
  $ip_number = isset($_POST['ip_number']) ? $_POST['ip_number'] : '';
}
else {
  $source = isset($_GET['source']) ? $_GET['source'] : '';
  $ip_number = isset($_GET['ip_number']) ? $_GET['ip_number'] : '';
}

$response = 'result=0&result_error_text='.urlencode('IP number \''.$ip_number.'\' not accepted');
try {
  $sqlConnection = new PDO($dataSourceName, $databaseUser, $databasePassword);
  $sqlConnection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

  // Check if user with the same (or empty) ip_number exists
  $sqlStatement = $sqlConnection->prepare('SELECT ip_number FROM users');
  $sqlStatement->execute();
  $result = $sqlStatement->fetchAll();
  foreach ($result as $row) {
    if (($row['ip_number'] === '') || ($row['ip_number'] === $ip_number)) {
      $response = 'result=1';
      break;
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
