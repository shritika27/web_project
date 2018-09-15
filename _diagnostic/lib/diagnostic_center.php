<?php 
	include("../includes/db.php");
 
// print "<pre>";
// print_r($_REQUEST); 

	if(isset($_REQUEST['act'])){
		 $_REQUEST['act']();
	}


	function save_diagnostic_center_records(){
		global $conn;
		$img = $_FILES['dia_pro']['name'];

		if($img){
			$img_arr = explode(".", $img);
			$pro_img = $img_arr[0].time().".".$img_arr[1];
			move_uploaded_file($_FILES['dia_pro']['tmp_name'], "../uploads/digcent/".$pro_img);

		}	

		else{
			$pro_img = $_FILES['dia_pro']['name'];
		}


		if($_REQUEST['id']){

			$sql = "UPDATE  `diagnostic_lab`.`daignostic_center` SET `dia_name` = '$_REQUEST[dia_name]',  `dia_contnum` = '$_REQUEST[dia_contnum]', `dia_email` = '$_REQUEST[dia_email]', `dia_pass` = '$_REQUEST[dia_pass]',  `dia_loc` = '$_REQUEST[dia_loc]', `dia_secqus` = '$_REQUEST[dia_secqus]', `dia_secans` = '$_REQUEST[dia_secans]', `dia_bookingprice` = '$_REQUEST[dia_bookingprice]', `dia_pro` = '$pro_img', `dia_govapprove` = '$_REQUEST[dia_govapprove]', `dia_dateapprove` = '$_REQUEST[dia_dateapprove]' WHERE `id` = '$_REQUEST[id]';";

			$rs = mysqli_query($conn, $sql);
			if($rs){
				header("location:../index.php?msg=Record  updated successfully!! ");
			}

		}
		else{

			$sql="INSERT INTO `diagnostic_lab`.`daignostic_center`(`dia_name`,`dia_contnum`,`dia_email`,`dia_pass`,`dia_loc`, `dia_secqus`,`dia_secans`,`dia_bookingprice`,`dia_pro`,`dia_govapprove`,`dia_dateapprove`) VALUES('$_REQUEST[dia_name]','$_REQUEST[dia_contnum]', '$_REQUEST[dia_email]','$_REQUEST[dia_pass]','$_REQUEST[dia_loc]','$_REQUEST[dia_secqus]','$_REQUEST[dia_secans]','$_REQUEST[dia_bookingprice]','$pro_img','$_REQUEST[dia_govapprove]', '$_REQUEST[dia_dateapprove]');";

			$rs = mysqli_query($conn, $sql);

			if($rs){
				header("location:../../index.php?msg=Diagnosis Registration Successfully!! ");
			}
		}

	}
	function delete_digcenter_records()
	{
		global $conn;
		$sql="select dia_pro from daignostic_center where id='$_REQUEST[id]'";
		$rs= mysqli_query($conn, $sql);
		$data= mysqli_fetch_assoc($rs);
		if($data['dia_pro']){
			unlink("../uploads/digcent/".$data['dia_pro']);
		}
		$sql="delete from daignostic_center where id= '$_REQUEST[id]'";
		$rs= mysqli_query($conn, $sql);
		if($rs){
			header("location:../../_admin/digcenter_view.php?msg=Record Deleted successfully!! ");
		}
	}
	function check_email(){
		global $conn;
		$sql1 = "select dia_email from daignostic_center where dia_email = '$_REQUEST[frm_data]'";
		$rs1= mysqli_query($conn, $sql1);

		if(mysqli_num_rows($rs1) == "1"){
			echo '<p style="color:red;">Email Id already exist</p>';
		}	
	}

?>

   