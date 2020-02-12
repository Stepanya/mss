<?php

session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

$result = $con->query("
	UPDATE tb_policies
	SET policy_name = '{$_POST["policy"]}',
		comm_rate_yr1 = '{$_POST["yr1"]}',
		comm_rate_yr2 = '{$_POST["yr2"]}',
		comm_rate_yr3 = '{$_POST["yr3"]}',
		comm_rate_yr4 = '{$_POST["yr4"]}',
		comm_rate_yr5 = '{$_POST["yr5"]}'
	WHERE policy_id = {$_POST["id"]}
");

if($con->affected_rows == 0){
	echo json_encode("No changes were made");
} elseif($result) {	
	$desc = "Policy <b>".$_POST['policy']."</b> was updated";
    logAction($con, 'Update', $_SESSION['user_id'], $desc);
	echo json_encode("Policy Updated");
} else
	echo "Something went wrong, try again later.";
?>