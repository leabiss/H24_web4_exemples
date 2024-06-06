CREATE TABLE `donnees`
(
	`ID` int(11) NOT NULL,
	`texte` varchar(100) NOT NULL
) ENGINE = InnoDB
DEFAULT CHARSET = utf8mb4;
INSERT INTO `donnees` (`ID`, `texte`)
VALUES (1, 'TEST 1'),
			 (2, 'TEST 2'),
			 (3, 'TEST 3'),
			 (4, 'TEST 4');
