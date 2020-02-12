<?php
require '../connection.php';

$amount = "";

$amount_arr = explode(';', $_POST['amount']);

if ($amount_arr[0] != 0 || $amount_arr[1] != 0) {
  $amount = " AND commission_amount BETWEEN {$amount_arr[0]} AND {$amount_arr[1]}";
}

$yr = ($_POST['yr'] == ''? '': " AND YEAR(date_expected) = {$_POST['yr']}");
$month = ($_POST['month'] == ''? '': " AND MONTH(date_expected) = {$_POST['month']}");
$day = ($_POST['day'] == ''? '': " AND DAY(date_expected) = {$_POST['day']}");
$policy = ($_POST['policy'] == ''? '': " AND c.policy_id = '{$_POST['policy']}'");
$plan = ($_POST['plan'] == ''? '': " AND p.payment_plan = '{$_POST['plan']}'");
$emp = ($_POST['emp'] == ''? '': " AND c.employee_code = '{$_POST['emp']}'");
$sort = " ORDER BY {$_POST['sort']}";

$result = $con->query("
	SELECT * FROM tb_commission AS c
  JOIN tb_sales AS s
  ON c.sales_id = s.sales_id
	JOIN tb_users AS u
	ON c.employee_code = u.employee_code
  JOIN tb_policies AS p
  ON c.policy_id = p.policy_id
	WHERE 1
	$yr
	$month
	$day
  $policy
  $plan
  $amount
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
	<title>Commission Report</title>
	<link rel="icon" href="../assets/img/fav-icon.ico" type="image/x-icon">
	<!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <div class="content-header">
    <div class="row mb-2">
    	<img src="../assets/img/axa.png" alt="" class="brand-image img-circle img-fluid">
      <h1>Commisssion Report</h1>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid p-1">
      <div class="table-responsive text-center">
        <table class="table table-striped table-sm table-bordered small">
          <thead class="bg-navy">
          	<th>Employee</th>
          	<th>Date Sold</th>
          	<th>Date Expected</th>
          	<th>Expected Amount</th>
            <th>Annual Expected Amount</th>
            <th>Policy</th>
          	<th>Payment Method</th>
          	<th>Annual Premium</th>
          </thead>
          <tbody>
          	<?php while ($row = $result->fetch_assoc()) { 
          		$emp = "{$row['First_Name']} {$row['Middle_Name']} {$row['Last_Name']}";
          	?>
          		<tr>
          			<td><?=$emp?></td>
                <td><?=formatdate($row['date_sold'])?></td>
                <td><?=formatdate($row['date_expected'])?></td>
                <td><?='₱'.number_format($row['commission_amount'], 2)?></td>
                <td><?='₱'.number_format($row['commission_amount'] * 12, 2)?></td>
          			<td><?=$row['policy_name']?></td>
                <td><?=$row['payment_plan']?></td>
                <td><?='₱'.number_format($row['payment_amount'], 2)?></td>
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