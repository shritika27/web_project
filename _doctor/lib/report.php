<?php
	include("../includes/db.php");
	
	print "<pre>";
	print_r($_REQUEST);

	$report = "<pre>".$_REQUEST['patient_report']."</pre>";
	
	$sql = "INSERT INTO `dr_report` (`dr_id`, `patient_id`, `patient_problem`, `patient_report`) VALUES ('$_REQUEST[dr_id]', '$_REQUEST[patient_id]', '$_REQUEST[patient_problem]', '$report');";
	
	$rs = mysqli_query($conn, $sql);
	
	if($rs){
		echo "Record Save Successfully!!";
	}
	
?>