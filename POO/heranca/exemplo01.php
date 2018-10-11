<?php
class Documento {

    private $numero;

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($n){
        $this->numero = $n;
    }

}

class CPF extends Documento{
// extends é a palavra chave que indica que a class CPF eh filha 
// da class Documento

    public function validar():bool{

        $numeroCPF = $this->getNumero();

        //validação do CPF (supondo que a regra esteja aki)
        return true;

    }
}

$doc = new CPF();
$doc->setNumero("212323212-44");
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();

$rg = new CPF();
$rg->setNumero("0080980982");
echo $rg->getNumero();
?>