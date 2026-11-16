<?php
echo "welcome to local and global variables <br>";
$a = 900;//global variable;

function printvalue(){ //defining a function
    $b = 800; //local variable;
    echo "the value of function  is $b";
    echo "<br>";
}

echo "the value of a is $a <br>";

printvalue(); //calling a function
?>