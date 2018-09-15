<?php
  include("connect.php");
  $id=$_GET['id'];
  $sql="delete from table1 where id=$id";
  $query=mysqli_query($conn,$sql);
  if($query)
  {
	  echo "deleted";
  }
  else
  {
     echo "not deleted";
  }
?>  