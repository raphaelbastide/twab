<?php require 'config/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="<?php echo $themeUrl ?>favicon.ico" rel="icon" type="image/x-icon" />
  <title>Write a new Twab</title>
</head>
<body>
  <form action="<?php echo $config->userUrl ?>post.php" method="post">
    <input type="text" autofocus name="message" placeholder="message" value="">
    <input type="password" name="password" placeholder="password" value="">
    <input type="submit" name="name" value="submit">
  </form>
</body>
</html>
