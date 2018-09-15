<?php
	include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Password Recovery Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

      <link rel="stylesheet" href="css/pp.css">

  
</head>

<body>

  <div class="cont">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
	  <form action="lib/forget_password.php" method="post">
      <div class="login__form">
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" name="user_pass" id="user_pass" placeholder="Enter New password" class="login__input name" />
		  <img class="mloadf" src="images/mmloader.gif" height="15">
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="password" name="user_cpass" id="user_cpass" placeholder="Enter Confirm password.." class="login__input pass"/><img class="mloads" src="images/mmloader.gif" height="15">
		  <p id="mtext">Not match</p>
        </div>
        <input type="submit" class="login__submit" id="pass_recovery_btn" name="submit" value="Update Password" >
		<input type="hidden"  name="act" value="update_pass" >
		<input type="hidden" name="user_email" value="<?php if(isset($_REQUEST['msg'])){ echo $_REQUEST['msg']; } ?>" >
		<input type="hidden" name="user_type" value="<?php if(isset($_REQUEST['type'])){ echo $_REQUEST['type']; } ?>" >
      </div>
	  </form>
    </div>
  </div>
</div>
  <!--script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script-->

    <script  src="js/jquery.min.js"></script>
    <script  src="js/pp.js"></script>


</body>

</html>