<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ALTAGORA</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link href="css/styles.css" rel="stylesheet" type="text/css" />
<script src="flash/Scripts/swfobject_modified.js" type="text/javascript"></script>
</head>

<body>

	<div id="contenedor">
		<?php include ("cabecera.php"); ?>
		<?php include ("izq_programas.php"); ?>
		
		<div id="cuerpo">
			<h1>Programas Académicos</h1>
			<div id="foto">
				<img src="imagenes/foto_programas.jpg" alt="foto ciudad"> <br><br>
			</div>
			<br><br><br>
			
			<div id="texto_prog">

				<table border="0" cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td width="48%">
							<div class="titu_prgmaestrias">Maestrías</div>
							<ul>
							    <li><a href="mag_admin.php">Maestría en Administración de Negocios</a></li>
							    <li><a href="mag_der_penal.php">Maestría en Derecho Penal y Procesal Penal</a></li>
							    <li><a href="mag_ser_salud.php">Maestría en Gerencia en Servicio de Salud</a></li>
							    <li><a href="mag_der_civil.php">Maestría en Derecho Civil y de la Empresa</a></li>
							    <li><a href="mag_doc_univ.php">Maestría en Docencia Universitaria y Gerencia Educativa</a></li>
							    <li><a href="mag_trib_gest.php">Maestría en Tributación y Gestión Fiscal</a></li>
							</ul>
						</td>
						<td width="10"></td>
						<td width="48%">
							<div class="titu_prgdoctorados">Doctorados</div>
							<ul>
							    <li><a href="doc_admin.php">Doctorado en Administración y Dirección de Empresas</a></li>
							    <li><a href="doc_ger_salud.php">Doctorado en Gerencia de Salud</a></li>
							    <li><a href="doc_educ.php">Doctorado en Ciencias de la Educación</a></li>
							    <li>&nbsp;</li>
							    <li>&nbsp;</li>
							    <li>&nbsp;</li>
							</ul>	
						</td>
					</tr>
				</table>

			</div>
		</div>

		<br><br>

		<?php include ("pie.php"); ?>
		<br>
	</div>




</body>
</html>