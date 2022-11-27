-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2021 at 07:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `valid` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `token`, `valid`) VALUES
(1, 'b17cca1e311e684fd3d698ac5dbdd8ab', 0),
(2, 'e2c0fda8614bffbf22c53c9f1fb38f3c', 1),
(3, '8490c00f66f52e1fba3965e7fa76eb98', 1),
(4, 'bc402311adac337534d3122561bbd662', 1),
(5, 'ac3d59fb5db654df29fe75bc25ca10cd', 1),
(6, 'fe8f8608badd6d1f749877a693d6c279', 1),
(7, '742093558f6e55a5639172a5fd95139b', 1),
(8, 'd33b2d4413163b2dc42989b5f7140539', 1),
(9, '6b979ebb6e305f209a491da5a09cea62', 1),
(10, '05259201655d3595157b47e7c9858472', 1),
(11, '6eb74c7e3eb63b06e924a1862e5c2949', 1),
(12, '62d9ecd429294518a624ba859ea04b02', 1),
(13, 'f164be4d253a525cdfa878a92de3bcc0', 1),
(14, 'cf8aa55dd6191f2bf5a22a69829eb9e2', 1),
(15, '8588b534b09289833ea3b5d130139a2c', 1),
(16, '3087439d678fff8b05ab2c70c0bba337', 1),
(17, '007910f8fb442b1c056c6853662c830f', 1),
(18, 'a41cb7914109f0b6f901364a4559dcbe', 1),
(19, '28c38ea6804a699bc4c5e0caf5d1175f', 1),
(20, 'e0b12572fef32be94a5273b83038a9a8', 1),
(21, 'd8768f344c7643a18cda601c31c5df9b', 1),
(22, 'c729f011179e0688b07a5cf1c486a7ee', 1),
(23, 'd4a394fd16a65b4f26ed7a6297e13c61', 1),
(24, 'f22ca38f3605f7a4b8381287d3dfaf0f', 1),
(25, '6ba57ca3fcdd0a1c4e23f375594df3a8', 1),
(26, 'ed13e2761324fee36bdd6a4adc1f09b5', 1),
(27, 'dbb0cf2c4610a812a190dc908d60c106', 1),
(28, '7ebc1a633a1498643828d29e35135472', 1),
(29, '0068bbb4876cb938d803b580fdb456e7', 1),
(30, '37df13ddac7c8c98099dcbdb799ae7b3', 1),
(31, 'c3d73a349f0d37d0a9ba5cdce19c7f6d', 1),
(32, 'ec589f311edfcd10ac184c7e63193a32', 1),
(33, 'e14b9d22cdfd6b6d73a0be2066bc9bf1', 1),
(34, '056212d3cff0e4fdb1d9f3bbda267f77', 1),
(35, 'c5d703516b1f298e289fe06f346a8fc4', 0),
(36, '8ec9b93e82709e7bf925d2fd2259ffee', 1),
(37, 'ce157f3463395d3781cb2097c75af75e', 1),
(38, '9d79b52b0d41c6099b26c72f0e4a386e', 1),
(39, '29ec77275cc5eb93e53ec6942d1eaaf3', 1),
(40, '6924a1645bc8b8d002db5231da85e2fe', 1),
(41, 'f956a8edf9ef7b352c89c13f86283978', 1),
(42, 'ed0c361e1e6a875aee36f2716b256d0f', 1),
(43, '4cb541dccb9123e62b9eae8bc0ae4faa', 1),
(44, '18cb13d7bbd81bbb70d03fbd68b278fe', 1),
(45, 'f3922105953acb1fdd085c836032ba6a', 1),
(46, '8268a15e1320614dd05d0dc7acc021e6', 1),
(47, 'dbc0e3cd6c281846cb98cc95e43755e6', 1),
(48, 'aca36e880d5df8a8c163ec944a91729a', 1),
(49, '8138d35e713a93a50d49f7d8fbd8a422', 1),
(50, '919f63a9db1804401fe1790d59154447', 1),
(51, '36fc336305125c00c2ef800607f36fac', 1),
(52, '39dd0eaa0e71f45c95ad2ba592cf2359', 1),
(53, '0d5cc8ab081470682ee7a3b3c23cbad9', 1),
(54, 'eeb4453ed07daa6de0e036e6496c1121', 1),
(55, 'd94a700f1a5dc6bf89e52b8ebb7c4431', 1),
(56, '97bce3bace804a1660fe7630c2a6803c', 1),
(57, 'e7f9825d090ae92edb8ad3fdc78cd6a8', 1),
(58, 'cf8843269a62fd41d7457973d8ea1124', 1),
(59, 'ec089097cf60a13e779f23f65ab11c64', 1),
(60, '543fe6902fc4c157dd608eb1d0e63fb7', 1),
(61, 'df631d8b8cf9b042aba617a6ed0e1a62', 1),
(62, '6c1b11496c192a60f0b6d87ce6008450', 1),
(63, '3df475a86020fb3d5e3badf1ba451efb', 1),
(64, '8f93056af429132454f98a9321ec03d6', 1),
(65, 'fcd8e56da2d5a1ee0b53c5a2a645dcfc', 1),
(66, '3bcca3214b452214eb11102cf5664434', 1),
(67, 'ec095c2211ee8b8f8cc35a7c2eee1412', 1),
(68, 'abc58369bd4b57856b32e7d4e6c944d1', 1),
(69, '1d9e057ef5cbbdaeed3cef40593b72c5', 1),
(70, 'c8494c37b8ebc24d8796814b93dd7779', 1),
(71, 'bef59ab4c864c0bae0f4696eff5f11a7', 1),
(72, 'd53eb8d217215cffa23bfa096bdefa70', 1),
(73, 'b7375f9460966d4b938fa61695fa8bf7', 1),
(74, '227b66946761715ee06a7132f97d6716', 1),
(75, '2cacf1eda81c8d52cdb0cb46b3d1f70d', 1),
(76, '9f79ea99d63f9e9194151448fce02b82', 1),
(77, '83a5a5cf6dca41a0dec6f92ef4fadb0c', 1),
(78, '06bdb624b609cd7ca843259b00332764', 1),
(79, '8b5b48832172c912458a0aba89677718', 1),
(80, 'efb14be95cb5d99f049a7e95e0952c28', 1),
(81, 'd9fdb5bc0055c06ebf2d79f25a531ff5', 1),
(82, '22975228b948ed924d66dc0f002b2dcb', 1),
(83, 'a59e81102bb35423c15154367a071a83', 1),
(84, '8683477f5efeab71ae9bd65569e3e713', 1),
(85, 'a876b18eb0e847ad16ecadc91ee2dc42', 1),
(86, '18dfd4c46a533bd941d0f62d9989b5e3', 1),
(87, 'cf2f9db0b595e1af00d0a4d4266a2762', 1),
(88, 'd43897ce8a572e414fbf606e691b05da', 1),
(89, '77d291eb475646a4dcf764f435466293', 1),
(90, '09ee8f721fe883fcd39bf44973a5d877', 1),
(91, '3249a54336ff3f19b129ade35bac2f88', 1),
(92, 'f88b895da147eb4afa1ce7146fa42241', 1),
(93, '22953578061882f37421ddd5289d84f9', 1),
(94, '1ea8b5c897b8a97f03a1d8bba2275c62', 1),
(95, '692656a181078b1a4922e16814a4d83f', 1),
(96, '2ccc0940dc609c9d61b8b9b56994cd2c', 1),
(97, '5dc5c811722d8603a5b8283f5b683e38', 1),
(98, '1de9cd01b6bc38d97778f04bcb82e577', 1),
(99, 'a8f3f41748d10b42ae14522ae3abb6ff', 1),
(100, '8ca51be4d36926c87c53afe353f18117', 1),
(101, '9e9963627f34c4fb188b9311124ec535', 1),
(102, '5afe24dc6096f4cdcb222078e991b6d2', 1),
(103, 'dff246da26038c3238074bad73c85422', 1),
(104, 'ac404f81202acd49ccf12c9ae0b7ec35', 1),
(105, '5f32f96183414d88a8979009f547c45e', 1),
(106, '85f47ae7a6a48248b821d9fd324ebd86', 1),
(107, 'c82054e790fe8154c8a017ad77404c18', 1),
(108, 'fd4fba117586edc52c3783c8ead2cc18', 1),
(109, '2e71c28e713e2421871678095dde6e47', 1),
(110, '822ccaa5b6bc8037100526d6847479e7', 1),
(111, '458114f13a1ba66abc9f36667d8f4b87', 1),
(112, '7d41bdcb25e0565c955f690222f8ffca', 1),
(113, '6336c81b87ba8516ed6c8845865b620a', 1),
(114, 'f558adaabd2a9c12f0c315bd5ecd734d', 1),
(115, '3dba4f2e232e489b4633cf0d4399b479', 1),
(116, '9bb085343150fb1fc2880423abf84b27', 1),
(117, '5b472a47f13b24da62ffdfa5d71fea52', 1),
(118, '3922bd8f4ea61ad22b8ecf739dd3a822', 1),
(119, '9f3a4d56872fb40c07538bea713e7ea3', 1),
(120, 'cece7384605cc68928c268e528a2bcc5', 1),
(121, '3e8b2c2e42b4a5625f366ba2df3bdb56', 1),
(122, 'a59a1b7847381809336de4b31ef65efa', 1),
(123, 'b1502b9ce6e76597c800e4f5c9059f38', 1),
(124, '7315dfe64335c5fde6822dc5ddab66a2', 1),
(125, 'c6218a28daa7e89a56368e77a8d4deb1', 1),
(126, '0e95bd4be49779aa4f0687d562a9f23c', 1),
(127, '07080d6257699334d6950c3c48cde085', 1),
(128, '2a793c70098344470d26fb512addcea2', 1),
(129, 'eb072979caa46e238e0c148484a31af0', 1),
(130, 'fd5c70a5eb2a87a7a5695d524836736a', 1),
(131, '02ebebb197d8d7976b6571cf24902499', 1),
(132, '359c6449f7f9916fefc9b8c13dcf02d2', 1),
(133, '73bbeed8cb113c12b3e71860a445c059', 1),
(134, '655b091c5fe88d8136599602a5ec2571', 1),
(135, '48bfa9a40c8d3a8fad389305a55918dd', 1),
(136, 'af77ff8bdc421143bad72df25202d1c7', 1),
(137, 'f86aff931d4c800e45091a66f8bc44e3', 1),
(138, '4cbf0aa4b589dbdff86b903f9e84a870', 1),
(139, '2371da07ed71b0d3d4d417909fcf954b', 1),
(140, '340fcec7773af5efd809bf6fcfacfa58', 1),
(141, '379cec7575ba6f0cc2f87a930a62de97', 1),
(142, '6e20617b939df71a8a6b712b13f1cf04', 1),
(143, '074575310331f28135c9f2a538e9906a', 1),
(144, 'af6c5b74b6e5516b64833ac9042bdd8e', 1),
(145, '403d4c1e1b01f7ef77dbb6748dafabb2', 1),
(146, '2549cac59532ac0ca78a623363c7b337', 0),
(147, '0e9b4730f1f835822d009de5d10a5a29', 1),
(148, '8bada44592141a72ed8804d9a9c07d15', 1),
(149, '6b8d9acb3a289cb868852bc13361db7c', 0),
(150, '022f14b0b84770e2a8c947731fde465e', 1),
(151, '2b8f7197bf35116f08064f2cfe8d1c75', 1),
(152, '56a7dbb0306e7799ff1bd8e79ce8e777', 1),
(153, '2e7b0de3d460b4c0a910fb9ca7f2e558', 1),
(154, 'e817dea6d8391205a5e120955cea3c1c', 1),
(155, '759c7248c6826ea13cc45ce0b0379513', 1),
(156, 'eaca589049bcd9f80846870ff11abb6f', 1),
(157, 'aaeab018184219aa31d454b70355aa85', 1),
(158, '584394eb1fff2a5fcc6fcbc15987306a', 1),
(159, '5e874acdb97482c6042293cb2bbb4fef', 1),
(160, 'cf1de6f8a911e8ffe47ba667aa3f1a5d', 1),
(161, '6e2683c1f0edd87de55a2d6d1db17386', 1),
(162, '9ac5f331fcc75398fcc6e420e3a99c2e', 1),
(163, '7857f1e8cda13995936ffe628aad5bf3', 1),
(164, '24040eafac28d9059a2e00df52c4bb2a', 1),
(165, '7917865e6afcf87fd597ea1dffd5bd5f', 1),
(166, 'febd1cb668f3ec8591a06cdbe98fd9d3', 1),
(167, '1bb9fecd9658d61a69d38c7b666f174d', 1),
(168, '4a66d4d47bbfe0125ba1e648b1461ade', 1),
(169, '430f86ef7bf2d89039867961b828766f', 1),
(170, 'dd855473b8ca9bd6bfa1f6c47b490b2b', 1),
(171, '2b19d50aee0482d7b44292d727a5c649', 1),
(172, '2e80ebb218c42b85561d6490a9b100d6', 1),
(173, '0655e2ec6b4b31efc158f6446898a276', 1),
(174, '85b8234f81c8627a52c1c7c749b18963', 1),
(175, '053410b9389f79271eaaeb8373b51239', 1),
(176, '1ec745e61a4af7f53378033a3abe9b76', 1),
(177, '94087b7147f6656d74c0a2a3f0ffaf3c', 1),
(178, '44e9d08c7de12590d5f861c5a85e7565', 1),
(179, '31411d001719fe0a9d6c126516dd8644', 1),
(180, '8c0d401d31db607abed9398384a75df8', 1),
(181, '07c7c8e08ed19219f2a0f61fa358b8e0', 1),
(182, 'd191bb76bae9dc82f0ce8cc903040158', 1),
(183, 'e053bea2c7f11f1441c99525c072ae54', 1),
(184, '274e4ad44c2697fb57ce3d47781299be', 1),
(185, 'df9c986a72cfd9d7ee670e3b82907bab', 1),
(186, '8139cb92d1f56070423de3e9846fbe0b', 1),
(187, 'd3abcc3207de63824a8fe5f4eccfaa2d', 1),
(188, '193ae16db9e2d292c8d9e27f6bb0f3df', 1),
(189, 'a339cb68c4e815c9d9df3cbeee125c34', 1),
(190, '48e3eb1d020102fda5ea278f650177e5', 1),
(191, 'd7b86603ef09929e60058a9b6ebdb007', 1),
(192, '66fda35c72630538f28495291740616e', 0),
(193, '50e40a56b9dcf67af786f532894a550f', 1),
(194, 'ae265d85c1033a6b1577703566c81a66', 1),
(195, 'fee5b2e26cb127fd4b71e5970cf6ad11', 1),
(196, '7ac951bfe9d4449d2d735d07650ff2af', 1),
(197, '4f865e998b59a97802633e1bfc99dc09', 1),
(198, 'cebf7e05c77aa481a28debf61f0f0e79', 1),
(199, 'f6c118edcee08328352e1aa5179c8f11', 1),
(200, '0db19d8c840245b900c629bf175c85c5', 1),
(201, '528c12d4f29870c07c3ac74cf4397187', 1),
(202, 'e27a95131f3d50bd44e665bff02ab3c7', 1),
(203, 'f7dc321b3c92f4136994c89734dc05fd', 1),
(204, '421e5b95d90e9798c59d871d9117b41b', 1),
(205, '8ad59cefc477222f485e9b52d7305336', 1),
(206, '20ef3443aa42671177c48731aca385fc', 1),
(207, 'f9f89bf519e6b2c84bf7ec1575189dd9', 1),
(208, '44ecc0773aaf8da6dc070ffe22034864', 1),
(209, 'bac37bfdc88157c9b235b75152e8477d', 1),
(210, '9bdfb5f832718ea57db4f4b2c4f58f83', 1),
(211, '4129d0d1e4c5a25cb89f93992fd1fb26', 1),
(212, '81274a7b0ed8884602ea72443796c36e', 1),
(213, '4d81f09d6a6c604f50f66c8ea26657bc', 1),
(214, 'a1a8083faf26bc3303b877084a0bd9aa', 1),
(215, 'f28336c770d59d7fb6f0454a014b9a9f', 1),
(216, 'd066cd93903d08bca2ad717cd03df6d5', 0),
(217, '3a7951ade588e5c38d0939dd2026f6ce', 1),
(218, '1d58a524236fc3099813929d0cd24d9d', 1),
(219, 'c768dfe41a70339c22ee2f483e9da659', 1),
(220, '551d62e2fc508574fc304ddb5d6b6f32', 1),
(221, '7902e4bc8b4e4e25198f6702dbd4f68c', 1),
(222, '1f0633804bb48e8d27fe0e753bba9138', 1),
(223, 'b41895f3783c4ae6ae4401eaf95bd2a4', 0),
(224, '08cfd7d0f7d10355963e494fa9df6aa0', 1),
(225, '34484faa1ccb31ff7a4f6c8a829a205f', 1),
(226, 'b06ec3e52f5f15f7b8e376b36de94264', 0),
(227, '878927f6901505154fd9a9c680532ce9', 1),
(228, 'bb70ce34dea66712f231787b7f48b8eb', 1),
(229, 'f0a4e20c5a5f3afbbcdd3aff5c4654cc', 1),
(230, '2f3b5fadd599524227b0e544a0914999', 1),
(231, '6fe486bb141bffff64fa31da56ff3965', 1),
(232, '5ff8027c0baf965876cf506484dd1dd3', 1),
(233, '936bd0a28e2aa18f709e9a1396b64047', 1),
(234, 'e13138ce6a9a3339fcb9b76dcdce5347', 1),
(235, 'b539c5c233643a4155b8342cda88f4a7', 1),
(236, 'bf37f2ae38ce2eb891bbba4ba7555d0c', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(20) NOT NULL,
  `post_id` int(12) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `name`, `email`, `comment`, `date`) VALUES
