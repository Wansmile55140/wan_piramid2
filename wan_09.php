<head>
<title>WAN</title></head>
<body bgcolor=>
<table width=100% bgcolor=pink><tr><td>
<span style="font-size:30px;">Hello</span>
</td></tr></table>
<table width=100% bgcolor=#dddddd><tr>
<td><a href='../myweb.php'>home</a></td>
<td><a href='../multi_form.php'>multiple</a></td>
<td><a href='../friend.php'>friend</a></td>
<td><a href='../me.php'>about us</a></td>
<td><a href="../logout.php">logout</a></td>
</tr></table>
<body>
<?php
 session_start();
 if(!isset($_SESSION["pass"]) ||$_SESSION["pass"] != "yes") {
 header('Location: ../login_page.php');exit;
 }
include ("bb.php");

for($wanA=1;$wanA<=5;$wanA++) {
	for($wanB=3;$wanB<=1+$wanA;$wanB++) {
	echo(".");
	}
	for($wanB=0;$wanB<=5-$wanA;$wanB++){
		echo($wanA);
	}
	for($wanB=0;$wanB<=4-$wanA;$wanB++){
		echo($wanA);
	}
	echo "<br/>";
}
include ('myweb_footer.php');
?>