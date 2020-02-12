<?php
session_start();
include('../connection.php');

$finAd = ($_SESSION['position'] == "Financial Adviser"? "WHERE s.employee_code = '{$_SESSION['user_id']}' " : "");

$output = array();
$query = "
SELECT * FROM tb_sales AS s
JOIN tb_policies AS p
ON s.policy_id = p.policy_id
JOIN tb_users AS u
ON s.employee_code = u.employee_code
$finAd
ORDER BY date_sold ASC
";

$result = $con->query($query);
$data = array();

while ($row = $result->fetch_assoc()) {

	$sub_array = array(
		"{$row["client_first_name"]} {$row["client_last_name"]}",
		$row["policy_name"],
		$row["payment_plan"],
		$row["payment_amount"],
		formatdate($row["date_sold"]),
		formatdate($row["end_date"]),
		"{$row['First_Name']} {$row['Middle_Name']} {$row['Last_Name']}",
		"
		<div class='btn-group'>
		  <button type='button' class='btn btn-warning btn-sm edit' id='{$row['sales_id']}'>
		  	<i class='fa fa-edit'></i> Edit
		  </button>
		  <button type='button' class='btn btn-primary btn-sm view' id='{$row['sales_id']}'>
		  	<i class='fa fa-eye'></i> View
		  </button>
		  <button type='button' class='btn btn-danger btn-sm delete' id='{$row['sales_id']}'>
		  	<i class='fa fa-times'></i> Delete
		  </button>
		</div>
		"
	);
	
	$data[] = $sub_array;
}

$output = array( "data" => $data );
echo json_encode($output);

function formatdate($date) {
  return date_format(date_create($date), "M j, Y");
}
?>
