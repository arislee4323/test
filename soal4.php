<?php 


$a = "3";
$b = "7";

$a ^= $b;
$b ^= $a;
$a ^= $b;
echo "Nilai awal a = 3, b = 7"."<br>";
echo "a =". $a . "<br>";
echo "b =". $b;

?>