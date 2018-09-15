<?php
session_start(); 

include("includes/db.php");

if(isset($_SESSION['id'])){
	//echo "<h1>Welcome in dashboard</h1>";
	// $sql = "select * from daignostic_center where id = '$_SESSION[id]'";
	// $rs = mysqli_query($conn, $sql);
	// $data = mysqli_fetch_assoc($rs);
	// // print "<pre>";
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

	<title>Diagnosis Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
 <link href="css/style.css" rel="stylesheet" type="text/css" />
 <link href="css/book_app.css" rel="stylesheet" type="text/css" media="all">
<script src="validation.js" type="text/javascript"></script>
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

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
                <a href="http://localhost/medicate" class="simple-text">
                   Online  Diagnostic   Lab  Reporting   System
                </a>
            </div>

            <ul class="nav">
				<li class="">
					<a href="index.php">
						<i class="pe-7s-user"></i>
						<p>User Profile</p>
					</a>
				</li>
				<li class="">
					<a href="digcenter_app.php">
						<i class="pe-7s-user"></i>
						<p>Add Appointment</p>
					</a>
				</li>
				<li class="">
					<a href="booked_app.php">
						<i class="pe-7s-user"></i>
						<p>Booked Appointment</p>
					</a>
				</li>
                <li>
                    <a href="../lib/login.php?act=logout">
                        <i class="pe-7s-bell"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>