<?php 
session_start();
if (isset($_POST['playername'])) {$_SESSION["playername"] = $_POST["playername"];}
$isstart = $_POST["isstart"];
if ($isstart == 1) {
$r1 = rand ( 1 , 6 );
$r2 = rand ( 1 , 6 );
$r3 = rand ( 1 , 6 );
$r4 = rand ( 1 , 6 );
$r5 = rand ( 1 , 6 );
}
if ($isstart == 0) {
//pull from session values
$r1 = $_SESSION["r1"];
$r2 = $_SESSION["r2"];
$r3 = $_SESSION["r3"];
$r4 = $_SESSION["r4"];
$r5 = $_SESSION["r5"];

//if (isset


$secondroll = $_POST['ds'];
if(empty($secondroll)) 
{
//echo("You didn't select any buildings.");
} 
else
{
$N = count($secondroll);
//echo("You selected $N die(s): ");
for($i=0; $i < $N; $i++)
{
if ($i == 0 ) {$_SESSION["1a"] = rand ( 1 , 6 );} else {$_SESSION["1a"] = $_SESSION["r1"];}
if ($i == 1 ) {$_SESSION["2a"] = rand ( 1 , 6 );} else {$_SESSION["2a"] = $_SESSION["r2"];}
if ($i == 2 ) {$_SESSION["3a"] = rand ( 1 , 6 );} else {$_SESSION["3a"] = $_SESSION["r3"];}
if ($i == 3 ) {$_SESSION["4a"] = rand ( 1 , 6 );} else {$_SESSION["4a"] = $_SESSION["r4"];}
if ($i == 4 ) {$_SESSION["5a"] = rand ( 1 , 6 );} else {$_SESSION["5a"] = $_SESSION["r5"];}
//echo($secondroll[$i] . " ");
}
}


}





$r1a = $_SESSION["1a"];
$r2a = $_SESSION["2a"];
$r3a = $_SESSION["3a"];
$r4a = $_SESSION["4a"];
$r5a = $_SESSION["5a"];


/*
$finalroll = $_POST['df'];
if(empty($finalroll)) 
{
echo("You didn't select any buildings.");
} 
else
{
$N = count($secondroll);
echo("You selected $N die(s): ");
for($i=0; $i < $N; $i++)
{
if ($i == 0 ) {$_SESSION["1a"] = rand ( 1 , 6 );} else {$_SESSION["1b"] = $_SESSION["r1a"];}
if ($i == 1 ) {$_SESSION["2a"] = rand ( 1 , 6 );} else {$_SESSION["2b"] = $_SESSION["r2a"];}
if ($i == 2 ) {$_SESSION["3a"] = rand ( 1 , 6 );} else {$_SESSION["3b"] = $_SESSION["r3a"];}
if ($i == 3 ) {$_SESSION["4a"] = rand ( 1 , 6 );} else {$_SESSION["4b"] = $_SESSION["r4a"];}
if ($i == 4 ) {$_SESSION["5a"] = rand ( 1 , 6 );} else {$_SESSION["5b"] = $_SESSION["r5a"];}
echo($secondroll[$i] . " ");
}
}


}


*/



$r1b = $_SESSION["1b"];
$r2b = $_SESSION["2b"];
$r3b = $_SESSION["3b"];
$r4b = $_SESSION["4b"];
$r5b = $_SESSION["5b"];


$second = "
<input type='checkbox' name='ds[]' value='1'>$r1a
<input type='checkbox' name='ds[]' value='2'>$r2a
<input type='checkbox' name='ds[]' value='3'>$r3a
<br>
<input type='checkbox' name='ds[]' value='4'>$r4a
<input type='checkbox' name='ds[]' value='5'>$r5a
<input type='hidden' name='isstart' value='0' >
<input type='submit' value='Roll The Dice'>";


