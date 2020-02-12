<?php

session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

$resume="";

if ($_FILES['resume']['name'] != "") {
	$resume = uploadResume($_FILES['resume'], $_POST["email"]);
	$resume = ", resume = '$resume'";
}

$stage = getStage($con, $_POST['status'], $_POST["stage"], $_POST["id"]);

$result = $con->query("
	UPDATE tb_applicants
	SET first_name = '{$_POST["fname"]}',
		last_name = '{$_POST["lname"]}',
		mi = '{$_POST["mi"]}',
		email = '{$_POST["email"]}',
		contact_no = '{$_POST["contact"]}',
		applying_for = '{$_POST["position"]}',
		date_of_application = '{$_POST["date"]}',
		why_work = '{$_POST["reason"]}',
		stage = '$stage'
		$resume
	WHERE applicant_id = '{$_POST["id"]}'
");

if($con->affected_rows == 0){
	echo json_encode("No changes were made");
} elseif($result) {	
	$desc = "Applicant with id: <b>".$_POST['id']."</b> was updated";
    logAction($con, 'Update', $_SESSION['user_id'], $desc);
	echo json_encode("Applicant Updated");
} else
	echo "Something went wrong, try again later.";

function uploadResume($file, $name) {
	$ext = pathinfo($file['name'], PATHINFO_EXTENSION);
	// unlink("../assets/resumes/$name.$ext");
  	move_uploaded_file($file['tmp_name'],"../assets/resumes/$name.$ext");
  	return "$name.$ext";
}
function getStage($con, $status, $stage, $id) {
	
	if ($status == 1 || $status == 2) {

		$con->query("
			UPDATE tb_recruitment_tracker SET `$stage` = $status WHERE applicant_id = $id
		");
		if ($status == 1) {

			$new_stage = "";
			
			if ($stage == "resume review")
				$new_stage = "interview";
			elseif ($stage == "interview") 
				$new_stage = "seminar";
			elseif ($stage == "seminar")
				$new_stage = "arise";
			elseif ($stage == "arise")
				$new_stage = "training";
			elseif ($stage == "training")
				$new_stage = "ice";
			elseif ($stage == "ice") {
				$new_stage = "encoded";
				$con->query("
					UPDATE tb_recruitment_tracker SET result = 'hired' WHERE applicant_id = $id
				");
			}
			elseif ($stage == "encoded")
				return $stage;

			$con->query("
				UPDATE tb_recruitment_tracker SET `$new_stage` = 0 WHERE applicant_id = $id
			");
			return $new_stage;
		} else {
			$con->query("
				UPDATE tb_recruitment_tracker SET result = 'no hire' WHERE applicant_id = $id
			");
			return "no hire";
		}
	} else 
		return $stage;
}
?>