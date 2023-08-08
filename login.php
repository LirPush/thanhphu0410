<?php
require "connect.php";
session_start();
if (isset($_POST["nutdangnhap"])) {
    $user_name = $_POST["email"];
    $pass = $_POST["password"];
    $rows = mysqli_query(
        $conn, "select * from users where email = '$user_name' and password = '$pass'");
    $count = mysqli_num_rows($rows);

    if ($count == 1) {   
        $_SESSION["loged"] = true;
        header("location:index.php");
        setcookie("success", "Đăng nhập thành công!", time(10) + 5, "/", "", 0);
    } else {
        $_SESSION["loged"] = false; 
        header("location:taikhoan.php");
        setcookie("error", "Đăng nhập không thành công!", time(10) + 5, "/", "", 0);  
    }


    //kiểm tra xem 2 mật khẩu có giống nhau hay không:
    // if($pass1 != $pass2){
    // 	header("location:index.php?page=register");
    // 	setcookie("error", "Đăng ký không thành công!", time()+1, "/","", 0);
    // }
    // else{
    // 	$pass = md5($pass1);
    // 	mysqli_query($connect,"
    // 		insert into user (user_name,password,full_name)
    // 		values ('$user_name','$pass','$name')
    // 	");

    // 	header("location:index.php?page=register");
    // 	setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);
    // }
}
