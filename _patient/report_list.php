<?php
	include("includes/header.php");
	$sql1 = "select * from dr_report where patient_id = '$_SESSION[id]'";
	$rs1 = mysqli_query($conn, $sql1);
	$data1
?>


    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="preport_body_section">
						<?php
							$sql = "select * from dr_report where patient_id = '$_SESSION[id]'";
							$rs = mysqli_query($conn, $sql);
							while($data= mysqli_fetch_assoc($rs)){
						?>
						<div class="col-md-3">
							<div class="odlrs_report">
								<a href="download_report.php?report_id=<?php echo $data['report_id']; ?>"><img src="../images/MedicalReport.jpg" height="200" width="" /></a>
							</div>
							<div class="dr_report_name">
								<?php
								$sql1 = "select dr_name from doctor where id = '$data[dr_id]'";
								$rs1 = mysqli_query($conn, $sql1);
								$data1 = mysqli_fetch_assoc($rs1);
								?>
								<a href="download_report.php?report_id=<?php echo $data['report_id']; ?>"><b>Dr. </b><?php echo $data1['dr_name']; ?></a>
								
							</div>
						</div>						
						<?php
							}
						?>
					</div>
				</div>                      
			</div>
		</div>
     </div>     

<?php include("includes/footer.php"); ?>