<?php
// Assignment operators
/*
add +
subtract -
multiply *
divide /
modulus %
exponential **
*/
/*
Assignment operatiors
for ex $a = $b
*/
$onenum = 30;
$send = 50;
$a = 20;
$aa = 20;
//arithmetic operators
echo "the result of arithmetic operaion is " . ($onenum+$send) . "<br>";
echo "the result of subtraction operaion is " . ($onenum-$send) . "<br>";
echo "the result of multiplication operaion is " . ($onenum*$send) . "<br>";
echo "the result of division operaion is " . ($onenum/$send) . "<br>";
echo "the result of modulus operaion is " . ($onenum%$send) . "<br>";
echo "the result of exponential operaion is " . ($onenum**$send) . "<br>";
//assignmemt operators;
$onenum += 10;
echo "for a, the value is " . $onenum . "<br>";
$send -= 5;
echo "for a, the value is " . $send . "<br>"; 
$a *= 400;
echo "for a, the value is " . $a . "<br>"; 
$aa /= 10;
echo "for a, the value is " . $aa . "<br>"; 
$onenum %= 10;
echo "for a, the value is " . $onenum . "<br>"; 
$onenum **= 2;
echo "for a, the value is " . $onenum . "<br>";
//comparison operators;
//comparison operator is normally is used for just comparison between two or more variables like if $a = 10;,$b = 10; the result is 1 and if the $a = 10;,$b = 7; then the result is 0.
$b = 10;
$bb = 9;
echo "for a, the value is " . var_dump($b == $bb) . "<br>";
$c = 9;
$cc = 9;
echo "for a, the value is " . ($c==$cc) . "<br>";
//greather than equal to,less than equal to,less than,greater then,


//logical operators;
//and or not and && ||
$z = true;
$zz = false;
echo "for answer, the result is ";
echo var_dump ($z and $zz);
echo "<br>";

?>