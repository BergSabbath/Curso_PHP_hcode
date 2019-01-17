<?php
session_start();

echo session_save_path();
echo "<br";
//echo session_status();
var_dump(session_status());

switch(session_status()){
    case PHP_SESSION_DISABLED:
    echo "sessões estiverem desabilitadas.";
    break;

    case PHP_SESSION_NONE:
    echo "as sessões estiverem habilitadas, mas nenhuma existir.";
    break;

    case PHP_SESSION_ACTIVE:
    echo"as sessões estiverem habilitadas, e uma existir.";
    break;
}

?>