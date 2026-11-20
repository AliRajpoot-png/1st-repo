<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("you are not connected to xampp <br> :" . mysqli_connect_error());
} else {
    echo "you are connected with xampp <br>";
}

$sql = "SELECT * FROM `trip-plan`";
$result = mysqli_query($conn, $sql);


$num = mysqli_num_rows($result);

echo "$num: " . "records found in the database <br>";

if ($num > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        echo " hello " . $row['Name'] . " i m in " . $row['Class'] . " i read in " . $row['School'] . " And my contact number is " . $row['Contact'] . "<br>";
    }
}

?>