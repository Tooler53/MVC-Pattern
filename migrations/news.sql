CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `short_content` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

ALTER TABLE `news`
  ADD PRIMARY KEY (`id`,`category`),
  ADD KEY `category` (`category`);

ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`category`) REFERENCES `news_category` (`id`);
COMMIT;

INSERT INTO `news` (`id`, `category`, `title`, `date`, `short_content`, `content`) VALUES
(1, 1, 'Lorem ipsum dolor sit amet', '2019-04-12 04:26:16', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab assumenda beatae blanditiis consectetur dolorum enim incidunt laborum laudantium modi necessitatibus quia quisquam ratione, repudiandae sed sit voluptas voluptatum! Reiciendis, similique.'),
(1, 2, 'Далеко не для всех. Экспресс-обзор Outward', '2019-04-12 04:28:19', 'Скажу честно, за игрой я не следил и увидел ее в день релиза в Steam. Единственное, что меня привлекло – это скриншоты и красивая, как мне казалось, графика. В общем, купил я ее импульсивно и совершил ошибку. Поэтому я напишу лишь о том, к чему вам нужно быть готовым покупая Outward.', 'В первую очередь, графика красивая только местами. Часто попадаются некоторые недоработанные отдельные части локаций. Где-то на горы натянута простая текстура, которая сильно выбивается из общей картины. В других местах вас ждет и густая растительность, и постройки и какие-то кусты. Которые, в целом, выглядят хорошо и создают ту самую общую картину из скриншотов.'),
(2, 1, 'WhatsApp: The \'black hole\' of fake news in India\'s election', '2019-04-14 14:44:32', 'WhatsApp, India\'s most popular messaging platform, has become a vehicle for misinformation and propaganda ahead of the upcoming election. The Facebook-owned app has announced new measures to fight this but experts say the scale of the problem is overwhelming.\r\n\r\nIndia was in the grip of patriotic fervour in early March when WhatsApp groups were flooded with photographs claiming to show proof that unprecedented Indian air strikes in Pakistani territory had been successful.\r\n\r\nWhile India\'s government said the 26 February strikes had killed a \"large number of militants\", Islamabad insisted there had been no casualties.\r\n\r\nBut BBC fact-checkers found that the photos - purportedly of dead militants and a destroyed training camp - were old images that were being shared with false captions. ', 'WhatsApp, India\'s most popular messaging platform, has become a vehicle for misinformation and propaganda ahead of the upcoming election. The Facebook-owned app has announced new measures to fight this but experts say the scale of the problem is overwhelming.\r\n\r\nIndia was in the grip of patriotic fervour in early March when WhatsApp groups were flooded with photographs claiming to show proof that unprecedented Indian air strikes in Pakistani territory had been successful.\r\n\r\nWhile India\'s government said the 26 February strikes had killed a \"large number of militants\", Islamabad insisted there had been no casualties.\r\n\r\nBut BBC fact-checkers found that the photos - purportedly of dead militants and a destroyed training camp - were old images that were being shared with false captions.\r\n\r\nOne photo showed a crowd of Muslim women and men gathered around three bodies but those pictured were actually victims of a suicide attack in Pakistan in 2014. A series of photos - of crumbling buildings, piles of debris and bodies in shrouds lying on the ground - were traced to a devastating earthquake in Pakistan-administered Kashmir in 2005. '),
(3, 1, 'Matter of fact-checkers: Is Facebook winning the fake news war?', '2019-04-14 14:44:32', 'For the people contracted by Facebook to clamp down on fake news and misinformation, doubt hangs over them every day. Is it working?\r\n\r\n\"Are we changing minds?\" wondered one fact-checker, based in Latin America, speaking to the BBC.\r\n\r\n\"Is it having an impact? Is our work being read? I don\'t think it is hard to keep track of this. But it\'s not a priority for Facebook.\r\n\r\n\"We want to understand better what we are doing, but we aren\'t able to.\"', 'For the people contracted by Facebook to clamp down on fake news and misinformation, doubt hangs over them every day. Is it working?\r\n\r\n\"Are we changing minds?\" wondered one fact-checker, based in Latin America, speaking to the BBC.\r\n\r\n\"Is it having an impact? Is our work being read? I don\'t think it is hard to keep track of this. But it\'s not a priority for Facebook.\r\n\r\n\"We want to understand better what we are doing, but we aren\'t able to.\"\r\n\r\nMore than two years on from its inception, and on International Fact-Checking Day, multiple sources within agencies working on Facebook\'s global fact-checking initiative have told the BBC they feel underutilised, uninformed and often ineffective.\r\n\r\nOne editor described how their group would stop working when it neared its payment cap - a maximum number of fact-checks in a single month for which Facebook is willing to pay.\r\n\r\nOthers told how they felt Facebook was not listening to their feedback on how to improve the tool it provides to sift through content flagged as \"fake news\".\r\n\r\n\"I think we view the partnership as important,\" one editor said.\r\n\r\n\"But there\'s only so much that can be done without input from both sides.\"\r\n\r\nAs the US prepares to hurl itself into another gruelling presidential campaign, experts feel Facebook remains ill-equipped to fend off fake news.\r\n\r\nDespite this, Facebook said it was pleased with progress made so far - pointing to external research that suggested the amount of fake news shared on its platform was decreasing. ');
