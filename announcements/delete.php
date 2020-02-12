<?php
session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

if($_POST) {	
    $id = $_POST["id"];
    
    $result = $con->query(
		"SELECT * FROM tb_announcements
		WHERE id = $id" 
    )->fetch_assoc();
    
        
    $subject = $result['subject'];

    $result = $con->query("DELETE FROM tb_announcements WHERE id = '$id'");
    
	if($result) {	
		$desc = "Announcement with the subject of $subject was deleted";
        logAction($con, 'Delete', $_SESSION['user_id'], $desc);
		echo json_encode("Announcement Deleted");
	}
	else 
		echo 'Something went wrong, try again later.';
}



?>