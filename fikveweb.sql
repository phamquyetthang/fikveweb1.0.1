-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 12, 2019 lúc 08:53 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fikve`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `idacc` int(8) NOT NULL,
  `email` varchar(225) NOT NULL,
  `accname` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nicknam` varchar(225) NOT NULL DEFAULT 'Anyone',
  `avt` text NOT NULL DEFAULT 'resources/img/dp.jpg',
  `idsex` int(3) NOT NULL,
  `idposition` int(11) NOT NULL,
  `slogan` text DEFAULT NULL,
  `moreinfo` text DEFAULT NULL,
  `age` int(11) NOT NULL,
  `tuongtac` int(11) NOT NULL DEFAULT 0,
  `money` int(11) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`idacc`, `email`, `accname`, `password`, `nicknam`, `avt`, `idsex`, `idposition`, `slogan`, `moreinfo`, `age`, `tuongtac`, `money`) VALUES
(1, 'quyet@gmail.com', 'Phạm Quyết Thắng', '123132', 'Hoàng tử', 'resources/img/vic1.jpg', 1, 1, 'sdasff', 'sdffsdfs', 18, 1001, 100),
(2, 'quyetthang@gmail.com', 'phuc vinh', '123132', 'phucvinh', 'resources/img/dp.jpg\r\n', 1, 1, 'sdasff', 'sdffsdfs', 20, 980, 100),
(3, 'hong@gmail.com', 'hong', '1234567', 'hong', 'resources/img/thuy1.jpg\r\n', 2, 4, 'cfghgbn', 'dfghhjj', 18, 601, 100),
(7, 'phuc@gmail.com', 'Phúc', '345678', 'Không Phải Phúc', 'resources/img/phuc1.jpg\r\n', 1, 6, NULL, NULL, 18, 880, 100),
(8, 'son@gmail.com', 'Đặng Anh Sơn', '543212', 'Sơn Thần', 'resources/img/son2.jpg\r\n', 1, 12, NULL, NULL, 17, 600, 100),
(9, 'thuong@gmail.com', 'Tạ Quang Thưởng', '987654', 'Kỳ Quan Thiên Nhiên', 'resources/img/thuong1.jpg', 3, 18, NULL, NULL, 19, 780, 100),
(10, 'thai@gmail.com', 'Nguyễn Minh Thái', '345678', 'Siêu', 'resources/img/thai1.jpg', 1, 18, 'Nothing is impossible', NULL, 19, 920, 100),
(11, 'troang@gmail.com', 'Kiều Trang', '3245646', 'Trang Lang Thang', 'resources/img/trang1.jpg', 2, 8, NULL, NULL, 20, 888, 100),
(12, 'thanh@gmail.com', 'Ngô Thị Thanh', '234567', 'Nguyễn Thị Tý', 'resources/img/dp.jpg', 2, 6, NULL, NULL, 20, 222, 100),
(13, 'huong@gmail.com', 'Nguyễn Lan Hương', '123764', 'Không mùi', 'resources/img/dp.jpg', 2, 23, NULL, NULL, 20, 460, 100),
(14, 'may@gmail.com', 'Vũ Thị Mây', '2423465', 'Để Gió Cuốn Đi', 'resources/img/dp.jpg', 2, 25, NULL, NULL, 20, 890, 100),
(15, 'nghiep@gmail.com', 'Phạm Nghiệp', '76543', 'Not Quật', 'resources/img/nghiep1.jpg', 3, 2, 'Cảm ơn tạo hóa', NULL, 24, 111, 100),
(16, 'viet@gmail.com', 'Văn Việt', '987653', 'Dân Tộc Kinh', 'resources/img/viet1.jpg', 3, 17, 'thu đến và đi như những gì đã sắp đặt', NULL, 20, 456, 100),
(17, 'truong@gmail.com', 'Nguyễn Trường', '543234', 'Không Phải Trường', 'resources/img/dp.jpg', 3, 11, NULL, NULL, 20, 125, 100),
(18, 'long@gmail.com', 'Văn Long', '4566787', 'Ranh Con', 'resources/img/dp.jpg', 3, 14, NULL, NULL, 18, 695, 100),
(19, 'phuclong@gmail.com', 'Phúc Long', '23456544', 'Anyone', 'resources/img/dp.jpg', 1, 7, NULL, NULL, 20, 222, 100),
(20, 'phucthanh@gmail.com', 'Phúc Thành', '23456544', '', 'resources/img/dp.jpg', 1, 7, NULL, NULL, 20, 0, 100),
(12234, 'thangcho@ancut.com', 'thắng ăn cứt', '12234bafdf', 'Super Trường', 'resources/img/dp.jpg', 1, 1, 'dsfd', 'sdfsdf', 56, 1000, 100),
(12235, 'abc@gmail.com', 'fdshfgkjdsf', 'adf3q2rsdf', 'Đông tà', 'resources/img/dp.jpg', 1, 1, 'dsfd', NULL, 45, 1000, 100),
(12236, 'aghfjkadgdf', 'sdafasd', 'ádfsdafwe', '', 'resources/img/dp.jpg', 3, 7, NULL, NULL, 45, 0, 100),
(12237, 'longngoc@gmail.com', 'long ngọc', '123456', 'Anyone', 'resources/img/dp.jpg', 3, 6, NULL, NULL, 22, 0, 100),
(12238, 'longngoc@gmail.com', 'long ngọc', '123456', '', 'resources/img/dp.jpg', 3, 6, NULL, NULL, 22, 0, 100),
(12239, 'longngoc@gmail.com', 'long ngọc', '123456', 'Anyone', 'resources/img/dp.jpg', 3, 6, NULL, NULL, 22, 0, 100),
(12240, 'hongngoc@gmail.com', 'Hồng Ngọc', '345623', '', 'resources/img/dp.jpg', 2, 5, NULL, NULL, 24, 0, 100),
(12241, 'quyetthang.phucchi@gmail.com', 'Nguyễn Phúc Vinh', 'anhyeuem', 'Phúc Chi', 'resources/img/vic1.jpg', 1, 6, NULL, NULL, 22, 2, 100),
(12242, 'nhumay@gmail.com', 'Như Mây', '987654', '', 'resources/img/dp.jpg', 2, 19, NULL, NULL, 22, 0, 100),
(12243, 'thanhthanh@gmail.com', 'Ngô Thị Thanh', '852963', 'Anyone', 'resources/img/dp.jpg', 2, 19, NULL, NULL, 22, 0, 100),
(12244, 'hongha@gmail.com', 'Hông Hà', '123456789', 'Anyone', 'resources/img/dp.jpg', 1, 6, NULL, NULL, 15, 2, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activeone`
--

CREATE TABLE `activeone` (
  `id` int(11) NOT NULL,
  `idacc` int(8) NOT NULL,
  `multilcoment` text DEFAULT NULL,
  `liked` tinyint(1) DEFAULT 0,
  `idtus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `activeone`
--

INSERT INTO `activeone` (`id`, `idacc`, `multilcoment`, `liked`, `idtus`) VALUES
(1, 2, 'Chào người đẹp', 1, 65),
(2, 3, 'Hú hú', 1, 65),
(3, 4, 'Xin những bối rối này cứ thế lên ngôi', 1, 65),
(4, 8, 'Test cmt , ok ok ok', 1, 66),
(5, 3, 'Test again , check, check, check', 0, 66),
(6, 15, ' \n			Em đẹp quá\n		', 0, 66),
(7, 15, ' \n			Em đẹp quá\n		', 0, 66),
(8, 15, ' \n			Em đẹp quá\n		\n			Nhà em ở đâu thế\n		', 0, 66),
(9, 15, ' \n			Uống nhầm một ánh mắt\n		\n			Cơn say theo nửa đời\n		', 0, 66),
(10, 15, ' \n			Cho anh làm quen với bé ơi\n		', 0, 54),
(11, 15, ' \n			Cho anh làm quen với bé ơi\n		\n			Nhà em ở đâu thế\n		', 0, 55),
(12, 15, ' \n			Cho anh làm quen với bé ơi\n		', 0, 56),
(13, 15, ' \n			Người trao có nửa nụ cười\n		\n			Mà anh mất cả một đời để quên\n		', 0, 56),
(14, 15, ' \n			Em đẹp quá\n		', 0, 54),
(15, 15, ' \n			Cho anh làm quen với bé ơi\n		', 0, 44),
(16, 15, '\n			Nhà em ở đâu thế\n		', 0, 10),
(17, 15, ' \n			Uống nhầm một ánh mắt\n		\n			Cơn say theo nửa đời\n		', 0, 5),
(18, 15, '\n			Cơn say theo nửa đời\n		\n			Cho anh làm quen với bé ơi\n		', 0, 5),
(19, 12241, ' \n			Người trao có nửa nụ cười\n		', 1, 66),
(20, 12241, ' \n			Cho anh làm quen với bé ơi\n		', 0, 59),
(21, 8, NULL, 1, 0),
(22, 8, NULL, 1, 65),
(23, 12241, ' \n			Nhà em ở đâu thế\n		', 1, 33),
(24, 12241, ' \n			Nhà em ở đâu thế\n		', 0, 52),
(25, 12241, ' \n			Em đẹp quá\n		', 0, 10),
(26, 12241, ' \n			Em đẹp quá\n		', 1, 57),
(27, 12241, ' \n			Nhà em ở đâu thế\n		', 0, 32),
(28, 12241, ' \n			Em đẹp quá\n		', 0, 0),
(29, 12241, ' \n			Nhà em ở đâu thế\n		', 0, 33),
(30, 12241, ' \n			Em đẹp quá\n		', 0, 0),
(31, 12241, ' \n			Cho anh làm quen với bé ơi\n		', 0, 44),
(32, 12241, ' \n			Em đẹp quá\n		', 0, 54),
(33, 12241, ' \n			Em đẹp quá\n		', 0, 10),
(34, 12241, '\n			Em đẹp quá\n		', 0, 10),
(35, 12241, ' \n			Nhà em ở đâu thế\n		', 0, 10),
(36, 12241, ' \n			Em đẹp quá\n		', 0, 0),
(37, 12244, ' \n			Em đẹp quá\n		', 1, 66);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idcom` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `positionuser`
--

CREATE TABLE `positionuser` (
  `idpos` int(11) NOT NULL,
  `posi` text NOT NULL,
  `valuekm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `positionuser`
--

INSERT INTO `positionuser` (`idpos`, `posi`, `valuekm`) VALUES
(1, 'Ba Đình', 8),
(2, 'Hoàn Kiếm', 14),
(3, 'Hai Bà Trưng', 12),
(4, 'Đống Đa', 5),
(5, 'Tây Hồ', 8),
(6, 'Cầu Giấy', 0),
(7, 'Thanh Xuân', 12),
(8, 'Hoàng Mai', 20),
(9, 'Long Biên', 21),
(10, 'Từ Liêm', 3),
(11, 'Thanh Trì', 15),
(12, 'Gia Lâm', 10),
(13, 'Đông Anh', 20),
(14, 'Sóc Sơn', 23),
(15, 'Hà Đông', 16),
(16, 'Sơn Tây', 32),
(17, 'Ba Vì', 35),
(18, 'Phúc Thọ', 40),
(19, 'Thạch Thất', 38),
(20, 'Quốc Oai', 28),
(21, 'Chương Mỹ', 33),
(22, 'Đan Phượng', 31),
(23, 'Hoài Đức', 20),
(24, 'Thanh Oai', 33),
(25, 'Mỹ Đức', 40),
(26, 'Ứng Hòa', 41),
(27, 'Thường Tín', 42),
(28, 'Phú Xuyên', 45),
(29, 'Mê Linh', 24);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quanhe`
--

CREATE TABLE `quanhe` (
  `id` int(11) NOT NULL,
  `idmy` int(11) NOT NULL,
  `idtheir` int(11) NOT NULL,
  `care` int(11) NOT NULL DEFAULT 0,
  `mess` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sexiusm`
--

CREATE TABLE `sexiusm` (
  `idsex` int(3) NOT NULL,
  `sex` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sexiusm`
--

INSERT INTO `sexiusm` (`idsex`, `sex`) VALUES
(1, 'nam'),
(2, 'nu'),
(3, 'lgbt');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `status`
--

CREATE TABLE `status` (
  `idstatus` int(11) NOT NULL,
  `idacc` int(11) NOT NULL,
  `multitus` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` text NOT NULL,
  `sumlike` int(11) NOT NULL DEFAULT 0,
  `sumcom` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='bảng status';

--
-- Đang đổ dữ liệu cho bảng `status`
--

INSERT INTO `status` (`idstatus`, `idacc`, `multitus`, `time`, `img`, `sumlike`, `sumcom`) VALUES
(3, 12241, 'Từ ấy trong tôi bừng nắng hạ', '2019-12-02 09:24:42', 'resources/img/vic1.jpg', 102, 3),
(4, 12241, 'test time', '2019-12-02 09:27:56', 'resources/img/thuy1.jpg', 201, 101),
(5, 12241, 'anh đẹp trai', '2019-12-03 11:08:30', 'http://localhost/dalab/vic1.jpg', 10, 8),
(7, 12241, ' 			Thiếu một nửa tôi đi tìm một nửa					Nước mắt đã rơi, trò chơi kết thúc					Em ngược đường ngược nắng để yêu anh		', '2019-12-03 11:09:55', 'http://localhost/fikveweb1.0.1/model/uploads/1575370713hluan.png', 43, 21),
(10, 12241, ' 			Thiếu một nửa tôi đi tìm một nửa		', '2019-12-03 11:11:30', 'http://localhost/fikveweb1.0.1/model/uploads/1575371482led_Diagram.png', 1232, 1215),
(32, 12241, ' 			Các vợ ơi		', '2019-12-03 15:03:14', 'http://localhost/fikveweb1.0.1/model/uploads/15753730701.jpg', 74, 12),
(33, 1, ' 			Một là anh đang nói dối					Hai là anh đang nói dối nhiều lần		', '2019-12-03 15:05:50', 'http://localhost/fikveweb1.0.1/model/uploads/1575385534.jpg', 121, 2),
(44, 12243, ' 			Các chồng ơi		', '2019-12-04 03:42:49', 'http://localhost/fikveweb1.0.1/model/uploads/1575430070.jpg', 980, 4),
(52, 12241, ' 			Thiếu một nửa tôi đi tìm một nửa					Nước mắt đã rơi, trò chơi kết thúc					Nước mắt đã rơi, trò chơi kết thúc		', '2019-12-04 12:07:08', 'http://localhost/fikveweb1.0.1/model/uploads/1575461215bb474834fff9739b48923ad10e5.png', 0, 0),
(54, 3, 'em đẹp em có quyền', '2019-12-04 14:02:50', 'resources/img/thanh1.jpg', 125, 33),
(55, 10, ' 			Bên em nắng rồi bên anh thì vẫn mưa		', '2019-12-04 14:05:22', 'http://localhost/fikveweb1.0.1/model/uploads/1575468289.jpg', 2, 6),
(56, 12241, ' 			Em ngược đường ngược nắng để yêu anh					Thiếu một nửa tôi đi tìm một nửa					Nước mắt đã rơi, trò chơi kết thúc					Nước mắt đã rơi, trò chơi kết thúc		', '2019-12-05 04:52:52', 'http://localhost/fikveweb1.0.1/model/uploads/1575521564bb474834fff9739b48923ad10e5.png', 0, 0),
(57, 15, ' 			Một là anh đang nói dối		.<br>			Hai là anh đang nói dối nhiều lần		', '2019-12-05 06:44:30', 'http://localhost/fikveweb1.0.1/model/uploads/1575528247p1.jpg', 1, 0),
(59, 15, ' 			Em ngược đường ngược nắng để yêu anh		', '2019-12-05 06:56:29', 'http://localhost/fikveweb1.0.1/model/uploads/1575528985p1.jpg', 0, 0),
(64, 15, ' \n			Em ngược đường ngược nắng để yêu anh\n		', '2019-12-11 08:04:11', 'http://localhost/fikveweb1.0.1/library/img/1575528985p1.jpg', 0, 0),
(65, 15, ' \n			Em ngược đường ngược nắng để yêu anh\n		', '2019-12-11 08:10:04', 'library/img/1_zing.jpg', 0, 0),
(66, 15, ' \n			Em ngược đường ngược nắng để yêu anh\n		', '2019-12-11 10:06:50', 'library/img/1575371623.jpg', 1, 1),
(67, 12244, ' \n			Thiếu một nửa tôi đi tìm một nửa\n		', '2019-12-12 03:59:01', 'library/img/1_zing.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuongtac`
--

CREATE TABLE `tuongtac` (
  `idtt` int(11) NOT NULL,
  `idacc` int(11) NOT NULL,
  `idtus` int(11) NOT NULL,
  `sum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tuscontent`
--

CREATE TABLE `tuscontent` (
  `idetus` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`idacc`),
  ADD KEY `idsex` (`idsex`),
  ADD KEY `lk_vitri` (`idposition`);

--
-- Chỉ mục cho bảng `activeone`
--
ALTER TABLE `activeone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idacc` (`idacc`),
  ADD KEY `idtus` (`idtus`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idcom`);

--
-- Chỉ mục cho bảng `positionuser`
--
ALTER TABLE `positionuser`
  ADD PRIMARY KEY (`idpos`);

--
-- Chỉ mục cho bảng `quanhe`
--
ALTER TABLE `quanhe`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sexiusm`
--
ALTER TABLE `sexiusm`
  ADD PRIMARY KEY (`idsex`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstatus`),
  ADD KEY `idacc` (`idacc`);

--
-- Chỉ mục cho bảng `tuongtac`
--
ALTER TABLE `tuongtac`
  ADD PRIMARY KEY (`idtt`),
  ADD KEY `idacc` (`idacc`),
  ADD KEY `idtus` (`idtus`);

--
-- Chỉ mục cho bảng `tuscontent`
--
ALTER TABLE `tuscontent`
  ADD PRIMARY KEY (`idetus`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `idacc` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12245;

--
-- AUTO_INCREMENT cho bảng `activeone`
--
ALTER TABLE `activeone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idcom` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `positionuser`
--
ALTER TABLE `positionuser`
  MODIFY `idpos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `quanhe`
--
ALTER TABLE `quanhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT cho bảng `tuongtac`
--
ALTER TABLE `tuongtac`
  MODIFY `idtt` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tuscontent`
--
ALTER TABLE `tuscontent`
  MODIFY `idetus` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`idsex`) REFERENCES `sexiusm` (`idsex`),
  ADD CONSTRAINT `lk_vitri` FOREIGN KEY (`idposition`) REFERENCES `positionuser` (`idpos`);

--
-- Các ràng buộc cho bảng `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`idacc`) REFERENCES `account` (`idacc`);

--
-- Các ràng buộc cho bảng `tuongtac`
--
ALTER TABLE `tuongtac`
  ADD CONSTRAINT `tuongtac_ibfk_1` FOREIGN KEY (`idacc`) REFERENCES `account` (`idacc`),
  ADD CONSTRAINT `tuongtac_ibfk_2` FOREIGN KEY (`idtus`) REFERENCES `status` (`idstatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
