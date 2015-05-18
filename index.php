
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <?php
    require 'config.php';
    if (file_exists($messagefile)) {
      $f = fopen($messagefile, 'r');
      $lastmessage = fgets($f);
      fclose($f);
    }
  ?>
<meta name="twab-userfile" content="<?php echo $config->userurl.$messagefile?>">
  <link href="favicon.ico" rel="icon" type="image/x-icon" />
  <meta http-equiv="refresh" content="30" >
  <title><?php echo $lastmessage ?></title>
</head>
<body>
  <p>Microblogging in a browser tab.</p>
  <p>Leave this page opened to read my feed in the tab!</p>
  <p>My last messages:</p>
  <pre>
<?php
if (file_exists($messagefile)) {
include($messagefile);
}else {
echo 'No message yet. Post your first on /new.html';
}
?>
  </pre>
  <a href="info.html">Why this is cool?</a>
</body>
</html>
