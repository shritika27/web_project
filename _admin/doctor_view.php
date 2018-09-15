<?php
	include("includes/header.php");
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
										<th>Profile Pic</th>						
										<th>Name</th>
										<th>Gender</th>
										<th>Contact Number</th>
										<th>Email</th>
										<th>Qualification</th>
										<th>Specialization</th>
										<th>Work Location</th>
										<th>Action</th>
                                    </thead>
                                    <tbody>
                                       <?php
											$sql = "select * from doctor";
											$rs = mysqli_query($conn, $sql);
											while($data = mysqli_fetch_assoc($rs)){
											
										?>
										
										<tr>
											<td><img src="../_doctor/uploads/doctor/<?php echo $data['dr_profile'];?>" height="50" width="50" class="pf_img" /></td>
											<td><?php echo $data['dr_name'];?></td>
											<td><?php echo $data['dr_gender'];?></td>
											<td><?php echo $data['dr_contactnumber'];?></td>
											<td><?php echo $data['dr_email'];?></td>
											<td><?php echo $data['dr_qualification'];?></td>
											<td><?php echo $data['dr_specialization'];?></td>
											<td><?php echo $data['dr_worklocation'];?></td>				
											<td><a href="javascript:delete_doctor_records(<?php echo $data['id'];?>);"> <img src="images/del.png" height="18"> </a> <a href="doctor_details.php?id=<?php echo $data['id'];?>"> <img src="images/details.png" height="18"> </a></td>
										</tr>
										<?php
											}
										?>
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