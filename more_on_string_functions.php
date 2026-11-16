<?php
$name = " my name is dell latitude";
$names = "here my name is ali imran";
echo $name;
echo "<br>";
echo "the length of the string is " .strlen($name);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo strrev($names);
echo "<br>";
echo strpos($names,"ali");
echo "<br>";
echo str_replace("ali","zaeem",$names);
echo "<br>";
echo str_repeat($names,2);
echo "<br>";
echo "<pre>";
echo rtrim("             this is a good boy");
echo "<br>";
echo ltrim("this is a good boy             ");
echo "</pre>";
?>