<?php

session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

$result = $con->query("
	INSERT INTO tb_branch 
		(Branch_Name, Branch_Head, Zone_No, Zone_Head)
	VALUES
		('{$_POST["branch"]}','{$_POST["branch_head"]}','{$_POST["zone_no"]}','{$_POST["zone_head"]}')
");

if($result) {	
	$desc = "Branch <b>".$_POST['branch']."</b> was added.";
    logAction($con, 'Add', $_SESSION['user_id'], $desc);
	echo json_encode("Branch {$_POST['branch']} has been added.");
} else
	echo "Something went wrong, try again later.";
?>