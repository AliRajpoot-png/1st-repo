
<?php
$email = "";
$pass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'] ?? '';
    $pass = $_POST['pass'] ?? '';

    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your form has been submitted successfully.
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Contact us</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Get-Post Requests</a>
    </div>
</nav>

<div class="container mt-4">

    <h3>Contact us for your concerns</h3>

    <form action="ali.php" method="POST">

        <div class="mb-3">
            <label for="Name" class="form-label">Name</label>
            <input type="email" name="Name" class="form-control" id="Name" required>
        </div>
        
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="Email" required>
        </div>
        
        <div class="mb-3">
            <label for="Concern" class="form-label">Concern</label>
            <input type="Concern" name="Concern" class="form-control" id="Concern" required>
        </div>
        
        <div class="mb-3">
            <label for="Date/Time" class="form-label">Date/Time</label>
            <input type="Date/Time" name="email" class="form-control" id="Date/Time" required>
        </div>

        <div class="mb-3">
            <label for="Password" class="form-label">Password:</label>
            <input type="password" name="pass" class="form-control" id="password" required>
        </div>

        <div class="mb-3">
            <input type="checkbox" name="remember" value="yes">
            <label>Remember me</label>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
