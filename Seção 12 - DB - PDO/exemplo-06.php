<!--PDO: Usando transações -->
<!-- Confirma "Commit()", Cancelar "rollBack()" -->
<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","");//(tipo de banco:nome_do_banco,host(onde está), usuário, senha)

$conn->beginTransaction();// a transação está amarrada a conexão e não ao statement

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");//ao inves de usar um bindParam, pode usar uma array no execute
//1ª interrogação representa o 1º paramentro do array, cada interrogação adicional represantará um proximo paramentro

$id = 5;

$stmt->execute(array($id));//vai executar a operação 
// echo "executou o delete";
$conn->rollback();//vai cancelar a execução.
// echo "restaurou o delete";
$conn->commit();//confirma a execução

echo "Delete OK!";

