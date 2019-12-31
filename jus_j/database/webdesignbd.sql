-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 09, 2019 at 05:20 AM
-- Server version: 8.0.18-0ubuntu0.19.10.1
-- PHP Version: 7.2.24-0ubuntu0.19.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdesignbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `phd` varchar(255) NOT NULL,
  `msc` varchar(255) NOT NULL,
  `bsc` varchar(255) NOT NULL,
  `hsc` varchar(255) NOT NULL,
  `ssc` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`phd`, `msc`, `bsc`, `hsc`, `ssc`, `id`) VALUES
('Quantum Communication, Multimedia University, Malaysia (2010)\r\nResearch: Quantum Data Communication', 'Satellite Image Processing, Universiti Malaysia Sarawak, Malaysia, (1999)\r\nResearch: Computer and Robot Vision, Deep Learning', 'BUET, Bangladesh (1995)\r\nResearch: Embedded Systems, Scientific Computation', 'Science, Govt. Bakergonj College, Bakergonj, Barisal, Bangladesh.', 'Science, K. M. Latif Institution, Mathbaria, Pirojpur, Bangladesh.\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `name` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `institution` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`name`, `dept`, `faculty`, `institution`, `location`, `telephone`, `fax`, `email`, `id`) VALUES
('Professor Dr. Md. Mijanur Rahman\r\nChairman', 'Department of Computer Science and Engineering,', 'Faculty of Science and Engineering,', 'Uttara University (UU),', 'Uttara, Dhaka - 1230, Bangladesh.\r\n', '+88 02 58951116,', '+88 02 588952047', 'mijanur@gmail.com;', 1);

-- --------------------------------------------------------

--
-- Table structure for table `other_info`
--

CREATE TABLE `other_info` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `other_info`
--

INSERT INTO `other_info` (`id`, `title`, `description`) VALUES
(1, 'Welcome to my Home page', 'A human like autonomous robot which is capable to adapt with the changes of its environment and continue to reach its goal is considered as Humanoid Robot. In recent years there has been much progress in the development of humanoid and still there are a lot of scopes in this field. A number of research groups are interested in this area and trying to design and develop various humanoid platforms through mechanical and biological inspiration. Many researchers focus on designing lower torso of the robotic platform to perform locomotion as like as human. Upper torso mainly includes the design of arms and neck. Designing lower torso which includes west, hip, knee, ankle, and toe, is complex and more challenging task. Analysis of walking gait, optimal control of multiple actuators, controlling Degree of Freedom (DoF), adaptability control, and Artificial Intelligence (AI) make a humanoid to behave like a human. Basically research on this field combines a variety of disciplines which make it more thought provoking area in Mechatronics Engineering.\r\n\r\nNowadays robots become very powerful elements in industry because of its capability to perform many difficult operations precisely. Besides these industrial robots, significant advances have been made in the development of biologically inspired social robots. Bipedal robot, especially humanoid robot, is naturally enthused from the functional mobility of human body. However, the complex nature of the human musculoskeletal structure cannot be reproduced in this system. A bipedal robot therefore has fewer DoF than human body. It is very important to choose the number of DoFs for each articulation where the selection approach needs to analyze the structure from sagittal, frontal, and transversal planes.\r\n\r\nJapanese have a predilection for humanoid robots. In 1952 a Japanese cartoonist, Osamu Tezuka created a human-like robot character, \"Atom\" also known as \"Astro-boy\", who became the favorite idol for Japanese children. About 150 years ago Japan had a super-technology in a mechanical doll, a tea serving doll that could carry a tea cup to the guest, serve the cup and then come back to its start position. Basically today\'s humanoid robots are nothing but walking or dancing dolls and not yet ready to serve our household works. Though, humanoids are neither intelligent enough nor fully autonomous, they currently are represented as one of the mankind\'s greatest accomplishments. It is the single greatest attempt of mankind to produce an artificial sentient being. In the recent years manufacturers are making various types of humanoid robots which are more attainable to the general public.\r\n\r\nPresently robots are replacing humans in most the manufacturing industries, soon it will also replace human in all kind of service jobs. Economic development will be primarily determined by the advancement of robotics. Japan\'s current strength in this field says that they may become the economic leader in the near future. US military research on robotics reflects that robots will actively participate in future battle-fields mostly in humanoid form. Gesture, posture, locomotion, and navigation are not easy to adapt in a humanoid robot, especially when the ground is bumpy or slippery. Advanced research are focusing to design all the complex movements such as walking, running, and jumping which are already applied in some recent humanoid robots, but still there are a huge opportunity to work in this field to achieve the perfection of the system. A perfect Mechatronics design with robust Control Engineering and its implementation in high processing controller-chip are the basic idea. These will involve Dynamics and Inverse-dynamics, Kinematics and Inverse-Kinematics, Jacobians and Inverse-jacobians, Modern control engineering, Powerful control electronics, and Programming tools.\r\n\r\nIn near future humanoids will exhibit emotion, forge relationships, and make decisions as they will learn through interaction with the environment. Robots that can incrementally acquire new knowledge from autonomous interactions with the environment are the main target to accomplish. Humanoid Robotics also offers a unique research tool for understanding the human brain and body. Humanoids have provided revolutionary ways for studying cognitive science.\r\n\r\nThe field of humanoid robotics is extensively and unavoidably multidisciplinary and has interrelations to a host of new horizon technologies, such as, Mechatronics Engineering, Neurobio Engineering, Neuromorphic Engineering, Nanoelectromechanical systems, and so on. The robotics industry is experiencing exponential growth worldwide and stands poised to become one of the most exciting and expansive markets for technology in the twenty-first century. Robots will soon be everywhere, in our home and at work. They will change the way we live. This will raise many philosophical, social, and political questions that will have to be thought and answered. In science fiction, robots become so intelligent that they decide to take over the world because humans are deemed inferior. In real life, however, they might not choose to do that. Robots might follow some particular rules such as Asimov\'s Three Laws of Robotics, which will prevent them from creating danger to mankind.');

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`id`, `name`, `type`) VALUES
(1, 'Alam, M. Z.; Fakhru’l-Razi, A.; Molla, A. H.; Roychoudhury, P. K. (2001). Treatment of wastewater sludge by liquid state bioconversion process. Journal of Environmental Science and Health, A36(7), 1237-1243. [Journal Impact Factor (JIF): 1.002 (2008)]', 'journal'),
(2, 'Alam, M. Z. (2004). Biosorption of basic dyes using sewage treatment plant biosolids. Biotechnology, 3(2), 200-204.', 'without_journal'),
(4, 'Alam, M. Z. (2004). Biosorption of phenol from aqueous solution by biosolids. The Medical Journal of Malaysia, 59, Supplement B, 216-217', 'without_journal'),
(5, 'Takriff, M. S; Alam, M. Z. (2000). Gas holdup in gas-liquid oscillatory flow in a baffled column. Journal of Industrial Technology, 9(1), 55-61', 'li'),
(6, 'Takriff, M. S; Daud, W. R. W; Fisal, Z; Alam, M. Z. (2000). Multiphase oscillatory flow in a baffled tube. Journal of Industrial Technology, 9(2), 75-84', 'li'),
(7, 'Alam, M. Z.; Muyibi, S. A.; Mansor, M. F.; Wahid, R. (2004). Production of activated carbon from palm oil mill effluent sludge and its adsorption characteristics for phenol removal. IFMBE Proceedings, 7, 173-176', 'li'),
(8, 'Alam, M. Z.; Muyibi, S. A.; Jamal, P.; Jalal, K. C. A. (2005). Potential microbes isolated from wastewater treatment plants for effective sludge bioconversion, IWA Water and Environmental Management Series, IWA Publishing, (p-479-482). UK.', 'book_chapter'),
(9, 'Alam, M. Z.; Muyibi, S. A. (2010). Solid state bioconversion of oil palm biomass by white-rot fungus for ligninase production in rotary drum bioreactor. (MY….).', 'granted'),
(10, 'Fakhru’l-Razi, A.; Alam, M. Z.; Molla.A. H. (2003). Treatment of domestic wastewater treatment plant sludge by liquid state bioconversion process. (Malaysian Patent filed: PI 20030941).', 'filed'),
(11, 'Alam, M. Z. (1996). Crystallization of ZnSO4 7H2O and FeSO4 7H2O. BSc Thesis', 'technical_reports'),
(12, 'Takriff, M. S.; Daud, W. R. W.; Fisal, Z.; Alam, M. Z. (1999). Hydrodynamic investigations of multiphase oscillatory flow in a baffled tube. Regional Symposium on Chemical Engineering, Vol. II, 22-24 November, Songkhla, Thailand, ppB55-1-B55-7', 'conference_publications'),
(13, 'Molla, A. H.; Fakhru’l-Razi, A.; Abd-Aziz, S.; Hanafi, M. M.; Alam, M. Z. (2001). In-vitro compatibility evaluation of fungal mixed culture for bioconversion of domestic wastewater sludge. World Journal of Microbiology and Biotechnology 17 (9), 849-856. [JIF: 0.945 (2008)]', 'journal'),
(14, 'Fakhru’l-Razi, A.; Alam, M. Z.; Abd-Aziz, S.; Molla, A. H. (2002). Filamentous fungi in Indah Water Konsortium (IWK) sewage treatment plant for biological treatment of domestic wastewater sludge. Journal of Environmental Science and Health, A37(3), 309-320. [JIF: 1.002 (2008)]', 'journal'),
(15, 'Fakhru’l-Razi, A.; Molla, A. H.; Alam, M. Z. (2003). Solid state bioconversion of domestic pollution control. (Malaysian Patent filed: PI20070289)', 'filed'),
(16, 'Alam, M. Z., Kabbashi, N. A., Ismail, A. F. (2008). Direct bioconversion of empty fruit bunches for bioethanol production. (Malaysian Patent filed: PI20082672)', 'filed'),
(17, 'Kabbashi, N. A.; Alam, M. Z.; and Ainuddin, M. (2007). Bio-Composting Process Development by SSF for Utilization Agro-Industrial Wastes, Biotechnology Book Series-IFMBE Proceedings (Vol. 15), Part 11, (p.464-468). Springer-Verlag Berlin Heidelberg.', 'book_chapter'),
(18, 'Alam, M. Z.; Kabbashi, N. A.; Razak, A. A. (2007). Liquid state bioconversion of domestic wastewater sludge for bioethanol production. Biotechnology Book Series-IFMBE Proceedings (Vol. 15), Part 11, (p.479-482). Springer-Verlag Berlin Heidelberg.', 'book_chapter'),
(19, 'Alam, M. Z.; Fakhru’l-Razi, A.; Idris, A.; Abd-Aziz, S. (2001). Bioconversion of wastewater sludge by immobilized microbial treatment. Proceedings of International Water Association (IWA) Conference on water and wastewater management for developing countries, Vol. 1, 29-31 October, Kuala Lumpur, Malaysia, pp343-351.', 'conference_publications'),
(20, 'Fakhru’l-Razi, A.; Alam, M. Z. (2002). Use of Aspergillus niger to landfill leachate treatment. 2nd World Engineering Congress (WEC), 22-25 July, Sarawak, Malaysia.\r\n', 'conference_publications');

