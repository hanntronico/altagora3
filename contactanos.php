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
		<?php include ("izq_preinscrip.php"); ?>
		
		
		<div id="cuerpo">
			<br><br>
			<div id="foto2">
				<img src="imagenes/foto_contactanos.jpg" alt="foto ciudad"> <br>
				<!-- Foto: Vista panor&aacute;mica del Campus Universitario UDCH -->
			</div>
			<br><br>
			
			<div id="form_preinscrip">
				<h1>Formulario de contacto</h1>
				<div id="content_form_contacto">
					<p>Para contactarse con nosotros es necesario que llene los campos que tenga * 
para poder atenderlos</p>

					<form name="frmpreins" id="frmpreins" action="#" method="post">
						<table border="0" cellpadding="10" cellspacing="0">
							<tr>
								<td class="label"><label>Contactarse con: </label></td>
								<td>
									<select>	
										<option value="1">Postgrado</option>
										<option value="2">Opción 2</option>
										<option value="3">Opción 3</option>
										<option value="4">Opción 4</option>
										<option value="5">Opción 5</option>
										<option value="6">Opción 6</option>
									</select>
								</td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td class="label"><label>Nombres:</label></td>
								<td><input type="text" name="txtnombres" value="" placeholder="Escriba aquí su nombre"></td>
								<td>*</td>
							</tr>
							
							<tr>
								<td class="label"><label>Apellidos:</label></td>
								<td><input type="email" name="txtape" value="" placeholder="Escriba aquí sus apellidos"></td>		
								<td>*</td>
							</tr>
							<tr>
								<td class="label"><label>Dirección:</label></td>
								<td><input type="text" name="txtdirec" value="" placeholder="Escriba aquí su dirección"></td>
								<td>&nbsp;</td>
							</tr>
							<tr>
								<td class="label"><label>Teléfono:</label></td>
								<td><input type="text" name="txtelefono" value="" placeholder="Escriba aquí su teléfono"></td>
								<td>*</td>
							</tr>
							<tr>
								<td class="label"><label>Correo electrónico:</label></td>
								<td><input type="text" name="txtemail" value="" placeholder="Escriba aquí su correo"></td>
								<td>*</td>
							</tr>

							<tr>
								<td class="label"><label>Asunto:</label></td>
								<td><input type="text" name="txtasunto" value="" placeholder="Escriba aquí el asunto"></td>
								<td>*</td>
							</tr>

							<tr>
								<td class="label"><label>Mensaje:</label></td>
								<td><textarea name="txtmensaje"></textarea></td>
								<td>*</td>
							</tr>

							<tr>
								<td class="label1"><label>¿Desea recibir información
								sobre cursos y programas?</label></td>
								<td align="left">
									<input type="radio" name="info" value="1" class="radio">Si
									<input type="radio" name="info" value="0" class="radio">No
								</td>
								<td>&nbsp;</td>
							</tr>

							<tr>
								<td align="center" colspan="3">
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