<?php 

	$valor1 = 20.50;
	$valor2 = 30.50;

	function calcular($num1,$num2){
		return ($num1+$num2);
	}

	$resp =  calcular(valor1,valor2);

	echo " a resposta é " . $resp;

 ?>