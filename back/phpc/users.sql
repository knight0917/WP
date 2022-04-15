CREATE TABLE IF NOT EXISTS `users` (
`userId` int(8) NOT NULL,
  `userName` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

ALTER TABLE `users`
 ADD PRIMARY KEY (`userId`);

ALTER TABLE `users`
MODIFY `userId` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=0;