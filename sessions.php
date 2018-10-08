<?php
// A função |||session_unset($_SESSION['nome'])|||pode gerar um erro, pois essa função não 
//espera parâmetros. Ela libera todas as variáveis de sessão 
// Para excluir uma variável específica, devemos executar |||unset($_SESSION['nome'])|||
session_start();//para indica que irá iniciar uma sessão no site
//session é como uma array superglobal
$_SESSION["nome"] = "Hcode";
?>