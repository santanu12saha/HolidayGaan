-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2016 at 10:13 AM
-- Server version: 5.5.48-cll
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `winvisio_demo_vkation2`
--

-- --------------------------------------------------------

--
-- Table structure for table `superadmin_log`
--

CREATE TABLE IF NOT EXISTS `superadmin_log` (
  `superadmin_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `orginele_wachtwoord` varchar(20) NOT NULL,
  `string_pwd` varchar(70) NOT NULL,
  `string_salt` varchar(3) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `ts` datetime NOT NULL,
  `ms` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`superadmin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superadmin_log`
--

INSERT INTO `superadmin_log` (`superadmin_id`, `username`, `orginele_wachtwoord`, `string_pwd`, `string_salt`, `emailid`, `ts`, `ms`) VALUES
(1, 'VKSA', '#VK$SA@', 'e65e241ded431861c7ee8f26ee23f9086a236193e2a274584954f8666a87e168', 'c15', 'sandeep.manya@dotweb.in', '2016-01-25 15:27:53', '2016-01-25 03:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `tble_activities`
--

CREATE TABLE IF NOT EXISTS `tble_activities` (
  `activities_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_name` varchar(100) DEFAULT NULL,
  `activity_type` int(11) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `highlight_about` text,
  `activity_img` varchar(100) DEFAULT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `duration` varchar(30) DEFAULT NULL,
  `price` decimal(15,2) DEFAULT NULL,
  `time` varchar(100) DEFAULT NULL,
  `things_to_carry` text,
  `trip_add_rating` varchar(10) DEFAULT NULL,
  `out_rating` varchar(10) DEFAULT NULL,
  `inclusions` text,
  `ecotourism` tinyint(1) NOT NULL DEFAULT '0',
  `wellness_n_care` tinyint(1) NOT NULL DEFAULT '0',
  `heritage_n_sprituality` tinyint(1) NOT NULL DEFAULT '0',
  `family_n_kids` tinyint(1) NOT NULL DEFAULT '0',
  `adventure_n_explore` tinyint(1) DEFAULT '0',
  `romantic_holiday` tinyint(1) NOT NULL DEFAULT '0',
  `couple` tinyint(1) NOT NULL DEFAULT '0',
  `group_activity` tinyint(1) NOT NULL DEFAULT '0',
  `solo` tinyint(1) NOT NULL DEFAULT '0',
  `cts` date DEFAULT NULL,
  `mts` timestamp NULL DEFAULT NULL,
  `delflg` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`activities_id`),
  KEY `fk_act_type` (`activity_type`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Dumping data for table `tble_activities`
--

INSERT INTO `tble_activities` (`activities_id`, `activity_name`, `activity_type`, `location`, `highlight_about`, `activity_img`, `latitude`, `longitude`, `duration`, `price`, `time`, `things_to_carry`, `trip_add_rating`, `out_rating`, `inclusions`, `ecotourism`, `wellness_n_care`, `heritage_n_sprituality`, `family_n_kids`, `adventure_n_explore`, `romantic_holiday`, `couple`, `group_activity`, `solo`, `cts`, `mts`, `delflg`) VALUES
(1, 'Coorg Whitewater Rafting', 4, 'Coorg', 'Rafting in Coorg, through the Barapole River''s roaring currents is indeed an experience worth cherishing! The activity begins with your arrival at Barapole. You can participate in this activity of 3 hours anytime between 09:00AM to 03:00PM. Make sure you attend the next session on safety tips to enjoy the best of rafting Coorg!', '101.jpg', '12.028271', '75.929569', '1 Hours', '1250.00', 'Mon - Sun 9:00 AM - 6:00 PM', 'Pair of dry clothes\r\nCap\r\nSunscreen', '4.5', '4', 'Trained instructors charges\r\nRafting in calm water \r\nSafety equipments\r\nActivity cost.', 1, 0, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(2, 'Abbey Falls', 4, 'Coorg', 'Nestled near Madikeri, Abbey falls is one of the most amazing attractions in the Coorg. . The picturesque view of the fall will surely take your breath away and also provide you with quite a few Kodak moments. The waterfall comes down from a height of 70 feet and provides a superb vista. You will also find a hanging bridge across the gorge from which an exceptional view of this waterfall is a sight to remember.', '102.jpg', '12.45515', '75.719727', '2 hours', '0.00', 'Mon - Sun 9:00 AM - 5:00 PM', 'N A', '3.5', '3.9', NULL, 1, 1, 0, 1, 0, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(3, 'Madikeri Fort', 7, 'Coorg', 'Amid those thick forests, scenic gushing waterfalls and miles of verdant coffee plantations, history holds a deep rooted relationship with Coorg in Karnataka. And it is Madikeri, a hill station and headquarters of Coorg district that synchronizes well with its long gone historical royalty. Madikeri Fort stands as a silent spectator of events of victory and defeat from the time of Muddu Raja during 17th century. It is one of those preserved remnants of the bygone era that has not only stood the test of time, but also underwent architectural changes with passing time.', '103.jpg', '12.420946', '75.738594', '3 hours', '0.00', 'Tue - Sun 10:00 AM - 5:30 PM', 'N A', '3', '3.2', NULL, 1, 0, 1, 1, 0, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(4, 'Dubare Elephant Camp', 4, 'Coorg', 'The most famous of all Madikeri attractions is Dubare Elephant Camp which is known for the training of elephants. The nearby forests of Dubare give you an opportunity to explore the vivid wildlife of these forests. Many wild animals like Asian elephants, sambhar and cheetal deer can be seen while roaming in these forests. Tourists can also enjoy elephant rides and training sessions of elephants in this park. Wildlife safari gives you a chance to see other animals too like crocodiles, peacocks and gaurs. You can also experience the wilderness of the surroundings by staying in the lodges and resorts which are provided by the park authority. All these things make this place one of the most visited attractions in Madikeri.', '104.jpg', '12.368509', '75.904923', NULL, '0.00', NULL, 'N A', '4', '4.1', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(5, 'Omkareshwara Temple', 9, 'Coorg', 'The Omkareshwar Temple is a symbol of belief, devotion and faith. Legend has it that the then ruler of Kodagu, Lingarajendra II had murdered an innocnet Brahmin, the reasons for which are not clearly known. The Brahmin had turned into a spirit to avenge his death and the king to save himself from the clutches of the spirit had got a special lingam installed at the spot of the crime which was brought all the way from Kashi. The temple was built later in 1820.', '105.jpg', '12.420559', '75.741264', '1 hours', '0.00', 'Mon - Sun 6:30 AM - 12:00 Noon; 5:00 PM -  8:00 PM', 'N A', '4.2', '4.3', NULL, 0, 1, 1, 1, 0, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(6, 'Mallalli Falls', 9, 'Coorg', 'Mallalli Falls lies in the foot of Pushpagiri Hill Ranges, where Kumaradhara river takes a plunge over 200 feet . The falls is situated in Bettadahalli Gram Panchayat in Somwarpet Taluk of Coorg.mallalli water falls\r\nMallalli Falls is one of the most beautiful water falls in Coorg.  One would not disagree if someone says Malalli Falls better than Abbey Falls. This River flows down to Mangalore through Kukke Subrahmanya.\r\nMallalli falls is around 25 kilometers from Somvarpet or 42 kms from Kushalnagar. The water fall is only accessible by foot as the roads are very narrow and rugged.', '106.jpg', '12.681443', '75.723867', '4 hours', '0.00', 'Mon - Sun 9:00 AM - 5:00 PM', 'N A', '5', '4.4', NULL, 1, 0, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(7, 'Pushpagiri wildlife sanctuary', 10, 'Coorg', 'Pushpagiri Wildlife Sanctuary is located in Somwarpet taluk of Kodagu district in southern Karnataka. It is noted as one of the important bird areas of the world and home to rare and endangered bird life. It is spread over 102 kms. The sanctuary adjoins Bisle reserve forest to the north and Kukke Subramanya forest range to the west', '107.jpg', '12.657885', '75.686752', '5 hours', '0.00', 'Mon - Sun 6:00 AM - 6:00 PM', 'N A', '4.5', '4.3', NULL, 1, 0, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(8, 'Iruppu Falls', 9, 'Coorg', 'Iruppu waterfall is one of Coorgs major tourist attractions. Iruppu is a sacred place and is located in south Coorg on the Brahmagiri range of hills. River Lakshmana-tirtha flows nearby. According to legends Rama and Lakshmana, passed this way in search of Sita. Lakshmana shot an arrow into the Brahmagiri hills and brought into being the river Lakshmana tirtha when Rama asked him to fetch some water.\r\nThe river descends into a water fall known as the Irupu Falls and takes a 60 meter plunge down the river amidst the lushy green mountain. This place is said to possess the power to cleanse one’s sins and is visited by thousands of devotees on Shivaratri day.\r\nIrpu Falls is around 30kms from Gonikoppa and 80 kms from Madikeri. Nagarahole is just 25 kms away from Irpu Falls.', '108.jpg', '11.96557', '75.98368', '2 hours', '0.00', 'Mon - Sun 8:00 AM - 7:00 PM', 'N A', '5', '4.4', NULL, 1, 0, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(9, 'Brahmagiri Wildlife sanctuary', 10, 'Coorg', 'Brahmagiri Wildlife Sanctuary was established in 1974. It is bounded by coffee and cardamom plantations.Nagarhole National Park lies on the north western edge of the sanctuary, while the state of Kerala lies on the southern boundary. Brahmagiri peak lies on the south-eastern boundary.\r\nThe vegetation in the low-lying areas is predominantly evergreen and semi-evergreen (mainly of Bambusa species) forests, while shola grasslands cover the higher altitudes. The undulating terrain is dotted with several steep valleys and hillocks, and in this sanctuary, eight rivers and streams originate.', '109.jpg', '11.93168', '75.99102', '3 hours', '200.00', 'Mon - Sun 6:00 AM - 6:00 PM', 'N A', '4', '3.8', NULL, 1, 0, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(10, 'Gaddige Raja''s Tomb', 9, 'Coorg', 'Tombs of Raja’s, built on the edge of the hilltop of the town are the historical monuments which were designed and built in Indo-scenic style (Muhammadan edifices) of architecture. This is popular and thousands of the tourists visit here as it located within the town and easy to get there. There are two main tombs right side tomb is of Lingarajendra built by his son Chikkavirarajendra in A.D. 1820 and the left side of the tomb of Rudrappa (Royal Priest) which was built in 1834 and The Centre tomb is of Dodda Veerarajendra and his queen.', '110.jpg', '12.433295', '75.740652', '1 hours', '0.00', 'Mon - Sun 9:00 AM - 5:00 PM', 'N A', '3.2', '3', NULL, 1, 0, 1, 1, 0, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(11, 'Byle Kuppe Golden Temple', 9, 'Coorg', 'Bylakuppe is a Tibetan settlement area established by Lugsum Samdupling in 1961 and Dickyi Larsoe in 1969 and is situated to the west of Mysore District in Karnataka. \r\nIt is about 6 kilometres from the twin town of Kushalanagara and is home to the magnificent Namdroling Monastery or Golden Temple. \r\nNamdroling Monastery is the largest teaching centre of Nyingmapa, a lineage of Tibetan Buddhism, in the world, and houses over five thousand monks and nuns. ', '111.jpg', '12.430509', '75.966893', '2 hours', '0.00', 'Mon - Sun 7:00 AM - 8:00 PM', 'N A', '4.5', '4.3', NULL, 0, 1, 1, 1, 0, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(12, 'Raja’s Seat Mantapa', 9, 'Coorg', 'Raja’s Seat or the Seat of the King is a famous sunset point in Madikeri in the Coorg district of Karnataka. It was once the platform from which the kings of Kodagu used to enjoy glorious sunsets. The spot got its name as it was the favourite recreational place for the kings. Today it is a famous destination of Madikeri that is visited by tourists throughout the year', '112.jpg', '12.414071', '75.73695', '1 hours', '0.00', 'Mon - Sun 5:30 AM - 8:00 PM', 'N A', '4.3', '4.1', NULL, 1, 0, 1, 1, 0, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(13, 'The Tranquil Talacauvery and Bhagamandala', 9, 'Coorg', 'Talakaveri, is the place that is generally considered to be the source of the river Kaveri. It is located by Brahmagiri hill near Bhagamandala in Kodagu district, Karnataka, 1,276 m. above sea level.', '113.jpg', '12.385412', '75.491277', '2 hours', '0.00', 'Mon - Sun 6:00 AM - 8:30 PM', 'N A', '4.5', '4.3', NULL, 1, 1, 0, 1, 0, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(14, 'Nagarhole national park', 10, 'Coorg', 'The Nagarahole National Park is the best place for you to exactly know where the wild truly reside. A visit to the park can be an amazing experience, one that you won’t forget for a long time in your life. Nagarahole was an exclusive hunting reserve of the former rulers of Mysore.', '114.jpg', '12.041433', '76.132483', '4 hours', '150.00', 'Mon - Sun 6:00 AM - 6:00 PM', 'N A', '4.2', '4', NULL, 1, 0, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(15, 'Panambur Beach', 10, 'Mangalore', 'The Panambur Beach is located a few kilometers away from the main city of Mangalore and is known for its clean waters and sands and safety maintenance measures. This is the most popular beach here. The most crowds are found during the colorful carnivals organized here by the district authorities.', '201.jpg', '12.937107', '12.937107', '4 hours', '0.00', 'Mon - Sun 12:00 AM - 12:00 AM', 'NA', '4.5', '4.3', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(16, 'St. Mary''s Islands', 9, 'Mangalore', 'The St. Mary’s island is also known as Coconut Island. It is also called Thonsepar. It is a collection of four islands in the Arabian Sea off the coast of Malpe in Udupi, Karnataka. The sea is said to have been formed after numerous volcanic activities numerous years ago and the beach is made of the cold residue of the volcanoes and is basalt.', '202.jpg', '13.379845', '74.672897', '5 hours', '0.00', 'Mon - Sun 12:00 AM - 12:00 AM', 'NA', '4.5', '4.3', NULL, 1, 0, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(17, 'Kudroli Gokarnath Temple', 9, 'Mangalore', 'The Kudroli Gokarnatheshwara Temple is one of the country’s most magnificent and beautiful temples. The feeling of peace and spirituality comes automatically within. In the 18th century there was a lot of social unrest prevailing all around and the higher society people did not allow the poor and low society people to enter the temples in which they worshipped and treated them like untouchables. The poor and illiterates had no support above them to defend them.', '203.jpg', '12.875934', '74.831421', '1 hour', '0.00', 'Mon - Sun 8:00 AM - 8:00 PM', 'NA', '4.5', '4.7', NULL, 0, 1, 1, 1, 0, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(18, 'Kadri Manjunath Temple', 9, 'Mangalore', 'The Kadri Manjunatha Temple is located in Mangalore in district of Kadri in Karnataka. It is a square temple with 9 tanks and is located on the foothills of the highest mountain of Karnataka. The construction of the temple dates back to the 11th century.', '204.jpg', '12.885635', '74.855433', '1 hour ', '0.00', 'Mon - Sun 6:00 AM - 8:00 PM', 'NA', '4.2', '4.4', NULL, 0, 1, 1, 1, 0, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(19, 'Sultan Battery', 9, 'Mangalore', 'Sultan battery is situated in Boloor and is popular for its watch tower. It is believed to have been built by Tipu Sultan and thus the name Sultan Battery. It was built 15 years before the death of Tipu Sultan.\r\nIt is completely built of black stone. You can get a fantastic panoramic view of the Arabian Sea and the surrounding places as you stand on the top of the watch tower', '205.jpg', '12.889726', '74.821149', '3 Hours', '0.00', 'Mon - Sun 12:00 AM - 12:00 AM', 'NA', '4', '3.6', NULL, 1, 0, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(20, 'Pilikula Nisargadhama', 9, 'Mangalore', 'The Pilikula Nisargadhama is a huge eco-educational and tourism project under the supervision of the Dakshin kannada and is promoted by them in the city of Mangalore in Karnataka. It is an integrated theme park with wide range of features including educational and sports and entertainment. There is also a tropical forest, boating facilities, waterpark, biological-park, science center, golf course and a lot more. The other main attractions are the heritage village and the ayurvedic therapy center.', '206.jpg', '12.929949', '74.895856', '3 hours', '0.00', 'Mon - Sun 9:30 AM - 5:30 PM', 'NA', '4', '3.5', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(21, 'Sammilan Shetty''s Butterfly Park', 9, 'Mangalore', 'Butterflies as we know are one of the most amazing and beautiful creatures on earth and are also a very vital part of the ecosystem. Not only beauty but their formation and development process is in itself a fantastic thing to see from the caterpillar to a pupa and then the adult. They are a part of the food web and also are good pollinators. These beautiful creatures are in immediate need of conservation and protection and the Sammilan Shetty’s Butter Fly Park is one such association doing a fantastic job in this field. This park in the Belvai Village of Karnataka is a huge place in the heart of the Kanthavada Forest in the middle of the famous towns of Moodabidri and Karkala.', '207.jpg', '13.122745', '74.993308', '1 hours', '50.00', 'Sun - 8:30 AM - 12:30 PM', 'NA', '4.2', '4.6', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(22, 'Surathkal Beach', 9, 'Mangalore', 'Surathkal is a suburb of the city of Mangalore on the National Highway- 66. It is in the Dakshin Kannada District of Karnataka. It is under the supervision of the Mangalore City Corporation.\r\nAccording to legendary stories the name Surathkal comes from the word ‘Shiratakal’ which means headstone. This is so named because the Sadashiva Temple here was established with a shivlinga that was carried on the head of a demon named Kharasura.', '208.jpg', '12.981284', '74.794522', '4 hours', '0.00', 'Mon - Sun 12:00 AM - 12:00 AM', 'NA', '4', '4.2', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(23, 'Kateel Shri Durgaparameshwari Temple', 9, 'Mangalore', 'Kateel or Kateelu is a temple town in the Dakshin Kannada district of Karnataka. It is considered as one of the holiest temple towns of India and the main attractions here is the Durgaparameshwari Temple. This beautiful temple is situated on an islet in the middle of the River Nandini. It is a very popular temple and is flocked by thousands of devotees every year.', '209.jpg', '13.043607', '74.869842', '1 hour', '0.00', 'Mon - Sun 10:00 AM - 6:00 PM', 'NA', '4', '4.5', NULL, 0, 1, 1, 1, 0, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(24, 'Mangaladevi Temple', 9, 'Mangalore', 'MangalaDevi Temple, built in memory of the princess of Malabar Mangale in the 10th century. The Goddess Mangale is worshiped as Shakti. The festival is celebrated during 9 days of Navaratri (October). On the seventh day, Goddess Mangaladevi is worshipped as Sharadamba and on the eighth day the goddess is worshipped as Maarikamba.', '210.jpg', '12.849223', '74.845469', '1 hour', '0.00', 'Mon - Sun 6:30 AM - 8:30 PM', 'NA', '4', '4.6', NULL, 0, 1, 1, 1, 0, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(25, 'Mantra Surf Club', 9, 'Mangalore', 'The Mantra Surf Club was started in 2004 by Jack Hebner and Rick Perry who as kids had begun surfing themselves in 1963 at Jacksonville Beach, Florida, USA. Back in the old days both Jack and Rick were members of North Florida''s first surf club, Oceanside, and were among the pioneers of surfing on the East Coast of the United States. They are now pioneering surfing in India.', '211.jpg', '13.082987', '74.780589', '4 hours', '0.00', 'Mon - Sun 6:30 AM - 8:30 PM', 'NA', '4', '4.2', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(26, 'wayanad wildlife sanctuary', 10, 'Wayanad', 'Wayanad Wildlife Sanctuary is an animal sanctuary in Wayanad, Kerala, India. It is having an extent of 344.44 km² with four ranges namely Sulthan Bathery, Muthanga, Kurichiat and Tholpetty.', '301.jpg', '11.935833', '76.00228', '2 hours', '300.00', 'Mon - Sun 7:00 AM - 10:00 AM & 3:00 PM - 6:00 PM', 'NA', '3.5', '3.3', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(27, 'Edakkal Caves', 10, 'Wayanad', 'It is a dwelling that showcases nature’s skill and philosophy on architecture and you have to trek to about 4000 ft up a mountain to reach the place. We are talking about Edakkal Caves, which still remain a wonder and a mystery for archaeologists and historians alike. ', '302..jpg', '11.625823', '76.235574', '3 Hours', '0.00', 'Mon - Sun 9:00 AM - 5:00 PM ', 'NA', '4.5', '4.3', NULL, 1, 0, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(28, 'Thirunelli Temple', 10, 'Wayanad', 'Thirunelli Temple is an ancient temple dedicated to Lord Maha Vishnu on the side of Brahmagiri hill in Kerala. The temple is at an altitude of about 900m in north Wayanad in a valley surrounded by mountains and beautiful forests', '303.jpg', '11.911629', '75.995967', '2 hours', '0.00', 'Mon - Sun 5:00 AM - 12:00 PM & 5:30 PM - 8:00 PM', 'NA', '4', '4.2', NULL, 0, 1, 1, 1, 0, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(29, 'Lakkidi View', 10, 'Wayanad', 'Lakkidi is the Gateway of Wayanad district of Kerala State. It gets the second highest degree of rainfall in the world.\r\nLakkidi is one of the highest locations in Wayanad. It is situated 700 m above mean sea level, atop Thamarassery Ghat Pass. A Tour to the rain soaked silhouettes of Lakkidi would enable the Tourists to decipher the same magic.', '304.jpg', '11.512194', '76.018932', '4 hours', '0.00', 'Mon - Sun 12:00 AM -12 :00 AM', 'NA', '4', '4.4', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(30, 'Soochipara Falls', 10, 'Wayanad', 'Sentinel Rock Waterfalls is located in Wayanad district of Kerala. Locally known as Soochipara (needle rock) waterfalls, the pool at the foot of the falls is ideal for a quick dip. One of the most attractive falls in the district, the water hits the sharp spikes of granite at the base and hence the name, Sentinel Rock waterfalls.The waterfalls is located on Kozhikode - Vythiri - Gudallur Highway about 25 km from Kalpetta in Wayanad. ', '305.jpg', '11.507581', '76.157892', '3 hours', '0.00', 'Mon - Sun 9:00 AM - 5:00 PM ', 'NA', NULL, NULL, NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(31, 'Pakshipathalam bird sanctuary', 10, 'Wayanad', 'Situated at an altitude of 1740m and accessible only by trekking, Pakshipathalam is home to several species of birds and is an ornithologist''s paradise. It is located in the Brahmagiri Hills near Thirunelly. There is a cave here, which according to legend, was used by rishis (saints) for meditation in ancient times, has become a major attraction for tourists.', '306.jpg', '11.932617', '75.993794', '7 hours', '50.00', 'Mon - Sun 6:00 AM - 6:00 PM ', 'NA', '4', '4.2', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(32, 'Meenmutty Falls', 10, 'Wayanad', 'An interesting 2 km jungle trek will lead to the largest and most spectacular waterfall in Wayanad - Meenmutty Waterfalls. A unique feature of Meenmutty waterfalls is that the water drops from nearly 1000 ft over three stages, presenting a triple-decker effect. The falls is located on the Ooty main road in Wayanad.', '307.jpg', '11.527948', '76.236707', '1 hours', '0.00', 'Mon - Sun 9:00 AM - 5:00 PM ', 'NA', '3.7', '3.8', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(33, 'kanthanpara waterfalls', 10, 'Wayanad', 'Kanthanpara waterfall (also Kanthenpara) is a unique picnic spot where you could spend quality time with your family or friends. There are two waterfalls surrounded by plantations and the forest. \r\nThe narrow road to this cascade is through tea gardens and coffee plantations. Among other crops that enrich the fertile slopes, it is easy to notice banana plants and betel trees.', '308.jpg', '11.559973', '76.148453', '2 hours', '0.00', 'Mon - Sun 6:00 AM - 6:00 PM ', 'NA', '3.4', '3.6', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(34, 'Chethalayam Falls', 10, 'Wayanad', 'Chethalayam falls is located about 12 kilometres from Sulthan Batheri. Chethalayam is smaller and lesser known compared to other waterfalls in Wayanad.\r\nProbably many people may consider the long trek to the waterfall as the best part. The woods are thick and there are plenty of birds and butterflies.\r\nIf all stars aligned properly, you may also spot a bit of wildlife, as you walk 4 kilometers to the waterfall.', '309.jpg', '11.765739', '76.252596', '1 hours', '0.00', 'Mon - Sun 9:00 AM - 6:00 PM ', 'NA', '4.4', '4.2', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(35, 'wayanad heritage museum', 9, 'Wayanad', 'Wayanad Heritage Museum, also known as Ambalavayal Heritage Museum is a museum at Ambalavayal, 12 km south of Sulthan Bathery, in Wayanad district, Kerala, India. It is managed by the District Tourism Promotion Council.', '310.jpg', '11.619334', '76.210669', '2 hours', '15.00', 'Mon - Sun 9:00 AM - 6:00 PM ', 'NA', '4.5', '4.3', NULL, 0, 0, 1, 1, 0, 0, 1, 1, 1, '2016-04-05', NULL, 1),
(36, 'Pazhassi Raja Tomb', 9, 'Wayanad', 'Pazhassi Raja Tomb is a great place to visit if you want to know more about Wayanad. The destination offers a sneak peek into the history of the place. So visit the tomb and you will be happily surprised as there is also a museum which will show you the history of the destination. From ancient artefacts to relics of national importance the location is a must visit for anyone who comes this way.', '311.jpg', '11.801508', '76.000682', '2 hours', '0.00', 'Mon - Sun 9:00 AM - 5:00 PM ', 'NA', '4.4', '4', NULL, 0, 0, 1, 1, 0, 0, 1, 1, 1, '2016-04-05', NULL, 1),
(37, 'Chembra Peak', 9, 'Wayanad', 'Chembra Peak is one of the most picturesque trekking experiences that you can have. The destination is all about the charming scenery and a view that will blow you away. The whole setting of the location is nothing less than a dream. The climb up the peak can be challenging at some times so remember to pack good hiking shoes. The destination offers spectacular views and a trekking experience that you can enjoy with your family and friends.', '312.jpg', '11.511755', '76.0887', '2 hours', '0.00', 'Mon - Sun 7:00 AM - 5:00 PM ', 'NA', '4.4', '4.2', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(38, 'Om Beach', 11, 'Gokarana', 'Located just adjacent to Kudle beach, Om beach has a very calm and serene vibe to it. The sand here is much finer than the Kudle beach. The beach has been named as ‘Om’ since its shape resembles the Sanskrit word ‘Om’, when seen from above. A good place for long strolls, there are a couple of restaurants nearby for refreshments. There are also a few shacks and huts for relaxation.', '401.jpg', '14.519271', '74.322993', '2 hours', '0.00', 'Mon - Sun  12:00 AM - 12:00 AM', 'NA', '4', '4.2', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(39, 'Kudle Beach', 11, 'Gokarana', 'One of the five main beaches in the town of Gokarna, Kudle beach lies about 6 kms to its south. It’s a nice C shaped beach with clean sand, clear waters and cool breeze. Weekends are a bit crowded as it attracts a lot of locals while weekdays are silent and less occupied. There’s simple accommodation of huts and tents nearby. A beautiful beach to relax yourself with family and friends.', '402.jpg', '14.528689', '74.3153', '2 hours', '0.00', 'Mon - Sun  12:00 AM - 12:00 AM', 'NA', '4.5', '4.3', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(40, 'Gokarna Beach', 11, 'Gokarana', 'The Gokarna Beach, also known as Indian beach is the most popular as well the most dirty amongst all other beaches. Pilgrims visit this beach as it is closest to the temple resulting in it being crowded most of the time. The waters here are not suitable for bathing but it’s still a nice place to visit.', '403.jpg', '14.54464', '74.313154', '1 hours', '0.00', 'Mon - Sun  12:00 AM - 12:00 AM', 'NA', '3.5', '3.7', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(41, 'Mahabaleswara Temple', 12, 'Gokarana', 'One of the most important attractions of Gokarna, The temple is very well known because of a beautiful legend attributed to it. It is here where Ravana, the demon king had to rest the ‘Atmalinga’ statue when he was tricked by Lord Ganesh who at last built a temple around. The temple is built in proper Dravidian architecture. It is said that Shivaji, the great emperor had visited this temple once to offer his prayers. The carved stone image of Lord Shiva inside the sanctum is said to be 1500 years old.', '404.jpg', '14.543541', '74.316704', '1 hours', '0.00', 'Mon - Sun  6:00 AM - 12:30 PM & 5:00 PM - 8:00 PM', 'NA', '4', '4.2', NULL, 0, 1, 1, 1, 0, 0, 1, 1, 1, '2016-04-05', NULL, 1),
(42, 'Paradise Beach', 11, 'Gokarana', 'A beach fit for its name, the Paradise Beach is located just ahead of Om Beach. Usually remains less occupied since it has to be reached either from ferry or by a trek through the forests. The view from the cliffs is simply splendid, the sand here is clean and the waters are azure. This beach is surely worth a visit for those with a deep wanderlust. You can stay at a shack for a cheap prize.', '405.jpg', '14.518198', '74.337377', '2 hours', '0.00', 'Mon - Sun  12:00 AM - 12:00 AM', 'NA', '4', '4.2', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(43, 'Half Moon Beach', 11, 'Gokarana', 'A nice small beach on the way to Paradise beach, Half Moon is located just next to Om beach. Its crescent shaped shore has a fine sand and clean waters. There are shacks where you can relax and sip a chilled beer if you like. Some also play soccer and volleyball here as the sand area is quite big.', '406.jpg', '14.518037', '74.331507', '2 hours', '0.00', 'Mon - Sun  12:00 AM - 12:00 AM', 'NA', '4.5', '4.7', NULL, 1, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-05', NULL, 1),
(44, 'Maha Ganpati Temple', 12, 'Gokarana', 'Quite an old temple with an even older idol of Lord Ganesh, Maha Ganapati Temple is located near to Mahabaleshwar Temple. It is dedicated to the legend of Lord Ganesh where he played a trick on the Demon king Ravana. The idol in the sanctum is said to be 1500 years old. It’s a nice temple to visit and to offer prayers.', '407.jpg', '14.543551', '74.316361', '1 hours', '0.00', 'Mon - Sun  5:00 AM - 12:00 PM & 4:00 PM - 9:00 PM', 'NA', '4', '4.2', NULL, 0, 1, 1, 1, 0, 0, 1, 1, 1, '2016-04-05', NULL, 1),
(45, 'Kotitirtha', 9, 'Gokarana', 'Kotitirtha is small pond towards the south eastern end of Mahabaleshwar temple. The pond holds a spiritual significance and hence a lot of people use this place for bathing and other religious purposes. In the month of November a lot of people come here to light small earthen lamps and set them afloat on the pond which is a beautiful sight to watch.', '408.jpg', '14.541785', '74.320765', '1 hours', '0.00', 'Mon - Sun  12:00 PM - 11:59 PM', 'NA', '3.5', '2.7', NULL, 1, 1, 1, 1, 0, 0, 1, 1, 1, '2016-04-05', NULL, 1),
(46, 'Mirjan Fort', 9, 'Gokarana', 'Located about 11 km away from Gokarna town, Mirjan Fort still stands strong overlooking the lush green plateau. There’s still confusion among historians regarding the exact time of construction of this fort. The fort has strong tall walls and bastions built with laterite stones and have four entrances. Inside you’ll find many wells, tunnels and secret entrances some of them which lead to the canal. Monsoon is usually the best time to visit the fort.', '409.jpg', '14.488851', '74.41755', '1 hours', '0.00', 'Mon - Sun  11:00 PM - 7:30 PM', 'NA', '4', '4.2', NULL, 0, 0, 1, 1, 0, 0, 1, 1, 1, '2016-04-05', NULL, 1),
(47, 'Anshi National Park', 9, 'Gokarana', 'Anshi National Park is located at a distance of 60 km from Karwar in Uttara Kannada district. Anshi National Park is spread about 340 sq km and adjoins the Dandeli wildlife sanctuary.\r\nThe forest in the area was declared the Dandeli wildlife sanctuary on 10 May 1956. A section of Dandeli wildlife sanctuary was carved out to form the Anshi National Park. Anshi National Park has been granted the status of Project Tiger sanctuaries in January 2007.\r\nAnshi National Park is located in an eco-sensitive part of the Western Ghats, at a height between 200 m to 925 m above sea level.', '410.jpg', '14.998048', '74.358597', '4 hours', '400.00', 'Mon - Sun 6:00 AM - 8:30 AM & 4:00 PM - 6:00 PM', 'NA', '4', '4.2', NULL, 1, 0, 0, 1, 1, 0, 1, 1, 1, '2016-04-05', NULL, 1),
(48, 'Lalbagh Botanical Garden', 13, 'Bangalore', 'One of the main tourist attractions in Bengaluru, Lalbagh is an internationally renowned centre for botanical artwork, scientific study of plants and also conservation of plants. The lush green garden is spread over an area of 240 acres in the heart of the city with nearly 1,854 species of plants and 673 genera. The collection of the plants here has made it a veritable treasure house of plants. Originally commissioned by Hyder Ali, the ruler of Mysore, it was later finished by his son Tipu Sultan. Hyder Ali laid out this popular botanical garden and his son added horticultural wealth to them by importing trees and plants from countries all over the world', '501lbg.jpg', '12.950769', '77.58474', '2 hours', '0.00', 'Mon - Sun 6:00 AM - 7:00 PM', 'NA', '4', '4.2', NULL, 1, 1, 0, 1, 0, 1, 1, 1, 1, '2016-04-11', NULL, 1),
(49, 'Wonderla Amusement Park', 14, 'Bangalore', 'An amusement park spread over 82 acres of area and has everything that makes you have a wonderful time is what the Wonderla theme park is all about. With 55 different fun rides, Wonderla theme park offers variety of features like Water Rides, Musical Fountain, Laser Shows, Virtual Reality Shows and even a dance floor. With environmentally friendly construction and maintained levels of hygiene, Wonderla theme park continues to be a favorite for family outings, school trips and for anyone and everyone who wants to have fun.', '502.jpg', '12.834274', '77.401044', '7 hours', '870.00', 'Mon - Fri 11:00 AM - 6:00 PM & Sat - Sun 11:00 AM - 7:00 PM', 'NA', '4.2', '4.5', NULL, 0, 1, 0, 1, 1, 1, 1, 1, 1, '2016-04-11', NULL, 1),
(50, 'MTR', 15, 'Bangalore', 'Visit city’s most treasured secret that displays the perfect blend of spices to serve the most authentic South Indian breakfast. The Idlis here are the most simplistic yet divinely tasting affair to remember. You have to have a brunch here if you are in the city!', '503.jpg', '12.980517', '77.640463', '1 hours', '0.00', 'Mon - Sun 6:30 AM - 11:00 AM & 12:30 PM - 2:00 PM  & 3:30 PM - 09:30 PM', 'NA', '4', '4.2', NULL, 0, 0, 0, 1, 0, 1, 1, 1, 1, '2016-04-11', NULL, 1),
(51, 'Bannergatta National Park', 16, 'Bangalore', 'The Bannergatta National Park is a huge biological reserve displays a vivid range of native animals like Indian Leopard. The other fauna  in the park include: Elephants, Gaur, Jackal, Fox, Wild Boar, Sloth Bear, Sambar, Chital, Spotted deer, Barking deer, common Langur and many more. There is also an abundant range of fauna. The safari ride is not to be missed and this is one of the most alluring places to visit in Bangalore', '504.jpg', '12.770083', '77.567711', '3 hours', '30.00', 'Mon, Wed - Sun 9:30 AM - 5:00 PM', 'NA', '4', '4.2', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2016-04-11', NULL, 1),
(52, 'Vidyarthi Bhavan', 15, 'Bangalore', 'Relish the classic south Indian food like The Kesari Bath, Masala Dosa and a variety you can never get enough of at Bangalore’s priced restaurant cum eatery, the Vidyarthi bhavan!', '505.jpg', '12.945046', '77.571465', '1 hours', '0.00', 'Mon - Thu 6:30 AM - 11:30 AM, 2:00 PM - 8:00 PM & Sat - Sun 7:00 AM - 12:00 PM, 2:30 PM - 8:00 PM', 'NA', '4', '4.2', NULL, 0, 0, 0, 1, 0, 0, 1, 1, 1, '2016-04-11', NULL, 1),
(53, 'Cubbon Park', 17, 'Bangalore', 'City’s most cherished park located right in the heart of the city is a green enclave of vast area that will soothen your eyes with the greenery and cleanliness. You can step into the Cubbon Park, a green breath covering about 300 acres. Oak, Cassia, Gulmohar stand over grassy patches and walkways. There are secluded Nooks (best avoided when alone), Bamboo Groves and a Lotus pond. Cubbon Park allows thorough fare for cars and has public buildings like the Press Club, the State Archaeological Museum and the Seshadri Iyer Memorial Hall which hosts the State Public Library.', '506.jpg', '12.975541', '77.59093', '2 hours', '0.00', 'Tue - Sun 12:00 AM - 12:00 PM', 'NA', '4', '4.2', NULL, 1, 1, 0, 1, 0, 1, 1, 1, 1, '2016-04-11', NULL, 1),
(54, 'Bengaluru Palace', 9, 'Bangalore', 'Built by Rev. Garrett, the first Principal of the Central High School in Bengaluru, it was bought by Chamarajendra Wodeyar in the year 1873. Built in Tudor-style architecture, it is adorned with magnificent woodcarvings. The palace holds resemblance to the medieval castles that were built in Normandy and England. Once surrounded by beautiful gardens, the palace has now not what it used to be. But, it still succeeds in attracting tourists. Gothic windows, Fortified towers, Battlements and Turrets lend a great degree of magnificence to the Bengaluru Palace. Mainly constructed of wood, it features splendid carvings and paintings', '507.jpg', '12.998647', '77.592217', '2 hours', '225.00', 'Mon - Sun 10:00 - 5:00 PM', 'NA', '4.2', '4.2', NULL, 0, 0, 1, 1, 0, 0, 1, 1, 1, '2016-04-11', NULL, 1),
(55, 'Bull Temple', 12, 'Bangalore', 'Dedicated to Nandi Bull, the Bull Temple is also known as ''Dodda Basavana Gudi''. A colossal granite statue is the highlight of this temple. Situated inside a park called Bugle Rock, this is one of the more popular temples in all of Bengaluru. Said to be the biggest Nandi temple in the world, the stone cut image of Nandi is continually covered with new layers of butter, known as benne in the local language of Kannada.', '508.jpg', '12.942877', '77.568264', '1 hours', '0.00', 'Mon - Sun 6:00 AM - 12:00 PM , 5:30 PM - 9:00 PM', 'NA', '4', '4.2', NULL, 1, 1, 1, 1, 0, 0, 1, 1, 1, '2016-04-11', NULL, 1),
(56, 'Tipu Sultan''s Palace', 9, 'Bangalore', 'Initially built by Kempe Gowda, the founder of Bengaluru, the palace was later extended by Tipu Sultan, the Emperor of Mysore. Located near the City Market, the fort dates back to the year 1537. This majestic fort stands as a witness to the struggle of the Mysore Emperor against the British domination. The arches are intricately carved and have been built as per the Islamic style. One of the major attractions of the fort is the well-preserved Ganapati temple, which is situated inside the fort. Within the fort there is Tipu Sultan palace, which dates back to year 1790.', '509.jpg', '12.959297', '77.573682', '2 hours', '0.00', 'Mon - Sun 8:30 AM - 5:30 PM', 'NA', '4', '4.2', NULL, 0, 0, 1, 1, 0, 0, 1, 1, 1, '2016-04-11', NULL, 1),
(57, 'Vidhana Soudha', 9, 'Bangalore', 'The majestic and imposing building of Vidhan Soudha houses the State Legislature. The largest Secretariat in India, its construction began in 1952 and was completed in 1956. Chief Minister of the then Mysore State, Kengal Hanumanthaiah, was responsible for the structure, the concept and the setting of this magnificent building.', '510.jpg', '12.979641', '77.590678', '1 hours', '0.00', 'Mon - Fri 9:30 AM - 5:30 PM', 'NA', '4', '4.2', NULL, 0, 0, 1, 1, 0, 0, 1, 1, 1, '2016-04-11', NULL, 1),
(58, 'HAL Aerospace Museum', 9, 'Bangalore', 'India’s second largest public aerospace museum, it was established in 2001 by Hindustan Aeronautics Limited (HAL). It features a museum, showcasing the history and achievements of HAL, a library, aero modeling club and a souvenir shop. Fighter planes, jets, air crafts and still more air crafts! Sky will be the limit for your little one’s excitement at Hindustan Aeronautics Limited (HAL) The Heritage Centre and Aerospace Museum. What’s more? You’ll get to use the flight simulator as well (at INR 10). Pinch yourself, it’s true!\r\nThis museum has everything you want to know about the aeronautical history ', '511.jpg', '12.954598', '77.681039', '2 hours', '0.00', 'Mon - Sun 9:00 AM - 6:00 PM', 'NA', '4', '4.2', NULL, 0, 0, 1, 1, 0, 0, 1, 1, 1, '2016-04-11', NULL, 1),
(59, 'St. Mary Basilica', 18, 'Bangalore', 'A classic gothic architectural structure and one of the oldest churches of Bangalore. It is famous for the festivities held during the St. Mary''s Feast in the month of September each year, an event that attracts a number of devotees from in and around Bangalore.', '512.jpg', '12.984263', '77.604541', '1 hours', '0.00', 'Mon - Sun 9:00 AM - 6:00 PM', 'NA', '4.2', '4.5', NULL, 1, 1, 1, 1, 0, 0, 1, 1, 1, '2016-04-11', NULL, 1),
(60, 'Iskcon Sri Radha Krishna-chandra Temple', 12, 'Bangalore', 'Iskcon temples are spread not just in India but also throughout the world. Iskcon temple in Bangalore is yet another attraction that will keep you spell bound to the city owing to its spiritual aura and preaching on love. Originally laid down in 1990, the Iskcon temple disseminates the ideology of love and peace through its spiritual icon, Krishna. Located at Rajajinagar, this temple boasts of being one of the largest Iskcon temples in the world. So do visit this temple for a spiritual self-reflection and faith.', '513.jpg', '13.010411', '77.550964', '2 hours', '0.00', 'Mon - Sun 4:15 AM - 8:20 PM', 'NA', '4.2', '4.5', NULL, 1, 1, 1, 1, 0, 0, 1, 1, 1, NULL, NULL, 1),
(61, 'Dodda Ganapathi Temple', 12, 'Bangalore', 'Located at the famous Bull temple road in Bangalore, the Dodda Ganapathi temple is yet another jewel in the temple trail of the city. Dodda Ganesha Temple at Basavanagudi was constructed by Kempegowda I, the founder of Bangalore. It is believed that while taking a stroll here, Kempegowda found a number of rocks and one of the boulders that had a shape of Ganesha engraved on them. Thereafter, Kempegowda ordered his sculptors to convert the shape into a massive as well as fantastic single stone idol of Lord Ganesha. Standing 18 ft tall in height and 16 ft wide, this idol looks impressive and huge.', '514.jpg', '12.942872', '77.568264', '1 hours', '0.00', 'Mon - Sun 7:00 AM - 12:30 PM , 5:30 PM - 8:30 PM', 'NA', '4.2', '4.5', NULL, 1, 1, 1, 1, 0, 0, 1, 1, 1, '2016-04-11', NULL, 1),
(62, 'Bangalore Turf Club', 19, 'Bangalore', 'The Bangalore Turf Club Race Course is a special attraction of Bangalore city as it promises a great deal of entertainment quotient to those who visit it. People who are interested can visit an exciting day here replete with horse races. Here, you will find a variety of horse race types that includes running over obstacles, running over different distances, running on different track surfacesand running in different gaits. A visit to this place is a must for those who want to see this lavish form of entertainment.', '515.jpg', '12.984136', '77.582577', '3 hours', '0.00', 'As per the Races', 'NA', '3.5', '3.7', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2016-04-11', NULL, 1),
(63, 'Butterfly Park', 17, 'Bangalore', 'As the name suggests, the Butterfly park in Bangalore is a special place for the insect world. The Park was conceptualized as one integrated center that would support education, conservation and research activities with exclusive focus on butterflies as flagship ambassadors of conservation. A visit to this place will make you get lost in the world of butterflies as well as other insects. For those who are interested in the specificities, this butterfly garden also holds a Research and captive breeding laboratory, a museum and a curio shop.', '516.jpg', '12.796079', '77.576419', '2 hours', '0.00', 'Mon , Wed - Sun 9:30 AM - 5:00 PM', 'NA', '3.5', '3.7', NULL, 1, 1, 1, 1, 0, 1, 1, 1, 1, '2016-04-11', NULL, 1),
(64, 'Grover Vineyards Ltd', 9, 'Bangalore', 'Something beautiful about Bangalore is that this city is also a perfect gateway to some of the most astounding weekend destinations for which you don’t have to travel much. Located at a distance of 30 kms from Bangalore Airport, the Grover Zampa Vineyard is a perfect place to go for some wine tasting. Grover Vineyards offers a chance to get a firsthand experience of the winemaking process through their personalized tours. The tour starts at the vineyard where a brief history of wines and cultivation is provided.  So click some great pics and taste some great wine for a distinct exotic experience.', '517.jpg', '13.001345', '77.597496', '2 hours', '0.00', 'Mon - Sun 10:30 AM - 3:00 PM', 'NA', '3.5', '3.7', NULL, 1, 1, 1, 1, 0, 1, 1, 1, 1, '2016-04-11', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tble_activities_around`
--

CREATE TABLE IF NOT EXISTS `tble_activities_around` (
  `activities_aound_id` int(11) NOT NULL,
  `activity_id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `cts` date NOT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delflag` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`activities_aound_id`),
  KEY `fk_activity_around_id` (`activity_id`),
  KEY `fk_property_around_id` (`property_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tble_activities_around`
--

INSERT INTO `tble_activities_around` (`activities_aound_id`, `activity_id`, `property_id`, `cts`, `mts`, `delflag`) VALUES
(1, 1, 1, '2016-02-09', '2016-02-09 04:46:46', 1),
(2, 1, 2, '2016-02-09', '2016-02-09 04:46:46', 1),
(3, 1, 3, '2016-02-09', '2016-02-09 04:46:46', 1),
(4, 1, 4, '2016-02-09', '2016-02-09 04:46:46', 1),
(5, 1, 5, '2016-02-09', '2016-02-09 04:46:46', 1),
(6, 1, 6, '2016-02-09', '2016-02-09 04:46:46', 1),
(7, 1, 7, '2016-02-09', '2016-02-09 04:46:46', 1),
(8, 1, 8, '2016-02-09', '2016-02-09 04:46:46', 1),
(9, 1, 9, '2016-02-09', '2016-02-09 04:46:46', 1),
(10, 1, 10, '2016-02-09', '2016-02-09 04:46:46', 1),
(11, 2, 1, '2016-02-09', '2016-02-09 04:46:46', 1),
(12, 2, 2, '2016-02-09', '2016-02-09 04:46:46', 1),
(13, 2, 3, '2016-02-09', '2016-02-09 04:46:46', 1),
(14, 2, 4, '2016-02-09', '2016-02-09 04:46:46', 1),
(15, 2, 5, '2016-02-09', '2016-02-09 04:46:46', 1),
(16, 2, 6, '2016-02-09', '2016-02-09 04:46:46', 1),
(17, 2, 7, '2016-02-09', '2016-02-09 04:46:46', 1),
(18, 2, 8, '2016-02-09', '2016-02-09 04:46:46', 1),
(19, 2, 9, '2016-02-09', '2016-02-09 04:46:46', 1),
(20, 2, 10, '2016-02-09', '2016-02-09 04:46:46', 1),
(21, 3, 1, '2016-02-09', '2016-02-09 04:46:46', 1),
(22, 3, 2, '2016-02-09', '2016-02-09 04:46:46', 1),
(23, 3, 3, '2016-02-09', '2016-02-09 04:46:46', 1),
(24, 3, 4, '2016-02-09', '2016-02-09 04:46:46', 1),
(25, 3, 5, '2016-02-09', '2016-02-09 04:46:46', 1),
(26, 3, 6, '2016-02-09', '2016-02-09 04:46:46', 1),
(27, 3, 7, '2016-02-09', '2016-02-09 04:46:46', 1),
(28, 3, 8, '2016-02-09', '2016-02-09 04:46:46', 1),
(29, 3, 9, '2016-02-09', '2016-02-09 04:46:46', 1),
(30, 3, 10, '2016-02-09', '2016-02-09 04:46:46', 1),
(31, 4, 1, '2016-02-09', '2016-02-09 04:46:46', 1),
(32, 4, 2, '2016-02-09', '2016-02-09 04:46:46', 1),
(33, 4, 3, '2016-02-09', '2016-02-09 04:46:46', 1),
(34, 4, 4, '2016-02-09', '2016-02-09 04:46:46', 1),
(35, 4, 5, '2016-02-09', '2016-02-09 04:46:46', 1),
(36, 4, 6, '2016-02-09', '2016-02-09 04:46:46', 1),
(37, 4, 7, '2016-02-09', '2016-02-09 04:46:46', 1),
(38, 4, 8, '2016-02-09', '2016-02-09 04:46:46', 1),
(39, 4, 8, '2016-02-09', '2016-02-09 04:46:46', 1),
(40, 4, 10, '2016-02-09', '2016-02-09 04:46:46', 1),
(41, 5, 1, '2016-02-09', '2016-02-09 04:46:46', 1),
(42, 5, 2, '2016-02-09', '2016-02-09 04:46:46', 1),
(43, 5, 3, '2016-02-09', '2016-02-09 04:46:46', 1),
(44, 5, 4, '2016-02-09', '2016-02-09 04:46:46', 1),
(45, 5, 5, '2016-02-09', '2016-02-09 04:46:46', 1),
(46, 5, 6, '2016-02-09', '2016-02-09 04:46:46', 1),
(47, 5, 7, '2016-02-09', '2016-02-09 04:46:46', 1),
(48, 5, 8, '2016-02-09', '2016-02-09 04:46:46', 1),
(49, 5, 9, '2016-02-09', '2016-02-09 04:46:46', 1),
(50, 5, 10, '2016-02-09', '2016-02-09 04:46:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tble_activity_review`
--

CREATE TABLE IF NOT EXISTS `tble_activity_review` (
  `activity_review_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `review` text,
  `rating` varchar(20) DEFAULT NULL,
  `cts` date NOT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delflag` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`activity_review_id`),
  KEY `FK_activity_review` (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `tble_activity_review`
--

INSERT INTO `tble_activity_review` (`activity_review_id`, `activity_id`, `customer_name`, `review`, `rating`, `cts`, `mts`, `delflag`) VALUES
(1, 1, 'Rohit Dahiya ', 'My first river rafting experience and Coorg white water rafting simply owned me. Coorg Water Sports were the organizers and it costed around Rs. 800. The total length of the rafting was roughly 4kms during which you encounter 6 rapids. Non swimmer and new to water rafting i was a bit skeptical and to be honest a bit scared too But the entire experience was thoroughly enjoyable.\r\n', '4.2', '2016-04-11', '2016-04-11 06:34:55', 1),
(2, 2, 'Sanoop Sanjan', 'A beautiful waterfalls to be enjoyed with lots of smiles around u. The cool wind and water takes u to your childhood days never miss this place wherever you are just visit it once and u will visit it a second time', '4', '2016-04-11', '2016-04-11 06:34:55', 1),
(3, 3, 'Raj Sharma', 'Madikeri Fort is located in the heart of Madikeri and it''s ramparts provide a vantage point to view te layout of the city. The museum in the church inside the fort is also an interesting place to visit.', '3', '2016-04-11', '2016-04-11 06:35:43', 1),
(4, 4, 'Jiri Savora', 'Very nice experience riding elephant. As everywhere mess, garbage. Highly recommended to cross the water by foot - it is fun and refreshing. Way back use the boat. Elephant riding is till 13:30 only officials, but they extend for extra hour and half.', '4.2', '2016-04-11', '2016-04-11 06:35:43', 1),
(5, 5, 'Pritak Sok', 'Very peaceful place to go to relax.\r\nSit back and enjoy with no disturbance.\r\nNo cellular network available .\r\nSo, ultimate place to find peace of mind.', '4.5', '2016-04-11', '2016-04-11 06:36:30', 1),
(6, 6, 'Varun M Rao', 'It''s a great place to visit. You can enjoy the waterfall by watching its beautiful course through the rocks, but you can''t play there. The network to reach isn''t good. You have to get a jeep from Somwarpet to go there. And you won''t get any buses there, so you gotta talk to round way trip. You will also get auto rickshaws. Even if you have own vehicle you should walk at the least 2 kms to go to the falls, but it''s worth it', '4.2', '2016-04-11', '2016-04-11 06:36:30', 1),
(7, 7, 'Ravi Kumar', 'A 30km drive from Somvarpet gets you to the Pushpagiri temple on the peak. The Shiva temple is set in the backdrop of the hill range and very tranquail. The drive is pleasant enough, dont know about any activities like safari within this wildlife sanctuary', '4.3', '2016-04-11', '2016-04-11 06:37:24', 1),
(8, 8, 'Ramesh CL', 'Wonderful spot for people who like showering in the waterfalls. Little bit of walking up the hills is required to get a glimpse of the falls. Good to see the forest officials are taking utmost care on Eco maintenance among all visitors.', '4.5', '2016-04-11', '2016-04-11 06:37:24', 1),
(9, 9, 'Ravi Krishna', 'Recently visited this place with friends.It is located in kodagu district.It is a very nice place for trekking.We can see a lot of wild animals on the way to trek.We can hear some beautiful melodies by birds on the way.We should be very careful as the forest is very dense and evergreen.Best place to hit is around afternoon', '4.2', '2016-04-11', '2016-04-11 06:38:14', 1),
(10, 10, 'Rahul Kumar', 'We stayed near to Raja-tomp so i got chance to visit it on early morning and night \r\nIn morning you feel like heaven since it filled with mist and fog\r\nLiked: Dancing lights, Arial view, flowers ,\r\nClosing Timing is 7:30 (approx) so visit before tha\r\n', '4', '2016-04-11', '2016-04-11 06:38:14', 1),
(11, 11, 'Jiri Savora', 'Very nice and clean area. Highly recommended. In small shops they don''t cheat you like in all other shops elsewhere. Very kind people these monks - if you get lucky you can take picture with them ? especially there is one small who loves to take pictures with everyone".', '4.5', '2016-04-11', '2016-04-11 06:39:13', 1),
(12, 12, 'Pankkaj R', 'Though it was crowded when we visited but we enjoyed a lot. really good place to see sunset. Water fountain with light and music was good attraction.', '4.3', '2016-04-11', '2016-04-11 06:39:13', 1),
(13, 13, 'Jitendra R', 'Talacauvery is must visit place.This is after bagmandala where is there is triveni sangamam.Its not a great place just pass that and you reach talacauvery.Its the place where cauvery river has originated you can see a small pond sort and there is a temple and people workship this place.\r\n', '4.5', '2016-04-11', '2016-04-11 06:42:26', 1),
(14, 14, 'Vedansh Agarwal', 'I have visited Nagarhole national park many a times, and I the place has never let me down. The place has a high density of tiger, elephants and leopards. Spotting tiger is luck but leopard are in plenty. 5 hour drive form Bangalore and 1 and half hour drive form Mysore. You could stay in Kabini river lodge, Orange County, Bison resort and Water woods. Best time to visit: Open all year round, but December-June preferred', '4.5', '2016-04-11', '2016-04-11 06:42:26', 1),
(15, 15, 'Harshith', 'Very beautiful beach with port view.Well maintained beach with coast guards... Water games and sports which gives you additional fun to your trip or picnic.... Stalls and shops available for food, snacks, refreshments, clothes....', '4.5', '2016-04-11', '2016-04-11 06:44:27', 1),
(16, 16, 'Karan Rajpal', 'A great place to kill some tile and feel the wind in your hair. The scenery is great and a lot of ground to cover. It''s been well maintained too. There''s a lot of rocky hills to climb for all those adventurers out there. Overall, a great, peaceful tourist attractio', '4.5', '2016-04-11', '2016-04-11 06:44:27', 1),
(17, 17, 'Sharavan K', 'One of the most beautiful temples in Mangalore. Recommended to visit in the evening to see the lights and fountains.', '4.3', '2016-04-11', '2016-04-11 06:45:14', 1),
(18, 18, 'Nitin K', 'Good place to visit. This place has a unique history. \r\nVisit, check the temple''s pond. Questions will automatically arrive.', '4.2', '2016-04-11', '2016-04-11 06:45:14', 1),
(19, 19, 'Rahul A', 'It was a Old time Watch Tower . Built by some Sultan during his period .\r\nYou''ll get A fairy Boat ride to Tannir Bhavi Beach uptil 7.30pm .\r\nThis beach is awesome !!', '4.5', '2016-04-11', '2016-04-11 06:46:09', 1),
(20, 20, 'Stanley Cost', 'Children along with their parents enjoy and can spend a day along with adventures as well. Nearby animal kingdom maintained well a nice place to see. Also a lake is a pleasant sight to the eyes and boating', '4', '2016-04-11', '2016-04-11 06:46:09', 1),
(21, 21, 'Mithun L', 'Great place to learn about different verieties of Butterflies, their life cycle. Must visit in season to see more verities, since I visited during Novermber end, I could able to see around 20 - 24 verities. Over all its nice experience, thanks to Mr. Sammilan Shetty for his effort in conservation if butterflies. ', '4.5', '2016-04-11', '2016-04-11 06:46:56', 1),
(22, 22, 'Amit K', 'I be here whenever I visit Mangalore.The beach is seldom crowded and has a lighthouse too.Looks wonderful in the evenings and the beaten rice mix(charmuri) from the beach side vendors tastes the best.', '4', '2016-04-11', '2016-04-11 06:46:56', 1),
(23, 23, 'Anirudha P', 'Beauty of the river must be watched during rainy season.Taste of the food in the temple is superb.A visit is truly worth', '4.5', '2016-04-11', '2016-04-11 06:47:53', 1),
(24, 24, 'Junu K', 'MANGALADEVI, from whom the city got its name "MANGALORE/MANGALURU" place of worship for hindus of goddess mangaladevi. At the time of Dashara is the place to enjoy in mangalore, which will be held here in temple surrounding, which consists many pooja''s, taablo, huli vesha and varieties of shops for shopping during this time.', '4', '2016-04-11', '2016-04-11 06:47:53', 1),
(25, 25, 'Shyama Kunda', 'Must visit place. If you are looking for surf lessons, this is the place to go. One of the best surf coaches in India as per my experience. Who really know what they are doing and all the instructor are international certified surf instructors and they are cool and chilled. They also offer other water activities such as Kayaking, windsurfing, stand up paddle, wakeboarding, dougnut ride, jestski ride and many more.', '4', '2016-04-11', '2016-04-11 06:48:41', 1),
(27, 26, 'Ashol S', 'Nice place. A half an hour safari through the forest. It costs entry fee Rs115 per person plus Rs500 towards jeep charge for 7 person. If u r lucky enough you may spot elephant, wild boar, peacock,  bison or deer. Chances for encounter with eliphant groups _ i had. \r\nStrictly follow the instructions of forest authorities and jeep drivers. \r\nEntry is restricted to 60 vehicles per day 40 in morning and 20 evening. Though entry to forest if from 7.00 am a queue will form 6.00 or 6.15 onwards. \r\nPrepare for the best and xpect the worst ie no animals at all.', '4.2', '2016-04-11', '2016-04-11 06:50:47', 1),
(28, 27, 'Sabeesh S', 'These caves are quite old and to reach them you will have a rather steep climb to navigate. However, the experience is truly worth it. The caves are spectacular in every way.Awesome!!!', '4.5', '2016-04-11', '2016-04-11 06:50:47', 1),
(29, 28, 'Ganesh Kumar', 'These caves are quite old and to reach them you will have a rather steep climb to navigate. However, the experience is truly worth it. The caves are spectacular in every way.Awesome!!!', '4.5', '2016-04-11', '2016-04-11 06:51:34', 1),
(30, 29, 'Victor M', 'Lakkidi View Point(wayanad) never a final destination. From here awesome view of Thamarassery Churam.And great road for riding. Pleasant atmosphere', '4.4', '2016-04-11', '2016-04-11 06:51:34', 1),
(31, 30, 'Aman Verma', 'This waterfall is located near to Mappadi just a diversion from gudallur and Ooty road . the falls is very look good but you have to walk to very steep the persons who aged is not recommendable ', '4.4', '2016-04-11', '2016-04-11 06:52:29', 1),
(32, 31, 'K.S Vinay', 'This a must do trek for wildlife and adventure lovers. The scenic beauty and wildife you get to experience is awesome.Eat light before going on this trek. Starting point is just few mins drive from JRW.', '4.4', '2016-04-11', '2016-04-11 06:52:29', 1),
(33, 32, 'Hrishkesh H', 'Fall can be reached after a short and easy hike. The ascent towards the falls is through rocks with water flowing by. There are people appointed by the forest authorities at the locations that are slightly difficult to climb to help the tourists. The walk down is easy and through a mud trail and offers viewpoints from where you can look adjacent scenery', '4.5', '2016-04-11', '2016-04-11 06:54:43', 1),
(34, 33, 'Nitesh K', 'Nature in its wildness. Follow the stream along the side. I visited there in a foggy evening. I couldn''t able to see some 10 feet away. I followed the down stream, targeting the sound of heavy falls. And it was an astonishing seen... I stood there for some minutes... I was alone, almost dark, heavy fog and the wild roar of falls... U may not get this combination and ofcourse my experience.', '4', '2016-04-11', '2016-04-11 06:54:43', 1),
(35, 34, 'Rajan S', 'Nice Place for couples', '3', '2016-04-11', '2016-04-11 06:55:36', 1),
(36, 35, 'Nilanjan S', 'Small museum located in Ambalavayal, showing some of the history of the location. Probably the only attraction around this area. Just something to see when visiting Edakkal Caves, can drop by here and then just walk to the bus station nearby and get a bus back to Sultan Bathery.\r\n', '4', '2016-04-11', '2016-04-11 06:55:36', 1),
(37, 36, 'Neerav K', 'Kerala varma Pazhassi Raja the lion of the kerala resting place.\r\nCalm and Beautiful and there is a small museum under the tomb displayed articles and paintings of pazhassi''s time.', '4.5', '2016-04-11', '2016-04-11 06:56:41', 1),
(38, 37, 'Rajat K', 'I visited this place last week and as we had a kid we could go just till the view point. The ticket counter opens at 7AM and I recommend you reach this place by then as the parking place gets pretty crowded (luckily I reached there by 7 and could get away from the scorching sunlight)', '3.5', '2016-04-11', '2016-04-11 06:56:41', 1),
(39, 38, 'Windy S', 'Om beach is exactly where you should go if you want to chant omkaras or meditate. The was is not very safe to play in. But the beach is calm and peaceful. There were hardly any people on the beach at the time we visited. The water is clean, blue.', '4', '2016-04-11', '2016-04-11 06:58:26', 1),
(40, 39, 'Nitin A', 'Visit this beach you love it...Neat & clean & not very crowded. One Hanuman Ji temple is also near this beach. If you want to stay huts are also available near the beach in budget range.', '4.2', '2016-04-11', '2016-04-11 06:58:26', 1),
(41, 40, 'Ashish Dutta', 'It''s a nice and uncrowded beach.stayed in Namaste Beach Café. Great ambience & view from the restaurant. Om beach is less crowded than half moon beach, but very few hotels are available.', '4', '2016-04-11', '2016-04-11 06:59:41', 1),
(42, 41, 'VidhyaSagar Achar', 'Beautiful temple of Lord Shiva.You get to offer some special pujas yourself to the main ancient atmalinga. Priests do insist on dakshinas though.', '4', '2016-04-11', '2016-04-11 06:59:41', 1),
(43, 42, 'Sneha A', 'Since the path to the beach is not an easy walk, there are few tourists at this beach. However it''s a good one for trekkers.a beautiful beach nonetheless, with rocks and strong waves. Try not to wade too much into the beach, as a precaution.', '4', '2016-04-11', '2016-04-11 07:00:30', 1),
(44, 43, 'Rajesh Huni', 'You need to trek or hire a boat to reach this beach. The beach is very secluded. There are some restaurants on the beach. It will be worth the trek. During the trek the view of the ocean from the hill top will be amazing.', '4.3', '2016-04-11', '2016-04-11 07:00:30', 1),
(45, 44, 'Alok Verma', 'Very ancient temple. Well organised queue system. Opens at 6am. Closes at 8:30pm. Narrow streets around the temple. So car parking is little difficult. Not sure if there was a designated parking also somewhere', '4.2', '2016-04-11', '2016-04-11 07:01:28', 1),
(46, 45, 'Veshwa H', 'Kotiteeertha is a lake with lot of spiritual significance in gokarna. It is believed to be containing millions of sacred water sourse combined. Water is polluted a lot now', '3', '2016-04-11', '2016-04-11 07:01:28', 1),
(47, 46, 'Deepak G', 'A good scooter ride away from the main city and beaches is this lovely fort. Even if you''re not into history, you''ll be taken aback by this. Admire the architecture of a bygone era and take plenty of pics. Have coconut water outside and ride back to town.', '4', '2016-04-11', '2016-04-11 07:02:25', 1),
(48, 47, 'Sujay Kumar', 'Best route to reach South Goa with own vehicle,one can feel the nature in the midst of thick forest and the cold breeze flows throughout the route.\r\nGhats are dangerous so Drive slow.', '4', '2016-04-11', '2016-04-11 07:02:25', 1),
(49, 48, 'Adarsh Goyal', 'Well a v good place to  hangout.. but for roaming the whole garden atleast you should have 2 hrs or more so go before 4''0 clock as it closes at 6:00 PM ... Photography loving place... just visit once and  have a pleasant air with lots of pics being clicked, GO with group specially... will enjoy...\r\nyes on Good Friday and some special occasion it is open till 7:00  PM.. but on always.', '4.5', '2016-04-11', '2016-04-11 07:05:14', 1),
(50, 49, 'Suseela Raghu', 'Now this is an amazing amusement park... World class safety, brilliant standards of hygiene, cool rides, fun water games... All contribute to making wonderland Bangalore''s no1 preferred amusement park.... You won''t regret it... And there''s a resort as an added bonus..', '4', '2016-04-11', '2016-04-11 07:05:14', 1),
(51, 50, 'Subrahmaniam P', 'The classic MTR masala dosa is what I''d recommend for breakfast or lunch here. With a touch a ghee on the golden crispy dosa, the aroma just fills the restaurant and entices your taste buds. For those working from the nearby Lavelle road, this is a great place to catch up for a quick lunch.', '4.2', '2016-04-11', '2016-04-11 07:06:05', 1),
(52, 51, 'Jagan Mohan', 'Jungle Safari is the worth going here. Rest all is similar to any other zoo. There is a lot of crowd for the jungle safari. so it is best to go by the time the place opens so that the crowd can be avoided, else you may end up waiting for hours in que for the safari trip. Please do not miss the Butterfly Park here, as it is to one corner and can easily be missed but is a good place to visit', '4.2', '2016-04-11', '2016-04-11 07:06:05', 1),
(53, 52, 'Sashi M', 'One of the must visit joints in Bangalore if you want to taste lips smacking dosa. Very old building with seating capacity of 40 to 50 only.. Hence very crowded and one has to wait for getting the seat. But the waiting is well worth it. Here specialities are masala dosa anytime.. Idly n Poori which is served only in morning.', '4.2', '2016-04-11', '2016-04-11 07:07:01', 1),
(54, 53, 'Amla S', 'Be it during early morning or lazy noon or busy evenings, coming to this place gives you a wholesome feeling of nostalgia. Been coming here as a baby, and 20 years passed on. You can never get tired of this place! ?', '4.2', '2016-04-11', '2016-04-11 07:07:01', 1),
(55, 54, 'SriKant S', 't''s a very good place to see in terms of Architectural features. The ambience and environment around the building is also enjoyable. It''s a must see place in Bangalore.', '4', '2016-04-11', '2016-04-11 07:08:13', 1),
(56, 55, 'Sachin S', 'The Dodda Ganapathi Temple, Bengaluru,is right next to the Nandi Bull temple (Dodda Basavana Guddi). The temple houses a huge idol of Lord Ganesha. The temple surroundings are very quiet and peaceful. The nearby Bugle Rock Garden is a must visit.', '4', '2016-04-11', '2016-04-11 07:08:13', 1),
(57, 56, 'Bhavik J', 'It is court of tipu Sultan.\r\nVery good architecture on wood & stone.\r\nWhole Palace & garden can completed in 1½ - 2 hr.\r\nEntry fee ?5 for Indian citizens.\r\ndifferent fee for foreign National & BRICS .\r\ncamera allowed with no cost.', '4', '2016-04-11', '2016-04-11 07:09:04', 1),
(58, 57, 'Jason F', 'The state assembly building is very majestic in the architectural sense.  It does look imposing. No entry for the general public.', '4', '2016-04-11', '2016-04-11 07:09:04', 1),
(59, 58, 'Sudhamsu K', 'Extensive photo gallery covering the history of HAL in Bangalore. Out-of-action aeroplanes and helicopters on display. A brief documentary on HAL''s history. Very informative for the casual visitor.', '4.2', '2016-04-11', '2016-04-11 07:10:48', 1),
(60, 59, 'Jaason Furtado', 'he St. Mary''s Basilica in Shivaji Nagar, Bangalore has beautiful architecture. The construction of the church is gothic in style. Most masses are usually in the mornings with one in the evenings, so expect the places to be crowded during the early part of the day.', '4', '2016-04-11', '2016-04-11 07:10:48', 1),
(61, 60, 'Rohith K', ' very good place that is iconic to Bangalore. The discipline, cleanliness and the ambience is very well maintained here. The Akshaya Patra mid-day meals scheme is also prepared here that has a MEGA kitchen. Do visit there if possible', '4.3', '2016-04-11', '2016-04-11 07:11:42', 1),
(62, 61, 'Sachin Gautam', 'The Dodda Ganapathi Temple, Bengaluru,is right next to the Nandi Bull temple (Dodda Basavana Guddi). The temple houses a huge idol of Lord Ganesha. The temple surroundings are very quiet and peaceful. The nearby Bugle Rock Garden is a must visit', '4', '2016-04-11', '2016-04-11 07:11:42', 1),
(63, 62, 'Bhishan K', 'Awesome race course, tough track, all horses are very impressive other track...', '4.2', '2016-04-11', '2016-04-11 07:12:34', 1),
(64, 63, 'Amit K', 'onderful place for the kids to witness the nature so closely. Bees of different hues and colors flying in an enclosed space brings a new insight.', '4', '2016-04-11', '2016-04-11 07:12:34', 1),
(65, 64, 'Nishant K', 'Worth visiting!! Yu can see how wines are made and they offer you to taste them, after many tasting you will a little tizzy but the large grape yards is a breathtaking view!', '4', '2016-04-11', '2016-04-11 07:12:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tble_activity_type`
--

CREATE TABLE IF NOT EXISTS `tble_activity_type` (
  `activity_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_type` varchar(100) DEFAULT NULL,
  `type_description` varchar(100) DEFAULT NULL,
  `cts` date DEFAULT NULL,
  `mts` timestamp NULL DEFAULT NULL,
  `delflag` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`activity_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tble_activity_type`
--

INSERT INTO `tble_activity_type` (`activity_type_id`, `activity_type`, `type_description`, `cts`, `mts`, `delflag`) VALUES
(3, 'Rafting', 'Rafting', '2016-03-25', NULL, '1'),
(4, 'Trekking', 'Trekking', '2016-03-25', NULL, '1'),
(5, 'Camping', 'Camping', '2016-03-25', NULL, '1'),
(6, 'Safari', 'Safari', '2016-03-25', NULL, '1'),
(7, 'Golf', 'Golf', '2016-03-25', NULL, '1'),
(8, 'Others', 'Others', '2016-04-05', NULL, '1'),
(9, 'Sightseeing', 'Sightseeing', '2016-04-05', NULL, '1'),
(10, 'Adventure', 'Adventure', '2016-04-05', NULL, '1'),
(11, 'Beach', 'Beach', '2016-04-05', NULL, '1'),
(12, 'Temple', 'Temple', '2016-04-05', NULL, '1'),
(13, 'Garden', 'Garden', '2016-04-11', NULL, '1'),
(14, 'Amusement Park', 'Amusement Park', '2016-04-11', NULL, '1'),
(15, 'Food', 'Food', '2016-04-11', NULL, '1'),
(16, 'National Park', 'National Park', '2016-04-11', NULL, '1'),
(17, 'Park', 'Park', '2016-04-11', NULL, '1'),
(18, 'Church', 'Church', '2016-04-11', NULL, '1'),
(19, 'Club', 'Club', '2016-04-11', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tble_booking_property`
--

CREATE TABLE IF NOT EXISTS `tble_booking_property` (
  `booking_id` int(11) NOT NULL,
  `reg_id` int(11) DEFAULT NULL,
  `property_id` int(11) DEFAULT NULL,
  `activities_around` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `date_from` date DEFAULT NULL,
  `date_to` date DEFAULT NULL,
  `adult` int(11) DEFAULT NULL,
  `child` int(11) DEFAULT NULL,
  `rooms_count` int(11) DEFAULT NULL,
  `booking_price` decimal(5,2) DEFAULT NULL,
  `service_tax` decimal(5,2) DEFAULT NULL,
  `tds` decimal(5,2) DEFAULT NULL,
  `total_amount` decimal(5,2) DEFAULT NULL,
  `cts` date DEFAULT NULL,
  `mts` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `fk_reg_id` (`reg_id`),
  KEY `fk_property_id` (`property_id`),
  KEY `fk_status_id` (`status_id`),
  KEY `fk_activity_id` (`activities_around`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tble_duration`
--

CREATE TABLE IF NOT EXISTS `tble_duration` (
  `duration_id` int(10) NOT NULL,
  `duration_name` varchar(100) NOT NULL,
  `duration_detail` varchar(200) NOT NULL,
  `cts` date NOT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `del_flag` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`duration_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tble_duration`
--

INSERT INTO `tble_duration` (`duration_id`, `duration_name`, `duration_detail`, `cts`, `mts`, `del_flag`) VALUES
(1, 'One Week', 'One Week', '2016-01-27', '2016-01-30 06:32:39', '1'),
(2, 'One Month', 'One Month', '2016-01-27', '2016-01-27 02:40:39', '0'),
(3, 'Two Week', 'Two Week', '2016-01-30', '2016-01-30 06:58:26', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tble_packages_details`
--

CREATE TABLE IF NOT EXISTS `tble_packages_details` (
  `package_id` int(10) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `package_details` varchar(250) NOT NULL,
  `package_type` int(10) NOT NULL,
  `duration` int(15) NOT NULL,
  `city_name` varchar(20) NOT NULL,
  `state_name` varchar(15) NOT NULL,
  `starting_price` varchar(6) NOT NULL,
  `image` varchar(20) NOT NULL,
  `flight_included` tinyint(1) NOT NULL,
  `resorts` varchar(10) NOT NULL,
  `meals` tinyint(1) NOT NULL,
  `breakfast` tinyint(1) NOT NULL,
  `transfer` tinyint(1) NOT NULL,
  `cts` date NOT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delflag` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`package_id`),
  KEY `package_type` (`package_type`),
  KEY `duration` (`duration`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tble_packages_details`
--

INSERT INTO `tble_packages_details` (`package_id`, `package_name`, `package_details`, `package_type`, `duration`, `city_name`, `state_name`, `starting_price`, `image`, `flight_included`, `resorts`, `meals`, `breakfast`, `transfer`, `cts`, `mts`, `delflag`) VALUES
(1, 'Holidays', 'Holidays', 1, 2, 'Hyderabad', 'Andhra Pradesh', '5000', '1453866300_1.jpg', 3, 'No', 0, 0, 0, '2016-01-27', '2016-01-27 02:45:00', 1),
(2, 'bbb', 'hjkhk', 1, 3, 'hjkhjk', 'jhkhjk', '25000', '', 4, 'Yes', 0, 0, 0, '2016-01-30', '2016-02-03 04:38:36', 0),
(3, 'hjk', 'hjk', 1, 1, 'hjk', 'hjk', 'hjk', '1454142014_', 3, 'Yes', 0, 0, 0, '2016-01-30', '2016-01-30 09:39:01', 0),
(4, 'jkl', 'jkl', 1, 3, 'jkl', 'jkl', '25000', '1454142078_', 3, 'Yes', 0, 0, 0, '2016-01-30', '2016-01-30 09:38:54', 0),
(5, 'klkl;', 'l;kl;', 1, 3, 'hgjghj', 'gfjhh', '25000', '1454147837_', 4, 'Yes', 0, 0, 0, '2016-01-30', '2016-01-30 09:38:19', 0),
(6, 'ghj', 'ghj', 1, 1, 'ghj', 'ghj', 'hgj', '1454147862_', 4, 'Yes', 0, 0, 0, '2016-01-30', '2016-01-30 09:38:05', 0),
(7, 'xyz', 'dfgdfg', 1, 1, 'dfg', 'dfg', '2500', '1454320812_', 3, 'Yes', 0, 0, 0, '2016-02-01', '2016-02-03 04:38:35', 0),
(8, 'fgh', 'fgh', 1, 1, 'fgh', 'fgh', '2500', '1454475270_', 4, 'Yes', 0, 0, 0, '2016-02-03', '2016-02-03 04:38:34', 0),
(9, 'fgh', 'fgh', 1, 3, 'fgh', 'fgh', '2500', '1454475537_', 3, '1', 1, 1, 0, '2016-02-03', '2016-02-03 04:38:33', 0),
(10, 'fgh', 'fgh', 1, 3, 'fgh', 'fgh', '2500', '1454475549_', 3, '1', 1, 1, 0, '2016-02-03', '2016-02-03 04:38:32', 0),
(11, 'sdf', 'sdf', 1, 1, 'sdf', 'sdf', '2500', '1454476102_', 1, '4*', 1, 1, 1, '2016-02-03', '2016-02-03 04:38:31', 0),
(12, 'hjkhk', 'hjkhjk', 1, 3, 'hjk', 'hjk', '2500', '1454476460_', 1, '3*', 1, 0, 1, '2016-02-03', '2016-02-03 04:38:29', 0),
(13, 'ghj', 'ghj', 1, 3, 'ghj', 'ghj', '25000', '1454476532_', 0, '3*', 0, 0, 0, '2016-02-03', '2016-02-03 04:38:28', 0),
(14, 'dfgdfg', 'dfgdfg', 1, 1, 'dfg', 'dfg', '2500', '1454476958_', 1, '4*', 0, 0, 0, '2016-02-03', '2016-02-03 04:38:26', 0),
(15, 'hjk', 'hjk', 1, 1, 'hjk', 'hjk', '2520', '1454477698_', 1, '5*', 0, 0, 0, '2016-02-03', '2016-02-03 04:38:24', 0),
(16, 'hjk', 'hjk', 1, 1, 'hjk', 'hjk', '2520', '1454477711_', 1, '5*', 0, 0, 0, '2016-02-03', '2016-02-03 04:38:20', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tble_packages_type`
--

CREATE TABLE IF NOT EXISTS `tble_packages_type` (
  `package_type_id` int(11) NOT NULL,
  `package_type_name` varchar(50) NOT NULL,
  `cts` date NOT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `delflag` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`package_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tble_packages_type`
--

INSERT INTO `tble_packages_type` (`package_type_id`, `package_type_name`, `cts`, `mts`, `delflag`) VALUES
(1, 'Holiday Package', '2016-01-27', '2016-01-27 02:40:56', '1'),
(2, 'Romantic Holiday sdsda', '2016-01-27', '2016-01-27 02:41:36', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tble_property`
--

CREATE TABLE IF NOT EXISTS `tble_property` (
  `property_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_name` varchar(100) DEFAULT NULL,
  `property_address` varchar(250) DEFAULT NULL,
  `property_contact_no` varchar(20) DEFAULT NULL,
  `property_location` varchar(50) DEFAULT NULL,
  `property_description` text,
  `property_type` varchar(20) DEFAULT NULL,
  `latitude` varchar(20) DEFAULT NULL,
  `longitude` varchar(20) DEFAULT NULL,
  `instantbooking` tinyint(1) DEFAULT '0',
  `busstation` int(11) DEFAULT NULL,
  `railwaystation` int(11) DEFAULT NULL,
  `airport` int(11) DEFAULT NULL,
  `tax` float(4,2) NOT NULL,
  `facilities_n_amenities` varchar(255) DEFAULT NULL,
  `rating` varchar(10) DEFAULT NULL,
  `tripadvisorrating` varchar(10) DEFAULT NULL,
  `extra_person` decimal(10,0) DEFAULT NULL,
  `child` decimal(10,0) DEFAULT NULL,
  `property_picture` varchar(50) DEFAULT NULL,
  `imgheader` varchar(50) DEFAULT NULL,
  `img1` varchar(50) DEFAULT NULL,
  `img2` varchar(50) DEFAULT NULL,
  `img3` varchar(50) DEFAULT NULL,
  `img4` varchar(50) DEFAULT NULL,
  `cancelling_policy` text,
  `ecotourism` tinyint(1) DEFAULT '0',
  `wellness_n_care` tinyint(1) NOT NULL DEFAULT '0',
  `heritage_n_spirituality` tinyint(1) NOT NULL DEFAULT '0',
  `family_n_kids` tinyint(1) NOT NULL DEFAULT '0',
  `adventure_n_explore` tinyint(1) NOT NULL DEFAULT '0',
  `romantic_holiday` tinyint(1) NOT NULL DEFAULT '0',
  `wifi` tinyint(1) NOT NULL DEFAULT '0',
  `tv` tinyint(1) NOT NULL DEFAULT '0',
  `kitchen` tinyint(1) NOT NULL DEFAULT '0',
  `checkin` tinyint(1) NOT NULL DEFAULT '0',
  `safetycard` tinyint(1) DEFAULT '0',
  `indoorgame` tinyint(1) NOT NULL DEFAULT '0',
  `cabletv` tinyint(1) NOT NULL DEFAULT '0',
  `smokingallowed` tinyint(1) NOT NULL DEFAULT '0',
  `outdoorgame` tinyint(1) NOT NULL DEFAULT '0',
  `gym` tinyint(1) NOT NULL DEFAULT '0',
  `wheelchair` tinyint(1) NOT NULL DEFAULT '0',
  `kidsplayarea` tinyint(1) NOT NULL DEFAULT '0',
  `heating` tinyint(1) NOT NULL DEFAULT '0',
  `breakfast` tinyint(1) NOT NULL DEFAULT '0',
  `yoga` tinyint(1) NOT NULL DEFAULT '0',
  `internet` tinyint(1) NOT NULL DEFAULT '0',
  `wiintercom` tinyint(1) NOT NULL DEFAULT '0',
  `ac` tinyint(1) NOT NULL DEFAULT '0',
  `freeparking` tinyint(1) NOT NULL DEFAULT '0',
  `swimmingpool` tinyint(1) NOT NULL DEFAULT '0',
  `petsallowed` tinyint(1) NOT NULL DEFAULT '0',
  `barnrestro` tinyint(1) NOT NULL DEFAULT '0',
  `roomservice` tinyint(1) NOT NULL DEFAULT '0',
  `busscenter` tinyint(1) NOT NULL DEFAULT '0',
  `lounge` tinyint(1) NOT NULL DEFAULT '0',
  `conferencehall` tinyint(1) NOT NULL DEFAULT '0',
  `shopping` tinyint(1) NOT NULL DEFAULT '0',
  `ayurvedacenter` tinyint(1) NOT NULL DEFAULT '0',
  `laundry` tinyint(1) NOT NULL DEFAULT '0',
  `security` tinyint(1) NOT NULL DEFAULT '0',
  `airporttrasport` tinyint(1) NOT NULL DEFAULT '0',
  `atminresort` tinyint(1) NOT NULL DEFAULT '0',
  `hotcoldwater` tinyint(1) NOT NULL DEFAULT '0',
  `firstaidkit` tinyint(1) NOT NULL DEFAULT '0',
  `hairdryer` tinyint(1) NOT NULL DEFAULT '0',
  `hottub` tinyint(1) NOT NULL DEFAULT '0',
  `suitableforwvent` tinyint(1) NOT NULL DEFAULT '0',
  `spa` tinyint(1) DEFAULT '0',
  `jacuzzi` tinyint(1) NOT NULL DEFAULT '0',
  `finedinig` tinyint(1) NOT NULL DEFAULT '0',
  `caffe` tinyint(1) NOT NULL DEFAULT '0',
  `cts` date NOT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delflag` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`property_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tble_property`
--

INSERT INTO `tble_property` (`property_id`, `property_name`, `property_address`, `property_contact_no`, `property_location`, `property_description`, `property_type`, `latitude`, `longitude`, `instantbooking`, `busstation`, `railwaystation`, `airport`, `tax`, `facilities_n_amenities`, `rating`, `tripadvisorrating`, `extra_person`, `child`, `property_picture`, `imgheader`, `img1`, `img2`, `img3`, `img4`, `cancelling_policy`, `ecotourism`, `wellness_n_care`, `heritage_n_spirituality`, `family_n_kids`, `adventure_n_explore`, `romantic_holiday`, `wifi`, `tv`, `kitchen`, `checkin`, `safetycard`, `indoorgame`, `cabletv`, `smokingallowed`, `outdoorgame`, `gym`, `wheelchair`, `kidsplayarea`, `heating`, `breakfast`, `yoga`, `internet`, `wiintercom`, `ac`, `freeparking`, `swimmingpool`, `petsallowed`, `barnrestro`, `roomservice`, `busscenter`, `lounge`, `conferencehall`, `shopping`, `ayurvedacenter`, `laundry`, `security`, `airporttrasport`, `atminresort`, `hotcoldwater`, `firstaidkit`, `hairdryer`, `hottub`, `suitableforwvent`, `spa`, `jacuzzi`, `finedinig`, `caffe`, `cts`, `mts`, `delflag`) VALUES
(1, 'Coorg Jungle Camp Backwater Resort', 'Herur Suntikoppa Kushalnagara Karnataka - 571234', '9482404040', 'Coorg', 'Welcome to Scotland of India and Coorg Jungle Camp resort, located at the splendid beauty of Harangi Back water surrounded by dense forest and coffee plantations, Coorg Jungle Camp is an excellent place merged within the greenary at Herur near Kushalnagar of Kodagu (Coorg) district. The Style & concept of our Coorg resort appeals instantaneously to all because it has plenty of land, water, forest to roam around and lots of activities for fun and joy in beautiful location and cool climate.', 'Resort', '12.474642', '75.881785', 0, 95, 111, 594, 20.40, NULL, '2', '4', '1900', '900', 'cjr_101.png', 'Header1.jpg', '101.jpg', '102.jpg', '103.jpg', '104.jpg', '10% of tariff for cancellation prior to two weeks before check-in-date (not inclusive of the check-in date) \n50% of tariff for cancellation less than two weeks and prior to two working days before check-in-date (not inclusive of the check-in date) \nNo refund for cancellation less than two days before check-in-date (not inclusive of the check-in date', 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, '2016-02-08', '2016-03-30 10:06:06', 1),
(2, 'Heritage Resort', '50/3 1st Monnangeri Village Galibeedu Madikeri Karnataka - 571201', '8025232329', 'Coorg', 'The word ''heritage'' denotes ''old world'', ''inheritance'' and all things that are enduring and cherished. It also conjures up a world that is pristine and untouched. Living in cities as most of us do most of the time, a chance to connect with nature in clean surroundings is a dream. To make that dream come true, Heritage Resort - amongst the finest Coorg Resorts - offers you a getaway that you will return to in your memories again and again. Bird watching, cycling, trekking all that and more can be part of your plan when you are here. Breathe in the pure forest air. Coorg with Madikeri as its headquarters is a year round holiday destination near Bangalore. Every season has its delights. Welcome to the Hotel Heritage Resort Coorg!', 'Resort', '12.461545', '75.696664', 0, 107, 95, 568, 22.00, NULL, '4.2', '4', '7686', '900', 'hr_201.png', 'Header2.jpg', '201.jpg', '202.jpg', '203.jpg', '204.jpg', '10% of tariff for cancellation prior to two weeks before check-in-date (not inclusive of the check-in date) \n50% of tariff for cancellation less than two weeks and prior to two working days before check-in-date (not inclusive of the check-in date) \nNo refund for cancellation less than two days before check-in-date (not inclusive of the check-in date', 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 1, '2016-02-08', '2016-03-30 10:06:06', 1),
(3, 'Kadkani River Resort', 'Hachinad Pachat Kodagu Siddapur Karnataka - 571211', '9480833780', 'Coorg', 'For those who usually drive in bumper to bumper traffic, it might take some getting used to, to seeing seemingly endless plantations, winding roads and not a soul in sight. If you wanted to leave the world behind, you couldn''t have chosen a better destination than Coorg for a weekend getaway. And if you wanted to have the finest in the world waiting on you, you can’t choose a better destination than Kadkani.', 'Resort', '12.298334', '75.82657', 0, 105, 156, 578, 0.00, NULL, '4.5', '4.5', '11000', '0', 'krr_303.png', 'Header3.jpg', '301.jpg', '302.jpg', '303.jpg', '304.jpg', '10% of tariff for cancellation prior to two weeks before check-in-date (not inclusive of the check-in date) \n50% of tariff for cancellation less than two weeks and prior to two working days before check-in-date (not inclusive of the check-in date) \nNo refund for cancellation less than two days before check-in-date (not inclusive of the check-in date', 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 1, 0, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, '2016-02-08', '2016-03-30 10:06:06', 1),
(4, 'Orange Country', 'Karadigodu Post Siddapura Coorg Karnataka - 571253', '8274258481', 'Coorg', 'When you step into the portals of Orange County, Coorg, you leave one world behind, and step seamlessly into another: the bygone era of the Gentleman Planter. Ensconced in the cocooned comforts of a lush 300-acre plantation paradise, the resort is perfumed with the subtly intoxicating aroma of coffee and spice.', 'Resort', '12.326429', '75.889145', 1, 68, 84, 24, 0.00, NULL, '4.5', '4.3', '3500', '0', 'oc_401.jpg', 'Header4.jpg', '401.jpg', '402.jpg', '403.jpg', '404.jpg', '10% of tariff for cancellation prior to two weeks before check-in-date (not inclusive of the check-in date) \n50% of tariff for cancellation less than two weeks and prior to two working days before check-in-date (not inclusive of the check-in date) \nNo refund for cancellation less than two days before check-in-date (not inclusive of the check-in date', 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, '2016-02-08', '2016-03-30 10:06:06', 1),
(5, 'Amanvana Spa Resort', 'No 21 Bollur Village Guddehosur Kushalnagar Madikeri Coorg Karnataka 571234', '9480696070', 'Coorg', 'Step into a world full of possibilities.\nHead to the rabbit hole for the soul and set yourself free from the hustle-bustle \nof the city life.', 'Resort', '12.446896', '75.934443', 0, 83, 235, 535, 20.67, NULL, '3', '4.2', '13000', '0', 'asr_501.jpg', 'Header5.jpg', '501.jpg', '502.jpg', '503.jpg', '504.jpg', '10% of tariff for cancellation prior to two weeks before check-in-date (not inclusive of the check-in date) \n50% of tariff for cancellation less than two weeks and prior to two working days before check-in-date (not inclusive of the check-in date) \nNo refund for cancellation less than two days before check-in-date (not inclusive of the check-in date', 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, '2016-02-08', '2016-03-30 10:06:06', 1),
(6, 'Parumpara Coorg Resort', 'Kushalanagar Near Shivanna MV Coorg Karnataka - 571232', '8276278001', 'Coorg', 'Parampara Resort, a theme based holiday resort in Coorg, Just 15 minutes drive from Kushalnagar city for a break free place and to unwind your hectic life this might be a fantastic place to spend time. Get cozy with loved ones or build business bonds over a bonfire by the water.Adventure play park oriented on leadership development and colourful evenings with contemporary Indian dances and music by in house artists depicting our rich culture and heritage have made it a unique and only one of its kind.', 'Home stay', '12.506925', '75.948284', 0, 76, 81, 528, 20.70, NULL, '3.3', '4.2', '1900', '900', 'pcr_607.jpg', '607.jpg', '601.jpg', '602.jpg', '603.jpg', '604.jpg', '10% of tariff for cancellation prior to two weeks before check-in-date (not inclusive of the check-in date) \n50% of tariff for cancellation less than two weeks and prior to two working days before check-in-date (not inclusive of the check-in date) \nNo refund for cancellation less than two days before check-in-date (not inclusive of the check-in date', 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, '2016-02-08', '2016-03-30 10:06:06', 1),
(7, 'Silver Oaks', 'Convent Road Madikeri Karnataka', '8272228071', 'Bangalore', 'Siliveroak Resorts in Coorg is a unique place surrounded by about 10 hectares Silver oak trees, coffee and spice plantation and overlooked by a large place of “sacred jungle”( devara kaadu) and famous “Kunda hill” at the height of 4500 ft above sea level for the people who love trekking. Silver oak is for the people who love nature and wanted to explore nature by being part of it.', 'Home stay', '13.183933', '77.563399', 0, 4, 13, 44, 17.10, NULL, '4.4', '4', '4657', '0', 'so_707.jpg', 'Header7.jpg', '701.jpg', '702.jpg', '703.jpg', '704.jpg', '0% of tariff for cancellation prior to two weeks before check-in-date (not inclusive of the check-in date) \n50% of tariff for cancellation less than two weeks and prior to two working days before check-in-date (not inclusive of the check-in date) \nNo refund for cancellation less than two days before check-in-date (not inclusive of the check-in date', 1, 0, 1, 0, 1, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, '2016-02-08', '2016-04-14 07:22:52', 1),
(8, 'The Windflower Resort & Spa', 'S No 201/1 Kedakal Village Suntikkoppa Hobli Somwarpet Taluka - 571237', '8276262500', 'Coorg', 'The sun''s first rays filter through your huge bay window. Grab a steaming mug of Coorg''s finest coffee and homemade cookies, and treat your eyes to a shock of green, shrouded in delicate mist behind your curtains. Spot shapes in the cotton-candy clouds in your open-to-sky Jacuzzi. And awaken to your new home at the Windflower Coorg.', 'Resort', '12.433318', '75.81344', 0, 96, 97, 552, 0.00, NULL, '4.1', '4.4', '3200', '1200', 'twrs_802.jpg', 'Header8.jpg', '801.jpg', '802.jpg', '803.jpg', '804.jpg', '10% of tariff for cancellation prior to two weeks before check-in-date (not inclusive of the check-in date) \n50% of tariff for cancellation less than two weeks and prior to two working days before check-in-date (not inclusive of the check-in date) \nNo refund for cancellation less than two days before check-in-date (not inclusive of the check-in date', 1, 0, 0, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, '2016-02-08', '2016-03-30 10:06:06', 1),
(9, 'The Porcupline Castle', 'Porcupline Castle Resort Road Near Tree House Kodagu Karnataka - 571215', '8041660805', 'Coorg', 'Come to a place where fun never sets Where craggy peak rub shoulders with cotton clouds Where meandering trails leads to milkywaterfallsWhere verdant valleys open their arms to lovers of nature.A hearty Kodagu welcome awaits our guest at Porcupine Castle, set amidst the undulating and lush green landscape of Coorg', 'Home stay', '12.238416', '75.887622', 0, 89, 122, 599, 21.40, NULL, '4.2', '4.4', '6500', '0', 'tpc_906.jpg', '901.jpg', '902.jpg', '903.jpg', '904.jpg', '905.jpg', '10% of tariff for cancellation prior to two weeks before check-in-date (not inclusive of the check-in date) \n50% of tariff for cancellation less than two weeks and prior to two working days before check-in-date (not inclusive of the check-in date) \nNo refund for cancellation less than two days before check-in-date (not inclusive of the check-in date', 0, 1, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 0, 1, 0, 1, 1, 1, 1, 1, 0, 0, 1, 0, 0, 0, 0, '2016-02-08', '2016-03-30 10:06:06', 1),
(10, 'Bird Of Paradise', '13 state Highway 91 Kudumangalore Kudige post Kushalanagara Karnataka -  571232', '8050071715', 'Coorg', 'The most vivid travel experiences usually find you by accident, and the qualities that will make you fall in love with a place are rarely the features that took you there, but the essence itself…..Paradise found….. Tucked away in the foothills of Coorg, this heaven could well be described as the Garden of Eden. Inspired and named after an exotic flower species, it is a paradise significant of new beginnings and a sense of freedom.', 'Home stay', '12.488541', '75.956565', 0, 78, 25, 28, 0.00, NULL, '4.3', '4.4', '1400', '1200', 'bop_1004.jpg', 'Header10.jpg', '1001.jpg', '1002.jpg', '1003.jpg', '1004.jpg', '10% of tariff for cancellation prior to two weeks before check-in-date (not inclusive of the check-in date) \n50% of tariff for cancellation less than two weeks and prior to two working days before check-in-date (not inclusive of the check-in date) \nNo refund for cancellation less than two days before check-in-date (not inclusive of the check-in date', 0, 1, 0, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, '2016-02-08', '2016-03-30 10:06:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tble_property_review`
--

CREATE TABLE IF NOT EXISTS `tble_property_review` (
  `property_review_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `review` text,
  `rating` varchar(20) DEFAULT NULL,
  `cts` date NOT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delflag` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`property_review_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tble_property_review`
--

INSERT INTO `tble_property_review` (`property_review_id`, `property_id`, `customer_name`, `review`, `rating`, `cts`, `mts`, `delflag`) VALUES
(1, 1, 'Parinay Bansal', 'It''s a lean lonely resort with included breakfast and dinner. \r\nThe weather is just awesome and being far from the city provides a serene outing. \r\nBest suited for a couple or honeymoon package', '5', '2016-02-09', '2016-02-09 05:58:22', 1),
(2, 1, 'Sanjeev Nawani', 'Pros:\r\nGreat food [veg]\r\nBeautiful pool\r\nLiked the boating in harangi\r\nAwesome sunrise view\r\nGreat place to relax amid nature\r\n\r\nCons:\r\nApproach road of 5 kms very bad\r\nRooms are not worth the price\r\nService not available before 7 in mornings', '4', '2016-02-09', '2016-02-09 05:59:43', 1),
(3, 2, 'Naveen Gowda', 'OMG, I love the hospitality, Cleanliness, the food, nature, rooms, Pool, spa, somany positives in one place, and one more thing you just cant forget about restaurant & one & only Mr Shivakumar you jus can''t ignore him there he there always behind you & helping you in all aspects. He even dont mind to join for a conversations with you, I really had a great time in the place... Sure will come back & I strongly recommend for my friends.... Thank you so much guys.....', '4', '2016-02-09', '2016-02-09 05:59:43', 1),
(4, 2, 'Saju Paul', 'Wonderful resort. Food is superb. Location is great. Nice enough infiniti swimming pool at the hill top. Cool place to relax and have a quiet vacation away from the hustle and bustle of the city.  Would be great if they add a gym, steam and sauna', '4', '2016-02-09', '2016-02-09 06:01:03', 1),
(5, 3, 'Phaneesh Rao', 'Great experience, particularly in Rafting. Very nice ambiance, nice people. Good variety of foods.', '4', '2016-02-09', '2016-02-09 06:01:03', 1),
(6, 3, 'Rama Krishnan', 'An Amazing place is what I would summarize the place as. The cottages are all well maintained , for the food lovers - the chef offers you a variety of treats with his preparations. With Courteous staff and the natures trail around you there is never a dull moment with lots of activities, \r\nKadkani Resorts has on offer everything one looks out for a relaxed and comfortable stay. A must visit place in the region.', '4.5', '2016-02-09', '2016-02-09 06:02:24', 1),
(7, 3, 'Dinesh Roy', 'Excellent Resort. \r\nTruly  keeping an international quality in almost everything.. from Food, environment, setup Customer interface, Swimming pool, Rooms etc etc and really a nice Bar  \r\n\r\nWhat You should do must there: River rafting , trekking', '4', '2016-02-09', '2016-02-09 06:02:24', 1),
(8, 4, 'Eshaan Saroop', 'Unbelievable experience. Courteous staff, exotic food. Being from north the cuisine was very new and fresh. The resort property and features and downright amazing. Worth multiple visits', '5', '2016-02-09', '2016-02-09 06:03:44', 1),
(9, 4, 'Karthik Narasimhan', 'Lovely Place. Excellent customer service. A green paradise that absolutely soothes your soul! A must visit! ', '5', '2016-02-09', '2016-02-09 06:03:44', 1),
(10, 4, 'Shelina Velani', 'Orange County Coorg is luxury personified .Right from the ambiance to the interiors to the hospitality,the service., the food [they have 3 restaurants serving delectable cuisine] to the nature walks and the sight seeings they provide;is fantastic .the villa with jacuzzi and swimming pool attached is awesome .truly worth every rupee one spends .Orange County has been the best experience of my life', '5', '2016-02-09', '2016-02-09 06:05:02', 1),
(11, 5, 'Amit Yadav', 'I had gone to this place with my family for lunch. I Like it ambience and Food was good. Can focus more on service.\r\nReally good place to visit', '4.5', '2016-02-09', '2016-02-09 06:05:02', 1),
(12, 5, 'amit rai', 'Amazing service, great ambiance, awesome food !!  Feels home', '4', '2016-02-09', '2016-02-09 06:06:13', 1),
(13, 5, 'sandeep makam', 'excellent facilities, great food, amazing rooms, fabulous activities and a wide range of experiences for every age group. highly recommended for rejuvenating the body, mind and soul. check in and rediscover life in the rabbit hole ', '4', '2016-02-09', '2016-02-09 06:06:13', 1),
(14, 6, 'Sidda Srinivas', 'Excellent. Nice Jungle experience resort.', '3.5', '2016-02-09', '2016-02-09 06:08:09', 1),
(15, 6, 'Neeraj s', 'went on 23rd to 25th Oct,2015. Nice place to stay. Food is good. Various options for breakfast and diner.', '3.2', '2016-02-09', '2016-02-09 06:08:09', 1),
(16, 7, 'Sidu Ponnappa', 'Friendly staff, and decent food but no running water in the room, then no hot water once that was fixed several hours late. \r\n\r\nThe swimming pool was disgustingly dirty, with an oily, soapy scum floating on top that didn''t change noticeably even after the staff to cleaned the pool the next morning. The staff don''t enforce swimming clothes, so there are guests in the pool, fully clothed.\r\n\r\nThe bicycles are broken and unusable. Ditto the gym.\r\n\r\nThe squash court is missing equipment, as is the billiards room.\r\n\r\nI''d avoid this place.', '2.5', '2016-02-09', '2016-02-09 06:09:21', 1),
(17, 7, 'lavanya gowda', 'Superb fantastic experience', '4', '2016-02-09', '2016-02-09 06:09:21', 1),
(18, 8, 'Darshan Udani', 'A very good resort to stay with luxury and built among plantation''s for a lavish enjoyment, with large rooms with all amenities and good food.. Ready to help and assist staff members..My experience was very good and would visit again for more number of days to stay there..', '4.5', '2016-02-09', '2016-02-09 06:10:31', 1),
(19, 8, 'hitesh patel', 'Natural beauty with peace limited crowd very nice food and staff', '4.5', '2016-02-09', '2016-02-09 06:10:31', 1),
(20, 9, 'Arun Parmar', 'Nice to stay there. Delicious food, good room service. Heavenly view.', '4.5', '2016-02-09', '2016-02-09 06:11:36', 1),
(21, 9, 'Rohit Chandrashekar', 'A very calm and beautiful place. courteous staff that helped us with delicious food at odd timings.. The valley view room made our anniversary even special. recommended for everyone.. will definitely visit again', '5', '2016-02-09', '2016-02-09 06:11:36', 1),
(22, 10, 'Vivek Mantri', 'I am very happy to visit this place. This place make my trip more pleasurable and memorable.Surrounded by dark greenery.I enjoyed swimming.My babies enjoyed play area.Hospitality was very good.Food was delicious.View was superb.Beacause of greenery and water there is so many mosquitoes.No doubt they provide cream and gel also but take precautions.I enjoyed Bonfire also.', '0', '2016-02-09', '2016-02-09 06:12:31', 1),
(23, 10, 'Sudhamshu Chandra', 'Amazing experience, very helpful and cordial staff, good food and wonderful amenities. Really a very relaxing holiday', '0', '2016-02-09', '2016-02-09 06:12:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tble_property_room_price`
--

CREATE TABLE IF NOT EXISTS `tble_property_room_price` (
  `room_price_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `property_room` varchar(255) NOT NULL,
  `room_price` decimal(15,2) NOT NULL,
  `cts` date NOT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delflag` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`room_price_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `tble_property_room_price`
--

INSERT INTO `tble_property_room_price` (`room_price_id`, `property_id`, `property_room`, `room_price`, `cts`, `mts`, `delflag`) VALUES
(1, 1, 'DELUXE BALCONY ROOM A/C', '4900.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(2, 1, 'HONEYMOON COTTAGE[A/C]', '5300.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(3, 1, 'JUNGLE SUITE[A/C][For 4 Persons]  [2 Bed room with attached Bath,Kitchen,Living & Sit out.]', '8900.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(4, 1, 'JUNGLE STUDIO A/C', '4900.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(5, 1, 'THE NEST A/C', '4900.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(6, 1, 'STANDARD ROOM', '4200.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(7, 2, 'Delux Cottages', '6868.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(8, 3, 'Delux AC Cottages', '11000.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(9, 3, 'Den AC Cottages', '12000.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(10, 3, 'Premium AC Cottages', '15000.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(11, 4, 'Private Pool Villa', '35000.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(12, 4, 'Lily Pool Cottage', '25000.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(13, 4, 'Lily Pool Villa', '35000.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(14, 4, 'Lily Pool Bunglow', '53000.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(15, 5, 'Bunglow', '13000.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(16, 5, 'Honeymoon Villa', '14000.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(17, 6, 'Cozy Cottage', '3900.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(18, 6, 'Standard Cottage', '4400.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(19, 6, 'Deluxe Room[A/C]', '4900.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(20, 6, 'Deluxe Cottage [A/C]', '4900.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(21, 6, 'Jumbo Cottage [5 Persons]', '4900.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(22, 7, 'Suits Room', '4655.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(23, 7, 'Delux Room', '5818.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(24, 8, 'STUDIO ROOM', '12600.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(25, 8, 'SUITE ROOM', '15300.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(26, 8, 'Jacuzzi Villa', '21600.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(27, 8, 'PLANTATION BUNGLOW', '36000.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(28, 9, 'Valley View Chalets', '7762.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(29, 9, 'Mountain View Chalets', '6568.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(30, 9, 'Tree Top 1', '7762.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(31, 9, 'Tree Top 2', '6568.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(32, 9, 'Plantation View Chalets', '4874.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(33, 10, 'Deluxe room (AC)', '4950.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(34, 10, 'Family Cottage', '4950.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(35, 10, 'Family Cottage2', '4950.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(36, 10, 'Tree House', '5200.00', '2016-02-09', '2016-02-09 05:28:06', 1),
(37, 10, 'Dormitory', '17500.00', '2016-02-09', '2016-02-09 05:28:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tble_property_type`
--

CREATE TABLE IF NOT EXISTS `tble_property_type` (
  `property_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_type` varchar(20) NOT NULL,
  `type_description` varchar(20) NOT NULL,
  `cts` date NOT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delflag` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`property_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tble_property_type`
--

INSERT INTO `tble_property_type` (`property_type_id`, `property_type`, `type_description`, `cts`, `mts`, `delflag`) VALUES
(1, 'Miraj', 'NO des', '2016-02-01', '2016-02-01 06:47:46', 0),
(2, 'Miraj', 'No des', '2016-02-01', '2016-02-01 06:48:39', 0),
(3, 'Sangli', 'No Des', '2016-02-01', '2016-02-01 07:17:04', 0),
(4, 'Kolhapur', 'No des NO', '2016-02-01', '2016-03-25 08:50:24', 0),
(5, 'test', 'test', '2016-03-16', '2016-03-25 08:50:29', 0),
(6, 'Resort', 'It is resort', '2016-03-25', '2016-03-25 08:50:43', 1),
(7, 'Home stay', 'It is home stay', '2016-03-25', '2016-03-25 08:50:58', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tble_prop_availability`
--

CREATE TABLE IF NOT EXISTS `tble_prop_availability` (
  `avail_id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) DEFAULT NULL,
  `available_date` date DEFAULT NULL,
  `guest` int(11) DEFAULT NULL,
  `cts` date DEFAULT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delflag` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`avail_id`),
  KEY `fk_ppp_id` (`property_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=253 ;

--
-- Dumping data for table `tble_prop_availability`
--

INSERT INTO `tble_prop_availability` (`avail_id`, `property_id`, `available_date`, `guest`, `cts`, `mts`, `delflag`) VALUES
(1, 1, '2016-04-06', 5, '2016-03-26', '2016-04-05 07:47:58', '1'),
(2, 1, '2016-04-07', 3, '2016-03-26', '2016-04-05 07:48:03', '1'),
(3, 1, '2016-04-08', 3, '2016-03-26', '2016-04-05 07:48:07', '1'),
(4, 1, '2016-04-09', 3, '2016-03-26', '2016-04-05 07:48:11', '1'),
(5, 1, '2016-04-30', 3, '2016-03-26', '2016-03-30 12:57:40', '1'),
(6, 2, '2016-04-10', 2, '2016-03-26', '2016-04-05 11:41:00', '1'),
(7, 2, '2016-04-09', 7, '2016-03-26', '2016-04-05 11:40:55', '1'),
(8, 2, '2016-04-08', 8, '2016-03-26', '2016-04-05 11:40:52', '1'),
(9, 2, '2016-04-07', 0, '2016-03-26', '2016-04-05 11:40:27', '1'),
(10, 2, '2016-04-06', 6, '2016-03-26', '2016-04-05 11:40:17', '1'),
(11, 2, '2016-04-30', 6, '2016-03-26', '2016-03-31 04:29:20', '1'),
(12, 3, '2016-04-10', 1, '2016-03-26', '2016-04-05 11:41:44', '1'),
(13, 3, '2016-04-09', 2, '2016-03-26', '2016-04-05 11:41:40', '1'),
(14, 3, '2016-04-08', 8, '2016-03-26', '2016-04-05 11:41:31', '1'),
(15, 3, '2016-04-07', 3, '2016-03-26', '2016-04-05 11:41:24', '1'),
(16, 3, '2016-04-06', 3, '2016-03-26', '2016-04-05 11:41:05', '1'),
(17, 3, '2016-04-30', 3, '2016-03-26', '2016-03-30 12:58:18', '1'),
(18, 4, '2016-04-10', 6, '2016-03-26', '2016-04-05 11:42:23', '1'),
(19, 4, '2016-04-09', 6, '2016-03-26', '2016-04-05 11:42:10', '1'),
(20, 4, '2016-04-08', 2, '2016-03-26', '2016-04-05 11:42:05', '1'),
(21, 4, '2016-04-07', 9, '2016-03-26', '2016-04-05 11:42:00', '1'),
(22, 4, '2016-04-06', 10, '2016-03-26', '2016-04-05 11:41:55', '1'),
(23, 4, '2016-04-30', 6, '2016-03-26', '2016-03-31 03:34:57', '1'),
(24, 5, '2016-04-11', 0, '2016-03-26', '2016-04-05 11:43:17', '1'),
(25, 5, '2016-04-10', 2, '2016-03-26', '2016-04-05 11:43:14', '1'),
(26, 5, '2016-04-09', 4, '2016-03-26', '2016-04-05 11:43:09', '1'),
(27, 5, '2016-04-08', 9, '2016-03-26', '2016-04-05 11:42:48', '1'),
(28, 5, '2016-04-07', 9, '2016-03-26', '2016-04-05 11:42:39', '1'),
(29, 5, '2016-04-06', 3, '2016-03-26', '2016-04-05 11:42:44', '1'),
(30, 5, '2016-04-30', 8, '2016-03-26', '2016-03-30 12:58:02', '1'),
(31, 6, '2016-04-10', 10, '2016-03-26', '2016-04-05 11:44:02', '1'),
(32, 6, '2016-04-09', 1, '2016-03-26', '2016-04-05 11:43:58', '1'),
(33, 6, '2016-04-08', 5, '2016-03-26', '2016-04-05 11:43:47', '1'),
(34, 6, '2016-04-07', 4, '2016-03-26', '2016-04-05 11:43:34', '1'),
(35, 6, '2016-04-06', 7, '2016-03-26', '2016-04-05 11:43:30', '1'),
(36, 6, '2016-04-30', 3, '2016-03-26', '2016-03-30 12:51:58', '1'),
(37, 7, '2016-04-10', 5, '2016-03-26', '2016-04-05 11:44:34', '1'),
(38, 7, '2016-04-09', 8, '2016-03-26', '2016-04-05 11:44:30', '1'),
(39, 7, '2016-04-08', 1, '2016-03-26', '2016-04-05 11:44:26', '1'),
(40, 7, '2016-04-07', 9, '2016-03-26', '2016-04-05 11:44:22', '1'),
(41, 7, '2016-04-06', 9, '2016-03-26', '2016-04-05 11:44:18', '1'),
(42, 7, '2016-04-30', 5, '2016-03-26', '2016-03-30 12:51:08', '1'),
(43, 8, '2016-04-10', 3, '2016-03-26', '2016-04-05 11:45:03', '1'),
(44, 8, '2016-04-09', 8, '2016-03-26', '2016-04-05 11:45:00', '1'),
(45, 8, '2016-04-08', 9, '2016-03-26', '2016-04-05 11:44:57', '1'),
(46, 8, '2016-04-07', 3, '2016-03-26', '2016-04-05 11:44:46', '1'),
(47, 8, '2016-04-06', 10, '2016-03-26', '2016-04-05 11:44:41', '1'),
(48, 8, '2016-04-30', 10, '2016-03-26', '2016-03-31 04:12:09', '1'),
(49, 9, '2016-04-10', 1, '2016-03-26', '2016-04-05 11:45:25', '1'),
(50, 9, '2016-04-09', 8, '2016-03-26', '2016-04-05 11:45:21', '1'),
(51, 9, '2016-04-08', 7, '2016-03-26', '2016-04-05 11:45:16', '1'),
(52, 9, '2016-04-07', 4, '2016-03-26', '2016-04-05 11:45:13', '1'),
(53, 9, '2016-04-06', 10, '2016-03-26', '2016-04-05 11:45:07', '1'),
(54, 9, '2016-04-30', 8, '2016-03-26', '2016-03-31 04:13:06', '1'),
(55, 10, '2016-04-30', 2, '2016-03-26', '2016-04-05 11:45:34', '1'),
(56, 10, '2016-04-06', 1, '2016-03-26', '2016-04-05 11:45:39', '1'),
(57, 10, '2016-04-07', 2, '2016-03-26', '2016-04-05 11:45:43', '1'),
(58, 10, '2016-04-08', 4, '2016-03-26', '2016-04-05 11:45:46', '1'),
(59, 10, '2016-04-09', 10, '2016-03-26', '2016-04-05 11:45:57', '1'),
(60, 10, '2016-04-10', 10, '2016-03-26', '2016-04-05 11:46:02', '1'),
(61, 1, '2016-04-10', 3, '2016-04-05', '2016-04-05 11:46:47', '1'),
(62, 1, '2016-04-11', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(63, 1, '2016-04-12', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(64, 1, '2016-04-12', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(65, 1, '2016-04-13', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(66, 1, '2016-04-14', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(67, 1, '2016-04-15', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(68, 1, '2016-04-16', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(69, 1, '2016-04-17', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(70, 1, '2016-04-18', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(71, 1, '2016-04-19', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(72, 1, '2016-04-20', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(73, 1, '2016-04-21', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(74, 1, '2016-04-22', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(75, 1, '2016-04-23', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(76, 1, '2016-04-24', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(77, 1, '2016-04-25', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(78, 1, '2016-04-26', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(79, 1, '2016-04-27', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(80, 1, '2016-04-28', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(81, 1, '2016-04-29', 3, '2016-04-05', '2016-04-05 11:48:30', '1'),
(82, 1, '2016-05-01', 3, '2016-04-05', '2016-04-05 11:49:11', '1'),
(83, 2, '2016-04-11', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(84, 2, '2016-04-12', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(85, 2, '2016-04-13', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(86, 2, '2016-04-14', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(87, 2, '2016-04-15', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(88, 2, '2016-04-16', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(89, 2, '2016-04-17', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(90, 2, '2016-04-18', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(91, 2, '2016-04-19', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(92, 2, '2016-04-20', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(93, 2, '2016-04-21', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(94, 2, '2016-04-22', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(95, 2, '2016-04-23', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(96, 2, '2016-04-24', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(97, 2, '2016-04-25', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(98, 2, '2016-04-26', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(99, 2, '2016-04-27', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(100, 2, '2016-04-28', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(101, 2, '2016-04-29', 3, '2016-04-05', '2016-04-05 11:51:33', '1'),
(102, 3, '2016-04-11', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(103, 3, '2016-04-12', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(104, 3, '2016-04-13', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(105, 3, '2016-04-14', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(106, 3, '2016-04-15', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(107, 3, '2016-04-16', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(108, 3, '2016-04-17', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(109, 3, '2016-04-18', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(110, 3, '2016-04-19', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(111, 3, '2016-04-20', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(112, 3, '2016-04-21', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(113, 3, '2016-04-22', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(114, 3, '2016-04-23', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(115, 3, '2016-04-24', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(116, 3, '2016-04-25', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(117, 3, '2016-04-26', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(118, 3, '2016-04-27', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(119, 3, '2016-04-28', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(120, 3, '2016-04-29', 3, '2016-04-05', '2016-04-05 11:54:04', '1'),
(121, 4, '2016-04-11', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(122, 4, '2016-04-12', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(123, 4, '2016-04-13', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(124, 4, '2016-04-14', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(125, 4, '2016-04-15', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(126, 4, '2016-04-16', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(127, 4, '2016-04-17', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(128, 4, '2016-04-18', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(129, 4, '2016-04-19', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(130, 4, '2016-04-20', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(131, 4, '2016-04-21', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(132, 4, '2016-04-22', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(133, 4, '2016-04-23', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(134, 4, '2016-04-24', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(135, 4, '2016-04-25', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(136, 4, '2016-04-26', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(137, 4, '2016-04-27', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(138, 4, '2016-04-28', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(139, 4, '2016-04-29', 3, '2016-04-05', '2016-04-05 11:57:26', '1'),
(140, 5, '2016-04-12', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(141, 5, '2016-04-13', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(142, 5, '2016-04-14', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(143, 5, '2016-04-15', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(144, 5, '2016-04-16', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(145, 5, '2016-04-17', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(146, 5, '2016-04-18', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(147, 5, '2016-04-19', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(148, 5, '2016-04-20', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(149, 5, '2016-04-21', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(150, 5, '2016-04-22', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(151, 5, '2016-04-23', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(152, 5, '2016-04-24', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(153, 5, '2016-04-25', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(154, 5, '2016-04-26', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(155, 5, '2016-04-27', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(156, 5, '2016-04-28', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(157, 5, '2016-04-29', 3, '2016-04-05', '2016-04-05 11:59:13', '1'),
(158, 6, '2016-04-11', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(159, 6, '2016-04-12', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(160, 6, '2016-04-13', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(161, 6, '2016-04-14', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(162, 6, '2016-04-15', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(163, 6, '2016-04-16', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(164, 6, '2016-04-17', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(165, 6, '2016-04-18', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(166, 6, '2016-04-19', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(167, 6, '2016-04-20', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(168, 6, '2016-04-21', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(169, 6, '2016-04-22', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(170, 6, '2016-04-23', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(171, 6, '2016-04-24', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(172, 6, '2016-04-25', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(173, 6, '2016-04-26', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(174, 6, '2016-04-27', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(175, 6, '2016-04-28', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(176, 6, '2016-04-29', 3, '2016-04-05', '2016-04-05 12:00:57', '1'),
(177, 7, '2016-04-11', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(178, 7, '2016-04-12', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(179, 7, '2016-04-13', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(180, 7, '2016-04-14', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(181, 7, '2016-04-15', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(182, 7, '2016-04-16', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(183, 7, '2016-04-17', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(184, 7, '2016-04-18', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(185, 7, '2016-04-19', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(186, 7, '2016-04-20', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(187, 7, '2016-04-21', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(188, 7, '2016-04-22', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(189, 7, '2016-04-23', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(190, 7, '2016-04-24', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(191, 7, '2016-04-25', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(192, 7, '2016-04-26', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(193, 7, '2016-04-27', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(194, 7, '2016-04-28', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(195, 7, '2016-04-29', 3, '2016-04-05', '2016-04-05 12:06:02', '1'),
(196, 8, '2016-04-11', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(197, 8, '2016-04-12', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(198, 8, '2016-04-13', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(199, 8, '2016-04-14', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(200, 8, '2016-04-15', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(201, 8, '2016-04-16', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(202, 8, '2016-04-17', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(203, 8, '2016-04-18', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(204, 8, '2016-04-19', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(205, 8, '2016-04-20', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(206, 8, '2016-04-21', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(207, 8, '2016-04-22', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(208, 8, '2016-04-23', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(209, 8, '2016-04-24', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(210, 8, '2016-04-25', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(211, 8, '2016-04-26', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(212, 8, '2016-04-27', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(213, 8, '2016-04-28', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(214, 8, '2016-04-29', 3, '2016-04-05', '2016-04-05 12:07:52', '1'),
(215, 9, '2016-04-11', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(216, 9, '2016-04-12', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(217, 9, '2016-04-13', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(218, 9, '2016-04-14', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(219, 9, '2016-04-15', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(220, 9, '2016-04-16', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(221, 9, '2016-04-17', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(222, 9, '2016-04-18', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(223, 9, '2016-04-19', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(224, 9, '2016-04-20', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(225, 9, '2016-04-21', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(226, 9, '2016-04-22', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(227, 9, '2016-04-23', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(228, 9, '2016-04-24', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(229, 9, '2016-04-25', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(230, 9, '2016-04-26', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(231, 9, '2016-04-27', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(232, 9, '2016-04-28', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(233, 9, '2016-04-29', 3, '2016-04-05', '2016-04-05 12:09:24', '1'),
(234, 10, '2016-04-11', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(235, 10, '2016-04-12', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(236, 10, '2016-04-13', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(237, 10, '2016-04-14', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(238, 10, '2016-04-15', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(239, 10, '2016-04-16', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(240, 10, '2016-04-17', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(241, 10, '2016-04-18', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(242, 10, '2016-04-19', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(243, 10, '2016-04-20', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(244, 10, '2016-04-21', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(245, 10, '2016-04-22', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(246, 10, '2016-04-23', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(247, 10, '2016-04-24', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(248, 10, '2016-04-25', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(249, 10, '2016-04-26', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(250, 10, '2016-04-27', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(251, 10, '2016-04-28', 3, '2016-04-05', '2016-04-05 12:10:42', '1'),
(252, 10, '2016-04-29', 3, '2016-04-05', '2016-04-05 12:10:42', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tble_status_master`
--

CREATE TABLE IF NOT EXISTS `tble_status_master` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(15) NOT NULL,
  `description` varchar(20) NOT NULL,
  `cts` date NOT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delflag` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tble_status_master`
--

INSERT INTO `tble_status_master` (`status_id`, `status`, `description`, `cts`, `mts`, `delflag`) VALUES
(1, 'Close', 'No Des', '2016-02-01', '2016-02-01 08:43:48', 0),
(2, 'Open', 'No Des', '2016-02-01', '2016-02-01 08:41:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tble_wishlist`
--

CREATE TABLE IF NOT EXISTS `tble_wishlist` (
  `wishlistid` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_id` varchar(255) NOT NULL,
  `property_id` int(11) NOT NULL,
  `cts` date NOT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delflag` varchar(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`wishlistid`),
  KEY `fk_wishprop_id` (`property_id`),
  KEY `fk_oauth_id` (`oauth_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tble_wishlist`
--

INSERT INTO `tble_wishlist` (`wishlistid`, `oauth_id`, `property_id`, `cts`, `mts`, `delflag`) VALUES
(1, '900819100031942', 7, '2016-02-20', '2016-02-20 10:44:31', '1'),
(2, '900819100031942', 1, '2016-02-20', '2016-02-20 10:44:45', '1'),
(3, '900819100031942', 4, '2016-02-20', '2016-02-20 10:45:04', '1'),
(4, '900819100031942', 3, '2016-02-20', '2016-02-20 10:46:33', '1'),
(5, '900819100031942', 2, '2016-02-20', '2016-02-20 10:49:25', '1'),
(6, '938061962956334', 9, '2016-02-20', '2016-02-20 10:54:23', '1'),
(7, '938061962956334', 10, '2016-02-20', '2016-02-20 10:54:46', '1'),
(8, '932953316800346', 5, '2016-02-20', '2016-02-20 11:23:28', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_registration`
--

CREATE TABLE IF NOT EXISTS `tbl_registration` (
  `reg_id` int(11) NOT NULL,
  `oauth_uid` varchar(255) NOT NULL DEFAULT '',
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `mobile_no` decimal(13,0) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `mstatus` varchar(1) DEFAULT NULL,
  `profession` varchar(1) NOT NULL DEFAULT '0',
  `vpage` int(10) NOT NULL DEFAULT '0',
  `timespent` varchar(50) DEFAULT '0',
  `Ecotourism` decimal(10,6) DEFAULT NULL,
  `Family_and_Kids` decimal(10,6) DEFAULT NULL,
  `Heritage_and_Spirituality` decimal(10,6) DEFAULT NULL,
  `Wellness_and_Care` decimal(10,6) DEFAULT NULL,
  `Romantic_Holidays` decimal(10,6) DEFAULT NULL,
  `Adventure_and_Exploration` decimal(10,6) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `confirm_password` varchar(20) DEFAULT NULL,
  `type_of_reg` varchar(15) DEFAULT NULL,
  `cts` date DEFAULT NULL,
  `mts` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `delflag` int(1) DEFAULT '1',
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tble_activity_review`
--
ALTER TABLE `tble_activity_review`
  ADD CONSTRAINT `fk_actv_id` FOREIGN KEY (`activity_id`) REFERENCES `tble_activities` (`activities_id`);

--
-- Constraints for table `tble_prop_availability`
--
ALTER TABLE `tble_prop_availability`
  ADD CONSTRAINT `fk_ppp_id` FOREIGN KEY (`property_id`) REFERENCES `tble_property` (`property_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
