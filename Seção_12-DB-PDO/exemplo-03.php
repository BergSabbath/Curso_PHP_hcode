<!-- Inserindo dados no banco de dados mysql e PDO -->
<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");//(tipo de banco:nome_do_banco,host(onde está), usuário, senha)

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = "jose";
$password = "12345";

$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);

$stmt->execute();

echo "inserido OK";

// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     echo json_encode($results);

