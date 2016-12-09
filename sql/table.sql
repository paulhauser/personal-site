CREATE OR REPLACE TABLE `contact` (
  `id` int(11) NOT NULL,
  `contact-email` varchar(60) NOT NULL,
  `contact-message` text NOT NULL
);

ALTER TABLE `contact`
 ADD PRIMARY KEY (`id`);

ALTER TABLE `contact`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
