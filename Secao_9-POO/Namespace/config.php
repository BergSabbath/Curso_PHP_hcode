<!-- permite agrupar as classes dentro de um diretorio de forma organizada -->
<?php
spl_autoload_register(function($nameClass){

    var_dump($nameClass);
    
    $dirClass = "class"; // pasta onde armazerá as classes
    $filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass .".php"; //se refere a todo o nome de arquivo 

    if (file_exists($filename) === true ){
        require_once($filename);
    }
});

?>