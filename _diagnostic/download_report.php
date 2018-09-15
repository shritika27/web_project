<?php
	include("includes/header.php");
	if(isset($_REQUEST['report_id'])){			
		$sql1 = "select * from dia_report where report_id = '$_REQUEST[report_id]' ";
		$rs1 = mysqli_query($conn, $sql1);
		$data1 = mysqli_fetch_assoc($rs1);
		
		
	}
	$sql = "select * from patient_registration where id = '$_SESSION[id]'";
	$rs = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($rs);
?>


    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
				<div class="d_report_page">
					<div class="row">
						<div class="col-md-12">
							<div class="odlrs_header">
								<div class="col-md-6 odlrs_pprofile_img">
									<div class="patient_box_img">									
										<img id="profile_img" src="uploads/patient/<?php if(isset($data['patient_profile'])){ echo $data['patient_profile']; }?>" />
									</div>
								</div>
								<div class="col-md-6 odlrs_pp_details">
								<h3 class="title"><?php echo $data['patient_name']; ?></h3>
                                         <h5><label>Gender:-</label><span><?php echo $data['patient_gender']; ?></span></h5>
                                         <h5><label> Blood Group:-</label><span><?php echo $data['patient_group']; ?><span></h5>
				                         <h5><label>Contact Number:-</label><span><?php echo $data['patient_contactnumber'];?><span></h5>
				                        <h5><label>Email:-</label><span><?php echo $data['patient_email'];?><span></h5>
				                         <h5><label>Problem:-</label><span><?php echo $data['patient_problem'];?><span></h5>
				                         <h5><label>Location:-</label><span><?php echo $data['patient_location'];?><span></h5>
				                         <h5><label>Date Of Birth:-</label><span><?php echo $data['patient_dateofbirth'];?><span></h5>
                                      </h4>
								</div>
							</div>
						</div>
					</div>
					<div class="">
					</div>
					<div class="see_report">
						<div class="body_section_page" >
						   
							<?php echo $data1['patient_report'];?>
						
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 s_footer">
						<span id="c_btn" onclick="printData();">PrintOut</span>
					</div>
				</div>
				
			</div>
		</div>
     </div>     

<?php include("includes/footer.php"); ?>