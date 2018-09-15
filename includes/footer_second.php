<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    
	
	jQuery(".get_in_touch").click(function(){
		jQuery("#wait img").show();
	});

});
	function callingAjax(){
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
</script>


<!-- footer-->	
<div class="agileits_w3layouts-footer">
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
		<!--//tabs-->
</body>
</html>
