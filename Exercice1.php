<?php

$nombre = trim(fgets(STDIN));

function fibonacci($num){

	$num1=0;
	$num2=1;
	$output=0;

	for($nombre = 0; $nombre <= $num; $nombre++) {

		if($nombre <= 1){
			$output = $nombre;
		}else {
			$output = $num1 + $num2;
			$num1 = $num2;
			$num2 = $output;
		}
		
	}
echo $output ;
}
fibonacci($nombre)
?>