<?php
include "../connection.php";


$query = "
	SELECT 
		(SELECT COUNT(stage) FROM tb_applicants WHERE stage = 'resume review') AS a,
		(SELECT COUNT(stage) FROM tb_applicants WHERE stage = 'interview') AS b,
		(SELECT COUNT(stage) FROM tb_applicants WHERE stage = 'ADD') AS c,
		(SELECT COUNT(stage) FROM tb_applicants WHERE stage = 'Arise') AS d,
		(SELECT COUNT(stage) FROM tb_applicants WHERE stage = 'Training') AS e,
		(SELECT COUNT(stage) FROM tb_applicants WHERE stage = 'ICE') AS f,
		(SELECT COUNT(stage) FROM tb_applicants WHERE stage = 'encoded') AS g,
		(SELECT COUNT(stage) FROM tb_applicants WHERE stage = 'No Hire') AS h
";
$row = $con->query($query)->fetch_assoc();
echo $con->error;
$row = array($row['a'], $row['b'], $row['c'], $row['d'], $row['e'], $row['f'], $row['g'], $row['h']);

echo json_encode($row);
exit();

?>