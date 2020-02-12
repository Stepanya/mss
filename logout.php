<?php
ob_start();
session_start();

require 'connection.php';
require 'activity_logs/activity_log.php';

logAction($con, 'Logout', $_SESSION['user_id'], 'This user logged out');

session_destroy();

header("Location: login.php?out");
exit();
?>