(1, 1, 'Bapli Lehry', 'txzxb35820@mailezee.com', 'test', '2020-05-03'),
(2, 1, 'Bapli Lehry', 'txzxb35820@mailezee.com', 'test', '2020-05-03'),
(3, 1, 'abhishek', 'anonymous@field.com', 'fantastic post', '2020-05-03'),
(4, 1, 'abhishek', 'anonymous@field.com', 'fantastic post', '2020-05-03'),
(5, 1, 'abhishek', 'anonymous@field.com', 'fantastic post', '2020-05-03'),
(6, 1, 'abhishek', 'anonymous@field.com', 'fantastic post', '2020-05-03'),
(7, 1, 'abhishek', 'anonymous@field.com', 'fantastic post', '2020-05-03'),
(8, 1, 'abhishek', 'anonymous@field.com', 'fantastic post', '2020-05-03'),
(9, 1, 'abhishek', 'anonymous@field.com', 'fantastic post', '2020-05-03'),
(10, 1, 'abhishek', 'anonymous@field.com', 'fantastic post', '2020-05-03'),
(11, 1, 'abhishek', 'anonymous@field.com', 'fantastic post', '2020-05-03'),
(12, 1, 'abhishek', 'anonymous@field.com', 'fantastic post', '2020-05-03'),
(13, 1, 'anonymous', 'anonymous@field.com', 'new comment', '2020-05-03'),
(14, 2, 'abhishek', 'txzxb35820@mailezee.com', 'cute panda!!!', '2020-05-03'),
(15, 2, 'aniket', 'txzxb35820@mailezee.com', 'everything is fine and working as expected!', '2020-05-03'),
(16, 1, 'sharib', 'mdsharib@gmail.com', 'that worked!!!!!!!', '2020-05-03'),
(17, 3, 'abhi the author', 'txzxb35820@mailezee.com', 'this is a nice post.........', '2020-05-04'),
(18, 3, 'abhi the author', 'txzxb35820@mailezee.com', 'it is a nice post since it is written by me.. ', '2020-05-04'),
(19, 2, 'abhishek', 'gargabhishek@gmail.com', 'test comment!!!!\n', '2020-05-05'),
(20, 4, 'abhishek garg', 'txzxb35820@mailezee.com', 'ok ok!!!!!', '2020-05-05'),
(21, 2, 'abhishek garg', 'txzxb35820@mailezee.com', 'good\npost\n.\n..\n.\n.\n.\n.\n..\n', '2020-07-20'),
(22, 2, 'Bapli Lehry', 'txzxb35820@mailezee.com', '😁🤭', '2020-09-28'),
(23, 2, 'bro', 'txzxb35820@mailezee.com', '😁🤭', '2020-09-28'),
(24, 2, 'abhishek garg', 'abhishekgarg502@gmail.com', 'nice\n', '2021-05-23'),
(25, 5, 'Bapli Lehry', 'qvtvib9479@wiggear.com', 'wow! loved it.', '2021-05-23'),
(26, 5, 'Bapli Lehry', 'qvtvib9479@wiggear.com', 'wow! loved it.', '2021-05-23');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` int(20) NOT NULL,
  `post_id` int(20) NOT NULL,
  `ip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `post_id`, `ip`) VALUES
