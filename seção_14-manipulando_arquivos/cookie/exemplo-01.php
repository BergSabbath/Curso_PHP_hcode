<?php

$data = array(
    "empresa" => "Hcode Treinamentos"
);

setcookie("NOME_DO_COOKIE", json_encode($data),time() + 3600);
//time() + 3600 = tempo atual mais  1 hora.

echo "OK";