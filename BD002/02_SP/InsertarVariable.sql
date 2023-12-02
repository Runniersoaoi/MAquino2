DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarVariable`(cNombreEmpresa VARCHAR(300), cValorVariable VARCHAR(300), cDescripcion VARCHAR(300))
BEGIN
	INSERT INTO variables
    (cNombreVariable, cValorVariable, cDescripcion, lVigente)
    VALUES
    (cNombreEmpresa, cValorVariable, cDescripcion, 1);
END$$
DELIMITER ;
