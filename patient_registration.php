<?php include("includes/header.php"); ?>

<?php
	if(isset($_REQUEST['id'])){
		$sql = "select * from patient_registration where id = '$_REQUEST[id]'";
		$rs = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($rs);
		// print "<pre>";
		// print_r($data);
	}
?>
<script>
function check_patient_email(){
		var data = jQuery(".check2_patient #patient_email").val();
		jQuery.ajax({
			method: 'POST',
			url : '_patient/lib/patient.php',
			data: {'patient_email': data, 'act' : 'check_email'}
		}).done(function(response){
			jQuery(".mail_notification2").html(response);
			console.log(response);
		}).fail(function(response){
			console.log("Fail");
		});
		
	}	
	function check_pass2(){
	var slen = jQuery("#pwd2").val().length;
	if(slen < "4"){
		jQuery(".pass_notification").html("");
	}
	if(slen == "4"){
		jQuery(".pass_notification").html("<b style='color:red;'>Weak</b>");
	}
	if(slen == "7"){
		jQuery(".pass_notification").html("<b style='color:blue;'>Good</b>");
	}
	if(slen > "8"){
		jQuery(".pass_notification").html("<b style='color:green;'>Strong</b>");
	}
}
function myFunction1() {
    var x = document.getElementById("pwd2");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}	
</script>
<div class="container" style="background-color:skyblue;">
    <h1><?php if(isset($_REQUEST['msg'])){echo $_REQUEST['msg'];}?></h1>
  <h1 style="text-align:center; color:#fff; padding:20px;">Patient Registration Form</h1>
  <form class="form-horizontal check2_patient" action="_patient/lib/patient.php" enctype="multipart/form-data" onsubmit="return patient_valid(this)" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="patient_name">Name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="patient_name" placeholder="Enter name" name="patient_name"  value="<?php if(isset($data['patient_name'])){echo $data['patient_name']; }?>">
   
 </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="patient_gender">Gender</label>
      <div class="col-sm-10" style="line-height: 36px;">
        <input type="radio" class="" id="patient_gender"  name="patient_gender"  value="female"
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
        <input type="date" class="form-control" id="patient_dateofbirth"  name="patient_dateofbirth"  value="<?php if(isset($data['patient_dateofbirth'])){ echo $data['patient_dateofbirth']; }?>">
      </div>
	 </div> 
    <div class="form-group">
      <label class="control-label col-sm-2" for="patient_contactnumber">Contact No:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" maxlength="10" id="pwd" placeholder="Enter contact number" name="patient_contactnumber"  value="<?php if(isset($data['patient_contactnumber'])){ echo $data['patient_contactnumber'];}?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="patient_email">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="patient_email" placeholder="Enter Email" onchange="check_patient_email();" name="patient_email"  value = "<?php if(isset($data['patient_email'])){ echo $data['patient_email'];}?>">
      </div>
	  <div class="col-md-2"></div>
	  <div class="col-md-10 mail_notification2"></div>
    </div>
		<div class="form-group">
           <label class="control-label col-sm-2" for="patient_pass">Password:</label>
           <div class="col-sm-10">          
              <input type="password" class="form-control" id="pwd2" placeholder="Enter password" onkeyup="check_pass2();" name="patient_pass"  value="<?php if(isset($data['patient_pass'])){echo $data['patient_pass'];}?>">
           </div>
		   <input type="checkbox" onclick="myFunction1()">Show Password	
		   <div class="col-md-2"></div>
			<div class="col-md-8 pass_notification"></div>
		</div>   
	  <div class="form-group">
          <label class="control-label col-sm-2" for="patient_cpass">Confirm Password:</label>
          <div class="col-sm-10">          
             <input type="password" class="form-control" id="patient_cpass" placeholder="Re-type password" name="patient_cpass"  value="<?php if(isset($data['patient_pass'])){ echo $data['patient_pass'];}?>">
          </div>
      </div>
    
   <div class="form-group">
    <label class="control-label col-sm-2" for="patient_group">Blood Group:</label>
    <div class="col-sm-10" style="line-height: 36px;">          
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
     <input type="text" class="form-control" id="patient_problem" name="patient_problem"  value="<?php if(isset($data['patient_problem'])){ echo $data['patient_problem'];}?>">
      </div>
	</div>  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="patient_location">Location:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="patient_location" name="patient_location"  value="<?php if(isset($data['patient_location'])){ echo $data['patient_location'];}?>">
      </div>
	 </div> 
	  <div class="form-group">
      <label class="control-label col-sm-2" for="patient_sec_ques">Security Question:</label>
      <div class="col-sm-10"> 
          <select name="patient_sec_ques" class="dropdown_sec">
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
      <label class="control-label col-sm-2" for="patient_sec_ans">Security Answer:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="patient_sec_answer" name="patient_sec_ans"  value="<?php if(isset($data['patient_sec_ans'])){ echo $data['patient_sec_ans'];}?>">
      </div>
	 </div> 
	  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="patient_profile">Profile</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="patient_profile" name="patient_profile"  value="<?php if(isset($data['patient_profile'])){ echo $data['patient_profile']; }?>" onchange="readfile_name(this);">
		 <img id="profile_img" src="#" />
      </div>
	 </div> 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10" style="text-align:center;">
        <button type="submit" class="btn btn-default" >Submit</button>
		<button type="reset" class="btn btn-default" >Reset</button>
		<input type="hidden" name="act" value="save_patient_records"/>
		<input type="hidden" name="id" value="<?php if(isset($data['id'])){ echo $data['id']; }?>" />
		<input type="hidden" name="patient_profile" value="<?php if(isset($data['patient_profile'])){ echo $data['patient_profile']; }?>" />
		
      </div>
    </div>
  </form>
</div>
<?php include("includes/footer.php");?> 