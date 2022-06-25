<?php
if (isset($_GET['idsp'])) {
    $sql_chitietsp = "SELECT * FROM sanpham WHERE sanpham.idsp =" . $_GET['idsp'];
    $query_chitietsp = mysqli_query($links, $sql_chitietsp);
    $row = mysqli_fetch_array($query_chitietsp)
?>
<div class="container-fluid">

    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb__pad">
                <li class="breadcrumb-item"><a href="#">Shopee</a></li>
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $row['tensp'] ?></li>
            </ol>
        </nav>
        <form action="themgiohang.php?idsanpham=<?php echo $row['idsp']; ?>" method="post">

            <div class="row row__color ">

                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
                    <img src="./admin/uploads/<?php echo $row['hinhanh'] ?>" alt="" class="product__img">
                    <div class="share-icon">
                        <span>Chia sẻ: </span>
                        <i class="share-icon__mess fab fa-facebook-messenger"></i>
                        <i class="share-icon__facebook fab fa-facebook"></i>
                        <i class="share-icon__pinterest fab fa-pinterest"></i>
                        <i class="share-icon__twitter fab fa-twitter"></i>
                    </div>
                </div>

                <div class="col-xs-7 col-sm-7 col-md-7 col-lg-7">
                    <h2>
                        <?php echo $row['tensp'] ?>
                    </h2>
                    <div class="rating">
                        <ul class="rating__list ">
                            <li class="rating__item rating__item-separarte">
                                <span class="rating-number ">4.8</span>
                                <i class="rating_star fas fa-star"></i>
                                <i class="rating_star fas fa-star"></i>
                                <i class="rating_star fas fa-star"></i>
                                <i class="rating_star fas fa-star"></i>
                                <i class="rating_star far fa-star"></i>
                            </li>
                            <li class="rating__item rating__item-separarte">
                                <span class="rating__numer_lrg">13</span>
                                <span>Đánh giá</span>
                            </li>
                            <li class="rating__item">
                                <span class="rating__numer_lrg">349</span>
                                <span>Đã bán</span>
                            </li>
                        </ul>

                    </div>

                    <div class="buy-price">
                        <div class="price">

                            <span class="old-price">₫198.000</span>
                            <span
                                class="new-price"><?php echo number_format($row['dongia'], 0, ',', '.') . 'đ' ?></span>
                        </div>
                        <div class="quantity-sale">
                            <span class="quantity-sale__number">50%</span>
                        </div>
                    </div>
                    <div class="buy-btn">
                        <button class="buy-btn-lrg">
                            <i class="fas fa-cart-plus"></i>
                            <span>Thêm vào giỏ hàng</span>
                        </button>
                        <button class="buy-btn-med" name="themgiohang">
                            <span>Mua ngay</span>
                        </button>
                    </div>
                    <div class="protected">
                        <img src="./assets/img/protect.png" alt="">
                        <span>Shopee Đảm Bảo</span>
                        <span class="protected-text">3 ngày trả hàng/ hoàn tiền</span>
                    </div>
                </div>


            </div>
            <div class="row row__color">
                <div class="product_detail">
                    <span>Chi tiết sản phẩm</span>
                    <p><?php echo $row['chitiet'] ?></p>
                </div>
                <div class="product_detail">
                    <span>Mô tả sản phẩm</span>
                    <p><?php echo $row['mota'] ?></p>
                </div>
            </div>
        </form>
    </div>
</div>
<?php
}
?>