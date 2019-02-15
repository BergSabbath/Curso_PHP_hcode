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
$usuario = new Usuario();
$usuario->login("andybogard","12345");
echo ($usuario);