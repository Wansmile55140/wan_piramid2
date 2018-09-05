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
 header('Location: ../loginpage.php');exit;
 }

 include ("bb.php");?>
<?php
for($wanA=0;$wanA<=4;$wanA++) {

	echo($wanA+1);

	echo("*");

	for($wanB=1;$wanB<=1;$wanB++){
		echo($wanB+$wanA+$wanA);
	}

	echo("*");

	for($wanB=2;$wanB<=2;$wanB++){
		echo($wanB+$wanA+$wanA);
	}
	echo "<br/>";
}
include ('myweb_footer.php'myweb_footer.php');
?>