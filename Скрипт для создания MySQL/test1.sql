CREATE TABLE `football` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateOfBirth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `football` (`id`, `name`, `surname`, `sex`, `dateOfBirth`, `team`, `country`) VALUES
(1, '2', '2', '1', '26.04.2002', '1', '1');

ALTER TABLE `football`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `football`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
COMMIT;
