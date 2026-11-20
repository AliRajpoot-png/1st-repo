<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "abdullah";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Sorry we failed to connect with Xampp: <br>" . mysqli_connect_error());
}
else{
    echo "We have successfully connected with Xampp <br>";
}

$name = "Farhan";
$ali = "rajpoot";

$sql = "INSERT INTO `rafay` (`name`, `ali`, `moiz`, `zaeem`)
        VALUES ('$name', '$ali', 'Imran', 'Imran')";
$result = mysqli_query($conn,$sql);

if($result){
    echo "the data is inserted into a table";
}
else{
    echo "the data is not inserted into a table" . mysqli_error($conn);
}

