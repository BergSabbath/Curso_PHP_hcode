<?php
//usando uma imagem a partir de uma imagem já existente

$image = imagecreatefromjpeg("certificado.jpg");// cria um aimagem a partir de outra

$titleColor = imagecolorallocate($image, 0 ,0, 0);// colorir a imagem
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext ($image, 32, 0, 450, 150, $titleColor, __DIR__ . DIRECTORY_SEPARATOR .
    "fonts" . DIRECTORY_SEPARATOR . "Bevan" . DIRECTORY_SEPARATOR . "Bevan-Regular.ttf","CERTIFICADO");

imagettftext($image, 32, 0, 450, 350, $titleColor, __DIR__ . DIRECTORY_SEPARATOR . 
    "fonts" . DIRECTORY_SEPARATOR . "Playball" . DIRECTORY_SEPARATOR ."Playball-Regular.ttf", "Divaney Aparecido");

imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);
//utf8_decode converte u8ma string para o padrão utf8

header("Content-type: image/jpeg");

imagejpeg($image); //imagejpeg exporta  a imagem para o browser
//paramentros... 1- imagem, 2- nome do arquivo, 3 - qualidade

imagedestroy($image);


?>