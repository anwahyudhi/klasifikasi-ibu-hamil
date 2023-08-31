-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2020 at 06:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `hasil_klasifikasi`
--

CREATE TABLE `hasil_klasifikasi` (
  `id_ibu_hasil` int(11) NOT NULL,
  `nama_ibu_hasil` varchar(255) NOT NULL,
  `lahir_ibu_hasil` int(11) NOT NULL,
  `berat_badan_hasil` float NOT NULL,
  `lingkar_lengan_atas_hasil` float NOT NULL,
  `hemoglobin_hasil` float NOT NULL,
  `paritas_hasil` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_klasifikasi`
--

INSERT INTO `hasil_klasifikasi` (`id_ibu_hasil`, `nama_ibu_hasil`, `lahir_ibu_hasil`, `berat_badan_hasil`, `lingkar_lengan_atas_hasil`, `hemoglobin_hasil`, `paritas_hasil`) VALUES
(1, 'asdsa', 12, 1, 2, 3, 4),
(2, 'asdsa', 12, 1, 2, 3, 4),
(3, 'asdsa', 12, 1, 2, 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `ibu_hamil`
--

CREATE TABLE `ibu_hamil` (
  `id_ibu` int(11) NOT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `lahir_ibu` varchar(255) DEFAULT NULL,
  `berat_badan` varchar(255) DEFAULT NULL,
  `lingkar_lengan_atas` varchar(255) DEFAULT NULL,
  `hemoglobin` varchar(255) DEFAULT NULL,
  `paritas` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ibu_hamil`
--

INSERT INTO `ibu_hamil` (`id_ibu`, `nama_ibu`, `lahir_ibu`, `berat_badan`, `lingkar_lengan_atas`, `hemoglobin`, `paritas`) VALUES
(160, 'Pasien 1', '30', '58', '29', '13', '3'),
(161, 'Pasien 2', '17', '50', '25', '12', '3'),
(162, 'Pasien 3', '25', '43', '21.5', '10', '1'),
(163, 'Pasien 4', '23', '46', '23', '11', '1'),
(164, 'Pasien 5', '25', '56', '28', '12', '1'),
(165, 'Pasien 6', '27', '52', '26', '12', '2'),
(166, 'Pasien 7', '33', '46', '23', '11', '1'),
(167, 'Pasien 8', '30', '61', '30.5', '12', '2'),
(168, 'Pasien 9', '32', '48', '24', '12', '4'),
(169, 'Pasien 10', '29', '52', '26', '11', '1'),
(170, 'Pasien 11', '18', '46', '23', '11', '2'),
(171, 'Pasien 12', '18', '46', '23', '12', '3'),
(172, 'Pasien 13', '13', '50', '25', '11', '2'),
(173, 'Pasien 14', '28', '60', '30', '11', '3'),
(174, 'Pasien 15', '29', '40', '20', '13', '1'),
(175, 'Pasien 16', '25', '43', '21.5', '10', '1'),
(176, 'Pasien 17', '38', '62', '31', '13', '2'),
(177, 'Pasien 18', '38', '48', '24', '11', '4'),
(178, 'Pasien 19', '20', '52', '26', '13', '1'),
(179, 'Pasien 20', '26', '46', '23', '11', '3'),
(180, 'Pasien 21', '26', '45', '22.5', '12', '1'),
(181, 'Pasien 22', '38', '64', '32', '13', '4'),
(182, 'Pasien 23', '17', '45', '22.5', '13', '1'),
(183, 'Pasien 24', '22', '48', '24', '12', '1'),
(184, 'Pasien 25', '28', '45', '22.5', '10', '2'),
(185, 'Pasien 26', '19', '44', '22', '12', '1'),
(186, 'Pasien 27', '26', '49', '24.5', '12', '4'),
(187, 'Pasien 28', '', '54', '25', '-', '1'),
(188, 'Pasien 29', '32', '50', '25', '12', '2'),
(189, 'Pasien 30', '23', '48', '24', '11', '2'),
(190, 'Pasien 31', '25', '58', '29', '11', '1'),
(191, 'Pasien 32', '29', '46', '23', '12', '3'),
(192, 'Pasien 33', '30', '52', '26', '13', '2'),
(193, 'Pasien 34', '28', '50', '25', '14', '2'),
(194, 'Pasien 35', '26', '58', '29', '11', '2'),
(195, 'Pasien 36', '35', '54', '27', '11', '4'),
(196, 'Pasien 37', '33', '60', '30', '12', '3'),
(197, 'Pasien 38', '27', '52', '26', '12', '1'),
(198, 'Pasien 39', '30', '54', '27', '12', '3'),
(199, 'Pasien 40', '40', '56', '28', '12', '4'),
(200, 'Pasien 41', '33', '62', '31', '12', '1'),
(201, 'Pasien 42', '29', '58', '29', '12', '1'),
(202, 'Pasien 43', '37', '64', '32', '13', '1'),
(203, 'Pasien 44', '30', '56', '28', '14', '1'),
(204, 'Pasien 45', '30', '54', '27', '10', '3'),
(205, 'Pasien 46', '36', '42', '-', '13', '3'),
(206, 'Pasien 47', '30', '52', '26', '14', '1'),
(207, 'Pasien 48', '31', '52', '26', '13', '2'),
(208, 'Pasien 49', '20', '25', '-', '1', '0'),
(209, 'Pasien 50', '35', '62', '31', '12', '3'),
(210, 'Pasien 51', '31', '46', '23', '11', '2'),
(211, 'Pasien 52', '27', '52', '26', '13', '3'),
(212, 'Pasien 53', '20', '44', '22', '11', '2'),
(213, 'Pasien 54', '31', '46', '23', '12', '3'),
(214, 'Pasien 55', '19', '70', '35', '14', '1'),
(215, 'Pasien 56', '27', '64', '32', '11', '2'),
(216, 'Pasien 57', '39', '63', '31.5', '12', '3'),
(217, 'Pasien 58', '32', '54', '27', '13', '2'),
(218, 'Pasien 59', '28', '52', '26', '10.8', '1'),
(219, 'Pasien 60', '33', '48', '24', '13', '1'),
(220, 'Pasien 61', '30', '59', '29.5', '13', '1'),
(221, 'Pasien 62', '47', '25', '-', '5', '0'),
(222, 'Pasien 63', '32', '60', '30', '14', '4'),
(223, 'Pasien 64', '38', '66', '33', '11.6', '6'),
(224, 'Pasien 65', '', '58', '22', '-', '1'),
(225, 'Pasien 66', '25', '44', '22', '11', '1'),
(226, 'Pasien 67', '37', '62', '31', '12', '2'),
(227, 'Pasien 68', '28', '55', '27.5', '10', '1'),
(228, 'Pasien 69', '31', '60', '30', '13', '1'),
(229, 'Pasien 70', '', '50', '', '11', '1'),
(230, 'Pasien 71', '20', '50', '25', '11', '2'),
(231, 'Pasien 72', '35.9', '25', '-', '2', ''),
(232, 'Pasien 73', '28', '53', '26.5', '12', '1'),
(233, 'Pasien 74', '34', '72', '36', '13', '3'),
(234, 'Pasien 75', '36', '57', '28.5', '11', '3'),
(235, 'Pasien 76', '32', '49', '24.5', '10', '3'),
(236, 'Pasien 77', '34', '60', '30', '11.7', '3'),
(237, 'Pasien 78', '28', '50', '25', '13.8', '4'),
(238, 'Pasien 79', '34', '64', '32', '11.5', '3'),
(239, 'Pasien 80', '29', '68', '34', '12.5', '2'),
(240, 'Pasien 81', '37', '48', '24', '9', '5'),
(241, 'Pasien 82', '36', '50', '25', '10.6', '3'),
(242, 'Pasien 83', '28', '52', '26', '10', '1'),
(243, 'Pasien 84', '30', '60', '30', '11', '1'),
(244, 'Pasien 85', '34', '49', '24.5', '10', '1'),
(245, 'Pasien 86', '20', '50', '25', '11.5', '1'),
(246, 'Pasien 87', '38', '56', '28', '10.8', '2'),
(247, 'Pasien 88', '27', '46', '23', '10.8', '2'),
(248, 'Pasien 89', '33', '54', '27', '12', '3'),
(249, 'Pasien 90', '39', '64', '32', '13', '2'),
(250, 'Pasien 91', '27', '60', '30', '12', '1'),
(251, 'Pasien 92', '43', '64', '32', '12', '4'),
(252, 'Pasien 93', '32', '58', '29', '12', '1'),
(253, 'Pasien 94', '36', '50', '25', '12', '5'),
(254, 'Pasien 95', '15', '66', '33', '12', '4'),
(255, 'Pasien 96', '38', '50', '25', '12', '3'),
(256, 'Pasien 97', '24', '50', '25', '12', '2'),
(257, 'Pasien 98', '38', '72', '36', '11', '4'),
(258, 'Pasien 99', '24', '48', '24', '12', '1'),
(259, 'Pasien 100', '32', '46', '23', '12', '3'),
(260, 'Pasien 101', '30', '58', '29', '13', '2'),
(261, 'Pasien 102', '25', '54', '23', '13', '1'),
(262, 'Pasien 103', '43', '43', '35', '-', '4'),
(263, 'Pasien 104', '32', '63', '31', '-', '2'),
(264, 'Pasien 105', '24', '48', '24', '12', '3'),
(265, 'Pasien 106', '', '42', '26', '-', '2'),
(266, 'Pasien 107', '31', '56', '28', '12', '2'),
(267, 'Pasien 108', '28', '50', '25', '12', '1'),
(268, 'Pasien 109', '', '57', '24', '-', '1'),
(269, 'Pasien 110', '23', '52', '26', '11', '2'),
(270, 'Pasien 111', '', '67', '24', '-', '1'),
(271, 'Pasien 112', '', '39.2', '20', '-', '2'),
(272, 'Pasien 113', '22', '49', '24.5', '11', '1'),
(273, 'Pasien 114', '', '37.8', '22.5', '-', '1'),
(274, 'Pasien 115', '', '43', '24', '-', '1'),
(275, 'Pasien 116', '', '-', '28', '-', '5'),
(276, 'Pasien 117', '', '-', '25', '-', '3'),
(277, 'Pasien 118', '19', '51', '25.5', '12', '0'),
(278, 'Pasien 119', '34', '55', '27.5', '12', '3'),
(279, 'Pasien 120', '35', '54', '27', '11', '5'),
(280, 'Pasien 121', '25', '50', '25', '11', '0'),
(281, 'Pasien 122', '24', '48', '24', '10', '2'),
(282, 'Pasien 123', '33', '50', '25', '12', '4'),
(283, 'Pasien 124', '25', '50', '25', '11', '3'),
(284, 'Pasien 125', '37', '60', '30', '11', '3'),
(285, 'Pasien 126', '25', '52', '26', '12', '1'),
(286, 'Pasien 127', '26', '52', '26', '9', '1'),
(287, 'Pasien 128', '22', '48', '24', '10', '0'),
(288, 'Pasien 129', '35', '54', '27', '12', '2'),
(289, 'Pasien 130', '34', '48', '24', '11', '1'),
(290, 'Pasien 131', '27', '64', '32', '11', '3'),
(291, 'Pasien 132', '23', '44', '22', '11', '1'),
(292, 'Pasien 133', '28', '44', '22', '10', '1'),
(293, 'Pasien 134', '22', '51', '25.5', '9', '0'),
(294, 'Pasien 135', '28', '56', '28', '12', '1'),
(295, 'Pasien 136', '32', '50', '25', '10', '4'),
(296, 'Pasien 137', '31', '44', '22', '10', '0'),
(297, 'Pasien 138', '17', '44', '22', '9', '0'),
(298, 'Pasien 139', '23', '54', '27', '12', '0'),
(299, 'Pasien 140', '16', '55', '27.5', '13', '1'),
(300, 'Pasien 141', '18', '50', '25', '12', '0'),
(301, 'Pasien 142', '37', '52', '26', '11', '6'),
(302, 'Pasien 143', '35', '58', '29', '12', '3'),
(303, 'Pasien 144', '23', '50', '25', '12', '0'),
(304, 'Pasien 145', '19', '43', '21.5', '11', '0'),
(305, 'Pasien 146', '29', '68', '34', '13', '1'),
(306, 'Pasien 147', '25', '50', '25', '11', '1'),
(307, 'Pasien 148', '42', '56', '28', '15', '3'),
(308, 'Pasien 149', '18', '45', '22.5', '12', '0'),
(309, 'Pasien 150', '30', '60', '30', '12', '2'),
(310, 'Pasien 151', '25', '40', '20', '12', '0'),
(311, 'Pasien 152', '34', '58', '29', '12', '3'),
(312, 'Pasien 153', '25', '52', '26', '11', '1'),
(313, 'Pasien 154', '27', '50', '25', '11', '2'),
(314, 'Pasien 155', '27', '52', '26', '13', '1'),
(315, 'Pasien 156', '24', '40', '20', '11', '0'),
(316, 'Pasien 157', '17', '46', '23', '11', '0'),
(317, 'Pasien 1', '30', '58', '29', '13', '3'),
(318, 'Pasien 2', '17', '50', '25', '12', '3'),
(319, 'Pasien 3', '25', '43', '21.5', '10', '1'),
(320, 'Pasien 4', '23', '46', '23', '11', '1'),
(321, 'Pasien 5', '25', '56', '28', '12', '1'),
(322, 'Pasien 6', '27', '52', '26', '12', '2'),
(323, 'Pasien 7', '33', '46', '23', '11', '1'),
(324, 'Pasien 8', '30', '61', '30.5', '12', '2'),
(325, 'Pasien 9', '32', '48', '24', '12', '4'),
(326, 'Pasien 10', '29', '52', '26', '11', '1'),
(327, 'Pasien 11', '18', '46', '23', '11', '2'),
(328, 'Pasien 12', '18', '46', '23', '12', '3'),
(329, 'Pasien 13', '13', '50', '25', '11', '2'),
(330, 'Pasien 14', '28', '60', '30', '11', '3'),
(331, 'Pasien 15', '29', '40', '20', '13', '1'),
(332, 'Pasien 16', '25', '43', '21.5', '10', '1'),
(333, 'Pasien 17', '38', '62', '31', '13', '2'),
(334, 'Pasien 18', '38', '48', '24', '11', '4'),
(335, 'Pasien 19', '20', '52', '26', '13', '1'),
(336, 'Pasien 20', '26', '46', '23', '11', '3'),
(337, 'Pasien 21', '26', '45', '22.5', '12', '1'),
(338, 'Pasien 22', '38', '64', '32', '13', '4'),
(339, 'Pasien 23', '17', '45', '22.5', '13', '1'),
(340, 'Pasien 24', '22', '48', '24', '12', '1'),
(341, 'Pasien 25', '28', '45', '22.5', '10', '2'),
(342, 'Pasien 26', '19', '44', '22', '12', '1'),
(343, 'Pasien 27', '26', '49', '24.5', '12', '4'),
(344, 'Pasien 28', '', '54', '25', '-', '1'),
(345, 'Pasien 29', '32', '50', '25', '12', '2'),
(346, 'Pasien 30', '23', '48', '24', '11', '2'),
(347, 'Pasien 31', '25', '58', '29', '11', '1'),
(348, 'Pasien 32', '29', '46', '23', '12', '3'),
(349, 'Pasien 33', '30', '52', '26', '13', '2'),
(350, 'Pasien 34', '28', '50', '25', '14', '2'),
(351, 'Pasien 35', '26', '58', '29', '11', '2'),
(352, 'Pasien 36', '35', '54', '27', '11', '4'),
(353, 'Pasien 37', '33', '60', '30', '12', '3'),
(354, 'Pasien 38', '27', '52', '26', '12', '1'),
(355, 'Pasien 39', '30', '54', '27', '12', '3'),
(356, 'Pasien 40', '40', '56', '28', '12', '4'),
(357, 'Pasien 41', '33', '62', '31', '12', '1'),
(358, 'Pasien 42', '29', '58', '29', '12', '1'),
(359, 'Pasien 43', '37', '64', '32', '13', '1'),
(360, 'Pasien 44', '30', '56', '28', '14', '1'),
(361, 'Pasien 45', '30', '54', '27', '10', '3'),
(362, 'Pasien 46', '36', '42', '-', '13', '3'),
(363, 'Pasien 47', '30', '52', '26', '14', '1'),
(364, 'Pasien 48', '31', '52', '26', '13', '2'),
(365, 'Pasien 49', '20', '25', '-', '1', '0'),
(366, 'Pasien 50', '35', '62', '31', '12', '3'),
(367, 'Pasien 51', '31', '46', '23', '11', '2'),
(368, 'Pasien 52', '27', '52', '26', '13', '3'),
(369, 'Pasien 53', '20', '44', '22', '11', '2'),
(370, 'Pasien 54', '31', '46', '23', '12', '3'),
(371, 'Pasien 55', '19', '70', '35', '14', '1'),
(372, 'Pasien 56', '27', '64', '32', '11', '2'),
(373, 'Pasien 57', '39', '63', '31.5', '12', '3'),
(374, 'Pasien 58', '32', '54', '27', '13', '2'),
(375, 'Pasien 59', '28', '52', '26', '10.8', '1'),
(376, 'Pasien 60', '33', '48', '24', '13', '1'),
(377, 'Pasien 61', '30', '59', '29.5', '13', '1'),
(378, 'Pasien 62', '47', '25', '-', '5', '0'),
(379, 'Pasien 63', '32', '60', '30', '14', '4'),
(380, 'Pasien 64', '38', '66', '33', '11.6', '6'),
(381, 'Pasien 65', '', '58', '22', '-', '1'),
(382, 'Pasien 66', '25', '44', '22', '11', '1'),
(383, 'Pasien 67', '37', '62', '31', '12', '2'),
(384, 'Pasien 68', '28', '55', '27.5', '10', '1'),
(385, 'Pasien 69', '31', '60', '30', '13', '1'),
(386, 'Pasien 70', '', '50', '', '11', '1'),
(387, 'Pasien 71', '20', '50', '25', '11', '2'),
(388, 'Pasien 72', '35.9', '25', '-', '2', ''),
(389, 'Pasien 73', '28', '53', '26.5', '12', '1'),
(390, 'Pasien 74', '34', '72', '36', '13', '3'),
(391, 'Pasien 75', '36', '57', '28.5', '11', '3'),
(392, 'Pasien 76', '32', '49', '24.5', '10', '3'),
(393, 'Pasien 77', '34', '60', '30', '11.7', '3'),
(394, 'Pasien 78', '28', '50', '25', '13.8', '4'),
(395, 'Pasien 79', '34', '64', '32', '11.5', '3'),
(396, 'Pasien 80', '29', '68', '34', '12.5', '2'),
(397, 'Pasien 81', '37', '48', '24', '9', '5'),
(398, 'Pasien 82', '36', '50', '25', '10.6', '3'),
(399, 'Pasien 83', '28', '52', '26', '10', '1'),
(400, 'Pasien 84', '30', '60', '30', '11', '1'),
(401, 'Pasien 85', '34', '49', '24.5', '10', '1'),
(402, 'Pasien 86', '20', '50', '25', '11.5', '1'),
(403, 'Pasien 87', '38', '56', '28', '10.8', '2'),
(404, 'Pasien 88', '27', '46', '23', '10.8', '2'),
(405, 'Pasien 89', '33', '54', '27', '12', '3'),
(406, 'Pasien 90', '39', '64', '32', '13', '2'),
(407, 'Pasien 91', '27', '60', '30', '12', '1'),
(408, 'Pasien 92', '43', '64', '32', '12', '4'),
(409, 'Pasien 93', '32', '58', '29', '12', '1'),
(410, 'Pasien 94', '36', '50', '25', '12', '5'),
(411, 'Pasien 95', '15', '66', '33', '12', '4'),
(412, 'Pasien 96', '38', '50', '25', '12', '3'),
(413, 'Pasien 97', '24', '50', '25', '12', '2'),
(414, 'Pasien 98', '38', '72', '36', '11', '4'),
(415, 'Pasien 99', '24', '48', '24', '12', '1'),
(416, 'Pasien 100', '32', '46', '23', '12', '3'),
(417, 'Pasien 101', '30', '58', '29', '13', '2'),
(418, 'Pasien 102', '25', '54', '23', '13', '1'),
(419, 'Pasien 103', '43', '43', '35', '-', '4'),
(420, 'Pasien 104', '32', '63', '31', '-', '2'),
(421, 'Pasien 105', '24', '48', '24', '12', '3'),
(422, 'Pasien 106', '', '42', '26', '-', '2'),
(423, 'Pasien 107', '31', '56', '28', '12', '2'),
(424, 'Pasien 108', '28', '50', '25', '12', '1'),
(425, 'Pasien 109', '', '57', '24', '-', '1'),
(426, 'Pasien 110', '23', '52', '26', '11', '2'),
(427, 'Pasien 111', '', '67', '24', '-', '1'),
(428, 'Pasien 112', '', '39.2', '20', '-', '2'),
(429, 'Pasien 113', '22', '49', '24.5', '11', '1'),
(430, 'Pasien 114', '', '37.8', '22.5', '-', '1'),
(431, 'Pasien 115', '', '43', '24', '-', '1'),
(432, 'Pasien 116', '', '-', '28', '-', '5'),
(433, 'Pasien 117', '', '-', '25', '-', '3'),
(434, 'Pasien 118', '19', '51', '25.5', '12', '0'),
(435, 'Pasien 119', '34', '55', '27.5', '12', '3'),
(436, 'Pasien 120', '35', '54', '27', '11', '5'),
(437, 'Pasien 121', '25', '50', '25', '11', '0'),
(438, 'Pasien 122', '24', '48', '24', '10', '2'),
(439, 'Pasien 123', '33', '50', '25', '12', '4'),
(440, 'Pasien 124', '25', '50', '25', '11', '3'),
(441, 'Pasien 125', '37', '60', '30', '11', '3'),
(442, 'Pasien 126', '25', '52', '26', '12', '1'),
(443, 'Pasien 127', '26', '52', '26', '9', '1'),
(444, 'Pasien 128', '22', '48', '24', '10', '0'),
(445, 'Pasien 129', '35', '54', '27', '12', '2'),
(446, 'Pasien 130', '34', '48', '24', '11', '1'),
(447, 'Pasien 131', '27', '64', '32', '11', '3'),
(448, 'Pasien 132', '23', '44', '22', '11', '1'),
(449, 'Pasien 133', '28', '44', '22', '10', '1'),
(450, 'Pasien 134', '22', '51', '25.5', '9', '0'),
(451, 'Pasien 135', '28', '56', '28', '12', '1'),
(452, 'Pasien 136', '32', '50', '25', '10', '4'),
(453, 'Pasien 137', '31', '44', '22', '10', '0'),
(454, 'Pasien 138', '17', '44', '22', '9', '0'),
(455, 'Pasien 139', '23', '54', '27', '12', '0'),
(456, 'Pasien 140', '16', '55', '27.5', '13', '1'),
(457, 'Pasien 141', '18', '50', '25', '12', '0'),
(458, 'Pasien 142', '37', '52', '26', '11', '6'),
(459, 'Pasien 143', '35', '58', '29', '12', '3'),
(460, 'Pasien 144', '23', '50', '25', '12', '0'),
(461, 'Pasien 145', '19', '43', '21.5', '11', '0'),
(462, 'Pasien 146', '29', '68', '34', '13', '1'),
(463, 'Pasien 147', '25', '50', '25', '11', '1'),
(464, 'Pasien 148', '42', '56', '28', '15', '3'),
(465, 'Pasien 149', '18', '45', '22.5', '12', '0'),
(466, 'Pasien 150', '30', '60', '30', '12', '2'),
(467, 'Pasien 151', '25', '40', '20', '12', '0'),
(468, 'Pasien 152', '34', '58', '29', '12', '3'),
(469, 'Pasien 153', '25', '52', '26', '11', '1'),
(470, 'Pasien 154', '27', '50', '25', '11', '2'),
(471, 'Pasien 155', '27', '52', '26', '13', '1'),
(472, 'Pasien 156', '24', '40', '20', '11', '0'),
(473, 'Pasien 157', '17', '46', '23', '11', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `tugas` enum('admin','super') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `username`, `password`, `nama_pengguna`, `tugas`) VALUES
(1, 'ironman', 'ironman', 'Tony Starks', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `saran_gizi`
--

CREATE TABLE `saran_gizi` (
  `id_gizi` int(11) NOT NULL,
  `saran` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saran_gizi`
--

INSERT INTO `saran_gizi` (`id_gizi`, `saran`) VALUES
(1, ' Anda Sehat 2'),
(2, 'a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hasil_klasifikasi`
--
ALTER TABLE `hasil_klasifikasi`
  ADD PRIMARY KEY (`id_ibu_hasil`);

--
-- Indexes for table `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saran_gizi`
--
ALTER TABLE `saran_gizi`
  ADD PRIMARY KEY (`id_gizi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hasil_klasifikasi`
--
ALTER TABLE `hasil_klasifikasi`
  MODIFY `id_ibu_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ibu_hamil`
--
ALTER TABLE `ibu_hamil`
  MODIFY `id_ibu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=474;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `saran_gizi`
--
ALTER TABLE `saran_gizi`
  MODIFY `id_gizi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;