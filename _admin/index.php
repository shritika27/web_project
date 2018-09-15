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
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Subject</th>
										<th>Message</th>
										<th>Status</th>
										<th>Action</th>
                                    </thead>
                                    <tbody>
                                       <?php
											$sql = "select * from get_in_touch where status = '0'";
											$rs = mysqli_query($conn, $sql);
											while($data = mysqli_fetch_assoc($rs)){				
										?>
										
										<tr>
											<td><?php echo $data['first_name'];?></td>
											<td><?php echo $data['last_name'];?></td>
											<td><?php echo $data['email'];?></td>
											<td><?php echo $data['subject'];?></td>
											<td><?php echo $data['message'];?></td>
											<td><?php echo $data['status'];?></td>		
											<td><a href="../lib/get_in_touch.php?id=<?php echo $data['id'];?>">Approve</a></td>
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