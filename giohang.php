<?php
if (isset($_SESSION['cart'])) {
}
?>

<div class="all_detail">
    <div class="container">
        <div class="show_products">
            <div class="product_thumnail">
                <p class="text_">Sản phẩm</p>
            </div>
            <div class="product_price">
                <p class="text_">Giá</p>
            </div>
            <div class="product_quatity">
                <p class="text_">Số lượng</p>
            </div>
            <div class="product_total">
                <p class="text_">Tổng</p>
            </div>
            <div class="product_remove">

            </div>
            <div class="clear"></div>
            <hr>
        </div>
        <?php
        if (isset($_SESSION['cart'])) {
            $tongtien = 0;
            foreach ($_SESSION['cart'] as $cart_item) {
                $thanhtien = $cart_item['soluong'] * $cart_item['dongia'];
                $tongtien += $thanhtien;

        ?>
        <div class="show_products">
            <div class="product_thumnail">
                <img src="./admin/uploads/<?php echo $cart_item['hinhanh'] ?>">
                <span id="name_product"><?php echo $cart_item['tensp'] ?></span>
            </div>
            <div class="product_price">
                <p id="price"><?php echo number_format($cart_item['dongia'], 0, ',', '.') . 'vnđ'; ?></p>
            </div>
            <div class="product_quatity">
                <div class="number_pro">
                    <a href="./themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><span
                            class="glyphicon glyphicon-plus"></span></a>
                    <?php echo $cart_item['soluong'] ?>
                    <a href="./themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><span
                            class="glyphicon glyphicon-minus"></span></a>
                </div>
            </div>
            <div class="product_total">
                <p id="price"><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></p>
            </div>
            <div class="product_remove">
                <a href="./themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><span
                        class="glyphicon glyphicon-remove"></span></a>
            </div>
            <div class="clear"></div>
            <hr>
        </div>
        <?php
            }

            ?>

        <div class="border_khung">
            <div class="coupon">
                <p>Mã giảm giá</p>
            </div>
            <div class="coupon_code">
                <input type="text" placeholder="Mã ưu đãi" class="coupon_code_border">
                <hr>
                <button class="btn_giohang">Cập nhật giỏ hàng</button>
            </div>
            <div class="coupon_btn">
                <a href="#" class="btn_apdung">Áp dụng</a>
            </div>
            <div class="clear"></div>
        </div>
        <div class="total_shopping">
            <div class="">
                <h2>Cộng giỏ hàng</h2>
            </div>
        </div>
        <div class="total_col">

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ">
                <h4 class="pad24px">TẠM TÍNH</h4>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h4 class="pad24px"><?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></h4>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h4 class="pad24px">Phí ship</h4>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h4 class="pad24px">30.000</h4>
            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h4 class="pad24px">tổng</h4>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h4 class="pad24px"><?php echo number_format($tongtien + 30000, 0, ',', '.') . 'vnđ' ?></h4>
            </div>
            <?php
                if (isset($_SESSION['dangnhap'])) { ?>
            <a href="index.php?trang=checkout"><button class="btn_giohang">TIẾN HÀNH THANH TOÁN</button></a>
            <a href="./index.php"><button class="btn_giohang">MUA THÊM SẢN PHẨM</button></a>
            <?php
                } else {
                ?>
            <a href="#"><button class="btn_giohang un_active">Vui lòng đăng nhập để mua hàng</button></a>
            <a href="./index.php"><button class="btn_giohang">MUA THÊM SẢN PHẨM</button></a>
            <?php
                }
                ?>


        </div>
        <?php
        }
        ?>
    </div>
</div>