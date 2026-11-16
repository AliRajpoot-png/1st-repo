<?php
echo "welcome to the multi-dimentional-arrays <br>";
//three dimentional arrays 
//this is the ex of matrices
$multidim = array(
                    array(2,5,7,8),
                    array(3,5,3,7),
                    array(8,7,5,3),
                 );
    for ($i=0; $i < count($multidim) ; $i++) {

         for ($j=0; $j < count($multidim [$i]) ; $j++) { 

            echo $multidim [$i][$j];
                     echo " ";
                   
                     }
                        echo "<br>";
                 }
?>