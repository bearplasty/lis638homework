<!DOCTYPE html>
<html>
<body>
<h1>Challenge: Correct Change</h1>
<?php
$amt = 999;
$dollars = (int)($amt / 100);
$remainder = ($amt - $dollars * 100);
$quarters = (int)($remainder / 25);
$dimes = (int)(($remainder-$quarters*25)/10);
$nickels = (int)((($remainder-$quarters*25)/10)/1);
$pennies = (int) (((($remainder-$quarters*25)/10)/2)/5);

	echo "You are due $dollars dollar(s), $quarters quarter(s), $dimes dime(s), $nickels nickel(s), and $pennies pennies back in change total";


?>
<h1>Challenge: 99 Bottles of Beer</h1>
<?php
$number = 99;
while ($number >0) {
echo "$number bottles of beer on the wall, $number bottles of beer! Take one down and pass it around <br>" . --$number . " bottles of beer on the wall!";
;

}

?>

</body>
</html>