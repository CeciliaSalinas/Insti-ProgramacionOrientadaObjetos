<?php
require_once 'Numero.php';

//Debe mostrar la cadena con los divisores del número recibido por GET o POST.
$n = new Numero($_GET['n']);
if ($n->validarNumero()) {
    echo $n->divisores();
} else {
    echo "Error: El número debe ser positivo y entero";
}