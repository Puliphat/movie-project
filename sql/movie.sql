-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2025 at 10:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_banner`
--

CREATE TABLE `data_banner` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `banner` text NOT NULL,
  `img` text NOT NULL,
  `des` text NOT NULL,
  `vdo_ex` text NOT NULL,
  `vdo_main` text NOT NULL,
  `star` float NOT NULL,
  `min` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_banner`
--

INSERT INTO `data_banner` (`id`, `name`, `banner`, `img`, `des`, `vdo_ex`, `vdo_main`, `star`, `min`) VALUES
(1, 'Sunset Over the Killing Fields', 'https://cms.dmpcdn.com/movie/2021/08/20/ca6c2bb0-019e-11ec-9d44-6dd46f8e743c_original.png', 'https://s.isanook.com/mv/0/ud/6/33836/sunset_theme_01.jpg', 'Starring Nadech Kugimiya as Kobori, a Japanese Military Officer who is in the Japanese troop that invaded Siam, and Oranate D.Caballes as Angsumalin (Hideko), a Siamese girl who has complicated feelings toward Kobori, due to her feelings of guilt towards a commitment she had made with her boyfriend who went to study in England', 'https://www.youtube.com/embed/eHfaxbW-ors', 'https://www.youtube.com/embed/5Dx-LZ4yKyw', 6.3, '120 mins'),
(2, 'รักไร้เสียง', 'https://i.pinimg.com/originals/ea/05/16/ea05166eb4fc5c08fa4f483263ee1998.jpg', 'https://upload.wikimedia.org/wikipedia/th/f/fa/%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B9%84%E0%B8%A3%E0%B9%89%E0%B9%80%E0%B8%AA%E0%B8%B5%E0%B8%A2%E0%B8%87_%28%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%A2%E0%B8%99%E0%B8%95%E0%B8%A3%E0%B9%8C%29.jpg', 'A deaf girl, Shoko, is bullied by the popular Shoya. As Shoya continues to bully Shoko, the class turns its back on him. Shoko transfers and Shoya grows up as an outcast. Alone and depressed, the regretful Shoya finds Shoko to make amends.', 'https://www.youtube.com/embed/4s9kePwSH2w', 'https://www.youtube.com/embed/nrQfdq1S_8M', 8.2, '129 mins'),
(3, 'I MISS U รักฉันอย่าคิดถึงฉัน', 'https://filmsick.wordpress.com/wp-content/uploads/2012/06/miss7_1334137729r_static_p_s1sf_mv_0file_361837.jpg?w=840', 'https://cdni-cf.ch7.com/dm/sz-md/i/mg/e/0/a/e0a76c29236a6bdc1ebebf30bb270fcf_6i_miss_u_%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%89%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%A2%E0%B9%88%E0%B8%B2%E0%B8%84%E0%B8%B4%E0%B8%94%E0%B8%96%E0%B8%B6%E0%B8%87%E0%B8%89%E0%B8%B1%E0%B8%99.jpg', 'รักฉันอย่าคิดถึงฉัน เป็นภาพยนตร์ไทยแนวรักโรแมนติคสยองขวัญ ซึ่งมีกำหนดจัดฉายในวันที่ 31 พฤษภาคม พ.ศ. 2555 กำกับโดย มณฑล อารยางกูร นำแสดงโดย เจษฎาภรณ์ ผลดี, อภิญญา สกุลเจริญสุข และ ณัฐฐาวีรนุช ทองมี ซึ่งเป็นเรื่องราวว่าด้วยความรักของชายหญิงสองคนที่คิดถึงต่อกันแม้ว่าฝ่ายหญิงจะตายจากไปแล้วก็ตาม', 'https://www.youtube.com/watch?v=DA_EYdx6jqY', 'https://youtu.be/6HBkiNMifbo', 5.6, '122 mins');

-- --------------------------------------------------------

--
-- Table structure for table `data_movie`
--

CREATE TABLE `data_movie` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `vdo_ex` text NOT NULL,
  `vdo_main` text NOT NULL,
  `star` float NOT NULL,
  `min` text NOT NULL,
  `movie_row` enum('movie1','cartoon1','movie2') NOT NULL DEFAULT 'movie1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_movie`
--

