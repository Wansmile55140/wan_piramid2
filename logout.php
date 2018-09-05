<?php
session_start();
$_SESSION["pass"] = "no";
header("location:loginpage.php");
?>