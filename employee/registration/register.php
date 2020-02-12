<?php 
if ($_POST) {
	session_start();
	require '../../connection.php';
	require '../../activity_logs/activity_log.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mi = $_POST['mi']; 
	$employee_code = $_POST['employee_code'];
	$password = password_hash($_POST['password'], PASSWORD_BCRYPT, array("cost" => 12)); 
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$birthdate = $_POST['birthdate']; 
	$hiredate = $_POST['hiredate']; 
	$position = $_POST['position'];
	$branch = $_POST['branch']; 
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	$emp_status = $_POST['emp_status'];

	$query = "

	INSERT INTO tb_users
		(Employee_Code, First_Name, Last_Name, Middle_Name, Email, Gender, Address, Contact, Birthday, Password, Position, Branch_ID, Status, Hire_Date)
	VALUES 
		('$employee_code','$fname','$lname','$mi','$email','$gender','$address', '$contact', '$birthdate','$password','$position','$branch','$emp_status', '$hiredate')

	";
	
	$result = $con->query($query);

	if ($result) {
		$desc = "Employee with the employee code: <b>$employee_code</b> has been registered";
        logAction($con, 'Registration', $_SESSION['user_id'], $desc); 
		echo json_encode("Employee has been registered");
	} else
		echo "Something went wrong please try again later";
}

?>