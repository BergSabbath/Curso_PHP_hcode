<?php
// trabalhando com permissões

/*0 : --- (nenhuma permissão)
1 : --x (somente execução)
2 : -w- (somente escrita)
3 : -wx (escrita e execução)
4 : r-- (somente leitura)
5 : r-x (leitura e execução)
6 : rw- (leitura e escrita)
7 : rwx (leitura, escrita e execução) */
$pasta = "arquivos";
$permissao = "0775";

if (!is_dir($pasta)) mkdir($pasta, $permissao);// criando pasta

echo "Diretório criado com sucesso!";


?>