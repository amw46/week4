<?php
	$date =  date('Y-m-d', time());
	$dateNew = str_replace("-", '/', $date) //'-' in $date replaced with '/'
	echo "The value of \$date: ".$date."<br>";
	$tar = "2017/05/24";
	echo "The value of \$tar: ".$tar."<br>";
	$year = array("2012", "396", "300","2000", "1100", "1089");
	echo "The value of \$year: ";
	print_r($year);

	echo "test";
?>
