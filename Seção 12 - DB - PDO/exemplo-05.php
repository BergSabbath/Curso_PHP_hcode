<!--Apagando dados no banco de dados mysql e PDO -->
<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");//(tipo de banco:nome_do_banco,host(onde está), usuário, senha)

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 6;

$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Delete OK!";

