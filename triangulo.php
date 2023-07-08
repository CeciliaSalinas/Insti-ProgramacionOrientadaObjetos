<?php
class Triangulo
{
    //La clase tiene 3 propiedades, que son la medida de los tres ángulos.
    public $a1;
    public $a2;
    public $a3;
    
    //Método constructor, invocado con la palabra new.
    //Recibe tres números y asigna cada uno de ellos a las 3 propiedades
    //de la clase (que son la medida de los 3 ángulos).
    public function __construct($uno, $dos, $tres)
    {
        $this->a1 = $uno;
        $this->a2 = $dos;
        $this->a3 = $tres;        
    }
    
    public function esTriangulo() 
    {
        //Construyan ustedes este método.
        //(Si los ángulos suman 180º es triángulo, y si no, no lo es.)
        //Este método debe retornar true o false.

        if (! $this->angulosValidos()){ return false;} 
        //si angulosValidos es true pero está negado, el if da false
        // si angulosValidos en false pero esta negado, el if es true, entra al bloque del if y retorna false y no entra al segundo if, se vá.
        //si no entra en el 1 if sigue adelante con el segundo if
        if ($this->a1 + $this->a2 + $this->a3 == 180) {
            return true;
        }
        else{
            return false;
        }   
    }
    private function angulosValidos(){
        if ($this->a1 <=0 || $this->a1 >= 180) { return false;}
        if ($this->a2 <=0 || $this->a2 >= 180) { return false;}
        if ($this->a3 <=0 || $this->a3 >= 180) { return false;}
        return true;
        // si en el primer if ingreso un angulo que no es valido los otros if no se ejecutan
        //cuando encuentra el return se va, a donde ? a quien lo habia llamado el metodo esTriangulo
    }

    
    public function tipoSegunLados() 
    {
        //que pasa si alguien llama a este método y no se asegur+o si es triangulo?
        if(! $this->esTriangulo()) {return "No es triangulo";}
          
        //Construyan ustedes este método.
        //Si los tres ángulos son iguales, también serán iguales los tres lados,
        //por lo tanto es equilátero.
        if($this->a1 == $this->a2 && $this->a2 == $this->a3){
            return "equilatero";
        }        
        //Si los tres ángulos son distintos, es escaleno.
        if ($this->a1 != $this->a2 &&
            $this->a2 != $this->a3 && 
            $this->a1 != $this->a3){
            return "escaleno";
        }
         //Si dos ángulos son iguales y el otro distinto, es isósceles.
         return "isóseles";

        //Esta función debe retornar una cadena (string). Por ejemplo: "escaleno"
        
    }

    public function tipoSegunAngulos()
    {
        //Construyan ustedes este método para el ejercicio 2.
        //Si tiene un ángulo mayor a 90º es obtusángulo.
        //Si tiene un ángulo de 90º, es rectángulo.
        //Si los tres ángulos son menores de 90º es acutángulo.
        //La función debe retornar una cadena.
                
    }
}

