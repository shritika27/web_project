<?php include("includes/header.php")?>

<?php
	if(isset($_REQUEST['id'])){
		$sql = "select * from security_question where id = '$_REQUEST[id]'";
		$rs = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($rs);
		// print "<pre>";
		// print_r($data);
	}
?>
<div class="container" style="background-color:skyblue;">
   
  <h1 style="text-align:center; color:red;">security question form</h1>
  <form class="form-horizontal" action="lib/security.php" enctype="multipart/form-data" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="sec_ques_name"> question Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="sec_ques_name" placeholder="Enter security question" name="sec_ques_name" value="<?php if(isset($data['sec_ques_name'])){echo $data['sec_ques_name']; }?>">
   
 </div>
    </div>
	
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10" style="text-align:center;">
        <button type="submit" class="btn btn-default" >Submit</button>
		
		<input type="hidden" name="act" value="save_question_records"/>
		<input type="hidden" name="id" value="<?php if(isset($data['id'])){ echo $data['id']; }?>" />
		
		
      </div>
    </div>
  </form>
</div>
<?php include("includes/footer.php");?> 