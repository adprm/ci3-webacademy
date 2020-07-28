-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2020 pada 05.22
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_akademis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ak_abouts`
--

CREATE TABLE `ak_abouts` (
  `about_id` varchar(10) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `about_desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ak_abouts`
--

INSERT INTO `ak_abouts` (`about_id`, `about_title`, `about_image`, `about_desk`) VALUES
('5eb8ff7d22', 'DitDemy', '5eb8ff7d22.png', 'DitDemy is an educational place that studies in the field of Technology. Both in the field of Prograaming or Networking. Train and get people to become IT professionals within 12 weeks.\r\nGraduating people with very high competence and expertise, because before graduation will be made an exam that is to create a qualified system.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ak_achievements`
--

CREATE TABLE `ak_achievements` (
  `achievement_id` varchar(10) NOT NULL,
  `achievement_title` varchar(255) NOT NULL,
  `achievement_date` date NOT NULL,
  `achievement_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `achievement_desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ak_achievements`
--

INSERT INTO `ak_achievements` (`achievement_id`, `achievement_title`, `achievement_date`, `achievement_image`, `achievement_desk`) VALUES
('5eba6d3219', '1st Place Mobile Apps Asia', '2020-05-01', '5eba6d3219f5f.png', '1st Place Mobile Apps Asia, Create a Covid-19 virus detection application with React.'),
('5eba728929', '4st Place starup indonesia', '2020-05-06', '5eba728929298.png', '4st Place starup indonesia, Building a startup in the field of human resources.'),
('5eba75ff04', '3st Place hackatown indonesia', '2020-04-29', '5eba75ff04e8e.png', '3st Place Indonesian hackathon, in hacking a system and protecting the system.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ak_careers`
--

CREATE TABLE `ak_careers` (
  `career_id` varchar(10) NOT NULL,
  `career_title` varchar(255) NOT NULL,
  `career_date` date NOT NULL,
  `career_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `career_desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ak_careers`
--

INSERT INTO `ak_careers` (`career_id`, `career_title`, `career_date`, `career_image`, `career_desk`) VALUES
('5ebb7a164b', 'Backend Developer at Facebook', '2020-05-15', '5ebb7a164b8f1.jpg', 'Reqruitments : - Laravel, Golang, Python\r\n- Django\r\n- SQL\r\n'),
('5ebb7ae9d3', 'DevOps at Line', '2020-05-21', '5ebb7ae9d388c.jpg', 'Reqruitments : Have a deep understanding of cloud infrastructure, network and system security (AWS / GCP).\r\n- Have an understanding of data communication protocols.\r\n- Have an understanding of automation and \"infrastructure as code\".\r\n- ability to plan, create and integrate cloud computing and virtualization systems.\r\n- ability to make virtualization and containerization (for example Docker, Kubernetes)'),
('5ebb90fb42', 'Data Analyst at Google', '2020-05-08', '5ebb90fb42551.jpg', '-Data interpretation\r\n-Develop and imprement databases\r\n-Analyzing\r\n-Review computer reports\r\n-Prioritize business needs\r\n-Perform other data analyst tasks');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ak_contacts`
--

CREATE TABLE `ak_contacts` (
  `contact_id` varchar(10) NOT NULL,
  `contact_add` text NOT NULL,
  `contact_phone` varchar(15) NOT NULL,
  `contact_email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ak_contacts`
--

INSERT INTO `ak_contacts` (`contact_id`, `contact_add`, `contact_phone`, `contact_email`) VALUES
('5ebf102e51', 'Bogor, Sukaraja, Cijujung', '08558535877', 'aditiyaprmn00@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ak_events`
--

CREATE TABLE `ak_events` (
  `event_id` varchar(10) NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_date` date NOT NULL,
  `event_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `event_desk` text NOT NULL,
  `event_loc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ak_events`
--

INSERT INTO `ak_events` (`event_id`, `event_title`, `event_date`, `event_image`, `event_desk`, `event_loc`) VALUES
('5ec37e1594', 'Opening Seminar on Technology Startups', '2020-05-23', '5ec37e1594.jpg', 'How to start a startup company in the field of technology. Making products that are very useful in society in the current technological era.', 'Jakarta Barat, JL.Sahira, Gedung Lokyo LT15.'),
('5ec3830258', 'Artificial Intelligence', '2020-05-27', '5ec3830258f54.jpg', 'Understand the concept of artificial intelligence, how it works and how to make it simply.', 'Bandung, Jl. Buah Batu, Balai Sartika, Ruang Serbaguna.'),
('5ec383d283', 'Become a great Android Developer', '2020-05-25', '5ec383d283b09.png', 'Workshop to make Android-based applications. How to make an android application, to upload to play store.', 'Bandung, Jl. Raden Patah No.28, Ruangréka Coworking Space Bandung');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ak_infos`
--

CREATE TABLE `ak_infos` (
  `info_id` varchar(10) NOT NULL,
  `info_title` varchar(255) NOT NULL,
  `info_date` date NOT NULL,
  `info_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `info_desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ak_infos`
--

INSERT INTO `ak_infos` (`info_id`, `info_title`, `info_date`, `info_image`, `info_desk`) VALUES
('5ec084c518', 'DitDemy', '2020-05-17', '5ec084c518637.jpg', 'School for learning Programming and Networking skills. Empowering human resources in the field of technology.'),
('5ec0856e04', 'Artificial Intelligence', '2020-05-17', '5ec0856e04160.jpg', 'Artificial intelligence (AI) allows machines to learn from experience, adjust new inputs and carry out tasks like humans. Most AI examples that you hear today - from computers playing chess to self-driving cars - rely heavily on deep learning and natural language processing.'),
('5ec085b0a0', 'Virtual Reality', '2020-05-17', '5ec085b0a0a06.jpg', 'Virtual reality is a technology that allows users to interact with existing environments in the virtual world that are simulated by a computer, so that users feel they are in that environment.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ak_learnings`
--

CREATE TABLE `ak_learnings` (
  `learning_id` varchar(10) NOT NULL,
  `learning_title` varchar(255) NOT NULL,
  `learning_image` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `learning_desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ak_learnings`
--

INSERT INTO `ak_learnings` (`learning_id`, `learning_title`, `learning_image`, `learning_desk`) VALUES
('5eb9071cec', 'UI UX', '5eb9071cecb97.png', 'Learn and create a display concept of an application or website. Provides color and functionality of the application to make users comfortable using it. And make animation effects to be more user friendly.'),
('5eb9085cec', 'Frontend Developer', '5eb9085cec7c2.png', 'make a display of an application or website that is very user friendly. Learn to make a component of a website system that deals directly from the user\'s side.'),
('5eb921e116', 'Backend Developer', '5eb921e116d41.png', 'Make a system that works in an application or website. Associated with data connected to a database. Make the path of the data in the application and website.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ak_misis`
--

CREATE TABLE `ak_misis` (
  `misi_id` varchar(10) NOT NULL,
  `misi_desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ak_misis`
--

INSERT INTO `ak_misis` (`misi_id`, `misi_desk`) VALUES
('5eba49039e', 'Professionals in technology.'),
('5eba49283e', 'Developing human resources in the field of technology.'),
('5eba498749', 'Can provide services in society by building useful technology systems.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ak_visis`
--

CREATE TABLE `ak_visis` (
  `visi_id` varchar(10) NOT NULL,
  `visi_desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ak_visis`
--

INSERT INTO `ak_visis` (`visi_id`, `visi_desk`) VALUES
('5eba48c30d', 'Creating competent and professional graduates in the field of technology and can participate in advancing technology in Indonesia.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `role` enum('admin','customer') NOT NULL DEFAULT 'customer',
  `last_login` timestamp NOT NULL DEFAULT current_timestamp(),
  `photo` varchar(64) NOT NULL DEFAULT 'user_no_image.jpg',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`, `full_name`, `phone`, `role`, `last_login`, `photo`, `created_at`, `is_active`) VALUES
(1, 'aditiya', '$2y$10$SNHbTNcx08lyjvGwEGayM.xwnBMAz6LfSQcldm1nfrBx33fj.rwG2', 'aditiyaprmn00@gmail.com', 'Aditiya Permana', '08558535877', 'admin', '2020-07-28 03:20:56', 'user_no_image.jpg', '2020-05-13 07:27:52', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ak_abouts`
--
ALTER TABLE `ak_abouts`
  ADD PRIMARY KEY (`about_id`);

--
-- Indeks untuk tabel `ak_achievements`
--
ALTER TABLE `ak_achievements`
  ADD PRIMARY KEY (`achievement_id`);

--
-- Indeks untuk tabel `ak_careers`
--
ALTER TABLE `ak_careers`
  ADD PRIMARY KEY (`career_id`);

--
-- Indeks untuk tabel `ak_contacts`
--
ALTER TABLE `ak_contacts`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indeks untuk tabel `ak_events`
--
ALTER TABLE `ak_events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indeks untuk tabel `ak_infos`
--
ALTER TABLE `ak_infos`
  ADD PRIMARY KEY (`info_id`);

--
-- Indeks untuk tabel `ak_learnings`
--
ALTER TABLE `ak_learnings`
  ADD PRIMARY KEY (`learning_id`);

--
-- Indeks untuk tabel `ak_misis`
--
ALTER TABLE `ak_misis`
  ADD PRIMARY KEY (`misi_id`);

--
-- Indeks untuk tabel `ak_visis`
--
ALTER TABLE `ak_visis`
  ADD PRIMARY KEY (`visi_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
