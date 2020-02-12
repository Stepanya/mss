<?php
include('../connection.php');
if($_POST) {

	$output = array();

	$result = $con->query("
		SELECT * FROM tb_recruitment_tracker WHERE applicant_id = '{$_POST["id"]}'
	")->fetch_assoc();

	$sub_array = array(
		getBadge($result['resume review']),
		getBadge($result['interview']),
		getBadge($result['seminar']),
		getBadge($result['arise']),
		getBadge($result['training']),
		getBadge($result['ice']),
		getBadge($result['result']),
	);
	$output[] = $sub_array;

	$result = $con->query("
		SELECT * FROM tb_applicants AS a
		JOIN tb_recruitment_tracker AS t 
		ON a.applicant_id = t.applicant_id 
		WHERE a.applicant_id = '{$_POST["id"]}' 
		LIMIT 1
	"
	)->fetch_assoc();

	$result['resume'] = "../assets/resumes/{$result['resume']}";
	$result['date'] = formatdate($result['date_of_application']);
	if ($result['stage'] == "encoded" || $result['stage'] == "no hire") {
		$result['status'] = "<option value='{$result['stage']}'>{$result['stage']}</option>";
	} else {
		$result['status'] = "
		<option value='{$result[$result['stage']]}'>".getBadge($result[$result['stage']])."</option>
		<option value='0'>Pending</option>
		<option value='1'>Passed</option>
		<option value='2'>Failed</option>
	";
	}
	
	$result['tracker'] = $output;

	echo json_encode($result);
}

function formatdate($date) {
  return date_format(date_create($date), "M j, Y");
}

function getBadge($row) {
		
	$badge = $text = "";
	if ($row === "0") {
		$badge = "warning";
		$text = "Pending";
	} elseif ($row === "1" || $row === "hired") {
		$badge = "success"; 
		$text = "Passed";
	} elseif ($row === "2" || $row === "no hire") {
		$badge = "danger"; 
		$text = "Failed";
	} elseif($row === "N/A") {
		$badge = "dark"; 
		$text = $row;
	} 
	return "<span class='badge bg-$badge'>$text</span>";
}
?>