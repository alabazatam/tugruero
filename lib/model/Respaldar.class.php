<?php

class Respaldar {
	
	function generarRespaldo(){
	
	/*
DROP TABLE SolicitudPlanBCK;
DROP TABLE SolicitudPagoDetalleBCK;
DROP TABLE SolicitudPlanSeleccionBCK;
DROP TABLE SolicitudDocumentosBCK;
DROP TABLE SolicitudAprobadaBCK;

CREATE TABLE SolicitudPlanBCK AS 
SELECT * FROM SolicitudPlan WHERE Respaldo = 0;

CREATE TABLE SolicitudPagoDetalleBCK AS 
SELECT spd.*
FROM SolicitudPagoDetalle spd
INNER JOIN SolicitudPlan sp ON sp.IdSolicitudPlan = spd.IdSolicitudPlan
WHERE Respaldo = 0;

CREATE TABLE SolicitudPlanSeleccionBCK AS
SELECT sps.* 
FROM SolicitudPlanSeleccion sps
INNER JOIN SolicitudPlan sp ON sp.IdSolicitudPlan = sps.IdSolicitudPlan
WHERE Respaldo = 0;

CREATE TABLE SolicitudDocumentosBCK AS
SELECT sd.* 
FROM SolicitudDocumentos sd
INNER JOIN SolicitudPlan sp ON sp.IdSolicitudPlan = sd.IdSolicitudPlan
WHERE Respaldo = 0;

CREATE TABLE SolicitudAprobadaBCK AS
SELECT sa.* 
FROM SolicitudAprobada sa
INNER JOIN SolicitudPlan sp ON sp.IdSolicitudPlan = sa.IdSolicitudPlan
WHERE Respaldo = 0;


UPDATE SolicitudPlan SET Respaldo = 1;
*/
	$file=fopen($_SERVER["DOCUMENT_ROOT"]."/".main_folder."/web/files/Respaldos/admin_tugruero.sql".date("Ymd_his"),"x+") or die("Problemas");
	//vamos añadiendo el contenido
	fputs($file,"Create table ");
	fputs($file,"\n");
	fputs($file,"marcos linea");
	fputs($file,"\n");
	fputs($file,"marcos linea");
	fclose($file);
	}
	
	
}
