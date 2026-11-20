<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $class = $_POST['class'] ?? '';
    $school = $_POST['school'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contact";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        die("Sorry we failed to connect with Xampp: <br>" . mysqli_connect_error());
    } else {
        echo "We have successfully connected with Xampp <br>";
    }
    $sql = "INSERT INTO `trip-plan` (`Name`, `Class`, `School`, `Contact`) VALUES ('$name', '$class', '$school', '$contact')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Superb!</strong> You created database successfully.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
    } else {
        echo "the data is not inserted into a table" . mysqli_error($conn);
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>TRIP-PLAN</title>
</head>

<body>
    <h3>Submit your data</h3>

    <form action="bootstrapinserteddatainsql.php" method="post">
        <div class="form-group">
            <label for="Name">Name</label>
            <input type="text" class="form-control" name="name" aria-describedby="emailHelp"
                placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label for="Class">Class</label>
            <input type="text" class="form-control" id="class" name="class" aria-describedby="emailHelp"
                placeholder="Enter your class">
        </div>
        <div class="form-group">
            <label for="School">School</label>
            <input type="text" class="form-control" id="school" name="school" placeholder="Enter your school name">
        </div>
        <div class="form-group">
            <label for="Contact">Contact</label>
            <input type="tel" class="form-control" name="contact" aria-describedby="emailHelp"
                placeholder="Enter your contact number">
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>