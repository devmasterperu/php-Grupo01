<HTML>
<HEAD>
<TITLE>Mi primer programa en PHP 7</TITLE>
</HEAD>
<BODY>
	<?php	
		//if (condicion){instrucciones} else {instrucciones};

		$num1 = 1;
		$num2 = 10;

		if($num1 + $num2 == 10)
			{
				echo "la suma es correcta";
			}
		else if ($num1 === "5") {
			echo "es igual";
		}
		else
		{
			echo "no se cumple";
		}


		switch ($num1) {
			case 1:
				echo "el numero es uno<br><br><br>";
				break;
			case 2:
				echo "el numero es dos<br><br><br>";
				break;
			case 5:
				echo "el numero es cinco<br><br><br>";
				break;
			default:
				echo "ninguno a las anteriores<br><br><br>";
				break;
		}


		$cont = 1;
		while ( $cont<=10 ) {
			echo $cont."<br>";
			$cont++;
		}

	?>
</BODY>
</HTML>