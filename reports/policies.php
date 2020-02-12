<?php
require '../connection.php';

$sort = " ORDER BY {$_POST['sort']} ";

$result = $con->query("
	SELECT * FROM tb_policies
	$sort
  {$_POST['order']}
");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Policies</title>
	<link rel="icon" href="../assets/img/fav-icon.ico" type="image/x-icon">
	<!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <div class="content-header">
    <div class="row mb-2">
    	<img src="../assets/img/axa.png" alt="" class="brand-image img-circle img-fluid">
      <h1>Policies</h1>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid p-1">
      <div class="table-responsive small">
        <table class="table table-striped table-sm table-bordered">
          <thead class="bg-navy text-center">
          	<th>Policy ID</th>
          	<th>Policy Name</th>
          	<th>Year 1 Rate</th>
          	<th>Year 2 Rate</th>
            <th>Year 3 Rate</th>
            <th>Year 4 Rate</th>
            <th>Year 5 Rate</th>
          </thead>
          <tbody>
          	<?php while ($row = $result->fetch_assoc()) { ?>
          		<tr>
          			<td><?=$row['policy_id']?></td>
          			<td><?=$row['policy_name']?></td>
          			<td><?=$row['comm_rate_yr1']?></td>
          			<td><?=$row['comm_rate_yr2']?></td>
                <td><?=$row['comm_rate_yr3']?></td>
                <td><?=$row['comm_rate_yr4']?></td>
                <td><?=$row['comm_rate_yr5']?></td>
          		</tr>
          	<?php }?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Pace JS -->
<script src="../AdminLTE/plugins/pace/pace.js"></script>

</body>
</html>