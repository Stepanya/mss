<?php
require '../connection.php';

$pos = ($_POST['pos'] == ''? '': "AND Position = '{$_POST['pos']}'");
$gen = ($_POST['gen'] == ''? '': "AND Gender = '{$_POST['gen']}'");
$stat = ($_POST['stat'] == ''? '': "AND Status = '{$_POST['stat']}'");
$zone = ($_POST['zone'] == ''? '': "AND Zone_No = {$_POST['zone']}");
$branch = ($_POST['branch'] == ''? '': "AND Branch_ID = {$_POST['branch']}");
$sort = " ORDER BY u.{$_POST['sort']}";

$result = $con->query("
	SELECT * FROM tb_users AS u
	JOIN tb_branch AS b
	ON u.Branch_ID = b.Branch_ID
	WHERE 1
  $pos
  $gen
  $stat
  $zone
  $branch
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
	<title>Employee Report</title>
	<link rel="icon" href="../assets/img/fav-icon.ico" type="image/x-icon">
	<!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <div class="content-header">
    <div class="row mb-2">
    	<img src="../assets/img/axa.png" alt="" class="brand-image img-circle img-fluid">
      <h1>Employee Report</h1>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid p-1">
      <div class="table-responsive text-center small">
        <table class="table table-striped table-sm table-bordered">
          <thead class="bg-navy">
          	<th>Employee Code</th>
          	<th>Name</th>
          	<th>Position</th>
            <th>Status</th>
          	<th>Email</th>
            <th>Gender</th>
          	<th>Address</th>
            <th>Contact No.</th>
          	<th>Birthdate</th>
            <th>Hire Date</th>
            <th>Zone No.</th>
            <th>Branch</th>
          </thead>
          <tbody>
          	<?php while ($row = $result->fetch_assoc()) { 
          		$name = "{$row['First_Name']} {$row['Middle_Name']} {$row['Last_Name']}";
          	?>
          		<tr>
          			<td><?=$row['Employee_Code']?></td>
          			<td><?=$name?></td>
          			<td><?=$row['Position']?></td>
          			<td><?=$row['Status']?></td>
          			<td><?=$row['Email']?></td>
          			<td><?=$row['Gender']?></td>
          			<td class="small"><?=$row['Address']?></td>
          			<td><?=$row['Contact']?></td>
          			<td><?=formatdate($row['Birthday'])?></td>
                <td><?=formatdate($row['Hire_Date'])?></td>
                <td><?=$row['Zone_No']?></td>
                <td><?=$row['Branch_Name']?></td>
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