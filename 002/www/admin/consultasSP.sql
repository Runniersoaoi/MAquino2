CREATE DEFINER=`root`@`localhost` PROCEDURE `InsertarVariable`(cNombreEmpresa VARCHAR(300),cValorVariable VARCHAR(300), cDescripcion VARCHAR(300))
BEGIN
	INSERT INTO variables 
	(cNombreVariable, cValorVariable, cDescripcion, lVigente)
	VALUES
	(cNombreVariable, cValorVariable, cDescripcion, 1);
END
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarVariables`()
BEGIN
	SELECT 
		A.idvariable,
        A.cNombreVariable,
        A.cValorVariable,
        A.cDescripcion,
        A.lVigente
    FROM variables A
    WHERE A.lVigente = 1;
END
CREATE DEFINER=`root`@`localhost` PROCEDURE `MostrarVariable`(idvariable INT)
BEGIN
	SELECT 
		A.idvariable,
        A.cNombreVariable,
        A.cValorVariable,
        A.cDescripcion,
        A.lVigente
    FROM variables A
    WHERE A.idvariable = idvariable
		AND A.lVigente = 1;
END
CREATE DEFINER=`root`@`localhost` PROCEDURE `ActualizarVariable`(idvariable INT,cNombreVariable VARCHAR(300),cValorVariable VARCHAR(300), cDescripcion VARCHAR(300))
BEGIN
	UPDATE variable
    SET
		cNombreVariable = cNombreVariable,
        cValorVariable = cValorVariable,
        cDescripcion = cDescripcion
    WHERE idvariable = idvariable
		AND lVigente = 1;
END
CREATE DEFINER=`root`@`localhost` PROCEDURE `EliminarVariable`(idvariable INT)
BEGIN
	UPDATE variable
    SET
		lVigente = 0
    WHERE idvariable = idvariable
		AND lVigente = 1;
END