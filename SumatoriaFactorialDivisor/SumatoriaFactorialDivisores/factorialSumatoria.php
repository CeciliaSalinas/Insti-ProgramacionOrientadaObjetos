<?php
require_once 'Numero.php';

$n = new Numero($_GET['n']);
if ($n->validarNumero()) {
    if ($_GET['operacion'] === 'f') {
        echo $n->factorial();
    } else {
        echo $n->sumatoria();
    }
} else {
    echo "Error: El número debe ser positivo y entero";
}