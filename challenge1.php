<!DOCTYPE html>
<html>
<body>

<?php

$change = 90;
$value_of_dollar = 100;
$value_of_quarters = 25;
$value_of_nickel = 5;
$value_of_cents = 1;


$number_of_dollars = intdiv ($change, $value_of_dollar);

if ($number_of_dollars == 0){
}

else {

	echo "You are due ";
	echo  $number_of_dollars;
	echo " dollars";	
	echo "<br />";

}
	
$remainder_of_dollars = $change % $value_of_dollar;
echo "<br />";


$number_of_quarters = intdiv ($change, $value_of_quarters);

if ($number_of_quarters == 0){
}

else {

	echo "You are due ";
	echo  $number_of_quarters;
	echo " dollars";	
	echo "<br />";

}
	
$remainder_of_quarters = $change % $value_of_quarters;
echo "<br />";


$number_of_nickels = intdiv ($change, $value_of_nickel);

if ($number_of_nickels == 0){
}

else {

	echo "You are due ";
	echo  $number_of_nickels;
	echo " dollars";	
	echo "<br />";

}
	
$remainder_of_dollars = $change % $value_of_dollar;
echo "<br />";


$number_of_cents = intdiv ($change, $value_of_cents);

if ($number_of_cents == 0){
}

else {

	echo "You are due ";
	echo  $number_of_cents;
	echo " cents";	
	echo "<br />";

}
	
$remainder_of_dollars = $change % $value_of_dollar;
echo "<br />";


?>

</body>
</html>