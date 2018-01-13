<?php 


//strposition

$frase = " A repetição e a mãe da retenção";

$palavra ="mãe";

$query = strpos($frase, $palavra);

var_dump($query);

// coletar tudo antes de mae

$texto = substr($frase, 0, $query);

var_dump($texto);

$text2 = substr($frase, $query + $query +strlen($palavra), strlen($frase));

var_dump($text2);


 ?>