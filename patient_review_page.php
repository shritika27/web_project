<section id="demos" class="review_box w3ls-section">
	<div class="container">
		<div class="row">
			<div class="large-12 columns">
			<h3 class="h3-w3l">Patient Reviews</h3>
				<div class="owl-carousel owl-theme">
					<?php
						$sql = "select * from patient_registration";
						$rs = mysqli_query($conn, $sql);
						while($data = mysqli_fetch_assoc($rs)){
					?>
					<div class="item">
						<div class="box">
							<img src="<?php if($data['patient_profile']){ echo "_patient/uploads/patient/".$data['patient_profile'];  } else { ?> images/avatar.jpg <?php } ?>" class="pr_image">
						</div>
						<div class="box">
							<p class="r_cmt"><?php echo $data['patient_review']; ?></p>
							<p class="p_name"><span>Patient Name</span><?php echo $data['patient_name']; ?></p>
						</div>
					</div>
					<?php
					}
					?>
				</div>

				<script>
				$(document).ready(function() {
					$('.owl-carousel').owlCarousel({
						loop: true,
						margin: 10,
						autoplay: true,
						responsiveClass: true,
						responsive: {
							0: {
								items: 1,
								nav: true
							},
							600: {
								items: 1,
								nav: false
							},
							1000: {
								items: 2,
								nav: true,
								loop: true,
								margin: 20
							}
						}
					})
				})
				</script>
			</div>
		</div>
	</div>
</section>
