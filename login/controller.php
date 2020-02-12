<?php
session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

if($_POST) {

  $code = $_POST['code'];
  $password = $_POST['password'];

  $result = $con->query("
    SELECT * FROM tb_users WHERE employee_code = '$code'
  ")->fetch_assoc();

  if (password_verify($password, $result['Password'])) {

    $_SESSION['position'] = $result['Position'];
    $_SESSION['hire_date'] = $result['Hire_Date'];
    $_SESSION['full_name'] = ucwords("{$result['First_Name']} {$result['Middle_Name']} {$result['Last_Name']}");
    $_SESSION['fname'] = $result['First_Name'];
    $_SESSION['mname'] = $result['Middle_Name'];
    $_SESSION['lname'] = $result['Last_Name'];
    $_SESSION['user_id'] = $result['Employee_Code'];
    logAction($con, 'Login', $result['Employee_Code'], '');
          
    echo json_encode("Welcome ".$_SESSION['full_name']);

  } else 
    echo "Employee Code or Password is incorrect";
  
}
?>