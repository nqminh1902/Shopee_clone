<?php
include_once './config/config.php';

if (isset($_POST['btn-save'])) {

    $name = $_POST['tensp'];
    $price = $_POST['dongia'];

    $hinhanh = $_FILES['hinhanh']['name'];
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    $hinhanh = time() . "_" . $hinhanh;
    $danhmuc = $_POST['danhmuc'];
    $chitiet = $_POST['chitiet'];
    $soluong = $_POST['soluong'];
    $mota = $_POST['mota'];



    $sql_query = "INSERT INTO sanpham(tensp,dongia,hinhanh,iddanhmuc,chitiet,soluong,mota) VALUES('$name','$price','$hinhanh','$danhmuc','$chitiet','$soluong','$mota')";

    mysqli_query($links, $sql_query);
    move_uploaded_file($hinhanh_tmp, 'uploads/' . $hinhanh);

    if (!$Error) {
?>
<script type="text/javascript">
alert('Data Are Inserted Successfully ');
window.location.href = 'quanlisp.php';
</script>
<?php
    } else {
    ?>
<script type="text/javascript">
alert('error occured while inserting your data');
</script>
<?php
    }
    // sql query execution function
}
?>

<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" http-equiv="Content-Type" content="text/html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>quanlinhanvien</title>

    <!-- Favicons -->
    <link href="img/tải xuống.png" rel="icon">
    <link href="img/tải xuống.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="lib/chart-master/Chart.js"></script>



    <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->

</head>

<body>
    <section id="container">

        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>

            <a href="index.html" class="logo"><b>GIÀY<span>XSHOP</span></b></a>






        </header>

        <aside>
            <div id="sidebar" class="nav-collapse ">

                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="index.html"><img src="img/logo.png" class="img-circle" width="130"></a>
                    </p>
                    <h5 class="centered">Thời Trang Hiện Đại</h5>
                    <li class="mt">
                        <a class="active" href="index.html">
                            <i class="fa fa-home"></i>
                            <span>Trang chủ</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-edit"></i>
                            <span>Quản Lý</span>
                        </a>
                        <ul class="sub">
                            <li><a href="donhang.php">Quản Lý Đơn Hàng</a></li>
                            <li><a href="#">Quản Lý Sản Phẩm</a></li>
                            <li><a href="#">Tìm kiếm Sản Phẩm</a></li>
                            <li><a href="khachhang.php">Quản Lý Khách Hàng</a></li>
                            <li><a href="quanlinhanvien.php">Quản Lý Người Dùng</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>Báo Cáo</span>
                        </a>
                        <ul class="sub">
                            <li><a href="#">báo cáo , thống kê</a></li>


                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Pages</span>
                        </a>
                        <ul class="sub">
                            <li><a href="#">GIÀY NIKE</a></li>
                            <li><a href="#">GIÀY ADIDAS</a></li>
                            <li><a href="#">GIÀY THỜI TRANG</a></li>
                            <li><a href="#">GIÀY VANS</a></li>
                            <li><a href="#">Kiểm Tra Đơn Hàng</a></li>
                            <li><a href="#">Tin Tức </a></li>
                            <li><a href="#">Liên Hệ</a></li>
                            <li><a href="">Đăng Nhập</a></li>

                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-user"></i>
                            <span>Tài Khoản</span>
                        </a>
                        <ul class="sub">
                            <li><a href="#">Thay đổi thông tin</a></li>
                            <li><a href="#">Thoát</a></li>

                        </ul>
                    </li>
                </ul>

            </div>
        </aside>

        <section id="main-content">
            <section class="wrapper">
                <div class="start">
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                            <p class="navbar-brand mb-0 h1">Thêm Sản Phẩm</p>
                        </div>
                    </nav>
                </div>
                <div class="row mt">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="panel panel-default panel-table">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col col-xs-6">

                                        </div>

                                    </div>
                                </div>
                                <div class="panel-body">

                                    <div id="content">
                                        <form method="post" enctype="multipart/form-data">
                                            <table class="main_table" align="center">
                                                <tr>
                                                    <td align="center"><a href="./quanlisp.php">Quay trở về</a>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><input type="text" name="tensp" placeholder="Tên sản phẩm"
                                                            required />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="dongia" placeholder="Đơn giá"
                                                            required /></td>
                                                </tr>
                                                <tr>
                                                    <td><input type="text" name="soluong" placeholder="Số lượng hàng"
                                                            required />
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><input type="file" name="hinhanh" /></td>

                                                </tr>

                                                <tr>
                                                    <td>
                                                        <select name="danhmuc">
                                                            <?php
                                                            $sql_danhmuc = "SELECT * FROM danhmucsp ORDER BY iddanhmuc DESC";
                                                            $query_danhmuc = mysqli_query($links, $sql_danhmuc);
                                                            while ($row_danhmuc = mysqli_fetch_array($query_danhmuc)) {
                                                            ?>
                                                            <option value="<?php echo $row_danhmuc['iddanhmuc'] ?>">
                                                                <?php echo $row_danhmuc['tendanhmuc'] ?></option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><textarea rows="5" name="chitiet" style="resize: none"
                                                            placeholder="Chi tiết sp"></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><textarea rows="5" name="mota" style="resize: none"
                                                            placeholder="Mô tả sp"></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><button type="submit"
                                                            name="btn-save"><strong>Lưu</strong></button></td>
                                                </tr>

                                            </table>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </section>
        </section>
        <!-- /MAIN CONTENT -->
        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                <p>
                    &copy; Hệ thống cửa hàng <strong>Xshop</strong>. Luôn sẵn sàng phục vụ
                </p>
                <div class="credits">
                    <!--
                You are NOT allowed to delete the credit link to TemplateMag with free version.
                You can delete the credit link only if you bought the pro version.
                Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
                Licensing information: https://templatemag.com/license/
              -->
                    Bản quyền © 2018 <a href="https://templatemag.com/"> Giày xShop.</a>
                </div>
                <a href="index.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>

    <style>
    .start {
        margin-top: 20px;
        background-color: rgb(133, 216, 205);
        width: auto;

        border-radius: 5px;
    }

    .start p {

        padding-left: 20px;
        color: black;
        font-family: Georgia, 'Times New Roman', Times, serif;
        font-size: 20px;
    }
    </style>
    </section>
    </section>
    <script src="lib/jquery/jquery.min.js"></script>

    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="lib/sparkline-chart.js"></script>
    <script src="lib/zabuto_calendar.js"></script>

</body>

</html>