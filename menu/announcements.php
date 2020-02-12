<?php 
include "include/header.php";
include "include/sidebar.php";

$pos = $_SESSION['position'];

if(isset($_GET['notif'])) {
    include '../announcements/view.php';
} elseif ($pos == "Zone Head" || $pos == "Branch Head") {
    include '../announcements/list.php';
}

include "include/footer.php";
?>