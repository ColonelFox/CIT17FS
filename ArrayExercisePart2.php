<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array Exercise Part 2</title>
</head>
<body>

<h2>Write a PHP script to count a total number of duplicate elements in an array.</h2>

<?php
	$a = 0;
	$count = 0;
	$element = file_get_contents("a1.txt");
	echo "Test Data: <br>
		Input the number of the elements to be stored in the array: 
		$element <br>";
	$final = file("elements1.txt");
	echo "Input $element elements in the array: <br>";
	
	foreach ($final as $f) {
		echo ("elements - ".$a." : $f <br>");
		$a++;
	}
	for ($i=0; $i < $element; $i++) { 
		for ($j=($element-1); $j >= 0; $j--) { 
			if ($i != $j && $final[$i] == $final[$j]) {
				$count = $count + 1;
			}
		}
	}

	echo "Expected Output: <br>
		Total number of duplicate elements found in the array is: ".($count/2)."<br>";

?>

<h2>Write a PHP script to count the frequency of each element of an array.</h2>

<?php
	$count = 0;
	$element = file_get_contents("a1.txt");
	echo "Test Data: <br>
		Input the number of the elements to be stored in the array: 
		$element <br>";
	$final = file("elements2.txt");
	echo "Input $element elements in the array: <br>";
	$i = 0;
	foreach ($final as $f) {
		echo ("elements - ".$a." : $f <br>");
		$i++;
	}
	$fr = array();
	for ($i=0; $i < $element; $i++) { 
		$count = 0;
		for ($j=($element-1); $j >= 0; $j--) { 
			if ($final[$i] == $final[$j]) {
				$count = $count + 1;
				$fr[$i] = $count;
			}
		}
	}

	echo "Expected Output: <br>
		The frequency of all elements of an array: <br>";
	for ($i=0; $i < $element; $i++) { 
		print_r("$final[$i] occurs $fr[$i] times <br>");
	}

?>

<h2>Write a PHP script to separate odd and even integers in separate arrays.</h2>

<?php
	$count = 0;
	$element = file_get_contents("a2.txt");
	echo "Test Data: <br>
		Input the number of the elements to be stored in the array: 
		$element <br>";
	$final = file("elements3.txt");
	echo "Input $element elements in the array: <br>";
	foreach ($final as $f) {
		echo ("elements - ".$a." : $f <br>");
	}
	foreach ($final as $f) {
		if ($f%2 == 0) {
			$even[] = $f;
		}else{
			$odd[] = $f;
		}
	}
	echo "Expected Output: <br>";
	echo "The Even elements are: <br>".implode(" ", $even)." <br>";
	echo "The Odd elements are: <br>".implode(" ", $odd)." <br>";
	

?>

</body>
</html>