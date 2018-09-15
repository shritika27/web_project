<?php include("includes/header.php")?>

<?php
	if(isset($_REQUEST['id'])){
		$sql = "select * from contact_information where id = '$_REQUEST[id]'";
		$rs = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($rs);
		//print "<pre>";
		 //print_r($data);
	}
?>
	<!--contact-->
	
	<div class="contact" style="background-color:white;" id="contact">
		<div class="container">
		   <h3 class="title" style="color:blue; text-align:center;">SITE INFORMATION</h3>
		      <div class="col-md-12">
			       <div class="col-md-4">
				   </div>
				   <div class="col-md-4">
			           <div class="clearfix"> </div>
			           <div class="contact-form">
				           <form action="lib/site_information.php" method="post">
					       <div class="col-md-12">
					          <label class="control-label col-sm-4">Message:</label>
						      <div class="col-sm-8">
						           <textarea id="message" placeholder="Enter message" name="message" value="<?php if(isset($data['message'])){echo $data['message']; }?>"></textarea>
                              </div>
					       </div>
					       <div class="col-md-12">
					          <label class="control-label col-sm-4">Location:</label>
						      <div class="col-sm-8">
						          <input type="text"  id="location" placeholder="Enter your location" name="location" value="<?php if(isset($data['location'])){echo $data['location']; }?>">
                              </div>
					     </div>
					     <div class="col-md-12 ">
					         <label class="control-label col-sm-4">Email:</label>
						     <div class="col-sm-8">
						         <input type="email"  id="email" placeholder="Enter email" name="email" value="<?php if(isset($data['email'])){echo $data['email']; }?>">
                             </div>
					     </div>
					     <div class="col-md-12 ">
					         <label class="control-label col-sm-4">Contact::</label>
						     <div class="col-sm-8">
						        <input type="tel"  id="contact" placeholder="Enter contact" name="contact" value="<?php if(isset($data['contact'])){echo $data['contact']; }?>">
						     </div>  
					    </div>
					    <div class="col-md-12 ">
					      <label class="control-label col-sm-4">FB Url:</label>
						 <div class="col-sm-8">
						     <input type="url"  id="site_fb" placeholder="Enter fb url" name="site_fb" value="<?php if(isset($data['site_fb'])){echo $data['site_fb']; }?>">
						 </div>	 
					   </div>
					   <div class="col-md-12 ">
					        <label class="control-label col-sm-4">Twitter Url:</label>
						    <div class="col-sm-8">
						       <input type="url"  id="site_twitter" placeholder="Enter twitter url" name="site_twitter" value="<?php if(isset($data['site_twitter'])){echo $data['site_twitter']; }?>">
						    </div>  
					   </div>
					   <div class="col-md-12 ">
					     <label class="control-label col-sm-4">Google+ Url:</label>
						 <div class="col-sm-8">
						   <input type="url"  id="site_g+" placeholder="Enter google+ url" name="site_g+" value="<?php if(isset($data['site_g+'])){echo $data['site_g+']; }?>">
						 </div>  
					  </div>
			    </div>
					<input type="submit" value="SUBMIT">
					<input type="hidden" name="act" value="save_records"/>
				</form>
		    </div>
			</div>
               <div class="col-md-12">
			   </div> 
		</div>
	</div>
	<!--//contact-->
<?php include("includes/footer.php")?>
