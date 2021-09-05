<?php
  $redirectUrl = "http://192.168.11.8:3000/";
  header("HTTP/1.0 404 Not Found");
  print(file_get_contents($redirectUrl));
  exit;
?>
