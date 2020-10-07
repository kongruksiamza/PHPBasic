<?php
$price=100.17;
$dalivery=50.99;



$total= $price + $dalivery;

// echo gettype($total);
echo "ก่อนแปลง = ".gettype($total)."<br>";
echo $total."<br>";

// type casting
$total=(integer)$total;
echo "หลังแปลง = ".gettype($total)."<br>";
echo $total."<br>";

echo "<hr>";
$sum="400.89";
echo "ก่อนแปลง = ".gettype($sum)."<br>";
echo $sum."<br>";
$sum=(double)$sum;

echo "หลังแปลง = ".gettype($sum)."<br>";
echo $sum."<br>";

echo "<hr>";

$a=(integer)10.9;
$b=(integer)20.5;

$c=$a+$b;

echo $c;
?>