(1, 1, 0),
(2, 3, 0),
(3, 2, 0),
(4, 4, 0),
(5, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `comment_count` int(11) NOT NULL DEFAULT 0,
  `views` int(11) NOT NULL DEFAULT 0,
  `tags` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category`, `description`, `author`, `content`, `image`, `date`, `comment_count`, `views`, `tags`, `status`) VALUES
(2, 'this is the second post', 'news', 'this post is created for testing purpose.', 'abhishek', '<p style=\"text-align: center;\"><strong>HELLO!</strong></p>\r\n<p style=\"text-align: center;\"><strong>My name is abhishek.</strong></p>\r\n<p style=\"text-align: center;\"><strong>it\'s just a testing post.</strong></p>\r\n<p style=\"text-align: center;\"><strong>the nwxt thing to come is a testing image of 600*600 px.</strong></p>\r\n<p style=\"text-align: center;\"><strong><img src=\"https://previews.123rf.com/images/zdeneksasek/zdeneksasek1707/zdeneksasek170700095/82689716-hand-drawing-cartoon-vector-illustration-of-tired-baby-with-dummy-or-comforter-or-pacifier-in-mouth-.jpg\" alt=\"the image\" width=\"600\" height=\"600\" /></strong></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong>so the next thing is a table.</strong></p>\r\n<table style=\"border-collapse: collapse; width: 100%;\" border=\"1\">\r\n<tbody>\r\n<tr>\r\n<td style=\"width: 25%;\">it\'s</td>\r\n<td style=\"width: 25%;\">a</td>\r\n<td style=\"width: 25%;\">4*4</td>\r\n<td style=\"width: 25%;\">table</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%; text-align: center;\">this</td>\r\n<td style=\"width: 25%; text-align: center;\">is</td>\r\n<td style=\"width: 25%; text-align: center;\">centered</td>\r\n<td style=\"width: 25%; text-align: center;\">text</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">is</td>\r\n<td style=\"width: 25%;\">table&nbsp;</td>\r\n<td style=\"width: 25%;\">ok?</td>\r\n<td style=\"width: 25%;\">yesss.</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 25%;\">this</td>\r\n<td style=\"width: 25%;\">one</td>\r\n<td style=\"width: 25%;\">is</td>\r\n<td style=\"width: 25%;\">blank</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<p style=\"text-align: center;\">well next is multicoloured text.</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #2dc26b;\">h<span style=\"color: #e03e2d;\">u<span style=\"color: #b96ad9;\">r<span style=\"color: #236fa1;\">r<span style=\"color: #bfedd2;\">a<span style=\"color: #000000;\">a<span style=\"color: #95a5a6;\">y.</span></span></span></span></span></span></span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #000000;\">it\'s time for some emoji\'s.</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #000000;\">😁🤭</span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><strong><span style=\"color: #000000; font-size: 24pt;\">That\'s all folks.</span></strong></p>\r\n<p style=\"text-align: center;\"><strong><span style=\"color: #000000; font-size: 24pt;\"><img src=\"data:image/jpeg;base64,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\" alt=\"bye\" width=\"400\" height=\"200\" /></span></strong></p>', '/assets/images/post/root1587835804.jpg', '2020-04-25', 0, 0, 'boy,intro,testing', 1),
(3, 'The new post by author bhi', 'blog', 'this is going to be a testing post as well', 'abhi', '<p style=\"text-align: center;\"><span style=\"font-size: 36pt;\"><strong>it\'s a good post</strong></span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 18pt;\">this is a testing post&nbsp; to test the cms.</span></p>\r\n<p style=\"text-align: left;\"><span style=\"font-size: 18pt;\">this post consist paragraphs.</span></p>\r\n<p style=\"text-align: right;\"><span style=\"font-size: 18pt;\">this paragraph is in right aligned.</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 18pt;\">am i in center??</span></p>', '/assets/images/post/root1588589280.png', '2020-05-04', 0, 0, 'c++', 1),
(4, 'This is a test post', 'review', 'it\'s a review of this blog', 'abhishek', '<p style=\"text-align: center;\"><strong>This post is created to review this blog.</strong></p>\r\n<p style=\"text-align: left;\"><strong>i am a left aligned bold paragraph.</strong></p>\r\n<p style=\"text-align: right;\"><strong>i am aligned to the right.</strong></p>\r\n<p style=\"text-align: center;\"><em>i am italic and in center.</em></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 24pt;\"><em>Am i big enough????</em></span></p>\r\n<table style=\"border-collapse: collapse; width: 100%; height: 54px;\" border=\"1\">\r\n<tbody>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 33.3333%; height: 18px;\">functionality</td>\r\n<td style=\"width: 33.3333%; height: 18px;\">check</td>\r\n<td style=\"width: 33.3333%; text-align: right; height: 18px;\">i am in right of table.</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 33.3333%; height: 18px;\">vfvfv</td>\r\n<td style=\"width: 33.3333%; height: 18px; text-align: center;\">vfvfvfv</td>\r\n<td style=\"width: 33.3333%; height: 18px;\">vfvfv</td>\r\n</tr>\r\n<tr style=\"height: 18px;\">\r\n<td style=\"width: 33.3333%; height: 18px;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%; height: 18px;\">ffvf</td>\r\n<td style=\"width: 33.3333%; height: 18px;\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"width: 33.3333%;\">vvg</td>\r\n<td style=\"width: 33.3333%;\">&nbsp;</td>\r\n<td style=\"width: 33.3333%;\">\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n<ul>\r\n<li style=\"text-align: left;\">these are biullet point</li>\r\n<li style=\"text-align: left;\">gggff</li>\r\n<li style=\"text-align: left;\">gfgf</li>\r\n</ul>\r\n<ol>\r\n<li style=\"text-align: left;\">abhishek garg</li>\r\n<li style=\"text-align: left;\">abhishek kishor</li>\r\n<li style=\"text-align: left;\">aniket singh</li>\r\n<li style=\"text-align: left;\">md sharib</li>\r\n</ol>\r\n<p>😂😂😂😂😂😂😂😂😂😂😂😂😂😂😂</p>\r\n<p><span style=\"color: #e03e2d;\">i am red ....<a title=\"none\" href=\"https://wikipedia.com\" target=\"_blank\" rel=\"noopener\">wiki</a></span></p>', '/assets/images/post/root1588687476.jpg', '2020-05-05', 0, 0, 'tag,test,more', 1),
(5, 'new post by abhishek garg', 'news', 'this post is created for testing purpose.', 'abhishek', '<p style=\"text-align: center;\">Nice little new post by abhishek garg</p>\r\n<p style=\"text-align: center;\">1</p>\r\n<p style=\"text-align: center;\">2</p>\r\n<p style=\"text-align: center;\">3</p>\r\n<p style=\"text-align: center;\">4</p>\r\n<p style=\"text-align: center;\">5</p>\r\n<p style=\"text-align: center;\">6</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">7</p>\r\n<p style=\"text-align: center;\">8</p>\r\n<p style=\"text-align: center;\">9</p>\r\n<p style=\"text-align: center;\">10</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>', '/assets/images/post/root1621789371.jpg', '2021-05-23', 0, 0, 'c++', 1);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(20) NOT NULL,
  `post_id` int(20) NOT NULL,
  `ip` int(11) NOT NULL,
  `issue` text NOT NULL DEFAULT 'hateful content'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `post_id`, `ip`, `issue`) VALUES
(1, 1, 0, 'hateful content'),
(2, 3, 0, 'hateful content'),
(3, 2, 0, 'hateful content');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` text NOT NULL,
  `post_id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'author'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `mobile`, `email`, `password`, `profile_pic`, `post_id`, `role`) VALUES
(1, 'abhishek', 'abhishek', '9911088081', 'abhishekgarg502@gmail.com', 'MTExY2UyODVjZDJjZjhiYjUyNzYwNjY0ODBhODNkMzE=', 'assets/images/user/abhishek.jpg', 0, 'admin'),
(7, 'aniket', 'aniket', '9876543210', 'txzxb35820@mailezee.com', 'NWM4MjdhYTYxZWM4MGJmZjNmMDE4Y2U0MDY3YzNiNjc=', 'assets/images/user/aniket.jpg', 0, 'author');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
