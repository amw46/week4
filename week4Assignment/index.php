<?php
	$date =  date('Y-m-d', time());
	$dateNew = str_replace("-", '/', $date); //'-' in $date replaced with '/'
	echo "The value of \$date: ".$dateNew."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);

	if (strcmp($dateNew, $tar) < 0) { //if $dateNew is less than $tar, result is -1
		echo "<br>The past<br>";
	} elseif (strcmp($dateNew, $tar) > 0) { //if dateNew is greater than tar, result is 1
		echo "<br>The future<br>";
	} else {
		echo "<br>Oops.<br>";
	}

	echo "<br>test<br>";
?>
