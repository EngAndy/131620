<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body>
        <?php 
                include 'header.php';
             ?>
                    
            <!-- Login Form -->
            <div class="loginForm">
                
                <form class="form">
                <p class="form-title">Sign in to your account</p>
                    <div class="input-container">
                    <input type="email" placeholder="Enter email">
                    <span>
                    </span>
                </div>
                <div class="input-container">
                    <input type="password" placeholder="Enter password">
                    </div>
                    <button id="button">Sign In</button>
                <div class="signupContainer">
                    <p>Don't have any account?</p>
                    <a href="#">Sign up</a>
                </div>
                </form>
            </div>
            
    </body>
</html>