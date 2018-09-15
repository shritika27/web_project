<?php 
session_start();
 include("../includes/db.php");

     if(isset($_REQUEST['act']))
	 {
	   $_REQUEST['act']();
     }

 function login()
 {
        global $conn;
		
		if($_REQUEST['opt']== "admin")
		{
			echo "admin";
			$sql = "select * from admin where ad_email = '$_REQUEST[user_email]' and ad_pass = '$_REQUEST[user_pass]'";
			$rs = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($rs);
			if(mysqli_num_rows($rs)== '1' ){
				$_SESSION['id'] = $data['id'];
				header("location:../_admin/");
			}
		}
		elseif($_REQUEST['opt']== "drtor")
		{
		$sql = "select * from drtor where dr_email = '$_REQUEST[user_email]' and dr_pass = '$_REQUEST[user_pass]'";
			$rs = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($rs);
			if(mysqli_num_rows($rs)== '1' ){
				$_SESSION['id'] = $data['id'];
				header("location:../_drtor/");
			}
		}
		 elseif($_REQUEST['opt'] == "diagnostic")
		{
			echo "Dia";
			$sql = "select * from daignostic_center where dia_email = '$_REQUEST[user_email]' and dia_pass = '$_REQUEST[user_pass]'";
			$rs = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($rs);
			if(mysqli_num_rows($rs)== '1' ){
				$_SESSION['id'] = $data['id'];
				header("location:../_diagnostic/");
			}
		}
		elseif($_REQUEST['opt']== "patient")
		{
			echo "patient";
			$sql = "select * from patient_registration where patient_email = '$_REQUEST[user_email]' and patient_pass = '$_REQUEST[user_pass]'";
			$rs = mysqli_query($conn, $sql);
			$data = mysqli_fetch_assoc($rs);
			if(mysqli_num_rows($rs)== '1' ){
				$_SESSION['id'] = $data['id'];
				header("location:../_patient/");
			}
		}			
     else{
			header("location:../login.php?msg=Please contact administrator!!");
		}
}

/* end save update code */


function logout(){

	if(isset($_SESSION['id'])){
		$_SESSION['id'] = "";
		session_destroy();
		header("location:../login.php?msg=Logout Successfully!!");
	}
}
?>
