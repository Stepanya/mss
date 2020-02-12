<?php

include_once("../connection.php");

$id = $_GET['notif'];

$query = "
SELECT * FROM tb_announcements AS a 
JOIN tb_users AS u 
ON a.posted_by = u.employee_code
WHERE id = $id 
ORDER BY post_date DESC
";

$row = $con->query($query)->fetch_assoc();

$name = "{$row['First_Name']} {$row['Middle_Name']} {$row['Last_Name']}";

$timestamp = formatdate($row['post_date']);

function formatdate($date) {
  $date = date_create($date);
  return date_format($date, "M j, Y @ g:i A");
}
?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Announcements</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item active">Announcements</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Main content -->
  <div class="content">
  	<div class="container-fluid p-1">
      <div class="card">
        <div class="card-header bg-navy">
          <h5 class="card-title">
            <i class="fa fa-bullhorn"></i> View Announcement
          </h5>
        </div>
        <div class="card-body table-responsive">
          <div class="mailbox-read-info">
            <h5><b><?=$row['subject']?></b></h5>
            <h6>From: <?=$name?> (<b><?=$row['Position']?></b>)
              <span class="mailbox-read-time float-right"><?=$timestamp?></span></h6>
          </div>
          <div class="mailbox-read-message">
            <?=$row['message']?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>