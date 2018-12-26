<HTML>
<HEAD>
<TITLE>Mi primer programa en PHP 7</TITLE>
</HEAD>
<BODY>
	<?php	
		$entero = 23;
		$entero_negativo=-$entero;
		$entero2 = -$entero_negativo;

		echo $entero."<br>";
		echo $entero_negativo."<br>";
		echo $entero2."<br><br><br>";
		
		$num1 = 2;
		$num2 = "2";

		echo "suma : ".($num1 + $num2)."<br>";
		echo "resta : ".($num1 - $num2)."<br>";
		echo "multiplicación : ".$num1 * $num2."<br>";
		echo "división : ".$num1 / $num2."<br>";
		echo "Resto de División : ".$num1 % $num2."<br>";


		if ($num1 === $num2)
		{
			echo "El numero : ".$num1." es igual que ". $num2."<br>";
		}

		//y && - and
		//o || - or - xor
		//!

		$comp1 = 10;
		$comp2 = 9;
		$comp3 = true;

		if($comp1 < $comp2 || $comp3)
		{
			echo ("Se cumplen las dos condiciones<br>");
		}

		$valor=false;
		$valor == true ? $resultado = "ok" : $resultado = "fallo";

		$a = 1;
		$b = 5;

		//$a = $a + 1;

		$b = $a++; // 1

		$b = ++$a; // 2
		//$a~;   ~$a;
		/*$a+=$b;
		$a= $a + $b;
		$a-=$b;
		$a= $a - $b;

		$a.=$b;
		$a = $a.$b;*/

		$resultado = 20 + (10 * 10);

		echo $resultado;


		$añonac = 0;
		$edad = 0;
		
	?>
</BODY>
</HTML>