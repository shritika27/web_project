<?php
	include("includes/db.php");
?>    
<!DOCTYPE html>
<html lang="en">
<head>
<title>Medicate | Doctor Details</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Medicate - I can help you" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/validation.js"></script>
<script type="text/javascript" src="js/validation1.js"></script>
<script type="text/javascript" src="js/validation3.js"></script>
<script type="text/javascript" src="js/validation4.js"></script>
<!-- stylesheet -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/gallery.css" rel="stylesheet" type="text/css" media="all" /> <!-- gallery css -->
<link href="css/main.css" rel="stylesheet" type="text/css" /> 
<!-- //stylesheet -->
<!-- online fonts -->
<link href="//fonts.googleapis.com/css?family=Titillium+Web:200,200i,300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
<!-- //online fonts -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" type="text/css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<script src="js/modernizr.custom.js"></script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>		
<link rel="stylesheet" type="text/css" href="css/custom.css" />	
<!-- for smooth scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
	});
});
</script>
<!-- //for smooth scrolling -->
<style>
    #customers{
		 font-family: "Trebuchet MS" ,Arial,Helvetica,sans-serif;
		 border-collapse: collapse;
		 width:100%;
	}
	#customers td,#customers th{
		border:1px solid #ddd;
		padding: 8px;
	}
	#customers tr:nth-child(even){background-color: #f2f2f2;}
	#customers tr:hover{background-color:pink;}
	tr:hover {background-color:#f5f5f5;}
	#customers th{
		padding-top:12px;
		padding-bottom:12px;
		text-align:center;
		background-color:#4C4666;
		color:white;
	}	
	</style>
</head>
<body>
<div class="agileits_main">
    <!-- header -->
	<div class="container">
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
	
		<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1" style="overflow:hidden;">
	<div class="ws_images"><ul>
		<li><img src="data1/images/lab1.png" alt="Hydrangeas" title="Hydrangeas" id="wows1_2"/></li>
		<li><img src="data1/images/lab2.png" alt="Chrysanthemum" title="Chrysanthemum" id="wows1_0"/></li>
		<li><img src="data1/images/lab3.png" alt="Desert" title="Desert" id="wows1_1"/></li>
		<li><img src="data1/images/lab4.png" alt="Jellyfish" title="Jellyfish" id="wows1_3"/></li>
		</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Hydrangeas"><span><img src="data1/tooltips/lab1.png" alt="Hydrangeas"/>3</span></a>
		<a href="#" title="Chrysanthemum"><span><img src="data1/tooltips/lab2.png" alt="Chrysanthemum"/>1</span></a>
		<a href="#" title="Desert"><span><img src="data1/tooltips/lab3.png" alt="Desert"/>2</span></a>
		<a href="#" title="Jellyfish"><span><img src="data1/tooltips/lab4.png" alt="Jellyfish"/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap carousel</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->

	
	
</div>
<!-- //banner -->
