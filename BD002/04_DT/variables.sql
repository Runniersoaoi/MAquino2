CREATE TABLE `variables` (
  `idvariables` int NOT NULL AUTO_INCREMENT,
  `cNombreVariable` varchar(300) DEFAULT NULL,
  `cValorVariable` varchar(300) DEFAULT NULL,
  `cDescripcion` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idvariables`),
  UNIQUE KEY `idvariables_UNIQUE` (`idvariables`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
