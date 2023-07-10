<?php
//aca pongo lo que tiene en común Caja de ahorro y CtaCte
//esta la clase madre

class Cuenta
{
    //que propiedades tiene : numero,titular,saldo
    public $numero;
    public $titular;
    protected $saldo;

    public function __construct($numero, $titular, $saldo)
    {
        $this->numero = $numero;
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($monto)
    {
        $this->saldo = $this->saldo + $monto;
        return "Deposito realizado correctamente";
    }

    public function extraer($monto)
    {
        $this->saldo = $this->saldo - $monto;
        return "Extracción exitosa";
    }
    public function getSaldo(){
        return $this->saldo; 
        }
    
 }