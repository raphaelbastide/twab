<?php
  $config = new stdClass();
  // Edit those lines and rename config-example to config.php
  $config->username = 'foxy';
  $config->userpass = 'ilovechickens';
  // This is where twab is hosted on your server
  // Don’t forget the slash `/` at the end of the URL
  $config->userurl = "http://foxy.net/twab/";
  // Do not change that
  $messagefile = $config->username.'.plan';
?>
