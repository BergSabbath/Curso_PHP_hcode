<?php

$outro = "Marques";

function teste(){

    global $outro;
    $nome = "Ludenberg";
    echo $nome ." ". $outro;
}
teste();