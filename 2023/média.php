<?php
$num1 = 10;
$num2 = 5;
$num3 = 6;
$num4 = 8;



$sem1 = $num1+$num2;
$calcs1 = $sem1/2;

$sem2 = $num3+$num4;
$calcs2 = $sem2/2;

$somT = $num1+$num2+$num3+$num4;
$calcT = $somT/4;


echo "a média do primeiro semestre é : <br> $calcs1 <br> <br>";
echo "a média do segundo semestre é : <br> $calcs2 <br> <br>";

echo "a média das 4 notas é : <br> $calcT <br> <br>";
if ($calcT >= 6) {
    echo "Você passou de ano!! pois sua nota é maior ou igual a 6";
} 



?>