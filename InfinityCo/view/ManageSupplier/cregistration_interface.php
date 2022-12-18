<?php

include ($_SERVER["DOCUMENT_ROOT"]."../InfinityCo/controller/LoginController/AccountController.php");


if (isset($_POST['submit'])) {
    $user = new AccountController();
    // call method dd

    $user->add();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customer Registration</title>
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
                        <h2 class="form-title">Create Customer Account</h2>

                        <div class="form-group">
                            <input type="text" class="form-input" name="Name" id="Name" placeholder="Your Name"/>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input" name="Email" id="Email" placeholder="Your Email"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="Username" id="Username" placeholder="Your Username"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="Password" id="Password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>

                         <div class="form-group">
                            <input type="text" class="form-input" name="ICno" id="ICno" placeholder="Your IC Number"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="Address" id="Address" placeholder="Your Address"/>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="ContactNo" id="ContactNo" placeholder="Your Contact Number"/>
                        </div>

                        <div class="form-group">Gender: <br>
                            <input type="radio" name="Gender" value="male"> Male
                            <input type="radio" name="Gender" value="female"> Female
                         </div><br>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>

                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="clogin_interface.php" class="loginhere-link">Login here</a><br>
                    </p>

                    <p class="back">
                       <center><a href="../home.html" class="back-link">Back</a></center>
                    </p>
                </div>
            </div>
        </section>

    </div>

</body>
</html>