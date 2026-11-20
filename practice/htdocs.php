<?php
$servername = "localhost";
$username   = "root";
$password   = "";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("you have not connected with xampp: <br>" . mysqli_connect_error());
}
else{
    echo"you have connected with xampp";
}
if($_SERVER["REQUEST_METHOD"] == "POST"){

}