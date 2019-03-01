<?php

//sql injection

if ($_SERVER["REQUEST_METHOD"] === 'POST'){

    $cmd = escapeshellcmd($_POST["cmd"]);
    //tratando o post, escape.. transforma em string e nao em comando
    var_dump($cmd);

    echo "<pre>";
//toda vez que executar um system ou exec..nunca chamar dados dinamicos, pois
// é uma porta de entrada para SLQ injection

    $comando = system("dir C:", $retorno);
    //Execute an external program and display the output



    echo "</pre>";

}
?>

<form method="post">

    <input type="text" name="cmd">
    <button type="submit">enviar</button>

</form>