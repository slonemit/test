<?php
function GetMessagePartCount($message, $messageType) 
{    
  if (strpos(strtolower($messageType), 'sms.binary') === 0) return 1;
  if (strpos(strtolower($messageType), 'smpp') === 0) return 1;
  $gsmDefaultCharSet = "@£\$¥èéùìòÇ\nØø\rÅåΔ_ΦΓΛΩΠΨΣΘΞ\eÆæßÉ !\"#¤%&'()*+,-./0123456789:;<=>?¡ABCDEFGHIJKLMNOPQRSTUVWXYZÄÖÑÜ§¿abcdefghijklmnopqrstuvwxyzäöñüà";
  $gsmEscapeCharSet  = "\f^{}\\[~]|€";
  $messageParts = 1;
  $characters = 0;  
  $chrArray = preg_split('//u',$message, -1, PREG_SPLIT_NO_EMPTY);
  if (strpos(strtolower($messageType), 'sms.unicode') === 0) {
    $textEncoding = "Unicode";
  }
  else if (strpos(strtolower($messageType), 'sms.text') === 0) {
    $textEncoding = "GSM default alphabet";
  }
  else {
    $textEncoding = "GSM default alphabet";
    for ($i=0; $i<sizeof($chrArray); $i++) {
      if ((strpos($gsmDefaultCharSet, $chrArray[$i]) === false) &&
          (strpos($gsmEscapeCharSet, $chrArray[$i]) === false)) {
        $textEncoding = "Unicode";
        break;
      }
    }
  }
  for ($i=0; $i<sizeof($chrArray); $i++) {
    if ($textEncoding == "Unicode") {
      $characters++;
    }
    else {
      if (strpos($gsmDefaultCharSet, $chrArray[$i]) !== false) $characters++;
      if (strpos($gsmEscapeCharSet, $chrArray[$i]) !== false) $characters += 2;   
    }
  }
  if ($textEncoding === "Unicode") {
    if ($characters > 70) {
      $messageParts = intval($characters / 67);
      if (($characters % 67) > 0) $messageParts++;
    }
  }
  else {
    if ($characters > 160) {
      $messageParts = intval($characters / 153);
      if (($characters % 153) > 0) $messageParts++;
    }
  }
  return $messageParts;
}
?>