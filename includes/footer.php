<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	function callingAjax(){
		var fname = jQuery(".first_name").val();
		var lname = jQuery(".last_name").val();
		var email = jQuery(".email").val();
		var subject = jQuery(".subject").val();
		var message = jQuery(".message").val();
		
		if(fname == ''){
			jQuery(".first_name").css("border-color","red");
		}
		if(lname == ''){
			jQuery(".last_name").css("border-color","red");
		}
		if(email == ''){
			jQuery(".email").css("border-color","red");
		}
		if(subject == ''){
			jQuery(".subject").css("border-color","red");
		}
		if(message == ''){
			jQuery(".message").css("border-color","red");
		}
		if( fname != '' && lname != '' && email != '' && subject != '' && message != ''){
			jQuery("#wait img").show();
			jQuery('input[type=password]').css("border-color","none");
			var data = jQuery(".get_in_touch_form").serialize();
			jQuery.ajax({
				method: 'POST',
				url : 'lib/get_in_touch.php',
				data: {'frm_data': data}
			}).done(function(response){
				jQuery("#wait").html(response);
				console.log(response);
			}).fail(function(response){
				console.log("Fail");
			});
		}
		
	}	
</script>

<!-- contact -->	
	<div class="contact w3ls-section" id="contact">
		<div class="container">
			<h3 class="h3-w3l">Get in touch</h3>
			<div class="contact-grids">
				 <div class="col-md-6 col-sm-6 contact-left">
					<form method="post" class="get_in_touch_form">
						<input type="text" class="first_name" name="first_name" id="first_name" placeholder="First Name" required="">
						<input type="text" class="last_name" name="last_name" placeholder="Last Name">
						<input type="email" class="email" name="email" placeholder="Email">
						<input type="text" class="subject" name="subject" placeholder="Subject">
						<textarea placeholder="Your Message" name="message" class="message"></textarea>
                   </form>
					<div id="txt">
						<button class="btn btn-default get_in_touch" onClick="callingAjax();"> send value </button>
						<div id="wait">
							<img src='images/mmloader.gif' style="display:none;" />
						</div>
					</div>
				
				</div>
				<div class="col-md-6 col-sm-6 contact-left" data-wow-duration="2s" data-wow-delay="0.5s">
					<h2>Contact Information</h2>
					<?php
						$sql = "select * from contact_information";
						$rs = mysqli_query($conn,$sql);
						if($rs){
							$data = mysqli_fetch_assoc($rs);
							//print_r($data);
						}
					?>
					<p>" <?php echo $data['message'];?> "</p>
					<ul class="contact-list">
						<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><?php echo $data['location'];?></li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:example@mail.com"><?php echo $data['email'];?></a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><?php echo $data['contact'];?></li>
					</ul>
					<ul class="social-icons3">
						<li><a href="<?php echo $data['site_fb'];?>" class="fa fa-facebook icon-border facebook"> </a></li>
						<li><a href="<?php echo $data['site_twitter'];?>" class="fa fa-twitter icon-border twitter"> </a></li>
						<li><a href="<?php echo $data['site_g+'];?>" class="fa fa-google-plus icon-border googleplus"> </a></li> 
					</ul>
				</div>						
				<div class="clearfix"> </div>
			</div>		
		</div>	
	</div>
<!-- //contact -->	
<!-- footer-->	
<div class="agileits_w3layouts-footer">
	<div class="agileits-map">		
	<div id="map"></div>
	</div>
	<div class="copy-right text-center">
		<span class="agileits-copy fa fa-plus" aria-hidden="true"></span>
		<p>&copy; 2018 Medicate.</p>
	</div>	
</div>	
<style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>
	<script>
	function initMap() {
	var uluru = {lat: 26.401422, lng: 75.872161};
	var map = new google.maps.Map(document.getElementById('map'), {
	zoom: 18,
	center: uluru
	});
	var marker = new google.maps.Marker({
	position: uluru,
	map: map
	});
	}
	</script>
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqb3fT3SbMSDMggMEK7fJOIkvamccLrjA&callback=initMap">
	</script>

<!-- footer-->	
<script src="js/jarallax.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
	/* init Jarallax */
	$('.jarallax').jarallax({
		speed: 0.5,
		imgWidth: 1366,
		imgHeight: 768
	})
</script>
<!-- here starts scrolling icon -->
		<!-- start-smoth-scrolling -->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
		<!-- /ends-smoth-scrolling -->
	<!-- //here ends scrolling icon -->
	<!--start-date-piker-->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
			<script>
				$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
				});
			</script>
<!-- //End-date-piker -->	
<!-- here starts scrolling icon -->
		<script type="text/javascript">
			$(document).ready(function() {
				/*
					var defaults = {
					containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
					};
				*/
										
				$().UItoTop({ easingType: 'easeOutQuart' });
									
				});
		</script>
<!--tabs-->
		<script src="js/easy-responsive-tabs.js"></script>
		<script>
		$(document).ready(function () {
		$('#horizontalTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion           
		width: 'auto', //auto or any width like 600px
		fit: true,   // 100% fit in a container
		closed: 'accordion', // Start closed if in accordion view
		activate: function(event) { // Callback function if tab is switched
		var $tab = $(this);
		var $info = $('#tabInfo');
		var $name = $('span', $info);
		$name.text($tab.text());
		$info.show();
		}
		});
		$('#verticalTab').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		fit: true
		});
		});
		</script>

	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/highlight.js"></script>
    <script src="js/app.js"></script>
		<!--//tabs-->
</body>
</html>
