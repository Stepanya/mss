<?php
session_start();
include '../connection.php';

$year = date("Y");
$clause = "";
$id = $_SESSION['user_id'];

if ($_SESSION['position'] == "Financial Adviser") {
	$clause = "AND employee_code = '$id'";
}

$result = $con->query("
  SELECT 
  	(SELECT COUNT(applicant_id) FROM tb_applicants) AS apps,
  	(SELECT COUNT(sales_id) FROM tb_sales WHERE YEAR(date_sold) = $year $clause) AS sales,
  	(SELECT SUM(payment_amount) FROM tb_sales WHERE YEAR(date_sold) = $year) AS revenue,
  	(SELECT SUM(commission_amount) FROM tb_commission WHERE employee_code = '{$_SESSION['user_id']}') AS comm
")->fetch_assoc();


$result['revenue'] = '<sup>&#8369;</sup>'.number_format(sprintf('%0.2f', $result['revenue']), 2);
$result['comm'] = '<sup>&#8369;</sup>'.number_format($result['comm'], 2);

echo json_encode($result);
?>