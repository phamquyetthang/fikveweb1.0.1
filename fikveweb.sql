-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 01, 2019 lúc 10:17 AM
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
  `nicknam` varchar(225) DEFAULT NULL,
  `avt` text DEFAULT NULL,
  `idsex` int(3) NOT NULL,
  `idposition` int(11) NOT NULL,
  `slogan` text DEFAULT NULL,
  `moreinfo` text DEFAULT NULL,
  `age` int(11) NOT NULL,
  `tuongtac` int(11) DEFAULT NULL,
  `money` int(11) NOT NULL DEFAULT 100
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`idacc`, `email`, `accname`, `password`, `nicknam`, `avt`, `idsex`, `idposition`, `slogan`, `moreinfo`, `age`, `tuongtac`, `money`) VALUES
(1, 'quyet@gmail.com', 'Phạm Quyết Thắng', '123132', 'Hoàng tử', 'sasdsffdf', 1, 1, 'sdasff', 'sdffsdfs', 18, 1000, 100),
(2, 'quyetthang@gmail.com', 'phuc vinh', '123132', 'phucvinh', 'sasdsffdf', 1, 1, 'sdasff', 'sdffsdfs', 20, 980, 100),
(3, 'hong@gmail.com', 'hong', '1234567', 'hong', 'fcgvhbn', 2, 4, 'cfghgbn', 'dfghhjj', 18, 600, 100),
(7, 'phuc@gmail.com', 'Phúc', '345678', 'Không Phải Phúc', NULL, 1, 6, NULL, NULL, 18, 880, 100),
(8, 'son@gmail.com', 'Đặng Anh Sơn', '543212', 'Sơn Thần', NULL, 1, 12, NULL, NULL, 17, 600, 100),
(9, 'thuong@gmail.com', 'Tạ Quang Thưởng', '987654', 'Kỳ Quan Thiên Nhiên', NULL, 3, 18, NULL, NULL, 19, 780, 100),
(10, 'thai@gmail.com', 'Nguyễn Minh Thái', '345678', 'Siêu', NULL, 1, 18, 'Nothing is impossible', NULL, 19, 920, 100),
(11, 'troang@gmail.com', 'Kiều Trang', '3245646', 'Trang Lang Thang', NULL, 2, 8, NULL, NULL, 20, 888, 100),
(12, 'thanh@gmail.com', 'Ngô Thị Thanh', '234567', 'Nguyễn Thị Tý', NULL, 2, 6, NULL, NULL, 20, 222, 100),
(13, 'huong@gmail.com', 'Nguyễn Lan Hương', '123764', 'Không mùi', NULL, 2, 23, NULL, NULL, 20, 460, 100),
(14, 'may@gmail.com', 'Vũ Thị Mây', '2423465', 'Để Gió Cuốn Đi', NULL, 2, 25, NULL, NULL, 20, 890, 100),
(15, 'nghiep@gmail.com', 'Phạm Nghiệp', '76543', 'Not Quật', NULL, 3, 2, NULL, NULL, 24, 111, 100),
(16, 'viet@gmail.com', 'Văn Việt', '987653', 'Dân Tộc Kinh', NULL, 3, 17, NULL, NULL, 20, 456, 100),
(17, 'truong@gmail.com', 'Nguyễn Trường', '543234', 'Không Phải Trường', NULL, 3, 11, NULL, NULL, 20, 125, 100),
(18, 'long@gmail.com', 'Văn Long', '4566787', 'Ranh Con', NULL, 3, 14, NULL, NULL, 18, 695, 100),
(19, 'phuclong@gmail.com', 'Phúc Long', '23456544', NULL, NULL, 1, 7, NULL, NULL, 20, NULL, 100),
(20, 'phucthanh@gmail.com', 'Phúc Thành', '23456544', NULL, NULL, 1, 7, NULL, NULL, 20, NULL, 100),
(12234, 'thangcho@ancut.com', 'thắng ăn cứt', '12234bafdf', 'gdf', '342', 1, 1, 'dsfd', 'sdfsdf', 56, 1000, 100),
(12235, 'abc@gmail.com', 'fdshfgkjdsf', 'adf3q2rsdf', 'gdf', '342', 1, 1, 'dsfd', NULL, 45, 1000, 100),
(12236, 'aghfjkadgdf', 'sdafasd', 'ádfsdafwe', NULL, NULL, 3, 7, NULL, NULL, 45, NULL, 100),
(12237, 'longngoc@gmail.com', 'long ngọc', '123456', NULL, NULL, 3, 6, NULL, NULL, 22, NULL, 100),
(12238, 'longngoc@gmail.com', 'long ngọc', '123456', NULL, NULL, 3, 6, NULL, NULL, 22, NULL, 100),
(12239, 'longngoc@gmail.com', 'long ngọc', '123456', NULL, NULL, 3, 6, NULL, NULL, 22, NULL, 100),
(12240, 'hongngoc@gmail.com', 'Hồng Ngọc', '345623', NULL, NULL, 2, 5, NULL, NULL, 24, NULL, 100);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activeone`
--

CREATE TABLE `activeone` (
  `idactive` int(11) NOT NULL,
  `idacc` int(8) NOT NULL,
  `multilcoment` text NOT NULL,
  `liked` tinyint(1) NOT NULL,
  `starchoose` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `time` point NOT NULL,
  `idacti` int(11) NOT NULL,
  `img` text NOT NULL,
  `sumlike` int(11) NOT NULL,
  `sumcom` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='bảng status';

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
  ADD PRIMARY KEY (`idactive`),
  ADD KEY `idacc` (`idacc`);

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
-- Chỉ mục cho bảng `sexiusm`
--
ALTER TABLE `sexiusm`
  ADD PRIMARY KEY (`idsex`);

--
-- Chỉ mục cho bảng `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`idstatus`),
  ADD KEY `idacc` (`idacc`),
  ADD KEY `idacti` (`idacti`);

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
  MODIFY `idacc` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12241;

--
-- AUTO_INCREMENT cho bảng `activeone`
--
ALTER TABLE `activeone`
  MODIFY `idactive` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT cho bảng `status`
--
ALTER TABLE `status`
  MODIFY `idstatus` int(11) NOT NULL AUTO_INCREMENT;

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
-- Các ràng buộc cho bảng `activeone`
--
ALTER TABLE `activeone`
  ADD CONSTRAINT `activeone_ibfk_1` FOREIGN KEY (`idacc`) REFERENCES `account` (`idacc`);

--
-- Các ràng buộc cho bảng `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`idacc`) REFERENCES `account` (`idacc`),
  ADD CONSTRAINT `status_ibfk_2` FOREIGN KEY (`idacti`) REFERENCES `activeone` (`idactive`);

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
