<?php
session_start();
//toda pagina que for usar sessão tem que ter session_start()
//pode ser configurada no session_autostart no arquivo .ini de configuração, porém não eh
//interessante fazer esta modificação por nem será possivel utiliza-la em todo servidor
//=>session_unset(); #comparado ao ...destroy.. ele apenas limpa a variavel de sessão
//=>unset($_SESSION['nome']);
//=>session_destroy #OUTRO comando para limpar variavel de sessão,
//#com relação a session_unset...ele limpa a variavel de sessão e remove o usuario do site


echo $_SESSION['nome'];
?>