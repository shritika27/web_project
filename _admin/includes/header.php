<?php
session_start(); 

include("includes/db.php");

if(isset($_SESSION['id'])){
	// echo "<h1>Welcome In Dashboard</h1>";
}
else{
	header("location:../index.php");
}
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard | Admin</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <link href="assets/css/style.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://localhost/odlrs" class="simple-text">
                   Online  Diagnostic   Lab  Reporting   System
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="index.php">
                        <i class="pe-7s-note2"></i>
                        <p>Request Lists</p>
                    </a>
                </li>
                <li>
                    <a href="doctor_view.php">
                        <i class="pe-7s-note2"></i>
                        <p>Doctor Lists</p>
                    </a>
                </li>
                <li>
                    <a href="digcenter_view.php">
                        <i class="pe-7s-news-paper"></i>
                        <p>Diagnostic Lists</p>
                    </a>
                </li>
                <li>
                    <a href="patient_view.php">
                        <i class="pe-7s-science"></i>
                        <p>Patient Lists</p>
                    </a>
                </li>
                <li>
                    <a href="security_questions.php">
                        <i class="pe-7s-science"></i>
                        <p>Security Questions</p>
                    </a>
                </li>
                <li>
                    <a href="payment_view.php">
                        <i class="pe-7s-science"></i>
                        <p>Payment Records</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="../lib/login.php?act=logout">
                        <i class="pe-7s-bell"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>