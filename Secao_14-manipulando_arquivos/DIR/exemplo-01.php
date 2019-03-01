<?php

$name = "images";

if (!is_dir($name)){

    mkdir($name);//cria o diretorio
    echo "Diretorio images criando com sucesso!!";

}else{
    rmdir($name); // remove o diretorio
    echo "O diretorio ja existe foi removido";
}







?>