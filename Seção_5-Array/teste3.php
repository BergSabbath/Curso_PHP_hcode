<?php
$json = '[{"nome":"Joao","idade":"20"},{"nome":"Glaucio","idade":"15"}]';
$data = json_decode($json,true);//transforma (json)encode em array
//para usar como array tem que usar o comando "true"
//senao ele joga como objeto e não transforma tudo em array
var_dump($data);
?>