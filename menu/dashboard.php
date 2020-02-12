<?php
session_start();

if ($_SESSION['position'] == "Branch Head" || $_SESSION['position'] == "Zone Head" || $_SESSION['position'] == "Unit Manager") {
  require "../dashboard/Head_Dashboard.php";
} else if ($_SESSION['position'] == "Financial Adviser") {
  require "../dashboard/FinAd_Dashboard.php";
}
?>