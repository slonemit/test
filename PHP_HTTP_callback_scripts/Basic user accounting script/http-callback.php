<?php
ini_set('display_errors', 'On');
ini_set('html_errors', 0);
error_reporting(E_ALL);

$databaseHost = 'localhost';
$databaseName = 'diafaan';
$databaseUser = 'root';
$databasePassword = 'password';

$dataSource = 'mysql:host='.$databaseHost;
$dataSourceName = 'mysql:host='.$databaseHost.';dbname='.$databaseName;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $action = isset($_POST['action']) ? $_POST['action'] : '';
}
else {
  $action = isset($_GET['action']) ? $_GET['action'] : '';
}

// HTTP callback actions of Diafaan SMS Server
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
  // The 'message_log_update' action is not used in this script
}
else if ($action === "event_log") {
  // The 'event_log' action is not used in this script
}
else if ($action === "validate_user") {
  require(__DIR__.'/validate_user.php');
}
else if ($action === "accept_connection") {
  require(__DIR__.'/accept_connection.php');
}

// Custom actions to facilitate the user database 
else if ($action === "create_database") {
  require(__DIR__.'/userdb_create_database.php');
}
else if ($action === "drop_database") {
  require(__DIR__.'/userdb_drop_database.php');
}
else if ($action === "add_user") {
  require(__DIR__.'/userdb_add_user.php');
}
else if ($action === "delete_user") {
  require(__DIR__.'/userdb_delete_user.php');
}
else if ($action === "set_credits") {
  require(__DIR__.'/userdb_set_credits.php');
}

echo 'result=0';
?>
