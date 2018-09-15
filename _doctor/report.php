<?php
	include("includes/header.php");
	
	if(isset($_REQUEST['patient_id'])){
		$sql = "select * from patient_registration where id='$_REQUEST[patient_id]'";
		$rs = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($rs);
		
		$sql1 = "select * from doctor where id='$_REQUEST[d_id]'";
		$rs1 = mysqli_query($conn, $sql1);
		$data1 = mysqli_fetch_assoc($rs1);
		//print "<pre>";
		//print_r($data1);
	}
	
?>
<div class="main-panel report_page">
	<div class="content">
		<div class="container-fluid">
			<div class="report_banner">
				
				<div class="row">
					<div class="header">
						<div class="col-md-4">
						<img src="../images/medical.png" height="150" >
						</div>
						<div class="col-md-8 header_top">
							<h2>MEDICATE</h2>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
							</p>
							
							<div class="row">
								
								<div class="col-md-6 dc_dt">
										<div class="hd">
											<h5>Doctor Details</h5>
										</div>
										<div class="">
											<div><label>Doctor Name:</label><span><?php echo $data1['dr_name']; ?></span></div>
											<div><label>Doctor Qualification:</label><span><?php echo $data1['dr_qualification']; ?></span></div>
											<div><label>Doctor Phone No:</label><span><?php echo $data1['dr_contactnumber']; ?></span></div>
										</div>
								</div>
								
								<div class="col-md-6 pt_dt">
										<div class="hd">
											<h5>Patient Details</h5>
										</div>
										<div class="">
											<div><label>Patient Name:</label><span><?php echo $data['patient_name']; ?></span></div>
											<div><label>Patient Gender:</label><span><?php echo $data['patient_gender']; ?></span></div>
											<div><label>Patient Blood Group:</label><span><?php echo $data['patient_group']; ?></span></div>
											<div><label>Patient Problem:</label><span><?php echo $data['patient_problem']; ?></span></div>
											<div><label>Patient Age:</label><span><?php
											$date1 = $data['patient_dateofbirth'];
											$date2 = date("Y-m-d");

											$diff = abs(strtotime($date2) - strtotime($date1));

											$years = floor($diff / (365*60*60*24));

											printf("%d years", $years);

											?></span></div>
											<div><label>Patient Contact No:</label><span><?php echo $data['patient_contactnumber']; ?></span></div>
											
										</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-12">
						<h4>Medicine. List</h4>
						
						<form action="lib/report.php" method="post" class="rep_pad">
						<textarea class="txt_field" name="patient_report" id="patient_report" placeholder="Write here..."></textarea>
						<input type="submit" name="act" value="Submit" id="rep_btn" />
						<input type="hidden" name="dr_id" value="<?php if(isset($data1['id'])){ echo $data1['id']; }?>" />
						<input type="hidden" name="patient_id" value="<?php if(isset($data['id'])){ echo $data['id']; }?>" />
						<input type="hidden" name="patient_problem" value="<?php if(isset($data['patient_problem'])){ echo $data['patient_problem']; }?>" />
						</form>
					</div>
				</div>
			</div>
		
			
		</div>

<?php
	include("includes/footer.php");
?>