<HTML>
<HEAD>
<TITLE>Mi primer programa en PHP 7</TITLE>
</HEAD>
<BODY>
	<?php	
		
		$num = 4;

		$cont = 1;
		while ($cont <=5)
		{
			echo $cont."x"."5=".($num * $cont)."<br>";
			$cont++;
		}

		$num2 = 4;

		if($num2 % 2 == 0)
		{
			echo "el numero  = $num2 es par"."<br><br><br>";
		}
		else
		{
			echo "el numero  = $num2 es impar"."<br><br>";
		}

		echo "ejecicio 3"."<br><br>";

		$salario_bruto = 1200;

		$dsctoseg = 0.13;
		$dsctoafp = 0.04;
		$dsctos = ($salario_bruto*$dsctoseg)+($salario_bruto*$dsctoafp);

		$salario_neto = $salario_bruto-$dsctos;

		echo "Salario bruto : ".$salario_bruto."<br>";
		echo "dsctos : ".$dsctos."<br>";
		echo "-------------------------------"."<br>";
		echo "Salario Neto : ".$salario_neto."<br>";

		echo "ejecicio 4"."<br><br>";
		$numa=1;
		$numb=2;

		if ($numa > $numb)
		{
			echo "el mayor es $numa";
		}
		else if ($numa < $numb){
			echo "el mayor es $numb<br>";
		}else{
			echo "son iguales<br>";
		}


		echo "ejecicio 4"."<br><br>";
		$dia = 2;

		if ($dia <= 7){
			switch ($dia) {
				case 1:
					echo " el dia es lunes";
					break;
				case 2:
					echo " el dia es martes";
					break;
				case 3:
					echo " el dia es miercoles";
					break;
				case 4:
					echo " el dia es jueves";
					break;
				case 5:
					echo " el dia es viernes";
					break;
				case 6:
					echo " el dia es sabado";
					break;	
				default:
					echo " el dia es domingo";
					break;
			}
		}


	?>
</BODY>
</HTML>