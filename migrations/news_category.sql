CREATE TABLE `news_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1251;

ALTER TABLE `news_category`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `news_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

INSERT INTO `news_category` (`id`, `name`) VALUES
(1, 'sport'),
(2, 'games'),
(3, 'programms'),
(4, 'cinema');