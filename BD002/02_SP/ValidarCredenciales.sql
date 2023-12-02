DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ValidarCredenciales`(cNombreUsuario VARCHAR(300), cContraseñaUsuario VARCHAR(300))
BEGIN
	SELECT
		A.idusuario,
        A.cNombreUsuario,
        A.cContraseñaUsuario,
        A.cNombres,
        A.cApellidos
	FROM usuarios A
    WHERE A.cNombreUsuario = cNombreUsuario
		AND A.cContraseñaUsuario = cContraseñaUsuario;
END$$
DELIMITER ;
