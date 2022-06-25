<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Tìm kiếm sản phẩm</title>

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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

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
    
      
        
        <!--  notification end -->
     
     
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
          <p class="centered"><a href="index.html"><img src="img/logo.png" class="img-circle" width="130"></a></p>
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
              <li><a href="donhang.html">Quản Lý Đơn Hàng</a></li>
              <li><a href="#">Quản Lý Sản Phẩm</a></li>
              <li><a href="search.html">Tìm kiếm Sản Phẩm</a></li>
              <li><a href="khachhang.html">Quản Lý Khách Hàng</a></li>
              <li><a href="#">Quản Lý Người Dùng</a></li>
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
              <li><a href="login.html">Đăng Nhập</a></li>
              
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
    <!-- As a link -->
    <section id="main-content">
        <section class="wrapper">
            <div class="row mt" >
                <div class="col-md-12">
                    <div class="content-panel">
                    <form method="get" action="https://hocwebgiare.com/thiet_ke_web_chuan_demo/search_by_category/ketquatim.php" name="timkiem">
                        <div class="container"> 
                         <div class="row"> 
                          <h1 class="text-center">Tìm kiếm sản phẩm</h1> 
                          <div class="col-xs-8 col-xs-offset-2">       
                           <div class="input-group"> 
                            <div class="input-group-btn search-panel"> 
                             <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">    <span id="search_concept">Danh mục sản phẩm</span> <span class="caret"></span> 
                             </button> 
                             <ul class="dropdown-menu" role="menu"> 
                              <li><a href="#">GIÀY NIKE</a>
                              </li> 
                              <li><a href="#">GIÀY ADIDAS</a>
                              </li> 
                              <li><a href="#">GIÀY VANS</a>
                              </li> 
                              <li><a href="#">GIÀY THỜI TRANG</a>
                              </li> 
                              <li class="divider"></li> 
                              <li><a href="#">Tất cả</a>
                              </li> 
                             </ul> 
                            </div> <input type="hidden" name="search_param" value="all" id="search_param"> <input type="text" class="form-control" name="keyword" placeholder="Tìm kiếm sản phẩm, thương hiệu hay nhãn hàng mong muốn …"> <span class="input-group-btn">
                      <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button></span> 
                           </div> 
                          </div>  
                         </div>
                        </div>
                       </form>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer"  style="margin-top: 25%;">
      <div class="text-center">
        <p>
          &copy; Hệ thống cửa hàng  <strong>Xshop</strong>. Luôn sẵn sàng phục vụ
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
      .start{
      margin-top: 20px;
      background-color:rgb(133, 216, 205);
      width: auto;
      
      border-radius: 5px;
      }
      .start p{
         
          padding-left: 20px;
          color:black;
          font-family:Georgia, 'Times New Roman', Times, serif;
          font-size: 20px;
      }
      .sea{
          width: 250px;
          height: 30px;
          
          border-radius: 2px;
          float: left;
      
      }
      body{    
      margin-top:20px;
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
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>

</body>
</html>
