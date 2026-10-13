<?php
function leerContenidoFichero($displayRoute) {
    if (file_exists($displayRoute)) {
        echo file_get_contents($displayRoute);
    }
}
?>