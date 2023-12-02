DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarServicio`(idservicio INT)
BEGIN
	SELECT 
    A.idservicio,
    A.cNombreServicio,
    A.cDescripcion, 
    A.nPrecioServicio,
    cRutaImagenServicio,
    A.lVigente
	FROM servicios A
    WHERE A.idservicio = idservicio
		AND A.lVigente = 1;
END$$
DELIMITER ;
