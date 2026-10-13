<?php
function escribirNumerosMod($valuesToWrite, $operator) {
    $ruta = __DIR__ . '/datosEjercicio.txt';
    $contenido = '';

    foreach ($valuesToWrite as $value) {
        $contenido .= $value . '<br>';
    }

    if ($operator === 'sobreescribir') {
        file_put_contents($ruta, $contenido);
    } else {
        file_put_contents($ruta, $contenido, FILE_APPEND);
    }
}