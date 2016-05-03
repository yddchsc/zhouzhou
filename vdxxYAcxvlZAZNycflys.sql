-- phpMyAdmin SQL Dump
-- http://www.phpmyadmin.net
--
-- 生成日期: 2016 年 05 月 03 日 22:51

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `vdxxYAcxvlZAZNycflys`
--

-- --------------------------------------------------------

--
-- 表的结构 `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- 转存表中的数据 `images`
--

INSERT INTO `images` (`id`, `src`) VALUES
(2, 'img/1.jpg'),
(3, 'img/2.jpg'),
(4, 'img/3.jpg'),
(5, 'img/4.jpg'),
(6, 'img/5.jpg'),
(7, 'img/6.jpg'),
(8, 'img/7.jpg'),
(9, 'img/8.jpg'),
(10, 'img/9.jpg'),
(11, 'img/10.jpg'),
(12, 'img/11.jpg'),
(13, 'img/12.jpg'),
(14, 'img/13.jpg'),
(15, 'img/14.jpg'),
(16, 'img/15.jpg'),
(17, 'img/16.jpg'),
(18, 'img/17.jpg'),
(19, 'img/18.jpg'),
(20, 'img/19.jpg'),
(21, 'img/20.jpg'),
(22, 'img/21.jpg'),
(23, 'img/22.jpg'),
(24, 'img/23.jpg'),
(25, 'img/24.jpg'),
(26, 'img/25.jpg'),
(27, 'img/26.jpg'),
(28, 'img/27.jpg'),
(29, 'img/28.jpg'),
(30, 'img/29.jpg'),
(31, 'img/30.jpg'),
(32, 'img/31.jpg'),
(33, 'img/32.jpg'),
(34, 'img/33.jpg'),
(35, 'img/34.jpg'),
(36, 'img/35.jpg'),
(37, 'img/36.jpg'),
(38, 'img/37.jpg'),
(39, 'img/38.jpg'),
(40, 'img/39.jpg'),
(41, 'img/40.jpg'),
(42, 'img/41.jpg'),
(43, 'img/42.jpg'),
(44, 'img/43.jpg'),
(45, 'img/44.jpg'),
(46, 'img/45.jpg'),
(47, 'img/46.jpg'),
(48, 'img/47.jpg'),
(49, 'img/48.jpg'),
(50, 'img/49.jpg'),
(51, 'img/50.jpg'),
(52, 'img/51.jpg'),
(53, 'img/52.jpg'),
(54, 'img/53.jpg'),
(55, 'img/54.jpg'),
(56, 'img/55.jpg'),
(57, 'img/56.jpg'),
(58, 'img/57.jpg'),
(59, 'img/58.jpg'),
(60, 'img/59.jpg'),
(61, 'img/60.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `delflag` char(1) NOT NULL,
  `createdate` date NOT NULL,
  `sex` char(1) NOT NULL,
  `school` varchar(50) NOT NULL,
  `age` char(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `password`, `delflag`, `createdate`, `sex`, `school`, `age`) VALUES
(1, 'yddchsc', '123456789', '0', '2016-03-09', '女', '暨南大学', '20'),
(2, '1', '1', '0', '2016-03-09', '1', '1', '1');

-- --------------------------------------------------------

--
-- 表的结构 `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `src` varchar(200) NOT NULL,
  `presrc` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- 转存表中的数据 `videos`
--

