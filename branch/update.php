<?php

session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

$result = $con->query("
	UPDATE tb_branch
	SET Branch_Name = '{$_POST["branch"]}',
		Branch_Head = '{$_POST["branch_head"]}',
		Zone_No = '{$_POST["zone_no"]}',
		Zone_Head = '{$_POST["zone_head"]}'
	WHERE Branch_ID = '{$_POST["id"]}'
");

if($con->affected_rows == 0){
	echo json_encode("No changes were made");
} elseif($result) {	
	$desc = "Branch <b>".$_POST['branch']."</b> was updated";
    logAction($con, 'Update', $_SESSION['user_id'], $desc);
	echo json_encode("Branch Updated");
} else
	echo "Something went wrong, try again later.";
?>