<?php
session_start();

if (isset($_POST['thanhtoan'])) {
    header('Location:thanhtoan.php');
}
?>
<div class="marg20">
    <div class="pad_title_content">
        <h1 class="page_title">Checkout</h1>
        <ol class="alignbr breadcrumb">
            <li><a href="./index.php">Shopee</a></li>
            <li class="active">Checkout</li>
        </ol>
    </div>
</div>
<div class="container">
    <div class="row marg-bottom-30">
        <form action="thanhtoan.php" method="post">
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <h3>Thông tin liên hệ</h3>



                <div class="row marg30">

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <p>Họ và tên <span style="color: red;">*</span></p>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Họ và tên"
                            name="hoten" required>
                    </div>


                </div>
                <div class="row marg30">

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <p>Số điện thoại<span style="color: red;">*</span></p>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Số điện thoại"
                            name="phone" required>
                    </div>


                </div>
                <div class="row marg30">

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <p>Email </p>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                            name="email" required>
                    </div>


                </div>
                <div class="row marg30">

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <p>Địa chỉ<span style="color: red;">*</span></p>
                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address"
                            name="address" required>
                    </div>


                </div>
                <hr>
                <h3>Thông tin bổ sung</h3>
                <textarea style="resize: none;" name="note" id="" cols="75" rows="5"
                    placeholder="Ghi chú đơn hàng"></textarea>

            </div>

            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                <div class="row ">
                    <h3>Đơn hàng của bạn</h3>
                    <div class="">
                        <?php
                        if (isset($_SESSION['cart'])) {
                            $tongtien = 0;
                            foreach ($_SESSION['cart'] as $cart_item) {
                                $thanhtien = $cart_item['soluong'] * $cart_item['dongia'];
                                $tongtien += $thanhtien;


                        ?>
                        <div class="row product marg30">

                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                                <img src="./admin/uploads/<?php echo $cart_item['hinhanh'] ?>" alt="">
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <span><?php echo $cart_item['tensp'] ?></span>
                                <span style="color: red;">x<?php echo $cart_item['soluong'] ?></span>
                            </div>

                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <span id="price"><?php echo number_format($thanhtien, 0, ',', '.') . 'vnđ' ?></span>
                            </div>




                        </div>
                        <?php
                            }

                            ?>
                        <hr>
                        <div class="row marg30">

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <p>Tạm tính</p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <p id="price"><?php echo number_format($tongtien, 0, ',', '.') . 'vnđ' ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row marg30">

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <p>Phí ship</p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <p id="price">30.000đ</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row marg30">

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <p>Tổng cộng</p>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <p id="price"> <?php echo number_format($tongtien + 30000, 0, ',', '.') . 'vnđ' ?>
                                </p>
                            </div>
                        </div>
                        <?php
                        } else {
                        ?>
                        <h1 style="color: red;">Chúc mừng bạn đã mua hàng thành công</h1>
                        <?php
                        }
                        ?>
                        <hr>
                        <div class="row marg30">
                            <label class="radio-inline">

                                <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1">
                                Thanh
                                toán khi nhận hàng

                            </label>

                            <label class="radio-inline">

                                <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="0">
                                Chuyển
                                khoản ngân hàng

                            </label>

                        </div>

                        <input type="submit" value="Đặt hàng" class="button" name="thanhtoan">

                    </div>
                </div>
            </div>
        </form>
    </div>

</div>