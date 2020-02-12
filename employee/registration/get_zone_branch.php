<?php
if(isset($_POST['id'])) {
    require '../../connection.php';

    $id = $_POST['id'];
    $zone_head = "";
    $branch = "<option selected value=''>--Optional--</option>";

    $result = $con->query("
    	SELECT * FROM tb_branch WHERE zone_no = $id
    ");
   	
    while ($row = $result->fetch_assoc()) {
    	$zone_head = $row['Zone_Head'];
    	$branch .= "<option selected value='{$row['Branch_ID']}'>{$row['Branch_Name']}</option>";
    }

    echo json_encode( array(
    	'zoneHead' => $zone_head,
    	'branch' => $branch, 
    ));

}
?>