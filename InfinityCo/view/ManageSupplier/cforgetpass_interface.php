<?php

include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/controller/LoginController/AccountController.php");



if (isset($_POST['submit'])) {
    $val = new AccountController();

    $val->forget();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Forget Password</title>
    <!-- Main css -->
    <link rel="stylesheet" href="../../libs/Style/css/style.css">
</head>

<body>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Reset Password</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Username" id="Username" placeholder="User name"/>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="Password" id="Password" placeholder="New Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-input" name="rePassword" id="rePassword" placeholder="Confirm Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
             
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Update"/>
                        </div>
                        <p class="loginhere">
                        <a href="clogin_interface.php" class="loginhere-link">Login Again</a>
                    </p>
                    </form> 
                    
                    
                </div>
            </div>
        </section>

    </div>
</body>
</html>