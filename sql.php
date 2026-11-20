<?php
echo "welcome to the connection the database <br>";
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername,$username,$password);
if(!$conn){
    die("sorry we failed to connect <br> : " . mysqli_connect_error()); 
}
else{
    echo "connection was successfull";
}
?>