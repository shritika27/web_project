		<!-- team -->
<div class="team w3ls-section dia_team" id="diagnostic_team">
	<div class="container">
			<div class="w3-agileits-team-title"> 
				<h3 class="h3-w3l">Team of Diagnostics</h3>
				<div id="horizontalTab">
				<div class="resp-tabs-container">
				<ul class="col-md-12 my_res_list">
				<?php
				  $dia_team = "select * from daignostic_center";
				  $dteam_rs = mysqli_query($conn,$dia_team);
				  while($dia_data  = mysqli_fetch_assoc($dteam_rs)){
				 ?>
					<li>
						<a href="diagnostic_details.php?id=<?php echo $dia_data['id'];?>" >
							<img src="_diagnostic/uploads/digcent/<?php echo $dia_data['dia_pro'];?>" alt="" class="img-responsive" height="100" width="100" /></a>
					</li>
				  
				  <?php }
				  
				  ?>
				</ul>
					
				</div>
					
					<div class="clearfix"> </div>
					
			</div>
	</div>
 </div>
</div>
<!-- //team -->