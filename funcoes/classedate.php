<?php
// setlocale(LC_ALL, "portuguese");
// // classe DateTime();
// $dt = new DateTime();

// $periodo = new DateInterval("P3Y5M3W");//P-periodo, 15D- 15 dias.
// echo $dt->format("d/m/Y H:i:s");

// $dt->add($periodo);// adicionado 15 dias no objeto criado

// echo "<br>";

// echo $dt->format("d/m/Y h:i:s");
$interval = new DateInterval('P2Y4DT6H8M');
var_dump($interval);

?>