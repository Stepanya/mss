<?php

session_start();
require '../connection.php';
require '../activity_logs/activity_log.php';

$password = '';

if ($_POST['password'] != "") {
	$password = ",password = '".password_hash($_POST['password'], PASSWORD_BCRYPT, array("cost" => 12))."'"; 
}

$result = $con->query("
	UPDATE tb_users
	SET First_Name = '{$_POST["fname"]}',
		Last_Name = '{$_POST["lname"]}',
		Middle_Name = '{$_POST["mi"]}',
		Email = '{$_POST["email"]}',
		Address = '{$_POST["address"]}',
		Gender = '{$_POST["gender"]}',
		Contact = '{$_POST["contact"]}',
		Birthday = '{$_POST["birthdate"]}',
		Hire_Date = '{$_POST["hiredate"]}',
		Status = '{$_POST["emp_status"]}',
		Position = '{$_POST["position"]}',
		Branch_ID = '{$_POST["branch"]}'
		$password
	WHERE Employee_Code = '{$_POST["id"]}'
");

if($con->affected_rows == 0){
	echo json_encode("No changes were made");
} elseif($result) {	
	$desc = "Employee with the employee code: <b>".$_POST['id']."</b> was updated";
    logAction($con, 'Update', $_SESSION['user_id'], $desc);
	echo json_encode("Employee Updated");
} else
	echo "Something went wrong, try again later.";
?>