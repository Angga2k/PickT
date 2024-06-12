-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2024 at 01:26 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pickt`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `teacher_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `title`, `description`, `teacher_id`, `created_at`, `update_at`) VALUES
(1, 'Course One', 'Description for Course One', 2, '2024-06-05 14:10:53', '2024-06-05 14:10:53'),
(2, 'Course Two', 'Description for Course Two', 3, '2024-06-05 14:10:53', '2024-06-05 14:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enrollment_id` int NOT NULL,
  `student_id` int DEFAULT NULL,
  `course_id` int DEFAULT NULL,
  `enrolled_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`enrollment_id`, `student_id`, `course_id`, `enrolled_at`) VALUES
(1, 4, 1, '2024-06-05 14:10:53'),
(2, 5, 1, '2024-06-05 14:10:53'),
(3, 4, 2, '2024-06-05 14:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int NOT NULL,
  `course_id` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `video_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `course_id`, `title`, `content`, `video_url`, `create_at`, `update_at`) VALUES
(1, 1, 'Lesson One for Course One', 'Content for Lesson One', 'video_url_1', '2024-06-05 14:10:53', '2024-06-05 14:10:53'),
(2, 1, 'Lesson Two for Course One', 'Content for Lesson Two', 'video_url_2', '2024-06-05 14:10:53', '2024-06-05 14:10:53'),
(3, 2, 'Lesson One for Course Two', 'Content for Lesson One', 'video_url_3', '2024-06-05 14:10:53', '2024-06-05 14:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int NOT NULL,
  `course_id` int DEFAULT NULL,
  `student_id` int DEFAULT NULL,
  `rating` int DEFAULT NULL,
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `course_id`, `student_id`, `rating`, `comment`, `create_at`) VALUES
(1, 1, 4, 5, 'Great course!', '2024-06-05 14:10:53'),
(2, 1, 5, 4, 'Enjoyed learning from this course.', '2024-06-05 14:10:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('student','teacher','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `create_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `role`, `create_at`, `update_at`) VALUES
(1, 'admin', '$2y$10$z90jXVk.oFkMWdtcP6v1dOAdXrYcT46jfs0dlVN2nxmwEgK6Ap/4q', 'admin@example.com', 'Admin User', 'admin', '2024-06-05 14:10:53', '2024-06-05 15:13:39'),
(2, 'teacher1', '$2y$10$oELT9NeQJcFE4UmhwWu3P.x4Ec.k0ah4ov8tixK70gCgqzTF.CAwm', 'teacher1@example.com', 'Teacher One', 'teacher', '2024-06-05 14:10:53', '2024-06-05 15:26:14'),
(3, 'teacher2', 'teacher2_password', 'teacher2@example.com', 'Teacher Two', 'teacher', '2024-06-05 14:10:53', '2024-06-05 14:10:53'),
(4, 'student1', 'student1_password', 'student1@example.com', 'Student One', 'student', '2024-06-05 14:10:53', '2024-06-05 14:10:53'),
(5, 'student2', 'student2_password', 'student2@example.com', 'Student Two', 'student', '2024-06-05 14:10:53', '2024-06-05 14:10:53'),
(6, NULL, '$2y$10$UWRytqQ3MCIxSj7k1PJDP.i7f.mLVFUdFNuXhyyro1dJX0g9Jmlue', 'testing@gmail.com', 'angga', 'student', '2024-06-05 13:26:41', '2024-06-05 13:26:41'),
(7, NULL, '$2y$10$NYfpdxANiCeEOz3Z1/CMeelbWXRPL.WrUtqibH1LZzGrESHhjEfkq', 'anggadwikurniawan6@gmail.com', 'Angga Dwi Kurniawan', 'student', '2024-06-05 14:02:29', '2024-06-05 14:02:29'),
(8, NULL, '$2y$10$X3t4hQV1kK808pJzzXmlE.zQ49ig5kXuS9xWLGq3MU7gQpOHH/MBK', 'tya@gmail.com', 'Nanditya', 'teacher', '2024-06-05 14:32:36', '2024-06-05 21:33:28'),
(9, NULL, '$2y$10$gVuLZ2Mda3K7PML4VIZSi.F9B0KbhLuxIz1DL9uPzDqt7I5.8dMBK', 'anjay@gmail.com', 'anjay', 'teacher', '2024-06-05 14:36:49', '2024-06-05 14:36:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role` enum('student','teacher','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role`) VALUES
('admin'),
('teacher'),
('student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enrollment_id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enrollment_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD CONSTRAINT `enrollments_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `enrollments_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `reviews_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
