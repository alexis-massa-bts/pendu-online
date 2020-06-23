<?php
session_start();
if (!isset($_SESSION['UserName'])) {
    header("location:index.php");
}
?>