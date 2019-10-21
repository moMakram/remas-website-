-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 09, 2013 at 03:46 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `remas`
--

-- --------------------------------------------------------

--
-- Table structure for table `advert`
--

CREATE TABLE IF NOT EXISTS `advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` text NOT NULL,
  `descr` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `advert`
--

INSERT INTO `advert` (`id`, `place`, `descr`) VALUES
(9, 'photo/f03417b5c16d68c9e8df1d1269ae83f5.jpg', 'الجانب الايمن'),
(10, 'photo/f03417b5c16d68c9e8df1d1269ae83f5.jpg', 'الجانب الايسر');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1400) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `addr` varchar(1200) NOT NULL,
  `query` mediumtext NOT NULL,
  `ans` mediumtext NOT NULL,
  `date` date NOT NULL,
  `time` text NOT NULL,
  `permis` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `addr`, `query`, `ans`, `date`, `time`, `permis`) VALUES
(10, 'hffg', 'hhhhh', 'jjjjj', 'bbbbb', 'nnnnn', '2013-10-20', '01:22:49', 1),
(11, 'hgfg', 'hjjjjj', 'yyyyy', 'yyyyy', '', '2013-10-20', '03 :24:12', 1),
(12, 'hhhh', 'hhhh', 'hhhh', 'hhhhhhhh', '', '2013-10-20', '03 :26:20', 0),
(13, 'hhhh', 'hhhh', 'hhhh', 'hhhhhhhh', '', '2013-10-20', '03 :27:32', 0),
(14, 'ggggg', 'ffff', 'fff', 'fffffffff', '', '2013-10-20', '03 :27:46', 0),
(15, 'hhhhhhhhh', 'hhhhhhh', 'hhhhhhhhhhh', 'hhhhhhhhhhhh', '', '2013-10-20', '03 :28:32', 0),
(16, 'hhhhhhhhh', 'hhhhhhh', 'hhhhhhhhhhh', 'hhhhhhhhhhhh', '', '2013-10-20', '03 :29:22', 0),
(17, 'bbbbbb', 'bbbbbbbbb', 'gggggg', 'fgggg', '', '2013-10-20', '03 :29:35', 0),
(18, 'bbbbbbbbbbb', 'bbbb', 'bbb', 'gdfg', '', '2013-10-20', '03 :30', 0),
(19, 'hhhhhhhhh', 'hhhhhhhhhhhhhhh', 'hhhhhh', 'hhhhhhhhh', '', '2013-10-20', '08 :32', 0),
(20, 'ghhhhhhhhh', 'gggg', 'gggg', 'hhhhg', '', '2013-10-20', '08 :32', 0),
(21, 'ttttttttttttttttg', 'ggg', 'ffff', 'fgggggggg', '', '2013-10-20', '08 :0', 0),
(22, 'ttttttttttttttttg', 'ggg', 'ffff', 'fgggggggg', '', '2013-10-20', '08 :33', 0),
(23, 'gggggggg', 'ggggggggg', 'gggggg', 'gggggggggg', '', '2013-10-20', '08 :35', 0),
(25, 'gggggggg', 'ggggggggg', 'ggggggg', 'ggggggggg', '', '2013-10-20', '07 :36', 0),
(26, 'gggggggg', 'ggggggggg', 'ggggggg', 'ggggggggg', '', '2013-10-20', '07 :36', 0),
(27, 'gggggggg', 'gggg', 'ggg', 'ggggggg', '', '2013-10-20', '07 :37', 0),
(28, 'gggggggg', 'gggg', 'ggg', 'ggggggg', '', '2013-10-20', '07 :10:08', 0),
(29, 'ggggggggggg', 'ffffff', 'fffffffffff', 'fffffffffffff', '', '2013-10-20', '07 :10:22', 0),
(30, 'ggggggg', 'ffffffffff', 'gggggggggf', 'fffffffffffffff', '', '2013-10-20', '07 :10:38', 0),
(31, 'محمد جمال', 'm.makram39@yahoo.com', 'دمنهور', 'هل انت بخير يا مان', 'نعم انا باحسن حال', '2013-10-21', '22 :10', 1),
(32, 'ggg', 'gggggg', 'gggggggggggg', 'ffffffffffffffffffffffffff', '', '2013-10-22', '10 :10', 0),
(33, 'hhhhhhhh', 'ggggggg', 'hhhhhhh', 'hhhhhhhhhhhhhhhhhhhhhh', '', '2013-10-26', '20 :10', 0),
(34, 'ffffff', 'fffffff', 'ddddddd', 'dddddddddddddddddd', '', '2013-10-26', '20 :10', 0),
(35, 'ggggggg', 'ffffffffff', 'fffffff', 'dddddddd', '', '2013-10-26', '20 :10', 0),
(36, 'ggggggg', 'ffffd', 'ddddddd', 'ffffffffff', '', '2013-10-26', '20 :10', 0),
(37, 'hhhhhhhh', 'gggggg', 'gggggg', 'ffffffffffffffffffffffff', '', '2013-10-26', '20 :10', 0),
(38, 'gggggggg', 'fffff', 'ffffffffff', 'ggggggggggggggg', '', '2013-10-26', '20 :10', 0),
(39, 'gggggggggggggg', 'ffffffff', 'ddddd', 'fffffffffffffffff', '', '2013-10-26', '20 :10', 0),
(40, 'ggggggggggg', 'fffff', 'dddddf', 'ffffffffffffffff', '', '2013-10-26', '20 :10', 0),
(41, 'ggggggggggg', 'fffff', 'dddddf', 'ffffffffffffffff', '', '2013-10-26', '20 :10', 0),
(42, 'bbbb', 'gggg', 'vvv', 'bbbbbbbb', '', '2013-10-26', '20 :10', 0),
(43, 'bbbb', 'gggg', 'vvv', 'bbbbbbbb', '', '2013-10-26', '20 :10', 0),
(44, 'yyyyyyyyyy', 'ttttt', 'tttt', 'tttttttttttt', '', '2013-10-26', '20 :10', 0),
(45, 'gggg', 'gggg', 'gggg', 'ggggggggggg', '', '2013-10-29', '11 :10', 0),
(46, 'iiiiiiiii', 'jjjjjjjjjj', 'lllllllllll', 'ttttttttttttttt', '', '2013-11-13', '11 :11', 0),
(47, 'fffff', 'fffffff', 'dddd', 'dddddddd', '', '2013-11-23', '22 :11', 0),
(48, 'dddddd', 'ddddd', 'ddddd', 'dddddddd', '', '2013-11-23', '22 :11', 0),
(49, 'ffff', 'ffffff', 'dddddd', 'dddddddddd', '', '2013-11-23', '22 :11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `emplye`
--

CREATE TABLE IF NOT EXISTS `emplye` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(2000) NOT NULL,
  `job` varchar(3000) NOT NULL,
  `descr` mediumtext NOT NULL,
  `place` varchar(1000) NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `emplye`
--

INSERT INTO `emplye` (`id`, `name`, `job`, `descr`, `place`, `id2`) VALUES
(6, 'علاء حمدى عبد المقصود قريطم', 'مؤسس الشركة والمدير العام', '<p><span style="font-size: medium;">هو مؤسس الشركة ومديرها العام وممثلها القانونى وبحكم نشأته فى عائلة اقتصادية عريقة فقد بدأ اهتمامه بعالم الصناعة والاقتصاد فى سن مبكرة واصبح يمتلك خبرات فنية وادارية واقتصادية متميزة فى مجال الصناعات الغذائية حيث انه كان ولسنوات طويلة وحتى وقت قريب شريكا وعضوا بمجلس اداره مجموعه شركات الجوهرة (حمدى قريطم) ومديرا عاما لشركة الجوهرة للصناعات الغذائية وشركة الجوهرة الغذائية والشركتان تمثلان اعدمة رئيسية فى مجموعه شركة الجوهره &nbsp;(حمدى قريطم) وكما هو معروف فان مجموعة شركة الجوهره (حمدى قريطم) تعمل فى مجالات متنوعة من الصناعات الغذائية منذ ما يقرب من اربعة عقود بدايه من شركه الشاى ورقائق البطاطس ومنتجات الذرة (السناكس) والبسكويت والشكولاتة والحلويات وتحظى السوق المصرية بحصة متميزة جدا من هذه المنتجات بالاضافة الى تصدير جزء من انتاجها</span></p>\r\n<p><span style="font-size: medium;">&nbsp;</span></p>', 'empl', 1),
(7, 'محمد الحصافى درويش', 'مدير عام المصنع', '<p><span style="font-size: medium;">هو خريج كيلية التجارة جامعة الاسكندرية ويتمتع بخبرة عريضة فى مجا عمل الشركة حيث تدرج فى ادارة المبيعات بمجموعة شركات الجوهرة (حمدى قريطم) حتى وصل لمنصب مدير عام المبيعات بها قبل الانضمام الى شركه ريماس للصناعات الغذائية&nbsp;</span></p>', 'empl', 2),
(8, 'رضا احمد عيسى', 'مدير عام الشئون المالية', '<p><span style="font-size: medium;">له خبرة كبيرة فى العمل كمدير مالى فى الشركات الصناعة الكبرى فى مصر والخليج ويملك خبرة مميزة فى تطبيق حزم برامج الكمبيوتر المتكاملة فى مجالات الحسابات والمخازن والمبيعات والمشتريات وشئون العاملين وله مؤلفات منشورة وكثيرا ما تستضيفة فضائيات وصحف للحديث عن الاقتصاد المصرى.</span></p>', 'empl', 3),
(9, 'عنبر عابدين عنبر', 'مدير الانتاج', '<p><span style="font-size: medium;">هو مهندس زراعى ويملك بصمات واضحة فى شركات كبرى لصناعة السناكس والشيبسى حيث التحق للعمل بشركة تستى فوود مهندسا للانتاج وتدرج حيث اصبح مديرا للانتاج وبعدها بمجموعة شركات الجوهرة (حمدى قريطم) وبعدها بشركة ايجيبت فودز من عام 2002 الى عام 2013</span></p>', 'empl', 4),
(10, 'سالم عبد الحميد سالم قريطم', 'مدير مصنع ريماس 1', '<p><span style="font-size: medium;">له خبرة كبيرة اكثر من خمسة عشر عام كمدير لمصنع البسكويت بالكوم الاخضر فى مجموعة شركات الجوهرة (حمدى قريطم) قبل الانضمام الى شركة ريماس للصناعات الغذائية</span></p>', 'empl', 5),
(11, 'أيمن أحمد سالم قريطم', 'مدير مصنع ريماس 2', '<p><span style="font-size: medium;">عمل مهندسا بمشروع السلالات الداجنة بفرهاش ثم مديرا للمعمل قبل ان ينتقل للعمل مديرا للانتاج ثم مديرا لمصنع البسكويت بالكوم الاخضر</span></p>', 'empl', 6);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(1200) NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'makram', '123');

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` text NOT NULL,
  `name` text NOT NULL,
  `descr` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`id`, `place`, `name`, `descr`) VALUES
(28, 'photo/bag seidy.cheeses.png', 'bag seidy.cheeses.png', 'الصفحة الرئيسية'),
(29, 'photo/cheese.png', 'cheese.png', 'الصفحة الرئيسية'),
(30, 'photo/cheese olives.png', 'cheese olives.png', 'الصفحة الرئيسية'),
(31, 'photo/bag seidy tomatoes(1).png', 'bag seidy tomatoes(1).png', 'الصفحة الرئيسية'),
(32, 'photo/chili.png', 'chili.png', 'الصفحة الرئيسية'),
(33, 'photo/tomatoes(2).png', 'tomatoes(2).png', 'الصفحة الرئيسية'),
(35, 'photo/cheken(1).png', 'cheken(1).png', 'الصفحة الرئيسية'),
(36, 'photo/bag seidy tomatoes(1).png', 'bag seidy tomatoes(1).png', 'الصفحة الرئيسية'),
(37, 'photo/kebab A.png', 'kebab A.png', 'الصفحة الرئيسية'),
(38, 'photo/marinated cheese.png', 'marinated cheese.png', 'الصفحة الرئيسية'),
(39, 'photo/bag seidym. cheeses.png', 'bag seidym. cheeses.png', 'الصفحة الرئيسية'),
(40, 'photo/bag seidy kebab.png', 'bag seidy kebab.png', 'الصفحة الرئيسية'),
(41, 'photo/bag seidy kebab.png', 'bag seidy kebab.png', 'من نحن'),
(42, 'photo/bag seidy tomatoes(1).png', 'bag seidy tomatoes(1).png', 'الصفحة الرئيسية'),
(43, 'photo/bag seidy tomatoes(1).png', 'bag seidy tomatoes(1).png', 'من نحن'),
(44, 'photo/bag seidy.cheeses.png', 'bag seidy.cheeses.png', 'من نحن'),
(45, 'photo/bag seidym. cheeses.png', 'bag seidym. cheeses.png', 'من نحن'),
(46, 'photo/cheese olives.png', 'cheese olives.png', 'من نحن'),
(47, 'photo/cheese.png', 'cheese.png', 'من نحن'),
(48, 'photo/cheken(1).png', 'cheken(1).png', 'من نحن'),
(49, 'photo/chili.png', 'chili.png', 'من نحن'),
(50, 'photo/kebab A.png', 'kebab A.png', 'من نحن'),
(51, 'photo/tomatoes(2).png', 'tomatoes(2).png', 'من نحن'),
(52, 'photo/marinated cheese.png', 'marinated cheese.png', 'من نحن');

-- --------------------------------------------------------

--
-- Table structure for table `proditem`
--

CREATE TABLE IF NOT EXISTS `proditem` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` text NOT NULL,
  `place` varchar(1000) NOT NULL,
  `name` varchar(2000) NOT NULL,
  `price` text NOT NULL,
  `descr` mediumtext NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Dumping data for table `proditem`
