<?php
	$array[] = $_POST;
	$url = 'http://localhost/CIT17FS/IDSystem.html';
	file_put_contents("IDdata.txt", print_r($array,true));
	header("Location: $url");
?>