<?php
$cars = array("Volvo", "BMW", "Toyota", "Tata");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

echo "Displaying all cars at once";
for($i=0; $i<3; $i++)
{
    echo $cars[$i]."<br/>";
}

echo "Displaying all cars at once";
for($i=0; $i<count($cars); $i++)
{
    echo $cars[$i]."<br/>";
}
//Associative Array
$cart=array("Shirt"=>500, "Pant"=>1100, "Jacket"=>3500, "Cap"=>400);
foreach($cart as $k=>$v){
    if($k=="Cap"){
        break;
    }
    echo "The price of ".$k. " is Rs. ".$v. "<br/>";
}
//sort associative arrays in ascending order, according to the value
asort($cart);
foreach($cart as $k=>$v){
    echo "The price of ".$k. " is Rs. ".$v. "<br/>";
}
?>