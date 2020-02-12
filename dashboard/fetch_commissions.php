<?php
session_start();
include "../connection.php";

$months = getMonths();
$years = getYears();
$employees = getEmployees($con);

$emp_code = " AND s.employee_code = '{$_SESSION['user_id']}'";
$yr = date('Y');
$month = date('M');
$last_day = date("t" , strtotime(date('M'))); 
$legend = "Expected commissions of {$_SESSION['full_name']} in $month of $yr";

if ($_POST) {
	$yr = $_POST['year'];
	$month = $_POST['month'];
	$emp_code = ($_POST['employee'] == "all" ? "" : " AND s.employee_code = '{$_POST['employee']}'");
}

$query = "
  SELECT 
  	*, 
  	DATE_FORMAT(c.date_expected, '%e') AS day,
  	CONCAT(u.First_Name, ' ', u.Middle_Name, ' ', u.Last_Name) AS name,
  	(SELECT commission_amount * 12) AS total
  FROM tb_sales AS s 
  JOIN tb_commission AS c 
  ON c.sales_id = s.sales_id 
  JOIN tb_policies AS p 
  ON p.policy_id = s.policy_id 
  JOIN tb_users AS u
  ON u.employee_code = s.employee_code
  WHERE DATE_FORMAT(c.date_expected, '%b') = '$month' 
  $emp_code 
  AND YEAR(c.date_expected) = '$yr'
 ";

$result = $con->query($query);

$days_data = array();
$days = array();

for ($i = 1; $i <= $last_day; $i++) { 
  $days_data = toAssoc($days_data, $i, 0);
  $days[] = $i;
}

$total = 0;
$table = array(); 
$box = $name = $total_yr = "";

while ($row = $result->fetch_assoc()) {

  $total += $row['commission_amount'];
  $total_yr = $row['total'];
  $days_data[$row['day']] += $row['commission_amount'];
  $legend = ($emp_code == "" ? "Expected commissions of all employees in $month of $yr": "Expected commissions of {$row['name']} in $month of $yr");
  $name = $row['name'];

  $sub_array = array(
  	formatdate($row['date_sold']),
	formatdate($row['date_expected']),
	"<h5>
		<span class='badge badge-success'>Php
    		".number_format($row['commission_amount'], 2)."
      	</span>
    </h5>",
	$row['policy_name'],
	$row['payment_plan'],
	"<h5>
		<span class='badge badge-success'>Php
      		".number_format($row['payment_amount'], 2)."
      	</span>
    </h5>",
    "<h5>
		<span class='badge badge-success'>Php
      		".number_format($row['commission_amount'] * 12, 2)."
      	</span>
    </h5>"
  );

  $table[] = $sub_array;
}

if ($result->num_rows != 0) {
	$box = "$name's Total commission in $month of $yr - ₱ ".number_format($total, 2)
	."<br>$name's Total commission in $yr - ₱ ".number_format($total_yr, 2);
} else
	$legend = "No available data to show.";

$ouput = array(
	'months' => $months,
	'years' => $years,
	'employees' => $employees,
	'legend' => $legend,
	'days' => array_values($days),
	'data' => array_values($days_data),
	'table' => $table,
	'box' => $box
);

echo json_encode($ouput);
exit();

function toAssoc($array, $key, $value) {
  $array[$key] = $value;
  return $array;
}

function getMonths() {
	$list = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
	$months = "";
	for($i=0; $i<=11; $i++){
	  $months .= "
	    <option value='{$list[$i]}' ".($list[$i] == date('M')? "selected":'').">{$list[$i]}</option>
	  ";
	}
	return $months;
}

function getYears() {
	$years = "";
	for( $i = 2015; $i <= 2065; $i++){
      $years .= "<option value='$i' ".($i == date('Y')? "selected" : "").">$i</option>";
  }
  return $years;
}

function getEmployees($con) {
	$employees = "<option selected disabled value>--Select Employee--</option>".
				 '<option value="all">All Employees</option>';

	$result = $con->query("SELECT * FROM tb_users");

	while ($row = $result->fetch_assoc()) {
		$name = "{$row['First_Name']} {$row['Middle_Name']} {$row['Last_Name']}";
		$employees .= "<option value='{$row['Employee_Code']}'>$name</option>";
	}
	return $employees; 
}


function formatdate($date) {
	$date = date_create($date);
	return date_format($date, "M j, Y");
}
?>