INSERT INTO `videos` (`id`, `name`, `src`, `presrc`) VALUES
(1, '上瘾全集 提取码：764b', 'https://yunpan.cn/cYySIwkYDBCTQ', 'https://yunpan.cn/cYySIwkYDBCTQ'),
(2, '[ Addicted web series ]Guhai Kissed Another Man 2_  访问密码 94b6', 'https://yunpan.cn/cYKceJpCKFtqk', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(3, '[上癮網路劇] 黃景瑜 (顧海) x 許魏洲 (白洛因) YOHO照片拍攝花絮HD 访问密码 abc9', 'https://yunpan.cn/cYKcpNngF2h5q', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(4, '[上癮網路劇] 黃景瑜 (顧海)上綜藝節目走秀大展暗黑系帥氣   访问密码 08fc', 'https://yunpan.cn/cYKc4nGw64QRK', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(5, '160223上瘾伊周秒拍直播访谈（黄景瑜，许魏洲，林枫松，陈稳） 访问密码 4d4f', 'https://yunpan.cn/cYKdCE82zmBcf', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(6, '160225 黃景瑜 個人專訪  访问密码 96e3', 'https://yunpan.cn/cYKmjzHpGvnct', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(7, '160226 黃景瑜 參加Angelababy生日會  访问密码 3339', 'https://yunpan.cn/cYKmmYjw27rNL', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(8, '160227 黃景瑜許魏洲YOHO拍攝花絮  访问密码 06e2', 'https://yunpan.cn/cYKmrce8Wzxai', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(9, '160301 黃景瑜許魏洲 網易反家暴宣傳  访问密码 5697', 'https://yunpan.cn/cYKmPNeMmp9Ss', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(10, '【Johnny黃景瑜】160302 ElleTV直播集锦  访问密码 89c5', 'https://yunpan.cn/cYKmMgC7ytass', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(11, '【YellowJohnny】160220黄景瑜逗逼段子手锦集 高清  访问密码 90e8', 'https://yunpan.cn/cYKmWQTnL7aHC', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(12, '【黄景瑜x许魏洲】Karaoke 倾情对唱《离歌》  访问密码 63b0', 'https://yunpan.cn/cYKmb2xIhazbA', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(13, '【全民星探访谈】黄景瑜x许魏洲  访问密码 e220', 'https://yunpan.cn/cYKmDDk89IeTg', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(14, '【台灣壹週刊】男男《上癮》2週爆紅 白洛因露毛微勃鵰照出土  访问密码 241e', 'https://yunpan.cn/cYKmTXqixvdeA', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(15, '黄景瑜许魏洲人气爆棚粉丝苦守通告场地  访问密码 e36a', 'https://yunpan.cn/cYKHAyE9Qh5mV', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(16, '上癮網路劇 160217 噠噠來客專訪  访问密码 95f2', 'https://yunpan.cn/cYKHwnngKfqaZ', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(17, '上癮網路劇 160220 上海見面會 許魏洲黃景瑜演唱味道 牽不牽手？  访问密码 2ddb', 'https://yunpan.cn/cYKHuAqMvVJIC', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(18, '上癮網路劇 海因 - 我只在乎你  访问密码 f74a', 'https://yunpan.cn/cYKHPIiTWQuQG', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(19, '上癮網路劇 日常 151218 花絮3 堅硬的月餅 結尾福利  访问密码 28de', 'https://yunpan.cn/cYKHM7BGm27ML', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(20, '许魏洲 黄景瑜 网易 哒哒来客第五期采访花絮  访问密码 c57f', 'https://yunpan.cn/cYKHWz7ZHNWsV', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(21, '黃景瑜 (Huang Jing Yu) & 許魏洲 (Xu Wei Zhou) - Easy Idol 快問快答默契考驗 访问密码 0664', 'https://yunpan.cn/cYKHndr7n2ejX  ', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(22, '黃景瑜 (Huang Jing Yu) - 《半妖傾城》花絮：黃景瑜傾力加盟于正新劇 超帥上演換裝秀  访问密码 8cce', 'https://yunpan.cn/cYKHDmKv3XILE', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(23, '黃景瑜許魏洲 YOHO!GIRL和海因的FACETIME 字幕版  访问密码 0b17', 'https://yunpan.cn/cYKHiy8CrcFYj', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(24, '黃景瑜 (Huang Jing Yu) - Mars Play  访问密码 a1a8', 'https://yunpan.cn/cYKLHEkRDi5xj', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(25, '黄景瑜Johnny&林枫松  访问密码 3d49', 'https://yunpan.cn/cYKLuQVBzQfTE', 'https://www.youtube.com/watch?v=l5fP6zVevEQ&index=1&list=PLHqSpiX2pegfoeKjRhokud8scgSNwVHiM'),
(26, '160303 許魏洲 幫粉絲簽名  访问密码 e653', 'https://yunpan.cn/cYKLIaXIrR6ei', 'https://www.youtube.com/watch?v=509rXqGRxdo'),
(27, '160303 許魏洲 北京送機  访问密码 a3a9', 'https://yunpan.cn/cYK3BmUnc5eSP', 'https://www.youtube.com/watch?v=eXWJbX-TMdo'),
(28, '160303 許魏洲 和粉絲聊天的洲洲  访问密码 3f16', 'https://yunpan.cn/cYKu3GyPSYuaG', 'https://www.youtube.com/watch?v=XdfkGdKTpwk'),
(29, '許魏洲中學時候樂隊演出《It''s My Life》  访问密码 6452', 'https://yunpan.cn/cYKx8t4rj8dXK', 'https://www.youtube.com/watch?v=1ZmoJ3EodCo'),
(30, '許魏洲中學時候跳舞的視頻 美妙 访问密码 3490', 'https://yunpan.cn/cYKYjPCYvBuTP', 'https://www.youtube.com/watch?v=1ZmoJ3EodCo'),
(31, '許魏洲 跳拉丁舞  访问密码 7023', 'https://yunpan.cn/cYKSLFIFKTCSs', 'https://www.youtube.com/watch?v=1chyDu-svD0&list=PL5RzOxK-icwh9tBGlRAzwF9NMUKG3_N1b&index=3'),
(32, '許魏洲 中學聲樂課 我的舞台   访问密码 02eb', 'https://yunpan.cn/cYKS5IgG9p77i', 'https://www.youtube.com/watch?v=1chyDu-svD0&list=PL5RzOxK-icwh9tBGlRAzwF9NMUKG3_N1b&index=3'),
(33, '許魏洲 中學形體課 爭執  访问密码 2328', 'https://yunpan.cn/cYKS9AaSAM7h3', 'https://www.youtube.com/watch?v=1chyDu-svD0&list=PL5RzOxK-icwh9tBGlRAzwF9NMUKG3_N1b&index=3');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
