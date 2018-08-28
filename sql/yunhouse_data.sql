-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2018 at 04:59 PM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yunhouse_data`
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
(1, 'Ome Itotoh', 'omescroll@gmail.com', '$2y$10$rvRkUozRfFrPLM81mT3Cxu8vsDTUyf02MofSb7QMCQDLyK9y9YH.y', NULL, '2017-08-10 17:31:21', '2017-08-22 21:36:14'),
(2, 'Omemen', 'ernest@gmail.com', '$2y$10$8UM0ZFxTIcFFvCU0ieuiyuv.VGzOJx/aoHXgMsIURRBfzfYP32zHy', NULL, '2017-08-10 17:43:37', '2017-08-10 17:43:37'),
(4, 'Salamatu', 'Salamatu@gmail.com', '$2y$10$.rfZu07KOIGaUpgKOfNPr.tDoNIIr45TAhtdPrpQioMWO4cnb5XV2', NULL, '2017-08-23 17:39:21', '2017-08-23 17:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`id`, `name`, `body`, `img`, `created_at`, `updated_at`) VALUES
(9, 'Cyril Naikule', '<p>Cy, as he is known to everyone in Yunhouse, is named after a Welshman who was a guest at his naming ceremony (c1890). The Welsh namesake had been a chef in the service of an uncle who swapped from selling slaves to selling spices to the same English trading company that facilitated -with multiple treaties – The Pacification Of The Natives in Cy’s colonial country.</p>\r\n<p>Cy’s European education began with German missionaries but finishes in an English school because the Berlin Carve-up inserted a national boundary bang in the middle of his ethnic domain. This is one childhood experience, Cy claims, that set his African Brain Cell in perpetual motion of anger.</p>\r\n<p> </p>\r\n<p>Cy’s numerous escapades as the Angry Man Of Africa are widely publicised and they are the live wire of the story of Yunhouse. His initial encounter with the co-anchor of Yunhouse, Lekwot Abaka, is to pick a fight because he is nauseated by an article Lekwot contributed to the maiden edition The Africa Picture [No spitting!]. But there is no fight. Instead, the two bond into a partnership that becomes the foundation on which Yunhouse would stand.</p>\r\n<p> </p>\r\n<p>Cy organises many protests against the manifestations of The Pacification Of The Natives. He coordinates the race riots that greet the lower court ruling against the Africans in the First Battle For Yunhouse. He leads the march – to the Colonial Office – against inclusion of Africans in the World War II. He persists in his personal expression of opposition to WW II by running in the streets during bombs raids in London. Fearing for his safety, fellow Berliners organise a voyage back home to Africa. On his native soil, he tries unsuccessfully to stop young Africans from being recruited to fight for the English Crown. He later organises the same youngby ex-soldiers demanding payment for their sacrifices in the European war. He fights against the imposition of Clan Tax on his people. He is arrested severally by the Colonial Administration. He travels back to London to formally present his peoples’ case to the British Government. Colonial security reports refer to him as “communist”, “warrior”, “agitator”, “terrorist”, “traitor”, etc etc. The contents of the Colonial Office’s dossier on him make the bulk of the evidence for the opposition’s case in The First Battle For Yunhouse.</p>\r\n<p> </p>\r\n<p>Cy is an accomplished academic scholar with two-and-half Ph D’s. He read all volumes on the subject of Africa in the University Library. According to him, he became a compulsive scribbler from the day an Irish missionary gave him his first lead pencil. His last years are spent working mainly on his memoir, Something To Write Home About. The manuscript inspires the young African research journalist who is the narrator of the story of Yunhouse.</p>\r\n<p> </p>\r\n<p>Cy dies (c1994) while working on the case against the takeover of Yunhouse by rival Adventurers Club.</p>', 'cy.jpg', '2017-08-09 12:56:19', '2017-08-09 12:56:19'),
(10, 'Lekwot Abaka', '<p>Uncle Lekwot to all Yunis and every person who has anything to do with Yunhouse. Also known as the Cool Head Of Africa, in contrast with his lifelong companion, Cy – the Angry Man Of Africa. Both heads clinch at their first meeting into a kind of thermocouple generator that would power the Yunhouse African dynamism for nearly a century. Beginning with the formation of the Berliner Cult in a basement flat in North London, Uncle Lekwot goes on to chair all critical meetings in Yunhouse until he is voted The Man Who Has Chaired More Meetings On Africa Than Any Human Dead Or Alive.</p>\r\n<p>He remains the Paramount Yun-Chief till the end of his life (c1999).</p>', 'Lekwot.jpg', '2017-08-09 12:59:15', '2017-08-09 12:59:15'),
(11, 'Ogesayi Mawe', '<p>Fellow Berliners fondly call him My-Way, a pet name he acquired when, at the first Berliner Cult initiation rites, he pledges to dedicate his legal studies to bringing Colonialism to book. Internationally, he is The Scourge Of Colonialism, being the only Core-23 Member who survives colonialism’s firing power to become the first president of his liberated country. He made Yunism an ideological brand worldwide.</p>\r\n<p>Mawe’s dream project is for his country to grow enough kola nuts to dominate the world stimulant market. The tea and coffee lobby of Europe and America not only shoot down his dream but had him overthrown by his own army. He is marooned in a remote and unknown Pacific Island from where he writes widely publicised stinkers to all those who betray Africa. Hence the legend of The One And Only Wandering President whose shadow continues to loom large in Yunhouse.</p>\r\n<p> </p>\r\n<p>Mawe returns to Yunhouse shortly before Lekwot Abaka’s death. He successfully leads the campaign against the amalgamation of Yunhouse with rival establishment of The Africa Adventurers Club.</p>', 'Ogesayi.jpg', '2017-08-09 13:00:26', '2017-08-09 13:00:26'),
(12, 'Big Mnama', '<p>He was a cute looking toddler spotted (in the company of his gardener father) on the lawns of a Colonial State House by an English aristocrat (Lord Kemp) visiting his cousin, the Governor General. Mnama was adopted by gubernatorial fiat. He is given everything his foster father could give, including a ring with the family heraldic crest. He gets classic upper class education, public school, Oxford, etc. Wherever he goes, the impression of his six-foot-six persona was the same: “an overpowering aura of an extraordinary specimen of homo sapiens” – a newspaper report. He speaks very little, as Cy quickly observes when the two meet while Big Mnama is perambulating in the campus of London University in search of his next move in life. No one is certain if he ever uttered ‘We shall never be pacified!’. But he found the Berliners to be good for a laugh. And he tells his father so. His father confirms that it was unfair for the Berliners to be evicted from their Camden Town flat simply because they enjoy good laughs at their meetings. Lord Kemp wills his Hampstead estate to Big Mnama and his fellow Berliners. The will is challenged by Big Mnama’s niece and the First Battle For Yunhouse ensues. Also Lord Kemp’s death induces a crisis for the English constitution: could Big Mnama inherit his father’s title or not?</p>', 'Mnama.jpg', '2017-08-09 13:01:37', '2017-08-09 13:01:37'),
(13, 'The Africa Picture (No Spitting)', '<p>This first ever pan-Africa news magazine is launched in the second decade of the twentieth century from the publishing stable of the World Chronicle [WC] whose publisher had an uncle who sat as a British delegate at the 1884 Berlin Conference. The publication is conceived as a medium for Englishmen to cross-fertilise their ideas and experiences of Africa. The publisher does not have African readership in mind. Yet the magazine becomes a must-read for Africans living London. The magazine is, without any doubt, the best – if not the only – chronicle of The Pacification Of The Natives. Palaver Hall library has all the issues of the magazine.</p>', 'Africa_pic.jpg', '2017-08-09 13:02:20', '2017-08-09 13:02:20'),
(14, 'Afrinc', '<p>This is a Purpose-built African Computer_Designed And Used Exclusively By Non-Africans. It is based in Liechtenstein. Yunhouse authorities manage to obtain a full printout of Afrinc’s database. There is strong evidence to suggest that The Computer’s bowels contains everything ever printed in The Africa Picture [No Spitting!]. It is also believed this computer may have data on everything there is to know about Yunhouse and more.</p>', 'afrinc.jpg', '2017-08-09 13:03:11', '2017-08-09 13:03:11'),
(15, 'John O\'Gafla', '<p>An Englishman and Editor-in-chief of The Africa Picture [No Spitting!] for over sixty years. His involvement with Africa begins in Yunhouse following introduction by Big Mnama who knew him earlier from Oxford. His journalistic career begins with freelance contributions of articles on the proceedings of Palaver Hall of Yunhouse. ‘I am an African’ John tells the publisher in the interview for full-time job on The Picture. On getting the job, John checks out of Yunhouse. It would be a glorious career that earns him knighthood from the English Crown as well recognition as the Number One Africanist (he claims copyright for the coinage). His numerous obituaries referred to him as Mr Africa: The Man Who Most Probably Has Written Africa More Times Than Anyone Else Under The Sun.</p>\r\n<p>John O’Gafla is the founder member of the first ever batch of The Africa Correspondents, an informal pints gang of real ale enthusiasts in Fleet Street which metamorphoses into The Africa Adventurers Club. His one African dream is to witness the amalgamation of Yunhouse with The Adventurers. But he, of all people, knows that the task would be as difficult as it would be for him (certificated obese all his life) Climbing Mount Kilimanjaro (title of his unpublished memoirs). Especially given the well-known fact that he is the principal architect in the establishment of AFC (Africa Freedom Council) with which reconciliation with Yunhouse is beyond imagination.</p>', 'John.jpg', '2017-08-09 13:04:01', '2017-08-09 13:04:01'),
(16, 'The African Adventurers Club', '<p>Members of the Adventurers Club do not call themselves Africanists. But everyone else does. And its founder John O’Gafla is not only happy to be called an Africanist, he even claims credit for coining the term. The members say the Adventurers is a place to meet and discuss Africa objectively which, the members believe, is not possible in the highly charged atmosphere of Yunhouse.</p>', 'AdventurersClub.jpg', '2017-08-09 13:04:48', '2017-08-09 13:04:48'),
(17, 'The Africa Freedom Council', '<p>A political movement that germinates from a public lecture by an Oxford University Don at the Adventurers Club. The Professor gets branded William Wilberforce II (after the famous Englishman who campaigned against slavery and slave trade) for arguing that colonialism oppresses Africans’ fundamental human rights and therefore offensive to English sense of justice. AFC launching is a grand ceremony attended by dozens of invited African tribal chiefs who voyage to London in a special vessel named SS FREEDOM.</p>', 'freedom_council.jpg', '2017-08-09 13:05:30', '2017-08-09 13:05:30'),
(18, 'Sir Emmanuel Nkungolo', '<p>A talented church organist who is sponsored by the missionaries to study music in London. He is a Berliner – a foundation member of Yunhouse. He volunteers to spy on AFC [Africa Freedom Council] by faking public defection from Yunhouse to The Adventurers. He founds his country’s AFC Chapter on the platform of which he gets elected as the first president to whom the colonial administration hands power. He does not go back to Yunhouse.</p>', 'Nkungolo.jpg', '2017-08-09 13:06:21', '2017-08-09 13:06:21'),
(19, 'Professor Alphonsus Do-Remi', '<p>A prolific social scientist whose regular publications on Africa is syndicated in many countries and languages. Probably the first African to formally accept the appellation of Africanist. He personally prefers that his academic mantra be referred to as ‘Africaism’ – ‘African intellectualism without tears’. He is the only known African with formal membership of the Adventurers Club. Upon being elected as President of The Adventurers, the Professor undertakes to unite Yunhouse with The Adventurers. His ambition provokes The Second Battle For Yunhouse.</p>', 'Alphonsus.jpg', '2017-08-09 13:07:18', '2017-08-09 13:07:18'),
(20, 'Beryl Fairbanks', '<p>The devoted Yunhouse Secretary whom everyone knows but who hardly talks to anyone. The young lady from Shropshire is sightseeing at Westminster when she is swept – literally – off her feet by the tumult that greets the Law Lords’ verdict that Africa House rightfully belongs to the Africans. Seated in the electrified atmosphere of jubilation, she humbly asks if there is anything she could do. She is asked to take notes. And she begins to take notes, and continues to do so from her permanent position at the right hand of the Palaver Hall Chairman (Uncle Lekwot). Four decades later she is voted The Secretary Who Has Typed Africa More Times Than Any Secretary In The Whole World. The full record of the proceedings of Palaver Hall is Beryl’s creation.</p>', 'Beryl.jpg', '2017-08-09 13:08:08', '2017-08-09 13:08:08'),
(21, 'The Berliner Cult (a.k.a The Core-23)', '<p>Initially there were eleven Africans who resolved to form themselves into the Berliner Cult, their motto: We Shall Never Be Pacified!. They mixed their bloods in a jar of hot water and drank it. Ritual is repeated with each additional member until membership reached twenty-three (The Core-23), the number that appended their signatures to the possession documents of Yunhouse after fighting and winning the First Battle Of Yunhouse. The Berliner Cult’s anti-colonialism stance is the essence of the Yunhouse story which concludes with Ogesayi Mawe [One And Only Wandering President] as the last surviving  member as The Core-23</p>', 'Berliner.jpg', '2017-08-09 13:08:55', '2017-08-09 13:08:55'),
(22, 'Palavar Hall', '<p>Here, discussion on any subject can be slated – as long as it is about Africa.</p>', 'Palavar.jpg', '2017-08-09 13:09:43', '2017-08-09 13:09:43');

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
(1, 'Certificate', 'Certificate.pdf', '2017-08-23 20:12:46', '2017-08-23 20:32:25'),
(3, 'Acceptance', 'Acceptance.pdf', '2017-08-23 21:35:04', '2017-08-23 21:35:04');

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
(10, '2017_08_23_204338_create_downloads_table', 7);

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
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `media` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `body`, `media`, `created_at`, `updated_at`) VALUES
(5, 'Salamatu', '', '', '2017-08-22 20:59:24', '2017-08-22 20:59:24'),
(6, 'Salamatu', '', '', '2017-08-22 21:01:42', '2017-08-22 21:01:42');

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
(1, 1, '10213500112717243', 'facebook', '2017-08-10 11:44:50', '2017-08-10 11:44:50');

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
  `featured_tale` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tales`
