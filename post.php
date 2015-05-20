<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="favicon.ico" rel="icon" type="image/x-icon" />
  <title>Twab</title>
</head>
<body>
   <?php
  require 'config/config.php';
  $password = $_POST['password'];
  $message = $_POST['message'];
  if ($password === $config->userPass) {
    $fileData = $message."\n";
    $fileData .= file_get_contents($messageFile);
    file_put_contents($messageFile, $fileData);
    fclose($messageFile);
    header("Location: ./");
    die();
  }
  else{
    echo "Wrong password…";
    }
  ?>
</body>
</html>
