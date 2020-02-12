<?php
if ($_POST) {
	require '../connection.php';
	require '../activity_logs/activity_log.php';
	session_start();

	$id = $_SESSION['user_id'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	$con->query("
		INSERT INTO tb_announcements (posted_by, subject, message)
		VALUES ('$id', '$subject', '$message')"
	);

	$desc = "Posted an announcement";
	logAction($con, 'Announcement', $id, $desc);

	echo json_encode("Announcement posted!");
	exit();
}

?>