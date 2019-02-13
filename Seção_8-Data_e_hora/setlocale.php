<?php
//função setlocale
setlocale(LC_ALL,"pt_BR", "pt_BR.utf-8", "portuguese");
//LC_All: mude toda a configuração para portugues
// 03 padroes diferentes que rodam em qualquer sistema
//padrão: pt_BR
//padrão com utf-8: pt_BR.utf-8
//padrão do windows: "portuguese"
echo ucwords(strftime("%A %B"));//Formata uma hora/data de acordo com as configurações locais
// os parametros são encontrados na documentação PHP
//lembrando ucwords -coloca as primeiras letras em maiusculas
?>