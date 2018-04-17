-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 04, 2018 lúc 11:04 AM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `php24_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `district`
--

CREATE TABLE `district` (
  `districtid` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `district`
--

INSERT INTO `district` (`districtid`, `name`, `type`, `location`) VALUES
(1, 'Ba Đình', 'Quận', '21 02 08N, 105 49 38E'),
(2, 'Hoàn Kiếm', 'Quận', '21 01 53N, 105 51 09E'),
(3, 'Tây Hồ', 'Quận', '21 04 10N, 105 49 07E'),
(4, 'Long Biên', 'Quận', '21 02 21N, 105 53 07E'),
(5, 'Cầu Giấy', 'Quận', '21 01 52N, 105 47 20E'),
(6, 'Đống Đa', 'Quận', '21 00 56N, 105 49 06E'),
(7, 'Hai Bà Trưng', 'Quận', '21 00 27N, 105 51 35E'),
(8, 'Hoàng Mai', 'Quận', '20 58 33N, 105 51 22E'),
(9, 'Thanh Xuân', 'Quận', '20 59 44N, 105 48 56E'),
(10, 'Sóc Sơn', 'Huyện', '21 16 55N, 105 49 46E'),
(11, 'Đông Anh', 'Huyện', '21 08 16N, 105 49 38E'),
(12, 'Gia Lâm', 'Huyện', '21 01 28N, 105 56 54E'),
(13, 'Nam Từ Liêm', 'Quận', '21 02 39N, 105 45 32E'),
(14, 'Thanh Trì', 'Huyện', '20 56 32N, 105 50 55E'),
(15, 'Mê Linh', 'Huyện', '21 10 53N, 105 42 05E'),
(16, 'Hà Đông', 'Quận', '20 57 25N, 105 45 21E'),
(17, 'Sơn Tây', 'Thị Xã', '21 05 51N, 105 28 27E'),
(18, 'Ba Vì', 'Huyện', '21 09 40N, 105 22 43E'),
(19, 'Phúc Thọ', 'Huyện', '21 06 32N, 105 34 52E'),
(20, 'Đan Phượng', 'Huyện', '21 07 13N, 105 40 49E'),
(21, 'Hoài Đức', 'Huyện', '21 01 25N, 105 42 03E'),
(22, 'Quốc Oai', 'Huyện', '20 58 45N, 105 36 43E'),
(23, 'Thạch Thất', 'Huyện', '21 02 17N, 105 33 05E'),
(24, 'Chương Mỹ', 'Huyện', '20 52 46N, 105 39 01E'),
(25, 'Thanh Oai', 'Huyện', '20 51 44N, 105 46 18E'),
(26, 'Thường Tín', 'Huyện', '20 49 59N, 105 22 19E'),
(27, 'Phú Xuyên', 'Huyện', '20 43 37N, 105 53 43E'),
(28, 'Ứng Hòa', 'Huyện', '20 42 41N, 105 47 58E'),
(29, 'Mỹ Đức', 'Huyện', '20 41 53N, 105 43 31E'),
(30, 'Bắc Từ Liêm', 'Quận', ''),
(31, 'Không xác định', 'Không xác định', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reset_password`
--

