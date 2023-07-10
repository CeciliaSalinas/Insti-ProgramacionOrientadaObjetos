<?php
require_once 'Cuenta.php';

//esta es clase hija que esuna extecion de la clase madre cuenta
//hereda cosas de la clase cuenta
class CuentaCorriente extends Cuenta
{
    //que propiedades tiene : numero,titular,saldo
    
    public $topeDescubierto;

    public function __construct($numero, $titular, $saldo, $tope)
    {
        parent::__construct($numero,$titular,$saldo);
        $this->topeDescubierto = $tope;
    }

    public function extraer($monto)
    {
        if($monto >($this->saldo + $this->topeDescubierto)){
            return "Tope de descubierto excedido.";
        }
        //cuando se comparte un método, le digo al metodo que vaya a la clase madre y que me ejecute el metodo que necesito con PARENT::
        //si el if anterior da falso ejecuta el PARENT
        return parent::extraer($monto);

    }
    
 }