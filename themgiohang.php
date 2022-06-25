<?php
session_start();
include('./admin/config/config.php');
//them so luong
if (isset($_GET['cong'])) {
    $id = $_GET['cong'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'dongia' => $cart_item['dongia'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
            $_SESSION['cart'] = $product;
        } else {
            $tangsoluong = $cart_item['soluong'] + 1;
            if ($cart_item['soluong'] <= 9) {

                $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $tangsoluong, 'dongia' => $cart_item['dongia'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
            } else {
                $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'dongia' => $cart_item['dongia'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('Location:index.php?trang=giohang');
}
//trừ số lượng sản phẩm
if (isset($_GET['tru'])) {
    $id = $_GET['tru'];
    foreach ($_SESSION['cart'] as $cart_item) {
        if ($cart_item['id'] != $id) {
            $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'dongia' => $cart_item['dongia'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
            $_SESSION['cart'] = $product;
        } else {
            $trusoluong = $cart_item['soluong'] - 1;
            if ($cart_item['soluong'] > 1) {

                $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $trusoluong, 'dongia' => $cart_item['dongia'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
            } else {
                $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'dongia' => $cart_item['dongia'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
            }
            $_SESSION['cart'] = $product;
        }
    }
    header('Location:index.php?trang=giohang');
}
//Xóa sản phẩm
if (isset($_SESSION['cart']) && isset($_GET['xoa'])) {
    $id = $_GET['xoa'];
    foreach ($_SESSION['cart'] as $cart_item) {

        if ($cart_item['id'] != $id) {
            $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'dongia' => $cart_item['dongia'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
        }

        $_SESSION['cart'] = $product;
        header('Location:index.php?trang=giohang');
    }
}
//Thêm sản phẩm vào giỏ hàng
if (isset($_POST['themgiohang'])) {
    //session_destroy();
    $id = $_GET['idsanpham'];
    $soluong = 1;
    $sql = "SELECT * FROM sanpham WHERE idsp='" . $id . "' LIMIT 1";
    $query = mysqli_query($links, $sql);
    $row = mysqli_fetch_array($query);
    if ($row) {
        $new_product = array(array('tensp' => $row['tensp'], 'id' => $id, 'soluong' => $soluong, 'dongia' => $row['dongia'], 'hinhanh' => $row['hinhanh'], 'masp' => $row['masp']));
        //kiem tra session gio hang ton tai
        if (isset($_SESSION['cart'])) {
            $found = false;
            foreach ($_SESSION['cart'] as $cart_item) {
                //neu du lieu trung
                if ($cart_item['id'] == $id) {
                    $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $soluong + 1, 'dongia' => $cart_item['dongia'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
                    $found = true;
                } else {
                    //neu du lieu khong trung
                    $product[] = array('tensp' => $cart_item['tensp'], 'id' => $cart_item['id'], 'soluong' => $cart_item['soluong'], 'dongia' => $cart_item['dongia'], 'hinhanh' => $cart_item['hinhanh'], 'masp' => $cart_item['masp']);
                }
            }
            if ($found == false) {
                //lien ket du lieu new_product voi product
                $_SESSION['cart'] = array_merge($product, $new_product);
            } else {
                $_SESSION['cart'] = $product;
            }
        } else {
            $_SESSION['cart'] = $new_product;
        }
    }
    header('Location:index.php?trang=giohang');
}