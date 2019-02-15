<?php 

//List files and directories inside the specified path
$images = scandir("images");//scandir retorna um array

$data = array();

foreach ($images as $img) {
    if(!in_array($img, array(".",".."))){
        
        $filename = "images".DIRECTORY_SEPARATOR. $img;

        $info = pathinfo($filename);// returna informaçao onde está o arquivo(diretorio, nome e extensão)
        
        $info["size"] = filesize($filename);//pegar o tamanho do arquivo
        $info["modified"]= date("d/m/Y H:i:s", filemtime($filename));// quando o arquivo foi modificado
        $info["url"] = "http://localhost/Hcode/Curso_PHP_hcode/se%C3%A7%C3%A3o_14-manipulando_arquivos/DIR/".
        str_replace("\\","/", $filename);// pegar o url do arquivo


        array_push($data, $info);

    }
}

echo json_encode($data);

// var_dump($images);//