<?php
session_start();

    include("/xampp/htdocs/131620/connection.php");
    include("/xampp/htdocs/131620/functions.php");

    $user_data = check_login($con);
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Synergy</title>
</head>
<body>
    <a href="/Brands/logout.php">Logout</a>
    <h1>This is my website</h1>

    <br>

    <p>Welcome Username.</p>
</body>
</html>

