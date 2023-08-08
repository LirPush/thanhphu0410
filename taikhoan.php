<?php require 'connect.php';
session_start();
?>

<?php
if (isset($_SESSION['loged'])) {
    if ($_SESSION['loged'] == true) {
        header("location:index.php");
    }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "head.php" ?>
</head>

<body>
    <?php include "mmmenu.php" ?>

    <div class="header">
        <?php include "header.php" ?>
        <?php include "menu.php" ?>
    </div>

    <div class="main-tk container abc ">
        <form  action="login.php" method="post">
            <h1>Đăng Nhập</h1>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label form-login " for="form2Example1" >Email address</label>
                <input name="email" type="email" id="form2Example1" placeholder="Email" class="form-control" required />

            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <label class="form-label form-login" for="form2Example2">Password</label>
                <input name="password" type="password" id="form2Example2" placeholder="password" class="form-control" required />
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row" >
                <!-- Submit button -->
                <div class="col btn-sign">
                    <button name="nutdangnhap" type="submit" class="btn btn-primary btn-block mb-4 btn-sign-in">Sign in</button>
                </div>

                <div class="col d-flex justify-content-center">

                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="form2Example31" checked />
                        <label class="form-check-label" for="form2Example31"> Remember me </label>
                    </div>
                </div>
            </div>
            <div class="col mb-4 m-0">
                    <!-- Simple link -->
                    <a href="#!">Forgot password?</a>
                </div>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="./register.php">Register</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1 btn-icon-link">
                    <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1 btn-icon-link">
                    <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1 btn-icon-link">
                    <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1 btn-icon-link">
                    <i class="fab fa-github"></i>
                </button>
            </div>
        </form>

    </div>



    <?php include "footer.php" ?>
    <?php include "js.php" ?>
</body>

</html>
