DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarUsuario`(cNombreUsuario VARCHAR(300), cContraseñaUsuario VARCHAR(300), cNombres VARCHAR(300), cApellidos VARCHAR(300))
BEGIN
	INSERT INTO usuarios
    (cNombreUsuario, cContraseñaUsuario, cNombres, cApellidos, lVigente)
    VALUES
    (cNombreUsuario, cContraseñaUsuario, cNombres, cApellidos, 1);
END$$
DELIMITER ;
