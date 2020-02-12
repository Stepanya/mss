<?php
include('../connection.php');
if($_POST) {

	$zone = "";
	$result = $con->query("SELECT DISTINCT Zone_No FROM tb_branch");

	while ($row = $result->fetch_assoc()) {
		$zone .= "<option value='{$row['Zone_No']}'>{$row['Zone_No']}</option>";
	}

	$result = $con->query("
		SELECT * FROM tb_users AS u
		JOIN tb_branch AS b
		ON u.branch_id = b.branch_id
		WHERE employee_code = '{$_POST["id"]}' 
		LIMIT 1
	"
	)->fetch_assoc();
	
	$result['name'] = ucwords("{$result['First_Name']} {$result['Middle_Name']} {$result['Last_Name']}");
	$result['p_hiredate'] = formatdate($result['Hire_Date']);
	$result['p_position'] = $result['Position'];
	$result['p_branch'] = $result['Branch_Name'];
	$result['p_zone'] = $result['Zone_No'];
	
	$result['Gender'] = "
		<option selected value='{$result['Gender']}'>{$result['Gender']}</option>
		<option value='Male'>Male</option>
		<option value='Female'>Female</option>
		<option value='Other'>Other</option>
	";

	$result['Status'] = "
		<option selected value='{$result['Status']}'>{$result['Status']}</option>
		<option value='Full time'>Full time</option>
		<option value='Part Time'>Part Time</option>
		<option value='Casual'>Casual</option>
	";
	$result['Position'] = "
		<option selected value='{$result['Position']}'>{$result['Position']}</option>
		<option value='Financial Adviser'>Financial Adviser</option>
		<option value='Unit Manager'>Unit Manager</option>
		<option value='Branch Head'>Branch Head</option>
		<option value='Zone Head'>Zone Head</option>
	";

	$result['Branch_Name'] = "
		<option selected value='{$result['Branch_ID']}'>{$result['Branch_Name']}</option>
	";
	$result['Zone_No'] = "
		<option selected value='{$result['Zone_No']}'>{$result['Zone_No']}</option>
		$zone
	";

	echo json_encode($result);
}

if ($_GET) {
	$result = $con->query("
		SELECT * FROM tb_users AS u
		JOIN tb_branch AS b
		ON u.branch_id = b.branch_id
		WHERE employee_code = '{$_GET["id"]}' 
		LIMIT 1
	"
	)->fetch_assoc();

	echo json_encode($result);	
}

function formatdate($date) {
  return date_format(date_create($date), "M j, Y");
}
?>