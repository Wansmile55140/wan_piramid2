<?php
session_start();
if($_POST["u"] ==  "bb" && $_POST["p"] == "bb") { 
$_SESSION["pass"] = "yes"; 
  header('Location: myweb.php');

}else { 
   header('Location: loginpage.php');
}
?>