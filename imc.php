<?php 

	$nome = "Joaquina";
	$peso = 89;
	$altura = 1.72;


	function imc ($peso,$altura){
		$imc = $peso / ($altura * $altura);

		return $imc;
	}

	$resp = imc($peso,$altura);

	printf("Olá $nome seu peso $peso Kg sua altura $altura metros seu imc %.2f", $resp);

 ?>