<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $source = isset($_POST['source']) ? $_POST['source'] : '';
  $ip_number = isset($_POST['ip_number']) ? $_POST['ip_number'] : '';
}
else {
  $source = isset($_GET['source']) ? $_GET['source'] : '';
  $ip_number = isset($_GET['ip_number']) ? $_GET['ip_number'] : '';
}

echo 'result=1';
//echo '&user_id='.urlencode($user_id);

exit;
?>
