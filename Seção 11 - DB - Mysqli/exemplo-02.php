<?php
$conn = new mysqli("localhost","root","","dbphp7" );
//(servidor,usuario, senha, nome_do_banco)

// para saber se acontece algum erro na conexão
if ($conn->connect_error){
    echo "Error" . $conn->connect_error;
}

// retorna o resultado do BAnco de dados
$resul = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array(); //se quiser converter para json

while ($row = $resul->fetch_array(MYSQLI_ASSOC)) { //fetch_array - vai retornar um dado se existir
                    //resultado diferente -> fecth_array(MYSQLI_ASSOC) ou fecth_assoc()
                    //trarão no o nome da string, sem o indice
    array_push($data, $row);//a cada linha encontrada.. envia para o $data
}

echo json_encode($data);