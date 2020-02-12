<?php
include('../connection.php');


$output = array();
$query = "
	SELECT * 
	FROM tb_logs AS l 
	JOIN tb_users AS u 
	ON l.Employee_Code = u.Employee_Code ORDER BY timestamp DESC
	";

$result = $con->query($query);
$data = array();

while ($row = $result->fetch_assoc()) {

	$name = $row["First_Name"] ." ". $row["Middle_Name"] ." ". $row["Last_Name"];
	$sub_array = array(
		$row["Employee_Code"],
		$name,
		$row["Position"],
		$row["action"],
		formatdate($row["timestamp"]),
		"
		<div 
			class='popover1' 
			data-toggle='popover' 
			data-placement='left' 
			data-content='{$row['description']}'
		>
		".trimmsg($row['description'])."			
		</div>"
	);
	
	$data[] = $sub_array;
}

$output = array( "data" => $data );
echo json_encode($output);

function formatdate($date) {
	$date = date_create($date);
	return date_format($date, "M j, Y @ g:i A");
}
function trimmsg($msg) {
	if(strlen($msg) > 30) {
		return substr($msg, 0, 30)."...";
	}
	return $msg;
}

?>