CREATE TABLE `reset_password` (
  `c_email` varchar(255) NOT NULL,
  `c_key` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `reset_password`
--

INSERT INTO `reset_password` (`c_email`, `c_key`) VALUES
('admin@mail.com', 'D1csF1xPWPFGb01tZUXOg6I4om6iDJ'),
('duongcn07@gmail.com', 'svm6Gjv7ozcPcOJhRrfBtUYtF8wH64');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `street`
--

CREATE TABLE `street` (
  `streetid` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `districtid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `street`
--

INSERT INTO `street` (`streetid`, `c_name`, `districtid`) VALUES
(1, 'Hồ Văn Quán', 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_news`
--

CREATE TABLE `tbl_category_news` (
  `pk_category_news_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_estate`
--

CREATE TABLE `tbl_estate` (
  `pk_estate_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `fk_hinhthuc_id` int(11) NOT NULL,
  `fk_loai_id` int(11) NOT NULL,
  `districtid` int(11) NOT NULL,
  `wardid` int(11) NOT NULL,
  `streetid` int(11) NOT NULL,
  `projectid` int(11) NOT NULL,
  `dientich` int(11) NOT NULL,
  `c_price` bigint(20) NOT NULL,
  `c_description` text NOT NULL,
  `mattien` int(11) NOT NULL,
  `duongvao` int(11) NOT NULL,
  `huongnhaid` int(11) NOT NULL,
  `huongbancongid` int(11) NOT NULL,
  `sotang` int(11) NOT NULL,
  `phongngu` int(11) NOT NULL,
  `phongtam` int(11) NOT NULL,
  `noithat` text NOT NULL,
  `c_gara` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_estate`
--

INSERT INTO `tbl_estate` (`pk_estate_id`, `c_name`, `fk_hinhthuc_id`, `fk_loai_id`, `districtid`, `wardid`, `streetid`, `projectid`, `dientich`, `c_price`, `c_description`, `mattien`, `duongvao`, `huongnhaid`, `huongbancongid`, `sotang`, `phongngu`, `phongtam`, `noithat`, `c_gara`) VALUES
(7, 'NHÀ PHỐ HD MON VỊ TRÍ TRUNG TÂM NHẤT MỸ ĐÌNH', 2, 3, 2, 37, 1, 1, 96, 100000000, '<p>HD Mon Street - ưu điểm nổi bật.<br />\r\n<br />\r\nVị tr&iacute; tọa lạc tại khu đất v&agrave;ng vị tr&iacute; c&oacute; 3 mặt đường lớn: Đường L&ecirc; Đức Thọ,&nbsp;<a href=\"https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-ham-nghi-14\">H&agrave;m Nghi</a>, Nguyễn Cơ Thạch.<br />\r\nC&ograve;n chần chừ g&igrave; nữa nếu kh&aacute;ch h&agrave;ng thật sự hiểu ưu thế tuyệt vời của HD Mon Street (Vị tr&iacute; đắc địa tuyệt vời bậc nhất Mỹ Đ&igrave;nh).<br />\r\nDiện t&iacute;ch c&aacute;c l&ocirc; 78m2, 80m2, 84m2, 96m2, 120m2, 130m2, 175m2.<br />\r\nĐường nội bộ 13.5m, 17m, 20m.<br />\r\nM&atilde; l&ocirc;: TT01, TT02, TT03, TT04.<br />\r\nMặt tiền 6m - 12m.<br />\r\n<br />\r\nHotline: 0908.379.868 - 0972.098.676.<br />\r\nĐịa chỉ: Số 02 đường L&ecirc; Đức Thọ, Qu&acirc;n Nam Từ Li&ecirc;m, H&agrave; Nội.<br />\r\n<br />\r\nI. Th&ocirc;ng tin chung về dự &aacute;n v&agrave; đơn vị thi c&ocirc;ng:<br />\r\nT&ecirc;n dự &aacute;n: Hải Đăng City - T&ecirc;n thương mại: Mon City.<br />\r\nVị tr&iacute; x&acirc;y dựng: Số 2 L&ecirc; Đức Thọ, Mỹ Đ&igrave;nh, Nam Từ Li&ecirc;m, TP H&agrave; Nội.<br />\r\nĐơn vị thiết kế: Aedas - một trong những đơn vị thiết kế h&agrave;ng đầu Quốc tế của Singapore về kiến tr&uacute;c, thiết kế nội thất v&agrave; quy hoạch tổng thể v&agrave; cảnh quan. C&ocirc;ng ty aedas c&oacute; 26 văn ph&ograve;ng đại diện tại 20 quốc gia tr&ecirc;n to&agrave;n thế giới.<br />\r\n<br />\r\nĐơn vị tư vấn thiết kế: C&ocirc;ng ty CP Tư vấn đầu tư v&agrave; Thiết kế.<br />\r\nX&acirc;y dựng Việt Nam.<br />\r\nĐơn vị thi c&ocirc;ng x&acirc;y dựng: C&ocirc;ng ty Ho&agrave; B&igrave;nh.<br />\r\n<br />\r\n* Th&ocirc;ng tin quy hoạch:<br />\r\nTổng diện t&iacute;ch dự &aacute;n: 6,7 ha - Tổng mức đầu tư: 5,650 tỷ VNĐ.<br />\r\nQuy m&ocirc; giai đoạn 1: Gồm 2 to&agrave; CC cao 30 tầng v&agrave; 4 khối liền kề (147 l&ocirc;).<br />\r\nQuy m&ocirc; giai đoạn 2: Gồm 1 to&agrave; CC cao 45 tầng v&agrave; 2 khối liền kề.<br />\r\n<br />\r\nII. Tiến độ x&acirc;y dựng:<br />\r\nKhởi c&ocirc;ng: Qu&yacute; II/2015 - Thời gian dự kiến b&agrave;n giao: Qu&yacute; IV/2017.<br />\r\n- Tiến độ hiện tại: Đ&atilde; cất n&oacute;c ho&agrave;n thiện mặt ngo&agrave;i, chuẩn bị b&agrave;n giao cho kh&aacute;ch h&agrave;ng.<br />\r\n<br />\r\nIII. Tiến độ thanh to&aacute;n Phương thức thanh to&aacute;n tiền đất v&agrave; ti&ecirc;n x&acirc;y th&ocirc;. (Đ&atilde; b&agrave;n giao nhưng c&oacute; thể gi&atilde;n thanh to&aacute;n cho kh&aacute;ch).<br />\r\n- Đợt 1 30% k&yacute; HĐMB.<br />\r\n- Đợt 2 30%.<br />\r\n- Đợt 3 35%.<br />\r\n- Đợt 4: 5% nhận sổ đỏ.<br />\r\n&nbsp;</p>', 0, 0, 1, 1, 1, 3, 2, '<p>noi that</p>', 1),
(9, 'CĂN BIỆT THỰ VIP NHÌN VƯỜN HOA DÃY B9-18', 2, 3, 5, 157, 1, 1, 280, 37500000000, '<p>B&aacute;n biệt thự duy nhất hướng Đ&ocirc;ng Nam nh&igrave;n vườn hoa d&atilde;y B9 Vinhomes DT 280m2 đ&atilde; x&acirc;y th&ocirc; v&agrave; ho&agrave;n thiện mặt ngo&agrave;i, vị tr&iacute; đẹp nhất khu đ&ocirc; thị lu&ocirc;n. Gi&aacute; 37,5 tỷ: 09.1818.6169.<br />\r\n- Diện t&iacute;ch 280m2x3,5 tầng, mặt tiền 14m đ&atilde; x&acirc;y th&ocirc; v&agrave; ho&agrave;n thiện mặt ngo&agrave;i.<br />\r\n- Hướng Đ&ocirc;ng Nam cực kỳ m&aacute;t mẻ, nh&igrave;n thẳng vườn hoa v&agrave; đ&agrave;i phun nước, nh&igrave;n thẳng quảng trường Vinhomes Gardenia Mỹ Đ&igrave;nh -&nbsp;<a href=\"https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-ham-nghi-14\">H&agrave;m Nghi</a>.<br />\r\n- Căn biệt thự thiết kế sang chảnh, đẳng cấp, v&ocirc; c&ugrave;ng th&ocirc;ng tho&aacute;ng, ho&agrave;nh tr&aacute;ng.<br />\r\n- Gi&aacute;: 37,5 tỷ (gặp trực tiếp chủ nh&agrave; để l&agrave;m việc, miễn trung gian v&agrave; b&aacute;o mạng).<br />\r\n- Li&ecirc;n hệ: Thảo Nguy&ecirc;n: 09.1818.6169.<br />\r\n* Để biết th&ecirc;m th&ocirc;ng tin chi tiết v&agrave; đi xem nh&agrave; xin vui l&ograve;ng gọi điện hẹn trước: Thảo Nguy&ecirc;n: 09.1818.6169.</p>', 0, 0, 1, 1, 3, 5, 3, '<p>khong co</p>', 1),
(10, 'CĂN HỘ MẶT BIỂN CONDOTEL ARENA CAM RANH', 2, 1, 4, 115, 1, 1, 72, 1100000000, '<p>Sở hữu ngay Condotel_the_arena_5sao mặt biển b&atilde;i d&agrave;i, c&aacute;ch s&acirc;n bay cam ranh 3km.<br />\r\nGi&aacute; chỉ từ 1,1 tỷ đến 2 tỷ /1 căn (bao gồm VAT).<br />\r\nChỉ cần 350 triệu đầu tư si&ecirc;u dự &aacute;n Condotel Arena Cam Ranh kết hợp m&ocirc; h&igrave;nh Phố đi bộ + Đấu Trường Festival Area.<br />\r\nNhận nhiều ưu đ&atilde;i nhất từ trước đến nay:<br />\r\n- Chia sẻ lợi nhuận tới 95% (chủ đầu tư 5%).<br />\r\n- Chiết khấu thanh to&aacute;n nhanh l&ecirc;n đến 6.5%.<br />\r\n- Chủ đầu tư hỗ trợ l&atilde;i suất 0%.<br />\r\n- Viettinbank bảo l&atilde;nh v&agrave; cho vay l&ecirc;n đến 70% GTCH.<br />\r\n- Kh&aacute;ch h&agrave;ng nhận 95% lợi nhuận từ hoạt động khai th&aacute;c căn hộ.<br />\r\nAn to&agrave;n: KH c&oacute; thể lựa chọn c&aacute;c phương thức KD: Để ở, tự vận h&agrave;nh, cho CĐT thu&ecirc; lại (đơn vị quản l&yacute; Quốc tế uy t&iacute;n).<br />\r\n- ----------------------------------------------.<br />\r\nDự &aacute;n: The_Arena_Cam_Ranh.<br />\r\nVị tr&iacute;: Khu 4 KDL B&atilde;i D&agrave;i Cam Ranh, Kh&aacute;nh H&ograve;a.<br />\r\nTổ hợp vui chơi giải tr&iacute; nghỉ dưỡng Quốc Tế.<br />\r\nTổng diện t&iacute;ch: 29 ha.<br />\r\nQuy m&ocirc;: 4 t&ograve;a (Sea - Sland - Light - Wind).<br />\r\nTổng số căn hộ: 5025 căn.<br />\r\nLoại căn hộ: 1~2 ph&ograve;ng ngủ (Gi&aacute; từ 900 đến 2ty2/1 căn).<br />\r\nDiện t&iacute;ch căn hộ: 32m2 ~ 72m2.<br />\r\nTiện &iacute;ch dịch vụ đa dạng ti&ecirc;u chuẩn 5 sao.<br />\r\n- ----------------------------------------------.<br />\r\nThe Arena - Tổ hợp du lịch, giải tr&iacute; v&agrave; thương mại độc đ&aacute;o bậc nhất Cam Ranh.<br />\r\nTư vấn nhiệt t&igrave;nh: 0907.69.44.77 - 090.4444.040.</p>', 0, 0, 1, 1, 1, 3, 2, '<p>abc</p>', 1),
(11, 'CĂN HỘ SKY LAKE PARK', 2, 1, 11, 454, 1, 1, 45, 882000000, '<p>&aacute;n căn hộ chung cư to&agrave; West Bay &amp; Aqua Bay (Sky 1-2-3, Lake 1-2 &amp; Park 1-2) tại ph&ograve;ng kinh doanh, dự &aacute;n Ecopark.<br />\r\n<br />\r\nAnh chị c&oacute; nhu cầu li&ecirc;n hệ em Luật: 0904969222 (Zalo/ Viber/ iMessage iPhone)&nbsp;<br />\r\nEmail:&nbsp;<a href=\"mailto:luatcd@ecopark.com.vn\" rel=\"nofollow\">luatcd@ecopark.com.vn</a><br />\r\n<br />\r\n1. Cung cấp c&aacute;c căn to&agrave; West Bay gi&aacute; tốt nhất:<br />\r\n- Căn 45m2 gồm 1PN + 1 đa năng + 1WC. Gi&aacute; 888tr/căn. (Tặng full g&oacute;i nội thất gia đ&igrave;nh)<br />\r\n- Căn 50m2 gồm 2PN + 1 đa năng + 1WC. Gi&aacute; 920tr/căn.<br />\r\n- Căn 55m2 gồm 2PN + 1 đa năng + 1WC. Gi&aacute; 1,050 tỷ/căn.<br />\r\n- Căn 60m2 gồm 2PN + 1 đa năng + 2WC. Gi&aacute; 1,300 tỷ/căn.<br />\r\n- Căn 65m2 gồm 2PN + 1 đa năng + 2WC. Gi&aacute; 1,330 tỷ/căn.<br />\r\n- Căn 90m2 gồm 3PN + 1 đa năng + 2WC. Gi&aacute; 1,800 tỷ/căn.<br />\r\n<br />\r\nNhận nh&agrave; th&aacute;ng 12/2017 đến 6/2018.&nbsp;<br />\r\nC&oacute; nhận l&agrave;m thủ tục Chuyển nhượng chuyển t&ecirc;n Hợp đồng. Trọn g&oacute;i 21 ng&agrave;y l&agrave;m việc.<br />\r\n<br />\r\nVui l&ograve;ng li&ecirc;n hệ để chi tiết Tầng - Hướng 0904.969.222<br />\r\n<br />\r\nUpdate: 16/12/2017 mở b&aacute;n đợt cuối c&ugrave;ng to&agrave; Park 2 (LH em để nhận th&ocirc;ng tin chi tiết nhất)<br />\r\n<br />\r\n- C&aacute;c căn đặc biệt Aqua Garden, Pen house (từ 46 - 150m2) với s&acirc;n vườn rộng 12 - 119m2. Penhouse 222m2, s&acirc;n vườn từ 129 - 147m2. (mua chuyển nhượng)</p>', 0, 0, 1, 1, 1, 3, 2, '<p>abc</p>', 1),
(12, 'Bán căn hộ tầng 15 tháp D1 ĐTM Ecopark', 2, 1, 5, 175, 1, 1, 123, 12345456677, '<p>abc</p>', 0, 0, 1, 1, 2, 3, 2, '<p>123</p>', 1),
(13, 'Phong tro', 1, 1, 1, 1, 1, 30, 20, 30000000, '<p>123</p>', 0, 0, 1, 1, 1, 1, 1, '<p>123</p>', 1),
(14, 'Thăng Long Garden', 2, 3, 7, 241, 1, 171, 100, 10000000000, '<p>123</p>', 0, 0, 1, 1, 1, 4, 2, '<p>123</p>', 1),
(15, 'It\'s different Shadow', 2, 1, 9, 343, 1, 228, 100, 100000000, '<p>123</p>', 0, 0, 1, 1, 1, 3, 2, '<p>123</p>', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_hinhthuc`
--

CREATE TABLE `tbl_hinhthuc` (
  `pk_hinhthuc_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_hinhthuc`
--

INSERT INTO `tbl_hinhthuc` (`pk_hinhthuc_id`, `c_name`) VALUES
(1, 'Nhà đất cho thuê'),
(2, 'Nhà đất bán');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_huong`
--

CREATE TABLE `tbl_huong` (
  `pk_huong_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_huong`
--

INSERT INTO `tbl_huong` (`pk_huong_id`, `c_name`) VALUES
(1, 'KXĐ'),
(2, 'Tây'),
(3, 'Nam'),
(4, 'Bắc'),
(5, 'Đông-Bắc'),
(6, 'Tây-Bắc'),
(7, 'Tây-Nam'),
(8, 'Đông-Nam'),
(9, 'Đông');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_img`
--

CREATE TABLE `tbl_img` (
  `pk_img_id` int(11) NOT NULL,
  `fk_estate_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_img`
--

INSERT INTO `tbl_img` (`pk_img_id`, `fk_estate_id`, `c_name`) VALUES
(75, 12, 'iQORcUrWaxQnSGGHbMHF9SGj4P58rp-property-5.jpg'),
(76, 12, 'Efa6bK0ag2Wyzxrcjo8XN0vwztVFDr-property-6.jpg'),
(77, 12, 'N0KzFxScGKZ4JT4gQVk54U7pCtvFIs-small-proerty-2.jpg'),
(78, 12, '4MMSbgycD5AltqrzducU2U10F50AG8-small-property-2.jpg'),
(79, 11, 'AjZoBhI6CH81KUIXqt7AG1bDTwkblG-property1.jpg'),
(80, 11, 'JoCC2M4ZCjvfLxNSXszlzNGufcNcg1-property2.jpg'),
(81, 11, 'N9K9MzhfpuGbeXI1YDhnXhHhLibWUS-property3.jpg'),
(82, 11, 'T9CcBXfFERGaGHRhUWZOA39WJrMn2P-property4.jpg'),
(83, 10, 'HtVbL1kmTPu4uGfIzg0dADfQfpuh3q-property1.jpg'),
(84, 10, 'H6Fx0MGSfYS3Q8UMrxFiRuDORf2xPv-property2.jpg'),
(85, 10, 'Ix95hLas1eRYVDRs1fJFuhY97kMkwL-property3.jpg'),
(86, 10, '3hW10rMDrZ5c4DJWL0SxPK1NRzRsoz-property4.jpg'),
(87, 9, '58XnybodQG5UZ9JDsRmCvG1ahBCpvo-property1.jpg'),
(88, 9, '477xeDsryEJ8iz1JQKTB8mLDzYE6hW-property2.jpg'),
(89, 9, 'iQCkHv8ae1OhOKj3T0MN4zdmoAsMS0-property3.jpg'),
(90, 9, 'DfBSGgrm3VUtdhSpllklUUyit7vPoG-property4.jpg'),
(91, 7, 'YdHdcSEE98pNf4iS47w2PE4H1OkKcz-property1.jpg'),
(92, 7, '2YI67suuv1s01NAI199H5QCeiGjPmF-property2.jpg'),
(93, 7, '88DOUJ0UKmGHKgdEXY0ZmvfX4scgZi-property3.jpg'),
(94, 7, 'flKbAcfLkIykeVpUi1rJOWlrNUmxk1-property4.jpg'),
(95, 13, 'tmtNgIV9LVPkHPHGmXROSNicvyIFkd-property1.jpg'),
(96, 13, 'OkjwptcukXcwqxr6kuWnoEuAFKL1Ol-property2.jpg'),
(97, 13, 'xehKnaT2rMXti5fIeW6lWyWxgAJOJ0-property3.jpg'),
(99, 14, 'FsbtfMBgAh6Cm7ghlY4vSf4b1D4mSC-2YI67suuv1s01NAI199H5QCeiGjPmF-property2.jpg'),
(100, 14, 'vMpeMzOyfr76uP82a2RfwE7iZnsPxv-3hW10rMDrZ5c4DJWL0SxPK1NRzRsoz-property4.jpg'),
(101, 14, 'lJCZhYhFN67gdZKL28J4GvrwF9SXmY-58XnybodQG5UZ9JDsRmCvG1ahBCpvo-property1.jpg'),
(106, 15, 'lmd0qdweQLfDXnpdYEQa4xpdUk7dEI-1.jpg'),
(107, 15, 'rrWeOikOsK5hbnGEmGN9cTezNeRWg9-2.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_ip`
--

CREATE TABLE `tbl_ip` (
  `IP` varchar(255) NOT NULL,
  `visit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_ip`
--

INSERT INTO `tbl_ip` (`IP`, `visit`) VALUES
('127.0.0.1', '2018-02-06'),
('::1', '2018-01-30');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loai`
--

CREATE TABLE `tbl_loai` (
  `pk_loai_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_loai`
--

INSERT INTO `tbl_loai` (`pk_loai_id`, `c_name`) VALUES
(1, 'Căn hộ chung cư'),
(2, 'Nhà riêng'),
(3, 'Nhà biệt thự liền kề'),
(4, 'Nhà mặt phố'),
(5, 'Nhà Phòng Trọ'),
(6, 'Đất'),
(7, 'Trang trại khu nghỉ dưỡng'),
(8, 'Kho nhà xưởng'),
(9, 'Bán loại bất động sản khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_news`
--

CREATE TABLE `tbl_news` (
  `tbl_news_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `fk_category_news_id` int(11) NOT NULL,
  `c_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nhanvien`
--

CREATE TABLE `tbl_nhanvien` (
  `pk_nhanvien_id` int(11) NOT NULL,
  `c_email` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_phone` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_nhanvien`
--

INSERT INTO `tbl_nhanvien` (`pk_nhanvien_id`, `c_email`, `c_name`, `c_phone`, `c_address`, `c_img`) VALUES
(1, 'duongcn07@gmail.com', 'Vũ Văn Dương', '+841238859868', 'Đại Mỗ - Nam Từ Liêm - Hà Nội', 'U42SwJ6SZ7LLBpDBv4Gv07r8zOY1Gf-3-1036.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_project`
--

CREATE TABLE `tbl_project` (
  `pk_project_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `districtid` int(11) NOT NULL,
  `c_img` varchar(500) NOT NULL,
  `c_hotproject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_project`
--

INSERT INTO `tbl_project` (`pk_project_id`, `c_name`, `districtid`, `c_img`, `c_hotproject`) VALUES
(1, 'Không xác định', 31, '', 0),
(2, '4 Lý Nam Đế', 2, '', 0),
(3, '33 Đường Thành', 2, '', 0),
(4, '84 Thợ Nhuộm - Hanoi Apartment Center', 2, '', 0),
(5, 'ACB Office Building', 2, '', 0),
(6, 'Artexport House', 2, '', 0),
(7, 'BIDV Tower', 2, '', 0),
(8, 'Capital Tower', 2, '', 0),
(9, 'CornerStone Building', 2, '', 0),
(10, 'D’. San Raffles - Hàng Bài', 2, '', 0),
(11, 'Ha Noi Tung Shing Square', 2, '', 0),
(12, 'Hàng Da Galleria', 2, '', 0),
(13, 'Hanoitourist Building', 2, '', 0),
(14, 'International Centre', 2, '', 0),
(15, 'Naforimex Building', 2, '', 0),
(16, 'Opera Business Centre', 2, '', 0),
(17, 'Pacific Place', 2, '5G2xVQO2YT8dRPpL7ETi0tlaVcBusX-Pacific.jpg', 1),
(18, 'Phú Điền Building', 2, '', 0),
(19, 'Press Club', 2, '', 0),
(20, 'Red River Building', 2, '', 0),
(21, 'STD Tower', 2, '', 0),
(22, 'Sun City Building', 2, '', 0),
(23, 'VCI Tower', 2, '', 0),
(24, 'VID Tower 1', 2, '', 0),
(25, 'Vietcombank Tower', 2, '', 0),
(26, 'Vinaplast Tài Tâm', 2, '', 0),
(27, '134 Quán Thánh', 1, '1fbFtWvt5Ttv47aA0R5Z8kxulF6eqC-client-face2.png', 0),
(28, '15-17 Ngọc Khánh', 1, 'hPV2jUMzYbAHbK4L8pJrtg3wug8PZo-client-face1.png', 0),
(29, '16 Liễu Giai', 1, '', 0),
(30, '222 Đội Cấn', 1, 'rmijfJ0BcyWVfQbyb4dMwm1ZYdULrm-1.jpg', 0),
(31, '6 Đội Nhân', 1, '', 0),
(32, '671 Hoàng Hoa Thám', 1, '', 0),
(33, 'Artex Building 172 Ngọc Khánh', 1, '', 0),
(34, 'B1 Giảng Võ', 1, '', 0),
(35, 'Biển Bắc', 1, '', 0),
(36, 'C7 Giảng Võ', 1, '', 0),
(37, 'Candeo Hotels Hà Nội', 1, '', 0),
(38, 'CC Đường Sắt - 35 Láng Hạ', 1, '', 0),
(39, 'Chung cư 31 Láng Hạ', 1, '', 0),
(40, 'Chung cư 345 Đội Cấn', 1, '', 0),
(41, 'Chung cư 379 Đội Cấn', 1, '', 0),
(42, 'Chung cư C1 Thành Công', 1, '', 0),
(43, 'D2 Giảng Võ', 1, '', 0),
(44, 'Discovery Complex 2', 1, '', 0),
(45, 'DMC Tower', 1, '', 0),
(46, 'Flamingo Tower', 1, '', 0),
(47, 'Hà Nội Aqua Central', 1, '', 0),
(48, 'Hanoi Daewoo Hotel', 1, '', 0),
(49, 'HAREC Building', 1, '', 0),
(50, 'HITTC Building', 1, '', 0),
(51, 'Hòa Bình Green', 1, '', 0),
(52, 'ITT Building', 1, '', 0),
(53, 'Lake View Building', 1, '', 0),
(54, 'Lotte Center Hà Nội', 1, '', 0),
(55, 'Newtatco 21 Láng Hạ', 1, '', 0),
(56, 'Newtatco Vĩnh Phúc', 1, '', 0),
(57, 'Ngọc Khánh Plaza', 1, '', 0),
(58, 'NIKKO', 1, '', 0),
(59, 'Núi Trúc Square', 1, '', 0),
(60, 'Platinum Residences', 1, '', 0),
(61, 'Resco Tower', 1, '', 0),
(62, 'Rose Garden', 1, '', 0),
(63, 'Skyline Tower', 1, '', 0),
(64, 'Sun Grand City Văn Cao', 1, '', 0),
(65, 'Thành Công Tower 57 Láng Hạ', 1, '', 0),
(66, 'Thành Đông', 1, '', 0),
(67, 'Thanh Niên Plaza', 1, '', 0),
(68, 'The Golden Armor', 1, '', 0),
(69, 'The Lancaster Hà Nội', 1, '', 0),
(70, 'TID Tower', 1, '', 0),
(71, 'Tổ hợp số 5 Thành Công', 1, '', 0),
(72, 'Toserco Building', 1, '', 0),
(73, 'Trúc Bạch', 1, '', 0),
(74, 'Vinhomes Giảng Võ', 1, '', 0),
(75, 'Vinhomes Metropolis - Liễu Giai', 1, '', 0),
(76, 'VIT Tower', 1, '', 0),
(77, 'X1-26 Liễu Giai', 1, '', 0),
(78, '101 Láng Hạ', 6, '', 0),
(79, '101A Nguyễn Khuyến', 6, '', 0),
(80, '102 Trường Chinh Meco', 6, '', 0),
(81, '131 phố Thái Hà', 6, '', 0),
(82, '170 Đê La Thành - GP Building', 6, '', 0),
(83, '183 Nguyễn Lương Bằng', 6, '', 0),
(84, '187 Tây Sơn', 6, '', 0),
(85, '25 Vũ Ngọc Phan', 6, '', 0),
(86, '257 Giải Phóng', 6, '', 0),
(87, '27 Huỳnh Thúc Kháng', 6, '', 0),
(88, '360 Tây Sơn', 6, '', 0),
(89, '59-63 Huỳnh Thúc Kháng', 6, '', 0),
(90, 'B4 và B14 Kim Liên', 6, '', 0),
(91, 'B7 - B10 Kim Liên', 6, '', 0),
(92, 'Capital Garden 102 Trường Chinh Kinh Đô', 6, '', 0),
(93, 'Cland Tower', 6, '', 0),
(94, 'D’. Le Pont D’or - Hoàng Cầu', 6, '', 0),
(95, 'Đào Duy Anh Tower - 9 Đào Duy Anh', 6, '', 0),
(96, 'DSD Building', 6, '', 0),
(97, 'Eurowindow Tôn Thất Tùng', 6, '', 0),
(98, 'Ford Thăng Long', 6, '', 0),
(99, 'Geleximco 36 Hoàng Cầu', 6, '', 0),
(100, 'Giảng Võ Complex', 6, '', 0),
(101, 'Hà Thành Plaza', 6, '', 0),
(102, 'HACO Complex Tower', 6, '', 0),
(103, 'Hải Đăng Tower', 6, '', 0),
(104, 'Hapro Building', 6, '', 0),
(105, 'Hateco Plaza', 6, '', 0),
(106, 'Hoàng Cầu Skyline', 6, '', 0),
(107, 'Hong Kong Tower', 6, '', 0),
(108, 'Hợp Nhất Building', 6, '', 0),
(109, 'ICC Commercial Center', 6, '', 0),
(110, 'Icon4 Tower', 6, '', 0),
(111, 'Khâm Thiên Building', 6, '', 0),
(112, 'Kinh Do Building', 6, '', 0),
(113, 'La Casa Villa', 6, '', 0),
(114, 'M3 - M4 Nguyễn Chí Thanh', 6, '', 0),
(115, 'M5 Nguyễn Chí Thanh', 6, '', 0),
(116, 'MBLand Tower', 6, '', 0),
(117, 'Mecanimex', 6, '', 0),
(118, 'MIPEC Towers', 6, '', 0),
(119, 'Ocean Park', 6, '', 0),
(120, 'Oriental Plaza', 6, '', 0),
(121, 'Oriental Tower - 324 Tây Sơn', 6, '', 0),
(122, 'Petrowaco 97 Láng Hạ', 6, '', 0),
(123, 'Porte De Ville', 6, '', 0),
(124, 'Sapphire Tower', 6, '', 0),
(125, 'Sky City Towers-88 Láng Hạ', 6, '', 0),
(126, 'Sông Hồng Park View', 6, '', 0),
(127, 'Tân Á Đại Thành', 6, '', 0),
(128, 'Tập thể Hào Nam', 6, '', 0),
(129, 'TĐC Hoàng Cầu', 6, '', 0),
(130, 'TĐL Building', 6, '', 0),
(131, 'Twin Towers', 6, '', 0),
(132, 'VCCI Tower - số 9 Đào Duy Anh', 6, '', 0),
(133, 'Viễn Đông Building 36 Hoàng Cầu', 6, '', 0),
(134, 'Viet Tower', 6, '', 0),
(135, 'Vinaconex Tower', 6, '', 0),
(136, 'Vincom Center Phạm Ngọc Thạch', 6, '', 0),
(137, 'Vinhomes Nguyễn Chí Thanh', 6, '', 0),
(138, 'Vườn Xuân - 71 Nguyễn Chí Thanh', 6, '', 0),
(139, '10 Hoa Lư', 7, '', 0),
(140, '141 Trương Định', 7, '', 0),
(141, '229 Phố Vọng', 7, '', 0),
(142, '25 Lạc Trung', 7, '', 0),
(143, '310 Minh Khai', 7, '', 0),
(144, '93 Lò Đúc - Kinh Đô Tower', 7, '', 0),
(145, 'CDC Building', 7, '', 0),
(146, 'Chung cư 122 Vĩnh Tuy', 7, '', 0),
(147, 'Chung cư 536A Minh Khai', 7, '', 0),
(148, 'Chung cư 622 Minh Khai', 7, '', 0),
(149, 'Coma Building', 7, '', 0),
(150, 'Crystal Tower', 7, '', 0),
(151, 'Gelex Tower', 7, '', 0),
(152, 'Grand Building', 7, '', 0),
(153, 'Green Park', 7, '', 0),
(154, 'Green Pearl 378 Minh Khai', 7, '', 0),
(155, 'Hàn Việt Tower', 7, '', 0),
(156, 'HDI Tower', 7, '', 0),
(157, 'Hinode City', 7, '', 0),
(158, 'Hòa Bình Green City', 7, '', 0),
(159, 'Hoàng Thành Tower', 7, '', 0),
(160, 'Imperia Sky Garden', 7, '', 0),
(161, 'Liền kề 622 Minh Khai', 7, '', 0),
(162, 'Lilama 124 Minh Khai', 7, '', 0),
(163, 'Nhà phố liền kề 124 Vĩnh Tuy', 7, '', 0),
(164, 'Park 12 Park Hill - Times City', 7, '', 0),
(165, 'Prime Centre', 7, '', 0),
(166, 'Ruby Plaza', 7, '', 0),
(167, 'Sky Light', 7, '', 0),
(168, 'Sun Grand City Ancora Residence', 7, '', 0),
(169, 'Sunshine Garden', 7, '', 0),
(170, 'Tài Tâm', 7, '', 0),
(171, 'Thăng Long Garden 250 Minh Khai', 7, '', 0),
(172, 'Times City', 7, '', 0),
(173, 'Times City - Park Hill', 7, '', 0),
(174, 'TMC Thăng Long - 01 Lương Yên', 7, '', 0),
(175, 'Tòa nhà Cty CPXD số 1 HN', 7, '', 0),
(176, 'Tòa nhà Thái Bình', 7, '', 0),
(177, 'Trương Định Complex', 7, '', 0),
(178, 'TTTM Chợ Mơ', 7, '', 0),
(179, 'V Building', 7, '', 0),
(180, 'Vinafor', 7, '', 0),
(181, 'Vincom Center Bà Triệu', 7, '', 0),
(182, 'VTC Online building', 7, '', 0),
(183, 'Zodi Building', 7, '', 0),
(184, '108 Nguyễn Trãi', 9, '', 0),
(185, '282 Nguyễn Huy Tưởng', 9, '', 0),
(186, '44 Triều Khúc', 9, '', 0),
(187, '54 Hạ Đình', 9, '', 0),
(188, '57 Vũ Trọng Phụng', 9, '', 0),
(189, '72 Quan Nhân', 9, '', 0),
(190, '96 Định Công', 9, '', 0),
(191, 'Apartment Building', 9, '', 0),
(192, 'BRG Park Residence', 9, '', 0),
(193, 'C3 Lê Văn Lương (Golden Palace)', 9, '', 0),
(194, 'Cienco1 Hoàng Đạo Thúy', 9, '', 0),
(195, 'Cowaelmic 198 Nguyễn Tuân', 9, '', 0),
(196, 'Cự Lộc', 9, '', 0),
(197, 'Diamond Blue 69 Triều Khúc', 9, '', 0),
(198, 'Diamond Flower Tower', 9, '', 0),
(199, 'Fafilm - VNT Tower', 9, '', 0),
(200, 'Five Star Kim Giang', 9, '', 0),
(201, 'Gold Tower', 9, '', 0),
(202, 'Golden Land', 9, '', 0),
(203, 'Golden West', 9, '', 0),
(204, 'GoldSeason', 9, '', 0),
(205, 'H10 - Vinaconex 6', 9, '', 0),
(206, 'Hạ Đình Tower', 9, '', 0),
(207, 'Hà Nội Center Point', 9, '', 0),
(208, 'Handi Resco Lê văn Lương', 9, '', 0),
(209, 'Hapulico Complex', 9, '', 0),
(210, 'HDI Homes Nguyễn Tuân', 9, '', 0),
(211, 'Hei Tower Điện Lực', 9, '', 0),
(212, 'HUD Tower', 9, '', 0),
(213, 'Imperia Garden', 9, '', 0),
(214, 'Imperial Plaza', 9, '', 0),
(215, 'KĐT Hạ Đình', 9, '', 0),
(216, 'Khang Thông Thanh Xuân', 9, '', 0),
(217, 'Khu nhà ở 183 Hoàng Văn Thái', 9, '', 0),
(218, 'Legend Tower 109 Nguyễn Tuân', 9, '', 0),
(219, 'Licogi 13 Tower', 9, '', 0),
(220, 'Liền kề 96 Nguyễn Huy Tưởng', 9, '', 0),
(221, 'Mỹ Sơn Tower', 9, '', 0),
(222, 'Pandora 53 Triều Khúc', 9, '', 0),
(223, 'Pearl Phương Nam Towers', 9, '', 0),
(224, 'Phú Gia Residence', 9, '', 0),
(225, 'PVV-Vinapharm 60B Nguyễn Huy Tưởng', 9, '', 0),
(226, 'Rivera Park Hà Nội', 9, '', 0),
(227, 'Riverside Garden', 9, '', 0),
(228, 'Royal City', 9, 'sNIoQkard3025pTph9xRpfG877fXEc-royal-city-flynow.jpg', 1),
(229, 'Sakura Tower', 9, '', 0),
(230, 'Sapphire Palace', 9, '', 0),
(231, 'Spring Home', 9, '', 0),
(232, 'Star Tower 283 Khương Trung', 9, '', 0),
(233, 'Starcity Center', 9, '', 0),
(234, 'Starcity Lê Văn Lương', 9, '', 0),
(235, 'Stellar Garden', 9, '', 0),
(236, 'Tân Hồng Hà Complex', 9, '', 0),
(237, 'Thăng Long Tower', 9, '', 0),
(238, 'Thành An Tower', 9, '', 0),
(239, 'Thanh Xuân Complex', 9, '', 0),
(240, 'The Artemis', 9, '', 0),
(241, 'The Golden Palm Lê Văn Lương', 9, '', 0),
(242, 'Thống Nhất Complex', 9, '', 0),
(243, 'Thượng Đình Plaza', 9, '', 0),
(244, 'Times Tower - HACC1 Complex Building', 9, '', 0),
(245, 'Tincom City Point', 9, '', 0),
(246, 'Transmeco', 9, '', 0),
(247, 'Trung tâm Tài chính Sông Đà', 9, '', 0),
(248, 'TTTM Hạ Đình', 9, '', 0),
(249, 'TTTM Khương Đình', 9, '', 0),
(250, 'VG Building 235 Nguyễn Trãi', 9, '', 0),
(251, 'Vicem Comatce Tower', 9, '', 0),
(252, 'Việt Đức Complex', 9, '', 0),
(253, 'Vinhomes Smart City', 9, '', 0),
(254, 'Viwaseen Tower', 9, '', 0),
(255, '249A Thụy Khuê', 3, '', 0),
(256, '6th Element', 3, '', 0),
(257, 'Chung cư Xuân La', 3, '', 0),
(258, 'Ciputra Hà Nội', 3, '', 0),
(259, 'D\' EL Dorado', 3, '', 0),
(260, 'D’. Le Roi Soleil - Quảng An', 3, '', 0),
(261, 'Dream Land Xuân La', 3, '', 0),
(262, 'Ecolife Tây Hồ', 3, '', 0),
(263, 'Five Stars Westlake', 3, '', 0),
(264, 'Golden Westlake', 3, '', 0),
(265, 'Hancom 603 Lạc Long Quân', 3, '', 0),
(266, 'Hanoi Flower Villages', 3, '', 0),
(267, 'Hanoi Lake View', 3, '', 0),
(268, 'HIPT', 3, '', 0),
(269, 'Học Viện Quốc Phòng', 3, '', 0),
(270, 'KĐT Tây Hồ Tây - Starlake Hà Nội', 3, '', 0),
(271, 'Khu tái định cư Xuân La', 3, '', 0),
(272, 'Lạc Hồng Westlake', 3, '', 0),
(273, 'Machinco Building', 3, '', 0),
(274, 'Mùa Xuân', 3, '', 0),
(275, 'Ngọc Linh Building', 3, '', 0),
(276, 'Oriental Westlake', 3, '', 0),
(277, 'Packexim', 3, '', 0),
(278, 'Packexim 2 Tây Hồ', 3, '', 0),
(279, 'PentStudio', 3, '', 0),
(280, 'Phú Thượng', 3, '', 0),
(281, 'PVI Tây Hồ Tây', 3, '', 0),
(282, 'Romantic Park Tây Hồ Tây', 3, '', 0),
(283, 'Somerset West Lake', 3, '', 0),
(284, 'Somerset West Point', 3, '', 0),
(285, 'Sun Grand City', 3, '', 0),
(286, 'Sun Grand City', 3, '', 0),
(287, 'Sunshine Riverside', 3, '', 0),
(288, 'Syrena Building', 3, '', 0),
(289, 'Tây Hồ Residence', 3, '', 0),
(290, 'Tây Hồ River View', 3, '', 0),
(291, 'Udic Westlake', 3, '', 0),
(292, 'Vinaconex No.2', 3, '', 0),
(293, 'Vườn Đào', 3, '', 0),
(294, '113 Trung Kính', 5, '', 0),
(295, '151 Hoàng Quốc Việt', 5, '', 0),
(296, '169 Nguyễn Ngọc Vũ', 5, '', 0),
(297, '173 Xuân Thủy', 5, '', 0),
(298, '2T Corporation', 5, '', 0),
(299, '30 Phạm Văn Đồng', 5, '', 0),
(300, '335 Cầu Giấy', 5, '', 0),
(301, '789 Bộ Quốc Phòng - 147 Hoàng Quốc Việt', 5, '', 0),
(302, '95 Cầu Giấy', 5, '', 0),
(303, 'A10-A14 Nam Trung Yên', 5, '', 0),
(304, 'AC Building', 5, '', 0),
(305, 'An Lạc – Hoàng Ngân', 5, '', 0),
(306, 'An Sinh', 5, '', 0),
(307, 'ATS', 5, '', 0),
(308, 'Âu Việt Building', 5, '', 0),
(309, 'AZ Lâm Viên Complex', 5, '', 0),
(310, 'Bảo Anh Building', 5, '', 0),
(311, 'Belleville Hà Nội', 5, '', 0),
(312, 'Cầu Giấy Center Point', 5, '', 0),
(313, 'CC1 Hà Đô Parkside', 5, '', 0),
(314, 'Central Field Trung Kính', 5, '', 0),
(315, 'Chelsea Park', 5, '', 0),
(316, 'Chelsea Residences', 5, '', 0),
(317, 'Chung cư 60 Hoàng Quốc Việt', 5, '', 0),
(318, 'CMC Tower', 5, '', 0),
(319, 'Constrexim Complex', 5, '', 0),
(320, 'CT4 Vimeco II', 5, '', 0),
(321, 'CT6 Constrexim Yên Hòa', 5, '', 0),
(322, 'CTM 299 Cầu Giấy', 5, '', 0),
(323, 'CTM Building 139 Cầu Giấy', 5, '', 0),
(324, 'D’. Palais De Louis - Nguyễn Văn Huyên', 5, '', 0),
(325, 'D11 Sunrise Building', 5, '', 0),
(326, 'D22 Bộ Tư Lệnh Biên Phòng', 5, '', 0),
(327, 'Đại Phát Building', 5, '', 0),
(328, 'Diamond Building', 5, '', 0),
(329, 'Discovery Complex', 5, '', 0),
(330, 'Đông Đô', 5, '', 0),
(331, 'Đông Nam Trần Duy Hưng', 5, '', 0),
(332, 'Dream Land Plaza', 5, '', 0),
(333, 'ĐTM Dịch Vọng', 5, '', 0),
(334, 'Elinco', 5, '', 0),
(335, 'Eurowindow Multi Complex', 5, '', 0),
(336, 'Five Star Resident', 5, '', 0),
(337, 'FLC Twin Towers', 5, '', 0),
(338, 'FPT Cầu Giấy', 5, '', 0),
(339, 'Golden Park Tower', 5, '', 0),
(340, 'Grand Plaza', 5, '', 0),
(341, 'Green Park Tower', 5, '', 0),
(342, 'Ha Do Park View', 5, '', 0),
(343, 'HDI Homes Vũ Phạm Hàm', 5, '', 0),
(344, 'Hoa Binh International', 5, '', 0),
(345, 'Hoàng Linh Building', 5, '', 0),
(346, 'Hoàng Ngân Plaza', 5, '', 0),
(347, 'Home City - Trung Kính Complex', 5, '', 0),
(348, 'Housing', 5, '', 0),
(349, 'Indochina Plaza', 5, '', 0),
(350, 'Intracom', 5, '', 0),
(351, 'KĐT mới Cầu Giấy', 5, '', 0),
(352, 'KĐT Trung Yên', 5, '', 0),
(353, 'Khu nhà ở HV Tư pháp', 5, '', 0),
(354, 'Khu Nhà ở KD Dịch Vọng', 5, '', 0),
(355, 'Làng Quốc tế Thăng Long', 5, '', 0),
(356, 'Liền kề Phố Wall', 5, '', 0),
(357, 'LOD Building', 5, '', 0),
(358, 'Mandarin Garden', 5, 'vChnKehOIExj0Ak7nMkFlprcZowvkz-chung-cu-mandarin-garden-phoi-canh-3.jpg', 1),
(359, 'Maple Tower', 5, '', 0),
(360, 'MB Grand Tower', 5, '', 0),
(361, 'Mitec Tower', 5, '', 0),
(362, 'N01-D17 Duy Tân', 5, '', 0),
(363, 'N04 Trần Duy Hưng', 5, '', 0),
(364, 'N05 Trần Duy Hưng', 5, '', 0),
(365, 'N105 Nguyễn Phong Sắc', 5, '', 0),
(366, 'Nam Trung Yên', 5, '', 0),
(367, 'Paragon Tower', 5, '', 0),
(368, 'Park View City', 5, '', 0),
(369, 'PV Oil 148 Hoàng Quốc Việt', 5, '', 0),
(370, 'PVI Tower', 5, '', 0),
(371, 'Richland Southern', 5, '', 0),
(372, 'Royal Lotus Complex', 5, '', 0),
(373, 'San Nam', 5, '', 0),
(374, 'Sky Park Residence', 5, '', 0),
(375, 'SkyView Trần Thái Tông', 5, '', 0),
(376, 'Somerset Hòa Bình', 5, '', 0),
(377, 'Sông Đà 7', 5, '', 0),
(378, 'Star Tower', 5, '', 0),
(379, 'Tây Nam Đại học Thương Mại', 5, '', 0),
(380, 'The Premier Hà Nội', 5, '', 0),
(381, 'TIG Tower (ThangLong Royal Plaza)', 5, '', 0),
(382, 'Tòa nhà 3A', 5, '', 0),
(383, 'Tòa nhà Reeco', 5, '', 0),
(384, 'Tràng An GP - Complex', 5, '', 0),
(385, 'Trung Hòa Nhân Chính', 5, '', 0),
(386, 'Trung Yên I', 5, '', 0),
(387, 'Trung Yên Plaza', 5, '', 0),
(388, 'TTC Tower', 5, '', 0),
(389, 'Vicem Tower', 5, '', 0),
(390, 'Việt Á Tower', 5, '', 0),
(391, 'Vietracimex Tower', 5, '', 0),
(392, 'Viglacera - Exim Building', 5, '', 0),
(393, 'Vimeco I - Phạm Hùng', 5, '', 0),
(394, 'Vimeco II - Nguyễn Chánh', 5, '', 0),
(395, 'Vinaconex 1', 5, '', 0),
(396, 'Vinahud', 5, '', 0),
(397, 'Vinata Tower', 5, '', 0),
(398, 'Vinhomes D\'Capitale', 5, 'SkLXsEVAUe3QKxPzeKGTnB3tq3DjRP-Vinhomes-tran-duy-hung.jpg', 1),
(399, 'VMT Building', 5, '', 0),
(400, 'Watermark Tây Hồ', 5, '', 0),
(401, 'Yên Hòa', 5, '', 0),
(402, 'Yên Hòa Condominium', 5, '', 0),
(403, 'Yên Hòa Thăng Long', 5, '', 0),
(404, 'Zodiac Building', 5, '', 0),
(405, '130 Nguyễn Đức Cảnh', 8, '', 0),
(406, '25 Tân Mai', 8, '', 0),
(407, '282 Lĩnh Nam', 8, '', 0),
(408, '409 Lĩnh Nam', 8, '', 0),
(409, 'An Bình 1', 8, '', 0),
(410, 'Ao Sào', 8, '', 0),
(411, 'Athena Complex Pháp Vân', 8, '', 0),
(412, 'Athena Fulland', 8, '', 0),
(413, 'B1-B2 Tây Nam Linh Đàm', 8, '', 0),
(414, 'Căn hộ Thông tấn xã', 8, '', 0),
(415, 'Cầu Tiên', 8, '', 0),
(416, 'Chung cư 83 Ngọc Hồi', 8, '', 0),
(417, 'CT3 Tây Nam Linh Đàm', 8, '', 0),
(418, 'CT36 - Dream Home', 8, '', 0),
(419, 'Đại Kim - Định Công Mở Rộng', 8, '', 0),
(420, 'Đền Lừ I', 8, '', 0),
(421, 'Đền Lừ II', 8, '', 0),
(422, 'Đồng Phát Park View Tower', 8, '', 0),
(423, 'Eco Green Tower', 8, '', 0),
(424, 'Eco Lake View', 8, '', 0),
(425, 'Gamuda City', 8, '', 0),
(426, 'Gamuda City (Gamuda Gardens)', 8, '', 0),
(427, 'Gamuda Lakes', 8, '', 0),
(428, 'Gelexia Riverside', 8, '', 0),
(429, 'Golden Pearl', 8, '', 0),
(430, 'Green Park Trần Thủ Độ', 8, '', 0),
(431, 'Green Park Vĩnh Hưng', 8, '', 0),
(432, 'Hải Phát Complex', 8, '', 0),
(433, 'Happy House 296 Lĩnh Nam', 8, '', 0),
(434, 'Hateco Hoàng Mai', 8, '', 0),
(435, 'Helios Tower 75 Tam Trinh', 8, '', 0),
(436, 'HH1 Linh Đàm', 8, '', 0),
(437, 'HH2 Linh Đàm', 8, '', 0),
(438, 'HH3 Linh Đàm', 8, '', 0),
(439, 'HH4 Linh Đàm', 8, '', 0),
(440, 'Hòa Phát 70 NDC Tower', 8, '', 0),
(441, 'Hồng Hà Tower', 8, '', 0),
(442, 'HUD3 Nguyễn Đức Cảnh', 8, '', 0),
(443, 'Intracom 208', 8, '', 0),
(444, 'K35 Tân Mai', 8, '', 0),
(445, 'KĐT Đại Kim', 8, '', 0),
(446, 'KĐT Định Công', 8, '', 0),
(447, 'KĐT Linh Đàm', 8, '', 0),
(448, 'KĐT Tây Nam Kim Giang', 8, '', 0),
(449, 'KĐT Vĩnh Hoàng', 8, '', 0),
(450, 'Khu di dân Đền Lừ III', 8, '', 0),
(451, 'Kim Văn Kim Lũ', 8, '', 0),
(452, 'LePARC by Gamuda', 8, '', 0),
(453, 'Licogi 12', 8, '', 0),
(454, 'Lilama 52 Lĩnh Nam', 8, '', 0),
(455, 'Mandarin Garden 2', 8, '', 0),
(456, 'Momota Nguyễn Đức Cảnh', 8, '', 0),
(457, 'Nam Đô Complex', 8, '', 0),
(458, 'Nam Hải Lakeview', 8, '', 0),
(459, 'New Horizon City - 87 Lĩnh Nam', 8, '', 0),
(460, 'Nhà ở xã hội @Home', 8, '', 0),
(461, 'NOXH Đồng Mô', 8, '', 0),
(462, 'Osaka Complex', 8, '', 0),
(463, 'Pháp Vân Tứ Hiệp', 8, '', 0),
(464, 'Rainbow Linh Đàm', 8, '', 0),
(465, 'Rice City Linh Đàm', 8, '', 0),
(466, 'Riverside Tower 79 Thanh Đàm', 8, '', 0),
(467, 'Rose Town', 8, '', 0),
(468, 'Ruby Tower', 8, '', 0),
(469, 'Sky Central', 8, '', 0),
(470, 'Sky Garden Towers', 8, '', 0),
(471, 'Smile Building', 8, '', 0),
(472, 'South Building', 8, '', 0),
(473, 'South Tower Hoàng Liệt', 8, '', 0),
(474, 'Sunshine Palace', 8, '', 0),
(475, 'T&T Riverview', 8, '', 0),
(476, 'T&T Tower', 8, '', 0),
(477, 'Tây Nam Hồ Linh Đàm', 8, '', 0),
(478, 'The Manor Central Park', 8, '', 0),
(479, 'The One Residence - Gamuda Garden', 8, '', 0),
(480, 'The Two Residence - Gamuda Garden', 8, '', 0),
(481, 'The Zen Residence', 8, '', 0),
(482, 'Thịnh Liệt', 8, '', 0),
(483, 'Tiến Phú', 8, '', 0),
(484, 'TTTM Đền Lừ', 8, '', 0),
(485, 'VP2 Linh Đàm', 8, '', 0),
(486, 'VP3 Linh Đàm', 8, '', 0),
(487, 'VP4 Linh Đàm', 8, '', 0),
(488, 'VP5 Linh Đàm', 8, '', 0),
(489, 'VP6 Linh Đàm', 8, '', 0),
(490, 'VP7 Linh Đàm', 8, '', 0),
(491, '45 Nguyễn Sơn', 4, '', 0),
(492, 'Aeon Mall Long Biên', 4, '', 0),
(493, 'Berriver Long Biên', 4, '', 0),
(494, 'C17 Bộ Công An', 4, '', 0),
(495, 'Căn hộ dịch vụ cao cấp Nhật Bản', 4, '', 0),
(496, 'Canal Park', 4, '', 0),
(497, 'Chung cư NO-08 Giang Biên', 4, '', 0),
(498, 'Công viên công nghệ thông tin Hà Nội', 4, '', 0),
(499, 'CT1 Thạch Bàn', 4, '', 0),
(500, 'CT2A Thạch Bàn', 4, '', 0),
(501, 'Eco City Việt Hưng', 4, '', 0),
(502, 'Ecohome Phúc Lợi', 4, '', 0),
(503, 'Garden City', 4, '', 0),
(504, 'Green House', 4, '', 0),
(505, 'Green Park CT15 Việt Hưng', 4, '', 0),
(506, 'Green Tower Sài Đồng', 4, '', 0),
(507, 'Hà Nội Garden Villa (Hà Nội Garden City)', 4, '', 0),
(508, 'Hà Nội Homeland', 4, '', 0),
(509, 'Happy Star Tower', 4, '', 0),
(510, 'HC Golden City', 4, '', 0),
(511, 'Him Lam Thạch Bàn 2', 4, '', 0),
(512, 'Hoàng Quy', 4, '', 0),
(513, 'IT Park', 4, '', 0),
(514, 'Khai Sơn Hill', 4, '', 0),
(515, 'Khu đô thị Thượng Thanh', 4, '', 0),
(516, 'Lotus Lake View', 4, '', 0),
(517, 'Mipec Riverside', 4, '', 0),
(518, 'New Space', 4, '', 0),
(519, 'Nhà ở cán bộ chiến sỹ công an Gia Lâm', 4, '', 0),
(520, 'Northern Diamond', 4, '', 0),
(521, 'One 18 Ngọc Lâm', 4, '', 0),
(522, 'Plaschem Plaza', 4, '', 0),
(523, 'Rice City Sông Hồng', 4, '', 0),
(524, 'Rice Home Sông Hồng', 4, '', 0),
(525, 'Ruby City', 4, '', 0),
(526, 'Ruby CT3 Phúc Lợi', 4, '', 0),
(527, 'Sài Đồng', 4, '', 0),
(528, 'Sài Đồng Lake View', 4, '', 0),
(529, 'Savico MegaMall', 4, '', 0),
(530, 'Silver Wings Building - Mekong', 4, '', 0),
(531, 'Sunrise Building 3', 4, '', 0),
(532, 'Thạch Bàn', 4, '', 0),
(533, 'Valencia Garden', 4, '', 0),
(534, 'Việt Hưng', 4, '', 0),
(535, 'Vincom Long Bien', 4, '', 0),
(536, 'Vinhomes Riverside', 4, '', 0),
(537, 'Vinhomes The Harmony', 4, '', 0),
(538, 'Đông Anh', 11, '', 0),
(539, 'Eurowindow River Park', 11, '', 0),
(540, 'Intracom Riverside', 11, '', 0),
(541, 'Nam Hồng', 11, '', 0),
(542, 'Đặng Xá 1', 12, '', 0),
(543, 'Đặng Xá 2', 12, '', 0),
(544, 'Hoa Viên Villas', 12, '', 0),
(545, 'Lâm Viên Villas', 12, '', 0),
(546, 'Vincity Gia Lâm', 12, '', 0),
(547, 'KCN Nội Bài', 10, '', 0),
(548, 'Cầu Bươu', 14, '', 0),
(549, 'Chung cư Đại Thanh', 14, '', 0),
(550, 'Chung cư Viện 103', 14, '', 0),
(551, 'Đại Thanh', 14, '', 0),
(552, 'Đồng Phát Resident', 14, '', 0),
(553, 'Eco Dream', 14, '', 0),
(554, 'Eco Green City', 14, '', 0),
(555, 'Eco Spring', 14, '', 0),
(556, 'Galaxy Tower', 14, '', 0),
(557, 'HDB Plaza', 14, '', 0),
(558, 'Hồng Hà Eco City', 14, '', 0),
(559, 'Housinco Grand Tower', 14, '', 0),
(560, 'Minh Việt Ngọc Hồi', 14, '', 0),
(561, 'Tabudec Plaza', 14, '', 0),
(562, 'Tecco Tứ Hiệp', 14, '', 0),
(563, 'The Eden Rose', 14, '', 0),
(564, 'Tincom Pháp Vân', 14, '', 0),
(565, 'Tổng cục 5 Tân Triều', 14, '', 0),
(566, 'Tứ Hiệp Plaza', 14, '', 0),
(567, 'Viện bỏng Lê Hữu Trác', 14, '', 0),
(568, '789 Bộ Tổng Tham Mưu - BQP', 13, '', 0),
(569, 'An Lạc Mỹ Đình', 13, '', 0),
(570, 'An Lạc Phùng Khoang', 13, '', 0),
(571, 'Apex Tower', 13, '', 0),
(572, 'Athena Complex', 13, '', 0),
(573, 'B.I.G Tower', 13, '', 0),
(574, 'C14 - Bộ Công An', 13, '', 0),
(575, 'C37 Bộ Công An - Bắc Hà Tower', 13, '', 0),
(576, 'CEO Tower', 13, '', 0),
(577, 'Chung cư B32 Đại Mỗ', 13, '', 0),
(578, 'Crown Office', 13, '', 0),
(579, 'CT1 Trung Văn - Vinaconex 3', 13, '', 0),
(580, 'CT2 Trung Văn - Vinaconex 3', 13, '', 0),
(581, 'CT2 Trung Văn Viettel Hancic', 13, '', 0),
(582, 'CT2 Xuân Phương', 13, '', 0),
(583, 'CT3 C’Land Lê Đức Thọ', 13, '', 0),
(584, 'Đại Mỗ', 13, '', 0),
(585, 'Detech Tower', 13, '', 0),
(586, 'Dolphin Plaza', 13, 'CYNw0P6LLQ3opLyIWYUARE9E6r2A9y-Dolphin Plaza 1.jpg', 1),
(587, 'Dream Town', 13, '', 0),
(588, 'Ecolife Capitol', 13, '', 0),
(589, 'Five Star Mỹ Đình', 13, '', 0),
(590, 'FLC Complex Phạm Hùng', 13, '', 0),
(591, 'FLC Garden City', 13, '', 0),
(592, 'FLC Green Home 18 Phạm Hùng', 13, '', 0),
(593, 'FLC Landmark Tower', 13, '', 0),
(594, 'FLC Premier Park Đại Mỗ', 13, '', 0),
(595, 'Florence Mỹ Đình', 13, '', 0),
(596, 'Golden Field Mỹ Đình', 13, '', 0),
(597, 'Golden Palace', 13, '', 0),
(598, 'Handico Tower', 13, '', 0),
(599, 'Hateco Xuân Phương', 13, '', 0),
(600, 'HH1 Mễ Trì Hạ', 13, '', 0),
(601, 'HH2 Bắc Hà', 13, '', 0),
(602, 'HH3 Tower', 13, '', 0),
(603, 'ICD', 13, '', 0),
(604, 'Intracom 6', 13, '', 0),
(605, 'Intracom1', 13, '', 0),
(606, 'Iris Garden', 13, '', 0),
(607, 'KĐT Mễ Trì Hạ', 13, '', 0),
(608, 'KĐT Trung Văn - Hancic', 13, '', 0),
(609, 'KĐT Trung Văn - Vinaconex 3', 13, '', 0),
(610, 'Keangnam', 13, 'xqJaM4fCwMDh1o6FWWyoEL15GOzDW9-Keangnam1_Cenco.jpg', 1),
(611, 'Khu đô thị Xuân Phương', 13, '', 0),
(612, 'Lafontana', 13, '', 0),
(613, 'Lilama 10', 13, '', 0),
(614, 'Lotus Complex HH1', 13, '', 0),
(615, 'Louis City', 13, '', 0),
(616, 'MD Complex Mỹ Đình', 13, '', 0),
(617, 'Mễ Trì Thượng', 13, '', 0),
(618, 'Mon City - Hải Đăng City', 13, '', 0),
(619, 'Mỹ Đình', 13, '', 0),
(620, 'Mỹ Đình I', 13, '', 0),
(621, 'Mỹ Đình II', 13, '', 0),
(622, 'Mỹ Đình Pearl', 13, '', 0),
(623, 'Mỹ Đình Plaza', 13, '', 0),
(624, 'Mỹ Đình Plaza 2', 13, '', 0),
(625, 'Newtatco Complex', 13, '', 0),
(626, 'Nhà ở xã hội Bộ Tư lệnh Tăng Thiết Giáp', 13, '', 0),
(627, 'NOXH Trung Văn', 13, '', 0),
(628, 'Phú Mỹ', 13, '', 0),
(629, 'Phùng Khoang', 13, '', 0),
(630, 'PVN Tower', 13, '', 0),
(631, 'QMS Tower', 13, '', 0),
(632, 'Roman Plaza', 13, '', 0),
(633, 'Startup Tower', 13, '', 0),
(634, 'Sudico Mỹ Đình', 13, '', 0),
(635, 'Sun Square', 13, '', 0),
(636, 'Sunshine Center', 13, '', 0),
(637, 'Tây Hà Tower', 13, '', 0),
(638, 'Tây Mỗ', 13, '', 0),
(639, 'Thang Long Number One', 13, '', 0),
(640, 'The Emerald', 13, '', 0),
(641, 'The Garden', 13, '', 0),
(642, 'The Garden Hills - 99 Trần Bình', 13, '', 0),
(643, 'The Manor', 13, '', 0),
(644, 'TIG Đại Mỗ', 13, '', 0),
(645, 'Times Square Hà Nội', 13, '', 0),
(646, 'Toyota Mỹ Đình', 13, '', 0),
(647, 'Viglacera Tower', 13, '', 0),
(648, 'Vinaconex 7 - 34 Cầu Diễn', 13, '', 0),
(649, 'Vinhomes Gardenia', 13, '', 0),
(650, 'Vinhomes Green Bay Mễ Trì', 13, '', 0),
(651, 'Vinhomes Sky Lake', 13, '', 0),
(652, 'VOV Mễ Trì', 13, '', 0),
(653, 'X2 Mỹ Đình', 13, '', 0),
(654, 'Xuân Phương Garden', 13, '', 0),
(655, 'Xuân Phương Residence', 13, '', 0),
(656, 'Xuân Phương Tasco', 13, '', 0),
(657, '120 Hoàng Quốc Việt BQP', 30, '', 0),
(658, 'An Bình City', 30, '', 0),
(659, 'An Bình Tower', 30, '', 0),
(660, 'B5 Cầu Diễn', 30, '', 0),
(661, 'C1 C2 Xuân Đỉnh', 30, '', 0),
(662, 'Chung cư 199 Hồ Tùng Mậu', 30, '', 0),
(663, 'Chung cư 789 Xuân Đỉnh', 30, '', 0),
(664, 'CT2A Nghĩa Đô', 30, '', 0),
(665, 'CT2B Nghĩa Đô', 30, '', 0),
(666, 'CT3 Cổ Nhuế', 30, '', 0),
(667, 'Ecohome 1', 30, '', 0),
(668, 'Ecohome 2', 30, '', 0),
(669, 'Goldmark City', 30, '', 0),
(670, 'Green Planet', 30, '', 0),
(671, 'Green Stars', 30, '', 0),
(672, 'Habico Tower', 30, '', 0),
(673, 'Hanhud Hoàng Quốc Việt', 30, '', 0),
(674, 'IA20 Ciputra', 30, '', 0),
(675, 'Intracom 2 Cầu Diễn', 30, '', 0),
(676, 'Intracom 3', 30, '', 0),
(677, 'KĐT Cổ Nhuế', 30, '', 0),
(678, 'Khu Ngoại Giao Đoàn', 30, '', 0),
(679, 'Kim Cương Xuân Đỉnh', 30, '', 0),
(680, 'Kosmo Tây Hồ', 30, '', 0),
(681, 'Lakeside Residences - Goldmark City', 30, '', 0),
(682, 'Long Giang Tower', 30, '', 0),
(683, 'Megastar Tây Hồ', 30, '', 0),
(684, 'N01-T1 Ngoại Giao Đoàn', 30, '', 0),
(685, 'N01-T2 Ngoại Giao Đoàn', 30, '', 0),
(686, 'N01-T3 Ngoại Giao Đoàn', 30, '', 0),
(687, 'N01-T4 Ngoại Giao Đoàn', 30, '', 0),
(688, 'N01-T5 Ngoại Giao Đoàn', 30, '', 0),
(689, 'N01-T6 Ngoại Giao Đoàn', 30, '', 0),
(690, 'N01-T7 Ngoại Giao Đoàn', 30, '', 0),
(691, 'N01-T8 Ngoại Giao Đoàn', 30, '', 0),
(692, 'N02-T1 Ngoại Giao Đoàn', 30, '', 0),
(693, 'N02-T2 Ngoại Giao Đoàn', 30, '', 0),
(694, 'N02-T3 Ngoại Giao Đoàn', 30, '', 0),
(695, 'N03-T1 Ngoại Giao Đoàn', 30, '', 0),
(696, 'N03-T2 Ngoại Giao Đoàn', 30, '', 0),
(697, 'N03-T3&T4 Ngoại Giao Đoàn', 30, '', 0),
(698, 'N03-T5 Ngoại Giao Đoàn', 30, '', 0),
(699, 'N03-T6 Ngoại Giao Đoàn', 30, '', 0),
(700, 'N03-T7 Ngoại Giao Đoàn', 30, '', 0),
(701, 'N03-T8 Ngoại Giao Đoàn', 30, '', 0),
(702, 'N04A Ngoại Giao Đoàn', 30, '', 0),
(703, 'N04B Ngoại Giao Đoàn', 30, '', 0),
(704, 'Nghĩa Đô', 30, '', 0),
(705, 'Nhà ở cán bộ nhân viên TP. Hà Nội', 30, '', 0),
(706, 'Nhà ở cho CBCS Bộ Công an', 30, '', 0),
(707, 'Resco Cổ Nhuế', 30, '', 0),
(708, 'Scitech Tower', 30, '', 0),
(709, 'Sunshine City', 30, '', 0),
(710, 'Thành Phố Giao Lưu', 30, '', 0),
(711, 'The Link 345-CT1', 30, 'XIbwEMz6Se0YCOZ7nueJu4Jk24xwtT-hqdefault.jpg', 1),
(712, 'Tổng cục 5 Bộ Công An', 30, '', 0),
(713, 'VC7 Housing Complex - 136 Hồ Tùng Mậu', 30, '', 0),
(714, 'Vibex Từ Liêm', 30, '', 0),
(715, '16B Nguyễn Thái Học', 16, '', 0),
(716, '7 Trần Phú', 16, '', 0),
(717, '89 Phùng Hưng', 16, '', 0),
(718, 'An Hưng', 16, '', 0),
(719, 'An Khang Villa', 16, '', 0),
(720, 'An Lạc Tower', 16, '', 0),
(721, 'An Phú Shop Villa', 16, '', 0),
(722, 'An Vượng Villas', 16, '', 0),
(723, 'Anland Nam Cường', 16, '', 0),
(724, 'Bắc Hà Fodacon', 16, '', 0),
(725, 'Bình Vượng 200 Quang Trung', 16, '', 0),
(726, 'Booyoung', 16, '', 0),
(727, 'CT2 Yên Nghĩa', 16, '', 0),
(728, 'CT3 Yên Nghĩa', 16, '', 0),
(729, 'CT5 Văn Khê', 16, '', 0),
(730, 'Daewoo Cleve', 16, '', 0),
(731, 'Đô Nghĩa', 16, '', 0),
(732, 'Dương Nội', 16, '', 0),
(733, 'Ellipse Tower', 16, '', 0),
(734, 'Evelyne Gardens - ParkCity Hà Nội', 16, '', 0),
(735, 'FLC Star Tower', 16, '', 0),
(736, 'Geleximco Lê Trọng Tấn', 16, '', 0),
(737, 'Golden Millennium', 16, '', 0),
(738, 'GoldSilk Complex', 16, '', 0),
(739, 'Hà Đông Park View', 16, '', 0),
(740, 'Hà Nội Time Towers', 16, '', 0),
(741, 'Hemisco Xa La', 16, '', 0),
(742, 'Hesco', 16, '', 0),
(743, 'Hồ Gươm Plaza', 16, '', 0),
(744, 'HP Landmark Tower', 16, '', 0),
(745, 'HPC Landmark 105', 16, '', 0),
(746, 'HUD3 Tower', 16, '', 0),
(747, 'Hyundai Hillstate', 16, '', 0),
(748, 'ICID Complex', 16, '', 0),
(749, 'KĐT Đồng Mai', 16, '', 0),
(750, 'KĐT La Khê', 16, '', 0),
(751, 'KĐT Phú Lương', 16, '', 0),
(752, 'KĐT Văn Phú', 16, '', 0),
(753, 'KĐT Văn Quán', 16, '', 0),
(754, 'KĐT Xa La', 16, '', 0),
(755, 'Khu nhà ở Bộ tư lệnh Thủ đô Hà Nội', 16, '', 0),
(756, 'Khu nhà ở Hưng Thịnh', 16, '', 0),
(757, 'Khu nhà ở Phú Mỹ', 16, '', 0),
(758, 'Khu nhà ở V5 V6', 16, '', 0),
(759, 'Khu nhà phố thương mại 24h', 16, '', 0),
(760, 'Kiến Hưng', 16, '', 0),
(761, 'La Casta Văn Phú', 16, '', 0),
(762, 'Làng Việt Kiều Châu Âu Euroland', 16, '', 0),
(763, 'Lê Văn Lương Residentials', 16, '', 0),
(764, 'Legend Park', 16, '', 0),
(765, 'Mipec Highrise', 16, '', 0),
(766, 'Mỗ Lao', 16, '', 0),
(767, 'Mulberry Lane', 16, '', 0),
(768, 'Nacimex', 16, '', 0),
(769, 'Nam Cường Building', 16, '', 0),
(770, 'Nam La Khê', 16, '', 0),
(771, 'Nam Xa la', 16, '', 0),
(772, 'Nàng Hương', 16, '', 0),
(773, 'New Skyline', 16, '', 0),
(774, 'Newhouse Xa La', 16, '', 0),
(775, 'Ngô Thì Nhậm', 16, '', 0),
(776, 'Nguyễn Chánh Hà Đông', 16, '', 0),
(777, 'Park View Residence', 16, '', 0),
(778, 'ParkCity Hà Nội', 16, '', 0),
(779, 'PCC1 Complex', 16, '', 0),
(780, 'Phú Lãm', 16, '', 0),
(781, 'Rainbow Building', 16, '', 0),
(782, 'Sails Tower', 16, '', 0),
(783, 'Samsora Premier', 16, '', 0),
(784, 'SDU 143 Trần Phú', 16, '', 0),
(785, 'Seasons Avenue', 16, '', 0),
(786, 'SME Hoàng Gia', 16, '', 0),
(787, 'Sông Đà Hà Đông Tower', 16, '', 0),
(788, 'Thanh Bình Village', 16, '', 0),
(789, 'Thanh Hà Mường Thanh', 16, '', 0),
(790, 'Tháp doanh nhân Tower', 16, '', 0),
(791, 'The Green Daisy', 16, '', 0),
(792, 'The K Park', 16, '', 0),
(793, 'The Pride', 16, '', 0),
(794, 'The Sparks', 16, '', 0),
(795, 'The Vesta', 16, '', 0),
(796, 'Thiên Niên Kỷ', 16, '', 0),
(797, 'Thủy Lợi Tower', 16, '', 0),
(798, 'Tokyo Tower', 16, '', 0),
(799, 'TSQ Galaxy', 16, '', 0),
(800, 'TTTM TSQ', 16, '', 0),
(801, 'Unimax Twin Tower', 16, '', 0),
(802, 'Usilk City', 16, '', 0),
(803, 'Văn Khê', 16, '', 0),
(804, 'Văn La - Văn Khê', 16, '', 0),
(805, 'Văn Phú Victoria', 16, '', 0),
(806, 'Vạn Phúc - Simco Sông Đà', 16, '', 0),
(807, 'Vinaconex 21', 16, '', 0),
(808, 'Westa', 16, '', 0),
(809, 'Xuân Mai Complex', 16, '', 0),
(810, 'Xuân Mai Park State', 16, '', 0),
(811, 'Xuân Mai Riverside', 16, '', 0),
(812, 'Xuân Mai Sparks Tower', 16, '', 0),
(813, 'Khu đô thị mới Phú Thịnh', 17, '', 0),
(814, 'Mai Trai Nghĩa Phủ', 17, '', 0),
(815, 'Thuần Nghệ Green City', 17, '', 0),
(816, 'AIC Mê Linh', 15, '', 0),
(817, 'Ba Đình Mê Linh', 15, '', 0),
(818, 'BIDV Scienco 5 Mê Linh', 15, '', 0),
(819, 'CEO Mê Linh', 15, '', 0),
(820, 'Chi Đông', 15, '', 0),
(821, 'Chung cư các KCN - Mê Linh', 15, '', 0),
(822, 'Cienco 5 Mê Linh', 15, '', 0),
(823, 'Diamond Park New', 15, '', 0),
(824, 'Hà Phong', 15, '', 0),
(825, 'Hoàng Vân', 15, '', 0),
(826, 'KCN Quang Minh', 15, '', 0),
(827, 'KĐT Quang Minh', 15, '', 0),
(828, 'Licogi 18 - Mê Linh', 15, '', 0),
(829, 'Mê Linh - Thanh Lâm - Đại Thịnh', 15, '', 0),
(830, 'Minh Giang Đầm Và', 15, '', 0),
(831, 'Phúc Việt', 15, '', 0),
(832, 'Rose Valley', 15, '', 0),
(833, 'Tiền Phong', 15, '', 0),
(834, 'Tùng Phương', 15, '', 0),
(835, 'Country House', 18, '', 0),
(836, 'Green Villas 4', 18, '', 0),
(837, 'Ngọc Viên Islands', 18, '', 0),
(838, 'Nine Ivory Eco', 18, '', 0),
(839, 'Royal Garden', 18, '', 0),
(840, 'Suối Hai Villa', 18, '', 0),
(841, 'Tản Viên Villas', 18, '', 0),
(842, 'The Grand Arena Hill', 18, '', 0),
(843, 'The Queen Villas', 18, '', 0),
(844, 'Yên Bài Top Hills', 18, '', 0),
(845, 'Yên Bài Villas 2', 18, '', 0),
(846, 'Cẩm Đình', 19, '', 0),
(847, 'Phúc Thịnh Tower', 20, '', 0),
(848, 'Tân lập', 20, '', 0),
(849, 'Tân Lập Cienco 5', 20, '', 0),
(850, 'Tân Tây Đô', 20, '', 0),
(851, 'The Phoenix Garden', 20, '', 0),
(852, 'Vincity Đan Phượng', 20, '', 0),
(853, 'xpHOMES', 20, '', 0),
(854, 'An Thịnh I', 21, '', 0),
(855, 'Bảo Sơn Paradise', 21, '', 0),
(856, 'Bright City', 21, '', 0),
(857, 'Ciri An Khánh', 21, '', 0),
(858, 'CT Number One', 21, '', 0),
(859, 'Dầu khí Đức Giang', 21, '', 0),
(860, 'Five Stars', 21, '', 0),
(861, 'Gemek Premium', 21, '', 0),
(862, 'Gemek Tower', 21, '', 0),
(863, 'Hoa Phượng', 21, '', 0),
(864, 'KĐT An Khánh - An Thượng', 21, '', 0),
(865, 'Khu đô thị Đại học Vân Canh', 21, '', 0),
(866, 'Kim Chung Di Trạch', 21, '', 0),
(867, 'Lideco', 21, '', 0),
(868, 'Nam An Khánh', 21, '', 0),
(869, 'Sơn Đồng', 21, '', 0),
(870, 'Splendora An Khánh', 21, '', 0),
(871, 'Tân Việt Tower', 21, '', 0),
(872, 'Tây Đô', 21, '', 0),
(873, 'Thăng Long Victory', 21, '', 0),
(874, 'The Golden An Khánh', 21, '', 0),
(875, 'The Golden An Khánh 32T', 21, '', 0),
(876, 'Tricon Towers', 21, '', 0),
(877, 'Vân Canh', 21, '', 0),
(878, 'Vinhomes Thăng Long', 21, '', 0),
(879, 'Vườn Cam Vinapol', 21, '', 0),
(880, 'Westpoint - Nam đường 32', 21, '', 0),
(881, 'New House City', 22, '', 0),
(882, 'Sunny Garden City', 22, '', 0),
(883, 'Tây Quốc Oai', 22, '', 0),
(884, 'Tuần Châu', 22, '', 0),
(885, 'Asean Resort', 23, '', 0),
(886, 'Bắc Phú Cát', 23, '', 0),
(887, 'CNC Viettel', 23, '', 0),
(888, 'KĐT Phú Cát City', 23, '', 0),
(889, 'Thạch Thất Quốc Oai', 23, '', 0),
(890, 'Xanh Villas', 23, '', 0),
(891, 'Làng Thời Đại', 24, '', 0),
(892, 'Lộc Ninh Singashine', 24, '', 0),
(893, 'Phú Nghĩa', 24, '', 0),
(894, 'Khu đô thị Duyên Thái', 26, '', 0),
(895, 'Hanssip', 27, '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vũ Văn Dương', 'admin@mail.com', '$2y$10$hZUVcWI4EiN5loq.1N3a6eNSoaNqx3ZwOIVcVz6BQ2xJRiXvSfO/S', '1LsJYApai8MwHVWc4wBhvfLwI3SSge4Qxo1wDdk2fBUnNvs0r4YvQEqzLyn5', '2018-01-13 07:43:19', '2018-01-13 07:43:19'),
(3, 'Duong Vu', 'duongcn07@gmail.com', '$2y$10$MdIqnzgtzqw.IPcCyWpmAOVbLx9QvTr0bV7iWQHzOsVNLZHRfpDfS', 'NiBQEC1zxRGNPYyGfnLgOo33o8ShVkzbw0S9BLJ0KoFjUgZboDZCYURv2Wsd', '2018-02-06 08:17:29', '2018-02-06 08:17:29'),
(4, 'Duong Vu', 'toilaai0965@gmail.com', '$2y$10$PnLHE9Sj.FOt1OGp6zaZ5OGG33RzJvT/xUAKjsmt.d5.gMalm8TN.', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ward`
--

CREATE TABLE `ward` (
  `wardid` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `type` varchar(30) NOT NULL,
  `location` varchar(30) NOT NULL,
  `districtid` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `ward`
--

INSERT INTO `ward` (`wardid`, `name`, `type`, `location`, `districtid`) VALUES
(1, 'Phúc Xá', 'Phường', '21 02 52N, 105 50 52E', 1),
(4, 'Trúc Bạch', 'Phường', '21 02 50N, 105 50 21E', 1),
(6, 'Vĩnh Phúc', 'Phường', '21 02 37N, 105 48 28E', 1),
(7, 'Cống Vị', 'Phường', '21 02 08N, 105 48 28E', 1),
(8, 'Liễu Giai', 'Phường', '21 02 21N, 105 48 56E', 1),
(10, 'Nguyễn Trung Trực', 'Phường', '21 02 36N, 105 50 43E', 1),
(13, 'Quán Thánh', 'Phường', '21 02 26N, 105 50 23E', 1),
(16, 'Ngọc Hà', 'Phường', '21 02 24N, 105 49 23E', 1),
(19, 'Điện Biên', 'Phường', '21 02 04N, 105 50 07E', 1),
(22, 'Đội Cấn', 'Phường', '21 02 10N, 105 49 31E', 1),
(25, 'Ngọc Khánh', 'Phường', '21 01 52N, 105 48 27E', 1),
(28, 'Kim Mã', 'Phường', '21 01 53N, 105 49 20E', 1),
(31, 'Giảng Võ', 'Phường', '21 01 42N, 105 48 58E', 1),
(34, 'Thành Công', 'Phường', '21 01 17N, 105 48 50E', 1),
(37, 'Phúc Tân', 'Phường', '21 02 17N, 105 51018E', 2),
(40, 'Đồng Xuân', 'Phường', '21 02 22N, 105 50 54E', 2),
(43, 'Hàng Mã', 'Phường', '21 02 17N, 105 50 42E', 2),
(46, 'Hàng Buồm', 'Phường', '21 02 11N, 105 51 02E', 2),
(49, 'Hàng Đào', 'Phường', '21 02 07N, 105 50 54E', 2),
(52, 'Hàng Bồ', 'Phường', '21 02 09N, 105 50 46E', 2),
(55, 'Cửa Đông', 'Phường', '21 02 00N, 105 50 37E', 2),
(58, 'Lý Thái Tổ', 'Phường', '21 01 56N, 105 51 11E', 2),
(61, 'Hàng Bạc', 'Phường', '21 02 01N, 105 51 03E', 2),
(64, 'Hàng Gai', 'Phường', '21 01 59N, 105 50 48E', 2),
(67, 'Chương Dương Độ', 'Phường', '21 01 38N, 105 51 37E', 2),
(70, 'Hàng Trống', 'Phường', '21 01 47N, 105 50 55E', 2),
(73, 'Cửa Nam', 'Phường', '21 01 34N, 105 50 27E', 2),
(76, 'Hàng Bông', 'Phường', '21 01 46N, 105 50 37E', 2),
(79, 'Tràng Tiền', 'Phường', '21 01 34N, 105 51 10E', 2),
(82, 'Trần Hưng Đạo', 'Phường', '21 01 26N, 105 50 41E', 2),
(85, 'Phan Chu Trinh', 'Phường', '21 01 21N, 105 51 20E', 2),
(88, 'Hàng Bài', 'Phường', '21 01 20N, 105 51 00E', 2),
(91, 'Phú Thượng', 'Phường', '21 05 08N, 105 48 24E', 3),
(94, 'Nhật Tân', 'Phường', '21 04 42N, 105 49 22E', 3),
(97, 'Tứ Liên', 'Phường', '21 04 07N, 105 50 09E', 3),
(100, 'Quảng An', 'Phường', '21 03 42N, 105 49 24E', 3),
(103, 'Xuân La', 'Phường', '21 03 41N, 105 48 12E', 3),
(106, 'Yên Phụ', 'Phường', '21 03 17N, 105 50 17E', 3),
(109, 'Bưởi', 'Phường', '21 03 17N, 105 48 40E', 3),
(112, 'Thuỵ Khuê', 'Phường', '21 02 46N, 105 49 23E', 3),
(115, 'Thượng Thanh', 'Phường', '21 04 01N, 105 52 50E', 4),
(118, 'Ngọc Thuỵ', 'Phường', '21 03 48N, 105 51 24E', 4),
(121, 'Giang Biên', 'Phường', '21 04 02N, 105 55 04E', 4),
(124, 'Đức Giang', 'Phường', '21 03 58N, 105 53 46E', 4),
(127, 'Việt Hưng', 'Phường', '21 03 17N, 105 54 05E', 4),
(130, 'Gia Thuỵ', 'Phường', '21 03 06N, 105 53 16E', 4),
(133, 'Ngọc Lâm', 'Phường', '21 02 52N, 105 52 26E', 4),
(136, 'Phúc Lợi', 'Phường', '21 02 31N, 105 55 25E', 4),
(139, 'Bồ Đề', 'Phường', '21 02 09N, 105 52 10E', 4),
(142, 'Sài Đồng', 'Phường', '21 02 05N, 105 54 38E', 4),
(145, 'Long Biên', 'Phường', '21 01 09N, 105 53 10E', 4),
(148, 'Thạch Bàn', 'Phường', '21 01 20N, 105 55 00E', 4),
(151, 'Phúc Đồng', 'Phường', '21 02 27N, 105 53 38E', 4),
(154, 'Cự Khối', 'Phường', '21 00 24N, 105 53 59E', 4),
(157, 'Nghĩa Đô', 'Phường', '21 03 00N, 105 47 58E', 5),
(160, 'Nghĩa Tân', 'Phường', '21 02 53N, 105 47 09E', 5),
(163, 'Mai Dịch', 'Phường', '21 02 09N, 105 46 23E', 5),
(166, 'Dịch Vọng', 'Phường', '21 02 06N, 105 47 28E', 5),
(167, 'Dịch Vọng Hậu', 'Phường', '21 02 10N, 105 47 00E', 5),
(169, 'Quan Hoa', 'Phường', '21 02 10N, 105 47 56E', 5),
(172, 'Yên Hoà', 'Phường', '21 01 24N, 105 47 28E', 5),
(175, 'Trung Hoà', 'Phường', '21 00 37N, 105 47 56E', 5),
(178, 'Cát Linh', 'Phường', '21 01 43N, 105 49 33E', 6),
(181, 'Văn Miếu', 'Phường', '21 01 38N, 105 50 10E', 6),
(184, 'Quốc Tử Giám', 'Phường', '21 01 38N, 105 49 49E', 6),
(187, 'Láng Thượng', 'Phường', '21 01 24N, 105 48 10E', 6),
(190, 'Ô Chợ Dừa', 'Phường', '21 01 20N, 105 49 18E', 6),
(193, 'Văn Chương', 'Phường', '21 01 28N, 105 50 02E', 6),
(196, 'Hàng Bột', 'Phường', '21 01 24N, 105 49 43E', 6),
(199, 'Láng Hạ', 'Phường', '21 01 03N, 105 48 36E', 6),
(202, 'Khâm Thiên', 'Phường', '21 01 14N, 105 50 12E', 6),
(205, 'Thổ Quan', 'Phường', '21 01 08N, 105 49 53E', 6),
(208, 'Nam Đồng', 'Phường', '21 00 55N, 105 49 43E', 6),
(211, 'Trung Phụng', 'Phường', '21 01 02N, 105 50 11E', 6),
(214, 'Quang Trung', 'Phường', '21 00 46N, 105 49 24E', 6),
(217, 'Trung Liệt', 'Phường', '21 00 42N, 105 49 15E', 6),
(220, 'Phương Liên', 'Phường', '21 00 45N, 105 50 07E', 6),
(223, 'Thịnh Quang', 'Phường', '21 00 35N, 105 48 57E', 6),
(226, 'Trung Tự', 'Phường', '21 00 26N, 105 49 50E', 6),
(229, 'Kim Liên', 'Phường', '21 00 27N, 105 50 00E', 6),
(232, 'Phương Mai', 'Phường', '21 00 14N, 105 50 10E', 6),
(235, 'Ngã Tư Sở', 'Phường', '21 00 22N, 105 48 54E', 6),
(238, 'Khương Thượng', 'Phường', '21 00 11N, 105 49 36E', 6),
(241, 'Nguyễn Du', 'Phường', '21 01 10N, 105 50 36E', 7),
(244, 'Bạch Đằng', 'Phường', '21 00 57N, 105 51 49E', 7),
(247, 'Phạm Đình Hổ', 'Phường', '21 00 58N, 105 51 21E', 7),
(250, 'Bùi Thị Xuân', 'Phường', '21 00 58N, 105 50 54E', 7),
(253, 'Ngô Thì Nhậm', 'Phường', '21 01 01N, 105 51 05E', 7),
(256, 'Lê Đại Hành', 'Phường', '21 00 48N, 105 50 40E', 7),
(259, 'Đồng Nhân', 'Phường', '21 00 46N, 105 51 17E', 7),
(262, 'Phố Huế', 'Phường', '21 00 44N, 105 51 06E', 7),
(265, 'Đống Mác', 'Phường', '21 00 44N, 105 51 27E', 7),
(268, 'Thanh Lương', 'Phường', '21 00 26N, 105 52 11E', 7),
(271, 'Thanh Nhàn', 'Phường', '21 00 25N, 105 51 15E', 7),
(274, 'Cầu Dền', 'Phường', '21 00 25N, 105 50 53E', 7),
(277, 'Bách Khoa', 'Phường', '21 00 18N, 105 50 38E', 7),
(280, 'Đồng Tâm', 'Phường', '20 59 56N, 105 50 34E', 7),
(283, 'Vĩnh Tuy', 'Phường', '20 59 57N, 105 52 05E', 7),
(286, 'Bạch Mai', 'Phường', '21 00 04N, 105 51 00E', 7),
(289, 'Quỳnh Mai', 'Phường', '21 00 06N, 105 51 28E', 7),
(292, 'Quỳnh Lôi', 'Phường', '21 00 04N, 105 51 16E', 7),
(295, 'Minh Khai', 'Phường', '20 59 49N, 105 51 16E', 7),
(298, 'Trương Định', 'Phường', '20 59 47N, 105 50 47E', 7),
(301, 'Thanh Trì', 'Phường', '20 59 43N, 105 53 23E', 8),
(304, 'Vĩnh Hưng', 'Phường', '20 59 18N, 105 52 25E', 8),
(307, 'Định Công', 'Phường', '20 59 02N, 105 49 37E', 8),
(310, 'Mai Động', 'Phường', '20 59 32N, 105 51 47E', 8),
(313, 'Tương Mai', 'Phường', '20 59 18N, 105 50 51E', 8),
(316, 'Đại Kim', 'Phường', '20 58 33N, 105 49 18E', 8),
(319, 'Tân Mai', 'Phường', '20 59 01N, 105 50 51E', 8),
(322, 'Hoàng Văn Thụ', 'Phường', '20 59 14N, 105 51 30E', 8),
(325, 'Giáp Bát', 'Phường', '20 59 05N, 105 50 28E', 8),
(328, 'Lĩnh Nam', 'Phường', '20 58 37N, 105 53 48E', 8),
(331, 'Thịnh Liệt', 'Phường', '20 58 31N, 105 50 50E', 8),
(334, 'Trần Phú', 'Phường', '20 58 10N, 105 52 55E', 8),
(337, 'Hoàng Liệt', 'Phường', '20 57 47N, 105 50 07E', 8),
(340, 'Yên Sở', 'Phường', '20 57 56N, 105 52 14E', 8),
(343, 'Nhân Chính', 'Phường', '21 00 11N, 105 48 07E', 9),
(346, 'Thượng Đình', 'Phường', '21 00 01N, 105 48 51E', 9),
(349, 'Khương Trung', 'Phường', '20 59 54N, 105 49 10E', 9),
(352, 'Khương Mai', 'Phường', '20 59 43N, 105 49 39E', 9),
(355, 'Thanh Xuân Trung', 'Phường', '20 59 48N, 105 48 14E', 9),
(358, 'Phương Liệt', 'Phường', '20 59 31N, 105 50 09E', 9),
(361, 'Hạ Đình', 'Phường', '20 59 28N, 105 48 10E', 9),
(364, 'Khương Đình', 'Phường', '20 59 21N, 105 49 05E', 9),
(367, 'Thanh Xuân Bắc', 'Phường', '20 59 40N, 105 47 49E', 9),
(370, 'Thanh Xuân Nam', 'Phường', '20 59 18N, 105 47 47E', 9),
(373, 'Kim Giang', 'Phường', '20 59 00N, 105 48 41E', 9),
(376, 'Sóc Sơn', 'Thị Trấn', '21 15 28N, 105 51 12E', 16),
(379, 'Bắc Sơn', 'Xã', '21 21 42N, 105 49 12E', 16),
(382, 'Minh Trí', 'Xã', '21 18 09N, 105 45 51E', 16),
(385, 'Hồng Kỳ', 'Xã', '21 18 55N, 105 50 49E', 16),
(388, 'Nam Sơn', 'Xã', '21 18 36N, 105 48 51E', 16),
(391, 'Trung Giã', 'Xã', '21 18 44N, 105 52 43E', 16),
(394, 'Tân Hưng', 'Xã', '21 17 55N, 105 54 14E', 16),
(397, 'Minh Phú', 'Xã', '21 16 58N, 105 46 27E', 16),
(400, 'Phù Linh', 'Xã', '21 16 49N, 105 50 30E', 16),
(403, 'Bắc Phú', 'Xã', '21 16 46N, 105 53 59E', 16),
(406, 'Tân Minh', 'Xã', '21 16 08N, 105 52 09E', 16),
(409, 'Quang Tiến', 'Xã', '21 15 08N, 105 48 54E', 16),
(412, 'Hiền Ninh', 'Xã', '21 15 33N, 105 47 19E', 16),
(415, 'Tân Dân', 'Xã', '21 15 25N, 105 43 53E', 16),
(418, 'Tiên Dược', 'Xã', '21 14 57N, 105 50 41E', 16),
(421, 'Việt Long', 'Xã', '21 15 09N, 105 55 10E', 16),
(424, 'Xuân Giang', 'Xã', '21 14 44N, 105 53 55E', 16),
(427, 'Mai Đình', 'Xã', '21 13 33N, 105 49 45E', 16),
(430, 'Đức Hoà', 'Xã', '21 13 50N, 105 52 57E', 16),
(433, 'Thanh Xuân', 'Xã', '21 13 31N, 105 45 15E', 16),
(436, 'Đông Xuân', 'Xã', '21 12 59N, 105 51 56E', 16),
(439, 'Kim Lũ', 'Xã', '21 12 39N, 105 54 19E', 16),
(442, 'Phú Cường', 'Xã', '21 12 21N, 105 47 12E', 16),
(445, 'Phú Minh', 'Xã', '21 12 11N, 105 49 07E', 16),
(448, 'Phù Lỗ', 'Xã', '21 12 11N, 105 51 04E', 16),
(451, 'Xuân Thu', 'Xã', '21 11 51N, 105 53 23E', 16),
(454, 'Đông Anh', 'Thị Trấn', '21 09 05N, 105 50 39E', 11),
(457, 'Xuân Nộn', 'Xã', '21 10 58N, 105 52 05E', 11),
(460, 'Thuỵ Lâm', 'Xã', '21 10 38N, 105 53 49E', 11),
(463, 'Bắc Hồng', 'Xã', '21 10 39N, 105 48 11E', 11),
(466, 'Nguyên Khê', 'Xã', '21 10 36N, 105 50 05E', 11),
(469, 'Nam Hồng', 'Xã', '21 09 48N, 105 47 09E', 11),
(472, 'Tiên Dương', 'Xã', '21 08 54N, 105 49 49E', 11),
(475, 'Vân Hà', 'Xã', '21 09 03N, 105 54 45E', 11),
(478, 'Uy Nỗ', 'Xã', '21 08 41N, 105 51 26E', 11),
(481, 'Vân Nội', 'Xã', '21 08 46N, 105 48 38E', 11),
(484, 'Liên Hà', 'Xã', '21 08 46N, 105 53 37E', 11),
(487, 'Việt Hùng', 'Xã', '21 08 27N, 105 52 38E', 11),
(490, 'Kim Nỗ', 'Xã', '21 08 14N, 105 47 43E', 11),
(493, 'Kim Chung', 'Xã', '21 08 03N, 105 46 27E', 11),
(496, 'Dục Tú', 'Xã', '21 06 53N, 105 53 53E', 11),
(499, 'Đại Mạch', 'Xã', '21 07 08N, 105 44 53E', 11),
(502, 'Vĩnh Ngọc', 'Xã', '21 06 42N, 105 49 27E', 11),
(505, 'Cổ Loa', 'Xã', '21 06 49N, 105 51 45E', 11),
(508, 'Hải Bối', 'Xã', '21 06 34N, 105 47 48E', 11),
(511, 'Xuân Canh', 'Xã', '21 05 47N, 105 50 59E', 11),
(514, 'Võng La', 'Xã', '21 06 33N, 105 46 06E', 11),
(517, 'Tầm Xá', 'Xã', '21 05 57N, 105 49 59E', 11),
(520, 'Mai Lâm', 'Xã', '21 05 27N, 105 53 14E', 11),
(523, 'Đông Hội', 'Xã', '21 05 12N, 105 52 02E', 11),
(526, 'Yên Viên', 'Thị Trấn', '21 05 10N, 105 54 46E', 12),
(529, 'Yên Thường', 'Xã', '21 06 18N, 105 54 59E', 12),
(532, 'Yên Viên', 'Xã', '21 05 24N, 105 54 32E', 12),
(535, 'Ninh Hiệp', 'Xã', '21 04 47N, 105 57 02E', 12),
(538, 'Đình Xuyên', 'Xã', '21 04 40N, 105 55 57E', 12),
(541, 'Dương Hà', 'Xã', '21 03 53N, 105 55 51E', 12),
(544, 'Phù Đổng', 'Xã', '21 03 25N, 105 57 46E', 12),
(547, 'Trung Mầu', 'Xã', '21 03 40N, 105 59 10E', 12),
(550, 'Lệ Chi', 'Xã', '21 02 59N, 106 00 10E', 12),
(553, 'Cổ Bi', 'Xã', '21 01 59N, 105 56 17E', 12),
(556, 'Đặng Xá', 'Xã', '21 01 59N, 105 57 46E', 12),
(559, 'Phú Thị', 'Xã', '21 01 35N, 105 57 57E', 12),
(562, 'Kim Sơn', 'Xã', '21 01 41N, 105 59 28E', 12),
(565, 'Trâu Quỳ', 'Thị Trấn', '21 00 35N, 105 56 12E', 12),
(568, 'Dương Quang', 'Xã', '21 00 29N, 105 59 18E', 12),
(571, 'Dương Xá', 'Xã', '21 00 09N, 105 57 43E', 12),
(574, 'Đông Dư', 'Xã', '20 59 46N, 105 54 45E', 12),
(577, 'Đa Tốn', 'Xã', '20 59 08N, 105 56 03E', 12),
(580, 'Kiêu Kỵ', 'Xã', '20 58 48N, 105 56 55E', 12),
(583, 'Bát Tràng', 'Xã', '20 58 49N, 105 54 51E', 12),
(586, 'Kim Lan', 'Xã', '20 57 45N, 105 54 05E', 12),
(589, 'Văn Đức', 'Xã', '20 56 30N, 105 53 44E', 12),
(592, 'Cầu Diễn', 'Thị Trấn', '21 02 26N, 105 45 45E', 19),
(595, 'Thượng Cát', 'Xã', '21 05 44N, 105 44 03E', 19),
(598, 'Liên Mạc', 'Xã', '21 05 18N, 105 15 42E', 19),
(601, 'Đông Ngạc', 'Xã', '21 05 08N, 105 46 54E', 19),
(604, 'Thuỵ Phương', 'Xã', '21 05 03N, 105 46 04E', 19),
(607, 'Tây Tựu', 'Xã', '21 04 14N, 105 43 55E', 19),
(610, 'Xuân Đỉnh', 'Xã', '21 04 06N, 105 47 24E', 19),
(613, 'Minh Khai', 'Xã', '21 03 39N, 105 44 41E', 19),
(616, 'Cổ Nhuế', 'Xã', '21 03 37N, 105 46 24E', 19),
(619, 'Phú Diễn', 'Xã', '21 03 00N, 105 45 22E', 19),
(622, 'Xuân Phương', 'Xã', '21 02 26N, 105 44 28E', 19),
(625, 'Mỹ Đình', 'Xã', '21 01 44N, 105 46 02E', 19),
(628, 'Tây Mỗ', 'Xã', '21 00 33N, 105 44 29E', 19),
(631, 'Mễ Trì', 'Xã', '20 00 26N, 105 46 17E', 19),
(634, 'Đại Mỗ', 'Xã', '20 59 54N, 105 45 06E', 19),
(637, 'Trung Văn', 'Xã', '20 59 38N, 105 46 47E', 19),
(640, 'Văn Điển', 'Thị Trấn', '20 56 58N, 105 50 36E', 20),
(643, 'Tân Triều', 'Xã', '20 58 27N, 105 47 51E', 20),
(646, 'Thanh Liệt', 'Xã', '20 57 47N, 105 48 40E', 20),
(649, 'Tả Thanh Oai', 'Xã', '20 56 09N, 105 48 11E', 20),
(652, 'Hữu Hoà', 'Xã', '20 56 49N, 105 47 46E', 20),
(655, 'Tam Hiệp', 'Xã', '20 57 04N, 105 49 41E', 20),
(658, 'Tứ Hiệp', 'Xã', '20 56 49N, 105 51 11E', 20),
(661, 'Yên Mỹ', 'Xã', '20 56 35N, 105 52 25E', 20),
(664, 'Vĩnh Quỳnh', 'Xã', '20 55 58N, 105 49 43E', 20),
(667, 'Ngũ Hiệp', 'Xã', '20 55 43N, 105 51 30E', 20),
(670, 'Duyên Hà', 'Xã', '20 55 32N, 105 52 36E', 20),
(673, 'Ngọc Hồi', 'Xã', '20 55 11N, 105 50 31E', 20),
(676, 'Vạn Phúc', 'Xã', '20 55 06N, 105 53 47E', 20),
(679, 'Đại Áng', 'Xã', '20 54 42N, 105 49 06E', 20),
(682, 'Liên Ninh', 'Xã', '20 54 35N, 105 51 07E', 20),
(685, 'Đông Mỹ', 'Xã', '20 54 58N, 105 52 34E', 20),
(688, 'Quang Trung', 'Phường', '22 50 54N, 104 59 01E', 24),
(691, 'Trần Phú', 'Phường', '22 50 04N, 104 59 28E', 24),
(692, 'Ngọc Hà', 'Phường', '', 24),
(694, 'Nguyễn Trãi', 'Phường', '22 49 05N, 104 58 21E', 24),
(697, 'Minh Khai', 'Phường', '22 50 31N, 105 02 00E', 24),
(700, 'Ngọc Đường', 'Xã', '22 50 31N, 105 02 00E', 24),
(712, 'Phó Bảng', 'Thị Trấn', '23 15 14N, 105 11 14E', 26),
(715, 'Lũng Cú', 'Xã', '23 21 30N, 105 18 48E', 26),
(718, 'Má Lé', 'Xã', '23 18 52N, 105 18 34E', 26),
(721, 'Đồng Văn', 'Thị Trấn', '23 17 23N, 105 21 29E', 26),
(724, 'Lũng Táo', 'Xã', '23 17 00N, 105 16 15E', 26),
(727, 'Phố Là', 'Xã', '23 15 56N, 105 09 42E', 26),
(730, 'Thài Phìn Tủng', 'Xã', '23 15 44N, 105 17 56E', 26),
(733, 'Sủng Là', 'Xã', '23 14 42N, 105 12 48E', 26),
(736, 'Xà Phìn', 'Xã', '23 15 29N, 105 14 55E', 26),
(739, 'Tả Phìn', 'Xã', '23 14 15N, 105 18 53E', 26),
(742, 'Tả Lủng', 'Xã', '23 14 01N, 105 21 02E', 26),
(745, 'Phố Cáo', 'Xã', '23 12 51N, 105 10 11E', 26),
(748, 'Sính Lủng', 'Xã', '23 12 53N, 105 16 43E', 26),
(751, 'Sảng Tủng', 'Xã', '23 12 24N, 105 14 11E', 26),
(754, 'Lũng Thầu', 'Xã', '23 11 18N, 105 10 05E', 26),
(757, 'Hố Quáng Phìn', 'Xã', '23 10 21N, 105 16 06E', 26),
(760, 'Vần Chải', 'Xã', '23 08 51N, 105 12 21E', 26),
(763, 'Lũng Phìn', 'Xã', '23 07 45N, 105 16 33E', 26),
(766, 'Sủng Trái', 'Xã', '23 07 25N, 105 14 56E', 26),
(769, 'Mèo Vạc', 'Thị Trấn', '23 09 09N, 105 24 21E', 27),
(772, 'Thượng Phùng', 'Xã', '23 16 44N, 105 25 49E', 27),
(775, 'Pải Lủng', 'Xã', '23 14 32N, 105 23 25E', 27),
(778, 'Xín Cái', 'Xã', '23 12 52N, 105 27 27E', 27),
(781, 'Pả Vi', 'Xã', '23 12 20N, 105 23 55E', 27),
(784, 'Giàng Chu Phìn', 'Xã', '23 11 45N, 105 27 13E', 27),
(787, 'Sủng Trà', 'Xã', '23 10 18N, 105 21 09E', 27),
(790, 'Sủng Máng', 'Xã', '23 09 22N, 105 20 42E', 27),
(793, 'Sơn Vĩ', 'Xã', '23 09 21N, 105 32 26E', 27),
(796, 'Tả Lủng', 'Xã', '23 09 14N, 105 23 10E', 27),
(799, 'Cán Chu Phìn', 'Xã', '23 08 24N, 105 28 03E', 27),
(802, 'Lũng Pù', 'Xã', '23 07 29N, 105 29 51E', 27),
(805, 'Lũng Chinh', 'Xã', '23 08 15N, 105 19 39E', 27),
(808, 'Tát Ngà', 'Xã', '23 06 06N, 105 25 08E', 27),
(811, 'Nậm Ban', 'Xã', '23 04 49N, 105 21 28E', 27),
(814, 'Khâu Vai', 'Xã', '23 03 54N, 105 29 03E', 27),
(815, 'Niêm Tòng', 'Xã', '', 27),
(817, 'Niêm Sơn', 'Xã', '23 01 52N, 105 25 34E', 27),
(820, 'Yên Minh', 'Thị Trấn', '23 06 58N, 105 08 25E', 28),
(823, 'Thắng Mố', 'Xã', '23 13 59N, 105 05 35E', 28),
(826, 'Phú Lũng', 'Xã', '23 14 27N, 105 04 04E', 28),
(829, 'Sủng Tráng', 'Xã', '23 12 29N, 105 06 44E', 28),
(832, 'Bạch Đích', 'Xã', '23 12 22N, 105 02 44E', 28),
(835, 'Na Khê', 'Xã', '23 10 13N, 105 01 55E', 28),
(838, 'Sủng Thài', 'Xã', '23 10 12N, 105 08 28E', 28),
(841, 'Hữu Vinh', 'Xã', '23 08 47N, 105 10 31E', 28),
(844, 'Lao Và Chải', 'Xã', '23 06 44N, 105 05 17E', 28),
(847, 'Mậu Duệ', 'Xã', '23 03 57N, 105 13 25E', 28),
(850, 'Đông Minh', 'Xã', '23 05 25N, 105 10 07E', 28),
(853, 'Mậu Long', 'Xã', '23 04 21N, 105 17 35E', 28),
(856, 'Ngam La', 'Xã', '23 02 46N, 105 10 23E', 28),
(859, 'Ngọc Long', 'Xã', '22 59 21N, 105 19 24E', 28),
(862, 'Đường Thượng', 'Xã', '22 59 20N, 105 10 23E', 28),
(865, 'Lũng Hồ', 'Xã', '22 59 01N, 105 14 21E', 28),
(868, 'Du Tiến', 'Xã', '22 55 18N, 105 17 24E', 28),
(871, 'Du Già', 'Xã', '22 55 28N, 105 12 01E', 28),
(874, 'Tam Sơn', 'Thị Trấn', '23 04 16N, 104 58 13E', 29),
(877, 'Bát Đại Sơn', 'Xã', '23 08 48N, 104 58 26E', 29),
(880, 'Nghĩa Thuận', 'Xã', '23 08 49N, 104 54 48E', 29),
(883, 'Cán Tỷ', 'Xã', '23 06 07N, 105 02 37E', 29),
(886, 'Cao Mã Pờ', 'Xã', '23 06 27N, 104 50 31E', 29),
(889, 'Thanh Vân', 'Xã', '23 06 05N, 104 58 07E', 29),
(892, 'Tùng Vài', 'Xã', '23 04 34N, 104 53 00E', 29),
(895, 'Đông Hà', 'Xã', '23 01 26N, 105 01 38E', 29),
(898, 'Quản Bạ', 'Xã', '23 02 43N, 105 00 35E', 29),
(901, 'Lùng Tám', 'Xã', '23 02 15N, 105 05 05E', 29),
(904, 'Quyết Tiến', 'Xã', '23 00 16N, 104 58 01E', 29),
(907, 'Tả Ván', 'Xã', '23 00 53N, 104 51 41E', 29),
(910, 'Thái An', 'Xã', '22 58 47N, 105 05 21E', 29),
(946, 'Phương Độ', 'Xã', '22 49 17N, 104 54 48E', 24),
(949, 'Phương Thiện', 'Xã', '22 47 08N, 104 56 40E', 24);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`districtid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reset_password`
--
ALTER TABLE `reset_password`
  ADD UNIQUE KEY `c_email` (`c_email`);

--
-- Chỉ mục cho bảng `street`
--
ALTER TABLE `street`
  ADD PRIMARY KEY (`streetid`),
  ADD KEY `districtid` (`districtid`);

--
-- Chỉ mục cho bảng `tbl_category_news`
--
ALTER TABLE `tbl_category_news`
  ADD PRIMARY KEY (`pk_category_news_id`);

--
-- Chỉ mục cho bảng `tbl_estate`
--
ALTER TABLE `tbl_estate`
  ADD PRIMARY KEY (`pk_estate_id`),
  ADD KEY `districid` (`districtid`),
  ADD KEY `wardid` (`wardid`),
  ADD KEY `streetid` (`streetid`),
  ADD KEY `fk_hinhthuc` (`fk_hinhthuc_id`),
  ADD KEY `fk_loai` (`fk_loai_id`),
  ADD KEY `huongnhaid` (`huongnhaid`),
  ADD KEY `huongbancongid` (`huongbancongid`);

--
-- Chỉ mục cho bảng `tbl_hinhthuc`
--
ALTER TABLE `tbl_hinhthuc`
  ADD PRIMARY KEY (`pk_hinhthuc_id`);

--
-- Chỉ mục cho bảng `tbl_huong`
--
ALTER TABLE `tbl_huong`
  ADD PRIMARY KEY (`pk_huong_id`);

--
-- Chỉ mục cho bảng `tbl_img`
--
ALTER TABLE `tbl_img`
  ADD PRIMARY KEY (`pk_img_id`);

--
-- Chỉ mục cho bảng `tbl_ip`
--
ALTER TABLE `tbl_ip`
  ADD PRIMARY KEY (`IP`),
  ADD UNIQUE KEY `IP` (`IP`);

--
-- Chỉ mục cho bảng `tbl_loai`
--
ALTER TABLE `tbl_loai`
  ADD PRIMARY KEY (`pk_loai_id`);

--
-- Chỉ mục cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`tbl_news_id`);

--
-- Chỉ mục cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  ADD PRIMARY KEY (`pk_nhanvien_id`),
  ADD UNIQUE KEY `c_email` (`c_email`);

--
-- Chỉ mục cho bảng `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`pk_project_id`),
  ADD KEY `districtid` (`districtid`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `ward`
--
ALTER TABLE `ward`
  ADD PRIMARY KEY (`wardid`),
  ADD KEY `districtid` (`districtid`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `district`
--
ALTER TABLE `district`
  MODIFY `districtid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `street`
--
ALTER TABLE `street`
  MODIFY `streetid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_category_news`
--
ALTER TABLE `tbl_category_news`
  MODIFY `pk_category_news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_estate`
--
ALTER TABLE `tbl_estate`
  MODIFY `pk_estate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_hinhthuc`
--
ALTER TABLE `tbl_hinhthuc`
  MODIFY `pk_hinhthuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_huong`
--
ALTER TABLE `tbl_huong`
  MODIFY `pk_huong_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_img`
--
ALTER TABLE `tbl_img`
  MODIFY `pk_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `tbl_loai`
--
ALTER TABLE `tbl_loai`
  MODIFY `pk_loai_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `tbl_news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_nhanvien`
--
ALTER TABLE `tbl_nhanvien`
  MODIFY `pk_nhanvien_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `pk_project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=896;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `ward`
--
ALTER TABLE `ward`
  MODIFY `districtid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `street`
--
ALTER TABLE `street`
  ADD CONSTRAINT `street_ibfk_1` FOREIGN KEY (`districtid`) REFERENCES `district` (`districtid`);

--
-- Các ràng buộc cho bảng `tbl_estate`
--
ALTER TABLE `tbl_estate`
  ADD CONSTRAINT `tbl_estate_ibfk_1` FOREIGN KEY (`districtid`) REFERENCES `district` (`districtid`),
  ADD CONSTRAINT `tbl_estate_ibfk_2` FOREIGN KEY (`wardid`) REFERENCES `ward` (`wardid`),
  ADD CONSTRAINT `tbl_estate_ibfk_3` FOREIGN KEY (`streetid`) REFERENCES `street` (`streetid`),
  ADD CONSTRAINT `tbl_estate_ibfk_4` FOREIGN KEY (`fk_hinhthuc_id`) REFERENCES `tbl_hinhthuc` (`pk_hinhthuc_id`),
  ADD CONSTRAINT `tbl_estate_ibfk_5` FOREIGN KEY (`fk_loai_id`) REFERENCES `tbl_loai` (`pk_loai_id`),
  ADD CONSTRAINT `tbl_estate_ibfk_6` FOREIGN KEY (`huongnhaid`) REFERENCES `tbl_huong` (`pk_huong_id`),
  ADD CONSTRAINT `tbl_estate_ibfk_7` FOREIGN KEY (`huongbancongid`) REFERENCES `tbl_huong` (`pk_huong_id`);

--
-- Các ràng buộc cho bảng `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD CONSTRAINT `tbl_project_ibfk_1` FOREIGN KEY (`districtid`) REFERENCES `district` (`districtid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
