<?php
session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

if($_POST) {	
    $id = $_POST["id"];
    
    $result = $con->query("
    	SELECT * FROM tb_branch
		WHERE branch_id = '$id'
	")->fetch_assoc();
    
        
    $branch = $result['Branch_Name'];

    $result = $con->query("DELETE FROM tb_branch WHERE branch_id = $id");
    
	if($result) {	
		$desc = "Branch: <b>$branch</b> was deleted";
        logAction($con, 'Delete', $_SESSION['user_id'], $desc);
		echo json_encode("Branch Deleted");
	}
	else 
		echo 'Something went wrong, try again later.';
}



?>