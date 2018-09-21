-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2018 at 07:21 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yunhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ome Itotoh', 'omescroll@gmail.com', '$2y$10$rvRkUozRfFrPLM81mT3Cxu8vsDTUyf02MofSb7QMCQDLyK9y9YH.y', NULL, '2017-08-10 16:31:21', '2017-08-22 20:36:14'),
(2, 'Omemen', 'ernest@gmail.com', '$2y$10$8UM0ZFxTIcFFvCU0ieuiyuv.VGzOJx/aoHXgMsIURRBfzfYP32zHy', NULL, '2017-08-10 16:43:37', '2017-08-10 16:43:37'),
(4, 'Salamatu', 'Salamatu@gmail.com', '$2y$10$.rfZu07KOIGaUpgKOfNPr.tDoNIIr45TAhtdPrpQioMWO4cnb5XV2', NULL, '2017-08-23 16:39:21', '2017-08-23 16:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `article_images`
--

CREATE TABLE `article_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_images`
--

INSERT INTO `article_images` (`id`, `image_link`, `created_at`, `updated_at`) VALUES
(1, 'welcome-to-yunhouse.png', '2018-09-21 08:14:55', '2018-09-21 08:14:55');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `download_pdf` varchar(256) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `body`, `download_pdf`, `img`, `created_at`, `updated_at`) VALUES
(9, 'Cyril Naikule', '<p>Cy, as he is known to everyone in Yunhouse, is named after a Welshman who was a guest at his naming ceremony (c1890). The Welsh namesake had been a chef in the service of an uncle who swapped from selling slaves to selling spices to the same English trading company that facilitated -with multiple treaties – The Pacification Of The Natives in Cy’s colonial country.</p>\r\n<p>Cy’s European education began with German missionaries but finishes in an English school because the Berlin Carve-up inserted a national boundary bang in the middle of his ethnic domain. This is one childhood experience, Cy claims, that set his African Brain Cell in perpetual motion of anger.</p>\r\n<p> </p>\r\n<p>Cy’s numerous escapades as the Angry Man Of Africa are widely publicised and they are the live wire of the story of Yunhouse. His initial encounter with the co-anchor of Yunhouse, Lekwot Abaka, is to pick a fight because he is nauseated by an article Lekwot contributed to the maiden edition The Africa Picture [No spitting!]. But there is no fight. Instead, the two bond into a partnership that becomes the foundation on which Yunhouse would stand.</p>\r\n<p> </p>\r\n<p>Cy organises many protests against the manifestations of The Pacification Of The Natives. He coordinates the race riots that greet the lower court ruling against the Africans in the First Battle For Yunhouse. He leads the march – to the Colonial Office – against inclusion of Africans in the World War II. He persists in his personal expression of opposition to WW II by running in the streets during bombs raids in London. Fearing for his safety, fellow Berliners organise a voyage back home to Africa. On his native soil, he tries unsuccessfully to stop young Africans from being recruited to fight for the English Crown. He later organises the same youngby ex-soldiers demanding payment for their sacrifices in the European war. He fights against the imposition of Clan Tax on his people. He is arrested severally by the Colonial Administration. He travels back to London to formally present his peoples’ case to the British Government. Colonial security reports refer to him as “communist”, “warrior”, “agitator”, “terrorist”, “traitor”, etc etc. The contents of the Colonial Office’s dossier on him make the bulk of the evidence for the opposition’s case in The First Battle For Yunhouse.</p>\r\n<p> </p>\r\n<p>Cy is an accomplished academic scholar with two-and-half Ph D’s. He read all volumes on the subject of Africa in the University Library. According to him, he became a compulsive scribbler from the day an Irish missionary gave him his first lead pencil. His last years are spent working mainly on his memoir, Something To Write Home About. The manuscript inspires the young African research journalist who is the narrator of the story of Yunhouse.</p>\r\n<p> </p>\r\n<p>Cy dies (c1994) while working on the case against the takeover of Yunhouse by rival Adventurers Club.</p>', 'cyril', 'cy.jpg', '2017-08-09 11:56:19', '2017-08-09 11:56:19'),
(10, 'Lekwot Abaka', '<p>Uncle Lekwot to all Yunis and every person who has anything to do with Yunhouse. Also known as the Cool Head Of Africa, in contrast with his lifelong companion, Cy – the Angry Man Of Africa. Both heads clinch at their first meeting into a kind of thermocouple generator that would power the Yunhouse African dynamism for nearly a century. Beginning with the formation of the Berliner Cult in a basement flat in North London, Uncle Lekwot goes on to chair all critical meetings in Yunhouse until he is voted The Man Who Has Chaired More Meetings On Africa Than Any Human Dead Or Alive.</p>\r\n<p>He remains the Paramount Yun-Chief till the end of his life (c1999).</p>', 'lekwot', 'Lekwot.jpg', '2017-08-09 11:59:15', '2017-08-09 11:59:15'),
(11, 'Ogesayi Mawe', '<p>Fellow Berliners fondly call him My-Way, a pet name he acquired when, at the first Berliner Cult initiation rites, he pledges to dedicate his legal studies to bringing Colonialism to book. Internationally, he is The Scourge Of Colonialism, being the only Core-23 Member who survives colonialism’s firing power to become the first president of his liberated country. He made Yunism an ideological brand worldwide.</p>\r\n<p>Mawe’s dream project is for his country to grow enough kola nuts to dominate the world stimulant market. The tea and coffee lobby of Europe and America not only shoot down his dream but had him overthrown by his own army. He is marooned in a remote and unknown Pacific Island from where he writes widely publicised stinkers to all those who betray Africa. Hence the legend of The One And Only Wandering President whose shadow continues to loom large in Yunhouse.</p>\r\n<p> </p>\r\n<p>Mawe returns to Yunhouse shortly before Lekwot Abaka’s death. He successfully leads the campaign against the amalgamation of Yunhouse with rival establishment of The Africa Adventurers Club.</p>', 'ogesayi', 'Ogesayi.jpg', '2017-08-09 12:00:26', '2017-08-09 12:00:26'),
(12, 'Big Mnama', '<p>He was a cute looking toddler spotted (in the company of his gardener father) on the lawns of a Colonial State House by an English aristocrat (Lord Kemp) visiting his cousin, the Governor General. Mnama was adopted by gubernatorial fiat. He is given everything his foster father could give, including a ring with the family heraldic crest. He gets classic upper class education, public school, Oxford, etc. Wherever he goes, the impression of his six-foot-six persona was the same: “an overpowering aura of an extraordinary specimen of homo sapiens” – a newspaper report. He speaks very little, as Cy quickly observes when the two meet while Big Mnama is perambulating in the campus of London University in search of his next move in life. No one is certain if he ever uttered ‘We shall never be pacified!’. But he found the Berliners to be good for a laugh. And he tells his father so. His father confirms that it was unfair for the Berliners to be evicted from their Camden Town flat simply because they enjoy good laughs at their meetings. Lord Kemp wills his Hampstead estate to Big Mnama and his fellow Berliners. The will is challenged by Big Mnama’s niece and the First Battle For Yunhouse ensues. Also Lord Kemp’s death induces a crisis for the English constitution: could Big Mnama inherit his father’s title or not?</p>', 'mnama', 'Mnama.jpg', '2017-08-09 12:01:37', '2017-08-09 12:01:37'),
(13, 'The Africa Picture (No Spitting)', '<p>This first ever pan-Africa news magazine is launched in the second decade of the twentieth century from the publishing stable of the World Chronicle [WC] whose publisher had an uncle who sat as a British delegate at the 1884 Berlin Conference. The publication is conceived as a medium for Englishmen to cross-fertilise their ideas and experiences of Africa. The publisher does not have African readership in mind. Yet the magazine becomes a must-read for Africans living London. The magazine is, without any doubt, the best – if not the only – chronicle of The Pacification Of The Natives. Palaver Hall library has all the issues of the magazine.</p>', 'the-africa-picture', 'Africa_pic.jpg', '2017-08-09 12:02:20', '2017-08-09 12:02:20'),
(14, 'Afrinc', '<p>This is a Purpose-built African Computer_Designed And Used Exclusively By Non-Africans. It is based in Liechtenstein. Yunhouse authorities manage to obtain a full printout of Afrinc’s database. There is strong evidence to suggest that The Computer’s bowels contains everything ever printed in The Africa Picture [No Spitting!]. It is also believed this computer may have data on everything there is to know about Yunhouse and more.</p>', 'afrinc', 'afrinc.jpg', '2017-08-09 12:03:11', '2017-08-09 12:03:11'),
(15, 'John O\'Gafla', '<p>An Englishman and Editor-in-chief of The Africa Picture [No Spitting!] for over sixty years. His involvement with Africa begins in Yunhouse following introduction by Big Mnama who knew him earlier from Oxford. His journalistic career begins with freelance contributions of articles on the proceedings of Palaver Hall of Yunhouse. ‘I am an African’ John tells the publisher in the interview for full-time job on The Picture. On getting the job, John checks out of Yunhouse. It would be a glorious career that earns him knighthood from the English Crown as well recognition as the Number One Africanist (he claims copyright for the coinage). His numerous obituaries referred to him as Mr Africa: The Man Who Most Probably Has Written Africa More Times Than Anyone Else Under The Sun.</p>\r\n<p>John O’Gafla is the founder member of the first ever batch of The Africa Correspondents, an informal pints gang of real ale enthusiasts in Fleet Street which metamorphoses into The Africa Adventurers Club. His one African dream is to witness the amalgamation of Yunhouse with The Adventurers. But he, of all people, knows that the task would be as difficult as it would be for him (certificated obese all his life) Climbing Mount Kilimanjaro (title of his unpublished memoirs). Especially given the well-known fact that he is the principal architect in the establishment of AFC (Africa Freedom Council) with which reconciliation with Yunhouse is beyond imagination.</p>', 'john-gafla', 'John.jpg', '2017-08-09 12:04:01', '2017-08-09 12:04:01'),
(16, 'The African Adventurers Club', '<p>Members of the Adventurers Club do not call themselves Africanists. But everyone else does. And its founder John O’Gafla is not only happy to be called an Africanist, he even claims credit for coining the term. The members say the Adventurers is a place to meet and discuss Africa objectively which, the members believe, is not possible in the highly charged atmosphere of Yunhouse.</p>', 'african-adventurers-club', 'AdventurersClub.jpg', '2017-08-09 12:04:48', '2017-08-09 12:04:48'),
(17, 'The Africa Freedom Council', '<p>A political movement that germinates from a public lecture by an Oxford University Don at the Adventurers Club. The Professor gets branded William Wilberforce II (after the famous Englishman who campaigned against slavery and slave trade) for arguing that colonialism oppresses Africans’ fundamental human rights and therefore offensive to English sense of justice. AFC launching is a grand ceremony attended by dozens of invited African tribal chiefs who voyage to London in a special vessel named SS FREEDOM.</p>', 'africa-freedom-council', 'freedom_council.jpg', '2017-08-09 12:05:30', '2017-08-09 12:05:30'),
(18, 'Sir Emmanuel Nkungolo', '<p>A talented church organist who is sponsored by the missionaries to study music in London. He is a Berliner – a foundation member of Yunhouse. He volunteers to spy on AFC [Africa Freedom Council] by faking public defection from Yunhouse to The Adventurers. He founds his country’s AFC Chapter on the platform of which he gets elected as the first president to whom the colonial administration hands power. He does not go back to Yunhouse.</p>', 'emmanuel-nkungolo', 'Nkungolo.jpg', '2017-08-09 12:06:21', '2017-08-09 12:06:21'),
(19, 'Professor Alphonsus Do-Remi', '<p>A prolific social scientist whose regular publications on Africa is syndicated in many countries and languages. Probably the first African to formally accept the appellation of Africanist. He personally prefers that his academic mantra be referred to as ‘Africaism’ – ‘African intellectualism without tears’. He is the only known African with formal membership of the Adventurers Club. Upon being elected as President of The Adventurers, the Professor undertakes to unite Yunhouse with The Adventurers. His ambition provokes The Second Battle For Yunhouse.</p>', 'professor-alphonsus-do-remi', 'Alphonsus.jpg', '2017-08-09 12:07:18', '2017-08-09 12:07:18'),
(20, 'Beryl Fairbanks', '<p>The devoted Yunhouse Secretary whom everyone knows but who hardly talks to anyone. The young lady from Shropshire is sightseeing at Westminster when she is swept – literally – off her feet by the tumult that greets the Law Lords’ verdict that Africa House rightfully belongs to the Africans. Seated in the electrified atmosphere of jubilation, she humbly asks if there is anything she could do. She is asked to take notes. And she begins to take notes, and continues to do so from her permanent position at the right hand of the Palaver Hall Chairman (Uncle Lekwot). Four decades later she is voted The Secretary Who Has Typed Africa More Times Than Any Secretary In The Whole World. The full record of the proceedings of Palaver Hall is Beryl’s creation.</p>', 'beryl-fairbanks', 'Beryl.jpg', '2017-08-09 12:08:08', '2017-08-09 12:08:08'),
(21, 'The Berliner Cult (a.k.a The Core-23)', '<p>Initially there were eleven Africans who resolved to form themselves into the Berliner Cult, their motto: We Shall Never Be Pacified!. They mixed their bloods in a jar of hot water and drank it. Ritual is repeated with each additional member until membership reached twenty-three (The Core-23), the number that appended their signatures to the possession documents of Yunhouse after fighting and winning the First Battle Of Yunhouse. The Berliner Cult’s anti-colonialism stance is the essence of the Yunhouse story which concludes with Ogesayi Mawe [One And Only Wandering President] as the last surviving  member as The Core-23</p>', 'the-berliner-cult', 'Berliner.jpg', '2017-08-09 12:08:55', '2017-08-09 12:08:55'),
(22, 'Palavar Hall', '<p>Here, discussion on any subject can be slated – as long as it is about Africa.</p>', 'palaver-hall', 'Palavar.jpg', '2017-08-09 12:09:43', '2017-08-09 12:09:43');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `tale_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `debates`
--

CREATE TABLE `debates` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referenced` tinyint(4) NOT NULL DEFAULT '0',
  `active_debate` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `published` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `download_pdf` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coming_soon` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `debates`
--

INSERT INTO `debates` (`id`, `title`, `sub_title`, `body`, `author`, `referenced`, `active_debate`, `published`, `slug`, `download_pdf`, `image_link`, `coming_soon`, `created_at`, `updated_at`) VALUES
(1, 'Whither African Freedom?', NULL, '<p><strong>EACH AND EVERY</strong> African country has a national day. In the beginning National Days were full of pomp and pageantry, and leaders would beat their chests and wax lyrical about national pride. But it is all subdued now. National Days are still public holidays, maybe parade, maybe broadcast by the leader. And you don’t need an opinion poll to determine that the majority of the population do not connect National Day with the momentous occasion when African countries began life as independent nations.</p>\r\n\r\n<p>All National Days on the continent of Africa started off as Independence Days. So all National Days mark the day when modern African nations took off, so to speak. But how? Some say it was the day when the nations shook off their colonial masters: Some call it achieving independence. Others say the countries were liberated from colonialism. So the countries must have existed before the first National Day. True. So what about the general feeling that the National Day marked the birth of the country? So when were the countries actually born? Answer: <em><strong>1884 - Africa’s Annus Horribilis!</strong></em> Really!</p>\r\n\r\n<p>But how many Africans today are aware of this horrible year when the destiny of Africa and African peoples was hijacked and bastardised - literally!?</p>\r\n\r\n<p>Africa was transformed: “The transformation was rained on our people. A transformation that would disfigure us permanently. A transformation that would fuel revolution without evolution. The transformation has no father. It has no mother either. Yet the transformation is compelling us. It is propelling us! And it is going to impale us. A nasty, bastard transformation!” - Yunhouse<strong> Principal Character, Cyril Naikule, writes in his memoirs, Something To Write Home</strong></p>\r\n\r\n<p><strong>The </strong>Yunhouse<strong> Story</strong> is about Africans who totally reject everything about the Berlin Conference of 1884: the ridiculousness of Europeans gathering around a map of Africa to slice to up an entire continent, the absurdity that they can claim the slices as colonial possessions, the inhumanity that they can take possession of the portions together with the inhabitants who were to be humiliatingly coerced into becoming citizens of some of sort by a process called the pacification of the natives . Yunhouse residents form themselves into the <a href="../../yuntale/the_berliner_cult"><strong>Berliner Cult (see tale)</strong>.</a> Yunhouse war cry: <strong>We shall never be pacified!</strong></p>\r\n\r\n<p>Ghana was the first African country to break the colonial yoke on 6 March 1957. Kwame Nkrumah told the other Africans, “Ghana’s independence is meaningless unless the whole of Africa is liberated from colonialism”.</p>\r\n\r\n<p>Forty years later Julius Nyerere of Tanzania reminded Africans<strong> (<a href="../../debate/africa_must_unite">Africa Must Unite</a>)</strong>: “Forty years ago we recognised Ghana’s independence as the first triumph in Africa\'s struggle for freedom and dignity. It was the first success of our demand for the international respect which is accorded free peoples....For centuries we had been oppressed and humiliated as Africans. The humiliation of Africans became the glorification of the others. So we felt ourAfrican-ness. We knew that we were one people, and that we had one destiny regardless of the artificial boundaries which colonialist had invented. Since we were humiliated as Africans we had to be liberated as Africans”</p>\r\n\r\n<p><img src="/images/articles/kwame.jpg" alt=""></p>\r\n\r\n<p>Readers of <strong>The </strong>Yunhouse<strong> Story</strong> say the novel’s characters resemble real life African freedom fighters, such as Kwame Nkrumah and Julius Nyerere. Naturally, recent African history is definitely the source of inspiration. But there are critical differences in experiencing these characters. The novel is an excuse to dream without boundaries: if it can be imagined, the characters will feel it, say it and do it. Not quite the same as when one sits in a live audience and hears Kwame Nkrumah say: “Seek ye first the political kingdom and the rest shall be added unto thee”. And what if we took the wrong steps in this political kingdom?, a member of the audience could ask. Don’t worry, says Kwame Nkrumah, most important is that “We have the right to govern, and even misgovern ourselves”.</p>\r\n\r\n<p>\r\n<img src="/images/articles/julius.jpg" alt=""></p>\r\n\r\n<p>What do we do now?, we ask these our inspiring leaders. Julius Nyerere answers: “<em><strong>A new generation of·self-respecting Africans should spit in the face of anybody who suggests that our continent should remain divided in the shame of colonialism...Unity will not end our weakness, but until we unite, we cannot even begin to end that weakness...The second phase of the liberation of Africa is going to be much harder than the first. But it can be done. It must be done. Empower Africa through unity, and Africa shall be free, strong and prosperous...My generation led Africa to political freedom. The current generation of leaders and peoples of Africa· must pick up the flickering torch of African freedom, refuel it with their enthusiasm and determination, and carry </strong></em>it it<em><strong> forward</strong></em>”</p>', 'Mr. Ad\'Obe Obe', 0, '1', '1', 'whither_african_freedom', 'whither_african_freedom', '', 'africa_failed_continent.jpg', '2018-09-20 18:46:53', '2018-09-21 17:16:21'),
(2, 'Africa must unite', 'Public lecture delivered in Accra to mark Ghana\'s fortieth Independence Day', '<p>FORTY YEARS AGO the people of Ghana\r\ncelebrated the raising of the flag of their independence\r\nfor the first time. Throughout Africa people\r\ncelebrated - in solidarity \\vith Ghana but also for\r\nthemselves. For the liberation of Africa was a\r\nsingle strnggle with many fronts.\r\nGhana ·s independence from colonial rule in\r\n195 7 \\\\"as recognised for\\\\ hat it was: the beginning\r\nof the end of colonialism for the \\vhole of Africa.\r\nFor centuries we had been oppressed and humiliated\r\nas Africans. We were hunted and enslaved as Africans, and wc were colonized as\r\nAfricans.\r\nThe humiliation of Africans became\r\nthe glorification of the others. So\r\nwe felt our African-ness. We knew that\r\nwe were one people, and that we had one\r\ndestiny regardless of the artificial\r\nboundaries which colonialist had invented.\r\nSince ,ve were humiliated as Africans we had to be liberated as Africans.\r\nSo forty years ago we recognised your independence\r\nas the first triumph in Africa\'s struggle\r\nfor freedom and dignity. It was the first success of\r\nour demand to be accorded the international respect\r\nwhich is accorded free peoples.\r\nGhana was the beginning, our first liberated\r\nzone. Thirty-seven years later - in 1994 - we\r\ncelebrated our final triumph when apartheid was\r\ncrnshed and Nelson Mandela was installed as the\r\nPresident of South Africa. Africa\'s long struggle\r\nfor freedom was over.\r\nBut Ghana was more than just the beginning.\r\nGhana inspired and deliberately spearheaded\r\nthe independence struggle of the rest of Africa\r\nI was a student in Edinburgh University\r\n,:vhen Kwame Nkrnmah was released from prison\r\nto be Leader of Government Business in his first\r\nelected government. The deportment of the Gold\r\nCoast students changed. The way they carried\r\nothers, the way they looked at the world at large,\r\nchanged overnight. They even looked different.\r\nThev \\\\·ere not arrogant, they were not overbearing.\r\n- they were not aloof, but they were proud,\r\nalready thev felt free and they exuded that quiet\r\npride 􀄕f self-confidence of freedom without which\r\nhumanity is incomplete.\r\nAnd so five years later when the Gold Coast\r\nbecame independent, Kwame Nkrumah invited us,\r\nthe leaders of the various liberation movements in\r\nAfrica, to come and celebrate\r\nwith you. hvas among the many\r\ninvitees. Then Nkrumah made\r\nthe famous declaration, that\r\nGhana\'s independenc􀄖 was\r\nmeaningless unless the whole of\r\nAfrica was liberated from colonial rule.</p>\r\n\r\n<p>Kwame Nkrumah went\r\ninto action almost immediately.\r\nI\r\nIn the following year he called the Liberation\r\nMovements to Ghana to discuss the conunon strategy\r\nfor the liberation of the continent from colonialism.\r\nIn preparation for the African Peoples Conference\r\nthose of us in East and Central Africa met ,\r\nin Mwaqza in Tanganyika, to discuss our possible\r\ncontribution to the forthcoming conference. That\r\nconference lit the liberation torch throughout colonial\r\nAfrica.\r\nKwame Nkrumah was your leader, but he\r\n\\vas our leader too: for he was an African leader.\r\nPeople are not gods. Even the best have their faults,\r\nand the faults of the great can be very big. So\r\nKwame Nkrumah had his faults. But he was great\r\nin a purely positive sense. He was a visionary. He\r\nthought big, but he thought big for Ghana and its\r\npeople and for Africa and its people. He had a great\r\ndream for Africa and its peoples. He had the wellbeing\r\nof our peoples at heart. He was no looter. He did not have a Swiss bank account. He died poor.\r\nShakespeare vvrote that the evil that men do lives\r\nafter them, but good is oft interred with their\r\nbones.\r\nAnother five years later, in May 1963,\r\nthirty-two independent African States met in\r\nAddis Ababa, founded the Organisation of African\r\nUnity, and established the liberation Committee\r\nof the new organisation, charging it with\r\nthe duty of co-ordinating the liberation struggle\r\nin those parts of Africa still under colonial rule.\r\nThe following year, 1964, the OAU met in\r\nCairo. That Cairo sununit is remembered mainh·\r\nfor the declaration of the Heads of States of\r\nindependent Africa to respect the borders inherited\r\nfrom colonialism. The principle of noninterference\r\nin internal affairs of member states\r\nof the OAU had been enshrined in the Charter\r\nitself, respect for the borders inherited from\r\ncolonialism comes from the Cairo Declaration of\r\n1964.</p>\r\n\r\n<p>In 1965, the OAU met in Accra. That\r\nsummit is not well remembered as the founding\r\nsummit in 1963, or the Cairo sunm1it of 1964.\r\nThe fact that Kwame Nkrumah did not last long\r\nas Head of State of Ghana after that summit may\r\nhave contributed to the comparative obscurity of\r\nthat important summit.\r\nBut I want to suggest that the reason why\r\nwe do not talk much about that summit is probably\r\npsychological: it was a failure. That failure\r\nstill haunts us today.\r\nThe founding fathers of the OAU had set\r\nthemselves two major objectives: the total liberation\r\nof our continent from colonialism and settler\r\nminorities, and the unity of Africa.\r\nThe first objective was expressed through\r\nimmediate establishment of the Liberation Committee</p>\r\n\r\n<p>by the founding Summit. The second\r\nobjective was expressed in the name of the Organisation\r\n- it is the Organisation of African\r\nUnity.\r\nCritics could say that the Charter of itself,\r\nwith its great emphasis on the sovereign independence\r\nof each member state, combined with\r\nthe Cairo Declaration on the sanctity of the·\r\ninherited borders, makes it look like the ·Organisation\r\nof African Disunity\'. But that would be\r\ncarrying criticism too far and ignoring the objective\r\nreasons which led to the principles of noninterference\r\nin the Cairo Declaration.\r\nWhat the founding fathers - certainly a\r\nhard core of them - had in mind \\Yas genuine\r\ndesire to move Africa towards greater unity. We\r\nloathed balkanization of the continent into small\r\nunviable states, most of which had borders,, hich\r\ndid not make ethnic or geographical sense. The\r\nCairo Declaration was prompted by a profound\r\nrealisation of the absurdity of those borders. It\r\nwas quite clear that some adventurers would try\r\nto change those borders by force of arms. Indeed,\r\nit was already happening. Ethiopia and Somalia\r\nwere at war over inherited borders.\r\nKwame Nkrumah was opposed to\r\nbalkanization as much as he was opposed to\r\ncolonialism in Africa. To him and to a number of\r\nus, the two - Balkanization and Colonization -\r\nwere twins. Genuine liberation of Africa had to\r\nattack both twins. A struggle against colonialism\r\nmust go hand in hand with a struggle against the\r\nbalkanization of Africa.\r\nK wame Nkrumah was the great crusader\r\nfor African unity. He wanted the Accra summit\r\nof 1965 to establish a Union Govenm1ent for the\r\nwhole ofindependent Africa. But we failed. The\r\none minor reason is that K wame, like all great\r\nbelievers, underestimated the degree of suspicion\r\nand animosity which his crusading passion\r\nhad created among a substantial number of his\r\nfellow Heads of States. The major reason was\r\nlinked to the first: already too many of us had a\r\nvested interest in keeping Africa divided.\r\nPrior to independence of Tanganyika, I\r\nhad been advocating that East African countries\r\nshould federate and then achieve independence as\r\na single political unit. I had said publicly that I\r\nwas willing to delay Tanganyika\'s independence\r\nin order to enable all three mainland countries to\r\nachieve their independence together as a single\r\nfederated state. I made the suggestion because of\r\nmy fear, proved correct by later events, that it\r\nwould be very difficult to unite our countries if\r\nwe let them achieve independence separately.</p>\r\n\r\n<p>Once you multiply national anthems, national\r\nflags and national passpo1ts, scats at the United\r\nNations, and individual entitled to 21 guns salute,\r\nnot to speak of a host of ministers, Prime Ministers,\r\nand envoys, you would have a whole amw\r\nof powerful people with invested interests i;1\r\nkeeping Africa balkanized. That \\\\\'as "·hat\r\nNkrumah encountered in 1965.\r\nAfter the failure to establish the Union\r\nGovernment at the Accra Summit of 1965. I\r\nheard one Head of State express with relief that\r\nhe was happy to be returning home to his countn·\r\nstill Head of State. To this day I cannot teil\r\n"·hethcr he "as serious or joking. But he ma􀇊·\r\n,,d I have been serious. because K wame Nkrumah\r\n\\\\\'as very serious and the fear of a number of us\r\nto lose our precious status \\\\\'as quite palpable.\r\nBut I never believed that the 1965 Accra\r\nsummit would have established a Union Government\r\nfor Africa. When I say that we failed, that\r\nis not what I mean, for that clearly was an\r\nunrealistic objective for a single summit. What I\r\nmean is that we did not even discuss a mechanism\r\nfor pursuing the objective of a politically united\r\nAfrica. We had a Liberation Committee al read\\\'.\r\nWe should have at least have a Unity Committ􀇋c\r\nor undertaken to establish one. We did not. And\r\nafter K warnc Nkrumah was removed from the\r\nAfrican political scene nobody took up the challenge\r\nagain.\r\nSo my remaining remarks have a confession\r\nand a pica. The confession is that we of the\r\nfirst generation leaders of independent Africa\r\nhave not pursued the objective of African Unity\r\nwith vigour, commitment and sincerity that it\r\ndeserves. Yet that docs not mean that unity is now\r\nirrelevant.\r\nDocs the experience of the last three or\r\nfour decades of Africa\'s independence dispel the\r\nneed for African Unity? With our success in the\r\nliberation struggle, Africa today has 53 independent\r\nstates, 21 more than those which met in\r\nAddis Ababa in May 1963. If numbers were\r\nhorses, Africa today would be riding high! Africa\r\nwould be the strongest continent in the world, for\r\nit occupies more scats in the UN General Assembly\r\nthan any other continent. Yet the reality is\r\nthat ours is the poorest and weakest continent in\r\nthe world. And our weakness is pathetic.\r\nUnity \\\\\'ill not end our \\\\\'Cakncss, but until\r\n\\\\\'C unite, we cannot even begin to end that\r\nweakness.\r\nSo this is my pica to the new generation of\r\nAfrican leaders and African peoples: work for 11nirv with firm conviction that without 11nit1• , . ,\r\nthere is no.fiu11re.for A.fi·ico. That is. of cou·rse.\r\nassuming that \\\\\'C still want to have a place under\r\nthe sun.\r\nI reject the glorification of the nation-state\r\n\\\\\'hich \\\\\'C have inherited from colonialism. and\r\nthe artificial nations ,,e arc trying to forge from\r\nthat inheritance. We arc all Africans trying very\r\nhard to be Ghanaians or Tanzanians. Fortun􀇌cl\\\'\r\nfor Africa we have not been completely su;cecded\r\nThe outside "orld hard!􀇍 recognises our\r\nGhanaian-ness orTa11z,:111ia11-11ess. What the outside\r\n\\\\Orld recognises about us is our Africanness.\r\nHitler "as a Germ:111. Mussolini "as an\r\nItalian. Franco ,,·as a Spaniard. Salazaar ,,as\r\nPortuguese. Stalin was a Russian or a Georgian.\r\nNobody expected Churchill to be ashamed of\r\nHitler. He ,,as probably ashamed of Chamberlain.\r\nNobody expected Charles de Gaulle to be ashamed of Hitler, he was probably ashamed of\r\nthe complicity of Vichy. It is Germans. and\r\nItalians and Spaniards and Portuguese who feel\r\nuneasy about those dictators in their respective\r\ncountries.\r\nNot so in Africa. Jdi Amin was in Uganda,\r\nbut of Africa. Jean Bokassa \\\\\'as in Central\r\nAfrica, but ofA fricans. Some oft he dictators are\r\nstill active in their respective countries, but they\r\narc all of Africa. They are all Africans, and all\r\nperceived by the outside world as Africans.\r\nWhen I travel outside Africa the description\r\nofmc as former President of Tanzania is a\r\nfleeting affair. It docs not stick. Apart from the\r\nignorant ,,·ho sometimes asked me ,,·hcther Tanzania\r\nwas Johannesburg. even to those \\\\\'ho kne,,·\r\nbetter. ,,h· at stuck· in the minds of my hosts ,\\\'as\r\nthe fact of m,· African-ncss. So I had to ans,\\\'er\r\nquestions about the atrocities of the Am ins and\r\nthe Bokassas of Africa.\r\nMrs Ghandi did not have to answer questions\r\nabout the atrocities of the Marcosscs of Asia. Nor docs Fidel Castro have to answer questions\r\nabout the atrocities of the Somozas of Latin\r\nAmerica. But \\\\hen I travel or meet foreigners. 1\r\nkin: to ;ins,,er questions about Somalia. Liberia.\r\nR,,anda. Burundi and Zaire. as in the p::ist I used\r\nto ans\\\\·er questions ::ibout Mozambique. Angob.\r\nZimbab\\\\\'e. Namibia or South Africa\r\nAnd the way I \\\\·as perceived is the \\\\::ly most\r\nof m,· fcllo\\\\ Heads of State \\\\·en.; perceived. And\r\nthat is the way you arc all being perceived. So\r\naccepting the fact that ,,e arc Africans gives you a\r\nmuch more ,,orth\\\\\'hilc challenge than the current\r\ndesperate attempts to fossilize Africa into the\r\nwounds inflicted upon it by the vultures of imperialism.\r\nDo not be proud of your shame Reject the\r\nreturn to the tribe, there is richness of culture out\r\nthere which we must do everything we can to\r\npreserve and share. But it is utter madness to think\r\nthat if these artificial, unviablc states ,,·hich we arc\r\ntrying to create arc broken up into tribal components\r\nand \\\\\'C turn those into nation states we might\r\nsave ourselves.\r\nThat kind of political and social atavism\r\nspell catastrophe for Africa. 1t would be the end of\r\nanv kind of genuine development for Africa. It\r\nw􀌷uld fossilize Africa into •\r\n.\r\na worse state than the one in which we arc. The future of Africa, the\r\nmodernization of Africa that has a place in the 21st\r\ncentury is linked up with its decolonization and\r\ndetribilization. Tribal atavism would be giving up\r\nany hope for Africa. And of all the sins that Africa\r\ncan commit, the sin of despair would be the most\r\nunforgi vablc.\r\nReject the nonsense of dividing African\r\npeoples into Anglophones, Francophones and\r\nLusophones. This attempt to divide our peoples\r\naccording to the language of their former colonial\r\nmasters must be rejected with the firmness and\r\nutter contempt that it richly deserves. The natural\r\nowners of those wonderful languages arc busy\r\nbuilding a united Europe. But Europe is strong,\r\neven without unity. It has less need of unity and the\r\nstrcnbot h that comes from unity than Africa.\r\n. . A ne"· neneration of sclf-rcspcctmg Afn- o\r\ncans should spit in the face of anybody \\\\ho\r\nsuggests that our continent should remain divided\r\nand fossilized in the shame of colonialism in order\r\nto satisfy the national pride of our former colonial\r\nmasters.\r\nAfrica must unite I This \\\\\'as the title of one\r\nKwame Nkrumah ·s books. That call is more urgent\r\ntoday than ever before. Together, \\,\\\'e the\r\npeoples of Africa will be incomparably stronger\r\ninternationally than ,-vc are now with our multiplicity\r\nof unviable states. The needs of our separ􀌸te\r\ncountries can be, and are being, ignored by the nch\r\nand powerful. The result is that Africa is\r\nmarainalised when international decisions affect- o\r\ning our vital interests are made.\r\nUnity will not make us rich, but it can make\r\nit difficult for Africa and the African peoples to be\r\ndisregarded and humiliated. And it will therefore\r\nincrease the effectiveness of the decisions we make\r\nand try to implement for our development.\r\nMy generation led Africa to political freedom.\r\nThe current generation ofleaders and peoples\r\nof Africa· must pick up the flickering torch of\r\nAfrican freedom, refuel it with their enthusiasm\r\nand determination, and can)\' it forward.</p>', 'Mwalimu Julius K Nyerere', 1, '0', '0', 'africa_must_unite', 'africa_must_unite', '', NULL, '2018-09-20 20:11:59', '2018-09-20 20:11:59'),
(3, 'The Berliner Cult', NULL, '<p>THE BERLINER CULT was a secret one in the strictest sense, said Uncle Lekwot. There\r\nwere no agendas to the meetings, the need to take minutes was never considered. \'We\'d meet, we\'d\r\ntalk out our souls, we\'d cry out our hearts, we\'d laugh our stomachs off, and we\'d go - in the name of\r\nAfrica\'. Even The Africa was a privatised secret, it became so when We Shall Never Be Pacified was\r\nadopted as the oath of allegiance. They swore to belong to each other , they shared the meaning of the\r\noath, but the exact words were individual secrets deliberately locked in eleven languages by Cy\'s key\r\nquestion - Who the hell christened our blessed continent Africa? None of the African languages\r\nrepresented had “Africa” in its root vocabulary.\r\nAlso, they called themselves The Eleven-In-One, another secret so well kept it eluded the cybernetic\r\ntentacles of The Computer until The Cult metamorphosed into Twenty-three-In-One, the legally\r\nconstituted body of Africans who fought and won The First Battle Of Yunhouse. Said The\r\nPrintout: “In the beginning there were Twenty-three Africans, they religiously denied the virtues of\r\nEnglish real ale in London pubs, preferring to get drunk on each other\'s blood... Out of the jungle\r\nthey came, but the jungle did not come out of them”.\r\nThe Gero Duo read this with considerable satisfaction, remembering how The Eleven-In-One\r\nrapturously dived into the jungle on that solemn night when they saw themselves pioneering the\r\nestablishment of an African cult outside Africa, on English soil to be exact. And why not? Except for\r\na minor problem: none of The Berliners had first hand knowledge of the constitution of an African\r\ncult, European education having carted them off to look at strange pictures and learn how to get their\r\ntongues around awkward sounds - such as "th" in "the thing" - whilst others in their peer groups\r\nlearnt to make drums speak the language of the spirits. The London model of the secret cult therefore\r\ndrew on fragmented childhood recollections of popular perceptions of secret cults. So, for example,\r\nhad a suitable instrument been handy in the Camden Town Flat, The Berliners, following a member\'s\r\nsuggestion, would have tattooed a chosen insignia (map of Africa?) onto a secret notch (the crotch?)\r\nof their anatomies, that notch would then become the Cult\'s password and members would greet each\r\nother with “Hello crotch” in a nominated African language.\r\n\'We may as well adopt "freeze" as our password\', Cy told the gathering of freezing Africans on the\r\nnight the subject of password was resolved. Lekwot had earlier gone to report the coal cellar empty ,\r\nhe found his landlady in bed, under half a dozen blankets, and reading Paradise Lost held in hands\r\nprotected by mittens. The coalman failed to deliver, she told Lekwot. \'Now\'s is your chance to get a\r\ntaste of real winter, a wonderful experience to write to your folks back home\'. Would Lekwot like\r\nextra blankets? There were extra pairs of mittens for reading but they may not be long enough for his\r\nlong African fingers. On the other hand, he could wait for his African friends to get warmer, \'Your\r\nlaughter sounds like a blast furnace\'. The visiting Berliners would not be put off their meeting. They\r\nadjusted their longjohns and long sleeve vests, tightened the wrap of their scarves, buttoned their\r\novercoats and nestled together to hear Cy\'s peroration on the subject of a password for The Berliner\r\nCult, thus:\r\n\'Here we are, Brothers, freezing in a foreign land. I mean you don\'t have to be versed\r\nin The Origin Of Species to infer that Homo Sapiens have forever used their power of\r\nlocomotion to gravitate towards warmth. So what in the name of our ancestors are\r\nwe doing here?...Something happened to us, my Brothers. Something very sinister.\r\nSomething totally disorientating. For a password that would be a trigger button of our\r\nexperiences we need look no further than that something\'.\r\nThe spellbound Berliners were referred to an article, The Significance Of 1884, in the\r\nlatest edition of their new magazine, The Africa Picture [No Spitting!], in which the\r\nGreat Berlin Carve-up was described as The Scramble For Africa: ‘That\'s what they\r\nthink it was. That\'s what they\'d like us to think it was. Brothers, mark my word, we\'ll\r\nall live to see many generations of reading-and-writing Africans borrowing\r\n"Scramble" - their coin in their intellectual market - to look at Colonialism. It\'ll be our\r\nhistorical destiny to watch this process that precludes, as counterfeit, all our original\r\nthoughts on our circumstances. It is our historical privilege and duty to resist the\r\nprocess...W e shall never be pacified!.\'\r\nEcho: \'We shall never be pacified!\'\r\n\'Then our story begins with one nasty fact: that each and everyone of us here was\r\nborn within blood-letting distance of the Great Berlin Carve-up of our continent!\' He\r\nwhisked his travel documents out of his coat pocket. \'Our parents don\'t have these\r\ndocuments. Our brothers and sisters don\'t have them. They’ve stayed pre-historic\'.\r\nThe Berliners were asked to cast their minds back to that moment at the pearly gates\r\nof history when they stood before a Colonial St Peter and were asked to declare who\r\nthey were. His own father, with his hand on the Bible, was asked to repeat the words\r\nof a legal oath which said that whereas his son, Cyril, although born in the\r\npre-historic time when births were not being recorded in the Colony, was actually\r\nborn by his mother into the world on the 17th day of November 1891. The local\r\ninterpreter transmitted the text of the oath with a wry smile: \'The Whiteman wants you\r\nto swear that the young man is your son. Just say yes\'. Mr Naikule senior, irritated by\r\nthe aspersion cast on his own blood, not to mention his manhood, wanted to reveal a\r\nfamily birthmark, on the left buttock, spotted and slapped by several generations of\r\nmidwives, some of whom were available as living witnesses. But the interpreter\r\nfirmly retained his hand on the Bible, turned to the Whiteman, \'The Old Man agrees to\r\neverything you say, and he so swears\'. Local St Peter stamped and endorsed Cy\'s\r\nidentity:\r\n‘Now you are somebody , keep your Declaration Of Age safe, remember your\r\nbirthday, everywhere you go in England you\'ll be asked for it, without it you\'re\r\nnobody\'.\r\n\'What did the Whiteman say to you, son?\' \'He wishes me good luck\'.\r\nCy paused. The Berliners all thought he would begin to stutter. But he did not. He\r\ncontinued: \'Lies! lies! lies! That is our fate\'. The Berliners should watch out for the\r\nday in the not so distant future when the modern - meaning Europeanised! - African\r\npersonality would be said to have complexes, for, as that African lied his way into\r\nbecoming somebody, his soul would have somersaulted and contorted in fraudulent\r\nacrobatics until he knew not who he was, he would have matured without the benefit\r\nof the wisdom in "know thyself". To start afresh here in Camden Town, the Berliners\r\nwere to discard exact days and months and revert to dating by events, seasons and\r\nmoons, as it used to be where they came from. At least they would avoid the\r\ntemptation of birthday parties, a ridiculous notion, anyway, who in his right mind\r\nwould want to indulge in the morbid arithmetic of countdown to death. Birth occurred\r\nonce, everyday was affirmation of that birthday. However, it was very significant that\r\nmembers of the Berliner Cult shared the same birth season. Cy read from a piece of\r\npaper: \'In Africa, every age group has a club or society , often secret, through which\r\nthe members assert their social relevance within their tribal community\'. He had\r\ncopied those words from an anthropological thesis in the University Library, but they\r\nwould do for now .\r\n\'So, Brothers, we were all born in, and belong to, the age of The Pacification Of The\r\nNatives...\'\r\n....We shall never be pacified! ...\r\nTherein lies the rub, continued Cy . And how it all began in the autumn of the year\r\nEighteen Eighty-Four, in the city of Berlin in Deutschland, when men in very grey\r\nsuits pored over an outline map of Africa dotted with named and soon-to-be-named\r\nlandmarks now known as Nile, Niger, Congo, Senegal, Orange, Limpopo, Zambezi,\r\nAtlas, Cameroon, Kilimanjaro, Chad, Victoria, Nyasa, Tanganyika, just to name a\r\nfew. Those men in the very grey suits didn\'t see any Africans on that map, and they\r\nhave not seen any Africans since: \'If this cult of ours is to achieve anything it is to\r\nmake ourselves visible...\'\r\n...We shall never be pacified ...\r\n\'Quite. Consider further, my Brothers, those trigonometric instruments, blunt and\r\nsharp, cutting, piercing, slicing and carving your invisible forebears: neighbours\r\nwent to farm together and finished their days’ work on different sides of national\r\nboundaries; families sat down to dinner and stood up as multi-nationals; couples\r\nwent to bed in conjugal bliss and woke up with split lineages. If this picture sounds\r\nfamiliarly loud and clear it is because it echoes their Bible\'s depiction of the scenario\r\nto mark the end of the world. It was the end of our world all right. Our forebears did\r\nnot know it then. But they knew it. Now we Berliners know that the end of that world\r\nwas a dance called the Scramble For Africa. We shall call it Their Tumble Into The\r\nJungle. That dance was choreographed in Berlin. When? In Eighteen...\'\r\n...Eighty-four!\r\n‘The cardinal rule for that dance was: Don\'t step on my toes! Because that was all\r\nthey had: toe-holds in Africa. A person quarrels with his wife, he escapes to Africa,\r\nhis refuge would be cited as a toe-hold; a social misfit is catapulted out of his\r\nsociety, he revives himself in Africa, the location of his new beginning was\r\ndemarcated as toe-hold in the Dark Continent; a man possessed by John The Baptist\r\nSyndrome seeks out a bush spot to indulge a diet of locust and wild honey while\r\ncalling for the Messiah all day and all night, his dinner table counts as toe-hold; a\r\nventuresome buccaneer loses his way in the jungle, it would be big, big news, the\r\nlocus of his perambulations was cartographic evidence for a toe-hold...and so\r\non.’Then they shoved their toes, nay their big boots, up the bottoms of our forebears,\r\nan act they called pacification of the natives...\'\r\n\'We shall never be pacified!\'\'.\r\n\'Indeed. How could we, we who were merely unfertilised natives in the virginal\r\nwombs of our mothers when they arrived to prepare the floor for Their Tumble Into\r\nThe Jungle. Notice, Brethren, their consideration, almost humane, for the animals of\r\nthe jungles, the most troublesome of the beasts being, of course, our forebears who\r\nlived in organised communities of some description, spoke some sort of language\r\nand were capable of orchestrated nuisance, maybe even resistance to Operation\r\nTumble Into The Jungle. So our ancestors had to be talked to, so they arrived, like\r\nthey would in a zoo, armed with mirrors and breadcrumbs soaked in liquor , to\r\ntantalize and mesmerise our forebears into playing the game of putting their marks\r\non pieces of paper . That was the game of-of-of...T -t-treaties...We\'ll spare ourselves\r\nthe pain of reflecting on the contents of those treaties, which they, in accordance\r\nwith the rules of Eighteen-Eighty-four, required to prove to themselves and to one\r\nanother their entitlement to our lands, thus making squatters of our forebears. The\r\ntreaties would have qualified for criminal land deals, if only they had been deals. But\r\nthey were not even deals, as our forebears stressed when they returned to begin\r\noccupation of our lands. Our forebears beat the gongs and said NO! They mounted\r\ntheir Maxim Guns and the pa-pa...pa-pa...pa-pa...pacification b-e-ee-e-eegan!...\'\r\nCy sat down.\r\nThere was a hush.\r\n.</p>', 'Mr. Ad\'Obe Obe', 1, '0', '0', 'the_berliner_cult', 'the_berliner_cult', '', NULL, '2018-09-20 20:43:48', '2018-09-20 20:43:48');

-- --------------------------------------------------------

--
-- Table structure for table `debate_tag`
--

CREATE TABLE `debate_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `debate_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(10) UNSIGNED NOT NULL,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `control` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `filename`, `control`, `created_at`, `updated_at`) VALUES
(1, 'Mother Africa', 'mother_africa.pdf', '2018-09-19 23:00:00', '2018-09-19 23:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2017_07_18_221412_create_users_table', 1),
(3, '2017_07_20_220554_create_social_providers_table', 1),
(4, '2017_07_22_222715_create_tales_table', 2),
(5, '2017_08_08_140425_create_characters_table', 2),
(6, '2017_08_10_142416_create_admins_table', 3),
(7, '2017_08_11_042141_create_comments_table', 4),
(8, '2017_08_20_190147_create_reviews_table', 5),
(9, '2017_08_22_103535_create-reviews-table', 6),
(10, '2017_08_23_204338_create_downloads_table', 7),
(11, '2018_09_13_195006_create-debates-table', 8),
(12, '2018_09_13_205551_create_tags_table', 9),
(13, '2018_09_13_205800_create_debates_tags_table', 9),
(14, '2018_09_15_190926_create_debate_tag_table', 10),
(15, '2018_09_17_201814_create_debates_table', 11),
(16, '2018_09_17_202030_create_debate_tag_table', 12),
(17, '2018_09_17_204958_create_tales_table', 13),
(18, '2018_09_21_084940_create_article_images_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `reviewer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `intro` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(5000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `media` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `reviewer`, `intro`, `title`, `body`, `slug`, `image_link`, `media`, `created_at`, `updated_at`) VALUES
(1, 'Salamatu Sule', '<p><strong>Title of Novel</strong>: Yunhouse</p>\r\n<p><strong>Author</strong>: Ad’Obe Obe</p>\r\n<p><strong>Page of Novel</strong>: 262</p>\r\n<p><strong>Genre</strong>: Historical Fiction/Faction</p>\r\n<p><strong>Publishers</strong>: Ofitu Books, London, United Kingdom (2nd) edition- 2018</p>\r\n<p>Apaugasam Communication Ltd, Nigeria (1st) edition 2017</p>\r\n<p><strong>ISBN</strong>: 978- 1999864-0-1</p>', 'THE PAWNS OF COLONIALISM IN AD’OBE OBE’S YUNHOUSE', '<p>Yunhouse is a historical novel written by Ad’obe Obe about the gory past that has continued to haunt Africa up till this moment. The author gives an account about the pacification process and introduces to us his characters who are African students and intellectuals. It is set in Camden London by African students who engages in series of debate about these gory past and the Europeanisation of their minds. Metaphorically, the novel is set in the home of one of the major architects of colonialism. The effect of war or a tsunami is what the novel Yunhouse is all about; the tsunamis of human labour, capitalism and the participation and celebration on behalf of African’s without her presence and knowledge of what a so called banquet is all about.</p>\r\n<p>Yunhouse, gives an account, experiences and description about what</p>\r\n<p>pacification is all about and what it means to be pacified. It shows to readers clearly the colonial crusades, its effects and implications on the continent of Africa and the minds of the natives.</p>\r\n<p>Its thematic thrust discuss colonialism without contact or marriage, subjugation and the feast to rub it in without apology to the owners or natives.</p>\r\n<p>In this novel Ad’ Obe Obe tries to interrogate the past, Africa’s past especially her stake at one of the most dubious stakeholders banquets of all time called the Berlin Conference of 1884.</p>\r\n<p>When reading this novel, there are questions that are likely to trouble the mind of a reader. Questions like: Where was Africa when the great Berlin Banquet to slice her like a piece of Cake took place? Who were the authorities that bequeathed her to themselves? Was she to be a prostitute, was her consent sought and in what manner?</p>\r\n<p>Was Africa duly represented, and if she was, what was her contribution and if she wasn’t why was she not?</p>\r\n<p>I have</p>\r\n<p>read Alex Harley’s Roots but this one is quite troubling. Historical novel is truer with the Book Yunhouse. In Yun House, we realize what exactly took place and later gave rise to the pacification of the natives.</p>\r\n<p>But at the heart of this book, is the spark for a continuous debate that could last another decade to come if we are true to ourselves in redefining the black history.</p>\r\n<p>Africans in Yunhouse feels it imperative to talk about Africans as the author rightly puts it:</p>\r\n<p>“Yunhouse is founded in London by Africans whose personal experience of the pacification of the Natives is is the Europeanisation of their minds through European education.”</p>\r\n<p>These group of educated Africans form themselves with the Berliner Cult with the motto: “We shall never be pacified” (Yunhouse, pg , 012)</p>\r\n<p>However, the Yunhouse experience unfolds as a narration of the evolution of an establishment dedicated to managing “intellectual emission on Africa, be it ideation,</p>\r\n<p>invocation, evocation, incitation, excitation, expiation, agitation, agonisation, lamentation, jubilation, or –you name it, as long as the subject is Our Africa” (Yunhouse, pg013)</p>\r\n<p>As the discourse continues, so also we are introduce to characters like Lekwot Abaka, Ogesayi Mamwe, Cyril Nikule, John O’Gafla as well as the metamorphosis of Yunhouse into the Palaver Hall.</p>\r\n<p>In YunHouse, an actual contact did not take place at the Berlin Conference because Africa was not represented. It is a story of the thief that came at night and took away what was not his. However, the real contact between Europe and Africans and Europeans started with the pacification process that had continued even till today.</p>\r\n<p>At the meeting, the continent was carved by the European powers who awarded themselves with Certificates of Occupancy. Armed with these certificates, they come knocking on the doors of the Continents, no longer contented with being restricted to the coast where the doors refused to be open peacefully, they devised all sort of tricks including getting leaders drunk before indulging them to sign treatise and other documents and where all these failed, force was used to break</p>\r\n<p>down the doors. This was indeed an era known to historian as the colonial period.</p>\r\n<p>The second contact which had Africans involved started as isolated meetings between adventurers from Europe with Africans domiciled along the coast. At these meetings, there were mutual exchange between the two, but usually the coastal people were shortchanged. That was the era referred to by historian as the Mercantile or Imperialistic period.</p>\r\n<p>After a while, the adventurers accumulated huge profits as a result of this exchange. He, therefore, decided to find avenues for investing his surplus so he can expand his horizon towards the American continent and the Caribbeans. But in other to achieve this, he needed cheap labour that he yet again had to turn back to African to introduce the commercialization of human beings which official historian had come to term the Trans Saharan Slave Trade.</p>\r\n<p>During this period, millions of able-bodied Africans were stolen and taken to the new world as labour. This commercial interaction was to leave the African Continent underdeveloped and breed a hybrid of</p>\r\n<p>African who while possessing all the physical features of the African is neither European nor African; This hybrid Africans is to provide the template on which the colonial education system was to be established, providing Africans that are Africans physically but socially angling to be Europeans.</p>\r\n<p>They now decided to converge at the Berlin in the year 1984 and decided to partition the Continent between themselves for effective possession. Surprisingly, the victim, who was the main purpose for the meeting (African and Africans) were neither represented nor invited as observers. Like a birthday party, at which the celebrant was not asked of his date of birth nor invited for the party, the organisers helped themselves to the gifts and entertainment at the party without regards for the feelings of the celebrant. Officially, historian had Christian this era as the Berlin Conference of 1984.</p>\r\n<p>On taking possession of the property, each comes up with a template of molding his properties (the land and the people) in his own suitable image. Economic development and education policies were directed towards serving the interest of Europe and the European. The educational policy was</p>\r\n<p>deliberately designed to believe that Europe and what it stands for is superior to what African stands for and can provide. This ended up producing a distorted image of an Africa who is racially African but socially European. The educated African has become the second specie of the hybrid African produced by Trans-Atlantic Slave Trade, after much pressure from the hybrid African and with the belief that he can comfortably take the risk after cloning the inheritors, he decided to grant them independence.</p>\r\n<p>After the Hybrid has taken over, people find it very difficult to identify the differences if at all there is one because it turned out that if you were looking out for any information about African, you first stop should be Europe.</p>\r\n<p>While some people see the post-independence as a progress, others simply see it as the continuation of the pacification process in disguise. The present discourse between Africans as regards to still being where we are today (under development) is nothing short other than the action of the discourse started by the contact between the adventurers and the people of the Coast which has been taking different dimensions. Yun House is a contribution to that continued discourse taking into action a microscopic view of what changed Africa and her people</p>\r\n<p>forever and the author is of the view that we cannot as Africans forget this in a hurry as the damages are too strong to be ignored however we want to look at it.</p>\r\n<p>In conclusion, this discourse is tripartite and would further engage readers in a robust debate that could reawaken our consciousness rather than thinking “My African is better than yours or my Black is blacker”. It also sets the tone for whether or not we still want to be pacified as a people and a continent.</p>\r\n<p>It is a great work of faction I will say. The author device some sort of stream of consciousness in the continuous debate of the Yunhouse story. Participants of the Yunhouse are real or are some people or characters who look too real.</p>', '14437_salamatu_sule', '', '', '2018-09-20 16:54:47', '2018-09-20 17:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `social_providers`
--

CREATE TABLE `social_providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_providers`
--

INSERT INTO `social_providers` (`id`, `user_id`, `provider_id`, `provider`, `created_at`, `updated_at`) VALUES
(1, 1, '10213500112717243', 'facebook', '2017-08-10 10:44:50', '2017-08-10 10:44:50');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1884 palaver', '2018-09-15 18:13:12', '2018-09-15 18:13:12'),
(2, 'Politics', '2018-09-15 18:13:28', '2018-09-15 18:13:28'),
(3, 'Naija', '2018-09-15 18:13:45', '2018-09-15 18:13:45');

-- --------------------------------------------------------

--
-- Table structure for table `tales`
--

CREATE TABLE `tales` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_tale` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `image_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `coming_soon` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tales`
--

INSERT INTO `tales` (`id`, `title`, `body`, `published`, `slug`, `featured_tale`, `image_link`, `coming_soon`, `created_at`, `updated_at`) VALUES
(1, 'Mother Africa', '<p>The 20th Century was drawing to a close when the press release came: “ALL HUMANS ON PLANET EARTH ARE DESCENDED FROM AN AFRICAN WOMAN”.</p>\r\n\r\n<p>I screamed! to the hearing of all humans present in the London Fleet Street newsroom, where I was still swaggering in the euphoria of my very recently acquired status of first ever full-blooded African with a bona fide appellation of Fleet Street Journalist. The News Editor, who announced my appointment, said my position was an overdue 20th Century phenomenon that had been precipitated by a chance meeting at the 20th birthday party of his niece (student of Chinese language), whose current co-fornicator (an African who spoke and wrote fluent Japanese) had brought along (from Brixton) two African mates, one of whom spoke and wrote fluent Russian, and myself, an indigene of a former British Colony, where he (Fleet Street Editor) had been conceived (five decades earlier) during an imperial copulation between his father (Colonial Governor) and his mother (a blood relation of the last Emperor of Russia).</p>\r\n\r\n<p>‘The globe has become one village’, the News Editor proclaimed with much excitement. He got more excited when he learnt that I was currently engaged in pamphleteering on a subject that was burning – even as we spoke – on the streets of Brixton District in South London. Our publication, The Atlantic Storm, tracked day by the day the sordid details of Black people’s experience of the historic racial implosion with which Brixton eventually got baptised as Ethnic Headquarters Of Great Britain. The Atlantic Storm was in newspaper format and appeared daily, but its African-Jamaican-British publisher, Ohimini, maintained that it was an information sheet, maybe pamphlet. But definitely not a newspaper. He said: ‘Newspapers happened in Fleet Street where White journalists disseminate to White readers stories that are crafted with White interests as leitmotif’.</p>\r\n\r\n<p>At the mention of the Atlantic Storm and its publisher, the News Editor’s excitement peaked at the maximum on the Reuter’s scale: ‘If you can get me an interview with Ohimini, I’ll make you a Fleet Street journalist’. And he dragged me through the party crowd to a much more elderly Englishman in a wheelchair. Then I got my chance to shake the hands of the legendary Mr Africa: the man who had seen it all, heard it all, and wrote it all about Africa, whilst editing close to three thousand weekly editions of The Africa Picture, the newsmagazine – born at the beginning of the 20th Century – internationally believed to be the oldest Pan African journal on the planet. Mr Africa’s accolades include The Man Who Has Written Africa More Times Than Any Human Alive.</p>\r\n\r\n<p>The Fleet Street Editor said he owed his profound interest in Africa to Mr Africa under whom he had been a pupil journalist, an experience he shared with several other Fleet Street Journalists, most of whom were present at the 80th Anniversary celebration party of The Africa Picture when Ohimini made a bold attempt to behead the famous editor as ritual sacrifice to many angry African gods. Ohimini refused – very loudly – to shake his host’s welcoming hand, instead he whisked out a pick axe concealed under his winter coat. Pandemonium broke out! Then the following exchange of words:</p>\r\n\r\n<p>Ohimini: Show me your licence for taking Africa’s name in vain.</p>\r\n\r\n<p>Mr Africa: What are you talking about?</p>\r\n\r\n<p>Ohimini: Where are the Africans in The Africa Picture? Eighty years on and not one African journalist – not even a token one – has ever been aboard with you to paint the picture of the Africa peddled by your white supremacist rag.</p>\r\n\r\n<p>Mr Africa: Yes, they have. You, for example. Your behaviour shows why you cannot be trusted with objectivity on the subject of Africa.</p>\r\n\r\n<p>Ohimini: Do you, Mr Africa!, really know what it means to be an African?</p>\r\n\r\n<p>Mr Africa: Not necessarily. I just observe you guys – professionally. If you know what I mean…</p>\r\n\r\n<p>Mr Africa confidently predicted that Ohimini would not agree to be interviewed: ‘He’s too wrapped up in his Black World to talk to Whiteys in Fleet Street’. The prediction was wrong. Ohimini did agree to be interviewed, on two conditions: one, the text would be published in Question-and-Answer format – with his answers unedited, two, the article appears under his choice of words for the title as well as the sub-title, thus:</p>\r\n\r\n<p>To Whom It May Concern</p>\r\n\r\n<p>Ohimini Of Brixton Speaks On Being A Blackman</p>\r\n\r\n<p>Q: You chose your own title and subtitle?</p>\r\n\r\n<p>A: Yes. Because I only speak on what concerns me. And I aim to communicate with those who are concerned about what I speak. There’s too much talking – and listening – at cross- purposes going on in the world today.</p>\r\n\r\n<p>Q: You were born poor?</p>\r\n\r\n<p>A: Yes. It was poverty far below poverty line. To measure my poverty level you’d have to dig underneath the proverbial church rat.</p>\r\n\r\n<p>Q: You went to Oxford University?</p>\r\n\r\n<p>A: Yes. Shortly after arriving in the UK with my carpenter father, a sensitive white teacher followed her curiosity about my unusual mental aptitude and discovered that my IQ was well above average, enough for me to be accepted as member of a high IQ society, followed by a series of scholarships that eventually led to being at Oxford.</p>\r\n\r\n<p>Q: You hate White people?</p>\r\n\r\n<p>A: No. Many of my friends are White. I get along with them very well. I am every inch a fine specimen of what their educational system can produce. I have insider knowledge about what makes them tick. But they don’t know what makes me tick. They don’t know because they have no idea – and therefore cannot imagine – where I am coming from, other than the colour of my skin.</p>\r\n\r\n<p>Q: You hate Fleet Street?</p>\r\n\r\n<p>A: Not really. I object to Fleet Street’s agenda on a subject of great concern to me: being a Blackman. Many Fleet Street journalists are my peers from school and Oxford. We differ on our perception of the global racial war going on since the 15th Century and peaked with The Trans-Atlantic Holocaust in the 19th Century. Do you know how many Africans died in this war? Current estimates put African casualties at more than the total casualties in all the rest of human conflicts, past, present and in the foreseeable future. The record is likely to be surpassed only when the world suicidally goes barking MAD – as in mutually assured destruction!</p>\r\n\r\n<p>Fleet Street agenda is the victor’s agenda which assumes this war of attrition is over, and the losers have no choice but to shut up and put up with Whiteman’s world order: a world pulverised by White imperialism and then blended with White supremacist recipe into a multi-racial cocktail that is promoted as elixir of harmony for the human society at large. I disagree.</p>\r\n\r\n<p>Q: You founded The Atlantic Storm?</p>\r\n\r\n<p>A: Yes. For my father. He made me aware that the Atlantic Road in Brixton was more than coincidence in name. He said the Brixton Riots confirmed Atlantic Road as a live battlefront of The Transatlantic Holocaust. Also, the riots manifested the communal Day Of Reckoning for the black population of Brixton. A few decades earlier, High Priest Zephaniah of the Rastafarian religion had foretold the Day Of Reckoning as a worldwide existential phenomenon for every black person on earth: “On that day, my Brethren, an incident will trigger a spiritual tsunami when all the horrors of The Transatlantic Holocaust come bearing down on your soul. You would be so crushed by the agony of being black, you would wish you had never been born”.</p>\r\n\r\n<p>Q. Really?</p>\r\n\r\n<p>A. Yes. My my own Day of Reckoning when I first came home with news of my admission to Oxford: ‘That place is Whiteman’s Holy of Holies. Son, may God Almighty save you on the day when you discover that there is no room for you there’.</p>\r\n\r\n<p>Q. Wow?</p>\r\n\r\n<p>A. Indeed! So it was that I was totally devastated by the parcel bomb left at my door with a placard addressed to: “Nigger At Oxford – Which Nigger Farm are you descended from?”</p>\r\n\r\n<p>I wailed all the way from Oxford to Brixton, whilst my soul writhed and convulsed in the agony from the multiple wounds inflicted by the horrific details of a manual, How To Make A Nigger Slave, published in the middle of the 18th Century, and written by an ancestor of a fellow English student in Oxford.</p>\r\n\r\n<p>My soul was blown to smithereens by the details of the animal production technique of how the Negro – and wild horses – were to be bred, broken and domesticated to become beasts of burden for driving the material prosperity of their White owners.</p>\r\n\r\n<p>Q. Lord have mercy?</p>\r\n\r\n<p>A. Exactly. My father’s reaction: ‘Let me tell you something else you need to know: No Africans survived!’ He explained: ‘They all went in as Africans, majority physically died, the rest were spiritually slaughtered and turned into zombies popularly known as Niggers’. He asked: ‘Have you ever wondered why no African tribal tongues survived among the Africans who outlived slave trade and slavery?’ He warned: ‘Don’t ever attempt to find out how many of my father’s generation didn’t have any fathers to identify with?’ He advised: ‘High Priest Zephaniah says, “To stay alive you must stay deliberate illiterate! Don’t read what the white man has to say about you. Hear no racism, speak no racism, recognise no racism, feel no racism’.</p>\r\n\r\n<p>Q. So, why The Atlantic Storm?</p>\r\n\r\n<p>A. To recover the Blackman’s Storyline. At least part of it. According to High Priest Zephaniah, and I quote: “Every living person has a distinct Storyline in the divine drama of Man Alive scripted by Jehovah in The Book Of Life. You are the principal character in your own Storyline. You come of age when your Storyline is revealed at some point in your life. Your Storyline is your divine identity. Life becomes full of meaning when you get to read your Storyline. Equally true, is the trauma of the Day Of Reckoning when you discover that your Storyline has been hijacked and bastardised by someone else”.</p>\r\n\r\n<p>Thus, High Priest Zephaniah’s doctrine of Deliberate Illiterate is actually inoculation against further assaults of the Day Of Reckoning.</p>\r\n\r\n<p>My father assured me he and his peers would not play illiterate with The Atlantic Storm, once the publication is recognised as the story of black people, written by black people, and for the enlightenment of black people. My father assured me that black people would read us if we achieve our goal black people would be helped to understand themselves and many would in the process discover their individual Storylines.</p>\r\n\r\n<p>I passed the press release about Mother Africa to Ohimini. The Atlantic Storm screamed on its front page: THE HUMAN RACE IS BLACK! He saw the potential of the story beyond scientific news. No wonder Africans worship their ancestors, he thought, Africans must spiritually in tune. How about a letter to Mother Africa. Tell her how her descendants have evolved, the hatred, the love, the variety of colours, the variety of human habits as in cultures and traditions across the globe. Millennia of everything human, the wars, the atrocities, man’s inhumanity to man… Can you imagine Fleet Street reaction if the story had been that the mother of the entire human race was European? The jingoism to go with it…Finally Ohimini recommended a visit to Yunhouse in the north bank of River Thames, a really posh district called Hampstead. Yunhouse is the one and only African colony in whole world. At least that’s what the African residents believed.</p>\r\n\r\n<p>Ancestor worship, Ohiminiadded, was alive in Yunhouse. News about Mother Africa was bound to provoke a major event in the Palaver Hall of Yunhouse, an intellectual arena where Africa is discussed 24/7 – literally.</p>', '1', 'mother_africa', '0', 'mother_africa.png', 'how_it_all_began.jpg', '2018-09-20 18:21:47', '2018-09-21 17:21:02'),
(2, 'The Berliner Cult', '<p>THE BERLINER CULT was a secret one in the strictest sense, said Uncle Lekwot. There were no agendas to the meetings, the need to take minutes was never considered. \'We\'d meet, we\'d talk out our souls, we\'d cry out our hearts, we\'d laugh our stomachs off, and we\'d go - in the name of Africa\'. Even The Africa was a privatised secret, it became so when We Shall Never Be Pacified was adopted as the oath of allegiance. They swore to belong to each other , they shared the meaning of the oath, but the exact words were individual secrets deliberately locked in eleven languages by Cy\'s key question - Who the hell christened our blessed continent Africa? None of the African languages represented had “Africa” in its root vocabulary. Also, they called themselves The Eleven-In-One, another secret so well kept it eluded the cybernetic tentacles of The Computer until The Cult metamorphosed into Twenty-three-In-One, the legally constituted body of Africans who fought and won The First Battle Of Yunhouse. Said The Printout: “In the beginning there were Twenty-three Africans, they religiously denied the virtues of English real ale in London pubs, preferring to get drunk on each other\'s blood... Out of the jungle they came, but the jungle did not come out of them”. The Gero Duo read this with considerable satisfaction, remembering how The Eleven-In-One rapturously dived into the jungle on that solemn night when they saw themselves pioneering the establishment of an African cult outside Africa, on English soil to be exact. And why not? Except for a minor problem: none of The Berliners had first hand knowledge of the constitution of an African cult, European education having carted them off to look at strange pictures and learn how to get their tongues around awkward sounds - such as "th" in "the thing" - whilst others in their peer groups learnt to make drums speak the language of the spirits. The London model of the secret cult therefore drew on fragmented childhood recollections of popular perceptions of secret cults. So, for example, had a suitable instrument been handy in the Camden Town Flat, The Berliners, following a member\'s suggestion, would have tattooed a chosen insignia (map of Africa?) onto a secret notch (the crotch?) of their anatomies, that notch would then become the Cult\'s password and members would greet each other with “Hello crotch” in a nominated African language. \'We may as well adopt "freeze" as our password\', Cy told the gathering of freezing Africans on the night the subject of password was resolved. Lekwot had earlier gone to report the coal cellar empty , he found his landlady in bed, under half a dozen blankets, and reading Paradise Lost held in hands protected by mittens. The coalman failed to deliver, she told Lekwot. \'Now\'s is your chance to get a taste of real winter, a wonderful experience to write to your folks back home\'. Would Lekwot like extra blankets? There were extra pairs of mittens for reading but they may not be long enough for his long African fingers. On the other hand, he could wait for his African friends to get warmer, \'Your laughter sounds like a blast furnace\'. The visiting Berliners would not be put off their meeting. They adjusted their longjohns and long sleeve vests, tightened the wrap of their scarves, buttoned their overcoats and nestled together to hear Cy\'s peroration on the subject of a password for The Berliner Cult, thus: \'Here we are, Brothers, freezing in a foreign land. I mean you don\'t have to be versed in The Origin Of Species to infer that Homo Sapiens have forever used their power of locomotion to gravitate towards warmth. So what in the name of our ancestors are we doing here?...Something happened to us, my Brothers. Something very sinister. Something totally disorientating. For a password that would be a trigger button of our experiences we need look no further than that something\'. The spellbound Berliners were referred to an article, The Significance Of 1884, in the latest edition of their new magazine, The Africa Picture [No Spitting!], in which the Great Berlin Carve-up was described as The Scramble For Africa: ‘That\'s what they think it was. That\'s what they\'d like us to think it was. Brothers, mark my word, we\'ll all live to see many generations of reading-and-writing Africans borrowing "Scramble" - their coin in their intellectual market - to look at Colonialism. It\'ll be our historical destiny to watch this process that precludes, as counterfeit, all our original thoughts on our circumstances. It is our historical privilege and duty to resist the process...W e shall never be pacified!.\' Echo: \'We shall never be pacified!\' \'Then our story begins with one nasty fact: that each and everyone of us here was born within blood-letting distance of the Great Berlin Carve-up of our continent!\' He whisked his travel documents out of his coat pocket. \'Our parents don\'t have these documents. Our brothers and sisters don\'t have them. They’ve stayed pre-historic\'. The Berliners were asked to cast their minds back to that moment at the pearly gates of history when they stood before a Colonial St Peter and were asked to declare who they were. His own father, with his hand on the Bible, was asked to repeat the words of a legal oath which said that whereas his son, Cyril, although born in the pre-historic time when births were not being recorded in the Colony, was actually born by his mother into the world on the 17th day of November 1891. The local interpreter transmitted the text of the oath with a wry smile: \'The Whiteman wants you to swear that the young man is your son. Just say yes\'. Mr Naikule senior, irritated by the aspersion cast on his own blood, not to mention his manhood, wanted to reveal a family birthmark, on the left buttock, spotted and slapped by several generations of midwives, some of whom were available as living witnesses. But the interpreter firmly retained his hand on the Bible, turned to the Whiteman, \'The Old Man agrees to everything you say, and he so swears\'. Local St Peter stamped and endorsed Cy\'s identity: ‘Now you are somebody , keep your Declaration Of Age safe, remember your birthday, everywhere you go in England you\'ll be asked for it, without it you\'re nobody\'. \'What did the Whiteman say to you, son?\' \'He wishes me good luck\'. Cy paused. The Berliners all thought he would begin to stutter. But he did not. He continued: \'Lies! lies! lies! That is our fate\'. The Berliners should watch out for the day in the not so distant future when the modern - meaning Europeanised! - African personality would be said to have complexes, for, as that African lied his way into becoming somebody, his soul would have somersaulted and contorted in fraudulent acrobatics until he knew not who he was, he would have matured without the benefit of the wisdom in "know thyself". To start afresh here in Camden Town, the Berliners were to discard exact days and months and revert to dating by events, seasons and moons, as it used to be where they came from. At least they would avoid the temptation of birthday parties, a ridiculous notion, anyway, who in his right mind would want to indulge in the morbid arithmetic of countdown to death. Birth occurred once, everyday was affirmation of that birthday. However, it was very significant that members of the Berliner Cult shared the same birth season. Cy read from a piece of paper: \'In Africa, every age group has a club or society , often secret, through which the members assert their social relevance within their tribal community\'. He had copied those words from an anthropological thesis in the University Library, but they would do for now . \'So, Brothers, we were all born in, and belong to, the age of The Pacification Of The Natives...\' ....We shall never be pacified! ... Therein lies the rub, continued Cy . And how it all began in the autumn of the year Eighteen Eighty-Four, in the city of Berlin in Deutschland, when men in very grey suits pored over an outline map of Africa dotted with named and soon-to-be-named landmarks now known as Nile, Niger, Congo, Senegal, Orange, Limpopo, Zambezi, Atlas, Cameroon, Kilimanjaro, Chad, Victoria, Nyasa, Tanganyika, just to name a few. Those men in the very grey suits didn\'t see any Africans on that map, and they have not seen any Africans since: \'If this cult of ours is to achieve anything it is to make ourselves visible...\' ...We shall never be pacified ... \'Quite. Consider further, my Brothers, those trigonometric instruments, blunt and sharp, cutting, piercing, slicing and carving your invisible forebears: neighbours went to farm together and finished their days’ work on different sides of national boundaries; families sat down to dinner and stood up as multi-nationals; couples went to bed in conjugal bliss and woke up with split lineages. If this picture sounds familiarly loud and clear it is because it echoes their Bible\'s depiction of the scenario to mark the end of the world. It was the end of our world all right. Our forebears did not know it then. But they knew it. Now we Berliners know that the end of that world was a dance called the Scramble For Africa. We shall call it Their Tumble Into The Jungle. That dance was choreographed in Berlin. When? In Eighteen...\' ...Eighty-four! ‘The cardinal rule for that dance was: Don\'t step on my toes! Because that was all they had: toe-holds in Africa. A person quarrels with his wife, he escapes to Africa, his refuge would be cited as a toe-hold; a social misfit is catapulted out of his society, he revives himself in Africa, the location of his new beginning was demarcated as toe-hold in the Dark Continent; a man possessed by John The Baptist Syndrome seeks out a bush spot to indulge a diet of locust and wild honey while calling for the Messiah all day and all night, his dinner table counts as toe-hold; a venturesome buccaneer loses his way in the jungle, it would be big, big news, the locus of his perambulations was cartographic evidence for a toe-hold...and so on.’Then they shoved their toes, nay their big boots, up the bottoms of our forebears, an act they called pacification of the natives...\' \'We shall never be pacified!\'\'. \'Indeed. How could we, we who were merely unfertilised natives in the virginal wombs of our mothers when they arrived to prepare the floor for Their Tumble Into The Jungle. Notice, Brethren, their consideration, almost humane, for the animals of the jungles, the most troublesome of the beasts being, of course, our forebears who lived in organised communities of some description, spoke some sort of language and were capable of orchestrated nuisance, maybe even resistance to Operation Tumble Into The Jungle. So our ancestors had to be talked to, so they arrived, like they would in a zoo, armed with mirrors and breadcrumbs soaked in liquor , to tantalize and mesmerise our forebears into playing the game of putting their marks on pieces of paper . That was the game of-of-of...T -t-treaties...We\'ll spare ourselves the pain of reflecting on the contents of those treaties, which they, in accordance with the rules of Eighteen-Eighty-four, required to prove to themselves and to one another their entitlement to our lands, thus making squatters of our forebears. The treaties would have qualified for criminal land deals, if only they had been deals. But they were not even deals, as our forebears stressed when they returned to begin occupation of our lands. Our forebears beat the gongs and said NO! They mounted their Maxim Guns and the pa-pa...pa-pa...pa-pa...pacification b-e-ee-e-eegan!...\' Cy sat down. There was a hush. .</p>', '0', 'the_berliner_cult', '0', '', 'how_it_all_began.jpg', '2018-09-20 21:33:11', '2018-09-20 21:33:11');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ome Ernest Matthew', 'itotoh@gmail.com', '', 'eNVdIrELWCZ4deKffxB277eNefPqJt67UaMaaCYk3e7S2s4D6swFAnUNbdzX', '2017-08-10 10:44:50', '2017-08-10 10:44:50'),
(2, 'Ernest', 'ernest@gmail.com', '$2y$10$REipxaPWpM8MTQGg9tmB5.Os1Ll8Ut69lY2hPypTlid6bB/sUoGCW', 'nVxEYdwkpU45zXbKVfn534LjHMKfdBrdA3n5QfjqhwCulsFbU5X0ERScfbux', '2017-08-11 03:15:20', '2017-08-11 03:15:20'),
(3, 'test', 'test@test.com', '$2y$10$CymQUh/iDLB4vcqsq5TsuOmKnPBNReFyN3Wg43AlvdRzASgirthza', NULL, '2017-08-25 19:05:23', '2017-08-25 19:05:23'),
(4, 'demo', 'demo@demo.com', '$2y$10$y.WxsHrlQtwy5cZEtZgEPOkgUlF0pby3ADK5AQNujvJDntnRiD896', NULL, '2017-08-26 05:48:35', '2017-08-26 05:48:35'),
(5, 'demo2', 'demo@demo.fr', '$2y$10$9K5zFgfpDxlPjnvwG8YKP.ouTcB8Qq2xd3nKJ5aUQCO1dO0.Ips8m', NULL, '2017-08-30 13:01:11', '2017-08-30 13:01:11'),
(6, 'oliver iorkase', 'oliveriorkase@gmail.com', '$2y$10$uXtXfQ.WjDytxyo87x1YLumzJUBYAmZxORq0I2cNAap8jPTotih2W', NULL, '2017-08-31 16:49:39', '2017-08-31 16:49:39'),
(7, 'Ome Itotoh', 'omescroll@gmail.com', '$2y$10$YffVa9jFZPjIPPd/8DmXpeq6PM8Tm6qXqTQodEzpz0m2XVrsbqbAe', 'zIoKuPMOSHgDyNCMRPZrTS0LDRQRBeDy6DVvhwL1paqVt4PkXaa4MIt3OJ5L', '2018-05-05 14:06:22', '2018-05-05 14:06:22'),
(8, 'Timfon', 'timfon@gmail.com', '$2y$10$8hvNNzotQ0e3H/5D2GdxL.azMzsUIHfVk4QEYj2UUhmW3TwxS9pQu', 'QdngEAxKDdtkKAOtqG75V9lmqjRTPZtow4TockU5LYPC3KJJQJpQQ3BIWlSB', '2018-05-12 12:09:54', '2018-05-12 12:09:54'),
(9, 'Adobe Obe', 'adobesa@yahoo.com', '$2y$10$do4cdkHMafArzrQZGCSKCORpcp9zq8k6A4RJzST6cj8DrVpw/jZd2', 'pDcKScYxzf1ioJqQMvOnQJrVCKpztKE60SFR0u90crpwTxfm7lELJIQxY9Kx', '2018-05-12 12:29:54', '2018-05-12 12:29:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `article_images`
--
ALTER TABLE `article_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_tale_id_foreign` (`tale_id`);

--
-- Indexes for table `debates`
--
ALTER TABLE `debates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `debates_slug_unique` (`slug`);

--
-- Indexes for table `debate_tag`
--
ALTER TABLE `debate_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `debate_tag_debate_id_foreign` (`debate_id`),
  ADD KEY `debate_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_providers`
--
ALTER TABLE `social_providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tales`
--
ALTER TABLE `tales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tales_slug_unique` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `article_images`
--
ALTER TABLE `article_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `debates`
--
ALTER TABLE `debates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `debate_tag`
--
ALTER TABLE `debate_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `social_providers`
--
ALTER TABLE `social_providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tales`
--
ALTER TABLE `tales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
