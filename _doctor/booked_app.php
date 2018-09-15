<?php
	include("includes/header.php");

	// $sql = "select * from payment where doctor_id = '$_SESSION[id]'";
	// $rs = mysqli_query($conn, $sql);
	// $data = mysqli_fetch_assoc($rs); 
	
	// print "<pre>";
	// print_r($data);

?>


    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Booked Appointments</h4>
                            </div>
                            <div class="content">
                                 <form name="booked_app_view" action="lib/doctor.php">

<table width="100%" border="1" id="customers">
<tr>
<th>Sr. No.</th>
<th>Patient id</th>
<th>Payer email</th>
<th>Booking date </th>
<th>Business email</th>
<th>Payment status</th>
<th>Booking date</th>
<th>action</th>
</tr>
<?php
global $conn;
$i=1; 
$sql="select * from payment where doctor_id = '$_SESSION[id]'";
$rs=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($rs))
{
?>
<tr>
<td><?php echo $i;?></td>
<td><?php echo $data['patient_id'];?></td>
<td><?php echo $data['payer_email'];?></td>
<td><?php echo $data['booking_date'];?></td>
<td><?php echo $data['business_email'];?></td>
<td><?php echo $data['payment_status'];?></td>
<td><?php $btime = explode(' ',$data['payment_date']); echo $btime[0];?></td>

<td><a href="report.php?patient_id=<?php echo $data['patient_id'];?>&d_id=<?php echo $data['doctor_id']; ?>">Reporte Gen.</a>|<a href="javascript:delete_booked_app_records(<?php echo $data['id'];?>);">Cancel</a></td>
</tr>
<?php $i++; }?>
</table>

<input type="hidden" name="act" />
<input type="hidden" name="id" />
</div>
</form>
                            </div>
                        </div>
                    </div>                      
				</div>
<?php include("includes/footer.php"); ?>