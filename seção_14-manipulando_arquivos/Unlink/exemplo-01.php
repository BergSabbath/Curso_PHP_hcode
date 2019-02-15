<?php

$file = fopen("teste.txt", "w+");

fclose($file);

// unlink("teste.txt");// deleta o arquivo

echo "arquivo removido com sucesso";