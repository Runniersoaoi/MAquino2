DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarVariable`(idvariableP INT, cValorVariable VARCHAR(300), cDescripcion VARCHAR(300))
BEGIN
	UPDATE variables
    SET
		cValorVariable = cValorVariable,
        cDescripcion = cDescripcion
	WHERE idvariables = idvariableP
		AND lVigente = 1;
END$$
DELIMITER ;
