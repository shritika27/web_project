<?php
session_start();

include("../includes/db.php");

//print "<pre>";
//print_r($_REQUEST);

if(isset($_REQUEST['act'])){			
	$_REQUEST['act']();			
}

function save_appointment_date(){
	global $conn;
	
	$mtime = $_REQUEST['dia_app_mstime']." To ".$_REQUEST['dia_app_metime'];
	$etime = $_REQUEST['dia_app_estime']." To ".$_REQUEST['dia_app_eetime'];

	
      if($_REQUEST['id']){
		  	$sql ="UPDATE `appointment` SET `dia_id`='$_REQUEST[dia_id]',`dia_app_date`='$_REQUEST[dia_app_date]',`dia_app_mtime`='$mtime',`dia_app_etime`='$etime' WHERE `id`='$_REQUEST[id]';";
		
	    $rs = mysqli_query($conn,$sql);
		if($rs){
			header("location:../digcenter_app.php?msg=Record  updated successfully!! ");
			echo "updates";
		}
		
        }
	 
	
	else
	{	
				  
	$sql = " INSERT INTO `appointment` (`dia_id`, `dia_app_date`, `dia_app_mtime`, `dia_app_etime`) VALUES ('$_REQUEST[dia_id]', '$_REQUEST[dia_app_date]', '$mtime', '$etime'); ";
	echo $sql;
	$rs = mysqli_query($conn, $sql);
	if($rs){
		echo "Save";
		header("location:../digcenter_app.php?msg=Appointment Record Save Successfully!!!");
	}

    }
}


  


	
function delete_digcenter_app_records()
{
	echo "Find";
	global $conn;
	$id = $_REQUEST['id'];
    $sql="delete from appointment where id='$_REQUEST[id]'";
    $query=mysqli_query($conn,$sql);
	if($query)
	{
	   echo "deleted";
	  header("location:../digcenter_app.php?msg=Record deleted successfully!! ");
	   
	}
	else
	{
	  echo "not deleted";
	}

}




?>