<!DOCTYPE html>
<html>
<body>
<h1>Challenge: Correct Change</h1>
<?php
#choose a dollar amt
$amt = 999;
#divide amt by dollars
$dollars = (int)($amt / 100);
#get the remainder
$remainder = ($amt - $dollars * 100);
#divide remainder by quarters
$quarters = (int)($remainder / 25);
#divide previous by dimes
$dimes = (int)(($remainder-$quarters*25)/10);
#divide previous by nickels
$nickels = (int)((($remainder-$quarters*25)/10)/5);
#divide previous by pennies
$pennies = (int) (((($remainder-$quarters*25)/10)/5)/1);

	echo "You are due $dollars dollar(s), $quarters quarter(s), $dimes dime(s), $nickels nickel(s), and $pennies pennies back in change total";


?>
<h1>Challenge: 99 Bottles of Beer</h1>
<?php
#99 bottles of beer
$number =99;
#as statement loops, subtract 1 each time
while ($number >0) {
echo "$number bottles of beer on the wall, $number bottles of beer! Take one down and pass it around <br>" . --$number . " bottles of beer on the wall!";
;

}

?>

</body>
</html>