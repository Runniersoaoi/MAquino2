DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarServicio`(cNombreServicio VARCHAR(300), cDescripcion VARCHAR(300), nPrecioServicio VARCHAR(300), cRutaImagenServicio VARCHAR(300))
BEGIN
	INSERT INTO servicios
    (cNombreServicio, cDescripcion, nPrecioServicio, cRutaImagenServicio, lVigente)
    VALUES
    (cNombreServicio, cDescripcion, nPrecioServicio, cRutaImagenServicio, 1);
END$$
DELIMITER ;
