<!--Alterando dados no banco de dados mysql e PDO -->
<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");//(tipo de banco:nome_do_banco,host(onde está), usuário, senha)

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$login = "JoeHigashi";
$password = "5431";
$id = 3;


$stmt->bindParam(":LOGIN",$login);
$stmt->bindParam(":PASSWORD",$password);
$stmt->bindParam(":ID",$id);

$stmt->execute();

echo "Atualizado com sucesso!";

// $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     echo json_encode($results);

