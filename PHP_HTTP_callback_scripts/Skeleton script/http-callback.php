<?php

$databaseHost = 'localhost';
$databaseUser = 'root';
$databasePassword = 'password';
$databaseName = 'UserDatabase';

$action = $_GET["action"];

ini_set('display_errors', 'On');
ini_set('html_errors', 0);
error_reporting(E_ALL);
if ($action === "message_out") {
  require(__DIR__.'/message_out.php');
}
else if ($action === "message_in") {
  require(__DIR__.'/message_in.php');
}
else if ($action === "message_log") {
  require(__DIR__.'/message_log.php');
}
else if ($action === "message_log_update") {
  require(__DIR__.'/message_log_update.php');
}
else if ($action === "event_log") {
  require(__DIR__.'/event_log.php');
}
else if ($action === "validate_user") {
  require(__DIR__.'/validate_user.php');
}
else if ($action === "accept_connection") {
  require(__DIR__.'/accept_connection.php');
}
echo 'result=0';
?>
