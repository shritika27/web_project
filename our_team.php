<!-- team -->
<div class="team w3ls-section" id="team">
	<div class="container">
		<h3 class="h3-w3l">Team of Doctors</h3>
		<div class="w3-agileits-team-title">			
			<div id="horizontalTab">
				<div class="resp-tabs-container">
					<ul class="col-md-12 my_res_list">
						<?php
							$d_team = "select * from doctor";
							$team_rs = mysqli_query($conn,$d_team);
							while($d_data  = mysqli_fetch_assoc($team_rs)){
						?>
							<li>
								<a href="doctor_details.php?id=<?php echo $d_data['id'];?>" > <img src="_doctor/uploads/doctor/<?php echo $d_data['dr_profile']; ?>" alt="<?php echo $d_data['dr_name']; ?>" class="img-responsive" /></a>
							</li>
						<?php }	?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End team -->