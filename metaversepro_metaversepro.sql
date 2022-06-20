-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2022 at 01:10 PM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metaversepro_metaversepro`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `match_requests`
--

CREATE TABLE `match_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lgbtqia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethnicity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inperson` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `neighborhood` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekdays` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weekends` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fee` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whentostart` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action_oriented` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relational_and_reflective` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creative_and_integrative` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experties` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `techniquerequest` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technique` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `followuppreference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `match_requests`
--

INSERT INTO `match_requests` (`id`, `gender`, `lgbtqia`, `age`, `ethnicity`, `about`, `email`, `zip`, `inperson`, `location`, `neighborhood`, `weekdays`, `weekends`, `fee`, `whentostart`, `action_oriented`, `relational_and_reflective`, `creative_and_integrative`, `group`, `experties`, `techniquerequest`, `technique`, `followuppreference`, `created_at`, `updated_at`) VALUES
(4, 'male', 'no', '[\"24-45\"]', '[\"Asian\",\"White\"]', 'Tempora commodi faci', 'Tempora@gmail.com', '75841', 'In-Person Only', '[\"Brooklyn\",\"Westchester\",\"Queens\"]', 'none', 'Before 9am', 'After 5pm', '37', 'As soon as possible', '27', '89', '10', '[\"Health\",\"Identity\",\"Work\"]', '[\"Addiction and Substance Use\",\"Body Image\",\"Depression\",\"Trichotillomania\\/Body-Focused Repetitive Disease\",\"Voices Visions or perceptual disturbance\"]', 'No', '[\"Yoga\",\"Walk\",\"Teaching\",\"Art  Thrapy\",\"Body  Focused Thrapy(ex:Tapping)\",\"Brainspotting(BSP)\"]', 'Phone number', '2022-05-01 20:22:40', '2022-05-01 20:22:40'),
(5, 'male', 'yes', '[\"24-45\"]', '[\"Asian\"]', 'Waqar', 'WaqarAhmad.dev@gmail.com', '99950', 'In-Person Only', '[\"Long Island\"]', 'Tarrytown', '9am - 5pm', 'After 5pm', '50', 'In a month or so', '50', '50', '50', '[\"Health\"]', '[\"ADD\\/ADHD\",\"Anxiety\"]', 'Yes', '[\"Adlerian  Thrapy\"]', 'Email address', '2022-05-01 21:32:55', '2022-05-01 21:32:55'),
(6, 'male', 'no', '[\"46-65\"]', '[\"White\"]', 'Ahmad', 'ahmad@seonexperts.com', '10001', 'In-Person Only', '[\"Brooklyn\"]', 'none', '9am - 5pm', 'After 5pm', '21', 'As soon as possible', '50', '50', '50', '[\"Health\"]', '[\"ADD\\/ADHD\",\"Bipolar Disorder\",\"Addiction and Substance Use\",\"Depression\"]', 'Yes', '[\"Art  Thrapy\"]', 'Email address', '2022-05-02 07:29:44', '2022-05-02 07:29:44'),
(7, 'male', 'no', '[\"46-65\",\"24-45\"]', '[\"Asian\"]', 'Nouman', 'noumanhabib521@gmail.com', '10004', 'Remote Only', '[\"Long Island\"]', 'Tarrytown', '9am - 5pm', '9am - 5pm', '25', 'In a month or so', '50', '50', '50', '[\"Identity\"]', '[\"Addiction and Substance Use\"]', 'No', '[\"Acceptance Committment Thrapy(ACT)\"]', 'Neither, I will contact provider(s) when I\\\'m ready', '2022-05-04 15:48:10', '2022-05-04 15:48:10'),
(8, 'male', 'no', '[\"46-65\",\"24-45\"]', '[\"Asian\"]', 'Nouman', 'noumanhabib521@gmail.com', '20001', 'Remote Only', '[\"Long Island\"]', 'Tarrytown', '9am - 5pm', '9am - 5pm', '25', 'In a month or so', '50', '50', '50', '[\"Identity\"]', '[\"Addiction and Substance Use\"]', 'No', '[\"Acceptance Committment Thrapy(ACT)\"]', 'Neither, I will contact provider(s) when I\\\'m ready', '2022-05-04 15:50:48', '2022-05-04 15:50:48'),
(9, 'male', 'no', '[\"46-65\",\"24-45\"]', '[\"Asian\"]', 'Nouman', 'noumanhabib521@gmail.com', '10001', 'Remote Only', '[\"Long Island\"]', 'Tarrytown', '9am - 5pm', '9am - 5pm', '25', 'In a month or so', '50', '50', '50', '[\"Identity\"]', '[\"Addiction and Substance Use\"]', 'No', '[\"Acceptance Committment Thrapy(ACT)\"]', 'Neither, I will contact provider(s) when I\\\'m ready', '2022-05-04 15:51:22', '2022-05-04 15:51:22'),
(10, 'male', 'yes', '[\"24-45\"]', '[\"Asian\"]', 'Waqar', 'waqarahmad.dev@gmail.com', '10001', 'In-Person Only', '[\"Brooklyn\"]', 'Tarrytown', 'Before 9am', '9am - 5pm', '50', 'As soon as possible', '50', '50', '50', '[\"Identity\"]', '[\"ADD\\/ADHD\",\"Anxiety\"]', 'No', '[\"Coaching\"]', 'Email address', '2022-05-04 16:07:44', '2022-05-04 16:07:44'),
(11, 'male', 'yes', '[\"24-45\"]', '[\"Asian\"]', 'waqar', 'WaqarAhmad.dev@gmail.com', '10001', 'In-Person Only', '[\"Brooklyn\",\"Westchester\"]', 'Tarrytown', '9am - 5pm', '9am - 5pm', '50', 'As soon as possible', '50', '50', '50', '[\"Identity\"]', '[\"Anxiety\"]', 'Yes', '[\"Coaching\"]', 'Email address', '2022-05-04 16:27:30', '2022-05-04 16:27:30'),
(12, 'male', 'yes', '[\"24-45\"]', '[\"Asian\"]', 'waqar', 'WaqarAhmad.dev@gmail.com', '10001', 'In-Person Only', '[\"Brooklyn\",\"Westchester\"]', 'Tarrytown', '9am - 5pm', '9am - 5pm', '50', 'As soon as possible', '50', '50', '50', '[\"Identity\"]', '[\"Anxiety\"]', 'Yes', '[\"Coaching\"]', 'Email address', '2022-05-04 16:32:51', '2022-05-04 16:32:51'),
(13, 'male', 'yes', '[\"24-45\"]', '[\"Asian\"]', 'Waqarahmad', 'waqarahmad.dev@gmail.com', '10002', 'In-Person Only', '[\"Brooklyn\"]', 'Tarrytown', 'Before 9am', '9am - 5pm', '50', 'As soon as possible', '50', '50', '50', '[\"Health\"]', '[\"ADD\\/ADHD\",\"Anxiety\"]', 'No', '[\"Art  Thrapy\"]', 'Email address', '2022-05-04 17:37:46', '2022-05-04 17:37:46'),
(14, NULL, NULL, NULL, NULL, NULL, NULL, '10001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Neither, I will contact provider(s) when I\\\'m ready', '2022-05-05 10:57:56', '2022-05-05 10:57:56'),
(15, NULL, NULL, NULL, NULL, NULL, NULL, '10001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Neither, I will contact provider(s) when I\\\'m ready', '2022-05-05 10:58:13', '2022-05-05 10:58:13'),
(16, NULL, NULL, NULL, NULL, NULL, NULL, '10001', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Neither, I will contact provider(s) when I\\\'m ready', '2022-05-05 10:58:30', '2022-05-05 10:58:30'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, '10002', NULL, NULL, NULL, '9am - 5pm', 'After 5pm', '50', 'Not sure / just checking things out', '50', '50', '50', NULL, NULL, NULL, NULL, 'Neither, I will contact provider(s) when I\\\'m ready', '2022-05-05 11:14:03', '2022-05-05 11:14:03'),
(18, NULL, NULL, NULL, NULL, NULL, NULL, '10002', NULL, NULL, NULL, 'After 5pm', NULL, '50', 'Not sure / just checking things out', '50', '50', '50', NULL, NULL, NULL, NULL, 'Neither, I will contact provider(s) when I\\\'m ready', '2022-05-05 11:14:52', '2022-05-05 11:14:52'),
(19, 'male', 'no', '[\"24-45\"]', '[\"No preference\"]', 'Robert', 'rasifmushtaq@gmail.com', '11234', 'Remote Only', '[\"Brooklyn\"]', 'none', 'After 5pm', NULL, '31', 'As soon as possible', '50', '50', '50', '[\"Relationships\"]', '[\"Anxiety\",\"Depression\",\"Insomnia\"]', 'Yes', '[\"Coaching\",\"Emotionally Focused Thrapy\"]', 'Email address', '2022-05-05 11:24:37', '2022-05-05 11:24:37'),
(20, 'male', 'no', '[\"24-45\"]', '[\"No preference\"]', 'Robert', 'rasifmushtaq@gmail.com', '11234', 'Remote Only', '[\"Brooklyn\"]', 'none', NULL, 'After 5pm', '80', 'Not sure / just checking things out', '50', '50', '50', '[\"Life\"]', '[\"Body Image\",\"Chronic Illness\",\"Gambling\\/Crypto Addiction\",\"Sex Addiction\"]', 'No', '[\"Art  Thrapy\",\"Coaching\",\"Brainspotting(BSP)\",\"Adlerian  Thrapy\"]', 'Phone number', '2022-05-05 11:27:06', '2022-05-05 11:27:06');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_27_110518_create_match_requests_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `match_requests`
--
ALTER TABLE `match_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `match_requests`
--
ALTER TABLE `match_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
