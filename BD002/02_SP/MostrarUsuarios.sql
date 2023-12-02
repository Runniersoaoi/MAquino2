DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarUsuarios`()
BEGIN
	SELECT
		A.idusuario,
        A.cNombreUsuario,
        A.cContraseñaUsuario,
        A.cNombres,
        A.cApellidos
	FROM usuarios A
    WHERE A.lVigente = 1;
END$$
DELIMITER ;
