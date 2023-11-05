-- phpMyAdmin SQL Dump
-- version 5.2.1deb1ubuntu0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2023 at 04:12 PM
-- Server version: 8.0.34-0ubuntu0.23.04.1
-- PHP Version: 8.1.12-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Journal_Impacting_Science1`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_e_books`
--

CREATE TABLE `add_e_books` (
  `bId` int NOT NULL,
  `bTitle` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `bCode` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `bCover` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `bPdfUrl` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `bPrice` int NOT NULL,
  `bDescription` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `bStatus` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_e_books`
--

INSERT INTO `add_e_books` (`bId`, `bTitle`, `bCode`, `bCover`, `bPdfUrl`, `bPrice`, `bDescription`, `bStatus`) VALUES
(1, 'CONTEMPORARY SCLERAL LENSES: THEORY AND APPLICATION', '9781681085661', 'https://benthambooks.com/ebook-images/sample-files-images/9781681085661/9781681085661-1.jpg', 'https://benthambooks.com/ebook-files/catalog/bentham-books-best-sellers.pdf', 174, 'This textbook covers the history and evolution of scleral lenses,\r\nbasic scleral lens structure, optics and customizable features of\r\nscleral lenses, analysis of ocular surface shape, ocular surface\r\ntopography and advances in optometry technology. The book\r\nis a valuable reference for ophthalmology students and\r\npractitioners.', 'active'),
(2, 'ORTHODONTIC BIOMECHANICS: TREATMENT OF COMPLEX CASES USING CLEAR ALIGNER', '9781681083117', 'https://benthambooks.com/ebook-images/sample-files-images/9781681083117/9781681083117-1.jpg', 'https://benthambooks.com/ebook-files/catalog/bentham-books-best-sellers.pdf', 105, 'A useful guide which explains the use of clear aligners in a\r\nvariety of complex malocclusions including increased teeth\r\ncrowding, spacing, overjet, overbite, open bite, major jaw\r\ndiscrepancies, underbite and much more. Simplified treatment\r\nplanning methods based on thorough diagnoses are also\r\npresented for the benefit of orthodontists in their daily dental\r\npractice', 'active'),
(3, 'A BLUEPRINT FOR THE HARD PROBLEM OF CONSCIOUSNESS', '9781681087665', 'https://benthambooks.com/ebook-images/sample-files-images/9781681087665/9781681087665-1.jpg', 'https://benthambooks.com/ebook-files/catalog/bentham-books-best-sellers.pdf', 93, 'The book addresses the Hard Problem of Consciousness\r\n– the fundamental mechanism that allows physical\r\nevents to transcend into subjective experiences. It offers\r\na unique perspective to readers interested in the scientific\r\nphilosophy and cognitive neuroscience theory in relation to\r\nmodels of the theory of consciousness.', 'active'),
(4, 'SIMPLIFYING COMPLEXITY: LIFE IS UNCERTAIN, UNFAIR AND UNEQUAL', '9781681082172', 'https://benthambooks.com/ebook-images/sample-files-images/9781681082172/9781681082172-1.jpg', 'https://benthambooks.com/ebook-files/catalog/bentham-books-best-sellers.pdf', 119, 'Simplifying Complexity explains the scientific study\r\nof complex cognitive networks, as well as the methods\r\nscientists use to parse difficult problems into manageable\r\npieces. This is an essential read for advanced students\r\n(in the fields of sociology, cognitive science, complex\r\nnetworks and change management) and general readers\r\nlooking for a more scientific guide to understanding\r\nand managing the nature of change in a complex world.', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `add_journal_impacting_science`
--

CREATE TABLE `add_journal_impacting_science` (
  `journalId` int NOT NULL,
  `journalName` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `journalImageUrl` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `journalPdfUrl` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `journalCode` int NOT NULL,
  `impactFactor` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `journalDescription` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `current` int NOT NULL,
  `Jcode` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `journalStatus` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_journal_impacting_science`
--

INSERT INTO `add_journal_impacting_science` (`journalId`, `journalName`, `journalImageUrl`, `journalPdfUrl`, `journalCode`, `impactFactor`, `journalDescription`, `current`, `Jcode`, `journalStatus`) VALUES
(1, 'Current Neuropharmacology', 'https://www.eurekaselect.com/images/bentham/CN-2020.jpg', 'https://www.eurekaselect.com/images/journal-flyer/cn-flyer.pdf', 26, '5 - Year: 7.9', 'OpenAire, Journal Citation Reports/Science Edition, Cambridge Scientific Abstracts (CSA)/ProQuest, Science Citation Index Expanded™ (SciSearch®), Essential Science Indicators, BIOSIS Reviews Reports and Meetings, BIOSIS Previews, Ulrich\'s Periodicals Directory, Suweco CZ, Scopus, Scilit, QOAM, PubsHub, PubMed/PubMed Central, PsycINFO, Norwegian Register, MEDLINE/PubMed, MediaFinder®-Standard Periodical Directory, JournalTOCs, J-Gate, Index Copernicus, Google Scholar, Genamics Journal Seek, Europe PMC, ERA 2018, EMBiology, EMBASE, EBSCO, Dimensions, CNKI Scholar, Chemical Abstracts Service/SciFinder, Cabell\'s Directory/Journalytics, British Library, Sherpa Romeo', 5, 'CN', 'active'),
(2, 'Current Vascular Pharmacology', 'https://www.eurekaselect.com/images/bentham/CVP-2020.jpg', 'https://www.eurekaselect.com/images/journal-flyer/cvp-flyer.pdf', 40, '5 - Year: 3.8', 'OpenAire, Journal Citation Reports/Science Edition, Cambridge Scientific Abstracts (CSA)/ProQuest, Science Citation Index Expanded™ (SciSearch®), Essential Science Indicators, Current Contents® - Life Sciences, Current Contents® - Clinical Medicine, BIOSIS Reviews Reports and Meetings, BIOSIS Previews, Ulrich\'s Periodicals Directory, Suweco CZ, Scopus, Scilit, QOAM, PubsHub, Norwegian Register, MEDLINE/PubMed/Index Medicus, MediaFinder®-Standard Periodical Directory, JournalTOCs, J-Gate, Index Copernicus, Google Scholar, Genamics Journal Seek, ERA 2018, EMBiology, EMBASE, EBSCO, Dimensions, CNKI Scholar, Chemical Abstracts Service/SciFinder, Cabell\'s Directory/Journalytics, British Library, Sherpa Romeo', 5, 'CVP', 'active'),
(3, 'Current Medicinal Chemistry', 'https://www.eurekaselect.com/images/bentham/CMC.gif', 'https://www.eurekaselect.com/images/journal-flyer/cmc-flyer.pdf', 25, '5 - Year: 4.6', 'OpenAire, Journal Citation Reports/Science Edition, Science Citation Index Expanded™ (SciSearch®), Essential Science Indicators, Current Contents® - Life Sciences, BIOSIS Previews, Biological Abstracts, Ulrich\'s Periodicals Directory, Suweco CZ, Scopus, Scilit, QOAM, PubsHub, Norwegian Register, MEDLINE/PubMed/Index Medicus, MediaFinder®-Standard Periodical Directory, JournalTOCs, J-Gate, Index Copernicus, Google Scholar, Genamics Journal Seek, ERA 2018, EMBiology, EMBASE, EBSCO, Dimensions, CNKI Scholar, Chemical Abstracts Service/SciFinder, Cabell\'s Directory/Journalytics, CAB Abstracts, British Library, BIOBASE, Sherpa Romeo', 4, 'CMC', 'active'),
(4, 'Current Bioinformatics', 'https://www.eurekaselect.com/images/bentham/CBIO_0.gif', 'https://www.eurekaselect.com/images/journal-flyer/cbio-flyer.pdf', 65, '5 - Year: 2.8', 'OpenAire, Journal Citation Reports/Science Edition, Cambridge Scientific Abstracts (CSA)/ProQuest, Science Citation Index Expanded™ (SciSearch®), Essential Science Indicators, BIOSIS Previews, Biological Abstracts, Ulrich\'s Periodicals Directory, Suweco CZ, Scopus, Scilit, QOAM, PubsHub, Norwegian Register, MediaFinder®-Standard Periodical Directory, JournalTOCs, J-Gate, Index Copernicus, Google Scholar, Genamics Journal Seek, EMBASE, EBSCO, Dimensions, CNKI Scholar, Chemical Abstracts Service/SciFinder, Cabell\'s Directory/Journalytics, British Library, Sherpa Romeo', 4, 'CBIO', 'active'),
(5, 'Mini-Reviews in Medicinal Chemistry', 'https://www.eurekaselect.com/images/bentham/mrmc-2020.jpg', 'https://www.eurekaselect.com/images/journal-flyer/mrmc-flyer.pdf', 56, '5 - Year: 4.2', 'OpenAire, Journal Citation Reports/Science Edition, Cambridge Scientific Abstracts (CSA)/ProQuest, Science Citation Index Expanded™ (SciSearch®), Essential Science Indicators, BIOSIS Reviews Reports and Meetings, BIOSIS Previews, Ulrich\'s Periodicals Directory, Suweco CZ, Scopus, Scilit, QOAM, PubsHub, Norwegian Register, MEDLINE/PubMed/Index Medicus, MediaFinder®-Standard Periodical Directory, JournalTOCs, J-Gate, Index Copernicus, Google Scholar, Genamics Journal Seek, ERA 2018, EMBiology, EMBASE, EBSCO, Dimensions, CNKI Scholar, Chemical Abstracts Service/SciFinder, Cabell\'s Directory/Journalytics, British Library, Sherpa Romeo', 4, 'MRMC', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `add_most_cited_article`
--

CREATE TABLE `add_most_cited_article` (
  `articleId` int NOT NULL,
  `sId` int NOT NULL,
  `articleTitle` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `journalTitle` varchar(300) COLLATE utf8mb4_general_ci NOT NULL,
  `years` int NOT NULL,
  `volume` int NOT NULL,
  `issue` int NOT NULL,
  `author` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `doi` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `articleStatus` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_most_cited_article`
--

INSERT INTO `add_most_cited_article` (`articleId`, `sId`, `articleTitle`, `journalTitle`, `years`, `volume`, `issue`, `author`, `doi`, `articleStatus`) VALUES
(1, 15, 'Cervical Cancer Metastasis and Recurrence Risk Prediction Based on Deep Convolutional Neural Network', 'Current Bioinformatics', 2022, 17, 2, 'Ye, Zixuan; Zhang, Yunxiang; Liang, Yuebin; Lang, Jidong; Zhang, Xiaoli; Zang, Guoliang; Yuan, Dawei; Tian, Geng; Xiao, Mansheng; Yang, Jialiang', '10.2174/1574893616666210708143556', 'active'),
(2, 15, 'Multivariate Information Fusion for Identifying Antifungal Peptides with Hilbert-Schmidt Independence Criterion', 'Current Bioinformatics', 2022, 17, 1, 'Zhou, Haohao; Wang, Hao; Ding, Yijie; Tang, Jijun', '10.2174/1574893616666210727161003', 'active'),
(3, 15, 'Identification of DNA-Binding Proteins via Hypergraph Based Laplacian Support Vector Machine', 'Current Bioinformatics', 2022, 17, 1, 'Qian, Yuqing; Meng, Hao; Lu, Weizhong; Liao, Zhijun; Ding, Yijie; Wu, Hongjie', '10.2174/1574893616666210806091922', 'active'),
(4, 16, 'An Updated Review on Therapeutic Potential and Recent Advances in Drug Delivery of Berberine: Current Status and Future Prospect', 'current pharmaceutical biotechnology', 2022, 23, 1, 'Mujtaba, Md Ali; Akhter, Md Habban; Alam, Md Sarfaraz; Ali, Mohammad Daud; Hussain, Afzal', '10.2174/1389201022666210208152113', 'active'),
(5, 16, 'Role of Medicinal Plants against Neurodegenerative Diseases', 'current pharmaceutical biotechnology', 2022, 23, 1, 'Luthra, Ritika; Roy, Arpita', '10.2174/1389201022666210211123539', 'active'),
(6, 16, 'Olive Oil Consumption Can Prevent Non-communicable Diseases and COVID-19: A Review', 'current pharmaceutical biotechnology', 2022, 23, 2, 'Majumder, Debabrata; Debnath, Mousumi; Sharma, Kamal Nayan; Shekhawat, Surinder Singh; Prasad, G. B. K. S.; Maiti, Debasish; Ramakrishna, Seeram', '10.2174/1389201022666210412143553', 'active'),
(7, 17, 'Current Advances and Outlook in Gastric Cancer Chemoresistance: A Re-view', ' recent patents on anti-cancer drug discovery', 2022, 17, 1, 'Zhang, Sheng-Xiong; Liu, Wei; Ai, Bo; Sun, Ling-Ling; Chen, Zhe-Sheng; Lin, Li-Zhu', '10.2174/1574892816666210929165729', 'active'),
(8, 17, 'Advancement of Traditional Chinese Medicine in Regulation of Intestinal Flora: Mechanism-based Role in Disease Management', ' recent patents on anti-cancer drug discovery', 2022, 17, 2, 'Wu, Zezhen; Chen, Yongru; Zhu, Dan; Zheng, Yingmiao; Ali, Khan Barkat; Hou, Kaijian', '10.2174/1574892816666210929164930', 'active'),
(9, 17, 'Metallodrugs as Anticancer Chemotherapeutics and Diagnostic Agents: A Critical Patent Review (2010-2020)', ' recent patents on anti-cancer drug discovery', 2022, 17, 1, 'Fotopoulou, Eirini; Titilas, Ioannis; Ronconi, Luca', '10.2174/1574892816666210907101146', 'active'),
(10, 18, 'Recent Applications of Rare Earth Complexes in Photoredox Catalysis for Organic Synthesis', 'current organic chemistry', 2022, 26, 1, 'Prieto, Alexis; Jaroschik, Florian', '10.2174/1385272825666211126123928', 'active'),
(11, 18, 'Recent Advances in the Synthesis of Benzothiazole and its Derivatives', 'current organic chemistry', 2022, 26, 2, 'Qadir, Tanzeela; Amin, Andleeb; Salhotra, Alka; Sharma, Praveen Kumar; Jeelani, Ishtiaq; Abe, Hitoshi', '10.2174/1385272826666211229144446', 'active'),
(12, 18, 'Recent Advances in Utilization of Deep Eutectic Solvents: An Environmentally Friendly Pathway for Multi-component Synthesis', 'current organic chemistry', 2022, 26, 2, 'Thakur, Ajay; Verma, Monika; Bharti, Ruchi; Sharma, Renu', '10.2174/1385272826666220126165925', 'active'),
(13, 19, 'Fast Dissolution Electrospun Medicated Nanofibers for Effective Delivery of Poorly Water-Soluble Drug', 'current drug delivery', 2022, 19, 4, 'Aidana, Yrysbaeva; Wang, Yibin; Li, Jie; Chang, Shuyue; Wang, Ke; Yu, Deng-Guang', '10.2174/1567201818666210215110359', 'active'),
(14, 19, 'Striding Into Nano Drug Delivery Preface', 'current drug delivery', 2022, 19, 4, 'Yu, Deng-Guang; Lv, He', 'NA', 'active'),
(15, 19, 'Comparing Antibiotic Pastes with Electrospun Nanofibers as Modern Drug Delivery Systems for Regenerative Endodontics', 'current drug delivery', 2022, 19, 9, 'Brimo, Nura; Serdaroglu, Dilek Cokeliler; Uysal, Busra', '10.2174/1567201819666211216140947', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `add_subject_list`
--

CREATE TABLE `add_subject_list` (
  `sId` int NOT NULL,
  `sTitle` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_subject_list`
--

INSERT INTO `add_subject_list` (`sId`, `sTitle`) VALUES
(15, 'Bioinformatics'),
(16, 'Biotechnology'),
(17, 'Cancer Research'),
(18, 'Chemistry'),
(19, 'Drug Delivery');

-- --------------------------------------------------------

--
-- Table structure for table `add_web_header`
--

CREATE TABLE `add_web_header` (
  `hId` int NOT NULL,
  `hTitle` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `hImage` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `hDescription` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `hStatus` varchar(100) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_web_header`
--

INSERT INTO `add_web_header` (`hId`, `hTitle`, `hImage`, `hDescription`, `hStatus`) VALUES
(4, 'RICE-UNIVERSITY', 'Rice-University.jpg', ' At Bentham Science, we are committed to advancing the world of scientific research, and we\'re excited to share our extensive collection of scholarly content with the esteemed researchers.  We\'re delighted to announce that your institution has subscribed to Bentham Science Publishers\' Journals. \nThis subscription grants researchers at your institution access to full-text articles from our journals. Here, you\'ll find a selection of our most accessed articles in your field of interest, Impactful Journals and Best selling eBooks. We trust you\'ll find these resources valuable for your academic pursuits. This subscription grants researchers at your institution access to full-text articles from our journals. Here, you\'ll find a selection of our most accessed articles in your field of interest, Impactful Journals and Best selling eBooks. We trust you\'ll find these resources valuable for your academic pursuits.', 'active'),
(5, 'NED-UNIVERSITY', 'ned (1).jpg', 'NED U DESSSS', 'active'),
(6, 'KARACHI-UNIVERSITY', 'ku.png', 'K U DESSSSSSSSSSSSSSSS ', 'active'),
(8, 'SINDH-UNIVERSITY', 'sindh2.jpeg', 'SINDH dESSSSSSSSSSSSSSSSSSSSSSSSSSS', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uId` int NOT NULL,
  `uEmail` varchar(200) NOT NULL,
  `uPassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uId`, `uEmail`, `uPassword`) VALUES
(1, 'admin@gmail.com', '$2y$10$CZKChBmL/VAq7runo9nWb.E07CS6CAdWN7B5jDn0mOkzyciElweZG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_e_books`
--
ALTER TABLE `add_e_books`
  ADD PRIMARY KEY (`bId`);

--
-- Indexes for table `add_journal_impacting_science`
--
ALTER TABLE `add_journal_impacting_science`
  ADD PRIMARY KEY (`journalId`);

--
-- Indexes for table `add_most_cited_article`
--
ALTER TABLE `add_most_cited_article`
  ADD PRIMARY KEY (`articleId`),
  ADD KEY `subject_list_and_most_cited_article` (`sId`);

--
-- Indexes for table `add_subject_list`
--
ALTER TABLE `add_subject_list`
  ADD PRIMARY KEY (`sId`);

--
-- Indexes for table `add_web_header`
--
ALTER TABLE `add_web_header`
  ADD PRIMARY KEY (`hId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_e_books`
--
ALTER TABLE `add_e_books`
  MODIFY `bId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `add_journal_impacting_science`
--
ALTER TABLE `add_journal_impacting_science`
  MODIFY `journalId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_most_cited_article`
--
ALTER TABLE `add_most_cited_article`
  MODIFY `articleId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `add_subject_list`
--
ALTER TABLE `add_subject_list`
  MODIFY `sId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `add_web_header`
--
ALTER TABLE `add_web_header`
  MODIFY `hId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uId` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_most_cited_article`
--
ALTER TABLE `add_most_cited_article`
  ADD CONSTRAINT `subject_list_and_most_cited_article` FOREIGN KEY (`sId`) REFERENCES `add_subject_list` (`sId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
