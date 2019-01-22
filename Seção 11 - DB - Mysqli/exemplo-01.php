<!-- Classe MySQLi e o PHP 7 -->
<!-- inserindo dados -->

<?php
$conn = new mysqli("localhost","root","","dbphp7" );
//(servidor,usuario, senha, nome_do_banco)

// para saber se acontece algum erro na conexão
if ($conn->connect_error){
    echo "Error" . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");
//prepare - serve para preparar um comando a enviar para o banco de dados
//quem vai inserir os dados será a classe msqsli.. por isso apenas as interrogaçoes representando
//os valores

//bind_param -- Vincula variáveis ​​a uma instrução preparada como parâmetros
$stmt->bind_param("ss", $login, $pass);//(tipo de dado, 1ºdado, 2º dado)
// 2 "ss" pq são 2 VALUES string ... i= int, d= double, b=blob
$login = "terrybogard";
$pass = "12345";

// $stmt->execute();// não pode mandar direto para o DB, tem que enviar em forma de variavel

//como o ambiente ja está preparado,, se quiser inserir outros dados basta
//definir novos dados e dar execute novamente 
$login = "joehigashi";
$pass = "12345";
$stmt->execute();

