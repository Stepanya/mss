<?php
if(isset($_POST['id'])) {
    require '../../connection.php';

    $id = $_POST['id'];
    $zone_head = $branch = "";

    $row = $con->query("
    	SELECT * FROM tb_branch WHERE branch_id = $id
    ")->fetch_assoc();

    echo $row['Branch_Head'];
}
?>