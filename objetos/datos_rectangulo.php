<?php
//es este archivo recibo los datos
//quiero que me pongas a disposiccion el código el archivo "xxx.php"
require_once 'rectangulo.php';

//guardo en $R un objeto de tipo rectángulo, isntancia de la clase Rectangulo
$r= new Rectangulo($_GET['base'], $_GET['altura']);

//la cedena que me retorna lo puedo guardar en otra variable
//la variable $datos tiene una cadena/texto; ¿que texto?  el que retornó la función mostrar_datos() del rectangulo que esta guardo en $r 
$datos = $r ->mostrar_datos();
$area = $r ->calcular_area();

