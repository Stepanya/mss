<?php
session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

if($_POST) {	
    $id = $_POST["id"];
    
    $result = $con->query("
    	SELECT * FROM tb_policies
		WHERE policy_id = '$id'
	")->fetch_assoc();
    
        
    $policy = $result['policy_name'];

    $result = $con->query("DELETE FROM tb_policies WHERE policy_id = $id");
    
	if($result) {	
		$desc = "Policy: <b>$policy</b> was deleted";
        logAction($con, 'Delete', $_SESSION['user_id'], $desc);
		echo json_encode("policy Deleted");
	}
	else 
		echo 'Something went wrong, try again later.';
}



?>