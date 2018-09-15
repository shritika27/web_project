<?php 
 include("../includes/db.php");
 
// print "<pre>";
// print_r($_REQUEST); 

if($_REQUEST['act']){
	$_REQUEST['act']();
}


function save_question_records(){
global $conn;

if($_REQUEST['id']){
	
		$sql = "UPDATE `security_question` SET `sec_ques_name` = '$_REQUEST[sec_ques_name]' WHERE `id` = '$_REQUEST[id]';";
			
		$rs = mysqli_query($conn, $sql);
		if($rs){
			//echo "record update";
			header("location:../security_questions.php?msg= Record Update Successfully!!!!");
		}
	
}
else{
$sql = "INSERT INTO `security_question` ( `sec_ques_name`) VALUES ('$_REQUEST[sec_ques_name]');";
$rs = mysqli_query($conn, $sql);

if($rs){
	header("location:../security_questions.php?msg= Record Save Successfully!!!!");
}

}


}
function delete_secques_records(){
	global $conn;
	$id=$_REQUEST['id'];
	$sql="delete from security_question where id='$_REQUEST[id]'";
	$query=mysqli_query($conn, $sql);
	if($query){
		 header("location:../security_questions.php?msg= record deleted successfully!!!!");
	}
	else{
		echo "not deleted";
	}
}
?>	
	