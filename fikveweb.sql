-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 18, 2019 lúc 08:12 AM
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
  `name` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nicknam` varchar(225) DEFAULT NULL,
  `avt` text DEFAULT NULL,
  `idsex` int(3) NOT NULL,
  `idposition` int(11) NOT NULL,
  `slogan` text DEFAULT NULL,
  `moreinfo` text DEFAULT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`idacc`, `email`, `name`, `password`, `nicknam`, `avt`, `idsex`, `idposition`, `slogan`, `moreinfo`, `age`) VALUES
(1, 'quyet@gmail.com', 'phuc vinh', '123132', 'phucvinh', 'sasdsffdf', 1, 1, 'sdasff', 'sdffsdfs', 0),
(2, 'quyetthang@gmail.com', 'phuc vinh', '123132', 'phucvinh', 'sasdsffdf', 1, 1, 'sdasff', 'sdffsdfs', 0),
(3, 'hong@gmail.com', 'hong', '1234567', 'hong', 'fcgvhbn', 2, 4, 'cfghgbn', 'dfghhjj', 0);

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
  `posi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `positionuser`
--

INSERT INTO `positionuser` (`idpos`, `posi`) VALUES
(1, 'nam dinh'),
(2, 'thanh hoa'),
(3, 'Thanh Xuân'),
(4, 'Cầu Giấy'),
(5, 'Ba Đình');

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
  MODIFY `idacc` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `idpos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
