<?php
function soma(int...$valores)//://string ou float etc..//conversão do tipo no retorno
{return array_sum($valores);//passa o arrays com todos os valores
}
echo var_dump(soma(2,2));
echo "<br>";
echo soma(4,4);
echo "<br>";
echo soma(3.1,5.2);//como a função foi definida com int, ele apenas pegou o numero inteiro


?>