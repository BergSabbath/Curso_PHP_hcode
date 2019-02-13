<?php

require_once("config.php");

// //carrega um usuario
// $user = new Usuario();
// $user->loadById(2);
// echo $user;


//carrega uma lista de usuario
//$lista = Usuario::getList();

//echo json_encode($lista);


//carrega uma lista de usuarios buscando pelo login
// $search = Usuario::search("bogard");
// echo json_encode($search);


//carrega um usuario pegando login e senha
// $usuario = new Usuario();
// $usuario->login("andybogard","12345");
// echo ($usuario);


//criando um novo usuario
// $aluno = new Usuario("May", "7896");

// // $aluno->setDeslogin("aluno");
// // $aluno->setDessenha("32145");

// $aluno->insert();

// echo $aluno;


//atualizando um usuario
// $usuario = new Usuario();

// $usuario->loadById(10);
// $usuario->update("kimkaphwan","4569");

// echo $usuario;
$usuario = new Usuario();

$usuario->loadById(11);
$usuario->update("ioriyagami","1478");

echo $usuario;