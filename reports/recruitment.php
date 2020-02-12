<?php
require '../connection.php';

$yr = ($_POST['yr'] == ''? '': " AND YEAR(date_of_application) = {$_POST['yr']}");
$month = ($_POST['month'] == ''? '': " AND MONTH(date_of_application) = {$_POST['month']}");
$day = ($_POST['day'] == ''? '': " AND DAY(date_of_application) = {$_POST['day']}");
$pos = ($_POST['pos'] == ''? '': " AND applying_for = '{$_POST['pos']}'");
$sort = " ORDER BY a.{$_POST['sort']}";

$result = $con->query("
	SELECT * FROM tb_applicants AS a
	JOIN tb_recruitment_tracker AS t
	ON a.applicant_id = t.applicant_id
	WHERE 1
	$yr
	$month
	$day
	$pos
	$sort
");

function formatdate($date) {
	$date = date_create($date);
	return date_format($date, "M j, Y");
}
function getBadge($row) {
    
  $badge = $text = "";
  if ($row === "0") {
    $badge = "warning";
    $text = "Pending";
  } elseif ($row === "1" || $row === "hired") {
    $badge = "success"; 
    $text = "Passed";
  } elseif ($row === "2" || $row === "no hire") {
    $badge = "danger"; 
    $text = "Failed";
  } elseif($row === "N/A") {
    $badge = "dark"; 
    $text = $row;
  } 
  return "<span class='badge bg-$badge'>$text</span>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Recuitment Report</title>
	<link rel="icon" href="../assets/img/fav-icon.ico" type="image/x-icon">
	<!-- Theme style -->
  <link rel="stylesheet" href="../AdminLTE/dist/css/adminlte.min.css">
</head>
<body>
<div class="wrapper">
  <div class="content-header">
    <div class="row mb-2">
    	<img src="../assets/img/axa.png" alt="" class="brand-image img-circle img-fluid">
      <h1>Recruitment Report</h1>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid p-1">
      <div class="table-responsive text-center small">
        <table class="table table-striped table-sm table-bordered">
          <thead class="bg-navy">
          	<th>Applicant ID</th>
          	<th>Name</th>
          	<th>Position</th>
          	<th>Stage</th>
          	<th>Email</th>
          	<th>Contact No.</th>
          	<th>Application Date</th> 
            <th>Resume Review</th>
            <th>Interview</th>
            <th>Seminar</th>
            <th>Arise</th>
            <th>Training</th>
            <th>ICE</th>
            <th>Result</th>
          </thead>
          <tbody>
          	<?php while ($row = $result->fetch_assoc()) { 
          		$name = "{$row['first_name']} {$row['mi']} {$row['last_name']}";
          	?>
          		<tr>
          			<td><?=$row['applicant_id']?></td>
          			<td><?=$name?></td>
          			<td><?=$row['applying_for']?></td>
          			<td><?=$row['stage']?></td>
          			<td><?=$row['email']?></td>
          			<td><?=$row['contact_no']?></td>
          			<td><?=formatdate($row['date_of_application'])?></td>
                <td><?=getBadge($row['resume review'])?></td>
                <td><?=getBadge($row['interview'])?></td>
                <td><?=getBadge($row['seminar'])?></td>
                <td><?=getBadge($row['arise'])?></td>
                <td><?=getBadge($row['training'])?></td>
                <td><?=getBadge($row['ice'])?></td>
                <td><?=getBadge($row['result'])?></td>
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