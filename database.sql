/*
SQLyog Community v12.2.4 (32 bit)
MySQL - 5.7.19 : Database - laberp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`laberp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `laberp`;

/*Table structure for table `bills` */

DROP TABLE IF EXISTS `bills`;

CREATE TABLE `bills` (
  `bill_id` int(11) NOT NULL AUTO_INCREMENT,
  `discount` double DEFAULT '0',
  `month` varchar(100) NOT NULL,
  `year` year(4) NOT NULL,
  `total_amount` double NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `amount_tendered` double DEFAULT NULL,
  `change` double DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `total_cost` float DEFAULT NULL,
  `visit_date` text NOT NULL,
  PRIMARY KEY (`bill_id`)
) ENGINE=InnoDB AUTO_INCREMENT=508 DEFAULT CHARSET=latin1;

/*Data for the table `bills` */

insert  into `bills`(`bill_id`,`discount`,`month`,`year`,`total_amount`,`user_id`,`client_id`,`amount_tendered`,`change`,`description`,`total_cost`,`visit_date`) values 
(175,NULL,'June',2017,0,6,166,NULL,0,'MASM',0,''),
(176,NULL,'June',2017,0,6,167,NULL,0,'Invoice',0,''),
(177,0,'June',2017,0,10,169,500,500,NULL,0,''),
(178,NULL,'June',2017,0,6,167,NULL,0,'MASM',0,''),
(179,NULL,'June',2017,0,6,168,NULL,0,'MASM',0,''),
(180,NULL,'June',2017,0,6,169,NULL,0,'MASM',0,''),
(181,NULL,'July',2017,0,6,172,NULL,0,'Invoice',0,''),
(182,0,'July',2017,7200,6,173,7500,300,NULL,7200,''),
(183,NULL,'August',2017,0,10,175,NULL,0,'MASM',0,''),
(184,NULL,'September',2017,0,10,176,NULL,0,'MASM',0,''),
(185,0,'September',2017,2200,10,177,2,-2198,NULL,2200,''),
(186,0,'September',2017,2200,10,178,2200,0,NULL,2200,''),
(187,NULL,'September',2017,0,10,179,NULL,0,'MASM',0,''),
(188,NULL,'September',2017,0,12,180,NULL,0,'MASM',0,''),
(189,NULL,'September',2017,0,10,181,NULL,0,'MASM',0,''),
(190,NULL,'September',2017,0,10,182,NULL,0,'MASM',0,''),
(191,NULL,'September',2017,0,10,183,NULL,0,'MASM',0,''),
(192,NULL,'September',2017,0,10,184,NULL,0,'MASM',0,''),
(193,0,'September',2017,7500,10,185,7500,0,NULL,7500,''),
(194,0,'September',2017,4000,10,186,4000,0,NULL,4000,''),
(195,NULL,'September',2017,0,10,187,NULL,0,'MASM',0,''),
(196,0,'September',2017,3000,10,188,3000,0,NULL,3000,''),
(197,NULL,'September',2017,0,10,189,NULL,0,'MASM',0,''),
(198,NULL,'September',2017,0,10,190,NULL,0,'MASM',0,''),
(199,NULL,'September',2017,0,10,191,NULL,0,'MASM',0,''),
(200,NULL,'September',2017,0,10,192,NULL,0,'MASM',0,''),
(201,NULL,'September',2017,0,10,193,NULL,0,'MASM',0,''),
(202,NULL,'September',2017,0,10,194,NULL,0,'MASM',0,''),
(203,NULL,'September',2017,0,10,195,NULL,0,'MASM',0,''),
(204,0,'September',2017,12500,10,196,12500,0,NULL,12500,''),
(205,NULL,'September',2017,0,10,197,NULL,0,'MASM',0,''),
(206,NULL,'September',2017,0,10,198,NULL,0,'MASM',0,''),
(207,NULL,'September',2017,0,10,199,NULL,0,'MASM',0,''),
(208,NULL,'September',2017,0,10,200,NULL,0,'MASM',0,''),
(209,NULL,'September',2017,0,10,201,NULL,0,'MASM',0,''),
(210,NULL,'September',2017,0,10,202,NULL,0,'MASM',0,''),
(211,NULL,'September',2017,0,10,203,NULL,0,'MASM',0,''),
(212,NULL,'September',2017,0,10,204,NULL,0,'MASM',0,''),
(213,NULL,'September',2017,0,10,205,NULL,0,'MASM',0,''),
(214,NULL,'September',2017,0,10,206,NULL,0,'MASM',0,''),
(215,NULL,'September',2017,0,10,207,NULL,0,'MASM',0,''),
(216,0,'September',2017,2500,10,208,2500,0,NULL,2500,''),
(217,NULL,'September',2017,0,10,209,NULL,0,'MASM',0,''),
(218,NULL,'September',2017,0,10,210,NULL,0,'MASM',0,''),
(219,NULL,'September',2017,0,12,211,NULL,0,'MASM',0,''),
(220,0,'September',2017,12500,12,212,12500,0,NULL,12500,''),
(221,NULL,'September',2017,0,12,213,NULL,0,'MASM',0,''),
(222,NULL,'September',2017,0,12,214,NULL,0,'MASM',0,''),
(223,NULL,'September',2017,0,12,215,NULL,0,'MASM',0,''),
(224,NULL,'September',2017,0,12,216,NULL,0,'MASM',0,''),
(225,NULL,'September',2017,0,12,217,NULL,0,'MASM',0,''),
(226,0,'September',2017,2200,12,218,2200,0,NULL,2200,''),
(227,NULL,'September',2017,0,12,219,NULL,0,'MASM',0,''),
(228,NULL,'September',2017,0,10,220,NULL,0,'MASM',0,''),
(229,NULL,'September',2017,0,10,221,NULL,0,'MASM',0,''),
(230,NULL,'September',2017,0,10,222,NULL,0,'MASM',0,''),
(231,NULL,'September',2017,0,12,223,NULL,0,'MASM',0,''),
(232,NULL,'September',2017,0,12,224,NULL,0,'MASM',0,''),
(233,NULL,'September',2017,0,12,225,NULL,0,'Invoice',0,''),
(234,NULL,'September',2017,0,12,227,NULL,0,'MASM',0,''),
(235,NULL,'September',2017,0,12,228,NULL,0,'Invoice',0,''),
(236,NULL,'September',2017,0,12,229,NULL,0,'MASM',0,''),
(237,NULL,'September',2017,0,12,230,NULL,0,'MASM',0,''),
(238,NULL,'September',2017,0,12,231,NULL,0,'MASM',0,''),
(239,0,'September',2017,12500,11,233,12500,0,NULL,12500,''),
(240,0,'September',2017,34000,11,234,34000,0,NULL,34000,''),
(241,NULL,'September',2017,0,11,235,NULL,0,'Invoice',0,''),
(242,NULL,'September',2017,0,11,236,NULL,0,'Invoice',0,''),
(243,NULL,'September',2017,0,11,236,NULL,0,'Invoice',0,''),
(244,NULL,'September',2017,0,11,237,NULL,0,'Invoice',0,''),
(245,NULL,'September',2017,0,11,238,NULL,0,'Invoice',0,''),
(246,NULL,'September',2017,0,11,239,NULL,0,'Invoice',0,''),
(247,NULL,'September',2017,0,11,240,NULL,0,'Invoice',0,''),
(248,NULL,'September',2017,0,11,241,NULL,0,'Invoice',0,''),
(249,NULL,'September',2017,0,11,242,NULL,0,'Invoice',0,''),
(250,NULL,'September',2017,0,11,243,NULL,0,'Invoice',0,''),
(251,NULL,'September',2017,0,11,244,NULL,0,'Invoice',0,''),
(252,NULL,'September',2017,0,11,245,NULL,0,'Invoice',0,''),
(253,NULL,'September',2017,0,11,246,NULL,0,'MASM',0,''),
(254,NULL,'September',2017,0,11,247,NULL,0,'MASM',0,''),
(255,NULL,'September',2017,0,11,248,NULL,0,'MASM',0,''),
(256,NULL,'September',2017,0,11,249,NULL,0,'MASM',0,''),
(257,NULL,'September',2017,0,11,250,NULL,0,'MASM',0,''),
(258,NULL,'September',2017,0,11,251,NULL,0,'Invoice',0,''),
(259,NULL,'October',2017,0,12,252,NULL,0,'MASM',0,''),
(260,NULL,'October',2017,0,12,253,NULL,0,'MASM',0,''),
(261,NULL,'October',2017,0,12,254,NULL,0,'MASM',0,''),
(262,NULL,'October',2017,0,12,255,NULL,0,'MASM',0,''),
(263,NULL,'October',2017,0,12,256,NULL,0,'MASM',0,''),
(264,NULL,'October',2017,0,12,257,NULL,0,'MASM',0,''),
(265,NULL,'October',2017,0,12,258,NULL,0,'MASM',0,''),
(266,NULL,'October',2017,0,12,259,NULL,0,'MASM',0,''),
(267,NULL,'October',2017,0,12,260,NULL,0,'MASM',0,''),
(268,NULL,'October',2017,0,12,261,NULL,0,'MASM',0,''),
(269,NULL,'October',2017,0,12,262,NULL,0,'Invoice',0,''),
(270,NULL,'October',2017,0,12,263,NULL,0,'MASM',0,''),
(271,NULL,'October',2017,0,12,264,NULL,0,'MASM',0,''),
(272,NULL,'October',2017,0,12,265,NULL,0,'Invoice',0,''),
(273,NULL,'October',2017,0,12,266,NULL,0,'MASM',0,''),
(274,NULL,'October',2017,0,12,267,NULL,0,'MASM',0,''),
(275,NULL,'October',2017,0,12,268,NULL,0,'MASM',0,''),
(276,0,'October',2017,3200,12,269,3200,0,NULL,3200,''),
(277,0,'October',2017,5400,12,270,13500,8100,NULL,5400,''),
(278,NULL,'October',2017,0,12,271,NULL,0,'MASM',0,''),
(279,NULL,'October',2017,0,12,272,NULL,0,'Invoice',0,''),
(280,NULL,'October',2017,0,12,273,NULL,0,'MASM',0,''),
(281,NULL,'October',2017,0,12,274,NULL,0,'MASM',0,''),
(282,NULL,'October',2017,0,12,275,NULL,0,'MASM',0,''),
(283,NULL,'October',2017,0,12,276,NULL,0,'Invoice',0,''),
(284,NULL,'October',2017,0,11,277,NULL,0,'MASM',0,''),
(285,NULL,'October',2017,0,12,278,NULL,0,'MASM',0,''),
(286,NULL,'October',2017,0,12,279,NULL,0,'MASM',0,''),
(287,NULL,'October',2017,0,12,280,NULL,0,'MASM',0,''),
(288,NULL,'October',2017,0,12,281,NULL,0,'MASM',0,''),
(289,NULL,'October',2017,0,12,282,NULL,0,'Invoice',0,''),
(290,NULL,'October',2017,0,12,283,NULL,0,'Invoice',0,''),
(291,NULL,'October',2017,0,12,284,NULL,0,'Invoice',0,''),
(292,NULL,'October',2017,0,12,285,NULL,0,'Invoice',0,''),
(293,NULL,'October',2017,0,11,286,NULL,0,'MASM',0,''),
(294,NULL,'October',2017,0,11,287,NULL,0,'Invoice',0,''),
(295,NULL,'October',2017,0,11,288,NULL,0,'Invoice',0,''),
(296,NULL,'October',2017,0,11,289,NULL,0,'Invoice',0,''),
(297,NULL,'October',2017,0,11,290,NULL,0,'MASM',0,''),
(298,NULL,'October',2017,0,11,291,NULL,0,'MASM',0,''),
(299,NULL,'October',2017,0,11,292,NULL,0,'MASM',0,''),
(300,NULL,'October',2017,0,11,293,NULL,0,'MASM',0,''),
(301,0,'October',2017,2200,11,294,2000,-200,NULL,2200,''),
(302,NULL,'October',2017,0,12,295,NULL,0,'Invoice',0,''),
(303,NULL,'October',2017,0,12,296,NULL,0,'Invoice',0,''),
(304,NULL,'October',2017,0,12,297,NULL,0,'MASM',0,''),
(305,0,'October',2017,15700,12,298,15700,0,NULL,15700,''),
(306,0,'October',2017,15700,12,299,15700,0,NULL,15700,''),
(307,NULL,'October',2017,0,10,300,NULL,0,'MASM',0,''),
(308,NULL,'October',2017,0,12,301,NULL,0,'MASM',0,''),
(309,NULL,'October',2017,0,12,302,NULL,0,'MASM',0,''),
(310,NULL,'October',2017,0,12,303,NULL,0,'MASM',0,''),
(311,NULL,'October',2017,0,12,304,NULL,0,'MASM',0,''),
(312,NULL,'October',2017,0,12,305,NULL,0,'MASM',0,''),
(313,NULL,'October',2017,0,12,306,NULL,0,'MASM',0,''),
(314,NULL,'October',2017,0,12,307,NULL,0,'MASM',0,''),
(315,NULL,'October',2017,0,12,308,NULL,0,'MASM',0,''),
(316,NULL,'October',2017,0,12,309,NULL,0,'MASM',0,''),
(317,NULL,'October',2017,0,12,310,NULL,0,'MASM',0,''),
(318,NULL,'October',2017,0,12,311,NULL,0,'Invoice',0,''),
(319,NULL,'October',2017,0,12,312,NULL,0,'MASM',0,''),
(320,NULL,'October',2017,0,12,313,NULL,0,'MASM',0,''),
(321,NULL,'October',2017,0,12,314,NULL,0,'MASM',0,''),
(322,NULL,'October',2017,0,12,315,NULL,0,'MASM',0,''),
(323,NULL,'October',2017,0,12,316,NULL,0,'MASM',0,''),
(324,NULL,'October',2017,0,12,317,NULL,0,'MASM',0,''),
(325,NULL,'October',2017,0,12,318,NULL,0,'MASM',0,''),
(326,NULL,'October',2017,0,12,319,NULL,0,'Invoice',0,''),
(327,NULL,'October',2017,0,12,320,NULL,0,'MASM',0,''),
(328,NULL,'October',2017,0,12,321,NULL,0,'MASM',0,''),
(329,NULL,'October',2017,0,12,322,NULL,0,'Invoice',0,''),
(330,NULL,'October',2017,0,12,322,NULL,0,'Invoice',0,''),
(331,NULL,'October',2017,0,12,323,NULL,0,'Invoice',0,''),
(332,NULL,'October',2017,0,12,324,NULL,0,'MASM',0,''),
(333,NULL,'October',2017,0,12,324,NULL,0,'MASM',0,''),
(334,NULL,'October',2017,0,12,325,NULL,0,'MASM',0,''),
(335,NULL,'October',2017,0,12,326,NULL,0,'MASM',0,''),
(336,NULL,'October',2017,0,12,327,NULL,0,'MASM',0,''),
(337,NULL,'October',2017,0,12,328,NULL,0,'MASM',0,''),
(338,NULL,'October',2017,0,12,329,NULL,0,'MASM',0,''),
(339,NULL,'October',2017,0,12,330,NULL,0,'MASM',0,''),
(340,NULL,'October',2017,0,12,330,NULL,0,'MASM',0,''),
(341,NULL,'October',2017,0,12,331,NULL,0,'MASM',0,''),
(342,NULL,'October',2017,0,12,332,NULL,0,'Invoice',0,''),
(343,NULL,'October',2017,0,6,333,NULL,0,'MASM',0,''),
(344,NULL,'October',2017,0,6,334,NULL,0,'MASM',0,''),
(345,0,'October',2017,2200,6,334,2500,300,NULL,2200,''),
(346,NULL,'October',2017,0,6,335,NULL,0,'MASM',0,''),
(347,NULL,'October',2017,0,6,335,NULL,0,'MASM',0,''),
(348,NULL,'October',2017,0,6,336,NULL,0,'MASM',0,''),
(349,NULL,'October',2017,0,6,336,NULL,0,'MASM',0,''),
(350,NULL,'October',2017,0,10,338,NULL,0,'MASM',0,''),
(351,NULL,'October',2017,0,6,338,NULL,0,'MASM',0,''),
(352,NULL,'October',2017,0,6,339,NULL,0,'MASM',0,''),
(353,0,'October',2017,15700,10,340,15700,0,NULL,15700,''),
(354,0,'October',2017,2200,10,341,2200,0,NULL,2200,''),
(355,0,'October',2017,2200,10,342,2200,0,NULL,2200,''),
(356,NULL,'October',2017,0,6,342,NULL,0,'MASM',0,''),
(357,NULL,'October',2017,0,6,339,NULL,0,'MASM',0,''),
(358,NULL,'October',2017,0,10,343,NULL,0,'MASM',0,''),
(359,NULL,'October',2017,0,10,344,NULL,0,'Invoice',0,''),
(360,NULL,'October',2017,0,10,346,NULL,0,'Invoice',0,''),
(361,NULL,'October',2017,0,10,347,NULL,0,'Invoice',0,''),
(362,NULL,'October',2017,0,12,348,NULL,0,'MASM',0,''),
(363,NULL,'October',2017,0,12,349,NULL,0,'MASM',0,''),
(364,NULL,'October',2017,0,12,350,NULL,0,'MASM',0,''),
(365,NULL,'October',2017,0,11,351,NULL,0,'MASM',0,''),
(366,NULL,'October',2017,0,12,352,NULL,0,'MASM',0,''),
(367,NULL,'October',2017,0,12,352,NULL,0,'MASM',0,''),
(368,NULL,'October',2017,0,12,353,NULL,0,'MASM',0,''),
(369,0,'October',2017,12500,12,354,12500,0,NULL,12500,''),
(370,0,'October',2017,12500,12,355,12500,0,NULL,12500,''),
(371,NULL,'October',2017,0,12,356,NULL,0,'MASM',0,''),
(372,NULL,'October',2017,0,12,357,NULL,0,'MASM',0,''),
(373,NULL,'October',2017,0,12,358,NULL,0,'Invoice',0,''),
(374,NULL,'October',2017,0,12,359,NULL,0,'Invoice',0,''),
(375,NULL,'October',2017,0,12,360,NULL,0,'MASM',0,''),
(376,NULL,'October',2017,0,12,361,NULL,0,'MASM',0,''),
(377,NULL,'October',2017,0,11,362,NULL,0,'MASM',0,''),
(378,NULL,'October',2017,0,11,363,NULL,0,'MASM',0,''),
(379,NULL,'October',2017,0,11,364,NULL,0,'MASM',0,''),
(380,NULL,'October',2017,0,11,365,NULL,0,'MASM',0,''),
(381,NULL,'October',2017,0,12,366,NULL,0,'MASM',0,''),
(382,NULL,'October',2017,0,12,367,NULL,0,'Invoice',0,''),
(383,NULL,'October',2017,0,6,369,NULL,0,'MASM',0,'1509349804'),
(384,0,'October',2017,5400,6,370,4500,-900,NULL,5400,'1509350240'),
(385,0,'October',2017,5400,6,370,4500,-900,NULL,5400,'1509350240'),
(386,0,'October',2017,2200,6,371,2200,0,NULL,2200,'1509351171'),
(387,NULL,'October',2017,0,6,372,NULL,0,'MASM',0,'1509353276'),
(388,0,'October',2017,2200,6,372,3000,800,NULL,2200,'1509353331'),
(389,NULL,'October',2017,0,6,372,NULL,0,'MASM',0,'1509353377'),
(390,NULL,'October',2017,0,6,373,NULL,0,'MASM',0,'1509354455'),
(391,NULL,'October',2017,0,6,374,NULL,0,'MASM',0,'1509356573'),
(392,NULL,'October',2017,0,6,375,NULL,0,'Invoice',0,'1509356906'),
(393,NULL,'October',2017,0,6,376,NULL,0,'MASM',0,'1509359668'),
(394,NULL,'October',2017,0,6,376,NULL,0,'MASM',0,'1509360243'),
(395,NULL,'October',2017,0,6,376,NULL,0,'MASM',0,'1509361492'),
(396,NULL,'October',2017,0,6,376,NULL,0,'MASM',0,'1509362046'),
(397,NULL,'October',2017,0,12,377,NULL,0,'MASM',0,'1509374651'),
(398,NULL,'October',2017,0,12,378,NULL,0,'MASM',0,'1509437293'),
(399,NULL,'November',2017,0,12,379,NULL,0,'MASM',0,'1509519311'),
(400,NULL,'November',2017,0,12,380,NULL,0,'MASM',0,'1509522538'),
(401,NULL,'November',2017,0,12,381,NULL,0,'MASM',0,'1509522820'),
(402,NULL,'November',2017,0,12,382,NULL,0,'MASM',0,'1509525555'),
(403,NULL,'November',2017,0,12,382,NULL,0,'MASM',0,'1509526794'),
(404,NULL,'November',2017,0,12,384,NULL,0,'MASM',0,'1509528239'),
(405,NULL,'November',2017,0,12,385,NULL,0,'MASM',0,'1509531390'),
(406,NULL,'November',2017,0,10,386,NULL,0,'Invoice',0,'1509609519'),
(407,NULL,'November',2017,0,10,387,NULL,0,'Invoice',0,'1509610051'),
(408,NULL,'November',2017,0,10,388,NULL,0,'Invoice',0,'1509610179'),
(409,NULL,'November',2017,0,10,389,NULL,0,'Invoice',0,'1509610330'),
(410,NULL,'November',2017,0,10,390,NULL,0,'MASM',0,'1509611943'),
(411,NULL,'November',2017,0,10,391,NULL,0,'MASM',0,'1509612222'),
(412,NULL,'November',2017,0,10,392,NULL,0,'MASM',0,'1509612800'),
(413,NULL,'November',2017,0,10,392,NULL,0,'MASM',0,'1509612844'),
(414,NULL,'November',2017,0,10,393,NULL,0,'MASM',0,'1509613386'),
(415,NULL,'November',2017,0,10,394,NULL,0,'MASM',0,'1509629401'),
(416,NULL,'November',2017,0,10,394,NULL,0,'MASM',0,'1509630298'),
(417,NULL,'November',2017,0,10,395,NULL,0,'MASM',0,'1509630663'),
(418,NULL,'November',2017,0,10,396,NULL,0,'MASM',0,'1509631445'),
(419,NULL,'November',2017,0,10,397,NULL,0,'MASM',0,'1509632069'),
(420,NULL,'November',2017,0,10,398,NULL,0,'Invoice',0,'1509633343'),
(421,NULL,'November',2017,0,10,399,NULL,0,'MASM',0,'1509633833'),
(422,NULL,'November',2017,0,10,400,NULL,0,'MASM',0,'1509634244'),
(423,NULL,'November',2017,0,10,401,NULL,0,'MASM',0,'1509634315'),
(424,NULL,'November',2017,0,10,401,NULL,0,'MASM',0,'1509634411'),
(425,NULL,'November',2017,0,10,402,NULL,0,'MASM',0,'1509634603'),
(426,NULL,'November',2017,0,12,403,NULL,0,'Invoice',0,'1509699574'),
(427,NULL,'November',2017,0,12,404,NULL,0,'MASM',0,'1509702349'),
(428,NULL,'November',2017,0,12,405,NULL,0,'MASM',0,'1509702513'),
(429,NULL,'November',2017,0,12,406,NULL,0,'MASM',0,'1509715685'),
(430,0,'November',2017,12500,12,407,12500,0,NULL,12500,'1509715772'),
(431,0,'November',2017,2000,12,407,2000,0,NULL,2000,'1509716400'),
(432,NULL,'November',2017,0,12,406,NULL,0,'MASM',0,'1509717057'),
(433,NULL,'November',2017,0,12,409,NULL,0,'MASM',0,'1509784917'),
(434,NULL,'November',2017,0,6,410,NULL,0,'MASM',0,'1509957126'),
(435,NULL,'November',2017,0,12,411,NULL,0,'MASM',0,'1509973451'),
(436,NULL,'November',2017,0,12,411,NULL,0,'MASM',0,'1509973721'),
(437,NULL,'November',2017,0,12,413,NULL,0,'Invoice',0,'1509975254'),
(438,NULL,'November',2017,0,12,414,NULL,0,'Invoice',0,'1509976301'),
(439,NULL,'November',2017,0,12,413,NULL,0,'MASM',0,'1509977462'),
(440,0,'November',2017,2000,12,416,2000,0,NULL,2000,'1509980128'),
(441,0,'November',2017,2000,12,416,2200,200,NULL,2000,'1509980792'),
(442,NULL,'November',2017,0,12,417,NULL,0,'MASM',0,'1510037420'),
(443,NULL,'November',2017,0,12,418,NULL,0,'MASM',0,'1510037543'),
(444,NULL,'November',2017,0,12,419,NULL,0,'MASM',0,'1510039688'),
(445,NULL,'November',2017,0,12,419,NULL,0,'MASM',0,'1510040813'),
(446,NULL,'November',2017,0,12,420,NULL,0,'Invoice',0,'1510041896'),
(447,NULL,'November',2017,0,12,421,NULL,0,'Invoice',0,'1510047034'),
(448,NULL,'November',2017,0,12,422,NULL,0,'MASM',0,'1510128062'),
(449,NULL,'November',2017,0,12,423,NULL,0,'MASM',0,'1510128181'),
(450,NULL,'November',2017,0,12,424,NULL,0,'MASM',0,'1510129759'),
(451,0,'November',2017,58200,12,425,15000,-43200,NULL,58200,'1510129966'),
(452,0,'November',2017,12500,12,425,12500,0,NULL,12500,'1510130324'),
(453,NULL,'November',2017,0,12,425,NULL,0,'MASM',0,'1510130531'),
(454,NULL,'November',2017,0,12,426,NULL,0,'MASM',0,'1510131247'),
(455,NULL,'November',2017,0,12,427,NULL,0,'Invoice',0,'1510136463'),
(456,NULL,'November',2017,0,12,427,NULL,0,'Invoice',0,'1510137491'),
(457,NULL,'November',2017,0,12,428,NULL,0,'MASM',0,'1510212396'),
(458,NULL,'November',2017,0,12,429,NULL,0,'MASM',0,'1510212571'),
(459,NULL,'November',2017,0,12,430,NULL,0,'MASM',0,'1510212721'),
(460,NULL,'November',2017,0,11,431,NULL,0,'Invoice',0,'1510216311'),
(461,NULL,'November',2017,0,11,429,NULL,0,'MASM',0,'1510217324'),
(462,NULL,'November',2017,0,11,432,NULL,0,'MASM',0,'1510217895'),
(463,NULL,'November',2017,0,11,428,NULL,0,'MASM',0,'1510218518'),
(464,NULL,'November',2017,0,10,433,NULL,0,'Invoice',0,'1510219348'),
(465,NULL,'November',2017,0,12,433,NULL,0,'MASM',0,'1510220402'),
(466,NULL,'November',2017,0,10,434,NULL,0,'MASM',0,'1510220840'),
(467,NULL,'November',2017,0,10,435,NULL,0,'MASM',0,'1510236761'),
(468,NULL,'November',2017,0,12,436,NULL,0,'MASM',0,'1510300528'),
(469,NULL,'November',2017,0,12,437,NULL,0,'MASM',0,'1510306495'),
(470,NULL,'November',2017,0,11,438,NULL,0,'MASM',0,'1510384097'),
(471,NULL,'November',2017,0,11,439,NULL,0,'MASM',0,'1510384178'),
(472,NULL,'November',2017,0,11,440,NULL,0,'MASM',0,'1510384254'),
(473,NULL,'November',2017,0,11,438,NULL,0,'MASM',0,'1510384577'),
(474,NULL,'November',2017,0,11,441,NULL,0,'MASM',0,'1510385960'),
(475,NULL,'November',2017,0,11,442,NULL,0,'Invoice',0,'1510387580'),
(476,NULL,'November',2017,0,11,443,NULL,0,'MASM',0,'1510389795'),
(477,NULL,'November',2017,0,12,429,NULL,0,'MASM',0,'1510554617'),
(478,NULL,'November',2017,0,12,444,NULL,0,'MASM',0,'1510557273'),
(479,NULL,'November',2017,0,6,444,NULL,0,'MASM',0,'1510561109'),
(480,NULL,'November',2017,0,6,445,NULL,0,'MASM',0,'1510562279'),
(481,NULL,'November',2017,0,6,446,NULL,0,'MASM',0,'1510564777'),
(482,NULL,'November',2017,0,6,447,NULL,0,'MASM',0,'1510564938'),
(483,NULL,'November',2017,0,6,448,NULL,0,'MASM',0,'1510565189'),
(484,NULL,'November',2017,0,6,449,NULL,0,'MASM',0,'1510565947'),
(485,NULL,'November',2017,0,6,450,NULL,0,'MASM',0,'1511263547'),
(486,NULL,'November',2017,0,6,450,NULL,0,'MASM',0,'1511269623'),
(487,NULL,'November',2017,0,6,451,NULL,0,'MASM',0,'1512030746'),
(488,NULL,'November',2017,0,6,451,NULL,0,'MASM',0,'1512030900'),
(489,NULL,'December',2017,0,6,452,NULL,0,'MASM',0,'1512552136'),
(490,NULL,'December',2017,0,6,452,NULL,0,'MASM',0,'1512552251'),
(491,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(492,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(493,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(494,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(495,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(496,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(497,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(498,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(499,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(500,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(501,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(502,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(503,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(504,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(505,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(506,NULL,'February',2018,0,0,465,45000,45000,'e.g MASM',0,'1518445653'),
(507,0,'February',2018,2200,0,466,5000,2800,NULL,2200,'1518446750');

/*Table structure for table `category` */

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `description` text,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `category` */

insert  into `category`(`category_id`,`category`,`deleted`,`description`) values 
(1,'PHYSICAL EXAMINATION',0,NULL),
(2,'CHEMICAL EXAMINATION',0,NULL),
(3,'MICROSCOPIC EXAMINATION',0,NULL),
(4,'STOOL ROUTINE',0,NULL),
(5,'URINE ROUTINE',0,NULL),
(6,'OTHER',0,NULL),
(7,'MISCELLANEOUS',0,NULL);

/*Table structure for table `clients` */

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `age` varchar(100) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `lmd` datetime DEFAULT NULL,
  `lmd_by` int(11) NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `dob` varchar(100) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`client_id`)
) ENGINE=InnoDB AUTO_INCREMENT=825 DEFAULT CHARSET=latin1;

/*Data for the table `clients` */

insert  into `clients`(`client_id`,`name`,`phone`,`email`,`gender`,`age`,`added_by`,`lmd`,`lmd_by`,`deleted`,`dob`,`date_added`,`address`) values 
(338,'L Mughogho','','','Male','',10,NULL,0,0,NULL,NULL,NULL),
(339,'Lap','0999955794','mirrigwe@gmail.com','Male','10',6,NULL,0,0,NULL,NULL,NULL),
(340,'Ali Kabotolo','0999955794','sealdiagnostics@yahoo.com','Male','90',10,NULL,0,0,NULL,NULL,NULL),
(341,'Ali Kabotolo','+265 999 955794/ 0881549600','sealdiagnostics@yahoo.com','Male','90',10,NULL,0,0,NULL,NULL,NULL),
(342,'Ali Kabotolo','+265 999 955794/ 0881549600','sealdiagnostics@yahoo.com','Male','90',10,NULL,0,0,NULL,NULL,NULL),
(343,'RODRICK CHAMPITI','0888865290','NIL','Male','00',10,NULL,0,0,NULL,NULL,NULL),
(344,'Gunton Lemesi','0888865290','sealdiagnostics@yahoo.com','Female','18',10,NULL,0,0,NULL,NULL,NULL),
(345,'Fredson Lemesi','0888865290','sealdiagnostics@yahoo.com','Male','51',10,NULL,0,0,NULL,NULL,NULL),
(346,'Fredson Lemesi','0888865290','sealdiagnostics@yahoo.com','Male','51',10,NULL,0,0,NULL,NULL,NULL),
(347,'Fredson Lemesi','0888865290','sealdiagnostics@yahoo.com','Male','51',10,NULL,0,0,NULL,NULL,NULL),
(348,'Ramazan Bakali','0888865290','NIL','Male','10',12,NULL,0,0,NULL,NULL,NULL),
(349,'Charity Champiti','0888869873','NIL','Female','49',12,NULL,0,0,NULL,NULL,NULL),
(350,'Jermaine Desouza','0999199690','NIL','Male','39',12,NULL,0,0,NULL,NULL,NULL),
(352,'Jermaine Desouza','0999199690','jermainedesouza@gmail.com','Male','39',12,NULL,0,0,NULL,NULL,NULL),
(353,'Majorie Majorie','0999262529','NIL','Female','64',12,NULL,0,0,NULL,NULL,NULL),
(354,'Auleria Nsabwe','0888865290','NIL','Female','21',12,NULL,0,0,NULL,NULL,NULL),
(355,'Auleria Nsabwe','0888865290','NIL','Female','21',12,NULL,0,0,NULL,NULL,NULL),
(356,'Shusheela Purtshotam','0888865290','NIL','Female','62',12,NULL,0,0,NULL,NULL,NULL),
(357,'Susheela Portshotam','0888865290','NIL','Female','62',12,NULL,0,0,NULL,NULL,NULL),
(358,'Ken Kandodo','0888865290','NIL','Male','42',12,NULL,0,0,NULL,NULL,NULL),
(359,'Ken Kandodo','0888865290','NIL','Male','42',12,NULL,0,0,NULL,NULL,NULL),
(360,'Lewis Mughogho','0999916640','NIL','Male','80',12,NULL,0,0,NULL,NULL,NULL),
(361,'Lewis Mughogho','0888865290','NIL','Male','80',12,NULL,0,0,NULL,NULL,NULL),
(362,'Mike Mwayangana','088885508','NIL','Male','43',11,NULL,0,0,NULL,NULL,NULL),
(363,'George Chilombe','0888219630','NIL','Male','48',11,NULL,0,0,NULL,NULL,NULL),
(364,'Michael Cremer','0995287925','NIL','Female','18',11,NULL,0,0,NULL,NULL,NULL),
(365,'Shazia Seedat','0993833887','NIL','Female','27',11,NULL,0,0,NULL,NULL,NULL),
(367,'Ellard chikalipo','0888865290','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(371,'Roosevelt Ngosi','0888865290','NIL','Male','17',6,NULL,0,0,NULL,NULL,NULL),
(373,'Emily Mwayangana','+265 999 955794/ 0881549600','NIL','Female','68',6,NULL,0,0,NULL,NULL,NULL),
(375,'Evelyin Simbeya','0999955794','NIL','Female','54',6,NULL,0,0,NULL,NULL,NULL),
(376,'POPO','0999955794','mirrigwe@gmail.com','Male','22',6,NULL,0,0,NULL,NULL,NULL),
(377,'KSHANIKA','0888834934','NIL','Female','16',12,NULL,0,0,NULL,NULL,NULL),
(378,'Tionge Nyondo','0888611735','NIL','Female','26',12,NULL,0,0,NULL,NULL,NULL),
(379,'tyfuy','0888865290','NIL','Male','12',12,NULL,0,0,NULL,NULL,NULL),
(380,'Emily Mwayang\'ana','0995360575','NIL','Female','68',12,NULL,0,0,NULL,NULL,NULL),
(381,'Andrew Bester','0888202851','abbinscor@gmail.com','Male','61',12,NULL,0,0,NULL,NULL,NULL),
(382,'Arvind Rajani','0888827994','a.rajani@afrika.online.net','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(383,'Arvind Rajani','0888827994','NIL','Male','61',12,NULL,0,0,NULL,NULL,NULL),
(384,'Arvind Rajani','0888827994','NIL','Male','50',12,NULL,0,0,NULL,NULL,NULL),
(385,'Elizabeth Mwakalagho','0888896002','NIL','Female','64',12,NULL,0,0,NULL,NULL,NULL),
(386,'M.KAUTA','NA','NA','Female','00',10,NULL,0,1,NULL,NULL,NULL),
(387,'M.Kauta','NA','NA','Female','00',10,NULL,0,0,NULL,NULL,NULL),
(388,'M.Kauta','NA','NA','Female','00',10,NULL,0,0,NULL,NULL,NULL),
(389,'M.Kauta','NA','NA','Female','00',10,NULL,0,0,NULL,NULL,NULL),
(390,'JOHN SANGALA','NA','NA','Male','00',10,NULL,0,1,NULL,NULL,NULL),
(391,'John Sangala','NA','NA','Male','00',10,NULL,0,0,NULL,NULL,NULL),
(392,'POP','+265 999 955794/ 0881549600','NIL','Male','20',10,NULL,0,1,NULL,NULL,NULL),
(393,'BOB','+265 999 955794/ 0881549600','NIL','Male','25',10,NULL,0,1,NULL,NULL,NULL),
(394,'Kimbe Kachingwe','0888343714','NIL','Female','35',10,NULL,0,0,NULL,NULL,NULL),
(395,'Kimbe Kachingwe','NA','NA','Female','35',10,NULL,0,0,NULL,NULL,NULL),
(396,'gferg','NA','NA','Male','00',10,NULL,0,1,NULL,NULL,NULL),
(397,'bb','88','nil','Male','2',10,NULL,0,1,NULL,NULL,NULL),
(398,'chirwa','NA','NA','Female','52',10,NULL,0,1,NULL,NULL,NULL),
(399,'rfe','fe','ed','Female','11',10,NULL,0,1,NULL,NULL,NULL),
(400,'hnjh','a','a','Male','12',10,NULL,0,1,NULL,NULL,NULL),
(401,'Dayashankan','aa','sss','Male','88',10,NULL,0,1,NULL,NULL,NULL),
(402,'gg','gg','gg','Male','25',10,NULL,0,0,NULL,NULL,NULL),
(403,'Ruth Thauka','NA','NIL','Female','38',12,NULL,0,0,NULL,NULL,NULL),
(404,'Gloria Sulani','0888514495','NIL','Female','35',12,NULL,0,0,NULL,NULL,NULL),
(405,'Phillis Mpandakwaya','0993541574','NIL','Female','53',12,NULL,0,0,NULL,NULL,NULL),
(406,'Dinna Makwinja','0999565382','NIL','Female','52',12,NULL,0,0,NULL,NULL,NULL),
(407,'Roosevelt Ngosi','NA','NIL','Male','17',12,NULL,0,0,NULL,NULL,NULL),
(408,'Mable Patel','0884004486','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(409,'Mable Patel','0884004486','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(410,'BRIAN','+265 999 955794/ 0881549600','sealdiagnostics@yahoo.com','Male','12',6,NULL,0,0,NULL,NULL,NULL),
(411,'Alice Chiwalo','0999925400','NIL','Female','45',12,NULL,0,0,NULL,NULL,NULL),
(412,'Limbani Chakhoma','N/A','NIL','Male','67',12,NULL,0,1,NULL,NULL,NULL),
(413,'Limbani Chakhoma','N/A','NIL','Male','67',12,NULL,0,0,NULL,NULL,NULL),
(414,'Joseph Matope','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(415,'Ladhiben Savjani','N/A','NIL','Female','98',12,NULL,0,0,NULL,NULL,NULL),
(416,'Ladhiben Savjani','N/A','NIL','Female','98',12,NULL,0,0,NULL,NULL,NULL),
(417,'Samuel Khwiya','0991183111','khwiya@mlw.mw','Male','42',12,NULL,0,0,NULL,NULL,NULL),
(418,'Caver Bhima','N/A','NIL','Male','72',12,NULL,0,0,NULL,NULL,NULL),
(419,'Charity Champiti','0888869873','NIL','Female','49',12,NULL,0,0,NULL,NULL,NULL),
(420,'Godfrey Magaleta','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(421,'Tinah Lemesi','N/A','NIL','Male','24',12,NULL,0,0,NULL,NULL,NULL),
(422,'Catarina Franzel','0999830469','cfranzel@cfao.com','Female','50',12,NULL,0,0,NULL,NULL,NULL),
(423,'Beatrice salimu','0888699316','NIL','Female','14',12,NULL,0,0,NULL,NULL,NULL),
(424,'Zane Cavalho','0880211267','zanecavalho.mw@gmail','Male','26',12,NULL,0,0,NULL,NULL,NULL),
(425,'Tryness Kaunda','0992713840','NIL','Male','59',12,NULL,0,0,NULL,NULL,NULL),
(426,'David Graves','0997542847','Graves5162@gmail.com','Male','66',12,NULL,0,0,NULL,NULL,NULL),
(427,'Mrs S Kalulu','N/A','NIL','Female','32',12,NULL,0,0,NULL,NULL,NULL),
(428,'Yash Lakhani','0994612902','NIL','Female','50',12,NULL,0,0,NULL,NULL,NULL),
(429,'Vivek Ganesan','0999958378','vivekg@netmail.com','Male','39',12,NULL,0,0,NULL,NULL,NULL),
(430,'Peter Namanja','0888875518','peter.namanja@fedex.com','Male','44',12,NULL,0,0,NULL,NULL,NULL),
(431,'Mr Valeta Shonga','N/A','NIL','Male','47',11,NULL,0,0,NULL,NULL,NULL),
(432,'Beatrice Salimu','0888699316','NIL','Female','00',11,NULL,0,0,NULL,NULL,NULL),
(433,'chirwa','01','@','Female','25',10,NULL,0,0,NULL,NULL,NULL),
(434,'Florence Matewere','0888857592','florencekm@yahoo.com','Female','46',10,NULL,0,0,NULL,NULL,NULL),
(435,'54','+265 999 955794/ 0881549600','ihjij','Female','11',10,NULL,0,0,NULL,NULL,NULL),
(436,'Mr Singh Sajyabux','0998177954','NIL','Female','53',12,NULL,0,0,NULL,NULL,NULL),
(437,'Rose Tambala','0999510606','NIL','Female','65',12,NULL,0,0,NULL,NULL,NULL),
(438,'Arthur Banda','0888822014','NIL','Male','64',11,NULL,0,0,NULL,NULL,NULL),
(439,'David Graves','0997542847','NIL','Male','66',11,NULL,0,0,NULL,NULL,NULL),
(440,'Catarina Franzel','0999830469','NIL','Male','50',11,NULL,0,0,NULL,NULL,NULL),
(441,'Momina Sheikh','0991413985','NIL','Female','42',11,NULL,0,0,NULL,NULL,NULL),
(442,'Jeremia Julius','N/A','NIL','Male','56',11,NULL,0,0,NULL,NULL,NULL),
(443,'Maria Tandwe','0888830694','NIL','Female','47',11,NULL,0,0,NULL,NULL,NULL),
(444,'bb','0888834934','mirrigwe@gmail.com','Male','16',12,NULL,0,0,NULL,NULL,NULL),
(445,'Anne Kammwendo','0999955501','ahweza@gmail.com','Female','63',6,NULL,0,0,NULL,NULL,NULL),
(446,'Daniel Bwanali','0888740553','NIL','Male','18',6,NULL,0,0,NULL,NULL,NULL),
(447,'Namata Kumar','NA','NIL','Female','28',6,NULL,0,1,NULL,NULL,NULL),
(448,'Sandeep Bambra','NA','NA','Male','33',6,NULL,0,0,NULL,NULL,NULL),
(449,'Zoba','nil','briannkhata@gmail.com','Female','13',6,NULL,0,0,NULL,NULL,NULL),
(450,'BOSS','0888015904','briannkhata@gmail.com','Male','12',6,NULL,0,0,NULL,NULL,NULL),
(451,'Geog','0888015904','briannkhata@gmail.com','Male','12',6,NULL,0,0,NULL,NULL,NULL),
(452,'briannkhata@gmail.com','0888015904','briannkhata@gmail.com','Male','9',6,NULL,0,0,NULL,NULL,NULL),
(453,'collins','445874','gfgy','Male','50',6,NULL,0,1,NULL,NULL,NULL),
(454,'collins','545','ddfs','Male','85',6,NULL,0,0,NULL,NULL,NULL),
(455,'Atupele Wirima','N/A','NIL','Female','36',12,NULL,0,1,NULL,NULL,NULL),
(456,'Raeesa Jussab','N/A','NIL','Male','20',10,NULL,0,0,NULL,NULL,NULL),
(457,'Rizwan Khan','N/A','NIL','Male','27',10,NULL,0,0,NULL,NULL,NULL),
(458,'KHAJAR BABA','N/A','NIL','Male','34',10,NULL,0,0,NULL,NULL,NULL),
(459,'Aslam Bakari','0999215090','aslambakari090@gmail.com','Male','49',12,NULL,0,0,NULL,NULL,NULL),
(460,'Rose Tambala','0999570620','NIL','Female','65',12,NULL,0,1,NULL,NULL,NULL),
(461,'Rose Tambala','0999570620','NIL','Female','65',12,NULL,0,0,NULL,NULL,NULL),
(462,'Lizzie Zyambo','N/A','NIL','Female','00',10,NULL,0,0,NULL,NULL,NULL),
(463,'Mahomed Aslam','0888821234','NIL','Male','49',10,NULL,0,0,NULL,NULL,NULL),
(464,'Harry Kabula','N/A','NIL','Male','86',10,NULL,0,0,NULL,NULL,NULL),
(465,'Althea Meyer','0999389454','altheameyer5@gmail.com','Female','63',12,NULL,0,0,NULL,NULL,NULL),
(466,'Farina Amtiaz','0999837444','NIL','Female','27',12,NULL,0,0,NULL,NULL,NULL),
(467,'Farina Amtiaz','O999837444','NIL','Female','27',12,NULL,0,0,NULL,NULL,NULL),
(468,'Farina Amtiaz','0999837444','NIL','Female','27',12,NULL,0,0,NULL,NULL,NULL),
(469,'Ivy Dembo','0888977272','NIL','Female','27',12,NULL,0,0,NULL,NULL,NULL),
(470,'Mr Hashem','N/A','NIL','Male','37',12,NULL,0,0,NULL,NULL,NULL),
(471,'Fredson Lemesi','N/A','NIL','Male','00',11,NULL,0,0,NULL,NULL,NULL),
(472,'Abdul Khan','0888578688','NIL','Male','72',11,NULL,0,0,NULL,NULL,NULL),
(473,'Modester Shadreck','NIL','N/A','Female','00',11,NULL,0,0,NULL,NULL,NULL),
(474,'Chisomo Kamowa','0888424040','NIL','Male','16',12,NULL,0,0,NULL,NULL,NULL),
(475,'Naizer Hamza','0999315208','NIL','Male','56',12,NULL,0,0,NULL,NULL,NULL),
(476,'Paul Chiphanda','N/A','NIL','Male','54',12,NULL,0,0,NULL,NULL,NULL),
(477,'Billy Kainga','N/A','NIL','Male','54',12,NULL,0,0,NULL,NULL,NULL),
(478,'Deborah Makande','08884526685','NIL','Female','17',12,NULL,0,0,NULL,NULL,NULL),
(479,'Rhoda Tembo','N/A','NIL','Female','41',11,NULL,0,0,NULL,NULL,NULL),
(480,'Manisha Lakhani','01824838','NIL','Female','45',11,NULL,0,0,NULL,NULL,NULL),
(481,'Thomson Jussa','N/A','NIL','Male','64',11,NULL,0,0,NULL,NULL,NULL),
(482,'Daniel Marne','N/A','NIL','Male','75',11,NULL,0,0,NULL,NULL,NULL),
(483,'Sherifa Perino','N/A','NIL','Female','59',12,NULL,0,0,NULL,NULL,NULL),
(484,'Ayile Bregger','0999288407','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(485,'Indumat Rajani','0884002083','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(486,'Aziz Issa','N/A','NIL','Male','00',12,NULL,0,1,NULL,NULL,NULL),
(487,'Aziz Issa','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(488,'Vernon Radhakhrishnan','0888827692','NIL','Male','56',12,NULL,0,0,NULL,NULL,NULL),
(489,'Mrs Eunice Graves','0997542847','NIL','Female','56',12,NULL,0,0,NULL,NULL,NULL),
(490,'Jasmin Lambat ','N/A','NIL','Female','65',12,NULL,0,0,NULL,NULL,NULL),
(491,'DILIP DUSAR','0991425291','NIL','Male','41',12,NULL,0,0,NULL,NULL,NULL),
(492,'Mrs Anne Mlongoti','0994292514','NIL','Female','35',12,NULL,0,0,NULL,NULL,NULL),
(493,'NELLY MKWANGWANYA','0995464564','NIL','Female','70',12,NULL,0,0,NULL,NULL,NULL),
(494,'RIAN OSMAN','0999534534','NIL','Male','28',12,NULL,0,0,NULL,NULL,NULL),
(495,'Emily Mwayangana','0995360575','NIL','Female','64',12,NULL,0,0,NULL,NULL,NULL),
(496,'Yaxley Chidoola','N/A','NIL','Male','40',12,NULL,0,0,NULL,NULL,NULL),
(497,'BHARAT MORZARIA','01822583','bharat@globemw.net','Male','60',12,NULL,0,0,NULL,NULL,NULL),
(498,'CHIRAG OZA','0888603553','NIL','Male','36',12,NULL,0,0,NULL,NULL,NULL),
(499,'DAVID LODZANYAMA','0999111200','NIL','Male','39',12,NULL,0,0,NULL,NULL,NULL),
(500,'Romesh Sharma','N/A','N/A','Male','39',12,NULL,0,0,NULL,NULL,NULL),
(501,'Usha Tambe','0882003265','NIL','Female','59',12,NULL,0,0,NULL,NULL,NULL),
(502,'Kenny Chirwa','0888894678','NIL','Male','75',12,NULL,0,0,NULL,NULL,NULL),
(503,'JEAN BANDA','N/A','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(504,'NGANIWE NYONDO','0888611735','NIL','Female','27',12,NULL,0,0,NULL,NULL,NULL),
(505,'WILFRED KATOLA','N/A','NIL','Male','84',12,NULL,0,0,NULL,NULL,NULL),
(506,'Janet Gutah','N/A','NIL','Female','45',11,NULL,0,0,NULL,NULL,NULL),
(507,'ESTHER FERNANDES','0994784639','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(508,'ERNEST ZIMTAMBIRA','N/A','NIL','Male','29',12,NULL,0,0,NULL,NULL,NULL),
(509,'VIOLET VASSILATOS','N/A','NIL','Female','50',12,NULL,0,0,NULL,NULL,NULL),
(510,'KASTURI GANESAN','N/A','NIL','Male','62',12,NULL,0,0,NULL,NULL,NULL),
(511,'Elsie Price','0888827975','NIL','Female','67',11,NULL,0,0,NULL,NULL,NULL),
(512,'collins','544','dasd','Male','21',6,NULL,0,1,NULL,NULL,NULL),
(513,'collins','544','dasd','Male','21',6,NULL,0,1,NULL,NULL,NULL),
(514,'KENNY CHIRWA','0888450494','NIL','Male','75',6,NULL,0,0,NULL,NULL,NULL),
(515,'LAURYN CHIUMIA','NIL','NIL','Male','00',6,NULL,0,1,NULL,NULL,NULL),
(516,'Chrisopher Tukula','NA','NA','Male','00',6,NULL,0,1,NULL,NULL,NULL),
(517,'GHF','GF','FGF','Male','866',6,NULL,0,1,NULL,NULL,NULL),
(518,'Dickson Nanyole','NA','na','Male','00',6,NULL,0,0,NULL,NULL,NULL),
(519,'YTJTY','THT','TR','Male','110',6,NULL,0,1,NULL,NULL,NULL),
(520,'FGHRT','RGERGW','RFGWEFW','Male','747',6,NULL,0,0,NULL,NULL,NULL),
(521,'Paul Chiphanda','0888783044','NIL','Male','54',11,NULL,0,0,NULL,NULL,NULL),
(522,'Manisha Mistry','NA','NIL','Female','39',11,NULL,0,0,NULL,NULL,NULL),
(523,'Mrs Find','NA','NIL','Female','00',11,NULL,0,0,NULL,NULL,NULL),
(524,'Wilfred Katola','NA','NIL','Male','84',11,NULL,0,0,NULL,NULL,NULL),
(525,'Bettie Kandulu','099920601','NIL','Female','00',11,NULL,0,0,NULL,NULL,NULL),
(526,'Shannon Naidoo','NA','NIL','Female','23',11,NULL,0,0,NULL,NULL,NULL),
(527,'Rizwana Jussab','0888825311','NIL','Female','49',11,NULL,0,1,NULL,NULL,NULL),
(528,'OLIVIA CHIKOKOTO','N/A','NIL','Female','00',6,NULL,0,1,NULL,NULL,NULL),
(529,'Jane Maliko','N/A','NIL','Female','61',6,NULL,0,1,NULL,NULL,NULL),
(530,'GG','RFFDG','DD','Male','252',6,NULL,0,1,NULL,NULL,NULL),
(531,'gdg','df','df','Male','75',6,NULL,0,1,NULL,NULL,NULL),
(532,'Kiran Uttam','0999964724','NIL','Female','67',6,NULL,0,0,NULL,NULL,NULL),
(533,'DARSHANABEN KHER','NIL','N/A','Female','39',11,NULL,0,0,NULL,NULL,NULL),
(534,'JAHENDRA KHER','NIL','N/A','Male','43',11,NULL,0,0,NULL,NULL,NULL),
(535,'ROYCE KALANJE','NIL','N/A','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(536,'MAXWELL CHIMOMBO','0881904344','NIL','Male','59',12,NULL,0,0,NULL,NULL,NULL),
(537,'CERISE COOMBES','0995849739','cerisemitchell143@yahoo.co.uk','Female','31',12,NULL,0,0,NULL,NULL,NULL),
(538,'MRS ANNIE CHANGA','O999912000','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(539,'ANOLD NKHATA','0888344999','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(540,'FRANCIS MAGANGA','0888670369','NIL','Male','62',12,NULL,0,0,NULL,NULL,NULL),
(541,'JOYCE NGALAWA','01828709','NIL','Female','39',12,NULL,0,0,NULL,NULL,NULL),
(542,'JOYCE NGALAWA','01828709','NIL','Female','39',12,NULL,0,0,NULL,NULL,NULL),
(543,'DUNCAN NDEGE','NA','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(544,'ALICE MAZINGA','0999323393','NIL','Female','64',12,NULL,0,0,NULL,NULL,NULL),
(545,'CHARITY MAGOMBO','N/A','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(546,'FETIMIDA OSMAN','N/A','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(547,'NAUSIN SHEIKH','NIL','N/A','Female','22',12,NULL,0,1,NULL,NULL,NULL),
(548,'ABDUL KASMANY','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(549,'GISWARD NATASINGH','N/A','NIL','Male','49',12,NULL,0,0,NULL,NULL,NULL),
(550,'Sweba Gaffar Issa','0888869595','NIL','Female','63',12,NULL,0,0,NULL,NULL,NULL),
(551,'WANANGWA PHIRI','N/A','NIL','Female','40',12,NULL,0,0,NULL,NULL,NULL),
(552,'NAILA ZAFAR','0888788688','NIL','Female','33',12,NULL,0,0,NULL,NULL,NULL),
(553,'Arshad Zafar','0888843092','NIL','Male','48',12,NULL,0,0,NULL,NULL,NULL),
(554,'Mozammil Khan','0992234725','NIL','Male','52',12,NULL,0,0,NULL,NULL,NULL),
(555,'Farina Amtiaz','N/A','NIL','Male','12',12,NULL,0,0,NULL,NULL,NULL),
(556,NULL,NULL,NULL,NULL,NULL,12,NULL,0,0,NULL,NULL,NULL),
(557,'SHONGA VALETA','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(558,'Brenda Ngoma','0991172706','NIL','Female','39',12,NULL,0,0,NULL,NULL,NULL),
(559,'Daniel Marne','0888822196','NIL','Male','75',12,NULL,0,0,NULL,NULL,NULL),
(560,'ANNIE MAGOMBO','N/A','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(561,'Joyce  Kandoje','0888858468','NIL','Female','53',12,NULL,0,0,NULL,NULL,NULL),
(562,'TAPIWA GONDWE','N/A','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(563,'Ndanasho Kayange','0999284221','NIL','Male','36',11,NULL,0,0,NULL,NULL,NULL),
(564,'JOSEPH MAFUKENI','0888558223','NIL','Male','77',12,NULL,0,0,NULL,NULL,NULL),
(565,'LINLEY HIWA','09999860270','N/A','Female','61',12,NULL,0,0,NULL,NULL,NULL),
(566,'lamsey Duwa','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(567,'Dorotyh Kamowa','0888656252','NIL','Female','42',12,NULL,0,0,NULL,NULL,NULL),
(568,'LORRAINE KAMBALAMENTORE','0888958618','NIL','Female','36',12,NULL,0,0,NULL,NULL,NULL),
(569,'Azeem Samreen','0992730456','NIL','Male','26',12,NULL,0,0,NULL,NULL,NULL),
(570,'Evwlyn Munlo','0999380187','NIL','Female','66',12,NULL,0,0,NULL,NULL,NULL),
(571,'Loveness Chimombo','0999415811','NIL','Female','44',11,NULL,0,0,NULL,NULL,NULL),
(572,'Lexford Tembo','N/A','NIL','Male','74',11,NULL,0,0,NULL,NULL,NULL),
(573,'Wathu Maliro','0995484564','NIL','Female','24',11,NULL,0,0,NULL,NULL,NULL),
(574,'NELLY MKWANGWANYA','0995464564','NIL','Female','70',11,NULL,0,0,NULL,NULL,NULL),
(575,'SANDRA MOTO','0997197327','ndiazi.nicole@gmail.com','Female','34',11,NULL,0,0,NULL,NULL,NULL),
(576,'ARTHUR BANDA','0888822014','NIL','Male','65',12,NULL,0,0,NULL,NULL,NULL),
(577,'Syra Surtee','N/A','NIL','Female','13',12,NULL,0,0,NULL,NULL,NULL),
(578,'Renuka Wickramanayake','0888844425','NIL','Male','38',11,NULL,0,0,NULL,NULL,NULL),
(579,'Alice Topani','0888890999','NIL','Female','77',11,NULL,0,0,NULL,NULL,NULL),
(580,'Karyn Chidoola','NA','NIL','Female','00',11,NULL,0,0,NULL,NULL,NULL),
(581,'Ishmael Grant','0999879480','NIL','Male','43',11,NULL,0,0,NULL,NULL,NULL),
(582,'TAQI BHIMA','0999510639','N/A','Female','71',12,NULL,0,0,NULL,NULL,NULL),
(583,'Judith Chiyepa','0881266848','NIL','Female','24',12,NULL,0,0,NULL,NULL,NULL),
(584,'Alice Mazinga','099932393','NIL','Female','64',11,NULL,0,0,NULL,NULL,NULL),
(585,'ARTHUR KAJAWA','0999180709','N/A','Male','46',11,NULL,0,0,NULL,NULL,NULL),
(586,'VICTOR LIKALAMU','N/A','N/A','Male','65',12,NULL,0,0,NULL,NULL,NULL),
(587,'NESTER JIYA','N/A','NIL','Male','83',12,NULL,0,0,NULL,NULL,NULL),
(588,'SHERNAZ PANDOR','0991921617','psshernaz@yahoo.com','Female','31',12,NULL,0,0,NULL,NULL,NULL),
(589,'PAULINE PANDOR','N/A','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(590,'SAMREEN AZEEM','+265992730456','NIL','Female','26',12,NULL,0,0,NULL,NULL,NULL),
(591,'JULIUS JEREMIAH','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(592,'ZUNZO MITOLE','0888843734','wcmitole@waterforpeople.org','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(593,'ERIKA REIS','N/A','NIL','Female','20',12,NULL,0,0,NULL,NULL,NULL),
(594,'ERIKA REIS','N/A','NIL','Female','20',12,NULL,0,1,NULL,NULL,NULL),
(595,'Kaposa Nkuzengwa','N/A','NIL','Male','59',12,NULL,0,0,NULL,NULL,NULL),
(596,'Dhruv Patel','0888878563','NIL','Male','15',11,NULL,0,0,NULL,NULL,NULL),
(597,'JOYCE KATUNGA','0999362128','N/A','Male','33',12,NULL,0,0,NULL,NULL,NULL),
(598,'PATRICK NTANTHA','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(599,'MLUMBO CHIMWAZA','08883708189','bchimwaza@chimwaza@yahoo.com','Female','23',12,NULL,0,0,NULL,NULL,NULL),
(600,'CHART DUPLESIS','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(601,'JANET MTALIKA','N/A','NIL','Female','41',12,NULL,0,0,NULL,NULL,NULL),
(602,'Abel Chimaliro','01823189','NIL','Male','65',12,NULL,0,0,NULL,NULL,NULL),
(603,'BRIGHT CHIMULIRENJI','N/A','NIL','Male','21',12,NULL,0,0,NULL,NULL,NULL),
(604,'ELLIOT MULANJE','0999553142','emulanje@levetamw.com','Male','55',12,NULL,0,0,NULL,NULL,NULL),
(605,'WEZZIE MWAUNGULU','0995005091','emwaungulu@gmail.com','Female','35',12,NULL,0,0,NULL,NULL,NULL),
(606,'GEORGE CHIROMBE','0888219630','NIL','Male','49',12,NULL,0,0,NULL,NULL,NULL),
(607,'Cornelius Chisale','0884103245','NIL','Male','29',12,NULL,0,0,NULL,NULL,NULL),
(608,'ANNIE CHIOMBA','0881483454','NIL','Female','64',12,NULL,0,0,NULL,NULL,NULL),
(609,'DAVID ANTHONY ','0888648545','jodcon@globemw.net','Male','53',12,NULL,0,0,NULL,NULL,NULL),
(610,'Tapiwa Gondwe','N/A','NIL','Female','28',12,NULL,0,0,NULL,NULL,NULL),
(611,'Janet  Guta','N/A','NIL','Female','45',12,NULL,0,0,NULL,NULL,NULL),
(612,'Charity Magombo','N/A','NIL','Female','47',12,NULL,0,0,NULL,NULL,NULL),
(613,'Annie Makawa','0881922469','NIL','Female','55',12,NULL,0,0,NULL,NULL,NULL),
(614,'Poojitha Surianarayanan','0888827945','NIL','Female','16',12,NULL,0,0,NULL,NULL,NULL),
(615,'Kaanya Surianarayanan','0888827945','NIL','Female','18',12,NULL,0,0,NULL,NULL,NULL),
(616,'Devang Shah','0881969640','NIL','Male','39',12,NULL,0,0,NULL,NULL,NULL),
(617,'CHIFUNDO NKHWAZI','0991379184','NIL','Female','41',12,NULL,0,0,NULL,NULL,NULL),
(618,'ELEANOR NKHONJERA','0888535831','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(619,'SABRINA KARIM','0885337373','NIL','Female','28',12,NULL,0,0,NULL,NULL,NULL),
(620,'ANNIE CHILINGA','0991998879','NIL','Female','52',12,NULL,0,0,NULL,NULL,NULL),
(621,'NOEL MALEMIA','08888634651','noelcaleb2009@gmail.com','Male','47',12,NULL,0,0,NULL,NULL,NULL),
(622,'GREY CHILIPA','0999437079','N/A','Male','68',12,NULL,0,0,NULL,NULL,NULL),
(623,'JULEKA POLLOCK','O993858847','NIL','Female','54',12,NULL,0,0,NULL,NULL,NULL),
(624,'LOUIS KASINJA','0882855661','NIL','Male','18',12,NULL,0,0,NULL,NULL,NULL),
(625,'CRYTAN TEMANI','0998319294','NIL','Male','72',12,NULL,0,0,NULL,NULL,NULL),
(626,'Lumbani Nyirenda','0999472049','NIL','Male','33',12,NULL,0,0,NULL,NULL,NULL),
(627,'Isaac H Kamanga','0885300049','NIL','Male','22',12,NULL,0,0,NULL,NULL,NULL),
(628,'SMILE PHOMBEYA','N/A','NIL','Male','77',12,NULL,0,0,NULL,NULL,NULL),
(629,'ROSHAM HASHAM','088111888','NIL','Female','57',12,NULL,0,0,NULL,NULL,NULL),
(630,'H PATEL','099080950','NIL','Male','48',12,NULL,0,0,NULL,NULL,NULL),
(631,'collida Mkandawire','0999524222','NIL','Female','26',12,NULL,0,0,NULL,NULL,NULL),
(632,'ABDUL GAFFAR JUSSAB','0888825011','NIL','Male','59',12,NULL,0,0,NULL,NULL,NULL),
(633,'Rizwana Jussab','0888825311','NIL','Female','59',12,NULL,0,0,NULL,NULL,NULL),
(634,'RITISHA TANNA','088898200','jeethardware@gmail.com','Female','12',12,NULL,0,0,NULL,NULL,NULL),
(635,'Anil Mamtora','0888829124','NIL','Male','73',12,NULL,0,0,NULL,NULL,NULL),
(636,'Anwar A Patel','0991025812','NIL','Male','28',11,NULL,0,0,NULL,NULL,NULL),
(637,'PEDZAI MUFARA','0997716311','pmufara@gmail.com','Male','55',12,NULL,0,0,NULL,NULL,NULL),
(638,'Witty Ngosi','N','NIL','Male','24',12,NULL,0,0,NULL,NULL,NULL),
(639,'Tisunge Chirwa','N/A','NIL','Female','35',11,NULL,0,0,NULL,NULL,NULL),
(640,'Ariana Bashir','0999114636','NIL','Female','12',11,NULL,0,0,NULL,NULL,NULL),
(641,'Joana Chiocha','N/A','NIL','Female','31',11,NULL,0,0,NULL,NULL,NULL),
(642,'Roshan Hassam','0888111888','NIL','Female','57',11,NULL,0,0,NULL,NULL,NULL),
(643,'Charity  Mundira','01879614','NIL','Female','30',11,NULL,0,0,NULL,NULL,NULL),
(644,'kateness Dula','0999975575','NIL','Female','83',11,NULL,0,0,NULL,NULL,NULL),
(645,'LUCY TEMBO','0888832775','NIL','Female','45',12,NULL,0,0,NULL,NULL,NULL),
(646,'MAHOMED KHALI','N/A','N/A','Male','31',12,NULL,0,0,NULL,NULL,NULL),
(647,'RAVI KUMAR','0888210095','ravi@arkaymw.com','Male','46',12,NULL,0,0,NULL,NULL,NULL),
(648,'Atikondera Lapken','0999955794','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(649,'ALICE UTONGA','0999942112','NIL','Female','59',12,NULL,0,0,NULL,NULL,NULL),
(650,'Naila Zafar','0888788688','NIL','Female','33',12,NULL,0,0,NULL,NULL,NULL),
(651,'Indumat Rajani','01820775','NIL','Female','71',12,NULL,0,0,NULL,NULL,NULL),
(652,'Nedson Nalikungwi','N/A','NIL','Female','61',12,NULL,0,0,NULL,NULL,NULL),
(653,'John Jnr Jia','0999890998','NIL','Male','14',11,NULL,0,0,NULL,NULL,NULL),
(654,'Wesley Makhomwa','0999839713','NIL','Male','64',11,NULL,0,0,NULL,NULL,NULL),
(655,'Neera Mamtora','0994257919','NIL','Female','44',11,NULL,0,0,NULL,NULL,NULL),
(656,'Chikondi Nyirenda','0881245472','NIL','Female','26',11,NULL,0,0,NULL,NULL,NULL),
(657,'Shamash Surtee','N/A','NIL','Male','48',11,NULL,0,0,NULL,NULL,NULL),
(658,'Kereti Kanjo','0882654644','NIL','Female','35',11,NULL,0,0,NULL,NULL,NULL),
(659,'Rabiyah Osman','N/A','NIL','Female','20',11,NULL,0,0,NULL,NULL,NULL),
(660,'ANNESSE HUBE','0999304332','nee-sie@hotmail.com','Female','31',11,NULL,0,0,NULL,NULL,NULL),
(661,'ZEBUNISA PANJWANI','0999412421','NIL','Female','71',12,NULL,0,0,NULL,NULL,NULL),
(662,'SAJYABUX SINGH','0998177954','NIL','Male','54',12,NULL,0,0,NULL,NULL,NULL),
(663,'AMAR CHAND','0992456524','NIL','Male','54',12,NULL,0,0,NULL,NULL,NULL),
(664,'HANIFA NATASINGH','0992220809','NIL','Female','41',12,NULL,0,0,NULL,NULL,NULL),
(665,'MERCY DYTON','N/A','NIL','Female','00',12,NULL,0,1,NULL,NULL,NULL),
(666,'VAJU MORZARIA','088882178','NIL','Female','65',12,NULL,0,0,NULL,NULL,NULL),
(667,'DAVID GRAVES','0997542847','NIL','Male','67',12,NULL,0,0,NULL,NULL,NULL),
(668,'ARTHUR KAJAWA','0999980709','NIL','Male','46',12,NULL,0,0,NULL,NULL,NULL),
(669,'MARIANA TRINDADE ','0882031550','NIL','Female','64',12,NULL,0,0,NULL,NULL,NULL),
(670,'ARTHUR BANDA','0888827705','NIL','Male','65',12,NULL,0,0,NULL,NULL,NULL),
(671,'MASIA WALITA','N/A','NIL','Male','31',12,NULL,0,0,NULL,NULL,NULL),
(672,'Jones Zimba','0996344497','NIL','Female','53',12,NULL,0,0,NULL,NULL,NULL),
(673,'Peter Namanja','0888875518','NIL','Male','45',12,NULL,0,0,NULL,NULL,NULL),
(674,'Felia Mdazepa','N/A','NIL','Female','22',12,NULL,0,0,NULL,NULL,NULL),
(675,'Kelvin Kaipah','0995377882','NIL','Male','26',12,NULL,0,0,NULL,NULL,NULL),
(676,'Robert Limitoni','N/A','NIL','Male','45',12,NULL,0,0,NULL,NULL,NULL),
(677,'Lawdon Maluwa','N/A','NIL','Male','72',12,NULL,0,0,NULL,NULL,NULL),
(678,'JAGDISH BHAMBRA','0888829257','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(679,'SARAH MZEMBE','0888858819','NIL','Female','73',12,NULL,0,0,NULL,NULL,NULL),
(680,'JAMES BENARD','N/A','N/A','Male','42',12,NULL,0,0,NULL,NULL,NULL),
(681,'UNA COOMBES','0992822066','rcoombes@telecomssystemsmw.com','Female','55',12,NULL,0,0,NULL,NULL,NULL),
(682,'FAITH BWANALI','0888740553','NIL','Female','22',12,NULL,0,0,NULL,NULL,NULL),
(683,'ISAAC KAMANGA','01820488','N/A','Male','22',12,NULL,0,0,NULL,NULL,NULL),
(684,'Manjula Devraj','0995500053','NIL','Female','75',12,NULL,0,0,NULL,NULL,NULL),
(685,'Gulabdas Devraj','0995500053','NIL','Male','74',12,NULL,0,0,NULL,NULL,NULL),
(686,'Loveness Makwati','N/A','NIL','Female','41',12,NULL,0,0,NULL,NULL,NULL),
(687,'LINLEY HIWA','0999860270','NIL','Female','66',12,NULL,0,0,NULL,NULL,NULL),
(688,'Brave Chirwa','0999205825','NIL','Male','44',11,NULL,0,0,NULL,NULL,NULL),
(689,'ROBERT GONDWE','N/A','NIL','Male','25',12,NULL,0,1,NULL,NULL,NULL),
(690,'PATRICK MBALE','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(691,'FAUSTACE CHIRWA','0888851288','NIL','Male','67',12,NULL,0,0,NULL,NULL,NULL),
(692,'SMILE PHOMBEYA','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(693,'NITA SAVJANI','N/A','NIL','Female','00',12,NULL,0,1,NULL,NULL,NULL),
(694,'SARAH LORGAT','0999800661','NIL','Female','29',12,NULL,0,0,NULL,NULL,NULL),
(695,'Bhadra Morzaria','0888821780','NIL','Female','65',12,NULL,0,0,NULL,NULL,NULL),
(696,'Ishmael Grant','0999879460','NIL','Male','43',11,NULL,0,0,NULL,NULL,NULL),
(697,'AFSA MUGAL','0999036856','munirmugal@gmail.com','Female','28',11,NULL,0,0,NULL,NULL,NULL),
(698,'VESTA KONYANI','N/A','NIL','Female','29',12,NULL,0,0,NULL,NULL,NULL),
(699,'MR CHART DUPLESIS','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(700,'MR CHART DUPLESIS','N/A','N/A','Male','41',12,NULL,0,1,NULL,NULL,NULL),
(701,'MR CHART DUPLESIS','N/A','N/A','Male','41',12,NULL,0,1,NULL,NULL,NULL),
(702,'Thokozani Temani','0888737108','NIL','Female','36',12,NULL,0,0,NULL,NULL,NULL),
(703,'IREENE KAMANYA','0995670614','NIL','Female','63',11,NULL,0,0,NULL,NULL,NULL),
(704,'Cidrick Matewere','0881767687','NIL','Male','41',11,NULL,0,0,NULL,NULL,NULL),
(705,'Arnold Nkhata','0888344999','NIL','Male','54',12,NULL,0,1,NULL,NULL,NULL),
(706,'Arnold Nkhata','0888344999','NIL','Male','54',12,NULL,0,1,NULL,NULL,NULL),
(707,'Arnold Nkhata','0888344999','NIL','Male','54',12,NULL,0,0,NULL,NULL,NULL),
(708,'NARHARI PATEL','N/A','NIL','Male','70',12,NULL,0,0,NULL,NULL,NULL),
(709,'J. KAPHAMTENGO','N/A','NIL','Male','77',12,NULL,0,0,NULL,NULL,NULL),
(710,'JONATHAN MAKUWIRA','0998769957','jmakuwira@must.ac.mw','Male','60',12,NULL,0,0,NULL,NULL,NULL),
(711,'Zaitun Khan','0888890844','zsurtee2@gmail.com','Female','45',10,NULL,0,0,NULL,NULL,NULL),
(712,'DARSHANA KHER','0999273041','NIL','Female','39',12,NULL,0,0,NULL,NULL,NULL),
(713,'KUSH KHER','N/A','NIL','Male','13',12,NULL,0,0,NULL,NULL,NULL),
(714,'CLATIRAL KOTECHA','N/A','NIL','Male','75',12,NULL,0,0,NULL,NULL,NULL),
(715,'HASSAM LAMBAT','0888653717','jussabhassam@gmail.com','Male','30',12,NULL,0,0,NULL,NULL,NULL),
(716,'ZAINAB KHAN','0888898009','NIL','Female','70',11,NULL,0,0,NULL,NULL,NULL),
(717,'ZAINAB KHAN','0888898009','NIL','Female','70',11,NULL,0,0,NULL,NULL,NULL),
(718,'ZAINAB KHAN','0888898009','NIL','Female','70',11,NULL,0,0,NULL,NULL,NULL),
(719,'SADEYA OSMAN','N/A','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(720,'RITA VASSILATOS','0999925010','NIL','Female','53',12,NULL,0,0,NULL,NULL,NULL),
(721,'ANNAH MTAWALI','0995335064','NIL','Female','67',12,NULL,0,0,NULL,NULL,NULL),
(722,'MRS MADHUBALA NARHARI PATEL','0994117967','NIL','Female','65',12,NULL,0,0,NULL,NULL,NULL),
(723,'TAPIWA GONDWE','N/A','NIL','Female','28',12,NULL,0,0,NULL,NULL,NULL),
(724,'DUMBO MUWALO','N/A','NIL','Male','47',12,NULL,0,0,NULL,NULL,NULL),
(725,'ALLAN MANYOZO','N/A','NIL','Male','16',12,NULL,0,0,NULL,NULL,NULL),
(726,'SELVARAT NAYAGAM','0999936838','NIL','Male','49',12,NULL,0,0,NULL,NULL,NULL),
(727,'DIVYA PATEL','0888829264','NIL','Female','59',12,NULL,0,0,NULL,NULL,NULL),
(728,'TESSA BAKARI','0999430475','NIL','Female','36',12,NULL,0,0,NULL,NULL,NULL),
(729,'ZAITOON PATEL','0999858858','NIL','Female','63',12,NULL,0,0,NULL,NULL,NULL),
(730,'SARAH CHATATA','0888654120','NIL','Female','22',12,NULL,0,0,NULL,NULL,NULL),
(731,'FATIMA GAFFAR','NIL','NIL','Female','25',12,NULL,0,0,NULL,NULL,NULL),
(732,'PRAGNA PATEL','N/A','NIL','Female','48',12,NULL,0,0,NULL,NULL,NULL),
(733,'CHRISTINA SIMENTI','0991097778','NIL','Female','24',12,NULL,0,0,NULL,NULL,NULL),
(734,'JOHN KALICHERO','0999955003','NIL','Male','43',12,NULL,0,0,NULL,NULL,NULL),
(735,'ALLEN MAVIMIRA','0888721908','NIL','Male','47',12,NULL,0,0,NULL,NULL,NULL),
(736,'JOSEMAN MAVIMIRA','0888721908','NIL','Female','43',12,NULL,0,0,NULL,NULL,NULL),
(737,'CERISE COOMBES','N/A','NIL','Female','31',12,NULL,0,0,NULL,NULL,NULL),
(738,'FLORENCE NONGANONGA','0888335170','NIL','Female','44',12,NULL,0,0,NULL,NULL,NULL),
(739,'MERCY ANTHONY','0999926340','NIL','Female','78',12,NULL,0,0,NULL,NULL,NULL),
(740,'MERCY CHIBISA','N/A','NIL','Female','00',12,NULL,0,0,NULL,NULL,NULL),
(741,'Imtiaz adam','N/A','NIL','Male','57',12,NULL,0,0,NULL,NULL,NULL),
(742,'JAMES BANDA','N/A','NIL','Male','00',11,NULL,0,0,NULL,NULL,NULL),
(743,'JAMES BANDA','N/A','NIL','Male','00',11,NULL,0,1,NULL,NULL,NULL),
(744,'KAWECHE MALEE','N/A','NIL','Male','00',11,NULL,0,0,NULL,NULL,NULL),
(745,'JOEL CHIMBETA','N/A','NIL','Male','24',11,NULL,0,0,NULL,NULL,NULL),
(746,'PARVATIBEN PATEL','0888241440','NIL','Female','78',11,NULL,0,0,NULL,NULL,NULL),
(747,'IDA KAMBIYA ','N/A','NIL','Female','29',12,NULL,0,0,NULL,NULL,NULL),
(748,'JOSEPH MAFUKENI','0888558223','NIL','Male','77',12,NULL,0,0,NULL,NULL,NULL),
(749,'ROSEMARY DAVIS','0886449292','rosemaryclairedavis@hotmail.com','Female','25',12,NULL,0,0,NULL,NULL,NULL),
(750,'LEXAH KANTEDZA','N/A','NIL','Female','71',12,NULL,0,0,NULL,NULL,NULL),
(751,'STIPHENIA CHIKONDE','0888514372','NIL','Female','59',11,NULL,0,0,NULL,NULL,NULL),
(752,'ELIZA CHIKOTI','0885608811','NIL','Female','22',11,NULL,0,0,NULL,NULL,NULL),
(753,'DAPHNE TEMBO','0888893184','NIL','Female','23',12,NULL,0,0,NULL,NULL,NULL),
(754,'ANNIE MLONGOTI','0881023466','NIL','Female','35',12,NULL,0,0,NULL,NULL,NULL),
(755,'TOWERA KAMANGA','0888718219','NIL','Female','17',11,NULL,0,0,NULL,NULL,NULL),
(756,'NENANI CHIDELU','N/A','NIL','Female','00',11,NULL,0,0,NULL,NULL,NULL),
(757,'NENANI CHIDELU','N/A','NIL','Female','00',11,NULL,0,0,NULL,NULL,NULL),
(758,'AMANDA JUMA','NIL','NIL','Female','26',12,NULL,0,0,NULL,NULL,NULL),
(759,'PATRICK MTALIKA','N/A','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(760,'MERCY CHIBISA','N/A','NIL','Female','41',12,NULL,0,0,NULL,NULL,NULL),
(761,'AONENJI MANYIKA','0999981402','NIL','Male','42',12,NULL,0,0,NULL,NULL,NULL),
(762,'PARAMANAND YADAWAD','0888826151','NIL','Male','53',12,NULL,0,0,NULL,NULL,NULL),
(763,'CAROLYN BEHAN','0999230292','malawilife@gmail.com','Female','45',12,NULL,0,0,NULL,NULL,NULL),
(764,'ALINANE MUNYENYEMBE','1993','NIL','Female','25',12,NULL,0,0,NULL,NULL,NULL),
(765,'HELEN CARVALHO','0997504791','NIL','Female','86',12,NULL,0,0,NULL,NULL,NULL),
(766,'MEHRUNISA ADAM','01824343','NIL','Female','63',12,NULL,0,0,NULL,NULL,NULL),
(767,'GANESAN KASTURI','0995462563','NIL','Female','62',11,NULL,0,0,NULL,NULL,NULL),
(768,'SANJEEVI MERAGEDERANA','0888208472','NIL','Male','38',11,NULL,0,0,NULL,NULL,NULL),
(769,'NISHSHANKA MERAGEDERANA','0888208472','NIL','Male','38',11,NULL,0,0,NULL,NULL,NULL),
(770,'LUKE MUTUWAWIRA','N/A','NIL','Male','37',11,NULL,0,0,NULL,NULL,NULL),
(771,'ZANE CARVALHO','0880211267','zanecarvalho.mw@gmail','Male','27',12,NULL,0,0,NULL,NULL,NULL),
(772,'CASSIUS PHIRI','0999829087','NIL','Male','00',12,NULL,0,0,NULL,NULL,NULL),
(773,'MAMUNDU KANDULU','N/A','NIL','Male','80',11,NULL,0,0,NULL,NULL,NULL),
(774,'ARNOLD ULILI','0888959239','NIL','Male','55',11,NULL,0,0,NULL,NULL,NULL),
(775,'MARTHA NGOZO','0998390640','mngozo@jhu.medcol.mw','Female','57',12,NULL,0,0,NULL,NULL,NULL),
(776,'GAFFAR JUSSAB','012825311','NIL','Male','49',12,NULL,0,0,NULL,NULL,NULL),
(777,'SIBALE PATRICIA','N/A','NIL','Female','00',12,NULL,0,1,NULL,NULL,NULL),
(778,'SHAZINA LAMBAT','0999721121','NIL','Female','35',12,NULL,0,0,NULL,NULL,NULL),
(779,'FLORENCE MATEWERE','0888857592','florencekm@yahoo.com','Female','47',12,NULL,0,0,NULL,NULL,NULL),
(780,'HASTINGS CHIKWETE','0888666309','NIL','Male','58',12,NULL,0,0,NULL,NULL,NULL),
(781,'LORRAINE KAMBALAMENTORE','0888958618','NIL','Female','36',12,NULL,0,0,NULL,NULL,NULL),
(782,'JEENA SHAILENDRA','0888202561','NIL','Male','47',12,NULL,0,0,NULL,NULL,NULL),
(783,'FAITH KAPALAMULA','09999563596','NIL','Female','25',12,NULL,0,0,NULL,NULL,NULL),
(784,'OLIVEV TEMANI','0881122624','NIL','Female','69',12,NULL,0,0,NULL,NULL,NULL),
(785,'ANNESS BANDA','N/A','NIL','Female','65',12,NULL,0,1,NULL,NULL,NULL),
(786,'ANNESS BANDA','N/A','NIL','Female','65',12,NULL,0,0,NULL,NULL,NULL),
(787,'OSWARD BONONGWE','N/A','NIL','Male','34',12,NULL,0,1,NULL,NULL,NULL),
(788,'OSWARD BONONGWE','N/A','NIL','Male','34',12,NULL,0,0,NULL,NULL,NULL),
(789,'ZUBEDA JAMAL','N/A','NIL','Female','63',12,NULL,0,0,NULL,NULL,NULL),
(790,'ZUBEDA JAMAL','N/A','NIL','Female','63',12,NULL,0,1,NULL,NULL,NULL),
(791,'NEDSON MWATIKANA','N/A','NIL','Male','55',12,NULL,0,0,NULL,NULL,NULL),
(792,'MATRIDA CHIMOWA','N/A','NIL','Female','00',11,NULL,0,0,NULL,NULL,NULL),
(793,'MIKE MWAYANG\'ANA','0888085508','NIL','Male','44',11,NULL,0,0,NULL,NULL,NULL),
(794,'HEATHER WALLACE','088821358','heatherdrwjw.net','Female','71',11,NULL,0,0,NULL,NULL,NULL),
(795,'JULEKA POLLOCK','0993858847','NIL','Female','54',11,NULL,0,0,NULL,NULL,NULL),
(796,'REV DASIANO MUHIME','N/A','NIL','Male','80',11,NULL,0,0,NULL,NULL,NULL),
(797,'RAJSHREE LAKHANI','01828326','NIL','Female','51',11,NULL,0,0,NULL,NULL,NULL),
(798,'OLIVE BWANALI','N/A','NIL','Female','43',11,NULL,0,0,NULL,NULL,NULL),
(799,'LINLEY HIWA','N/A','NIL','Female','66',12,NULL,0,0,NULL,NULL,NULL),
(800,'CHARLES NAMAWELUSO','N/A','NIL','Male','80',12,NULL,0,0,NULL,NULL,NULL),
(801,'BEN MBEWE','0999320873','NIL','Male','20',12,NULL,0,0,NULL,NULL,NULL),
(802,'KHALEEQ ADAM','01824608','NIL','Male','29',11,NULL,0,0,NULL,NULL,NULL),
(803,'FRANCIS DELEZA','0999958072','NIL','Male','40',12,NULL,0,0,NULL,NULL,NULL),
(804,'AGNESS MWASE','0999912369','mwaseagness@gmail.com','Female','73',12,NULL,0,0,NULL,NULL,NULL),
(805,'SULLIVANE GUMRAN','0992628201','NIL','Male','46',12,NULL,0,0,NULL,NULL,NULL),
(806,'JAMES GHOBEDE','O888835974','NIL','Male','78',12,NULL,0,0,NULL,NULL,NULL),
(807,'PHILLEMON KANTEDZA','0999955660','NIL','Male','41',12,NULL,0,0,NULL,NULL,NULL),
(808,'CATHERINE CARVALHO','0993436196','NIL','Female','59',12,NULL,0,0,NULL,NULL,NULL),
(809,'BEATRICE  CHIPHATA','0884177266','NIL','Female','26',12,NULL,0,0,NULL,NULL,NULL),
(810,'FRANK REDSON','N/A','NIL','Male','34',11,NULL,0,0,NULL,NULL,NULL),
(811,'FAITH LAWYER','N/A','NIL','Female','2',11,NULL,0,0,NULL,NULL,NULL),
(812,'DOROTHY KAYANGE','N/A','NIL','Female','00',11,NULL,0,0,NULL,NULL,NULL),
(813,'CHIKONDI NYIRENDA','0881245472','NIL','Female','26',12,NULL,0,0,NULL,NULL,NULL),
(814,'MARTHA NGOZO','0998390640','NIL','Female','57',11,NULL,0,0,NULL,NULL,NULL),
(815,'MARTHA  SAMBANI','0999873665','NIL','Female','43',11,NULL,0,0,NULL,NULL,NULL),
(816,'ANITA MSEWA','0884196446','NIL','Female','31',11,NULL,0,0,NULL,NULL,NULL),
(817,'ABDUL KASMANY','0992266243','NIL','Male','51',11,NULL,0,0,NULL,NULL,NULL),
(818,'DENISE PATEL','NIL','N/A','Female','35',11,NULL,0,0,NULL,NULL,NULL),
(819,'IRENEO CHIPUKUNYA','0999960505','NIL','Male','56',11,NULL,0,0,NULL,NULL,NULL),
(820,'N HAMDAN','0993431815','NIL','Male','41',11,NULL,0,0,NULL,NULL,NULL),
(821,'LIZZIE ZGAMBO','0888684823','NIL','Female','41',12,NULL,0,0,NULL,NULL,NULL),
(822,'SUJIN SINGH','0994368335','sujinseyasingh@gmail.com','Male','28',12,NULL,0,0,NULL,NULL,NULL),
(823,'KONDWANI KALUA','N/A','NIL','Male','29',12,NULL,0,0,NULL,NULL,NULL),
(824,'RAZINA MAKANI','N/A','NIL','Female','56',11,NULL,0,0,NULL,NULL,NULL);

/*Table structure for table `clinics` */

DROP TABLE IF EXISTS `clinics`;

CREATE TABLE `clinics` (
  `clinic_id` int(11) NOT NULL AUTO_INCREMENT,
  `clinic_name` varchar(100) DEFAULT NULL,
  `address` text,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`clinic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

/*Data for the table `clinics` */

insert  into `clinics`(`clinic_id`,`clinic_name`,`address`,`phone`,`email`,`deleted`) values 
(6,'LIMBE MEDICAL CLINIC','BOX 5911, LIMBE','01841915','',0),
(8,'PRESS MED CLINIC','','','',0),
(9,'KANJEDZA MED CLINIC','','','',0),
(10,'CHILOMONI PVT CLINIC','','','',0),
(11,'SOCHE CLINIC','','','',0),
(12,'BLANTYRE ADVENTIST HOSPITAL','','','',0),
(13,'DR THEJOPAL','','','',0),
(14,'PREMIER SPECIALIST CLINIC','','','',0),
(15,'HEALING HANDS CLINIC','','','',0),
(16,'BLANTYRE MALARIA PROJECT','','','',0),
(17,'PRAISE PVT CLINIC','','','',0),
(18,'KAMPONDENI','','','',0),
(20,'MWAIWATHU PVT HOSPITAL','P.O BOX 3057, BLANTYRE','01822999','',0),
(21,'MWACHIRA PVT CLINIC','P.O BOX 203, LUNZU','01894441','',0),
(22,'DR CHILEMBA','','','',0),
(23,'DR DZINYEMBA CLINIC','','','',0),
(24,'DR GATRAD','','','',0),
(25,'MLAMBE HOSPITAL','','','',0),
(26,'DR GHUMRA','','','',0),
(27,'CITY HEALTH CLINIC','P.O BOX 1525, BLANTYRE','01821120','',0),
(29,'MALAMULO HOSPITAL','','','',0),
(30,'MEDICARE HOSPITAL','','','',0),
(31,'MARANATHA PVT CLINIC','','','',0),
(32,'BANJALA MTSOGOLO','','','',0),
(33,'QECH','','','',0),
(34,'MALMED PVT CLINIC','','','',0),
(35,'COLLEGE OF MEDICINE','','','',0),
(36,'DR BHUPTANI SURGERY','P.O BOX 81, BLANTYRE','01821074','',0),
(37,'CHITAWIRA PVT HOSPITAL','P.O BOX 692, BLANTYRE','01630127','',0);

/*Table structure for table `comp_staff` */

DROP TABLE IF EXISTS `comp_staff`;

CREATE TABLE `comp_staff` (
  `cstaff_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `e_address` varchar(200) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cstaff_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `comp_staff` */

insert  into `comp_staff`(`cstaff_id`,`name`,`age`,`gender`,`company_id`,`deleted`,`e_address`,`phone`) values 
(1,NULL,NULL,NULL,NULL,0,NULL,NULL),
(2,'TT',90,NULL,3,0,'OPPPPPPPPPPPPPPPPP',NULL),
(3,'ASA',88,NULL,3,0,'TYUUU',NULL),
(4,'DD',9,'Female',3,0,'KKKKKKKKKKKKK',NULL),
(5,NULL,NULL,NULL,NULL,0,NULL,NULL),
(6,NULL,NULL,NULL,NULL,0,NULL,NULL),
(7,'Brian Nkhata',33,'Female',1,0,'Box 20, Blantyre',NULL),
(8,'Westin Chirambo',33,'Female',1,0,'Box 20, Blantyre',NULL);

/*Table structure for table `company` */

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL AUTO_INCREMENT,
  `company` text,
  `address` text,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`company_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `company` */

insert  into `company`(`company_id`,`company`,`address`,`deleted`) values 
(1,'Chibukhu','dddddddddddddddd',0),
(2,'cc','Cccccccccccc',1),
(3,'BIXvvvvvvvvvv','BOX 2000000000000',0);

/*Table structure for table `company_test` */

DROP TABLE IF EXISTS `company_test`;

CREATE TABLE `company_test` (
  `company_test_id` int(11) NOT NULL AUTO_INCREMENT,
  `cstaff_id` int(11) DEFAULT NULL,
  `count` varchar(100) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `request_date` varchar(300) DEFAULT NULL,
  `stula_id` int(11) DEFAULT NULL,
  `urina_id` int(11) DEFAULT NULL,
  `other_tests` varchar(600) DEFAULT NULL,
  `comment` text,
  `ura_micro_id` int(11) DEFAULT NULL,
  `stu_micro_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`company_test_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `company_test` */

insert  into `company_test`(`company_test_id`,`cstaff_id`,`count`,`company_id`,`request_date`,`stula_id`,`urina_id`,`other_tests`,`comment`,`ura_micro_id`,`stu_micro_id`) values 
(1,2,'XTmWB',3,'1525392000',0,0,'ffffffff','uuuuu',0,0),
(2,7,'DDCHIUKU120',1,'1525219200',19,15,'PALIBE','COMMENT',7,9),
(3,3,'XTmWB',3,'2018-05-04',20,16,'TTTTTTTTT','UUUUUUUUUUUUU',8,10),
(4,4,'XTmWB',3,'2018-05-04',21,17,'B','B',9,11);

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `phone1` varchar(100) DEFAULT NULL,
  `phone2` varbinary(100) DEFAULT NULL,
  `email1` varchar(100) DEFAULT NULL,
  `email2` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `contacts` */

insert  into `contacts`(`contact_id`,`phone1`,`phone2`,`email1`,`email2`,`address`,`contact`,`name`) values 
(1,'0888015904','','briannkhata@gmail.com','nkhata_b@yahoo.com','Chilomon','Brian Nkhata','Bix Progrommers');

/*Table structure for table `ctest` */

DROP TABLE IF EXISTS `ctest`;

CREATE TABLE `ctest` (
  `company_id` int(11) DEFAULT NULL,
  `count` varchar(100) DEFAULT NULL,
  `test_title` varchar(200) DEFAULT NULL,
  `request_date` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `ctest_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ctest_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `ctest` */

insert  into `ctest`(`company_id`,`count`,`test_title`,`request_date`,`date_created`,`deleted`,`ctest_id`) values 
(1,'DDCHIUKU120','DIAHOEERA','2018-05-02','2018-05-05 02:05:43',0,1),
(3,'XTmWBccccccccc','NEW STAFF DISEASE TEST','2018-05-04','2018-05-05 03:05:16',0,2),
(3,'Bx123','TESTO 2020','2018-05-04','2018-05-05 02:05:40',1,3),
(3,'XTmWB','NEW STAFF DISEASE TEST','2018-05-04','2018-05-05 02:05:41',0,4);

/*Table structure for table `developer` */

DROP TABLE IF EXISTS `developer`;

CREATE TABLE `developer` (
  `developer_id` int(11) NOT NULL AUTO_INCREMENT,
  `about` text,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`developer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `developer` */

insert  into `developer`(`developer_id`,`about`,`phone`,`email`) values 
(1,'\r\nBix ProgrammerZ is a wholly owned private Information and Communication Technology (ICT) company and its Headquarters is in Blantyre, Malawi, Africa.\r\nThe core mission for the company is to provide excellent and timely ICT solutions to various institutions, firms, individuals, companies and organizations throughout the country.\r\nWe have a very well established and stable team for the execution of all the Information and Communication Technology (ICT) Services. The team is made up of very well qualified and also experienced individuals. As such, all our clients enjoy professional services from us every time they engage us','+265 (0) 888 015 904','briannkhata@gmail.com');

/*Table structure for table `group` */

DROP TABLE IF EXISTS `group`;

CREATE TABLE `group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `has_units` int(11) DEFAULT '0',
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `group` */

insert  into `group`(`group_id`,`group_name`,`description`,`has_units`,`deleted`) values 
(1,'Haematology','Blood',0,0),
(2,'Biochemistry','Any',1,0),
(3,'Urine','Urine',0,0),
(4,'Stool','Stool',0,0),
(5,'Miscellaneous','Other',0,0),
(6,'Other','undefined',0,0);

/*Table structure for table `labo` */

DROP TABLE IF EXISTS `labo`;

CREATE TABLE `labo` (
  `labo_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `address` text,
  `telphone` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `about` text NOT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `logo2` text NOT NULL,
  `bank_name` text NOT NULL,
  `account_num` text NOT NULL,
  `account_name` text NOT NULL,
  PRIMARY KEY (`labo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `labo` */

insert  into `labo`(`labo_id`,`name`,`address`,`telphone`,`phone`,`logo`,`email`,`about`,`currency`,`logo2`,`bank_name`,`account_num`,`account_name`) values 
(2,'Labcare','                                                                        P.O.BOX 2849, BLANTYRE                                                                    ','+265 111 613067','+265 999 955794/ 0881549600','sampu1.PNG','labcare@yahoo.com','SEAL LAB TESTS\r\nThis tests are done in such a way to make sure quality is guaranteed.\r\nSeal Diagnostic Laboratory was established in 2011.\r\nWe appreciate your support.','Mk','72716.jpg','nb','0000','SEAL');

/*Table structure for table `misc` */

DROP TABLE IF EXISTS `misc`;

CREATE TABLE `misc` (
  `misc_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_result` varchar(100) DEFAULT NULL,
  `test_parameter` varchar(100) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  `reported_by` varchar(100) DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `visit_date` text,
  PRIMARY KEY (`misc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `misc` */

insert  into `misc`(`misc_id`,`test_result`,`test_parameter`,`test_id`,`client_id`,`comment`,`reported_by`,`approved_by`,`group_id`,`visit_date`) values 
(13,'R1','T1',5,819,NULL,NULL,NULL,5,'1525694740'),
(14,'R2','T1',5,819,NULL,NULL,NULL,5,'1525694740'),
(15,'R3','T1',5,819,NULL,NULL,NULL,5,'1525694740'),
(16,'TT','T2',5,819,NULL,NULL,NULL,5,'1525694740'),
(17,'TTT','T2',5,819,NULL,NULL,NULL,5,'1525694740'),
(18,'TTTT','T2',5,819,NULL,NULL,NULL,5,'1525694740');

/*Table structure for table `modules` */

DROP TABLE IF EXISTS `modules`;

CREATE TABLE `modules` (
  `sort` int(10) NOT NULL,
  `icon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `module_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `desc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `modules` */

insert  into `modules`(`sort`,`icon`,`module_id`,`active`,`desc`) values 
(5,'fa fa-credit-card','billing',0,'Billing'),
(3,'fa fa-bars','clinics',1,'Clinics'),
(7,'fa fa-cloud','company_tests',1,'Company Tests'),
(4,'fa fa-cogs','config',1,'Config'),
(1,'fa fa-users','patients',1,'Patients'),
(110,'fa fa-check-square','reports',1,'Reports'),
(50,'fa fa-shopping-cart','sales',1,'Sales'),
(6,'fa fa-users','staff',1,'Staff'),
(2,'fa fa-list','tests',1,'Tests');

/*Table structure for table `modules_actions` */

DROP TABLE IF EXISTS `modules_actions`;

CREATE TABLE `modules_actions` (
  `action_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `module_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `class` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `icon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desc` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`action_id`,`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `modules_actions` */

insert  into `modules_actions`(`action_id`,`module_id`,`sort`,`class`,`icon`,`desc`) values 
('create','clinics',2,'btn btn-sm btn-primary','fa fa-plus','add new'),
('create','patients',2,'btn btn-sm btn-primary','fa fa-plus','add new'),
('create','staff',2,'btn btn-sm btn-primary','fa fa-plus','add new'),
('delete','clinics',1,'btn btn-sm btn-danger','fa fa-times','delete'),
('delete','patients',1,'btn btn-sm btn-danger','fa fa-times','delete'),
('delete','sales',1,'btn btn-sm btn-danger','fa fa-times','delete'),
('delete','staff',1,'btn btn-sm btn-danger','fa fa-times','delete'),
('view','patients',3,'btn btn-xs blue','fa fa-info-circle','details'),
('view','sales',3,'btn btn-xs blue','fa fa-info-circle','details'),
('view','staff',3,'btn btn-xs blue','fa fa-info-circle','details');

/*Table structure for table `month` */

DROP TABLE IF EXISTS `month`;

CREATE TABLE `month` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `month` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `month` */

insert  into `month`(`id`,`month`) values 
(1,'January'),
(2,'February'),
(3,'March'),
(4,'April'),
(5,'May'),
(6,'June'),
(7,'July'),
(8,'September'),
(9,'October'),
(10,'November'),
(11,'December'),
(12,'August');

/*Table structure for table `options` */

DROP TABLE IF EXISTS `options`;

CREATE TABLE `options` (
  `optionn_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_parameter_id` int(11) DEFAULT NULL,
  `optionn` varchar(300) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  PRIMARY KEY (`optionn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=latin1;

/*Data for the table `options` */

insert  into `options`(`optionn_id`,`test_parameter_id`,`optionn`,`deleted`) values 
(1,828,'5.0',0),
(2,828,'6.0',0),
(3,828,'6.5',0),
(4,828,'7.0',0),
(5,828,'8.0',0),
(6,828,'9.0',0),
(7,937,'10^3/mm3',0),
(8,829,'Negative',0),
(9,829,'Trace',0),
(10,829,'+',0),
(11,829,'++',0),
(12,829,'+++',0),
(13,829,'++++',0),
(14,830,'Negative',0),
(15,830,'Trace',0),
(16,830,'+',0),
(17,830,'++',0),
(18,830,'+++',0),
(19,830,'++++',0),
(20,831,'Negative',0),
(21,831,'Trace',0),
(22,831,'+',0),
(23,831,'++',0),
(24,831,'+++',0),
(25,832,'Normal',0),
(26,832,'+',0),
(27,832,'++',0),
(28,832,'+++',0),
(29,972,'Negative',0),
(30,972,'Positive',0),
(31,825,'Clear',0),
(32,825,'Slightly Cloudy',0),
(33,825,'Cloudy',0),
(34,825,'Bloody',0),
(35,834,'Negative',0),
(36,834,'Trace',0),
(37,834,'+',0),
(38,834,'++',0),
(39,834,'+++',0),
(40,835,'Negative',0),
(41,835,'Trace',0),
(42,835,'+',0),
(43,835,'++',0),
(44,835,'+++',0),
(45,835,'++++',0),
(46,836,'Negative',0),
(47,836,'Positive',0),
(48,837,'1.000',0),
(49,837,'1.005',0),
(50,837,'1.010',0),
(51,837,'1.015',0),
(52,837,'1.020',0),
(53,837,'1.025',0),
(54,837,'1.030',0),
(55,824,'Yellow',0),
(56,824,'Deep Yellow',0),
(57,824,'Pale Yellow',0),
(58,824,'Straw',0),
(59,833,'Negative',0),
(60,833,'+',0),
(61,833,'++',0),
(62,833,'Trace',0),
(63,833,'+++',0),
(64,899,'Non Reactive',0),
(65,899,'Reactive',0),
(66,900,'Non Reactive',0),
(67,900,'Reactive',0),
(68,978,'A Rh Positive',0),
(69,978,'B Rh Positive',0),
(70,978,'AB Rh Positive',0),
(71,978,'O Rh Positive',0),
(72,978,'A Rh Negative',0),
(73,978,'B Rh Negative',0),
(74,978,'B Rh Negative',0),
(75,978,'AB Rh Negative',0),
(76,978,'O Rh Negative',0),
(77,979,'mg/dl',0);

/*Table structure for table `ref_range` */

DROP TABLE IF EXISTS `ref_range`;

CREATE TABLE `ref_range` (
  `ref_range_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_parameter_id` int(11) DEFAULT NULL,
  `gender` varchar(300) DEFAULT NULL,
  `ref_range` varchar(300) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  PRIMARY KEY (`ref_range_id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

/*Data for the table `ref_range` */

insert  into `ref_range`(`ref_range_id`,`test_parameter_id`,`gender`,`ref_range`,`deleted`) values 
(1,228,'Male','60-110',0),
(2,228,'Female','60-110',0),
(3,937,'Male','4.5-10.',1),
(4,902,'Male','15-45',0),
(5,902,'Female','15-45',0),
(6,903,'Male','0.7-1.4',0),
(7,903,'Female','0.7-1.2',0),
(8,904,'Male','135-155',0),
(9,904,'Female','135-155',0),
(10,905,'Male','',1),
(11,905,'Female','3.6-5.5',0),
(12,906,'Male','97-105',0),
(13,906,'Female','97-105',0),
(14,976,'Male','15-45',0),
(15,976,'Female','15-45',0),
(16,977,'Male','0.7-1.4',0),
(17,961,'Male','0-38',0),
(18,961,'Female','0-31',0),
(19,962,'Male','0-40',0),
(20,962,'Female','0-32',0),
(21,963,'Male','11-50',0),
(22,963,'Female','7-32',0),
(23,964,'Male','26-117',0),
(24,964,'Female','26-117',0),
(25,965,'Male','230-460',0),
(26,965,'Female','230-460',0),
(27,966,'Male','0.1-1.1',0),
(28,966,'Female','0.1-1.1',0),
(29,967,'Male','0.0-0.25',0),
(30,967,'Female','0.0-0.25',0),
(31,968,'Male','6.6-8.3',0),
(32,968,'Female','6.6-8.3',0),
(33,969,'Male','3.5-5.0',0),
(34,969,'Female','3.5-5.5',0),
(35,905,'Male','3.6-5.5',0),
(36,957,'Male','0-200',0),
(37,957,'Female','0-200',0),
(38,958,'Male','40-160',0),
(39,958,'Female','35-135',0),
(40,959,'Male','0-130',0),
(41,959,'Female','0-130',0),
(42,960,'Male','35-55',0),
(43,960,'Female','45-65',0),
(44,243,'Male','4.2-6.2',0),
(45,243,'Female','4.2-6.2',0),
(46,970,'Male','8.5-10.5',0),
(47,970,'Female','8.5-10.5',0),
(48,979,'Male','8.5-10.5',0),
(49,979,'Female','8.5-10.5',0),
(50,980,'Male','8.5-10.5',0),
(51,980,'Female','8.5-10.5',0),
(52,982,'Male','<p>83-105</p>',0),
(53,982,'Female','<p>83-105</p>',0),
(54,10,'Male','<p>0-38</p>',0),
(55,10,'Female','<p>0-31</p>',0),
(56,937,'Female','<p>4.5-10<br></p>',1),
(57,937,'Male','<p>4.5-10</p>',0),
(58,937,'Female','<p>4.5-10<br></p>',0),
(59,938,'Male','25-50',0),
(60,938,'Female','<p>25-50</p>',0),
(61,939,'Male','<p>2.0-10.0</p>',0),
(62,939,'Female','<p>2.0-10.0<br></p>',0),
(63,940,'Male','<p>50.0-87.O</p>',0),
(64,940,'Female','<p>50.0-87.O<br></p>',0),
(65,941,'Male','<p>1.00-5.00</p>',0),
(66,941,'Female','<p>1.00-5.00<br></p>',0),
(67,942,'Male','<p>0.20-1.50</p>',0),
(68,942,'Female','<p>0.20-1.50</p>',0),
(69,943,'Male','<p>2.00-9.00</p>',0),
(70,943,'Female','<p>2.00-9.00</p>',0),
(71,944,'Male','<p>4.50-6.50</p>',0),
(72,944,'Female','4.50-6.50',0),
(73,945,'Male','<p>13.0-17.0</p>',0),
(74,945,'Female','<p>13.0-17.0</p>',0),
(75,946,'Male','<p>40.0-54.0</p>',0),
(76,946,'Female','<p>40.0-54.0</p>',0),
(77,947,'Male','80-100',0),
(78,947,'Female','<p>80-100</p>',0),
(79,948,'Male','<p>27.0-32.0</p>',0),
(80,948,'Female','<p>27.0-32.0<br></p>',0),
(81,949,'Male','<p>32.0-36.0</p>',0),
(82,949,'Female','<p>32.0-36.0<br></p>',0),
(83,950,'Male','<p>150 - 500</p>',0),
(84,950,'Female','<p>150 - 500<br></p>',0),
(85,950,'Female','<p>150-500<br></p>',1);

/*Table structure for table `requested_tests` */

DROP TABLE IF EXISTS `requested_tests`;

CREATE TABLE `requested_tests` (
  `rqtest_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `done` int(11) DEFAULT '0',
  `group_id` int(11) DEFAULT NULL,
  `visit_date` text NOT NULL,
  `clinic_id` int(11) DEFAULT NULL,
  `request_date` text,
  `doctor_name` text,
  `pay_mode` text,
  `day` text NOT NULL,
  `month` text NOT NULL,
  `year` text NOT NULL,
  PRIMARY KEY (`rqtest_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1782 DEFAULT CHARSET=latin1;

/*Data for the table `requested_tests` */

insert  into `requested_tests`(`rqtest_id`,`client_id`,`test_id`,`done`,`group_id`,`visit_date`,`clinic_id`,`request_date`,`doctor_name`,`pay_mode`,`day`,`month`,`year`) values 
(1776,824,807,1,3,'1525691122',6,'2018-05-07','BOSS BABAY','Cash','07','May','2018'),
(1777,824,4,0,2,'1525755934',6,'2018-05-08','DR MVULA','Cash','08','May','2018'),
(1778,823,4,1,2,'1525849545',6,'2018-05-09','Brian nkhata','Cash','09','May','2018'),
(1779,823,7,1,2,'1525849545',6,'2018-05-09','Brian nkhata','Cash','09','May','2018'),
(1780,823,807,1,3,'1525849545',6,'2018-05-09','Brian nkhata','Cash','09','May','2018'),
(1781,823,9,1,2,'1525856728',6,'2018-05-09','Brian nkhata','Cash','09','May','2018');

/*Table structure for table `sale_temp` */

DROP TABLE IF EXISTS `sale_temp`;

CREATE TABLE `sale_temp` (
  `sale_temp_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) DEFAULT NULL,
  `p_price` double DEFAULT NULL,
  `t_price` double DEFAULT NULL,
  `discount` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sale_temp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sale_temp` */

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `sale_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` int(11) DEFAULT NULL,
  `change` float DEFAULT NULL,
  `total` float DEFAULT NULL,
  `payment_type` text,
  `user_id` int(11) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `t_amount` int(11) DEFAULT NULL,
  `t_bill` int(11) DEFAULT NULL,
  `sale_time` datetime DEFAULT NULL,
  PRIMARY KEY (`sale_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `sales` */

insert  into `sales`(`sale_id`,`client_id`,`change`,`total`,`payment_type`,`user_id`,`deleted`,`t_amount`,`t_bill`,`sale_time`) values 
(1,1,NULL,NULL,'Cash',6,1,NULL,NULL,NULL),
(2,1,NULL,NULL,'Cash',6,0,NULL,NULL,NULL),
(3,1,NULL,NULL,'Cash',6,0,NULL,NULL,NULL),
(4,1,NULL,NULL,'Cash',10,0,NULL,NULL,NULL),
(5,817,0,5500,'Cash',6,1,5500,5500,'2018-05-06 04:05:46'),
(6,817,0,6000,'Cash',6,1,6000,6000,'2018-05-06 04:05:56'),
(7,824,0,6000,'Cash',6,1,6000,6000,'2018-05-06 05:05:25'),
(8,823,0,9500,'Cash',6,1,9500,9500,'2018-05-06 05:05:28'),
(9,822,0,7000,'Cash',6,1,7000,7000,'2018-05-06 05:05:42'),
(10,824,0,5200,'Cash',6,1,5200,5200,'2018-05-06 06:05:46'),
(11,819,0,5500,'Cash',6,0,5500,5500,'2018-05-07 12:05:40'),
(12,819,0,6000,'Cash',6,0,6000,6000,'2018-05-07 01:05:42'),
(13,824,0,7100,'Cash',6,0,7100,7100,'2018-05-07 08:05:30'),
(14,824,0,2200,'Masm',6,0,2200,2200,'2018-05-07 10:05:43'),
(15,824,0,2200,'Cash',6,0,2200,2200,'2018-05-07 11:05:22'),
(16,824,0,5000,'Cash',6,0,5000,5000,'2018-05-08 05:05:34'),
(17,823,0,8155,'Cash',6,0,8155,8155,'2018-05-09 07:05:45'),
(18,823,0,500,'Cash',6,0,500,500,'2018-05-09 09:05:28');

/*Table structure for table `sales_tests` */

DROP TABLE IF EXISTS `sales_tests`;

CREATE TABLE `sales_tests` (
  `sale_id` int(11) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `stest_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`stest_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `sales_tests` */

insert  into `sales_tests`(`sale_id`,`test_id`,`amount`,`discount`,`stest_id`) values 
(5,5,2500,0,1),
(5,8,3000,0,2),
(6,6,3000,0,3),
(6,6,3000,0,4),
(7,6,3000,0,5),
(7,7,3000,0,6),
(8,7,3000,0,7),
(8,4,4000,0,8),
(8,5,2500,0,9),
(9,4,4000,0,10),
(9,7,3000,0,11),
(10,8,3000,0,12),
(10,806,2200,0,13),
(11,8,3000,0,14),
(11,5,2500,0,15),
(12,7,3000,0,16),
(12,8,3000,0,17),
(13,12,3200,0,18),
(13,12,3200,0,19),
(13,4,300,0,20),
(13,9,400,0,21),
(14,807,2200,0,22),
(15,807,2200,0,23),
(16,4,5000,0,24),
(17,4,5555,0,25),
(17,7,400,0,26),
(17,807,2200,0,27),
(18,9,500,0,28);

/*Table structure for table `specimen` */

DROP TABLE IF EXISTS `specimen`;

CREATE TABLE `specimen` (
  `specimen_id` int(11) NOT NULL AUTO_INCREMENT,
  `specimen` varchar(100) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `description` text,
  `collection` text,
  PRIMARY KEY (`specimen_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `specimen` */

insert  into `specimen`(`specimen_id`,`specimen`,`deleted`,`description`,`collection`) values 
(1,'Blood',1,'                                                                   ok                                                                                                           ','                              \r\n                                                            \r\n                              qwerty                              \r\n                                                                                                                  '),
(2,'Urine',1,NULL,NULL),
(3,'Stool',0,'                                                            Manyo                                                                                                                  ','                              \r\n                                                            \r\n                                       kaya man                     \r\n                                                                                                                  '),
(4,'ggg',0,'dddok','dd'),
(5,'Ok1',0,'               Try1                                           ','                 Try2             \r\n                                                          '),
(6,'qwert',0,'          uot                                                ','                              \r\n             hgt                                             '),
(7,'Ok12ok33',0,'               okp                                           ','                              \r\nhopo'),
(8,'opkkkkkkkkkk',0,'                 mmmmmm                                                                                    tyu                                                                                                                                   ','                                                                                          \r\n                                                            \r\n          fg     nnnnnnnnnn                                                                                                                               '),
(9,'op',1,'           tyu                                               ','                              \r\n          fg                                                '),
(10,'op',1,'           tyu                                               ','                              \r\n          fg                                                '),
(11,'Ok12ok33',1,'               okp                                           ','                              \r\nhopo'),
(12,'Ok12ok33',1,'               okp                                           ','                              \r\nhopo'),
(13,'vvvvvvvvvvvz',0,'Add New Specimenbbbbbbbbb','aaaaaaaaaaaaas');

/*Table structure for table `stu_micro` */

DROP TABLE IF EXISTS `stu_micro`;

CREATE TABLE `stu_micro` (
  `stu_micro_id` int(11) NOT NULL AUTO_INCREMENT,
  `stu_micro_wbc` varchar(300) DEFAULT NULL,
  `stu_micro_rbc` varchar(300) DEFAULT NULL,
  `stu_micro_parasites` varchar(300) DEFAULT NULL,
  `stu_micro_ova` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`stu_micro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `stu_micro` */

insert  into `stu_micro`(`stu_micro_id`,`stu_micro_wbc`,`stu_micro_rbc`,`stu_micro_parasites`,`stu_micro_ova`) values 
(1,'qq','ww','xx','cc'),
(2,'qq','ww','xx','cc'),
(3,'dd','dd','dd','dd'),
(4,'34','444','nhhj','bhh'),
(5,'12','23','56','34'),
(6,'34','444','nhhj','34'),
(7,'j','k','b','n'),
(8,'j','k','b','n'),
(9,'SM1','SM2','PARA','SM3'),
(10,'Oo','Po','Jo','Ko'),
(11,'B','B','B','B');

/*Table structure for table `stula` */

DROP TABLE IF EXISTS `stula`;

CREATE TABLE `stula` (
  `stula_id` int(11) NOT NULL AUTO_INCREMENT,
  `scolour` varchar(300) DEFAULT NULL,
  `sconsistency` varchar(300) DEFAULT NULL,
  `smucus` varchar(300) DEFAULT NULL,
  `sblood` varchar(300) DEFAULT NULL,
  `sparasite` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`stula_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `stula` */

insert  into `stula`(`stula_id`,`scolour`,`sconsistency`,`smucus`,`sblood`,`sparasite`) values 
(1,'Brown','Soft','Present','Present','Present'),
(2,'Brown','','','Absent','Present'),
(3,'Brown','Formed','Absent','Absent','Present'),
(4,'Brown','','','Absent','Present'),
(5,'Brown','Formed','Absent','Absent','Present'),
(6,'Dark Brown','Hard','Present','Absent','Absent'),
(7,'Brown','Soft','Present','Absent','Absent'),
(8,'Brown','Formed','Absent','Absent','Absent'),
(9,'Dark Brown','Watery','Absent','Absent','Absent'),
(10,'Dark Brown','Formed','Absent','Absent','Absent'),
(11,'Brown','Soft','Absent','Absent','not seen'),
(12,'Brown','Formed','Absent','Absent','bhnhh'),
(13,'Brown','Formed','Absent','Absent','not seen'),
(14,'Brown','Formed','Absent','Absent','not seen'),
(15,'Brown','Formed','Absent','Absent','1H'),
(16,'Brown','Formed','Absent','Absent','1H'),
(17,'Brown','Formed','Absent','Absent','1H'),
(18,'Brown','Formed','Absent','Absent','1H'),
(19,'Brown','Formed','Absent','Absent',''),
(20,'Brown','Formed','Absent','Absent','Absent'),
(21,'Brown','Formed','Absent','Absent','Absent');

/*Table structure for table `sub_module_actions` */

DROP TABLE IF EXISTS `sub_module_actions`;

CREATE TABLE `sub_module_actions` (
  `sub_module_action_id` varchar(100) NOT NULL,
  `sub_module_id` varchar(100) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `class` varchar(200) DEFAULT NULL,
  `desc` varchar(200) DEFAULT NULL,
  `icon` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`sub_module_action_id`,`sub_module_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `sub_module_actions` */

insert  into `sub_module_actions`(`sub_module_action_id`,`sub_module_id`,`sort`,`class`,`desc`,`icon`) values 
('create','parameters',2,'btn btn-sm btn-primary','add New','fa fa-plus'),
('delete','parameters',1,'btn btn-sm btn-danger','delete','fa fa-times'),
('create','groups',2,'btn btn-sm btn-primary','add New','fa fa-plus'),
('create','tests',2,'btn btn-sm btn-primary','add New','fa fa-plus'),
('create','categories',2,'btn btn-sm btn-primary','add New','fa fa-plus'),
('create','specimens',2,'btn btn-sm btn-primary','add New','fa fa-plus'),
('delete','groups',1,'btn btn-sm btn-danger','delete','fa fa-times'),
('delete','tests',1,'btn btn-sm btn-danger','delete','fa fa-times'),
('delete','categories',1,'btn btn-sm btn-danger','delete','fa fa-times'),
('delete','specimens',1,'btn btn-sm btn-danger','delete','fa fa-times'),
('view','groups',3,'btn btn-xs blue','Details','fa fa-info-circle'),
('view','tests',3,'btn btn-xs blue','Details','fa fa-info-circle'),
('view','categories',3,'btn btn-xs blue','Details','fa fa-info-circle'),
('create','user_type',2,'btn btn-sm btn-primary','Add New','fa fa-plus'),
('delete','user_type',1,'btn btn-sm btn-danger','Delete','fa fa-times'),
('view','user_type',3,'btn btn-xs blue','View Rights','fa fa-info-circle'),
('view','companies',1,'btn btn-xs blue','View Employees','fa fa-info-circle'),
('view','comp_results',1,'btn btn-xs blue','Details','fa fa-info-circle'),
('create','companies',2,'btn btn-sm btn-primary','add new','fa fa-plus'),
('create','comp_results',2,'btn btn-sm btn-primary','add new','fa fa-plus'),
('delete','companies',1,'btn btn-sm btn-danger','delete','fa fa-times'),
('delete','comp_results',1,'btn btn-sm btn-danger','delete','fa fa-times'),
('delete','new_test',1,'btn btn-sm btn-danger','delete','fa fa-times'),
('create','new_test',2,'btn btn-sm btn-primary','add new','fa fa-plus'),
('view','new_test',3,'btn btn-xs blue','Add Results','fa fa-info-circle');

/*Table structure for table `sub_modules` */

DROP TABLE IF EXISTS `sub_modules`;

CREATE TABLE `sub_modules` (
  `sub_module_id` varchar(200) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  `module_id` varchar(100) NOT NULL,
  `desc` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`sub_module_id`,`module_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sub_modules` */

insert  into `sub_modules`(`sub_module_id`,`sort`,`icon`,`module_id`,`desc`) values 
('categories',3,'','tests','Categories'),
('companies',2,NULL,'company_tests','Company List'),
('company',1,NULL,'config','Lab Setup'),
('comp_results',3,NULL,'company_tests','Test Results'),
('groups',1,'','tests','Groups'),
('new_test',1,NULL,'company_tests','New Test'),
('parameters',2,'','tests','Parameters'),
('sales_report',1,NULL,'reports','Sales'),
('specimens',4,'','tests','Specimens'),
('tests',5,'','tests','Tests'),
('user_type',2,NULL,'config','Usertypes');

/*Table structure for table `test_parameters` */

DROP TABLE IF EXISTS `test_parameters`;

CREATE TABLE `test_parameters` (
  `test_parameter_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_parameter` varchar(600) DEFAULT NULL,
  `test_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '6',
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`test_parameter_id`)
) ENGINE=InnoDB AUTO_INCREMENT=884 DEFAULT CHARSET=latin1;

/*Data for the table `test_parameters` */

insert  into `test_parameters`(`test_parameter_id`,`test_parameter`,`test_id`,`category_id`,`deleted`) values 
(1,'17a-HYDROXYPROGESTERONE/17-OH',3,1,0),
(2,'24HRGLUCOSE MONITORING',4,6,0),
(3,'ACUTE HEPATATIS PROFILE',5,6,0),
(4,'ADENOSINE DEAMINASE,(ADA) CSF',6,6,0),
(5,'ADENOSINE DEAMINASE,(ADA) Fluid',7,6,0),
(6,'ADENOSINE DEAMINASE,(ADA) SERUM',8,6,0),
(7,'ADRENAL Ab',9,6,0),
(8,'ALBUMIN/TOTAL PROTEIN',10,6,0),
(9,'ALBUMIN, fluid',11,6,0),
(10,'ALBUMIN, serum',12,6,0),
(11,'ALDOLASE, serum',13,6,0),
(12,'ALDOSTERONE, serum',14,6,0),
(13,'ALKALINE PHOSPHATE, serum',15,6,0),
(14,'ALPHA 1 ANTITRYPSIN (SERUM)',16,6,0),
(15,'ALPHA-FETOPROTEIN (AFP) TUMOUR',17,6,0),
(16,'ALPHA-FETOPROTEIN-S (AFP)',18,6,0),
(17,'ALPHA-FETOPROTEIN-S AFP KUL/L + Weight + Gestational Age',19,6,0),
(18,'AMIKACIN,serum',20,6,0),
(19,'AMNIOTIC ALPHA-FETOPROTEIN',21,6,0),
(20,'AMPHETAMINES,urine',22,6,0),
(21,'AMYLASE + LIPASE',23,6,0),
(22,'AMYLASE, fluid',24,6,0),
(23,'AMYLASE, serum',25,6,0),
(24,'AMYLASE, urine',26,6,0),
(25,'ANCA(ANTI NEUT.CYTOPLASMIC AB)',27,6,0),
(26,'ANDROGEN PROFILE (MALE)',28,6,0),
(27,'ANDROSTENEDIODE (ADS)',29,6,0),
(28,'ANF ONLY',30,6,0),
(29,'ANF ONLY GROUP',31,6,0),
(30,'ANF SCREEN ( AMF + DNA )',32,6,0),
(31,'ANTENATAL AB IDENTIFICATION',33,6,0),
(32,'ANTI CYCLIC CITRINNULATED PEPT',34,6,0),
(33,'ANTI GAD Antibody',35,6,0),
(34,'ANTI GAD/IA2 Antibodies',36,6,0),
(35,'ANTI GLIADIN IGA (GLUTEN) Ab',37,6,0),
(36,'ANTI GLIADIN IGG (GLUTEN) Ab',38,6,0),
(37,'ANTI IA2 Antibody',39,6,0),
(38,'ANTI-FACTORY Xa ACTIVITY',40,6,0),
(39,'ANTI-GLOMERULAR BASEMENT MEMB',41,6,0),
(40,'ANTI-MULLERIAN HORMONE',42,6,0),
(41,'ANTIPHOSPHOLIPID ANTIBODIES',43,6,0),
(42,'ANTIPHOSPHOLIPID PROFILE',44,6,0),
(43,'Anti-STREP. DNAse B',45,6,0),
(44,'ANTI-STREPTOLYSIN 0*(ASOT)*',46,6,0),
(45,'Anti-Tetanus Toxoid IgG Ab.',47,6,0),
(46,'ANTITHROMBIN III FUNC',48,6,0),
(47,'APO A1 + APO B',49,6,0),
(48,'APOLIPOPROTEIN A1, serum',50,6,0),
(49,'APOLIPOPROTEIN B, serum',51,6,0),
(50,'AQUAPORIN-4 IFA',52,6,0),
(51,'ARSENIC BLOOD   (NIOH)',53,6,0),
(52,'ASOT Dnase B',54,6,0),
(53,'AST/ALT(SGOT/SGPT)',55,6,0),
(54,'ASTHMA RHINITIS YEAR ROUND',56,6,0),
(55,'ATYPICAL PNEMONIA SCR (SERO)',57,6,0),
(56,'AUTO IMMUNE HEPATITIS PROFILE',58,6,0),
(57,'AUTOIMMUNE ENCEPHALOPATHY',59,6,0),
(58,'AUTOIMMUNE SCREEN+ESRALIFAX',60,6,0),
(59,'B2-MICROGLOBULIN, urine',61,6,0),
(60,'B2-GLYCOPROTEIN 1 AB',62,6,0),
(61,'B2-MICROGLOBULIN - SERUM',63,6,0),
(62,'B2-MICROGLOBULIN (24hr)URINE',64,6,0),
(63,'BARBITURATE,SERUM',65,6,0),
(64,'BARBITURATES, urine',67,6,0),
(65,'BARTONELLA ANTIBODIES',68,6,0),
(66,'BASIC COAG SCREEN',69,6,0),
(67,'BENCE JONES PROTEIN, urine',70,6,0),
(68,'BENZODIAZEPENES, serum Qt',71,6,0),
(69,'BENZODIAZEPENES, Ur',72,6,0),
(70,'bHCG PREGNANCY SCREEN-S (QUAL)',73,6,0),
(71,'BILHARZIA ANTIBODIES',74,6,0),
(72,'BILIRUBIN total, SBR NEONATAL',75,6,0),
(73,'BILIRUBIN, Total & Direct',76,6,0),
(74,'BILIRUBIN, Total serum',77,6,0),
(75,'BLOOD GROUP + RHESUS + COOMBS',78,6,0),
(76,'BONE SPECIFIC ALK PHOS',79,6,0),
(77,'BORD.PERTUSSIS (IGM)',80,6,0),
(78,'BRUCELLA AB (AGG & ELISA)',81,6,0),
(79,'BRUCELLA IgG ELISA',82,6,0),
(80,'BRUCELLA IgM ELISA',83,6,0),
(81,'C1 ESTERASE INHIBITOR, serum',84,6,0),
(82,'CA 72-4, serum',85,6,0),
(83,'Ca125, serum',86,6,0),
(84,'Ca153, serum',87,6,0),
(85,'Ca19-9, serum',88,6,0),
(86,'CADMIUM, blood',89,6,0),
(87,'CAERUPLASMIN, serum',90,6,0),
(88,'CALCIUM (EXCRETION),24Hr urine',91,6,0),
(89,'CALCIUM CREATE CLEARANCE RATIO',92,6,0),
(90,'CALCIUM, fluid',93,6,0),
(91,'CALCIUM/PHOSPHATE - serum',94,6,0),
(92,'CALPROTECTIN',95,6,0),
(93,'CANNABIS QUALITATIVE,urine',96,6,0),
(94,'CARBAMAZAPINE (TEGRETOL),serum',97,6,0),
(95,'CARBOXY-HAEMOGLOBIN',98,6,0),
(96,'CARCINO-EMBRYONIC ANTIG.(CEA)',99,6,0),
(97,'CARDIAC TROPONIN I',100,6,0),
(98,'CARDIOLIPIN AB (IGG, IGM,IGA)',101,6,0),
(99,'CD19-20 COUNT',102,6,0),
(100,'Cd4 COUNT',103,6,0),
(101,'Cd4-Cd8 COUNT',104,6,0),
(102,'Cd8 COUNT',105,6,0),
(103,'CEA/CA 19-9',106,6,0),
(104,'CELL COUNT, CSF',107,6,0),
(105,'CENTROMERE',108,6,0),
(106,'CEPHEID INFLUENZA A/H1N1',109,6,0),
(107,'CHEMISTRY -PLEURAL FLUID+ SERUM',110,6,0),
(108,'CHLAMYDIA ELISA (ABS)',111,6,0),
(109,'CHLAMYDIA PSITTACI ABS',112,6,0),
(110,'CHLAMYDIA.trachomatis ab.(IFA)',113,6,0),
(111,'CHLORIDE random, urine mmol/L',114,6,0),
(112,'CHLORIDE,24Hr urine',115,6,0),
(113,'CHLORIDE, fluid',116,6,0),
(114,'CHLORIDE, serum',117,6,0),
(115,'CHOLESTEROL, fluid',118,6,0),
(116,'CHOLESTEROL HDL (FASTING)',119,6,0),
(117,'CHOLESTEROL,ONLY FASTING serum',120,6,0),
(118,'CHOLESTEROL,ONLY RANDOM serum',121,6,0),
(119,'CHOLESTEROL,HDL (RANDOM) + CHOL',122,6,0),
(120,'CHOLINESTERASE, serum',123,6,0),
(121,'CHROMIUM, Total urine',124,6,0),
(122,'CHRONIC FATIGUE PROFILE',125,6,0),
(123,'CHRONIC HEPATITIS PROFILE',126,6,0),
(124,'CITRATE, 24 hr urine',127,6,0),
(125,'CITRATE,Random Urine,CR Ratio',128,6,0),
(126,'CMV - CSF',129,6,0),
(127,'CMV ABS - SERUM (IGG + IGM)',130,6,0),
(128,'CMV AVIDITY',131,6,0),
(129,'COBALT, urine',132,6,0),
(130,'COCAINE QUALITATIVE, urine',133,6,0),
(131,'COMPLENT C3, serum',134,6,0),
(132,'COMPLENT C3+c4, serum',135,6,0),
(133,'COMPLEMENT C4,serum',136,6,0),
(134,'COMPLEX PSA',137,6,0),
(135,'COPPER,24Hr urine',138,6,0),
(136,'CORTISOL BETHAMETHAZONE',139,6,0),
(137,'CORTISOL-SERUM',140,6,0),
(138,'COXSACKIE VIRUS - SERUM',141,6,0),
(139,'C-PEPTIDE RESPONSE TO ORAL GTT',142,6,0),
(140,'CPK,total',143,6,0),
(141,'CPK/CKMB',144,6,0),
(142,'CREATINE CL - COCKROFT',145,6,0),
(143,'CREATINE, 24Hr urine',146,6,0),
(144,'CREATININE, serum',147,6,0),
(145,'CREATINE, urine mmol/L',148,6,0),
(146,'CRYPTOCCAL ANTIGEN - CSF',149,6,0),
(147,'CRYPTOCCAL ANTIGEN - SERUM',150,6,0),
(148,'CSF AFP',151,6,0),
(149,'CSF BIOCHEM (PRO+CHLOR+GLUC)',152,6,0),
(150,'CSF CELL COUNT AND CHEMISTRY',153,6,0),
(151,'CSF CELL COUNT ONLY',154,6,0),
(152,'CSF FULL EXAMINATION',155,6,0),
(153,'CSF HCG',156,6,0),
(154,'CSF IGG INDEX ONLY',157,6,0),
(155,'CSF NO RPR',158,6,0),
(156,'CSF GLUCOSE',159,6,0),
(157,'CSF',160,6,0),
(158,'C TERMINAL CROSSLINKS (serum) Fasting',161,6,0),
(159,'CYCLOPRORIN LEVELS',162,6,0),
(160,'CYSTICERCOSIS (AB) CSF',163,6,0),
(161,'CYSTICERCOSIS (AB) SERUM',164,6,0),
(162,'CYSTINE, urine QL',165,6,0),
(163,'CYTOMEGALO VIRUS IgG,serum',166,6,0),
(164,'CYTOMEGALO VIRUS IgM,serum',167,6,0),
(165,'DABIGATRAN',168,6,0),
(166,'D-DIMER TEST Quantitative',169,6,0),
(167,'DEHYDROEPIANDROGESTERONE (SERUM)',170,6,0),
(168,'DIC SCREEN',171,6,0),
(169,'DIGOXIN,serum',172,6,0),
(170,'DIRECT COOMBS TEST (DAT)',173,6,0),
(171,'DRUG SCREEN QUAL URINE',174,6,0),
(172,'DRUG SCREEN SERUM',175,6,0),
(173,'dsDNA',176,6,0),
(174,'E.HISTOLYTICA Ab Ha QL',177,6,0),
(175,'E2 (OESTRADIOL/ESTROGEN)',178,6,0),
(176,'E3 (OESTRIOL)',179,6,0),
(177,'EBV IGG',180,6,0),
(178,'EBV IGG+IGM - SERUM',181,6,0),
(179,'EBV IGG+IGM-CSF',182,6,0),
(180,'EBV IGM SERUM',183,6,0),
(181,'ECSTACY, urine',184,6,0),
(183,'ELECTROLYTES, 24Hr urine',186,6,0),
(184,'ELECTROLYTES, faecal',187,6,0),
(185,'ELECTROLYTES, random urine',188,6,0),
(186,'ELECTROPHORESIS, 24Hr urine',189,6,0),
(187,'ENA - CTD SCREEN',190,6,0),
(188,'ENA (EXTR.NUCLEAR AG) PROFILE',191,6,0),
(189,'ENDOCRINE INFERTILITY (FEMALE)',192,6,0),
(190,'ENDOCRINE INFERTILITY (MALE)',193,6,0),
(191,'ENDOMYSIUM ANTI-IGA',194,6,0),
(192,'EOSINIPHIL CATIONIC PROTEIN-S',195,6,0),
(193,'EPILIM (VALPROIC ACID), serum',196,6,0),
(194,'ERYTHROPOIETIN',197,6,0),
(195,'ESR (Alifax method)',198,6,0),
(196,'Extr.Nuclear Ag.Jo-1',199,6,0),
(197,'FACTOR II ASSAY',200,6,0),
(198,'FACTOR IX ASSAY',201,6,0),
(199,'FACTOR V ASSAY',202,6,0),
(200,'FACTOR VII ASSAY',203,6,0),
(201,'FACTOR X ASSAY',204,6,0),
(202,'FACTOR XI ASSAY',205,6,0),
(203,'FACTOR XII ASSAY',206,6,0),
(204,'FAECAL PH +RED. SUBSTANCES',207,6,0),
(205,'FBC & ESR(ALIFAX)',208,6,0),
(206,'FBC ONLY',209,6,0),
(207,'FBC ONLY - NO PLATELETS',210,6,0),
(208,'FEMALE HORMONE PROFILE',211,6,0),
(209,'FERRITIN-S',212,6,0),
(210,'FIBRINOGEN',213,6,0),
(211,'Flour.Trepon AB (FTA) - SERUM',214,6,0),
(212,'Flour.Trepon AB (FTA) - CSF',215,6,0),
(213,'FOLATE (SERUM AND RED CELL)',216,6,0),
(214,'FOLATE/VIT.B12 (BOTH)',217,6,0),
(215,'FOLATE-S (FOLIC ACID-SERUM)',218,6,0),
(216,'FOOD ALLERGY B/DOWN',219,6,0),
(217,'FRACTIONAL EXCRETION - SODIUM',220,6,0),
(218,'FRACTIONAL EXCRETION - URATE',221,6,0),
(219,'FREE PSA (ALWAYS TOTAL+FREE)',222,6,0),
(220,'FRUCTSAMINE',223,6,0),
(221,'FSH (FOLLITROPIN HORMONE)',224,6,0),
(222,'Fungitell Assay(1,3)-beta-D-GI',225,6,0),
(223,'GAMMA GT, serum',226,6,0),
(224,'GANGLIOSIDE AUTOANTIBODIES',227,6,0),
(225,'GAROIN, serum',228,6,0),
(226,'GASTRIC AB (ANTI PARIETAL CELL)',229,6,0),
(227,'GENTAMICIN, serum',230,6,0),
(228,'GLUCOSE fasting, plasma',231,6,0),
(229,'GLUCOSE random, plasma',232,6,0),
(230,'GLUCOSE, fluid',233,6,0),
(231,'GLUTEN INTOLERANCE(ITTGA+IGLUA)',234,6,0),
(232,'GONOCOCCAL ANTIBODIES',235,6,0),
(233,'GROWTH HORMONE (RANDOM)-S',236,6,0),
(234,'GROWTH HORMONE-S,fasting',237,6,0),
(235,'HAEMOTOCRIT (HCT) PVC',238,6,0),
(236,'HAEMOGLOBIN',239,6,0),
(237,'HAPTOBLOBIN, serum',240,6,0),
(238,'Hb ELETROPHORESIS SCREEN',241,6,0),
(239,'Hb H INCLUSIONS',242,6,0),
(240,'HB/HCT ON FLUID',243,6,0),
(241,'Hb/PCV (HB + PCV + RBC + MCV)',244,6,0),
(242,'HB\\WBC AND DIFF',245,6,0),
(243,'HBA1C (GLYCATED), blood',246,6,0),
(244,'HDL,SERUM',247,6,0),
(245,'HEAVY METAL SCR (RANDOM UR)',248,6,0),
(246,'HELICOBACTER PYLORI Ab',249,6,0),
(247,'HEP A + B STATUS - Acute',250,6,0),
(248,'HEP A + B STATUS - Immune L',251,6,0),
(249,'HEP A B C STATUS (Prior Expos)',252,6,0),
(250,'HEP A IgG antibody',253,6,0),
(251,'HEP A IgM antibody',254,6,0),
(252,'HEP B CORE IGG Antibody',255,6,0),
(253,'HEP B CORE IgM Antibody',256,6,0),
(254,'HEP B STATUS - Acute',257,6,0),
(255,'HEP B SURFACE Ag/Ab Comb',258,6,0),
(256,'HEP B SURFACE ANTIBODY',259,6,0),
(257,'HEP B SURFACE Antibody Value',260,6,0),
(258,'HEP B SURFACE antigen',261,6,0),
(259,'HEP Be PROFILE (Ag+Ab)',262,6,0),
(260,'HEP C ANTIBODY',263,6,0),
(261,'HEP E ANTIBODY (IgG+IgM)',264,6,0),
(262,'HEP E IgG',265,6,0),
(263,'HEP E IgM',266,6,0),
(264,'HEPATITIS A IgG + IgM',267,6,0),
(265,'HEPATITIS A, B, C IMMUNITY',268,6,0),
(266,'HEPATITIS A, B IMMUNITY',269,6,0),
(267,'HEPATITIS B & C STATUS CHRONIC',270,6,0),
(268,'HERPES (IGG +IGM) SERUM',271,6,0),
(269,'HETEROPHILE ABS',272,6,0),
(270,'HISTONE Ab',273,6,0),
(271,'HISTOPLASMA ANTIBODIES',274,6,0),
(272,'HIV Drug Resit. INTERGRASE',275,6,0),
(273,'HIV Drug Resit. PROT+R TRANS',276,6,0),
(274,'HIV Drug Resit.REVERSE TRANS',277,6,0),
(275,'HIV ELISA',278,6,0),
(276,'HIV ELISA 1&2',279,6,0),
(277,'HIV monitoring',280,6,0),
(278,'HIV monitoring - Baseline',281,6,0),
(279,'HIV treatment - Ultrasensitive',282,6,0),
(280,'HIV treatment MONITORING - SP',283,6,0),
(281,'HOMA INDEX(FASTING-GLUC+INSUL)',284,6,0),
(282,'HSV 1&2 IgM,serum',285,6,0),
(283,'HUMAN T-LYMPHOTROPIC VIRUSI/II',286,6,0),
(284,'HYDATID Haemagglutination',287,6,0),
(285,'HYPONATREMIA',288,6,0),
(286,'IGE ALCOHOL ALLERGENS',289,6,0),
(287,'IgE/PHADIOTOP',290,6,0),
(288,'IGG SUBCLASSES, serum',291,6,0),
(289,'IMMUNOTOXIFICATION, serum',292,6,0),
(290,'IMMUNOTOXIFICATION, urine',293,6,0),
(291,'IMMUNOGLOBULIN A, serum (IgG)',294,6,0),
(292,'IMMUNOGLOBULIN E-S',295,6,0),
(293,'IMMUNOGLOBULIN G, serum (IgG)',296,6,0),
(294,'IMMUNOGLOBULIN M, serum (IgM)',297,6,0),
(295,'IMMUNOGLOBULINS (IgA,IgG,IgM)',298,6,0),
(296,'INDIRECT COOMBS(AUTO-ANTIBODY)',299,6,0),
(297,'INSULIN (RANDOM)',300,6,0),
(298,'INSULIN, SERUM,fasting',301,6,0),
(299,'INTERLEUKIN 6',302,6,0),
(300,'INTRINSCI FACTOR ANTIBODIES',303,6,0),
(301,'IRON + TRANSFERRIN (Incl %SAT)',304,6,0),
(302,'IRON STATUS(Fe, TRANSF, %SAT,FER',305,6,0),
(303,'IRON, serum',306,6,0),
(304,'KLEIHAUER',307,6,0),
(305,'LACTOSE TOLERANCE TEST',308,6,0),
(306,'LAMELLAR (AMINIO PLATELET COUNT)',309,6,0),
(307,'LAMICTIN (SERUM)',310,6,0),
(308,'LDH (LACTATE DEHYDROGENASE) se',311,6,0),
(309,'LDH, fluid',312,6,0),
(310,'LDL, SERUM',313,6,0),
(311,'LEAD, blood ug/dL',314,6,0),
(312,'LEGIONNAIRES IFA (ANTIBODIES)',315,6,0),
(313,'LFT (LIVER FUNCTION REPEAT)',316,6,0),
(315,'LIPASE, serum',318,6,0),
(316,'LFT ENZYMES',319,6,0),
(317,'LIVER FUNCTION',320,6,0),
(318,'LKM',321,6,0),
(319,'LUTROPIN (LH)-S',322,6,0),
(320,'LYME DISEASE antibodies',323,6,0),
(321,'LYMPHOCYTE MARKERS',324,6,0),
(322,'MACROPROLACTIN ASSAY',325,6,0),
(323,'MAGNESIUM random, urine',326,6,0),
(324,'MAGNESIUM, 24Hr urine',327,6,0),
(325,'MAGNESIUM, RBC',328,6,0),
(326,'MAGNESIUM, serum',329,6,0),
(327,'MALARIA ANTIGEN',330,6,0),
(328,'MALARIA SCR (THICK+THIN+ICT)',331,6,0),
(329,'MALIGNANT MELANOMA S- 100B',332,6,0),
(330,'MANGANESE,blood',333,6,0),
(331,'MCV (MEAN CELL VOLUME)',334,6,0),
(332,'MEASLES ABS - CSF (IGG +IGM)',335,6,0),
(333,'MEASLES ABS -SERUM (IGG +IGM)',336,6,0),
(334,'MEASLES IgG ONLY',337,6,0),
(335,'MEASLES IgM ONLY',338,6,0),
(336,'MENOPAUSAL SCREEN (E2/FSH/LH)',339,6,0),
(337,'METHADONE, URINE',340,6,0),
(338,'METHAQUALONE, URINE',341,6,0),
(339,'METHOTREXATE',342,6,0),
(340,'MICROFILARIA SCREEN',343,6,0),
(341,'MITOCHONDRIAL IFA (ANTIBODIES)',344,6,0),
(342,'MUCOPOLYSACHARIDE URINE',345,6,0),
(343,'MUMPS ABS (IgG + IgM) SERUM',346,6,0),
(344,'MUMPS ABS (IgG) SERUM',347,6,0),
(345,'MUMPS antibodies - CSF',348,6,0),
(346,'Mycoplasma (IGG +IGM) ABS',349,6,0),
(347,'MYCOPLASMA IgG',350,6,0),
(348,'MYCOPLASMA IgM',351,6,0),
(349,'MYELOMA PROF.(BLOOD + URINE)',352,6,0),
(350,'MYELOMA PROF. MODIFIED (SERUM)',353,6,0),
(351,'MYELOMA PROFILE',354,6,0),
(352,'MYOGLOBIN',355,6,0),
(353,'MYOGLOBIN, urine',356,6,0),
(354,'NEPHRITIS SCREEN',357,6,0),
(355,'NUTRILAB PROFILE',358,6,0),
(356,'ONCOLOGY PROFILE',359,6,0),
(357,'OPIATES,urine',360,6,0),
(358,'OSMOLALITY, faecal',361,6,0),
(359,'OSMOLALITY, serum',362,6,0),
(360,'OSMOLALITY, urine',363,6,0),
(361,'OSMOLAR GAP (INCL NA +K)',364,6,0),
(362,'OSTEOCALCIN-S',365,6,0),
(363,'OVARY/TESTICULAR IFA',366,6,0),
(364,'OXALATE, 24Hr urine',367,6,0),
(365,'OXALATE, Random Urine, CR Ratio',368,6,0),
(366,'P.VIVAX ANTIGEN TEST',369,6,0),
(367,'P24 Antigen - CFS',370,6,0),
(368,'P24 ANTIGEN - SERUM',371,6,0),
(369,'PANCREAS IFA',372,6,0),
(370,'PARACETAMOL, serum',373,6,0),
(371,'MICRO U-ALBUMIN 24 HR',374,6,0),
(372,'PARANEOPLASTIC AB',375,6,0),
(373,'PARATHORMONE',376,6,0),
(374,'PARATHORMONE-S (PTH)',377,6,0),
(375,'PARTENITY REQUEST',378,6,0),
(376,'PAUL BUNNEL TEST',379,6,0),
(377,'PCR - ADENOVIRUS QUALITATIVE',380,6,0),
(378,'PCR - Apolipoprotein E-ALZHEIM',381,6,0),
(379,'PCR - Atypical pneumonia scr',382,6,0),
(380,'PCR - BK VIRUS Qnt',383,6,0),
(381,'PCR - Bordetella QI',384,6,0),
(382,'PCR - BRAF V600E',385,6,0),
(383,'PCR - CARBAPENEMASE (NDM1)',386,6,0),
(384,'PCR - Chlamydia trachomatis',387,6,0),
(385,'PCR - Chlamydophila pneumoniae',388,6,0),
(386,'PCR - CMV Quantitative',389,6,0),
(387,'PCR - CSF Virus Panel',390,6,0),
(388,'PCR - CYSTIC FIBRORIS FULL',391,6,0),
(389,'PCR - EBV Viral Load',392,6,0),
(390,'PCR - EGFR',393,6,0),
(391,'PCR - Enterovirus',394,6,0),
(392,'PCR - Flu Virus Panel',395,6,0),
(393,'PCR - Gonococcal',396,6,0),
(394,'PCR - HAEMOCHROMATOSIS',397,6,0),
(395,'PCR - HVC GENOTYPE',398,6,0),
(396,'PCR - Hep B Qualitative',399,6,0),
(397,'PCR - Hep B Quant (V.Load)',400,6,0),
(398,'PCR - Hep C Qualitative',401,6,0),
(399,'PCR - Hep C Quant (V.Load)',402,6,0),
(400,'PCR - Herpes 1 & 2',403,6,0),
(401,'PCR - HIV DNA Qualitative',404,6,0),
(402,'PCR - HIV treatment - Base ABB',405,6,0),
(403,'PCR - HIV treatment - Baseline',406,6,0),
(404,'PCR - HIV-1 DNA Qualitative',407,6,0),
(405,'PCR - HIV-1 QUANTITATIVE',408,6,0),
(406,'PCR - HIV-2 Qualitative',409,6,0),
(407,'PCR - HLA B27',410,6,0),
(408,'PCR - JAK2 V617F',411,6,0),
(409,'PCR - JC Virus QI',412,6,0),
(410,'PCR - KRAS',413,6,0),
(411,'PCR - Legionella pneumophilla',414,6,0),
(412,'PCR - MALARIA SPP',415,6,0),
(413,'PCR - MTHFR',416,6,0),
(414,'PCR - MUMPS - SALIVA/URINE',417,6,0),
(415,'PCR - Mycoplasma pneumonaie',418,6,0),
(416,'PCR - Parvovirus B19 Qual',419,6,0),
(417,'PCR - Pneumocystis carinii',420,6,0),
(418,'PCR - Porphyria',421,6,0),
(419,'PCR - Prothrombin & APCR',422,6,0),
(420,'PCR - Prothrombin G20210A',423,6,0),
(421,'PCR - Respiratory Syntical Vir',424,6,0),
(422,'PCR - Respiratory Viruses',425,6,0),
(423,'PCR - TB HISTO BLOCK',426,6,0),
(424,'PCR - Tick Bite Fever',427,6,0),
(425,'PCR - Varicella Zoster virus',428,6,0),
(426,'PCR BCR/ABL fusion gene',429,6,0),
(427,'PCR Clonial Ig Heavy Chain gene',430,6,0),
(428,'PCRCMV Qnt (Viral Load)',431,6,0),
(429,'PCR E. COLI (EPEC)',432,6,0),
(430,'PCR HPV (16/18)COBAS (LBC)',433,6,0),
(431,'PCR HPV swab/histo block',434,6,0),
(432,'PCR TCRG gene rearrangements',435,6,0),
(433,'PCR URETHRITIS PANEL',436,6,0),
(434,'PENTACHLOROPHENOL BL',437,6,0),
(435,'PH, faecal',438,6,0),
(436,'PH, fluid',439,6,0),
(437,'PH, urine',440,6,0),
(438,'PHADIOTOP-S (Aeroallergen scr)',441,6,0),
(439,'PHENCYCLIDINE, URINE',442,6,0),
(440,'PHENOBARBITONE, serum ',443,6,0),
(441,'PHENYTOIN, serum',444,6,0),
(442,'PHOSPHATE inorganic, serum',445,6,0),
(443,'PHOSPHATE, 24 Hr urine',446,6,0),
(444,'PINEAL TUMOUR PROFILE CSF',447,6,0),
(445,'PLASMINOGEN',448,6,0),
(446,'PLATELET COUNT (AUTO)',449,6,0),
(447,'PM ScI',450,6,0),
(448,'PORPHYRIN SCREEN(BLD/UR/F)',451,6,0),
(449,'PORPHYRIN SCREEN, blood',452,6,0),
(450,'PORPHYRIN SCREEN, faec',453,6,0),
(451,'POTASSIUM random, urine mmol/L',454,6,0),
(452,'POTASSIUM, 24Hr URINE',455,6,0),
(453,'POTASSIUM, faecal',456,6,0),
(454,'POTASSIUM, fluid',457,6,0),
(455,'POTASSIUM, serum',458,6,0),
(456,'PREALBUMIN, FASTING',459,6,0),
(457,'PREGNANCY SCREEN U-BHCG',460,6,0),
(458,'PREGNANCY T4/FREE THYROXINE',461,6,0),
(459,'PREGNANCY THYROTROPIN (TSH)-S',462,6,0),
(460,'PROBNP (BRAIN NATURETIC PEPTID)',463,6,0),
(461,'PROCALCITONIN, QUANTITATIVE',464,6,0),
(462,'PROCALCITONIN, QUALITATIVE(Rapid)',465,6,0),
(463,'PROGESTERONE-S',466,6,0),
(464,'PROLACTIN-S',467,6,0),
(465,'PROPOXYPHENE, URINE',468,6,0),
(466,'PROTEIN C FUNC',469,6,0),
(467,'PROTEIN ELECTROPHOR+IMMUNO',470,6,0),
(468,'PROTEIN ELECTROPHORESIS, fluid',471,6,0),
(469,'PROTEIN S',472,6,0),
(470,'PROTEIN, urine (quantative)',473,6,0),
(471,'PROTEIN/CREATINE RATIO,urine',474,6,0),
(472,'PROTEIN/OSMOLALITY RATIO,urine',475,6,0),
(473,'PROTHROMBIN ANTIBODIES',476,6,0),
(474,'PSA(ONLY - NO FREE PSA REFLX)',477,6,0),
(475,'PSA(+FREE PSA if TOTAL 2.6-10',478,6,0),
(476,'Q-FEVER SCREEN(BURNET IGG+IGM)',479,6,0),
(477,'QUANTITATIVE HCG',480,6,0),
(478,'QUANTITATIVE D-DIMER',481,6,0),
(479,'QUANTITATIVE HCG, Tumour marker',482,6,0),
(480,'RAST ABOLONE (PERLEMOEN) f346',483,6,0),
(481,'RAST AMOXYCILLIN  C6',484,6,0),
(482,'RAST AMPICILIN c5',485,6,0),
(483,'RAST ANCHOVY    Rf313',486,6,0),
(484,'RAST ANIMAL DANDER',487,6,0),
(485,'RAST APPLE  f49',488,6,0),
(486,'RAST APRICOT   f237',489,6,0),
(487,'RAST ASCARIS     p1',490,6,0),
(488,'RAST ASPERGILLUS FUMIGATUS  M3',491,6,0),
(489,'RAST AVOCADO   f96',492,6,0),
(490,'RAST BANANA    f92',493,6,0),
(491,'RAST BARLEY   f6',494,6,0),
(492,'RAST BEE VENOM   i1',495,6,0),
(493,'RAST BEEF   f27',496,6,0),
(494,'RAST BEER ALLERGENS',497,6,0),
(495,'RAST BEETROOT   f319',498,6,0),
(496,'RAST BLUE MUSSEL   f37',499,6,0),
(497,'RAST BUCKWHEAT f11',500,6,0),
(498,'RAST BUDGE DROPPINGS   e77',501,6,0),
(499,'RAST CABBAGE   f216',502,6,0),
(500,'RAST CAGE BIRD  ex72',503,6,0),
(501,'RAST CANDIDA albicans   m5',504,6,0),
(502,'RAST CAROB   F296',505,6,0),
(503,'RAST CARROT   f31',506,6,0),
(504,'RAST CASEIN   f78',507,6,0),
(505,'RAST CASHEW NUT   f202',508,6,0),
(506,'RAST CAT DANDER  e1',509,6,0),
(507,'RAST CAT rFEL D 4   E228',510,6,0),
(508,'RAST CAULIFLOWER   Rf291',511,6,0),
(509,'RAST CCD  o214',512,6,0),
(510,'RAST CELERY   f85',513,6,0),
(511,'CEPHALOSPORIN  Rc7',514,6,0),
(512,'RAST CEREAL MIX FULL   fx3',515,6,0),
(513,'RAST CHEDDAR CHEESE  f81',516,6,0),
(514,'RAST CHERRY   f73',517,6,0),
(515,'RAST CHICKEN MEAT  f83',518,6,0),
(516,'RAST CHRYSANTHENUM   w7',519,6,0),
(517,'RAST CITRUS SCREEN',520,6,0),
(518,'RAST CLAM   f207',521,6,0),
(519,'RAST CLOVE    Rf286',522,6,0),
(520,'RAST COCKROACH   i6',523,6,0),
(521,'RAST COCKROACH (ORIENTAL) i207',524,6,0),
(522,'RAST COCOA  f93',525,6,0),
(523,'RAST COD FISH PARVALBUMIN f426',526,6,0),
(524,'RAST COFFEE  f221',527,6,0),
(525,'RAST COTTON (CRUDE)  o1',528,6,0),
(526,'RAST COW DANDER     e4',529,6,0),
(527,'RAST CRAB   f24',530,6,0),
(528,'RAST CAYFISH FAMILY   f80',531,6,0),
(529,'RAST CUCUMBER    Rf244',532,6,0),
(530,'RAST CURRY  Rf281',533,6,0),
(531,'RAST DAIRY PRODUCTS',534,6,0),
(532,'RAST DANDELION w6',535,6,0),
(533,'RAST DOG DANDER   e5',536,6,0),
(534,'RAST DOG nCAN f 3    E221',537,6,0),
(535,'RAST DOG nCAN f 5    E226',538,6,0),
(536,'RAST DUST MIX hx2',539,6,0),
(537,'RAST EGG ALBUMIN ONLY f1',540,6,0),
(538,'RAST EGG WHITE & YELLOW F1+F75',541,6,0),
(539,'RAST EGG YOLK  f75',542,6,0),
(540,'RAST EPICOCCUM MOULD  m14',543,6,0),
(541,'RAST  ETHYLENE OXIDE   k78',544,6,0),
(542,'RAST FEATHERS - BUDGIE    e78',545,6,0),
(543,'RAST FEATHERS - CHICKEN    e85',546,6,0),
(544,'RAST FEATHERS - DUCK   e86',547,6,0),
(545,'RAST FEATHERS - FULL',548,6,0),
(546,'RAST FEATHERS - GOOSE    e70',549,6,0),
(547,'RAST FEATHERS - PARROT     e215',550,6,0),
(548,'RAST FEATHERS - TURKEY  e89',551,6,0),
(549,'RAST FISH (COD)  f3',552,6,0),
(550,'RAST FOOD MIX fx5',553,6,0),
(551,'RAST FRUIT MIX 1  fx15',554,6,0),
(552,'RAST FRUIT MIX 2  fx16',555,6,0),
(553,'RAST GARLIC    f47',556,6,0),
(554,'RAST GARMET SCREEN',557,6,0),
(555,'RAST GLUTEN  f79',558,6,0),
(556,'RAST GOATSMILK   f300',559,6,0),
(557,'RAST GRANADILLA   f259',560,6,0),
(558,'RAST GRAPE   f259',561,6,0),
(559,'RAST GRAPEFRUIT    f209',562,6,0),
(560,'RAST GRASS - BERMUDA  g2',563,6,0),
(561,'RAST GRASS - RYE   g5',564,6,0),
(562,'RAST GRASS - TIMOTHY   G6',565,6,0),
(563,'RAST GRASS - SCR(BER,RYE,TIM)gx2',566,6,0),
(564,'RAST GREEN BEAN   Rf315',567,6,0),
(565,'RAST GREEN PEPPER   Rf263',568,6,0),
(566,'RAST GUAVA   f292',569,6,0),
(567,'RAST GUINEA PIG   e6',570,6,0),
(568,'RAST HAKE    rf307',571,6,0),
(569,'RAST HAMSTER     e84',572,6,0),
(570,'RAST HERRING       f205',573,6,0),
(571,'RAST HONEY     Rf247',574,6,0),
(572,'RAST HOPPS     rf324',575,6,0),
(573,'RAST HORNET - WHITE',576,6,0),
(574,'RAST HORNET - YELLOW',577,6,0),
(575,'RAST HORSE DANDER',578,6,0),
(576,'RAST HOUSE DUST MITE',579,6,0),
(577,'RAST HOUSE DUST MITE GROUP',580,6,0),
(578,'RAST HOUSE DUST MITE 1',581,6,0),
(579,'RAST HOUSE DUST MITE 2',582,6,0),
(580,'RAST HOUSE DUST MITE 74',583,6,0),
(581,'RAST INHALANTS',584,6,0),
(582,'RAST INSULIN HUMAN',585,6,0),
(583,'RAST ISOCYANATE HDI',586,6,0),
(584,'RAST ISOCYANATE MDI',587,6,0),
(585,'RAST ISOCYANATE TDI',588,6,0),
(586,'RAST KIWI FRUIT',589,6,0),
(587,'RAST LACTALBUMIN',590,6,0),
(588,'RAST LACTOGLOGULIN',591,6,0),
(589,'RAST LATEX',592,6,0),
(590,'RAST LEMON',593,6,0),
(591,'RAST LENTILS',594,6,0),
(592,'RAST LETTUCE',595,6,0),
(593,'RAST MAIZE',596,6,0),
(594,'RAST MAIZE POLLEN',597,6,0),
(595,'RAST MALT',598,6,0),
(596,'RAST MANGO',599,6,0),
(597,'RAST MELON',600,6,0),
(598,'RAST MILK',601,6,0),
(599,'RAST MIXED EPITHELIUM',602,6,0),
(600,'RAST MIXED FRUIT',603,6,0),
(601,'RAST MIXED VEGETABLES',604,6,0),
(602,'RAST MOSQUITO SPP',605,6,0),
(603,'RAST MOULD - MIXED',606,6,0),
(604,'RAST MOULD ALTENARIA tetius m6',607,6,0),
(605,'RAST MOULD CHEESE',608,6,0),
(606,'RAST MOULD CURVULATA LUNATAM16',609,6,0),
(607,'RAST MOULD HELMINNTHOSPORIUM',610,6,0),
(608,'RAST MOULD PHOMA BETAE',611,6,0),
(609,'RAST MOULD POLLULANS',612,6,0),
(610,'RAST MOULD-C.herbarum',613,6,0),
(611,'RAST MOULD-PENICILLIUM.notatum',614,6,0),
(612,'RAST MUSHROOM',615,6,0),
(613,'RAST MUTTON',616,6,0),
(614,'RAST nGly M5 B-CONGLYCININf431',617,6,0),
(615,'RAST NUT - ALMOND',618,6,0),
(616,'RAST NUT - BRAZIL',619,6,0),
(617,'RAST NUT - COCONUT',620,6,0),
(618,'RAST NUT - HAZEL',621,6,0),
(619,'RAST NUT - MIX - FULL',622,6,0),
(620,'RAST NUT - PECAN',623,6,0),
(621,'RAST NUT - WALNUT',624,6,0),
(622,'RAST NUT MIX',625,6,0),
(623,'RAST OATS',626,6,0),
(624,'RAST OMEGA 5 GLIADIN',627,6,0),
(625,'RAST ONION',628,6,0),
(626,'RAST ORANGE',629,6,0),
(627,'RAST OVOMUCOID',630,6,0),
(628,'RAST OYSTER',631,6,0),
(629,'RAST PAPRIKA',632,6,0),
(630,'RAST PAWPAW',633,6,0),
(631,'RAST PEA',634,6,0),
(632,'RAST PEACH',635,6,0),
(633,'RAST PEACH PROFILIN',636,6,0),
(634,'RAST PEANUT rAra h1',637,6,0),
(635,'RAST PEANUT rAra h3',638,6,0),
(636,'RAST PEANUT rAra h9',639,6,0),
(637,'RAST PEAR',640,6,0),
(638,'RAST PENICILIN G + V(BOTH)',641,6,0),
(639,'RAST PENICYLLOYL G ONLY',642,6,0),
(640,'RAST PENICYLLOYL V ONLY',643,6,0),
(641,'RAST PHTHALIC ANHYDRIDE',644,6,0),
(642,'RAST PIGEON DROPPINGS',645,6,0),
(643,'RAST PINEAPPLE',646,6,0),
(644,'RAST PISTACHIO NUT',647,6,0),
(645,'RAST PLANTAIN',648,6,0),
(646,'RAST PLUM',649,6,0),
(647,'RAST POLLEN SCR (BER/TIM/TREE)',650,6,0),
(648,'RAST PORK',651,6,0),
(649,'RAST POTATO',652,6,0),
(650,'RAST PRIVET',653,6,0),
(651,'RAST PUMPKIN',654,6,0),
(652,'RAST RABBIT EPITHELIUM',655,6,0),
(653,'RAST RAGWEED',656,6,0),
(654,'RAST RECOMBINAN BEE VENOM',657,6,0),
(655,'RAST RGLY M 4 PR-10 SOY',658,6,0),
(656,'RAST RHIZ.nigricans',659,6,0),
(657,'RAST RICE',660,6,0),
(658,'RAST RYE',661,6,0),
(659,'RAST SALMON',662,6,0),
(660,'RAST SCHISTOSOMA',663,6,0),
(661,'RAST SEAFOOD MIX- FULL SCREEN',664,6,0),
(662,'RAST SESAME SEED',665,6,0),
(663,'RAST SHEEP WOOL',666,6,0),
(664,'RAST SHELLFISH SCREEN',667,6,0),
(665,'RAST SHRIMP',668,6,0),
(666,'RAST SOLID.vigaurea',669,6,0),
(667,'RAST SOYA BEAN',670,6,0),
(668,'RAST SPICE MIX',671,6,0),
(669,'RAST SPINACH',672,6,0),
(670,'RAST SQUID',673,6,0),
(671,'RAST STRAWBERRY',674,6,0),
(672,'RAST SUNFLOWER SEED',675,6,0),
(673,'RAST TANGERINE',676,6,0),
(674,'RAST TEA',677,6,0),
(675,'RAST TOBACCO LEAF',678,6,0),
(676,'RAST TOMATO',679,6,0),
(677,'RAST TREE - ACACIA(wattle)',680,6,0),
(678,'RAST TREE - COTTONWOOD',681,6,0),
(679,'RAST TREE - ELM',682,6,0),
(680,'RAST TREE - EUCALYPTUS',683,6,0),
(681,'RAST TREE - MELALUEUCA',684,6,0),
(682,'RAST TREE - OAK',685,6,0),
(683,'RAST TREE - OLIVE',686,6,0),
(684,'RAST TREE - PLANE',687,6,0),
(685,'RAST TREE - WHITE PINE',688,6,0),
(686,'RAST TREE - WILLOW',689,6,0),
(687,'RAST TREE - POLLEN MIX 1',690,6,0),
(688,'RAST TREE - POLLEN MIX 2',691,6,0),
(689,'RAST TROUT',692,6,0),
(690,'RAST TUNA',693,6,0),
(691,'RAST VANILLA',694,6,0),
(692,'RAST VEGTABLE MIX 1',695,6,0),
(693,'RAST VEGTABLE MIX 2',696,6,0),
(694,'RAST WASP - PAPER',697,6,0),
(695,'RAST WASP (COMMON)',698,6,0),
(696,'RAST WATERMELON',699,6,0),
(697,'RAST WEED POLLEN MIX',700,6,0),
(698,'RAST WHEAT',701,6,0),
(699,'RAST WHEAT rTri a14',702,6,0),
(700,'RAST WHEY',703,6,0),
(701,'RAST WHITE BEAN',704,6,0),
(702,'RAST WINE ALLERGENS',705,6,0),
(703,'RAST YEAST',706,6,0),
(704,'RBC',707,6,0),
(705,'RED CELL FOLATE',708,6,0),
(706,'rENAL STONE SCREEN IN BLOOD',709,6,0),
(707,'RESPIRATORY SYNCYTICAL VIRUS',710,6,0),
(708,'RETICULIN ANTIBODIES',711,6,0),
(709,'RETICULOCYTES',712,6,0),
(710,'Rhesus (D) only',713,6,0),
(711,'RHEUMATOID ARTHRITIS (FACTOR)',714,6,0),
(712,'Rheumatiod Factor (RHEUMATON)',715,6,0),
(713,'RIB-P',716,6,0),
(714,'RICKETTSIAL SCREEN',717,6,0),
(715,'RNP - ENA',718,6,0),
(716,'RPR (VDRL) ONLY - SERUM',719,6,0),
(717,'RUBELLA (IGG+ IGM) - SERUM',720,6,0),
(718,'RUBELLA CSF IGG+ IGM',721,6,0),
(719,'RUBELLA IgG - SERUM',722,6,0),
(720,'RUBELLA IgM - SERUM',723,6,0),
(721,'S- 100B Trauma',724,6,0),
(722,'SA TREE POLLEN SCREEN',725,6,0),
(723,'SALICYLATE,serum',726,6,0),
(724,'SALIVARY DUCT IFA',727,6,0),
(725,'SECRETORY IGA',728,6,0),
(726,'SEX HORMONE BINDING GLOBULIN',729,6,0),
(727,'SEXUAL HEALTH SCREEN (Excl HIV)',730,6,0),
(728,'SEXUAL HEALTH SCREEN (Incl HIV)',731,6,0),
(729,'SGOT/AST',732,6,0),
(730,'SGOT/ALT',733,6,0),
(731,'SHBG/FREE TEST (INDEX+DERIVED)',734,6,0),
(732,'SIROLIMUS LEVELS',735,6,0),
(733,'SM - ENA',736,6,0),
(734,'SMOOTH MUSCLE (ANTIBODIES)',737,6,0),
(735,'SODIUM random, urine mmol/L',738,6,0),
(736,'SODIUM, 24 Hr urine',739,6,0),
(737,'SODIUM, faecal',740,6,0),
(738,'SODIUM, serum',741,6,0),
(739,'SOLUBLE TRANSFERRIN RECEPTOR',742,6,0),
(740,'SOMATOMEDIN-C',743,6,0),
(741,'SPEERM ANTIBODY SERUM',744,6,0),
(742,'SSA - ENA',745,6,0),
(743,'SSA - ENA',746,6,0),
(744,'STONE ANALYSIS',747,6,0),
(745,'STONE WORKUP(24hU/BLD/RAND U)',748,6,0),
(746,'SYPHILLIS (RPR + T.PLLID)SERUM',749,6,0),
(747,'TACROLIMUS, blood',750,6,0),
(748,'T-CELL PROFILE',751,6,0),
(749,'TESTIS TUMOUR MARKER',752,6,0),
(750,'TESTOSTERONE (FREE TEST.INDEX)',753,6,0),
(751,'TESTOSTERONE (TOTAL)',754,6,0),
(752,'THEOPHYLLINE,serum',755,6,0),
(753,'THROMBOSIS SCR(VENOUS+MUTATION)',756,6,0),
(754,'THYROGLOBULIN',757,6,0),
(755,'THYROID PROF.incl TSH/T4 (NO A)',758,6,0),
(756,'TISSUE TRANSLUTAMINASE IgA+G',759,6,0),
(757,'TROBRAMYCIN, serum',760,6,0),
(758,'TOTAL CO2 (bicarbonate), serum',761,6,0),
(759,'TOTAL PROTEIN, 24Hr urine',762,6,0),
(760,'TOTAL PROTEIN, CSF',763,6,0),
(761,'TOTAL PROTEIN, fluid',764,6,0),
(762,'TOTAL PROTEIN, serum',765,6,0),
(763,'TOXOPLASMA - CSF',766,6,0),
(764,'TOXOPLASMA - SERUM',767,6,0),
(765,'TOXOPLASMA - IgG,serum',768,6,0),
(766,'TOXOPLASMA - IgM,serum',769,6,0),
(767,'TRANSFERRIN, serum',770,6,0),
(768,'TRANSPLANT UREA + K + CREAT',771,6,0),
(769,'TRYCILIC ANTIDEPRESSANTS, serum',772,6,0),
(770,'TRYGLYCERIDE, fluid',773,6,0),
(771,'TRYGLYCERIDE, SERUM',774,6,0),
(772,'TRYPANOSOME SCREEN (THICK+THIN)',775,6,0),
(773,'TSH &T4',776,6,0),
(774,'TSH RECEPTOR AB',777,6,0),
(775,'U & E PROFILE (NA,K,CRE)',778,6,0),
(776,'U-MICROALBUMIN/CREAT RATIO, urine',779,6,0),
(777,'URATE, fluid',780,6,0),
(778,'URATE/CREATINE RATIO, urine ',781,6,0),
(779,'UREA PRE/POST REDUCTION RATIO',782,6,0),
(780,'UREA random, urine',783,6,0),
(781,'UREA, 24Hr urine',784,6,0),
(782,'UREA, fluid',785,6,0),
(783,'UREA, serum',786,6,0),
(784,'UREA, serum Post Dialysis',787,6,0),
(785,'UREA, serum Pre Dialysis',788,6,0),
(786,'URIC ACID, 24Hr urine',789,6,0),
(787,'URIC ACID, random urine',790,6,0),
(788,'URIC ACID, serum',791,6,0),
(789,'VAGINAL/CERVICAL SCREEN',792,6,0),
(790,'VANCOMYCIN, serum',793,6,0),
(791,'VARICELLA ab - CSF',794,6,0),
(792,'VARICELLA IGG - SERUM',795,6,0),
(793,'VARICELLA IGM - SERUM',796,6,0),
(794,'VARICELLA(HERPES ZOSTER)Ab',797,6,0),
(795,'VDRL ONLY - CSF',798,6,0),
(796,'VITAMIN B12, serum',799,6,0),
(797,'vitamin d 25',800,6,0),
(798,'WBC AND DIFF',801,6,0),
(799,'WBC ONLY (NO DIFF COUNT)',802,6,0),
(800,'WHOLE BLOOD CHOLINESTERASE',803,6,0),
(801,'APOLIPROTEIN (a)',804,6,0),
(802,'Cd4 + PCR QUAL',805,6,0),
(805,'Ova',806,3,0),
(806,'Cysts',806,3,0),
(807,'Pus Cells',806,3,0),
(808,'RBC',806,3,0),
(809,'Epithelial cells',806,3,0),
(810,'Yeast Cells',806,3,0),
(811,'Parasites',806,3,0),
(814,'Colour',806,1,0),
(815,'Blood',806,1,0),
(816,'Consistency',806,1,0),
(817,'Mucus',806,1,0),
(824,'Colour',807,1,0),
(825,'Appearance',807,1,0),
(826,'Blood',807,1,0),
(827,'Stones',807,1,0),
(828,'PH',807,2,0),
(829,'Protein',807,2,0),
(830,'Glucose',807,2,0),
(831,'Ketones',807,2,0),
(832,'Urobilinogen',807,2,0),
(833,'Bilirubin',807,2,0),
(834,'Leucocytes',807,2,0),
(835,'Blood',807,2,0),
(836,'Nitrite',807,2,0),
(837,'Specific Gravity',807,2,0),
(838,'Ascobic Acid',807,2,0),
(839,'Ova',807,3,0),
(840,'White Blood Cells',807,3,0),
(841,'Red Blood Cells',807,3,0),
(842,'Epithelial Cells',807,3,0),
(843,'Yeast cells',807,3,0),
(844,'Parasites',807,3,0),
(845,'Casts',807,3,0),
(846,'Parasites',806,1,0),
(856,'Patient time (seconds)',822,6,0),
(857,'Control time (seconds)',822,6,0),
(858,'INR',822,6,0),
(859,'ALBUMIN',317,6,0),
(860,'TOTAL PROTEIN',317,6,0),
(861,'TOTAL BILIRUBIN',317,6,0),
(862,'DIRECT BILIRUBIN',317,6,0),
(863,'ALKALINE PHOSPHATASE',317,6,0),
(864,'GGT',317,6,0),
(865,'SGOT/AST',317,6,0),
(866,'SGPT/ALT',317,6,0),
(867,'sodium',185,6,0),
(868,'potassium',185,6,0),
(869,'chloride',185,6,0),
(870,'urea',185,6,0),
(871,'creatinine',185,6,0),
(872,'T3',832,6,0),
(873,'T4',832,6,0),
(874,'TSH',832,6,0),
(878,'TOTAL CHOLESTEROL',833,6,0),
(879,'TRIGLYCERIDES',833,6,0),
(880,'HDL CHOLESTEROL',833,6,0),
(881,'LDL CHOLESTEROL',833,6,0),
(882,'VLDL CHOLESTEROL',833,6,0),
(883,'CHOLESTEROL/HDL RATIO',833,6,0);

/*Table structure for table `test_results` */

DROP TABLE IF EXISTS `test_results`;

CREATE TABLE `test_results` (
  `test_result_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `test_result` varchar(200) DEFAULT NULL,
  `test_parameter_id` int(11) NOT NULL,
  `comment` text,
  `reported_by` varchar(100) DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL,
  `units` varchar(100) DEFAULT NULL,
  `ref_range` varchar(100) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `v_date` text NOT NULL,
  `report_date` text NOT NULL,
  `specimen` text,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `mala_mps` text,
  `mala_ant` text,
  PRIMARY KEY (`test_result_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

/*Data for the table `test_results` */

insert  into `test_results`(`test_result_id`,`test_id`,`client_id`,`test_result`,`test_parameter_id`,`comment`,`reported_by`,`approved_by`,`units`,`ref_range`,`group_id`,`v_date`,`report_date`,`specimen`,`deleted`,`mala_mps`,`mala_ant`) values 
(1,807,824,'W',824,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735396',NULL,0,NULL,NULL),
(2,807,824,'H',825,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735397',NULL,0,NULL,NULL),
(3,807,824,'J',826,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735397',NULL,0,NULL,NULL),
(4,807,824,'N',827,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735397',NULL,0,NULL,NULL),
(5,807,824,'M',828,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735397',NULL,0,NULL,NULL),
(6,807,824,'K',829,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735397',NULL,0,NULL,NULL),
(7,807,824,'L',830,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735397',NULL,0,NULL,NULL),
(8,807,824,'I',831,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735397',NULL,0,NULL,NULL),
(9,807,824,'O',832,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735398',NULL,0,NULL,NULL),
(10,807,824,'P',833,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735398',NULL,0,NULL,NULL),
(11,807,824,'B',834,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735398',NULL,0,NULL,NULL),
(12,807,824,'O',835,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735398',NULL,0,NULL,NULL),
(13,807,824,'I',836,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735398',NULL,0,NULL,NULL),
(14,807,824,'O',837,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735398',NULL,0,NULL,NULL),
(15,807,824,'P',838,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735398',NULL,0,NULL,NULL),
(16,807,824,'L',839,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735398',NULL,0,NULL,NULL),
(17,807,824,'K',840,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735398',NULL,0,NULL,NULL),
(18,807,824,'H',841,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735399',NULL,0,NULL,NULL),
(19,807,824,'G',842,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735399',NULL,0,NULL,NULL),
(20,807,824,'F',843,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735399',NULL,0,NULL,NULL),
(21,807,824,'V',844,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735399',NULL,0,NULL,NULL),
(22,807,824,'D',845,'DD','HH','VV',NULL,NULL,3,'1525691122','1525735399',NULL,0,NULL,NULL),
(23,4,823,'W1',2,'NNNNNNNN','BRIIIIII','CNyirenda','U1','N1',2,'1525849545','1525895180',NULL,0,NULL,NULL),
(24,4,823,'W2',5,'NNNNNNNN','BRIIIIII','CNyirenda','U1','N1',2,'1525849545','1525895180',NULL,0,NULL,NULL),
(25,807,823,'YELLOW',824,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901050',NULL,0,NULL,NULL),
(26,807,823,'STICKY',825,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901050',NULL,0,NULL,NULL),
(27,807,823,'RED',826,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901050',NULL,0,NULL,NULL),
(28,807,823,'APPLE',827,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901050',NULL,0,NULL,NULL),
(29,807,823,'GOOD',828,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901050',NULL,0,NULL,NULL),
(30,807,823,'BAD',829,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901050',NULL,0,NULL,NULL),
(31,807,823,'GOOD',830,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901051',NULL,0,NULL,NULL),
(32,807,823,'GOOD',831,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901051',NULL,0,NULL,NULL),
(33,807,823,'BAD',832,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901051',NULL,0,NULL,NULL),
(34,807,823,'SMELLY',833,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901051',NULL,0,NULL,NULL),
(35,807,823,'GOOD',834,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901051',NULL,0,NULL,NULL),
(36,807,823,'GOOD',835,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901051',NULL,0,NULL,NULL),
(37,807,823,'ASA',836,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901051',NULL,0,NULL,NULL),
(38,807,823,'BOSS',837,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901051',NULL,0,NULL,NULL),
(39,807,823,'BASI',838,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901051',NULL,0,NULL,NULL),
(40,807,823,'XIMA',839,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901052',NULL,0,NULL,NULL),
(41,807,823,'ZINA',840,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901052',NULL,0,NULL,NULL),
(42,807,823,'DAB',841,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901052',NULL,0,NULL,NULL),
(43,807,823,'SAS',842,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901052',NULL,0,NULL,NULL),
(44,807,823,'BABS',843,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901052',NULL,0,NULL,NULL),
(45,807,823,'QERTYI',844,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901052',NULL,0,NULL,NULL),
(46,807,823,'BEAR',845,'BADLY SICK','BRIAN NKHATA','JAYLOSS NKHATA',NULL,NULL,3,'1525849545','1525901052',NULL,0,NULL,NULL),
(47,9,823,'WHAT',7,'Sick','Brian Nkhata','JAYLOSS NKHATA','MM/GL','BOSS',2,'1525856728','1525901335',NULL,0,NULL,NULL);

/*Table structure for table `tests` */

DROP TABLE IF EXISTS `tests`;

CREATE TABLE `tests` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_code` varchar(300) DEFAULT NULL,
  `test_name` varchar(300) DEFAULT NULL,
  `amount` varchar(300) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB AUTO_INCREMENT=835 DEFAULT CHARSET=latin1;

/*Data for the table `tests` */

insert  into `tests`(`test_id`,`test_code`,`test_name`,`amount`,`group_id`,`deleted`) values 
(3,'LC2001','17a-HYDROXYPROGESTERONE/17-OH','',2,0),
(4,'LC2002','24HR GLUCOSE MONITORING','',2,0),
(5,'LM2003','ACUTE HEPATATIS PROFILE','',5,0),
(6,'LC2004','ADENOSINE DEAMINASE,(ADA) CSF','',2,0),
(7,'LC2005','ADENOSINE DEAMINASE,(ADA) Fluid','',2,0),
(8,'LC2006','ADENOSINE DEAMINASE,(ADA) SERUM','',2,0),
(9,'LC2007','ADRENAL Ab','',2,0),
(10,'LC2008','ALBUMIN/TOTAL PROTEIN','6400',2,0),
(11,'LC2009','ALBUMIN, fluid','3200',2,0),
(12,'LC2010','ALBUMIN, serum','3200',2,0),
(13,'LC2011','ALDOLASE, serum','',2,0),
(14,'LC2012','ALDOSTERONE, serum','',2,0),
(15,'LC2013','ALKALINE PHOSPHATE, serum','3200',2,0),
(16,'LC2014','ALPHA 1 ANTITRYPSIN (SERUM)','',2,0),
(17,'LC2015','ALPHA-FETOPROTEIN (AFP) TUMOUR','29000',2,0),
(18,'LC2016','ALPHA-FETOPROTEIN-S (AFP)','29000',2,0),
(19,'LC2017','ALPHA-FETOPROTEIN-S AFP KUL/L + Weight + Gestational Age','',2,0),
(20,'LC2018','AMIKACIN,serum','',2,0),
(21,'LC2019','AMNIOTIC ALPHA-FETOPROTEIN','',2,0),
(22,'LC2020','AMPHETAMINES,urine','',2,0),
(23,'LC2021','AMYLASE + LIPASE','',2,0),
(24,'LC2022','AMYLASE, fluid','3200',2,0),
(25,'LC2023','AMYLASE, serum','3200',2,0),
(26,'LC2024','AMYLASE, urine','3200',2,0),
(27,'LC2025','ANCA(ANTI NEUT.CYTOPLASMIC AB)','49200',2,0),
(28,'LC2026','ANDROGEN PROFILE (MALE)','',2,0),
(29,'LC2027','ANDROSTENEDIODE (ADS)','',2,0),
(30,'LC2028','ANF ONLY','20160',2,0),
(31,'LC2029','ANF ONLY GROUP','',2,0),
(32,'LC2030','ANF SCREEN ( AMF + DNA )','',2,0),
(33,'LC2031','ANTENATAL AB IDENTIFICATION','',2,0),
(34,'LC2032','ANTI CYCLIC CITRINNULATED PEPT','25900',2,0),
(35,'LC2033','ANTI GAD Antibody','',2,0),
(36,'LC2034','ANTI GAD/IA2 Antibodies','',2,0),
(37,'LC2035','ANTI GLIADIN IGA (GLUTEN) Ab','',2,0),
(38,'LC2036','ANTI GLIADIN IGG (GLUTEN) Ab','',2,0),
(39,'LC2037','ANTI IA2 Antibody','',2,0),
(40,'LC2038','ANTI-FACTORY Xa ACTIVITY','',2,0),
(41,'LC2037','ANTI-GLOMERULAR BASEMENT MEMB','',2,0),
(42,'LC2038','ANTI-MULLERIAN HORMONE','30930',2,0),
(43,'LC2035','ANTIPHOSPHOLIPID ANTIBODIES','',2,0),
(44,'LC2036','ANTIPHOSPHOLIPID PROFILE','',2,0),
(45,'LC2037','Anti-STREP. DNAse B','',2,0),
(46,'LC2038','ANTI-STREPTOLYSIN 0*(ASOT)*','',2,0),
(47,'LC2039','Anti-Tetanus Toxoid IgG Ab.','',2,0),
(48,'LC2040','ANTITHROMBIN III FUNC','',2,0),
(49,'LC2041','APO A1 + APO B','',2,0),
(50,'LC2043','APOLIPOPROTEIN A1, serum','',2,0),
(51,'LC2044','APOLIPOPROTEIN B, serum','',2,0),
(52,'LC2045','AQUAPORIN-4 IFA','',2,0),
(53,'LC2046','ARSENIC BLOOD   (NIOH)','',2,0),
(54,'LC2047','ASOT Dnase B','',2,0),
(55,'LC2048','AST/ALT(SGOT/SGPT)','3200',2,0),
(56,'LC2049','ASTHMA RHINITIS YEAR ROUND','',2,0),
(57,'LC2050','ATYPICAL PNEMONIA SCR (SERO)','',2,0),
(58,'LC2051','AUTO IMMUNE HEPATITIS PROFILE','',2,0),
(59,'LC2052','AUTOIMMUNE ENCEPHALOPATHY','',2,0),
(60,'LC2053','AUTOIMMUNE SCREEN+ESRALIFAX','',2,0),
(61,'LC2054','B2-MICROGLOBULIN, urine','',2,0),
(62,'LC2055','B2-GLYCOPROTEIN 1 AB','',2,0),
(63,'LC2056','B2-MICROGLOBULIN - SERUM','',2,0),
(64,'LC2057','B2-MICROGLOBULIN (24hr)URINE','',2,0),
(65,'LC2058','BARBITURATE,SERUM','',2,0),
(67,'LC2059','BARBITURATES, urine','',2,0),
(68,'LM2060','BARTONELLA ANTIBODIES','',5,0),
(69,'LM2061','BASIC COAG SCREEN','',5,0),
(70,'LM2062','BENCE JONES PROTEIN, urine','',5,0),
(71,'LC2063','BENZODIAZEPENES, serum Qt','',2,0),
(72,'LM2064','BENZODIAZEPENES, Ur','',5,0),
(73,'LM2065','bHCG PREGNANCY SCREEN-S (QUAL)','',5,0),
(74,'LM2066','BILHARZIA ANTIBODIES','14500',5,0),
(75,'LC2067','BILIRUBIN total, SBR NEONATAL','3200',2,0),
(76,'LC2068','BILIRUBIN, Total & Direct','6400',2,0),
(77,'LC2069','BILIRUBIN, Total serum','3200',2,0),
(78,'LH2070','BLOOD GROUP + RHESUS + COOMBS','1500',1,0),
(79,'LC2071','BONE SPECIFIC ALK PHOS','',2,0),
(80,'LM2072','BORD.PERTUSSIS (IGM)','',5,0),
(81,'LM2073','BRUCELLA AB (AGG & ELISA)','',5,0),
(82,'LM2074','BRUCELLA IgG ELISA','',5,0),
(83,'LM2075','BRUCELLA IgM ELISA','',5,0),
(84,'L2076','C1 ESTERASE INHIBITOR, serum','',0,0),
(85,'LC2077','CA 72-4, serum','22600',2,0),
(86,'LC2078','Ca125, serum','22600',2,0),
(87,'LC2079','Ca153, serum','22600',2,0),
(88,'LC2080','Ca19-9, serum','22600',2,0),
(89,'LC2081','CADMIUM, blood','',2,0),
(90,'LC2082','CAERUPLASMIN, serum','',2,0),
(91,'LM2083','CALCIUM (EXCRETION),24Hr urine','',5,0),
(92,'LM2086','CALCIUM CREATE CLEARANCE RATIO','',5,0),
(93,'LC2087','CALCIUM, fluid','3960',5,0),
(94,'LC2088','CALCIUM/PHOSPHATE - serum','10260',2,0),
(95,'LC2089','CALPROTECTIN','',1,0),
(96,'LC2090','CANNABIS QUALITATIVE,urine','',1,0),
(97,'LC2091','CARBAMAZAPINE (TEGRETOL),serum','',1,0),
(98,'LM2092','CARBOXY-HAEMOGLOBIN','',5,0),
(99,'LC2092','CARCINO-EMBRYONIC ANTIG.(CEA)','',2,0),
(100,'LC2093','CARDIAC TROPONIN I','',2,0),
(101,'LM2094','CARDIOLIPIN AB (IGG, IGM,IGA)','',5,0),
(102,'LM2095','CD19-20 COUNT','',5,0),
(103,'LM2097','Cd4 COUNT','18600',5,0),
(104,'LM2098','Cd4-Cd8 COUNT','',5,0),
(105,'LM2099','Cd8 COUNT','',5,0),
(106,'LC2100','CEA/CA 19-9','20200',2,0),
(107,'LM2101','CELL COUNT, CSF','3200',5,0),
(108,'LM2102','CENTROMERE','',5,0),
(109,'LM2103','CEPHEID INFLUENZA A/H1N1','',5,0),
(110,'LC2104','CHEMISTRY -PLEURAL FLUID+ SERUM','',2,0),
(111,'LC2105','CHLAMYDIA ELISA (ABS)','',2,0),
(112,'LM2106','CHLAMYDIA PSITTACI ABS','',5,0),
(113,'LM2107','CHLAMYDIA.trachomatis ab.(IFA)','',5,0),
(114,'LC2108','CHLORIDE random, urine mmol/L','',2,0),
(115,'LC2109','CHLORIDE,24Hr urine','',2,0),
(116,'LC2110','CHLORIDE, fluid','3200',2,0),
(117,'LC2111','CHLORIDE, serum','3200',2,0),
(118,'LC2112','CHOLESTEROL, fluid','',2,0),
(119,'LC2113','CHOLESTEROL HDL (FASTING)','4800',2,0),
(120,'LC2114','CHOLESTEROL,ONLY FASTING serum','3200',2,0),
(121,'LC2115','CHOLESTEROL,ONLY RANDOM serum','3200',2,0),
(122,'LC2116','CHOLESTEROL,HDL (RANDOM) + CHOL','8000',2,0),
(123,'LC2117','CHOLINESTERASE, serum','',2,0),
(124,'LC2118','CHROMIUM, Total urine','',2,0),
(125,'LC2119','CHRONIC FATIGUE PROFILE','',2,0),
(126,'LC2120','CHRONIC HEPATITIS PROFILE','',2,0),
(127,'LM2121','CITRATE, 24 hr urine','',5,0),
(128,'LM2122','CITRATE,Random Urine,CR Ratio','',5,0),
(129,'LM2123','CMV - CSF','',5,0),
(130,'LM2124','CMV ABS - SERUM (IGG + IGM)','',5,0),
(131,'LM2125','CMV AVIDITY','',5,0),
(132,'LM2126','COBALT, urine','',5,0),
(133,'LC2127','COCAINE QUALITATIVE, urine','',2,0),
(134,'LC2128','COMPLENT C3, serum','',2,0),
(135,'LC2129','COMPLENT C3+c4, serum','',2,0),
(136,'LC2130','COMPLEMENT C4,serum','',2,0),
(137,'LC2131','COMPLEX PSA','',2,0),
(138,'LM2132','COPPER,24Hr urine','',5,0),
(139,'LC2133','CORTISOL BETHAMETHAZONE','',2,0),
(140,'LC2134','CORTISOL-SERUM','16450',2,0),
(141,'LC2135','COXSACKIE VIRUS - SERUM','',2,0),
(142,'LC2136','C-PEPTIDE RESPONSE TO ORAL GTT','20600',2,0),
(143,'LC2137','CPK,total','4800',2,0),
(144,'LC2138','CPK/CKMB','9600',2,0),
(145,'LM2139','CREATINE CL - COCKROFT','',2,0),
(146,'LC2140','CREATINE, 24Hr urine','3200',5,0),
(147,'LC2141','CREATININE, serum','3200',2,0),
(148,'LC2142','CREATINE, urine mmol/L','3200',2,0),
(149,'LM2143','CRYPTOCCAL ANTIGEN - CSF','11300',5,0),
(150,'LM2144','CRYPTOCCAL ANTIGEN - SERUM','11300',5,0),
(151,'LM2145','CSF AFP','',5,0),
(152,'LC2146','CSF BIOCHEM (PRO+CHLOR+GLUC)','9600',2,0),
(153,'LC2147','CSF CELL COUNT AND CHEMISTRY','',2,0),
(154,'LC2148','CSF CELL COUNT ONLY','3200',2,0),
(155,'LC2147','CSF FULL EXAMINATION','',2,0),
(156,'LC2149','CSF HCG','',2,0),
(157,'LM2150','CSF IGG INDEX ONLY','',5,0),
(158,'LM2151','CSF NO RPR','',5,0),
(159,'LC2152','CSF GLUCOSE','3200',2,0),
(161,'LM2153','C TERMINAL CROSSLINKS (serum) Fasting','',5,0),
(162,'LM2154','CYCLOPRORIN LEVELS','',5,0),
(163,'LM2155','CYSTICERCOSIS (AB) CSF','',5,0),
(164,'LC2156','CYSTICERCOSIS (AB) SERUM','',2,0),
(165,'LM2157','CYSTINE, urine QL','',5,0),
(166,'LM2158','CYTOMEGALO VIRUS IgG,serum','23180',5,0),
(167,'LM2159','CYTOMEGALO VIRUS IgM,serum','23180',5,0),
(168,'LC2160','DABIGATRAN','',2,0),
(169,'LC2161','D-DIMER TEST Quantitative','',2,0),
(170,'LC2162','DEHYDROEPIANDROGESTERONE (SERUM)','',2,0),
(171,'LC2163','DIC SCREEN','',2,0),
(172,'LC2164','DIGOXIN,serum','',2,0),
(173,'LM2165','DIRECT COOMBS TEST (DAT)','',5,0),
(174,'LC2166','DRUG SCREEN QUAL URINE','',2,0),
(175,'LC2167','DRUG SCREEN SERUM','',2,0),
(176,'LC2168','dsDNA','',2,0),
(177,'LM2169','E.HISTOLYTICA Ab Ha QL','',5,0),
(178,'LC2170','E2 (OESTRADIOL/ESTROGEN)','14000',2,0),
(179,'LC2161','E3 (OESTRIOL)','',2,0),
(180,'LC2162','EBV IGG','',2,0),
(181,'LM2163','EBV IGG+IGM - SERUM','',5,0),
(182,'LM2164','EBV IGG+IGM-CSF','',5,0),
(183,'LM2165','EBV IGM SERUM','',5,0),
(184,'LM2166','ECSTACY, urine','',5,0),
(185,'LC2167','ELECTROLYTES serum (NA,K,CL,urea, creat)','16000',2,0),
(186,'LC2168','ELECTROLYTES, 24Hr urine','',2,0),
(187,'LC2169','ELECTROLYTES, faecal','',2,0),
(188,'LC2170','ELECTROLYTES, random urine','',2,0),
(189,'LC2171','ELECTROPHORESIS, 24Hr urine','',2,0),
(190,'LC2172','ENA - CTD SCREEN','',2,0),
(191,'LC2173','ENA (EXTR.NUCLEAR AG) PROFILE','',2,0),
(192,'LC2174','ENDOCRINE INFERTILITY (FEMALE)','',2,0),
(193,'LC2175','ENDOCRINE INFERTILITY (MALE)','',2,0),
(194,'LC2176','ENDOMYSIUM ANTI-IGA','',2,0),
(195,'LC2177','EOSINIPHIL CATIONIC PROTEIN-S','',2,0),
(196,'LC2178','EPILIM (VALPROIC ACID), serum','',2,0),
(197,'LC2179','ERYTHROPOIETIN','',2,0),
(198,'LM2180','ESR (Alifax method)','1500',5,0),
(199,'LM2181','Extr.Nuclear Ag.Jo-1','',5,0),
(200,'LM2182','FACTOR II ASSAY','',5,0),
(201,'LM2183','FACTOR IX ASSAY','',5,0),
(202,'LM2184','FACTOR V ASSAY','',5,0),
(203,'LM2185','FACTOR VII ASSAY','',5,0),
(204,'LM2186','FACTOR X ASSAY','',5,0),
(205,'LM2187','FACTOR XI ASSAY','',5,0),
(206,'LM2188','FACTOR XII ASSAY','',5,0),
(207,'LM2189','FAECAL PH +RED. SUBSTANCES','',5,0),
(208,'LH2190','FBC & ESR(ALIFAX)','',1,0),
(209,'LH2191','FBC ONLY','3200',1,0),
(210,'LH2192','FBC ONLY - NO PLATELETS','3200',1,0),
(211,'LC2193','FEMALE HORMONE PROFILE','',2,0),
(212,'LH2194','FERRITIN-S','19600',2,0),
(213,'LM2195','FIBRINOGEN','',5,0),
(214,'LM2196','Flour.Trepon AB (FTA) - SERUM','20400',5,0),
(215,'LM2197','Flour.Trepon AB (FTA) - CSF','20400',5,0),
(216,'LC2198','FOLATE (SERUM AND RED CELL)','39950',2,0),
(217,'LC2199','FOLATE/VIT.B12 (BOTH)','42300',2,0),
(218,'LC2120','FOLATE-S (FOLIC ACID-SERUM)','36700',2,0),
(219,'LC2121','FOOD ALLERGY B/DOWN','',2,0),
(220,'LC2122','FRACTIONAL EXCRETION - SODIUM','',2,0),
(221,'LC2123','FRACTIONAL EXCRETION - URATE','',2,0),
(222,'LC2124','FREE PSA (FREE)','23750',2,0),
(223,'LC2125','FRUCTSAMINE','',2,0),
(224,'LC2126','FSH (FOLLITROPIN HORMONE)','12600',2,0),
(225,'LM2127','Fungitell Assay(1,3)-beta-D-GI','',5,0),
(226,'LC2128','GAMMA GT, serum','3200',2,0),
(227,'LC2129','GANGLIOSIDE AUTOANTIBODIES','',2,0),
(228,'LC2130','GAROIN, serum','',2,0),
(229,'LC2131','GASTRIC AB (ANTI PARIETAL CELL)','',2,0),
(230,'LC2132','GENTAMICIN, serum','',2,0),
(231,'LC2133','GLUCOSE (fasting) ','3200',2,0),
(232,'LC2134','GLUCOSE (random)','3200',2,0),
(233,'LC2135','GLUCOSE, fluid','3200',2,0),
(234,'LC2136','GLUTEN INTOLERANCE(ITTGA+IGLUA)','',2,0),
(235,'LC2137','GONOCOCCAL ANTIBODIES','',2,0),
(236,'LC2138','GROWTH HORMONE (RANDOM)-S','',2,0),
(237,'LC2139','GROWTH HORMONE-S,fasting','',2,0),
(238,'LH2140','HAEMOTOCRIT (HCT) PVC','3200',1,0),
(239,'LH2141','HAEMOGLOBIN','3200',1,0),
(240,'LM2142','HAPTOBLOBIN, serum','',5,0),
(241,'LM2143','Hb ELETROPHORESIS SCREEN','',5,0),
(242,'LM2144','Hb H INCLUSIONS','',5,0),
(243,'LH2145','HB/HCT ON FLUID','3200',1,0),
(244,'LH2146','Hb/PCV (HB + PCV + RBC + MCV)','',1,0),
(245,'LH2147','HB\\WBC AND DIFF','3200',1,0),
(246,'LC2148','HBA1C (GLYCATED), blood','13500',2,0),
(247,'LC2149','HDL,SERUM','4800',2,0),
(248,'LM2150','HEAVY METAL SCR (RANDOM UR)','',5,0),
(249,'LC2151','HELICOBACTER PYLORI Ab','',2,0),
(250,'LM2152','HEP A + B STATUS - Acute','',5,0),
(251,'LM2153','HEP A + B STATUS - Immune L','',5,0),
(252,'LM2154','HEP A B C STATUS (Prior Expos)','',5,0),
(253,'LM2155','HEP A IgG antibody','29800',5,0),
(254,'LM2156','HEP A IgM antibody','29800',5,0),
(255,'LM2157','HEP B CORE IGG Antibody','',5,0),
(256,'LM2158','HEP B CORE IgM Antibody','',5,0),
(257,'LM2159','HEP B STATUS - Acute','',5,0),
(258,'LM2160','HEP B SURFACE Ag/Ab Comb','',5,0),
(259,'LM2161','HEP B SURFACE ANTIBODY','',5,0),
(260,'LM2162','HEP B SURFACE Antibody Value','',5,0),
(261,'LM2163','HEP B SURFACE antigen','3500',5,0),
(262,'LM2164','HEP Be PROFILE (Ag+Ab)','',5,0),
(263,'LM2165','HEP C ANTIBODY','10300',5,0),
(264,'LM2166','HEP E ANTIBODY (IgG+IgM)','',5,0),
(265,'LM2167','HEP E IgG','',5,0),
(266,'LM2168','HEP E IgM','',5,0),
(267,'LM2169','HEPATITIS A IgG + IgM','',5,0),
(268,'LM2170','HEPATITIS A, B, C IMMUNITY','35000',5,0),
(269,'LM2171','HEPATITIS A, B IMMUNITY','',5,0),
(270,'LM2172','HEPATITIS B & C STATUS CHRONIC','',5,0),
(271,'LM2173','HERPES (IGG +IGM) SERUM','',5,0),
(272,'LM2174','HETEROPHILE ABS','',5,0),
(273,'LM2175','HISTONE Ab','',5,0),
(274,'LM2176','HISTOPLASMA ANTIBODIES','',5,0),
(275,'LM2177','HIV Drug Resit. INTERGRASE','',5,0),
(276,'LM2178','HIV Drug Resit. PROT+R TRANS','',5,0),
(277,'LM2179','HIV Drug Resit.REVERSE TRANS','',5,0),
(278,'LM2180','HIV ELISA','14900',5,0),
(279,'LM2181','HIV ELISA 1&2','',5,0),
(280,'LM2182','HIV monitoring (Rapid)','7500',5,0),
(281,'LM2183','HIV monitoring - Baseline','',5,0),
(282,'LM2184','HIV treatment - Ultrasensitive','',5,0),
(283,'LM2185','HIV treatment MONITORING - SP','',5,0),
(284,'LM2186','HOMA INDEX(FASTING-GLUC+INSUL)','',5,0),
(285,'LM2187','HSV 1&2 IgM,serum','',5,0),
(286,'LM2188','HUMAN T-LYMPHOTROPIC VIRUSI/II','',5,0),
(287,'LM2189','HYDATID Haemagglutination','',5,0),
(288,'LM2190','HYPONATREMIA (SODIUM)','',5,0),
(289,'LM2191','IGE ALCOHOL ALLERGENS','',5,0),
(290,'LM2192','IgE/PHADIOTOP','18675',5,0),
(291,'LM2193','IGG SUBCLASSES, serum','',5,0),
(292,'LM2194','IMMUNOTOXIFICATION, serum','',5,0),
(293,'LM2195','IMMUNOTOXIFICATION, urine','',5,0),
(294,'LM2196','IMMUNOGLOBULIN A, serum (IgG)','',5,0),
(295,'LM2197','IMMUNOGLOBULIN E-S','',5,0),
(296,'LM2198','IMMUNOGLOBULIN G, serum (IgG)','',5,0),
(297,'LM2199','IMMUNOGLOBULIN M, serum (IgM)','',5,0),
(298,'LM2200','IMMUNOGLOBULINS (IgA,IgG,IgM)','',5,0),
(299,'LM2201','INDIRECT COOMBS(AUTO-ANTIBODY)','',5,0),
(300,'LC2202','INSULIN (RANDOM)','1800',2,0),
(301,'LC2203','INSULIN, SERUM,fasting','1800',2,0),
(302,'LC2204','INTERLEUKIN 6','',2,0),
(303,'LM2205','INTRINSCI FACTOR ANTIBODIES','',5,0),
(304,'LC2206','IRON + TRANSFERRIN (Incl %SAT)','',2,0),
(305,'LC2207','IRON STATUS(Fe, TRANSF, %SAT,FER','',2,0),
(306,'LC2208','IRON, serum','24500',2,0),
(307,'LC2209','KLEIHAUER','',2,0),
(308,'LM2210','LACTOSE TOLERANCE TEST','',5,0),
(309,'LM2211','LAMELLAR (AMINIO PLATELET COUNT)','',5,0),
(310,'LC2212','LAMICTIN (SERUM)','',2,0),
(311,'LC2213','LDH (LACTATE DEHYDROGENASE) se','4400',2,0),
(312,'LC2214','LDH, fluid','4400',2,0),
(313,'LC2215','LDL, SERUM','4400',2,0),
(314,'LC2216','LEAD, blood ug/dL','',2,0),
(315,'LM2217','LEGIONNAIRES IFA (ANTIBODIES)','',5,0),
(317,'LC2219','LFT (LIVER FUNCTION)','25600',2,0),
(318,'LC2220','LIPASE, serum','',2,0),
(319,'LC2221','LFT ENZYMES (SGPT,SGOT,AGP,GGT)','13800',2,0),
(320,'LC2222','LIVER FUNCTION','25600',2,0),
(321,'LC2223','LKM','',2,0),
(322,'LC2224','LUTROPIN (LH)-S','',2,0),
(323,'LM2225','LYME DISEASE antibodies','',5,0),
(324,'LM2226','LYMPHOCYTE MARKERS','',5,0),
(325,'LM2227','MACROPROLACTIN ASSAY','',5,0),
(326,'LM2228','MAGNESIUM random, urine','',5,0),
(327,'LM2229','MAGNESIUM, 24Hr urine','',5,0),
(328,'LC2230','MAGNESIUM, RBC','',2,0),
(329,'LC2231','MAGNESIUM, serum','6000',2,0),
(330,'LM2232','MALARIA ANTIGEN','2500',5,0),
(331,'LM2233','MALARIA SCR (THICK+THIN+ICT)','1500',5,0),
(332,'LM2234','MALIGNANT MELANOMA S- 100B','',5,0),
(333,'LC2235','MANGANESE,blood','',2,0),
(334,'LM2236','MCV (MEAN CELL VOLUME)','3200',5,0),
(335,'LM2237','MEASLES ABS - CSF (IGG +IGM)','',5,0),
(336,'LM2238','MEASLES ABS -SERUM (IGG +IGM)','',5,0),
(337,'LM2239','MEASLES IgG ONLY','',5,0),
(338,'LM2240','MEASLES IgM ONLY','23180',5,0),
(339,'LM2241','MENOPAUSAL SCREEN (E2/FSH/LH)','23180',5,0),
(340,'LM2242','METHADONE, URINE','',5,0),
(341,'LM2243','METHAQUALONE, URINE','',5,0),
(342,'LM2244','METHOTREXATE','',5,0),
(343,'LM2245','MICROFILARIA SCREEN','',5,0),
(344,'LM2246','MITOCHONDRIAL IFA (ANTIBODIES)','',5,0),
(345,'LM2247','MUCOPOLYSACHARIDE URINE','',5,0),
(346,'LM2248','MUMPS ABS (IgG + IgM) SERUM','',5,0),
(347,'LM2249','MUMPS ABS (IgG) SERUM','',5,0),
(348,'LM2250','MUMPS antibodies - CSF','',5,0),
(349,'LM2251','Mycoplasma (IGG +IGM) ABS','',5,0),
(350,'LM2252','MYCOPLASMA IgG','',5,0),
(351,'LM2253','MYCOPLASMA IgM','',5,0),
(352,'LM2254','MYELOMA PROF.(BLOOD + URINE)','',5,0),
(353,'LM2255','MYELOMA PROF. MODIFIED (SERUM)','',5,0),
(354,'LM2256','MYELOMA PROFILE','',5,0),
(355,'LC2257','MYOGLOBIN','',2,0),
(356,'LM2258','MYOGLOBIN, urine','',5,0),
(357,'LM2259','NEPHRITIS SCREEN','',5,0),
(358,'LM2260','NUTRILAB PROFILE','',5,0),
(359,'LM2261','ONCOLOGY PROFILE','',5,0),
(360,'LM2262','OPIATES,urine','',5,0),
(361,'LM2263','OSMOLALITY, faecal','',5,0),
(362,'LM2267','OSMOLALITY, serum','',2,0),
(363,'LM2268','OSMOLALITY, urine','',5,0),
(364,'LM2269','OSMOLAR GAP (INCL NA +K)','',5,0),
(365,'LM2270','OSTEOCALCIN-S','',5,0),
(366,'LM2271','OVARY/TESTICULAR IFA','',5,0),
(367,'LC2272','OXALATE, 24Hr urine','',2,0),
(368,'LC2273','OXALATE, Random Urine, CR Ratio','',2,0),
(369,'LM2274','P.VIVAX ANTIGEN TEST','',5,0),
(370,'LM2275','P24 Antigen - CFS','',5,0),
(371,'LM2276','P24 ANTIGEN - SERUM','',5,0),
(372,'LM2277','PANCREAS IFA','',5,0),
(373,'LC2278','PARACETAMOL, serum','',2,0),
(374,'LM2279','MICRO U-ALBUMIN 24 HR','',5,0),
(375,'LM2280','PARANEOPLASTIC AB','',5,0),
(376,'LC281','PARATHORMONE','',2,0),
(377,'LC2282','PARATHORMONE-S (PTH)','',2,0),
(378,'LM2283','PARTENITY REQUEST','',5,0),
(379,'LM2284','PAUL BUNNEL TEST','',5,0),
(380,'LM2285','PCR - ADENOVIRUS QUALITATIVE','',5,0),
(381,'LM2286','PCR - Apolipoprotein E-ALZHEIM','',5,0),
(382,'LM2287','PCR - Atypical pneumonia scr','',5,0),
(383,'LM2288','PCR - BK VIRUS Qnt','',5,0),
(384,'LM2289','PCR - Bordetella QI','',5,0),
(385,'LM2290','PCR - BRAF V600E','',5,0),
(386,'LM2291','PCR - CARBAPENEMASE (NDM1)','',5,0),
(387,'LM2292','PCR - Chlamydia trachomatis','',5,0),
(388,'LM2293','PCR - Chlamydophila pneumoniae','',5,0),
(389,'LM2294','PCR - CMV Quantitative','',5,0),
(390,'LM2295','PCR - CSF Virus Panel','',5,0),
(391,'LM2296','PCR - CYSTIC FIBRORIS FULL','',5,0),
(392,'LM2297','PCR - EBV Viral Load','',5,0),
(393,'LM2298','PCR - EGFR','',5,0),
(394,'LM2299','PCR - Enterovirus','',5,0),
(395,'LM2300','PCR - Flu Virus Panel','',5,0),
(396,'LM2301','PCR - Gonococcal','',5,0),
(397,'LM2302','PCR - HAEMOCHROMATOSIS','',5,0),
(398,'LM2303','PCR - HVC GENOTYPE','',5,0),
(399,'LM2304','PCR - Hep B Qualitative','',5,0),
(400,'LM2305','PCR - Hep B Quant (V.Load)','',5,0),
(401,'LM2306','PCR - Hep C Qualitative','',5,0),
(402,'LM2307','PCR - Hep C Quant (V.Load)','',5,0),
(403,'LM2308','PCR - Herpes 1 & 2','',5,0),
(404,'LM2309','PCR - HIV DNA Qualitative','',5,0),
(405,'LM2310','PCR - HIV treatment - Base ABB','',5,0),
(406,'LM2311','PCR - HIV treatment - Baseline','',5,0),
(407,'LM2312','PCR - HIV-1 DNA Qualitative','',5,0),
(408,'LM2313','PCR - HIV-1 QUANTITATIVE','',5,0),
(409,'LM2314','PCR - HIV-2 Qualitative','',5,0),
(410,'LM2315','PCR - HLA B27','',5,0),
(411,'LM2315','PCR - JAK2 V617F','',5,0),
(412,'LM2316','PCR - JC Virus QI','',5,0),
(413,'LM2317','PCR - KRAS','',5,0),
(414,'LM2318','PCR - Legionella pneumophilla','',5,0),
(415,'LM2319','PCR - MALARIA SPP','',5,0),
(416,'LM2320','PCR - MTHFR','',5,0),
(417,'LM2321','PCR - MUMPS - SALIVA/URINE','',5,0),
(418,'LM2322','PCR - Mycoplasma pneumonaie','',5,0),
(419,'LM2323','PCR - Parvovirus B19 Qual','',5,0),
(420,'LM2324','PCR - Pneumocystis carinii','',5,0),
(421,'LM2325','PCR - Porphyria','',5,0),
(422,'LM2326','PCR - Prothrombin & APCR','',5,0),
(423,'LM2327','PCR - Prothrombin G20210A','',5,0),
(424,'LM2328','PCR - Respiratory Syntical Vir','',5,0),
(425,'LM2329','PCR - Respiratory Viruses','',5,0),
(426,'LM2330','PCR - TB HISTO BLOCK','',5,0),
(427,'LM2331','PCR - Tick Bite Fever','',5,0),
(428,'LM2332','PCR - Varicella Zoster virus','',5,0),
(429,'LM2333','PCR BCR/ABL fusion gene','',5,0),
(430,'LM2334','PCR Clonial Ig Heavy Chain gene','',5,0),
(431,'LM2335','PCRCMV Qnt (Viral Load)','',5,0),
(432,'LM2336','PCR E. COLI (EPEC)','',5,0),
(433,'LM2337','PCR HPV (16/18)COBAS (LBC)','',5,0),
(434,'LM2338','PCR HPV swab/histo block','',5,0),
(435,'LM2339','PCR TCRG gene rearrangements','',5,0),
(436,'LM2340','PCR URETHRITIS PANEL','',5,0),
(437,'LM2341','PENTACHLOROPHENOL BL','',5,0),
(438,'LM2342','PH, faecal','',5,0),
(439,'LM2343','PH, fluid','',5,0),
(440,'LM2344','PH, urine','1000',5,0),
(441,'LM2345','PHADIOTOP-S (Aeroallergen scr)','35200',5,0),
(442,'LM2346','PHENCYCLIDINE, URINE','',5,0),
(443,'LC2347','PHENOBARBITONE, serum ','',2,0),
(444,'LC2348','PHENYTOIN, serum','',2,0),
(445,'LC2349','PHOSPHATE inorganic, serum','6300',2,0),
(446,'LM2350','PHOSPHATE, 24 Hr urine','6300',5,0),
(447,'LM2351','PINEAL TUMOUR PROFILE CSF','',5,0),
(448,'LC2352','PLASMINOGEN','',2,0),
(449,'LH2353','PLATELET COUNT (AUTO)','3200',1,0),
(450,'LM2354','PM ScI','',5,0),
(451,'LM2355','PORPHYRIN SCREEN(BLD/UR/F)','',5,0),
(452,'LM2356','PORPHYRIN SCREEN, blood','',5,0),
(453,'LM2357','PORPHYRIN SCREEN, faecal','',5,0),
(454,'LM2358','POTASSIUM random, urine mmol/L','3200',5,0),
(455,'LM2359','POTASSIUM, 24Hr URINE','',5,0),
(456,'LC2360','POTASSIUM, faecal','',2,0),
(457,'LC2361','POTASSIUM, fluid','3200',2,0),
(458,'LC2362','POTASSIUM, serum','3200',2,0),
(459,'LC2363','PREALBUMIN, FASTING','',2,0),
(460,'LM2364','PREGNANCY SCREEN U-BHCG','',5,0),
(461,'LC2365','PREGNANCY T4/FREE THYROXINE','',2,0),
(462,'LC2366','PREGNANCY THYROTROPIN (TSH)-S','12600',2,0),
(463,'LM2367','PROBNP (BRAIN NATURETIC PEPTID)','',5,0),
(464,'LC2368','PROCALCITONIN, QUANTITATIVE','',2,0),
(465,'LC2369','PROCALCITONIN, QUALITATIVE(Rapid)','',2,0),
(466,'LC2370','PROGESTERONE-S','12600',2,0),
(467,'LC2371','PROLACTIN-S','12600',2,0),
(468,'LM2372','PROPOXYPHENE, URINE','',5,0),
(469,'LC2373','PROTEIN C FUNC','',2,0),
(470,'LM2374','PROTEIN ELECTROPHOR+IMMUNO','',5,0),
(471,'LM2374','PROTEIN ELECTROPHORESIS, fluid','',5,0),
(472,'LC2375','PROTEIN S','',2,0),
(473,'LM2376','PROTEIN, urine (quantative)','',5,0),
(474,'LC2377','PROTEIN/CREATINE RATIO,urine','',2,0),
(475,'LM2378','PROTEIN/OSMOLALITY RATIO,urine','',5,0),
(476,'LM2379','PROTHROMBIN ANTIBODIES','',5,0),
(477,'LC2380','PSA(ONLY - NO FREE PSA REFLX)','',2,0),
(478,'LC2381','PSA(+FREE PSA if TOTAL 2.6-10','',2,0),
(479,'LM2382','Q-FEVER SCREEN(BURNET IGG+IGM)','17600',5,0),
(480,'LC2383','QUANTITATIVE HCG','17600',2,0),
(481,'LC2384','QUANTITATIVE D-DIMER','',2,0),
(482,'LC2385','QUANTITATIVE HCG, Tumour marker','',2,0),
(483,'LM2386','RAST ABOLONE (PERLEMOEN) f346','',5,0),
(484,'LM2387','RAST AMOXYCILLIN  C6','',5,0),
(485,'LM2388','RAST AMPICILIN c5','',5,0),
(486,'LM2389','RAST ANCHOVY    Rf313','',5,0),
(487,'LM2390','RAST ANIMAL DANDER','',5,0),
(488,'LM2391','RAST APPLE  f49','',5,0),
(489,'LM2392','RAST APRICOT   f237','',5,0),
(490,'LM2393','RAST ASCARIS     p1','',5,0),
(491,'LM2394','RAST ASPERGILLUS FUMIGATUS  M3','',5,0),
(492,'LM2395','RAST AVOCADO   f96','',5,0),
(493,'LM2396','RAST BANANA    f92','',5,0),
(494,'LM2397','RAST BARLEY   f6','',5,0),
(495,'LM2398','RAST BEE VENOM   i1','',5,0),
(496,'LM2399','RAST BEEF   f27','',5,0),
(497,'LM2400','RAST BEER ALLERGENS','',5,0),
(498,'LM2401','RAST BEETROOT   f319','',5,0),
(499,'LM2402','RAST BLUE MUSSEL   f37','',5,0),
(500,'LM2403','RAST BUCKWHEAT f11','',5,0),
(501,'LM2404','RAST BUDGE DROPPINGS   e77','',5,0),
(502,'LM2405','RAST CABBAGE   f216','',5,0),
(503,'LM2406','RAST CAGE BIRD  ex72','',5,0),
(504,'LM2407','RAST CANDIDA albicans   m5','',5,0),
(505,'LM2408','RAST CAROB   F296','',5,0),
(506,'LM2409','RAST CARROT   f31','',5,0),
(507,'LM2410','RAST CASEIN   f78','',5,0),
(508,'LM2411','RAST CASHEW NUT   f202','',5,0),
(509,'LM2412','RAST CAT DANDER  e1','',5,0),
(510,'LM2413','RAST CAT rFEL D 4   E228','',5,0),
(511,'LM2414','RAST CAULIFLOWER   Rf291','',5,0),
(512,'LM2415','RAST CCD  o214','',5,0),
(513,'LM2416','RAST CELERY   f85','',5,0),
(514,'LM2417','CEPHALOSPORIN  Rc7','',5,0),
(515,'LM2418','RAST CEREAL MIX FULL   fx3','',5,0),
(516,'LM2419','RAST CHEDDAR CHEESE  f81','',5,0),
(517,'LM2420','RAST CHERRY   f73','',5,0),
(518,'LM2421','RAST CHICKEN MEAT  f83','',5,0),
(519,'LM2422','RAST CHRYSANTHENUM   w7','',5,0),
(520,'LM2423','RAST CITRUS SCREEN','',5,0),
(521,'LM2424','RAST CLAM   f207','',5,0),
(522,'LM2425','RAST CLOVE    Rf286','',5,0),
(523,'LM2426','RAST COCKROACH   i6','',5,0),
(524,'LM2427','RAST COCKROACH (ORIENTAL) i207','',5,0),
(525,'LM2428','RAST COCOA  f93','',5,0),
(526,'LM2429','RAST COD FISH PARVALBUMIN f426','',5,0),
(527,'LM2430','RAST COFFEE  f221','',5,0),
(528,'LM2431','RAST COTTON (CRUDE)  o1','',5,0),
(529,'LM2432','RAST COW DANDER     e4','',5,0),
(530,'LM2434','RAST CRAB   f24','',5,0),
(531,'LM2435','RAST CAYFISH FAMILY   f80','',5,0),
(532,'LM2436','RAST CUCUMBER    Rf244','',5,0),
(533,'LM2437','RAST CURRY  Rf281','',5,0),
(534,'LM2438','RAST DAIRY PRODUCTS','',5,0),
(535,'LM2439','RAST DANDELION w6','',5,0),
(536,'LM2440','RAST DOG DANDER   e5','',5,0),
(537,'LM2441','RAST DOG nCAN f 3    E221','',5,0),
(538,'LM2442','RAST DOG nCAN f 5    E226','',5,0),
(539,'LM2443','RAST DUST MIX hx2','',5,0),
(540,'LM2444','RAST EGG ALBUMIN ONLY f1','',5,0),
(541,'LM2445','RAST EGG WHITE & YELLOW F1+F75','',5,0),
(542,'LM2446','RAST EGG YOLK  f75','',5,0),
(543,'LM2447','RAST EPICOCCUM MOULD  m14','',5,0),
(544,'LM2448','RAST  ETHYLENE OXIDE   k78','',5,0),
(545,'LM2449','RAST FEATHERS - BUDGIE    e78','',5,0),
(546,'LM2450','RAST FEATHERS - CHICKEN    e85','',5,0),
(547,'LM2451','RAST FEATHERS - DUCK   e86','',5,0),
(548,'LM2452','RAST FEATHERS - FULL','',5,0),
(549,'LM2453','RAST FEATHERS - GOOSE    e70','',5,0),
(550,'LM2454','RAST FEATHERS - PARROT     e215','',5,0),
(551,'LM2455','RAST FEATHERS - TURKEY  e89','',5,0),
(552,'LM2456','RAST FISH (COD)  f3','',5,0),
(553,'LM2457','RAST FOOD MIX fx5','',5,0),
(554,'LM2458','RAST FRUIT MIX 1  fx15','',5,0),
(555,'LM2457','RAST FRUIT MIX 2  fx16','',5,0),
(556,'LM2458','RAST GARLIC    f47','',5,0),
(557,'LM2459','RAST GARMET SCREEN','',5,0),
(558,'LM2460','RAST GLUTEN  f79','',5,0),
(559,'LM2461','RAST GOATSMILK   f300','',5,0),
(560,'LM2462','RAST GRANADILLA   f259','',5,0),
(561,'LM2463','RAST GRAPE   f259','',5,0),
(562,'LM2464','RAST GRAPEFRUIT    f209','',5,0),
(563,'LM2465','RAST GRASS - BERMUDA  g2','',5,0),
(564,'LM2466','RAST GRASS - RYE   g5','',5,0),
(565,'LM2467','RAST GRASS - TIMOTHY   G6','',5,0),
(566,'LM2468','RAST GRASS - SCR(BER,RYE,TIM)gx2','',5,0),
(567,'LM2469','RAST GREEN BEAN   Rf315','',5,0),
(568,'LM2470','RAST GREEN PEPPER   Rf263','',5,0),
(569,'LM2471','RAST GUAVA   f292','',5,0),
(570,'LM2472','RAST GUINEA PIG   e6','',5,0),
(571,'LM2473','RAST HAKE    rf307','',5,0),
(572,'LM2474','RAST HAMSTER     e84','',5,0),
(573,'LM2475','RAST HERRING       f205','',5,0),
(574,'LM2476','RAST HONEY     Rf247','',5,0),
(575,'LM2477','RAST HOPPS     rf324','',5,0),
(576,'LM2478','RAST HORNET - WHITE','',5,0),
(577,'LM2479','RAST HORNET - YELLOW','',5,0),
(578,'LM2480','RAST HORSE DANDER','',5,0),
(579,'LM2481','RAST HOUSE DUST MITE','',5,0),
(580,'LM2482','RAST HOUSE DUST MITE GROUP','',5,0),
(581,'LM2483','RAST HOUSE DUST MITE 1','',5,0),
(582,'LM2484','RAST HOUSE DUST MITE 2','',5,0),
(583,'LM2485','RAST HOUSE DUST MITE 74','',5,0),
(584,'LM2486','RAST INHALANTS','',5,0),
(585,'LM2487','RAST INSULIN HUMAN','',5,0),
(586,'LM2488','RAST ISOCYANATE HDI','',5,0),
(587,'LM2489','RAST ISOCYANATE MDI','',5,0),
(588,'LM2490','RAST ISOCYANATE TDI','',5,0),
(589,'LM2491','RAST KIWI FRUIT','',5,0),
(590,'LM2492','RAST LACTALBUMIN','',5,0),
(591,'LM2493','RAST LACTOGLOGULIN','',5,0),
(592,'LM2494','RAST LATEX','',5,0),
(593,'LM2495','RAST LEMON','',5,0),
(594,'LM2496','RAST LENTILS','',5,0),
(595,'LM2497','RAST LETTUCE','',5,0),
(596,'LM2498','RAST MAIZE','',5,0),
(597,'LM2499','RAST MAIZE POLLEN','',5,0),
(598,'LM2500','RAST MALT','',5,0),
(599,'LM2501','RAST MANGO','',5,0),
(600,'LM2502','RAST MELON','',5,0),
(601,'LM2503','RAST MILK','',5,0),
(602,'LM2504','RAST MIXED EPITHELIUM','',5,0),
(603,'LM2505','RAST MIXED FRUIT','',5,0),
(604,'LM2506','RAST MIXED VEGETABLES','',5,0),
(605,'LM2507','RAST MOSQUITO SPP','',5,0),
(606,'LM2508','RAST MOULD - MIXED','',5,0),
(607,'LM2509','RAST MOULD ALTENARIA tetius m6','',5,0),
(608,'LM2510','RAST MOULD CHEESE','',5,0),
(609,'LM2511','RAST MOULD CURVULATA LUNATAM16','',5,0),
(610,'LM2512','RAST MOULD HELMINNTHOSPORIUM','',5,0),
(611,'LM2513','RAST MOULD PHOMA BETAE','',5,0),
(612,'LM2514','RAST MOULD POLLULANS','',5,0),
(613,'LM2516','RAST MOULD-C.herbarum','',5,0),
(614,'LM2517','RAST MOULD-PENICILLIUM.notatum','',5,0),
(615,'LM2518','RAST MUSHROOM','',5,0),
(616,'LM2519','RAST MUTTON','',5,0),
(617,'LM2520','RAST nGly M5 B-CONGLYCININf431','',5,0),
(618,'LM2521','RAST NUT - ALMOND','',5,0),
(619,'LM2522','RAST NUT - BRAZIL','',5,0),
(620,'LM2523','RAST NUT - COCONUT','',5,0),
(621,'LM2524','RAST NUT - HAZEL','',5,0),
(622,'LM2525','RAST NUT - MIX - FULL','',5,0),
(623,'LM2526','RAST NUT - PECAN','',5,0),
(624,'LM2527','RAST NUT - WALNUT','',5,0),
(625,'LM2528','RAST NUT MIX','',5,0),
(626,'LM2529','RAST OATS','',5,0),
(627,'LM2530','RAST OMEGA 5 GLIADIN','',5,0),
(628,'LM2531','RAST ONION','',5,0),
(629,'LM2532','RAST ORANGE','',5,0),
(630,'LM2533','RAST OVOMUCOID','',5,0),
(631,'LM2534','RAST OYSTER','',5,0),
(632,'LM2535','RAST PAPRIKA','',5,0),
(633,'LM2536','RAST PAWPAW','',5,0),
(634,'LM2537','RAST PEA','',5,0),
(635,'LM2538','RAST PEACH','',5,0),
(636,'LM2539','RAST PEACH PROFILIN','',5,0),
(637,'LM2540','RAST PEANUT rAra h1','',5,0),
(638,'LM2541','RAST PEANUT rAra h3','',5,0),
(639,'LM2542','RAST PEANUT rAra h9','',5,0),
(640,'LM2543','RAST PEAR','',5,0),
(641,'LM2544','RAST PENICILIN G + V(BOTH)','',5,0),
(642,'LM2545','RAST PENICYLLOYL G ONLY','',5,0),
(643,'LM2546','RAST PENICYLLOYL V ONLY','',5,0),
(644,'LM2547','RAST PHTHALIC ANHYDRIDE','',5,0),
(645,'LM2548','RAST PIGEON DROPPINGS','',5,0),
(646,'LM2549','RAST PINEAPPLE','',5,0),
(647,'LM2550','RAST PISTACHIO NUT','',5,0),
(648,'LM2551','RAST PLANTAIN','',5,0),
(649,'LM2552','RAST PLUM','',5,0),
(650,'LM2553','RAST POLLEN SCR (BER/TIM/TREE)','',5,0),
(651,'LM2554','RAST PORK','',5,0),
(652,'LM2556','RAST POTATO','',5,0),
(653,'LM2557','RAST PRIVET','',5,0),
(654,'LM2558','RAST PUMPKIN','',5,0),
(655,'LM2559','RAST RABBIT EPITHELIUM','',5,0),
(656,'LM2560','RAST RAGWEED','',5,0),
(657,'LM2561','RAST RECOMBINAN BEE VENOM','',5,0),
(658,'LM2562','RAST RGLY M 4 PR-10 SOY','',5,0),
(659,'LM2563','RAST RHIZ.nigricans','',5,0),
(660,'LM2564','RAST RICE','',5,0),
(661,'LM2565','RAST RYE','',5,0),
(662,'LM2566','RAST SALMON','',5,0),
(663,'LM2567','RAST SCHISTOSOMA','',5,0),
(664,'LM2568','RAST SEAFOOD MIX- FULL SCREEN','',5,0),
(665,'LM2569','RAST SESAME SEED','',5,0),
(666,'LM2570','RAST SHEEP WOOL','',5,0),
(667,'LM2571','RAST SHELLFISH SCREEN','',5,0),
(668,'LM2572','RAST SHRIMP','',5,0),
(669,'LM2573','RAST SOLID.vigaurea','',5,0),
(670,'LM2574','RAST SOYA BEAN','',5,0),
(671,'LM2575','RAST SPICE MIX','',5,0),
(672,'LM2576','RAST SPINACH','',5,0),
(673,'LM2577','RAST SQUID','',5,0),
(674,'LM2578','RAST STRAWBERRY','',5,0),
(675,'LM2579','RAST SUNFLOWER SEED','',5,0),
(676,'LM2580','RAST TANGERINE','',5,0),
(677,'LM2581','RAST TEA','',5,0),
(678,'LM2582','RAST TOBACCO LEAF','',5,0),
(679,'LM2583','RAST TOMATO','',5,0),
(680,'LM2584','RAST TREE - ACACIA(wattle)','',5,0),
(681,'LM2585','RAST TREE - COTTONWOOD','',5,0),
(682,'LM2586','RAST TREE - ELM','',5,0),
(683,'LM2587','RAST TREE - EUCALYPTUS','',5,0),
(684,'LM2588','RAST TREE - MELALUEUCA','',5,0),
(685,'LM2589','RAST TREE - OAK','',5,0),
(686,'LM2590','RAST TREE - OLIVE','',5,0),
(687,'LM2591','RAST TREE - PLANE','',5,0),
(688,'LM2592','RAST TREE - WHITE PINE','',5,0),
(689,'LM2593','RAST TREE - WILLOW','',5,0),
(690,'LM2594','RAST TREE - POLLEN MIX 1','',5,0),
(691,'LM2595','RAST TREE - POLLEN MIX 2','',5,0),
(692,'LM2596','RAST TROUT','',5,0),
(693,'LM2597','RAST TUNA','',5,0),
(694,'LM2598','RAST VANILLA','',5,0),
(695,'LM2599','RAST VEGTABLE MIX 1','',5,0),
(696,'LM2600','RAST VEGTABLE MIX 2','',5,0),
(697,'LM2601','RAST WASP - PAPER','',5,0),
(698,'LM2602','RAST WASP (COMMON)','',5,0),
(699,'LM2603','RAST WATERMELON','',5,0),
(700,'LM2604','RAST WEED POLLEN MIX','',5,0),
(701,'LM2605','RAST WHEAT','',5,0),
(702,'LM2606','RAST WHEAT rTri a14','',5,0),
(703,'LM2607','RAST WHEY','',5,0),
(704,'LM2608','RAST WHITE BEAN','',5,0),
(705,'LM2609','RAST WINE ALLERGENS','',5,0),
(706,'LM2610','RAST YEAST','',5,0),
(707,'LH2611','RBC','3200',1,0),
(708,'LC2612','RED CELL FOLATE','',2,0),
(709,'LM2613','rENAL STONE SCREEN IN BLOOD','',5,0),
(710,'LM2614','RESPIRATORY SYNCYTICAL VIRUS','',5,0),
(711,'LM2615','RETICULIN ANTIBODIES','',5,0),
(712,'LM2616','RETICULOCYTES','',5,0),
(713,'LM2617','Rhesus (D) only','1500',5,0),
(714,'LM2618','RHEUMATOID ARTHRITIS (FACTOR)','',5,0),
(715,'LM2619','Rheumatiod Factor (RHEUMATON)','5500',5,0),
(716,'LM2620','RIB-P','',5,0),
(717,'LM2621','RICKETTSIAL SCREEN','',5,0),
(718,'LM2622','RNP - ENA','',5,0),
(719,'LM2623','RPR (VDRL) ONLY - SERUM','',5,0),
(720,'LM2624','RUBELLA (IGG+ IGM) - SERUM','',5,0),
(721,'LM2625','RUBELLA CSF IGG+ IGM','',5,0),
(722,'LM2626','RUBELLA IgG - SERUM','23180',5,0),
(723,'LM2627','RUBELLA IgM - SERUM','23180',5,0),
(724,'LM2628','S- 100B Trauma','',5,0),
(725,'LM2629','SA TREE POLLEN SCREEN','',5,0),
(726,'LC2630','SALICYLATE,serum','',2,0),
(727,'LM2631','SALIVARY DUCT IFA','',5,0),
(728,'LM2632','SECRETORY IGA','',5,0),
(729,'LM2633','SEX HORMONE BINDING GLOBULIN','',5,0),
(730,'LM2634','SEXUAL HEALTH SCREEN (Excl HIV)','',5,0),
(731,'LM2635','SEXUAL HEALTH SCREEN (Incl HIV)','',5,0),
(732,'LC2636','SGOT/AST','3200',2,0),
(733,'LC2637','SGPT/ALT','3200',2,0),
(734,'LM2638','SHBG/FREE TEST (INDEX+DERIVED)','',5,0),
(735,'LM2639','SIROLIMUS LEVELS','',5,0),
(736,'LM2640','SM - ENA','',5,0),
(737,'LM2641','SMOOTH MUSCLE (ANTIBODIES)','',5,0),
(738,'LC2642','SODIUM random, urine mmol/L','3200',2,0),
(739,'LC2643','SODIUM, 24 Hr urine','3200',2,0),
(740,'LC2644','SODIUM, faecal','3200',2,0),
(741,'LC2645','SODIUM, serum','3200',2,0),
(742,'LM2646','SOLUBLE TRANSFERRIN RECEPTOR','',5,0),
(743,'LM2647','SOMATOMEDIN-C','',5,0),
(744,'LM2648','SPEERM ANTIBODY SERUM','',5,0),
(745,'LM2649','SSA - ENA','',5,0),
(746,'LM2650','SSA - ENA','',5,0),
(747,'LM2651','STONE ANALYSIS','',5,0),
(748,'LM2652','STONE WORKUP(24hU/BLD/RAND U)','',5,0),
(749,'LM2654','SYPHILLIS (RPR + T.PLLID)SERUM','',5,0),
(750,'LC2655','TACROLIMUS, blood','68100',2,0),
(751,'LM2656','T-CELL PROFILE','',5,0),
(752,'LC2657','TESTIS TUMOUR MARKER','',2,0),
(753,'LM2658','TESTOSTERONE (FREE TEST.INDEX)','',5,0),
(754,'LC2659','TESTOSTERONE (TOTAL)','14000',2,0),
(755,'LC2660','THEOPHYLLINE,serum','',2,0),
(756,'LM2661','THROMBOSIS SCR(VENOUS+MUTATION)','',5,0),
(757,'LC2662','THYROGLOBULIN','',2,0),
(758,'LM2663','THYROID PROF.incl TSH/T4 (NO A)','25200',5,0),
(759,'LM2664','TISSUE TRANSLUTAMINASE IgA+G','',5,0),
(760,'LM2665','TROBRAMYCIN, serum','',5,0),
(761,'LM2666','TOTAL CO2 (bicarbonate), serum','',5,0),
(762,'LC2667','TOTAL PROTEIN, 24Hr urine','',2,0),
(763,'LC2668','TOTAL PROTEIN, CSF','3200',2,0),
(764,'LC2669','TOTAL PROTEIN, fluid','3200',2,0),
(765,'LC2670','TOTAL PROTEIN, serum','3200',2,0),
(766,'LM2671','TOXOPLASMA - CSF','23180',5,0),
(767,'LM2672','TOXOPLASMA - SERUM','23180',5,0),
(768,'LM2673','TOXOPLASMA - IgG,serum','23180',5,0),
(769,'LM2674','TOXOPLASMA - IgM,serum','23180',5,0),
(770,'LC2675','TRANSFERRIN, serum','',2,0),
(771,'LC2676','TRANSPLANT UREA + K + CREAT','',2,0),
(772,'LC2677','TRYCILIC ANTIDEPRESSANTS, serum','',2,0),
(773,'LC2678','TRYGLYCERIDE, fluid','',2,0),
(774,'LC2679','TRYGLYCERIDE, SERUM','',2,0),
(775,'LM2680','TRYPANOSOME SCREEN (THICK+THIN)','',5,0),
(776,'LC2681','TSH &T4','39600',2,0),
(777,'LC2682','TSH RECEPTOR AB','25200',2,0),
(778,'LC2683','U & E PROFILE (NA,K,CRE)','16000',2,0),
(779,'LC2684','U-MICROALBUMIN/CREAT RATIO, urine','',2,0),
(780,'LC2685','URATE, fluid','',2,0),
(781,'LM2686','URATE/CREATINE RATIO, urine ','',5,0),
(782,'LM2687','UREA PRE/POST REDUCTION RATIO','',5,0),
(783,'LC2688','UREA random, urine','',2,0),
(784,'LC2689','UREA, 24Hr urine','',2,0),
(785,'LC2690','UREA, fluid','',2,0),
(786,'LC2691','UREA, serum','3200',2,0),
(787,'LC2692','UREA, serum Post Dialysis','',2,0),
(788,'LC2693','UREA, serum Pre Dialysis','',2,0),
(789,'LC2694','URIC ACID, 24Hr urine','',2,0),
(790,'LC2695','URIC ACID, random urine','',2,0),
(791,'LC2696','URIC ACID, serum','3200',2,0),
(792,'LC2698','VAGINAL/CERVICAL SCREEN','6000',2,0),
(793,'LC2699','VANCOMYCIN, serum','',2,0),
(794,'LC2700','VARICELLA ab - CSF','',2,0),
(795,'LC2701','VARICELLA IGG - SERUM','',2,0),
(796,'LC2702','VARICELLA IGM - SERUM','',2,0),
(797,'LC2703','VARICELLA(HERPES ZOSTER)Ab','',2,0),
(798,'LC2704','VDRL ONLY - CSF','3000',2,0),
(799,'LC2705','VITAMIN B12, serum','16500',2,0),
(800,'LC2706','VITAMIN d 25','16500',2,0),
(801,'LC2707','WBC AND DIFF','6400',1,0),
(802,'LH2708','WBC ONLY (NO DIFF COUNT)','3200',1,0),
(803,'LH2709','WHOLE BLOOD CHOLINESTERASE','',2,0),
(804,'LC2042','APOLIPROTEIN (a)','',2,0),
(805,'LM2096','Cd4 + PCR QUAL','',5,0),
(806,'LM2653','STOOL ROUTINE','2200',4,0),
(807,'LM2697','URINE ROUTINE','2200',3,0),
(808,'LM2710','WET PREP & GRAM STAIN','6000',5,0),
(809,'LC2711','LIPOGRAM','17520',NULL,0),
(810,'LC2712','LITHIUM, serum mmol/L',NULL,NULL,0),
(811,'LM2713','AFB (TB)','1800',5,0),
(812,'LM2714','BLOOD CULTURE & SENS','17280',5,0),
(813,'LM2715','CULTURE & SENSITIVITY','17800',5,0),
(814,'LM2716','FUNGI SKIN SCRAPPING','3000',5,0),
(815,'LM2717','STOOL CULTURE','11400',5,0),
(816,'LC2718','WIDALS','3000',2,0),
(817,'LU2719','SEMEN ANALYSIS','6000',3,0),
(818,'LU2720','URINE BILHARZIA ANTIBODIES','6300',3,0),
(819,'LU2721','OCCULT BLOOD','4200',3,0),
(820,'LS2722','STOOL ROTA VIRUS','5200',4,0),
(821,'LC2723','eGFR','5700',2,0),
(822,'LC2724','PROTHROMBIN TIME (INR)','6300',5,0),
(823,'LC2725','TROPONIN','18000',2,0),
(824,'LC2726','HEP B VIRAL LOAD','120000',NULL,0),
(825,'LM2727','THYROID ANTIBODY','30930',5,0),
(826,'LC2728','RUBELLA IgG','23180',5,0),
(827,'LM2729','PUROLI H','9500',5,0),
(828,'LM2730','ANTICARDIOLIPIN ATIBODY','40796',5,0),
(829,'LM2731','LUPUS ANTICOAUGULANT','40796',NULL,0),
(830,'LM2732','VAPROIC ACID','25531',5,0),
(831,'LM2733','HEPATITIS E (IgG & IgM)','35000',5,0),
(832,'LC2734','THYROID PROF (T3,T4,TSH)','37800',2,0),
(833,'LC2735','LIPID PROFILE','17520',2,0),
(834,'LCHBsAG','HBsAG','3500',5,0);

/*Table structure for table `units` */

DROP TABLE IF EXISTS `units`;

CREATE TABLE `units` (
  `units_id` int(11) NOT NULL AUTO_INCREMENT,
  `test_parameter_id` int(11) DEFAULT NULL,
  `gender` varchar(300) DEFAULT NULL,
  `units` varchar(300) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  PRIMARY KEY (`units_id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

/*Data for the table `units` */

insert  into `units`(`units_id`,`test_parameter_id`,`gender`,`units`,`deleted`) values 
(2,228,'Male','mg/dl',0),
(3,228,'Female','mg/dl',0),
(4,228,'Female','60-110',1),
(5,937,'Male','10<sup>3</sup>/mm<sup>3</sup>',0),
(6,902,'Male','mg/dl',0),
(7,902,'Female','mg/dl',0),
(8,903,'Male','mg/dl',0),
(9,903,'Female','mg/dl',0),
(10,904,'Male','mmol/l',0),
(11,904,'Female','mmol/l',0),
(12,905,'Male','mmol/l',0),
(13,905,'Female','mmol/l',0),
(14,906,'Female','mmo/l',0),
(15,906,'Male','mmo/l',0),
(16,976,'Male','mg/dl',0),
(17,976,'Female','mg/dl',0),
(18,977,'Male','mg/dl',0),
(19,977,'Female','mg/dl',0),
(20,961,'Male','UL',0),
(21,961,'Female','UL',0),
(22,962,'Male','UL',0),
(23,962,'Female','UL',0),
(24,963,'Male','UL',0),
(25,963,'Female','UL',0),
(26,964,'Male','UL',0),
(27,964,'Female','UL',0),
(28,965,'Male','UL',0),
(29,966,'Male','mg/dl',0),
(30,966,'Female','mg/dl',0),
(31,967,'Male','mg/dl',0),
(32,967,'Female','mg/dl',0),
(33,968,'Male','g/dl',0),
(34,968,'Female','g/dl',0),
(35,969,'Male','g/dl',0),
(36,969,'Female','g/dl',0),
(37,957,'Male','mg/dl',0),
(38,833,'Male','Negative',0),
(39,833,'Male','+',0),
(40,833,'Male','++',0),
(41,833,'Male','+++',0),
(42,957,'Female','mg/dl',0),
(43,958,'Male','mg/dl',0),
(44,958,'Female','mg/dl',0),
(45,959,'Male','mg/dl',0),
(46,959,'Female','mg/dl',0),
(47,960,'Male','mg/dl',0),
(48,960,'Female','mg/dl',0),
(49,243,'Male','%',0),
(50,243,'Female','%',0),
(51,970,'Male','mg/dl',0),
(52,970,'Female','mg/dl',0),
(53,979,'Male','mg/dl',0),
(54,979,'Female','mg/dl',0),
(55,980,'Male','mg/dl',0),
(56,980,'Female','mg/dl',0),
(57,982,'Male','<p>mg/dl</p>',0),
(58,982,'Female','<p>mg/dl</p>',0),
(59,10,'Male','<p>U/L</p>',0),
(60,10,'Female','<p>U/L<br></p>',0),
(61,937,'Female','10<sup>3</sup>/mm<sup>3</sup>',0),
(62,938,'Male','<p>%</p>',0),
(63,938,'Female','<p>%</p>',0),
(64,939,'Male','<p>%</p>',0),
(65,939,'Female','<p>%</p>',0),
(66,940,'Male','<p>%</p>',0),
(67,940,'Female','<p>%</p>',0),
(68,941,'Male','<p>10<span style=\"vertical-align: super;\">3</span><span style=\"vertical-align: sub;\">/mm</span>3</p>',1),
(69,941,'Female','<p>10<span style=\"vertical-align: super;\">3</span><span style=\"vertical-align: sub;\">/mm</span>3<br></p>',1),
(70,942,'Male','<p>10<sup>3</sup>/mm<sup>3</sup><br></p>',0),
(71,942,'Female','<p>10<sup>3</sup>/mm<sup>3</sup><br></p>',0),
(72,941,'Male','<p>10<sup>3</sup>/mm<sup>3</sup><br></p>',0),
(73,941,'Female','<p>10<sup>3</sup>/mm<sup>3</sup><br></p>',0),
(74,943,'Male','<p>10<sup>3</sup>/mm<sup>3</sup><br></p>',0),
(75,943,'Female','<p>10<sup>3</sup>/mm<sup>3</sup><br></p>',0),
(76,944,'Male','<p>10<sup>6</sup>/mm<sup>3</sup><br></p>',0),
(77,944,'Female','<p>10<sup>6</sup>/mm<sup>3</sup><br></p>',0),
(78,945,'Male','<p>g/dl</p>',0),
(79,945,'Female','<p>g/dl</p>',0),
(80,946,'Male','<p>%</p>',0),
(81,946,'Female','<p>%</p>',0),
(82,947,'Male','<b><i>u</i></b>m<sup>3</sup>',0),
(83,947,'Female','<p><b><i>u</i></b>m<sup>3</sup><br></p>',0),
(84,948,'Male','<p>pg</p>',0),
(85,948,'Female','<p>pg<br></p>',0),
(86,949,'Male','<p>g/dl</p>',0),
(87,949,'Female','<p>g/dl<br></p>',0),
(88,950,'Male','<p>10<sup>3</sup>/mm<sup>3</sup></p>',0),
(89,950,'Female','<p>10<sup>3</sup>/mm<sup>3</sup><br></p>',0);

/*Table structure for table `ura_micro` */

DROP TABLE IF EXISTS `ura_micro`;

CREATE TABLE `ura_micro` (
  `ura_micro_id` int(11) NOT NULL AUTO_INCREMENT,
  `ura_micro_wbc` varchar(300) DEFAULT NULL,
  `ura_micro_rbc` varchar(300) DEFAULT NULL,
  `ura_micro_parasites` varchar(300) DEFAULT NULL,
  `ura_micro_ova` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`ura_micro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `ura_micro` */

insert  into `ura_micro`(`ura_micro_id`,`ura_micro_wbc`,`ura_micro_rbc`,`ura_micro_parasites`,`ura_micro_ova`) values 
(1,'ura1','ura2','ura4','ura3'),
(2,'few','fdd','dd','dd'),
(3,'ddd','dd','dd','dd'),
(4,'rrrr','bbb','xxx','zzzx'),
(5,'QQQQQQQQQQ','QQQQQQQQQQ','GGGGGGGGGG','DDDDDDDDDD'),
(6,'k','o','g','p'),
(7,'HG','FG','SD','DF'),
(8,'gg','gg','gg','gg'),
(9,'B','B','B','B');

/*Table structure for table `urina` */

DROP TABLE IF EXISTS `urina`;

CREATE TABLE `urina` (
  `urina_id` int(11) NOT NULL AUTO_INCREMENT,
  `ucolour` varchar(300) DEFAULT NULL,
  `uappearance` varchar(300) DEFAULT NULL,
  `uprotein` varchar(300) DEFAULT NULL,
  `uglucose` varchar(300) DEFAULT NULL,
  `ublood` varchar(300) DEFAULT NULL,
  `uketones` varchar(300) DEFAULT NULL,
  `urobilinogen` varchar(300) DEFAULT NULL,
  `ubilirubin` varchar(300) DEFAULT NULL,
  `uleucocytes` varchar(300) DEFAULT NULL,
  `uascobic_acid` varchar(300) DEFAULT NULL,
  `uph` varchar(300) DEFAULT NULL,
  `usg` varchar(300) DEFAULT NULL,
  `unitrite` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`urina_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `urina` */

insert  into `urina`(`urina_id`,`ucolour`,`uappearance`,`uprotein`,`uglucose`,`ublood`,`uketones`,`urobilinogen`,`ubilirubin`,`uleucocytes`,`uascobic_acid`,`uph`,`usg`,`unitrite`) values 
(1,'1','2','5','7','9',NULL,'3','4','8','10','11','13','6'),
(2,'1','2','5','7','9',NULL,'3','4','8','10','11','13','6'),
(3,'c','s','s','s','s',NULL,'s','s','s','s','s','s','s'),
(4,'q','q','q','q','q',NULL,'q','q','q','q','q','q','q'),
(5,'YELLOW','CLEAR','NEG','NEG','NEG',NULL,'NEG','NEG','NEG','NEG','6.0','1.020','NEG'),
(6,'a','s','q','q','q',NULL,'s','q','q','q','q','w','q'),
(7,'a','s','q','q','q',NULL,'s','q','q','q','q','w','q'),
(8,'yelow','fd','ff','fv','vv',NULL,'dd','vf','vv','vv','9.0','1234','ff'),
(9,'yelll','xcc','vv','vv','vv',NULL,'cc','vv','vv','vv','3','vv','vv'),
(10,'yelll','s','bb','ttt','qq',NULL,'cc','vv','eee','dd','aa','mmmm','dd'),
(11,'CCCCCCCCCC','SSSSSSSSSS','ZZZZZZZZ','DDDDDDDDDD','XXXXXXXX',NULL,'QQQQQQQQQQQ','DDDDDDDD','ZZZZZZZZZ','GGGGGGGG','LLLLLLL','EEEEEEEEE','NNNNN'),
(12,'u','ji','g','x','b',NULL,'f','f','b','m','l','y','x'),
(13,'u','ji','g','x','b',NULL,'f','f','b','m','l','y','x'),
(14,'u','ji','g','x','b',NULL,'f','f','b','m','l','y','x'),
(15,'C','B','K','O','H',NULL,'N','I','J','L','K','B','O'),
(16,'Go','Y0','Y0','P0','J0',NULL,'U0','T0','H0','G0','F0','KJ0','O0'),
(17,'B','B','B','B','B',NULL,'B','B','B','B','B','B','B');

/*Table structure for table `user_module_actions` */

DROP TABLE IF EXISTS `user_module_actions`;

CREATE TABLE `user_module_actions` (
  `module_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `action_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `uma_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`uma_id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_module_actions` */

insert  into `user_module_actions`(`module_id`,`user_type`,`action_id`,`uma_id`) values 
('clinics',1,'create',1),
('clinics',1,'delete',2),
('clinics',1,'view',3),
('company_tests',1,'#',4),
('config',1,'#',5),
('patients',1,'create',6),
('patients',1,'delete',7),
('patients',1,'view',8),
('staff',1,'create',9),
('staff',1,'delete',10),
('staff',1,'view',11),
('tests',1,'create',12),
('tests',1,'delete',13),
('tests',1,'view',14),
('patients',3,'delete',18),
('patients',3,'create',19),
('patients',3,'view',20),
('tests',3,'delete',21),
('tests',3,'create',22),
('tests',3,'view',23),
('patients',3,'delete',24),
('patients',3,'create',25),
('patients',3,'view',26),
('patients',3,'delete',27),
('patients',3,'create',28),
('patients',3,'create',29),
('patients',3,'view',30),
('tests',3,'delete',31),
('tests',3,'create',32),
('tests',3,'view',33),
('tests',3,'delete',34),
('tests',3,'create',35),
('tests',3,'create',36),
('tests',3,'view',37),
('clinics',3,'delete',38),
('clinics',3,'create',39),
('clinics',3,'view',40),
('clinics',3,'delete',41),
('staff',3,'delete',45),
('staff',3,'create',46),
('staff',3,'view',47),
('staff',3,'delete',48),
('sales',1,'delete',52),
('sales',1,'view',53),
('sales',1,'create',54),
('reports',1,'#',55);

/*Table structure for table `user_sub_module_actions` */

DROP TABLE IF EXISTS `user_sub_module_actions`;

CREATE TABLE `user_sub_module_actions` (
  `sub_module_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `sub_module_action_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subam_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`subam_id`)
) ENGINE=InnoDB AUTO_INCREMENT=122 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_sub_module_actions` */

insert  into `user_sub_module_actions`(`sub_module_id`,`user_type`,`sub_module_action_id`,`subam_id`) values 
('categories',1,'create',1),
('categories',1,'delete',2),
('categories',1,'view',3),
('comp_results',1,'create',4),
('comp_results',1,'delete',5),
('comp_results',1,'view',6),
('companies',1,'create',7),
('companies',1,'delete',8),
('companies',1,'view',9),
('company',1,'view',10),
('groups',1,'create',11),
('groups',1,'delete',12),
('groups',1,'view',13),
('new_test',1,'create',14),
('new_test',1,'delete',15),
('new_test',1,'view',16),
('parameters',1,'create',17),
('parameters',1,'delete',18),
('specimens',1,'create',20),
('specimens',1,'delete',21),
('specimens',1,'view',22),
('tests',1,'create',23),
('tests',1,'delete',24),
('tests',1,'view',25),
('user_type',1,'create',26),
('user_type',1,'delete',27),
('user_type',1,'view',28),
('sales_report',1,'#',38),
('tests_report',1,'#',39),
('groups',3,'view',40),
('parameters',3,'delete',44),
('parameters',3,'create',45),
('parameters',3,'view',46),
('groups',3,'delete',47),
('groups',3,'create',48),
('groups',3,'view',49),
('groups',3,'delete',50),
('groups',3,'create',51),
('groups',3,'view',52),
('groups',3,'delete',53),
('groups',3,'create',54),
('groups',3,'view',55),
('groups',3,'delete',56),
('groups',3,'create',57),
('groups',3,'view',58),
('groups',3,'delete',59),
('groups',3,'create',60),
('groups',3,'view',61),
('parameters',3,'delete',62),
('parameters',3,'create',63),
('parameters',3,'view',64),
('parameters',3,'delete',65),
('parameters',3,'create',66),
('parameters',3,'view',67),
('parameters',3,'delete',68),
('parameters',3,'create',69),
('parameters',3,'view',70),
('parameters',3,'delete',71),
('parameters',3,'create',72),
('parameters',3,'view',73),
('parameters',3,'delete',74),
('parameters',3,'create',75),
('parameters',3,'view',76),
('categories',3,'delete',77),
('categories',3,'create',78),
('categories',3,'view',79),
('categories',3,'delete',80),
('categories',3,'create',81),
('categories',3,'view',82),
('categories',3,'delete',83),
('categories',3,'create',84),
('categories',3,'view',85),
('categories',3,'delete',86),
('categories',3,'create',87),
('categories',3,'view',88),
('categories',3,'delete',89),
('categories',3,'create',90),
('categories',3,'view',91),
('specimens',3,'delete',92),
('specimens',3,'create',93),
('specimens',3,'view',94),
('specimens',3,'delete',95),
('specimens',3,'create',96),
('specimens',3,'view',97),
('specimens',3,'delete',98),
('specimens',3,'create',99),
('specimens',3,'view',100),
('specimens',3,'delete',101),
('specimens',3,'create',102),
('specimens',3,'view',103),
('specimens',3,'delete',104),
('specimens',3,'create',105),
('specimens',3,'view',106),
('tests',3,'delete',107),
('tests',3,'create',108),
('tests',3,'view',109),
('tests',3,'delete',110),
('tests',3,'create',111),
('tests',3,'view',112),
('tests',3,'delete',113),
('tests',3,'create',114),
('tests',3,'view',115),
('tests',3,'delete',116),
('tests',3,'create',117),
('tests',3,'view',118),
('tests',3,'delete',119),
('tests',3,'create',120),
('tests',3,'view',121);

/*Table structure for table `user_type` */

DROP TABLE IF EXISTS `user_type`;

CREATE TABLE `user_type` (
  `user_type` int(11) NOT NULL AUTO_INCREMENT,
  `desc` varchar(100) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_type`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `user_type` */

insert  into `user_type`(`user_type`,`desc`,`deleted`) values 
(1,'Administrator',0),
(2,'Lab Technician',0),
(3,'Admintrative Assistant',0),
(4,'Admin2nnnnnnnnnnnn',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` text,
  `jobtitle` varchar(200) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`name`,`username`,`password`,`photo`,`deleted`,`phone`,`email`,`address`,`jobtitle`,`status`,`user_type`) values 
(6,'Brian','admin','21232f297a57a5a743894a0e4a801fc3','da1Ms.jpg',0,'0888015904','briannkhata@gmail.com','         Chilomon                                                 ','Developer',NULL,1),
(10,'Madalitso ','Lapken','a3f8c71ffb94ea04cf2d2caf3d6e8569','HznhE.jpg',0,NULL,NULL,NULL,NULL,NULL,NULL),
(11,'Mayeso','Mayeso','0d109b05dc3c1f504504d4e24ac52df0','Rt7UR.jpg',0,NULL,NULL,NULL,NULL,NULL,NULL),
(12,'Emmanuel','Emmanuel','011aedbea90fb3b6d1e7a47526b3bee6','l9dNq.jpg',1,NULL,NULL,NULL,NULL,NULL,NULL),
(13,'Madalitso ','Lapken','a3f8c71ffb94ea04cf2d2caf3d6e8569','fBVC3.jpg',0,NULL,NULL,NULL,NULL,NULL,NULL),
(14,'Collins','Collins','1b36ea1c9b7a1c3ad668b8bb5df7963f','hu8pc.jpg',1,NULL,NULL,NULL,NULL,NULL,NULL),
(15,'Marths','0888015904','61972f9d46e392ba0442bd87fc736596',NULL,1,'0888015904','m@gmail.com','                 mnnn                                         ','Marketer',NULL,NULL),
(16,'bossx','0','cfcd208495d565ef66e7dff9f98764da',NULL,1,'0','nj@yahoo.com','               kkk                                           ','klk',NULL,NULL),
(17,'ossy','09999','0e0f8bdf150356c7ea444750799e7160',NULL,1,'09999','briannkhata@gmail.com','    bvvvvvvvv                                                      ','bn',NULL,NULL),
(18,'Brian Nkhata','admin@admin.com','d41d8cd98f00b204e9800998ecf8427e',NULL,0,'0888015904','nkhatabrians@yahoo.com','Mabulabo                                                                                                                ','Lab technician',NULL,1),
(19,'Savimbi Shaba','savimbi','cd29bc88aa3d03d51184ed1166050ccd',NULL,0,'0888015904','nkhatabrians@yahoo.com','Ndirande','Lab Tech',NULL,3);

/*Table structure for table `year` */

DROP TABLE IF EXISTS `year`;

CREATE TABLE `year` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `year` */

insert  into `year`(`id`,`year`) values 
(1,'2015'),
(2,'2016'),
(3,'2017'),
(4,'2018'),
(5,'2019'),
(6,'2020'),
(7,'2021'),
(8,'2022'),
(9,'2023'),
(10,'2024'),
(11,'2025');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
