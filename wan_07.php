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
include ("bb.php");

for($wanA=1;$wanA<=7;$wanA++) {
	for($wanB=0;$wanB<=7-$wanA;$wanB++) {
	echo(".");
	}
	for($wanB=1;$wanB<=1;$wanB++){
		echo($wanB);
	}
	for($wanB=3;$wanB<=1+$wanA;$wanB++){
		echo($wanB-1);
	}

		echo($wanA);

	for($wanB=$wanA;$wanB>=1;$wanB--){
		echo($wanB);
	}

	echo "<br/>";
}
include ('myweb_footer.php');
?>