<?php
function soma(int ...$valores)//int- vai pegar somente os numeros inteiros e todos os paramentros.. podendo ser mais de 1
// function soma(int...$valores):string ou float etc...converte e retorna string ou float
{return array_sum($valores);//soma todos os valores e passa o arrays com todos os valores
}
echo var_dump(soma(2,2));
echo "<br>";
echo soma(4,8);
echo "<br>";
echo soma(3.1,5.2);//como a função foi definida com int, ele apenas pegou o numero inteiro


?>