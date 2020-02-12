<?php
include('../connection.php');


$output = array();
$query = "
	SELECT * 
	FROM tb_users AS u 
	JOIN tb_branch AS b 
	ON b.Branch_ID = u.Branch_ID ORDER BY Last_Name
	";

$result = $con->query($query);
$data = array();

while ($row = $result->fetch_assoc()) {

	$name = $row["First_Name"] ." ". $row["Middle_Name"] ." ". $row["Last_Name"];
	$sub_array = array(
		$row["Employee_Code"],
		$name,
		$row["Email"],
		$row["Branch_Name"],
		$row["Zone_No"],
		$row["Position"],
		"
		<div class='btn-group'>
		  <button type='button' class='btn btn-primary btn-sm view' id='{$row['Employee_Code']}'>
		  	<i class='fa fa-eye'></i> View
		  </button>
		  <button type='button' class='btn btn-warning btn-sm edit' id='{$row['Employee_Code']}'>
		  	<i class='fa fa-edit'></i> Edit
		  </button>
		  <button type='button' class='btn btn-danger btn-sm delete' id='{$row['Employee_Code']}'>
		  	<i class='fa fa-user-times'></i> Delete
		  </button>
		</div>
		"
	);
	
	$data[] = $sub_array;
}

$output = array( "data" => $data );
echo json_encode($output);
?>
