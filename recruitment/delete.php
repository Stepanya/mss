<?php
session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

if($_POST) {	
    $id = $_POST["id"];
    
    $result = $con->query("
    	SELECT * FROM tb_applicants
		WHERE applicant_id = $id
	")->fetch_assoc();
    
        
    $name = "{$result['first_name']} {$result['mi']} {$result['last_name']}";

    $result = $con->query("DELETE FROM tb_recruitment_tracker WHERE applicant_id = $id");
    $result = $con->query("DELETE FROM tb_applicants WHERE applicant_id = $id");
    
	if($result) {	
		$desc = "Applicant: <b>$name</b> was deleted";
        logAction($con, 'Delete', $_SESSION['user_id'], $desc);
		echo json_encode("Employee Deleted");
	}
	else 
		echo 'Something went wrong, try again later.';
}



?>