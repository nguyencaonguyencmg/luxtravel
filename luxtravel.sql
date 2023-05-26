-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2023 at 06:47 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luxtravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(5) NOT NULL,
  `RoomName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Hoten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Price` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Datein` date NOT NULL,
  `Dateout` date NOT NULL,
  `People` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `Nrooms` int(11) NOT NULL,
  `Total` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `RoomName`, `Hoten`, `Code`, `Price`, `Datein`, `Dateout`, `People`, `Nrooms`, `Total`) VALUES
(3, 'Neo-Hotel', 'Cao Nguyên', '32169', '1990000', '2022-03-09', '2022-03-11', '2', 1, '3980000'),
(19, 'Landing home', 'Hiếu', '03264', '1000000', '2022-03-25', '2022-03-27', '1', 1, '3000000'),
(20, 'Kaia Residence - Private', 'Thư Nhãn', '23652', '890000', '2022-03-23', '2022-03-25', '3', 1, '2670000'),
(23, 'Yellow Submarine', 'Nhật', '56214', '1750000', '2022-03-23', '2022-03-25', '4', 1, '3500000'),
(24, '999 CONDOTEL', 'Tùng', '26523', '4300000', '2022-03-07', '2022-03-10', '2', 1, '17200000'),
(25, 'THECOSTA apartment', 'Thành Nhật', '62542', '1300000', '2022-03-29', '2022-03-31', '1', 1, '2600000'),
(26, 'The Royal Homies', 'Phạm Viết Phú', '62542', '899000', '2022-04-22', '2022-04-25', '2', 1, '2697000'),
(27, 'MyjolyHome', 'Nguyễn Lương Nho', '26895', '1600000', '2022-08-22', '2022-08-25', '2', 2, '9600000'),
(28, 'Yellow Submarine', 'Cao Nguyên', '96245', '1750000', '2022-08-24', '2022-08-26', '4', 2, '7000000'),
(29, 'Odwin Villa', 'Hiếu', ' 95853', '2900000', '2022-03-22', '2022-03-24', '2', 1, '8700000'),
(30, 'AURA Apartment', 'Nhật', ' 24973', '1300000', '2022-03-23', '2022-03-25', '2', 1, '2600000'),
(31, 'Odwin Villa', 'Thư Nhãn', ' 21790', '2900000', '2022-09-06', '2022-09-09', '4', 1, '8700000'),
(32, 'APARTMENT THIÊN KIM 5', 'Cao Nguyên', ' 27613', '3580000', '2022-10-05', '2022-10-07', '4', 2, '14320000'),
(33, 'The Galaxy Home', 'Thanh Tùng', ' 91786', '850000', '2022-10-05', '2022-10-06', '1', 1, '850000');

-- --------------------------------------------------------

--
-- Table structure for table `bookroom`
--

CREATE TABLE `bookroom` (
  `idbook` int(11) NOT NULL,
  `roomname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `hoten` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `datein` date NOT NULL,
  `dateout` date NOT NULL,
  `people` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `nrooms` int(11) NOT NULL,
  `total` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `bookroom`
--

