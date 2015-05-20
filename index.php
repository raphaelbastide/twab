<?php
  require 'config/config.php';
  if (file_exists($messageFile)) {
    $f = fopen($messageFile, 'r');
    $lastMessage = fgets($f);
    fclose($f);
  }
  include("themes/".$config->themeName."/index.php");
?>
