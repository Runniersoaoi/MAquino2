DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarServicio`(idservicioP INT, cNombreServicio VARCHAR(300), cDescripcion VARCHAR(300), nPrecioServicio VARCHAR(300), cRutaImagenServicio VARCHAR(300))
BEGIN
	UPDATE servicios
    SET
		cNombreServicio = cNombreServicio,
        cDescripcion = cDescripcion,
        nPrecioServicio = nPrecioServicio,
        cRutaImagenServicio = cRutaImagenServicio
	WHERE idservicio = idservicioP
		AND lVigente = 1;
END$$
DELIMITER ;
