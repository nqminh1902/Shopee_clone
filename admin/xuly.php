<?php
include('./config/config.php');
if (isset($_GET['code'])) {
    $code_cart = $_GET['code'];
    $sql_update = "UPDATE giohang SET trangthai=0 WHERE magiohang='" . $code_cart . "'";
    $query = mysqli_query($links, $sql_update);
    header('Location:donhang.php');
}