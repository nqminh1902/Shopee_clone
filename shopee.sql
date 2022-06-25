-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 17, 2022 lúc 06:18 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shopee`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_details`
--

CREATE TABLE `cart_details` (
  `idcart_details` int(11) NOT NULL,
  `magiohang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_details`
--

INSERT INTO `cart_details` (`idcart_details`, `magiohang`, `idsp`, `soluongmua`, `thanhtien`) VALUES
(45, 'XSHOPNEW7641', 14, 2, 1160000),
(46, 'XSHOPNEW4231', 17, 1, 320000),
(47, 'XSHOPNEW2223', 18, 1, 580000),
(48, 'XSHOPNEW2223', 11, 1, 580000),
(49, 'XSHOPNEW6410', 18, 1, 680000),
(50, 'XSHOPNEW6410', 7, 1, 680000),
(51, 'XSHOPNEW6589', 20, 1, 450000),
(52, 'XSHOPNEW4407', 18, 1, 280000),
(53, '9974', 7, 1, 0),
(54, '6471', 9, 3, 0),
(55, '6471', 16, 1, 0),
(56, '5088', 16, 1, 0),
(57, 'XSHOPNEW7912', 14, 1, 0),
(58, 'XSHOPNEW5706', 10, 1, 0),
(59, 'XSHOPNEW5991', 8, 1, 0),
(60, 'XSHOPNEW7498', 7, 1, 0),
(61, 'XSHOPNEW1586', 7, 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucbaiviet`
--

CREATE TABLE `danhmucbaiviet` (
  `id_danhmucbv` int(11) NOT NULL,
  `tendanhmucbv` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucbaiviet`
--

INSERT INTO `danhmucbaiviet` (`id_danhmucbv`, `tendanhmucbv`, `thutu`) VALUES
(2, 'Công nghệ', 1),
(3, 'Đời sống', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `iddanhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`iddanhmuc`, `tendanhmuc`) VALUES
(1, 'Nike'),
(2, 'Adidas'),
(3, 'Vans'),
(4, 'Giày thời trang');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giohang`
--

CREATE TABLE `giohang` (
  `idgiohang` int(11) NOT NULL,
  `magiohang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(11) NOT NULL,
  `diachi` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `cart_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giohang`
--

INSERT INTO `giohang` (`idgiohang`, `magiohang`, `trangthai`, `hoten`, `sdt`, `diachi`, `cart_date`) VALUES
(41, 'XSHOPNEW7641', 0, 'nguyễn ánh nguyệt', 964189895, 'số nhà 97, Lê Đức Thọ', ''),
(42, 'XSHOPNEW4231', 0, 'nguyễn đình huy', 964189895, 'số nhà 97, Lê Đức Thọ', ''),
(43, 'XSHOPNEW2223', 0, 'nguyễn Minh Hải', 964189895, 'số nhà 97, Lê Đức Thọ', ''),
(44, 'XSHOPNEW6410', 0, 'nguyễn đăng sơn', 964189895, 'số nhà 97, Lê Đức Thọ', ''),
(45, 'XSHOPNEW6589', 0, 'Đinh Công Trứ', 964189895, 'số nhà 97, Lê Đức Thọ', ''),
(46, 'XSHOPNEW4407', 0, 'nguyễn đăng sơn', 964189895, 'số nhà 97, Lê Đức Thọ', ''),
(47, '9974', 0, 'minh admin', 29349, 'hákfsdf', '2022-06-17 20:36:24'),
(48, '6471', 0, 'Công Trứ', 949835, 'Hà Nội', '2022-06-17 21:32:53'),
(49, '5088', 0, 'Hoàng Anh', 923492, 'ádasd', '2022-06-17 21:37:50'),
(50, 'XSHOPNEW7912', 0, 'Tuấn', 934892, 'jadskashf', '2022-06-17 21:44:54'),
(51, 'XSHOPNEW5706', 0, 'Công Trứ', 923487, 'Nam Định', '2022-06-17 22:02:05'),
(52, 'XSHOPNEW5991', 0, 'Văn Tùng', 928349, 'NamĐinh', '2022-06-17 22:07:35'),
(53, 'XSHOPNEW7498', 0, 'Công Phượng', 923498, 'hádkasd', '2022-06-17 22:16:05'),
(54, 'XSHOPNEW1586', 0, 'Hoàng EM', 9349234, 'Hà Nội', '2022-06-17 22:23:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `idkh` int(11) NOT NULL,
  `hoten` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(12) NOT NULL,
  `diachi` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `giaohang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `hoten`, `sdt`, `diachi`, `note`, `email`, `giaohang`) VALUES
(58, 'nguyễn ánh nguyệt', 964189895, 'số nhà 97, Lê Đức Thọ', 'giao đúng giờ', 'dinhcongtru22032001@gmail.com', 1),
(59, 'nguyễn đình huy', 964189895, 'số nhà 97, Lê Đức Thọ', 'jhfv', 'dinhcongtru22032001@gmail.com', 1),
(60, 'nguyễn Minh Hải', 964189895, 'số nhà 97, Lê Đức Thọ', '', 'nguyenquan160201@gmail.com', 1),
(61, 'nguyễn đăng sơn', 964189895, 'số nhà 97, Lê Đức Thọ', 'giao hàng đúng giờ', 'dinhcongtru22032001@gmail.com', 1),
(62, 'Đinh Công Trứ', 964189895, 'số nhà 97, Lê Đức Thọ', 'giao hàng 8h sáng', 'dinhcongtru22032001@gmail.com', 1),
(63, 'nguyễn đăng sơn', 964189895, 'số nhà 97, Lê Đức Thọ', 'gaio hàng', 'dinhcongtru22032001@gmail.com', 1),
(64, 'Minh', 9834923, 'jsdfhhh', '', 'nqminh@g', 1),
(65, 'minh admin', 29349, 'hákfsdf', '', 'admin@em', 1),
(66, 'Công Trứ', 949835, 'Hà Nội', 'fsdfs', 'minh@g', 1),
(67, 'Hoàng Anh', 923492, 'ádasd', '', 'bede@g', 1),
(68, 'Tuấn', 934892, 'jadskashf', '', 'tuan@email', 1),
(69, 'Công Trứ', 923487, 'Nam Định', '', 'dinhcongtru22032001@gmail.com', 0),
(70, 'Văn Tùng', 928349, 'NamĐinh', '', 'dinhcongtru22032001@gmail.com', 0),
(71, 'Công Phượng', 923498, 'hádkasd', '', 'dinhcongtru22032001@gmail.com', 1),
(72, 'Hoàng EM', 9349234, 'Hà Nội', '', 'aksdjk@gmail', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnhanvien` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` int(12) NOT NULL,
  `diachi` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`idnhanvien`, `hoten`, `sdt`, `diachi`) VALUES
(0, 'Đinh Công Trứ', 2147483647, 'Nam Định'),
(1, 'Nguyen Quang Minh', 9364724, 'hà Noi'),
(2, 'nguyễn đăng sơn', 964189895, 'Hải Dương'),
(3, 'Nguyễn Hải Yến', 2384793, 'Long Biên'),
(10, 'nguyễn đăng sơn', 233922320, 'hà nội');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `masp` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dongia` float NOT NULL,
  `hinhanh` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `iddanhmuc` int(11) NOT NULL,
  `chitiet` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `mota` varchar(10000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `masp`, `dongia`, `hinhanh`, `iddanhmuc`, `chitiet`, `soluong`, `mota`) VALUES
(7, 'Giày Thể Thao XSPORT Conver.se cao cổ 1970s REP', '', 400000, '1646319452_1634556628_MG_8528.jpg', 4, 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.', 0, ''),
(8, 'Giày Thể Thao XSPORT Yeezy Boost REP', '', 1000000, '1646319435_1633147727_MG_6943.jpg', 3, 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.', 0, ''),
(9, 'Giày Thể Thao XSPORT Ni.ke Air Force 1 Full Trắng REP', '', 400000, '1646319405_1634556755_z2364600896642_485d93610eee6f881b5cce1eb1323f06-scaled.jpg', 1, 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.', 100, 'Được làm từ chất liệu da đặc trưng với chất lượng hoàn hảo\r\nNike Air Force 1 được thiết kế hướng tới sự đơn giản nhưng vô cùng tinh tế. Đây là sự lựa chọn hoàn hảo cho các tín đồ yêu thể thao khi có thể dễ dàng phối hợp trang phục hằng ngày để khẳng định phong cách thời trang.\r\nPhối màu đơn giản nhưng vô cùng tinh tế.'),
(10, 'Giày Thể Thao XSPORT Ni.ke Jordan 1 Low REP', '', 550000, '1646319390_1633147519_z2077503002271_01faf21b4b4c32f91923383638f5b371.jpg', 1, 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.', 0, ''),
(11, 'Giày Thể Thao XSPORT Van.sVault X Fear OF God REP', '', 300000, '1646319376_1633143620_z2446341388172_750f509b2aea85976e6b82c8e1f9eb5c.jpg', 3, 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.', 30, 'Kiểu dáng: Giày sneaker, giày thể thao\r\nChất liệu: Vải da\r\nĐộ cao: 3cm\r\nMàu sắc: Đen trắng\r\nKích cỡ: 36-43\r\nĐộ đàn hồi, co dãn tốt, ôm khít vừa chân\r\nĐế đúc cao su nguyên khối, chắc chắn.'),
(12, 'Giày Thể Thao XSPORT Ni.ke air shadow Rep 1:1', '', 500000, '1646319362_1633105988_8cf9adffbb11494f1000-scaled.jpg', 1, 'Thiết kế đẹp mắt, gọn gàng, màu sắc đẹp, trang nhã.', 30, 'Giày Nike Air Force 1 Shadow là một trong những sản phẩm mới nhất.\r\n\r\nVới tất cả những ai đã sở hữu đôi giày Nike Air Force 1 Shadow đều khẳng định rằng chất lượng và mẫu mã mà nó mang lại là vô cùng tốt. Còn những người chưa từng sử dụng thì ấn tượng đầu tiên về nó cũng chính là thiết kế đẹp mắt, gọn gàng, màu sắc đẹp, trang nhã.\r\n\r\nMàu sắc: xanh ngọc, kem xanh hồng, kim cương, kem vàng'),
(14, 'Giày Thể Thao XSPORT MLB', '', 580000, '1646319331_1632810248_MG_5045.jpg', 4, 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.', 30, 'Đôi giày MLB Màu Trắng Logo Đen, xanh, đỏ với thiết kế hiện đại, thời trang được làm từ chất liệu da cao cấp, bền đẹp, thời gian sử dụng lâu dài.\r\n Dễ dàng kết hợp với nhiều trang phục khác nhau để tạo nên 1 set đồ đẹp khi đi chơi, đi học hay dạo phố.\r\n Đế giày được độn cao giúp tôn dáng của người đi, đường may tinh tế, sắc nét.'),
(15, 'Giày Thể Thao XSPORT ADD Prophere rep', '', 500000, '1646319321_1632809648_z2405247653525_c6f69a7567b0138f6f2a8125bf96d93f-scaled.jpg', 2, 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ', 10, 'Kiểu dáng: Giày sneaker, giày thể thao\r\nChất liệu: Vải knitt\r\nĐộ cao: 3cm\r\nMàu sắc: đen trắng\r\nKích cỡ: 36-43\r\nChất liệu dễ làm sạch, êm chân\r\nĐộ đàn hồi, co dãn tốt, ôm khít vừa chân\r\nĐế đúc cao su nguyên khối, chắc chắn.'),
(16, 'Giày Thể Thao XSPORT Adi.das 918 SF', '', 400000, '1646319309_1632649859_z2115186104622_a7ca4df682ff7d87e37d15bacb598b75.jpg', 2, 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.', 15, 'Kiểu dáng: Giày sneaker, giày thể thao\r\nChất liệu: Vải dệt Knitt\r\nĐộ cao: 3cm\r\nMàu sắc: xám hồng, tím\r\nKích cỡ: 36-39\r\nChất liệu vải dệt, dễ làm sạch, êm chân\r\nĐộ đàn hồi, co dãn tốt, ôm khít vừa chân\r\nĐế đúc cao su nguyên khối, chắc chắn.'),
(17, 'Giày Thể Thao XSPORT Ni.ke Jordan 1 F1', '', 320000, '1646319298_1632649660_z2216607970275_b8fe23be35a5fc16cfec3e744cd6f6ca-scaled.jpg', 1, 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.', 15, 'Màu sắc: đen trắng đỏ, đen hồng, đen trắng, đen cam\r\n\r\nSize: 36-44,\r\n\r\nChất liệu: Da trơn\r\n\r\nPhối màu tinh tế và đẹp mắt.'),
(18, 'Giày XSPORT Sục MLB NY SF', '', 280000, '1646319284_1632629177_z2123216593905_3009a58d3def622fefefef101881bb37.jpg', 4, 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.', 10, 'Kiểu dáng: Giày sneaker, giày thể thao\r\nĐộ cao:3cm\r\nMàu sắc: Đen đế trắng, 7 màu\r\nKích cỡ: 36-39\r\nDễ xỏ chân, êm ái\r\nĐộ đàn hồi, co dãn tốt, ôm khít vừa chân\r\nĐế đúc cao su nguyên khối, chắc chắn.'),
(20, 'giày nike ultraboot', '123123', 450000, '1654781736_1632629261_MG_4973.jpg', 1, 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.', 100, '<p>Với sản phẩm tươi sống, trọng lượng thực tế c&oacute; thể ch&ecirc;nh lệch khoảng 10%.</p>\r\n\r\n<p>TIKI NGON l&agrave; g&igrave;? T&igrave;m hiểu th&ecirc;m&nbsp;<a href=\"https://tiki.vn/chuong-trinh/tikingon\">tại đ&acirc;y</a></p>\r\n\r\n<p>Bảo quản tốt nhất trong tủ lạnh</p>\r\n\r\n<p>Gi&aacute; sản phẩm tr&ecirc;n Tiki đ&atilde; bao gồm thuế theo luật hiện h&agrave;nh. B&ecirc;n cạnh đ&oacute;, tuỳ v&agrave;o loại sản phẩm, h&igrave;nh thức v&agrave; địa chỉ giao h&agrave;ng m&agrave; c&oacute; thể ph&aacute;t sinh th&ecirc;m chi ph&iacute; kh&aacute;c như ph&iacute; vận chuyển, phụ ph&iacute; h&agrave;ng cồng kềnh, thuế nhập khẩu (đối với đơn h&agrave;ng giao từ nước ngo&agrave;i c&oacute; gi&aacute; trị tr&ecirc;n 1 triệu đồng).....</p>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id_taikhoan` int(11) NOT NULL,
  `hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `matkhau` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id_taikhoan`, `hoten`, `email`, `phone`, `matkhau`) VALUES
(3, 'quangminh', 'minh@g', 12345, '123456'),
(4, 'ronaldo', 'ronaldo@g', 123456, '123456'),
(6, 'LionelMessi', 'messi@g', 123456, '123456'),
(8, 'công phượng', 'cp10@g', 12345, '12345'),
(10, 'son tùng', '12@g', 12345, '12345'),
(15, 'nhím', 'nhim@g', 12345, '12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_tintuc`
--

CREATE TABLE `tbl_tintuc` (
  `id_baiviet` int(11) NOT NULL,
  `tenbaiviet` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tomtat` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `noidung` longtext COLLATE utf8_unicode_ci NOT NULL,
  `id_danhmucbv` int(11) NOT NULL,
  `tinhtrang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_tintuc`
--

INSERT INTO `tbl_tintuc` (`id_baiviet`, `tenbaiviet`, `tomtat`, `noidung`, `id_danhmucbv`, `tinhtrang`, `hinhanh`) VALUES
(18, 'iphone13', '<p>13trieeuj</p>\r\n', '<p>sdvsdvsdv</p>\r\n', 2, '', '1636180252_MG_8528.jpg'),
(19, 'qưerrtyr utyuyuiu adasdad dasdad asdad dasdad đâ ouiouououioouiou oiuio uouio uo jsdfkjsf sdfjhsdfl sklfjslkdf sdkfjlsdjfsflkj skdjfls', '<p>dfgdfghfdghdgfjghfhjfghjfghjfghj</p>\r\n', '<p>fghjjjjjjjjjjjjjjjjjjjjjjjjjjfffffffffffffffffffffffrty4564564mkhjk</p>\r\n', 2, '', '1636197365_MG_5045.jpg'),
(20, 'Siêu đội hình 3-5-2 của MU đấu Man City: Ronaldo đá cặp Rashford, đau đầu hàng thủ', '<h2><strong>Trong bối cảnh thiếu vắng nhiều trụ cột, HLV Solskjaer liệu c&oacute; tiếp tục mạo hiểm với sơ đồ chiến thuật 3-5-2 khi MU đối đầu Man City?</strong></h2>\r\n', '<p>C&aacute;ch đ&acirc;y 1 tuần, chiến lược gia người Na Uy&nbsp;g&acirc;y bất ngờ bằng quyết định chuyển sang&nbsp;sơ đồ chiến thuật 3-5-2 (hoặc 5-3-2) khi MU đối đầu Tottenham. Lindelof, Varane, Maguire hợp th&agrave;nh bộ 3 hậu vệ, c&ograve;n&nbsp;Cristiano&nbsp;<a href=\"https://www.24h.com.vn/cristiano-ronaldo-c48e4384.html\">Ronaldo</a>&nbsp;v&agrave; Edinson Cavani, bộ đ&ocirc;i tiền đạo&nbsp;với tổng số tuổi 70 lần đầu đ&aacute; cặp.</p>\r\n\r\n<p>Quyết định mạo hiểm của Solskjaer đ&atilde;&nbsp;mang lại hiệu quả.&nbsp;MU thắng tưng bừng 3-0, trong đ&oacute; Ronaldo đ&oacute;ng g&oacute;p 1 b&agrave;n thắng v&agrave; 1 kiến tạo, c&ograve;n Cavani ghi 1 b&agrave;n&nbsp;(b&agrave;n c&ograve;n lại thuộc về Rashford). Ch&iacute;nh v&igrave; vậy, kh&ocirc;ng ngạc nhi&ecirc;n nếu &ocirc;ng duy tr&igrave; &quot;c&ocirc;ng thức&quot; th&agrave;nh c&ocirc;ng n&agrave;y ở trận gặp Man City.</p>\r\n\r\n<p>Vấn đề ở chỗ,&nbsp;toan t&iacute;nh của chiến lược gia người Na Uy c&oacute; thể&nbsp;sụp đổ sau khi Varane d&iacute;nh chấn thương v&agrave; ngồi ngo&agrave;i 1 th&aacute;ng.&nbsp;</p>\r\n\r\n<p>Cần phải khẳng định, b&ecirc;n cạnh cặp tiền đạo,&nbsp;Varane ch&iacute;nh l&agrave; mấu chốt gi&uacute;p&nbsp;sơ đồ 3-5-2 vận h&agrave;nh trơn tru. MU chưa từng thua qu&aacute; 2 b&agrave;n khi trung vệ người Ph&aacute;p g&oacute;p mặt tr&ecirc;n s&acirc;n nhưng thủng lưới tới 11 b&agrave;n trong 3 trận thiếu vắng anh.</p>\r\n\r\n<p>Ngoại trừ Bailly chơi&nbsp;tương đối&nbsp;ấn tượng trước Atalanta,&nbsp;Maguire kh&ocirc;ng đạt phong độ cao thời gian qua, thậm ch&iacute;&nbsp;li&ecirc;n tục mắc lỗi dẫn tới những b&agrave;n thua v&ocirc; duy&ecirc;n.&nbsp;Ch&iacute;nh v&igrave; vậy, h&agrave;ng thủ 3 người của MU&nbsp;kh&oacute; c&oacute; thể&nbsp;đứng vững trước&nbsp;Man City nếu&nbsp;kh&ocirc;ng c&oacute; Varane, thậm ch&iacute; đối diện nguy cơ &quot;mang rổ đựng b&oacute;ng&quot; như trước Leicester City (thua 2-4) hay Liverpool (0-5).&nbsp;</p>\r\n\r\n<p>Theo danh s&aacute;ch đăng k&iacute; thi đấu của MU&nbsp;được Manchester Evening News c&ocirc;ng bố mới đ&acirc;y, cả Cavani lẫn Lindelof đều vắng mặt.</p>\r\n\r\n<p>Nếu vẫn ki&ecirc;n định với sơ đồ&nbsp;3-5-2, Solskjaer buộc phải lựa chọn Maguire,&nbsp;Bailly, Luke Shaw cho h&agrave;ng thủ 3 người. Trong khi đ&oacute;, Alex Telles thay Shaw đảm nhận vị tr&iacute; b&ecirc;n&nbsp;h&agrave;nh lang c&aacute;nh tr&aacute;i, c&ograve;n Marcus Rashford đ&aacute; cặp tiền đạo&nbsp;với&nbsp;Ronaldo.</p>\r\n\r\n<p>Tr&ecirc;n thực tế, Solskjaer vẫn c&ograve;n lựa chọn an to&agrave;n hơn l&agrave; trở lại sơ đồ 4 hậu vệ&nbsp;quen thuộc, trong đ&oacute;&nbsp;Shaw v&agrave; Wan-Bissaka vẫn l&agrave; hai hậu vệ c&aacute;nh, Bailly hợp c&ugrave;ng Maguire&nbsp;th&agrave;nh cặp trung vệ.&nbsp;Tr&ecirc;n h&agrave;ng c&ocirc;ng,&nbsp;bộ ba&nbsp;Rashford, Greenwood, Fernandes hỗ trợ Ronaldo trong vai tr&ograve; &quot;số 9&quot;.</p>\r\n\r\n<p>Tất nhi&ecirc;n d&ugrave; đ&aacute; với sơ đồ chiến thuật n&agrave;o, Solskjaer vẫn phải hy vọng Ronaldo c&ugrave;ng h&agrave;ng&nbsp;c&ocirc;ng tiếp tục duy tr&igrave; phong độ ghi b&agrave;n, c&ograve;n h&agrave;ng thủ kh&ocirc;ng &quot;tấu h&agrave;i&quot; như những trận đấu vừa qua.</p>\r\n', 3, '', '1636199048_MU-dai-chien-Man-City-Ronaldo-da-cap-Cavani-Solskjaer-man-utd-news-ole-gunnar-solskjaer-man-city-1516536-1636142899-118-width740height439.jpg'),
(21, 'Ronaldo kiếm 1,24 tỷ USD giàu nhất MU: Messi lương cao vẫn “hít khói”', '<h2><strong>Xuất sắc tr&ecirc;n s&acirc;n, Ronaldo cũng kiếm tiền cực &quot;đỉnh&quot; ngo&agrave;i đời v&agrave; trở th&agrave;nh vận động vi&ecirc;n thể thao kiếm tiền nhiều thứ 5 lịch sử.</strong></h2>\r\n', '<p>Cristiano&nbsp;<a href=\"https://www.24h.com.vn/cristiano-ronaldo-c48e4384.html\">Ronaldo</a>&nbsp;đang mang đến cho c&aacute;c fan&nbsp;<a href=\"https://www.24h.com.vn/manchester-united-c48e1521.html\">MU</a>&nbsp;những khoảnh khắc b&ugrave;ng nổ v&agrave; đ&oacute;ng g&oacute;p&nbsp;9 b&agrave;n, 1 đường kiến tạo sau 11 trận. Trong mối tương quan với Lionel Messi, hai si&ecirc;u sao c&ugrave;ng đến với bến đỗ mới ở m&ugrave;a giải 2021/22 nhưng r&otilde; r&agrave;ng CR7 nổi trội hơn nhiều.</p>\r\n\r\n<p>Nhờ v&agrave;o những m&agrave;n tỏa s&aacute;ng ấy, Ronaldo cũng duy tr&igrave; sức kiếm tiền si&ecirc;u đỉnh của m&igrave;nh. Ronaldo v&agrave; MU l&agrave; những thương hiệu số 1 trong thế giới b&oacute;ng đ&aacute; theo những kh&iacute;a cạnh kh&aacute;c nhau,&nbsp;hiển nhi&ecirc;n sự kết hợp ấy sẽ mang lại rất nhiều tiền cho cả hai ph&iacute;a.</p>\r\n\r\n<p>Theo tạp ch&iacute; Bleacher Report, Ronaldo vẫn &acirc;m thầm kiếm về rất nhiều tiền từ khi t&aacute;i hợp MU v&agrave;o cuối tu&aacute;ng 8 vừa qua. V&agrave; giờ đ&acirc;y, tổng gi&aacute; trị t&agrave;i sản của si&ecirc;u sao người Bồ Đ&agrave;o Nha đ&atilde; chạm ngưỡng 1,24 tỷ USD.</p>\r\n\r\n<p>Nhờ vậy, Ronaldo chen ch&acirc;n v&agrave;o top 5 vận động vi&ecirc;n thể thao kiếm tiền giỏi nhất mọi thời đại. Ph&iacute;a trước CR7 l&agrave; 4 huyền thoại Michael Jordan (b&oacute;ng rổ, 2,62 tỷ USD), Tiger Woods (golf, 2,1 tỷ USD) c&ugrave;ng 2 đồng nghiệp kh&aacute;c l&agrave; Arnold Palmer (1,5 tỷ USD) cũng như Jack Nicklaus (1,38 tỷ USD).</p>\r\n\r\n<p>Trong lịch sử b&oacute;ng đ&aacute; thế giới, Cristiano Ronaldo l&agrave; cầu thủ b&oacute;ng đ&aacute; đầu ti&ecirc;n kiếm được 1 tỷ USD. Theo Forbes, anh l&agrave; một trong những vận động vi&ecirc;n th&agrave;nh c&ocirc;ng nhất trong lịch sử về phương diện t&agrave;i ch&iacute;nh.</p>\r\n\r\n<p>Trong năm 2021, Ronaldo được xếp hạng l&agrave; vận động vi&ecirc;n được trả thu nhập cao thứ 3 tr&ecirc;n thế giới, chỉ sau Conor McGregor v&agrave; Messi. Anh kiếm về tổng cộng 120 triệu USD, trong đ&oacute; 70 triệu USD tr&ecirc;n s&acirc;n cỏ v&agrave; 50 triệu USD từ c&aacute;c hợp đồng quảng c&aacute;o. Trong năm trước đ&oacute;, Ronaldo kiếm 105 triệu USD với 60 triệu USD tr&ecirc;n s&acirc;n cỏ v&agrave; 45 triệu USD từ quảng c&aacute;o.</p>\r\n\r\n<p>Khoản lương m&agrave; tờ Daily Mail ước t&iacute;nh MU phải chi trả cho Ronaldo l&ecirc;n đến gần 700.000 bảng/tuần. Nhưng kh&ocirc;ng chỉ vậy, kể từ khi trở lại m&aacute;i nh&agrave; xưa&nbsp;<a href=\"https://www.24h.com.vn/manchester-united-c48e1521.html\">Old Trafford</a>, c&aacute;c hợp đồng quảng c&aacute;o b&eacute;o bở cũng đua nhau t&igrave;m đến với si&ecirc;u sao 36 tuổi.</p>\r\n\r\n<p>L&uacute;c n&agrave;y, ngo&agrave;i hợp đồng trọn đời với h&atilde;ng thời trang Nike, Ronaldo c&ograve;n l&agrave;m ăn với dịch vụ ph&aacute;t trực tuyến thể thao DAZN, tập đo&agrave;n dinh dưỡng Herbalife, MTG v&agrave; Unilever...</p>\r\n\r\n<p>Cũng bởi thế, d&ugrave; lương thưởng của Cristiano Ronaldo kh&ocirc;ng cao bằng Lionel Messi, nhưng tổng thu nhập của CR7 vẫn đang xếp tr&ecirc;n kỳ ph&ugrave;ng địch thủ người Argentina. Trong bảng danh s&aacute;ch c&aacute;c vận động vi&ecirc;n thể thao kiếm tiền giỏi nhất, Messi xếp thứ 8 với 1,14 tỷ USD. R&otilde; r&agrave;ng &quot;Leo&quot; vẫn c&ograve;n phải phấn đấu trong một thời gian nữa mới vượt qua được đối thủ.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', 3, '', '1636199711_Ronaldo-kiem-124-ty-USD-giau-nhat-MU-Messi-luong-cao-van-hit-khoi-741-1636130396-120-width740height492.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thongke`
--

CREATE TABLE `thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(30) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `thongke`
--

INSERT INTO `thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongban`) VALUES
(6, '2022-06-17', 9, '4930000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`) VALUES
(1, 'admin', '123', 'dinhcongtru22032001@gmail.com');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`idcart_details`),
  ADD KEY `magiohang` (`magiohang`,`idsp`),
  ADD KEY `idsp` (`idsp`);

--
-- Chỉ mục cho bảng `danhmucbaiviet`
--
ALTER TABLE `danhmucbaiviet`
  ADD PRIMARY KEY (`id_danhmucbv`);

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`iddanhmuc`);

--
-- Chỉ mục cho bảng `giohang`
--
ALTER TABLE `giohang`
  ADD PRIMARY KEY (`idgiohang`),
  ADD KEY `hoten` (`hoten`,`sdt`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnhanvien`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `iddanhmuc` (`iddanhmuc`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id_taikhoan`);

--
-- Chỉ mục cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Chỉ mục cho bảng `thongke`
--
ALTER TABLE `thongke`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `idcart_details` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `danhmucbaiviet`
--
ALTER TABLE `danhmucbaiviet`
  MODIFY `id_danhmucbv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `iddanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `giohang`
--
ALTER TABLE `giohang`
  MODIFY `idgiohang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id_taikhoan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_tintuc`
--
ALTER TABLE `tbl_tintuc`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `thongke`
--
ALTER TABLE `thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
