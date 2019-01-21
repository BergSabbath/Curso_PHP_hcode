<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");//(tipo de banco:nome_do_banco,host(onde está), usuário, senha)

$stmt = $conn->prepare("SELECT *FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        
        foreach ($row as $key => $value) {//o $key vai representar o nome da coluna
                                        //o $value represeanta o valor digitado la dentro
            echo "<strong> $key:</strong> $value <br>";
        }
        echo "=====================================<br>";
    }

