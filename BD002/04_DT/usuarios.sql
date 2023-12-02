CREATE TABLE `usuarios` (
  `idusuario` int NOT NULL AUTO_INCREMENT,
  `cNombreUsuario` varchar(300) DEFAULT NULL,
  `cContraseñaUsuario` varchar(300) DEFAULT NULL,
  `cNombres` varchar(300) DEFAULT NULL,
  `cApellidos` varchar(300) DEFAULT NULL,
  `lVigente` bit(1) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `idusuario_UNIQUE` (`idusuario`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
