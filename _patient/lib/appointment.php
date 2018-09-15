<?php
session_start();

include('../includes/db.php');
//print "<pre>";
//print_r($_REQUEST);

if(isset($_REQUEST['act'])){
	
	$_REQUEST['act']();
}


function save_app_date(){
	global $conn;
	
	$mtime = $_REQUEST['doctor_app_mstime']." TO ". $_REQUEST['doctor_app_metime'];
	
	$etime = $_REQUEST['doctor_app_estime']." TO ". $_REQUEST['doctor_app_eetime'];
	
	if($_REQUEST['id'])
	{
	  echo "find";
	$sql = " UPDATE `dr_appointment` SET `doctor_id` = '$_REQUEST[doctor_id]', `doctor_app_date` = '$_REQUEST[doctor_app_date]', `doctor_app_mtime` = '$mtime', `doctor_app_etime` = '$etime' WHERE `id` = '$_REQUEST[id]'; ";	
	
	$rs = mysqli_query($conn, $sql);
	if($rs){
		header("location:../doctor_app.php?msg=Record Update   successfully!!!");	
        echo "update";	
	     }
	
      }
else{
	
	    $sql = "INSERT INTO `dr_appointment` (`doctor_id`, `doctor_app_date`, `doctor_app_mtime`, `doctor_app_etime`) VALUES ('$_REQUEST[doctor_id]', '$_REQUEST[doctor_app_date]', '$mtime', '$etime');";
	
	    $rs = mysqli_query($conn, $sql);
	   if($rs){
		     echo "saved";	
		       header("location:../doctor_app.php?msg=Appointment date add successfully!!!");		
	        }
	
	
   }
}
	 
function delete_doctor_app_records()
{
	global $conn;
	$id=$_REQUEST['id'];
	$sql= "delete from dr_appointment where id='$_REQUEST[id]'";
	$query=mysqli_query($conn,$sql);
	if($query)
	{
		echo "delete";
		header("location:../doctor_app.php?msg=record deleted  successfully");
	}
else {
	  echo "not deleted";
     }
}
    	

?>