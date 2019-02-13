<?php

function __autoload($nomeClasse){//nesse caso vai procurar na mesma pasta
    // var_dump($nomeClasse);
    require_once("$nomeClasse.php");

}

$carro = new DelRey();
$carro->acelerar(80);
?>