<?php

session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

$result = $con->query(
	"UPDATE tb_announcements
	 SET subject = '{$_POST["subject"]}',
		 message = '{$_POST["message"]}'
	WHERE id = '{$_POST["id"]}'
	"
);

if($con->affected_rows == 0){
	echo json_encode("No changes were made");
} elseif($result) {	
	$desc = "Announcement with the id of ".$_POST['id']." was updated";
    logAction($con, 'Update', $_SESSION['user_id'], $desc);
	echo json_encode("Announcement Updated");
} else
	echo "Something went wrong, try again later.";
?>