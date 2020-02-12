<?php

function loadnotifs($con) {

$query = "
    SELECT * FROM tb_announcements AS a 
    JOIN tb_users AS u 
    ON a.posted_by = u.employee_code
    WHERE subject != 'Sale' 
    ORDER BY post_date DESC
";

$result = $con->query($query);
$data = array();

while($row = $result->fetch_assoc()) {
    array_push($data, 
        array(
            "id" => $row['id'],
            "posted_by" => $row['First_Name']." ".$row['Middle_Name']." ".$row['Last_Name'],
            "position" => $row['Position'],
            "subject" => $row['subject'],
            "date" => formatdatenotif($row['post_date'])
        )
    );
  }
  return $data;
}

function loadsales($con) {

$query = "
    SELECT * FROM tb_announcements AS a 
    JOIN tb_users AS u 
    ON a.posted_by = u.employee_code 
    WHERE subject = 'Sale'
    ORDER BY post_date DESC
";

    return $con->query($query); 
}

function formatdatenotif($date) {
    $date = date_create($date);
    return date_format($date, "M j, Y @ g:i A");
}

?>