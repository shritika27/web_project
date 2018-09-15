<?php 
 include("../includes/db.php");
 
// print "<pre>";
// print_r($_REQUEST); 

if($_REQUEST['act']){
	$_REQUEST['act']();
}

function delete_payment_records(){
	global $conn;
	$id=$_REQUEST['id'];
	$sql="delete from payment where id='$_REQUEST[id]'";
	$query=mysqli_query($conn, $sql);
	if($query){
		 header("location:../payment_view.php?msg= record deleted successfully!!!!");
	}
	else{
		echo "not deleted";
	}
}
?>	
	