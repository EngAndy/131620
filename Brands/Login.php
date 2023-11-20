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
        //Read from dbase
        
        $query = "select * from users where user_name = '$user_name' limit 1";

        $result = mysqli_query ($con,$query);

        if($result)
        {
            
        if($result &&mysqli_num_rows($result) > 0 ){
            $user_data = mysqli_fetch_assoc($result);
            
            if($user_data['password']==$password){
                $_SESSION['user_id']= $user_data['user_id'];
                header("Location: index.php");
                die;
            

            }
        }
        }

        

    }else
    {
        echo 'Wrong username or password!';
    }
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body>
                    
            <!-- Login Form -->
            <div class="loginForm">
                
                <form class="form" method="post">
                <p class="form-title">Sign in to your account</p>
                    <div class="input-container">
                    <input type="user_name"name="user_name" placeholder="Username">
                    <span>
                    </span>
                </div>
                <div class="input-container">
                    <input type="password" name="password" placeholder="Enter password">
                    </div>
                    <button id="button">Login</button>
                <div class="signupContainer">
                    <p>Don't have any account?</p>
                    <a href="register.php">Sign up</a>
                </div>
                </form>
            </div>
            
    </body>
</html>