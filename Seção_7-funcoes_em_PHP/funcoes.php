<?php
function soma(){
    echo "Olá";
}

soma();
echo "<br>";
echo "funçoes";
echo "<br>";
soma();
echo "<br>";

function salario(){
    return 998.00;
}

print "o valor de 03 salários é ". number_format (salario()*3,2,',','.');
echo "<br>";

function ola(){
    $argumentos = func_get_args();//criar arrays, e  aumenta de acordo com os valores digitados
    //func_get_args() eh igual a (int...$argumentos)
    
    return $argumentos;
}

var_dump(ola("zero","vinte"));
///////////////////////////////////////////////

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//passagem de parametro de valor.
$a = 10;
function trocaValor($b){
    $b+=50;
    return $b;
}
echo $a;
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;
echo "<br>";

echo str_repeat("-",40);
echo "<br>";
//passagem de parametro por referencia.
function trocouValor(&$b){
    $b+=50;
    return $b;
}
echo $a;
echo "<br>";
echo trocouValor($a);
echo "<br>";
echo $a;


$pessoa = array(
    'nome' => 'João',
    'idade' => 20
);

foreach ($pessoa as &$value){
    if (gettype($value) === 'integer') $value += 10;

    echo $value . '<br>';
}

print_r($pessoa);


?>