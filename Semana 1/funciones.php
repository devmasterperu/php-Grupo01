<HTML>
<HEAD>
<TITLE>Mi primer programa en PHP 7</TITLE>
</HEAD>
<BODY>
<?php	
	
	define("INSTITUTO","DevMaster");
	define("DOCENTE","Luis");
	
	define("COLOR_ROJO","#FF0000");

	echo INSTITUTO;
	echo DOCENTE;
	echo COLOR_ROJO;
	
	if (defined("INSTITUTO"))
	{
		echo "El instituto es : " .INSTITUTO."<br>";
	}
	
echo PHP_VERSION."<br>";
echo PHP_OS."<br>";
echo PHP_LIBDIR."<br><br><br><br><br><br>";


$dni = "12345678";

if(isset($dni))
	{
		echo ("la variable DNI existe!!!<br><br><br><br><br><br>");
	}

unset($dni);
if(isset($dni))
	{
		echo ("la variable DNI existe!!!<br><br><br><br><br><br>");
	}
else
	{
		echo ("la variable DNI ya no existe!!!<br><br><br><br><br><br>");
	}


$correo = "la@ggg.com";
echo gettype($correo)."<br><br><br>";

if (settype($correo,"integer"))
{
	echo "Variable correo convertida a Integer<br>";
}
else
{
	echo "Variable correo no pudo ser convertida a Integer<br>";
}
echo ("Valor actual de correo es : $correo<br><br><br>");

$prueba = 0;

if (is_string($prueba))
{
	echo("prueba es del tipo integer<br>");
} 


$prueba2 = "232";
echo "el tipo de la variable es : ".gettype($prueba2)."<br>";

$numero = intval($prueba2);
echo "el tipo de la variable es : ".gettype($numero)."<br>";

?></BODY>
</HTML>