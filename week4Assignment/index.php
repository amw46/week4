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
		echo '<br>The past<br>';
	} elseif (strcmp($dateNew, $tar) > 0) { //if dateNew is greater than tar, result is 1
		echo '<br>The future<br>';
	} else {
		echo '<br>Oops.<br>';
	}

	//slash position
	for ($charIndex = 0; $charIndex < strlen($dateNew); $charIndex++) {
		if ($dateNew[$charIndex] == "/") { //if index contains a value of "/"
			echo "$charIndex". ' ';
		}
	}
	
	//number of words
	$dateArray = (explode("/", $dateNew));
	$numWords = sizeof($dateArray);
	echo '<br>'."$numWords".' words<br>';


	//strlen
	$greeting = 'Hello, World!';
	echo strlen($greeting);

	//ascii of first character
	$firstChar = $greeting[0];
	echo '<br>';
	echo ord($firstChar). '<br>';

	//last two characters
	$lastTwo = substr($dateNew, -2); //from index -2 to the end
	echo $lastTwo . '<br>';

	//date array
	//array created and delimited in earlier exercise
	foreach($dateArray as $value) {
		echo $value.' ';
	}
	echo '<br>';


?>
