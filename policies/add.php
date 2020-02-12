<?php

session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

$result = $con->query("
	INSERT INTO tb_policies 
		(policy_name, comm_rate_yr1, comm_rate_yr2, comm_rate_yr3, comm_rate_yr4, comm_rate_yr5)
	VALUES
		('{$_POST["policy"]}','{$_POST["yr1"]}','{$_POST["yr2"]}','{$_POST["yr3"]}','{$_POST["yr4"]}','{$_POST["yr5"]}')
");

if($result) {	
	$desc = "Policy <b>".$_POST['policy']."</b> was added.";
    logAction($con, 'Add', $_SESSION['user_id'], $desc);
	echo json_encode("Policy {$_POST['policy']} has been added.");
} else
	echo "Something went wrong, try again later.";
?>