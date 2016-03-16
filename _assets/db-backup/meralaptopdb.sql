/*
Navicat MySQL Data Transfer

Source Server         : Local Connection
Source Server Version : 50625
Source Host           : localhost:3306
Source Database       : meralaptopdb

Target Server Type    : MYSQL
Target Server Version : 50625
File Encoding         : 65001

Date: 2016-03-01 18:39:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ml87_brand`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_brand`;
CREATE TABLE `ml87_brand` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `brand_img` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_brand
-- ----------------------------
INSERT INTO `ml87_brand` VALUES ('19', '2015-10-10', 'DELL', 'dell', '725f67fe6f1bd2b4e603ea4eab55709b.jpg', 'Active', 'dell', 'dell', '2015-12-08 19:56:35');
INSERT INTO `ml87_brand` VALUES ('20', '2015-10-10', 'HP', 'hp', '2134c96fa3677e6ad4079d7269d20dd9.jpg', 'Active', 'hp', 'hp', '2015-12-08 19:56:35');
INSERT INTO `ml87_brand` VALUES ('21', '2015-10-10', 'DELL', 'dell', '725f67fe6f1bd2b4e603ea4eab55709b.jpg', 'Active', 'dell', 'dell', '2015-12-08 19:56:35');
INSERT INTO `ml87_brand` VALUES ('22', '2015-10-10', 'HP', 'hp', '2134c96fa3677e6ad4079d7269d20dd9.jpg', 'Active', 'hp', 'hp', '2015-12-08 19:56:35');
INSERT INTO `ml87_brand` VALUES ('23', '2015-10-10', 'DELL', 'dell', '725f67fe6f1bd2b4e603ea4eab55709b.jpg', 'Active', 'dell', 'dell', '2015-12-08 19:56:35');
INSERT INTO `ml87_brand` VALUES ('24', '2015-10-10', 'HP', 'hp', '2134c96fa3677e6ad4079d7269d20dd9.jpg', 'Active', 'hp', 'hp', '2015-12-08 19:56:35');
INSERT INTO `ml87_brand` VALUES ('25', '2015-10-10', 'DELL', 'dell', '725f67fe6f1bd2b4e603ea4eab55709b.jpg', 'Active', 'dell', 'dell', '2015-12-08 19:56:35');
INSERT INTO `ml87_brand` VALUES ('26', '2015-10-10', 'HP', 'hp', '2134c96fa3677e6ad4079d7269d20dd9.jpg', 'Active', 'hp', 'hp', '2015-12-08 19:56:35');

-- ----------------------------
-- Table structure for `ml87_country`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_country`;
CREATE TABLE `ml87_country` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ml87_country
-- ----------------------------

-- ----------------------------
-- Table structure for `ml87_media`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_media`;
CREATE TABLE `ml87_media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(255) DEFAULT NULL,
  `media_type` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `media_img` varchar(255) DEFAULT NULL,
  `description` text,
  `status` varchar(255) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_media
-- ----------------------------
INSERT INTO `ml87_media` VALUES ('1', '2015-10-10', 'slideshow', 'Slider-1', 'Slider-1', 'fe6a5dda4b9fd0eb701ce21041eba0f4.jpg', 'nil', 'Active', 'Nil', 'karachi', '2015-11-10 19:33:02');
INSERT INTO `ml87_media` VALUES ('2', '2015-10-10', 'slideshow', 'Slider-2', 'Slider-2', 'fe6a5dda4b9fd0eb701ce21041eba0f5.jpg', 'nil', 'Active', 'Nil', 'karachi', '2015-11-10 19:33:03');
INSERT INTO `ml87_media` VALUES ('3', '2015-10-10', 'slideshow', 'Slider-3', 'Slider-3', 'fe6a5dda4b9fd0eb701ce21041eba0f6.jpg', 'nil', 'Active', 'Nil', 'karachi', '2015-11-10 19:33:03');
INSERT INTO `ml87_media` VALUES ('4', '2015-10-10', 'slideshow', 'Slider-4', 'Slider-4', 'fe6a5dda4b9fd0eb701ce21041eba0f7.jpg', 'nil', 'Active', 'Nil', 'karachi', '2015-11-10 19:33:03');
INSERT INTO `ml87_media` VALUES ('5', '2015-10-10', 'slideshow', 'Slider-5', 'Slider-5', 'fe6a5dda4b9fd0eb701ce21041eba0f8.jpg', 'nil', 'Active', 'Nil', 'karachi', '2015-11-10 19:33:04');
INSERT INTO `ml87_media` VALUES ('6', '2015-10-10', 'slideshow', 'Slider-6', 'Slider-6', 'fe6a5dda4b9fd0eb701ce21041eba0f9.jpg', 'nil', 'Active', 'Nil', 'karachi', '2015-11-10 19:33:04');

-- ----------------------------
-- Table structure for `ml87_member`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_member`;
CREATE TABLE `ml87_member` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_member
-- ----------------------------
INSERT INTO `ml87_member` VALUES ('1', '2015-10-10', 'Ayaz Ahmed', 'Pakistan', 'karachi', 'ayzeetech@gmail.com', 'Karachi123@', 'Active', '2015-11-03 19:00:42');

-- ----------------------------
-- Table structure for `ml87_product`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_product`;
CREATE TABLE `ml87_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `product_condition` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `product_img` varchar(100) DEFAULT NULL,
  `description` text,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_product
-- ----------------------------
INSERT INTO `ml87_product` VALUES ('1', '19', '1999-11-27', 'Fausto', 'Fausto', 'SKU: 27660', 'New', '415169609.41329', 'http://lorempixel.com/100/100/?77292', 'Similique non omnis repellendus. Possimus non atque officia voluptatem eveniet officia ipsam. Cupiditate dolores quisquam est id. Modi voluptatum possimus nisi consequuntur molestiae.', 'Active', 'Dolorem assumenda amet repudiandae ab qui praesentium. Occaecati cumque impedit et et hic suscipit. Voluptatum qui quo illo officia nostrum quam sed.', 'ea,voluptas,cumque,aut,nulla,voluptate,esse,esse,sit,temporibus', '2016-02-18 19:47:25');
INSERT INTO `ml87_product` VALUES ('2', '19', '1980-04-22', 'Elvis', 'Elvis', 'SKU: 19374', 'New', '24031.10613', 'http://lorempixel.com/100/100/?35800', 'Unde consequatur non eaque consequatur quis voluptas voluptate porro. Dolores ut aut et sed. Qui quia suscipit sed suscipit laborum officia vel. Voluptatum ut est qui sequi voluptas.', 'Active', 'Enim qui sint quo voluptas omnis. Quis ut vel pariatur quod et commodi et. Ipsa porro et corporis et. Dolor consequatur beatae maiores blanditiis qui ducimus.', 'dolorem,aut,est,et,fugit,amet,ea,autem,qui,nihil', '2016-02-18 19:47:25');
INSERT INTO `ml87_product` VALUES ('3', '19', '2003-11-14', 'Horacio', 'Horacio', 'SKU: 59613', 'New', '64.5445', 'http://lorempixel.com/100/100/?86588', 'Quibusdam rerum voluptatem sint sequi. Quaerat velit voluptas ipsam voluptatibus. Dolor similique aut blanditiis fuga esse et incidunt.', 'Active', 'Rem qui odio eum necessitatibus rem ea et. Illum dicta doloribus hic earum quam natus dolorem. Corrupti laboriosam ut maxime est quia. Et qui architecto dolores velit officia alias ipsa.', 'molestias,et,sequi,modi,consequuntur,itaque,molestiae,alias,quasi,vel', '2016-02-18 19:47:25');
INSERT INTO `ml87_product` VALUES ('4', '19', '1976-01-13', 'Abdullah', 'Abdullah', 'SKU: 57437', 'New', '16.47', 'http://lorempixel.com/100/100/?24420', 'Laudantium sed dolores consequatur in fuga. Officiis aut voluptatum cupiditate deleniti libero culpa. Ab dolorum perferendis et libero ratione. Eveniet eum non quisquam quia mollitia.', 'Active', 'Ut excepturi animi itaque iusto magnam. Velit recusandae optio quasi sit natus error. Facilis veniam consequuntur voluptatum aut similique autem suscipit. Ipsam officiis nobis sit voluptas optio.', 'dolorum,facilis,inventore,nisi,consectetur,deserunt,iure,et,sapiente,nostrum', '2016-02-18 19:47:25');
INSERT INTO `ml87_product` VALUES ('5', '19', '1992-11-08', 'Roxanne', 'Roxanne', 'SKU: 16319', 'New', '8043528.407', 'http://lorempixel.com/100/100/?69106', 'Labore sequi enim vitae recusandae aliquid est natus et. Sapiente porro illum libero aut. Porro distinctio et est odio enim ut. Ut incidunt qui autem non.', 'Active', 'Sunt repellat magnam nam delectus. Omnis aut omnis reiciendis.', 'quos,est,nihil,consequatur,vitae,necessitatibus,ad,aspernatur,minus,ex', '2016-02-18 19:47:25');
INSERT INTO `ml87_product` VALUES ('6', '19', '2010-02-12', 'Priscilla', 'Priscilla', 'SKU: 70657', 'New', '802833.31779438', 'http://lorempixel.com/100/100/?22921', 'Repellat adipisci deserunt possimus voluptate laudantium sed quibusdam. Maxime omnis quod quis et sed beatae nihil. Aliquid pariatur non sequi distinctio excepturi eveniet. Delectus similique aut et dolor voluptatem.', 'Active', 'Qui asperiores non laborum voluptatem incidunt vel. Possimus nulla quae omnis iure illum reiciendis libero. Deserunt aut sunt in atque sit voluptatem.', 'aut,a,voluptatem,dicta,nihil,sapiente,labore,aliquam,officia,est', '2016-02-18 19:47:25');
INSERT INTO `ml87_product` VALUES ('7', '19', '1984-08-10', 'Annetta', 'Annetta', 'SKU: 36710', 'New', '7610126.7346', 'http://lorempixel.com/100/100/?97963', 'Ex dolorem nihil et natus veritatis quam provident. Quae et nihil nisi quo commodi necessitatibus ut. Et quia aut dignissimos est quos nihil dolore.', 'Active', 'Sint fuga cum iste. Atque velit ratione quisquam esse consequatur aut blanditiis. At ut quo impedit et debitis quae. Omnis sit nihil aut velit.', 'aperiam,tempore,quae,voluptatem,quas,voluptatem,voluptatibus,est,et,quisquam', '2016-02-18 19:47:25');
INSERT INTO `ml87_product` VALUES ('8', '19', '1981-04-13', 'Lucious', 'Lucious', 'SKU: 89701', 'New', '506.690290406', 'http://lorempixel.com/100/100/?86547', 'Voluptatibus impedit fuga id corporis dolores nihil facilis laboriosam. Sed odit dicta porro non autem eos sed saepe.', 'Active', 'Et ut itaque quisquam. Est numquam eum nostrum voluptatem. Sunt rem ut numquam architecto quidem pariatur. Qui id quod omnis maiores.', 'et,autem,vel,debitis,aliquam,ut,illum,dolor,facere,aliquid', '2016-02-18 19:47:25');
INSERT INTO `ml87_product` VALUES ('9', '19', '2010-07-31', 'Rhoda', 'Rhoda', 'SKU: 39700', 'New', '254109.145621', 'http://lorempixel.com/100/100/?24067', 'Architecto quibusdam reiciendis voluptas sed commodi commodi. Quos nostrum amet voluptas eaque ipsam aut assumenda. Omnis quaerat ipsam aspernatur et deserunt beatae.', 'Active', 'Nihil libero sit eum minima et ex. Magnam sint et sit recusandae.', 'autem,sed,repudiandae,aspernatur,sint,blanditiis,soluta,et,enim,nulla', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('10', '19', '2001-02-22', 'Braulio', 'Braulio', 'SKU: 87515', 'New', '8201247.4', 'http://lorempixel.com/100/100/?61817', 'Temporibus iusto dolores nemo neque. Magnam neque dolorum recusandae veritatis corrupti eius. Ad aut fuga nobis in aut mollitia. Similique ad non laborum voluptatem quas molestiae.', 'Active', 'Quia dolores alias quia ea. Rerum magni fugit in quis ut suscipit aut nulla. Quia aut autem animi. Accusantium hic tempore qui sint nam eligendi nulla.', 'odio,delectus,sit,nobis,molestias,qui,repellat,autem,est,sed', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('11', '19', '2005-12-14', 'Una', 'Una', 'SKU: 40961', 'New', '3835.46008021', 'http://lorempixel.com/100/100/?17193', 'Libero quia qui ut dignissimos. Magni aut impedit quia quidem error perspiciatis minima. Esse corrupti est sint et autem aut nostrum. Aliquid alias tempora quas dolorum ut. Doloribus ut et adipisci dignissimos itaque molestias.', 'Active', 'Labore delectus fugiat est. Omnis repudiandae similique rerum nihil voluptatibus. Sint possimus nam ea. Delectus quia qui ut et et voluptate.', 'qui,eaque,et,consequatur,delectus,deserunt,consequatur,et,in,minima', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('12', '19', '1977-08-11', 'Krystal', 'Krystal', 'SKU: 1269', 'New', '46.1', 'http://lorempixel.com/100/100/?17040', 'Ut voluptates autem magni aspernatur cum eum omnis ut. Nesciunt praesentium molestias alias.', 'Active', 'Laudantium voluptatibus et aut molestiae et quisquam. Provident ipsa voluptatem harum blanditiis laudantium doloremque laudantium. Ut tempore et numquam qui sequi occaecati id asperiores.', 'natus,molestiae,deserunt,esse,alias,suscipit,cum,possimus,non,aut', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('13', '19', '2015-12-20', 'Josie', 'Josie', 'SKU: 52261', 'New', '7', 'http://lorempixel.com/100/100/?37864', 'Modi est ducimus dicta id ea ad rem. Minima natus accusamus doloribus. Sunt eos dignissimos aliquam fugiat quis. Consectetur distinctio id excepturi.', 'Active', 'Dolor ut tempore atque eius sed. Nemo ipsa repudiandae placeat ea fuga rerum. Nemo dolor illo nihil impedit. Quo quia ipsa voluptatem quia aut molestiae sunt. Ipsum aut occaecati repellendus quo.', 'quo,ipsa,adipisci,sunt,voluptatem,totam,sed,sint,consequatur,animi', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('14', '19', '1970-01-20', 'Rubie', 'Rubie', 'SKU: 81175', 'New', '6.13797', 'http://lorempixel.com/100/100/?85182', 'Quaerat aliquam voluptas ea sit ut eveniet soluta voluptatibus. Ea assumenda sint odit non atque ducimus. Est nemo provident exercitationem occaecati. Iste ab aut totam.', 'Active', 'Ut ex at et illum. Molestias assumenda et facere non ex qui in. Laboriosam blanditiis commodi est quia et ipsa velit.', 'impedit,sint,eos,qui,repellendus,beatae,aut,veniam,culpa,voluptas', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('15', '19', '1995-08-17', 'Cleve', 'Cleve', 'SKU: 81536', 'New', '5917643', 'http://lorempixel.com/100/100/?86789', 'Esse minima non et ratione. Reiciendis accusantium aliquid autem rerum. Earum quaerat ratione tempore magnam tempore corporis rerum. Nostrum corrupti inventore nostrum qui laboriosam sunt dolore ipsa.', 'Active', 'Qui nam sit ut et quod facere. Occaecati et tempora nostrum sapiente accusamus. Et et exercitationem quo commodi qui.', 'qui,ut,aut,architecto,omnis,numquam,beatae,eaque,nisi,inventore', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('16', '19', '1972-11-06', 'Stacey', 'Stacey', 'SKU: 15488', 'New', '31.0274', 'http://lorempixel.com/100/100/?86541', 'Omnis quis mollitia ipsam quia. Officiis illum ea adipisci veritatis blanditiis reprehenderit molestias. Et culpa sint aperiam minus. Illo fugit occaecati officiis corporis voluptatem.', 'Active', 'Quis ullam illum sit eligendi. Sint aut sit repudiandae aspernatur nesciunt qui. Reprehenderit quae odio eligendi optio.', 'laudantium,quasi,molestias,aspernatur,aliquam,aut,delectus,minus,incidunt,rerum', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('17', '19', '2015-10-28', 'Mallie', 'Mallie', 'SKU: 86523', 'New', '2.2778', 'http://lorempixel.com/100/100/?22421', 'Facilis soluta rerum deserunt et consequuntur unde quod. Repellendus praesentium sit iste rem totam debitis exercitationem. Hic similique molestiae dignissimos eum qui ex.', 'Active', 'Qui in voluptatum in est molestiae reprehenderit. Esse deleniti culpa beatae. Molestiae eligendi veritatis nihil maiores quasi. Consequatur facilis vel eveniet voluptate.', 'non,est,assumenda,dolorem,et,reprehenderit,qui,qui,rerum,officiis', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('18', '19', '1991-10-02', 'Tavares', 'Tavares', 'SKU: 96723', 'New', '7.94', 'http://lorempixel.com/100/100/?85811', 'Hic et voluptatum praesentium sint ut hic deleniti aliquam. Optio accusantium laboriosam molestias inventore. Assumenda molestiae eum nulla itaque fuga commodi quidem.', 'Active', 'Voluptatem autem aliquam voluptatem commodi qui. Velit inventore qui fuga ut consequuntur reprehenderit. Dicta libero laborum officia cumque explicabo aspernatur eos.', 'consequatur,molestiae,quae,cupiditate,ratione,omnis,corporis,qui,quia,soluta', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('19', '19', '1986-04-12', 'Lee', 'Lee', 'SKU: 3332', 'New', '422525.4', 'http://lorempixel.com/100/100/?49209', 'Maxime cupiditate odio sit et. Minus cumque quae illum aut. Provident corrupti et est est nostrum facere cum. Nam doloremque ut voluptas autem.', 'Active', 'Tenetur veritatis ipsum quis libero nihil sit qui. Ea excepturi et perspiciatis cumque praesentium. Deleniti tenetur aut natus non qui. Est voluptatem velit ut.', 'repellat,ipsum,reiciendis,dicta,ducimus,voluptatum,quidem,et,voluptates,iste', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('20', '19', '1972-06-04', 'Jude', 'Jude', 'SKU: 96302', 'New', '95082546.157', 'http://lorempixel.com/100/100/?19913', 'Natus rerum aut sit impedit. Eos sint tempora provident voluptatem qui commodi. Consectetur ut quia et aut.', 'Active', 'Ex minima quos sint quibusdam et aspernatur quis qui. Molestias ut dolore repudiandae magni sint tenetur. Sapiente soluta ea voluptates voluptatem temporibus in.', 'nemo,dolores,sed,ut,dignissimos,voluptatem,quia,exercitationem,et,pariatur', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('21', '19', '2011-10-07', 'Mariah', 'Mariah', 'SKU: 1982', 'New', '4081.605173208', 'http://lorempixel.com/100/100/?68838', 'Et minima quam voluptas illo earum. Tempora praesentium sed laborum et neque. Necessitatibus est sed rerum distinctio rerum praesentium. Et veritatis iure corrupti est corporis quo aliquam.', 'Active', 'Rerum facere vero amet sed quo minus ex voluptas. Odit expedita omnis nihil. Molestiae culpa dolore animi magni. Unde repellendus enim aut sequi.', 'voluptas,laudantium,asperiores,dolorum,libero,cum,inventore,at,asperiores,voluptas', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('22', '19', '1988-01-27', 'Felix', 'Felix', 'SKU: 64374', 'New', '50277', 'http://lorempixel.com/100/100/?40916', 'Aut consequatur sunt quaerat eaque nobis. Minus commodi id in. Odio nemo aliquid distinctio blanditiis omnis sed perspiciatis. Officia qui corrupti qui quas quibusdam.', 'Active', 'Nobis iusto nostrum saepe dolores dolore. Quam et omnis a iure pariatur.\nAccusantium odit temporibus saepe repudiandae nobis quo. Aut eligendi eos est expedita labore sapiente quas.', 'cupiditate,voluptatum,facere,velit,consectetur,voluptatem,vel,quis,ipsa,consequatur', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('23', '19', '1972-10-09', 'Paul', 'Paul', 'SKU: 79724', 'New', '4.679268727', 'http://lorempixel.com/100/100/?75949', 'Soluta dolorum aperiam saepe qui sint natus nobis sed. Quas non inventore porro facilis aut. Ut in illum quia eveniet quo. Aut unde numquam unde est.', 'Active', 'Quaerat non aut aut sed ex et dicta. Ut quisquam quam natus a quo officiis. Itaque a non assumenda inventore. Quis aut non in odio tenetur iste.', 'cumque,sit,ut,ex,amet,atque,aut,quos,non,voluptatem', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('24', '19', '1994-04-03', 'Marguerite', 'Marguerite', 'SKU: 12440', 'New', '21862373.359857', 'http://lorempixel.com/100/100/?14405', 'Voluptas debitis velit ut qui quasi officiis consectetur. Reiciendis asperiores ab laboriosam vel earum facere temporibus est. Et quam exercitationem omnis ratione laboriosam. Minus praesentium cumque voluptatum quam id similique. Vero sunt aut veniam atque itaque aut eligendi.', 'Active', 'Nisi quam ex eligendi similique at. Tempore est recusandae sed non magnam eveniet aspernatur velit. Sequi necessitatibus cumque dolores vero fuga sit. Consequatur fuga debitis harum illo.', 'debitis,voluptas,amet,et,sint,est,praesentium,quo,eaque,saepe', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('25', '19', '1972-06-13', 'Hipolito', 'Hipolito', 'SKU: 86230', 'New', '74017.341', 'http://lorempixel.com/100/100/?88055', 'Nesciunt officiis quae cupiditate dolores aut. Ab odio aut qui soluta vitae. Accusamus consequuntur corporis voluptatem doloremque quis est reiciendis. Molestiae doloribus asperiores non molestias omnis eum.', 'Active', 'Animi aut sit quod et explicabo error magni. Eaque non sed qui eum.', 'tempore,sapiente,facilis,assumenda,nisi,id,aliquid,laudantium,blanditiis,ipsum', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('26', '19', '1978-01-28', 'Jordyn', 'Jordyn', 'SKU: 43073', 'New', '51860084.891299', 'http://lorempixel.com/100/100/?32671', 'Incidunt est asperiores beatae dolorum tenetur. Quo praesentium sunt modi nulla voluptatem. Assumenda autem magni earum nisi et. Labore sed explicabo voluptatibus possimus impedit beatae quod. Minus sed modi enim animi id.', 'Active', 'In rerum consequatur quis ut sapiente. Maxime velit quae et voluptatem. Molestias nam consectetur est est.', 'accusamus,neque,soluta,rerum,quia,necessitatibus,distinctio,quia,amet,architecto', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('27', '19', '2012-09-09', 'Dasia', 'Dasia', 'SKU: 11864', 'New', '91.386777624', 'http://lorempixel.com/100/100/?70155', 'Est earum velit optio voluptatem alias et dolor. Provident eligendi iure adipisci quae. Labore beatae tenetur est quibusdam labore natus.', 'Active', 'Ut unde sunt odio. Voluptas et ut autem amet rem. Enim quod qui ex fugiat dolores asperiores.', 'asperiores,labore,et,nesciunt,laborum,velit,consequatur,voluptatem,in,sed', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('28', '19', '1971-03-29', 'Theodore', 'Theodore', 'SKU: 29090', 'New', '0.398713265', 'http://lorempixel.com/100/100/?23029', 'Alias dicta quod laudantium saepe. Neque deleniti sequi ducimus nemo consequatur qui quod. Quod fugit nemo quos occaecati sed sed adipisci. Unde et nesciunt fugiat dolorem laborum qui.', 'Active', 'Architecto illum officia modi id nihil provident. Cum molestiae id recusandae sed quia sed. Sed in possimus qui ut necessitatibus. Voluptas asperiores ea odit non expedita.', 'sit,unde,at,ut,sit,ratione,accusamus,est,cum,delectus', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('29', '19', '1981-08-13', 'Myrl', 'Myrl', 'SKU: 27466', 'New', '338862.748621', 'http://lorempixel.com/100/100/?30480', 'Ducimus saepe dolores totam unde. Recusandae ut ad ducimus aut. A architecto eligendi maxime labore.', 'Active', 'Ab ex facilis eum sint quas. Qui dolorum mollitia consequatur ut perspiciatis. Impedit itaque fugit sint praesentium.', 'perspiciatis,modi,est,aut,culpa,et,aut,qui,eum,ut', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('30', '19', '1977-05-03', 'Rossie', 'Rossie', 'SKU: 12078', 'New', '14880.74535', 'http://lorempixel.com/100/100/?63694', 'Voluptatum ut nihil omnis quia maxime consequuntur aut laborum. Rerum dignissimos nostrum et libero et nesciunt quo. Quisquam numquam ad in autem.', 'Active', 'Molestias quam eos neque expedita quae. Consequatur quia nisi officiis. Voluptatem a nostrum tempore fugiat quaerat non.', 'assumenda,omnis,ut,hic,doloremque,ullam,aut,maiores,sint,facilis', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('31', '19', '2007-08-16', 'Keegan', 'Keegan', 'SKU: 78361', 'New', '10.09176', 'http://lorempixel.com/100/100/?28797', 'Accusamus atque in animi culpa rem. Excepturi et commodi nostrum ut. Aliquam consequatur ut molestiae tempore possimus et expedita.', 'Active', 'Laboriosam enim minima consequuntur reprehenderit in et. Omnis ducimus dolor vel asperiores itaque quis quos. Molestiae expedita similique non nam.', 'aperiam,unde,asperiores,veritatis,molestiae,fugit,qui,et,nobis,et', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('32', '19', '1973-02-03', 'Kobe', 'Kobe', 'SKU: 50856', 'New', '309852.39873', 'http://lorempixel.com/100/100/?98926', 'Libero non reprehenderit consectetur delectus. Alias eos laboriosam iste nihil cupiditate aut iste consequuntur. Nesciunt sequi distinctio magni fuga.', 'Active', 'Nesciunt asperiores quibusdam ut voluptatem unde. In itaque nisi facere ex ut et. Veniam deserunt voluptates ut laudantium.', 'officia,ab,dolor,ut,quae,animi,atque,vel,atque,vitae', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('33', '19', '2011-07-10', 'Neha', 'Neha', 'SKU: 10499', 'New', '24.809347', 'http://lorempixel.com/100/100/?53817', 'Consequatur autem enim corporis neque. Nobis corrupti quasi sint molestiae quis tempore fugiat.', 'Active', 'A voluptatem eligendi a dolores rerum. Culpa inventore iure iusto eius velit eum vero. Dolore officia qui vel asperiores sit rerum.\nIncidunt amet voluptatem quasi qui et. Est quo quis et aut.', 'excepturi,fugit,eveniet,voluptatibus,perferendis,enim,ab,qui,dolorem,animi', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('34', '19', '1981-02-07', 'Lisa', 'Lisa', 'SKU: 63220', 'New', '0.479042', 'http://lorempixel.com/100/100/?69698', 'Occaecati voluptatum ad hic. Non totam quis sed. Est ut commodi temporibus vitae deleniti voluptates est.', 'Active', 'Praesentium itaque est aut deleniti voluptas. Eum odio perferendis ratione nam. Ab debitis doloribus illo dolor et.', 'alias,facere,veniam,vel,blanditiis,et,quis,sint,nisi,dolores', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('35', '19', '2003-08-14', 'Rollin', 'Rollin', 'SKU: 74328', 'New', '24341.61132072', 'http://lorempixel.com/100/100/?75897', 'Qui omnis quod sunt voluptatum dicta dolorum. Error perspiciatis pariatur eaque vitae excepturi quibusdam cupiditate autem. Deserunt enim et possimus amet vero. Porro laudantium cum est ut sed.', 'Active', 'Et dolores ea qui est. Sunt rerum a occaecati ut explicabo tenetur sit temporibus. Sapiente ut nostrum aut voluptatem. Provident et omnis officiis commodi culpa iure ullam.', 'et,eos,qui,ad,vitae,id,dolorum,ab,sapiente,consequatur', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('36', '19', '1973-02-02', 'Raleigh', 'Raleigh', 'SKU: 22231', 'New', '2773286.805', 'http://lorempixel.com/100/100/?25930', 'Delectus delectus quos rerum quia qui rem. Porro natus omnis doloribus consectetur. Et dignissimos temporibus quo aspernatur. Deleniti iusto reiciendis reprehenderit quos dolores officia error occaecati. Soluta qui maxime unde saepe id velit cum.', 'Active', 'Autem debitis et fugiat voluptatum in magnam quas aut. Cupiditate et qui ducimus sunt voluptates. Blanditiis animi non ut vel in sequi.', 'aperiam,molestiae,eum,et,optio,placeat,sunt,corporis,et,ducimus', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('37', '19', '1998-05-18', 'Milo', 'Milo', 'SKU: 27193', 'New', '8.492', 'http://lorempixel.com/100/100/?21339', 'Sed culpa dolorum est. Velit voluptates quia molestiae sequi eos eveniet. Nihil quidem possimus aspernatur aliquid voluptatem.', 'Active', 'Magnam exercitationem ipsa omnis eveniet autem. Quasi a eum veniam aut. Qui ratione adipisci ea perferendis eius ex.', 'autem,dignissimos,non,explicabo,provident,rerum,dolorem,dignissimos,esse,expedita', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('38', '19', '1976-04-03', 'Teresa', 'Teresa', 'SKU: 18354', 'New', '72.251', 'http://lorempixel.com/100/100/?87586', 'Excepturi dolores vero doloribus eaque quia aut. Sed dolorum fuga illo dolorum. Officia facere deleniti aut. Nihil minus provident et iusto.', 'Active', 'Cupiditate sit inventore assumenda corporis quaerat assumenda nostrum. Deleniti laborum nihil quia natus sit hic iste. Id aut et sunt magnam rerum odio nam sit. Earum omnis odio ea ea.', 'occaecati,sunt,voluptatem,delectus,voluptatem,modi,rerum,ut,architecto,similique', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('39', '19', '1971-01-18', 'Terry', 'Terry', 'SKU: 86224', 'New', '1109.7509', 'http://lorempixel.com/100/100/?98032', 'Ut unde natus ratione maxime unde. Asperiores sit vitae illo rerum esse qui aut debitis. Eligendi iste ea velit voluptatem suscipit harum. Similique non vero ratione explicabo magni sed est.', 'Active', 'Earum iusto sapiente nemo esse. Distinctio et omnis rerum sunt. Atque necessitatibus commodi in itaque harum cumque. Inventore aliquam harum doloribus ullam dolorem facilis.', 'deleniti,sed,voluptas,voluptas,dolorem,natus,sit,quia,aut,velit', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('40', '19', '1984-12-18', 'Alessia', 'Alessia', 'SKU: 48962', 'New', '161788809.181', 'http://lorempixel.com/100/100/?72357', 'Voluptates sapiente est velit. Suscipit beatae eligendi officiis quae dolorum ea distinctio. Assumenda iste occaecati quam vero officia autem.', 'Active', 'Quaerat exercitationem pariatur reprehenderit nostrum qui nihil vero. Voluptas illum fugiat aperiam qui reiciendis fuga. Animi laborum eum earum molestiae quidem.', 'sed,corporis,quod,reiciendis,qui,error,mollitia,eligendi,quae,tenetur', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('41', '19', '1999-03-31', 'Layla', 'Layla', 'SKU: 97413', 'New', '41951948.162', 'http://lorempixel.com/100/100/?74175', 'Incidunt et sit neque sed est eos. Aut magnam et aspernatur at autem nostrum. Accusantium atque quia veritatis adipisci quos nam impedit. Ullam illo placeat est quisquam impedit.', 'Active', 'Maxime dolorem sint aut quia perspiciatis ipsa a. Quia sequi inventore non est. Similique minus consequatur totam quibusdam.', 'voluptas,porro,odio,qui,incidunt,molestiae,aperiam,id,labore,molestiae', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('42', '19', '1972-08-26', 'Gregoria', 'Gregoria', 'SKU: 16041', 'New', '654501', 'http://lorempixel.com/100/100/?29616', 'Alias eius blanditiis et distinctio et quae nisi. Et omnis saepe similique ea. Eum id magnam culpa.', 'Active', 'Hic atque at dolore quas. Asperiores adipisci error fuga laboriosam voluptatum. Minima eum fugit omnis autem qui velit blanditiis blanditiis.', 'omnis,occaecati,tempora,aut,natus,suscipit,est,exercitationem,soluta,ut', '2016-02-18 19:47:26');
INSERT INTO `ml87_product` VALUES ('43', '19', '2006-01-31', 'Courtney', 'Courtney', 'SKU: 67984', 'New', '4315', 'http://lorempixel.com/100/100/?36731', 'Perspiciatis odio et ducimus et. Est in odit ut eaque in. Adipisci recusandae dolores voluptatem reiciendis nihil rerum tempore.', 'Active', 'Qui eos quidem explicabo pariatur. Sunt repellendus maxime nihil. Unde ipsam dolorem cumque provident eius labore. Debitis quas suscipit vel et consequatur et.', 'accusantium,ad,impedit,eveniet,aspernatur,nihil,autem,consequatur,eos,praesentium', '2016-02-18 19:47:27');
INSERT INTO `ml87_product` VALUES ('44', '19', '2006-05-12', 'Cielo', 'Cielo', 'SKU: 65729', 'New', '452402.3', 'http://lorempixel.com/100/100/?47283', 'Quis iusto maiores praesentium eveniet ut voluptas. At ullam voluptatibus autem aut itaque nihil itaque.', 'Active', 'Vel et eos quod et qui. Sint ipsa et minus aperiam doloremque ut. Aut quia et doloremque fugit excepturi voluptatem. Doloremque quia consequatur tempora rem et dolores.', 'sapiente,in,voluptas,quia,aut,vel,aut,minus,earum,et', '2016-02-18 19:47:27');
INSERT INTO `ml87_product` VALUES ('45', '19', '1993-07-05', 'Jeffery', 'Jeffery', 'SKU: 41600', 'New', '1786128', 'http://lorempixel.com/100/100/?28399', 'Alias et nisi molestias quia. Consequuntur possimus inventore non illum deserunt voluptatem. Reiciendis eos molestiae reprehenderit autem molestiae et officia. Alias et voluptatem et necessitatibus voluptatum. Eaque eveniet inventore est aut quam.', 'Active', 'Omnis exercitationem veniam nihil omnis consequatur rerum molestias. Animi mollitia delectus fuga neque facere illum. Voluptatibus repellat aliquam molestiae voluptatem nostrum odit.', 'quia,autem,eius,aspernatur,occaecati,et,quia,molestiae,et,cum', '2016-02-18 19:47:27');
INSERT INTO `ml87_product` VALUES ('46', '19', '1980-05-10', 'Henriette', 'Henriette', 'SKU: 30088', 'New', '42807846.728995', 'http://lorempixel.com/100/100/?43341', 'Aut sint et iste quibusdam molestias consectetur. Neque velit ut similique et consequatur ipsum blanditiis. Aspernatur maiores ipsam optio praesentium labore et est.', 'Active', 'Soluta et provident quo repellendus magni. Accusantium non quae nostrum eos expedita est. In est aperiam tempore. Placeat molestiae corrupti magnam tempora nisi adipisci doloremque.', 'qui,voluptatem,ut,nostrum,illo,corrupti,optio,iste,nesciunt,quaerat', '2016-02-18 19:47:27');
INSERT INTO `ml87_product` VALUES ('47', '19', '2011-05-13', 'Keaton', 'Keaton', 'SKU: 76400', 'New', '540941699.8942', 'http://lorempixel.com/100/100/?87778', 'Doloremque eligendi omnis et ipsam sapiente voluptates voluptatem dolores. Dolores ut dolorem amet est eum minima dolores rerum.', 'Active', 'Maxime molestias omnis ut fuga ex. Cumque quidem dolores consequatur alias reprehenderit. Ut quo assumenda sed atque ut et hic. Est quibusdam odio rerum odio non. Quo asperiores ipsam quisquam.', 'quidem,omnis,dolorem,enim,distinctio,dicta,expedita,ipsum,est,quis', '2016-02-18 19:47:27');
INSERT INTO `ml87_product` VALUES ('48', '19', '1990-08-06', 'Kelsi', 'Kelsi', 'SKU: 58449', 'New', '23', 'http://lorempixel.com/100/100/?20597', 'Expedita est dignissimos totam odio eum et. Aut et soluta rerum dicta. Autem tenetur veritatis consequatur quis. Rerum qui natus provident distinctio atque sit nam. Nisi est eos rerum vero.', 'Active', 'Qui ipsum voluptatibus quos magni consequatur. Laudantium error rerum voluptate consequatur odio blanditiis. Dolore et modi quos atque eligendi est doloribus.', 'necessitatibus,sed,fugiat,animi,velit,enim,nihil,atque,numquam,magni', '2016-02-18 19:47:27');
INSERT INTO `ml87_product` VALUES ('49', '19', '2014-07-02', 'Gwen', 'Gwen', 'SKU: 99547', 'New', '59', 'http://lorempixel.com/100/100/?54470', 'Facilis aut sequi voluptatem iure non quod. Assumenda eos nostrum exercitationem dolorem. Sit similique natus exercitationem architecto non deleniti ut. Aspernatur tenetur et sit voluptas quae labore voluptatem ut.', 'Active', 'Ex nihil velit cumque. Perferendis nesciunt ut autem earum. Autem quam ipsum vero aliquid sint ab neque. Voluptate repellat soluta autem voluptas a.', 'ipsum,cupiditate,eos,enim,doloremque,molestias,delectus,et,distinctio,dolorem', '2016-02-18 19:47:27');
INSERT INTO `ml87_product` VALUES ('50', '19', '1971-05-12', 'May', 'May', 'SKU: 16267', 'New', '3.86964271', 'http://lorempixel.com/100/100/?19569', 'Qui quibusdam minus nulla. Aut cum molestiae voluptatem. Quasi odio autem perspiciatis sed. Quibusdam vel adipisci enim fugit nostrum qui et.', 'Active', 'Deserunt ducimus qui minima est. Nobis a animi libero voluptates facere voluptatem. Totam porro ut dolorem vel dolor.', 'quo,facere,sunt,repellat,molestias,quam,possimus,impedit,repellat,est', '2016-02-18 19:47:27');

-- ----------------------------
-- Table structure for `ml87_product_gallery`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_product_gallery`;
CREATE TABLE `ml87_product_gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `gallery_img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_product_gallery
-- ----------------------------
INSERT INTO `ml87_product_gallery` VALUES ('1', '1', 'eacffca3f207c67e4b7dc8a9f9b1d728.jpg');
INSERT INTO `ml87_product_gallery` VALUES ('2', '1', 'd0fe01e30c018ea4d0a05d8b83fb5eda.jpg');
INSERT INTO `ml87_product_gallery` VALUES ('3', '1', '568a85be57cad1a4f1c431895f3970fb.jpg');
INSERT INTO `ml87_product_gallery` VALUES ('4', '1', '66512f2e481522ea832418d86ee041d7.jpg');

-- ----------------------------
-- Table structure for `ml87_product_specification`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_product_specification`;
CREATE TABLE `ml87_product_specification` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `create_date` varchar(100) DEFAULT NULL,
  `processor_type` varchar(100) DEFAULT NULL,
  `processor_speed` varchar(100) DEFAULT NULL,
  `hard_drive_size` varchar(100) DEFAULT NULL,
  `installed_ram` varchar(100) DEFAULT NULL,
  `screen_size` varchar(100) DEFAULT NULL,
  `operating_system` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `lan` varchar(100) DEFAULT NULL,
  `bluetooth` varchar(100) DEFAULT NULL,
  `modem` varchar(100) DEFAULT NULL,
  `camera` varchar(100) DEFAULT NULL,
  `wifi` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_product_specification
-- ----------------------------
INSERT INTO `ml87_product_specification` VALUES ('1', '1', '10/31/2015', 'Intel® Core i5', '2.2GHz', '1 TB', '4 GB', '15.6 inches', 'Ubuntu', 'Black', 'Yes', 'Yes', 'No', 'Yes', 'Yes', '2015-10-31 13:07:25');

-- ----------------------------
-- Table structure for `ml87_review`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_review`;
CREATE TABLE `ml87_review` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `review` text,
  `status` varchar(10) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_review
-- ----------------------------

-- ----------------------------
-- Table structure for `ml87_subscriber`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_subscriber`;
CREATE TABLE `ml87_subscriber` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_subscriber
-- ----------------------------
INSERT INTO `ml87_subscriber` VALUES ('1', null, 'Ayaz Ahmed', 'ayzeetech@gmail.com', null, '2016-02-02 19:04:20');
INSERT INTO `ml87_subscriber` VALUES ('2', null, 'Asif Iqbal', 'ayzeetech@gmail.com', 'Deactive', '2016-02-02 19:04:29');
INSERT INTO `ml87_subscriber` VALUES ('3', '15-12-10', 'Khalid', 'ayzeetech@gmail.com', 'Deactive', '2016-02-02 19:04:31');
INSERT INTO `ml87_subscriber` VALUES ('4', '10-12-15', 'Abdul Qadir', 'ayzeetech@gmail.com', 'Deactive', '2016-02-02 19:04:35');
INSERT INTO `ml87_subscriber` VALUES ('5', '10-12-15', 'Arsalan1', 'ayzeetec@gmail.com', 'Deactive', '2016-02-04 21:16:23');

-- ----------------------------
-- Table structure for `ml87_webmaster`
-- ----------------------------
DROP TABLE IF EXISTS `ml87_webmaster`;
CREATE TABLE `ml87_webmaster` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `create_date` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `profile` text,
  `status` varchar(10) DEFAULT NULL,
  `meta_description` text,
  `meta_keyword` varchar(100) DEFAULT NULL,
  `last_updated` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ml87_webmaster
-- ----------------------------

-- ----------------------------
-- View structure for `product_gallery_spec`
-- ----------------------------
DROP VIEW IF EXISTS `product_gallery_spec`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_gallery_spec` AS select `ml87_product`.`id` AS `pid`,`ml87_product`.`brand_id` AS `brand_id`,`ml87_product`.`create_date` AS `cdate`,`ml87_product`.`title` AS `title`,`ml87_product`.`slug` AS `slug`,`ml87_product`.`code` AS `code`,`ml87_product`.`product_condition` AS `product_condition`,`ml87_product`.`price` AS `price`,`ml87_product`.`product_img` AS `product_img`,`ml87_product`.`description` AS `description`,`ml87_product`.`status` AS `status`,`ml87_product`.`meta_description` AS `meta_description`,`ml87_product`.`meta_keyword` AS `meta_keyword`,`ml87_product`.`last_updated` AS `plupdate`,`ml87_product_gallery`.`id` AS `gid`,`ml87_product_gallery`.`product_id` AS `pgid`,`ml87_product_gallery`.`gallery_img` AS `gallery_img`,`ml87_product_specification`.`id` AS `id`,`ml87_product_specification`.`product_id` AS `product_id`,`ml87_product_specification`.`create_date` AS `create_date`,`ml87_product_specification`.`processor_type` AS `processor_type`,`ml87_product_specification`.`processor_speed` AS `processor_speed`,`ml87_product_specification`.`hard_drive_size` AS `hard_drive_size`,`ml87_product_specification`.`installed_ram` AS `installed_ram`,`ml87_product_specification`.`screen_size` AS `screen_size`,`ml87_product_specification`.`operating_system` AS `operating_system`,`ml87_product_specification`.`color` AS `color`,`ml87_product_specification`.`lan` AS `lan`,`ml87_product_specification`.`bluetooth` AS `bluetooth`,`ml87_product_specification`.`modem` AS `modem`,`ml87_product_specification`.`camera` AS `camera`,`ml87_product_specification`.`wifi` AS `wifi`,`ml87_product_specification`.`last_updated` AS `last_updated` from ((`ml87_product` join `ml87_product_gallery` on((`ml87_product`.`id` = `ml87_product_gallery`.`product_id`))) join `ml87_product_specification` on((`ml87_product`.`id` = `ml87_product_specification`.`product_id`))) ;

-- ----------------------------
-- View structure for `test_views`
-- ----------------------------
DROP VIEW IF EXISTS `test_views`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `test_views` AS select `ml87_product`.`id` AS `pid`,`ml87_product`.`brand_id` AS `brand_id`,`ml87_product`.`create_date` AS `cdate`,`ml87_product`.`title` AS `title`,`ml87_product`.`slug` AS `slug`,`ml87_product`.`code` AS `code`,`ml87_product`.`product_condition` AS `product_condition`,`ml87_product`.`price` AS `price`,`ml87_product`.`product_img` AS `product_img`,`ml87_product`.`description` AS `description`,`ml87_product`.`status` AS `status`,`ml87_product`.`meta_description` AS `meta_description`,`ml87_product`.`meta_keyword` AS `meta_keyword`,`ml87_product`.`last_updated` AS `lupdate`,`ml87_product_gallery`.`id` AS `gid`,`ml87_product_gallery`.`product_id` AS `proid`,`ml87_product_gallery`.`gallery_img` AS `gallery_img`,`ml87_product_specification`.`id` AS `id`,`ml87_product_specification`.`product_id` AS `product_id`,`ml87_product_specification`.`create_date` AS `create_date`,`ml87_product_specification`.`processor_type` AS `processor_type`,`ml87_product_specification`.`processor_speed` AS `processor_speed`,`ml87_product_specification`.`hard_drive_size` AS `hard_drive_size`,`ml87_product_specification`.`installed_ram` AS `installed_ram`,`ml87_product_specification`.`screen_size` AS `screen_size`,`ml87_product_specification`.`operating_system` AS `operating_system`,`ml87_product_specification`.`color` AS `color`,`ml87_product_specification`.`lan` AS `lan`,`ml87_product_specification`.`bluetooth` AS `bluetooth`,`ml87_product_specification`.`modem` AS `modem`,`ml87_product_specification`.`camera` AS `camera`,`ml87_product_specification`.`wifi` AS `wifi`,`ml87_product_specification`.`last_updated` AS `last_updated` from ((`ml87_product` join `ml87_product_gallery` on((`ml87_product`.`id` = `ml87_product_gallery`.`product_id`))) join `ml87_product_specification` on((`ml87_product`.`id` = `ml87_product_specification`.`product_id`))) ;
