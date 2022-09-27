<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP</title>
</head>
<body>
    

<?php
//First Program
/*
    Author: Dharma Raj Poudel
    URL: drpoudel.com.np
    Licence: GPL
*/
  echo "<h1>Good Afternoon</h1>";
  echo "<p>We are going to learn php</p>";

  //Declaring Variables
$name = "Dharma raj Poudel";
$college = "Trinity Intl College";

echo "<p>$name teaches in $college</p> ";

$num1 = 10;
$num2 = 3;
$sum = $num1+$num2;
$div = $num1/$num2;
echo "The sum of $num1 and $num2 is ".number_format($sum,2);
echo "The division of $num1/$num2 is ".number_format($div,2);

//destroying variable
unset($div);
echo $div;



  ?>

</body>
</html>