DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarServicio`(idservicioP INT)
BEGIN
	UPDATE servicios
    SET
		lVigente = 0
	WHERE idservicio = idservicioP
		AND lVigente = 1;
END$$
DELIMITER ;
