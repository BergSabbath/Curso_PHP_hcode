<?php

define("SERVIDOR", "127.0.0.1");

echo SERVIDOR;
echo "<br>";
echo "<br>";


//variável eh diferente de uma constante
//quando por principio nunca precisa mudar essa variavel
//para criar uma constante "define();"
//dar um nome para a constante e um valor
//ex: define("SERVIDOR","127.0.0.1");
//Geralmente eh colocada com letras maiusculas.
//não se pode colocar espaços
//exibição: echo SERVIDOR; obs: sem o "$"

#outro constante em forma de array

define("BANCO_DE_DADOS",[
    '127.0.0.1',
    'root',
    'passoword',
    'teste'
]/*,true*/);//colocando o true... a constante fica Case Insensitive
print_r(BANCO_DE_DADOS);
echo "<br>";
echo "<br>";
//exemplos de constantes pré-definidas
echo PHP_VERSION; // serve para mostrar a versão do PHP rodando

echo DIRECTORY_SEPARATOR;//Mostra a barra de diretorio "\" windows "/" no linux

?>