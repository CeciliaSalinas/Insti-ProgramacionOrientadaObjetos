<?php

require_once 'Cuenta.php';

//exteds me dice que la Caja de ahorro extiende la clase cuenta, la clase caj de ahorro tiene todo lo que tiene la clase Cuenta y un poquito mas
//esta es clase hija

class CajaAhorro extends Cuenta
{
    //que propiedades tiene : numero,titular,saldo
    public $numero;
    public $titular;
    protected $saldo;
    public $topeExtraccion;

    public function __construct($numero, $titular, $saldo, $tope)
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
        $this->topeExtraccion = $tope;
    }

    public function extraer($monto)
    {
        if($monto > $this->saldo){
            return "Saldo insuficiente";
        }
        if($monto > $this->topeExtraccion){
            return "No se puede realizar operacion, monto supera el tope de extracción.";
        }
        
        return parent::extraer($monto); "Extracción realizada con exito";
    }
    /*
    public function getSaldo(){
    //con esto hago que el saldo sea protected, nadie puede cambiar el saldo salvo la caja de arrorro
    return $this->saldo; 
    }
    */
}