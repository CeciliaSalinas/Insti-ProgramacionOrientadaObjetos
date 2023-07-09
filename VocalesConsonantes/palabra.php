<?php

class Palabra{

    public $texto;

    public function __construct($texto)
    {
        $this->texto = strtolower($texto); //pasala a minuscula y despues guardala
    }

    public function contar_vocales()
    {
        $vocales = 'aeiouáéíóúü';
        $contador = 0;

        //strlen: cuenta la cantidad de caracteres en la cadena/string (recorre this->texto)
        for ($i=0; $i < strlen($this->texto); $i++){

            // strpos() devuelve la posición de la primera coincidencia de la palabra o carácter buscado en una cadena de texto (string
                            //si en ese texto que tiene todas las $vocales(aeiou...Ü)
                            //la letra que estoy mirando ahora (this->texto) retorna un numero(is_int)
                            //si me retorna un entero, la encontró : es vocal 
            if(is_int(strpos($vocales, $this->texto[$i]))){
                $contador++;
            }
        }
        return $contador;
    }

    public function contar_consonantes()
    {
        $consonantes = 'bcdfghjklmnpqrstvwxyz';
        $contador = 0;
        for ($i=0; $i < strlen($this->texto); $i++){
            if(is_int(strpos($consonantes, $this->texto[$i]))){
                $contador++;
            } 
        }
        return $contador;
    }

}