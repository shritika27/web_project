<?php 
	include("../includes/db.php");
	

	echo "<pre>"; 
	print_r($_REQUEST);
	$sql = "INSERT INTO `contact_information` (`message`,`location`,`email`,`contact`,`site_fb`,`site_twitter`,`site_g+`) VALUES ('$_REQUEST[message]','$_REQUEST[location]','$_REQUEST[email]','$_REQUEST[contact]','$_REQUEST[site_fb]','$_REQUEST[site_twitter]','$_REQUEST[site_g+]');";
     $rs = mysqli_query($conn, $sql);
	if($rs){
		echo '<p style="color:red;">Your request send successfully!! We will be back soon</p>';
		header("location:../../index.php?msg=Request send Successfully!!");
	}
	

?>	
	