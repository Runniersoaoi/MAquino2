DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarUsuario`(idusuarioP INT, cNombreUsuario VARCHAR(300), cContraseñaUsuario VARCHAR(300), cNombres VARCHAR(300), cApellidos VARCHAR(300))
BEGIN
	UPDATE usuarios
    SET
		cNombreUsuario = cNombreUsuario,
        cContraseñaUsuario = cContraseñaUsuario,
        cNombres = cNombres, 
        cApellidos = cApellidos
	WHERE idusuario = idusuarioP
		AND lVigente = 1;
END$$
DELIMITER ;
