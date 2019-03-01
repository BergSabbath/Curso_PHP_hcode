<?php

if(!is_dir("images")){
mkdir("images"); // se nao existir o diretorio,, ele cria
}

foreach(scandir("images") as $item){ //scandir para procurar no diretorio
    if(!in_array($item, array(".",".."))){// se não tiver o "." ou  ".." faça a ação abaixo
        unlink("images/".$item);//deleta o arquivo... (images(nome da pasta)/ nome do arquivo)
        //como esta dentro do foreach.. nao deletando todos os arquivos que encontrar
    }
}

echo "OK";