<?php 

if($_GET) {
  include_once("../connection.php");

  $query = "
  SELECT * FROM tb_announcements AS a 
  JOIN tb_users AS u 
  ON a.posted_by = u.employee_code 
  WHERE a.subject != 'sale'
  ORDER BY post_date DESC
  ";
  
  $result = $con->query($query);
  $data = array();

  while ($row = $result->fetch_assoc()) {
    $notifs = array();
    array_push(
      $notifs,
      $row['First_Name']." ".$row['Middle_Name']." ".$row['Last_Name'],
      $row['Position'],
      $row['subject'],
      formatdate($row['post_date']),
      "
      <div class='btn-group'>
        <a href='../menu/announcements.php?notif={$row['id']}' class='btn btn-info btn-sm'>
          <i class='fa fa-eye'></i> View
        </a>
        <button type='button' class='btn btn-warning btn-sm edit' id='{$row['id']}'>
          <i class='fa fa-edit'></i> Edit
        </button>
        <button type='button' class='btn btn-danger btn-sm delete' id='{$row['id']}'>
          <i class='fa fa-times'></i> Delete
        </button>
      </div>
      "
    );

    $data[] = $notifs;
  }    
  echo json_encode(array("data" => $data));
  exit();
}

function formatdate($date) {
  $date = date_create($date);
  return date_format($date, "M j, Y @ g:i A");
}

function trimmsg($msg) {
  if(strlen($msg) > 25) {
    return substr($msg, 0, 25)."...";
  }
  return $msg;
}

?>
