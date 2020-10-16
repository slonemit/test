<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $source = isset($_POST['source']) ? $_POST['source'] : '';
  $event_time = isset($_POST['event_time']) ? DateTime::createFromFormat('DateTime::ISO8601', $_POST['event_time']) : new DateTime();
  $event_type = isset($_POST['event_type']) ? $_POST['event_type'] : 'unknown';
  $event_message = isset($_POST['event_message']) ? $_POST['event_message'] : '';
  $event_trace = isset($_POST['event_trace']) ? $_POST['event_trace'] : '';
}
else {
  $source = isset($_GET['source']) ? $_GET['source'] : '';
  $event_time = isset($_GET['event_time']) ? DateTime::createFromFormat('DateTime::ISO8601', $_GET['event_time']) : new DateTime();
  $event_type = isset($_GET['event_type']) ? $_GET['event_type'] : 'unknown';
  $event_message = isset($_GET['event_message']) ? $_GET['event_message'] : '';
  $event_trace = isset($_GET['event_trace']) ? $_GET['event_trace'] : '';
}

echo 'result=1';

exit;
?>
