<?php
//Métodos Mágicos
//Método construct __Classe
class Endereco { 

    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($a, $b, $c){//não precisam ser os mesmo nomes dos atributos

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

        //tbm existe o métod destruct(){}

        }
        public function __destruct(){

            //var_dump("DESTRUIR");
        }

        public function __toString(){//para transformar em string

            return $this->logradouro. ",". $this->numero.",".$this->cidade;
        }

}

    // public function getLogradouro(){
    //     return $this->logradouro;

    // }
    // public function setLogradouro($logradouro){
    //     $this->logradouro = $logradouro;
    // }

    // public function getNumero(){
    //     return $this->numero;
    // }

    // public function setNumero($numero){
    //     $this->numero = $numero;
    // }

    // public function getCidade(){
    //     return $this->cidade;
    // }

    // public function setCidade($cidade){
    //     $this->cidade = $cidade;
    // }
//}

// $casa = new Endereco();
// $casa->setCidade("São Luís");
// $casa->setLogradouro("bela Aurora");
// $casa->setNumero("10");

$meuEndereco = new Endereco("Bela Aurora", "10", "São luis");

// var_dump($meuEndereco);

// UNSET($meuEndereco);

echo $meuEndereco;

?>