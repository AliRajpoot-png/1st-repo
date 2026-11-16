<?php
echo "Welcome to the associated arrays <br>";

$favcol = array("ali" => "brown","zaeem" =>"orange","moiz"=>"blue");

echo $favcol["ali"];
echo "<br>";

?>

<?php

echo "Welcome to the 2nd associated arrays <br>";

//$variable is the $favcol;
//$keys are the  ali zaeem moiz;
//$value are the colors;

$favcol = array("ali" => "brown","zaeem" =>"orange","moiz"=>"blue");

foreach ($favcol as $key => $value) {
echo "favourite color of $key are $value <br>";
}
