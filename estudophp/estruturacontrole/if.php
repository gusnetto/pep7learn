<?php 
$qualSuaIdade = 30;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 55;

if ($qualSuaIdade < $idadeCrianca){

	echo("Criança");

} else if ($qualSuaIdade < $idadeMaior ) {

	echo("Adolescente");
		

}else if ($qualSuaIdade < $idadeMelhor) {

	echo(" Adulto");

}else{
	
	echo("Idoso");
}

echo("<br>");

//operador ternário ? então  : senão  instrucão simples 
echo($qualSuaIdade < $idadeMaior) ? "Mmenor de idade ": "Maior de idade";


 ?>