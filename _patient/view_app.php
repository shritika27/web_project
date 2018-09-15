<?php
session_start();

include('../includes/db.php');


print "<pre>";
print_r($_REQUEST);

if(isset($_REQUEST['act'])){
	
	$_REQUEST['act']();
}
