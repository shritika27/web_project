<?php
session_start();
include("includes/header_doctor.php");
?>
<section id="doctor_deatils_section">
<?php
	if(isset($_REQUEST['id'])){
		$sql = "select * from doctor where id = '$_REQUEST[id]' ";
		$rs = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($rs);
		
		$bookingprice =$data['dr_bookingprice'];
		
	}
?>

<div class="container">	
	<div class="row">
		<div class="col-md-4 doctor_details">	
			<img src="_doctor/uploads/doctor/<?php echo $data['dr_profile']; ?> "class="img-responsive"/>
			<p style="color:black;"><label>NAME :- </label> <span class="data"> <?php echo $data['dr_name']; ?></span></p>
			<p style="color:black;"><label>GENDER :-</label> <span class="data"><?php echo $data['dr_gender']; ?></span></p>
			<p style="color:black;"><label>EMAIL :- </label> <span class="data"><?php echo $data['dr_email']; ?></span></p>
			<p style="color:black;"><label>QUALIFICATION:- </label> <span class="data"><?php echo $data['dr_qualification']; ?></span></p>
			<p style="color:black;"><label>SPECIALIZATION:-</label> <span class="data"><?php echo $data['dr_specialization']; ?></span></p>
		</div>
		<div class="col-md-8 doctorapp">
		<?php 
			$app_sql = "select * from dr_appointment where doctor_id = '$_REQUEST[id]'";
			$app_rs = mysqli_query($conn, $app_sql);
			
			while($app_data = mysqli_fetch_assoc($app_rs)){
			?>
				<div class="col-md-3 date_section">
				<?php
				echo "<p class='day'>";
				$input = $app_data['doctor_app_date'];
				echo date("l", strtotime($input))."</p><p class='apdate'>". $app_data['doctor_app_date']."</p>"; ?>
				<p class="mrn"> <img src="images/sun.png" > <?php echo $app_data['doctor_app_mtime']; ?> </p>
				<hr class="hr_line">
				<p class="evn"> <img src="images/moon.png" > <?php echo $app_data['doctor_app_etime']; ?> </p>
				
				<?php
				if(isset($_SESSION['id'])){ ?>
					<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" class="payment_form">
						<!-- Identify your business so that you can collect the payments. -->
						<input type="hidden" name="business" value="rockingsaurabh4u@gmail.com">
						
						<!-- Specify a Buy Now button. -->
						<input type="hidden" name="cmd" value="_xclick">
						
						<!-- Specify details about the item that buyers will purchase. -->
						<input type="hidden" name="item_name" value="Apple">
						<input type="hidden" name="item_number" value="<?php echo $_SESSION['id'];?>">
						<input type="hidden" name="amount" value="<?php echo $bookingprice;?>">
						<input type="hidden" name="currency_code" value="USD">
						
						<!-- Specify URLs -->
						<input type='hidden' name='cancel_return' value='http://localhost/web/cancel.php'>
						<input type='hidden' name='return' value='http://localhost/web/success.php'>
						<input type="hidden" name="rm" value="2" />
						
						<input type="hidden" name="on0" value="<?php echo $_REQUEST['id'];?>"/>
						<input type="hidden" name="on2" value="doctor"/>
						
						<input type="hidden" name="on1" value="<?php echo $app_data['doctor_app_date'];?>"/>
						
						
						<!-- Display the payment button. -->
						<!--input type="image" name="submit" border="0"
						src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online"-->
						
						<img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
						
						<input type="submit" name="submit" value="Book" class="book_now_btn">
					</form>
				<?php }
				else {
				?>
						<p class="inform"><span> After Login You Are Allow To Book </span></p>
				<?php 
				}
				?>
				
							
				</div>
			
			<?php }	?>	
		</div>
	</div>

</div>

</section>
<img src="images/lifeline.png" id="circle"  data-toggle="modal" data-target="#myModal">
<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content mypopup">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h5 class="modal-title">Top Ranking Doctor List</h5>
        </div>
        <div class="modal-body">
			<ul class="col-md-12 team_list">
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
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
<script>
var c = document.getElementById("circle");

window.addEventListener("scroll", down);

function down(){
	c.style.top = 90 + "%";
	setTimeout(up, 300);
}
function up(){
	c.style.top = 50 + "%";
}

</script>

<?php include("includes/footer_second.php"); ?>
