<?php
	include("includes/header.php");
	$sql = "select * from doctor where id = '$_REQUEST[id]'";
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
										<th><h5><?php echo "Dr. ".$data['dr_name'];?> Details</h5></th>
									</thead>
									<tbody>
										<tr>
											<th>DR. Profile</th>
											<td><img src="../_doctor/uploads/doctor/<?php echo $data['dr_profile'];?>" height="50" width="50" class="pf_img" /></td>
										</tr>
										<tr>
											<th>DR. Name</th>
											<td><?php echo $data['dr_name'];?></td>
										</tr>
										<tr>
											<th>DR. Gender</th>
											<td><?php echo $data['dr_gender'];?></td>
										</tr>
										<tr>
											<th>DR. Contact Number</th>
											<td><?php echo $data['dr_contactnumber'];?></td>
										</tr>
										<tr>
											<th>DR. Email</th>
											<td><?php echo $data['dr_email'];?></td>
										</tr>
										<tr>
											<th>DR. Qualification</th>
											<td><?php echo $data['dr_qualification'];?></td>
										</tr>
										<tr>
											<th>DR. Specialization</th>
											<td><?php echo $data['dr_specialization'];?></td>
										</tr>	
										<tr>	
											<th>DR. Work Location</th>
											<td><?php echo $data['dr_worklocation'];?></td>	
										</tr>	
										<tr>	
											<th>DR. Security Question</th>
											<td><?php echo $data['dr_sec_question'];?></td>	
										</tr>	
										<tr>	
											<th>DR. Security Answer</th>
											<td><?php echo $data['dr_sec_answer'];?></td>	
										</tr>	
										<tr>	
											<th>DR. Booking Price</th>
											<td><?php echo $data['dr_bookingprice'];?></td>	
										</tr>
										<tr>	
											<th>DR. Facebook Link</th>
											<td><?php echo $data['dr_fb_link'];?></td>	
										</tr>
										<tr>	
											<th>DR. Twitter Link</th>
											<td><?php echo $data['dr_twitter_link'];?></td>	
										</tr>
										<tr>	
											<th>DR. Google Plus Link</th>
											<td><?php echo $data['dr_google_link'];?></td>	
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