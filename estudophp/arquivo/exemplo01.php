<?php 

/** include tipo um import tenta o arquivo funcionar mesmo que o arquivo que não exista

include path permite taga arquivo direto de la php.ini 

projetos internos bom utilizar funcão dentro desse diretorio default definido.

codigo como sms, envio de e-mail... 

colocando essas classe utes no include path.

caso não utilizar este recuro usutlizar o require 

require arquivo exista e qye esteja executand corretamente

include dinamico pessima pratica muit perigoso, melhor utilizar acesso via API.

php7 não tem erro fatal utiliza bloco excessão try catch 

*/

function somar($a,$b){

	return $a + $b;
}






 ?>