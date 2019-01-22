<!-- connectando SQL server com PDO e PHP -->
<?php

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0","sa","root");//(tipo de banco:nome_do_banco,host(onde está), usuário, senha)

$stmt = $conn->prepare("SELECT *FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($results);