$final = "
<input type='checkbox' name='df[]' value='1'>$r1b
<input type='checkbox' name='df[]' value='2'>$r2b
<input type='checkbox' name='df[]' value='3'>$r3b
<br>
<input type='checkbox' name='df[]' value='4'>$r4b
<input type='checkbox' name='df[]' value='5'>$r5b
<input type='hidden' name='isstart' value='0' >
<input type='submit' value='Roll The Dice'>";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1"><title>play</title></head>
<body>
<div style="background-color:green;margin:auto;">
<div style="width:100%; display:inline-block;text-align:center;background-color:red;">
<h2>Enjoy your game</h2></div>
<div style="padding: 0px;float: left;width: 30%;background-color:yellow;height:800px;">
	<table style="text-align: left; width: 100%; height:100%;  table-layout: fixed;" border="1" cellpadding="2" cellspacing="2">
	<tbody>
	<tr>
	<td colspan="2" rowspan="1"><h3 style="text-align:center;">Upper Section</h3></td>
	</tr>
	<tr>
	<td>Aces</td>
	<td>N</td>
	</tr>
	<tr>
	<td>Twos</td>
	<td>N</td>
	</tr>
	<tr>
	<td>Threes</td>
	<td>N</td>
	</tr>
	<tr>
	<td>Fours</td>
	<td>Y</td>
	</tr>
	<tr>
	<td>Fives</td>
	<td>N</td>
	</tr>
	<tr>
	<td>Sixes</td>
	<td>N</td>
	</tr>
	<tr>
	<td>TOTAL SCORE</td>
	<td>N</td>
	</tr>
	<tr>
	<td>BONUS</td>
	<td>N</td>
	</tr>
	<tr>
	<td>TOTAL of upper section</td>
	<td>25</td>
	</tr>
	<tr>
	<td colspan="2" rowspan="1"><h3 style="text-align:center;">Lower Section</h3></td>
	</tr>
	<tr>
	<td>3 of a kind</td>
	<td>N</td>
	</tr>
	<tr>
	<td>4 of a kind</td>
	<td>N</td>
	</tr>
	<tr>
	<td>Full House</td>
	<td>N</td>
	</tr>
	<tr>
	<td>Sm.Straight</td>
	<td>N</td>
	</tr>
	<tr>
	<td>Lg.Straight</td>
	<td>N</td>
	</tr>
	<tr>
	<td>YAHTZEE</td>
	<td>N</td>
	</tr>
	<tr>
	<td>Chance</td>
	<td>N</td>
	</tr>
	<tr>
	<td>YAHTZEE BONUS</td>
	<td>N</td>
	</tr>
	<tr>
	<td><h3 style="text-align:center;">TOTAL</h3></td>
	<td style="text-align:center;">25</td>
	</tr>
	</tbody>
</table>
</div>
<div style="padding: 0px;float: left;width: 70%;background-color:orange;height:800px;">
<div style="text-align:center;"><h2><?php echo $_SESSION['playername']; ?>'s Rolls</h2></div>
<table style="text-align: left; width: 100%; height:80%;" border="1" cellpadding="2" cellspacing="2">
  <tbody>
    <tr>
      <td>Final Roll</td>
    </tr>
    <tr>
      <td>
<form action="?" method="post">

<?php 
echo $second;
?>

</form>
</td>
    </tr>
    <tr>
      <td >Second Roll</td>
    </tr>
    <tr>
      <td>


<form action="?" method="post">

<?php 
echo $second;
?>

</form>



</td>
    </tr>
    <tr>
      <td >Initial Roll</td>
    </tr>
    <tr>
      <td>

<?php echo "$r1 $r2 $r3 $r4 $r5"; ?>

</td>
    </tr>
	<tr>
      <td >CHOICES</td>
    </tr>
    <tr>
      <td>
	  ROLL SAVE</td>
    </tr>
  </tbody>

</table>
</div>
<div style="width:100%;display:inline-block;text-align:center;background-color:red;">FOOTTER 2017</div>
</div>
</body></html>
