<?php
include("includes/header.php");
// print "<pre>";
// print_r($_POST);

?>

<?php
	
	global $conn;
	if($_REQUEST['option_name3'] == "doctor"){
		
	$sql1 =" INSERT INTO `payment` (`patient_id`, `doctor_id`, `dia_id`, `payer_email`, `booking_date`, `business_email`, `payment_status`, `payment_date`) VALUES ('$_POST[item_number]', '$_POST[option_name1]', '-', '$_POST[payer_email]', '$_POST[option_name2]', '$_POST[business]', '$_POST[payment_status]', CURRENT_TIMESTAMP);";
	}

	else{
		$sql1 =" INSERT INTO `payment` (`patient_id`, `doctor_id`, `dia_id`, `payer_email`, `booking_date`, `business_email`, `payment_status`, `payment_date`) VALUES ('$_POST[item_number]', '-', '$_POST[option_name1]', '$_POST[payer_email]', '$_POST[option_name2]', '$_POST[business]', '$_POST[payment_status]', CURRENT_TIMESTAMP);";
	}
	$rs1 = mysqli_query($conn, $sql1);
	if($rs1)
    {
?>

<section id="success_details">
	<div class="container">
		<div class="row">
			<div class="col-md-12 sheader_top" >
				<img src="images/green-tick.png" height="120" />
				<div id="pay_title">Your payment is successfully done !</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">
						<div class="title">
							<label>Patient name:</label>
						</div>
						<div class="title">
							<label>Patient Email-ID:</label>
						</div>
						<div class="title">
							<label>patient Address:</label>
						</div>
						<div class="title">
							<label>Patient City:</label>
						</div>
						<div class="title">
							<label>Payment Fees:</label>
						</div>
						<div class="title">
							<label>Payment Status:</label>
						</div>
					</div>
					<div class="col-md-6">
						<div class="details">
							<label><?php echo $_POST['first_name'].'&nbsp;'.$_POST['last_name'];?></label>
						</div>
						<div class="details">
							<label><?php echo $_POST['payer_email'];?></label>
						</div>
						<div class="details">
							<label><?php echo $_POST['address_street'];?></label>
						</div>
						<div class="details">
							<label><?php echo $_POST['address_city'];?></label>
						</div>
						<div class="details">
							<label><?php echo $_POST['payment_fee'];?></label>
						</div>
						<div class="details">
							<label><?php echo $_POST['payment_status'];?></label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 s_footer" >
				<span id="c_btn" onClick="printData();">PrintOut</span>
			</div>
		</div>
	</div>
</section>
<?php
    }	 
 
?>
