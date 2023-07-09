<?php
require('Numero.php');

//Escriban este código cliente.
//Debe mostrar la cadena con los divisores del número recibido por GET o POST.
//Escriban también en otro archivo el formulario HTML


//Hacer un programa que muestre los divisores de un número ingresado en un formulario
class Numero
{
    private $valor;

    public function __construct($n){
        $this->valor = $n;
    }

    //Determina si el número es válido (entero positivo).
    public function validarNumero(){
        return (is_int($this->valor) && $this->valor > 0);
    }

    //Determina si el número $numeroParaProbar es divisor de $this->valor
    private function esDivisor($numeroParaProbar){
        return $this->valor % $numeroParaProbar == 0;
    }

    //Muestra una lista de los divisores del número.
    public function divisores(){
        $listaDeDivisores = '';
        for ($i = 1; $i <=$this->valor; $i++){
           // ¿ $i es divisor de $this->valor ? 
           if($this->esDivisor($i)){
            $listaDeDivisores = $listaDeDivisores . "$i";
           }
        }
        return $listaDeDivisores;
    }

    //Calcula y retorna el factorial.
    //El factorial de un número entero positivo se define como el producto de todos los números naturales anteriores o iguales a él. 5! = 5x4x3x2x1
    public function factorial(){
        if($this->valor == 0 || $this->valor == 1){
            return 1;
        }
        $resultado = 1;

        for( $i = 2; $i <= $this->valor; $i++){
            $resultado *= $i;
            //El operador *= multiplica primero el valor de la expresión (en el lado derecho del operador) por el valor de la variable o propiedad (en el lado izquierdo del operador).
        }
        return $resultado;
    }

    // Calcula y retorna la sumatoria.
    public function sumatoria(){
        $resultado = 0;
        for( $i = 1; $i <= $this->valor; $i++){
            //El operador += suma el valor de su derecha a la variable o propiedad de su izquierda y asigna el resultado a la variable o propiedad de su izquierda
            $resultado += $i;
    }
    return $resultado;

}