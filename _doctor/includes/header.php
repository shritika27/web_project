<?php
session_start(); 

include("includes/db.php");

if(isset($_SESSION['id'])){
	//echo "<h1>Welcome in dashboard</h1>";
	// $sql = "select * from doctor where id = '$_SESSION[id]'";
	// $rs = mysqli_query($conn, $sql);
	// $data = mysqli_fetch_assoc($rs);
	// print "<pre>";
	// print_r($data);
	
}
else{
	header("location:../index.php?msg=Please login first...");
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard | Doctor</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/book_app.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="js/validation.js"></script>
  <script>
  jQuery(document).ready(function(){
	jQuery( "#datepicker" ).datepicker();  
  });
    
  </script>

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
			<div class="logo">
                <a href="http://localhost/odlrs" class="simple-text">
                   Online  Diagnostic   Lab  Reporting   System
                </a>
            </div>

            <ul class="nav">
               
				<li class="active">
					<a href="index.php">
						<i class="pe-7s-user"></i>
						<p style="color:white;">Doctor Profile</p>
					</a>
				</li>
				<li class="active">
					<a href="doctor_app.php">
						<i class="pe-7s-user"></i>
						<p style="color:white;">Add Appointment</p>
					</a>
				</li>
				<li class="active">
					<a href="booked_app.php">
						<i class="pe-7s-user"></i>
						<p style="color:white;">Booked Appointment</p>
					</a>
				</li>
				
                <li>
                    <a href="../lib/login.php?act=logout">
                        <i class="pe-7s-bell"></i>
                        <p style="color:white;">Logout</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>