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
$onenum *= 10;
echo "for a, the value is " . $onenum . "<br>"; 
$onenum /= 10;
echo "for a, the value is " . $onenum . "<br>"; 
$onenum %= 10;
echo "for a, the value is " . $onenum . "<br>"; 
$onenum **= 1;
echo "for a, the value is " . $onenum . "<br>"; 
?>