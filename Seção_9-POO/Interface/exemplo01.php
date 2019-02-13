<?php
interface Veiculo {

    public function acelerar($velocidade);
    public function frear($velocidade);
    public function trocarMarcha($marcha);

}

class Civic implements Veiculo {//para implementar varias interfaces adicione virgulas
    //class Civic implements Veiculo, xxxx, yyyyy, zzzz {}
    public function acelerar($velocidade)
    {
        echo "O veículo acelerou até ". $velocidade . "km/h";
        
    }
    public function frear($velocidade)
    {
        echo "O veículo freou até ". $velocidade . "km/h";
    }
    
    public function trocarMarcha($marcha)
    {
        echo "o veiculo trocou a marcha ". $marcha;
    }
}

$carro = new Civic();
$carro->acelerar(100);
echo "<br>";
$carro->frear(10);
echo "<br>";
$carro->trocarMarcha(3);
