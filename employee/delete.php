<?php
session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

if($_POST) {	
    $id = $_POST["id"];
    
    $result = $con->query("
    	SELECT * FROM tb_users
		WHERE employee_code = '$id'
	")->fetch_assoc();
    
        
    $code = $result['Employee_Code'];

    $result = $con->query("DELETE FROM tb_users WHERE employee_code = '$id'");
    
	if($result) {	
		$desc = "Employee with the employee code: <b>$code</b> was deleted";
        logAction($con, 'Delete', $_SESSION['user_id'], $desc);
		echo json_encode("Employee Deleted");
	}
	else 
		echo 'Something went wrong, try again later.';
}



?>