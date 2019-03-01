<?php
//usando uma imagem a partir de uma imagem já existente

$image = imagecreatefromjpeg("certificado.jpg");// cria um aimagem a partir de outra

$titleColor = imagecolorallocate($image, 0 ,0, 0);// colorir a imagem

$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);//funcão desenha uma imagem horizontalmente
imagestring($image, 5, 440, 350, "Clark Still", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);
//utf8_decode converte u8ma string para o padrão utf8

header("Content-type: image/jpeg");

imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 10); //imagejpeg exporta  a imagem para o browser
//paramentros... 1- imagem, 2- nome do arquivo, 3 - qualidade

imagedestroy($image);
