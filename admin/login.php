<?php
session_start();
include("config/config.php");
if (isset($_POST['dangnhap'])) {
    $email = $_POST['email'];
    $matkhau = $_POST['password'];
    $sql = "SELECT * FROM taikhoan WHERE email='" . $email . "' AND matkhau='" . $matkhau . "'";
    $row = mysqli_query($links, $sql);
    $count = mysqli_num_rows($row);

    if ($count > 0) {
        $_SESSION['dangnhap'] = $email;
        header("Location:index.php");
    } else {
        echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Login</title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Đăng nhập </h2>
            <h2 class="inactive underlineHover"><a href="./signup.php">Đăng kí</a> </h2>

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="./img/minh.jpg" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form action="" method="POST" autocomplete="off">
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Đăng nhập" name="dangnhap">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Bạn quên mật khẩu?</a>
            </div>

        </div>
    </div>

</body>

</html>