--

INSERT INTO `tales` (`id`, `title`, `body`, `published`, `slug`, `featured_tale`, `created_at`, `updated_at`) VALUES
(1, 'MOTHER AFRICA', '<p>The 20th Century was drawing to a close when the press release came: “ALL HUMANS ON PLANET EARTH ARE DESCENDED FROM AN AFRICAN WOMAN”.</p>\r\n<p> </p>\r\n<p>I screamed! to the hearing of all humans present in the London Fleet Street newsroom, where I was still swaggering in the euphoria of my very recently acquired status of first ever full-blooded African with a bona fide appellation of Fleet Street Journalist. The News Editor, who announced my appointment, said my position was an overdue 20th Century phenomenon that had been precipitated by a chance meeting at the 20th birthday party of his niece (student of Chinese language), whose current co-fornicator (an African who spoke and wrote fluent Japanese) had brought along (from Brixton) two African mates, one of whom spoke and wrote fluent Russian, and myself, an indigene of a former British Colony, where he (Fleet Street Editor) had been conceived (five decades earlier) during an imperial copulation between his father (Colonial Governor) and his mother (a blood relation of the last Emperor of Russia).</p>\r\n<p> </p>\r\n<p>‘The globe has become one village’, the News Editor proclaimed with much excitement. He got more excited when he learnt that I was currently engaged in pamphleteering on a subject that was burning – even as we spoke – on the streets of Brixton District in South London. Our publication, The Atlantic Storm, tracked day by the day the sordid details of Black people’s experience of the historic racial implosion with which Brixton eventually got baptised as Ethnic Headquarters Of Great Britain. The Atlantic Storm was in newspaper format and appeared daily, but its African-Jamaican-British publisher, Ohimini, maintained that it was an information sheet, maybe pamphlet. But definitely not a newspaper. He said: ‘Newspapers happened in Fleet Street where White journalists disseminate to White readers stories that are crafted with White interests as leitmotif’.</p>\r\n<p> </p>\r\n<p>At the mention of the Atlantic Storm and its publisher, the News Editor’s excitement peaked at the maximum on the Reuter’s scale: ‘If you can get me an interview with Ohimini, I’ll make you a Fleet Street journalist’. And he dragged me through the party crowd to a much more elderly Englishman in a wheelchair. Then I got my chance to shake the hands of the legendary Mr Africa: the man who had seen it all, heard it all, and wrote it all about Africa, whilst editing close to three thousand weekly editions of The Africa Picture, the newsmagazine – born at the beginning of the 20th Century – internationally believed to be the oldest Pan African journal on the planet. Mr Africa’s accolades include The Man Who Has Written Africa More Times Than Any Human Alive.</p>\r\n<p>The Fleet Street Editor said he owed his profound interest in Africa to Mr Africa under whom he had been a pupil journalist, an experience he shared with several other Fleet Street Journalists, most of whom were present at the 80th Anniversary celebration party of The Africa Picture when Ohimini made a bold attempt to behead the famous editor as ritual sacrifice to many angry African gods. Ohimini refused – very loudly – to shake his host’s welcoming hand, instead he whisked out a pick axe concealed under his winter coat. Pandemonium broke out! Then the following exchange of words:</p>\r\n<p> </p>\r\n<p>Ohimini: Show me your licence for taking Africa’s name in vain.</p>\r\n<p>Mr Africa: What are you talking about?</p>\r\n<p>Ohimini: Where are the Africans in The Africa Picture? Eighty years on and not one African journalist – not even a token one – has ever been aboard with you to paint the picture of the Africa peddled by your white supremacist rag.</p>\r\n<p>Mr Africa: Yes, they have. You, for example. Your behaviour shows why you cannot be trusted with objectivity on the subject of Africa.</p>\r\n<p>Ohimini: Do you, Mr Africa!, really know what it means to be an African?</p>\r\n<p>Mr Africa: Not necessarily. I just observe you guys – professionally. If you know what I mean…</p>\r\n<p> </p>\r\n<p>Mr Africa confidently predicted that Ohimini would not agree to be interviewed: ‘He’s too wrapped up in his Black World to talk to Whiteys in Fleet Street’. The prediction was wrong. Ohimini did agree to be interviewed, on two conditions: one, the text would be published in Question-and-Answer format – with his answers unedited, two, the article appears under his choice of words for the title as well as the sub-title, thus:</p>\r\n<p> </p>\r\n<p>To Whom It May Concern</p>\r\n<p> </p>\r\n<p>Ohimini Of Brixton Speaks On Being A Blackman</p>\r\n<p>Q: You chose your own title and subtitle?</p>\r\n<p>A: Yes. Because I only speak on what concerns me. And I aim to communicate with those who are concerned about what I speak. There’s too much talking – and listening – at cross- purposes going on in the world today.</p>\r\n<p>Q: You were born poor?</p>\r\n<p>A: Yes. It was poverty far below poverty line. To measure my poverty level you’d have to dig underneath the proverbial church rat.</p>\r\n<p>Q: You went to Oxford University?</p>\r\n<p>A: Yes. Shortly after arriving in the UK with my carpenter father, a sensitive white teacher followed her curiosity about my unusual mental aptitude and discovered that my IQ was well above average, enough for me to be accepted as member of a high IQ society, followed by a series of scholarships that eventually led to being at Oxford.</p>\r\n<p>Q: You hate White people?</p>\r\n<p>A: No. Many of my friends are White. I get along with them very well. I am every inch a fine specimen of what their educational system can produce. I have insider knowledge about what makes them tick. But they don’t know what makes me tick. They don’t know because they have no idea – and therefore cannot imagine – where I am coming from, other than the colour of my skin.</p>\r\n<p>Q: You hate Fleet Street?</p>\r\n<p>A: Not really. I object to Fleet Street’s agenda on a subject of great concern to me: being a Blackman. Many Fleet Street journalists are my peers from school and Oxford. We differ on our perception of the global racial war going on since the 15th Century and peaked with The Trans-Atlantic Holocaust in the 19th Century. Do you know how many Africans died in this war? Current estimates put African casualties at more than the total casualties in all the rest of human conflicts, past, present and in the foreseeable future. The record is likely to be surpassed only when the world suicidally goes barking MAD – as in mutually assured destruction!</p>\r\n<p>Fleet Street agenda is the victor’s agenda which assumes this war of attrition is over, and the losers have no choice but to shut up and put up with Whiteman’s world order: a world pulverised by White imperialism and then blended with White supremacist recipe into a multi-racial cocktail that is promoted as elixir of harmony for the human society at large. I disagree.</p>\r\n<p> </p>\r\n<p>Q: You founded The Atlantic Storm?</p>\r\n<p>A: Yes. For my father. He made me aware that the Atlantic Road in Brixton was more than coincidence in name. He said the Brixton Riots confirmed Atlantic Road as a live battlefront of The Transatlantic Holocaust. Also, the riots manifested the communal Day Of Reckoning for the black population of Brixton. A few decades earlier, High Priest Zephaniah of the Rastafarian religion had foretold the Day Of Reckoning as a worldwide existential phenomenon for every black person on earth: “On that day, my Brethren, an incident will trigger a spiritual tsunami when all the horrors of The Transatlantic Holocaust come bearing down on your soul. You would be so crushed by the agony of being black, you would wish you had never been born”.</p>\r\n<p> </p>\r\n<p>Q. Really?</p>\r\n<p>A. Yes. My my own Day of Reckoning when I first came home with news of my admission to Oxford: ‘That place is Whiteman’s Holy of Holies. Son, may God Almighty save you on the day when you discover that there is no room for you there’.</p>\r\n<p> </p>\r\n<p>Q. Wow?</p>\r\n<p>A. Indeed! So it was that I was totally devastated by the parcel bomb left at my door with a placard addressed to: “Nigger At Oxford – Which Nigger Farm are you descended from?”</p>\r\n<p>I wailed all the way from Oxford to Brixton, whilst my soul writhed and convulsed in the agony from the multiple wounds inflicted by the horrific details of a manual, How To Make A Nigger Slave, published in the middle of the 18th Century, and written by an ancestor of a fellow English student in Oxford.</p>\r\n<p>My soul was blown to smithereens by the details of the animal production technique of how the Negro – and wild horses – were to be bred, broken and domesticated to become beasts of burden for driving the material prosperity of their White owners.</p>\r\n<p> </p>\r\n<p>Q. Lord have mercy?</p>\r\n<p>A. Exactly. My father’s reaction: ‘Let me tell you something else you need to know: No Africans survived!’ He explained: ‘They all went in as Africans, majority physically died, the rest were spiritually slaughtered and turned into zombies popularly known as Niggers’. He asked: ‘Have you ever wondered why no African tribal tongues survived among the Africans who outlived slave trade and slavery?’ He warned: ‘Don’t ever attempt to find out how many of my father’s generation didn’t have any fathers to identify with?’ He advised: ‘High Priest Zephaniah says, “To stay alive you must stay deliberate illiterate! Don’t read what the white man has to say about you. Hear no racism, speak no racism, recognise no racism, feel no racism’.</p>\r\n<p> </p>\r\n<p>Q. So, why The Atlantic Storm?</p>\r\n<p>A. To recover the Blackman’s Storyline. At least part of it. According to High Priest Zephaniah, and I quote: “Every living person has a distinct Storyline in the divine drama of Man Alive scripted by Jehovah in The Book Of Life. You are the principal character in your own Storyline. You come of age when your Storyline is revealed at some point in your life. Your Storyline is your divine identity. Life becomes full of meaning when you get to read your Storyline. Equally true, is the trauma of the Day Of Reckoning when you discover that your Storyline has been hijacked and bastardised by someone else”.</p>\r\n<p> </p>\r\n<p>Thus, High Priest Zephaniah’s doctrine of Deliberate Illiterate is actually inoculation against further assaults of the Day Of Reckoning.</p>\r\n<p> </p>\r\n<p>My father assured me he and his peers would not play illiterate with The Atlantic Storm, once the publication is recognised as the story of black people, written by black people, and for the enlightenment of black people. My father assured me that black people would read us if we achieve our goal black people would be helped to understand themselves and many would in the process discover their individual Storylines.</p>\r\n<p> </p>\r\n<p>I passed the press release about Mother Africa to Ohimini. The Atlantic Storm screamed on its front page: THE HUMAN RACE IS BLACK! He saw the potential of the story beyond scientific news. No wonder Africans worship their ancestors, he thought, Africans must spiritually in tune. How about a letter to Mother Africa. Tell her how her descendants have evolved, the hatred, the love, the variety of colours, the variety of human habits as in cultures and traditions across the globe. Millennia of everything human, the wars, the atrocities, man’s inhumanity to man… Can you imagine Fleet Street reaction if the story had been that the mother of the entire human race was European? The jingoism to go with it…Finally Ohimini recommended a visit to Yunhouse in the north bank of River Thames, a really posh district called Hampstead. Yunhouse is the one and only African colony in whole world. At least that’s what the African residents believed.</p>\r\n<p> </p>\r\n<p>Ancestor worship, Ohiminiadded, was alive in Yunhouse. News about Mother Africa was bound to provoke a major event in the Palaver Hall of Yunhouse, an intellectual arena where Africa is discussed 24/7 – literally.</p>', '1', 'mother_africa', 'mother-africa.png', '2017-08-10 10:20:54', '2017-08-10 11:14:29'),
(2, 'Welcome to Yunhouse', '<p>LAST CHRISTMAS HAPPENED one thousand nine hundred and seventy-three hours ago. I counted them. This is the sort of thing you do when you are actively hibernating, like I have been doing. And it came to pass, that for nearly two thousand hours I’ve consciously and very happily cheated the English winter. Thanks to the authorities of Yunhouse where the policy is not to spare North Sea gas so as to maintain tropicalised environment. (House Rule Number 1A: Yunhouse and all its appurtenances are African in every particular and must be so regarded at all times).</p>\r\n<p> </p>\r\n<p>However, this winter saw Yunhouse temperature rise well above tropical level. The source of that extra heat is my hibernation corner: Hut 007, a Yunhouse dwelling in which an African lived through World War One as well as World War Two and died in fear of counting any further. That African is Dr Cyril Naikule, LL.B, BA, MPhil, PhD. This is the famous Cy, pronounced sii-wai or see-why, depending on how much meaning you wish to attach to the name in the Yun-legend that says an African once lived, studied, wrote and died for the continent shaped like a question mark. Hut 007 holds the complete set of Something To Write Home About, the final title for a writing expedition that its author once thought to call Through A Black Eye. It is a neat arrangement of forty-seven volumes in hardback notebooks numbered with Roman numerals, the contents are penned in exquisite cursive of the days before the skill of handwriting became separated from the art of calligraphy. The last unfinished volume is titled Afrinc File_ An Inquiry Into The Existence And Operations Of A Purpose-built African Computer Designed And Used Exclusively By Non-Africans.</p>\r\n<p> </p>\r\n<p>‘Afrinc must be defeated’, Cy wrote, thus firing the opening shot of the intellectual battle which climaxed last Christmas and has been simmering ever since. That battle has now been officially declared as The Second Battle For Yunhouse.</p>\r\n<p> </p>\r\n<p>Cy was a veteran of The First Battle For Yunhouse. In fact, A Black Account Of Our Battle was the original theme for Something To Write Home About, where, in the first volume, he asserted: ‘We may have to change the name of Africa in order to combat the carcinogen infused into our intellect since that day our ancestors had their continent baptised by people they knew not and for reasons they could not care less about’. He spent months investigating where, when and by whom, Africa was first written. He would later refuse to be listed as one of Africa’s Who’s Who because none of the competing dozens of publishers could tell him from whom it was or the occasion from which they inherited the profitable habit of taking the name of Africa in vain.</p>\r\n<p> </p>\r\n<p>‘Afrinc knows!’, Cy wrote. But since knowledge is power only when applied, the challenge was to establish the possible use The Computer and its Liechtenstein-based transnational owners could have for a piece of information like: ‘Cyril Naikule is a classic case of an African with a lifelong addiction to scribbling learnt from an Irish missionary who gave him his first lead pencil’.</p>\r\n<p> </p>\r\n<p>The cybernetic perception of himself amused him. He had volunteered such a definition of himself on numerous occasions, jokingly and seriously, publicly as well as privately, and in lucubrations on Something To Write Home About. Nevertheless, there was something scary in being thus identified and codified in the entrails of a Purpose-built African Computer Designed And Used Exclusively By Non-Africans. The Computer is versed in Yuntok, Cy concluded. That is even more sinister than he had imagined. Yuntok is his personal coinage, a tool designed to avoid a cliche-ridden account of The First Battle For Yunhouse, which, by the way, was really a battle of words, many of which acquired meanings that became unique to those whose souls had been touched by Yunhouse. Within the battlefield, a distinct medium of intellectual intercourse evolved, Yunhouse manner of expression, Yunhouse-talk, if you like, and why not Yuntok – phonetically rendered with African accent. In any case, as the story of the war became Something To Write Home About, Yuntok was the spring from which his daily thoughts flowed all these decades. Copyright for Yuntok belonged to him, and he would so insist after making his case in Afrinc File. Meanwhile, if The Computer could be that versed in Yuntok it must be capable of reading his thoughts. In other words, The Computer can peer into his mind. So The Computer must be around somewhere… Where?…How?… Suddenly the walls of Yunhouse sprang eyes and ears. Cy was frightened. So much so that he would not turn on the electricity when he sat down to work on Afrinc File. Instead, he used candles from a box of ninety sticks bought from an Indian shopkeeper who was amused when Cy said he needed them for his next birthday.</p>\r\n<p> </p>\r\n<p>Cy was about to turn eighty-nine when he was found slouched over the pages of Afrinc File that could easily have gone up in flames had the seventy-ninth candle not fallen on his bald head. Cy Naikule was buried with a black scar. This fact and its significance eluded Afrinc’s cybernetic awareness for three years because of Yunhouse internal security measures that preceded the victoriously black Christmas of nearly two thousand hours ago.</p>\r\n<p> </p>\r\n<p>The issue has been, is now, and perhaps will always be: whose intellectual property is Africa? Cy asked this question many times in his life, the last time being a margin note on The Printout at the point where Yunhouse was described as: “Once called Africa House; a multi-dwellings structure on the north bank of River Thames,in the London district of Hampstead; constructed during the reign of Queen Victoria, saw major alterations in the reigns of subsequent English monarchs; regarded by Africans all over the world as their intellectual property since that day a renegade group of Africans legally gained material possession of the building and declared it a Colony of Africa in the year Nineteen Hundred And Fifty-One – Anno Domini.</p>\r\n<p> </p>\r\n<p>But what really put the final fear of all computers in Cy was The Printout’s glossary of Yuntok definitions that included:</p>\r\n<p> </p>\r\n<p>Yunism is belief in Africa as the continent of hope and glory.</p>\r\n<p>Yunists are converts to Yunism.</p>\r\n<p>Yunis come and go out of Yunhouse, the sum total of their views on Africa contains everything you should know about the continent, and much more.</p>\r\n<p>Yunkees are physically dwellers in Yunhouse, they are a multi-racial, intellectually privileged class of Yunis.</p>\r\n<p>Yunactivists: Their activities make Yunhouse go round.</p>\r\n<p>Yunstar: With words this category of Yunactivists move mountains, rivers and other realities in Africa.</p>\r\n<p>Yuncom is a body of Yunactivists held together by a strand of Yunism, usually an international committee within whose name Africa is inserted somewhere, somehow.</p>\r\n<p>Yunrumours are open secrets about Yunhouse, Yunis, Yunists, Yunactivists and the state of Africa; they make up the non- verbal backdrop to the heated discussions in the Palaver Hall of Yunhouse.</p>\r\n<p>Yunanonymity is a dense intellectual cloud – mainly of Yunrumours, from which Yunstars shoot out en masse or individually to stake their intellectual claim on Africa.</p>\r\n<p>Yunanza is a scene in London or any other major city in the world where Africa is materially or intellectually bought and/or sold, usually flows with wine – often sparkling, Yunstars abound there.</p>\r\n<p>Yunrun is a soliloquized deluge of Yuntok, its length varies in</p>\r\n<p>direct proportion to how long the speaker has been a Yuni.</p>\r\n<p>Yunblues is a debilitating affliction of mind and/or body, prevalent among Yunis of Negroid stock; Yunrun is one of its many symptoms</p>', '1', 'welcome_to_yunhouse', 'welcome-to-yunhouse.jpg', '2017-08-22 08:54:14', '2017-08-22 08:54:14');

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
(1, 'Ome Ernest Matthew', 'itotoh@gmail.com', '', 'eNVdIrELWCZ4deKffxB277eNefPqJt67UaMaaCYk3e7S2s4D6swFAnUNbdzX', '2017-08-10 11:44:50', '2017-08-10 11:44:50'),
(2, 'Ernest', 'ernest@gmail.com', '$2y$10$REipxaPWpM8MTQGg9tmB5.Os1Ll8Ut69lY2hPypTlid6bB/sUoGCW', '2C8mGfbuOKllql4hXYdfVdxy34QxRzwyb0TzFoE9D8XNaPKEWild8CikiHMd', '2017-08-11 04:15:20', '2017-08-11 04:15:20'),
(3, 'test', 'test@test.com', '$2y$10$CymQUh/iDLB4vcqsq5TsuOmKnPBNReFyN3Wg43AlvdRzASgirthza', NULL, '2017-08-25 20:05:23', '2017-08-25 20:05:23'),
(4, 'demo', 'demo@demo.com', '$2y$10$y.WxsHrlQtwy5cZEtZgEPOkgUlF0pby3ADK5AQNujvJDntnRiD896', NULL, '2017-08-26 06:48:35', '2017-08-26 06:48:35'),
(5, 'demo2', 'demo@demo.fr', '$2y$10$9K5zFgfpDxlPjnvwG8YKP.ouTcB8Qq2xd3nKJ5aUQCO1dO0.Ips8m', NULL, '2017-08-30 14:01:11', '2017-08-30 14:01:11'),
(6, 'oliver iorkase', 'oliveriorkase@gmail.com', '$2y$10$uXtXfQ.WjDytxyo87x1YLumzJUBYAmZxORq0I2cNAap8jPTotih2W', NULL, '2017-08-31 17:49:39', '2017-08-31 17:49:39'),
(7, 'Ome Itotoh', 'omescroll@gmail.com', '$2y$10$YffVa9jFZPjIPPd/8DmXpeq6PM8Tm6qXqTQodEzpz0m2XVrsbqbAe', 'zIoKuPMOSHgDyNCMRPZrTS0LDRQRBeDy6DVvhwL1paqVt4PkXaa4MIt3OJ5L', '2018-05-05 15:06:22', '2018-05-05 15:06:22'),
(8, 'Timfon', 'timfon@gmail.com', '$2y$10$8hvNNzotQ0e3H/5D2GdxL.azMzsUIHfVk4QEYj2UUhmW3TwxS9pQu', 'QdngEAxKDdtkKAOtqG75V9lmqjRTPZtow4TockU5LYPC3KJJQJpQQ3BIWlSB', '2018-05-12 13:09:54', '2018-05-12 13:09:54'),
(9, 'Adobe Obe', 'adobesa@yahoo.com', '$2y$10$do4cdkHMafArzrQZGCSKCORpcp9zq8k6A4RJzST6cj8DrVpw/jZd2', 'pDcKScYxzf1ioJqQMvOnQJrVCKpztKE60SFR0u90crpwTxfm7lELJIQxY9Kx', '2018-05-12 13:29:54', '2018-05-12 13:29:54');

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
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `social_providers`
--
ALTER TABLE `social_providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tales`
--
ALTER TABLE `tales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
