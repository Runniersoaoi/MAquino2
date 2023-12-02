CREATE TABLE `servicios` (
  `idservicio` int unsigned NOT NULL AUTO_INCREMENT,
  `cNombreServicio` varchar(300) DEFAULT NULL,
  `cDescripcion` varchar(300) DEFAULT NULL,
  `nPrecioServicio` decimal(16,2) DEFAULT NULL,
  `cRutaImagenServicio` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idservicio`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
