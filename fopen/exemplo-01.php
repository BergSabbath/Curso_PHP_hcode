<?php

$fole = fopen("log.txt", "a+"); //"w+" limpa a informação
                                //"a+" adiciona a informação e mantem a existente 

fwrite($fole, date("Y-m-d H:i:s")."\r\n");

fclose($fole);

echo "Arquivo criado com sucesso!";

?>