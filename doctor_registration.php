<?php include("includes/header.php"); ?>

<?php
	if(isset($_REQUEST['id'])){
		$sql = "select * from doctor where id = '$_REQUEST[id]'";
		$rs = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($rs);
		// print "<pre>";
		// print_r($data);
	}
?>

<div class="container" style="background-color:skyblue;">
    <h1><?php if(isset($_REQUEST['msg'])){echo $_REQUEST['msg'];}?></h1>
  <h1 style="text-align:center; color:#fff; padding:20px;">Doctor Registration Form</h1>
  <form name="myForm" class="form-horizontal check1_email" action="_doctor/lib/doctor.php" enctype="multipart/form-data" onsubmit="return validation(this)" method="post">
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
        <input type="text" class="form-control" maxlength="10" id="contact" placeholder="Enter contact number" name="dr_contactnumber" value="<?php if(isset($data['dr_contactnumber'])){ echo $data['dr_contactnumber'];}?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dr_name">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="dr_email" placeholder="Enter Email" name="dr_email" onchange="checkdr_email();" value = "<?php if(isset($data['dr_email'])){ echo $data['dr_email'];}?>">
      </div>
	  <div class="col-md-2"></div>
	  <div class="col-md-10 mail_notification"></div>
    </div>
		<div class="form-group">
           <label class="control-label col-sm-2" for="dr_pass">Password:</label>
           <div class="col-sm-10">          
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" onkeyup="check_pass();" name="dr_pass" value="<?php if(isset($data['dr_pass'])){echo $data['dr_pass'];}?>">
			  <span class="glyphicon glyphicon-eye-open" id="toggle_pass"></span>
           </div>
			<div class="col-md-2"></div>
			<div class="col-md-10 pass_notification"></div>
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
       <input type="text" class="form-control" id="dr_qualification" placeholder="Enter qualification "  name="dr_qualification" value="<?php if(isset($data['dr_qualification'])){ echo $data['dr_qualification'];}?>">
      </div>
	</div> 
  	
	<div class="form-group">
         <label class="control-label col-sm-2" for="dr_specialization">Specialization:</label>
       <div class="col-sm-10">          
     <input type="text" class="form-control" id="dr_specialization" placeholder="Enter specialization" name="dr_specialization" value="<?php if(isset($data['dr_specialization'])){ echo $data['dr_specialization'];}?>">
      </div>
	</div>  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="dr_worklocation">Work Location:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dr_worklocation" placeholder="Enter your location" name="dr_worklocation" value="<?php if(isset($data['dr_worklocation'])){ echo $data['dr_worklocation'];}?>">
      </div>
	 </div> 
	  <div class="form-group">
      <label class="control-label col-sm-2" for="dr_sec_question">Security Question:</label>
      <div class="col-sm-10"> 
          <select name="dr_sec_question" class="dropdown_sec" >
		  <option value="0">-- Please Select Security Question -- </option>
			<?php
				$sql1 = "select * from security_question";
				$rs1 = mysqli_query($conn, $sql1);
				while($data1 = mysqli_fetch_assoc($rs1)){
			?>
                 <option value="<?php echo $data1['sec_ques_name']; ?>"><?php echo $data1['sec_ques_name']; ?></option>
			<?php 	
				}
			?>
         </select>	  
       
      </div>
	 </div> 
	  <div class="form-group">
      <label class="control-label col-sm-2" for="dr_sec_answer">Security Answer:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dr_sec_answer" placeholder="Enter your answer" name="dr_sec_answer" value="<?php if(isset($data['dr_sec_answer'])){ echo $data['dr_sec_answer'];}?>">
      </div>
	 </div> 
	  <div class="form-group">
      <label class="control-label col-sm-2" for="dr_bookingprice">Booking Price:</label>
      <div class="col-sm-10">          
        <input type="number" class="form-control" id="dr_bookingprice" placeholder="enter your booking price"  name="dr_bookingprice" value="<?php if(isset($data['dr_bookingprice'])){ echo $data['dr_bookingprice']; }?>">
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
        <button type="submit" class="btn btn-default" >Submit</button>
		<button type="reset" class="btn btn-default" >Reset</button>
		<input type="hidden" name="act" value="save_doctor_records"/>
		<input type="hidden" name="id" value="<?php if(isset($data['id'])){ echo $data['id']; }?>" />
		<input type="hidden" name="dr_profile" value="<?php if(isset($data['dr_profile'])){ echo $data['dr_profile']; }?>" />
		
      </div>
    </div>
  </form>
</div>
<?php include("includes/footer.php");?> 