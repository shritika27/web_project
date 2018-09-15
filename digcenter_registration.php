<?php include("includes/header.php")?>

<?php
	if(isset($_REQUEST['id'])){
		$sql = "select * from daignostic_center where id = '$_REQUEST[id]'";
		$rs = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($rs);
		// print "<pre>";
		// print_r($data);
	}
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

function check_digemail(){
var data = jQuery(".check_email1 #dia_email").val();
		jQuery.ajax({
			method: 'POST',
			url : '_diagnostic/lib/diagnostic_center.php',
			data: {'frm_data': data, 'act': 'check_email'}
		}).done(function(response){
			jQuery(".mail_notification1").html(response);
			console.log(response);
		}).fail(function(response){
			console.log("Fail");
		});
		
	}	
		
  function check_pass1(){
	var slen = jQuery("#pwd1").val().length;
	if(slen < "4"){
		jQuery(".pass_notification").html("");
	}
	if(slen == "4"){
		jQuery(".pass_notification").html("<b style='color:red;'>Weak</b>");
	}
	if(slen == "7"){
		jQuery(".pass_notification").html("<b style='color:yellow;'>Good</b>");
	}
	if(slen > "8"){
		jQuery(".pass_notification").html("<b style='color:green;'>Strong</b>");
	}
}
function myFunction() {
    var x = document.getElementById("pwd1");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}	
</script>

<div class="container" style="background-color:skyblue;">
   
  <h1 style="text-align:center; color:#fff; padding:20px;">Diagnostic Center Form</h1>
  <form class="form-horizontal check_email1" action="_diagnostic/lib/diagnostic_center.php" enctype="multipart/form-data" onsubmit="return valid(this)" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="dia_name">Name:</label>
	   
      <div class="col-sm-10">
	    
        <input type="name" class="form-control" id="dia_name" placeholder="Enter name" name="dia_name" value="<?php if(isset($data['dia_name'])){echo $data['dia_name']; }?>">
   
 </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="dia_contnum">Contact No:</label>
	  
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" maxlength="10" placeholder="Enter contact number" name="dia_contnum" value="<?php if(isset($data['dia_contnum'])){ echo $data['dia_contnum'];}?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dia_name">Email:</label>
	 
      <div class="col-sm-10">
        <input type="email" class="form-control" id="dia_email" placeholder="Enter Email" onchange="check_digemail();" name="dia_email" value = "<?php if(isset($data['dia_email'])){ echo $data['dia_email'];}?>">
      </div>
	  <div class="col-md-2"></div>
	  <div class="col-md-10 mail_notification1"></div>
    </div>
		<div class="form-group">
           <label class="control-label col-sm-2" for="dia_pass">Password:</label>
		    
           <div class="col-sm-10">          
              <input type="password" class="form-control" id="pwd1" placeholder="Enter password" onkeyup="check_pass1();" name="dia_pass" value="<?php if(isset($data['dia_pass'])){echo $data['dia_pass'];}?>">
		   </div>
		   <input type="checkbox" onclick="myFunction()">Show Password	
		   <div class="col-md-2"></div>
		    
			<div class="col-md-8 pass_notification"></div>
				
		</div>  
            
	  <div class="form-group">
          <label class="control-label col-sm-2" for="dia_cpass">Confirm Password:</label>
          <div class="col-sm-10">          
             <input type="password" class="form-control" id="dia_cpass" placeholder="Re-type password" name="dia_cpass" value="<?php if(isset($data['dia_pass'])){ echo $data['dia_pass'];}?>">
          </div>
      </div>
    
   
	  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="dia_loc">Location:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dia_loc" placeholder="Enter location" name="dia_loc" value="<?php if(isset($data['dia_loc'])){ echo $data['dia_loc'];}?>">
      </div>
	 </div> 
	  <div class="form-group">
      <label class="control-label col-sm-2" for="dia_secqus">Security Question:</label>
      <div class="col-sm-10"> 
	        <select name="dia_secqus" class="dropdown_sec">
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
      <label class="control-label col-sm-2" for="dia_secans">Security Answer:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dia_secans" placeholder="Enter answer" name="dia_secans" value="<?php if(isset($data['dia_secans'])){ echo $data['dia_secans'];}?>">
      </div>
	 </div> 
	 <div class="form-group">
      <label class="control-label col-sm-2" for="dia_bookingprice">Booking Price:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dia_bookingprice" placeholder="Enter booking price" name="dia_bookingprice" value="<?php if(isset($data['dia_bookingprice'])){ echo $data['dia_bookingprice'];}?>">
      </div>
	 </div> 
	   
	  <div class="form-group">
      <label class="control-label col-sm-2" for="dia_pro">diagnostic_center Profile</label>
      <div class="col-sm-10">          
		<input type="file" class="form-control" id="dia_pro" name="dia_pro" value="<?php if(isset($data['dia_pro'])){ echo $data['dia_pro']; }?>" onchange="readfile_name(this);">
		 <img id="profile_img" src="#" />
      </div>
	 </div> 
	 <div class="form-group">
      <label class="control-label col-sm-2" for="dia_govapprove">Government Certified</label>
      <div class="col-sm-10">
        <input type="radio" class="" id="dia_govapprove"  name="dia_govapprove" value="yes"<?php if(isset($data['dia_govapprove'])){if($data['dia_govapprove'] == "yes"){
			echo "checked";
		}}?>> Yes
		<input type="radio" class="" id="	dia_govapprove"  name="dia_govapprove" value="no" <?php if(isset($data['dia_govapprove'])){if($data['dia_govapprove'] == "no"){
			echo "checked";
		}}?>> No
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="doc_contnum">Government Approved Date</label>
      <div class="col-sm-10">          
        <input type="date" class="form-control datepicker" id="dia_dateapprove" placeholder="Enter contact number" name="dia_dateapprove" value="<?php if(isset($data['dia_dateapprove'])){ echo $data['dia_dateapprove'];}?>">
      </div>
      	 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10" style="text-align:center;">
        <button type="submit" class="btn btn-default" >Submit</button>
		<button type="reset" class="btn btn-default" >Reset</button>
		<input type="hidden" name="act" value="save_diagnostic_center_records"/>
		<input type="hidden" name="id" value="<?php if(isset($data['id'])){ echo $data['id']; }?>" />
		<input type="hidden" name="dia_pro" value="<?php if(isset($data['dia_pro'])){ echo $data['dia_pro']; }?>" />
		
      </div>
    </div>
  </form>
</div>
</div>
<?php include("includes/footer.php");?> 