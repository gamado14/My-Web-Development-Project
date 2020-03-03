<!DOCTYPE html>
<html>
<body>


<?php

echo "Challenge 1";
echo "<br />";
echo "<br />";

echo "ISBN Validation";
echo "<br />";
echo "<br />";

$ExampleString = "1566199003";
$num1 = substr($ExampleString,0,1);

$num2 = substr($ExampleString,1,1);

$num3 = substr($ExampleString,2,1);

$num4 = substr($ExampleString,3,1);

$num5 = substr($ExampleString,4,1);

$num6 = substr($ExampleString,5,1);

$num7 = substr($ExampleString,6,1);

$num8 = substr($ExampleString,7,1);


$num9 = substr($ExampleString,8,1);


$num10 = substr($ExampleString,9,1);




$SumOfNumbers = (10*$num1) + (9*$num2) + (8*$num3) + (7*$num4) + (6*$num5) + (5*$num6) + (4*$num7) + (3*$num8) + (2*$num9) + (1*$num10);
$Result = $SumOfNumbers % 11;
if ($Result == 0) {
	echo "valid";
}
else {
	echo "not valid";
}
echo "<br>";
echo "<br>";
echo "<br>";

echo "Challenge 2";

echo "<br>";
echo "<br>";
echo "<br>";

$text = "Flipping my coin";
$times = 9;
$random = mt_rand(1,2);

echo $text;
echo "<br>";
echo $times;
echo "<br>";
echo $random;
echo "<br>";

//coin toss for 1 flip

echo '<h1>Coin Toss!</h1>
<p>Flipping a coin 1 time...</p>
<img src="images/coin_head.png" alt="Coin Head" height="50" width="50">';
echo "<br>";



//coin toss for 3 flips

echo "Flipping a coin 3 times..";
echo "<br>";

for ($x=0; $x < 3; $x++) {

	$random = mt_rand(1,2);

	PrintCoin ($random);
}
echo "<br>";



//coin toss for 5 flips

echo "Flipping a coin 5 times...";
echo "<br>";

for ($x=0; $x < 5; $x++) {

	$random = mt_rand(1,2);

	PrintCoin ($random);

}
echo "<br>";



//coin toss for 7 flips

echo "Flipping a coin 7 times...";
echo "<br>";

for ($x=0; $x < 7; $x++) {

	$random = mt_rand(1,2);

	PrintCoin ($random);

}
echo "<br>";



//coin toss for 9 flips

echo "Flipping a coin 9 times...";
echo "<br>";

for ($x=0; $x < 9; $x++) {

	$random = mt_rand(1,2);

	PrintCoin ($random);

}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
$previous = 0;

echo "Beginning the coin flipping...";
echo "<br>";

$x = 1;

while(true) {

	$current = mt_rand(1,2);

	if ($current == 1 & $previous == 1) {

		echo '<img src="images/coin_head.png" alt="Coin Head" height="50" width="50">'; 
		break;
	}
	else {

	PrintCoin ($current);


	$previous = $current;

	}
$x++;
} 
echo "<br>";

echo "Flipped two heads in a row, in $x flips!";


function PrintCoin ($valueofcoin) {

	if ($valueofcoin == 1) {

		echo '<img src="images/coin_head.png" alt="Coin Head" height="50" width="50">';
	}
	else {

		echo '<img src="images/coin_tail.png" alt="Coin Head" height="50" width="50">';
	}

}

?>

</body>
</html>