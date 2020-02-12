<?php
session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

if($_POST) {	
    $id = $_POST["id"];
    
    $result = $con->query("
    	SELECT * FROM tb_sales
		WHERE sales_id = '$id'
	")->fetch_assoc();
    
        
    $client = "{$result['client_first_name']} {$result['client_last_name']}";
    $emp = $result['employee_code'];

    $result = $con->query("DELETE FROM tb_commission WHERE commission_id = $id");

    if(!$result) {
    	echo 'Something went wrong, try again later.';
    	exit();
    } 

    $result = $con->query("DELETE FROM tb_sales WHERE sales_id = $id");
    
	if($result) {	
		$desc = "A sale for: <b>$client</b> sold by: <b>$emp</b> was deleted";
        logAction($con, 'Delete', $_SESSION['user_id'], $desc);
		echo json_encode("Sale Deleted");
	}
	else 
		echo 'Something went wrong, try again later.';
}



?>