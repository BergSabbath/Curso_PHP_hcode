<?php
//id de sessão é uma identificação de sessão unica do usuário
session_id('fa0vhellmd1a0s8fhu1cidbnj6');
//para recuperar uma sessão... tem que ser antes da session_start()
//fa0vhellmd1a0s8fhu1cidbnj6 id da sessão que quer recuperar
session_start();
echo session_id();//sempre que entra ganhará um id diferente de sessão
//id único
//---------------------------------------------------------
//session_regenerate_id => serve para ficar gerando novos id 
//---------------------------------------------------------
// na tela de login*index.php* .. chamar um arquivo chamado *valida.php* nesse arquivo
//valida.php que tem que colocar o session_regeneration_id
//para sempre gerar um id de sessão, mesmo que o usuario ha venha com outro id..
//isso ajuda na segurança e nao permitir outro usuario utilize o mesmo id.
//evita que alguem mal intencionado use seu login.
var_dump($_SESSION);
?>