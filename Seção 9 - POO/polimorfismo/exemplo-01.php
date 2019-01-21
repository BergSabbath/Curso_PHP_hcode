<?php

Abstract class Animal {

    public function falar()
    {
        return "Som";
    }   

    public function mover()
    {
        return "Anda";
    }

}
class Cachorro extends Animal {

    public function falar()
    {
        return "Late";
    }

}

class Gato extends Animal{

    public function falar()
    {
        return "Mia";
    }
}

class Passaro extends Animal{

    public function falar()
    {
        return "Canta";
    }
    public function mover()
    {
        return "Voa e ". Parent::mover();// o parent refere-se ao pai.. vai pegar o metodo mover da classe pai
    }
}

$pluto = new Cachorro();
echo $pluto->falar();
echo "<br>";
echo $pluto->mover();

echo "<br>";
echo (str_repeat("-",20));

echo "<br>";
$garfield = new Gato();
echo $garfield->falar();
echo "<br>";
echo $garfield->mover();

echo "<br>";
echo (str_repeat("-",20));
echo "<br>";

$picapau = new Passaro();
echo $picapau->falar();
echo "<br>";
echo $picapau->mover();


