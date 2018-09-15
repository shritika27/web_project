<?php
	include("includes/header.php");
	$sql = "select * from daignostic_center where id = '$_REQUEST[id]'";
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
										<th><h5><?php echo "Diagnosis ".$data['dia_name'];?> Details</h5></th>
									</thead>
									<tbody>
										<tr>
											<th>Diagnosis Profile</th>
											<td><img src="../_diagnostic/uploads/digcent/<?php echo $data['dia_pro'];?>" height="50" width="50" class="pf_img" /></td>
										</tr>
										<tr>
											<th>Diagnosis Name</th>
											<td><?php echo $data['dia_name'];?></td>
										</tr>
										<tr>
											<th>Diagnosis Contact Number</th>
											<td><?php echo $data['dia_contnum'];?></td>
										</tr>
										<tr>
											<th>Diagnosis Email</th>
											<td><?php echo $data['dia_email'];?></td>
										</tr>
										<tr>	
											<th>Diagnosis Work Location</th>
											<td><?php echo $data['dia_loc'];?></td>	
										</tr>	
										<tr>	
											<th>Diagnosis Security Question</th>
											<td><?php echo $data['dia_secqus'];?></td>	
										</tr>	
										<tr>	
											<th>Diagnosis Security Answer</th>
											<td><?php echo $data['dia_secans'];?></td>	
										</tr>	
										<tr>	
											<th>Diagnosis Booking Price</th>
											<td><?php echo $data['dia_bookingprice'];?></td>	
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