--

INSERT INTO `proditem` (`id`, `pic`, `place`, `name`, `price`, `descr`, `id2`) VALUES
(47, 'photo/tomatoes(2).png', 'take5', 'طعم الطماطم', '50 ق', 'طعم الطماطم طعم له مذاق خااص معنا', 1),
(48, 'photo/cheese olives.png', 'take5', 'طعم الجبنه بالزيتون', '50 ق', 'طعم الجبنه بالزيتون', 2),
(49, 'photo/cheken(1).png', 'take5', 'الفراخ', '50ق', 'طعم الفراخ', 3),
(50, 'photo/chili.png', 'take5', 'الشطه', '50 ق', 'طعم الشظه والليمون', 4),
(52, 'photo/bag seidy tomatoes(1).png', 'صعيدى والدلع دى دى', 'صعيدى بطعم الطماطم', '50 ق', 'كارتيه صعيدى بطعم الطماطم', 1),
(54, 'photo/bag seidy.cheeses.png', 'صعيدى والدلع دى دى', 'صعيدى بالجبنه', '50 ق', 'كارتيه صعيدى بطعم الجبنه', 1),
(55, 'photo/bag seidym. cheeses.png', 'صعيدى والدلع دى دى', 'صعيدى بطعم الجبنه', '1ج', 'سناكس صعيدى والدلع دى دى بطعم الجبنه المتبلة', 3),
(56, 'photo/bag seidy kebab.png', 'صعيدى والدلع دى دى', 'صعيدى بطعم الكباب', '1ج', 'صعيدى بطعم الكباب', 5);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prodname` varchar(2000) NOT NULL,
  `id2` int(11) NOT NULL,
  `optione` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `prodname`, `id2`, `optione`) VALUES
(3, 'take5', 1, 'يظهر'),
(8, 'صعيدى والدلع دى دى', 2, 'يظهر');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `addr` varchar(2000) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(500) NOT NULL,
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `addr`, `phone`, `email`, `gender`) VALUES
(77, 'mohamed', 'makram', '098988', 'mmljljj', 'ذكـر'),
(78, 'mohamed', 'nakakjss', '9766', 'gbgbhh', 'ذكـر'),
(79, 'mogig', 'ggggg', '0988', 'fffff', 'ذكـر'),
(82, 'mkhkhggmhmh', 'hhhhg', '099888', 'fmfmmgg', 'ذكـر'),
(83, 'hhhhh', 'gggg', 'gdfv', 'nyyy', 'ذكـر'),
(84, 'bbbb', 'yyyyy', '98777', 'nnnnnn', 'ذكـر'),
(85, 'kkhh', 'gggg', '09877', 'nnbb', 'ذكـر'),
(86, 'hgfgggggggggggggggggggggggggggggggggggggggg', 'hhhhhhhhhhhhh', '90988', 'nnnnnnn', 'ذكـر'),
(87, 'kkkkkk', 'iohjj', '098777', 'hnhn', 'ذكـر'),
(88, 'mmohoh', 'gmmggmg', '876666', 'hhhhh', 'ذكـر'),
(93, 'mohamed', 'damnho', '0987654', 'm.mamma', 'ذكـر'),
(94, 'hhhhh', 'hhhh', '0987', 'nmmm', 'ذكـر'),
(95, 'ggg', 'bbb', '09876', 'bbb', 'ذكـر'),
(97, 'jjjjj', 'ghg', '998888m.mm', 'mmk', 'ذكـر'),
(98, 'khmhmhm', ',h,h,hh', 'khkhk', 'mooo', 'ذكـر'),
(99, 'jjj', 'hhhh', 'ggg', 'ggg', 'ذكـر'),
(100, 'bbbbbb', 'vvvvvv', '4444', 'bbbb', 'ذكـر'),
(101, 'mohamed', 'makram', '099383', 'mkkdd', 'ذكـر'),
(102, 'mohamed', 'm.makram', '0978787', 'm.mal', 'أنثـى'),
(103, 'hhh', 'ggg', '087y', 'yyyyy', 'ذكـر'),
(104, 'dfd', 'fdf', 'dd', 'fdf', 'ذكـر'),
(105, 'jjjjjjjj', 'jjjjjjjjjj', '988', ' m,m,.', 'ذكـر'),
(106, 'moham', 'gggg', '9876', 'frfff', 'ذكـر');

-- --------------------------------------------------------

--
-- Table structure for table `texteditor`
--

CREATE TABLE IF NOT EXISTS `texteditor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descr` mediumtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `texteditor`
--

INSERT INTO `texteditor` (`id`, `descr`) VALUES
(5, '<p style="text-align: center;"><span style="font-size: xx-large;"><br /><span style="color: #800000;">شركة ريماس للصناعات الغذائية</span></span></p>\r\n<p style="text-align: center;"><span style="font-size: x-large;">شركة ريماس للصناعات الغذائية. هى شركه منشأة فردية تعمل فى مجالات الصناعات الغذائية ويملكها رجل الاعمال</span></p>\r\n<p style="text-align: center;"><span style="font-size: x-large;"> السيد علاء حمدى عبد المقصود قريطم .وتنطلق انشطة الشركه من مدينة دمنهورعاصمة محافظة البحيرة</span></p>\r\n<p style="text-align: center;"><span style="font-size: x-large;"> وتصل الى جميع اتحاء الجمهورية من خلال شبكة توزيع متكاملة.</span></p>\r\n<p style="text-align: center;"><span style="font-size: x-large;"> وهى حاصلة على شهادة الايزو</span></p>\r\n<p style="text-align: center;"><span style="font-size: x-large;">(9001)&nbsp;</span></p>');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(2000) NOT NULL,
  `descr` text NOT NULL,
  `descr2` text NOT NULL,
  `id2` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `descr`, `descr2`, `id2`) VALUES
(20, 'اعلان take5', 'video/noname.FLV', 'index_videolb/video/take51.png', 1),
(21, 'اعلان الولد take5', 'video/mon.FLV', 'index_videolb/video/take52.png', 2),
(22, 'الاعلان الثالث', 'video/take5.FLV', 'index_videolb/video/take53.png', 3);
