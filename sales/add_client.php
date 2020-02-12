<?php 
if ($_POST) {
	session_start();
	require '../connection.php';
	require '../activity_logs/activity_log.php';

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$policy = $_POST['policy'];
	$amount = preg_replace("/[^0-9.]/", "", $_POST['amount']);
	$plan = $_POST['plan']; 
	$total = preg_replace("/[^0-9.]/", "", $_POST['total']); 
	$sold = $_POST['sold']; 
	$end = $_POST['end'];

	$sales_query = "
		SELECT * FROM tb_sales 
		WHERE client_contact_number = '$contact'  
		AND client_email = '$email' 
		AND client_first_name = '$fname'
		AND client_last_name = '$lname'
		AND CURDATE() < end_date
		AND policy_id = $policy
	";

	$result = $con->query($sales_query);

    if ($result->num_rows == 1) {
        echo "The client currently has a payment plan with the same policy";
        exit();
    }

    $next_payment="";

    if ($plan == "Monthly") {
    	$next_payment = addMonths(1, $sold);
    } elseif ($plan == "Quarterly") {
    	$next_payment = addMonths(4, $sold);
    } elseif ($plan == "Semi-annual") {
    	$next_payment = addMonths(6, $sold);
    } elseif ($plan == "Annual") {
    	$next_payment = addMonths(12, $sold);
    }

	$query = "

	INSERT INTO tb_sales
		(
		client_first_name, 
		client_last_name, 
		client_contact_number, 
		client_email, 
		policy_id, 
		payment_plan, 
		payment_amount, 
		payment_per_plan, 
		date_sold, 
		end_date, 
		next_payment_date, 
		employee_code
		)
	VALUES 
		(
		'$fname',
		'$lname',
		'$contact',
		'$email',
		'$policy', 
		'$plan',
		'$amount', 
		'$total',
		'$sold',
		'$end',
		'$next_payment',
		'{$_SESSION['user_id']}'
		)
	";

	$result = $con->query($query);

	if (!$result) {
		echo "Something went wrong please try again later";
		exit();
	}

	$result = $con->query("
		SELECT * FROM tb_policies 
		WHERE policy_id = $policy 
		LIMIT 1
	")->fetch_assoc();

	$today = date('Y-m-d');
	$expected_date = $comm_amount = "";

	if ($plan == "Monthly") $plan = 12;
	elseif ($plan == "Quarterly") $plan = 4;
	elseif ($plan == "Semi-annual") $plan = 2;
	elseif ($plan == "Annual") $plan = 1;

	$yr1 = $result['comm_rate_yr1'];
    $yr2 = $result['comm_rate_yr2'];
    $yr3 = $result['comm_rate_yr3'];
    $yr4 = $result['comm_rate_yr4'];
    $yr5 = $result['comm_rate_yr5'];
    
    if($today <= date('Y-m-d',strtotime($sold.' +1 year'))) {
		
		$expected_date = getExpectedDate($sold, $plan);
		$comm_amount = ( $amount * ( $yr1 / 100 ) ) / $plan;

    } elseif($today <= date('Y-m-d',strtotime($sold.' +2 year'))) {
        
    	$expected_date = getExpectedDate($sold, $plan);
        $comm_amount = ( $amount * ( $yr2 / 100 ) ) / $plan;

    } elseif($today <= date('Y-m-d',strtotime($sold.' +3 year'))) {

    	$expected_date = getExpectedDate($sold, $plan);
        $comm_amount = ( $amount * ( $yr3 / 100 ) ) / $plan;


    } elseif($today <= date('Y-m-d',strtotime($sold.' +4 year'))) {

    	$expected_date = getExpectedDate($sold, $plan);
        $comm_amount = ( $amount * ( $yr4 / 100 ) ) / $plan;

    } elseif($today <= date('Y-m-d',strtotime($sold.' +5 year'))) {

    	$expected_date = getExpectedDate($sold, $plan);
        $comm_amount = ( $amount * ( $yr5 / 100 ) ) / $plan;
    }

    $result = $con->query($sales_query)->fetch_assoc();
    $sales_id = $result['sales_id'];
    
    $result = $con->query("
    	INSERT INTO tb_commission
    		(sales_id, policy_id, commission_amount, date_expected, employee_code)
    	VALUES
    		('$sales_id', '$policy', '$comm_amount', '$expected_date', '{$_SESSION['user_id']}')
    ");

	if ($result) {
		$desc = "Client: <b>$fname $lname</b> has been added";
        logAction($con, 'Add', $_SESSION['user_id'], $desc);
        addSale($con); 
		echo json_encode("Client has been added");
	} else
		echo "Something went wrong please try again later";
} 

function addSale($con) {
    $query = "
    INSERT INTO tb_announcements
        (posted_by, subject, message)
    VALUES
        ('{$_SESSION['user_id']}','Sale', '{$_SESSION['full_name']} made a sale.')
    ";
    $con->query($query);
}

function addMonths($m, $date) {
	return date('Y-m-d', strtotime("+$m months", strtotime($date)));
}

function getExpectedDate($date_sold, $plan) {
	$addString = "";
	if ($plan == 12) 
		$addString = "+1 months";
	elseif ($plan == 4) 
		$addString = "+4 months";
	elseif ($plan == 2) 
		$addString = "+6 months";
	elseif ($plan == 1)
		$addString = "+1 year";

	return date('Y-m-d', strtotime($addString, strtotime($date_sold)));
}
?>