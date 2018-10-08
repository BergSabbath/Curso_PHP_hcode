<?php
$pessoas = array();

array_push($pessoas, array(
    'nome'=>'Joao',
    'idade'=>'20' 
));

array_push($pessoas,array(
    'nome' =>'Glaucio',
    'idade'=>'15'
));

echo json_encode($pessoas);//json_encode - transforma array em encode
echo "<br>";


?>