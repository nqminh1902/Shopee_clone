<?php
include_once './config/config.php';
// delete condition
if (isset($_GET['delete_id'])) {
    $sql_query = "DELETE FROM danhmucsp WHERE iddanhmuc=" . $_GET['delete_id'];
    mysqli_query($links, $sql_query);
    header("Location: $_SERVER[PHP_SELF]");
}
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8" http-equiv="Content-Type" content="text/html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Sản phẩm</title>

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

    <script type="text/javascript">
    function edt_id(id) {
        if (confirm('Bạn muốn sửa thông tin ?')) {
            window.location.href = 'suadanhmuc.php?edit_id=' + id;
        }
    }

    function delete_id(id) {
        if (confirm('Bạn chắc chắn muốn xóa ?')) {
            window.location.href = 'danhmucsp.php?delete_id=' + id;
        }
    }
    </script>
    <title>Danh mục sản phẩm</title>
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
                    <p class="centered"><a href="index.php"><img src="./img/logo.png" class="img-circle"
                                width="130"></a>
                    </p>
                    <h5 class="centered">Thời Trang Hiện Đại</h5>
                    <li class="mt">
                        <a class="active" href="index.php">
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
                            <li><a href="./donhang.php">Quản Lý Đơn Hàng</a></li>
                            <li><a href="./quanlisp.php">Quản Lý Sản Phẩm</a></li>
                            <li><a href="./danhmucsp.php">Quan lý danh mục sản phẩm</a></li>
                            <li><a href="./khachhang.php">Quản Lý Khách Hàng</a></li>
                            <li><a href="./quanlinhanvien.php">Quản Lý nhân viên</a></li>
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
                            <li><a href="#">Tin Tức </a></li>
                            <li><a href="#">Liên Hệ</a></li>
                            <li><a href="#">Đăng Nhập</a></li>

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
                            <p class="navbar-brand mb-0 h1">Danh sách sản phẩm</p>
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
                                        <div class="col col-xs-6 text-right">
                                            <button type="button" class="btn btn-sm btn-primary btn-create">
                                                <a href="./themdanhmuc.php" style="color: white;">thêm mới</a></button>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-striped table-bordered table-list">
                                        <thead>
                                            <tr>

                                                <th class="hidden-xs">id danh mục</th>
                                                <th>Tên danh mục</th>


                                                <th><em class="fa fa-cog"></em>
                                                </th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php
                                            $sql_query = "SELECT * FROM danhmucsp";
                                            if ($result_set = mysqli_query($links, $sql_query)) {;
                                                $i = 0;
                                                while ($row = mysqli_fetch_array($result_set)) {
                                                    $i++;
                                            ?>
                                            <tr>
                                                <td class="hidden-xs"><?php echo $i; ?></td>


                                                <td><?php echo $row['tendanhmuc']; ?></td>


                                                <td align="center"><a
                                                        href="javascript:edt_id('<?php echo $row[0]; ?>')"><img
                                                            src="./img/b_edit.png" align="EDIT" /></a></td>
                                                <td align="center"><a
                                                        href="javascript:delete_id('<?php echo $row[0]; ?>')"><img
                                                            src="./img/b_drop.png" align="DELETE" /></a></td>
                                            </tr>
                                            <?php
                                                }
                                            } else {
                                                ?>
                                            <tr>
                                                <td colspan="5">No Data Found !</td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col col-xs-4">Trang 1 của 5 </div>
                                        <div class="col col-xs-8">
                                            <ul class="pagination hidden-xs pull-right">
                                                <li><a href="#">1</a>
                                                </li>
                                                <li><a href="#">2</a>
                                                </li>
                                                <li><a href="#">3</a>
                                                </li>
                                                <li><a href="#">4</a>
                                                </li>
                                                <li><a href="#">5</a>
                                                </li>
                                            </ul>
                                            <ul class="pagination visible-xs pull-right">
                                                <li><a href="#">«</a>
                                                </li>
                                                <li><a href="#">»</a>
                                                </li>
                                            </ul>
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