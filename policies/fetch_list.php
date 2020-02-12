<?php
include('../connection.php');


$output = array();
$query = "SELECT * FROM tb_policies ORDER BY policy_name";

$result = $con->query($query);
$data = array();

while ($row = $result->fetch_assoc()) {

	$sub_array = array(
		$row["policy_id"],
		$row["policy_name"],
		$row["comm_rate_yr1"],
		$row["comm_rate_yr2"],
		$row["comm_rate_yr3"],
		$row["comm_rate_yr4"],
		$row["comm_rate_yr5"],
		"
		<div class='btn-group'>
		  <button type='button' class='btn btn-warning btn-sm edit' id='{$row['policy_id']}'>
		  	<i class='fa fa-edit'></i> Edit
		  </button>
		  <button type='button' class='btn btn-danger btn-sm delete' id='{$row['policy_id']}'>
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
