<?php
//encapsulamento//modificador de acesso// controlar// quem pode ver o que// 
//quem pode acessar e em quais circunstancia

class Pessoa {
    
    public $nome = "Rasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome."<br>";
        echo $this->idade."<br>";
        echo $this->senha."<br>";
    }
}

$objeto = new Pessoa();

echo  $objeto->nome."<br>";
//echo $objeto->idade."<br/>"//não pode mostrar.. pq eh protected


$objeto->verDados();//como método é publico, ele pode acessar os atributos
//se o método esta na mesma class, ele vai conseguir acessar tudo que 
//é public , protected ou private.

?>

