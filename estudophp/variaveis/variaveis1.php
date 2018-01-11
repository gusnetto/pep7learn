<?php 

	//////////////////////////////////////
	$anoNascimento = 1990;
	$sobrenome = "Rangel";
	$nome1 = "joao";
	$nome_2 = "Ju";
	$site = 'http://hcode.com.br';
	$ano=1990;
	$salario = 5.500,99;
	$bloqueado = false;
	$nomeCompleto = $nome1 . " " . $sobrenome;
	////////////////////////////////////////////

	$frutas = ("abacaxi", "laranja", "manga");
	echo $frutas[2];

	$nascimento = new DateTime();

	echo "teste";
	echo $nome1;

	/**
	comentarios bloco
	*/

	echo "<br/>";
	//limpa variável
	unset($nome1);

	if (isset($nome1)) {
		
		echo $nome1;

		unset($nome1);
	}


	// string



 ?>