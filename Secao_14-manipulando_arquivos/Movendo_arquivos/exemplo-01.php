<?php

$dir1 = "folder_01";
$dir2 = "folder_02";

if (!is_dir($dir1)) mkdir($dir1);// se não existe o diretorio... mkdir crie um 
if (!is_dir($dir2)) mkdir($dir2);// idem

$filename = "README.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)){//se não existir o arquivo
    $file = fopen($dir2 . DIRECTORY_SEPARATOR . $filename,"w+");// abreou cria um e escreva
    fwrite($file, date("Y-m-d H:i:s"));//escreva a data
    fclose($file);//fecha o arquivo
}
//rename -- pq renomeia o endereço do arquivo e nao o nome do arquivo
rename(
    $dir1 . DIRECTORY_SEPARATOR . $filename,//origem 
    $dir2 . DIRECTORY_SEPARATOR . $filename //destino
);

    echo "arquivo movido com sucesso!";
