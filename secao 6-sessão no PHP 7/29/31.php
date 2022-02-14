<?php
require_once "./config.php";

echo session_save_path();
echo "<br>";
var_dump(session_status());

switch ($session_status()) {
    case PHP_SESSION_DISABLED:
        ECHO "as sessões desabilitadas";
        break;
    case PHP_SESSION_NONE:
        ECHO "as sessões desabilitadas, mas nenhuma existir";
        break;
    case PHP_SESSION_ACTIVE:
        ECHO "as sessões desabilitadas";
        break;
    
    default:
        # code...
        break;
}


?>