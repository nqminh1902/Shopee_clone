<?php
session_start();
include('./admin/config/config.php');
if (isset($_GET['action']) == 'dangxuat') {
    unset($_SESSION['dangnhap']);
    unset($_SESSION['account']);
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopee</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/trangchu.css">
    <link rel="stylesheet" href="./assets/css/basis.css">
    <link rel="stylesheet" href="./assets/css/product.css">
    <link rel="stylesheet" href="./assets/css/giohang.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,700;1,300&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="app">
        <!-- Header -->
        <?php
        include('./pages/header.php')
        ?>

        <!-- Body main -->
        <?php

        if (isset($_GET['trang'])) {
            $trang = $_GET['trang'];
        } else {
            $trang = "";
        }
        if ($trang == 'chitetsp') {
            include('./product.php');
        } else if ($trang == 'giohang') {
            include('./giohang.php');
        } else if ($trang == 'checkout') {
            include('./checkout.php');
        } else {

            include('./showproduct.php');
        }
        ?>

        <!-- Footer -->
        <?php
        include('./pages/footer.php')
        ?>
    </div>


    <!-- Form Đăng ký -->
    <!-- Modal Layout -->
    <?php
    if (isset($_POST['dangki'])) {
        $name = $_POST['hoten'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $matkhau = $_POST['pass'];
        $sql_dangki = "INSERT INTO taikhoan(hoten,email,phone,matkhau) VALUES('$name','$email','$phone','$matkhau')";
        $sql_query = mysqli_query($links, $sql_dangki);
        if ($sql_query) { ?>
    <script>
    alert("Đăng kí thành công, vui lòng đăng nhâp")
    </script>
    <?php
            header('Location:index.php');
        }
    }
    ?>
    <div class="modal js-modal-signin">
        <div class="modal__overlay">
        </div>

        <div class="modal__body ">

            <!-- Form Đăng ký -->
            <div class="auth-form js-modal-signin-container">
                <form action="" method="post" autocomplete="off">

                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng ký</h3>
                            <span class="auth-form__switch-btn">Đăng nhập</span>
                        </div>
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" name="hoten" class="auth-form__input" placeholder="Nhập Họ tên"
                                    required>
                            </div>
                            <div class="auth-form__group">
                                <input type="email" name="email" class="auth-form__input" placeholder="Nhập Email"
                                    required>
                            </div>
                            <div class="auth-form__group">
                                <input type="text" name="phone" class="auth-form__input"
                                    placeholder="Nhập số điện thoại" required>
                            </div>
                            <div class="auth-form__group">
                                <input type="password" name="pass" class="auth-form__input" placeholder="Nhập mật khẩu"
                                    required>
                            </div>
                        </div>

                        <div class="auth-form__aside">
                            <p class="auth-form__pilicy-text">
                                Bằng việc đăng kí, bạn đồng ý với Shopee về
                                <a href="" class="auth-form__text-link">Điều khoản dịch vụ</a>&
                                <a href="" class="auth-form__text-link">Chính sách bảo mật</a>
                            </p>
                        </div>

                        <div class="auth-form__controls">
                            <button class="btn btn--normal auth-form__controls-back js-modal-close">TRỞ LẠI</button>
                            <button class=" btn btn--primary" name="dangki">ĐĂNG KÍ</button>
                        </div>
                    </div>

                    <div class="auth-form__socials">
                        <a href="" class="auth-form__socials-facebook btn btn--size-s btn--icon">
                            <i class="auth-form__socials-icon fab fa-facebook"></i>
                            <span class="auth-form__socials-title">Kết nối với Facebook</span>
                        </a>
                        <a href="" class="auth-form__socials-google btn btn--size-s btn--icon">
                            <i class="auth-form__socials-icon fab fa-google"></i>
                            <span class="auth-form__socials-title">Kết nối với Google</span>
                        </a>
                    </div>
                </form>
            </div>


        </div>
    </div>

    <?php
    if (isset($_POST['dangnhap'])) {
        $email = $_POST['email'];
        $matkhau = $_POST['password'];
        $sql = "SELECT * FROM taikhoan WHERE email='" . $email . "' AND matkhau='" . $matkhau . "'";
        $row = mysqli_query($links, $sql);
        $count = mysqli_num_rows($row);
        $login = mysqli_fetch_array($row);

        if ($count > 0) {
            $_SESSION['dangnhap'] = $email;
            $_SESSION['account'] = $login['hoten'];

    ?>
    <script>
    alert("Đang nhập thành công")
    </script>
    <?php
        } else { ?>
    <script>
    alert('Đăng nhập thất bại')
    </script>
    <?php
        }
    }
    ?>
    <!-- Đăng nhập -->
    <div class="modal js-modal-login">
        <div class="modal__overlay">
        </div>

        <div class="modal__body ">


            <div class="auth-form js-modal-login-container">
                <form action="" method="post">
                    <div class="auth-form__container">
                        <div class="auth-form__header">
                            <h3 class="auth-form__heading">Đăng nhập</h3>
                            <span class="auth-form__switch-btn">Đăng ký</span>
                        </div>
                        <div class="auth-form__form">
                            <div class="auth-form__group">
                                <input type="text" class="auth-form__input" name="email" placeholder="Nhập Email">
                            </div>
                            <div class="auth-form__group">
                                <input type="password" class="auth-form__input" name="password"
                                    placeholder="Nhập mật khẩu">
                            </div>

                        </div>

                        <div class="auth-form__aside">
                            <div class="auth-form__help">
                                <a href="" class="auth-form__help-link auth-form__help-forgot">Quên mật khẩu</a>
                                <span class="auth-form__help-separate"></span>
                                <a href="" class="auth-form__help-link">Cần trợ giúp?</a>
                            </div>
                        </div>

                        <div class="auth-form__controls">
                            <button class="btn btn--normal auth-form__controls-back js-modal-close">TRỞ LẠI</button>
                            <button class="btn btn--primary " name="dangnhap">ĐĂNG NHẬP</button>

                        </div>

                    </div>

                    <div class="auth-form__socials">
                        <a href="" class="auth-form__socials-facebook btn btn--size-s btn--icon">
                            <i class="auth-form__socials-icon fab fa-facebook"></i>
                            <span class="auth-form__socials-title">Kết nối với Facebook</span>
                        </a>
                        <a href="" class="auth-form__socials-google btn btn--size-s btn--icon">
                            <i class="auth-form__socials-icon fab fa-google"></i>
                            <span class="auth-form__socials-title">Kết nối với Google</span>
                        </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script src="./assets/js/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script>
    function showSuccessToast() {
        toast({
            title: "Thành công!",
            message: "Bạn đã đăng ký thành công tài khoản tại F8.",
            type: "success",
            duration: 5000
        });
    }
    </script>
</body>

</html>