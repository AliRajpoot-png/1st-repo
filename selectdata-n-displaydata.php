<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Sorry we failed to connect with Xampp: <br>" . mysqli_connect_error());
}
else{
    echo "We have successfully connected with Xampp <br>";
}
$sql = "SELECT * FROM `trip-plan`";
$result = mysqli_query($conn,$sql);

echo "the total rows are : " . mysqli_num_rows($result);
?>
