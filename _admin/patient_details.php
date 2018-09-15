<?php
	include("includes/header.php");
	$sql = "select * from patient_registration where id = '$_REQUEST[id]'";
	$rs = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($rs);
											
?>
<div class="main-panel">
<div class="content">
<div class="container-fluid">
   			<div class="row">
                    <div class="col-md-12">
                        <div class="card">
							<h3 style="text-align:center;"><?php if(isset($_REQUEST['msg'])){echo $_REQUEST['msg'];}?></h3>
                           <form name="doctor_view" action="../_doctor/lib/doctor.php">
							
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
									<thead>
										<th><h5><?php echo "Patient ".$data['patient_name'];?> Details</h5></th>
									</thead>
									<tbody>
										<tr>
											<th>Patient Profile</th>
											<td><img src="../_patient/uploads/patient/<?php echo $data['patient_profile'];?>" height="50" width="50" class="pf_img" /></td>
										</tr>
										<tr>
											<th>Patient Name</th>
											<td><?php echo $data['patient_name'];?></td>
										</tr>
										<tr>
											<th>Patient Gender</th>
											<td><?php echo $data['patient_gender'];?></td>
										</tr>
										<tr>
											<th>Patient Contact Number</th>
											<td><?php echo $data['patient_contactnumber'];?></td>
										</tr>
										<tr>
											<th>Patient Email</th>
											<td><?php echo $data['patient_email'];?></td>
										</tr>
										<tr>
											<th>Patient Blood Group</th>
											<td><?php echo $data['patient_group'];?></td>
										</tr>
										<tr>
											<th>Patient Problem</th>
											<td><?php echo $data['patient_problem'];?></td>
										</tr>
										<tr>	
											<th>Patient Date Of Birth</th>
											<td><?php echo $data['patient_dateofbirth'];?></td>	
										</tr>	
										<tr>	
											<th>Patient Location</th>
											<td><?php echo $data['patient_location'];?></td>	
										</tr>	
										<tr>	
											<th>Patient Security Question</th>
											<td><?php echo $data['patient_sec_ques'];?></td>	
										</tr>	
										<tr>	
											<th>Patient Security Answer</th>
											<td><?php echo $data['patient_sec_ans'];?></td>	
										</tr>	
										<tr>	
											<th>Patient Facebook Link</th>
											<td><?php echo $data['patient_fb_link'];?></td>	
										</tr>	
										<tr>	
											<th>Patient Twitter Link</th>
											<td><?php echo $data['patient_twitter_link'];?></td>	
										</tr>	
										<tr>	
											<th>Patient Google+ Link</th>
											<td><?php echo $data['patient_google_link'];?></td>	
										</tr>
									</tbody>
                                </table>

                            </div>

								<input type="hidden" name="act"/>
								<input type="hidden" name="id"/>
							</form>
                        </div>
                    </div>



                </div>
		</div>

<?php
	include("includes/footer.php");
?>