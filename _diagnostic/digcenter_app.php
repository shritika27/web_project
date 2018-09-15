<?php
include("includes/header.php");

if(isset($_REQUEST['id']))
    {
		$sql1= "select * from appointment where id = '$_REQUEST[id]'";
		$rs1 = mysqli_query($conn, $sql1);
		$data1 = mysqli_fetch_assoc($rs1);
	}
?>
<div class="main-panel">
<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Diagnostic center Application Form</h4>
                            </div>
                            <div class="content">
                                <form action="lib/appointment.php" method="post">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Appointment Date:</label>
                                                <input type="date" name="dia_app_date" id="dia_app_date datepicker" class="form-control" placeholder="Enter Appointment Date......" value="<?php if(isset($data1['dia_app_date'])){ echo $data1['dia_app_date']; }?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Appointment Morning Time:</label>
												<?php
                                                 if(isset($data1['dia_app_mtime'])){
												$time = $data1['dia_app_mtime'];
												$time_arr=explode('To',$time);
												 }
												?>
                                                <div class="col-md-6">
                                                <input type="time" name="dia_app_mstime" id="dia_app_mstime" class="form-control" placeholder="Appointment Morning Time.." value="<?php if(isset($time_arr[0])){echo trim($time_arr[0]);}?>">
                                            </div>
											<div class="col-md-6">
                                                <input type="time" name="dia_app_metime" id="dia_app_metime" class="form-control" placeholder="Appointment Morning Time.." value="<?php if(isset($time_arr[1])){echo trim($time_arr[1]);}?>">
                                            </div>
                                           </div>
										</div>          <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Appointment Evening Time:</label>
												<?php 
												if(isset($data1['dia_app_etime'])){
												$time = $data1['dia_app_etime'];
												$time_arr=explode('To',$time);
												}
												?>
                                               <div class="col-md-6">
                                                <input type="time" name="dia_app_estime" id="dia_app_estime" class="form-control" placeholder="Appointment Morning Time.." value="<?php if(isset($time_arr[0])){echo trim($time_arr[0]);}?>">
                                            </div>
											<div class="col-md-6">
                                                <input type="time" name="dia_app_eetime" id="dia_app_eetime" class="form-control" placeholder="Appointment Morning Time.." value="<?php if(isset($time_arr[1])){echo trim($time_arr[1]);}?>">
                                              </div>
                                            </div>
                                        </div>
                                    </div>

                                    
                                    <button type="submit" class="btn btn-info btn-fill pull-right"><?php if(isset($_REQUEST['id'])){echo "Update Appointment";} else{echo "Add Appointment";}?></button>
                                    <input type="hidden" name="act" value="save_appointment_date" />
									<input type="hidden" name="id" value="<?php if(isset($data1['id'])) { echo $data1['id']; }?>" />
                                    <input type="hidden" name="dia_id" value="<?php echo $_SESSION['id']; ?>" />
									
									<div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>
          <div class="col-md-12">
		                  <form name="digcenter_app_view" action="lib/appointment.php" method="post">
                         <div class="content table-responsive table-full-width">
                                <table class="table table-hover">
                                    <thead>
									<tr>
                                       <th>Diagnostic center ID</th>
                                    	<th>Appointment Date</th>
                                    	<th>Appointment Morning Time</th>
                                    	<th>Appointment Evening Time</th>
                                    	<th>Action</th>
                                    </tr>
									</thead>
                                    <tbody>
                                      <?php 
									  $sql="select * from appointment where dia_id ='$_SESSION[id]'";
									  $rs = mysqli_query($conn,$sql);
									  $i=1;
									  while($data = mysqli_fetch_assoc($rs)){
										?>
										<tr>
									<td><?php echo $i; ?></td>								  
									<td><?php echo $data['dia_app_date']; ?></td>								  
									<td><?php echo $data['dia_app_mtime']; ?></td>								  
									<td><?php echo $data['dia_app_etime']; ?></td>								  
									<td><a href="digcenter_app.php?id=<?php echo $data['id'];?>">Edit</a>|<a href="javascript:delete_digcenter_app_records(<?php echo $data['id'];?>);"> Delete</a></td>	
									</tr>
									<?php
									$i++;
									  }
									  ?>
                                    </tbody>
                                </table>

                            </div>
							<input type="hidden" name="act"  />
	                        <input type="hidden" name="id" />
                       </form>
                        </div>
                    


                </div>
            </div>
        </div>
     
<?php include("includes/footer.php"); ?>