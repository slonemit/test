<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $to = isset($_POST['to']) ? $_POST['to'] : '';
}
else {
  $to = isset($_GET['to']) ? $_GET['to'] : '';
}

// This script accepts all received messages. When a match is found
// between the routing_list parameter in the database and the 'to' address,
// it sets the user_id of the received message to the user_id from the 
// database. Otherwise the user_id stays empty. The routing_list can contain
// multiple numbers, separated by semicolons, with wildcard ('*') characters.
// E.g. '0651*;+44651*'

$response = 'result=1';
try {
  $sqlConnection = new PDO($dataSourceName, $databaseUser, $databasePassword);
  $sqlConnection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

  // Check if the 'to' address of the message matches the routing_list of one of the users
  $sqlStatement = $sqlConnection->prepare('SELECT user_id, routing_list FROM users');
  $sqlStatement->execute();
  $result = $sqlStatement->fetchAll();
  foreach ($result as $row) {
    $routing_list = explode(";", $row['routing_list']);
    foreach ($routing_list as $route) {
      if (wildcard_match($route, $to)) {
        // We found a match, set the user_id for the message to the found user_id from the database
        $response = 'result=1&user_id='.urlencode($row['user_id']);
        break 2;
      }
    }
  }

  $sqlConnection = null;
}
catch(PDOException $e) {
  // There is an error but we accept the message anyway
  $response = 'result=1&result_error_text='.urlencode('MySQL PDO error: '.$e->getMessage());
}

echo $response;
exit;

function wildcard_match($pattern, $subject)
{
    $pattern='/^'.preg_quote($pattern).'$/';
    $pattern=str_replace('\*', '.*', $pattern);
    if(!preg_match($pattern, $subject, $regs)) return false;
    return true;
}
?>
