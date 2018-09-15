<?php
	include("includes/header.php");
?>

<div class="main-panel">
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
	<h3 style="text-align:center;"><?php if(isset($_REQUEST['msg'])){echo $_REQUEST['msg']; }?></h3>
<form name="digcenter_view" action="../_diagnostic/lib/diagnostic_center.php">
		<div class="content table-responsive table-full-width">
		<table class="table table-hover table-striped">
			<thead>
				<th>Profile</th>
				<th>Name</th>
				<th>Contact Number</th>
				<th>Email</th>
				<th>Work Location</th>
				<th>Booking Price</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
			global $conn;
				$sql = "select * from daignostic_center";
				$rs = mysqli_query($conn, $sql);
				while($data =mysqli_fetch_assoc($rs)){
				
			?>
			<tr>
				<td><img src="../_diagnostic/uploads/digcent/<?php echo $data['dia_pro'];?>" height="50" width="50" class="pf_img" /></td>
				<td><?php echo $data['dia_name'];?></td>				
				<td><?php echo $data['dia_contnum'];?></td>
				<td><?php echo $data['dia_email'];?></td>
				<td><?php echo $data['dia_loc'];?></td>
				<td><?php echo $data['dia_bookingprice'];?></td>
				<td><a href="javascript:delete_digcenter_records(<?php echo $data['id'];?>);"><img src="images/del.png" height="18"></a> <a href="dignosis_details.php?id=<?php echo $data['id'];?>"><img src="images/details.png" height="18"></a></td>
			</tr>
			
			<?php
							}
			?>
			</tbody>
		</table>
	</div>
	<input type="hidden" name="act"  />
	<input type="hidden" name="id" />
	</form>
</div>
</div>
</div>
</div>

<?php
	include("includes/footer.php");
?>