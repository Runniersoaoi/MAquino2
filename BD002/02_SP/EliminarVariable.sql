DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarVariable`(idvariableP INT)
BEGIN
	UPDATE variables
    SET
		lVigente = 0
	WHERE idvariables = idvariableP
		AND lVigente = 1;
END$$
DELIMITER ;
