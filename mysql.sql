--
-- 数据库: `torrent`
--

-- --------------------------------------------------------

--
-- 表的结构 `analytics`
--

CREATE TABLE IF NOT EXISTS `analytics` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a_time` date NOT NULL,
  `rows` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `a_time` (`a_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
