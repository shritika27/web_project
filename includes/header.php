<?php
	include("includes/db.php");
?>    
<?php
   // session_start();
   // if(isset($_SESSION['id']))
   // {
		// if($_SESSION['type'] == "doctor")
		// {
		   // header("location:_doctor/");
		// }
		// elseif($_SESSION['type'] == "admin")
		// {
		   // header("location:_admin/");
		// }
		// elseif($_SESSION['type'] == "patient")
		// {
		   // header("location:_patient/");
		// }
		// else
		// {
		   // header("location:_diagnostic/");
		// }
   // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Medicate </title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medicate" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<!-- stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" /> <!-- gallery css -->
<link href="css/main.css" rel="stylesheet" type="text/css" /> 
<link href="css/flip.css" rel="stylesheet" type="text/css" /> 
<!-- //stylesheet -->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<!-- //online fonts -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" type="text/css" rel="stylesheet"> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<!-- //font-awesome-icons -->
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>		
<link rel="stylesheet" type="text/css" href="css/custom.css" />	
<!-- for smooth scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript" src="js/flip.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	
	jQuery("#toggle_pass").click(function(){
		
		var type = jQuery("#pwd").attr('type');
		if(type == "password"){
			jQuery("#pwd").attr('type', 'text');
			jQuery("#toggle_pass").addClass('glyphicon-eye-close');
			jQuery("#toggle_pass").removeClass('glyphicon-eye-open');
		}
		else{
			jQuery("#pwd").attr('type', 'password');
			jQuery("#toggle_pass").removeClass('glyphicon-eye-close');
			jQuery("#toggle_pass").addClass('glyphicon-eye-open');
		}
		
	});
	jQuery(".mlf #user_email").change(function(){
		var opt = jQuery(".mlf #opt").val();
		var lm = jQuery(".mlf #user_email").val();
		jQuery.ajax({
			method: 'POST',
			url : 'lib/login.php',
			data: { 'uemail': lm, 'utype': opt, 'act': 'get_pic' }
		}).done(function(response){
			jQuery(".uimg").attr('src', response);
			console.log(response);
		}).fail(function(response){
			console.log("Fail");
		});
	});
	jQuery(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
</script>
<!-- //for smooth scrolling -->

</head>
<body>
<div class="agileits_main">
    <!-- header -->
	<div class="container">
		<div class="w3_agile_logo">
			<h1><a href="https://www.lalpathlabs.com/rajasthan/jaipur"><i class="agileits-logo fa fa-plus" aria-hidden="true"></i>Medicate</a></h1>
		</div>
		<div class="agileits_w3layouts_nav">
			<div id="toggle_m_nav">
				<div id="m_nav_menu" class="m_nav">
					<div class="m_nav_ham w3_agileits_ham" id="m_ham_1"></div>
					<div class="m_nav_ham" id="m_ham_2"></div>
					<div class="m_nav_ham" id="m_ham_3"></div>
				</div>
			</div>
			<div id="m_nav_container" class="m_nav wthree_bg">
				<nav class="menu menu--sebastian">
					<ul id="m_nav_list" class="m_nav menu__list">
						<li class="m_nav_item menu__item menu__item--current" id="m_nav_item_1"> <a href="index.php" class="menu__link"><i class="menu-icon fa fa-home" aria-hidden="true"></i> Home </a></li>
						<li class="m_nav_item menu__item" id="moble_nav_item_2"> <a href="#about" class="menu__link"><i class="menu-icon fa fa-info-circle" aria-hidden="true"></i>About Us </a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_3"> <a href="#services" class="menu__link"><i class="menu-icon fa fa-cog" aria-hidden="true"></i>Services</a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_4"> <a href="#team" class="menu__link"><i class="menu-icon fa fa-users" aria-hidden="true"></i> Doctor Team</a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_4"> <a href="#diagnostic_team" class="menu__link"><i class="menu-icon fa fa-users" aria-hidden="true"></i> Diagnosis Team</a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_5"> <a href="#grid-gallery" class="menu__link"><i class="menu-icon fa fa-file-image-o" aria-hidden="true"></i>lab</a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="#contact" class="menu__link"><i class="menu-icon fa fa-map-marker" aria-hidden="true"></i> Contact </a> </li>
						<li class="m_nav_item menu__item" id="moble_nav_item_6"> <a href="#myModal" class="menu__link" data-toggle="modal" data-target="#myModal"><i class="menu-icon fa fa-users" aria-hidden="true"></i> LogIn | Sign Up </a>  </li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
	<!-- menu -->
	<script type="text/javascript" src="js/main.js"></script>
	<!-- //menu -->
	<!--// header -->
	<!-- banner -->
	<div class="w3_banner">
	    <div class="container">
		    <div class="slider">
			    <div class="callbacks_container">
				   <ul class="rslides callbacks callbacks1" id="slider4">
					    <li>	
						    <div class="banner_text_w3layouts">
								<h3> Online Diagnostic Lab </h3>
								<h3> Reporting System</h3>
						    </div>
					    </li>
						
				</div>
			  <script src="js/responsiveslides.js"></script>
			  <script>
				// You can also use "$(window).load(function() {"
				$(function () {
				  // Slideshow 4
				  $("#slider4").responsiveSlides({
					auto: false,
					pager:true,
					nav:true,
					speed: 500,
					namespace: "callbacks",
					before: function () {
					  $('.events').append("<li>before event fired.</li>");
					},
					after: function () {
					  $('.events').append("<li>after event fired.</li>");
					}
				  });
			
				});
			 </script>
		   </div>
		</div>   
	</div>	
</div>
<!-- //banner -->
<h1><?php if(isset($_REQUEST['msg'])){ echo $_REQUEST['msg']; }?></h1>
 <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog ">
            <!-- Modal content-->
            <div class="modal-content blur-background">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body login_body">
					<div class="flipButton shadow animate">Create New Account</div>
					<div class="flip-container" >
						<div class="flipper"> 
							<div class="front">
								<form action="lib/login.php" class="form-horizontal custom-form mlf">
									<div class="profile-image">
									<img src="images/mark1.jpg" alt="profile-image" class="img-responsive img-circle img-thumbnail uimg" />
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<div class="input-group">
												<span class="input-group-addon custom-input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
												<select id="opt" class="form-control" name="opt">
													<option value="0">select user to login..</option>
													<option value="admin">Admin</option>
													<option value="doctor">Doctor</option>
													<option value="diagnostic">Diagnosis</option>
													<option value="patient">Patient</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<div class="input-group">
												<span class="input-group-addon custom-input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
												<input class="form-control custom-input" type="text" name="user_email" id="user_email" placeholder="User Email" autocomplete="off">
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-sm-12">
											<div class="input-group">
												<span class="input-group-addon custom-input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
												<input class="form-control custom-input" type="password" name="user_pass" id="user_pass" placeholder="Password">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-6 col-xs-12 text-left">
											.<div class="checkbox">
												<label><a href="forget_password.php"> Forget Password </a></label>
											</div>
										</div>
										<div class="col-md-6 col-xs-12 text-center">
											<button type="submit" class="btn btn-warning custom-sign-in-button">SIGN IN</button>
											<input type="hidden" name="act" value="login"/>
										</div>
									</div>
								</form>
							</div>

							<div class="back">
								<div class="col-md-6 col-xs-6 text-center">
									<img src="images/doctor.jpg" alt="profile-image" class="img-responsive img-circle img-thumbnail" />
									<a href="doctor_registration.php">Doctor Registration</a>
								</div>
								<div class="col-md-6 col-xs-6 text-center">
									<img src="images/Pathology.png" alt="profile-image" class="img-responsive img-circle img-thumbnail" />
									<a href="digcenter_registration.php">Diagnostic Registration</a>
								</div>
								<div class="col-md-12 col-xs-12 text-center">
									<img src="images/patient.ico" alt="profile-image" class="img-responsive img-circle img-thumbnail" />
									<a href="patient_registration.php">Patient Registration</a>
								</div>
							</div>
						</div>
					</div>
            </div>
        </div>
    </div>
    </div>