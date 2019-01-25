<?php
//função date() e função time(); timestamp

// echo date("d/m/Y", 1539023852);
// // esta função nao é automática quando Locale, 
// //precisa do setLocale
// echo "<br>";
///echo time();// quantidade de segundos desde 01 de janeiro de 1970-timestamp

/*echo*/ $ts = strtotime("2018-10-08");// converte string para time()
//$ts = strtotime("now");// aceita expressão
//$ts = strtotime("+1 day");// mostra o dia seguinte
//$ts = strtotime("+1 week");// mostra a semana seguinte
//pode colocar expressões que ele entrega o timestamp[função time()]
//sempre no idioma padrão do servidor
echo "<br>";
//echo $ts;
echo "<br>";
echo date("l, d/m/Y", $ts);


?>