<!DOCTYPE HTML>
<html>
<head>
        <title>Aula</title>
        <meta charset= "UTF-8">
</head>
<body>
    <div>
        <?php
        //exit; //para a execução do codigo neste local
        $null = NULL; //null // há ausencia de valores
        $vazio = ""; //vazio eh quando realmente está vazio, mas ja foi iniciado 
        //localhost/hcode/......./aula1.php?a=123
        // $c = $_GET("a");
        // var_dump($c);
        // toda informação que vier por $_GET ou $_POST sempre vai ser String
        // para forçar a conversão para outro tipo use-se $c = (int) $_GET("a");
        
        $ip = $_SERVER["SCRIPT_NAME"];
        echo $ip;

        $nome= "Glaucio";
        function teste(){
            global $nome;// o nome global possibilita saber que a variavel eh a mesma da defini-
            //da fora da funcão
            echo $nome;
        }
        teste();

        unset($nome);// destroi a variavel
        echo $nome;// aki a variavel não existe mais

        //escopo superglobal = em qlq escopo ela vai funcionar


        //operador "spaceshift" '<=>' serve para fazer comparação de quem se é menor/igual/menor
        // $a =50;
        //$b = 65;
        // echo $a<=>$b;  se o a for maior ele mostra "1", 
        //se for iguais mostra "0" se for maior mostra "-1".

        //operador de comparação de valores nulos
        //mostra uma variavel se as outras estiverem nulas;
        // $a = null;
        // $b = null;
        // $e = 10;
        // echo $a ?? $b ??$e;// se o valor "a" for null mostre b,se "b" tbm for nulo mostre "e"

        $array = array("laranja", "abacaxi", "manga");
        // echo $array[2];

        $arquivo = fopen("aula1.php", "r");
        var_dump($arquivo);
        ?>
    </div>
</body>
</html>