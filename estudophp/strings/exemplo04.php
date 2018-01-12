<?php 


//strposition

$frase = " A repetição e a mãe da retenção";

$query = strpos($frase, "mãe");

var_dump($query);

// coletar tudo antes de mae

$texto = substr($frase, 0, $query);

var_dump($texto);

$query2 = strpos($frase. "retenção")

$text2 = substr($frase, 17, $query2);


 ?>