-- --------------------------------------------------------

--
-- Table structure for table `research_grants`
--

CREATE TABLE `research_grants` (
  `project_name` varchar(255) NOT NULL,
  `project_title` text NOT NULL,
  `source` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `ayo` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `research_grants`
--

INSERT INTO `research_grants` (`project_name`, `project_title`, `source`, `role`, `ayo`, `id`) VALUES
('Project 1', 'IWK-UPM sludge management and disposal (Project-6): Biodewatering of STP sludge—two-stage', 'Indah Water Konsortium (IWK), Malaysia', 'Co-researcher(collaboration research)', 'RM250,000(2001-2003)[JP:20;CP:3;P:2;PhD:2; M:2]', 1),
('Project 2', 'IWK-UPM sludge management and disposal (Project-6): Biodewatering of STP sludge—two-stage', 'Indah Water Konsortium (IWK), Malaysia', 'Co-researcher(collaboration research)', ' RM250,000(2001-2003)[JP:20;CP:3;P:2;PhD:2; M:2]', 2),
('Project 3', 'IWK-UPM sludge management and disposal (Project-6): Biodewatering of STP sludge—two-stage', 'Indah Water Konsortium (IWK), Malaysia', 'Co-researcher(collaboration research)', 'RM250,000(2001-2003)[JP:20;CP:3;P:2;PhD:2; M:2]', 3),
('Project 4', 'IWK-UPM sludge management and disposal (Project-6): Biodewatering of STP sludge—two-stage', ' Indah Water Konsortium (IWK), Malaysia', 'Co-researcher(collaboration research)', 'RM250,000(2001-2003)[JP:20;CP:3;P:2;PhD:2; M:2]', 4);

-- --------------------------------------------------------

--
-- Table structure for table `research_interest`
--

CREATE TABLE `research_interest` (
  `id` int(11) NOT NULL,
  `interest` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `research_interest`
--

INSERT INTO `research_interest` (`id`, `interest`) VALUES
(1, ' New development of biological processes for the treatment of water/wastewater/wastewater sludge for environmentally friendly management, recycling and disposal.'),
(2, ' Bioconversion of industrial, domestic and agricultural waste for value added products i.e. biofuels (bio-ethanol), enzymes (lignin peroxidase, cellulase, amylase & lipase), compost (bio-fertilizer), animal feed, organic acid (citric acid) in liquid- and solid-state.'),
(3, ' Biodiesel production from waste frying oils/palm sludge oil/crude palm oil by esterfication/transesterification processes.'),
(4, 'Microbial fermentation technology and downstream processing for biotechnological products'),
(5, 'Bioprocess optimization and modeling.'),
(6, 'Development of biosorbents for bioseparation processes.'),
(7, ' Development of carbon nanotubes (CNTs) for water treatment.');

-- --------------------------------------------------------

--
-- Table structure for table `supervision`
--

CREATE TABLE `supervision` (
  `type` varchar(255) NOT NULL,
  `graduation_type` varchar(255) NOT NULL,
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `students_origin` varchar(255) NOT NULL,
  `supervision` varchar(255) NOT NULL,
  `degree_year` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supervision`
--

INSERT INTO `supervision` (`type`, `graduation_type`, `id`, `title`, `students_origin`, `supervision`, `degree_year`) VALUES
('completed', 'postgraduate', 1, 'Biodewaterability and liquid state bioconversion of activated sludge under non-sterilized conditions', 'A Mannan Sarkar(Bangladesh)', 'Co-supervisor', 'MSc/2006'),
('in_progress', 'undergraduate', 2, 'Animal feed production from agricultural residues by solid state bioconversion', 'Tijani Ruqayyah (Nigeria).', 'Co- supervisor', 'PhDIn progress'),
('completed\r\n', 'postgraduate', 3, 'Solid state fermentation of rice straw for production of cellulases by selected fungi', 'Md. Munir Heyat Khan', 'Co-supervisor', 'MSc/2007'),
('completed\r\n', 'postgraduate', 4, 'Process optimization on production of lignin peroxidase from sewage treatment plant sludge in a stirred tank bioreactor and its biodegradation of synthetic dyes.', 'Mariatul F. Mansor(Malaysia)', 'Supervisor', 'MSc/2008\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_info`
--
ALTER TABLE `other_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publication`
--
ALTER TABLE `publication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research_grants`
--
ALTER TABLE `research_grants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `research_interest`
--
ALTER TABLE `research_interest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervision`
--
ALTER TABLE `supervision`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `other_info`
--
ALTER TABLE `other_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `publication`
--
ALTER TABLE `publication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `research_grants`
--
ALTER TABLE `research_grants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `research_interest`
--
ALTER TABLE `research_interest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `supervision`
--
ALTER TABLE `supervision`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
