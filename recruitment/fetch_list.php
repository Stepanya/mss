<?php
include('../connection.php');


$output = array();
$query = "SELECT * FROM tb_applicants";

$result = $con->query($query);
$data = array();

while ($row = $result->fetch_assoc()) {

	$app_name = $row["first_name"] ." ". $row["mi"] ." ". $row["last_name"];
	$sub_array = array(
		$row["applicant_id"],
		$app_name,
		getBadge($row["stage"]),
		$row["applying_for"],
		formatdate($row["date_of_application"]),
		"
		<div class='btn-group'>
		  <button type='button' class='btn btn-primary btn-sm view' id='{$row['applicant_id']}'>
		  	<i class='fa fa-eye'></i> View
		  </button>
		  <button type='button' class='btn btn-warning btn-sm edit' id='{$row['applicant_id']}'>
		  	<i class='fa fa-edit'></i> Edit
		  </button>
		  <button type='button' class='btn btn-danger btn-sm delete' id='{$row['applicant_id']}'>
		  	<i class='fa fa-user-times'></i> Delete
		  </button>
		</div>
		"
	);
	
	$data[] = $sub_array;
}

$output = array( "data" => $data );
echo json_encode($output);

function formatdate($date) {
	$date = date_create($date);
	return date_format($date, "M j, Y");
}

function getBadge ($stage) {
	$badge="";
	
	if ($stage == "resume review")
		$badge = "warning";
	elseif ($stage == "interview")
		$badge = "primary";
	elseif ($stage == "seminar")
		$badge = "info";
	elseif ($stage == "arise")
		$badge = "navy";
	elseif ($stage == "training")
		$badge = "purple";
	elseif ($stage == "ice")
		$badge = "orange";
	elseif ($stage == "encoded")
		$badge = "success";
	elseif ($stage == "no hire")
		$badge = "danger";

	return "<span class='badge bg-$badge'>".ucwords($stage)."</span>";
}
?>
