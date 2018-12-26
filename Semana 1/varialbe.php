<HTML>
<HEAD>
<TITLE>Mi primer programa en PHP 7</TITLE>
</HEAD>
<BODY>
<?php	
	
	echo "Este es el típico Hola Mundo!!! <br><br><br>" ;
	$variable = 1;
	$Variable = 2;
	$VARIABLE = 3;
	$variable_flotante = 123.123;
	$variable_caracter = "123.1 23";
	$variable_boolean = true;
	$variable_null = null;

	echo ("valor de variable es : $variable <br>");
	echo ("valor de variable es : $Variable <br>");
	echo ("valor de variable es : $VARIABLE <br>");
	echo ("valor de variable es : $variable_flotante <br>");
	echo ("valor de variable es : $variable_caracter <br>");
	echo ("valor de variable es : $variable_boolean <br>");
	echo ("valor de variable es : $variable_null <br><br><br><br>");

	$numero_double = 1234.123;
	$numero_double2 = 0.123;
	$numero_double3 = -124.0;
	
	echo ("Numero double : $numero_double <br>");
	echo ("Numero double : $numero_double2 <br>");
	echo ("Numero double : $numero_double3 <br>");

	printf ("%f","$numero_double3<br>");

	$cadena1 = "Esto es una cadena de caracteres";
	$cadena2 = 'Esto es una cadena de caracteres en comillas simples';

	$cadena3 = "";

	echo "<br>$cadena1<br>";
	echo "$cadena2<br><br><br><br>";

	$variable_booleana = true;
	
	if ($variable_booleana)
		{
			echo ("el resultado es verdadero");
		}	
	
	$variable_nula = NULL;

	if ($variable_nula)	
		{
			echo ("el resultado es verdadero");
		}
	else
		{
			echo ("el resultado es falso<br><br><br><br>");
		}
	
	$variable1 = "hola";
	$$variable1 ="mundo";

	echo ("$variable1 $$variable1<br>") ;
	echo ("$variable1 $hola<br>") ;

	
?></BODY>
</HTML>