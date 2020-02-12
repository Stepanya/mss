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
	$plan = $_POST['plan']; 
	$amount = preg_replace("/[^0-9.]/", "", $_POST['amount']);
	$total = preg_replace("/[^0-9.]/", "", $_POST['total']); 
	$sold = $_POST['sold']; 
	$end = $_POST['end'];
	$id = $_POST['id'];

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

	UPDATE tb_sales
	SET client_first_name = '$fname', 
		client_last_name = '$lname', 
		client_contact_number = '$contact', 
		client_email = '$email', 
		policy_id = '$policy', 
		payment_plan = '$plan', 
		payment_amount = '$amount', 
		payment_per_plan = '$total', 
		date_sold = '$sold', 
		end_date = '$end', 
		next_payment_date = '$next_payment' 
	WHERE sales_id = $id
	";

	$result = $con->query($query);

	if($con->affected_rows == 0){
		echo json_encode("No changes were made");
		exit();
	} elseif (!$result) {
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
    
    $result = $con->query("
    	UPDATE tb_commission
    	SET commission_amount = '$comm_amount', 
    		date_expected = '$expected_date'
		WHERE sales_id = $id
    ");

	if ($result) {
		$desc = "A sale for: <b>$fname $lname</b> was updated";
        logAction($con, 'Update', $_SESSION['user_id'], $desc);
		echo json_encode("Sale has been updated");
	} else
		echo "Something went wrong please try again later";
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