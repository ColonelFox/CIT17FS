<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hands On Exercise Part 2</title>
</head>
<body>

<h2>PHP exercise 5</h2>

<?php
	$around="around";
	echo 'What goes '.$around.', comes '.$around.'.'."<br>";
?>

<h2>PHP exercise 6</h2>

<?php
	for ($i=1; $i < 13; $i++) { 
		echo "$i * $i = ".$i*$i."<br>";
	}
?>

<h2>PHP exercise 7</h2>

<?php
echo "<table border='0', width='500px'><br />";
	for ($i=1; $i < 8; $i++) {
		echo "<tr>"; 
		for ($j=1; $j < 8; $j++) { 
			echo "<td align='center', width='50px'>",($i*$j),"</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>

</body>
</html>