INSERT INTO `data_movie` (`id`, `name`, `img`, `vdo_ex`, `vdo_main`, `star`, `min`, `movie_row`) VALUES
(1, 'คุณนายโฮ  ', 'https://i.pinimg.com/736x/8f/99/6e/8f996e259251545b8b1f13b2027875f5.jpg', 'https://www.youtube.com/embed/xnCrTWNcm7g', 'https://www.youtube.com/embed/pEG-DRrrfcU', 5, '107 mins ', 'movie1'),
(2, 'The Little Mermaid', 'https://moviecritic547554672.files.wordpress.com/2020/11/the-little-mermaid.jpg', 'https://www.youtube.com/embed/e4LfNLtVQqE', 'https://www.youtube.com/embed/l3H5vOQal9Q', 4.3, '81 mins', 'movie1'),
(3, 'น้ำผีนองสยองขวัญ ', 'https://m.media-amazon.com/images/S/pv-target-images/c32a4554aad66a8f91108bae5dd488dc3de7458936b77e252938b2975391650e.jpg', 'https://www.youtube.com/embed/XHJDy5RLUtg', 'https://www.youtube.com/embed/U124ttHuZh0', 6.5, '89 mins', 'movie1'),
(4, 'ชอบกด Like ใช่กด Love ', 'https://s.isanook.com/mv/0/ud/6/31870/like-poster.jpg', 'https://www.youtube.com/embed/hg9C_a2ZXuc', ' https://www.youtube.com/embed/neqhXolXiaI', 6.2, '110 mins', 'movie1'),
(5, 'Who Gets the Dog? ', 'https://m.media-amazon.com/images/M/MV5BMjMyMTI4OTMxMF5BMl5BanBnXkFtZTgwMTk2NTM2OTE@._V1_.jpg', 'https://www.youtube.com/embed/V3yqcVy67w8', 'https://www.youtube.com/embed/PsnmRWnPsxs', 4.9, '95 mins', 'movie1'),
(6, 'ฮาชิมะ โปรเจกต์ ', 'https://www.matichon.co.th/wp-content/uploads/2021/07/5-%E0%B8%AE%E0%B8%B2%E0%B8%8A%E0%B8%B4%E0%B8%A1%E0%B8%B0%E0%B9%82%E0%B8%9B%E0%B8%A3%E0%B9%80%E0%B8%88%E0%B8%81%E0%B8%95%E0%B9%8C-%E0%B9%84%E0%B8%A1%E0%B9%88%E0%B9%80%E0%B8%8A%E0%B8%B7%E0%B9%88%E0%B8%AD%E0%B8%95%E0%B9%89%E0%B8%AD%E0%B8%87%E0%B8%A5%E0%B8%9A%E0%B8%AB%E0%B8%A5%E0%B8%B9%E0%B9%88.jpeg', 'https://www.youtube.com/embed/ZX_-XBJNTfE ', 'https://www.youtube.com/embed/W0pKSP6A_uU ', 4.4, '116 mins', 'movie1'),
(7, 'Don\'t Knock Twice  ', 'https://images-na.ssl-images-amazon.com/images/S/pv-target-images/3b1ef313e5a7892b4872d95a9bd1c0a37d555b5e98cd1f3164b4d26478a86911._RI_V_TTW_.jpg', 'https://www.youtube.com/embed/QKDU4HylVSc', 'https://www.youtube.com/embed/8OpX2Vcgyb4', 5.1, '92 mins', 'movie1'),
(8, 'ฟัด จัง โตะ', 'https://s.isanook.com/mv/0/ud/7/36291/1475872_472530536189142_1359731744_n.jpg', 'https://www.youtube.com/embed/uXwhtnONLgo', 'https://www.youtube.com/watch?v=MYLHvLgpm6c', 5.1, '100 mins ', 'movie1'),
(10, 'คู่กรรม ', 'https://s.isanook.com/mv/0/ud/6/33836/sunset_theme_01.jpg', 'https://www.youtube.com/embed/eHfaxbW-ors', 'https://www.youtube.com/embed/5Dx-LZ4yKyw', 6.3, '120 mins ', 'movie1'),
(11, 'October Sonata ', 'http://4.bp.blogspot.com/_ImbGJcQ9_C4/S9flmPA2lsI/AAAAAAAAAFI/llxjyfBpgrg/s1600/44379-attachment.jpg', 'https://www.youtube.com/embed/Mo7TqUFrnLw', 'https://www.youtube.com/embed/INDmN9gItbg', 6.8, '108 mins', 'movie2'),
(12, 'BIG BOY ', 'https://m.media-amazon.com/images/M/MV5BMjJiM2E2YzQtYjYyYS00MDlhLTk4ZWItNmU3MDlmMjgxY2JlXkEyXkFqcGdeQXVyMzgxODI0MTk@._V1_.jpg', 'https://www.youtube.com/embed/W0YrrwP4Qto', 'https://www.youtube.com/embed/bqXWUPJwI5s', 4.8, '100 mins', 'movie2'),
(13, 'กัดกระชากเกรียน ', 'https://ptcdn.info/movies/2017/tPiaurwoKP-1491206840_o.jpg', 'https://www.youtube.com/embed/KPtp8qcaYpo', 'https://www.youtube.com/embed/dCvJLou9_6k', 4.2, '99 mins ', 'movie2'),
(14, 'สุดเขตสเล็ดเป็ด ', 'https://cdni-cf.ch7.com/dm/sz-md/i/mg/c/9/5/c95628eec9cbce87365222b050315772_34100420-attachment.jpg', 'https://www.youtube.com/embed/Q63Cu36_tys', 'https://www.youtube.com/embed/qZBhrChkhZk', 5.9, '110 mins ', 'movie2'),
(15, 'I MISS U รักฉันอย่าคิดถึงฉัน ', 'https://cdni-cf.ch7.com/dm/sz-md/i/mg/e/0/a/e0a76c29236a6bdc1ebebf30bb270fcf_6i_miss_u_%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B8%89%E0%B8%B1%E0%B8%99%E0%B8%AD%E0%B8%A2%E0%B9%88%E0%B8%B2%E0%B8%84%E0%B8%B4%E0%B8%94%E0%B8%96%E0%B8%B6%E0%B8%87%E0%B8%89%E0%B8%B1%E0%B8%99.jpg', 'https://www.youtube.com/embed/DA_EYdx6jqY ', 'https://www.youtube.com/embed/6HBkiNMifbo ', 5.6, '122 mins ', 'movie2'),
(16, '30 กำลังแจ๋ว ', 'https://s.isanook.com/mv/0/ud/4/20443/30-ss.jpg', 'https://www.youtube.com/embed/fT3F58UeI_g', 'https://www.youtube.com/embed/H0radHjHfBU ', 6.2, '119 mins', 'movie2'),
(17, 'เลิฟเฮี้ยวเฟี้ยวต๊อด ', 'https://upload.wikimedia.org/wikipedia/th/0/08/%E0%B9%82%E0%B8%9B%E0%B8%AA%E0%B9%80%E0%B8%95%E0%B8%AD%E0%B8%A3%E0%B9%8C_%E0%B9%80%E0%B8%A5%E0%B8%B4%E0%B8%9F%E0%B9%80%E0%B8%AE%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%A7%E0%B9%80%E0%B8%9F%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%A7%E0%B8%95%E0%B9%8A%E0%B8%AD%E0%B8%94.jpg', 'https://www.youtube.com/embed/-KuF4URLhOk', 'https://www.youtube.com/embed/TqKQEjqpjbQ', 5.6, '104 mins ', 'movie2'),
(18, 'วัยเป้งนักเลงขาสั้น ', 'https://cms.dmpcdn.com/movie/2021/05/18/4477aad0-b797-11eb-bdb4-5dd69eff079b_original.png', 'https://www.youtube.com/embed/dxj2rqWmol0', 'https://www.youtube.com/embed/60oR5k35jBk', 6, '110 mins ', 'movie2'),
(19, 'รักหมดแก้ว ', 'https://f.ptcdn.info/367/062/000/pmjo1045nlGSfJPs3P1s-o.jpg', 'https://www.youtube.com/watch?v=TPZe9Z3Icdo', 'https://www.youtube.com/embed/dnIo1v6E5Ds ', 5.4, '106 mins ', 'movie2'),
(20, 'DORAEMON THE MOVIE 2019', 'https://s359.kapook.com/pagebuilder/e4dd8575-d619-4768-8a2b-e1e57572ec78.jpg', 'https://www.youtube.com/embed/2tSsxjNfBfE', 'https://tv.line.me/embed/19942726_%E0%B9%82%E0%B8%94%E0%B8%A3%E0%B8%B2%E0%B9%80%E0%B8%AD%E0%B8%A1%E0%B8%AD%E0%B8%99%E0%B9%80%E0%B8%94%E0%B8%AD%E0%B8%B0%E0%B8%A1%E0%B8%B9%E0%B8%9F%E0%B8%A7%E0%B8%B5%E0%B9%88-%E0%B8%95%E0%B8%AD%E0%B8%99%E0%B9%82%E0%B8%99%E0%B8%9A%E0%B8%B4%E0%B8%95%E0%B8%B0%E0%B8%AA%E0%B8%B3%E0%B8%A3%E0%B8%A7%E0%B8%88%E0%B8%94%E0%B8%B4%E0%B8%99%E0%B9%81%E0%B8%94%E0%B8%99%E0%B8%88%E0%B8%B1%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B8%B2-%E0%B8%9E%E0%B8%B2%E0%B8%81%E0%B8%A2%E0%B9%8C%E0%B9%84%E0%B8%97%E0%B8%A2?', 7.1, '119 mins', 'cartoon1'),
(21, 'Classroom of the Elite ', 'https://i.pinimg.com/originals/24/f0/7c/24f07c840efbfb622f5268ecd9a67540.jpg', 'https://www.youtube.com/embed/RTvdxGyWV6c', 'https://www.youtube.com/embed/c0HJ_AxH7fw', 7.6, '288+ mins', 'cartoon1'),
(22, 'Majo no Tabitabi', 'https://m.media-amazon.com/images/M/MV5BZWU3MzhkNDYtZTliNS00OWQ2LTlhMzktYzk2NWMyZmE1NzAyXkEyXkFqcGc@._V1_FMjpg_UX1000_.jpg', 'https://www.youtube.com/embed/6UuTrcsWbZ8', 'https://www.youtube.com/embed/KV1zBjWLzDI?list=PLIa05JMgYhhZfa3Ihses-7e7PnDtmFSxP', 7.1, '286 mins', 'cartoon1'),
(23, 'DORAEMON THE MOVIE  2017', 'https://popcornusa.s3.amazonaws.com/movies/650/4782-0-Doraemon.jpg', 'https://www.youtube.com/embed/9fjw96NNg7o', 'https://tv.line.me/embed/19919586_%E0%B9%82%E0%B8%94%E0%B8%A3%E0%B8%B2%E0%B9%80%E0%B8%AD%E0%B8%A1%E0%B8%AD%E0%B8%99%E0%B9%80%E0%B8%94%E0%B8%AD%E0%B8%B0%E0%B8%A1%E0%B8%B9%E0%B8%9F%E0%B8%A7%E0%B8%B5%E0%B9%88-%E0%B8%95%E0%B8%AD%E0%B8%99%E0%B8%84%E0%B8%B2%E0%B8%8A%E0%B8%B4%E0%B9%82%E0%B8%84%E0%B8%8A%E0%B8%B4-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9C%E0%B8%88%E0%B8%8D%E0%B8%A0%E0%B8%B1%E0%B8%A2%E0%B8%82%E0%B8%B1%E0%B9%89%E0%B8%A7%E0%B9%82%E0%B8%A5%E0%B8%81%E0%B9%83%E0%B8%95%E0%B9%89%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B9%82%E0%B8%99%E0%B8%9A%E0%B8%B4%E0%B8%95%E0%B8%B0-%E0%B8%9E%E0%B8%B2%E0%B8%81%E0%B8%A2%E0%B9%8C%E0%B9%84%E0%B8%97%E0%B8%A2', 6.7, '100 mins', 'cartoon1'),
(24, 'Sword Art Online Ordinal Scale ', 'https://i.pinimg.com/originals/24/ea/1d/24ea1d4259d6d4ec191e3c7b50d5fc1c.jpg', 'https://www.youtube.com/embed/VKyz5SVH1Ug', 'https://tv.line.me/embed/22194706_sword-art-online-the-movie-ordinal-scale-%E0%B8%8B%E0%B8%B1%E0%B8%9A%E0%B9%84%E0%B8%97%E0%B8%A2', 7.4, '120 mins', 'cartoon1'),
(25, 'DORAEMON THE MOVIE 2020 ', 'https://upload.wikimedia.org/wikipedia/th/4/43/Doraemon_the_Movie_Nobita%27s_New_Dinosaur_Poster.jpg', 'https://www.youtube.com/embed/XmaCh6Gnh70', 'https://tv.line.me/embed/19919642_โดราเอมอนเดอะมูฟวี่-ตอนไดโนเสาร์ตัวใหม่ของโนบิตะ-พากย์ไทย', 7.4, '110 mins', 'cartoon1'),
(26, 'BOFURI', 'https://resizing.flixster.com/3gkIl4rrpg8t8B_l9JRDh0FKmn0=/fit-in/705x460/v2/https://resizing.flixster.com/-XZAfHZM39UwaGJIFWKAE8fS0ak=/v3/t/assets/p17821258_b_v13_af.jpg', 'https://www.youtube.com/embed/0-_sUrzPlNw', 'https://www.youtube.com/embed/hBYfMHXo_Ao', 7.5, '284 mins', 'cartoon1'),
(27, 'รักไร้เสียง', 'https://upload.wikimedia.org/wikipedia/th/f/fa/%E0%B8%A3%E0%B8%B1%E0%B8%81%E0%B9%84%E0%B8%A3%E0%B9%89%E0%B9%80%E0%B8%AA%E0%B8%B5%E0%B8%A2%E0%B8%87_%28%E0%B8%A0%E0%B8%B2%E0%B8%9E%E0%B8%A2%E0%B8%99%E0%B8%95%E0%B8%A3%E0%B9%8C%29.jpg', 'https://www.youtube.com/embed/4s9kePwSH2w', 'https://www.youtube.com/embed/nrQfdq1S_8M', 8.2, '129 mins', 'cartoon1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_banner`
--
ALTER TABLE `data_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_movie`
--
ALTER TABLE `data_movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_banner`
--
ALTER TABLE `data_banner`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_movie`
--
ALTER TABLE `data_movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
