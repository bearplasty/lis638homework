<!DOCTYPE html>
<html>
    <head>
    	<link type='text/css' rel='stylesheet' href='style.css'/>
		<title>Thomas Kiedrowski Homework 2</title>
	</head>
	<body>
	<h2>Challenge: ISBN Validation</h2>
	<!--<form>Enter ISBN:<br>
	<input type="text" name="isbn" value="$isbn"<br>
	<input type="submit" value="submit">
	<form>
	-->
	<?php
	#input isbn variable
	$isbn = 1892145936;
	#display what the function will do with the variable. In our case it's to find the validity of the ISBN
	echo "Checking ISBN $isbn for validity... <br>";
	#create if statement while finding out if the calculation of the math of the string is a whole number 
	if (is_int((substr ($isbn, 0,1)*(10) + substr($isbn, 1,1)*(9)+ substr($isbn, 2,1)*(8)+ substr($isbn, 3,1)*(7)+ substr ($isbn, 4,1)*(6)+ substr ($isbn, 5,1)*(5)+ substr ($isbn, 6,1)*(4)+ substr ($isbn, 7,1)*(3)+ substr ($isbn, 8,1)*(2)+ substr ($isbn, 9,1)*(1))/(11))){
	#display the validator statement
	echo "This is a valid ISBN!<br>";
	echo 'Go to <a href="http://www.isbnsearch.org/isbn/'. $isbn .'"> This Book</a>';
	#display the alternate validator statement
	}else {echo "This is NOT a valid ISBN!";
	}
	?>
	<h2>Challenge: Coin Toss!</h2>
	<?php

	$heads = "http://www.marshu.com/articles/images-website/articles/presidents-on-coins/penny-cent-coin-head.jpg";
	$tails = "http://www.marshu.com/articles/images-website/articles/presidents-on-coins/penny-cent-coin-tail.jpg";

	$headCount = 0;
	echo "<br>Flipping a coin 1 times...<br>";
	for ($headCount=0; $headCount < 1; ++$headCount) {
    $flip = mt_rand(0,1);
	
    if ($flip==0){
        ++$headCount;
        echo "<img src='$heads' height=\"80\" width=\"80\">";
    }
    else {
        echo "<img src='$tails' height=\"80\" width=\"80\">";
    }
	}
	$headCount = 0;
	echo "<br>Flipping a coin 3 times...<br>";
	for ($headCount=0; $headCount <3; ++$headCount) {
    $flip = mt_rand(0,1);
	
    if ($flip==0){
        ++$headCount;
        echo "<img src='$heads' height=\"80\" width=\"80\">";
    }
    else {
        echo "<img src='$tails'>";
    }
	}

	$headCount = 0;
	echo "<br>Flipping a coin 5 times...<br>";
	for ($headCount=0; $headCount < 5; ++$headCount) {
    $flip = mt_rand(0,1);
	
    if ($flip==0){
        ++$headCount;
        echo "<img src='$heads' height=\"80\" width=\"80\">";
    }
    else {
        echo "<img src='$tails' height=\"80\" width=\"80\">";
    }
	}
	$headCount = 0;
	echo "<br>Flipping a coin 7 times...<br>";
	for ($headCount=0; $headCount < 7; ++$headCount) {
    $flip = mt_rand(0,1);
    #$flipCount ++;
	
    if ($flip==0){
        ++$headCount;
        echo "<img src='$heads' height=\"80\" width=\"80\">";
    }
    else {
        echo "<img src='$tails' height=\"80\" width=\"80\">";
    }
	}
	$headCount = 0;
	echo "<br>Flipping a coin 9 times...<br>";
	for ($headCount=0; $headCount < 9; ++$headCount) {
    $flip = mt_rand(0,1);
    #$flipCount ++;
	
    if ($flip==0){
        ++$headCount;
        echo "<img src='$heads' height=\"80\" width=\"80\">";
    }
    else {
        echo "<img src='$tails' height=\"80\" width=\"80\">";
    }
	}
	$headCount = 0;
	$flipCount = 0;

	while ($headCount < 3) {
    $flip = mt_rand(0,1);
    $flipCount ++;
	echo "<br>Flipping a coin $flipCount times...<br>";
    if ($flip){
        $headCount ++;
        echo "<img src='$heads' height=\"80\" width=\"80\">";
    }
    else {
        echo "<img src='$tails' height=\"80\" width=\"80\">";
    }
	}
	echo "<p>It took {$flipCount} flips!</p>";
	?>
    </body>
</html>