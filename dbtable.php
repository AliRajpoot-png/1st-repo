<?php
$servername = "localhost";
$username = "root";
$password = "" ;
$database = "abdullah";

$conn = mysqli_connect($servername,$username,$password,$database);
if(!$conn){
            die("sorry we failed to connect with sql database" . mysqli_connect_error);
}
else{
    echo "the connection of SQL with XAMPP is successfull <br>";
}
$sql = "CREATE TABLE IF NOT EXISTS `rafay` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(100) NULL,
    `ali` VARCHAR(100) NOT NULL,
    `moiz` VARCHAR(100) NOT NULL,
    `zaeem` VARCHAR(100) NOT NULL)";

$result = mysqli_query($conn, $sql) ;

if ($result){
    echo "the db is created successfully! <br>";
}
 
else{
    echo "the database is not created successfully because of this error --> ". mysqli_error($conn);
}
?>