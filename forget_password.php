<?php
	include("includes/db.php");
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Forget Password Page</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>

  <link rel="stylesheet" href="css/pp.css">

  
</head>

<body>

  <div class="cont" id="f_pass">
  <div class="demo">
    <div class="login">
      <div class="login__check"></div>
	  <form action="lib/forget_password.php" method="post">
      <div class="login__form">	  
		  <h1 id="msg"><?php if(isset($_REQUEST['msg'])){ echo "<img src='images/notice.png' height='15'>".'&nbsp;'.$_REQUEST['msg']; }?></h1>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
			<select id="user_login_option" name="user_login_option" class="login__input name">
				<option value="0">Select User To Login..</option>
				<option value="doctor">Doctor</option>
				<option value="diagnostic">Diagnosis</option>
				<option value="patient">Patient</option>
			</select>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="text" name="user_email" id="user_email" placeholder="Enter Your Email.." class="login__input name" />
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
			<select name="user_sec_question" id="user_sec_question" class="login__input name">
			<option value="0">Please Select Security Question</option>
				<?php
				$sql1 = "select * from security_question";
				$rs1 = mysqli_query($conn, $sql1);
				while($data1 = mysqli_fetch_assoc($rs1)){
				?>
					<option value="<?php echo $data1['sec_ques_name']; ?>"><?php echo $data1['sec_ques_name']; ?></option>
				<?php 	
					}
				?>
			</select>
        </div>
        <div class="login__row">
          <svg class="login__icon pass svg-icon" viewBox="0 0 20 20">
            <path d="M0,20 20,20 20,8 0,8z M10,13 10,16z M4,8 a6,8 0 0,1 12,0" />
          </svg>
          <input type="text" name="user_sec_ans" id="user_sec_ans" placeholder="Enter Security Answer.." class="login__input pass"/>
        </div>
        <input type="submit" class="login__submit" name="submit" value="Send" >
		<input type="hidden" name="act" value="recover_pass" />
      </div>
	  </form>
    </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/pp.js"></script>

</body>

</html>