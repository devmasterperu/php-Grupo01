<HTML>
<HEAD>
<TITLE>Mi primer programa en PHP 7</TITLE>
</HEAD>
<BODY>
	<?php	
		$num = 4;
		do {
			echo "el numero es $num<br>";
			$num++;
		} while ( $num < 5 );


		$num2=4;
		for ($i=1; $i <=5 ; $i++) { 
			echo "$i x $num2 =".($i*$num2)."<br>";
		}

		foreach ($variable as $key => $value) {
			# code...
		}
	?>
</BODY>
</HTML>