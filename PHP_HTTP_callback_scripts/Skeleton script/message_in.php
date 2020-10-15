<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $source = isset($_POST['source']) ? $_POST['source'] : '';
  $from = isset($_POST['from']) ? $_POST['from'] : '';
  $to = isset($_POST['to']) ? $_POST['to'] : '';
  $sms_central = isset($_POST['sms_central']) ? $_POST['sms_central'] : '';
  $message = isset($_POST['message']) ? $_POST['message'] : '';
  $message_type = isset($_POST['message_type']) ? $_POST['message_type'] : '';
  $message_part = isset($_POST['message_part']) ? $_POST['message_part'] : '';
  $message_parts_received = isset($_POST['message_parts_received']) ? $_POST['message_parts_received'] : '';
  $message_parts_total = isset($_POST['message_parts_total']) ? $_POST['message_parts_total'] : '';
  $send_time = isset($_POST['send_time']) ? DateTime::createFromFormat('DateTime::ISO8601', $_POST['send_time']) : new DateTime();
  $receive_time = isset($_POST['receive_time']) ? DateTime::createFromFormat('DateTime::ISO8601', $_POST['receive_time']) : new DateTime();
  $pdu = isset($_POST['pdu']) ? $_POST['pdu'] : '';
  $tlv_list = isset($_POST['tlv_list']) ? $_POST['tlv_list'] : '';
}
else {
  $source = isset($_GET['source']) ? $_GET['source'] : '';
  $from = isset($_GET['from']) ? $_GET['from'] : '';
  $to = isset($_GET['to']) ? $_GET['to'] : '';
  $sms_central = isset($_GET['sms_central']) ? $_GET['sms_central'] : '';
  $message = isset($_GET['message']) ? $_GET['message'] : '';
  $message_type = isset($_GET['message_type']) ? $_GET['message_type'] : '';
  $message_part = isset($_GET['message_part']) ? $_GET['message_part'] : '';
  $message_parts_received = isset($_GET['message_parts_received']) ? $_GET['message_parts_received'] : '';
  $message_parts_total = isset($_GET['message_parts_total']) ? $_GET['message_parts_total'] : '';
  $send_time = isset($_GET['send_time']) ? DateTime::createFromFormat('DateTime::ISO8601', $_GET['send_time']) : new DateTime();
  $receive_time = isset($_GET['receive_time']) ? DateTime::createFromFormat('DateTime::ISO8601', $_GET['receive_time']) : new DateTime();
  $pdu = isset($_GET['pdu']) ? $_GET['pdu'] : '';
  $tlv_list = isset($_GET['tlv_list']) ? $_GET['tlv_list'] : '';
}

echo 'result=1';
//echo '&user_id='.urlencode($user_id);
//echo '&from='.urlencode($from);
//echo '&to='.urlencode($to);
//echo '&message='.urlencode($message);
//echo '&message_type='.urlencode($message_type);
//echo '&connector_list='.urlencode($connector_list);

exit;
?>
