<?php
	include("includes/header.php");
?>
<div class="main-panel">
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
   <form name="patient_view" action="../_patient/lib/patient.php">
   <h5><?php if(isset($_REQUEST['msg'])){echo $_REQUEST['msg'];}?></h5>
		<div class="content table-responsive table-full-width">
		<table class="table table-hover table-striped">
			<thead>				
				<th>Profile Pic</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Contact Number</th>
				<th>Email</th>
				<th>Blood Group</th>
				<th>Problem</th>
				<th>Location</th>
				<th>Date Of Birth</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				$sql = "select * from patient_registration";
				$rs = mysqli_query($conn, $sql);
				while($data = mysqli_fetch_assoc($rs)){
				
			?>
			
			<tr>
				<td><img src="../_patient/uploads/patient/<?php echo $data['patient_profile'];?>" height="50" width="50" class="pf_img" /></td>				
				<td><?php echo $data['patient_name'];?></td>
				<td><?php echo $data['patient_gender'];?></td>
				<td><?php echo $data['patient_contactnumber'];?></td>
				<td><?php echo $data['patient_email'];?></td>
				<td><?php echo $data['patient_group'];?></td>
				<td><?php echo $data['patient_problem'];?></td>
				<td><?php echo $data['patient_location'];?></td>
				<td><?php echo $data['patient_dateofbirth'];?></td>
				<td><a href="javascript:delete_patient_records(<?php echo $data['id'];?>);"> <img src="images/del.png" height="18"> </a> <a href="patient_details.php?id=<?php echo $data['id'];?>"><img src="images/details.png" height="18"></a> </td>
			</tr>
			<?php
				}
			?>
			</tbody>
		</table>
	</div>
	<input type="hidden" name="act"/>
	<input type="hidden" name="id"/>
      </form>
</div>
</div>



</div>
</div>

<?php
	include("includes/footer.php");
?>