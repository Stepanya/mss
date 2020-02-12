<?php
include('../connection.php');
if($_POST) {

	$policy = "";
	$result = $con->query("SELECT policy_id, policy_name FROM tb_policies");
	while ($row = $result->fetch_assoc()) {
		$policy .= "
			<option value='{$row['policy_id']}'>{$row['policy_name']}</option>
		";
	}

	$result = $con->query("
		SELECT * FROM tb_sales AS s
		JOIN tb_users AS u
		ON u.employee_code = s.employee_code
		JOIN tb_policies AS p
		ON p.policy_id = s.policy_id
		JOIN tb_commission AS c
		ON c.sales_id = s.sales_id
		WHERE s.sales_id = '{$_POST["id"]}' 
		LIMIT 1
	"
	)->fetch_assoc();

	$result['sold_by'] = ucwords("{$result['First_Name']} {$result['Middle_Name']} {$result['Last_Name']}");
	$result['v_date_sold'] = formatdate($result['date_sold']);
	$result['v_end_date'] = formatdate($result['end_date']);
	$result['v_next_payment'] = formatdate($result['next_payment_date']);

	$result['e_policy'] = "
		<option value='{$result['policy_id']}'>{$result['policy_name']}</option>
		$policy
	";
	
	$result['e_plan'] = "
		<option value='{$result['payment_plan']}'>{$result['payment_plan']}</option>
		<option value='Monthly'>Monthly</option>
		<option value='Quarterly'>Quarterly</option>
		<option value='Semi-annual'>Semi-annual</option>
		<option value='Annual'>Annual</option>
	";

	echo json_encode($result);
}

function formatdate($date) {
  return date_format(date_create($date), "M j, Y");
}
?>

