<?php
	session_start();
	include("../includes/db.php");

	if(isset($_REQUEST['act'])){
		$_REQUEST['act']();
	}

	
	function login(){
		global $conn;
		
		if($_REQUEST['opt'] == "admin"){
			$sql = "select * from admin where ad_email = '$_REQUEST[user_email]' and ad_pass = '$_REQUEST[user_pass]'";
			$rs = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($rs);
			if(mysqli_num_rows($rs)== '1' ){
				$_SESSION['id'] = $data['id'];
				$_SESSION['type'] = "admin";
				header("location:../_admin/");
			}
			
		}
		elseif($_REQUEST['opt'] == "doctor"){
			echo "hi";
			$sql = "select * from doctor where dr_email = '$_REQUEST[user_email]' and dr_pass = '$_REQUEST[user_pass]'";
			$rs = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($rs);
			if(mysqli_num_rows($rs)== '1' ){
				$_SESSION['id'] = $data['id'];
				$_SESSION['type'] = "doctor";
				header("location:../_doctor/");
			}
		}
		elseif($_REQUEST['opt'] == "diagnostic"){
			$sql = "select * from daignostic_center where dia_email = '$_REQUEST[user_email]' and dia_pass = '$_REQUEST[user_pass]'";
			$rs = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($rs);
			if(mysqli_num_rows($rs)== '1' ){
				$_SESSION['id'] = $data['id'];
				header("location:../_diagnostic/");
			}
		}		
		
		elseif($_REQUEST['opt'] == "patient"){
			$sql = "select * from patient_registration where patient_email = '$_REQUEST[user_email]' and patient_pass='$_REQUEST[user_pass]'";
			$rs = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($rs);
			var_dump($rs);
			if(mysqli_num_rows($rs)== '1' ){
				$_SESSION['id'] = $data['id'];
				header("location:../_patient/");
			}
		
		}
		else{
			header("location:../index.php?msg=Please contact administrator!!");
		}
		
	}
	
	function logout(){
		if(isset($_SESSION['id'])){
			$_SESSION['id'] = "";
			session_destroy();
			header("location:../index.php?msg=Logout Successfully!!!");
		}		
	}
	
	function get_pic(){
	
		global $conn;
		if($_REQUEST['utype'] == "admin"){
			echo "images/mark1.jpg";			
		}
		if($_REQUEST['utype'] == "doctor"){
			$sql = "select * from doctor where dr_email = '$_REQUEST[uemail]'";
			$rs = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($rs);
			echo "_doctor/uploads/doctor/".$data['dr_profile'];			
		}
		if($_REQUEST['utype'] == "diagnostic"){
			$sql = "select * from daignostic_center where dia_email = '$_REQUEST[uemail]'";
			$rs = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($rs);
			echo "_diagnostic/uploads/digcent/".$data['dia_pro'];			
		}
		if($_REQUEST['utype'] == "patient"){
			$sql = "select * from patient_registration where patient_email = '$_REQUEST[uemail]'";
			$rs = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($rs);
			echo "_patient/uploads/patient/".$data['patient_profile'];			
		}
	}
?>