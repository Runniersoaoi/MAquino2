DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarUsuario`(idusuario INT)
BEGIN
	SELECT
		A.idusuario,
        A.cNombreUsuario,
        A.cContraseñaUsuario,
        A.cNombres,
        A.cApellidos
	FROM usuarios A
    WHERE A.lVigente = 1
		AND A.idusuario = idusuario;
END$$
DELIMITER ;
