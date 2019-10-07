-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 01, 2019 lúc 02:00 PM
-- Phiên bản máy phục vụ: 10.1.33-MariaDB
-- Phiên bản PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `demoshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name_category` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name_category`) VALUES
(9, 'Giày tây'),
(10, 'Giày thể thao'),
(11, 'Giày lười');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `address` varchar(500) NOT NULL,
  `status` bit(1) NOT NULL,
  `total` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `telephone`, `address`, `status`, `total`, `date`) VALUES
(32, 'thang', '12341', 'dsafdav', b'0', 400000, '2019-03-01'),
(33, 'Võ Văn Thắng', '0788079036', 'Đà Nẵng', b'0', 1600000, '2019-03-01'),
(34, 'Huy', '0905111222', 'Huế', b'1', 800000, '2019-03-01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `amount`) VALUES
(9, 32, 4, 400000, 1),
(10, 33, 4, 400000, 4),
(11, 34, 4, 400000, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `sale` float NOT NULL,
  `image` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(2000) NOT NULL,
  `amount` int(11) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `name`, `price`, `sale`, `image`, `date`, `description`, `amount`, `view`) VALUES
(1, 10, 'Giày Prophere Đen Đế Trắng', 799000, 0, 'a5133e15a6e2b7d2a89819d5305b8684.jpg', '2019-02-24', '<p><strong>Sneaker PROPHERE.</strong></p>\r\n\r\n<p>Đ&ocirc;i gi&agrave;y với phần đế gai g&oacute;c đầy mới lạ v&agrave; m&agrave;u phối v&ocirc; c&ugrave;ng ấn tượng thật sự l&agrave; nh&acirc;n tố quan trọng gi&uacute;p set đồ của những bạn trẻ trở n&ecirc;n c&aacute; t&iacute;nh hơn bao giờ hết.</p>\r\n\r\n<p>&nbsp;Đ&ocirc;i gi&agrave;y mang hơi thở của thời trang thập ni&ecirc;n 90 kết nối với sự cấp tiến v&agrave; độc lập của thế hệ mới l&agrave; sự lựa chọn ho&agrave;n hảo của giới trẻ hiện nay.</p>\r\n', 20, 0),
(2, 11, 'Giày MoKa Da Bò Cao Cấp', 289000, 0, '21eca0ffd1537a7a9ad32dfe2235f765.jpg', '2019-02-25', '<p>Gi&agrave;y lười Moka h&agrave;ng việt nam xuất khẩu.</p>\r\n\r\n<p>Full size nam 38-44</p>\r\n\r\n<p>✔ M&agrave;u : N&acirc;u</p>\r\n\r\n<p>✔ Da b&ograve; nguy&ecirc;n miếng 100%</p>\r\n\r\n<p>✔ Đế cao su</p>\r\n\r\n<p>=&gt; GIAO H&Agrave;NG TO&Agrave;N Quốc</p>\r\n', 15, 0),
(3, 9, 'Giày Da Nam Cao Cấp REEHEMES', 850000, 0, 'f8ceff96bf8450d752fb1223a2b0c59c.jpg', '2019-02-25', '<p>Thương hiệu: REEHEMES</p>\r\n\r\n<p>Chất liệu b&ecirc;n trong: Nh&acirc;n tạo</p>\r\n\r\n<p>Chất liệu b&ecirc;n ngo&agrave;i: Dạ B&ograve; Nguy&ecirc;n Tấm Phủ PE</p>\r\n\r\n<p>Kiểu d&aacute;ng: Gi&agrave;y lười</p>\r\n\r\n<p>Dạng mũi gi&agrave;y: Mũi nhọn Xuất Xứ: Hongkong</p>\r\n\r\n<p>Full size nam 38-44</p>\r\n\r\n<p>✔ M&agrave;u : Đen</p>\r\n\r\n<p>✔ Da b&ograve; nguy&ecirc;n miếng 100%</p>\r\n\r\n<p>✔ Đế fit cao cấp si&ecirc;u bền</p>\r\n', 25, 0),
(4, 9, 'Giày Tây Nam Cao Cấp - SP39', 400000, 0, 'a3a26caac145c2edc5058ae23c4c6dfd.jpg', '2019-02-25', 'LUÔN ĐỒNG HÀNH CÙNG BẠN TRÊN MỌI NẺO ĐƯỜNG\r\n\r\nGiới thiệu sản phẩm giày lười da nam cao cấp SP39\r\nMÃ SP : SP\r\n- Size: 39,40,41,42,43.44\r\n- Giày có kích cỡ đúng tiêu chuẩn\r\n- Chất liệu da . vải\r\n- Mũi giày tròn.\r\n- Đế giày xẻ rãnh chống trơn trượt.\r\n- Kiểu dáng đa phong cách.\r\n- Đường may tinh tế sắc sảo.\r\n---------------------------------------------------------\r\n- Phong cách thể thao gọn nhẹ: Thích hợp với các bạn trẻ năng động, khỏe khoắn, cá tính, phù hợp với mọi địa hình di chuyển.\r\n- Chất liệu đế mềm, có thể uốn cong mà không bị gãy mép.\r\n- Đặc biệt: Sản phẩm có size cho cả Nam và Nữ. Nam size từ: 39 đến 44 và nữ từ 35 đến 40. Và đặc biệt phù hợp với các đôi tình nhân có cùng sở thích.\r\n- Đế giày với các lớp cao su có độ đàn hồi cao, các đường  rãnh ma sát được xẻ và bố trí dưới mặt đế một cách khoa học, giúp giày luôn êm ái khi sử dụng và không bị vướng, mắc các loại  rác, sỏi, đá khi sử dụng.\r\n- Giày có khả năng chống trơn, chịu mài mòn tốt, thoáng khí, nhanh khô\r\n- Tăng thêm chiều cao 2cm', 10, 0),
(5, 10, 'Giày Prophere Full Trắng', 700000, 0, 'acfe5f8f08959ae0e2282897f9379aa9.jpg', '2019-03-01', '<p>Sneaker PROPHERE full trắng.</p>\r\n\r\n<p>Đ&ocirc;i gi&agrave;y với phần đế gai g&oacute;c đầy mới lạ v&agrave; m&agrave;u phối v&ocirc; c&ugrave;ng ấn tượng thật sự l&agrave; nh&acirc;n tố quan trọng gi&uacute;p set đồ của những bạn trẻ trở n&ecirc;n c&aacute; t&iacute;nh hơn bao giờ hết.</p>\r\n\r\n<p>Đ&ocirc;i gi&agrave;y mang hơi thở của thời trang thập ni&ecirc;n 90 kết nối với sự cấp tiến v&agrave; độc lập của thế hệ mới l&agrave; sự lựa chọn ho&agrave;n hảo của giới trẻ hiện nay.</p>\r\n\r\n<p>- Prophere thời trang nổi loạn - c&aacute; t&iacute;nh</p>\r\n\r\n<p>- H&agrave;ng c&oacute; sẵn full size 36-43&nbsp;</p>\r\n\r\n<p>- Full box</p>\r\n', 20, 0),
(6, 10, 'Giày Yeezy Full Trắng', 900000, 10, 'b6b478c72a55977ee3f80a91eb2edba6.jpg', '2019-03-01', '<p>➡ h&agrave;ng sẵn full box</p>\r\n\r\n<p>➡ảnh chụp thật cam kết giống h&igrave;nh 100%</p>\r\n\r\n<p>➡fullsize từ 36_43</p>\r\n\r\n<p>➡hỗ trợ đổi size nếu kh&ocirc;ng vừa</p>\r\n\r\n<p>➡bảo h&agrave;ng 1 tuần nếu lỗi của nh&agrave; sản xuất</p>\r\n', 10, 0),
(7, 9, 'Giầy Tây Nam Hàn Quốc', 200000, 0, 'd2eb20940ede823ae635966611224b49.jpg', '2019-03-01', '<p>Giầy da b&ograve; cực k&igrave; phong c&aacute;ch.</p>\r\n\r\n<p>Chất liệu : da pu mem</p>\r\n\r\n<p>Đế cao su chắc chắn</p>\r\n\r\n<p>Size 38 tới 43</p>\r\n\r\n<p>Bảo h&agrave;nh sản phẩm 12 th&aacute;ng.</p>\r\n', 13, 0),
(8, 11, 'Giày Philip Plein Đính Đá', 960000, 0, 'cec2ab5434bed309dd8b259241fc5b1a.jpg', '2019-03-01', '<p>- Đủ size, đủ số như b&agrave;i viết</p>\r\n\r\n<p>- H&igrave;nh thật , h&agrave;ng thật, chất vải thật, kh&aacute;c h&igrave;nh ho&agrave;n gấp 10 lần tiền</p>\r\n\r\n<p>- Ship h&agrave;ng COD tr&ecirc;n to&agrave;n quốc</p>\r\n\r\n<p>- Mua 2 bộ trở l&ecirc;n free ship trong khu vực H&agrave; Nội.</p>\r\n\r\n<p>- Mua 3 bộ trở l&ecirc;n free ship cả nước.</p>\r\n', 14, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(191) NOT NULL,
  `image` varchar(100) NOT NULL,
  `role` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `fullname`, `image`, `role`) VALUES
(6, 'admin1', 'vvthg246@gmail.com', '2019-03-01 11:35:50', 'ecb87d62eb485207a803617da61932b88183f7c7', 'Võ Văn Thắng', 'user.jpg', b'0'),
(7, 'dinhhuy', 'Huyhuy@gmail.com', '2019-03-01 00:46:12', 'ed3d618e62481473d4b7c2da0b144f5a8c9883dc', 'Lê Đình Huy', 'user.jpg', b'1');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
