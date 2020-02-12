<?php
include "../connection.php";

$year = date('Y');
$empcode = $polid = $polname = $empname = "";

$legend = "Total sales in $year.";
$query = "SELECT *, DATE_FORMAT(date_sold, '%b') AS month FROM tb_sales WHERE YEAR(date_sold) = $year";

if ($_POST) {
	$year = $_POST['year'];
	$empcode = ($_POST['employee'] == "all" ? "" : " AND s.employee_code = '{$_POST['employee']}'");
	$polid = ($_POST['policy'] == "all" ? "" : " AND s.policy_id = {$_POST['policy']}");

	$query = "
		SELECT *,DATE_FORMAT(date_sold, '%b') AS month 
		FROM tb_sales AS s
		JOIN tb_users AS u
		ON s.employee_code = u.employee_code
		JOIN tb_policies AS p
		ON s.policy_id = p.policy_id
		WHERE YEAR(date_sold) = $year 
		$empcode
		$polid
	";
}

$months = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
$monthsdata = array(
	"Jan" => 0, 
	"Feb" => 0,
	"Mar" => 0, 
	"Apr" => 0,
	"May" => 0, 
	"Jun" => 0,
	"Jul" => 0, 
	"Aug" => 0,
	"Sep" => 0, 
	"Oct" => 0,
	"Nov" => 0, 
	"Dec" => 0
);

$result = $con->query($query);

$count=0;

if ($result->num_rows != 0) {
	while ($row = $result->fetch_assoc()) {
		$monthsdata[$row['month']] += 1;
		$count += 1;
		if ($_POST) {
			if ($_POST['employee'] != "all") { 
				$legend = "Sales by {$row['First_Name']} {$row['Middle_Name']} {$row['Last_Name']}  in $year.";
			} 
			if ($_POST['policy'] != "all") { 
				$legend = "All sales made with {$row['policy_name']} in $year.";
			} 
			if ($_POST['policy'] != "all" && $_POST['employee'] != "all") {
				$legend = "Sales by {$row['First_Name']} {$row['Middle_Name']} {$row['Last_Name']} with {$row['policy_name']} in $year.";
			}

		}
	}
} else {
	$legend = "No available data to show.";
}

$policies = getPolicies($con);
$employees = getEmployees($con);
$years = getYears();

$output = array(
	'years' => $years,
	'employees' => $employees,
	'policies' => $policies,
	'legend' => $legend,
	'months' => $months,
	'data' => array_values($monthsdata)
);

echo json_encode($output);
exit();

function getPolicies($con) {

	$policies = '<option selected value="">--Select Policies--</option>'.
				'<option value="all">All Policies</option>';

	$result = $con->query("SELECT * FROM tb_policies");

	while ($row = $result->fetch_assoc()) {
		$policies .="<option value='{$row['policy_id']}'>{$row['policy_name']}</option>";
	}
	return $policies;
}

function getEmployees($con) {
	$employees = '<option selected value="">--Select Employee--</option>'.
				 '<option value="all">All Employees</option>';

	$result = $con->query("SELECT * FROM tb_users");

	while ($row = $result->fetch_assoc()) {
		$name = "{$row['First_Name']} {$row['Middle_Name']} {$row['Last_Name']}";
		$employees .= "<option value='{$row['Employee_Code']}'>$name</option>";
	}
	return $employees; 
}

function getYears() {
	$years = "";
	for( $i = 2015; $i <= 2065; $i++){
      $years .= "<option value='$i' ".($i == date('Y')? "selected" : "").">$i</option>";
  }
  return $years;
}
?>