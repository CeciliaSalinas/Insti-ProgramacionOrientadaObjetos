<?php
 
//este archivo va a tener la clase rectángulo que va a ser como "una fabrica de objetos
//esta clase va a fabricar objetos de tipo rectángulo

class Rectangulo{
    //atributos-propiedades del rectangulo
    //tienen que tener una visivilidad :public o private
    public $base; 
    public $altura; //está referenciado como $this->altura

    //todos los objetos iempre tienen un método, por eso le ponemos una función
    //cuando se quiere crear un objeto nuevo, hace lo que está entre llaves {}
    public function __construct($b, $a){
        //this: diferencia las variables de las clases con las de funciones
        $this ->base= $b;
        $this ->altura= $a;      
    }
    public function mostrar_datos(){
        return "Es un rectángulo de base $this->base y altura $this->altura";
        
    } 
    //hasta acá ya tengo el tipo de dato Rectángulo y puedo guradar en una variable el objeto rectangulo
     

    //quiero que el objeto rectangulo calcule el area del rectangulo
    public function calcular_area(){
        $area = $this -> base * $this-> altura;
        return $area;
    }

}
?>