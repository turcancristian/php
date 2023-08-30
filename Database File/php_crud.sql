
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `users` (
  `id` int(12) NOT NULL,`
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(31, 'Radu', 'radu19@gmail.com', 'Radu19'),
(32, 'Cristian ', 'cristi22@gmail.com', 'cris22d'),
(33, 'Andreea', 'Andreea@gmail.com', '234fdsj'),
(34, 'Teodor', 'Teo@gmail.com', 'adsa4');


--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;
