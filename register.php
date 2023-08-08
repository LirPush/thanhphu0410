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
<div class="main-regis">

    <h2>Đăng ký tài khoản</h2>
    <form action="process_registration.php" method="post">
        <label for="fullname">Họ và tên:</label>
        <input type="text" name="fullname" id="fullname" required>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        
        <label for="phone_number">Số điện thoại:</label>
        <input type="tel" name="phone_number" id="phone_number" required>
        
        <label for="address">Địa chỉ:</label>
        <input type="text" name="address" id="address" required>
        
        <label for="password">Mật khẩu:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit" name="submit">Đăng ký</button>
    </form>

</div>



    <?php include "footer.php" ?>
    <?php include "js.php" ?>
</body>

</html>
