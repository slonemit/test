<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $source = isset($_POST['source']) ? $_POST['source'] : '';
  $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
  $from = isset($_POST['from']) ? $_POST['from'] : '';
  $to = isset($_POST['to']) ? $_POST['to'] : '';
  $message = isset($_POST['message']) ? $_POST['message'] : '';
  $message_type = isset($_POST['message_type']) ? $_POST['message_type'] : '';
  $message_id = isset($_POST['message_id']) ? $_POST['message_id'] : '';
  $message_parts = isset($_POST['message_parts']) ? $_POST['message_parts'] : 0;
  $gateway = isset($_POST['gateway']) ? $_POST['gateway'] : '';
  $status_code = isset($_POST['status_code']) ? $_POST['status_code'] : '300';
  $status_text = isset($_POST['status_text']) ? $_POST['status_text'] : '';
  $error_code = isset($_POST['error_code']) ? $_POST['error_code'] : '';
  $error_text = isset($_POST['error_text']) ? $_POST['error_text'] : '';
  $send_time = isset($_POST['send_time']) ? DateTime::createFromFormat('DateTime::ISO8601', $_POST['send_time']) : new DateTime();
  $user_info = isset($_POST['user_info']) ? $_POST['user_info'] : '';
  $pdu = isset($_POST['pdu']) ? $_POST['pdu'] : '';
  $result_trace = isset($_POST['result_trace']) ? $_POST['result_trace'] : '';
}
else {
  $source = isset($_GET['source']) ? $_GET['source'] : '';
  $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
  $from = isset($_GET['from']) ? $_GET['from'] : '';
  $to = isset($_GET['to']) ? $_GET['to'] : '';
  $message = isset($_GET['message']) ? $_GET['message'] : '';
  $message_type = isset($_GET['message_type']) ? $_GET['message_type'] : '';
  $message_id = isset($_GET['message_id']) ? $_GET['message_id'] : '';
  $message_parts = isset($_GET['message_parts']) ? $_GET['message_parts'] : 0;
  $gateway = isset($_GET['gateway']) ? $_GET['gateway'] : '';
  $status_code = isset($_GET['status_code']) ? $_GET['status_code'] : '300';
  $status_text = isset($_GET['status_text']) ? $_GET['status_text'] : '';
  $error_code = isset($_GET['error_code']) ? $_GET['error_code'] : '';
  $error_text = isset($_GET['error_text']) ? $_GET['error_text'] : '';
  $send_time = isset($_GET['send_time']) ? DateTime::createFromFormat('DateTime::ISO8601', $_GET['send_time']) : new DateTime();
  $user_info = isset($_GET['user_info']) ? $_GET['user_info'] : '';
  $pdu = isset($_GET['pdu']) ? $_GET['pdu'] : '';
  $result_trace = isset($_GET['result_trace']) ? $_GET['result_trace'] : '';
}

echo 'result=1';

exit;
?>
