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
		<?php include ("izq_enconst.php"); ?>
		
		
		<div id="cuerpo">
			<br><br>
			<div id="foto2">
				<img src="imagenes/img_preins.jpg" alt="foto ciudad"> <br>
				<!-- Foto: Vista panor&aacute;mica del Campus Universitario UDCH -->
			</div>
			<br><br>
			
			<div id="form_preinscrip">
				<h1>Pre Inscríbete</h1>
				<div id="content_form">
					<form name="frmpreins" id="frmpreins" action="#" method="post">

						<table border="0" cellpadding="10" cellspacing="0">
							<tr>
								<td class="label"><label>Elige un programa: </label></td>
								<td>
									<select>	
										<option value="1">Maestría en Administración de Negocios</option>
										<option value="2">Derecho Penal y Procesal Penal</option>
										<option value="3">Gerencia en Servicio de Salud</option>
										<option value="4">Derecho Civil y de la Empresa</option>
										<option value="5">Docencia y Gerencia Educativa</option>
										<option value="6">Tributación y Gestión Fiscal</option>
									</select>
								</td>
							</tr>
							<tr>
								<td class="label"><label>Tu nombre completo:</label></td>
								<td><input type="text" name="txtnombres" value="" placeholder="Escriba aquí su nombre"></td>
							</tr>
							
							<tr>
								<td class="label"><label>Tu correo electrónico:</label></td>
								<td><input type="email" name="txtemail" value="" placeholder="Escriba aquí su nombre"></td>		
							</tr>
							<tr>
								<td class="label"><label>Tu teléfono:</label></td>
								<td><input type="text" name="txtelefono" value="" placeholder="Escriba aquí teléfono"></td>
							</tr>
							<tr>
								<td align="right" colspan="2">
									<input type="submit" name="enviar" value="Enviar" class="boton">
								</td>
							</tr>							
						</table>

					</form>
				</div>
			</div>
		</div>

		<br><br>

		<?php include ("pie.php"); ?>
		<br><br><br>
	</div>

</body>
</html>