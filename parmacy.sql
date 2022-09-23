-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 22, 2022 lúc 08:19 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `parmacy`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `adminId` int(10) NOT NULL,
  `adminUser` varchar(255) NOT NULL,
  `adminPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`adminId`, `adminUser`, `adminPass`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70'),
(2, 'adminTri', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(50) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `brand_name`) VALUES
(1, 'SALANEST'),
(2, 'GIA BẢO'),
(3, 'HERA NEST');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cartId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `sessionId` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Yến sào chưng đường phèn'),
(2, 'Yến chưng KID'),
(3, 'Yến chưng nhân sâm'),
(4, 'Yến chưng đông trùng hạ thảo'),
(5, 'Yến chưng Saffron'),
(6, 'Yến chưng hạt chia'),
(7, 'Yến chưng không đường');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `address`, `zipcode`, `email`, `password`) VALUES
(33, 'Minh Trí', '260/18 TTH02', '0898303889', 'tri@gmail.com', '123'),
(35, 'Minh Trí', '260/18 Dương Thị Mười, quận 12', '0898303889', 'tri@gmail.com', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `productId` int(100) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `quantity` int(40) NOT NULL,
  `price` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `customer_id` int(20) NOT NULL,
  `date_order` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `productId`, `productName`, `quantity`, `price`, `img`, `customer_id`, `date_order`) VALUES
(15, 2, 'HỘP TIẾT KIỆM - NƯỚC YẾN CHƯNG NHÂN SÂM KHÔNG ĐƯỜNG', 9, '2421000', 'sam-khong-duong1614_530x398.jpg', 33, '2022-09-22 18:13:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `sanpham_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `sanpham_name` varchar(255) NOT NULL,
  `sanpham_chitiet` text NOT NULL,
  `sanpham_mota` text NOT NULL,
  `sanpham_gia` int(50) NOT NULL,
  `sanpham_giakhuyenmai` int(50) NOT NULL,
  `sanpham_soluong` int(50) NOT NULL,
  `hinh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`sanpham_id`, `category_id`, `brand_id`, `sanpham_name`, `sanpham_chitiet`, `sanpham_mota`, `sanpham_gia`, `sanpham_giakhuyenmai`, `sanpham_soluong`, `hinh`) VALUES
(1, 1, 1, 'HỘP TIẾT KIỆM - NƯỚC YẾN CHƯNG SAFFRON', ' <p> Thành phần:</p>\n<p>* Yến Tươi: 20% <p>\n<p>* Saffron: 10% <p>\n<p>* Nước tinh khiết: 68% <p>\n<p>* Đường phèn: 10% <p>\n<p>* Tảo biển: 2%<p><br><hr>', '<p>Công dụng:</p>\n<p>-Tăng cường hoạt động của hệ miễn dịch, giúp nâng cao sức khỏe và phòng ngừa nhiều căn bệnh. </p>\n<p>- Cải thiện trí nhớ và giảm stress, đặc biệt hỗ trợ chữa trị chứng mất ngủ, giúp ngủ ngon giấc hơn. </p>\n <p>- Tăng cường sức khỏe hệ tim mạch, ngăn ngừa các bệnh liên quan đến tim mạch như xơ vữa động mạch, đột quỵ,…</p>\n<p>- Cải thiện hoạt động hệ tiêu hóa, tăng cường khả năng trao đổi chất của cơ thể, giúp cơ thể hấp thu tối đa dưỡng chất trong thực phẩm. </p>\n <p>- Tăng cường hoạt động của hệ hô hấp.</p>\n <p>- Thanh lọc và đào thải các chất độc hại ra khỏi cơ thể, giảm thiểu những căn bệnh về tim, gan. - - Cải thiện chức năng sinh lý cho cả nam và nữ.</p>\n<p>- Ngăn ngừa và ức chế các tế bào ung thư, đặc biệt là ung thư gan và ung thư tuyến tiền liệt, ung thư da. </p>\n<p>- Cải thiện thị lực. </p>\n<p>- Chữa lành vết thương, chống viêm. </p>\n<p>- Với phụ nữ, dùng yến chưng saffron còn có tác dụng giúp da dẻ mịn màng, chống lão hóa, giảm tàn nhang đồng thời hỗ trợ điều hòa kinh nguyệt, làm giảm đau bụng trong ngày hành kinh.</p>', 258000, 269000, 69, 'saffron8532_530x457.png'),
(2, 1, 2, 'HỘP TIẾT KIỆM - NƯỚC YẾN CHƯNG NHÂN SÂM KHÔNG ĐƯỜNG', '<p>Thành Phần:</p>\n<p>* Yến Tươi: 20% </p>\n <p>* Nước tinh khiết: 68%</p>\n<p>* Tảo biển: 2%</p><br><hr>', '<p>Công dụng:</p>\n-<p Phù hợp cho người tiểu đường></p>\n <p>- Kích thích tiêu hóa, giúp ăn uống ngon miệng</p>\n <p- Cải thiện hệ miễn dịch, tăng sức đề kháng cho cơ thể></p>\n<p>- Bổ phế, long đờm, giảm ho </p>\n <p- Ngăn ngừa các nguy cơ mắc bệnh xương khớp></p>\n <p>- Chống lão hóa, làm đẹp da</p>\n<p>- Tốt cho mẹ bầu và thai nhi: cung cấp các dinh dưỡng cần thiết ngăn ngừa và giảm triệu chứng ốm nghén, giảm trạng thái mệt mỏi, căng thẳng, stress</p>', 258000, 269000, 69, 'sam-khong-duong1614_530x398.jpg'),
(3, 1, 3, 'HỘP TIẾT KIỆM - NƯỚC YẾN CHƯNG FOR KIDS', '<p>Thành phần:</p>\n<p>* Yến Tươi: 20%</p>\n <p>* Nước tinh khiết: 68%</p>\n <p>* Đường phèn: 8%</p>\n <p>* Tảo biển: 2%</p>\n <p* Vitamin D3, Tảo biển: 2%></p>\n<p>* Lysine: 2%</p><br><hr>', '<p>Công dụng:</p>\n <p>- Tăng cường phát triển trí não, giúp trẻ thông minh, nhanh nhẹn</p>\n <p>- Tăng cường sức đề kháng và hệ miễn dịch, kích thích quá trình sản sinh của hồng cầu</p>\n <p>- Bổ sung dinh dưỡng, các chất khoáng và các vitamin cần thiết cho cơ thể trẻ</p>\n<p>- Giúp tái tạo da, giúp da khỏe mạnh, làm giảm các hiện tượng dị ứng, viêm da ở trẻ nhỏ. </p>\n<p>- Kích thích hệ tiêu hóa, giúp trẻ ăn ngon, ngủ tốt, cải thiện tình trạng biếng ăn, lười ăn ở trẻ </p>\n<p>- Tăng cường phát triển chiều cao, giúp xương trẻ vững chắc</p>', 225000, 245000, 20, 'hop-tiet-kiem-for-kids7926_530x444.png'),
(4, 1, 4, 'HỘP 1 HỦ - NƯỚC YẾN CHƯNG FOR KIDS CAO CẤP', '<p>Thành phần:</p>\n<p>* Yến Tươi: 20%</p>\n <p>* Nước tinh khiết: 68%</p>\n <p>* Đường phèn: 8%</p>\n <p>* Tảo biển: 2%</p>\n <p* Vitamin D3, Tảo biển: 2%></p>\n<p>* Lysine: 2%</p><br><hr>', '<p>Công dụng:</p>\n <p>- Tăng cường phát triển trí não, giúp trẻ thông minh, nhanh nhẹn</p>\n <p>- Tăng cường sức đề kháng và hệ miễn dịch, kích thích quá trình sản sinh của hồng cầu</p>\n <p>- Bổ sung dinh dưỡng, các chất khoáng và các vitamin cần thiết cho cơ thể trẻ</p>\n<p>- Giúp tái tạo da, giúp da khỏe mạnh, làm giảm các hiện tượng dị ứng, viêm da ở trẻ nhỏ. </p>\n<p>- Kích thích hệ tiêu hóa, giúp trẻ ăn ngon, ngủ tốt, cải thiện tình trạng biếng ăn, lười ăn ở trẻ </p>\n<p>- Tăng cường phát triển chiều cao, giúp xương trẻ vững chắc</p>', 46000, 51000, 20, 'for-kid3127_530x427.jpg'),
(5, 1, 1, 'HỘP 1 HỦ - NƯỚC YẾN CHƯNG ĐƯỜNG PHÈN CAO CẤP', '<p>Thành Phần:</p>\n<p> Yến Tươi: 20% </p>\n<p> Nước tinh khiết: 68% </p>\n <p>* Đường phèn: 10%</p>\n<p>* Tảo biển: 2%</p><br><hr>', '<p>Công dụng:</p>\n<p>- Kích thích tiêu hóa, giúp ăn uống ngon miệng </p>\n<p>- Cải thiện hệ miễn dịch, tăng sức đề kháng cho cơ thể</p> \n <p>- Bổ phế, long đờm, giảm ho</p>\n <p>- Ngăn ngừa các nguy cơ mắc bệnh xương khớp</p>\n <p>- Chống lão hóa, làm đẹp da</p>\n<p>- Tốt cho mẹ bầu và thai nhi: cung cấp các dinh dưỡng cần thiết ngăn ngừa và giảm triệu chứng ốm nghén, giảm trạng thái mệt mỏi, căng thẳng, stress</p>\n<p>Hướng dẫn sử dụng:</p>\n <p>- Bảo quản nơi thoáng mát, dùng trực tiếp sau khi mở nắp.</p>\n<p>- Cách dùng: </p>\n <p>Trẻ em: Từ 12 tháng trở lên, ngày uống 1 hủ</p>\n <p>Phụ nữ có thai: Thai kỳ từ tháng thứ 4 và thai kỳ phải ổn định, ngày uống 1 hủ</p>\n<p>Nên ăn yến sào vào lúc sáng sớm, bụng đói và trước bữa ăn sáng khoảng 30 phút. Hoặc có thể dùng trước khi đi ngủ khoảng 1 tiếng. </p>\n<p>Người lớn tuổi: Ít bệnh nền, chỉ nên sử dụng yến sào 3 lần/ tuần, mỗi lần 1 hủ. Nếu sức khỏe yếu kém, cơ thể không còn khả năng hoạt động nhiều có thể sử dụng mỗi ngày với liều lượng 2 hủ trong tháng đầu tiên. Sang tháng thứ 2 thì dùng cách 2 ngày/ lần. Tháng thứ 3 trở đi thì dùng 10gr yến 3 ngày/ lần. \n</p>\n<p>Lắc nhẹ trước khi dùng, ngon hơn khi uống lạnh</p><br>', 46000, 51000, 20, 'duong-phen7282_530x427.jpg'),
(6, 1, 2, 'HỘP QUÀ TẶNG - NƯỚC YẾN CHƯNG FOR KIDS CAO CẤP', '<p>Thành Phần:</p>\n<p> Yến Tươi: 20% </p>\n<p> Nước tinh khiết: 68% </p>\n <p>* Đường phèn: 10%</p>\n<p>* Tảo biển: 2%</p><br><hr>', '<p>Công dụng:</p>\n<p>- Kích thích tiêu hóa, giúp ăn uống ngon miệng </p>\n<p>- Cải thiện hệ miễn dịch, tăng sức đề kháng cho cơ thể</p> \n <p>- Bổ phế, long đờm, giảm ho</p>\n <p>- Ngăn ngừa các nguy cơ mắc bệnh xương khớp</p>\n <p>- Chống lão hóa, làm đẹp da</p>\n<p>- Tốt cho mẹ bầu và thai nhi: cung cấp các dinh dưỡng cần thiết ngăn ngừa và giảm triệu chứng ốm nghén, giảm trạng thái mệt mỏi, căng thẳng, stress</p>\n<p>Hướng dẫn sử dụng:</p>\n <p>- Bảo quản nơi thoáng mát, dùng trực tiếp sau khi mở nắp.</p>\n<p>- Cách dùng: </p>\n <p>Trẻ em: Từ 12 tháng trở lên, ngày uống 1 hủ</p>\n <p>Phụ nữ có thai: Thai kỳ từ tháng thứ 4 và thai kỳ phải ổn định, ngày uống 1 hủ</p>\n<p>Nên ăn yến sào vào lúc sáng sớm, bụng đói và trước bữa ăn sáng khoảng 30 phút. Hoặc có thể dùng trước khi đi ngủ khoảng 1 tiếng. </p>\n<p>Người lớn tuổi: Ít bệnh nền, chỉ nên sử dụng yến sào 3 lần/ tuần, mỗi lần 1 hủ. Nếu sức khỏe yếu kém, cơ thể không còn khả năng hoạt động nhiều có thể sử dụng mỗi ngày với liều lượng 2 hủ trong tháng đầu tiên. Sang tháng thứ 2 thì dùng cách 2 ngày/ lần. Tháng thứ 3 trở đi thì dùng 10gr yến 3 ngày/ lần. \n</p>\n<p>Lắc nhẹ trước khi dùng, ngon hơn khi uống lạnh</p><br>', 255000, 269000, 20, 'hop-qua-for-kids5269_530x392.jpg'),
(7, 1, 3, 'HỘP TIẾT KIỆM - NƯỚC YÊN CHƯNG ĐÔNG TRÙNG KHÔNG ĐƯỜNG CAO CẤP', '<p>Thành phần:</p>\n<p>* Yến Tươi: 20% </p>\n <p>* Đông trùng hạ thảo: 10%</p>\n<p>* Nước tinh khiết: 68% </p>\n<p>* Đường phèn: 10% </p>\n<p>* Tảo biển: 2%</p><br><hr>', '<p>Công dụng:</p>\n <p>-Tăng cường sức đề kháng và hệ miễn dịch</p>\n<p>--Giúp cơ thể khỏe mạnh, hạn chế suy nhược, hạn chế suy dinh dưỡng ở trẻ em </p>\n<p>- Bổ sung năng lượng tốt cho cơ thể, hỗ trợ tái tạo tế bào, tăng cường sự đàn hồi và sức mạnh các mô cơ </p>\n-  <p>Kích thích hệ tiêu hóa, tăng cường khả năng hấp thu dưỡng chất</p>\n<p>- Cải thiện trí nhớ, tốt cho hệ thần kinh, đặc biệt hữu ích với người già </p>\n <p>- Cải thiện chức năng gan thận</p>\n <p>- Giải nhiệt và đào thải độc tố</p>\n<p>- Làm sạch cơ quan hô hấp </p>\n<p>- Hỗ trợ ngăn ngừa và điều trị các bệnh tim mạch, mỡ máu, xơ vữa động mạch, tiểu đường, huyết áp, đột quỵ,.. </p>\n<p>- Tăng cường sinh lý</p>\n<p>Hướng dẫn sử dụng:</p>\n<p>- Bảo quản nơi thoáng mát, dùng trực tiếp sau khi mở nắp. </p>\n <p>- Cách dùng:</p>\n<p>Trẻ em: Từ 12 tháng trở lên, ngày uống 1 hủ </p>\n<p>Phụ nữ có thai: Thai kỳ từ tháng thứ 4 và thai kỳ phải ổn định, ngày uống 1 hủ </p>\n <p>Người lớn tuổi: Ít bệnh nền, chỉ nên sử dụng yến sào 3 lần/ tuần, mỗi lần 1 hủ. Nếu sức khỏe yếu kém, cơ thể không còn khả năng hoạt động nhiều có thể sử dụng mỗi ngày với liều lượng 2 hủ trong tháng đầu tiên. Sang tháng thứ 2 thì dùng cách 2 ngày/ lần. Tháng thứ 3 trở đi thì dùng 10gr yến 3 ngày/ lần.</p>\n <p>Nên ăn yến sào vào lúc sáng sớm, bụng đói và trước bữa ăn sáng khoảng 30 phút. Hoặc có thể dùng trước khi đi ngủ khoảng 1 tiếng.</p>\n<p>Lắc nhẹ trước khi dùng, ngon hơn khi uống lạnh</p>', 258000, 269000, 20, 'dong-trung-khong-duong5676_530x398.jpg'),
(201, 2, 4, 'SALANEST - Hồng yến cao cấp 100gram', '<p>Mã sản phẩm : HY 02 <p><br> <p>Xuất xứ : Việt Nam </p><br><hr>', '', 8900000, 9900000, 20, 'hongyencaocap.jpg'),
(202, 2, 1, 'SALANEST - Huyết yến cao cấp 100gram', '<p>Mã sản phẩm : HY 01 <p><br> <p>Xuất xứ : Việt Nam </p><br><hr>', '', 11000000, 11900000, 20, 'huyenyencaocap.jpg'),
(203, 2, 2, 'SALANEST - Yến Thô 100gram', '<p>Mã sản phẩm : YT 01 <p><br> <p>Xuất xứ : Việt Nam </p><br><hr>', '', 2900000, 2990000, 0, 'yentho.jpg'),
(204, 2, 0, 'Hộp Qùa Tặng - Nước Yến Chưng Nhân Sâm', '<p>Thành phần:</p>  <p>* Yến Tươi: 20%</p>  <p>* Nhân sâm: 10%</p> <p>* Nước tinh khiết: 68%</p>   <p>* Đường phèn: 10%</p> <p>* Tảo biển: 2%</p><br><hr>', '<p>Công dụng:</p>\n<p>1. Yến sào đối với người lớn: </p>\n <p>- Giảm căng thẳng mệt mỏi, ngủ ngon, sâu giấc</p>\n<p>- Cải thiện về làn da, ngăn ngừa lão hóa </p>\n<p>- Hỗ trợ việc cải thiện hệ hô hấp, giảm huyết áp, cải thiện chức năng tim </p>\n <p>- Điều hòa lưu thông máu trong cơ thể</p>\n <p>- Cải thiện thị lực, giúp sáng mắt</p>\n <p>- Điều trị rối loạn tiêu hóa, tăng cường hệ miễn dịch</p>\n <p>- Cải thiện trí não hiệu quả</p>\n <p>- Tăng cường chức năng sinh lý</p>\n<p>- Ngăn ngừa chứng đãng trí ở người cao tuổi </p>\n <p>2. Yến sào đối với trẻ em:</p>\n <p>- Tăng cường khả năng hấp thu thức ăn, tạo cảm giác ngon miệng cho trẻ khi ăn</p>\n <p>- Hỗ trợ chống còi xương và suy dinh dưỡng ở trẻ nhỏ</p>\n <p>- Tăng cường sức đề kháng, hỗ trợ điều trị các bệnh về đường hô hấp hiệu quả</p>\n <p>- Kích thích phát triển não bộ, tăng cường trí nhớ, giúp trẻ có giấc ngủ ngon.</p>\n<p>- Sản phẩm hoàn toàn phù hợp với những trẻ em từ 12 tháng tuổi trở lên.</p>\n<pHướng dẫn sử dụng:></p>\n <p>- Bảo quản nơi thoáng mát, dùng trực tiếp sau khi mở nắp.</p>\n <p>- Cách dùng:</p>\n <p>Trẻ em: Từ 12 tháng trở lên, ngày uống 1 hủ</p>\n<p>Phụ nữ có thai: Thai kỳ từ tháng thứ 4 và thai kỳ phải ổn định, ngày uống 1 hủ <p></p>\nNgười lớn tuổi: Ít bệnh nền, chỉ nên sử dụng yến sào 3 lần/ tuần, mỗi lần 1 hủ. Nếu sức khỏe yếu kém, cơ thể không còn khả năng hoạt động nhiều có thể sử dụng mỗi ngày với liều lượng 2 hủ trong tháng đầu tiên. Sang tháng thứ 2 thì dùng cách 2 ngày/ lần. Tháng thứ 3 trở đi thì dùng 10gr yến 3 ngày/ lần. </p>\n <p>Nên ăn yến sào vào lúc sáng sớm, bụng đói và trước bữa ăn sáng khoảng 30 phút. Hoặc có thể dùng trước khi đi ngủ khoảng 1 tiếng.</p>\n<p>Lắc nhẹ trước khi dùng, ngon hơn khi uống lạnh</p>', 285000, 299000, 10, 'yenchungnhansam.jpg'),
(205, 2, 3, 'Hộp Qùa Tặng - Nước Yến Chưng Đông Trùng Hạ Thảo', '<p>Thành phần:</p> <p>* Yến Tươi: 20% </p>  <p>* Đông trùng hạ thảo: 10%</p> <p>* Nước tinh khiết: 68% </p> <p>* Đường phèn: 10% </p> <p>* Tảo biển: 2%</p><br><hr>', '<p>Thành phần:</p>\n<p>* Yến Tươi: 20% </p>\n <p>* Đông trùng hạ thảo: 10%</p>\n<p>* Nước tinh khiết: 68% </p>\n<p>* Đường phèn: 10% </p>\n<p>* Tảo biển: 2%</p><br>', 285000, 299000, 10, 'yenchungdongtrunghathao.jpg'),
(206, 2, 4, 'Hộp 01 Hủ - Nước Yến Chưng Nhân Sâm', '<p>Thành phần:</p>  <p>* Yến Tươi: 20%</p>  <p>* Nhân sâm: 10%</p> <p>* Nước tinh khiết: 68%</p>   <p>* Đường phèn: 10%</p> <p>* Tảo biển: 2%</p><br>', '<p>Công dụng:</p>\n<p>1. Yến sào đối với người lớn: </p>\n <p>- Giảm căng thẳng mệt mỏi, ngủ ngon, sâu giấc</p>\n<p>- Cải thiện về làn da, ngăn ngừa lão hóa </p>\n<p>- Hỗ trợ việc cải thiện hệ hô hấp, giảm huyết áp, cải thiện chức năng tim </p>\n <p>- Điều hòa lưu thông máu trong cơ thể</p>\n <p>- Cải thiện thị lực, giúp sáng mắt</p>\n <p>- Điều trị rối loạn tiêu hóa, tăng cường hệ miễn dịch</p>\n <p>- Cải thiện trí não hiệu quả</p>\n <p>- Tăng cường chức năng sinh lý</p>\n<p>- Ngăn ngừa chứng đãng trí ở người cao tuổi </p>\n <p>2. Yến sào đối với trẻ em:</p>\n <p>- Tăng cường khả năng hấp thu thức ăn, tạo cảm giác ngon miệng cho trẻ khi ăn</p>\n <p>- Hỗ trợ chống còi xương và suy dinh dưỡng ở trẻ nhỏ</p>\n <p>- Tăng cường sức đề kháng, hỗ trợ điều trị các bệnh về đường hô hấp hiệu quả</p>\n <p>- Kích thích phát triển não bộ, tăng cường trí nhớ, giúp trẻ có giấc ngủ ngon.</p>\n<p>- Sản phẩm hoàn toàn phù hợp với những trẻ em từ 12 tháng tuổi trở lên.</p>\n<pHướng dẫn sử dụng:></p>\n <p>- Bảo quản nơi thoáng mát, dùng trực tiếp sau khi mở nắp.</p>\n <p>- Cách dùng:</p>\n <p>Trẻ em: Từ 12 tháng trở lên, ngày uống 1 hủ</p>\n<p>Phụ nữ có thai: Thai kỳ từ tháng thứ 4 và thai kỳ phải ổn định, ngày uống 1 hủ <p></p>\nNgười lớn tuổi: Ít bệnh nền, chỉ nên sử dụng yến sào 3 lần/ tuần, mỗi lần 1 hủ. Nếu sức khỏe yếu kém, cơ thể không còn khả năng hoạt động nhiều có thể sử dụng mỗi ngày với liều lượng 2 hủ trong tháng đầu tiên. Sang tháng thứ 2 thì dùng cách 2 ngày/ lần. Tháng thứ 3 trở đi thì dùng 10gr yến 3 ngày/ lần. </p>\n <p>Nên ăn yến sào vào lúc sáng sớm, bụng đói và trước bữa ăn sáng khoảng 30 phút. Hoặc có thể dùng trước khi đi ngủ khoảng 1 tiếng.</p>\n<p>Lắc nhẹ trước khi dùng, ngon hơn khi uống lạnh</p>', 58000, 74000, 10, 'nhansam.jpg'),
(207, 2, 1, 'Hộp Tiết Kiệm SALANEST - Nước Yến Chưng Đường Phèn Cao Cấp 6 hủ x 70 ml', '<p>Thành Phần:</p> <p> Yến Tươi: 20% </p> <p> Nước tinh khiết: 68% </p>  <p>* Đường phèn: 10%</p> <p>* Tảo biển: 2%</p><br><hr>', '<p>Công dụng:</p>\n<p>- Kích thích tiêu hóa, giúp ăn uống ngon miệng </p>\n<p>- Cải thiện hệ miễn dịch, tăng sức đề kháng cho cơ thể</p> \n <p>- Bổ phế, long đờm, giảm ho</p>\n <p>- Ngăn ngừa các nguy cơ mắc bệnh xương khớp</p>\n <p>- Chống lão hóa, làm đẹp da</p>\n<p>- Tốt cho mẹ bầu và thai nhi: cung cấp các dinh dưỡng cần thiết ngăn ngừa và giảm triệu chứng ốm nghén, giảm trạng thái mệt mỏi, căng thẳng, stress</p>\n<p>Hướng dẫn sử dụng:</p>\n <p>- Bảo quản nơi thoáng mát, dùng trực tiếp sau khi mở nắp.</p>\n<p>- Cách dùng: </p>\n <p>Trẻ em: Từ 12 tháng trở lên, ngày uống 1 hủ</p>\n <p>Phụ nữ có thai: Thai kỳ từ tháng thứ 4 và thai kỳ phải ổn định, ngày uống 1 hủ</p>\n<p>Nên ăn yến sào vào lúc sáng sớm, bụng đói và trước bữa ăn sáng khoảng 30 phút. Hoặc có thể dùng trước khi đi ngủ khoảng 1 tiếng. </p>\n<p>Người lớn tuổi: Ít bệnh nền, chỉ nên sử dụng yến sào 3 lần/ tuần, mỗi lần 1 hủ. Nếu sức khỏe yếu kém, cơ thể không còn khả năng hoạt động nhiều có thể sử dụng mỗi ngày với liều lượng 2 hủ trong tháng đầu tiên. Sang tháng thứ 2 thì dùng cách 2 ngày/ lần. Tháng thứ 3 trở đi thì dùng 10gr yến 3 ngày/ lần. \n</p>\n<p>Lắc nhẹ trước khi dùng, ngon hơn khi uống lạnh</p><br>', 225000, 239000, 10, 'duongphen.jpg'),
(301, 3, 2, 'Hộp Tiết Kiệm - Nước Yến Chưng Táo Đỏ Cao Cấp', '<p>Thành Phần:</p> <p>* Yến Tươi: 20% </p>  <p>* Nước tinh khiết: 68%</p> <p>* Tảo biển: 2%</p><br><hr>', '<p>Công dụng:</p>\n-<p Phù hợp cho người tiểu đường></p>\n <p>- Kích thích tiêu hóa, giúp ăn uống ngon miệng</p>\n <p- Cải thiện hệ miễn dịch, tăng sức đề kháng cho cơ thể></p>\n<p>- Bổ phế, long đờm, giảm ho </p>\n <p- Ngăn ngừa các nguy cơ mắc bệnh xương khớp></p>\n <p>- Chống lão hóa, làm đẹp da</p>\n<p>- Tốt cho mẹ bầu và thai nhi: cung cấp các dinh dưỡng cần thiết ngăn ngừa và giảm triệu chứng ốm nghén, giảm trạng thái mệt mỏi, căng thẳng, stress</p>\n<p>Hướng dẫn sử dụng:</p>\n <p>- Bảo quản nơi thoáng mát, dùng trực tiếp sau khi mở nắp.</p>\n <p>- Cách dùng:</p>\n<p>Trẻ em: Từ 12 tháng trở lên, ngày uống 1 hủ </p>\n <p>Phụ nữ có thai: Thai kỳ từ tháng thứ 4 và thai kỳ phải ổn định, ngày uống 1 hủ</p>\n<p>Người lớn tuổi: Ít bệnh nền, chỉ nên sử dụng yến sào 3 lần/ tuần, mỗi lần 1 hủ. Nếu sức khỏe yếu kém, cơ thể không còn khả năng hoạt động nhiều có thể sử dụng mỗi ngày với liều lượng 2 hủ trong tháng đầu tiên. Sang tháng thứ 2 thì dùng cách 2 ngày/ lần. Tháng thứ 3 trở đi thì dùng 10gr yến 3 ngày/ lần. </p>\n<p>Nên ăn yến sào vào lúc sáng sớm, bụng đói và trước bữa ăn sáng khoảng 30 phút. Hoặc có thể dùng trước khi đi ngủ khoảng 1 tiếng. </p>\n<p>Lắc nhẹ trước khi dùng, ngon hơn khi uống lạnh</p>\n', 233000, 239000, 10, 'taodo.jpg'),
(302, 3, 3, 'Hộp Tiết Kiệm - Nước Yến Chưng Nhân Sâm', '<p>Thành phần:</p>  <p>* Yến Tươi: 20%</p>  <p>* Nhân sâm: 10%</p> <p>* Nước tinh khiết: 68%</p>   <p>* Đường phèn: 10%</p> <p>* Tảo biển: 2%</p><br><hr>', '<p>Công dụng:</p>\n<p>1. Yến sào đối với người lớn: </p>\n <p>- Giảm căng thẳng mệt mỏi, ngủ ngon, sâu giấc</p>\n<p>- Cải thiện về làn da, ngăn ngừa lão hóa </p>\n<p>- Hỗ trợ việc cải thiện hệ hô hấp, giảm huyết áp, cải thiện chức năng tim </p>\n <p>- Điều hòa lưu thông máu trong cơ thể</p>\n <p>- Cải thiện thị lực, giúp sáng mắt</p>\n <p>- Điều trị rối loạn tiêu hóa, tăng cường hệ miễn dịch</p>\n <p>- Cải thiện trí não hiệu quả</p>\n <p>- Tăng cường chức năng sinh lý</p>\n<p>- Ngăn ngừa chứng đãng trí ở người cao tuổi </p>\n <p>2. Yến sào đối với trẻ em:</p>\n <p>- Tăng cường khả năng hấp thu thức ăn, tạo cảm giác ngon miệng cho trẻ khi ăn</p>\n <p>- Hỗ trợ chống còi xương và suy dinh dưỡng ở trẻ nhỏ</p>\n <p>- Tăng cường sức đề kháng, hỗ trợ điều trị các bệnh về đường hô hấp hiệu quả</p>\n <p>- Kích thích phát triển não bộ, tăng cường trí nhớ, giúp trẻ có giấc ngủ ngon.</p>\n<p>- Sản phẩm hoàn toàn phù hợp với những trẻ em từ 12 tháng tuổi trở lên.</p>\n<pHướng dẫn sử dụng:></p>\n <p>- Bảo quản nơi thoáng mát, dùng trực tiếp sau khi mở nắp.</p>\n <p>- Cách dùng:</p>\n <p>Trẻ em: Từ 12 tháng trở lên, ngày uống 1 hủ</p>\n<p>Phụ nữ có thai: Thai kỳ từ tháng thứ 4 và thai kỳ phải ổn định, ngày uống 1 hủ <p></p>\nNgười lớn tuổi: Ít bệnh nền, chỉ nên sử dụng yến sào 3 lần/ tuần, mỗi lần 1 hủ. Nếu sức khỏe yếu kém, cơ thể không còn khả năng hoạt động nhiều có thể sử dụng mỗi ngày với liều lượng 2 hủ trong tháng đầu tiên. Sang tháng thứ 2 thì dùng cách 2 ngày/ lần. Tháng thứ 3 trở đi thì dùng 10gr yến 3 ngày/ lần. </p>\n <p>Nên ăn yến sào vào lúc sáng sớm, bụng đói và trước bữa ăn sáng khoảng 30 phút. Hoặc có thể dùng trước khi đi ngủ khoảng 1 tiếng.</p>\n<p>Lắc nhẹ trước khi dùng, ngon hơn khi uống lạnh</p>', 258000, 274000, 10, 'yennhansam.jpg'),
(303, 3, 4, 'Hộp Tiết Kiệm - Nước Yến Chưng Đông Trùng Hạ Thảo', '<p>Thành phần:</p> <p>* Yến Tươi: 20% </p>  <p>* Đông trùng hạ thảo: 10%</p> <p>* Nước tinh khiết: 68% </p> <p>* Đường phèn: 10% </p> <p>* Tảo biển: 2%</p><br><hr>', '<p>Thành phần:</p>\n<p>* Yến Tươi: 20% </p>\n <p>* Đông trùng hạ thảo: 10%</p>\n<p>* Nước tinh khiết: 68% </p>\n<p>* Đường phèn: 10% </p>\n<p>* Tảo biển: 2%</p><br>', 258000, 274000, 10, 'hathao.jpg'),
(304, 3, 1, 'Hộp Tiết Kiệm - Nước Yến Chưng Không đường', '<p>Thành Phần:</p> <p>* Yến Tươi: 20% </p>  <p>* Nước tinh khiết: 68%</p> <p>* Tảo biển: 2%</p><br><hr>', '', 225000, 239000, 10, 'dong-trung-khong-duong5676_530x398.jpg'),
(305, 3, 2, 'Hộp Qùa Tặng SALANEST - Nước Yến Chưng Đường Phèn Cao Cấp 6 hủ x 70ml', '<p>Thành Phần:</p> <p> Yến Tươi: 20% </p> <p> Nước tinh khiết: 68% </p>  <p>* Đường phèn: 10%</p> <p>* Tảo biển: 2%</p><br><hr>', '<p>Công dụng:</p>\n<p>- Kích thích tiêu hóa, giúp ăn uống ngon miệng </p>\n<p>- Cải thiện hệ miễn dịch, tăng sức đề kháng cho cơ thể</p> \n <p>- Bổ phế, long đờm, giảm ho</p>\n <p>- Ngăn ngừa các nguy cơ mắc bệnh xương khớp</p>\n <p>- Chống lão hóa, làm đẹp da</p>\n<p>- Tốt cho mẹ bầu và thai nhi: cung cấp các dinh dưỡng cần thiết ngăn ngừa và giảm triệu chứng ốm nghén, giảm trạng thái mệt mỏi, căng thẳng, stress</p>\n<p>Hướng dẫn sử dụng:</p>\n <p>- Bảo quản nơi thoáng mát, dùng trực tiếp sau khi mở nắp.</p>\n<p>- Cách dùng: </p>\n <p>Trẻ em: Từ 12 tháng trở lên, ngày uống 1 hủ</p>\n <p>Phụ nữ có thai: Thai kỳ từ tháng thứ 4 và thai kỳ phải ổn định, ngày uống 1 hủ</p>\n<p>Nên ăn yến sào vào lúc sáng sớm, bụng đói và trước bữa ăn sáng khoảng 30 phút. Hoặc có thể dùng trước khi đi ngủ khoảng 1 tiếng. </p>\n<p>Người lớn tuổi: Ít bệnh nền, chỉ nên sử dụng yến sào 3 lần/ tuần, mỗi lần 1 hủ. Nếu sức khỏe yếu kém, cơ thể không còn khả năng hoạt động nhiều có thể sử dụng mỗi ngày với liều lượng 2 hủ trong tháng đầu tiên. Sang tháng thứ 2 thì dùng cách 2 ngày/ lần. Tháng thứ 3 trở đi thì dùng 10gr yến 3 ngày/ lần. \n</p>\n<p>Lắc nhẹ trước khi dùng, ngon hơn khi uống lạnh</p><br>', 255000, 274000, 10, 'chungduong.jpg'),
(306, 3, 3, 'Yến tinh chế loại 1 100g', '<p>Mã sản phẩm : YTCL1-100 <p><br> <p>Xuất xứ : Việt Nam </p><br><hr>', '', 3700000, 3890000, 10, 'to-yen-tinh-che-100gr-16272_530x530.jpg'),
(401, 4, 4, 'Yến tinh chế loại 1 50g', '<p>Mã sản phẩm : YTCL1-50 <p><br> <p>Xuất xứ : Việt Nam </p><br><hr>', '', 1850000, 1990000, 10, 'yen-to-tinh-che-50gr0363_530x530.jpg'),
(402, 4, 1, 'Yến tinh chế loại 2 100g', '<p>Mã sản phẩm : YTCL2100 <p><br> <p>Xuất xứ : Việt Nam </p><br><hr>', '', 2800000, 2990000, 10, 'yento.jpg'),
(403, 4, 2, 'Yến tinh chế loại 2 50g', '<p>Mã sản phẩm : YTCL2100 <p><br> <p>Xuất xứ : Việt Nam </p><br><hr>', '', 1400000, 1590000, 10, 'yen-to-tinh-che-tai-10gram-15486_530x530.jpg'),
(404, 4, 3, 'SALANEST - Yến Tinh Chế 10g', '<p>Mã sản phẩm : YTC10 <p><br> <p>Xuất xứ : Việt Nam </p><br><hr>', '', 350000, 369000, 10, 'yen-to-tinh-che-tai-10gram0631_530x530.jpg'),
(405, 4, 4, 'Hôp 1 Hủ - Nước Yến Chưng Đông Trùng Hạ Thảo', '<p>Thành phần:</p> <p>* Yến Tươi: 20% </p>  <p>* Đông trùng hạ thảo: 10%</p> <p>* Nước tinh khiết: 68% </p> <p>* Đường phèn: 10% </p> <p>* Tảo biển: 2%</p><br><hr>', '<p>Thành phần:</p>\n<p>* Yến Tươi: 20% </p>\n <p>* Đông trùng hạ thảo: 10%</p>\n<p>* Nước tinh khiết: 68% </p>\n<p>* Đường phèn: 10% </p>\n<p>* Tảo biển: 2%</p><br>', 52000, 59000, 10, 'dongtrung.jpg');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`adminId`);

--
-- Chỉ mục cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Chỉ mục cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cartId`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`sanpham_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `adminId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cartId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `sanpham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=709;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
