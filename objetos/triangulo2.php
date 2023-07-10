<?php
    require_once('Triangulo.php');
    //Guardamos el valor de los ángulos en 3 variables:
    $a1=$_GET['a1'];
    $a2=$_GET['a2'];
    $a3=$_GET['a3'];
    
    $triangulo = new Triangulo($a1, $a2, $a3);
    $tipo = $triangulo->esTriangulo() ? $triangulo->tipoSegunLados() : "No es triángulo";

    //resumen de linea 9
    /*
    if($triangulo->esTriangulo()){
        $tipo = $triangulo->tipoSegunLados();
    }
    else{
        $tipo = "No es triangulo";
    }*/
    
    echo $tipo;

