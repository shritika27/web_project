<?php
	include("includes/header.php");

	if(isset($_REQUEST['id'])){
		$sec_sql = "select * from security_question where id = '$_REQUEST[id]'";
		$sec_rs = mysqli_query($conn, $sec_sql);
		$data = mysqli_fetch_assoc($sec_rs);
		// print "<pre>";
		// print_r($data);
	}
?>

<div class="main-panel">
<div class="content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="card quiz_card">
	<h4 style="text-align:center;">Security Question Form</h4>
   <form class="form-horizontal" action="lib/security.php" enctype="multipart/form-data" method="post">
     <div class="form-group">
      <label class="control-label col-sm-2 quiz_title" for="sec_ques_name"> question Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sec_ques_name" placeholder="Enter security question" name="sec_ques_name" value="<?php if(isset($data['sec_ques_name'])){echo $data['sec_ques_name']; }?>">
   
 </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-12" style="text-align:center;">
        <button type="submit" class="btn btn-default" >Submit</button>
		
		<input type="hidden" name="act" value="save_question_records"/>
		<input type="hidden" name="id" value="<?php if(isset($data['id'])){ echo $data['id']; }?>" />
		
		
      </div>
    </div>
      </form>
</div>
</div>
<div class="col-md-12">
<div class="card">

   <form name="security_question_view" action="lib/security.php">
     <h5><?php if(isset($_REQUEST['msg'])){echo $_REQUEST['msg']; }?></h5>
		<div class="content table-responsive table-full-width">
		<table class="table table-hover table-striped">
			<thead>
				<th>Security questions</th>
				<th>action</th>
			</thead>
			<tbody>
			<?php
			    global $conn;
				$sql = "select * from security_question";
				$rs = mysqli_query($conn, $sql);
				while($data = mysqli_fetch_assoc($rs)){
				
			?>
			
			<tr>
				<td><?php echo $data['sec_ques_name'];?></td>
								
				<td><a href="security_questions.php?id=<?php echo $data['id'];?>"><img src="images/edit.png" height="18"></a> | <a href="javascript:delete_secques_records(<?php echo $data['id'];?>);"> <img src="images/del.png" height="18"> </a> </td>
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