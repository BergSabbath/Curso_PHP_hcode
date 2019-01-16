<!DOCTYPE HTML>
<html>
<head>
        <title>Aula</title>
        <meta charset= "UTF-8">
</head>
<body>
    <div>
        <?php
        $nome = "Ludenberg";
        echo 'Meu nome é $nome';// aspas simples mostra o nome da variável 
        echo "<br>";
        echo "Meu nome é $nome";//aspas duplas.. mostra o conteudo
        echo "<br>";
        echo (strtoupper($nome));
        echo "<br>";
        echo (strtolower($nome));
        echo "<br>";
        $e = "-";
        var_dump (str_repeat($e, 20));
        
        //include (1)e require (2)
        //variação require_once e include_once -- se ja chamou uma vez.. ignora a segunda chamada
        
        //(1) tenta funcionar mesmo que arquivo tenha problemas
        //(2)obriga que o arquivo exista, gera erro fatal

        //os arquivos tem que estar na mesma pasta

        ?>
    </div>
</body>
</html>