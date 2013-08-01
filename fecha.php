<?php 
	// $dia=date("l"); // Saturday
	// $mes=date("F"); // November
	// $ano=date("Y"); // 2012
	// date("l j \d\e F \d\e\l Y")

	$dia=date("l");
 
	if ($dia=="Monday") $dia="Lunes";
	if ($dia=="Tuesday") $dia="Martes";
	if ($dia=="Wednesday") $dia="Mi&eacute;rcoles";
	if ($dia=="Thursday") $dia="Jueves";
	if ($dia=="Friday") $dia="Viernes";
	if ($dia=="Saturday") $dia="Sabado";
	if ($dia=="Sunday") $dia="Domingo";
	 
	$mes=date("F");
	 
	if ($mes=="January") $mes="Enero";
	if ($mes=="February") $mes="Febrero";
	if ($mes=="March") $mes="Marzo";
	if ($mes=="April") $mes="Abril";
	if ($mes=="May") $mes="Mayo";
	if ($mes=="June") $mes="Junio";
	if ($mes=="July") $mes="Julio";
	if ($mes=="August") $mes="Agosto";
	if ($mes=="September") $mes="Setiembre";
	if ($mes=="October") $mes="Octubre";
	if ($mes=="November") $mes="Noviembre";
	if ($mes=="December") $mes="Diciembre";

	$ano=date("Y");

	echo "Chiclayo, ".$dia." ".date("j")." de ".$mes." del ".$ano;
 ?>