<?php 
 include("../includes/db.php");
 
print "<pre>";
print_r($_REQUEST); 

if(isset($_REQUEST['act'])){
	$_REQUEST['act']();
}


function save_admin_records(){
global $conn;







$sql1 = "select ad_email from admin where ad_email = '$_REQUEST[ad_email]'";
$rs1= mysqli_query($conn, $sql1);

if(mysqli_num_rows($rs1)>0){
	header("location:../admin.php?msg=Email ID Already Exists!!");
}

}


if($_REQUEST['id']){
	
		$sql = "UPDATE `diagnostic_lab'.'admin' SET 'ad_email'='$_REQUEST[ad_email]','ad_pass'='$_REQUEST[ad_pass]');";
		$rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
		
		if($rs){
			echo "record update";
			header("location:../admin_view.php?msg=record updated successfully!!");
		}
	
}
else{
	
$sql = "INSERT INTO `diagnostic_lab'.'admin'('ad_email','ad_pass') VALUES ('$_REQUEST[ad_email]','$_REQUEST[ad_pass])
$rs = mysqli_query($conn, $sql);

if($rs){
	echo "saved";
}

}


}
function delete_admin_records(){
	global $conn;
	$sql1="select from admin where id='$_REQUEST[id]'";
	$rs1=mysqli_query($conn, $sql1);
	$data=mysqli_fetch_assoc($rs1);
	$sql="delete from admin where id= '$_REQUEST[id]'";
	$rs=mysqli_query($conn,$sql);
	if($rs){
		 header("location:../admin_view.php?msg=Record deleted successfully");
	}
}

?>	
	