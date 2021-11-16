-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2021 at 03:16 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `do_an_moi`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `mabl` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaybl` date NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`mabl`, `mahh`, `makh`, `ngaybl`, `noidung`) VALUES
(16, 24, 8, '2021-10-10', '  lap dep do');

-- --------------------------------------------------------

--
-- Table structure for table `cthoadon`
--

CREATE TABLE `cthoadon` (
  `masohd` int(11) NOT NULL,
  `mahh` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `size` int(3) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cthoadon`
--

INSERT INTO `cthoadon` (`masohd`, `mahh`, `soluongmua`, `mausac`, `size`, `thanhtien`, `tinhtrang`) VALUES
(17, 24, 1, 'Màu trắng ', 0, 21000000, 0),
(18, 16, 1, 'Màu trắng ', 0, 31000000, 0),
(18, 24, 1, 'Màu trắng ', 0, 21000000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(60) NOT NULL,
  `dongia` float NOT NULL,
  `giamgia` float NOT NULL,
  `hinh` varchar(50) NOT NULL,
  `Nhom` int(4) NOT NULL,
  `maloai` int(11) NOT NULL,
  `dacbiet` bit(1) NOT NULL,
  `soluotxem` int(11) NOT NULL,
  `ngaylap` date NOT NULL,
  `mota` varchar(2000) NOT NULL,
  `soluongton` int(11) NOT NULL,
  `mausac` varchar(20) NOT NULL,
  `vixuly` varchar(500) NOT NULL,
  `manhinh` varchar(500) NOT NULL,
  `ram` varchar(500) NOT NULL,
  `carddohoa` varchar(500) NOT NULL,
  `luutru` varchar(500) NOT NULL,
  `pin` varchar(500) NOT NULL,
  `congketnoi` varchar(500) NOT NULL,
  `cannang` varchar(500) NOT NULL,
  `hedieuhanh` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hanghoa`
--

INSERT INTO `hanghoa` (`mahh`, `tenhh`, `dongia`, `giamgia`, `hinh`, `Nhom`, `maloai`, `dacbiet`, `soluotxem`, `ngaylap`, `mota`, `soluongton`, `mausac`, `vixuly`, `manhinh`, `ram`, `carddohoa`, `luutru`, `pin`, `congketnoi`, `cannang`, `hedieuhanh`) VALUES
(1, 'ROG Strix G15 G513 ', 545000, 0, 'lap1.jpg', 0, 1, b'1', 5, '2020-08-08', 'Vải bố và da nhân tạo. Phù hợp đi làm, đi tiệc và đi chơi', 50, 'Màu Trắng', 'AMD Ryzen 7 5800H, 8 nhân / 16 luồng', '15.6\" FHD IPS (1920 x 1080) 144Hz, màn nhám', '8GB DDR4 3200MHz (Nâng cấp tối đa 64GB)', 'Nvidia Geforce RTX 3050 4GB GDDR6 (TGP 80W + 15W Dynamic Boost)', '512GB NVMe (Nâng cấp tối đa 2TBx2)', '56Wh', '1 x USB-C 3.2 Gen 2 (Hỗ trợ sạc PD và xuất hình), 3 x USB-A 3.2 Gen 1, 1 x HDMI 2.0b, 1 x RJ-45, 1 x jack 3.5mm', '2.1kg', 'Windows 10 Home SL bản quyền'),
(2, 'ROG Zephyrus G14 AW SE GA401', 545000, 0, 'lap2.jpg', 0, 1, b'1', 3, '2020-08-08', 'Vải bố và da nhân tạo. Phù hợp đi làm, đi tiệc và đi chơi', 50, ' Màu Hồng', 'Bộ xử lý AMD Ryzen™ 9 5900HS 3,1 GHz (16M Cache, lên đến 4.5 GHz)', '14-inchWQHD (2560 x 1440) 16:9, màn hình chống chói, DCI-P3:100%, Tần số làm tươi:120Hz, IPS-level, Adaptive-Sync, Pantone Validated', '16GB(8GB DDR4 on board + 8GB DDR4-3200Mhz SO-DIMM) tối đa 24GB', 'NVIDIA® GeForce RTX™ 3050 Ti Laptop GPU, Với ROG Boost lên đến 1585MHz ở 60W (75W với Dynamic Boost), 4GB GDDR6 ', '8GB DDR4 trên bo mạch, 8GB DDR4-3200 SO-DIMM, Công suất tối đa :24GB', 'Pin Li-ion 76WHrs, 4S1P, 4-cell', 'Giắc cắm âm thanh kết hợp 1 x 3,5 mm, 1x HDMI 2.0b, 1 x USB 3.2 thế hệ 2 Type- C, 2 x USB 3.2 thế hệ 1 Type-A,1x USB 3.2 Gen 2 Type-C hỗ trợ DisplayPort / power delivery / G-SYNC', '1.70 Kg (3.75 lbs)', 'Windows 10 Home - ASUS khuyến nghị Windows 10 Pro cho doanh nghiệp,Bản nâng cấp miễn phí lên Windows 11¹ khi có sẵn'),
(3, '2021 ASUS TUF Gaming A17 ', 545000, 300000, 'lap3.jpg', 0, 1, b'0', 4, '2020-08-08', 'Vải bố và da nhân tạo. Phù hợp đi làm, đi tiệc và đi chơi', 50, 'Màu Xanh', 'Bộ vi xử lý Intel® Core™ i7-11800H 2,3 GHz (24M Cache, lên đến 4,6 GHz, 8 nhân)', '15,6 inch, FHD (1920 x 1080) 16:9, màn hình chống chói, sRGB:62.5%, Adobe:47.34%, DCI-P3:Tần số làm tươi:144Hz, Giá trị cấp IPS, Adaptive-Sync, 15,6 inch, FHD (1920 x 1080) 16:9, màn hình chống chói, sRGB:62.5%, Adobe:47.34%, Tần số làm tươi:144Hz, Giá trị cấp IPS, Adaptive-Sync', 'DDR4: 8 GB', '\r\nNVIDIA® GeForce RTX™ 3050 Laptop GPU, Lên tới 1600MHz at 60W (75W với Dynamic Boost), 4GB GDDR6, NVIDIA® GeForce RTX™ 3060 Laptop GPU, Lên tới 1630MHz at 90W (95W với Dynamic Boost), 6GB GDDR6', '\r\n8GB DDR4-3200 SO-DIMM, Công suất tối đa :32GB', '\r\n48WHrs, 3S1P, Li-ion 3 pin, 90WHrs, 4S1P, Li-ion 4 pin', '\r\n1 giắc cắm âm thanh combo 3,5mm1 x HDMI 2.0b, 3 x USB 3.2 thế hệ 1 Type-A, 1 x cổng RJ45 LAN, 1 x Thunderbolt™ 4 hỗ trợ DisplayPort™\',\'2.30 Kg (5.07 lbs)', '2.0 kg', 'Windows 10 Home - ASUS khuyến nghị Windows 10 Pro cho doanh nghiệp, Bản nâng cấp miễn phí lên Windows 11¹ '),
(4, 'ASUS X509', 24000000, 0, 'lap4.png', 1, 3, b'0', 1, '2020-08-08', 'Cho dù là công việc hay giải trí, ASUS Laptop X509 là chiếc máy tính xách tay mang đến hiệu năng mạnh mẽ cùng hình ảnh chân thực. Màn hình NanoEdge của máy có góc nhìn rộng 178° và lớp phủ chống lóa mờ cho trải nghiệm thực sự hấp dẫn. Bộ não của X509 là sức mạnh của vi xử lý Intel® Core™ i7 thế hệ thứ 8 cùng với bộ nhớ trong RAM lên đến 16GB 2400 MHz và card đồ họa rời NVIDIA® MX250. Khả năng lưu trữ kép với ổ SSD PCIe® 512GB và ổ cứng HDD 1TB cho bạn sự kết hợp hoàn hảo giữa dung lượng lưu trữ lớn và tốc độ đọc/ghi dữ liệu nhanh.', 50, ' Màu xanh biển ', 'Bộ xử lý Intel® Celeron® N4020 1,1 GHz (4M Cache, lên đến 2,8 GHz, 2 nhân), Bộ xử lý Intel® Pentium® Silver N5030 1,1 GHz (4M Cache, lên đến 3,1 GHz, 4 nhân), Bộ xử lý Intel® Core™ i7-1065G7 1,3 GHz (Bộ nhớ đệm 8M, tối đa 3,9 GHz, 4 nhân), Bộ xử lý Intel® Core™ i5-1035G1 1,0 GHz (6M Cache, lên đến 3,6 GHz, 4 nhân), Bộ xử lý Intel® Core™ i3-1005G1 1,2 GHz (4M Cache, lên đến 3,4 GHz, 2 nhân)', '15,6 inch, HD (1366 x 768) 16:9 aspect ratio, 200nits, NTSC: 45%, Đèn nền LED, Anti-glare display, Tỷ lệ màn hình trên kích thước:83%, 15,6 inch, FHD (1920 x 1080) 16:9, 200nits, NTSC: 45%, Đèn nền LED, Anti-glare display, Tỷ lệ màn hình trên kích thước:83%', 'DDR4: 1 khe (4GB Onbard, Max 20GB)', 'Đồ họa Intel® UHD 600, Đồ họa Intel® UHD 605 , Intel® Iris™ Plus Graphics , Đồ họa Intel® UHD , Đồ họa Intel® UHD, NVIDIA® GeForce® MX330, 2GB GDDR5', 'HDD 1TB SATA 5400RPM 2,5\", SSD 256GB M.2 NVMe™ PCIe® 3.0, SSD 512GB M.2 NVMe™ PCIe® 3.0', '32WHrs, 2S1P, Li-ion 2 pin', '1x USB 3.2 Thế hệ 1 Loại A, 1x USB 3.2 Thế hệ 1 Loại C, 2x USB 2.0 Loại A, 1x HDMI 1.4, 1x Giắc Âm thanh Kết hợp 3,5 mm, Đầu đọc thẻ Micro SD', '1.90 kg (4.19 lbs)', 'Windows 10 Home - ASUS khuyến nghị Windows 10 Pro cho doanh nghiệp, Bản nâng cấp miễn phí lên Windows 11¹ '),
(5, 'ASUS X509', 24000000, 0, 'lap5.png', 1, 3, b'1', 0, '2020-08-08', 'Cho dù là công việc hay giải trí, ASUS Laptop X509 là chiếc máy tính xách tay mang đến hiệu năng mạnh mẽ cùng hình ảnh chân thực. Màn hình NanoEdge của máy có góc nhìn rộng 178° và lớp phủ chống lóa mờ cho trải nghiệm thực sự hấp dẫn. Bộ não của X509 là sức mạnh của vi xử lý Intel® Core™ i7 thế hệ thứ 8 cùng với bộ nhớ trong RAM lên đến 16GB 2400 MHz và card đồ họa rời NVIDIA® MX250. Khả năng lưu trữ kép với ổ SSD PCIe® 512GB và ổ cứng HDD 1TB cho bạn sự kết hợp hoàn hảo giữa dung lượng lưu trữ lớn và tốc độ đọc/ghi dữ liệu nhanh.', 50, 'Màu đen ', 'Bộ xử lý Intel® Celeron® N4020 1,1 GHz (4M Cache, lên đến 2,8 GHz, 2 nhân), ', '15,6 inch, HD (1366 x 768) 16:9 aspect ratio, 200nits, NTSC: 45%, Đèn nền LED, Anti-glare display, Tỷ lệ màn hình trên kích thước:83%, 15,6 inch, FHD (1920 x 1080) 16:9, 200nits, NTSC: 45%, Đèn nền LED, Anti-glare display, Tỷ lệ màn hình trên kích thước:83%', 'DDR4: 1 khe (4GB Onbard, Max 20GB)', 'Đồ họa Intel® UHD 600, Đồ họa Intel® UHD 605 , Intel® Iris™ Plus Graphics , Đồ họa Intel® UHD , Đồ họa Intel® UHD, NVIDIA® GeForce® MX330, 2GB GDDR5', 'HDD 1TB SATA 5400RPM 2,5\", SSD 256GB M.2 NVMe™ PCIe® 3.0, SSD 512GB M.2 NVMe™ PCIe® 3.0', '32WHrs, 2S1P, Li-ion 2 pin', '1x USB 3.2 Thế hệ 1 Loại A, 1x USB 3.2 Thế hệ 1 Loại C, 2x USB 2.0 Loại A, 1x HDMI 1.4, 1x Giắc Âm thanh Kết hợp 3,5 mm, Đầu đọc thẻ Micro SD', '1.90 kg (4.19 lbs)', 'Windows 10 Home - ASUS khuyến nghị Windows 10 Pro cho doanh nghiệp, Bản nâng cấp miễn phí lên Windows 11¹ '),
(6, 'ASUS X509', 24000000, 0, 'lap6.png', 1, 3, b'0', 0, '2020-08-08', 'Cho dù là công việc hay giải trí, ASUS Laptop X509 là chiếc máy tính xách tay mang đến hiệu năng mạnh mẽ cùng hình ảnh chân thực. Màn hình NanoEdge của máy có góc nhìn rộng 178° và lớp phủ chống lóa mờ cho trải nghiệm thực sự hấp dẫn. Bộ não của X509 là sức mạnh của vi xử lý Intel® Core™ i7 thế hệ thứ 8 cùng với bộ nhớ trong RAM lên đến 16GB 2400 MHz và card đồ họa rời NVIDIA® MX250. Khả năng lưu trữ kép với ổ SSD PCIe® 512GB và ổ cứng HDD 1TB cho bạn sự kết hợp hoàn hảo giữa dung lượng lưu trữ lớn và tốc độ đọc/ghi dữ liệu nhanh.', 50, 'Màu trắng ', 'Bộ xử lý Intel® Celeron® N4020 1,1 GHz (4M Cache, lên đến 2,8 GHz, 2 nhân), ', '15,6 inch, HD (1366 x 768) 16:9 aspect ratio, 200nits, NTSC: 45%, Đèn nền LED, Anti-glare display, Tỷ lệ màn hình trên kích thước:83%, 15,6 inch, FHD (1920 x 1080) 16:9, 200nits, NTSC: 45%, Đèn nền LED, Anti-glare display, Tỷ lệ màn hình trên kích thước:83%', 'DDR4: 1 khe (4GB Onbard, Max 20GB)', 'Đồ họa Intel® UHD 600, Đồ họa Intel® UHD 605 , Intel® Iris™ Plus Graphics , Đồ họa Intel® UHD , Đồ họa Intel® UHD, NVIDIA® GeForce® MX330, 2GB GDDR5', 'HDD 1TB SATA 5400RPM 2,5\", SSD 256GB M.2 NVMe™ PCIe® 3.0, SSD 512GB M.2 NVMe™ PCIe® 3.0', '32WHrs, 2S1P, Li-ion 2 pin', '1x USB 3.2 Thế hệ 1 Loại A, 1x USB 3.2 Thế hệ 1 Loại C, 2x USB 2.0 Loại A, 1x HDMI 1.4, 1x Giắc Âm thanh Kết hợp 3,5 mm, Đầu đọc thẻ Micro SD', '1.90 kg (4.19 lbs)', 'Windows 10 Home - ASUS khuyến nghị Windows 10 Pro cho doanh nghiệp, Bản nâng cấp miễn phí lên Windows 11¹ '),
(9, 'ASUS Vivobook S14 S433 ', 20000000, 0, 'lap7.jpg', 2, 5, b'1', 1, '2020-08-08', 'ASUS VivoBook, sự lựa chọn hàng đầu của giới trẻ, giúp mang đến một vẻ ngoài siêu nổi bật và tràn đầy cá tính. VivoBook S14 mỏng nhẹ có điểm nhấn thiết kế là viền cắt kim cương và có bốn màu sắc khác biệt, cho phép bạn thoải mái lựa chọn để thể hiện cá tính của mình. Cá tính của bạn còn được thể hiện rõ nét hơn khi mở máy vì phím Enter vàng nổi bật sẽ xuất hiện tạo điểm nhấn so với bàn phím truyền thống. VivoBook S14 sẽ giúp thể hiện cá tính của bạn, cả bên trong và bên ngoài.', 50, 'Màu Trắng ', 'Bộ xử lý Intel® Core™ i5-10210U 1,6 GHz (6M Cache, lên đến 4,2 GHz, 4 nhân) Bộ xử lý Intel® Core™ i7-10510U 1,8 GHz (8M Cache, lên đến 4,9 GHz, 4 nhân) Bộ xử lý Intel® Core™ i5-1035G1 1,0 GHz (6M Cache, lên đến 3,6 GHz, 4 nhân)', '14,0 inch, FHD (1920 x 1080) 16:9, 250nits, NTSC: 45%, Đèn nền LED, Anti-glare display, Tấm nền IPS', ' 8GB DDR4 bus 3200MHz (Hàn trên mainboard - Không thể nâng cấp)', 'Intel® HD Graphics® 520 Đồ họa Intel® UHD, NVIDIA® GeForce® MX350, 2GB GDDR5', 'SSD 512GB M.2 NVMe™ PCIe® 3.0', '50WHrs, 3S1P, Li-ion 3 pin', '1x USB 3.2 Thế hệ 1 Loại A, 1x USB 3.2 Thế hệ 1 Loại C, 2x USB 2.0 Loại A, 1x HDMI 1.4, 1x Giắc Âm thanh Kết hợp 3,5 mm, Đầu đọc thẻ 3 trong 1 SD/MMC/MS, 1x Tai nghe ra Đầu đọc thẻ Micro SD', '1.40 kg (3.09 lbs)', 'Windows 10 Home - ASUS khuyến nghị Windows 10 Pro cho doanh nghiệp, Bản nâng cấp miễn phí lên Windows 11¹'),
(10, 'ASUS Vivobook S14 S433 ', 20000000, 0, 'lap8.jpg', 2, 5, b'1', 1, '2020-08-08', 'ASUS VivoBook, sự lựa chọn hàng đầu của giới trẻ, giúp mang đến một vẻ ngoài siêu nổi bật và tràn đầy cá tính. VivoBook S14 mỏng nhẹ có điểm nhấn thiết kế là viền cắt kim cương và có bốn màu sắc khác biệt, cho phép bạn thoải mái lựa chọn để thể hiện cá tính của mình. Cá tính của bạn còn được thể hiện rõ nét hơn khi mở máy vì phím Enter vàng nổi bật sẽ xuất hiện tạo điểm nhấn so với bàn phím truyền thống. VivoBook S14 sẽ giúp thể hiện cá tính của bạn, cả bên trong và bên ngoài.', 50, 'Màu Đen ', 'Bộ xử lý Intel® Core™ i5-10210U 1,6 GHz (6M Cache, lên đến 4,2 GHz, 4 nhân) Bộ xử lý Intel® Core™ i7-10510U 1,8 GHz (8M Cache, lên đến 4,9 GHz, 4 nhân) Bộ xử lý Intel® Core™ i5-1035G1 1,0 GHz (6M Cache, lên đến 3,6 GHz, 4 nhân)', '14,0 inch, FHD (1920 x 1080) 16:9, 250nits, NTSC: 45%, Đèn nền LED, Anti-glare display, Tấm nền IPS', ' 8GB DDR4 bus 3200MHz (Hàn trên mainboard - Không thể nâng cấp)', 'Intel® HD Graphics® 520 Đồ họa Intel® UHD, NVIDIA® GeForce® MX350, 2GB GDDR5', 'SSD 512GB M.2 NVMe™ PCIe® 3.0', '50WHrs, 3S1P, Li-ion 3 pin', '1x USB 3.2 Thế hệ 1 Loại A, 1x USB 3.2 Thế hệ 1 Loại C, 2x USB 2.0 Loại A, 1x HDMI 1.4, 1x Giắc Âm thanh Kết hợp 3,5 mm, Đầu đọc thẻ 3 trong 1 SD/MMC/MS, 1x Tai nghe ra Đầu đọc thẻ Micro SD', '1.40 kg (3.09 lbs)', 'Windows 10 Home - ASUS khuyến nghị Windows 10 Pro cho doanh nghiệp, Bản nâng cấp miễn phí lên Windows 11¹'),
(11, 'Vivobook 15 M513', 18900000, 16900000, 'lap9.png', 3, 1, b'0', 1, '2020-08-08', 'M513UA-L1221T Vi xử lý: AMD Ryzen 5 5500U, 6 nhân / 12 luồng Màn hình: 15.6\" FHD OLED (1920 x 1080) chống chói Độ phủ màu: 100% DCI-P3 RAM: 8GB DDR4 bus 3200 MHz (Trống 1 khe - Nâng cấp tối đa 16GB) Card đồ họa: AMD Radeon Graphics Lưu trữ: 512GB m.2 NVMe (Nâng cấp tối đa 2TB) Pin: 42Wh Kết nối chính: 1 x USB-C 3.2 Gen 1, 1 x USB-A 3.2 Gen 1, 2 x USB-A 2.0, 1 x HDMI, 1 x 3.5 mm jack Cân nặng: 1.8kg Hệ điều hành: Windows 10 Home bản quyền', 50, 'Màu Đen ', 'Bộ xử lý AMD Ryzen™ 5 4500U 2,3 GHz (8M Cache, lên đến 4,0 GHz, 6 nhân) , Bộ xử lý AMD Ryzen™ 7 4700U 2,0 GHz (8M Cache, lên đến 4,1 GHz, 8 nhân)', '15,6 inch, FHD (1920 x 1080) 16:9, 200nits, NTSC: 45%, Đèn nền LED for non-OLED, Anti-glare display, Tỷ lệ màn hình trên kích thước:85%', '8GB DDR4 bus 3200 MHz (Trống 1 khe - Nâng cấp tối đa 16GB)', 'Card đồ họa AMD Radeon™', 'SSD 512GB M.2 NVMe™ PCIe® 3.0', '42WHrs, 3S1P, Li-ion 3 pin', '1x USB 3.2 Thế hệ 1 Loại A, 1x USB 3.2 Thế hệ 1 Loại C, 2x USB 2.0 Loại A 1x HDMI 1.4, 1x Giắc Âm thanh Kết hợp 3,5 mm, 1x DC vào Đầu đọc thẻ Micro SD', '42WHrs, 3S1P, Li-ion 3 pin', 'Windows 10 Home - ASUS khuyến nghị Windows 10 Pro cho doanh nghiệp'),
(12, 'Vivobook 15 M513', 18900000, 16900000, 'lap10.jpg', 3, 1, b'0', 2, '2020-08-08', 'M513UA-L1221T Vi xử lý: AMD Ryzen 5 5500U, 6 nhân / 12 luồng Màn hình: 15.6\" FHD OLED (1920 x 1080) chống chói Độ phủ màu: 100% DCI-P3 RAM: 8GB DDR4 bus 3200 MHz (Trống 1 khe - Nâng cấp tối đa 16GB) Card đồ họa: AMD Radeon Graphics Lưu trữ: 512GB m.2 NVMe (Nâng cấp tối đa 2TB) Pin: 42Wh Kết nối chính: 1 x USB-C 3.2 Gen 1, 1 x USB-A 3.2 Gen 1, 2 x USB-A 2.0, 1 x HDMI, 1 x 3.5 mm jack Cân nặng: 1.8kg Hệ điều hành: Windows 10 Home bản quyền', 50, 'Màu trắng ', 'Bộ xử lý AMD Ryzen™ 5 4500U 2,3 GHz (8M Cache, lên đến 4,0 GHz, 6 nhân) , Bộ xử lý AMD Ryzen™ 7 4700U 2,0 GHz (8M Cache, lên đến 4,1 GHz, 8 nhân)', '15,6 inch, FHD (1920 x 1080) 16:9, 200nits, NTSC: 45%, Đèn nền LED for non-OLED, Anti-glare display, Tỷ lệ màn hình trên kích thước:85%', '8GB DDR4 bus 3200 MHz (Trống 1 khe - Nâng cấp tối đa 16GB)', 'Card đồ họa AMD Radeon™', 'SSD 512GB M.2 NVMe™ PCIe® 3.0', '42WHrs, 3S1P, Li-ion 3 pin', '1x USB 3.2 Thế hệ 1 Loại A, 1x USB 3.2 Thế hệ 1 Loại C, 2x USB 2.0 Loại A 1x HDMI 1.4, 1x Giắc Âm thanh Kết hợp 3,5 mm, 1x DC vào Đầu đọc thẻ Micro SD', '42WHrs, 3S1P, Li-ion 3 pin', 'Windows 10 Home - ASUS khuyến nghị Windows 10 Pro cho doanh nghiệp'),
(15, 'ASUS TUF Gaming F15', 31000000, 28900000, 'lap11.jpg', 4, 1, b'0', 1, '2020-08-08', 'Sở hữu độ bền bỉ cho mọi tác vụ thực tế và chơi game, ASUS TUF Gaming F15 (FX506) là laptop gaming chạy Windows 10 đồng hành cùng bạn giành chiến thắng. Được trang bị CPU Intel® Core™ i7 thế hệ thứ 10 mới nhất và GPU GeForce® GTX 1660Ti, các tựa game hành động sẽ chạy nhanh, mượt mà và hoàn toàn tương thích với màn hình IPS tần số quét lên tới 144Hz. Dù có bộ khung nhỏ gọn hơn thiết bị tiền nhiệm, chiếc laptop gaming này vẫn cho dung lượng pin lớn hơn - 90Wh - tương ứng với thời lượng pin lâu hơn. Hệ thống tản nhiệt tự làm sạch hiệu quả kết hợp với độ bền nổi tiếng đạt chuẩn quân đội của TUF khiến thiết bị này trở thành một chiến binh gan góc phù hợp với bất kỳ game thủ nào.', 50, 'Màu trắng ', 'Bộ vi xử lý Intel® Core™ i5-11400H 2,7 GHz (12M Cache, lên đến 4,5 GHz, 6 nhân)', '15,6 inch, FHD (1920 x 1080) 16:9, màn hình chống chói, sRGB:62.5%, Adobe:47.34%, DCI-P3:Tần số làm tươi:144Hz, Giá trị cấp IPS, Adaptive-Sync, 15,6 inch, FHD (1920 x 1080) 16:9, màn hình chống chói, sRGB:62.5%, Adobe:47.34%, Tần số làm tươi:144Hz, Giá trị cấp IPS, Adaptive-Sync', 'DDR4: 8 GB', 'NVIDIA® GeForce RTX™ 3050 Laptop GPU, Lên tới 1600MHz at 60W (75W với Dynamic Boost), 4GB GDDR6, NVIDIA® GeForce RTX™ 3060 Laptop GPU, Lên tới 1630MHz at 90W (95W với Dynamic Boost), 6GB GDDR6', '8GB DDR4-3200 SO-DIMM, Công suất tối đa :32GB', '48WHrs, 3S1P, Li-ion 3 pin, 90WHrs, 4S1P, Li-ion 4 pin', '1 giắc cắm âm thanh combo 3,5mm1 x HDMI 2.0b, 3 x USB 3.2 thế hệ 1 Type-A, 1 x cổng RJ45 LAN, 1 x Thunderbolt™ 4 hỗ trợ DisplayPort™\',\'2.30 Kg (5.07 lbs)', '2.0 kg', 'Windows 10 Home - ASUS khuyến nghị Windows 10 Pro cho doanh nghiệp, Bản nâng cấp miễn phí lên Windows 11¹ '),
(16, 'ASUS TUF Gaming F15', 31000000, 28900000, 'lap12.jpg', 4, 1, b'0', 2, '2020-08-08', 'Sở hữu độ bền bỉ cho mọi tác vụ thực tế và chơi game, ASUS TUF Gaming F15 (FX506) là laptop gaming chạy Windows 10 đồng hành cùng bạn giành chiến thắng. Được trang bị CPU Intel® Core™ i7 thế hệ thứ 10 mới nhất và GPU GeForce® GTX 1660Ti, các tựa game hành động sẽ chạy nhanh, mượt mà và hoàn toàn tương thích với màn hình IPS tần số quét lên tới 144Hz. Dù có bộ khung nhỏ gọn hơn thiết bị tiền nhiệm, chiếc laptop gaming này vẫn cho dung lượng pin lớn hơn - 90Wh - tương ứng với thời lượng pin lâu hơn. Hệ thống tản nhiệt tự làm sạch hiệu quả kết hợp với độ bền nổi tiếng đạt chuẩn quân đội của TUF khiến thiết bị này trở thành một chiến binh gan góc phù hợp với bất kỳ game thủ nào.', 50, 'Màu đen ', 'Bộ vi xử lý Intel® Core™ i5-11400H 2,7 GHz (12M Cache, lên đến 4,5 GHz, 6 nhân)', '15,6 inch, FHD (1920 x 1080) 16:9, màn hình chống chói, sRGB:62.5%, Adobe:47.34%, DCI-P3:Tần số làm tươi:144Hz, Giá trị cấp IPS, Adaptive-Sync, 15,6 inch, FHD (1920 x 1080) 16:9, màn hình chống chói, sRGB:62.5%, Adobe:47.34%, Tần số làm tươi:144Hz, Giá trị cấp IPS, Adaptive-Sync', 'DDR4: 8 GB', 'NVIDIA® GeForce RTX™ 3050 Laptop GPU, Lên tới 1600MHz at 60W (75W với Dynamic Boost), 4GB GDDR6, NVIDIA® GeForce RTX™ 3060 Laptop GPU, Lên tới 1630MHz at 90W (95W với Dynamic Boost), 6GB GDDR6', '8GB DDR4-3200 SO-DIMM, Công suất tối đa :32GB', '48WHrs, 3S1P, Li-ion 3 pin, 90WHrs, 4S1P, Li-ion 4 pin', '1 giắc cắm âm thanh combo 3,5mm1 x HDMI 2.0b, 3 x USB 3.2 thế hệ 1 Type-A, 1 x cổng RJ45 LAN, 1 x Thunderbolt™ 4 hỗ trợ DisplayPort™\',\'2.30 Kg (5.07 lbs)', '2.0 kg', 'Windows 10 Home - ASUS khuyến nghị Windows 10 Pro cho doanh nghiệp, Bản nâng cấp miễn phí lên Windows 11¹ '),
(18, 'ROG Strix SCAR 17 G732', 23000000, 20000000, 'lap14.png', 5, 8, b'0', 1, '2020-08-08', 'Hãy nhắm tới đỉnh cao xuất sắc của những giải esport với Asus ROG SCAR III được thiết kế để cạnh tranh trong phân khúc máy tính gaming cao nhất chạy Windows 10 Pro. Hệ thống làm mát thông minh giải phóng sức mạnh không giới hạn của CPU Intel Core thế hệ thứ 10 và đồ họa GeForce RTX™, trong khi đó màn hình laptop 300Hz/3ms nhanh nhất thế giới cho phép bạn chơi ở tốc độ gaming chuyên nghiệp. Nhập cuộc vào những trận đấu nhiều người chơi mọi nơi mọi lúc nhờ Wi-Fi RangeBoost mạnh hơn, phô diễn cá tính với dải đèn Aura Sync bao quanh máy và đảm bảo tính riêng tư cho dữ liệu cá nhân bằng khóa ROG Keystone mới.', 50, 'Màu xanh ', 'AMD Ryzen 7 5800H, 8 nhân / 16 luồng', '15.6\" FHD IPS (1920 x 1080) 144Hz, màn nhám', '8GB DDR4 3200MHz (Nâng cấp tối đa 64GB)', 'Nvidia Geforce RTX 3050 4GB GDDR6 (TGP 80W + 15W Dynamic Boost)', '512GB NVMe (Nâng cấp tối đa 2TBx2)', '56Wh', '1 x USB-C 3.2 Gen 2 (Hỗ trợ sạc PD và xuất hình), 3 x USB-A 3.2 Gen 1, 1 x HDMI 2.0b, 1 x RJ-45, 1 x jack 3.5mm', '2.1kg', 'Windows 10 Home SL bản quyền'),
(24, 'ASUS TUF Gaming FX505DD/DT/DU', 21000000, 0, 'lap24.jpg', 3, 7, b'1', 1, '2020-07-04', 'Hợp nhất sức mạnh giữa bộ vi xử lý AMD Ryzen™ và đồ họa NVIDIA GeForce GTX™ trên màn hình NanoEdge IPS có tần số quét lên đến 120Hz với ASUS TUF Gaming FX505 mới, mang đến trải nghiệm gaming siêu chân thực, hiệu năng cao ở mức giá vô cùng hợp lý. Mẫu máy này đã được thử nghiệm và chứng nhận đạt tiêu chuẩn MIL-STD-810G, đảm bảo độ cứng cáp và bền bỉ cần thiết để chống chịu va đập và xóc trong quá trình sử dụng để làm việc và giải trí hàng ngày.', 12, 'Xanh đen', ' Bộ vi xử lý Intel® Core™ i7-11800H 2,3 GHz (24M Cache, lên đến 4,6 GHz, 8 nhân)', '15,6 inch, FHD (1920 x 1080) 16:9, màn hình chống chói, sRGB:62.5%, Adobe:47.34%, DCI-P3:Tần số làm tươi:144Hz, Giá trị cấp IPS, Adaptive-Sync, 15,6 inch, FHD (1920 x 1080) 16:9, màn hình chống chói, sRGB:62.5%, Adobe:47.34%, Tần số làm tươi:144Hz, Giá trị cấp IPS, Adaptive-Sync', 'DDR4: 8 GB', 'NVIDIA® GeForce RTX™ 3050 Laptop GPU, Lên tới 1600MHz at 60W (75W với Dynamic Boost), 4GB GDDR6, NVIDIA® GeForce RTX™ 3060 Laptop GPU, Lên tới 1630MHz at 90W (95W với Dynamic Boost), 6GB GDDR6', '8GB DDR4-3200 SO-DIMM, Công suất tối đa :32GB', '48WHrs, 3S1P, Li-ion 3 pin, 90WHrs, 4S1P, Li-ion 4 pin', '1 giắc cắm âm thanh combo 3,5mm1 x HDMI 2.0b, 3 x USB 3.2 thế hệ 1 Type-A, 1 x cổng RJ45 LAN, 1 x Thunderbolt™ 4 hỗ trợ DisplayPort™\',\'2.30 Kg (5.07 lbs)', '2.0 kg', 'Windows 10 Home - ASUS khuyến nghị Windows 10 Pro cho doanh nghiệp, Bản nâng cấp miễn phí lên Windows 11¹ ');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `masohd` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`masohd`, `makh`, `ngaydat`, `tongtien`) VALUES
(17, 8, '2021-10-10', 21000000),
(18, 8, '2021-10-10', 52000000);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkh` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `diachi` text NOT NULL,
  `sodienthoai` varchar(12) NOT NULL,
  `vaitro` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `username`, `matkhau`, `email`, `diachi`, `sodienthoai`, `vaitro`) VALUES
