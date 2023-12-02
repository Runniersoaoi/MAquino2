DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarServicios`()
BEGIN
	SELECT 
		A.idservicio,
		A.cNombreServicio,
		A.cDescripcion, 
		A.nPrecioServicio,
		cRutaImagenServicio,
		A.lVigente
	FROM servicios A
    WHERE A.lVigente = 1;
END$$
DELIMITER ;
