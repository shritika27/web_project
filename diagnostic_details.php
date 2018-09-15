<?php
session_start();
include("includes/header_diagnosis.php");
?>

<section id="doctor_deatils_section">
<?php
	if(isset($_REQUEST['id'])){
		$sql = "select * from daignostic_center where id = '$_REQUEST[id]' ";
		$rs = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($rs);
		
		$bookingprice =$data['dia_bookingprice'];
		
	}
?>

<div class="container">	
	<div class="row">
		<div class="col-md-4 doctor_details">	
			<img src="_diagnostic/uploads/digcent/<?php echo $data['dia_pro']; ?> "class="img-responsive"/>
			<p style="color:black;"><label>NAME :- </label> <span class="data"><?php echo $data['dia_name']; ?></p>
			<p style="color:black;"><label>CONTACT NUMBER :- </label> <span class="data"> <?php echo $data['dia_contnum']; ?></span></p>
			<p style="color:black;"><label>EMAIL :- </label> <span class="data"><?php echo $data['dia_email']; ?></span></p>
			<p style="color:black;"><label>LOCATION :- </label> <span class="data"><?php echo $data['dia_loc']; ?></span></p>
			<p style="color:black;"><label>BOOKING-PRICE :- </label> <span class="data">$ <?php echo $data['dia_bookingprice']; ?></span></p>
		</div>
		<div class="col-md-8 doctorapp">
		<?php 
			$app_sql = "select * from appointment where dia_id = '$_REQUEST[id]'";
			$app_rs = mysqli_query($conn, $app_sql);
			
			while($app_data = mysqli_fetch_assoc($app_rs)){
			?>
				<div class="col-md-3 date_section">
				<?php
				echo "<p class='day'>";
				$input = $app_data['dia_app_date'];
				echo date("l", strtotime($input))."</p><p class='apdate'>". $app_data['dia_app_date']."</p>"; ?>
				<p class="mrn"> <img src="images/sun.png" > <?php echo $app_data['dia_app_mtime']; ?> </p>
				<hr class="hr_line">
				<p class="evn"> <img src="images/moon.png" > <?php echo $app_data['dia_app_etime']; ?> </p>
				
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
						<input type="hidden" name="on2" value="diagnostic"/>
						
						<input type="hidden" name="on1" value="<?php echo $app_data['dia_app_date'];?>"/>
						
						
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
			
			<?php }
		?>	
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
				$dia_team = "select * from daignostic_center";
				$dteam_rs = mysqli_query($conn,$dia_team);
				while($dia_data  = mysqli_fetch_assoc($dteam_rs)){
				?>
				<li>
				<a href="diagnostic_details.php?id=<?php echo $dia_data['id'];?>" >
				<img src="_diagnostic/uploads/digcent/<?php echo $dia_data['dia_pro'];?>" alt="" class="img-responsive" /></a>
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


  <!-- Trigger the modal with a button 
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

  

<?php include("includes/footer_second.php"); ?>
