-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 04:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4projek`
--

-- --------------------------------------------------------

--
-- Table structure for table `aktor`
--

CREATE TABLE `aktor` (
  `id_aktor` int(255) NOT NULL,
  `id_project` int(255) DEFAULT NULL,
  `aktor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `aktor`
--

INSERT INTO `aktor` (`id_aktor`, `id_project`, `aktor`) VALUES
(1, 6, '0'),
(2, 6, '0'),
(3, 7, 'Admin'),
(4, 7, 'Peserta'),
(5, 7, 'Pengguna'),
(6, 8, 'admin'),
(7, 8, 'peserta'),
(9, 10, 'Admin'),
(10, 10, 'Peserta'),
(11, 11, 'user'),
(12, 11, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2020-12-31 18:34:46', 1),
(2, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2020-12-31 18:42:58', 1),
(3, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2020-12-31 18:44:06', 1),
(4, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-04 14:25:58', 1),
(5, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-04 18:37:45', 1),
(6, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-04 23:51:42', 1),
(7, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-05 12:15:58', 1),
(8, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-05 21:10:33', 1),
(9, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-06 01:47:36', 1),
(10, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-06 01:47:36', 1),
(11, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-06 17:04:45', 1),
(12, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-07 00:21:47', 1),
(13, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-07 00:33:27', 1),
(14, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-07 02:36:54', 1),
(15, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-07 06:18:16', 1),
(16, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-08 08:46:27', 1),
(17, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-08 15:26:16', 1),
(18, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-08 20:23:05', 1),
(19, '127.0.0.1', 'indanalarangkuti17@gmail.com', 2, '2021-01-09 01:45:36', 1),
(20, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-10 08:55:24', 1),
(21, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-10 21:54:35', 1),
(22, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-11 12:31:59', 1),
(23, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-11 15:39:40', 1),
(24, '127.0.0.1', 'indanalarangkuti17@gmail.com', 2, '2021-01-11 17:18:58', 1),
(25, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-11 17:19:39', 1),
(26, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-11 17:19:48', 1),
(27, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-11 17:28:32', 1),
(28, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-11 18:47:18', 1),
(29, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-11 18:47:59', 1),
(30, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-11 21:49:53', 1),
(31, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-12 04:06:08', 1),
(32, '127.0.0.1', 'karpinirustam', NULL, '2021-01-12 19:44:08', 0),
(33, '127.0.0.1', 'pritapujaastuti', NULL, '2021-01-12 19:51:01', 0),
(34, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-12 19:51:12', 1),
(35, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-13 08:29:08', 1),
(36, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-13 09:54:55', 1),
(37, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-13 19:47:41', 1),
(38, '127.0.0.1', 'prita.pujaastuti@gmail.com', 1, '2021-01-13 21:23:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id_case` int(255) NOT NULL,
  `id_project` int(255) DEFAULT NULL,
  `id_aktor` int(255) DEFAULT NULL,
  `usecase` varchar(255) NOT NULL,
  `tahapan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dataflow_structure`
--

CREATE TABLE `dataflow_structure` (
  `id_dfs` int(255) NOT NULL,
  `id_project` int(255) DEFAULT NULL,
  `id_aktor` int(255) DEFAULT NULL,
  `id_case` int(255) DEFAULT NULL,
  `base_url` varchar(255) NOT NULL,
  `pattern` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `data_object` varchar(255) NOT NULL,
  `function_query` varchar(255) NOT NULL,
  `base_query` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_object`
--

CREATE TABLE `data_object` (
  `id_dataobject` int(255) NOT NULL,
  `id_dfs` int(255) DEFAULT NULL,
  `data_object` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id_header` int(255) NOT NULL,
  `id_dfs` int(255) DEFAULT NULL,
  `header` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1609423839, 1);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_project` int(255) NOT NULL,
  `id` int(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_project`, `id`, `nama`, `deskripsi`) VALUES
(1, NULL, 'Projek KP', 'untuk kp'),
(2, NULL, 'toko online', 'apa saja'),
(3, NULL, 'toko', 'jam'),
(5, NULL, 'Rexona', 'parfum'),
(6, NULL, 'Halwey', 'Skincare'),
(7, NULL, 'Nivea', 'Skincare'),
(8, NULL, 'sistem baru', 'baru'),
(10, NULL, 'sistem sriwijaya', 'sriwijaya'),
(11, NULL, 'Handphone', 'gadget');

-- --------------------------------------------------------

--
-- Table structure for table `request_body`
--

CREATE TABLE `request_body` (
  `id_requestbody` int(255) NOT NULL,
  `id_dfs` int(255) DEFAULT NULL,
  `request_body` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_param`
--

CREATE TABLE `request_param` (
  `id_requestparam` int(255) NOT NULL,
  `id_dfs` int(255) DEFAULT NULL,
  `request_param` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `res`
--

CREATE TABLE `res` (
  `id_res` int(255) NOT NULL,
  `id_dfs` int(255) DEFAULT NULL,
  `res` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'prita.pujaastuti@gmail.com', 'pritapujaastuti', NULL, 'default.svg', '$2y$10$ilJJEvEyq8CZHGuLtbA7H.UjiCjsA8VvcEiMSal9HNJKxQG4c.dnm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2020-12-31 18:34:20', '2020-12-31 18:34:20', NULL),
(2, 'indanalarangkuti17@gmail.com', 'indanala', NULL, 'default.svg', '$2y$10$8AEKhEMNcD8HmbwVhPw9AueigL7B6G5y39k.gJ8xX9FOLDWi7T8hu', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-01-09 01:45:21', '2021-01-09 01:45:21', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aktor`
--
ALTER TABLE `aktor`
  ADD PRIMARY KEY (`id_aktor`),
  ADD KEY `id_project` (`id_project`);

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id_case`),
  ADD KEY `id_project` (`id_project`),
  ADD KEY `id_aktor` (`id_aktor`);

--
-- Indexes for table `dataflow_structure`
--
ALTER TABLE `dataflow_structure`
  ADD PRIMARY KEY (`id_dfs`),
  ADD KEY `id_project` (`id_project`,`id_aktor`,`id_case`);

--
-- Indexes for table `data_object`
--
ALTER TABLE `data_object`
  ADD PRIMARY KEY (`id_dataobject`),
  ADD KEY `id_dfs` (`id_dfs`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id_header`),
  ADD KEY `id_dfs` (`id_dfs`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_project`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `request_body`
--
ALTER TABLE `request_body`
  ADD PRIMARY KEY (`id_requestbody`),
  ADD KEY `id_dfs` (`id_dfs`);

--
-- Indexes for table `request_param`
--
ALTER TABLE `request_param`
  ADD PRIMARY KEY (`id_requestparam`),
  ADD KEY `id_dfs` (`id_dfs`);

--
-- Indexes for table `res`
--
ALTER TABLE `res`
  ADD PRIMARY KEY (`id_res`),
  ADD KEY `id_dfs` (`id_dfs`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aktor`
--
ALTER TABLE `aktor`
  MODIFY `id_aktor` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id_case` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dataflow_structure`
--
ALTER TABLE `dataflow_structure`
  MODIFY `id_dfs` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_object`
--
ALTER TABLE `data_object`
  MODIFY `id_dataobject` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id_header` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_project` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `request_body`
--
ALTER TABLE `request_body`
  MODIFY `id_requestbody` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_param`
--
ALTER TABLE `request_param`
  MODIFY `id_requestparam` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `res`
--
ALTER TABLE `res`
  MODIFY `id_res` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
