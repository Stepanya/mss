<?php
include('../connection.php');


$output = array();
$query = "SELECT * FROM tb_branch ORDER BY zone_no";

$result = $con->query($query);
$data = array();

while ($row = $result->fetch_assoc()) {

	$sub_array = array(
		$row["Branch_Name"],
		$row["Branch_Head"],
		$row["Zone_No"],
		$row["Zone_Head"],
		"
		<div class='btn-group'>
		  <button type='button' class='btn btn-warning btn-sm edit' id='{$row['Branch_ID']}'>
		  	<i class='fa fa-edit'></i> Edit
		  </button>
		  <button type='button' class='btn btn-danger btn-sm delete' id='{$row['Branch_ID']}'>
		  	<i class='fa fa-times'></i> Delete
		  </button>
		</div>
		"
	);
	
	$data[] = $sub_array;
}

$output = array( "data" => $data );
echo json_encode($output);

?>
