<?php

if (isset($_COOKIE["NOME_DO_COOKIE"])){

    // var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"], true));//true faz retornar como array

    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]); // aki utiliza-se como objeto

    echo $obj->empresa;

}