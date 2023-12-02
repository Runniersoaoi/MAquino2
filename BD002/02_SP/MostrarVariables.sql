DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarVariables`()
BEGIN
	SELECT 
		A.idvariables,
        A.cNombreVariable,
        A.cValorVariable,
        A.cDescripcion,
        A.lVigente
	FROM variables A
    WHERE A.lVigente = 1;
END$$
DELIMITER ;
