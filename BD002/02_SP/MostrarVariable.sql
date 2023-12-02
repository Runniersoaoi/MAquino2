DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarVariable`(idvariable INT)
BEGIN
	SELECT 
		A.idvariables,
        A.cNombreVariable,
        A.cValorVariable,
        A.cDescripcion,
        A.lVigente
	FROM variables A
    WHERE A.idvariables = idvariable
		AND A.lVigente = 1;
END$$
DELIMITER ;