INSERT INTO `bookroom` (`idbook`, `roomname`, `hoten`, `email`, `code`, `price`, `datein`, `dateout`, `people`, `nrooms`, `total`) VALUES
(57, '999 CONDOTEL', 'cao nguyên', 'caonguyencmg2010@gmail.com', ' 90016', '4300000', '2022-03-22', '2022-03-24', '1', 1, '8600000'),
(60, 'Mai Villa Dalat', 'cao nguyên', 'caonguyencmg2010@gmail.com', ' 76440', '1600000', '2022-03-22', '2022-03-23', '2', 1, '1600000'),
(61, 'AURA Apartment', 'Cao Nguyên', 'caonguyencmg2010@gmail.com', ' 88427', '1300000', '2022-03-30', '2022-04-02', '2', 1, '3900000'),
(64, 'Amia Cosiana', 'Cao Nguyên', 'caonguyencmg2010@gmail.com', ' 52704', '1200000', '2022-03-17', '2022-03-19', '2', 1, '2400000'),
(65, 'GoldSea', 'Nhật', 'nhat@gmail.com', ' 49831', '1599000', '2022-03-24', '2022-03-26', '2', 1, '3198000'),
(68, 'One&Only', 'Cao Nguyen', 'caonguyencmg2010@gmail.com', ' 36318', '1265000', '2022-08-17', '2022-08-20', '2', 1, '3795000'),
(71, 'MyjolyHome', 'Thư Nhãn', 'nguyenthithunhan44@gmail.com', ' 64049', '1600000', '2022-08-15', '2022-08-18', '3', 2, '9600000'),
(72, 'Opal house', 'Nhật', 'nhat@gmail.com', ' 21927', '690000', '2022-08-22', '2022-08-25', '5', 2, '4140000'),
(74, 'The Nắng Suites', 'Thư Nhãn', 'nguyenthithunhan44@gmail.com', ' 45548', '2500000', '2022-08-25', '2022-08-28', '6', 1, '7500000'),
(77, 'The Nắng Suites', 'Cao Nguyen', 'caonguyen123@gmail.com', ' 68750', '2500000', '2022-09-09', '2022-09-11', '2', 1, '5000000'),
(78, 'One&Only', 'tuan anh', 'tuananh@gmail.com', ' 70451', '1265000', '2022-09-13', '2022-09-15', '3', 1, '2530000'),
(79, 'Sa Pa-Home', 'Thanh Tùng', 'tung2000@gmail.com', ' 19919', '850000', '2022-10-03', '2022-10-05', '2', 1, '1700000'),
(81, 'Sa House ', 'Thanh Tùng', 'tung2000@gmail.com', ' 32745', '560000', '2022-10-05', '2022-10-07', '4', 2, '2240000'),
(83, 'SLK Bungalow', 'cao nguyên', 'caonguyencmg2010@gmail.com', ' 20204', '1278000', '2022-10-07', '2022-10-10', '3', 2, '7668000'),
(84, 'Sa House ', 'cao nguyên', 'caonguyencmg2010@gmail.com', ' 86213', '560000', '2022-10-03', '2022-10-05', '2', 1, '1120000');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `LocationID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Addres` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Note` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`LocationID`, `Addres`, `Note`) VALUES
('DN', 'Đà Nẵng', 'Đà Nẵng'),
('HL', 'Hạ Long', 'Hạ Long'),
('HN', 'Hà Nội', 'Hà Nội'),
('NT', 'Nha Trang', 'Nha Trang'),
('PT', 'Phan Thiết', 'Phan Thiết'),
('SG', 'Hồ Chí Minh', 'Sài Gòn'),
('SP', 'Sapa', 'Sapa'),
('VT', 'Vũng Tàu', 'Vũng Tàu');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `roomid` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `roomname` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(3000) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(15) NOT NULL,
  `locations` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `no1` int(1) NOT NULL,
  `vip` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`roomid`, `roomname`, `img`, `images`, `title`, `price`, `locations`, `no1`, `vip`) VALUES
('DL1', 'The Windys', 'ceAHpjQXvytF-juYjaSWHTN9.jpg', '6300961586bb935.jpg,6300961586f9c43qj3qwergqajgqo-7wgghro.jpg', 'Phòng 4 khách ở The Windy với diện tích 35m2, tầng hầm, có 1 phòng ngủ và 1 phòng tắm được trang bị các thiết bị và vật dụng tiện nghi, hiện đại. Với mong muốn có thể tạo nên  không  gian thoải  mái , dễ chịu cũng như là tiện nghi cho khách đến lưu trú nên đây sẽ là điểm đến cũng như sự lựa chọn phù hợp cho chuyến nghĩ dưỡng của bạn.  Ngoài không gian sinh hoạt riêng thì sẽ còn phòng sinh hoạt chung  là phòng khách . Phòng khách rộng rãi được bày trí góc tranh nghệ thuật, sofa lớn là không gian ', 1000000, 'Đà Lạt', 0, 0),
('DL2', 'LA MAISON GRISE', 'room_38719_38_1575425304.jpg', '6235ab2c5cc6droom_34567_26_1570879481.jpg,6235ab2c5cee7room_38719_36_1575425302.jpg,6235ab2c5d1farpljmiflhh86dptj-aphhr0_.jpg', 'LA MAISON GRISE - Quang cảnh thung lũng thôngLa Maison Grise DaLat I Private I Luxury I Toàn bộ cho thuê biệt thự - 10 phút lái xe đến trung tâm.Khung cảnh tuyệt đẹp của Thung lũng thông, bạn có thể tận hưởng cả bình minh và hoàng hôn ngay tại biệt thự.Biệt thự mới được xây dựng theo phong cách hiện đại, nhà bếp được trang bị đầy đủ dụng cụ BBQ, tiện nghi và bộ khăn tắm sẵn sàng trong mỗi phòng ngủ. Biệt thự nằm trên con phố chính của thành phố Đà Lạt, cũng gần nhiều nhà hàng và quán cà ph', 2500000, 'Đà Lạt', 0, 0),
('DL3', 'Nomad Home & Coffee', '0vTQS6ireEQDYdS4T1IQumxe.jpg', '6235ab6c1587dnmanfcg0muoyn3-eqzunitam.jpg,6235ab6c15c03nrwg-up5rcflke2uwtj5w7vf.jpg', 'Phòng có nhà vệ sinh riêng, nước nóng lạnh, có sẵn khăn tắm, dầu gội và sữa tắm\r\nNomad là nơi dành cho các bạn yêu thích sự yên tĩnh, tận hưởng không khí Đà Lạt. Bạn có thể thoải mái nghỉ ngơi ở sân vườn, nghe suối reo, chim hót hoặc thưởng thức tách cà phê nóng thơm lừng mỗi sáng. Nomad không phù hợp với các bạn yêu thích sự ồn ào, náo nhiệt\r\nCó phục vụ ăn sáng', 590000, 'Đà Lạt', 0, 0),
('DL4', 'Đinh Toàn Hotel', 'room_28959_566_1564825618.jpg', '6235ab8a24af9hs-dn5.png,6235ab8a24dd2hs-dn7.png', 'Chỗ ở của chúng tôi có diện tích 90m2 với 4 phòng ngủ 6 giường. Đầy đủ trang thiết bị tiện nghi, hiện đại. Chúng tôi sử dụng màu trắng là gam màu chủ đạo và được thiết kế phù hợp cho nhóm khách 10-12 người.\r\nChúng tôi có trang bị sẵn bếp đầy đủ dụng cụ nấu nướng và sân vườn để các bạn thoả sức nấu ăn, tự chuẩn bị bữa sáng và tổ chức các bữa tiệc gia đình ấm áp. Có bãi đậu xe cho xe 16 chổ và dịch vụ cho thuê xe máy. Bạn chỉ mất 5 phút đi xe máy là đến chợ Đà Lạt.', 1200000, 'Đà Lạt', 0, 0),
('DL5', 'Mai Villa Dalat', 'hs1.png', '6235aba3921231ktzofzqe9x2yqqnqh5i4bs- - copy.jpg,6235aba39244a2nyxzril9acgh2wxtcdifwir.jpg,6235aba39279335.jpg', 'Mai Villa Dalat cho bạn không gian yên tĩnh, trong lành, đậm chất Đà Lạt với khung cảnh thơ mộng nhìn ra toàn cảnh thung lũng và phố núi. Cách trung tâm thành phố chỉ 1.5km, bạn có thể dễ dàng di chuyển đến những địa điểm ăn uống, vui chơi nổi tiếng xung quanh như Thung Lũng Tình Yêu, Đồi Mộng Mơ, Đại học Đà Lạt, chùa Thiền Viện Vạn Hạnh...\r\nNội thất mới hoàn toàn, sạch sẽ: có phòng khách, bếp và tiện nghi đầy đủ sẽ giúp bạn có một tinh thần thoải mái nhất trong suốt chuyến ghé thăm. ', 1600000, 'Đà Lạt', 1, 0),
('DL6', 'LE ANH HOUSE', 'la.png', '6235abd3e0d7ela1.png,6235abd3e1114la2.png', 'Căn nhà nằm trên trục đường Xô Viết Nghệ Tĩnh, trục đường tới các điểm du lịch nổi tiếng của Đà Lạt. Khu đông dân cư. Bạn có thể đi bộ vài bước chân là tới các quán ăn, caphe của người địa phương, thưởng thức các món ăn với giá rẻ. Ngôi nhà cách chợ đêm Đà Lạt 4 km (khoảng 10p đi xe)\r\n[ DA LAT ] - LE ANH HOUSE\r\nNgôi nhà này được xây dựng bởi Lê Anh, một người bạn. Tôi thường thích gọi nơi này là “ Ngôi nhà cổ tích”, bởi nó gợi nhớ những giấc mơ thời thơ bé, làm tôi nhớ về những lần tôi khóc chuy', 900000, 'Đà Lạt', 1, 0),
('DL7', 'M&P GARDEN VILLA', 'hs-dl2.png', '6235abf8192fbhs-dl3.png,6235abf81961dhs-dl6.png,6235abf819932hs-dn.png', 'Biệt thự nhà vườn M&P GARDEN VILLA thiết kế đẹp và ấn tượng, 600m2 rộng với 3 phòng lớn phù hợp với các nhóm khách gia đình, thiết kế phòng thân thiện cho cả người già và trẻ nhỏ.\r\nCung cấp mọi tiện nghi cho khách ở: Bãi đậu ô tô, wifi, máy nước nóng, vật dụng phòng tắm, phòng bếp đầy đủ vật dụng, hỗ trợ tiệc BBQ ngoài vườn nếu khách có nhu cầu...\r\nChủ nhà thân thiện và hiếu khách, sẵn sàng hỗ trợ 24/7 khi khách cần\r\nCho thuê xe máy ngay tại chỗ với giá tốt', 750000, 'Đà Lạt', 0, 1),
('DL8', 'DaLAF House', 'hs-dl.png', '6235ac310a149dl1.png,6235ac310a369hs-dl7.png,6235ac310a5f3hs-dn.png', '-Nhà nằm trên đường Phan Đình Phụng (đường chính ở Đà Lạt).\r\n- Bạn sẽ có mọi thứ bạn có ở nhà như TV, tủ lạnh, bếp ga, nước miễn phí, ...\r\n- Bên cạnh đó, gần nhà là chợ hải sản lớn nhất nên bạn có thể mua cá tươi, tôm hùm, cua, ...\r\n- Nếu bạn đi bằng ô tô thì nhà có bãi đậu xe.\r\n- Và tầng cao nhất của ngôi nhà, bạn có thể tổ chức tiệc BBQ, ... cùng gia đình và ngắm thị trấn.\r\nTôi sẽ cung cấp cho bạn thông tin tốt nhất về Đà Lạt và hỗ trợ chuyến đi của bạn khi cần.', 1580000, 'Đà Lạt', 1, 0),
('DL9', 'Xóm Homestay', 'hs-dl1.png', '6235ac54cf894hs9.png,6235ac54cfbb6hs10.png,6235ac54d0047hs11.png', 'Xóm Homestay xa trung tâm nhưng Xóm lại mang trong mình một khung cảnh khá lãng mạn và đầy cỏ cây hoa lá. Chúng tôi luôn muốn mang đến cho bạn những điều tuyệt vời nhất khi đến với Xóm.\r\nXóm gây ấn tượng mạnh với tất cả những ai từng đặt chân đến đây. Với một không gian nhiều màu sắc, view vô cùng đẹp khi nhìn ra khoảng không gian tuyệt vời phía xa. Bạn sẽ tha hồ sống ảo khi đến ở đây, tất cả đều được sắp xếp để mang lại cho bạn những trải nghiệm tuyệt vời.', 680000, 'Đà Lạt', 0, 0),
('DN1', 'Neo-Classic condo by the sea', '2nYXZRIL9aCgh2WxTcDIFWIR.jpg', '6235ac72839c5_armkae-umuv0ukxo7ykbbka.jpg,6235ac7283d131ktzofzqe9x2yqqnqh5i4bs- - copy.jpg,6235ac7283fa98ere5m4_ic3hve9g1vj0cttr.jpg', '', 1750000, 'Đà Lạt', 0, 1),
('DN10', 'MyjolyHome', 'sg3.png', 'sg2.png', 'Hãy đến với MyjolyHome Muong Thanh Da Nang Luxury Apartment , căn hộ sát biển để tận hưởng kỳ nghĩ của mình cả nhà nhé !\r\nỞ đây bạn sẽ được hòa mình cùng nắng vàng biển xanh_tận hưởng trọn vẹn phố của dòng sông và những cây cầu_ chiêm ngưỡng từng đợt sóng xô.. Xa xa những dãy núi ngút ngàn còn hơn cổ tích', 1600000, 'Đà Nẵng', 0, 0),
('DN11', 'One&Only', 'td2.png', 'td1.png', 'One & Only Apartment cung cấp chỗ nghỉ với Wifi và chỗ đậu xe riêng trong nhà miễn phí. Lấy cảm hứng từ thiên nhiên, đến với One & Only Apartment, du khách sẽ tận hưởng trọn vẹn không gian thoáng đãng, tràn ngập cây xanh.\r\nMỗi căn hộ đều có ban công rộng, thoáng, đón gió và ánh sáng tự nhiên. Với đầy đủ tiện ích, mỗi căn hộ đều trang bị bếp, phòng khách có sofa, khu vực làm việc, phòng tắm riêng, tủ lạnh, ti vi 40 inch, máy giặt, bình đun siêu tốc, máy sấy tóc,…. Để thêm phần thuận tiện cho du k', 1265000, 'Đà Nẵng', 0, 0),
('DN2', 'Kaia Residence - Private', '7ZJcZiSIW8JQwd_bqe9gc_ks.jpg', 'hs-dn12.png', 'Nơi những câu chuyện của chúng tôi gặp bạn của bạn Nơi mà bạn cảm thấy như ở nhà. Nơi mà bạn cảm thấy thư giãn. Nơi mà bạn cảm thấy thanh lịch. Ẩn mình trong một thung lũng yên tĩnh ở trung tâm Đà Nẵng, ẩn sau một khu vườn yên tĩnh thuần khiết, The Kaia Residence, một nơi lưu trú được thiết kế cá nhân hóa cao chỉ với 10 căn hộ, là một lời nhắc nhở không ngừng về vẻ đẹp của kiến ​​trúc hiện đại thế kỷ 20. Trọng tâm chính của thiết kế là bảo tồn tất cả các kiến ​​trúc ban đầu của biệt thự Gra	', 890000, 'Đà Nẵng', 0, 0),
('DN3', 'Yellow Submarine', 'dai-dien.png', 'GBPPJnGXNPaMrcgeokpPgcu1.jpg', 'Như mọi buổi sáng, câu chuyện của tôi mở ra với tiếng chim hót bên ngoài ô cửa sổ. Chợt nhớ hôm nay là thứ bảy, tôi thấy nhẹ nhõm hơn. Trong âm thanh chậm rãi của bản nhạc R&B vang lên từ chiếc loa bluetooth đã được kết nối sẵn, tôi đã tỉnh táo và sắp xếp lại chăn gối ngăn nắp. Đắm mình trong những tia nước ấm áp, tôi cảm thấy tinh thần được phục hồi để chuẩn bị cho một ngày mới.\r\nKhông gian chung bao gồm:\r\n+ Tận hưởng những phút giây thoải mái, trò chuyện cùng bạn bè ở không gian bếp chung dưới', 1750000, 'Đà Nẵng', 0, 1),
('DN4', 'The Nắng Suites', '1536423973_IMG_0026.jpg', '6235ad092e3f1ht (4).jpg,6235ad092e72cht (10).jpg,6235ad092e955ie4zqyzvsted_b0g_8pxeyk-.jpg,6235ad092ec1fimg_2689.jpg', 'So với việc ở khách sạn, The Nắng Suites có trải nghiệm rất riêng. Đây không chỉ là nơi để lưu trú, mà bạn có thể thong thả nghỉ ngơi và có những cuộc gặp gỡ thú vị. Nơi này được tạo ra để những câu chuyện được kể và chia sẻ.\r\nNhững căn phòng khách sạn có thiết kế như rập khuôn có làm bạn chán? Hãy tạm quên chúng đi. Cho dù đang tìm một nơi cho kỳ nghỉ của mình hay chỉ để nán lại vài hôm, bạn cần một chỗ nghỉ ngơi thoải mái, đủ khác biệt và riêng tư. Đây chính là nơi để bạn ngủ trong yên bình và', 2500000, 'Đà Nẵng', 0, 1),
('DN5', 'Amia Cosiana', '3d6a191b.jpg', '2nYXZRIL9aCgh2WxTcDIFWIR.jpg', 'Amia Cosiana luôn đáp ứng được cho bạn bởi sự yên tĩnh, trong lành của không gian xung quanh Amia. Bên cạnh không gian tuyệt vời của Amia, Amia còn được trang bị giường đôi cỡ lớn từ Queen size và King size với tiện nghi đầy đủ như: Tủ lạnh, TV, ấm đun nước siêu tốc, truyền hình cáp 72 kênh, điện thoại liên lạc nội bộ và nhà tắm với không gian rộng rãi.\r\nĐiều mà bạn ngạc nhiên khi đến Amia là luôn có cơ hội mở rộng mối quan hệ, kết bạn với nhiều bạn bè. Vì Amia có không gian thiết kế cho các hoạ', 1200000, 'Đà Nẵng', 1, 1),
('DN6', 'AURA Apartment', 'hs2.png', '6235acc276e97hs.png,6235acc2771e1hs7.png,6235acc2774cdhs-dn4.png', '• Cà phê, trà, than cốc, nước tinh khiết, mì miễn phí\r\n• Nhận sân bay MIỄN PHÍ để đặt phòng từ 4 đêm\r\n• Phòng 2 giường, nội / ngoại thất 5 sao! Khu trung tâm chính: Trung tâm Đà Nẵng\r\n• Wifi tốc độ cao, TV thông minh Internet 55 inch\r\n• Nội thất hiện đại cho căn hộ riêng. Khu phức hợp cá nhân với tầm nhìn ngoạn mục ra toàn thành phố.\r\n• Tận hưởng kỳ nghỉ của bạn trong các chung cư cao cấp nhất của thành phố.', 1300000, 'Đà Nẵng', 1, 0),
('DN7', 'Suit family apartment', '43qJ3qWERGqAJGqO-7wGGhRo.jpg', '6235ace14e7e828.jpg,6235ace14eaea1536423951_img_9690.jpg,6235ace14eecddl2.png', 'Căn hộ cao cấp dành cho các gia đình· 65 m2 gồm 2 phòng tắm ·2 giường ·2 phòng ngủ ·4 khách (tối đa 5 khách)\r\nĐược thiết kế theo phong cách Nhật Bản - Hiện đại và sang trọng với đầy đủ tiện nghi cao cấp.\r\nNằm ngay ở vị trí tuyệt vời nhất, gần bãi biển đẹp Mỹ Khê và gần các điểm tham quan như Công Viên Châu Á, Vòng quay mặt trời, Nhà Đảo ngược, Núi Ngũ hành Sơn, nhà thờ Con Gà, cầu Rồng phun lửa, Sông Hàn ...\r\nBạn mất tầm 20 phút để xem được bồng lai tiên cảnh như Bà Nà Hill, Phố cổ Hội An, Núi T', 850000, 'Đà Nẵng', 1, 0),
('DN8', 'Kaia Residence', '_u6_2mlErCNgj4eOwf2QAl6D.jpg', '6235a0566fa882tr6g7u6ua140zr2ni4yujdg.png,6235a0566fd1e8ere5m4_ic3hve9g1vj0cttr.jpg,6235a0567299428.jpg', 'Ẩn mình trong một thung lũng yên tĩnh ở trung tâm Đà Nẵng, ẩn sau một khu vườn yên tĩnh thuần khiết, The Kaia Residence, một nơi lưu trú được thiết kế cá nhân hóa cao chỉ với 10 căn hộ, là một lời nhắc nhở không ngừng về vẻ đẹp của kiến ​​trúc hiện đại thế kỷ 20.\r\n\r\nTrọng tâm chính của thiết kế là bảo tồn tất cả các kiến ​​trúc ban đầu của biệt thự Grandpa của chúng tôi được xây dựng vào những năm 1960, bắt đầu từ sân thượng đến cửa sổ sắt và tất cả các cây ăn quả trong vườn, mang lại cảm giác h', 1370000, 'Đà Nẵng', 0, 0),
('DN9', 'Sunflower', 'hs-dn5.png', 'hs-dn11.png', 'Sunflower Apartment (hỗ trợ 24/7) sẽ mang đến trải nghiệm tốt nhất cho bạn khi du lịch Đà Nẵng với căn hộ cao cấp 40m2 dành cho gia đình trẻ / bạn bè, được trang bị các tiện nghi thiết yếu, WIFI & AC. Vị trí của chúng tôi là SIÊU, chỉ 3 phút đi bộ đến MY KHE BEACH , với nhiều quán bar, quán cà phê và nhà hàng gần đó.\r\nCăn hộ này có một bãi biển trực tiếp và vị trí tốt nhất ở thành phố Đà Nẵng bởi vì nó chỉ cách một trong những bãi biển Mỹ Khê đẹp nhất Đà Nẵng 100 mét, mang đến cho bạn một khung ', 595000, 'Đà Nẵng', 0, 0),
('HL1', 'Pi house Hạ Long', 'hs-hl2.png', '6235ad4e74e7bhs-hl3.png,6235ad4e752cdhs-hl4.png', 'Pi House Hạ Long với 2 phòng ngủ xinh xắn, nằm tại tầng cao của khu chung cư cao cấp Greenbay Premium nằm trên mặt đường bao biển, giữa Đảo Tuần Châu và Công viên Sun World. Từ đó, bạn sẽ dễ dàng di chuyển đến bến tàu đi thăm Vịnh Hạ Long (nằm trên đảo Tuần Châu) cũng như đi ra bãi tắm và Công viên Sun World Hạ Long Park (trung tâm Bãi Cháy)..\r\nVới diện tích 68m2, nội thất tiện nghi và hiện đại. Pi House Hạ Long là nơi nghỉ dưỡng lý tưởng cho các gia đình và nhóm bạn mỗi dịp ghé Hạ Long thăm qua', 900000, 'Hạ Long', 1, 0),
('HL2', 'Newstar Ha Long', 'hs-hl5.png', 'KgzMaj6vYT0R-eFt_Gv5TAkm.jpg', '- Tầng 1 là công ty theo mô hình Shop House của Vinhomes nên sẽ là lối vào cửa chung. Khách sử dụng sân vườn nhỏ cuối tầng 1, tầng 2 đến tầng 4\r\n- 01 phòng khách rộng tràn ngập ánh sáng và cây xanh. Sau mỗi buổi sáng thức dậy hay mỗi buổi chiều muộn thưởng thức ly trà ấm, đọc vài trang sách để hòa mình vào không gian yên bình.\r\n- Shop House được bố trí 4 phòng ngủ tại tầng 3 và tầng 4, có sức chứa 17 du khách. Các phòng đều được trang bị đầy đủ tiện ích cơ bản.\r\n- 01 căn bếp được trang bị đầy đủ', 650000, 'Hạ Long', 0, 0),
('HL3', 'Green Bay Premium', 'ht1 (1).jpg', 'hs11.png', 'Chỗ ở của chúng tôi nằm ở tầng 20, thuộc chung cư Green Bay Premium. Đây là chung cư cao cấp nhất tại Hạ Long hiện nay nằm trong quần thể khu đô thị mới Việt Nam ngay trung tâm thành phố Hạ Long.\r\nChỗ ở của chúng tôi có ban công hướng Đông Nam nên hưởng trọn tầm nhìn Vịnh Hạ Long và gió biển. Nằm trong quần thể gồm tiện ích chung như bể bơi, phòng tập, siêu thị, quán cafe, quán ăn v.v...Cách trung tâm vui chơi giải trí từ 3-10 phút đi xe.', 1200000, 'Hạ Long', 0, 0),
('HL4', 'May house', 'hs2.png', '', 'May house ra đời vào tháng Năm với nhiều tâm huyết của chủ nhà. Với mong muốn mang đến những trải nghiệm tuyệt vời nhất cho quý khách, May house được trang bị đầy đủ tiện nghi với internet tốc độ cao, free wifi, smart tivi, sofa bed, đệm dự phòng, giường ngủ lớn, bàn làm việc. Gian bếp cũng được chăm chút tỉ mỉ với bếp từ, lò vi sóng có chế độ nướng, tủ lạnh, nồi cơm điện, ấm siêu tốc, dụng cụ nấu nướng, máy giặt... hy vọng mang đến cho quý khách những bữa ăn nhiều cảm hứng và sáng tạo.', 590000, 'Hạ Long', 0, 0),
('HL5', 'Ha Long view', 'hs-pt2.png', 'hs-hn2.png', 'Thay vì dành thời gian tìm kiếm phòng, khách sạn mà bạ﻿n chỉ đến ngủ, nghỉ ngơi một chút. Hãy liên hệ với New Life để tận hưởng bầu không khí ấm áp của gia đình, quen thuộc và thoải mái.\r\nĐược trang bị đầy đủ các trang thiết bị tiện nghi, hiện đại bậc nhất như: wifi miễn phí, ti vi thông minh, máy lạnh, tủ lạnh, máy giặt,...Không gian bếp nối liền với phòng ngủ đầy đủ đồ dùng nấu nướng, gia vị để bạn có thể nấu ăn, tổ chức tiệc tùng với bạn bè và người thân.', 1500000, 'Hạ Long', 0, 0),
('HL6', 'Harbor House', 'hs-vt7.png', 'hs-vt6.png', 'Căn shop house hướng biển, thuận tiện đi lại, gần các quán cafe, trà sữa, siêu thị và chợ hải sản to nhất Hạ Long.\r\nTrong căn có đầy đủ đồ dùng dụng cụ để nấu ăn hoặc làm BBQ.\r\nNằm trong khu đô thị mới hiện đại, sang trọng Vinhomes Dragon Bay\r\nPhong cách trang trí hiện đại, trẻ trung nhưng không kém phần thân thiện.\r\nChúng tôi là những người bản địa vô cùng thân thiện và thoải mái. Chính vì vậy đừng ngại ngần mà chia sẻ với chúng tôi những điều bạn đang thắc mắc hoặc những khó khăn bạn gặp phải ', 750000, 'Hạ Long', 0, 0),
('HN1', 'The Garden', '3d6a191b.jpg', '28.jpg', '·Cơ sở vật chất phòng tắm và nhà bếp tiện nghi đến từ các nhãn hàng nổi tiếng như: Koller, Samsung, Electrolux...\r\n·Căn hộ đều có tiện nghi sang trọng, điện thoại, kênh truyền hình cáp, TV màn hình phẳng, máy lạnh, khu vực phòng khách, máy giặt, tủ quần áo, giá treo quần áo, máy sấy tóc, phòng tắm, dép, vòi hoa sen, ghế sofa, sàn gỗ, tủ lạnh, lò vi sóng, đồ dùng nhà bếp, bàn ăn, khăn tắm, ga trải giường.', 1300000, 'Hà Nội', 0, 0),
('HN2', 'The Galaxy Home', '297945313.jpg', '2TR6G7u6ua140zR2NI4yUJdG.png', 'Tóm tắt về The Galaxy Home Apartment\r\n·Vị trí rất đẹp và thuận tiện ở quận Cầu Giấy\r\n·Gần công viên Cầu Giấy, Lotteria, trung tâm mua sắm với môi trường ngoài trời yên tĩnh\r\n·Bạn hoàn toàn có thể trải nghiệm những dịch vụ cao cấp tại đây\r\nVề không gian\r\n·Căn hộ được thiết kế với nhiều lựa chọn bố trí hợp lý và được trang bị theo tiêu chuẩn cao cấp 4 sao với ban công riêng và cảnh quan đẹp\r\n·Có nhiều dịch vụ tại chỗ khác nhau như giặt ủi, dịch vụ vệ sinh, Wi-Fi miễn phí tốc độ cao, an ninh 24/7\r\n', 850000, 'Hà Nội', 0, 0),
('HN3', 'Hanoi Home 3', '63b8451f.jpg', '2nYXZRIL9aCgh2WxTcDIFWIR.jpg', 'Căn hộ nằm ở một vị trí lý tưởng, nơi này là một con phố đông đúc của cộng đồng nước ngoài. Có rất nhiều nhà hàng, quán bar, quán cà phê, phòng tập thể dục, tất cả đều được làm cho người nước ngoài.\r\nKhu vực xung quanh có nhiều cảnh quan đẹp như Hồ Kiếm, Hồ Trúc Bạch, Chùa Quán Thành, Sông Hồng, Làng hoa Quang An, Làng hoa Nhật Tân và đặc biệt là Hồ Tây rộng lớn, rộng lớn, nơi bạn có thể đi xe đạp ( miễn phí) quanh Hồ và uống cà phê dọc đường.', 790000, 'Hà Nội', 1, 0),
('HN4', 'JOI homestay', 'hs-pt5.png', 'hs-hn4.png', 'Vị trí không thể tốt hơn ! Cách chợ đêm cuối tuần 2 phút đi bộ , Chợ Đồng Xuân chỉ 5 phút , hồ Hoàn Kiếm 10 phút đi bộ\r\nNgoài ra có rất nhiều hàng quán xung quanh. Nổi tiếng bạn có thể tìm thấy cafe trứng, cafe cốt dừa , các loại nước ép ngay trước cửa nhà. Cửa hàng tiện lợi chỉ cách 100m mở 24h . Các món ngon của Hà Nội cũng tập trung nhiều xung quanh khu vực này với vài bước chân thôi ( Bánh Cuốn, Phở, Bún Thang, Bún riêu , Bún chả ect ...)\r\nPhòng tắm rộng nằm ngay trong phòng với vách tắm ngă', 650000, 'Hà Nội', 1, 0),
('HN5', 'Kora House', 'hs-hl4.png', 'hs-hl1.png', 'Tọa lạc ở ngay cửa ngõ khu vực hành chính của thủ đô, đối diện Trung tâm hội nghị quốc gia Mỹ Đình. Vinhomes Greenbay được ví như Vịnh xanh trong lòng phố để mỗi ngày quý khách được sống trong môi trường sinh thái tràn ngập sắc xanh. Cùng với hệ thống tiện ích đẳng cấp, dịch vụ tiêu chuẩn 5 sao và cảm nhận cuộc sống sôi động giữa trung tâm nhộn nhịp.\r\nChúng tôi rất vinh dự được chào đón bạn đến căn hộ nhỏ nhưng ấm cúng của chúng tôi, với kích thước trung bình khoảng 30 m2. Căn hộ này được thiết ', 1990000, 'Hà Nội', 0, 1),
('HN6', 'AimeeHomestay', 'me76MDAokgqLzlRXTxyAXpRM.jpg', 'room_28959_562_1564825613.jpg', 'Xin chào! Chào bạn đã đến với AimeeHomestay dành riêng cho:\r\n+ Các cặp đôi đi du lịch ưa thích không gian \"cá tính, hiện đại, lãng mạng, ấm cúng\"\r\n+ Những người đi công tác xa muốn được ở trong không gian \"tiện nghi, rộng rãi, thân thuộc như ở nhà\"\r\nAimeeHomestay của chúng tôi bao gồm:\r\n- 5 phòng có giường đôi mềm mại thoải mái tạo cảm giác thư giãn sau những ồn ào của Phố thị\r\n- Điều hoà 2 chiều\r\n- Phòng tắm rộng rãi, sạch sẽ, hiện đại, tiện nghi gồm: 2 khăn tắm, sữa tắm, dầu gội, bàn chải, kem', 1400000, 'Hà Nội', 0, 0),
('NT1', '999 CONDOTEL', 'vin (3).jpg', 'room_18151_2_1561637245.jpg', '999 Condotel toạ lạc tại khu bãi biển Phạm Văn Đồng là Căn hộ cao cấp có tầm nhìn ra biển bao gồm 2 phòng ngủ, 2 phòng tắm, ban công , phòng khách, một gian bếp đầy đủ tiện nghi để nấu nướng...Tất cả căn hộ đều trang bị Smart TV màn hình phẳng, Wifi miễn phí, bếp từ, tủ lạnh cỡ lớn, lò vi sóng, máy giặt, máy sấy, bàn ủi và đầy đủ thiết bị vệ sinh cá nhân...\r\n- Chỗ nghỉ cách bờ biển chỉ 100m, địa danh Hòn Chồng 500m, Tháp Bà Ponagar 1,3km, tắm bùn i-resort 2km, chợ đầm 2,4km..', 4300000, 'Nha Trang', 0, 1),
('NT2', 'Diamond Villa', 'ht (15).jpg', 'qP14baRCU8djhCwMnyB3qmMp.jpg', 'Toàn bộ ngôi nhà có tổng cộng 5 phòng ngủ với 3 giường lớn King size (1m8 x 2m) và 2 giường đôi (1m6 x 2m)\r\nTầng dưới gồm phòng khách, bếp lớn, khu vực ăn uống và 1 phòng ngủ.\r\nTầng trên là 4 phòng ngủ trong đó 2 phòng ngủ có ban công\r\nBên ngoài nhà là khu vực nướng BBQ riêng và khu bàn trà cà phê\r\nToàn bộ 5 phòng ngủ đều có phòng tắm riêng và 1 toilet riêng tại khu vực phòng khách.\r\nTrang bị đầy đủ khăn tắm, khăn mặt, bàn chải đánh răng, sữa tắm, dầu gội, tăm bông.....\r\nKhu vực bếp đầy đủ tiện ', 1500000, 'Nha Trang', 1, 0),
('NT3', 'APARTMENT THIÊN KIM 5', 'la2.png', 'sg.png', 'Các hạng phòng của APARTMENT PREMIUM THIÊN KIM đều có không gian thoáng rộng, căn hộ thượng hạng với một, hai phòng ngủ có diện tích tương ứng 68 và 78 mét vuông. Tất cả căn hộ thượng hạng đều có tầm nhìn không giới hạn ra thành phố hoặc bãi biển Trần Phú để khách thoả thích ngắm nhìn những kiệt tác của mẹ thiên nhiên.\r\nSang trọng và hiện đại, tất cả các căn hộ thượng hạng đều có phòng ngủ lớn, phòng tắm với buồng tắm đứng riêng biệt, phòng khách rộng rãi với sofa có thể trở thành giường ngủ. Nh', 3580000, 'Nha Trang', 0, 0),
('NT4', 'THECOSTA apartment', 'room_26438_15_1560800963.jpg', 'room_20838_24_1569818697.jpg', 'Queenbeach là hệ thống căn hộ nằm trong tòa nhà the costa 32 - 34 trần phú , là hệ thống căn hộ được đánh giá cao cấp nhất thành phố nha trang về tiện ích , tiện ích bao gồm : hồ bơi + phòng Gym tầng 02 , hầm xe ô tô và bãi biển riêng có giường tắm nắng và khăn tắm , nhân viên phục vụ từ 6 giời sáng đến 17 giời chiều cho tất cả du khách khi đăng ký lưu trú tại hệ thống căn hộ , hoàn toàn miễn phí .', 1300000, 'Nha Trang', 0, 0),
('NT5', 'AQUA Seaview Hotel', 'lqq0oJ0Lg_ye3ZCyKpgHldD-.jpg', 'ht (4).jpg', 'Aqua Superior room có diện tích 15m2. Gồm 1 phòng ngủ và 1 phòng tắm. Được chúng tôi trang bị đầy đủ các thiết bị tiện nghi, hiện đại bậc nhất, để bạn có thể nghỉ ngơi thật sự thoải mái như ở nhà mình vậy.\r\nPhòng ngủ với giường king, chăn, ga, gối, đệm, truyền hình cáp, ti vi màn hình phẳng, máy điều hòa cũng như tủ quần áo. Với 2 cửa sổ kính lớn giúp căn phòng luôn ngập tràn ánh sáng có view nhìn trực tiếp ra biển Nha Trang. Phòng tắm riêng biệt, ngay cạnh phòng ngủ đi kèm tiện nghi như vòi sen', 690000, 'Nha Trang', 1, 0),
('PT1', 'CHING-CHOI MUINE', 'hs7.png', 'GBPPJnGXNPaMrcgeokpPgcu1.jpg', 'CHING-CHOI MUINE là căn hộ tọa lạc tại vị trí thuận lợi đối diện Làng chài Mũi Né đường Huỳnh Thúc Kháng có diện tích 400m2 rộng rãi. Chúng tôi mang đến cho các bạn một phong cách thiết kế hiện đại với 3 phòng ngủ & 3 giường\r\nDiện tích sân vườn rộng rãi, thông thoáng mát mẻ\r\nWifi, điều hòa, internet TV, nước nóng NLMT, máy sấy, dầu gội, sữa tắm, khăn, bàn chải kem đánh răng, giấy vệ sinh', 800000, 'Phan Thiết', 0, 0),
('PT2', 'Janhouse Luxury', '37343067.jpg', 'HntqzNP9Gz1cDHTiXYo84sCD.jpg', 'Janhouse có diện tích 130m2. Gồm 1 phòng khách, 2 phòng ngủ và 2 phòng tắm. Được chúng tôi trang bị đầy đủ các thiết bị tiện nghi, hiện đại bậc nhất với mong muốn bạn được nghỉ ngơi thật thoải mái sau chặng đường dài đến Phan Thiết và có những kỉ niệm đáng nhớ tại đây.\r\nCác phòng tại Janhouse đều có ban công rộng rãi, sạch sẽ và có view nhìn ra biển. Chúng tôi còn chuẩn bị sẵn rèm cửa để bạn sử dụng nếu không muốn quá sáng hoặc muốn sự kín đáo, riêng tư.', 950000, 'Phan Thiết', 0, 0),
('PT4', 'Homestay BONO', 'ceAHpjQXvytF-juYjaSWHTN9.jpg', 'hs-hl9.png', 'Là tiệm trà sữa, cà phê,homestay nhỏ xinh nằm cạnh làng chài Mũi Né. Homestay BONO Coffee & Tea được gầy dựng bằng cả tâm huyết lẫn sự yêu thương của mẹ bé Bơ & Nơ.\r\n- Tại BONO quý khách sẽ được nghỉ ngơi trong những căn phòng sạch sẽ, dễ thương, an toàn và đầy đủ tiện nghi\r\n- Ngoài ra quý khách còn có thể dễ dàng ngắm cảnh biển trực tiếp và nấu nướng ăn uống ngay tại sân sau của homestay', 600000, 'Phan Thiết', 0, 0),
('PT5', 'Ocean vista', 'ks (7).jpg', '6235ad8307514nycaarjcoym0vup4v90nnry7.jpg,6235ad8307793phrbpvc-txc2x1frnihzegfv.jpg,6235ad8307acepvgmuhwxdzawzn1z5c06od-h.jpg', 'Căn hộ nghĩ dưỡng Ocean vista của chúng tôi nằm trong khu quần thể Sealink Resort & Golf. Khu nghĩ dưỡng được toạ lạc tại 1 vị trí tuyệt đẹp tại thiên đường resort của cả nước. Với hệ thống an ninh 2 lớp được bảo đảm an toàn 24/24. Mất 3 phút bạn có thể thả mình trong làn nước biển xanh biếc cùng những gơn sóng li ti làm tan đi vẻ mệt mỏi hàng ngày.\r\nCòn gì tuyệt vời hơn khi mỗi sáng bạn mua những con tôm, con cá , con mực từ những người ngư dân gần đó và chế biến chúng trên chính căn bếp trong ', 1800000, 'Phan Thiết', 0, 0),
('PT6', 'Dream Homestay', 'Image from iOS (10).jpg', 'IMG_2705.jpg', 'Dream Homestay Phan Thiết - Phong cách Tây Âu không kém phần hiện đại mang đến cảm giác ở vô cùng thoải mái, màu sắc căn hộ tạo nên sự khác biệt, tươi mới. Dream luôn nỗ lực tạo nên các góc cho chị em \"sống ảo\" chất lượng nhất.\r\nỞ Dream, Chúng mình dùng sự chân thành, tử tế và thương yêu để tiếp đãi bạn bè mình về chơi, cố gắng tạo cho bạn không gian sống thoải mái nhất, vui chơi hết nấc, giấc ngủ ngon nhất <3', 950000, 'Phan Thiết', 0, 0),
('PT7', 'Ocean Vista', 'hs-dn12.png', '2TR6G7u6ua140zR2NI4yUJdG.png', 'Căn hộ nghỉ dưỡng 1 phòng ngủ tọa lạc trong khuôn viên khu nghỉ dưỡng Sealinks với bãi tắm đẳng cấp, riêng biệt. Đầy đủ tiện ích nội khu 5 sao. Khuôn viên căn hộ đầy đủ tiện nghi. Gần các địa điểm du lịch nổi tiếng nhất Phan Thiết - Bình Thuận.Chúng tôi dành tất cả những gì tuyệt vời nhất cho căn hộ xinh đẹp này để chờ đến ngày được chào đón bạn. Thiết kế chủ đạo với tông màu vàng-trắng khiến cho ngôi nhà thật hiện đại, sang trọng nhưng cũng không kém phần ấm cúng mang đến cho bạn cảm giác như', 1000000, 'Phan Thiết', 0, 0),
('PT8', 'Mui Ne Connect', 'hs-hn2.png', 'hs-hl6.png', 'Là người yêu thích du nên tôi mong muốn xây dựng một nơi lưu trú gần gửi và thân thuộc với mọi người ,tất cả các phòng đều được thiết kế tối giản và tối đa hóa không gian sử dụng giúp mang lại cảm giác ấm áp, thoải mái , mà vẫn có thể giúp các bạn tiết kiệm chi phí thuê phòng .\r\nNằm gần khu dân cư yên tĩnh yên bình mỗi buổi sáng\r\n- Nhà mình cách biển 200m\r\n- Chợ Mũi Né 700m\r\n- Đồi cát bay (đồi cát đỏ) 1km\r\n- Làng chài 2km', 480000, 'Phan Thiết', 0, 0),
('SG1', 'The Royal Homies', 'hs-hn1.png', '2TR6G7u6ua140zR2NI4yUJdG.png', 'The Royal Homies - Phú Mỹ Hưng tọa lạc tại Nội khu Hưng Gia 1, phường Tân Phong, quận 7. Khu dân dư đông đúc, an ninh thắt chặt bởi đội ngủ bảo vệ Phú Mỹ Hưng. Trung tâm hành chính và tập trung nhiều khu vui chơi giải trí, nhà hàng, quán ăn, quán cà phê, siêu thị, chợ, trung tâm mua sắm, thương mại, cách Trung tâm Hội nghị và Triển lãm Sài Gòn 1,3 km. Nơi lưu trú có tiện nghi nhà hàng phục vụ món ăn và thức uống có trong thực đơn, quầy lễ tân làm việc 24 giờ và dịch vụ phòng đến 15 giờ chiều mỗi', 899000, 'Hồ Chí Minh', 0, 0),
('SG2', 'Pura Vida', 'hs6.png', 'hs-dn14.png', 'Pura Vida Studio 1 nằm ở tầng 2 của một chung cư cũ ngay trung tâm Sài Gòn, con đường mua sắm sầm uất Nguyễn Trãi, một trong những vòng xoay trung tâm nhất SG. Bạn sẽ không chỉ khám phá hương vị của Sài Gòn địa phương thực sự mà còn được trải nghiệm trong ngôi nhà trang trí tỉ mỉ, dành cho bạn nhiều khoảnh khắc thoải mái và thư giãn trong suốt thời gian ở thành phố sầm uất này.\r\n5 phút từ chợ Bến Thành & tòa tháp Bitexco mang tính biểu tượng. Căn hộ ấm cúng và rộng rãi này cung cấp mọi thứ bạn c', 580000, 'Hồ Chí Minh', 0, 0),
('SG3', 'Sunwah Golden', 'a2sKvcUvCnzLafzzKgnoRvfh.jpg', '18.jpg', 'Căn hộ của chúng tôi nằm bên bờ sông Sài Gòn, khu căn hộ nằm cạnh Bitexco Tower & Landmark 81- Tòa nhà cao nhất Việt Nam. Tầm nhìn rộng ra sông Sài Gòn và cầu Sài Gòn, cầu Thủ Thiêm từ tất cả các phòng của căn hộ. Đây là khu đẳng cấp với vị trí trung tâm nổi bật, dịch vụ tiện ích như Gym, hồ bơi; cung cấp đầy đủ các tiện nghi phòng như wifi, tivi màn hình phẳng, điều hoà, khu vực bếp nấu ăn với đầy đủ dụng cụ.', 650000, 'Hồ Chí Minh', 0, 0),
('SG5', 'The Rivergate', '2nYXZRIL9aCgh2WxTcDIFWIR.jpg', 'hs-dn9.png', 'Với lối thiết kế sang trọng, đầy ấn tượng cùng phong cách trang trí được lấy cảm hứng từ bộ sưu tập tranh ảnh, Cozrum Homes The Gallery Residence sẽ khiến bạn không khỏi ngạc nhiên và thích thú với vẻ đẹp lộng lẫy và quý phái. Ấn tượng khi bạn vừa đặt chân đến đây là cảm giác như vừa lọt vào một buổi triển lãm tranh chuyên nghiệp. Những bức tranh lớn, nhỏ với những nét vẽ nhẹ nhàng nhưng tinh tế sẽ giúp bạn cảm thấy thật thoải mái và thư giãn khi nhìn vào. The Gallery Residence không chỉ là nơi ', 950000, 'Hồ Chí Minh', 0, 0),
('SP1', 'Opal house', '1537242270_18157538_643242602543864_6155314417595760729_n.jpg', '1537242267_18157643_643242662543858_1101795120384056340_n.jpg', '- Một chút không gian \"thiên nhiên\" của nhà OPAL HOUSE - nơi các bạn có thể thả hồn vào mây trời, cuốn bay mọi stress và bức bối của công việc, áp lực...\r\n- Đến với OPAL HOUSE là luôn là nơi để bạn nạp năng lượng, sống thật tích cực và nhìn đâu cũng phải thấy cái đẹp bạn nhé\r\n- OPAL HOUSE nằm nhỏ xinh giữa bản Tả Van Dáy 1 nhưng cũng chỉ cách trung tâm thị trấn có 10km thôi nhé\r\n- Đi theo đường thung lũng Mường Hoa theo chỉ dẫn đến Tả Van, các bạn cứ đi thẳng Uỷ ban Nhân Dân xã Tả Van rồi rẽ trá', 690000, 'Sapa', 0, 0),
('SP2', 'Sa Pa-Home', '1530005623_30806195_1702565293114763_5875235570828047663_o.jpg', '1530005626_30806238_1702565849781374_5823656196587659318_o.jpg', '- Một chút không gian \"thiên nhiên\" của nhà OPAL HOUSE - nơi các bạn có thể thả hồn vào mây trời, cuốn bay mọi stress và bức bối của công việc, áp lực...\r\n- Đến với OPAL HOUSE là luôn là nơi để bạn nạp năng lượng, sống thật tích cực và nhìn đâu cũng phải thấy cái đẹp bạn nhé\r\n- OPAL HOUSE nằm nhỏ xinh giữa bản Tả Van Dáy 1 nhưng cũng chỉ cách trung tâm thị trấn có 10km thôi nhé\r\n- Đi theo đường thung lũng Mường Hoa theo chỉ dẫn đến Tả Van, các bạn cứ đi thẳng Uỷ ban Nhân Dân xã Tả Van rồi rẽ trá', 850000, 'Sapa', 1, 0),
('SP3', 'SLK Bungalow', '1530005622_34862152_485714105193760_5531211664365453312_n.jpg', '1537242267_18010370_639638532904271_1090771228104786096_n.jpg', '- SLK Bungalow cung cấp các phòng nghỉ tại thị trấn Sapa\r\n- Nơi đây có nhà hàng và khu vườn\r\n- Các phòng được trang bị sân hiên nhìn ra cảnh núi non\r\n- Tại chỗ ở của chúng tôi, mỗi phòng đều có ban công nhìn ra khu vườn\r\n- Các phòng tại SLK Sapa Hotel được trang bị TV màn hình phẳng và đồ vệ sinh cá nhân miễn phí\r\n- Bữa sáng kiểu lục địa được phục vụ hàng ngày tại chỗ ở của chúng tôi\r\n- Nhân viên nói được tiếng Anh và tiếng Việt tại quầy lễ tân', 1278000, 'Sapa', 0, 1),
('SP4', 'Tavan Family', 'hs-sp6.png', 'room_21752_6_1571573509.jpg', '- Tavan Family Homestay của chúng tôi nằm ở một vị trí đẹp\r\n- Tất cả các phòng đều có nội thất đầy phong cách và tầm nhìn tuyệt vời ra toàn khung cảnh thiên nhiên\r\n- Tavan Family Homestay - Deluxe Triple Room có diện tích 20m2, với 1 phòng ngủ rộng lớn cùng 2 giường đôi và 1 phòng tắm', 965000, 'Sapa', 0, 0),
('SP5', 'Sapa Farmer', 'hs-sp5.png', 'hs-sp9.png', 'Sapa có một nơi được gọi là thiên đường. Không cần phải đi xa, làng Tả Van luôn ẩn mình trong thung lũng Mường Hoa đang chờ bạn khám phá thiên nhiên và văn hóa của người dân bản địa ở đây.\r\nXung quanh Sapa Farmer House của chúng tôi là khung cảnh hùng vĩ của dãy Hoàng Liên Sơn, dòng suối mát lạnh uốn lượn quanh thung lũng. Ngồi trước nhà, thưởng thức một tách trà Sapa, đọc cuốn sách yêu thích của bạn trong không khí lạnh, ngắm nhìn những ngọn núi và rừng rậm, những đám mây trôi dạt trên những ru', 1100000, 'Sapa', 0, 0),
('SP6', 'Landing home', 'room_18792_4_1551762723.jpg', 'Nhrhmu2gv-BDlIW9uZ9upmi3.jpg', 'Nằm cách trạm cáp treo Fansipan Legend 13 km, landing home cung cấp chỗ nghỉ với sảnh khách chung, vườn và bếp chung. Tại đây cũng có WiFi miễn phí.\r\nTất cả các phòng nghỉ đều sử dụng phòng tắm chung với bồn tắm, máy sấy tóc cùng đồ vệ sinh cá nhân miễn phí.\r\nHomestay này phục vụ bữa sáng kiểu Á hàng ngày.', 1000000, 'Sapa', 1, 0),
('SP7', 'Dorm room', 'hs-sp9.png', 'hs-sp8.png', '- Tavan Family Homestay của chúng tôi, tôi đang ở một vị trí đẹp\r\n- Tất cả các phòng đều có nội dung toàn phong cách và tầm nhìn tuyệt đẹp ra khung cảnh thiên nhiên\r\n- Tavan Family Homestay - Phòng tập có thể có 1 phòng ngủ rộng cùng với 17 người trong phòng và 2 phòng tắm\r\n- To with the place of we, tôi sẽ hoàn toàn hòa hợp với mình với thiên nhiên và tạm quên những trang web, lo lắng của thị trường', 2100000, 'Sapa', 0, 0),
('VT1', 'Chillin House', '37343067.jpg', 'dl1.png', '- Chillin House nằm ở tầng 25, view biển tầng cao mênh mông, view tượng Chúa dang tay và view thành phố xanh ngát\r\n- Có diện tích 74m2, với 2 phòng ngủ, 2 phòng tắm, phòng bếp, phòng khách, có ban công lớn và 3 cửa sổ thoáng mát, 3 máy lạnh, phòng khách\r\n- Đồ dùng trong nhà đầy đủ có tất tần tật không thiếu thứ gì tiện nghi như ở nhà\r\n- Đi bộ 2 phút ra biển, 5 phút đến trung tâm thành phố, ngay con đường ẩm thực và trong trung tâm thành phố', 890000, 'Vũng Tàu', 0, 0),
('VT2', 'Sa House ', 'hs-hn6.png', 'hs-dn7.png', 'Căn hộ SA House gồm 2 phòng ngủ, toạ lạc tại trung tâm thành phố Vũng Tàu và ở được 4-10 người, phù hợp cho gia đình và nhóm bạn.\r\n- Cách Bãi Sau chỉ 3 phút đi bộ, xung quanh đầy đủ quán xá như: Chợ Đêm, Chợ Xóm Lưới, Hải Đăng, Gongcha, Highland,...\r\n- Không gian thoáng mát, ấm cúng dành cho cặp đôi, gia đình đều được.\r\n- Căn hộ đầy đủ thiết bị nấu nướng, 3 máy lạnh, máy giặt, tủ lạnh, bếp gas,...không thiếu gì cả.\r\n- Tư vấn, hướng dẫn nhiệt tình những địa điểm ăn uống ngon nhất Vũng Tàu', 560000, 'Vũng Tàu', 0, 0),
('VT3', 'Odwin Villa', 'hs-vt5.png', 'hs-dn10.png', 'Odwin Villa 03 cung cấp chỗ nghỉ tại thành phố Vũng Tàu gồm các tiện ích như\r\n_ Cách biển bãi sau 300m\r\n_ Nằm phía sau chợ đêm Hải sản Vũng Tàu\r\n_ Cách Siêu Thị Lotte Mart 300m\r\n- Gần Công viên thỏ trắng bãi sau Vũng Tàu\r\nBiệt thự tại đây đều có sân trong, bếp đầy đủ tiện nghi, có lò nướng BBQ ngoài trời\r\n- Hồ bơi 45m2 (từ 0,7m -> 1m6)\r\n_ Khu vực ghế ngồi đi kèm ghế sofa TV màn hình phẳng', 2900000, 'Vũng Tàu', 0, 1),
('VT4', 'GoldSea', 'ht (6).jpg', '28.jpg', 'GoldSea là một trong những chung cư được nhiều người du lịch biết đến trong những năm gần đây do nơi đây có hàng trăm căn hộ cho khách du lịch thuê ngắn hạn. Với vị trí địa lý thuận tiện cách Bãi Sau chỉ 100m và cách Bãi Trước 1500m trên trục đường Hoàng Hoa Thám, là khu vực nhộn nhịp nhất của thành phố Vũng Tàu.', 1599000, 'Vũng Tàu', 0, 0),
('VT5', 'Victory Villa', 'KgzMaj6vYT0R-eFt_Gv5TAkm.jpg', 'pvGMuHwxDZawZn1z5c06Od-h.jpg', 'Victory villa - biệt thự sân vườn - hồ bơi - có dàn karaoke\r\nVilla chuẩn sân vườn hồ bơi rộng có nhiều cây xanh\r\nVị trí cách cột cờ bãi sau vũng tàu 800m. Đi xe chỉ 3 phút ra ngay trung tâm bãi sau cột cờ\r\nDiện tích villa : 350m2 (1 trệt, 1 lầu)\r\nDiện tích hồ bơi : 4 x 10 = 40m2 hồ bơi rộng cam kết nước sạch\r\nVilla có 4 phòng ngủ, 4 wc, mỗi phòng ngủ có 1 giường đôi 1.8 met\r\nTăng cường 10 nệm gấp hàn quốc. Gối mền dự phòng đầy đủ dùng free đảm bảo đủ dùng cho nhóm 30 khách', 5600000, 'Vũng Tàu', 0, 0),
('VT6', 'Bamboo Homestay', 'room_27701_2_1563187150.jpg', 'ks (7).jpg', 'Vung Tau Bamboo Homestay - là điểm kết nối thuận tiện đến bãi tắm biển, các tụ điểm ăn uống, vui chơi ,các danh lam thắng cảnh… của thành phố. Bạn có thể tự mình khám phá thành phố xinh đẹp mà hoàn toàn không phụ thuộc vào hướng dẫn viên du lịch nào.\r\nPhù hợp cho nhóm bạn đi chơi, thích tự mình khánh phá!\r\nChỉ bằng xe máy bạn chỉ mất:\r\n- 5 phút đến bãi tắm biển ( Bãi sau)\r\n- 5 phút đến Hòn Bà, công viên Thỏ Trắng, chợ hải sản về đêm, trung tâm mua sắm Lotte...\r\n- 15 phút xe tượng chúa Kito, đồi ', 935000, 'Vũng Tàu', 0, 0),
('VT7', 'Happyhouse', 'room_24900_75_1559383075.jpg', 'vvk4VqyDV5AWzuonjKJYPIQa.jpg', 'Chào mừng bạn đến với Happyhouse 2\r\n- Chỗ ở của tôi ở gần bãi biển \"Bãi Sau\", bạn chỉ cần đi bộ đến bãi biển\r\n- Bạn cũng có thể nhìn thấy hồ, thành phố và bãi biển từ chỗ ở của chúng tôi\r\n- Chúng tôi hy vọng bạn sẽ có chuyến đi tốt đẹp khi đến đây\r\n- Đầy đủ trang thiết bị tiện nghi, hiện đại để bạn được nghỉ ngơi thật thoải mái\r\n- Không gian bếp đầy đủ đồ dùng nấu nướng, gia vị để bạn có thể trổ tài nấu ăn cho gia đình, bạn bè thưởng thức', 1700000, 'Vũng Tàu', 0, 0),
('VT8', 'ViVu HomeStay', 'ks (1).png', 'oDEx0Koba9yiojAXfbQRIj0U.jpg', 'ViVu HomeStay nằm trong Tp.Vũng Tàu. Hoà mình cùng người dân bản xứ. Quý khách trải nghiệm HomeStay nhà phố với diện tích 270m2 (chưa tính dt sân) thiết kế hiện đại, đầy đủ nội thất, tiện nghi gồm:\r\n2 phòng ngủ (1 phòng đơn giường 1m8, 1 phòng đôi giường 1m6), nệm cao su thiên nhiên, tất cả các phòng đều sử dụng Smart TV 32’, máy điều hoà ( có máy sấy tóc, bàn ủi), mỗi phòng decor theo tông màu khác nhau, phòng cách hiện đại, trẻ trung.', 1600000, 'Vũng Tàu', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `FullName` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `Img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Pass` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `Gioitinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `AD` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `FullName`, `Img`, `Username`, `Pass`, `Phone`, `Gioitinh`, `AD`) VALUES
('Ad1', 'Cao Nguyên', 'Capture.PNG', 'Nguyen', '123456', '0895241523', 'Nam', 'Admin'),
('AD2', 'Hiếu', 'haha.jpg', 'hieu', '123', '08652145215', 'Nữ', 'Admin'),
('AD3', 'Thanh Tùng', 'thuonghieu.jpg', 'thanhtung', '123456', '086520165205', 'Nam', 'Admin'),
('Admin', 'Admin', 'phuc.jpg', 'Admin', 'Admin', '0895261524', 'Nam', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `bookroom`
--
ALTER TABLE `bookroom`
  ADD PRIMARY KEY (`idbook`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`LocationID`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`roomid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `bookroom`
--
ALTER TABLE `bookroom`
  MODIFY `idbook` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
