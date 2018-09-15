<?php 
 include("../includes/db.php");
 
// print "<pre>";
// print_r($_REQUEST); 
		

	if(isset($_REQUEST['act'])){
		$_REQUEST['act']();
	}


	function save_patient_records(){
		global $conn;

		$img = $_FILES['patient_profile']['name'];

		if($img){
			$img_arr = explode(".", $img);
			$profile_img = $img_arr[0].time().".".$img_arr[1];
			move_uploaded_file($_FILES['patient_profile']['tmp_name'], "../uploads/patient/".$profile_img);
		}
		else{
			$profile_img = $_REQUEST['patient_profile'];
		}

		if($_REQUEST['id']){
				
			$sql = " UPDATE `patient_registration` SET `patient_name` = '$_REQUEST[patient_name]', `patient_gender` = '$_REQUEST[patient_gender]', `patient_contactnumber` = '$_REQUEST[patient_contactnumber]', `patient_email` = '$_REQUEST[patient_email]', `patient_pass` = '$_REQUEST[patient_pass]', `patient_group` = '$_REQUEST[patient_group]', `patient_problem` = '$_REQUEST[patient_problem]', `patient_location` = '$_REQUEST[patient_location]', `patient_dateofbirth` = '$_REQUEST[patient_dateofbirth]', `patient_sec_ques` = '$_REQUEST[patient_sec_ques]', `patient_sec_ans` = '$_REQUEST[patient_sec_ans]', `patient_fb_link` = '$_REQUEST[patient_fb_link]', `patient_twitter_link` = '$_REQUEST[patient_twitter_link]', `patient_google_link` = '$_REQUEST[patient_google_link]', `patient_review` = '$_REQUEST[patient_review]', `patient_profile` = '$profile_img' WHERE `patient_registration`.`id` = '$_REQUEST[id]'; ";
				
			$rs = mysqli_query($conn, $sql);
				
			if($rs){
				echo "record update";
				header("location:../index.php?msg=Record Updated Successfully!! ");
			}
			
		}
		else
		{
	
			$sql = "INSERT INTO `patient_registration` (`patient_name`, `patient_gender`, `patient_dateofbirth`, `patient_contactnumber`, `patient_email`, `patient_pass`, `patient_group`, `patient_problem`, `patient_sec_ques`, `patient_sec_ans`, `patient_location`, `patient_profile`, `patient_fb_link`, `patient_twitter_link`, `patient_google_link`) VALUES ('$_REQUEST[patient_name]', '$_REQUEST[patient_gender]','$_REQUEST[patient_dateofbirth]', '$_REQUEST[patient_contactnumber]', '$_REQUEST[patient_email]', '$_REQUEST[patient_pass]', '$_REQUEST[patient_group]', '$_REQUEST[patient_problem]','$_REQUEST[patient_sec_ques]', '$_REQUEST[patient_sec_ans]', '$_REQUEST[patient_location]', '$profile_img', '$_REQUEST[patient_fb_link]', '$_REQUEST[patient_twitter_link]', '$_REQUEST[patient_google_link]');";

			$rs = mysqli_query($conn, $sql);

			if($rs){
				header("location:../../index.php?msg=Record Saved Successfully!! ");
			}
		}
	}

	function delete_patient_records(){
		global $conn;
		$sql="select * from patient_registration where id='$_REQUEST[id]'";
		$rs=mysqli_query($conn, $sql);
		$data=mysqli_fetch_assoc($rs);
		if($data['patient_profile']){
			 unlink("../uploads/patient/".$data['patient_profile']);
		}
		
		$sql="delete from patient_registration where id= '$_REQUEST[id]'";
		$rs=mysqli_query($conn,$sql);
		if($rs){
			 header("location:../../_admin/patient_view.php?msg=Record deleted successfully");
		}
	}
	function check_email(){
		global $conn;
		$sql1 = "select patient_email from patient_registration where patient_email = '$_REQUEST[patient_email]'";
		$rs1= mysqli_query($conn, $sql1);

		if(mysqli_num_rows($rs1) == "1"){
			echo '<p style="color:red;">Email Id already exist</p>';
		}	
	}

?>	
	