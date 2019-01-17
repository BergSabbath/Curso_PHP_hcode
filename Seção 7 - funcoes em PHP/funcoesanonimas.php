<?php
//funcoes anonimas//
//Muito comum em Javascript
//Cria uma variável e essa variável recebe uma função
//é identificada, principalmente pq não tem um nome.
//basta sua propria execução e não possui return.

function teste($callback){

    //Processo lento
    $callback();
}
teste(function(){//passa a função sem nome algum
    echo "Terminou!";
});

//outro jeito
//colocar função dentro de uma variável

$fn = function($a){
    var_dump($a);

};
$fn("oi");

?>