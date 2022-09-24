<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hands on Exercises ODL</title>
</head>
<body>

<h2>PHP Array Exercise 1</h2>
<?php
	$weather=array("rain","sunshine","clouds","hail","sleet","snow","wind");
	echo "We've seen all kinds of weather this month. At the beginning of the month, we had ".$weather[5]." and ".$weather[6].". <br>Then came ".$weather[1]." with a few ".$weather[2]." and some ".$weather[0].". At least we didn't get any ".$weather[3]." or ".$weather[4].".";
?>

<h2>PHP Array Exercise 2</h2>
<?php
	$cities=array("Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London");
	echo "<b> Unsorted List of the Countries: </b><br>";
	for ($i=0; $i < count($cities); $i++) { 
		if ($i==count($cities)-1) {
			echo $cities[$i].".";
		}else{
			echo $cities[$i].", ";
		}
	}
	echo "<br> <br> <b>Sorted list of the Countries: </b><br>";
	sort($cities);
	echo "<ul>";
	foreach ($cities as $c) {
		echo "<li>".$c."</li>";
	}
	echo "</ul>";
	array_push($cities,"Los Angeles","Calcutta","Osaka","Beijing");
	echo "<br> <br> <b>Sorted list with the Added Countries: </b><br>";
	sort($cities);
	echo "<ul>";
	foreach ($cities as $c) {
		echo "<li>".$c."</li>";
	}
	echo "</ul>";
?>

</body>
</html>