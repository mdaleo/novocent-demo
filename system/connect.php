<?php

// connect to DB

$DBhost = "localhost";
$DBuser = "root";
$DBpw = "root";
$DBname = "webapp";

$cxn = mysqli_connect($DBhost,$DBuser,$DBpw,$DBname)
		or die ("holy blank, something is wrong with connection");



?>
