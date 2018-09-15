<?php 

	include("includes/header.php");

	if(isset($_SESSION['id'])){
	$sql = "select * from patient_registration where id = '$_SESSION[id]'";
	$rs = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($rs);
	// print "<pre>";
	//print_r($data);
	}
	
?>
    <div class="main-panel">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Edit Profile</h4>
                            </div>
                            <div class="content">
                              <form class="form-horizontal" action="lib/patient.php" enctype="multipart/form-data" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="patient_name">Name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="patient_name" placeholder="Enter name" name="patient_name" value="<?php if(isset($data['patient_name'])){echo $data['patient_name']; }?>">
   
 </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="patient_gender">Gender</label>
      <div class="col-sm-10">
        <input type="radio" class="" id="patient_gender"  name="patient_gender" value="female"
		<?php if(isset($data['patient_gender'])){if($data['patient_gender'] == "female"){
			echo "checked";
		}}?>> Female
		<input type="radio" class="" id="patient_gender"  name="patient_gender" value="male" <?php if(isset($data['patient_gender'])){if($data['patient_gender'] == "male"){
			echo "checked";
		}}?>> Male
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="patient_dateofbirth">Date Of Birth:</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control" id="patient_dateofbirth"  name="patient_dateofbirth" value="<?php if(isset($data['patient_dateofbirth'])){ echo $data['patient_dateofbirth']; }?>">
      </div>
	 </div> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="patient_contactnumber">Contact No:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter contact number" name="patient_contactnumber" value="<?php if(isset($data['patient_contactnumber'])){ echo $data['patient_contactnumber'];}?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="patient_name">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="patient_name" placeholder="Enter Email" name="patient_email" value = "<?php if(isset($data['patient_email'])){ echo $data['patient_email'];}?>" readonly>
      </div>
    </div>
		<div class="form-group">
           <label class="control-label col-sm-2" for="patient_pass">Password:</label>
           <div class="col-sm-10">          
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="patient_pass" value="<?php if(isset($data['patient_pass'])){echo $data['patient_pass'];}?>">
           </div>
		</div>   
	  <div class="form-group">
          <label class="control-label col-sm-2" for="patient_cpass">Confirm Password:</label>
          <div class="col-sm-10">          
             <input type="password" class="form-control" id="patient_cpass" placeholder="Re-type password" name="patient_cpass" value="<?php if(isset($data['patient_pass'])){ echo $data['patient_pass'];}?>">
          </div>
      </div>
    
   <div class="form-group">
    <label class="control-label col-sm-2" for="patient_group">Blood Group:</label>
    <div class="col-sm-10">          
       <input type="radio" class="form-control btn_blood" id="patient_qualification"  name="patient_group" value="A+" <?php if(isset($data['patient_group'])){if($data['patient_group'] == "A+"){ echo "checked";	}}?>>A+ 
       <input type="radio" class="form-control btn_blood" id="patient_qualification" name="patient_group" value="A-" <?php if(isset($data['patient_group'])){if($data['patient_group'] == "A-"){ echo "checked";	}}?>>A-
       <input type="radio" class="form-control btn_blood" id="patient_qualification"  name="patient_group" value="B+" <?php if(isset($data['patient_group'])){if($data['patient_group'] == "B+"){ echo "checked";	}}?> >B+ 
       <input type="radio" class="form-control btn_blood" id="patient_qualification"  name="patient_group" value="B-" <?php if(isset($data['patient_group'])){if($data['patient_group'] == "B-"){ echo "checked";	}}?> >B- 
       <input type="radio" class="form-control btn_blood" id="patient_qualification"  name="patient_group" value="AB+" <?php if(isset($data['patient_group'])){if($data['patient_group'] == "AB+"){ echo "checked";	}}?> >AB+ 
       <input type="radio" class="form-control btn_blood" id="patient_qualification"  name="patient_group" value="AB-" <?php if(isset($data['patient_group'])){if($data['patient_group'] == "AB-"){ echo "checked";	}}?>>AB- 
       <input type="radio" class="form-control btn_blood" id="patient_qualification"  name="patient_group" value="O+" <?php if(isset($data['patient_group'])){if($data['patient_group'] == "O+"){ echo "checked";	}}?>>O+ 
       <input type="radio" class="form-control btn_blood" id="patient_qualification"  name="patient_group" value="O-" <?php if(isset($data['patient_group'])){if($data['patient_group'] == "O-"){ echo "checked";	}}?>>O- 
      </div>
	</div> 
  	
	<div class="form-group">
         <label class="control-label col-sm-2" for="patient_problem">Problem:</label>
       <div class="col-sm-10">          
     <input type="text" class="form-control" id="patient_problem" name="patient_problem" value="<?php if(isset($data['patient_problem'])){ echo $data['patient_problem'];}?>">
      </div>
	</div>  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="patient_location">Location:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="patient_location" name="patient_location" value="<?php if(isset($data['patient_location'])){ echo $data['patient_location'];}?>">
      </div>
	 </div> 
	  <div class="form-group">
      <label class="control-label col-sm-2" for="patient_sec_ques">Security Question:</label>
      <div class="col-sm-10"> 
          <select name="patient_sec_ques">
		  <option value="0">-- Please Select Security Question -- </option>
			<?php
				$sql1 = "select * from security_question";
				$rs1 = mysqli_query($conn, $sql1);
				while($data1 = mysqli_fetch_assoc($rs1)){
			?>
			 <option value="<?php echo $data1['sec_ques_name']; ?>" <?php if($data1['sec_ques_name'] == $data['patient_sec_ques'] ){ echo "selected"; } ?> ><?php echo $data1['sec_ques_name']; ?></option>
                
			<?php 	
				}
			?>
         </select>	  
       
      </div>
	 </div> 
	  <div class="form-group">
      <label class="control-label col-sm-2" for="patient_sec_ans">Security Answer:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="patient_sec_answer" name="patient_sec_ans" value="<?php if(isset($data['patient_sec_ans'])){ echo $data['patient_sec_ans'];}?>">
      </div>
	 </div> 
		<div class="form-group">
			<label class="control-label col-sm-2" for="patient_fb_link">facebook Link:</label>
			<div class="col-sm-10">          
				<input type="url" class="form-control" id="patient_fb_link"  name="patient_fb_link" value="<?php if(isset($data['patient_fb_link'])){ echo $data['patient_fb_link']; }?>">
			</div>
		</div> 
		<div class="form-group">
			<label class="control-label col-sm-2" for="patient_twitter_link">Twitter Link:</label>
			<div class="col-sm-10">          
				<input type="url" class="form-control" id="patient_twitter_link"  name="patient_twitter_link" value="<?php if(isset($data['patient_twitter_link'])){ echo $data['patient_twitter_link']; }?>">
			</div>
		</div> 
		<div class="form-group">
			<label class="control-label col-sm-2" for="patient_google_link">Google+ Link:</label>
			<div class="col-sm-10">          
				<input type="url" class="form-control" id="patient_google_link"  name="patient_google_link" value="<?php if(isset($data['patient_google_link'])){ echo $data['patient_google_link']; }?>">
			</div>
		</div> 
		<div class="form-group">
			<label class="control-label col-sm-2" for="patient_google_link">Give Reviews:</label>
			<div class="col-sm-10">          
				<textarea type="text" class="form-control" id="patient_review" placeholder="Write Here..."  name="patient_review"><?php if(isset($data['patient_review'])){ echo $data['patient_review']; }?></textarea>
			</div>
		</div> 
	  <div class="form-group">
      <label class="control-label col-sm-2" for="patient_profile">Profile</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="patient_profile" name="patient_profile" value="<?php if(isset($data['patient_profile'])){ echo $data['patient_profile']; }?>" onchange="readfile_name(this);">
		 <img id="profile_img" src="uploads/patient/<?php if(isset($data['patient_profile'])){ echo $data['patient_profile']; }?>" />
      </div>
	 </div> 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10" style="text-align:center;">
        <button type="submit" class="btn btn-default" >Update</button>
		<input type="hidden" name="act" value="save_patient_records"/>
		<input type="hidden" name="id" value="<?php if(isset($data['id'])){ echo $data['id']; }?>" />
		<input type="hidden" name="patient_profile" value="<?php if(isset($data['patient_profile'])){ echo $data['patient_profile']; }?>" />
		
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
                                    <img class="avatar border-gray" src="uploads/patient/<?php echo $data['patient_profile'];?>" alt="..."/>
									<h4 class="title"><?php echo $data['patient_name']; ?>
									</h4>
                                    </a>
                                </div>
								<p class="description text-center"> 
									Gender:-  <?php echo $data['patient_gender']; ?><br>
									Blood Group:-  <?php echo $data['patient_group']; ?>
								</p>
                                
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="<?php if(isset($data['patient_fb_link'])){ echo $data['patient_fb_link']; } else { echo "javascript:void(0)"; } ?>" class="btn btn-simple"><i class="fa fa-facebook-square"></i></a>
                                <a href="<?php if(isset($data['patient_twitter_link'])){ echo $data['patient_twitter_link']; } else { echo "javascript:void(0)"; } ?>" class="btn btn-simple"><i class="fa fa-twitter"></i></a>
                                <a href="<?php if(isset($data['patient_google_link'])){ echo $data['patient_google_link']; } else { echo "javascript:void(0)"; } ?>" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></a>

                            </div>
                        </div>
                    </div>

                </div>

<?php include("includes/footer.php"); ?>