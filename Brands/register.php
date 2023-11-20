<?php
    include("/xampp/htdocs/131620/connection.php");
    include("/xampp/htdocs/131620/functions.php");

    if ($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //Something was Posted
        $user_name = $_POST['user_name'];
        $password = $_POST['password'];

        if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
        {
            //save to dbase
            $user_id = random_num(20);
            $query = "INSERT INTO users (user_id, user_name, password) VALUES ('$user_id','$user_name', '$password')";

            mysqli_query ($con,$query);

            header("Location: Login.php");
            die;

        }else
        {
            echo 'Please fill all fields';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <link rel="stylesheet" href="../css/style.css">
    <title>Register</title>
</head>
<body>
    <!-- signup Form -->
    <div class="signup Form">
                
                <form class="form" method="POST">
                <p class="form-title">Register  your account</p>
                    <div class="input-container">
                    <input type="text" name="user_name" placeholder="username">
                    <span>
                    </span>
                </div>
                <div class="input-container">
                    <input type="password"name="password" placeholder="enter password">
                    </div>
                    <button id="button">Register</button>
                <div class="signupContainer">
                    <p>Already have an account?</p>
                    <a href="/Brands/Login.php">Login</a>
                </div>
                </form>
            </div>
</body>
</html>