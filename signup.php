<?php
include("dbconnect.php");
session_start();
$_SESSION['message'] = '';

if(!isset($_SESSION['username'])){
    header("location:iqac_login.html");
}
?>