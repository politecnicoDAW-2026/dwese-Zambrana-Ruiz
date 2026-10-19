<?php
$numeros = array(5, 9, 3, 22);
escribirNumerosMod($numeros, "ampliar");
echo file_get_contents('./datosEjercicio.txt');
function escribirNumerosMod($valuesToWrite, $operator ) {
    if ($operator === 'sobreescribir') {
        file_put_contents('./datosEjercicio.txt','');
        foreach ($valuesToWrite as $index => $values) {
            file_put_contents('./datosEjercicio.txt', $values . '<br>');
        }
    } else {
        foreach ($valuesToWrite as $index => $values) {
            file_put_contents('./datosEjercicio.txt',$values.'<br>', FILE_APPEND);
        }
    }
}
?>