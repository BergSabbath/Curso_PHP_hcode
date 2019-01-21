<?php

class Pessoa {

    public $nome;// atributo

    public function falar(){//Método

        return "O meu nome é ". $this->nome; 
        //é uma variavel interna para referenciar atributos e metodos dentro de outros metodos

    }

}
$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Daniel";
echo $glaucio->falar();



?>

