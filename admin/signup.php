<?php
include("config/config.php");
if (isset($_POST['dangki'])) {
    $name = $_POST['hoten'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $matkhau = $_POST['pass'];

    $sql_dangki = "INSERT INTO taikhoan(hoten,email,phone,matkhau) VALUES('$name','$email','$phone','$matkhau')";
    $sql_query = mysqli_query($links, $sql_dangki);
    header('Location:login.php');
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
            <h2 class="inactive underlineHover"><a href="./login.php">Đăng nhập</a></h2>
            <h2 class="active">Đăng kí </h2>

            <!-- Icon -->
            <div class="fadeIn first">

            </div>

            <!-- Login Form -->
            <form method="POST" action="" autocomplete="off">
                <input type="text" id="login" class="fadeIn second" name="hoten" placeholder="Họ tên" required>
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="Email" required>
                <input type="text" id="login" class="fadeIn second" name="phone" placeholder="Số điện thoại" required>
                <input type="password" id="password" class="fadeIn third" name="pass" placeholder="password" required>
                <input type="submit" class="fadeIn fourth" value="Đăng kí" name="dangki">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover" href="#">Chính sách cửa hàng</a>
            </div>

        </div>
    </div>
</body>

</html>