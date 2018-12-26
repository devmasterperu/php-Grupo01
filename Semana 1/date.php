<HTML>
<HEAD>
<TITLE>Mi primer programa en PHP 7</TITLE>
</HEAD>
<BODY>
	<?php	

		$array = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

		/*
		a Imprime "am" o "pm"
		A "AM" o "PM"
		h La hora en formato (01-12).
		H Hora en formato 24 (00-23).
		g Hora de 1 a 12 sin un cero delante.
		G Hora de 1 a 23 sin cero delante.
		i Minutos de 00 a 59.
		s Segundos de 00 a 59.
		d Día del mes (01 a 31).
		j Día del mes sin cero (1 a 31).
		w Día de la semana (0 a 6). El 0 es el domingo.
		m Mes actual (01 al 12).
		n Mes actual sin ceros (1 a 12).
		Y Año con 4 dígitos (2004).
		y Año con 2 dígitos (04).
		z Día del año (0 a 365).
		t Número de días que tiene el mes actual.
		*/

		echo "Fecha Actual : ".date("d-m-Y")."<br>";
		echo "Dia del año : ".date("z")."<br>";
		echo "Estamos en el mes : ".$array[date("n")-1]."<br>";
	?>
</BODY>
</HTML>