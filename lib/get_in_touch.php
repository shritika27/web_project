<?php 
	include("../includes/db.php");
	
	if(isset($_REQUEST['id'])){
		$sql = "UPDATE `diagnostic_lab`.`get_in_touch` SET `status` = '1' WHERE `id` = '$_REQUEST[id]';";
		$rs = mysqli_query($conn, $sql);
		if($rs){
			header("location:../_admin/index.php?msg=Approve Message");
		}
	}
	
	parse_str($_POST['frm_data'], $_REQUEST);

	//print_r($_REQUEST);
 
	$sql = "INSERT INTO `get_in_touch` (`first_name`, `last_name`, `email`, `subject`, `message`, `status`) VALUES ('$_REQUEST[first_name]', '$_REQUEST[last_name]', '$_REQUEST[email]', '$_REQUEST[subject]', '$_REQUEST[message]', '0');";
	$rs = mysqli_query($conn, $sql);
	if($rs){
		echo '<p style="color:green; font-weight:600;">Your request send successfully!! We will be back soon</p>';
		
	}
	else {
		echo '<p style="color:red;">Please fill correct information!!</p>';
	}

?>	
	