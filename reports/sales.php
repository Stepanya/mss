<?php
require '../connection.php';

$amount = $method = "";

$amount_arr = explode(';', $_POST['amount']);
$method_arr = explode(';', $_POST['method']);

if ($amount_arr[0] != 0 || $amount_arr[1] != 0) {
  $amount = " AND payment_amount BETWEEN {$amount_arr[0]} AND {$amount_arr[1]}";
}
if ($method_arr[0] != 0 || $method_arr[1] != 0) {
  $method = " AND payment_per_plan BETWEEN {$method_arr[0]} AND {$method_arr[1]}";
}

$yr = ($_POST['yr'] == ''? '': " AND YEAR(date_sold) = {$_POST['yr']}");
$month = ($_POST['month'] == ''? '': " AND MONTH(date_sold) = {$_POST['month']}");
$day = ($_POST['day'] == ''? '': " AND DAY(date_sold) = {$_POST['day']}");
$policy = ($_POST['policy'] == ''? '': " AND policy_id = '{$_POST['policy']}'");
$plan = ($_POST['plan'] == ''? '': " AND payment_plan = '{$_POST['plan']}'");
$emp = ($_POST['emp'] == ''? '': " AND s.employee_code = '{$_POST['emp']}'");
$sort = " ORDER BY s.{$_POST['sort']}";

$result = $con->query("
	SELECT * FROM tb_sales AS s
	JOIN tb_users AS u
	ON s.employee_code = u.employee_code
  JOIN tb_policies AS p
  ON s.policy_id = p.policy_id
	WHERE 1
	$yr
	$month
	$day
  $policy
  $plan
  $amount
	$method
	$emp
	$sort
");

function formatdate($date) {
	$date = date_create($date);
	return date_format($date, "M j, Y");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Sales Report</title>
	<link rel="icon" href="../assets/img/fav-icon.ico" type="image/x-icon">
	<!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <div class="content-header">
    <div class="row mb-2">
    	<img src="../assets/img/axa.png" alt="" class="brand-image img-circle img-fluid">
      <h1>Sales Report</h1>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid p-1">
      <div class="table-responsive text-center">
        <table class="table table-striped table-sm table-bordered small">
          <thead class="bg-navy">
          	<th>Client Name</th>
          	<th>Contact No.</th>
          	<th>Email</th>
          	<th>Policy</th>
            <th>Annual Premium</th>
          	<th>Payment Method</th>
          	<th>Payment Per Method</th>
          	<th>Date Sold</th>
            <th>End Date</th>
            <th>Next Due Date</th>
          	<th>Sold By</th>
          </thead>
          <tbody>
          	<?php while ($row = $result->fetch_assoc()) { 
          		$name = "{$row['client_first_name']} {$row['client_last_name']}";
          		$emp = "{$row['First_Name']} {$row['Middle_Name']} {$row['Last_Name']}";
          	?>
          		<tr>
          			<td><?=$name?></td>
          			<td><?=$row['client_contact_number']?></td>
          			<td><?=$row['client_email']?></td>
          			<td><?=$row['policy_name']?></td>
          			<td><?='₱'.number_format($row['payment_amount'], 2)?></td>
          			<td><?=$row['payment_plan']?></td>
          			<td><?='₱'.number_format($row['payment_per_plan'], 2)?></td>
                <td><?=formatdate($row['date_sold'])?></td>
                <td><?=formatdate($row['end_date'])?></td>
                <td><?=formatdate($row['next_payment_date'])?></td>
          			<td><?=$emp?></td>
          		</tr>
          	<?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<style type="text/css">
  
  @media print {
  	@page { size: landscape; }
	}
</style>

<!-- Pace JS -->
<script src="../AdminLTE/plugins/pace/pace.js"></script>

</body>
</html>