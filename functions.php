<?php
echo "wellcome to the functions <br>";

function obtainedMarks($arr){
$sum = 0;
foreach ($arr as  $value) {
    $sum += $value;
}

return $sum;
}
$ali = array(40,50,90,100,20,05,35);
$sumofali = obtainedMarks($ali);

$zaeem = array(40,30,50,90,80,70,85);
$sumofzaeem = obtainedMarks($zaeem);

echo "total marks of ali out of 700 is $sumofali <br>";
echo "total marks of zaeem out of 700 is $sumofzaeem <br>";

?>

