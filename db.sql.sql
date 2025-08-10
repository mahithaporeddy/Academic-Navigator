-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2025 at 07:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devsprint`
--
CREATE DATABASE IF NOT EXISTS `devsprint` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `devsprint`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) DEFAULT NULL CHECK (`age` >= 0),
  `weight` float DEFAULT NULL CHECK (`weight` >= 0),
  `height` float DEFAULT NULL CHECK (`height` >= 0),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `age`, `weight`, `height`, `created_at`) VALUES
(1, 'varshi', 'yeshwanthreddy1729@gmail.com', '$2y$10$Vz9n5RDv0hM/6uvG2GtaWuhqwTwM5yblLs4GpdFkPBim9oIjKUOO.', 33, 55, 345, '2025-03-06 09:43:15'),
(2, '2', 'yeshwanthreddy729@gmail.com', '$2y$10$zUfViFCmLbNEIfIapm47duP0xR8Q2IktyfIBDahtSikwbAy5r1J/a', 2, 22, 4, '2025-03-06 10:05:54'),
(3, '3', 'varshi@gmail.com', '$2y$10$pq3IasMyqGZyoLiUkvFU3OYlT8flE0H8txMBttB.WjhDE5uY89.C.', 33, 55, 66, '2025-03-06 10:15:50'),
(4, '3', 'yeshwanthreddy@gmail.com', '$2y$10$1dgLF2pJvb4RUjiG4peZC..A2o1WYeaUVP.npTE2INZ3JLGZFbZ/y', 33, 333, 333, '2025-03-06 10:23:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Database: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login`;

-- --------------------------------------------------------

--
-- Table structure for table `allied health sciences`
--

