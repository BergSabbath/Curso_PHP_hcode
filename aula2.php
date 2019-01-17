<!DOCTYPE HTML>
<html>
<head>
        <title>Aula</title>
        <meta charset= "UTF-8">
</head>
<body>
    <div>
        <?php
        $nome = "Ludenberg Marques";
        echo 'Meu nome é $nome';// aspas simples mostra o nome da variável 
        echo "<br>";
        echo "Meu nome é $nome";//aspas duplas.. mostra o conteudo
        echo "<br>";
        echo (strtoupper($nome));//converter em maiusculo
        echo "<br>";
        echo (strtolower($nome));//converter em minusculo
        echo "<br>";
        echo ucwords($nome);//primeira letra de cada palavra maiuscula
        echo "<br>";
        echo ucfirst($nome);//primeira letra de cada palavra maiuscula
        echo "<br>";
        $e = "-";
        var_dump (str_repeat($e, 20));
        echo "<br>";
        
        $troca = str_replace("e","3", $nome);
        echo $troca;
        echo "<br>";
        $frase = "A repetição é a mãe da retenção";
        $palavra = "mãe";
        $q = strpos($frase, $palavra);// mostra a posição da letra ou palavra na variavel
        var_dump($q);
        echo "<br>";
        $texto = substr($frase,0, $q);// do inicio até o final da posição colocada
        var_dump($texto);
        echo "<br>";
        $texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
        var_dump($texto2);
        
        //include (1)e require (2)
        //variação require_once e include_once -- se ja chamou uma vez.. ignora a segunda chamada
        
        //(1) tenta funcionar mesmo que arquivo tenha problemas
        //(2)obriga que o arquivo exista, gera erro fatal

        //os arquivos tem que estar na mesma pasta

        ?>
    </div>
</body>
</html>