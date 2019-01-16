<?php

$conn = new mysqli("localhost","root", "1234", "dbphp7");

if($conn->connect_error){

    echo "Error: ". $conn->connect_error;
}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                    // ou fetch_assoc()

    array_push($data, $row);

    // var_dump($row);
}

echo json_encode($data);

?>