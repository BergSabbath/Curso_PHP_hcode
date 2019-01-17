<?php
require_once('config.php');

//session_unset(); essa função não espera parâmetros. Ela libera todas as variáveis de sessão

// unset($_session['nome']);  para excluir uma variavel especifica

// session_destroy();//expulsa o usuario no site

echo $_SESSION['nome'];

?>