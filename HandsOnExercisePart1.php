<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hands On Exercise Part 1</title>
</head>
<body>

<h2>PHP Exercise 1</h2>

<?php
	echo "Twinkle, Twinkle little star. <br>";
	$t="Twinkle";
	$s="star";
	echo $t.", ".$t." little ".$s.". <br>";
	$t="Fluffy";
	$s="pup";
	echo $t.", ".$t." little ".$s.". <br>";
?>

<h2>PHP Exercise 2</h2>

<?php
	$x=10;
	$y=7;
	echo $x." + ".$y." = ".$x+$y."<br>";
	echo $x." - ".$y." = ".$x-$y."<br>";
	echo $x." * ".$y." = ".$x*$y."<br>";
	echo $x." / ".$y." = ".$x/$y."<br>";
	echo $x." % ".$y." = ".$x%$y."<br>";
?>

<h2>PHP Exercise 3</h2>

<?php
	$x=8;
	$answer="Value is now ";
	echo $answer.$x.". <br>";
	echo "Add 2. ".$answer.($x=$x+2).".<br>";
	echo "Subtract 4. ".$answer.($x=$x-4).".<br>";
	echo "Multiply by 5. ".$answer.($x=$x*5).".<br>";
	echo "Divide by 3. ".$answer.($x=$x/3).".<br>";
	echo "Increment value by one. ".$answer.($x=$x+1).".<br>";
	echo "Decrement value by one. ".$answer.($x=$x-1).".<br>";
?>

<h2>PHP Exercise 4</h2>

<?php
	var_dump("Harry");
	echo "<br>";
	var_export('Harry');
	echo "<br>";
	var_dump(42);
	echo "<br>";
	var_dump(Null);
?>

</body>
</html>