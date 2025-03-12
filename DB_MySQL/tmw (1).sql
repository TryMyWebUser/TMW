-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2025 at 09:35 AM
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
-- Database: `tmw`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`) VALUES
(1, 'trymywebsites', 'tmw@098');

-- --------------------------------------------------------

--
-- Table structure for table `headline`
--

CREATE TABLE `headline` (
  `id` int(11) NOT NULL,
  `header` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `headline`
--

INSERT INTO `headline` (`id`, `header`, `created_at`) VALUES
(4, 'Web Development', '2025-01-31 15:36:28'),
(5, 'Web Design', '2025-01-31 15:36:38'),
(6, 'Data Analyst', '2025-01-31 15:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `links` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `img`, `created_at`, `links`) VALUES
(7, 'Al super city', 'uploads/pro/Screenshot 2025-01-28 150642.png', '2025-01-28 15:07:57', 'http://alsupercitty.in/'),
(8, 'Nirmala Engineering Works', 'uploads/pro/nirmala.png', '2025-01-28 15:09:28', 'http://nirmalaengineeringworks.in/'),
(9, 'Oliva Planters', 'uploads/pro/oliva.png', '2025-01-28 15:10:20', 'http://olivaplanters.com/'),
(10, 'Best Earthings', 'uploads/pro/Screenshot 2025-01-28 151112.png', '2025-01-28 15:12:07', 'http://bestearthings.com/'),
(11, 'Medley Regency', 'uploads/pro/medley.png', '2025-01-28 15:12:56', 'http://medleyregency.com/'),
(12, 'SGA Alloys', 'uploads/pro/Screenshot 2025-01-28 151334.png', '2025-01-28 15:14:06', 'https://sgaalloys.com/'),
(13, 'Top Ten Furniture', 'uploads/pro/Screenshot 2025-01-28 151435.png', '2025-01-28 15:15:04', 'http://toptenfurniture.in/'),
(14, 'JMV Function Hall', 'uploads/pro/Screenshot 2025-01-28 151626.png', '2025-01-28 15:16:52', 'http://jmvfunctionhall.in/'),
(15, 'Mohana Engineering', 'uploads/pro/Screenshot 2025-01-28 151739.png', '2025-01-28 15:18:07', 'https://mohanaengineering.com/'),
(16, 'ASR Bricks', 'uploads/pro/Screenshot 2025-01-28 151837.png', '2025-01-28 15:19:03', 'https://asrbrickscbe.com/'),
(17, 'Made Up Studio', 'uploads/pro/Screenshot 2025-01-28 151934.png', '2025-01-28 15:19:52', 'madeupstudio.in'),
(18, 'Mask Tattoo Studio', 'uploads/pro/Screenshot 2025-01-28 152023.png', '2025-01-28 15:20:46', 'http://masktattoostudio.com/'),
(19, 'V Studio', 'uploads/pro/Screenshot 2025-01-28 152130.png', '2025-01-28 15:21:54', 'http://vstudioviji.in/'),
(20, 'Industrial Equipment & Spares', 'uploads/pro/Screenshot 2025-01-28 152238.png', '2025-01-28 15:23:17', 'http://compressorspareparts.in/'),
(21, 'Kumaran Costumes', 'uploads/pro/Screenshot 2025-01-28 152329.png', '2025-01-28 15:23:58', 'http://kumarancostumes.in/'),
(22, 'Kalam Enterprises', 'uploads/pro/Screenshot 2025-01-28 152423.png', '2025-01-28 15:24:53', 'http://kalamenterprises.co.in/'),
(23, 'Revaa Automation', 'uploads/pro/Screenshot 2025-01-28 152614.png', '2025-01-28 15:26:37', 'http://revaawirecut.com/'),
(24, 'Sam Curtains & mosquito net', 'uploads/pro/Screenshot 2025-01-28 152703.png', '2025-01-28 15:27:50', 'http://samnetlon.com/'),
(25, 'Judha Aluminium', 'uploads/pro/Screenshot 2025-01-28 152819.png', '2025-01-28 15:28:48', 'https://judahaluminium.com/'),
(26, 'JSB India Inc', 'uploads/pro/Screenshot 2025-01-28 152907.png', '2025-01-28 15:29:33', 'https://jsbindia.in/'),
(27, 'Power Steels', 'uploads/pro/Screenshot 2025-01-28 153002.png', '2025-01-28 15:30:18', 'powersteels.in'),
(28, 'Velu Nayaker Mess', 'uploads/pro/Screenshot 2025-01-28 153101.png', '2025-01-28 15:31:29', 'http://velunayakermess.in/'),
(29, 'Suntech Pumps', 'uploads/pro/Screenshot 2025-01-28 153153.png', '2025-01-28 15:32:34', 'http://suntechpumpscoimbatore.com/'),
(30, 'Siruvani Enterprises', 'uploads/pro/Screenshot 2025-01-28 153305.png', '2025-01-28 15:33:33', 'http://www.siruvanienterprises.in/'),
(31, 'I-5 Car Decors', 'uploads/pro/Screenshot 2025-01-28 153353.png', '2025-01-28 15:34:29', 'http://i5cardecors.com/'),
(32, 'DJ Manufacturing', 'uploads/pro/Screenshot 2025-01-28 153456.png', '2025-01-28 15:36:33', 'http://djmanufacturing.in/'),
(33, 'Achieve Automation India Pvt Ltd', 'uploads/pro/Screenshot 2025-01-28 153925.png', '2025-01-28 15:40:28', 'https://achieveautomation.net/'),
(34, 'Rowdhra Academy', 'uploads/pro/Screenshot 2025-01-28 154206.png', '2025-01-28 15:42:33', 'http://rowdhraacademy.com/'),
(35, 'Manoj Engineerings', 'uploads/pro/Screenshot 2025-01-28 154317.png', '2025-01-28 15:43:49', 'https://manojengineering.in/'),
(36, 'Thaaragai Masala', 'uploads/pro/Screenshot 2025-01-28 154440.png', '2025-01-28 15:45:04', 'https://thaaragaimasala.com/'),
(37, 'Jaya Spring', 'uploads/pro/Screenshot 2025-01-28 154530.png', '2025-01-28 15:45:54', 'https://jayasprings.in/'),
(38, 'Southern Holiday', 'uploads/pro/Screenshot 2025-01-28 154614.png', '2025-01-28 15:46:43', 'https://southernholidaysindia.com/'),
(39, 'Nova Induction', 'uploads/pro/Screenshot 2025-01-28 154713.png', '2025-01-28 15:47:30', 'http://novainduction.com/'),
(40, 'Breathe Yoga', 'uploads/pro/Screenshot 2025-01-28 154821.png', '2025-01-28 15:48:45', 'https://breatheyogacbe.com/'),
(41, 'Kites Cafe', 'uploads/pro/Screenshot 2025-01-28 154913.png', '2025-01-28 15:49:27', 'https://kitescafe.in/'),
(42, 'Sky Food', 'uploads/pro/Screenshot 2025-01-28 155010.png', '2025-01-28 15:50:25', 'http://skyfoodagrofarms.com/'),
(43, 'Covai Tyres', 'uploads/pro/Screenshot 2025-01-28 155054.png', '2025-01-28 15:51:13', 'http://covaityres.com/'),
(44, 'Allwin Engineering', 'uploads/pro/Screenshot 2025-01-28 155143.png', '2025-01-28 15:52:02', 'http://allwinengineering.in/'),
(45, 'Jai Maruthi Polishings', 'uploads/pro/Screenshot 2025-01-28 155229.png', '2025-01-28 15:52:52', 'http://jaimaruthipolishings.in/'),
(46, 'Rilie Health Care', 'uploads/pro/Screenshot 2025-01-28 155321.png', '2025-01-28 15:53:41', 'http://riliehealthcare.in/'),
(47, 'D Smart', 'uploads/pro/Screenshot 2025-01-28 155529.png', '2025-01-28 15:55:45', 'https://tntilesinfo.com/'),
(48, 'Guru Vignesh', 'uploads/pro/Screenshot 2025-01-28 155605.png', '2025-01-28 15:56:28', 'https://guruvignesh.in/'),
(49, 'Ranjana Stores', 'uploads/pro/Screenshot 2025-01-28 155700.png', '2025-01-28 15:57:42', 'https://ranjanauniforms.com/'),
(50, 'Ox -Ford English Academy', 'uploads/pro/Screenshot (35).png', '2025-01-28 16:19:15', 'https://ox-fordacademy.in/'),
(51, 'Sree Prasanna Bhavan', 'uploads/pro/Screenshot (36).png', '2025-01-28 16:20:38', 'http://sreeprasannabhavan.in/'),
(52, 'Senthilkumar Catering', 'uploads/pro/Screenshot (37).png', '2025-01-28 16:21:51', 'http://senthilkumarcatering.com/'),
(53, 'Arul Murugan Food Machines', 'uploads/pro/Screenshot (38).png', '2025-01-28 16:23:05', 'https://arulmuruganfoodmachines.com/'),
(54, 'Rajkamal Enterprises', 'uploads/pro/Screenshot (40).png', '2025-01-28 16:24:29', 'http://ledtvspares.com/'),
(55, 'Jaysun Exports', 'uploads/pro/Screenshot (41).png', '2025-01-28 16:25:55', 'https://jaysunexportsllc.com/'),
(56, 'Alif Traders', 'uploads/pro/Screenshot (42).png', '2025-01-28 16:27:07', 'http://alifwoodendoors.com/'),
(57, 'STERjoyful Private Limited', 'uploads/pro/Screenshot (43).png', '2025-01-28 16:28:32', 'https://sterjoyful.com/'),
(58, 'PowerTech Products', 'uploads/pro/Screenshot (44).png', '2025-01-28 16:30:16', 'http://powertechadhesive.in/'),
(59, 'Ladies Hostel in Coimbatore', 'uploads/pro/Screenshot (45).png', '2025-01-28 16:31:35', 'http://yazhiniladieshostels.com/'),
(60, 'Banu Priya', 'uploads/pro/Screenshot (46).png', '2025-01-28 16:32:37', 'https://banupriyas360.com/'),
(61, 'IT Store', 'uploads/pro/Screenshot (47).png', '2025-01-28 16:33:42', 'http://itstoresoftwares.com/'),
(62, 'Grazz Agro', 'uploads/pro/Screenshot (48).png', '2025-01-28 16:34:45', 'https://grazzagro.com/'),
(63, 'Kavishka Fabrication', 'uploads/pro/Screenshot (49).png', '2025-01-28 16:35:59', 'http://kavishkafabrication.in/'),
(64, 'Southland Holidays private limited', 'uploads/pro/Screenshot (50).png', '2025-01-28 16:37:03', 'https://southlandtourism.com/'),
(65, 'Small Wonders play school', 'uploads/pro/Screenshot (51).png', '2025-01-28 16:38:17', 'https://smallwondersplayschoolcbe.com/'),
(66, 'Royal Harmony music school', 'uploads/pro/Screenshot (52).png', '2025-01-28 16:39:19', 'http://royalharmonymusicschool.in/'),
(67, 'Sree Vijay Enterprises', 'uploads/pro/Screenshot (53).png', '2025-01-28 16:40:36', 'https://sreevijayenterprises.com/'),
(68, 'Power Pack Sysytems', 'uploads/pro/Screenshot (54).png', '2025-01-28 16:41:52', 'http://powerpacksystemss.com/'),
(69, 'Benatech education', 'uploads/pro/Screenshot (55).png', '2025-01-28 16:43:08', 'https://benatecheducations.com/'),
(70, 'Sathya Coatings private limited', 'uploads/pro/Screenshot (56).png', '2025-01-28 16:44:18', 'https://sathyacoatings.com/'),
(71, 'Meko Trading Corporation', 'uploads/pro/Screenshot (57).png', '2025-01-28 16:45:14', 'http://mekotradingcorporation.com/'),
(72, 'Kovai Kids Play School', 'uploads/pro/Screenshot (58).png', '2025-01-28 16:46:20', 'https://kovaikidsplayschool.com/'),
(73, 'Metal Castomech', 'uploads/pro/Screenshot (60).png', '2025-01-28 16:47:13', 'https://metalcastomech.com/'),
(74, 'Mahaveer Unitex', 'uploads/pro/Screenshot (61).png', '2025-01-28 16:48:28', 'http://mymatex.in/'),
(75, 'Ultra Cool Engineers', 'uploads/pro/Screenshot (62).png', '2025-01-28 16:49:26', 'http://ultracoolengineers.in/'),
(76, 'Tharani Engineering', 'uploads/pro/Screenshot (63).png', '2025-01-28 16:51:12', 'http://tharaniengineering.com/'),
(77, 'Kovai Aqua Tech', 'uploads/pro/Screenshot (64).png', '2025-01-28 16:52:08', 'https://kovaiaquatech.com/'),
(78, 'Vijay Air Compressor', 'uploads/pro/Screenshot (65).png', '2025-01-28 16:53:30', 'http://vijaycompressors.com/'),
(79, 'Nuvilla India', 'uploads/pro/Screenshot (67).png', '2025-01-28 16:54:28', 'https://nuvillaindia.com/'),
(80, 'Hotel Briyanikaran', 'uploads/pro/Screenshot (68).png', '2025-01-28 16:55:53', 'http://hotelbiriyanikaran.com/'),
(81, 'INED consulting', 'uploads/pro/Screenshot (75).png', '2025-01-31 15:19:24', 'https://inedconsulting.nl/'),
(82, 'Minerva Tiles', 'uploads/pro/Screenshot (76).png', '2025-01-31 15:20:26', 'https://minervatiles.com/'),
(83, 'Minerva Construction', 'uploads/pro/Screenshot (77).png', '2025-01-31 15:21:25', 'https://minervaconstructions.com/'),
(84, 'VKT Building Materials', 'uploads/pro/Screenshot (78).png', '2025-01-31 15:22:30', 'https://vktbuildingmaterials.com/'),
(85, 'Sun Data Tech', 'uploads/pro/Screenshot (80).png', '2025-01-31 15:23:28', 'https://sundatatech.org/'),
(86, 'Unique IAS academy', 'uploads/pro/Screenshot (81).png', '2025-01-31 15:24:40', 'https://www.uniqueiasacademy.com/'),
(87, 'Soumy Institutes', 'uploads/pro/Screenshot (82).png', '2025-01-31 15:25:37', 'https://soumyinstitutes.com/'),
(88, 'RR Industries', 'uploads/pro/Screenshot (83).png', '2025-01-31 15:26:25', 'http://monarkpumps.com/?i=1'),
(89, 'Brain Embedded', 'uploads/pro/Screenshot (84).png', '2025-01-31 15:27:21', 'https://brainembedded.com/'),
(90, 'Dream Scaape', 'uploads/pro/Screenshot (85).png', '2025-01-31 15:28:16', 'https://dreamscaape.com/'),
(91, 'Fitwel Industries', 'uploads/pro/Screenshot (86).png', '2025-01-31 15:29:14', 'http://fitwelcbe.com/'),
(92, 'V Penta Industry', 'uploads/pro/Screenshot (87).png', '2025-01-31 15:30:08', 'https://vpentaindustry.in/'),
(93, 'Stunup Interrior & Furnitures', 'uploads/pro/Screenshot (88).png', '2025-01-31 15:31:21', 'https://stunup.com/');

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id` int(11) NOT NULL,
  `img` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id`, `img`, `created_at`) VALUES
(8, 'uploads/promo/18.jpg', '2025-01-28 17:18:16'),
(9, 'uploads/promo/42.jpg', '2025-01-28 17:18:39'),
(10, 'uploads/promo/37.jpg', '2025-01-28 17:18:53'),
(11, 'uploads/promo/35.jpg', '2025-01-28 17:19:01'),
(12, 'uploads/promo/32.jpg', '2025-01-28 17:19:13'),
(16, 'uploads/promo/29.jpg', '2025-01-28 17:20:27'),
(19, 'uploads/promo/2.jpg', '2025-01-28 17:21:16'),
(25, 'uploads/promo/8.jpg', '2025-01-28 17:22:46'),
(39, 'uploads/promo/4.jpg', '2025-01-28 17:46:13'),
(40, 'uploads/promo/16.jpg', '2025-01-28 17:47:39'),
(41, 'uploads/promo/12.jpg', '2025-01-28 17:47:52'),
(45, 'uploads/promo/2.jpg', '2025-01-31 15:33:22'),
(46, 'uploads/promo/6.jpg', '2025-01-31 15:33:42'),
(47, 'uploads/promo/9.jpg', '2025-01-31 15:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  `img` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `role`, `img`, `created_at`) VALUES
(7, 'Saran', 'PHP Developer', 'uploads/team/saran.jpg', '2025-01-31 15:55:07'),
(8, 'Daisy Flora', 'Python Developer', 'uploads/team/daisy.jpg', '2025-01-31 15:55:35'),
(9, 'Revathi', 'Web Developer, Manager', 'uploads/team/revathi.jpg', '2025-01-31 15:56:02'),
(10, 'keerthana', 'Java developer', 'uploads/team/keerthana.jpg', '2025-02-04 16:50:28');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `frame` varchar(255) NOT NULL,
  `dec` longtext NOT NULL,
  `created_at` date NOT NULL,
  `category` varchar(100) NOT NULL,
  `points` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `title`, `frame`, `dec`, `created_at`, `category`, `points`) VALUES
(9, 'Java Full Stack Development', 'uploads/training/java-pro.jpg', 'A \"Java Full Stack Developer\" is a programmer proficient in both front-end and back-end web development, primarily using the Java programming language to build complete web applications, encompassing everything from user interface design (front-end) to server-side logic and database interaction (back-end), essentially handling all aspects of a web application development process with Java as the core language. Java is a popular multiple platform, object-oriented programming language. Java can be used as a platform through Java virtual machines (JVMs), which can be installed on most computers and mobile devices.Java is fundamentally object-oriented, emphasizing concepts like classes, objects, inheritance, encapsulation, abstraction, and polymorphism. In Java, a class is a blueprint for creating objects (a particular data structure), including their states (attributes) and behaviours (methods).', '2025-02-04', 'Web Development', 'Html5,Css3,Javascript,Core java,Spring Boot,Servlets,JSP, MySQL,PostgreSQL,MongoDB'),
(10, 'Python Full Stack Developement', 'uploads/training/python-pro.jpg', 'A Python Full Stack Developer is expected to handle both client-side and server-side development tasks. This role involves working with various technologies to create cohesive web applications. On the front end, developers use HTML, CSS, and JavaScript, often with frameworks like React or Angular.Python is general-purpose, high-level, interpreted, interactive, object-oriented, and open-source. It is suitable primarily for software development. Without any complex prerequisites, the Python course syllabus demands students to be patient, attentive, and have basic programming knowledge.', '2025-02-04', 'Web Development', 'Html5,Css3,Javascript,Python, Django, Flask, React, and Angular ,SQl,NoSQL MySQL,PostgreSQL,MongoDB'),
(11, 'PHP Full Stack Development', 'uploads/training/php-pro.jpg', 'A full stack developer is skilled in managing the complete development process, from designing user interfaces to handling server-side operations and database management. Full Stack Development with PHP means using PHP for server-side tasks. PHP is an open-source language known for being simple and efficient.PHP (Hypertext Processor) is a general-purpose scripting language and interpreter that is freely available and widely used for web development. The language is used primarily for server-side scripting, although it can also be used for command-line scripting and, to a limited degree, desktop applications.', '2025-02-04', 'Web Development', 'Html5,Css3,Javascript,Core php,MySQL,SQl,Laravel'),
(12, 'Mern Stack Developement', 'uploads/training/mern-pro.jpg', 'The MERN stack is a collection of technologies that help developers build robust and scalable web applications using JavaScript. The acronym “MERN” stands for MongoDB, Express, React, and Node. js, with each component playing a role in the development process.The MERN stack is a collection of technologies that comprise a full-stack capable of building applications with JavaScript. Because JavaScript is a front-end programming language, developers need additional tools in order to ensure functionality on the back end. MongoDB, Express, React, and Node.', '2025-02-04', 'Web Development', 'Html5,Css3,Javascript,MongoDB, Express.js, React, and Node.js'),
(13, 'Mean Stack Development', 'uploads/training/mean-pro.jpg', 'A \"MEAN full stack developer\" refers to a programmer skilled in building web applications using the \"MEAN stack,\" which consists of MongoDB (database), Express.js (backend framework), Angular (frontend framework), and Node.js (runtime environment), allowing them to work on both the front-end (user interface) and back-end (server-side logic) of a web application. MEAN Stack refers to a collection of open-source technologies used to develop web applications. It is an acronym for MongoDB, Express. js, AngularJS, and Node. js. MongoDB is a NoSQL database that stores data in flexible, JSON-like documents', '2025-02-04', 'Web Development', 'Html5,Css3,Javascript,MongoDB, Express.js, Angularjs, and Node.js'),
(15, 'Data Analyst', 'uploads/training/data-pro.jpg', 'An Overview of the Data Analytics Tools | Swaminathan NagarajanData analyst tools are software applications used to process, analyze, and visualize large datasets, extracting meaningful insights to support decision-making; popular options include Microsoft Excel (for basic analysis), Tableau (powerful data visualization), Power BI (cloud-based business analytics), Python (with libraries like Pandas and Matplotlib for complex data manipulation), and Apache Spark (for large-scale data processing) - all allowing users to clean, transform, analyze data, and present findings through charts, graphs, and dashboards. ', '2025-02-04', 'Data Analyst', 'Excel,Statistics,Python,PowerBI,Tableau,RStudio,R,Project Jupyter,NoSQL,MySQL,Knime'),
(16, 'Web Design', 'uploads/training/web-pro.jpg', 'Web design identifies the goals of a website or webpage and promotes accessibility for all potential users. This process involves organizing content and images across a series of pages and integrating applications and other interactive elements.A web design course teaches individuals how to create visually appealing and functional websites by focusing on the layout, color schemes, typography, and graphics, utilizing coding languages like HTML and CSS to structure and style web pages, while often incorporating principles of user experience (UX) design to ensure a user-friendly navigation and interaction on different devices; essentially, it trains students to design and develop websites that are both aesthetically pleasing and accessible to users.\r\n\r\n', '2025-02-04', 'Web Design', 'Adobe photoshop,Adobe xd,Figma,Webflow');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headline`
--
ALTER TABLE `headline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `headline`
--
ALTER TABLE `headline`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
