<?php
include("includes/header.php");

	$sql = "select * from daignostic_center where id = '$_SESSION[id]'";
	$rs = mysqli_query($conn, $sql);
	$data = mysqli_fetch_assoc($rs);
	

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
                               <form class="form-horizontal" action="lib/diagnostic_center.php" enctype="multipart/form-data" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="dia_name">User Name:</label>
      <div class="col-sm-10">
        <input type="name" class="form-control" id="dia_name" placeholder="Enter name" name="dia_name" value="<?php if(isset($data['dia_name'])){echo $data['dia_name']; }?>">
   
 </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-2" for="dia_contnum">Contact Number:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="pwd" placeholder="Enter contact number" name="dia_contnum" value="<?php if(isset($data['dia_contnum'])){ echo $data['dia_contnum'];}?>">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dia_name">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="dia_name" placeholder="Enter Email" name="dia_email" value = "<?php if(isset($data['dia_email'])){ echo $data['dia_email'];}?>"readonly>
      </div>
    </div>
		<div class="form-group">
           <label class="control-label col-sm-2" for="dia_pass">Password:</label>
           <div class="col-sm-10">          
              <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="dia_pass" value="<?php if(isset($data['dia_pass'])){echo $data['dia_pass'];}?>">
           </div>
		</div>   
	  <div class="form-group">
          <label class="control-label col-sm-2" for="dia_cpass">Confirm Password:</label>
          <div class="col-sm-10">          
             <input type="password" class="form-control" id="dia_cpass" placeholder="Re-type password" name="dia_cpass" value="<?php if(isset($data['dia_pass'])){ echo $data['dia_pass'];}?>">
          </div>
      </div>
    
   
	  
	  <div class="form-group">
      <label class="control-label col-sm-2" for="dia_loc">Work Location:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dia_loc" name="dia_loc" value="<?php if(isset($data['dia_loc'])){ echo $data['dia_loc'];}?>">
      </div>
	 </div> 
	  <div class="form-group">
      <label class="control-label col-sm-2" for="dia_secqus">Security Question:</label>
      <div class="col-sm-10"> 
          <select name="dia_secqus">
		   <option value="0">-- Please Select Security Question -- </option>
              		  <?php
		  global $conn;
				$sql1="select * from security_question";
				$rs1=mysqli_query($conn,$sql1);
				while($data1=mysqli_fetch_assoc($rs1))
				{

			?>
			<option value="<?php echo $data1['sec_ques_name'];?>"<?php if($data1['sec_ques_name']==$data1['sec_ques_name']) echo 'selected="selected"';?>><?php echo $data1['sec_ques_name'];?></option>

			

   			<?php } ?>
         </select>	  
       
      </div>
	 </div> 
	  <div class="form-group">
      <label class="control-label col-sm-2" for="dia_secans">Security Answer:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="dia_secans" name="dia_secans" value="<?php if(isset($data['dia_secans'])){ echo $data['dia_secans'];}?>">
      </div>
	 </div> 
	   
	  <div class="form-group">
      <label class="control-label col-sm-2" for="dia_pro">User Profile</label>
      <div class="col-sm-10">          
        <input type="file" class="form-control" id="dia_pro" name="dia_pro" onchange="readfile_name(this);" />
    <img id="profile_img" src="uploads/digcent/<?php if(isset($data['dia_pro'])){ echo $data['dia_pro']; }?>" />
      </div>
	 </div> 
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10" style="text-align:center;">
        <button type="submit" class="btn btn-default" >Update Profile</button>
		
		<input type="hidden" name="act" value="save_diagnostic_center_records"/>
		<input type="hidden" name="id" value="<?php if(isset($data['id'])){ echo $data['id']; }?>" />
		<input type="hidden" name="dia_pro" value="<?php if(isset($data['dia_pro'])){ echo $data['dia_pro']; }?>" />
		
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
                                    <img class="avatar border-gray" src="uploads/digcent/<?php echo $data['dia_pro'];?>" alt="..."/>

                                      <h4 class="title"><?php echo $data['dia_name'];?><br />
                                      </h4>
                                    </a>
                                </div>
                                <p class="description text-center"> <?php echo $data['dia_email'];?> <br>
                                 <?php echo $data['dia_contnum'];?> <br>
                                                    <?php echo $data['dia_loc'];?> 
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
<?php include("includes/footer.php"); ?>