<?php
// Start the session
session_start();
$_SESSION["r1"] = rand ( 1 , 6 );
$_SESSION["r2"] = rand ( 1 , 6 );
$_SESSION["r3"] = rand ( 1 , 6 );
$_SESSION["r4"] = rand ( 1 , 6 );
$_SESSION["r5"] = rand ( 1 , 6 );
$_SESSION["playername"] = $_SESSION["doac"] = $_SESSION["dotw"] = $_SESSION["doth"] = $_SESSION["dofo"] = $_SESSION["dofi"] = $_SESSION["dosi"] = $_SESSION["dots"] = $_SESSION["dobo"] = $_SESSION["dotu"] = $_SESSION["do3o"] = $_SESSION["do4o"] = $_SESSION["dofh"] = $_SESSION["doss"] = $_SESSION["dols"] = $_SESSION["doya"] = $_SESSION["doch"] = $_SESSION["doyb"] = 0;




?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<title>play</title>
</head>
<body>
<div>
<h1>WELCOME</h1>
</div>
  <h2>Geek's Yahtzee</h2> 

<form action="play.php" method="post"> 
<input type="hidden" name="isstart" value="1" >
Enter name: <input type="text" name="playername" value="">
<br>
<input type='submit' value='Click to Play'>
</form>
</body>
</html>
