<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Homework 3 - Books Table</h2>


<?php
echo "<br />";
echo "<br />";
echo "Code Homework #3";
echo "<br />";
echo "<br />";

echo "Challenge:  Book lists";
echo "<br />";
echo "<br />";

$books = array(
array("PHP and MySQL Web Development","Luke Welling",144,"Paperback",31.63), 
array("Web Design with HTML, CSS, JavaScript and jQuery","Jon Duckett",135,"Paperback",41.23),
array("PHP Cookbook: Solutions & Examples for PHP Programmers","David Sklar",14,"Paperback",40.88),
array("JavaScript and JQuery: Interactive Front-End Web Development","Jon Duckett",251,"Paperback",22.09),
array("Modern PHP: New Features and Good Practices","Josh Lockhart",7,"Paperback",28.49),
array("Programming PHP","Kevin Tatroe",26,"Paperback",28.96),
);


$Price = $books[0][4] + $books[1][4] + $books[2][4] + $books[3][4] + $books[4][4] + $books[5][4];

echo "Your total price is $Price";


?>


<table>
     <tr>
       <td>Title</td>
       <td>Name</td>
       <td>Number of Pages</td>
       <td>Type</td>
       <td>Price</td>
     </tr>
     <? foreach ($books as $row) : ?>
     <tr>
       <td><? echo $row[0]; ?></td>
       <td><? echo $row[1]; ?></td>
       <td><? echo $row[2]; ?></td>
       <td><? echo $row[3]; ?></td>
       <td><? echo $row[4]; ?></td>
     </tr>
     <? endforeach; ?>
   </table>

<h2>Homework 3 - Coin Toss</h2>

<?php

// Calling the function. 4 is how many times you want head to print before it breaks the loop.
PrintCoin (4);


// The function to print coins 

function PrintCoin ($numberOfHeads) {


//Variable to keep track of consecutive heads
$ConsecutiveHeads = 0;

while(True) {

$current = mt_rand(1,2);

//If it is a head 

    if ($current == 1) {
    
    //To check if we have the met condition of 
    
    if ( $ConsecutiveHeads >= $numberOfHeads ){
        
        echo '<img src="images/coin_head.png" alt="Coin Head" height="50" width="50">';
            //break the loop
            break;
}
        else {
        //if condition is not met. we will increment the number of consecutive heads.
        echo '<img src="images/coin_head.png" alt="Coin Head" height="50" width="50">';
            $ConsecutiveHeads++;
        }


}
    
    //if it is a tail
else {   

        echo '<img src="images/coin_tail.png" alt="Coin Head" height="50" width="50">';
        
        //we need to set consecutive heads to zero because it was tail and we need start counting from scratch.
        $ConsecutiveHeads = 0;
        

}



}
}
?>

</body>
</html>
