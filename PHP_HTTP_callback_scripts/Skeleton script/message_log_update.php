<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $source = isset($_POST['source']) ? $_POST['source'] : '';
  $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
  $message_id = isset($_POST['message_id']) ? $_POST['message_id'] : '';
  $status_code = isset($_POST['status_code']) ? $_POST['status_code'] : '';
  $status_text = isset($_POST['status_text']) ? $_POST['status_text'] : '';
  $error_code = isset($_POST['error_code']) ? $_POST['error_code'] : '';
  $error_text = isset($_POST['error_text']) ? $_POST['error_text'] : '';
  $receive_time = isset($_POST['receive_time']) ? DateTime::createFromFormat('DateTime::ISO8601', $_POST['receive_time']) : new DateTime();
  $user_info = isset($_POST['user_info']) ? $_POST['user_info'] : '';
  $receipt = isset($_POST['receipt']) ? $_POST['receipt'] : '';
  $tlv_list = isset($_POST['tlv_list']) ? $_POST['tlv_list'] : '';
}
else {
  $source = isset($_GET['source']) ? $_GET['source'] : '';
  $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
  $message_id = isset($_GET['message_id']) ? $_GET['message_id'] : '';
  $status_code = isset($_GET['status_code']) ? $_GET['status_code'] : '';
  $status_text = isset($_GET['status_text']) ? $_GET['status_text'] : '';
  $error_code = isset($_GET['error_code']) ? $_GET['error_code'] : '';
  $error_text = isset($_GET['error_text']) ? $_GET['error_text'] : '';
  $receive_time = isset($_GET['receive_time']) ? DateTime::createFromFormat('DateTime::ISO8601', $_GET['receive_time']) : new DateTime();
  $user_info = isset($_GET['user_info']) ? $_GET['user_info'] : '';
  $receipt = isset($_GET['receipt']) ? $_GET['receipt'] : '';
  $tlv_list = isset($_GET['tlv_list']) ? $_GET['tlv_list'] : '';
}

echo 'result=1';

exit;
?>
