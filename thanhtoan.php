<?php
session_start();
include('./admin/config/config.php');
if (isset($_POST['thanhtoan'])) {
    $name = $_POST['hoten'];
    $sdt = $_POST['phone'];
    $email = $_POST['email'];
    $diachi = $_POST['address'];
    $note = $_POST['note'];
    $giaohang = $_POST['inlineRadioOptions'];
    $sql_khachhang = "INSERT INTO khachhang(hoten,sdt,diachi,note,email,giaohang) VALUES ('$name','$sdt','$diachi','$note','$email','$giaohang')";
    $query_khachhang = mysqli_query($links, $sql_khachhang);
}
$code_order = rand(0, 9999);
$insert_cart = "INSERT INTO giohang(magiohang,trangthai,hoten,sdt,diachi) VALUE('" . $code_order . "',1,'" . $name . "','" . $sdt . "','" . $diachi . "')";
$cart_query = mysqli_query($links, $insert_cart);
if ($cart_query) {
    //them gio hang chi tiet
    foreach ($_SESSION['cart'] as $key => $value) {
        $id_sanpham = $value['id'];
        $soluong = $value['soluong'];
        $insert_order_details = "INSERT INTO cart_details(magiohang,idsp,soluongmua) VALUE('" . $code_order . "','" . $id_sanpham . "','" . $soluong . "')";
        mysqli_query($links, $insert_order_details);
    }
}
unset($_SESSION['cart']);
header("Location:index.php?trang=checkout");