(8, '123', '123', '202cb962ac59075b964b07152d234b70', '123@gmail.com', '123', '123', 0);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(50) NOT NULL,
  `idmenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`maloai`, `tenloai`, `idmenu`) VALUES
(1, 'Giày Cao Gót', 3),
(3, 'Giày Sandals', 3),
(4, 'Giày Búp Bê', 3),
(5, 'Giày Sneaker', 3),
(6, 'Giày Boots', 3),
(7, 'Giày Da Thật', 3),
(8, 'Giày Lười', 3),
(10, 'Túi da', 4),
(13, 'túi da', 4);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `name`, `link`) VALUES
(1, 'Trang Chủ', 'index.php'),
(3, 'Giày', ''),
(4, 'Túi Xách', 'View/sanphamtui.php'),
(5, 'Liên Hệ', 'View/lienhe.php'),
(6, 'Tài Khoản', 'View/gioithieu.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`mabl`),
  ADD KEY `fk_bl_mahh` (`mahh`),
  ADD KEY `fk_bl_kh` (`makh`);

--
-- Indexes for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD PRIMARY KEY (`masohd`,`mahh`),
  ADD KEY `fk_cthd_mahh` (`mahh`);

--
-- Indexes for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahh`),
  ADD KEY `FK_hanghoa_maloai` (`maloai`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`masohd`),
  ADD KEY `fk_hoadon_kh` (`makh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`maloai`),
  ADD KEY `FK_loai_menu` (`idmenu`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `mabl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `hanghoa`
--
ALTER TABLE `hanghoa`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `masohd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `idmenu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `fk_bl_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `fk_bl_mahh` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`);

--
-- Constraints for table `cthoadon`
--
ALTER TABLE `cthoadon`
  ADD CONSTRAINT `fk_cthd_mahd` FOREIGN KEY (`masohd`) REFERENCES `hoadon` (`masohd`),
  ADD CONSTRAINT `fk_cthd_mahh` FOREIGN KEY (`mahh`) REFERENCES `hanghoa` (`mahh`);

--
-- Constraints for table `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD CONSTRAINT `FK_hanghoa_maloai` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `loai`
--
ALTER TABLE `loai`
  ADD CONSTRAINT `FK_loai_menu` FOREIGN KEY (`idmenu`) REFERENCES `menu` (`idmenu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
