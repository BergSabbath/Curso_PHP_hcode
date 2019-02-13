<?php

require_once('config.php');


echo session_save_path(); //ver documentação

echo "<br>";

var_dump(session_status());

echo "<br>";

switch (session_status()) {
    case PHP_SESSION_DISABLED:
        echo "as sesssões estão desabilitadas";
        break;
    case PHP_SESSION_NONE:
        echo "Não existem sessões";
        break;
    case PHP_SESSION_ACTIVE:
        echo "Existem sessões";
        break;
    default:
        echo "Tudo errado";
        break;
}
?>