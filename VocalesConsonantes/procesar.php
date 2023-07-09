<?php
require_once 'palabra.php';

//indique al usuario cuántas vocales y cuántas consonantes tiene el texto ingresado

$p = new Palabra ($_GET['palabra']);

//el objeto palabra va a saber hacer 2 cosas, contar vocales y consonantes
$vocales = $p->contar_vocales();
$consonantes = $p ->contar_consonantes();


echo " el texto tiene $vocales vocales y $consonantes consonantes.";

