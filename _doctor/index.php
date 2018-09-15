<?php 

	include("includes/header.php");

	if(isset($_SESSION['id'])){
	$sql = "select * from doctor where id = '$_SESSION[id]'";
	$rs = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($rs);
	// print "<pre>";
	//print_r($data);
	}
	
?>
    <div class="main-panel">	
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
							<form class="form-horizontal" action="lib/doctor.php" enctype="multipart/form-data" method="post">
								<div class="form-group">
								  <label class="control-label col-sm-2" for="dr_name">Name:</label>
								  <div class="col-sm-10">
									<input type="name" class="form-control" id="dr_name" placeholder="Enter name" name="dr_name" value="<?php if(isset($data['dr_name'])){echo $data['dr_name']; }?>">
							   
							 </div>
								</div>
								<div class="form-group">
								  <label class="control-label col-sm-2" for="dr_gender">Gender</label>
								  <div class="col-sm-10">
									<input type="radio" class="" id="dr_gender"  name="dr_gender" value="female"
									<?php if(isset($data['dr_gender'])){if($data['dr_gender'] == "female"){
										echo "checked";
									}}?>> Female
									<input type="radio" class="" id="dr_gender"  name="dr_gender" value="male" <?php if(isset($data['dr_gender'])){if($data['dr_gender'] == "male"){
										echo "checked";
									}}?>> Male
								  </div>
								</div>
								<div class="form-group">
								  <label class="control-label col-sm-2" for="dr_contactnumber">Contact No:</label>
								  <div class="col-sm-10">          
									<input type="text" class="form-control" id="pwd" placeholder="Enter contact number" name="dr_contactnumber" value="<?php if(isset($data['dr_contactnumber'])){ echo $data['dr_contactnumber'];}?>">
								  </div>
								</div>
								<div class="form-group">
								  <label class="control-label col-sm-2" for="dr_name">Email:</label>
								  <div class="col-sm-10">
									<input type="email" class="form-control" id="dr_name" placeholder="Enter Email" name="dr_email" value = "<?php if(isset($data['dr_email'])){ echo $data['dr_email'];}?>" readonly>
								  </div>
								</div>
									<div class="form-group">
									   <label class="control-label col-sm-2" for="dr_pass">Password:</label>
									   <div class="col-sm-10">          
										  <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="dr_pass" value="<?php if(isset($data['dr_pass'])){echo $data['dr_pass'];}?>">
									   </div>
									</div>   
								  <div class="form-group">
									  <label class="control-label col-sm-2" for="dr_cpass">Confirm Password:</label>
									  <div class="col-sm-10">          
										 <input type="password" class="form-control" id="dr_cpass" placeholder="Re-type password" name="dr_cpass" value="<?php if(isset($data['dr_pass'])){ echo $data['dr_pass'];}?>">
									  </div>
								  </div>
								
							   <div class="form-group">
								<label class="control-label col-sm-2" for="dr_qualification">Qualification:</label>
								<div class="col-sm-10">          
								   <input type="text" class="form-control" id="dr_qualification"  name="dr_qualification" value="<?php if(isset($data['dr_qualification'])){ echo $data['dr_qualification'];}?>">
								  </div>
								</div> 
								
								<div class="form-group">
									 <label class="control-label col-sm-2" for="dr_specialization">Specialization:</label>
								   <div class="col-sm-10">          
								 <input type="text" class="form-control" id="dr_specialization" name="dr_specialization" value="<?php if(isset($data['dr_specialization'])){ echo $data['dr_specialization'];}?>">
								  </div>
								</div>  
								  <div class="form-group">
								  <label class="control-label col-sm-2" for="dr_worklocation">Work Location:</label>
								  <div class="col-sm-10">          
									<input type="text" class="form-control" id="dr_worklocation" name="dr_worklocation" value="<?php if(isset($data['dr_worklocation'])){ echo $data['dr_worklocation'];}?>">
								  </div>
								 </div> 
								  <div class="form-group">
								  <label class="control-label col-sm-2" for="dr_sec_question">Security Question:</label>
								  <div class="col-sm-10"> 
									  <select name="dr_sec_question">
									  
									  <option value="0">-- Please Select Security Question -- </option>
										<?php
											$sql1 = "select * from security_question";
											$rs1 = mysqli_query($conn, $sql1);
											while($data1 = mysqli_fetch_assoc($rs1)){
										?>
											 <option value="<?php echo $data1['sec_ques_name']; ?>" <?php if($data1['sec_ques_name'] == $data['dr_sec_question'] ){ echo "selected"; } ?>  ><?php echo $data1['sec_ques_name']; ?></option>
										<?php 	
											}
										?>
									 </select>	  
								   
								  </div>
								 </div> 
								  <div class="form-group">
								  <label class="control-label col-sm-2" for="dr_sec_answer">Security Answer:</label>
								  <div class="col-sm-10">          
									<input type="text" class="form-control" id="dr_sec_answer" name="dr_sec_answer" value="<?php if(isset($data['dr_sec_answer'])){ echo $data['dr_sec_answer'];}?>">
								  </div>
								 </div> 
								<div class="form-group">
								  <label class="control-label col-sm-2" for="dr_bookingprice">Booking Price:</label>
								  <div class="col-sm-10">          
									<input type="number" class="form-control" id="dr_bookingprice"  name="dr_bookingprice" value="<?php if(isset($data['dr_bookingprice'])){ echo $data['dr_bookingprice']; }?>">
								  </div>
								</div> 
								<div class="form-group">
								  <label class="control-label col-sm-2" for="dr_bookingprice">facebook Link:</label>
								  <div class="col-sm-10">          
									<input type="url" class="form-control" id="dr_fb_link"  name="dr_fb_link" value="<?php if(isset($data['dr_fb_link'])){ echo $data['dr_fb_link']; }?>">
								  </div>
								</div> 
								<div class="form-group">
								  <label class="control-label col-sm-2" for="dr_bookingprice">Twitter Link:</label>
								  <div class="col-sm-10">          
									<input type="url" class="form-control" id="dr_twitter_link"  name="dr_twitter_link" value="<?php if(isset($data['dr_twitter_link'])){ echo $data['dr_twitter_link']; }?>">
								  </div>
								</div> 
								<div class="form-group">
								  <label class="control-label col-sm-2" for="dr_bookingprice">Google+ Link:</label>
								  <div class="col-sm-10">          
									<input type="url" class="form-control" id="dr_google_link"  name="dr_google_link" value="<?php if(isset($data['dr_google_link'])){ echo $data['dr_google_link']; }?>">
								  </div>
								</div> 
								  <div class="form-group">
								  <label class="control-label col-sm-2" for="dr_profile">Profile</label>
								  <div class="col-sm-10">          
									<input type="file" class="form-control" id="dr_profile" name="dr_profile" value="<?php if(isset($data['dr_profile'])){ echo $data['dr_profile']; }?>" onchange="readfile_name(this);">
									 <img id="profile_img" src="uploads/doctor/<?php if(isset($data['dr_profile'])){ echo $data['dr_profile']; }?>" />
								  </div>
								 </div> 
								<div class="form-group">        
								  <div class="col-sm-offset-2 col-sm-10" style="text-align:center;">
									<button type="submit" class="btn btn-default" >Update</button>
									
									<input type="hidden" name="act" value="save_doctor_records"/>
									<input type="hidden" name="id" value="<?php if(isset($data['id'])){ echo $data['id']; }?>" />
									<input type="hidden" name="dr_profile" value="<?php if(isset($data['dr_profile'])){ echo $data['dr_profile']; }?>" />
									
								  </div>
								</div>
							  </form>

							</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-user">
                            <div class="image">
                                <img src="../images/pr_banner.jpg" alt="..."/>
                            </div>
                            <div class="content">
                                <div class="author">
                                     <a href="#">
                                    <img class="avatar border-gray" src="uploads/doctor/<?php echo $data['dr_profile'];?>" alt="..."/>

                                      <h4 class="title"><?php echo $data['dr_name']; ?><br />
                                         <small><?php echo $data['dr_gender']; ?></small>
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> 
									<?php echo $data['dr_qualification']; ?>
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="<?php if(isset($data['dr_fb_link'])){ echo $data['dr_fb_link']; } else "javascript:void(0)"; ?>" class="btn btn-simple"><i class="fa fa-facebook-square"></i></a>
                                <a href="<?php if(isset($data['dr_twitter_link'])){ echo $data['dr_twitter_link']; } else "javascript:void(0)"; ?>" class="btn btn-simple"><i class="fa fa-twitter"></i></a>
                                <a href="<?php if(isset($data['dr_google_link'])){ echo $data['dr_google_link']; } else "javascript:void(0)"; ?>" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></a>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
           

<?php include("includes/footer.php"); ?>