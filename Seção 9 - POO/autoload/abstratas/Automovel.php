<?php

interface Veiculo {
    // a interface demonstra que a classe tem que ter eses metodos
        public function acelerar($velocidade);
        public function frear($velocidade);
        public function trocarMarcha($marcha);
    
    }

abstract class Automovel implements Veiculo {//classe abstract não pode ser instanciada

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
?>