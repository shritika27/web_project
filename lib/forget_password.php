<?php
session_start();
include("../includes/db.php");

print "<pre>";
print_r($_REQUEST);

if($_REQUEST['act'])
{
	$_REQUEST['act']();
}

function recover_pass(){
	global $conn;
	if($_REQUEST['user_login_option'] == 'admin'){
		$sql = " select * from admin where ad_email = '$_REQUEST[user_email]' and ad_sec_question = '$_REQUEST[user_sec_question]' and ad_sec_answer = '$_REQUEST[user_sec_ans]' ";
		$rs = mysqli_query($conn, $sql);
		$email = $_REQUEST['user_email'];
		$login_type = "admin";
		if(mysqli_num_rows($rs)){
			header("location:../password_recovery.php?msg=$email&type=$login_type");
		}
		else{
			header("location:../forget_password.php?msg=Please Fill Correct Information!!");
		}
		
	}
		
		
	
	elseif($_REQUEST['user_login_option'] == 'doctor'){
		
		$sql = " select * from doctor where dr_email = '$_REQUEST[user_email]' and dr_sec_question = '$_REQUEST[user_sec_question]' and dr_sec_answer = '$_REQUEST[user_sec_ans]' ";
		$rs = mysqli_query($conn, $sql);
		$email = $_REQUEST['user_email'];
		$login_type = "doctor";
		if(mysqli_num_rows($rs)){
			header("location:../password_recovery.php?msg=$email&type=$login_type");
		}
		else{
			header("location:../forget_password.php?msg=Please Fill Correct Information!!");
		}
		
	}
	elseif($_REQUEST['user_login_option'] == 'diagnostic'){
		$sql = " select * from daignostic_center where dia_email = '$_REQUEST[user_email]' and dia_secqus = '$_REQUEST[user_sec_question]' and dia_secans = '$_REQUEST[user_sec_ans]' ";
		$rs = mysqli_query($conn, $sql);
		$email = $_REQUEST['user_email'];
		$login_type = "diagnostic";
		if(mysqli_num_rows($rs)){
			header("location:../password_recovery.php?msg=$email&type=$login_type");
		}
		else{
			header("location:../forget_password.php?msg=Please Fill Correct Information!!");
		}
		
	}
		
	
	elseif($_REQUEST['user_login_option'] == 'patient'){
		$sql = " select * from patient_registration where patient_email = '$_REQUEST[user_email]' and patient_sec_ques = '$_REQUEST[user_sec_question]' and patient_sec_ans = '$_REQUEST[user_sec_ans]' ";
		$rs = mysqli_query($conn, $sql);
		$email = $_REQUEST['user_email'];
		$login_type = "patient";
		if(mysqli_num_rows($rs)){
			header("location:../password_recovery.php?msg=$email&type=$login_type");
		}
		else{
			header("location:../forget_password.php?msg=Please Fill Correct Information!!");
		}
		
	}
		
	
}


function update_pass(){
	global $conn;
	if($_REQUEST['user_type'] == 'admin'){
		$sql = " UPDATE `admin` SET `ad_pass` = '$_REQUEST[user_pass]' WHERE `ad_email` = '$_REQUEST[user_email]'; ";
		$rs = mysqli_query($conn, $sql);
		if($rs){
			if(isset($_SESSION['id']))
			{
				$_SESSION['id'] = "";
				session_destroy();
				header("location:../index.php?msg=Password Updated Successfully!!");
			}
			else{
				header("location:../index.php?msg=Password Updated Successfully!!");
			}
		}
		
	}
	elseif($_REQUEST['user_type'] == 'doctor'){
		$sql = " UPDATE `doctor` SET `dr_pass` = '$_REQUEST[user_pass]' WHERE `dr_email` = '$_REQUEST[user_email]'; ";
		$rs = mysqli_query($conn, $sql);
		if($rs){
			if(isset($_SESSION['id']))
			{
				$_SESSION['id'] = "";
				session_destroy();
				header("location:../index.php?msg=Password Updated Successfully!!");
			}
			else{
				header("location:../index.php?msg=Password Updated Successfully!!");
			}
		}
	}
	elseif($_REQUEST['user_type'] == 'diagnostic'){
		$sql = " UPDATE `daignostic_center` SET `dia_pass` = '$_REQUEST[user_pass]' WHERE `dia_email` = '$_REQUEST[user_email]'; ";
		$rs = mysqli_query($conn, $sql);
		if($rs){
			if(isset($_SESSION['id']))
			{
				$_SESSION['id'] = "";
				session_destroy();
				header("location:../index.php?msg=Password Updated Successfully!!");
			}
			else{
				header("location:../index.php?msg=Password Updated Successfully!!");
			}
		}
	}
			
	
	
	elseif($_REQUEST['user_type'] == 'patient'){
		$sql = " UPDATE `patient_registration` SET `patient_pass` = '$_REQUEST[user_pass]' WHERE `patient_email` = '$_REQUEST[user_email]'; ";
		$rs = mysqli_query($conn, $sql);
		if($rs){
			if(isset($_SESSION['id']))
			{
				$_SESSION['id'] = "";
				session_destroy();
				header("location:../index.php?msg=Password Updated Successfully!!");
			}
			else{
				header("location:../index.php?msg=Password Updated Successfully!!");
			}
		}
	}
			
	}
	


?>