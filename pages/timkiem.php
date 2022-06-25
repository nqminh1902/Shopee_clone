<div class="grid__column-10">
    <div class="home-filter">

        <span class="home-filter_label">Sắp xếp theo</span>
        <button class="home-filter__btn btn">Phổ biến</button>
        <button class="home-filter__btn btn btn--primary">Mới nhất</button>
        <button class="home-filter__btn btn">Bán chạy</button>

        <div class="select-input">
            <span class="select-input_label">Giá</span>
            <i class="select-input__icon fas fa-chevron-down"></i>
            <ul class="select-input__list">
                <li class="select-input__item">
                    <a href="" class="select-input__link">Giá thấp đến cao</a>

                </li>
                <li class="select-input__item">
                    <a href="" class="select-input__link">Giá cao đến thâp</a>

                </li>
            </ul>
        </div>

        <div class="home-filter__page">
            <span class="home-filter__page-num">
                <span class="home-filter__page-current">1</span>/14

            </span>

            <div class="home-filter__page-control">
                <a href="" class="home-filter__page-btn home-filter__page-btn--disable">
                    <i class="home-filter__page-icon fas fa-chevron-left"></i>
                </a>
                <a href="" class="home-filter__page-btn">
                    <i class="home-filter__page-icon fas fa-chevron-right"></i>

                </a>
            </div>
        </div>

    </div>

    <div class="home-product">
        <!-- Grid  -->
        <div class="grid__row">
            <?php
            if (isset($_POST['timkiem'])) {
                $tukhoa = $_POST['tukhoa'];
            }
            $sql_querytimkiem = "SELECT * FROM sanpham,danhmucsp WHERE sanpham.iddanhmuc = danhmucsp.iddanhmuc AND sanpham.tensp LIKE '%" . $tukhoa . "%'";
            if ($result_set = mysqli_query($links, $sql_querytimkiem)) {;
                $i = 0;
                while ($row = mysqli_fetch_array($result_set)) {
                    $i++;
            ?>

            <div class="grid__column-2-4">
                <!-- Product item -->
                <a class="home-product-item" href="index.php?trang=chitetsp&idsp=<?php echo $row['idsp'] ?>">



                    <div class="home-product-item_img"
                        style="background-image: url(./admin/uploads/<?php echo $row['hinhanh']; ?>">
                    </div>
                    <h4 class="home-product-item_name"><?php echo $row['tensp']; ?></h4>
                    <div class="home-product-item__price">
                        <span class="home-product-item__price-old">1.200.000đ</span>
                        <span
                            class="home-product-item__price-sale"><?php echo number_format($row['dongia'], 0, ',', '.') . 'đ'; ?></span>
                    </div>
                    <div class="home-product-item__action">
                        <span class="home-product-item_like home-product-item_like__active">
                            <i class="home-product-item_no-like far fa-heart"></i>
                            <i class="home-product-item_like-liked fas fa-heart"></i>
                        </span>
                        <div class="home-product-item-rating">
                            <i class="home-product-item__star-gold fas fa-star"></i>
                            <i class="home-product-item__star-gold fas fa-star"></i>
                            <i class="home-product-item__star-gold fas fa-star"></i>
                            <i class="home-product-item__star-gold fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                        <span class="home-product-item__sold">Đã bán 88</span>
                    </div>
                    <div class="home-product-item__origin">
                        <span class="home-product-item__brand">Whoo</span>
                        <span class="home-product-item__origin-name">Nhật Bản</span>
                    </div>
                    <div class="home-product-item__favourite">
                        <i class="fas fa-check"></i>Yêu thích
                    </div>
                    <div class="home-product-item__sale-off">
                        <span class="home-product-item__saleoff-percent">10%</span>
                        <span class="home-product-item__saleoff-lable">GIẢM</span>
                    </div>
                </a>

            </div>

            <?php
                }
            }
            ?>


        </div>
    </div>

    <ul class="pagination home-product__pagination">
        <li class="pagination-item">
            <a href="" class="pagination-item__link">
                <i class="pagination-item__icon fas fa-chevron-left"></i>
            </a>
        </li>

        <li class="pagination-item">
            <a href="" class="pagination-item__link pagination-item__active">1</a>
        </li>

        <li class="pagination-item">
            <a href="" class="pagination-item__link">2</a>
        </li>

        <li class="pagination-item">
            <a href="" class="pagination-item__link">3</a>
        </li>

        <li class="pagination-item">
            <a href="" class="pagination-item__link">4</a>
        </li>

        <li class="pagination-item">
            <a href="" class="pagination-item__link">...</a>
        </li>

        <li class="pagination-item">
            <a href="" class="pagination-item__link">14</a>
        </li>

        <li class="pagination-item">
            <a href="" class="pagination-item__link">
                <i class="pagination-item__icon fas fa-chevron-right"></i>
            </a>
        </li>
    </ul>

</div>