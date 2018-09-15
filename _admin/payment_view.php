<?php
	include("includes/header.php");
?>
<div class="main-panel">
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card">
   <form name="payment_form" action="lib/payment.php">
		<h5><?php if(isset($_REQUEST['msg'])){echo $_REQUEST['msg'];}?></h5>
		<div class="content table-responsive table-full-width">
		<table class="table table-hover table-striped">
			<thead>		
				<th>Patient Id</th>
				<th>Doctor Id</th>
				<th>diagnosis Id</th>
				<th>Payer Email</th>
				<th>Booking Date</th>
				<th>Business Email</th>
				<th>Payment Status</th>
				<th>Payment Date</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				$sql = "select * from payment";
				$rs = mysqli_query($conn, $sql);
				while($data = mysqli_fetch_assoc($rs)){
				
			?>
			
			<tr>		
				<td><?php echo $data['patient_id'];?></td>
				<td><?php echo $data['doctor_id'];?></td>
				<td><?php echo $data['dia_id'];?></td>
				<td><?php echo $data['payer_email'];?></td>
				<td><?php echo $data['booking_date'];?></td>
				<td><?php echo $data['business_email'];?></td>
				<td><?php echo $data['payment_status'];?></td>
				<td><?php echo $data['payment_date'];?></td>
				<td><a href="javascript:delete_payment_records(<?php echo $data['id'];?>);"> <img src="images/del.png" height="18"> </a></td>
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