CREATE TABLE `allied health sciences` (
  `Group1` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allied health sciences`
--

INSERT INTO `allied health sciences` (`Group1`) VALUES
('B.Pharma'),
('BSc.Nursing'),
('BOT-Occupational Therapy'),
('BSc.Anesthesia Tec'),
('BSc.Cardiac Tec'),
('BSc.Medical Lab Tec'),
('BSc.Radio Therapy Tec'),
('BSc.Clinical Optometry'),
('BSc.Nuclear Medicine'),
('BSc.Operation Theatre'),
('BSc.Physician Assistant'),
('BSc.Respiratoty Care'),
('BMLT - Medical Lab Technology');

-- --------------------------------------------------------

--
-- Table structure for table `allied_health_sciences`
--

CREATE TABLE `allied_health_sciences` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `allied_health_sciences`
--

INSERT INTO `allied_health_sciences` (`Group1`, `desc1`, `image_url`) VALUES
('B.Pharma', 'Bachelor of Pharmacy is a four-year program focusing on pharmaceutical sciences, drug development, and pharmacy practice. Eligibility requires completion of 12th grade with Science subjects (PCB or PCM)', 'https://www.chitkara.edu.in/blogs/wp-content/uploads/2023/01/What-are-the-Benefits-of-B-768x448.jpg'),
('BOT-Occupational therapy', ' Bachelor of Occupational Therapy is a four and a half-year program (including internship) training students to assist patients with disabilities in regaining daily life skills. Eligibility requires completion of 12th grade with Science subjects, preferably Biology', 'https://campus-live.s3.us-east-2.amazonaws.com/course/bachelor-of-occupational-therapy-bot-102'),
('BSc.Cardiac Tec', ' Bachelor of Science in Cardiac  is a three-year program focusing on diagnosing and treating heart conditions using advanced technology.Eligibility requires completion of 12th grade with Science subjects, preferably PCB', 'https://www.minecampus.com/wp-content/uploads/2020/03/cardiac-technology.jpg'),
('BSc.Nursing', 'Bachelor of Science in Nursing is a four-year program preparing students for careers in patient care and medical procedures in hospitals and clinics. Eligibility requires completion of 12th grade with Science subjects, preferably PCB', 'https://s3.amazonaws.com/utep-uploads/wp-content/uploads/online-regis-college/2019/10/24042912/Nurses-work-to-incorporate-technological-advancements.jpg'),
('BSc.Anesthesia Tec', 'Bachelor of Science in Anesthesia Technology is a three-year program preparing students to assist anesthesiologists during surgeries.Eligibility requires completion of 12th grade with Science subjects, preferably PCB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhqoE-HF5kKkUViyx8CNt4Xf-vp7MHEntFjw&usqp=CAU'),
('BSc.Medical Lab Tec', 'Bachelor of Science in Medical Laboratory Technology is a three-year program focusing on laboratory diagnostics and analysis of medical samples. Eligibility requires completion of 12th grade with Science subjects, preferably PCB', 'https://images.squarespace-cdn.com/content/v1/51b6529ce4b0c042edeedf2d/1516303348602-4Y7SP8WN2WA299I899OZ/image-asset.jpeg?format=750w'),
('BSc.Radio Therapy Tec', 'Bachelor of Science in Radiotherapy Technology is a three-year program focusing on using radiation for cancer treatment.  Eligibility requires completion of 12th grade with Science subjects, preferably PCB', 'https://www.manipal.edu/content/dam/manipal/mu/images/galleryImage/1-mu-facilities.jpg'),
('BSc.Clinical Optometry', 'Bachelor of Science in Clinical Optometry is a four-year program focusing on vision care and prescribing corrective lenses. Eligibility requires completion of 12th grade with Science subjects, preferably PCB', 'https://images.ctfassets.net/u4vv676b8z52/7GTqnZZk9Oy5bcTBsvI3XF/db96aaf9fafa63167de0bc992cc57bde/optometry-678x446.gif?fm=jpg&q=80'),
('BSc.Nuclear Medicine', 'Bachelor of Science in Nuclear Medicine Technology is a three-year program focusing on diagnostic imaging with radioactive substances.Eligibility requires completion of 12th grade with Science subjects, preferably PCB.', 'https://after12thwhat.com/wp-content/uploads/2015/12/Nuclear-Medicine.jpg'),
('BSc.Operation Theatre', 'Bachelor of Science in Operation Theatre Technology is a three-year program focusing on assisting surgical procedures. Eligibility requires completion of 12th grade with Science subjects, preferably PCB.', 'https://www.paramedicaladmission.com/wp-content/uploads/2020/01/B.Sc_.-Operation-Theater-Technology.jpg'),
('BSc/Physician assistant', ' Bachelor of Science in Physician is a four-year program training students to work as healthcare providers under supervision.  Eligibility requires completion of 12th grade with Science subjects, preferably PCB.', 'https://hihshaldia.in/public/website/images/course/11561193.png'),
('BSc.Respiratory', 'Bachelor of Science in Respiratory Therapy is a four-year program focusing on treating respiratory and cardiopulmonary disorders. Eligibility requires completion of 12th grade with Science subjects, preferably PCB.', 'https://dolphinlifesciences.com/wp-content/uploads/2021/07/Bsc-Respiratory-Care-Technology-Colleges-in-Punjab.jpg'),
('BMLT.Medical Lab Technology', 'Bachelor of Medical Laboratory Technology is a three-year program focusing on laboratory testing and diagnosis. Eligibility requires completion of 12th grade with Science subjects, preferably PCB.', 'https://hihshaldia.in/public/website/images/course/585838441.png');

-- --------------------------------------------------------

--
-- Table structure for table `degree_ba`
--

CREATE TABLE `degree_ba` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `degree_ba`
--

INSERT INTO `degree_ba` (`Group1`, `desc1`, `image_url`) VALUES
('BA-HEP', ' Bachelor of Arts in History, Economics, and Political Science is a three-year undergraduate program that integrates the study of History, Economics, and Political Science.  Eligibility: Completion of 12th grade', 'https://downloads.mlacw.edu.in/filer_public/82/59/82590e1c-b4ee-4710-bc88-9eee5b2ecb9f/2020-03-06t23_11_01_900_unnamed_2.jpg'),
('BA-HTP', 'Bachelor of Arts in History, Tourism, and Political Science  is a three-year program combining the study of History, Tourism, and Political Science. It focuses on historical knowledge, the tourism industry, and political systems. Eligibility: Completion of 12th grade', 'https://cdn0.scrvt.com/a534b4b72e47031e7c1755abc55cf709/29294ab4823b8b27/3b2d31b94768/v/1eb3c12f932e/ba-geschichte-header.JPG'),
('BA-Linguistics', 'Bachelor of Arts in Linguistics is a three-year program focusing on the scientific study of language, including its structure, meaning, and context. Eligibility: Completion of 12th grade', 'https://york.citycollege.eu/files4users/images/top-English-Literature.jpg'),
('BA-Economics', 'Bachelor of Arts in Economics is a three-year program covering various economic theories, principles, and their real-world applications. Eligibility: Completion of 12th grade', 'https://ncasp.in/assets/uploads/media-uploader/ba-economics1685876170.jpg'),
('BA-Psychology', 'Bachelor of Arts in Psychology is a three-year program studying human behavior, mental processes, and their impact on individuals and society. Eligibility: Completion of 12th grade', 'https://blogassets.leverageedu.com/blog/wp-content/uploads/2020/03/05192141/BA-Psychology-1160x725.png'),
('BA-Fin Arts', 'Bachelor of Arts in Fine Arts is a three-year program focusing on the study and creation of visual and performing arts. Eligibility: Completion of 12th grade', 'https://www.chitkara.edu.in/design/wp-content/uploads/2021/09/Career-Paths-fa.jpg'),
('BA-Political Science', 'Bachelor of Arts in Political Science is a three-year program exploring government systems, political behavior, and institutional design. Eligibility: Completion of 12th grade', 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjNoPv3W-wziV_71prJxxT254Y11KhT2FdVDNAabIfhZcUsUaAt0NhZbZBOhnufs9vZjV2DunRiiV-rf3aNSXZ_HVQTcZ9W9fQtovgIAjMIGzH_fA8XZzv46UjWutRHaRaEtzR3746pF5FW/s320/india_flag_emblem.jpg'),
('BA-Sociology', ' Bachelor of Arts in Sociology is a three-year program studying society, social behavior, and social institutions. Eligibility: Completion of 12th grade', 'https://jgu.edu.in/blog/wp-content/uploads/2024/06/paper-style-earth-globe-with-silhouettes_23-2149377729.jpg'),
('BA-Library Science', 'Bachelor of Arts in Library Science is a three-year program focusing on the management and organization of library resources and information services. Eligibility: Completion of 12th grade', 'https://www.mcmacademy.in/wp-content/uploads/2019/08/blib.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `degree_bcom`
--

CREATE TABLE `degree_bcom` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `degree_bcom`
--

INSERT INTO `degree_bcom` (`Group1`, `desc1`, `image_url`) VALUES
('B.Com Regular', 'Bachelor of Commerce is a 3-year full time degree program. The Bachelor degree is affiliated to University of Mumbai. A number of subjects can be studied under disciplines of Commerce in conjugation like; accountancy, economics, mathematics, business, finance etc.', 'https://www.acs.ac.in/wp-content/uploads/2019/04/bconm.jpg'),
('B.Com Computers', 'BCom Computers is an undergraduate course with a duration ranging from 3-4 years depending upon the university you join. The stress is laid on application, software and hardware technology of computers. It also includes closely working on computer languages, web designing, financial accounting, etc.', 'https://blogassets.leverageedu.com/blog/wp-content/uploads/2020/06/10211830/B-Com-Computers-Subjects.png'),
('B.Com Bank Management', 'BCom Banking and Management is a 3 year graduation degree, where candidates explore banking management subjects including Economic Theory, Accounting, Management, Banking System, etc. Check out the semester and year wise BCom Banking management syllabus in the sections below.', 'https://miro.medium.com/v2/resize:fit:1100/format:webp/0*YXFAfmpEd318MN8j.jpg'),
('B.Com Tax Process', 'B.Com (Taxation) is an undergraduate academic as well as a professional degree which is awarded after successful completion of a three years program or course that generally covers the study of principles of accounting, financial planning and economic theory along with a specialized focus on taxation which is termed As ...', 'https://s3.collegedisha.com/collegedisha/courses/image/B.Com_Taxation_Course.webp?tr=w-660,h-286');

-- --------------------------------------------------------

--
-- Table structure for table `degree_bsc`
--

CREATE TABLE `degree_bsc` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `degree_bsc`
--

INSERT INTO `degree_bsc` (`Group1`, `desc1`, `image_url`) VALUES
('BSc- MPC', 'B.Sc. M.P.C (Mathematics, Physics, Chemistry) is a general course with a considerable amount of specialization in the final year. It is a good choice among the aspirants who wish to pursue a career in physical and chemical sciences. The course duration is usually for three years.', 'https://semsaver.com/wp-content/uploads/2024/06/illustration-of-diverse-students-clutching-textbooks-denoting-physics-chemistry-mathematics-posit-e1718462691602.jpeg'),
('BSc- MEC', 'B.Sc with Mathematics, Electronics & Computer Science is a three-year undergraduate course aimed to carving students with knowledge of hardware & software', 'https://blogassets.leverageedu.com/blog/wp-content/uploads/2019/12/20175936/BSc-Mathematics.png'),
('BSc-Appli.Math ', 'BSc Applied Mathematics delves more into the application of mathematics in various fields including engineering, mechanics, statistics, business, data management, IT, etc. It is more about the practical use of math', 'https://umanitoba.ca/explore/sites/explore/files/styles/21x9_1920w/public/2022-04/adobestock_129836680.jpeg?itok=p83l7qVb'),
('BSc- BZC/CBZ', 'This course helps to develop observational, analytical, problem-solving, logical and research skills and is beneficial to students who wish to pursue multi and interdisciplinary science careers in the future', 'https://collegevidya.com/_next/image/?url=https%3A%2F%2Fcollegevidya.com%2Fblog%2Fwp-content%2Fuploads%2F2021%2F09%2Fdistance-bsc-biology-zoology-chemistry-1.jpg&w=1920&q=100'),
('BSc-CPZ ', 'This course helps to develop observational, analytical, problem-solving, logical and research skills and is beneficial to students who wish to pursue multi and interdisciplinary science careers in the future', 'https://images.careerindia.com/webp/img/2018/07/careerincbz-1530939983.jpg'),
('BSc- Horticulture', 'B.Sc. Horticulture is an undergraduate agriculture science technology programme. Horticulture is the science of plant cultivation including the process of preparing soil for planting of seeds, tubers or cutters.', 'https://institute.careerguide.com/wp-content/uploads/2023/04/COLLEGES-6-3-1536x864.jpg'),
('BSc- Computer Science ', 'BSc Computer Science is a three-year undergraduate course program that lays emphasis on computer networking, operating systems, and programming languages', 'https://images.shiksha.com/mediadata/images/articles/1637583853phpFWTfw5.jpeg'),
('BSc- Home science ', 'B.Sc. Home Science is a 3 year graduation course that emphasizes scientific studying of topics like nutrients, dietetics, human development, home economics, textile and fashion designing, extension training that help to maintain living standards of a family.', 'https://blogassets.leverageedu.com/blog/wp-content/uploads/2020/05/16182217/BSc-Home-Science-1160x725.png'),
('BSc- Bio Chemistry ', 'BSc Biochemistry is a 3-year undergraduate course in chemical and physio-chemical processes. It is a branch of science that deals with chemistry applied to the study of living organisms and the atoms and molecules which comprise living organisms', 'https://blogassets.leverageedu.com/blog/wp-content/uploads/2020/07/24203754/BSC-Biochemistry-1160x725.jpg'),
('BSc- Micro bio', 'BSc Microbiology is an undergraduate course that studies microorganisms, including bacteria, viruses, fungi, and parasites. Microbiology is a branch of biology that focuses on identifying, classifying, and studying microorganisms and their effect on human health and the environment', 'https://www.innocenthearts.in/wp-content/uploads/2021/06/B.Sc-Hons-Microbiology.jpg'),
('BSc- Bio Tec', 'A Bachelor of Science (BSc) in Biotechnology is a four-year undergraduate degree program that combines principles of biology, chemistry, genetics, and engineering to study and manipulate living organisms and biological systems for various applications.', 'https://www.atriauniversity.edu.in/wp-content/uploads/2023/02/img1.png'),
('BSc- AnthroP ', 'B.Sc. Anthropology is a 3- year long Bachelors program that covers topics related to the similarities and differences in the behavior of human beings. It covers different features associated with human beings, such as culture, organizational and biological aspects', 'https://findyourbooks.in/wp-content/uploads/2020/12/BSCANH.jpg'),
('BSc- Dairy Sci', 'This graduate program is a combination of science and agriculture. It focuses on animal health and the science of milk production. The course also covers animal husbandry and dairy products, and maintenance and research at a dairy plant', 'https://ignougyan.com/wp-content/uploads/2020/09/Dairy-Technology.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `degree_llb`
--

CREATE TABLE `degree_llb` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `degree_llb`
--

INSERT INTO `degree_llb` (`Group1`, `desc1`, `image_url`) VALUES
('BBA', 'BBA choose to go into management or start their own businesses. However, many others may use the degree as a starting point for a career in a field like marketing, accounting, finance, real estate, or even education', ''),
('BCA', 'Bachelor in Computer Application, or BCA, is a three-year undergraduate program. With an emphasis on fields associated with computer applications and technology, this course equips the student with a variety of career prospects.', ''),
('BBM', 'Bachelor of Business Management, popularly known as BBM, is a 3 years undergraduate course offered by many colleges and universities in India. The BBM curriculum includes the study of theoretical and practical aspects of business through courses like finance principles and introduction to business.', ''),
('BAF', 'BAF full form:BAF, or Bachelor of Accountancy and Finance, is a three-year undergraduate programme that focuses on specialised knowledge of accounting and finance, as well as taxation, auditing, financial management, risk management, managerial economics, and so on.', ''),
('BFM', 'Bachelor of Financial Markets (B.F.M) is an academic program designed to provide students with a comprehensive understanding of the complex world of financial markets. This degree equips individuals with the knowledge and skills necessary to navigate the dynamic landscape of global finance', ''),
('BMS', 'A B.M.S graduate can start his career as a Management trainee in the field of Finance, Marketing, Human Resource, Operations, Banking, Retail and so on.The duration of the course shall be six semesters spread over three years.', '');

-- --------------------------------------------------------

--
-- Table structure for table `degree_prof`
--

CREATE TABLE `degree_prof` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `degree_prof`
--

INSERT INTO `degree_prof` (`Group1`, `desc1`, `image_url`) VALUES
('ICWA', 'The Institute of Cost Accountants of India (ICAI) formerly known as ICWAI (Institute of Cost & Works Accountants of India) is a premier institution of India which offers education and develops the profession of Cost Accountancy in the country.There are plenty of employment opportunities are available for the ICWA qualified people. Once you have completed the ICWA course, you can start up your career as a Cost Accountant”.\r\nICWA degree holders are highly demanded in the government sector, private enterprises, development agencies, banking & finance sector, education and training sectors. With the advancement of the economy, demands for cost and management professionals are rising rapidly.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQRk8ag7hRf3CWavLXKjTW3Ef6FOU3Ww1Y5HA&usqp=CAU'),
('CS', 'The CS course is a professional qualification in corporate governance, offered primarily in India by the Institute of Company Secretaries of India (ICSI). The CS course prepares individuals to perform the role of a company secretary, which involves ensuring that the company complies with legal and regulatory requirements and implementing decisions of the board of directors.To be eligible for the CS course, a candidate needs to pass Class 12 as a minimum qualification. Generally, there are three stages in becoming a CS, i.e. - Foundation Level (replaced by CSEET), Executive Level and Professional Level.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS84GKI7TlyuBJwMTXtkSH7pyrZ_WyKSSSSnS9NE0EukH4E_N7ZQLL1j3ie&s=10'),
('CA', 'Chartered Accountants is the most preferable course after Class 12th. Most commerce students do the CA Course after they pass their Class 12th exam.  A chartered accountant (CA) is a financial professional who has advanced accounting qualifications and works in a variety of sectors to provide services to individuals and businesses.To become a Chartered Accountant in India, you must pursue the CA course. The major job profiles of a CA are Accountant, Financial Analyst, Auditor, Senior Executive, etc', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZMz4WQ7nKNt1cjWpUV7557FlaK7R-fTmM9g&usqp=CAU');

-- --------------------------------------------------------

--
-- Table structure for table `dual_degree`
--

CREATE TABLE `dual_degree` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dual_degree`
--

INSERT INTO `dual_degree` (`Group1`, `desc1`, `image_url`) VALUES
('BA+B.ed', 'The Integrated BA B Ed course combines a Bachelor of Education (B Ed) degree with a Bachelor of Arts (BA) degree. The course is designed to provide students with training in a chosen academic discipline, such as English, History, Political Science, Psychology, Sociology etc. in the field of education. The students must have completed 10+2 or its equivalent from a recognized board or institution.\r\nA minimum of 50% is required in 10+2.\r\nStudents from any stream can apply.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9sZ5VMDEXzW2j-wbKy295DrekFA-qUApvfQ&usqp=CAU'),
('BSc+Bed', 'A BSc BEd integrated degree is a great choice for candidates interested in teaching technical and applied science courses. Students can enrol in this course right after completing their10+2 in the science stream. Those who have Physics, Chemistry, and Mathematics/ Biology as mandatory subjects in class 12th can pursue BSc BEd but those who have studied commerce or humanities are not eligible for this course. A BSc BEd is a dual degree that combines a Bachelor of Science (BSc) and a Bachelor of Education (BEd). Its a four-year degree that prepares students to become certified teachers for primary, secondary, or high school.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV9NMd6UgUKkOJePfLdo3SBW0945ZlfaFl2XESM4x998K1qQ2EWt1cTwg&s=10'),
('BA+LLB', 'BA LLB full form is Bachelor of Arts and Bachelor of Legislative Law is a five-year integrated LLB course that candidates can pursue after completing Class 12. BA LLB is an undergraduate law program in India that combines traditional academic learning in Arts or Social Sciences with a professional legal education. This allows students to develop a strong foundation in law alongside a broader academic background which allows candidates to study subjects such as History, Sociology, Administrative Law, Criminology, Family Law, and so on.To be eligible, one must have passed Class 12 with a minimum of 50-55 percent marks and cleared entrance exams like CLAT, LSAT, or AILET.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbomZoPraCf8ISahskNdITfaX42LMKBj9goQ&usqp=CAU'),
('B.Com+LLB', 'BCom LLB course is a comprehensive five-year integrated undergraduate program merging Commerce (BCom) and Law (LLB) studies, catering to individuals seeking expertise in both business and legal domains. BCom LLB course duration is five years, structured into semesters, covering a range of subjects including business law, corporate law, accounting, economics, taxation, legal writing, and jurisprudence. This combined degree equips students for diverse career paths, including corporate law, tax law, banking, and consultancy. \r\n', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbomZoPraCf8ISahskNdITfaX42LMKBj9goQ&usqp=CAU'),
('BBM+LLB', 'BBM-LLB or Bachelor of Business Management and Bachelor of Legislative Law the objective  is to practice law in law courts and quasi judicial tribunals, with knowledge', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPo7-8ZIbh9ynM6-xzy1ZRT6BY314wtJg4zA&usqp=CAU'),
('BBA+LLB', '\r\nThe BBA LLB full form is Bachelor of Business Administration and Bachelor of Legislative Law (BBA LLB). As part of the BBA LLB course, aspirants are first taught Commerce subjects such as Principles of Management, Financial Accounting, Computer Applications, Effective Communication, etc. Thereafter, aspirants are taught law subjects such as Law of Torts, Family Law, Constitutional Law, Contract Law, Intellectual Property Law, Company Law, Administrative Law, Civil Law, Criminal Law, and the like.\r\n', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPo7-8ZIbh9ynM6-xzy1ZRT6BY314wtJg4zA&usqp=CAU');

-- --------------------------------------------------------

--
-- Table structure for table `engineering`
--

CREATE TABLE `engineering` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `engineering`
--

INSERT INTO `engineering` (`Group1`, `desc1`, `image_url`) VALUES
('CSE', ' Bachelor of Technology in Computer Science and Engineering is a four-year program focusing on computer programming, software development, and systema design.  Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://assets.thehansindia.com/h-upload/2021/12/26/1137948-cse.jpg'),
('IT', 'Bachelor of Technology in Information Technology is a four-year program covering the design, development, and management of information systems. Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://www.wemakescholars.com/uploads/blog/TopprofessionalITcoursetopursueincollege.jpg'),
('ECE', 'Bachelor of Technology in Electronics and Communication Engineering is a four-year program focusing on electronic devices, circuits, communication equipment, and systems.  Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://www.autmdu.in/DEPARTMENTS/ECE/assests/Electronics-and-Communication-Engineering-ECE.jpg'),
('EEE\r\n', '', ''),
('Civil Engineering', 'Bachelor of Technology in Civil Engineering is a four-year program focusing on the design, construction, and maintenance of infrastructure. Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://www.mahindrauniversity.edu.in/wp-content/uploads/2023/04/Mahindra-University-One-of-the-Top-Civil-Engineering-Colleges-in-Hyderabad-800x323.jpg'),
('Mechanical Engineering', ' Bachelor of Technology in Mechanical Engineering is a four-year program covering the design, analysis, and manufacturing of mechanical systems. Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://www.discoverengineering.org/wp-content/uploads/2023/12/mj_11235_4.jpg'),
('Chemical Engineering', 'Bachelor of Technology in Chemical Engineering is a four-year program focusing on chemical processes and the production of materials.  Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://nottingham.scene7.com/is/image/nottingham/UoN-31352?wid=767&fmt=jpg&qlt=100,0&resMode=sharp2&op_usm=1.75,0.3,2,0'),
('Aeronautical', ' Bachelor of Technology in Aeronautical Engineering is a four-year program focusing on the design, development, and maintenance of aircraft.  Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://blogassets.leverageedu.com/blog/wp-content/uploads/2019/12/26185633/Aeronautical-Engineering.jpg'),
('Aerospace', 'Bachelor of Technology in Aerospace is a four-year program covering the design and development of aircraft and spacecraft. Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://api.hindustanuniv.ac.in/uploads/M_2_d85f12d3ae.jpg'),
('Agriculture Engineering', 'Bachelor of Technology in Agricultural Engineering is a four-year program focusing on the application of engineering principles to agriculture.Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://bestiu.edu.in/uploads/51ba570fe68fc088e0a942bdf8700cdce7eb8b1d/1709028968Agricultural-Engineering.webp'),
('Automobile Engineering', 'Bachelor of Technology in Automobile Engineering is a four-year program covering the design, development, and manufacturing of vehicles.Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://miro.medium.com/v2/resize:fit:700/1*cy53Ma8UfmJvsv2npqPosw.jpeg'),
('Bio-Medical Engineering', ' Bachelor of Technology in Biomedical Engineering is a four-year program focusing on the application of engineering principles to healthcare and medical devices.  Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://alltogether.swe.org/wp-content/uploads/2021/11/GettyImages-1256323645-750x394.png'),
('Bio-Tecnology Engineering', 'Bachelor of Technology in Biotechnology Engineering is a four-year program covering the use of biological systems and organisms in technology.  Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://www.kgi.edu//wp-content/uploads/media/Unorganized/meng-students-in-lab_700x550.jpg'),
('Ceramic Engineering', 'Bachelor of Technology in Ceramic Engineering is a four-year program focusing on the properties and applications of ceramic materials. Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://blogassets.leverageedu.com/blog/wp-content/uploads/2020/03/17140055/Ceramic-Engineering.jpg'),
('Industrial Engineering', 'Bachelor of Technology in Industrial Engineering is a four-year program covering the optimization of complex processes and systems. Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://blogassets.leverageedu.com/blog/wp-content/uploads/2019/12/20190128/Industrial-Engineering.jpg'),
('Environmental Engineering', ' Bachelor of Technology in Environmental Engineering is a four-year program focusing on the development of solutions to environmental challenges.\r\n Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://d8zm9ei35njj5.cloudfront.net/wp-content/uploads/2020/03/Environmental-Engineering.jpg'),
('Marine Engineering', ' Bachelor of Technology in Marine Engineering is a four-year program covering the design, construction, and maintenance of ships and marine structures. Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://i0.wp.com/mechstuff.com/wp-content/uploads/2019/03/stock-vector-ship-silhouette-made-of-mechanical-parts-and-nautical-equipment-with-propeller-and-anchor-chain-385604851.jpg?resize=768%2C486&ssl=1'),
('Mining Engineering', 'Bachelor of Technology in Mining Engineering is a four-year program focusing on the extraction of minerals from the earth. Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://img.jagranjosh.com/imported/images/E/Articles/Mining-Engineering-250x250.jpg'),
('Silk & Textile Engineering', 'Bachelor of Technology in Silk and Textile Engineering is a four-year program covering the production and processing of textiles and silk. Eligibility: Completion of 12th grade with Science subjects (PCM)', 'https://after12thwhat.com/wp-content/uploads/2016/03/Career-in-Textile-Engineering.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `entrance`
--

CREATE TABLE `entrance` (
  `Group1` varchar(100) NOT NULL,
  `entrance exam` varchar(1000) NOT NULL,
  `eligibility` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entrance`
--

INSERT INTO `entrance` (`Group1`, `entrance exam`, `eligibility`) VALUES
('intermediate', 'TSRJC', '10th Pass'),
('polytechnic', 'TS PolyCET', 'Candidates must have passed the SSC exam given by the Andhra Pradesh/Telangana State Board of Secondary Education, or another exam that the Board of Secondary Education, AP/TS, deems equivalent. '),
('iti', '-', 'candidates must have passed the class 8th or 10th exam from any recognised state board.'),
('paramedical', '-', 'one must complete 10+2 or an equivalent level in the Science stream with Physics, Chemistry and Biology, and Mathematics with a minimum of 50 - 55%.'),
('others', '-', 'Any qualification');

-- --------------------------------------------------------

--
-- Table structure for table `entrance1`
--

CREATE TABLE `entrance1` (
  `Group1` varchar(1000) NOT NULL,
  `entrance exam` varchar(1000) NOT NULL,
  `eligibility` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `entrance1`
--

INSERT INTO `entrance1` (`Group1`, `entrance exam`, `eligibility`) VALUES
('engineering', 'Eamcet,IIT,AIEEE,BITSAT,NEET,JEE main,Jee Advance,Indian Navy,NDA exam,NIFT,CLAT,NATA,AFMC,IIST,ECET,Other university exam,Competative exams', 'After passing Intermediate'),
('medical', 'NEET, AIIMS, JIPMER, AFMC, PGIMER, CMC VELLORE, BVP CET, MU OET, and KIITEE.\r\n', 'You will need to complete your 10+2 education with Physics, Chemistry, and Biology as your core subjects and score a minimum of either 50% if you are under the General category, or 40% if you are under the Reserved category,  in your Class 12 final exams.'),
('paramedical', 'NEET PG,CUET,NEET,INI CET', 'Pass Class 12 in the Science stream with Physics, Chemistry, and Mathematics as compulsory subjects.'),
('allied health sciences', 'About GAHET (formerly AIPMCET) Global Allied Healthcare Entrance Test (GAHET 2024) is India is first national-level examination for allied health students \r\n', 'The candidates should have cleared the 10th/12th examinations with at least 50% marks and should have passed out from the recognized institution or board.'),
('teaching', 'D.Ed entrance, UDPED entrance', 'Eligibility for DEd courses requires one to complete 10+2 from a recognized board with an aggregate of 50% or more'),
('degree', 'TGUGCET', 'Candidates who have passed 10+2 or equivalent examinations with 40% aggregate marks'),
('nda', 'Union Public Service Commission (UPSC),NDA 1,NDA 2,INET ', 'Passed Class 12/HSC with Physics, Chemistry and Mathematics,For INET eligibility areCandidates should be between 19 and 24 years of age at the time of joining.Candidates must have completed their graduation in any discipline from a recognized university with at least 60% marks or should be in the final year of their graduation.'),
('ba', 'CUET, SET, IPU CET, NPAT', 'Candidates must have completed their 10+2 or equivalent examination from a recognized board or institution with at least 50%.Candidates should be 18 years and above.\r\n'),
('bsc', 'NPAT, CUET, SET, CUCET, TS EAMCET, KCET, BHU UET', 'BSc courses is also done based on merit scored in the class 12th board exam.'),
('bcom', 'CUET, NPAT, IPU CET', 'Applicants who have completed their Class 12 education with a Commerce background can apply for BCom admission 2024 at some of the country top colleges.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback` varchar(100) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback`, `rating`) VALUES
('kjb', 1),
('kjb', 1),
('hi', 5),
('', 0),
('', 0),
('', 1),
('good', 5),
('', 4),
('', 4),
('', 4),
('', 5);

-- --------------------------------------------------------

--
-- Table structure for table `intermediate`
--

CREATE TABLE `intermediate` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intermediate`
--

INSERT INTO `intermediate` (`Group1`, `desc1`, `image_url`) VALUES
('BIPC', 'Biology, Physics, Chemistry is a two-year pre-university program for students interested in pursuing careers in medical and biological sciences. It focuses on the foundational concepts of Biology, Physics, and Chemistry, preparing students for medical entrance exams and further studies in health sciences. Eligibility: Completion of 10th grade', 'https://gyanamjuniorcollege.gyanamacademy.in/wp-content/uploads/2023/05/Gyanam_Junior_College_BiPC.jpg'),
('MPC', 'Mathematics, Physics, Chemistry is a two-year pre-university program designed for students aiming for careers in engineering and physical sciences. It covers essential subjects like Mathematics, Physics, and Chemistry, providing a strong base for engineering entrance exams and higher studies in technology and physical sciences. Eligibility: Completion of 10th grade', 'https://mlingdfvzcxk.i.optimole.com/w:382/h:256/q:mauto/ig:avif/https://hidayahcollege.in/wp-content/uploads/2024/04/mpc-1-scaled.jpeg'),
('CEC', 'Commerce, Economics, Civics is a two-year pre-university program focusing on the social sciences and commerce. It includes subjects such as Commerce, Economics, and Civics, preparing students for careers in business, economics, and public administration. Eligibility: Completion of 10th grade', 'https://sriamogha.com/wp-content/uploads/2022/05/CEC-Full-Form-Sri-Amogha-Junior-College.png'),
('HEC', 'History, Economics, Civics is a two-year pre-university program that integrates the study of History, Economics, and Civics. It is aimed at students interested in social sciences and humanities, preparing them for careers in public service, economics, and historical research. Eligibility: Completion of 10th grade', 'https://ignitejuniorcollege.com/wp-content/uploads/2023/11/HEC.png'),
('MEC', 'MEC group is the core of the commerce stream and simply refers to Mathematics, Economics and Commerce subjects.The best part of selecting the MEC group after 10th is the wider career scope it has on offer for students, be it in Business and Management or in Computer Applications, IT, Finance, Accounting, Marketing, etc.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUenFvExRQJ-g3pE0MIZxHW5gSmoE5zW6Ong&s');

-- --------------------------------------------------------

--
-- Table structure for table `iti`
--

CREATE TABLE `iti` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iti`
--

INSERT INTO `iti` (`Group1`, `desc1`, `image_url`) VALUES
('Fitter', 'Fitter is a two-year vocational training program focusing on the assembly, installation, and maintenance of mechanical systems. Key areas include fitting, machining, and fabrication techniques. Eligibility: Completion of 10th grade', 'https://samparckaushalyavikaskendra.org/wp-content/uploads/2020/07/T6A0020-1.jpg'),
('Computer', 'Computer is a two-year vocational training program that covers the basics of computer hardware, software, and networking.  Eligibility: Completion of 10th grade', 'https://www.brainwareuniversity.ac.in/blog/wp-content/uploads/2022/03/Computer-science-engineering.jpg'),
('Civil(Draughtman)', 'Civil (Draughtsman) is a two-year vocational training program focusing on preparing technical drawings and plans for construction projects. Key areas include CAD software Eligibility: Completion of 10th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQE-Jl-YzzxKNER5oWSpe0Aqo4al3at8Oj4ZJ84gOo&s=0'),
('Mechanical Radio&TV', 'Mechanical Radio & TV is a two-year vocational training program that covers the repair and maintenance of radio and television equipment. Key areas include electronic circuits, signal processing. Eligibility: Completion of 10th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSdtcDpVSZ7x86biBeliloSXV_xDvaHscddHXu5CuW50_Uiqc4jwFUCuM&s=10'),
('Mechanical Motor Vehicle', 'Mechanical Motor Vehicle is a two-year vocational training program focusing on the repair and maintenance of motor vehicles. Key areas include engine systems, transmission. Eligibility: Completion of 10th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPRsD4bmiAROS8TDLE3sJJZNCgH6dnsJTG8Q&usqp=CAU'),
('Mechanical Diesel', 'Mechanical Diesel is a two-year vocational training program covering the maintenance and repair of diesel engines. Key areas include fuel systems, engine diagnostics, and powertrains. Eligibility: Completion of 10th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBjQx09qzGBNGzxGCs-q4tW3zLvi7BqP8q6fBBYSmUt-gavv80tQrlVOTG&s=10'),
('Mechanical Marine', 'Mechanical Marine is a two-year vocational training program focusing on the operation and maintenance of marine engines and systems. Eligibility: Completion of 10th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkp7T2ynqShdc2506b0rnQ3YeNM_654kuNhFeHzugUry5QLhpCvaojwREY&s=10'),
('Electrician', 'Electrician is a two-year vocational training program that covers electrical systems, wiring, and safety practices. Key areas include circuit design, installation, and maintenance of electrical equipment. Eligibility: Completion of 10th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSGbb3pXu7nDbJOhDRv7QfeaTl8pvEEVFu76GGkZcPM69DbbbmHAZ61ojG6&s=10'),
('Plumber', 'Plumber is a two-year vocational training program focusing on the installation and maintenance of plumbing systems. Key areas include piping, fixtures, and water supply systems. Eligibility: Completion of 10th grade', 'https://cursa-cat-img.s3.us-east-1.amazonaws.com/tags/en/plumbing.webp'),
('Surveyor', 'Surveyor is a two-year vocational training program that covers land surveying techniques and equipment.  Eligibility: Completion of 10th grade', 'https://driftlessareallc.com/wp-content/uploads/2020/10/Land-Surveying.jpg'),
('Electrical', 'Electrical is a two-year vocational training program focusing on electrical systems and electronics. Key areas include circuit theory, electrical machines, and power systems. Eligibility: Completion of 10th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl3WNPvI82gXvtE_ppHSbd46KF_eAVib-odQ&usqp=CAU'),
('Machine Tools', 'Machine Tools is a two-year vocational training program covering the operation and maintenance of machine tools used in manufacturing.  Eligibility: Completion of 10th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvlx-NFvrtUhs_Qgce6wsiOHOTbBJz1qdogQ&usqp=CAU'),
('Welder', 'Welder is a two-year vocational training program that focuses on welding techniques and safety practices. Eligibility: Completion of 10th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSvx8z1pPXroa3LPCQPrw123D3FSLkLBc1mg&usqp=CAU'),
('Firemen', 'Firemen is a two-year vocational training program covering firefighting techniques and emergency response. Eligibility: Completion of 10th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSibiZ0qazVzkeF9saW2ZXXkw7o_AElAnQhIw&usqp=CAU'),
('Cookery', 'Cookery is a two-year vocational training program focusing on culinary skills and kitchen management.  Eligibility: Completion of 10th grade', 'https://png.pngtree.com/png-vector/20230728/ourmid/pngtree-cooking-class-vector-png-image_7017649.png'),
('Paint Technology', 'Paint Technology is a two-year vocational training program covering the application and formulation of paints and coatings.  theory. Eligibility: Completion of 10th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR13xmprAhuPhilOpcsRXnU0Tqqu-YYV4RWQQ&usqp=CAU');

-- --------------------------------------------------------

--
-- Table structure for table `medicne`
--

CREATE TABLE `medicne` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicne`
--

INSERT INTO `medicne` (`Group1`, `desc1`, `image_url`) VALUES
('MBBS-Allopathic', 'Bachelor of Medicine, Bachelor of Surgery is a five and a half-year undergraduate program, including a one-year internship, focusing on modern medical practices. Eligibility: Completion of 12th grade with Science subjects PCB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSrcSjWBxHT4-95IerW5BnG304A5hqUwC6AnIc3TtLiHnVrouc0ASbA-Ws&s=10'),
('BUMS- Unani', 'Bachelor of Unani Medicine and Surgery is a five and a half-year undergraduate program, including a one-year internship, focusing on the Unani system of medicine.  Eligibility: Completion of 12th grade with Science subjects PCB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ8YqcafPNXvqSH6SXA0aexTAVDogoJ5VrDeYQZRR15Xi2b00mdPoW1SJjs&s=10'),
('BHMS- Homeopathy', 'Bachelor of Homeopathic Medicine surgery a five and a half-year undergraduate program, including a one-year internship, focusing on homeopathic principles and practices.  Eligibility: Completion of 12th grade with Science subjects PCB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRLTgRdv0bloEN9YMgrTkmrtFi3Oe6E1WMETw&usqp=CAU'),
('BAMS- Ayurveda', 'Bachelor of Ayurvedic Medicine and Surgery is a five and a half-year undergraduate program, including a one-year internship, focusing on Ayurvedic principles and treatments. Eligibility: Completion of 12th grade with Science subjects PCB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqet83hBT-p-sT0gPIrJN0bAmZvExL1jSSPO--2c-9OqE-fidYu3AH42s&s=10'),
('BNYS- Naturopathy', ' Bachelor of Naturopathy and Yogic Sciences is a five and a half-year undergraduate program, including a one-year internship, focusing on natural healing methods and yoga.  Eligibility: Completion of 12th grade with Science subjects PCB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl2uGbAW8005L6rVVU8jtkm9YLYasfOE9WGg&usqp=CAU'),
('AG.BSc- Agriculture', 'Bachelor of Science  is a four-year undergraduate program focusing on agricultural sciences and practices.  Eligibility: Completion of 12th grade with Science subjects (PCB/PCM/PCMB)', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSerIK1PaXVhAYvQDFoVQgO94bgYXW8VIM4vHcqTVH5Z3bAlRtE7Ihd38o&s=10'),
('BDS- Dental', ' Bachelor of Dental Surgery is a five-year undergraduate program, including a one-year internship, focusing on dental sciences and oral healthcare. Eligibility: Completion of 12th grade with Science subjects PCB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR34PZIadBDvY5zUSVODJWdW8u45IvacnbAUSDwTWD1MVrszkWdMX_evlAh&s=10'),
('BVSc- Veterinary', 'Bachelor of Veterinary is a five and a half-year undergraduate program, including a one-year internship, focusing on animal health and veterinary practices. Eligibility: Completion of 12th grade with Science subjects PCB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtEEYmMITmZAThYu4gwoNNirWr4oCPVymTMQ&s'),
('BPT- Physiotherapy', 'Bachelor of Physiotheraphy is a four and a half-year undergraduate program, including a six-month internship, focusing on physical therapy and rehabilitation.  Eligibility: Completion of 12th grade with Science subjects PCB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKd_l34IABb-fMYuJQjbN48yMWRUWRPGMklA&usqp=CAU');

-- --------------------------------------------------------

--
-- Table structure for table `nda`
--

CREATE TABLE `nda` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(10000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nda`
--

INSERT INTO `nda` (`Group1`, `desc1`, `image_url`) VALUES
('air force', 'The Air Force is a vital component of a nations defense and military strategy, providing capabilities that are essential for maintaining security and achieving strategic objectives. It operates a wide range of aircraft and employs highly trained personnel to fulfill its mission of defending airspace and supporting ground and naval forces.', 'https://image.khaleejtimes.com/?uuid=ff38b4c3-e0f9-5a1b-acb2-7d9d1369d33b&function=cropresize&type=preview&source=false&q=75&crop_w=0.99999&crop_h=0.9077&x=0&y=0&width=540&height=304'),
('army', 'The Army is a branch of the armed forces responsible for land-based military operations. It is typically the largest and most versatile branch, tasked with securing and defending the nations territory, conducting ground combat operations, and supporting other military branches. ', 'https://bsmedia.business-standard.com/_media/bs/img/article/2023-06/15/full/1686837465-1355.jpg?im=FitAndFill=(382,233)'),
('navy', 'The Navy is a branch of the armed forces responsible for conducting naval operations and defending a nation’s maritime interests. It operates on and under the sea, ensuring the security of territorial waters, protecting shipping lanes, and projecting power globally.', 'https://static.pib.gov.in/WriteReadData/userfiles/image/Pix(4)INDIANNAVYPARTICIPATESINBILATERALNAVALMARITIMEPARTNERSHIPEXERCISEWITHUAENAVYNGOH.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`Group1`, `desc1`, `image_url`) VALUES
('Beauty & Cosmetology', 'The Cosmetology courses cover various aspects of cosmetology, including hair styling, makeup application, skincare, nail care, and salon management. Thus, there are various branches in which a cosmetologist can specialize such as aromatherapy, nail art and tattoos, mehndi, hair styling, hair removal, skincare, cosmetics, and even herbal beauty care. The minimum Cosmetology course eligibility criteria is to pass Class 10 from a recognized board', 'https://www.edumilestones.com/career-library/images/cosmetology.png'),
('Jewelry Designing', 'Through a jewellery design course, at both undergraduate and postgraduate levels, students can execute their creative design inspirations into a materialistic and usable piece of jewellery.', 'https://insdandheri.com/images/jewellery-designing.jpg'),
('Fashion Designing', 'nitially, students are exposed to basic concepts of design, textiles, history of design, pattern, texture, sketching, and drawing, among other things. However, students of BSc Fashion Technology are taught about the application of science and technology in making garments. Fashion Designing course also deals with the management and marketing of fashion-related products. Students must note that entrance exams are conducted to take eligible students for the required course. AIEED, SEED, and NIFT entrance exams are a few exams for admission to fashion designing courses for both UG and PG levels', 'https://careernuts.com/wp-content/uploads/2022/03/career-in-fashion-designing-india-career-guidance-for-fashion-designing.jpg'),
('Photography', 'Photography is a fast-emerging and popular career choice for this generation. With the advancement in advertising, media and the fashion industry, photography has emerged as a lucrative and thrilling career option to many Indian youths. Previously the masses regarded photography as a hobby only, but now it has emerged as a big profession.Photography is both a science and an art. It is an artistic means of expression, while the camera, editing and composition are the technical aspects of the profession. Many colleges across India offer Photography courses like BFA in Photography, B.Sc. in Photography, MFA in Photography and M.Sc. in Photography.', 'https://www.brandignity.com/wp-content/uploads/2020/12/digital-marketing-photography-768x512.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `others_diploma`
--

CREATE TABLE `others_diploma` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `others_diploma`
--

INSERT INTO `others_diploma` (`Group1`, `desc1`, `image_url`) VALUES
('Foreign Languages', 'Foreign Languages is a three-year undergraduate program focusing on the study of one or more foreign languages. It covers language skills, literature. Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9X4xCMh-aQKiwW8AnBAokgoaMO2iLhELgm-DG2ep9w38FhWOujZxXwsw&s=10'),
('Fire Safety', 'Fire Safety is a three-year undergraduate program focusing on fire prevention, protection, and safety management. It covers fire dynamics, emergency planning, and risk assessment. Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4IgtPtnfDcG9hmdvaer9zakA6OVrgJFGwsQ&usqp=CAU'),
('Journalism', 'Journalism is a three-year undergraduate program focusing on reporting, writing, and media studies. It covers news writing, media ethics, and digital journalism. Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_mwFYmwztPeWP0YwmgdIlJANIYrMscY0yPXvDTMgwZJXKhJegPZPBUZk0&s=10'),
('Home Science Tourism', 'Home Science Tourism is a three-year undergraduate program combining home science and tourism studies. It covers hospitality management, nutrition, and travel planning. Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS0mkw8DHaeOeCTPhol4eZvgP_-IqG0eBxpEQ&usqp=CAU'),
('Hotel Management', 'Hotel Management is a three-year undergraduate program focusing on the hospitality industry. It covers hotel operations, food and beverage management, and customer service. Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFCzc9FlSi80f4YftZdu6lvrKdp0vJIc_t1_FyYisRoO8bmSb63lTH-1vF&s=10'),
('Fashion Designing', 'Fashion Designing is a three-year undergraduate program focusing on clothing design and fashion industry. It covers fashion illustration, textile studies, and garment construction. Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRUzso07fibZOGd6PP2nKSLmPT_OU3krTBd0Q&usqp=CAU'),
('Interior Designing', 'Interior Designing is a three-year undergraduate program focusing on designing interior spaces. It covers space planning, color theory, and furniture design. Eligibility: Completion of 12th grade', 'https://lirp.cdn-website.com/5648c9fa/dms3rep/multi/opt/interior-design-and-space-planning-640w.jpg'),
('Jewellery Designing', 'Jewellery Designing is a three-year undergraduate program focusing on the art and craft of designing jewelry. It covers gemology, metalwork, and design principles. Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTo5OxybxtwzVQw1kRyn7GoL_AdNLCv2a5Xg&usqp=CAU'),
('Direction- film making', 'Direction - Film Making is a three-year undergraduate program focusing on the process of directing films. It covers script development, visual storytelling, and production management. Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSRpg9SwZqV0A4jb9cvnyCiQ65rYZXO4DMghg&s'),
('Screen Writing', 'Screen Writing is a three-year undergraduate program focusing on writing scripts for films and television.  Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPbee0vHtfggWjxMQcv5hLSRFiTv6NG5Tzj230J2M9wD1ZyeTtzS9HPx1i&s=10'),
('Cinematography', 'Cinematography is a three-year undergraduate program focusing on the art of visual storytelling. Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSjKo75f5Xqtj1G49zFTm8Ozv-LdQ24TPjeDQ&usqp=CAU'),
('Sound Designing', 'Sound Designing is a three-year undergraduate program focusing on the creation and manipulation of audio elements for media.  Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6cG1TNkzGiVTeL7W13SZvFZFLpSr64J1Myg&s'),
('Editing', 'Editing is a three-year undergraduate program focusing on the post-production process of film and video. It covers video editing software, narrative techniques, and visual effects. Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSPixHtnGrXXGe6i0zMpMs4qboKoy8VIjAF-KIQ6VWUKPylA7ypSUEdZYt-&s=10'),
('Action', 'Action is a three-year undergraduate program focusing on performing and coordinating action sequences in films. It covers stunt work, choreography, and safety protocols. Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9MJE8UsDAaaOeFs9P_aeniIL0nBPYNDN5BvIqfvTCbNPIP5NvfIlq2RHa&s=10'),
('Finance Management', 'Finance Management is a three-year undergraduate program focusing on financial planning and management.  Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTOxWmt8rR8ki1lbldL2vKxnlDyh1RL5l-h3Q&s'),
('EVent Management', 'Event Management is a three-year undergraduate program focusing on planning and organizing events. It covers event marketing, logistics, and project management. Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7sJiYGgBtaL3H7ySTW6SsTCAfUUI8NJ7fjK137l9JPphmIpoMcAJlMHA&s=10');

-- --------------------------------------------------------

--
-- Table structure for table `paramedical`
--

CREATE TABLE `paramedical` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paramedical`
--

INSERT INTO `paramedical` (`Group1`, `desc1`, `image_url`) VALUES
('DLMT', 'Diploma in Medical Laboratory Technology is a two-year diploma program focusing on laboratory testing and diagnostics.  Eligibility: Completion of 10th or 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQkqQTv9QaTstb9iKxuMTPQVEbElAme6ZINQ&usqp=CAU'),
('DHFM', 'Diploma in Health and Fitness Management is a two-year diploma program focusing on health, fitness, and wellness management. Eligibility: Completion of 10th or 12th grades', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ4ztLAn73z9wzE-YSKe_OxFf5_3tFUaYfEfA&usqp=CAU'),
('DOA', ' Diploma in Ophthalmic Assistance is a two-year diploma program focusing on eye care and ophthalmic practices. Eligibility: Completion of 10th or 12th', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlwAcnM9_gqR9ea2gh3vlQUtQpJUin8uLAHw&usqp=CAU'),
('DOT', ' Diploma in Operation Theatre Technology is a two-year diploma program focusing on assisting surgical procedures and maintaining operation theater equipment. Eligibility: Completion of 10th or 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSD3BYrPt_VDC06Rqx6lgAa9ZGlhb0oI1v0sxRAfJtIL0r3SfaewLjBX34&s=10'),
('Health Inspector', 'Health Inspector is a one to two-year diploma program focusing on public health and sanitation. It covers environmental health, food safety, waste management, and health education. Eligibility: Completion of 10th or 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHatm4ZgbpQfoUD6gdrx6FW7WgDaXcw1TCQA&usqp=CAU'),
('Sanitary Inspector', 'Sanitary Inspector is a one to two-year diploma program focusing on sanitation and hygiene practices. It covers public health regulations, sanitation techniques, waste disposal, and disease prevention. Eligibility: Completion of 10th or 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS25reU8Mux3Oc4sE6t-WINq-zQ2ZbgxcvVNA&usqp=CAU');

-- --------------------------------------------------------

--
-- Table structure for table `paramedical_medicine`
--

CREATE TABLE `paramedical_medicine` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paramedical_medicine`
--

INSERT INTO `paramedical_medicine` (`Group1`, `desc1`, `image_url`) VALUES
('Dialysis Technician', 'Dialysis Technician is a two-year diploma program focusing on operating dialysis machines and providing care to patients with kidney disorders. It covers principles of dialysis.Eligibility: Completion of 10th or 12th grade .', 'https://www.paramedicaladmission.com/wp-content/uploads/2020/01/B.Sc_.-Renal-Dialysis-Technology-768x344.jpg'),
('ECG Technician', 'ECG Technician is a one to two-year diploma program focusing on performing electrocardiograms (ECGs) to monitor heart activity. Eligibility: Completion of 10th or 12th grade', 'https://npscerts.com/wp-content/uploads/2021/06/how-to-become-ekg-technician-768x520.jpg'),
('X-RAY Technician', 'X-Ray Technician is a two-year diploma program focusing on radiographic imaging and diagnostic procedures. It covers radiology principles Eligibility: Completion of 10th or 12th grade', 'https://mtschool.edu/wp-content/uploads/2018/08/X-ray-Technician-Digital-Pic.jpg'),
('Operation Theatre Technician', 'Operation Theatre Technician is a two-year diploma program focusing on assisting surgical procedures and maintaining operation theater equipment. It covers surgical instruments. Eligibility: Completion of 10th or 12th grade', 'https://www.edumilestones.com/career-library/images/operation-theatre.png');

-- --------------------------------------------------------

--
-- Table structure for table `polytechnic`
--

CREATE TABLE `polytechnic` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `polytechnic`
--

INSERT INTO `polytechnic` (`Group1`, `desc1`, `image_url`) VALUES
('Mechanical', 'Mechanical Engineering is a four-year undergraduate program focusing on mechanical systems, design, and manufacturing processes. Eligibility: Completion of 12th grade with Science subjects PCM', 'https://static.toiimg.com/photo/70512247.cms'),
('Computer Science', 'Computer Science Engineering is a four-year undergraduate program focusing on computer hardware, software, and programming.  Eligibility: Completion of 12th grade with Science subjects PCM', 'https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://images.ctfassets.net/wp1lcwdav1p1/6z473u5f7WaFUnr9GxDEk2/085274c4a841bd2dc900ebca36c43c9c/GettyImages-1255905237.jpg?w=1500&h=680&q=60&fit=fill&f=faces&fm=jpg&fl=progressive&auto=format%2Ccompress&dpr=1&w=1000'),
('Civil', 'Civil Engineering is a four-year undergraduate program focusing on infrastructure development, construction management, and structural design. Eligibility: Completion of 12th grade with Science subjects PCM', 'https://adiinstitute.co.in/wp-content/uploads/2022/05/Civil-Engineer.jpg'),
('EEE', 'Electrical Engineering (EEE) is a four-year undergraduate program focusing on electrical systems, power generation, and distribution.  Eligibility: Completion of 12th grade with Science subjects PCM', 'https://images.shiksha.com/mediadata/images/articles/1538648745phpWfy7Lc.jpeg'),
('IT', 'Information Technology (IT) is a four-year undergraduate program focusing on computer systems, software development, and information management. Eligibility: Completion of 12th grade with Science subjects PCM', 'https://www.keystonesubic.com/storage/2023/03/Why-I-Chose-to-Become-an-IT-Engineer-My-Personal-Journey.jpg'),
('Automobile', 'Automobile Engineering is a four-year undergraduate program focusing on automotive design, manufacturing, and maintenance.  Eligibility: Completion of 12th grade with Science subjects PCM', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTQCuKzKaKWybEEcz-tNmQTFHC12tSmrs39cA&s'),
('Electronics & Communication', 'Electronics & Communication Engineering is a four-year undergraduate program focusing on electronic circuits, communication systems, and signal processing.  Eligibility: Completion of 12th grade with Science subjects PCM', 'https://www.clarkson.edu/sites/default/files/2023-06/ece-hero-1600x900.jpg'),
('Bio-Technology', 'Bio-Technology Engineering is a four-year undergraduate program focusing on applying biological principles to technological advancements.  Eligibility: Completion of 12th grade with Science subjects PCB', 'https://campushunt.in/blog/wp-content/uploads/2018/08/iStock-477867849.jpg'),
('Chemical', 'Chemical Engineering is a four-year undergraduate program focusing on chemical processes, plant design, and industrial chemistry. Eligibility: Completion of 12th grade with Science subjects PCM', 'https://www.dantecdynamics.com/wp-content/uploads/2019/11/1-2-14-Proccess-Chemical-Engg-shutterstock_63056125.jpg'),
('Aeronautical', 'Aeronautical Engineering is a four-year undergraduate program focusing on aircraft design, propulsion systems, and aerospace technology.  Eligibility: Completion of 12th grade with Science subjects PCM', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt8tD-wWBAV3deaLadggH-oceOCNhYdETVEA&s'),
('Agriculture', 'Agriculture Engineering is a four-year undergraduate program focusing on agricultural machinery, irrigation systems, and farm structures.  Eligibility: Completion of 12th grade with Science subjects PCM/PCB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuw3QZ6E9vLUNFWdEJ1HMm2qsRcVf7thez1Q&s'),
('Architecture', 'Architecture is a five-year undergraduate program focusing on architectural design, urban planning, and construction management.  Eligibility: Completion of 12th grade', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWmmIquQk6lYI3Npr9hX2TMFXNpsCaTl8VzA&s'),
('Bio-medical', 'Bio-medical Engineering is a four-year undergraduate program focusing on medical equipment, prosthetics, and healthcare technology.  Eligibility: Completion of 12th grade with Science subjects PCB', 'https://5.imimg.com/data5/XD/AQ/GLADMIN-58746208/biomedical-engineering.png'),
('Marine technology', 'Marine Technology is a four-year undergraduate program focusing on marine vessels, offshore structures, and maritime operations. Eligibility: Completion of 12th grade with Science subjects PCM', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDsuXP1eoZyZU_SjFv4oKDZ_pktmvgEUi-2g&s'),
('Mining Technology', 'Mining Technology is a four-year undergraduate program focusing on mineral extraction, mining machinery, and mine safety.  mine ventilation, Eligibility: Completion of 12th grade with Science subjects PCM', 'https://www.mining-technology.com/wp-content/uploads/sites/19/2020/04/shutterstock_646064452.jpg'),
('Leather Technology', 'Leather Technology is a four-year undergraduate program focusing on leather processing, product design, and quality control.  Eligibility: Completion of 12th grade with Science subjects PCM/PCB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS1yk2idcog7rjC8X_fgQyYoKKlIsGwoIzYBA&s'),
('Textile Technology', 'Textile Technology is a four-year undergraduate program focusing on textile manufacturing, fiber science, and textile chemistry.  Eligibility: Completion of 12th grade with Science subjects PCM/PCB', 'https://images.careerindia.com/img/2014/03/21-textileenginnering.jpg'),
('Petroleum Technology', 'Petroleum Technology is a four-year undergraduate program focusing on oil and gas exploration, drilling operations, and petroleum refining.  Eligibility: Completion of 12th grade with Science subjects PCM', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS5ad3GJgxVUUvGvZiwd9aMapjaPSwMR1HkAg&s'),
('Plastic Technology', 'Plastic Technology is a four-year undergraduate program focusing on polymer science, plastic processing, and product design.  Eligibility: Completion of 12th grade with Science subjects PCM/PCB', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQrvPtTZcgF9H9bBl8OJEbnwyLr_ls-fehwiR9VT3sNhQokQYnkkWGmlu_uD1I2q4L36p4&usqp=CAU'),
('Rubber Technology', 'Rubber Technology is a four-year undergraduate program focusing on rubber processing, product development, and quality control. Eligibility: Completion of 12th grade with Science subjects PCM/PCB', 'https://i.ytimg.com/vi/MEhRwIp1EUk/maxresdefault.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `practice`
--

CREATE TABLE `practice` (
  `col1` varchar(1000) NOT NULL,
  `col2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `practice`
--

INSERT INTO `practice` (`col1`, `col2`) VALUES
('cse', 'https://openai.com/chatgpt/'),
('ece', 'electronics');

-- --------------------------------------------------------

--
-- Table structure for table `short_term_courses`
--

CREATE TABLE `short_term_courses` (
  `Group1` varchar(100) NOT NULL,
  `desc1` varchar(1000) NOT NULL,
  `image_url` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `short_term_courses`
--

INSERT INTO `short_term_courses` (`Group1`, `desc1`, `image_url`) VALUES
('DTP', 'Desktop Publishing (DTP) involves using computer software to create visual documents such as brochures, magazines, books, and newsletters. The course covers various software tools like Adobe InDesign, QuarkXPress, Adobe Photoshop, and CorelDRAW.Fundamentals of DTP\r\nTypography and layout design\r\nWorking with graphics and images\r\nCreating and formatting text\r\nDesigning brochures, flyers, and newsletters\r\nPrinting and publishing techniques', 'https://www.indiancomputer.co.in/wp-content/uploads/2016/05/dtp.jpg'),
('PGDCA', 'PGDCA is a one-year postgraduate diploma course focusing on computer applications and information technology. It is designed to provide in-depth knowledge of software and hardware applications.\r\nComputer organization and architecture\r\nProgramming languages (C, C++, Java)\r\nDatabase management systems\r\nData structures and algorithms\r\nOperating systems\r\nSoftware engineering\r\nWeb technologies\r\nNetworking and Internet technologies', 'https://www.cheggindia.com/wp-content/uploads/2023/08/pgdca-full-form-768x407.png.webp'),
('Tally', 'Tally is an accounting software widely used for financial management and business accounting. This course provides practical knowledge of using Tally for various accounting purposes.\r\nIntroduction to Tally software\r\nCreating and managing company accounts\r\nLedger and voucher entry\r\nInventory management\r\nGST (Goods and Services Tax) implementation\r\nPayroll management\r\nFinancial reporting and analysis', 'https://ics-worldwide.com/wp-content/uploads/2020/04/Tally-img-2-768x481.jpg'),
('Internet', 'This course provides an overview of Internet technologies and their applications. It includes learning about web browsing, email communication, and basic online tools.\r\nIntroduction to the Internet and its history\r\nUnderstanding web browsers and search engines\r\nEmail and online communication tools\r\nInternet security and privacy\r\nBasic HTML and web page creation\r\n', 'https://tutorialagent.com/wp-content/uploads/2019/04/Internet-Marketing-Course.jpg'),
('Graphics', 'The Graphics course focuses on creating visual content for various digital and print media using graphic design software.\r\nFundamentals of graphic design\r\nAdobe Photoshop, Illustrator, and CorelDRAW\r\nImage editing and manipulation\r\nVector graphics and illustration\r\nLogo and branding design\r\nCreating marketing materials (posters, banners, flyers)\r\nColor theory and typography', 'https://assets.bitdegree.org/online-learning-platforms/storage/media/online-graphic-design-courses.o.jpg'),
('Animation', 'This course covers the principles and techniques of animation, including both traditional and digital methods.\r\nFundamentals of animation\r\nStoryboarding and scriptwriting\r\n2D animation techniques using software like Adobe Animate\r\n3D animation techniques using software like Autodesk Maya and Blender\r\nCharacter design and development\r\nMotion graphics\r\nVisual effects', 'https://blogassets.leverageedu.com/blog/wp-content/uploads/2019/09/23164650/Animation.jpg'),
('Web Designing', '[Web Designing involves creating and maintaining websites. This course covers both the aesthetic and functional aspects of web design.\r\nIntroduction to web design principles\r\nHTML, CSS, and JavaScript\r\nResponsive web design\r\nUser experience (UX) and user interface (UI) design\r\nWeb development tools and frameworks (Bootstrap, jQuery)\r\nWeb graphics and multimedia\r\nWebsite hosting and domain management', 'https://cdn.msmeonline.in/e-learning/wp-content/uploads/sites/3/2019/04/website-design.jpg'),
('Cyber Security', 'Cyber Security focuses on protecting computer systems, networks, and data from cyber attacks. This course covers various aspects of information security.\r\nFundamentals of cyber security\r\nNetwork security and protocols\r\nCyber threats and attack vectors\r\nCryptography and encryption\r\nEthical hacking and penetration testing\r\nSecurity policies and risk management\r\nIncident response and disaster recovery', 'https://www.kaspersky.co.in/content/en-in/images/repository/isc/2017-images/What-is-Cyber-Security.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `teaching`
--
-- Error reading structure for table login.teaching: #1932 - Table 'login.teaching' doesn't exist in engine
-- Error reading data for table login.teaching: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `login`.`teaching`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'YeShwanth Reddy', 'yeshwanth', 'yeshwanthreddy729@gmail.com', '$2y$10$ppq/LuexGsm76I4eBDhAnuv9ptDIe1ikeRA.hwGAVeFHPkKCaSBhq'),
(2, 'mahitha', 'mahi', 'mahitha@gmail.com', '$2y$10$vhM.dKfrpqk9iXZjXpZI0uAFPyUNVjX6Fz1ixewPmJsIYDHOR69fe'),
(3, 'mahi', 'mahitha', 'mahi@gmail.com', '$2y$10$hx1AvdzsFxAURtixVlEHeeV67CF3dH7Q/mX1SO7f7QfOj1SjIBvqy'),
(4, 'YeShwanth Reddy', 'yeshwanth', 'yeshwanthreddy1729@gmail.com', '$2y$10$gUG/UWhilslx.Q6PF049VuLkzpcRkZNLD1TkG/bYXMXAUZr4iFFeW'),
(5, 'poreddy mahitha', 'poreddy mahi', 'pandu@gmail.com', '$2y$10$TYotclUDnADiyi01b/iR6eFN5dFW3qTsNvJGrhT6Yhd00M.cU3l4u'),
(6, 'kavitha', 'poreddy', 'kavitha@gmail.com', '$2y$10$.Aut2Y57XbWGu5phCPe1auHwlNh7JnFAv6fbPDfLI29906/R/ARea'),
(7, 'kavitha', 'T136G89', 'BharathReddy.Nalabolu@Centrica.com', '$2y$10$ii1a25nM8HfQCmo7QJQuuu8JDeE3G/WnL4.4AE.ub5lbZaRC3PSXW'),
(8, 'jeevan', 'jeevan', 'jeevan@759', '$2y$10$36On3VZLJtURANfgCfnhgOZlTESOii6s1XNJCiI55BMTycJG6k1ae'),
(9, 'navya', 'kolloju navya', 'navya@gmail.com', '$2y$10$Argaj2WbZJX8NxzCl.GAOus2VuX8v7YKD8.yM7lUZOl5bFX.fWc7W'),
(10, 'srinu', 'srinivas', 'srinivas@gmail.com', '$2y$10$I3r16c3rmOqFoN/vOh60luyx/rZBSylRRgYXg4OYKzKl0lkx3UXtW'),
(11, 'viraj', 'viraj', 'kla@gmail.com', '$2y$10$NjHC3bd.l/aaXHHdmgWxp.gg3rTaxRLYHz2.hEMbZp.gbPmTzsieC'),
(15, 'viraj', 'viraj', 'viraj@1234', '1234'),
(16, 'abcab', 'abc', 'abc@gmail.com', 'aqw'),
(17, 'viraj', 'viraj', 'viraj@12344', 'viraj'),
(18, 'viraj', 'viraj', 'mahi@12343', '12321'),
(19, 'viraj', 'viraj', 'viraj@12345', 'rtyui'),
(22, 'abc', 'viraj', 'kavi@gmail.com', 'kavi'),
(23, 'abcab', 'viraj', 'viraj@12340', 'mjko'),
(32, 'abcd', 'abcd', 'hari@gmail.com', '$2y$10$kxGxYkqK8beUzucL01vnJeqtGBPhsRuXFCXOsXOxViZjsZWDgyP1u'),
(37, 'viraj', 'viraj', 'mahi1230@gmail.com', '$2y$10$0/t3kiF2mPp8.9JuCTaGUOfHWYg/eZ6lzXUJ611Xb0KvhtQnz9xVm'),
(41, 'poreddy', 'mahitha', 'poreddy1@gmail.com', '$2y$10$cGvTPQ6wjboAgYIp19vOuuHJRsMIdT3EC3fiuUKGv7bmu2Ljnkd6e'),
(43, 'mahitha', 'mahitha', 'mahi@1234', '$2y$10$DaIxg/QCy6lDJyZwQHNIKOcG168Td/r0Sd0IdXeLWoJySr0LeQ2eC'),
(44, 'deepthi', 'vaddagani deepthi', 'deepthivaddagani@gmail.com', '$2y$10$W7n7.dKxyhMoJEf/wu4hC.7Ex6LVw7Y6xOj98S6jGeEn5RO/JVfwm'),
(45, 'kalyani', 'kal', 'kal@gmail.com', '$2y$10$IyyfoBVJvzggoWi5p6Z67.vAWpaONPxI1MEGALOx07L1VrPn7x18.'),
(46, 'deepthi', 'deepu', 'deep@123', '$2y$10$XpgTlC8k9vaUn1sbpEj./e3p1.7Src7Vtl6dB60Rya6UVh9dPXNMS'),
(47, 'hello', 'hello', 'hello@gmail.com', '$2y$10$PpAjS/aOasyT9eyQqGbfD.5tPZosRv4efjS9/S/YHSMJNabGShH0O'),
(48, 'hiii', 'hiii', 'hiii@gmail.com', '$2y$10$b1Sl6F5BdfAZcg8CuY4KcOfByWZUC.DLY.vjGy.fYXfw96Nt5x9xe'),
(49, 'mee', 'mee', 'meee@gmail.com', '$2y$10$6HU/3dehYUigsHVsF3qZIOLnDCfNTqrLrQwfJbyqmzt3I2hi/FMcS'),
(50, 'xyz', 'xyz', 'xyz@gmail.com', '$2y$10$kCi5Z4s4R1N/qDjEWiWB2ebL6jn0Ft2qe.bdnBOleGdYC5zygo4Ha'),
(51, 'thanu', 'thanu', 'thanu@gmail.com', '$2y$10$k9avjMTdw.nGuaDXnuBF/OzHla.tJ5x/SP/MQ0kIT/wfwSrNEK4P.'),
(52, 'teju', 'teju', 'teju@gmail.com', '$2y$10$cBwSDCRSvenLAYRAd0nvxetn1MzctijwiyOGp3Gd4NvypUiizbPjC'),
(53, 'varshitha', 'varshitha', 'varshitha@gmail.com', '$2y$10$EfN4uihpxscW007E3ST1dONL.Z1u.qkJm23eKD84W2BKNqGOovJ/.'),
(54, 'teja', 'teja', 'teja@gmail.com', '$2y$10$VQ.NZ.ULhaLKF.V7tmCbueEC2ZSan9wDB32t2oBthLB9d1hm7w/9W'),
(55, 'kavi', 'kavi', 'kavii@gmail.com', '$2y$10$28blN76xK0ticlrNIdd24eskupVfUv7I27bliwjHc8gLVpS2iy0J6'),
(56, 'srinuu', 'srinu', 'srinuu@gmail.com', '$2y$10$5eADnr2McsuXK7uQ3jkaNuPJBtSeI23CAx0sIQEOsqNq0TzMN97Lu'),
(57, 'mahi', 'mahi', 'mahii@gmail.com', '$2y$10$dp.kXE2KdUovyxxGGLj2t.cxia3Gwqne.RJTcfVNm1gCaQPdYB4Ki'),
(58, 'ab', 'ab', 'ab@gmail.com', '$2y$10$r.tB3eZBKGQgROvBSIw0zuvrvy9HkkPs07YOtEwklz2d/1Cj80iIS'),
(59, 'xt', 'xt', 'xt@gmail.com', '$2y$10$dxAQomLUeAnYCuDSA.kJ3eU5C3tejKUdtYf4LSZK7ChGFWiZI0mOi'),
(60, 'mahithaa', 'mahithaa', 'mahiithaa@gmail.com', '$2y$10$0e8bub3qT6Q5MExoYBlJMO5lE/PsI9Jyoy.mBXi8ge9l5n5btyoGO'),
(61, 'mahitha', 'mahithaporeddy', 'mahithareddy729@gmail.com', '$2y$10$K0ZKPyP6iVFczv1/N8PTteWSnZOwtXEseJ0//RDqvAtYlRoLy/V6S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- Database: `login_sample_db`
--
CREATE DATABASE IF NOT EXISTS `login_sample_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login_sample_db`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) NOT NULL DEFAULT '',
  `user` varchar(255) NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `query` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) NOT NULL,
  `col_name` varchar(64) NOT NULL,
  `col_type` varchar(64) NOT NULL,
  `col_length` text DEFAULT NULL,
  `col_collation` varchar(64) NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) DEFAULT '',
  `col_default` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `column_name` varchar(64) NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '',
  `transformation` varchar(255) NOT NULL DEFAULT '',
  `transformation_options` varchar(255) NOT NULL DEFAULT '',
  `input_transformation` varchar(255) NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) NOT NULL,
  `settings_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL,
  `export_type` varchar(10) NOT NULL,
  `template_name` varchar(64) NOT NULL,
  `template_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db` varchar(64) NOT NULL DEFAULT '',
  `table` varchar(64) NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) NOT NULL,
  `item_name` varchar(64) NOT NULL,
  `item_type` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) NOT NULL,
  `tables` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"login\",\"table\":\"intermediate\"},{\"db\":\"login\",\"table\":\"others\"},{\"db\":\"login\",\"table\":\"polytechnic\"},{\"db\":\"login\",\"table\":\"practice\"},{\"db\":\"login\",\"table\":\"short_term_courses\"},{\"db\":\"login\",\"table\":\"teaching\"},{\"db\":\"login\",\"table\":\"paramedical_medicine\"},{\"db\":\"login\",\"table\":\"paramedical\"},{\"db\":\"login\",\"table\":\"others_diploma\"},{\"db\":\"login\",\"table\":\"nda\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) NOT NULL DEFAULT '',
  `master_table` varchar(64) NOT NULL DEFAULT '',
  `master_field` varchar(64) NOT NULL DEFAULT '',
  `foreign_db` varchar(64) NOT NULL DEFAULT '',
  `foreign_table` varchar(64) NOT NULL DEFAULT '',
  `foreign_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) NOT NULL DEFAULT '',
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `search_name` varchar(64) NOT NULL DEFAULT '',
  `search_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) NOT NULL DEFAULT '',
  `table_name` varchar(64) NOT NULL DEFAULT '',
  `display_field` varchar(64) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) NOT NULL,
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `prefs` text NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) NOT NULL,
  `table_name` varchar(64) NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text NOT NULL,
  `schema_sql` text DEFAULT NULL,
  `data_sql` longtext DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2024-06-19 18:58:03', '{\"Console\\/Mode\":\"collapse\",\"NavigationWidth\":250}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) NOT NULL,
  `tab` varchar(64) NOT NULL,
  `allowed` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) NOT NULL,
  `usergroup` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `practice`
--
CREATE DATABASE IF NOT EXISTS `practice` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `practice`;

-- --------------------------------------------------------

--
-- Table structure for table `p`
--

CREATE TABLE `p` (
  `a` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p2`
--

CREATE TABLE `p2` (
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `p3`
--

CREATE TABLE `p3` (
  `ab` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p3`
--

INSERT INTO `p3` (`ab`, `b`, `c`, `d`) VALUES
('a', 'b', 'c', 'd');

-- --------------------------------------------------------

--
-- Table structure for table `p4`
--

CREATE TABLE `p4` (
  `col1` varchar(1000) NOT NULL,
  `col2` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p4`
--

INSERT INTO `p4` (`col1`, `col2`) VALUES
('cse', 'https://openai.com/chatgpt/');
--
-- Database: `sdc`
--
CREATE DATABASE IF NOT EXISTS `sdc` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sdc`;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('mahithareddy@gmail.com', '$2y$10$jQurpqHjlb1vr9DEMo5B..kfAnIiUHBqlVvU.KK9FUBTRSUboYFLa'),
('poreddy@gmail.com', '$2y$10$cPwLYXRdo5U8J58m0qvZMeOkpgzcZrn813NnJa9k1NU1D8aOViUma'),
('mahithareddy1@gmail.com', '$2y$10$hByXLDloQiLdSRJMIuHdtu15RgayIITwHL5yXCW.Rj3BrloFZXAHy'),
('jeevan@759', '$2y$10$EfwxPnOHFGMbhO5S/.8j3OC/86cf3/Lfe0RzcsyLst7QOI20SdUPe');
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Database: `yeshu`
--
CREATE DATABASE IF NOT EXISTS `yeshu` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `yeshu`;

-- --------------------------------------------------------

--
-- Table structure for table `yeshureddy`
--

CREATE TABLE `yeshureddy` (
  `userid` varchar(100) NOT NULL,
  `info` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `Tel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
