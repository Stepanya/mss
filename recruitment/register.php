<?php 
if ($_POST) {
	session_start();
	require '../connection.php';
	require '../activity_logs/activity_log.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mi = $_POST['mi']; 
	$email = $_POST['email'];
	$reason = $_POST['reason'];
	$position = $_POST['position'];
	$contact = $_POST['contact'];
	$date = $_POST['date']; 
	$resume = uploadResume($_FILES['resume'], $email);
	$query = "
	INSERT INTO tb_applicants
		(first_name, last_name, mi, email, applying_for, why_work, contact_no, date_of_application, resume, stage)
	VALUES 
		('$fname','$lname','$mi','$email','$position','$reason', '$contact','$date', '$resume', 'resume review')";

	$result = $con->query($query);

	$id = $con->insert_id;
	$query = "
	INSERT INTO tb_recruitment_tracker
		(applicant_id, `resume review`)
	VALUES 
		($id, 0)";

	$result = $con->query($query);
	echo $con->error;
	if ($result) {
		$desc = "Applicant: <b>$fname $mi $lname</b> applied for $position";
        logAction($con, 'Registration', "N/A", $desc); 
		echo json_encode("Applicant has been registered");
	} else
		echo "Something went wrong please try again later";
}

function uploadResume($file, $name) {
	$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
  	move_uploaded_file($file['tmp_name'],"../assets/resumes/$name.$ext");
  	return "$name.$ext";
}
?>