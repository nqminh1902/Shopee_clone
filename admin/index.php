<?php
include('./config/config.php');
session_start();
if (!isset($_SESSION['dangnhap'])) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>XSHOP-Admin Template</title>

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
    <!-- ====== Moris Chart ========== -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


</head>

<body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>GIÀY<span>XSHOP</span></b></a>


            </ul>
            <!--  notification end -->
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Đăng Xuất</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="index.html"><img src="img/logo.png" class="img-circle" width="130"></a>
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
                            <li><a href="./danhmucsp.php">Danh mục sản phẩm</a></li>
                            <li><a href="./khachhang.php">Quản Lý Khách Hàng</a></li>
                            <li><a href="./quanlinhanvien.php">Quản Lý Nhân viên</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>Báo Cáo</span>
                        </a>
                        <ul class="sub">
                            <li><a href="./baocao_thongke.php">báo cáo , thống kê</a></li>


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
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                <div class="home"><br>
                    <a href="">Trang chủ</a>
                </div>
                <div class="duoi"><br>

                    <i class="fa fa-group"></i>
                    <span>Báo cáo thống kê</span>
                </div>
                <div class="row mt">
                    <!-- SERVER STATUS PANELS -->
                    <span id="text-date"></span>
                    <div class="col-md-12 mb">

                        <div id="myfirstchart" style="height: 250px;"></div>
                    </div>
                    <!-- /col-md-4 -->
                </div>
                <div class="sanpham"><br>

                    <i class="fa fa-calendar"></i>
                    <span>Quản lý sản phẩm</span>
                </div> <br><br>
                <?php
                $query = "SELECT `danhmucsp`.*,COUNT(sanpham.iddanhmuc) AS 'number_cate' FROM `sanpham` INNER JOIN `danhmucsp` On sanpham.iddanhmuc = danhmucsp.iddanhmuc GROUP BY sanpham.iddanhmuc";
                $result = mysqli_query($links, $query);
                $data = [];
                while ($row = mysqli_fetch_array($result)) {
                    $data[] = $row;
                }

                ?>
                <div class="row">
                    <!-- TWITTER PANEL -->
                    <div class="col-md-12 mb">
                        <div id="piechart_3d" style="width: 900px; height: 500px;"></div>
                    </div>
                    <!-- /col-md-4 -->

                    <!-- /col-md-4 -->
                </div>


                <style>
                .home {
                    margin-top: 20px;
                    background-color: rgb(228, 220, 230);
                    width: auto;
                    height: 60px;
                    border-radius: 5px;

                }

                .home a {
                    text-decoration: none;
                    padding-left: 20px;
                    color: black;
                    font-family: Georgia, 'Times New Roman', Times, serif;
                    font-size: 15px;
                }

                .duoi {
                    background-color: rgb(118, 230, 250);
                    margin-top: 20px;
                    height: 60px;
                    border-radius: 5px;
                    text-align: center;
                }

                .duoi span {
                    color: black;
                    font-size: Georgia, 'Times New Roman', Times, serif;
                }

                .sanpham {
                    background-color: rgb(204, 250, 118);
                    margin-top: 20px;
                    height: 60px;
                    border-radius: 5px;
                    text-align: center;
                }

                .sanpham span {
                    color: black;
                    font-size: Georgia, 'Times New Roman', Times, serif;
                }
                </style>


                <!-- /col-lg-9 END SECTION MIDDLE -->
                <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
                <!-- /col-lg-3 -->
                <!-- /row -->
            </section>
        </section>
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
    <!-- js placed at the end of the document so the pages load faster -->
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
    <script type="text/javascript">
    $(document).ready(function() {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to XSHOP!',
            // (string | mandatory) the text inside the notification
            text: 'Di chuột qua tôi để bật Nút đóng. Bạn có thể ẩn thanh bên trái khi nhấp vào nút bên cạnh biểu trưng.',
            // (string | optional) the image to display on the left
            image: 'img/logo.png',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
    </script>
    <!-- ===========Biểu đồ thống kê============== -->
    <script type="text/javascript">
    // $(document).ready(function() {
    //     thongke()
    //     var char = new Morris.Area({
    //         element: 'myfirstchart',

    //         xkey: 'date',

    //         ykeys: ['date', 'order', 'sales', 'quantity'],

    //         labels: ['Ngày đặt', 'Đơn hàng', 'Doanh thu', 'Số lượng bán ra']
    //     });

    //     function thongke() {
    //         const text = '365 ngay qua';
    //         $.ajax({
    //             url: "./module/thongke.php",
    //             method: 'POST',
    //             datatype: "JSON",

    //             success: function(data) {
    //                 char.setData(data);
    //                 $('#text-date').text(text)
    //             }
    //         })
    //     }

    // })
    </script>
    <!-- ============= Biểu đồ tròn============= -->
    <script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['tendanhmuc', 'number_cate'],
            <?php
                foreach ($data as $key) {
                    echo "['" . $key['tendanhmuc'] . "'," . $key['number_cate'] . "],";
                }
                ?>
        ]);

        var options = {
            title: 'Sản phẩm',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
    }
    </script>
    <script type="application/javascript">
    $(document).ready(function() {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function(e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [{
                    type: "text",
                    label: "Special event",
                    badge: "00"
                },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
    });

    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
    </script>

</body>

</html>