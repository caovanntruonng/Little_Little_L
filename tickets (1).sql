-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 15, 2023 lúc 05:57 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `price` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tickets`
--

INSERT INTO `tickets` (`id`, `name`, `type`, `price`, `location`, `description`, `quantity`, `start_date`, `end_date`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sự kiện 1', 'Gói gia đình', 1000, 'Đầm sen Park', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nihil ipsa alias expedita vero esse neque iure facilis voluptatum! Impedit voluptatem cupiditate quod eos in? Cum dicta unde vitae itaque!\r\n Quia maiores tempore, facere dolor error quisquam velit deserunt pariatur placeat optio incidunt ad voluptatibus enim asperiores doloribus eius soluta rem sit, explicabo quidem. Deserunt quos atque laborum possimus facilis!\r\n Ex necessitatibus cum assumenda nostrum commodi aliquid facere neque deserunt? Quod voluptatibus, ullam aspernatur consectetur necessitatibus minus doloremque voluptatem provident, sint, nihil obcaecati. Delectus est sunt quam explicabo nihil accusantium!', 10, '2023-06-08', '2023-06-30', '/assets/images/eventpictures/Rectangle 1.png', NULL, NULL),
(2, 'Sự kiện 2', 'Gói VIP', 2000, 'Đầm sen Park', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nihil ipsa alias expedita vero esse neque iure facilis voluptatum! Impedit voluptatem cupiditate quod eos in? Cum dicta unde vitae itaque!\r\n Quia maiores tempore, facere dolor error quisquam velit deserunt pariatur placeat optio incidunt ad voluptatibus enim asperiores doloribus eius soluta rem sit, explicabo quidem. Deserunt quos atque laborum possimus facilis!\r\n Ex necessitatibus cum assumenda nostrum commodi aliquid facere neque deserunt? Quod voluptatibus, ullam aspernatur consectetur necessitatibus minus doloremque voluptatem provident, sint, nihil obcaecati. Delectus est sunt quam explicabo nihil accusantium!', 10, '2023-06-08', '2023-06-30', '/assets/images/eventpictures/Rectangle 1.png', NULL, NULL),
(3, 'Sự kiện 3', 'Gói gia đình', 1000, 'Đầm sen Park', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nihil ipsa alias expedita vero esse neque iure facilis voluptatum! Impedit voluptatem cupiditate quod eos in? Cum dicta unde vitae itaque!\r\n Quia maiores tempore, facere dolor error quisquam velit deserunt pariatur placeat optio incidunt ad voluptatibus enim asperiores doloribus eius soluta rem sit, explicabo quidem. Deserunt quos atque laborum possimus facilis!\r\n Ex necessitatibus cum assumenda nostrum commodi aliquid facere neque deserunt? Quod voluptatibus, ullam aspernatur consectetur necessitatibus minus doloremque voluptatem provident, sint, nihil obcaecati. Delectus est sunt quam explicabo nihil accusantium!', 10, '2023-06-08', '2023-06-30', '/assets/images/eventpictures/Rectangle 1.png', NULL, NULL),
(4, 'Sự kiện 4', 'Gói gia đình', 1000, 'Đầm sen Park', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nihil ipsa alias expedita vero esse neque iure facilis voluptatum! Impedit voluptatem cupiditate quod eos in? Cum dicta unde vitae itaque!\r\n Quia maiores tempore, facere dolor error quisquam velit deserunt pariatur placeat optio incidunt ad voluptatibus enim asperiores doloribus eius soluta rem sit, explicabo quidem. Deserunt quos atque laborum possimus facilis!\r\n Ex necessitatibus cum assumenda nostrum commodi aliquid facere neque deserunt? Quod voluptatibus, ullam aspernatur consectetur necessitatibus minus doloremque voluptatem provident, sint, nihil obcaecati. Delectus est sunt quam explicabo nihil accusantium!', 10, '2023-06-08', '2023-06-30', '/assets/images/eventpictures/Rectangle 1.png', NULL, NULL),
(5, 'Sự kiện 5', 'Gói gia đình', 1000, 'Đầm sen Park', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nihil ipsa alias expedita vero esse neque iure facilis voluptatum! Impedit voluptatem cupiditate quod eos in? Cum dicta unde vitae itaque!\r\n Quia maiores tempore, facere dolor error quisquam velit deserunt pariatur placeat optio incidunt ad voluptatibus enim asperiores doloribus eius soluta rem sit, explicabo quidem. Deserunt quos atque laborum possimus facilis!\r\n Ex necessitatibus cum assumenda nostrum commodi aliquid facere neque deserunt? Quod voluptatibus, ullam aspernatur consectetur necessitatibus minus doloremque voluptatem provident, sint, nihil obcaecati. Delectus est sunt quam explicabo nihil accusantium!', 10, '2023-06-08', '2023-06-30', '/assets/images/eventpictures/Rectangle 1.png', NULL, NULL),
(6, 'Sự kiện 6', 'Gói gia đình', 1000, 'Đầm sen Park', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nihil ipsa alias expedita vero esse neque iure facilis voluptatum! Impedit voluptatem cupiditate quod eos in? Cum dicta unde vitae itaque!\r\n Quia maiores tempore, facere dolor error quisquam velit deserunt pariatur placeat optio incidunt ad voluptatibus enim asperiores doloribus eius soluta rem sit, explicabo quidem. Deserunt quos atque laborum possimus facilis!\r\n Ex necessitatibus cum assumenda nostrum commodi aliquid facere neque deserunt? Quod voluptatibus, ullam aspernatur consectetur necessitatibus minus doloremque voluptatem provident, sint, nihil obcaecati. Delectus est sunt quam explicabo nihil accusantium!', 10, '2023-06-08', '2023-06-30', '/assets/images/eventpictures/Rectangle 1.png', NULL, NULL),
(7, 'Sự kiện 7', 'Gói VIP', 2000, 'Đầm sen Park', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero nihil ipsa alias expedita vero esse neque iure facilis voluptatum! Impedit voluptatem cupiditate quod eos in? Cum dicta unde vitae itaque!\r\n Quia maiores tempore, facere dolor error quisquam velit deserunt pariatur placeat optio incidunt ad voluptatibus enim asperiores doloribus eius soluta rem sit, explicabo quidem. Deserunt quos atque laborum possimus facilis!\r\n Ex necessitatibus cum assumenda nostrum commodi aliquid facere neque deserunt? Quod voluptatibus, ullam aspernatur consectetur necessitatibus minus doloremque voluptatem provident, sint, nihil obcaecati. Delectus est sunt quam explicabo nihil accusantium!', 10, '2023-06-08', '2023-06-30', '/assets/images/eventpictures/Rectangle 1.png', NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
