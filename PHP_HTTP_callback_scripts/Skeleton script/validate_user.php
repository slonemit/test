<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $source = isset($_POST['source']) ? $_POST['source'] : '';
  $ip_number = isset($_POST['ip_number']) ? $_POST['ip_number'] : '';
  $user_id = isset($_POST['user_id']) ? $_POST['user_id'] : '';
  $password = isset($_POST['password']) ? $_POST['password'] : '';
}
else {
  $source = isset($_GET['source']) ? $_GET['source'] : '';
  $ip_number = isset($_GET['ip_number']) ? $_GET['ip_number'] : '';
  $user_id = isset($_GET['user_id']) ? $_GET['user_id'] : '';
  $password = isset($_GET['password']) ? $_GET['password'] : '';
}

echo 'result=1';
//echo '&user_id='.urlencode($user_id);

//echo '&smpp_maxmessagesperminute=0';
//echo '&smpp_messageidformat=hexadecimal';
//echo '&smpp_characterencoding=gsmdefaultalphabet';
//echo '&smpp_packettimeout=60';
//echo '&smpp_connectiontimeout=120';
//echo '&smpp_maxuseridconnections=0';
//echo '&smpp_use16bitconcatenationid=0';
//echo '&smpp_messageouthandling=default';
//echo '&smpp_messageinhandling=deliver_sm';

exit;
?>
