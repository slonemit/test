<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $source = isset($_POST['source']) ? $_POST['source'] : '';
  $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
  $ip_number = isset($_POST['ip_number']) ? $_POST['ip_number'] : '';
  $from = isset($_POST['from']) ? $_POST['from'] : '';
  $to = isset($_POST['to']) ? $_POST['to'] : '';
  $message = isset($_POST['message']) ? $_POST['message'] : '';
  $message_type = isset($_POST['message_type']) ? $_POST['message_type'] : '';
  $user_info = isset($_POST['user_info']) ? $_POST['user_info'] : '';
  $priority = isset($_POST['priority']) ? $_POST['priority'] : 0;
  $gateway = isset($_POST['gateway']) ? $_POST['gateway'] : '';
  $tlv_list = isset($_POST['tlv_list']) ? $_POST['tlv_list'] : '';
}
else {
  $source = isset($_GET['source']) ? $_GET['source'] : '';
  $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
  $ip_number = isset($_GET['ip_number']) ? $_GET['ip_number'] : '';
  $from = isset($_GET['from']) ? $_GET['from'] : '';
  $to = isset($_GET['to']) ? $_GET['to'] : '';
  $message = isset($_GET['message']) ? $_GET['message'] : '';
  $message_type = isset($_GET['message_type']) ? $_GET['message_type'] : '';
  $user_info = isset($_GET['user_info']) ? $_GET['user_info'] : '';
  $priority = isset($_GET['priority']) ? $_GET['priority'] : 0;
  $gateway = isset($_GET['gateway']) ? $_GET['gateway'] : '';
  $tlv_list = isset($_GET['tlv_list']) ? $_GET['tlv_list'] : '';
}

echo 'result=1';
//echo '&user_id='.urlencode($user_id);
//echo '&from='.urlencode($from);
//echo '&to='.urlencode($to);
//echo '&message='.urlencode($message);
//echo '&message_type='.urlencode($message_type);
//echo '&user_info='.urlencode($user_info);
//echo '&error_code='.urlencode($error_code);
//echo '&error_text='.urlencode($error_text);
//echo '&priority='.urlencode($priority);
//echo '&gateway='.urlencode($gateway);
//echo '&tlv_list='.urlencode($tlv_list);

exit;
?>
