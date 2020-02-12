<?php
include "../../connection.php";

$result = $con->query("SELECT DISTINCT Zone_No FROM tb_branch");

$output = "";

while ($row = $result->fetch_assoc()) {
	$output .= "<option value='{$row['Zone_No']}'>{$row['Zone_No']}</option>";
}
echo $output;	

?>