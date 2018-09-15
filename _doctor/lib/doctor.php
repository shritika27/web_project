<?php 
	include("../includes/db.php");
	 
	//print "<pre>";
	//print_r($_REQUEST);
	
	if(isset($_REQUEST['act'])){
		$_REQUEST['act']();
	}


	function save_doctor_records(){
		global $conn;


		$img = $_FILES['dr_profile']['name'];
		if($img){

			$img_arr = explode(".", $img);
			// print "<pre>";
			// print_r($img_arr);
			$profile_img = $img_arr[0].time().".".$img_arr[1];
			//echo $profile_img;
			move_uploaded_file($_FILES['dr_profile']['tmp_name'], "../uploads/doctor/".$profile_img);
		}
		else{
			$profile_img = $_REQUEST['dr_profile'];
			
		}



		if($_REQUEST['id']){
			
				$sql = "UPDATE `doctor` SET `dr_name` = '$_REQUEST[dr_name]', `dr_gender` = '$_REQUEST[dr_gender]', `dr_contactnumber` = '$_REQUEST[dr_contactnumber]', `dr_email` = '$_REQUEST[dr_email]', `dr_pass` = '$_REQUEST[dr_pass]', `dr_qualification` = '$_REQUEST[dr_qualification]', `dr_specialization` = '$_REQUEST[dr_specialization]', `dr_worklocation` = '$_REQUEST[dr_worklocation]', `dr_sec_question` = '$_REQUEST[dr_sec_question]', `dr_sec_answer` = '$_REQUEST[dr_sec_answer]', `dr_bookingprice` = '$_REQUEST[dr_bookingprice]', `dr_fb_link` = '$_REQUEST[dr_fb_link]', `dr_twitter_link` = '$_REQUEST[dr_twitter_link]', `dr_google_link` = '$_REQUEST[dr_google_link]', `dr_profile` = '$profile_img' WHERE `id` = '$_REQUEST[id]';";
				
				$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
				
				if($rs){
					header("location:../index.php?msg=Record Update Successfully!!");
				}
			
		}
		else{
		$sql = "INSERT INTO `doctor` (`dr_name`, `dr_gender`, `dr_contactnumber`, `dr_email`, `dr_pass`, `dr_qualification`, `dr_specialization`, `dr_worklocation`, `dr_sec_question`, `dr_sec_answer`, `dr_bookingprice`, `dr_fb_link`, `dr_twitter_link`, `dr_google_link`, `dr_profile`) VALUES ('$_REQUEST[dr_name]', '$_REQUEST[dr_gender]', '$_REQUEST[dr_contactnumber]', '$_REQUEST[dr_email]', '$_REQUEST[dr_pass]', '$_REQUEST[dr_qualification]', '$_REQUEST[dr_specialization]', '$_REQUEST[dr_worklocation]', '$_REQUEST[dr_sec_question]', '$_REQUEST[dr_sec_answer]', '$_REQUEST[dr_bookingprice]', '$_REQUEST[dr_fb_link]', '$_REQUEST[dr_twitter_link]', '$_REQUEST[dr_google_link]', '$profile_img');";

		$rs = mysqli_query($conn, $sql);

		if($rs){
			
			header("location:../../index.php?msg=Registration Successfully!!");
		}

		}


	}
	function delete_doctor_records(){
		global $conn;
		$sql1="select dr_profile from doctor where id = '$_REQUEST[id]'";
		$rs1=mysqli_query($conn, $sql1);
		$data=mysqli_fetch_assoc($rs1);
		if($data['dr_profile']){
			 unlink("../uploads/doctor/".$data['dr_profile']);
		}
		
		$sql="delete from doctor where id= '$_REQUEST[id]'";
		$rs=mysqli_query($conn,$sql);
		if($rs){
			 header("location:../../_admin/doctor_view.php?msg=Record deleted successfully");
		}
	}
	
	function check_email(){
		global $conn;
		$sql1 = "select dr_email from doctor where dr_email = '$_REQUEST[dr_email]'";
		$rs1= mysqli_query($conn, $sql1);

		if(mysqli_num_rows($rs1) == "1"){
			echo '<p style="color:red;">Email Id already exist</p>';
		}	
	}

?>	
	