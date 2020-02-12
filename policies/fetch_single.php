<?php
include('../connection.php');
if($_POST) {

	$result = $con->query("
		SELECT * FROM tb_policies
		WHERE policy_id = '{$_POST["id"]}' 
		LIMIT 1
	"
	)->fetch_assoc();

	echo json_encode($result);
}
?>